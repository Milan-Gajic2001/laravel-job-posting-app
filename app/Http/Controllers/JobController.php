<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //
    // function return homepage with all job posts from database
    public function homepage()
    {
        $jobs = Job::all();
        return view('homepage', ['jobs' => $jobs]);
    }

    // Function returns page with form for creating Job post
    public function createJobForm()
    {
        return view('createJobForm');
    }


    // Function creates new Job post and insert it in DB
    public function createJobAd(Request $request)
    {

        if (!Auth::check()) {
            return redirect()->route('homepage');
        }

        // validating data from request
        $request->validate([
            'job_position' => "required",
            'company' => "required",
            'location' => "required",
            'description' => "required",
            'salary' => "required",
        ]);

        // After validation creating new job post
        $jobAd = new Job();
        $jobAd->job_position = $request->job_position;
        $jobAd->company = $request->company;
        $jobAd->location = $request->location;
        $jobAd->description = $request->description;
        $jobAd->salary = $request->salary;
        // Logged in user id
        $jobAd->user_id = Auth::user()->id;
        // Inserting in DB
        $jobAd->save();
        return redirect(route('homepage'));
    }

    public function jobDetailsPage($id)
    {
        $job = Job::find($id);
        $author = User::find($job->user_id);
        return view('jobDetails', ['job' => $job, 'author' => $author]);
    }

    public function deleteJob($id)
    {
        $job = Job::findOrFail($id);
        if (Auth::user()->id === $job->user_id) {
            $job->delete();
            return redirect()->route('homepage')->with('success', 'Job post deleted successfully');
        }

        return redirect()->route('homepage');
    }
}
