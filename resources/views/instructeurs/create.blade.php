<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Voertuig Toevoegen
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- Voeg hier je voertuig creatie formulier toe -->
                    <!-- Bijvoorbeeld: -->
                    <form action="{{ route('voertuigen.store') }}" method="post">
                        @csrf
                        <!-- Voeg hier je invoervelden toe -->
                        <!-- Voorbeeld: -->
                        <label for="kenteken">Kenteken:</label>
                        <input type="text" name="kenteken" id="kenteken" required>
                        
                        <!-- Voeg andere invoervelden toe -->

                        <button type="submit">Voertuig Toevoegen</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
