<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <x-guest-layout>
        <h1 class="font-bold text-xl mb-4">Liste des articles</h1>
        <ul class="grid sm:grid-cols-2 lg:grid-cols-3 2xl:grid-cols-4 gap-8">
            @foreach ($tweets as $tweet)
            <li>
                <x-article-card :tweet="$tweet" />
            </li>
        @endforeach
        </ul>

        <div class="mt-8">
            {{ $tweets->links() }}
        </div>
    </x-guest-layout>
</body>
</html>
