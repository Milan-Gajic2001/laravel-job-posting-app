<x-layout>

    <form action="" method="POST" class="flex flex-col items-center">
        <h1 class="text-4xl mb-6">Post your job ad</h1>
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="flex flex-col gap-1">
            <label for="">Job position:</label>
            <input type="text" name="job_position" class="border-2 border-sky-600 rounded-lg p-1 w-128" required>
        </div>
        <br>
        <div class="flex flex-col">
            <label for="">Location:</label>
            <input type="text" name="location" class="border-2 border-sky-600 rounded-lg p-1 w-128" required>
        </div>
        <br>
        <div class="flex flex-col">
            <label for="">Company:</label>
            <input type="text" name="company" class="border-2 border-sky-600 rounded-lg p-1 w-128" required>
        </div>
        <br>
        <div class="flex flex-col">
            <label for="">Description:</label>
            <textarea type="text" name="description" class="border-2 border-sky-600 rounded-lg h-24 pl-1 pr-1 w-128" required></textarea>
        </div>
        <br>
        <div class="flex flex-col">
            <label for="">Salary:</label>
            <input type="text" name="salary" class="border-2 border-sky-600 rounded-lg p-1 w-128" required>
        </div>
        <br>
        <button type="submit" class="bg-sky-500 w-48 rounded-md text-white p-1">Create</button>
    </form>
</x-layout>
