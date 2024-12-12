<x-app-layout>
    @section('pageTitle')
        <h2 class="text-body">
            Blog Posts
        </h2>
    @endsection

    @section('content')
        <div class="container p-3 mt-3">
            <h3 class="text-primary display-4 pt-2 mb-2">{{ ucwords($post->title) }}</h3>
            <span class="badge bg-primary">{{ ucwords($category->name) }}</span>
            <span class="badge bg-dark">Author: {{ ucwords($post->user->name) }}, Posted on: {{ $date }}</span>
            <div class="d-flex justify-content-center pt-3 pb-3 card-img">
                <img src="{{ asset($post->image) }}" class="rounded img-fluid" style="width: 1000px; height: 400px">
            </div>
            <p>{!! str($post->content)->markdown()->sanitizeHtml() !!}</p>
        </div>
    @endsection
</x-app-layout>

