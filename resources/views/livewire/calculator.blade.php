{{-- <div class="text-white bg-gray-800 font-bold tracking-wider p-2">
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

</div> --}}
<div
    class="mx-auto overflow-hidden mt-10 shadow-lg mb-2 bg-gray-900 border-4 rounded-lg md:w-3/6 sm:w-4/6 border-gray-400">
    <div>
        <div class="p-5 text-white text-center text-3xl bg-gray-900">
            Calculadora Livewire da Vivi | <span class="text-pink-300">Calcu</span>lator
        </div>
        <div class="pt-5 p-5 pb-0 text-white text-right text-3xl bg-gray-800">
            {{ $math }}
        </div>
        <div class="p-5 text-white text-right text-3xl bg-gray-800">
            =
            <span class="text-blue-300">{{ $result }}</span>
        </div>
        <div class="py-5">
            <div class="grid grid-cols-4 gap-1 bg-gray-900">
                <!-- Linha 1 -->
                <x-calculator.button type="special" action="clearMath">C</x-calculator.button>
                <x-calculator.button type="special" action="clearEntry">CE</x-calculator.button>
                <x-calculator.button type="special" action="operation('%')">%</x-calculator.button>
                <x-calculator.button type="operator" action="operation('/')">÷</x-calculator.button>

                <!-- Linha 2 -->
                <x-calculator.button type="number" action="addMath(7)" value="7">7</x-calculator.button>
                <x-calculator.button type="number" action="addMath(8)" value="8">8</x-calculator.button>
                <x-calculator.button type="number" action="addMath(9)" value="9">9</x-calculator.button>
                <x-calculator.button type="operator" action="operation('x')">×</x-calculator.button>

                <!-- Linha 3 -->
                <x-calculator.button type="number" action="addMath(4)" value="4">4</x-calculator.button>
                <x-calculator.button type="number" action="addMath(5)" value="5">5</x-calculator.button>
                <x-calculator.button type="number" action="addMath(6)" value="6">6</x-calculator.button>
                <x-calculator.button type="operator" action="operation('-')">-</x-calculator.button>

                <!-- Linha 4 -->
                <x-calculator.button type="number" action="addMath(1)" value="1">1</x-calculator.button>
                <x-calculator.button type="number" action="addMath(2)" value="2">2</x-calculator.button>
                <x-calculator.button type="number" action="addMath(3)" value="3">3</x-calculator.button>
                <x-calculator.button type="operator" action="operation('+')">+</x-calculator.button>

                <!-- Linha 5 -->
                <x-calculator.button type="number" action="addMath(0)" value="0"
                    class="col-span-2">0</x-calculator.button>
                <x-calculator.button type="number" action="addMath('.')">.</x-calculator.button>
                <x-calculator.button type="equals" action="operation('=')">=</x-calculator.button>
            </div>
        </div>
    </div>
</div>
