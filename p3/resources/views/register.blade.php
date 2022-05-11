<x-layout>
    <x-container>
        <div class="bg-white rounded-lg flex flex-col p-12 max-w-2xl mx-auto my-10 shadow">
            <h1 class="text-3xl font-bold mb-6">Registration</h1>
            <form method="POST" action="/users" class="flex flex-col gap-8">
                @csrf

                <div class="flex flex-col gap-2">
                    <label for="name" class="text-gray-600 text-md">
                        Name<span class="text-red-600">*</span>
                    </label>
                    <input id="name" value="{{ old('name') }}" name="name" type="text" autofocus
                        class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow" />
                    @error('name')
                        <p class="text-red-700 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <label for="email" class="text-gray-600 text-md">
                        Email<span class="text-red-600">*</span>
                    </label>
                    <input id="email" value="{{ old('email') }}" name="email" type="email"
                        class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow" />
                    @error('email')
                        <p class="text-red-700 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password" class="text-gray-600 text-md">
                        Password<span class="text-red-600">*</span>
                    </label>
                    <input id="password" value="{{ old('password') }}" name="password" type="password"
                        class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow" />
                    @error('password')
                        <p class="text-red-700 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <label for="password_confirmation" class="text-gray-600 text-md">
                        Confirm Password<span class="text-red-600">*</span>
                    </label>
                    <input id="password_confirmation" value="{{ old('password_confirmation') }}"
                        name="password_confirmation" type="password"
                        class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow" />
                    @error('password_confirmation')
                        <p class="text-red-700 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                    </label>
                    <div class="mt-8 flex items-center justify-end gap-8">
                        <div class="text-sm text-gray-600">
                            <span>Already have an account? <a class="text-blue-600" href="/login">Login</a></span>
                        </div>
                        <button type="submit" class="py-2 px-5 bg-blue-600 text-white rounded shadow">Submit</button>
                    </div>
                </div>
            </form>
        </div>

    </x-container>
</x-layout>
