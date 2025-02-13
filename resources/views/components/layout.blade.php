<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Job Portal</title>
</head>

<body>
    <nav class="flex justify-between items-center pt-8 pb-8 pl-20 pr-20 bg-slate-200 border-b-4 border-b-sky-600">
        <a href="{{ route('homepage') }}">
            <h1 class="text-5xl text-sky-600 italic">MGJobPortal</h1>
        </a>
        <ul class="flex justify-center ">
            <li class="text-lg ml-10 p-0 hover:text-sky-600 transition-all duration-300"><a
                    href="{{ route('homepage') }}">Home</a></li>
            @if (Auth::check())
                <li class="text-lg ml-10 p-0 hover:text-sky-600 transition-all duration-300"><a
                        href="/user/{{ Auth::user()->id }}">{{ Auth::user()->username }}</a>
                </li>
                <li class="text-lg ml-10 p-0 hover:text-sky-600 transition-all duration-300"><a
                        href="/post-job-ad">Create job AD</a></li>
                <li class="text-lg ml-10 p-0 hover:text-sky-600 transition-all duration-300"><a
                        href="/logout">Logout</a>
                </li>
            @else
                <li class="text-lg ml-10 p-0 hover:text-sky-600 transition-all duration-300"><a href="/register">Sign
                        up</a></li>
                <li class="text-lg ml-10 p-0 hover:text-sky-600 transition-all duration-300"><a href="/login">Login</a>
                </li>
            @endif
        </ul>
    </nav>
    @if (session()->has('success'))
        <p class="text-white text-center bg-green-500 pt-1 pb-1 pl-2 pr-2">{{ session('success') }}</p>
    @endif
    <section class="pt-32 pb-32 flex justify-center pl-20 pr-20">
        {{ $slot }}
    </section>
</body>

</html>
