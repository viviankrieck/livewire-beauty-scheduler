<div id=counter class="">
    <h1 class="text-2xl font-bold mb-4">
        Meu contador: {{ $count }}
    </h1>
    <br>

    <input type="text" wire:model="counter">

    <br>

    <button wire:click="increment" class="px-4 py-2 bg-blue-500 text-white rounded">Incrementar +</button>
    <button wire:click="decrement" class="px-4 py-2 bg-red-500 text-white rounded">Decrementar -</button>
</div>
