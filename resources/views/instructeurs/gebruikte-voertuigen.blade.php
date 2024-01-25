<!-- resources/views/instructeurs/gebruikte-voertuigen.blade.php -->

<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-200 leading-tight mb-2">
        Door Instructeur Gebruikte Voertuigen
        </h2>
        <p class="text-gray-600">Naam: {{ $instructeur->voornaam }} {{ $instructeur->tussenvoegsel }} {{ $instructeur->achternaam }}</p>
        <p class="text-gray-600">Datum in dienst: {{ $instructeur->datum_indienst }}</p>
        <p class="text-gray-600">Aantal sterren: {{ $instructeur->aantal_sterren }}</p>            
    </x-slot>
  

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <a href="{{ route('instructeurs.create', $instructeur->id) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Toevoegen Voertuig</a>

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-8">
                <div class="p-6 bg-white border-b border-gray-200">
                    

                    <table>
                        <!-- Voeg hier je tabelkoppen toe, bijvoorbeeld: -->
                        <thead>
                            <tr>
                                <th>TypeVoertuig</th>
                                <th>Type</th>
                                <th>Kenteken</th>
                                <!-- Voeg andere kolommen toe -->
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
