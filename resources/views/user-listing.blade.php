<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('views.user_listing.title_user_listing') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <ul>
                        @foreach ($users as $user)
                            <li><b>ID:</b> {{ $user->id }} | <b>Nombre:</b> {{ $user->name }} | <b>Apellidos:</b> {{ $user->surnames }} | <b>Edad:</b> {{ $user->age }} | <b>Email:</b> {{ $user->email }} | <b>Rol:</b> {{ $user->role }}</li>
                            <br>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
