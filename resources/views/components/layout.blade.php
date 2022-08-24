<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEV JOBS</title>

    <link rel="shortcut icon" href="/image/about-bg.jpg" type="image/x-icon">
    <!-- font awesome -->
    <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
    <!-- bootstrap -->
   <link rel="stylesheet" href="{{asset('build/bootstrap.min.css')}}">

   <!-- customcss -->
   <link rel="stylesheet" href="{{asset('build/style.css')}}">
    {{-- allpinejs --}}
   <script src="//unpkg.com/alpinejs" defer></script>
  
</head>
<body>
    {{-- nav --}}
        <nav class="nav-container container-fluid">
            <a class="navlogo" href="/"><img src="" alt=""> DEV JOBS</a>

            <ul>
                @auth
                <li class="navli">
                    <span class="text-light  text-uppercase">
                        Welcome {{auth()->user()->name}}
                    </span>
                </li>
                <li class="navli">
                    <a class="navlink" href="/jobs/manage"><i class="fa-solid fa-gear mx-1"></i>Manage</a>
                </li>
                <li class="navli">
                    <form method="POST" action="/logout">
                    @csrf
                        <button class="btn p-0 m-0 navlink" type="submit">
                            <i class="fa-solid fa-door-closed"></i>
                            Logout
                        </button>
                    </form>
                </li>
                @else
                <li class="navli">
                    <a class="navlink" href="/register"><i class="fa-solid fa-user-plus mx-1"></i>Register</a>
                </li>
                <li class="navli">
                    <a class="navlink" href="/login"><i class="fa-solid fa-arrow-right-to-bracket mx-1"></i>Login</a>
                </li>
                @endauth
            </ul>
        </nav>
        {{-- navend --}}

<section class="jobs">
  {{$slot}}

    {{-- footer --}}
    <div class="post-con">
        <a
        href="/jobs/create"
        class="postbtn"
        >Post Job</a
    >
    </div>
</section>



<footer class="footer">
    <p class="footer-text">Copyright © 2022, All Rights reserved</p>
</footer>
<x-flash-message/>
</body>
</html>