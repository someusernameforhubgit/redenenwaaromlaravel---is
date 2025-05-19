<style>
    .grid {
        display: grid;
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .note {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: space-between;
        padding: 10px;
        border: 1px black solid;
        border-radius: 10px;
        gap: 10px;
        width: 500px;

        > .title {
            font-size: 20px;
        }

        > .date {
            align-self: flex-start;
            color: gray;
        }
    }

    .controls {
        display: flex;
        padding: 0px 20px;
        justify-content: space-between;
        align-items: center;
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nadelen') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('nadelen.store') }}" method="POST">
                        @csrf
                        <label for="text">Nadeel:</label><br>
                        <textarea name="nadeel"></textarea><br><br>
                        <button type="submit" class="bg-blue-500 text-white font-semibold py-2 px-4 rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75">
                        Submit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>