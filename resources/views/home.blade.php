@extends('layouts.app')

@section('title', 'Listado de Pedidos')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Bienvenido a mi sistema de ventas para restaurantes</h1>
<hr>
    <h3>Integrantes :</h3>
    <h5>Jonathan Diaz</h5>
    <h5>Alexis Valencia</h5>

    <!-- Contenedor de imagen y chispa -->
    <div class="image-container">
        <img id="mainImage" src="{{ asset('images/pokebola.jpg') }}" alt="Pokebola" class="img-fluid image-transition" onclick="changeImage()">
        <div class="sparkles" id="sparkles"></div>
    </div>
</div>

<script>
    function changeImage() {
        var image = document.getElementById('mainImage');
        var sparkles = document.getElementById('sparkles');

        // Activar el efecto de chispa
        sparkles.classList.add('active');

        // Inicia la opacidad en 0 para el efecto de desvanecimiento
        image.style.opacity = 0;

        // Esperar un momento para cambiar la imagen después de que la opacidad haya bajado
        setTimeout(function() {
            if (image.src.includes('pokebola.jpg')) {
                image.src = "{{ asset('images/pikachu.jpeg') }}";
            } else {
                image.src = "{{ asset('images/pokebola.jpg') }}";
            }
            image.style.opacity = 1; // Restaura la opacidad a 1 para mostrar la nueva imagen
            sparkles.classList.remove('active'); // Quitar la clase de chispa después del cambio
        }, 500); // 500ms para que la transición sea suave
    }
</script>

<style>
    .image-container {
        position: relative;
        display: inline-block;
    }

    .image-transition {
        transition: opacity 0.5s ease-in-out; /* Transición suave de 0.5 segundos */
    }

    /* Estilo para el efecto de chispa */
    .sparkles {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        pointer-events: none;
        opacity: 0;
        transition: opacity 0.3s;
        z-index: 1; /* Asegurarse de que esté por encima de la imagen */
    }

    .sparkles.active {
        opacity: 1; /* Hace visible el efecto */
    }

    /* Chispas individuales */
    .sparkles::before,
    .sparkles::after {
        content: '';
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 215, 0, 0.9); /* Color de chispa (amarillo) */
        width: 10px; /* Tamaño de las chispas */
        height: 10px;
        animation: sparkles-flicker 0.5s forwards; /* Llama a la animación de chispa */
    }

    .sparkles::before {
        top: 20%;
        left: 25%;
        animation-delay: 0.1s; /* Retraso para el primer elemento */
    }

    .sparkles::after {
        bottom: 20%;
        right: 25%;
        animation-delay: 0.2s; /* Retraso para el segundo elemento */
    }

    @keyframes sparkles-flicker {
        0% {
            transform: scale(1);
            opacity: 1;
        }
        50% {
            transform: scale(1.5);
            opacity: 0.5;
        }
        100% {
            transform: scale(0);
            opacity: 0;
        }
    }
</style>
@endsection
