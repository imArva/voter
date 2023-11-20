<?php

namespace App\Http\Controllers;

use App\Events\ResultEvent;
use App\Models\User;
use App\Models\Vote;
use App\Models\Voting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PageController extends Controller
{
    public function savelink(Request $request) {

        
        $votingId = Crypt::decryptString($request->id);
        $voting = Voting::find($votingId);

        for ($i = 1; $i <= $request->cid; $i++) {
            // Bentuk kunci yang sesuai dengan file-input
            $fileKey = 'file-input-' . $i;
        
            // Periksa keberadaan file dengan kunci yang sesuai
            if ($request->hasFile($fileKey)) {
                // Dapatkan file
                $file = $request->file($fileKey);

                $image_name = Str::random(9);
                $image_path = '/public/images/';
        
                // Lakukan sesuatu dengan file, misalnya menyimpannya
                $file->storeAs($image_path, $image_name);

                $image_path = '/storage/images/' . $image_name;
                // Mendapatkan data JSON
                $jsonData = json_decode($request->body, true);
    
                // Menambahkan "image" ke setiap item dalam struktur JSON
                $jsonData[$i]['image'] = $image_path;
    
                // Meng-update body dengan struktur JSON yang telah diubah
                $request->body = json_encode($jsonData);
            } else {
                // Mendapatkan data JSON
                $jsonData = json_decode($request->body, true);
                
                
                $jsonData[$i]['image'] = "";

                
                // Meng-update body dengan struktur JSON yang telah diubah
                $request->body = json_encode($jsonData);
            }

        }

        $voting->update([
            'title' => $request->title,
            'description' => $request->description,
            'body' => json_encode($request->body),
            'cid' => $request->cid
        ]);

        
        
        return response()->json(['message' => "done"]);
    }

    public function editurl(Request $request) {

        $votingId = Crypt::decryptString($request->votingId);
        $voting = Voting::find($votingId);


        $voting->update([
            'slug' => $request->newUrl
        ]);
        
        return response()->json(['success' => true]);
    }

    public function dashboard() {

        if (!auth()->user()->isAdmin) {
            return redirect('/');
        }
        
        return view('dashboard');
    }

    public function newlink() {

        if (!auth()->user()->isAdmin) {
            return redirect('/');
        }

        return view('newlink');
    }

    public function result(Voting $voting)
    {
        if (!auth()->user()->isAdmin) {
            return redirect('/');
        }
        $voting = Voting::with('votes')
            ->find($voting->id);

        $votes = $voting->votes()
            ->select('vote', DB::raw('COUNT(*) as vote_count'))
            ->groupBy('vote')
            ->havingRaw('COUNT(*) >= 0')
            ->get();
            
        $bodyy =json_decode($voting->body, true);
        $body = json_decode($bodyy, true);
        $cId = $voting->cid;
        $candidate = [];

        for ($i=1; $i <= $cId; $i++) { 
            
            array_push($candidate, htmlspecialchars_decode(strip_tags($body[$i]['title'])));
        }

        
        
        return view('result',[
            'votingId' => $voting->id,
            'results' => $votes,
            'candidate' => $candidate,
            'cid' => $cId
        ]);
    }

    public function mylinks() {

        if (!auth()->user()->isAdmin) {
            return redirect('/');
        }

        $user = User::with([
            'votings' => function ($query) {
                $query->select('id', 'title', 'slug', 'user_id');
            }
        ])->find(auth()->user()->id);
        $votings = $user->votings;

        return view('mylinks', [
            'votings' => $votings
        ]);
    }

    public function resultlist() {

        if (!auth()->user()->isAdmin) {
            return redirect('/');
        }

        $user = User::with([
            'votings' => function ($query) {
                $query->select('id', 'title', 'slug', 'user_id');
            }
        ])->find(auth()->user()->id);
        $votings = $user->votings;

        return view('resultlist', [
            'votings' => $votings
        ]);
    }

    public function listvote() {

        if (!auth()->user()->isAdmin) {
            $votings =  Voting::all();
            return view('listvote', compact('votings'));
        }

        $user = User::with([
            'votings' => function ($query) {
                $query->select('id', 'title', 'slug', 'user_id');
            }
        ])->find(auth()->user()->id);
        $votings = $user->votings;

        return view('listvote', [
            'votings' => $votings
        ]);
    }

    public function editLink(Voting $voting) {

        if (!auth()->user()->isAdmin) {
            return redirect('/');
        }

        return view('editlink', [
            'voting' => $voting
        ]);

    }

    public function delete(Voting $voting) {

        if (!auth()->user()->isAdmin) {
            return redirect('/');
        }

        $voting->delete();

        Session::flash('deleted', 'Success Deleting Data');
        return redirect()->back();

    }

    public function vote(Voting $voting) {

        $userId = Auth::id();
        
        $user = Vote::where('user_id', $userId)
        ->where('voting_id', $voting->id)
        ->select(DB::raw('SUM(times_vote) as total_times_vote'))
        ->first();

        if ($user['total_times_vote'] >= $voting->max_vote) {
            Session::flash('error', 'You have already voted!');
            return redirect('/');
        }

        return view('vote', [
            'voting' => $voting
        ]);

    }

    public function voteAction(Request $request) {

        $votingId = Crypt::decryptString($request->votingId);
        $voting = Voting::find($votingId);
        
        $userId = Auth::id();
        
        $user = Vote::where('user_id', $userId)
        ->where('voting_id', $voting->id)
        ->select(DB::raw('SUM(times_vote) as total_times_vote'))
        ->first();
        
        if ($user['total_times_vote'] >= $voting->max_vote) {
            Session::flash('error', 'You have already voted!');
            return redirect('/');
        }
        
        
        Vote::create([
            'voting_id' => $votingId,
            'user_id' => $userId,
            'vote' => $request->vote,
            'times_vote' => 1
        ]);
        
        event(new ResultEvent($votingId, ['vote' => $request->vote]));

        return redirect('/');
    }

    public function newlinkAction(Request $request) {

        if (!auth()->user()->isAdmin) {
            return redirect('/');
        }

        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'slug' => 'required|unique:votings,slug'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Voting::create([
            'title' => $request->title,
            'slug' => strtolower($request->slug),
            'user_id' => auth()->user()->id
        ]);

        return redirect('/edit/'.$request->slug);
    }

}
