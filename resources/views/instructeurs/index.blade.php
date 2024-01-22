<!-- resources/views/instructeurs/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Instructeurs
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('message'))
                <div class="bg-green-200 p-4 rounded-md mb-4">
                    {{ session('message') }}
                </div>
            @endif

            <table class="min-w-full bg-white border border-gray-300">
                <thead>
                    <tr>
                        <th class="border-b">Voornaam</th>
                        <th class="border-b">Aantal Sterren</th>
                        <th class="border-b">Ziekte/Verlof</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($instructeurs as $instructeur)
                        <tr>
                            <td class="border-b">{{ $instructeur->voornaam }}</td>
                            <td class="border-b">{{ $instructeur->aantal_sterren }}</td>
                            <td class="border-b">
                                <form action="{{ route('instructeurs.toggleStatus', $instructeur->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="{{ $instructeur->is_actief ? 'text-green-600' : 'text-red-600' }}">
                                        {{ $instructeur->is_actief ? 'Actief' : 'Niet Actief' }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
