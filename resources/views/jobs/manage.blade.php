<x-layout>
    <section class=" from-con mx-auto d-flex w-80 flex-column align-items-center border mt-5 mb-5 py-4">

        <h1 class="form-head">
            Manage a Job Gig
        </h1>
        <table class="border-bottom mt-3">
            <tbody>
                @unless($jobs->isEmpty())
                @foreach($jobs as $job)
                <tr class="border-bottom d-flex justify-content-between align-items-center">
                    <td class="tbl-data px-4">
                        <a class="job-name" href="">
                            {{$job->title}}
                        </a>
                    </td>
                    <td
                        class="tbl-data"
                    >
                        <a
                            href="/jobs/{{$job->id}}/edit"
                            class="editlink-manage d-flex align-items-center"
                            ><i
                                class="fa-solid fa-pen-to-square mx-1"
                            ></i>
                            Edit</a
                        >
                    </td>
                    <td
                        class="tbl-data"
                    >
                    <form method="POST" action="/jobs/{{$job->id}}">
                        @csrf
                        @method('DELETE')
                        <button class="d-flex align-items-center bg-transparent text-danger border-0 mx-2">
                            <i class="fa-solid fa-trash mx-1"></i> Delete
                        </button>
                        </form> 
                    </td>
                </tr>
                @endforeach
                @else
                <tr class="border-bottom ">
                    <td class="tbl-data px-4">
                        <a class="job-name" href="show.html">
                            Laravel Senior Developer
                        </a>
                    </td>
                @endunless
            </tbody>
        </table>
        
    </section>
</x-layout>