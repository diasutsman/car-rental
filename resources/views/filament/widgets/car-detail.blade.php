<x-filament::widget class="self-start w-full">
    @if ($car)
        <x-filament::card class="fixed max-lg:top-1/2 max-lg:-translate-y-1/2 max-lg:left-1/2 max-lg:-translate-x-1/2 max-lg:w-2/3 max-lg:shadow-2xl overflow-hidden">
            <h1>{{ $car->name }}</h1>
            <img src="{{ asset($car->photo? 'storage/' . $car->photo : '') }}" alt="">
            <div class="w-10 h-10 shadow-lg" style="background-color: {{ $car->color }};"></div>
            <p>License Plate: <span>{{ $car->license_plate }}</span></p>
            <p>Year: <span>{{ $car->year }}</span></p>
            <p>Tariff: <span>{{ $car->tariff }}</span></p>

            <a class="block px-3 py-2 bg-blue-400 text-white rounded-lg transition-colors hover:bg-primary-200" href="#">Rent Now</a>

            <button wire:click="closeDialog" class="lg:hidden h-10 w-10 text-center leading-10 bg-black text-white absolute top-0 left-[93%]" style="margin-top: 0;">X</button>
        </x-filament::card>
    @endif
</x-filament::widget>
