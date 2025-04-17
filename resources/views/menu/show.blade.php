<x-guest-layout>
    <div class="container mx-auto p-6">
        <div class="text-center mb-6">
            <h1 class="text-3xl font-bold text-white">Details</h1>
        </div>

        <div
            class="flex flex-col justify-center bg-gradient-to-b from-orange-500 to-orange-600 text-white p-6 rounded-lg shadow-xl relative">
            <div class="flex justify-center mb-6">
                <img src="/storage/img/pizza.png" alt="Product Image" class="h-40">
            </div>
            <div class="text-center">
                <h2 class="text-3xl font-bold mt-4">{{ $menu->name }}</h2>
                <p class="mt-2 text-sm">{{ $menu->description }}</p>
                <p class="text-xl font-bold mt-4 bg-red-600 px-3 py-1 rounded-lg inline-block">
                    € {{ $menu->price }}
                </p>

                @if(auth()->check() && auth()->user()->is_admin)
                    <div class="mt-6">
                        <a href="{{ url('menu/'.$menu->id.'/edit') }}"
                           class="px-4 py-2 bg-yellow-500 text-white rounded-lg shadow hover:bg-yellow-600">
                            Edit
                        </a>
                        <form action="{{ url('menu/'.$menu->id) }}" method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-4 py-2 bg-red-500 text-white rounded-lg shadow hover:bg-red-600">
                                Delete
                            </button>
                        </form>
                    </div>
            </div>
            @endif

            <div class="text-center mt-4">
                <button
                    class="px-4 py-2 bg-white text-orange-600 font-bold rounded-lg shadow-md hover:bg-gray-200">
                    Aan winkelwagen toevoegen
                </button>
            </div>
        </div>
    </div>
</x-guest-layout>
