<x-layout>
    <div class="flex flex-col gap-5 bg-slate-100 border-2 border-slate-300 w-200 p-5 rounded-2xl shadow-xl">
        <h1 class="text-5xl">{{ $job->job_position }}</h1>
        <a href="/user/{{ $author->id }}"><span class="text-2xl hover:text-sky-500 transition-all duration-300">by
                {{ $author->username }}</span></a>
        <h3 class="text-2xl">Company: {{ $job->company }}</h3>
        <h3 class="text-2xl">Location: {{ $job->location }}</h3>
        <hr>
        <p class="text-2xl">Job description: <br> {{ $job->description }}</p>
        <hr class="bg-sky-600 h-1">
        <p class="text-xl italic">**If you are interested send your CV to "{{ $author->email }}"</p>
        <p class="text-2xl">Salary: <br> {{ $job->salary }}$</p>
        @if (Auth::check())
            @if (Auth::user()->id === $author->id)
                <form action="{{ route('deleteJob', $job->id) }}" method="POST" class="flex justify-end">
                    @csrf
                    @method('DELETE')
                    <button type="submit"
                        class="text-white bg-red-500 pt-1 pb-1 pl-3 pr-3 rounded-xl hover:bg-red-700 transition-all duration-300">Delete</button>
                </form>
            @endif
        @endif
    </div>

</x-layout>
