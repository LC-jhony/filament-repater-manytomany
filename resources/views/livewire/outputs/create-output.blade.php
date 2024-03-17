<x-container>
    <form wire:submit="create">
        {{ $this->form }}
        <div class="mt-4 ">
            <button type="submit"
                class="w-full px-4 py-2 text-base font-medium text-center text-white bg-blue-800 rounded-lg hover:bg-[#FF2D20]/80 focus:ring-4 focus:ring-[#FF2D20]/50 dark:focus:ring-[#FF2D20]/40">
                Registrar salida
            </button>
        </div>
    </form>

    <x-filament-actions::modals />
    <div class="p-2 mt-4 border border-gray-200 rounded-lg dark:border-gray-700">
        @foreach ($products as $product)
            <ul class="max-w-md space-y-1 text-gray-500 list-inside dark:text-gray-400">
                <li class="flex items-center">
                    <svg class="w-3.5 h-3.5 me-2 text-green-500 dark:text-green-400 flex-shrink-0" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path
                            d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                    </svg>{{ $product->name }}
                </li>
                <li liclass="flex items-center">{{ $product->quantity }}</li>
            </ul>
        @endforeach
    </div>
</x-container>
