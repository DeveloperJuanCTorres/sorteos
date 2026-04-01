@extends('layouts.app')

@section('content')

<div class="text-center">

    <!-- Badge -->
    <div class="hero-badge mb-4">
        <i class="fa-solid fa-crown me-2"></i>
        Sorteos de Lujo Premium
    </div>

    <!-- Title -->
    <h1 style="font-size: 70px;" class="title-main mb-4">
        Gana Premios de Lujo
    </h1>

    <!-- Countdown -->
    <div class="countdown-card mt-4">

        <h4 class="text-white mb-3">
            Próximo sorteo en:
        </h4>

        <div class="d-flex justify-content-center gap-4">

            <div>
                <h2 class="gold" id="days">00</h2>
                <small>Días</small>
            </div>

            <div>
                <h2 class="gold" id="hours">00</h2>
                <small>Horas</small>
            </div>

            <div>
                <h2 class="gold" id="minutes">00</h2>
                <small>Min</small>
            </div>

            <div>
                <h2 class="gold" id="seconds">00</h2>
                <small>Seg</small>
            </div>

        </div>

    </div>

    <!-- Texto -->
    <p class="mt-5 text-secondary" style="max-width: 700px; margin:auto; font-size: 20px">
        Participa en sorteos exclusivos de relojes de lujo, superautos, gadgets tecnológicos y más.
        Sorteos transparentes, ganadores verificados y premios que cambian vidas.
    </p>

    <!-- Botones -->
    <div class="mt-4 d-flex justify-content-center gap-3 flex-wrap">

        <a href="#" class="btn btn-gold-gradient">
            <i class="fa-solid fa-ticket me-2"></i>
            Ver Sorteos
        </a>

        <a href="#" class="btn btn-outline-gold">
            <i class="fa-solid fa-circle-info me-2"></i>
            Cómo funciona
        </a>

    </div>

    <!-- KPIs -->
    <div class="kpi-section mt-5">
        <div class="row justify-content-center align-items-center text-center">

            <!-- KPI 1 -->
            <div class="col-6 col-md-4 kpi-item">
                <h2 class="gold">+120</h2>
                <p class="text-secondary mb-0">Premios sorteados</p>
            </div>

            <!-- Línea -->
            <div class="col-auto d-none d-md-block">
                <div class="kpi-divider"></div>
            </div>

            <!-- KPI 2 -->
            <div class="col-6 col-md-4 kpi-item">
                <h2 class="gold">+95</h2>
                <p class="text-secondary mb-0">Ganadores felices</p>
            </div>
        </div>
    </div>

</div>

<div class="mt-5 text-center">

    <!-- TÍTULO -->
    <h2 class="gold section-title mb-3">
        Sorteo Activo
    </h2>

    <!-- BOTÓN PRINCIPAL -->
    <div class="mb-5">
        <button class="btn btn-participar-main"
            data-bs-toggle="modal"
            data-bs-target="#participarModal">

            <i class="fa-solid fa-fire me-2"></i>
            Participar en el Sorteo
        </button>
    </div>

    <!-- PRODUCTOS -->
    <div class="row">

        <!-- Producto 1 -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="product-card">

                <div style="position:relative;">
                    <img src="https://images.unsplash.com/photo-1511919884226-fd3cad34687c">
                    <div class="badge-qty">x1</div>
                </div>

                <div class="p-3 text-start">
                    <h6 class="gold">Rolex Submariner</h6>
                    <p class="text-secondary small mb-0">
                        Reloj de lujo original
                    </p>
                </div>

            </div>
        </div>

        <!-- Producto 2 -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="product-card">

                <div style="position:relative;">
                    <img src="https://images.unsplash.com/photo-1549924231-f129b911e442">
                    <div class="badge-qty">x2</div>
                </div>

                <div class="p-3 text-start">
                    <h6 class="gold">iPhone 15 Pro</h6>
                    <p class="text-secondary small mb-0">
                        Última generación Apple
                    </p>
                </div>

            </div>
        </div>

        <!-- Producto 3 -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="product-card">

                <div style="position:relative;">
                    <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888">
                    <div class="badge-qty">x1</div>
                </div>

                <div class="p-3 text-start">
                    <h6 class="gold">PlayStation 5</h6>
                    <p class="text-secondary small mb-0">
                        Consola nueva sellada
                    </p>
                </div>

            </div>
        </div>

    </div>

</div>

<div class="modal fade" id="participarModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content p-4">

            <h4 class="gold text-center mb-3">
                Participar en el Sorteo
            </h4>

            <form>

                <div class="row">

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="DNI">
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="WhatsApp">
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Nombre">
                    </div>

                    <div class="col-md-6 mb-3">
                        <input type="text" class="form-control" placeholder="Apellidos">
                    </div>

                    <div class="col-md-12 mb-3">
                        <input type="text" class="form-control" placeholder="Departamento">
                    </div>

                </div>

                <!-- QR -->
                <div class="qr-box mb-3">
                    <p class="gold mb-2">Realiza tu pago vía Yape / Plin</p>
                    <img src="{{asset ('img/yape-plin.webp')}}" width="500">
                </div>

                <!-- Subir pago -->
                <div class="mb-3">
                    <label class="form-label">Subir comprobante</label>
                    <input type="file" class="form-control">
                </div>

                <!-- Términos -->
                <div class="form-check mb-3">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">
                        Acepto términos y condiciones
                    </label>
                </div>

                <!-- Botón -->
                <button class="btn btn-gold-gradient w-100">
                    Confirmar Participación
                </button>

            </form>

        </div>
    </div>
</div>


<!-- FOOTER -->
<footer class="footer-pro mt-5 pt-5 pb-4">

    <div class="container">

        <div class="row">

            <!-- Marca -->
            <div class="col-md-4 mb-4">
                <h5 class="gold fw-bold">
                    <i class="fa-solid fa-gem me-2"></i> PremiosOxapampa
                </h5>

                <p class="text-secondary small mt-3">
                    Plataforma de sorteos premium donde puedes ganar premios exclusivos de forma transparente y segura.
                </p>

                <!-- Redes -->
                <div class="mt-3">
                    <a href="#" class="social-icon"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fa-brands fa-tiktok"></i></a>
                </div>
            </div>

            <!-- Links -->
            <div class="col-md-4 mb-4">
                <h6 class="gold">Navegación</h6>

                <ul class="footer-links mt-3">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Mis Tickets</a></li>
                    <li><a href="#">Ganadores</a></li>
                    <li><a href="#">Cómo funciona</a></li>
                </ul>
            </div>

            <!-- Legal / Contacto -->
            <div class="col-md-4 mb-4">
                <h6 class="gold">Legal</h6>

                <ul class="footer-links mt-3">
                    <li><a href="#">Términos y condiciones</a></li>
                    <li><a href="#">Política de privacidad</a></li>
                    <li><a href="#">Libro de reclamaciones</a></li>
                </ul>
            </div>

        </div>

        <!-- Divider -->
        <hr class="footer-divider">

        <!-- Bottom -->
        <div class="text-center small text-secondary">
            © {{ date('Y') }} PremiosOxapampa - Todos los derechos reservados
        </div>

    </div>

</footer>

<!-- SCRIPT COUNTDOWN -->
<script>
    // Fecha del próximo sorteo (AJUSTA ESTO DINÁMICO LUEGO)
    const targetDate = new Date("2026-04-15T20:00:00").getTime();

    const countdown = setInterval(() => {

        const now = new Date().getTime();
        const distance = targetDate - now;

        if (distance < 0) {
            clearInterval(countdown);
            return;
        }

        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance / (1000 * 60 * 60)) % 24);
        const minutes = Math.floor((distance / 1000 / 60) % 60);
        const seconds = Math.floor((distance / 1000) % 60);

        document.getElementById("days").innerText = days;
        document.getElementById("hours").innerText = hours;
        document.getElementById("minutes").innerText = minutes;
        document.getElementById("seconds").innerText = seconds;

    }, 1000);
</script>

@endsection