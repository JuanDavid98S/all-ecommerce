<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Logo y descripción -->
            <div class="col-md-4">
                <h5>{{ env('APP_NAME') }}</h5>
                <p>All Ecommerce designed just for your needs!</p>
            </div>

            <!-- Enlaces rápidos -->
            <div class="col-md-4">
                <h5>Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="{{ route('dashboard') }}" class="text-white text-decoration-none">Home</a></li>
                    <li><a href="{{ route('blog.index') }}" class="text-white text-decoration-none">Blog</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Contact Us</a></li>
                    <li><a href="#" class="text-white text-decoration-none">About Us</a></li>
                </ul>
            </div>

            <!-- Información de contacto -->
            <div class="col-md-4">
                <h5>Contact Me</h5>
                <ul class="list-unstyled">
                    <li><i class="bi bi-envelope"></i>juan.david.sanchez.cl@gmail.com</li>
                    <li><i class="bi bi-phone"></i>+57 3225741834</li>
                    <li><i class="bi bi-geo-alt"></i>Carrera 10 # 57 F 31, Manizales, Caldas</li>
                </ul>
            </div>
        </div>

        <hr class="border-light">

        <!-- Sección de copyright -->
        <div class="text-center">
            <p class="mb-0">&copy; 2024 AllEcommerce. All rights reserved.</p>
        </div>
    </div>
</footer>