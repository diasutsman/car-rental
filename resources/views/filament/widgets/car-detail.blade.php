<x-filament::widget class="self-start w-full">
    @if ($car)
        <x-filament::card class="fixed">
            <h1>{{ $car->name }}</h1>
            <img src="{{ asset($car->photo? 'storage/' . $car->photo : '') }}" alt="">
            <div class="w-10 h-10 shadow-lg" style="background-color: {{ $car->color }};"></div>
            <p>License Plate: <span>{{ $car->license_plate }}</span></p>
            <p>Year: <span>{{ $car->year }}</span></p>
            <p>Tariff: <span>{{ $car->tariff }}</span></p>
        </x-filament::card>
    @endif
</x-filament::widget>
