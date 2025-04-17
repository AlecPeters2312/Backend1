<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Epic Slice Express</title>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet">
    @endif

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>
</head>

<x-guest-layout>

    <div class="flex justify-center items-center space-x-2 text-center py-20 flex-wrap">
        <h1 class="text-white text-6xl font-semibold">Een</h1>
        <h1 class="text-orange-400 text-6xl font-semibold">smaak</h1>
        <h1 class="text-orange-600 text-6xl font-semibold">explosie</h1>
        <h1 class="text-white text-6xl font-semibold">in elk stuk</h1>
        <h1 class="text-orange-600 text-5xl font-semibold">pizza</h1>
        <h1 class="text-white text-6xl font-semibold">!</h1>
    </div>

    <form id="bestel-optie" action="postcode-toevoegen.php" method="POST" class="w-full max-w-lg mx-auto">
        <div class="adres-box flex items-center bg-white p-4 rounded-md shadow-md mb-4">
            <i class="fa-solid fa-location-dot text-orange-600 mr-4"></i>
            <input id="adres" type="text" name="postcode" placeholder="Postcode invoeren"
                   class="w-full p-2 border-2 border-orange-400 rounded-md focus:outline-none focus:ring-2 focus:ring-orange-600">
        </div>

        <div id="bezorg-pose" class="flex items-center bg-white p-4 rounded-md shadow-md mb-4">
            <i class="fa-solid fa-clock text-orange-600 mr-4"></i>
            <select name="bezorg-optie"
                    class="bezorg-optie w-full p-2 border-2 border-orange-400 rounded-md text-orange-600 focus:outline-none focus:ring-2 focus:ring-orange-600">
                <option value="">Bezorgen</option>
                <option value="">Afhalen</option>
                <option value="">Reserveren</option>
            </select>
        </div>

        <input
            class="bevestigen bg-orange-400 text-white w-full p-2 rounded-md cursor-pointer hover:bg-orange-600 focus:outline-none"
            type="submit" value="Bevestig">
    </form>

</x-guest-layout>
</html>
