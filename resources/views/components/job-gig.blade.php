@props(['job'])

<div class="col-lg-5">
    <div class="row border p-3">
        <div class="col-sm-4 d-flex justify-content-center align">
            <img style="width: 100%;" src="{{$job->logo ? asset('storage/'.$job->logo) : asset('/image/about-bg.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-sm-8">
                <h3 class="gig-head">
                    <a href="/jobs/{{$job->id}}">{{$job->title}}</a>
                </h3>
                <div class="gig-indust">
                    {{$job->company}}
                </div>
                
               <x-job-tags :tagsCsv="$job->tags"/>
                <div class=" mt-4">
                    <i class="fa-solid fa-location-dot"></i>
                    {{$job->location}}
                </div>
        </div>
        
    </div>
</div>