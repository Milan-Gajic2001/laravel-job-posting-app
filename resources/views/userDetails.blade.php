<x-layout>
    <div class="flex flex-col gap-5 bg-slate-100 border-2 border-slate-300 w-200 p-5 rounded-2xl shadow-xl">
        <h1 class="text-5xl">{{ $user->username }}</h1>
        <h3 class="text-2xl">Email: {{ $user->email }}</h3>
        <hr class="bg-sky-600 h-1">
        <h3 class="text-2xl">Jobs posted:</h3>
        <ul class="flex flex-col gap-1">
            @foreach ($user->jobs as $job)
                <li><a href="/post-job-ad/{{ $job->id }}"
                        class="hover:text-sky-600 transition-all duration-300">{{ $job->job_position }}</a></li>
                <hr>
            @endforeach
        </ul>
    </div>

</x-layout>
