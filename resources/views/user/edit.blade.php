<x-app-layout>
    <div class="container mx-auto px-6 py-12">
        <div class="mx-auto w-1/2">
            <div class="card">

                <div class="card-header">
                    <h3 class="font-bold">Edit User</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('user.update', $user->id) }}" method="POST">

                        @csrf
                        @method('put')

                        <!-- name -->
                        <div class="mt-6">
                            <label for="name" class="label">Name</label>
                            <input type="text" name="name" value="{{ $user->name }}"
                            class="form-control @error('name') ring-1 ring-red-500 @enderror">
                            @error('name')
                                <div class="mt-2 text-red-500 text-sm">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mt-12">
                            <x-button>Update</x-button>
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
