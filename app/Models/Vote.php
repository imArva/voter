<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vote extends Model
{
    use HasFactory;

    protected $guarded = [
        'id'
    ];

    public function voting() : BelongsTo {
        return $this->belongsTo(Voting::class, 'voting_id');
    }
}
