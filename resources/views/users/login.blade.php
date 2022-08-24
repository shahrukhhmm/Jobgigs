<x-layout>
    <section class=" from-con mx-auto d-flex w-80 flex-column align-items-center border mt-5 mb-5 py-4">

        <h1 class="form-head">
            Login
        </h1>
        <p class="form-des">
            Login to your account
        </p>
        <form action="/users/authenticate" method="POST">
            @csrf
            
            <div class="mb-3">
                <label
                    for="email"
                    class="d-inline-block  mb-2"
                    >Email</label
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
                <label for="password" class="inline-block text-lg mb-2"
                    >Password</label
                >
                <input
                    type="password"
                    class="border border-gray rounded p-2 w-100 form-control"
                    name="password"
                    value="{{old('password')}}"

                />
                @error('password')
                <p class="text-danger">{{$message}}</p>
                @enderror

            </div>
            
            <div class="mb-3">
                <button
                type="submit"
                    class="btn btn-dark"
                >
                    Sin in
                </button>
            </div>
            <div class="mb-3">
                <p>
                    Don't have an account?
                    <a href="/register" class="formlink"
                        >Register</a
                    >
                </p>
            </div>
        </form>
        </form>
</section>

</x-layout>