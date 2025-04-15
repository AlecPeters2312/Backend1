<x-guest-layout>
    <form action="{{ route('menu.update', $menu->id) }}" method="post"
          class="space-y-6 space-x-6 flex justify-center items-center flex-col">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $menu->name }}">
        <input type="text" name="description" value="{{ $menu->description }}">
        <input type="text" name="price" value="{{ $menu->price }}">
        <button type="submit" class="px-4 py-2 bg-orange-400 text-white rounded-lg shadow hover:bg-orange-600">Update
        </button>
    </form>
</x-guest-layout>
