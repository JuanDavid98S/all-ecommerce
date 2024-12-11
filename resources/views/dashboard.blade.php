<x-app-layout>
    @section('pageTitle')
        <h2 class="text-body">
            {{ __('Home') }}
        </h2>
    @endsection

    @section('content')
        <div class="container p-3 mt-3">
            <h3 class="text-primary pt-2 mb-2">
                You are now logged in!
            </h3>
            <p class="text-black">
                This application will contain several features of a classic ecommerce website
            </p>
        </div>
    @endsection
</x-app-layout>
