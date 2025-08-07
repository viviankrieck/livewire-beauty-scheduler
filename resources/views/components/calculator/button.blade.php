@php
    $baseClasses =
        'flex-1 text-white text-2xl font-bold py-4 px-6 transition-colors duration-200 border border-gray-500 hover:scale-105 transform active:scale-95 rounded-full';

    $typeClasses = match ($type) {
        'operator' => 'bg-orange-500 hover:bg-orange-400',
        'number' => 'bg-gray-600 hover:bg-gray-500',
        'special' => 'bg-gray-700 hover:bg-gray-600',
        'equals' => 'bg-blue-600 hover:bg-blue-500',
        default => 'bg-gray-600 hover:bg-gray-500',
    };

    $classes = $baseClasses . ' ' . $typeClasses;
@endphp

<button {{ $attributes->merge(['class' => $classes]) }}
    @if ($action) wire:click="{{ $action }}" @endif>
    {{ $slot ?: $value }}
</button>
