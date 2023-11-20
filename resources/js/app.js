import './bootstrap';

import 'flowbite';

if (typeof votingId != 'undefined') {
    const channel = Echo.private(`private.result.${votingId}`);

    channel.subscribed(()=>{
        console.log('subscribed!');
    }).listen('.result', (event) => {
        console.log(event);
        if (typeof series != 'undefined') {

            let voteValue = event['result']['vote'] - 1; 
            if (series[voteValue] !== undefined) {
              series[voteValue] += 1;
            }

            updateSeries(series);
        }
    })
}


function updateSeries(newSeries) {
    chart.updateSeries(series);
}