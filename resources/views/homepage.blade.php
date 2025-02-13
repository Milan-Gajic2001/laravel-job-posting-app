<x-layout>
    <div class="grid grid-cols-3 gap-10">
        @foreach ($jobs as $job)
            <div class="border border-slate-300 p-10 rounded-2xl bg-slate-100 shadow-2xl">
                <h1 class="text-3xl mb-2">{{ $job->job_position }}</h1>
                <div class="mb-5">
                    <span class="text-sm bg-blue-600 pt-1 pb-1 pl-2 pr-2 text-white rounded-lg">{{ $job->company }} |
                        {{ $job->location }}</span>
                </div>
                <p class="mb-12 text-xl">{{ Str::limit($job->description, 130, '...(read more)') }}</p>
                <a href="/post-job-ad/{{ $job->id }}"><button
                        class="bg-sky-800 text-white p-2 rounded-lg hover:bg-sky-950 transition-all duration-300">See
                        details</button></a>
            </div>
        @endforeach
    </div>
</x-layout>
