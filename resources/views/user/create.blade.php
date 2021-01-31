<x-app-layout>
    <div class="container mx-auto px-6 py-12">
        <div class="mx-auto w-1/2">
            <div class="card">

                <div class="card-header">
                    <h3 class="font-bold">Create User</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="POST">

                        @csrf

                        <!-- name -->
                        <div class="mt-6">
                            <label for="name" class="label">Name</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                class="form-control @error('name') ring-1 ring-red-500 @enderror">
                            @error('name')
                                <div class="mt-2 text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mt-6">
                            <label for="email" class="label">Email</label>
                            <input type="text" name="email" value="{{ old('email') }}"
                                class="form-control @error('email') ring-1 ring-red-500 @enderror">
                            @error('email')
                                <div class="mt-2 text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mt-6">
                            <label for="password" class="lable">Password</label>
                            <input type="password" name="password" value="{{ old('password') }}"
                                class="form-control @error('password') ring-1 ring-red-500 @enderror">
                            @error('password')
                                <div class="mt-2 text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-6">
                            <label for="confirm_password" class="lable">Confirm Password</label>
                            <input type="password" name="confirm_password" value="{{ old('confirm_password') }}"
                                class="form-control @error('confirm_password') ring-1 ring-red-500 @enderror">
                            @error('confirm_password')
                                <div class="mt-2 text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-12">
                            <x-button>Create</x-button>
                            <a href="{{ route('user.index') }}" class="btn btn-secondary ml-4">
                                Cancel
                            </a>
                        </div>

                    </form>
                </div>

            </div>
        </div>

    </div>
</x-app-layout>
