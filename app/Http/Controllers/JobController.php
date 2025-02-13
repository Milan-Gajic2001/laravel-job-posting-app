<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    //
    public function homepage()
    {
        $jobs = Job::all();
        return view('homepage', ['jobs' => $jobs]);
    }

    public function createJobForm()
    {
        return view('createJobForm');
    }

    public function createJobAd(Request $request)
    {

        $request->validate([
            'job_position' => "required",
            'company' => "required",
            'location' => "required",
            'description' => "required",
            'salary' => "required",
        ]);

        $jobAd = new Job();
        $jobAd->job_position = $request->job_position;
        $jobAd->company = $request->company;
        $jobAd->location = $request->location;
        $jobAd->description = $request->description;
        $jobAd->salary = $request->salary;
        $jobAd->user_id = Auth::user()->id;
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
        $job->delete();

        return redirect()->route('homepage')->with('success', 'Job post deleted successfully');
    }
}
