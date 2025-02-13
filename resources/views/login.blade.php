<x-layout>
    <form action="" method="POST" class="flex flex-col items-center">
        <h1 class="text-4xl mb-6">Login</h1>
        @csrf
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="bg-red-500 text-white pt-1 pb-1 pl-2 pr-2 rounded-lg">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="flex flex-col gap-1">
            <label for="">Email:</label>
            <input type="email" name="email" class="border-2 border-sky-600 rounded-lg p-1 w-128" required
                autocomplete="off">
        </div>
        <br>
        <div class="flex flex-col">
            <label for="">Password:</label>
            <input type="password" name="password" class="border-2 border-sky-600 rounded-lg p-1 w-128" required
                autocomplete="off">
        </div>
        <br>
        <button type="submit"
            class="bg-sky-500 w-48 rounded-md text-white p-1 hover:bg-sky-700 transition-all duration-300">Login</button>
    </form>
</x-layout>
