<x-layout>
@include('partials._about')
@include('partials._search')

    <div class="container-fluid mt-5">
        <h1 class="jobs-head">JOBS GIGS</h1>
        <div class="row gap-2 d-flex justify-content-center">
@unless (count($jobs) ==0)


@foreach ($jobs as $job)
<x-job-gig :job="$job"/>
@endforeach

    
@else
<p>No listing found</p>

    
@endunless

<div class="mt-3 p-4 ">
    {{ $jobs->links() }}
</div>

</x-layout>
