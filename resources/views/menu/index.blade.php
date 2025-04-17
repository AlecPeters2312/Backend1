<x-guest-layout>
    <div class="container mx-auto p-6">
        @if(auth()->check() && auth()->user()->is_admin)

            <div class="mb-6 text-center">
                <a href="{{ route("menu.create") }}"
                   class="px-4 py-2 bg-orange-400 text-white rounded-lg shadow hover:bg-orange-600">Create</a>
            </div>
        @endif
        <div class="container mx-auto p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach($menus as $menu)
                    <div
                        class="text-center bg-gradient-to-b from-orange-500 to-orange-600 text-white p-6 rounded-lg shadow-xl relative">
                        <div class="flex justify-center">
                            <img src="/storage/img/pizza.png" alt="Pizza" class="h-40">
                        </div>
                        <h3 class="text-2xl font-bold mt-4">{{ $menu->name }}</h3>
                        <p class="mt-2 text-sm">{{ $menu->description }}</p>
                        <p class="text-xl font-bold mt-4 bg-red-600 px-3 py-1 rounded-lg inline-block">
                            € {{ $menu->price }}</p>

                        @if(auth()->check() && auth()->user()->is_admin)
                            <div class="py-4 space-x-4">
                                <a href="{{ url('menu/'.$menu->id.'/edit') }}"
                                   class="px-3 py-1 bg-yellow-500 text-white rounded-lg shadow hover:bg-yellow-600">Edit</a>
                                <form action="{{ url('menu/'.$menu->id) }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    {{--in standaard html bestaat geen delete maar laravel weet hierdoor dat het een delete request is--}}
                                    <button type="submit"
                                            class="px-3 py-1 bg-red-500 text-white rounded-lg shadow hover:bg-red-600">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        @endif
                        <a href="{{ route('menu.show', $menu->id) }}">Meer info</a>
                        <div class="text-center mt-4">
                            <button
                                class="px-4 py-2 bg-white text-orange-600 font-bold rounded-lg shadow-md hover:bg-gray-200">
                                Aan winkelwagen toevoegen
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-guest-layout>
