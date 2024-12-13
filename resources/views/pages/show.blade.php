<x-app-layout>
    @section('pageTitle')
        <h2 class="text-body">
            CMS Page
        </h2>
    @endsection

    @section('content')
        <div class="container p-3 mt-3">
            <h3 class="text-primary display-4 pt-2 mb-2">{{ ucwords($page->name) }}</h3>
            <p>{!! str($page->content)->markdown()->sanitizeHtml() !!}</p>
        </div>
    @endsection
</x-app-layout>

