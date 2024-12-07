<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __($pageTitle) }}
        </h2>
    </x-slot>

    <div class="container mx-auto px-4 py-10">
        <div class="grid grid-cols-4 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <article class="bg-white rounded-lg shadow p-6">
                    <h2 class="text-lg font-semibold text-gray-800">{{ ucwords($post->title) }}</h2>
                    <p class="text-gray-600 mt-2">{{ substr($post->content, 0, 100) . '...' }}</p>
                    <a href="#" class="text-blue-500 hover:underline mt-4 block">Leer más</a>
                </article>
            @endforeach
        </div>
    </div>
</x-app-layout>
