<x-layout>
    <x-container>
        <div class="bg-white rounded-lg flex flex-col p-12 max-w-2xl mx-auto my-10 shadow">
            <h1 class="text-3xl font-bold mb-6">Login</h1>
            <form method="POST" action="/authenticate" class="flex flex-col gap-8">
                <div class="flex flex-col gap-2">
                    <label id="email_label" class="text-gray-600 text-md">
                        Email<span class="text-red-600">*</span>
                    </label>
                    <input value="{{ old('email') }}" name="email" type="email" aria-labelledby="email_label" autofocus
                        class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow" />
                    @error('name')
                        <p class="text-red-700 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <label id="password_label" class="text-gray-600 text-md">
                        Password<span class="text-red-600">*</span>
                    </label>
                    <input value="{{ old('password') }}" name="email" type="password" aria-labelledby="password_label"
                        class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow" />
                    @error('email')
                        <p class="text-red-700 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mt-8 flex items-center justify-end gap-8">
                    <div class="text-sm text-gray-600">
                        <span>Don't have an account? <a class="text-blue-600" href="/register">Register</a></span>
                    </div>
                    <button type="submit" class="py-2 px-5 bg-blue-600 text-white rounded shadow">Login</button>
                </div>
            </form>
    </x-container>
</x-layout>
