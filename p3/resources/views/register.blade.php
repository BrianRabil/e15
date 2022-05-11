<x-layout>
    <x-container>
        <div class="bg-white rounded-lg flex flex-col p-12 max-w-2xl mx-auto my-10 shadow">
            <h1 class="text-3xl font-bold mb-6">Registration</h1>
            <form method="POST" action="/users" class="flex flex-col gap-8">
                @csrf

                <div class="flex flex-col gap-2">
                    <label id="name_label" class="text-gray-600 text-md">
                        Name<span class="text-red-600">*</span>
                    </label>
                    <input value="{{ old('name') }}" name="name" type="text" aria-labelledby="name_label" autofocuphp artisan make:seeder UsersTableSeeders
                        class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow" />
                    @error('name')
                        <p class="text-red-700 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <label id="email_label" class="text-gray-600 text-md">
                        Email<span class="text-red-600">*</span>
                    </label>
                    <input value="{{ old('email') }}" name="email" type="email" aria-labelledby="email_label"
                        class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow" />
                    @error('email')
                        <p class="text-red-700 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <label class="text-gray-600 text-md">
                        Password<span class="text-red-600">*</span>
                    </label>
                    <input value="{{ old('password') }}" name="password" type="password"
                        class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow" />
                    @error('password')
                        <p class="text-red-700 text-xs">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="flex flex-col gap-2">
                    <label id="confirm_password_label" class="text-gray-600 text-md">
                        Confirm Password<span class="text-red-600">*</span>
                    </label>
                    <input value="{{ old('password_confirm') }}" name="password_confirm"
                        aria-labelledby="confirm_password_label" type="password"
                        class="border border-gray-300 rounded text-gray-800 px-3 py-2 bg-white shadow" />
                    @error('password_confirm')
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
