<x-guest-layout>
    <form class="space-y-6 space-x-6 flex justify-center items-center flex-col" action="{{ route('menu.store') }}"
          method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required>
        <input name="description" placeholder="Description" required>
        <input type="number" name="price" placeholder="Price" step="0.01" required>
        <button type="submit" class="px-4 py-2 bg-orange-400 text-white rounded-lg shadow hover:bg-orange-600">Create
            Product
        </button>
    </form>
</x-guest-layout>
