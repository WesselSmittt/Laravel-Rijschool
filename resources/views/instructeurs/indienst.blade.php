<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('In dienst') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                <table class="min-w-full bg-white dark:bg-gray-800">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs leading-4 text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                Voornaam
                            </th>
                            <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs leading-4 text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                Tussenvoegsel
                            </th>
                            <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs leading-4 text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                Achternaam
                            </th>
                            <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs leading-4 text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                Mobiel
                            </th>
                            <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs leading-4 text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                Datum in dienst
                            </th>
                            <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs leading-4 text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                Aantal sterren
                            </th>
                            <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs leading-4 text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                Voertuigen
                            </th>
                            <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs leading-4 text-gray-600 dark:text-gray-400 uppercase tracking-wider">
                                Ziekte/verlof
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($instructeurs as $instructeur)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                    {{ $instructeur->voornaam }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                    {{ $instructeur->tussenvoegsel }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                    {{ $instructeur->achternaam }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                    {{ $instructeur->mobiel }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                    {{ $instructeur->datum_in_dienst }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                    {{ $instructeur->aantal_sterren }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                    {{ $instructeur->voertuigen }}
                                </td>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                    {{ $instructeur->ziekte_verlof }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>