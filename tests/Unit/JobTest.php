<?php

use App\Models\Employer;
use App\Models\Job;

it('example', function () {
    // Testing is done in 3A's
    //Arrangement, Act and Assert
    //Arrangement
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    //Act and Assert
    expect($job->employer()->is($employer))->toBeTrue;

});
