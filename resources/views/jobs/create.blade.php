<x-layout>
    <section class=" from-con mx-auto d-flex w-90 flex-column align-items-center border mt-5 mb-5 py-4">

        <h1 class="form-head">
            Create a job Gig
        </h1>
        <p class="form-des">
            post a gig to find a developer
        </p>
        <form method="POST" action="/jobs" enctype="multipart/form-data">
            @csrf
            <div class="mb-3"3
                <label
                    for="company"
                    class="d-inline-block  mb-2"
                    >Company Name</label
                >
                <input
                    type="text"
                    class="border border-gray rounded p-2 w-100 form-control"
                    name="company"
                    value="{{old('company')}}"
                />
                @error('company')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="title" class="inline-block text-lg mb-2"
                    >Job Title</label
                >
                <input
                    type="text"
                    class="border border-gray rounded p-2 w-100 form-control"
                    name="title"
                    placeholder="Example: Senior Laravel Developer"
                    value="{{old('title')}}"
                />
                @error('title')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label
                    for="location"
                    class=""
                    >Job Location</label
                >
                <input
                    type="text"
                    class="border border-gray rounded p-2 w-100 form-control"
                    name="location"
                    placeholder="Example: Remote, Boston MA, etc"
                    value="{{old('location')}}"
                />
                @error('location')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="inline-block text-lg mb-2"
                    >Contact Email</label
                >
                <input
                    type="email"
                    class="border border-gray rounded p-2 w-100 form-control"
                    name="email"
                    value="{{old('email')}}"
                />
                @error('email')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label
                    for="website"
                    class="inline-block text-lg mb-2"
                >
                    Website/Application URL
                </label>
                <input
                    type="text"
                    class="border border-gray rounded p-2 w-100 form-control"
                    name="website"
                    value="{{old('website')}}"
                />
                @error('website')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Comma Separated)
                </label>
                <input
                    type="text"
                    class="border border-gray rounded p-2 w-100 form-control"
                    name="tags"
                    placeholder="Example: Laravel, Backend, Postgres, etc"
                    value="{{old('tags')}}"
                />
                @error('tags')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="logo" class="inline-block text-lg mb-2">
                    Company Logo
                </label>
                <input
                    type="file"
                    class="border border-gray rounded p-2 w-100 form-control"
                    name="logo"
                />
                @error('logo')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label
                    for="description"
                    class="inline-block text-lg mb-2"
                >
                    Job Description
                </label>
                <textarea
                    class="border border-gray rounded p-2 w-100 form-control"
                    name="description"
                    rows="5"
                    placeholder="Include tasks, requirements, salary, etc"
                >{{old('description')}}</textarea>
                @error('description')
                <p class="text-danger">{{$message}}</p>
                @enderror
            </div>

            <div class="mb-3">
                <button
                    class="btn btn-dark"
                >
                    Create Gig
                </button>

                <a href="/" class="btn "> Back </a>
            </div>
        </form>
</section>


</x-layout>