<div id='counter'>

    <input type="text" wire:model.lazy="message" placeholder="Escreva aqui..." class="border p-2 rounded" />

    <br>
    <div>
        <h2 class="text-2xl font-bold mt-4">Mensagem:</h2>
        <p class="text-lg">{{ $message }}</p>
    </div>
</div>
