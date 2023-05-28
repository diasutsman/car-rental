<x-filament::widget class="flex flex-col gap-4">
    @foreach ($cars as $car)
    <x-filament::card class="break-words cursor-pointer" wire:click="$emit('showCar', '{{ $car->slug }}')">
        <h1>{{ $car->name }}</h1>
        <img src="{{ asset($car->photo? 'storage/' . $car->photo : '') }}" alt="">
        <div class="w-10 h-10 shadow-lg" style="background-color: {{ $car->color }};"></div>
        <p>License Plate: <span>{{ $car->license_plate }}</span></p>
        <p>Year: <span>{{ $car->year }}</span></p>
        <p>Tariff: <span>{{ $car->tariff }}</span></p>
    </x-filament::card>
    @endforeach
</x-filament::widget>
