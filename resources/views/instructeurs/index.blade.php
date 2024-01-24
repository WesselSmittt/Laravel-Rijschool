<!-- resources/views/instructeurs/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            Instructeurs in dienst
        </h2>
        <p class="text-gray-600 mb-4">
                Aantal instructeurs in dienst: {{ $aantalActieveInstructeurs }}
            </p>
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
            <th class="border-b">Tussenvoegsel</th>
            <th class="border-b">Achternaam</th>
            <th class="border-b">Mobiel</th>
            <th class="border-b">Datum in Dienst</th>
            <th class="border-b">Aantal Sterren</th>
            <th class="border-b">Voertuig</th>
            <th class="border-b">Ziekte/Verlof</th>
        </tr>
    </thead>
    <tbody>
        @foreach($instructeurs as $instructeur)
            <tr>
                <td class="border-b">{{ $instructeur->voornaam }}</td>
                <td class="border-b">{{ $instructeur->tussenvoegsel }}</td>
                <td class="border-b">{{ $instructeur->achternaam }}</td>
                <td class="border-b">{{ $instructeur->mobiel }}</td>
                <td class="border-b">{{ $instructeur->datum_in_dienst }}</td>
                <td class="border-b">{{ $instructeur->aantal_sterren }}</td>
                <td class="border-b"><a href="{{ route('instructeurs.gebruikte-voertuigen', $instructeur->id) }}" class="text-blue-500 hover:text-blue-700">🚙</a></td>                <td class="border-b">
                    <form action="{{ route('instructeurs.toggleStatus', $instructeur->id) }}" method="post">
                        @csrf
                        <button type="submit" class="{{ $instructeur->is_actief ? 'text-green-600' : 'text-red-600' }}">
                            {{ $instructeur->is_actief ? '👍' : '🩹' }}
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
