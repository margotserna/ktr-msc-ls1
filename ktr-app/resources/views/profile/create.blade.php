<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('profile.store') }}">
                            @csrf

                            <div class="form-group">
                            <label for="name">Name</label>
                                <input id="name" name="name" type="string" class="form-control @error('name') is-invalid @else is-valid @enderror" required>
                            </div>

                            <div class="form-group">
                                <label for="company">Company</label>
                                <input id="company" name="company" type="string" class="form-control @error('company') is-invalid @else is-valid @enderror">
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <textarea id="email" name="email" type="email" class="form-control @error('email') is-invalid @else is-valid @enderror"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input id="phone" name="phone" type="phone" class="form-control @error('phone') is-invalid @else is-valid @enderror">
                            </div>

                            <button type="submit" class="btn btn-primary">
                            Submit
                            </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
