<x-layout>


<div class="row mt-3">
    <div class="col-12">
        <a href="/" class="backbtn"><i class="fa-solid fa-arrow-left mx-2 fs-6"></i>Back</a>
    </div>
</div>

<section class=" from-con mx-auto d-flex w-90 flex-column align-items-center border mt-5 mb-5 p-md-5 py-sm-3">
    <div class="job-detail d-flex justify-content-center align-items-center flex-column border-bottom">
        <img src="{{$job->logo ? asset('storage/'.$job->logo) : asset('/image/about-bg.jpg')}}" class="img-fluid w-25 mb-3"  alt="">

        <h1 class="form-head">
            {{$job->title}}
        </h1>
        <p class="form-des">
            {{$job->company}}
        </p>
        

        <x-job-tags :tagsCsv="$job->tags"/>


            
        <div class=" mt-4 ">
            <i class="fa-solid fa-location-dot"></i>
            {{$job->location}}
        </div>
    </div>
    
   
    <div class=" fs-3 mt-4 fw-bold">
        Job Desciption
    </div>
    <div class="job-des p-4 text-center">
        {{$job->description}}
    </div>

    <a
        href="mailto:{{$job->email}}"
        class="contact-emp-btn"
        ><i class="fa-solid fa-envelope mx-2"></i>
        Contact Employer</a>


    <a
        href="{{$job->website}}"
        target="_blank"
        class="website-btn"
        ><i class="fa-solid fa-globe mx-2"></i>
        Website</a>

</section>

{{-- <div class="d-flex justify-content-center align-items-center mt-4 p-4">
    <a class=" btn btn-primary" href="/jobs/{{$job->id}}/edit"><i class="fa-solid fa-pencil me-2"></i>Edit</a>

    <form method="POST" action="/jobs/{{$job->id}}">
    @csrf
    @method('DELETE')
    <button class=" btn btn-danger mx-2">
        <i class="fa-solid fa-trash"></i> Delete
    </button>
    </form>
</div> --}}
</x-layout>
