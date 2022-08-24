<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use Illuminate\Contracts\Session\Session;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class jobController extends Controller
{
    // show all gigs
    public function index()
    {
        return view('jobs.index', [
            'jobs'=> Job::latest()->filter(request(['tag','search']))->paginate(6)
        ]);
    }
    
    // single gig show
    public function show(Job $job)
    {
        return view('jobs.show', [
            'job' => $job
        ]);   
    }
    
    // create form
    
    public function create(){
        return view('jobs.create');
    }

    // store form
    public function store(Request $request){
        $formFields = $request->validate([
        'title' => 'required',
         'company' => 'required',
         'location' => 'required',
         'website' => 'required',
         'email'=>['required','email'],
         'tags' =>'required',
         'description'=>'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo']=$request->file('logo')->store('logos','public');
        }
        $formFields['user_id'] = auth()->id();

        Job::create($formFields);

        return redirect('/')->with('message','Job gigs created');
    }

     // Show Edit Form
     public function edit(Job $job) {
        return view('jobs.edit', ['job' => $job]);
    }
     // update data form
     public function update(Request $request, Job $job){
       
        // make sure klogged in user is owner
        if($job->user_id != auth()->id()){
            abort(403,'Unathorized User');
        }

        $formField = $request->validate([
        'title' => 'required',
         'company' => 'required',
         'location' => 'required',
         'website' => 'required',
         'email'=>['required','email'],
         'tags' =>'required',
         'description'=>'required'
        ]);
        

        if($request->hasFile('logo')){
            $formField['logo']=$request->file('logo')->store('logos','public');
        }
       
       

        $job->update($formField);

        return back()->with('message','Job gigs update successfully');
    }


    // delete gig
    public function destroy(Job $job){
        // make sure klogged in user is owner
        if($job->user_id != auth()->id()){
            abort(403,'Unathorized User');
        }

        $job->delete();

        return redirect('/')->with('message','Job gigs delete succesfully');
    }

    // manage gig
    public function manage(){
        return view('jobs.manage',['jobs'=>auth()->user()->jobs()->get()]);
    }
}
