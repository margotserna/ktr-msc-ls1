<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Business cards library') }}
        </h2>
        <button class="btn"><a href="{{ route('card.create')}}">+ Add a new card</a></button>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="container">
                      <table class="table table-striped">

                        <thead>
                            <tr>
                              <td>Name</td>
                              <td>Company</td>
                              <td>Email</td>
                              <td>Phone</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($cards as $card)
                            <tr>
                                <td>{{$card->name}}</td>
                                <td>{{$card->company}}</td>
                                <td>{{$card->email}}</td>
                                <td>{{$card->phone}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>