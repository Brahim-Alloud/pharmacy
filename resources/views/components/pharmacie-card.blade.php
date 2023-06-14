@props([
    'imageSrc',
    'name',
    'address',
    'id'
])



<div class="group relative">
    <div
        class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
        <img src="{{ $imageSrc }}"
            alt="Front of men&#039;s Basic Tee in black."
            class="h-full w-full object-cover object-center lg:h-full lg:w-full">
    </div>
    <div class="mt-4 flex justify-between">
        <div>
            <h3 class="text-sm text-gray-700 mb-2">
                <a href="#">
                    {{ $name }}
                </a>
            </h3>
            <p class="mt-1 text-sm text-gray-500 mb-5">{{ $address }}</p>
            <a href="{{ route('pharmacie.details', $id) }}" class="py-2 px-4 bg-blue-600 mt-4 rounded-md text-white">Affiche plus..</a>
        </div>
    </div>
</div>