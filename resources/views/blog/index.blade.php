<x-app-layout>
    @section('pageTitle')
        <h2 class="text-body">
            {{ ucwords($pageTitle) }}
        </h2>
    @endsection

    @section('content')
        <div class="container p-3 mt-3">
            <h3 class="text-primary pt-2 mb-2">
                Blog Entries
            </h3>
            <div class="container p-2">
                <div class="row">
                    @foreach($posts as $post)
                        <div class="col-md-4 d-flex align-items-stretch mb-4">
                            <div class="card">
                                <img src="{{ asset($post->image) }}" alt="Post Image" class="card-image-top card-img">
                                <div class="card-body">
                                    <h4 class="card-title">{{ ucwords($post->title) }}</h4>
                                    <p class="card-text">{!! str(substr($post->content, 0, 150) . '...')->markdown()->sanitizeHtml() !!}</p>
                                    <a href="#" class="btn btn-primary">See Profile</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>  
            </div>
        </div>
    @endsection

    <style>
        .card-img {
            width: 100%; /* Asegura que ocupe todo el ancho del contenedor */
            height: 200px; /* Define una altura fija */
            object-fit: cover; /* Ajusta la imagen para que cubra el contenedor */
            border-radius: 0.5rem; /* Opcional, para esquinas redondeadas */
        }
    </style>

</x-app-layout>

