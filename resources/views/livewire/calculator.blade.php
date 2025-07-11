<div class="text-white bg-gray-800 font-bold tracking-wider p-2">
    Livewire Calculator Component

    <div>
        <div class="w-50 bg-pink-300 rounded-md border-2 border-pink-500 m-5">
            <div class="grid grid-cols-1 gap-1 justify-items-center">
                Continha da gabi:
                <div class="col-span-2"> {{ $number }}</div>
                <div class="col-span-2"> {{ $number2 }}</div>
                <div class="col-span-2 border-b-2 w-10"> </div>
                <div class="col-span-2"> {{ $total }}</div>
            </div>

        </div>
        <input type="text" wire:model.lazy="number" class="bg-gray-700 text-white p-2 rounded-md m-2">
        -<input type="text" wire:model.lazy="number2" class="bg-gray-700 text-white p-2 rounded-md m-2">
        <button wire:click="increment"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">+</button>
        <button wire:click="decrement"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">-</button>
        <p>total: {{ $total }}</p>
    </div>

</div>
