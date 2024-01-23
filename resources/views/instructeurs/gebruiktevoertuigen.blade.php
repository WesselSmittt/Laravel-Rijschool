<!-- resources/views/gebruiktevoertuigen.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight">
            Gebruikte Voertuigen
        </h2>
        <a href="{{ route('voertuigen.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded mt-2">
            Toevoegen Voertuig
        </a>
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
                        <th class="border-b">TypeVoertuig</th>
                        <th class="border-b">Type</th>
                        <th class="border-b">Kenteken</th>
                        <th class="border-b">Bouwjaar</th>
                        <th class="border-b">Brandstof</th>
                        <th class="border-b">Rijbewijscategorie</th>
                        <th class="border-b">Wijzigen</th>
                        <th class="border-b">Verwijderen</th>
                        <th class="border-b">Toegewezen</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- Loop through your data to populate the table --}}
                    @foreach($voertuigen as $voertuig)
                        <tr>
                            <td class="border-b">{{ $voertuig->typeVoertuig->type_voertuig }}</td>
                            <td class="border-b">{{ $voertuig->type }}</td>
                            <td class="border-b">{{ $voertuig->kenteken }}</td>
                            <td class="border-b">{{ $voertuig->bouwjaar }}</td>
                            <td class="border-b">{{ $voertuig->brandstof }}</td>
                            <td class="border-b">{{ $voertuig->typeVoertuig->rijbewijscategorie }}</td>
                            <td class="border-b">
                                <a href="{{ route('voertuigen.edit', $voertuig->id) }}" class="text-blue-600">Wijzigen</a>
                            </td>
                            <td class="border-b">
                                {{-- Form for deleting a voertuig --}}
                                <form action="{{ route('voertuigen.destroy', $voertuig->id) }}" method="post" onsubmit="return confirm('Weet je zeker dat je dit voertuig wilt verwijderen?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600">Verwijderen</button>
                                </form>
                            </td>
                            <td class="border-b">
                                {{-- Check if voertuig is toegewezen --}}
                                @if($voertuig->isToegewezen())
                                    Toegewezen
                                @else
                                    Niet toegewezen
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
