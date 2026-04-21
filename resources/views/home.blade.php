@extends('layouts.app')

@section('content')


<main class="pb-32 px-4 md:px-8 max-w-7xl mx-auto space-y-16">

    <!-- Hero Section: Featured Sweepstakes -->
    <section class="rounded-[2rem] overflow-hidden min-h-[500px] flex items-end p-8 md:p-16">
        <div class="absolute inset-0 z-0">
            <img alt="Tesla Sweepstakes" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="high performance electric sports car in a dark futuristic showroom with electric blue neon lights and polished floor reflections" 
                    src="img/banner1.jpg"/>
            <div class="absolute inset-0 bg-gradient-to-t from-background via-background/40 to-transparent"></div>
        </div>
        <div class="relative z-10 w-full max-w-2xl">
            <div class="inline-flex items-center gap-2 px-4 py-1 rounded-full bg-tertiary-container/20 backdrop-blur-md border border-tertiary/20 text-tertiary mb-6">
                <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
                <span class="text-xs font-black tracking-widest uppercase font-label">Sorteo Destacado</span>
            </div>
            <h1 class="text-5xl md:text-7xl font-headline font-black tracking-tighter leading-[0.9] mb-4">
                        LOS MEJORES <br/><span class="text-primary italic">SORTEOS AQUÍ</span>
            </h1>
            <div class="flex flex-wrap items-center gap-6 mt-8">
                <div class="flex gap-4">
                    <div class="bg-surface-container-highest/80 backdrop-blur-md p-4 rounded-xl border-b-2 border-primary">
                        <span id="dias1" class="block text-2xl font-black font-headline tracking-tighter">00</span>
                        <span class="text-[10px] uppercase font-black text-on-surface-variant tracking-widest">Días</span>
                    </div>
                    <div class="bg-surface-container-highest/80 backdrop-blur-md p-4 rounded-xl border-b-2 border-primary">
                        <span id="horas1" class="block text-2xl font-black font-headline tracking-tighter">00</span>
                        <span class="text-[10px] uppercase font-black text-on-surface-variant tracking-widest">Hrs</span>
                    </div>
                    <div class="bg-surface-container-highest/80 backdrop-blur-md p-4 rounded-xl border-b-2 border-primary">
                        <span id="minutos1" class="block text-2xl font-black font-headline tracking-tighter">00</span>
                        <span class="text-[10px] uppercase font-black text-on-surface-variant tracking-widest">Min</span>
                    </div>
                </div>
                <button data-bs-toggle="modal" 
                        data-bs-target="#modalRegistro"
                        class="bg-gradient-to-r from-primary to-primary-dim text-on-primary-fixed px-10 py-3 rounded-full font-headline font-black text-xl uppercase tracking-tighter shadow-[0_0_40px_rgba(144,171,255,0.4)] hover:shadow-[0_0_60px_rgba(144,171,255,0.6)] transition-all active:scale-95 duration-200">
                    Participar Ahora
                </button>
            </div>
        </div>
    </section>

    <section class="relative bg-surface-container-low rounded-3xl overflow-hidden border border-primary/20 p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-8 shadow-[0_0_30px_rgba(37,99,235,0.15)]">
        <div class="absolute inset-0 bg-gradient-to-r from-primary/5 via-transparent to-primary/5 pointer-events-none"></div>
        <div class="relative z-10 flex items-center gap-5">
            <div class="w-14 h-14 rounded-2xl bg-primary/10 flex items-center justify-center border border-primary/30 shadow-[0_0_20px_rgba(37,99,235,0.2)]">
                <span class="material-symbols-outlined text-primary text-4xl animate-pulse">alarm</span>
            </div>
            <div>
                <h2 class="text-2xl md:text-3xl font-headline font-black uppercase tracking-tighter leading-none">
                        Siguiente <span class="text-primary">Gran Sorteo</span>
                </h2>
                <p class="text-on-surface-variant text-sm mt-1 font-bold uppercase tracking-widest">¡No te quedes fuera!</p>
            </div>
        </div>
        <div class="relative z-10 flex gap-3 md:gap-6">
            <div class="flex flex-col items-center">
                <div class="bg-background border-2 border-primary/40 w-16 h-20 md:w-20 md:h-24 rounded-xl flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.2)]">
                    <span id="dias" class="text-3xl md:text-5xl font-headline font-black text-primary">02</span>
                </div>
                <span class="text-[10px] font-black uppercase tracking-widest mt-2 text-on-surface-variant">Días</span>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-background border-2 border-primary/40 w-16 h-20 md:w-20 md:h-24 rounded-xl flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.2)]">
                    <span id="horas" class="text-3xl md:text-5xl font-headline font-black text-primary">14</span>
                </div>
                <span class="text-[10px] font-black uppercase tracking-widest mt-2 text-on-surface-variant">Hrs</span>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-background border-2 border-primary/40 w-16 h-20 md:w-20 md:h-24 rounded-xl flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.2)]">
                    <span  id="minutos" class="text-3xl md:text-5xl font-headline font-black text-primary">52</span>
                </div>
                <span class="text-[10px] font-black uppercase tracking-widest mt-2 text-on-surface-variant">Min</span>
            </div>
            <div class="flex flex-col items-center">
                <div class="bg-background border-2 border-primary/40 w-16 h-20 md:w-20 md:h-24 rounded-xl flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.3)] ring-2 ring-primary/20">
                    <span id="segundos" class="text-3xl md:text-5xl font-headline font-black text-primary">18</span>
                </div>
                <span class="text-[10px] font-black uppercase tracking-widest mt-2 text-primary animate-pulse">Seg</span>
            </div>
        </div>
        <button data-bs-toggle="modal" 
                data-bs-target="#modalRegistro"
                class="relative z-10 bg-primary hover:bg-primary-dim text-on-primary-fixed px-8 py-4 rounded-2xl font-headline font-black uppercase tracking-tighter transition-all active:scale-95 shadow-[0_0_30px_rgba(37,99,235,0.4)]">
            Obtener Tickets
        </button>
    </section>


    <!-- Popular Sweepstakes Grid -->
    <section>
        <div class="flex justify-between items-end mb-8">
            <div>
                <h2 class="text-3xl font-headline font-black uppercase tracking-tighter">Premios  <span class="text-primary-container">{{$sorteo->name}}</span></h2>
                <p class="text-on-surface-variant text-sm mt-1 uppercase tracking-widest font-black">Tu próxima victoria está a un ticket de distancia</p>
            </div>
            <button class="text-primary font-black uppercase text-sm tracking-widest hover:underline transition-all">Ver todos</button>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Cards -->
             @foreach($premios as $premio)
            <div class="bg-surface-container-highest rounded-[1.5rem] overflow-hidden group border border-outline-variant/10">
                <div class="relative h-48">
                    <img alt="Setup" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="insane gaming setup with three monitors, vertical rgb strips, high end pc case, and ergonomic chair in a dark room" 
                        src="{{asset('storage/' . $premio->image)}}"/>
                    <div class="absolute top-4 right-4 bg-background/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest border border-primary/20 text-primary">
                        {{$premio->cantidad}} Premios
                    </div>
                </div>
                <div class="p-6 space-y-4">
                    <div class="flex justify-between items-start">
                        <h3 class="font-headline font-black text-xl uppercase tracking-tighter leading-tight">{{$premio->name}}</h3>
                        <!-- <span class="text-secondary font-black text-lg font-headline tracking-tighter">{{$premio->cantidad}} Und</span> -->
                    </div>
                    <div class="space-y-2">
                        <div class="flex justify-between text-[10px] font-black uppercase tracking-widest text-on-surface-variant">
                            <span>Progreso</span>
                            <span class="text-primary">85%</span>
                        </div>
                        <div class="h-2 w-full bg-surface-container-low rounded-full overflow-hidden">
                            <div class="h-full bg-primary rounded-full shadow-[0_0_10px_rgba(144,171,255,0.5)]" style="width: 85%"></div>
                        </div>
                    </div>
                    <!-- <button class="w-full py-3 bg-surface-bright text-on-surface font-black uppercase text-xs tracking-widest rounded-full hover:bg-primary hover:text-on-primary-fixed transition-all">Participar</button> -->
                </div>
            </div>
            @endforeach
            <!-- end cards -->
            
        </div>
    </section>

    <!-- "Cómo Funciona" Step Grid -->
    <section class="bg-surface-container-low rounded-[2.5rem] p-12">
        <h2 class="text-3xl font-headline font-black uppercase tracking-tighter text-center mb-16">Domina la <span class="text-primary italic">Arena</span></h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 relative">
            <!-- Connectors for Desktop -->
            <div class="hidden md:block absolute top-20 left-1/4 right-1/4 h-[1px] bg-gradient-to-r from-transparent via-primary/30 to-transparent"></div>
            <div class="flex flex-col items-center text-center relative z-10">
                <div class="w-16 h-16 bg-surface-bright rounded-2xl flex items-center justify-center font-headline font-black text-3xl text-primary mb-6 shadow-[0_0_20px_rgba(144,171,255,0.2)]">1</div>
                <h3 class="font-headline font-black uppercase tracking-widest mb-2">Elige tu Premio</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed max-w-[200px]">Selecciona entre autos, tecnología o efectivo y compra tus tickets.</p>
            </div>
            <div class="flex flex-col items-center text-center relative z-10">
                <div class="w-16 h-16 bg-surface-bright rounded-2xl flex items-center justify-center font-headline font-black text-3xl text-primary mb-6 shadow-[0_0_20px_rgba(144,171,255,0.2)]">2</div>
                <h3 class="font-headline font-black uppercase tracking-widest mb-2">Espera el Sorteo</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed max-w-[200px]">Nuestros sorteos son en vivo y certificados para máxima transparencia.</p>
            </div>
            <div class="flex flex-col items-center text-center relative z-10">
                <div class="w-16 h-16 bg-surface-bright rounded-2xl flex items-center justify-center font-headline font-black text-3xl text-secondary mb-6 shadow-[0_0_30px_rgba(248,160,16,0.3)]">3</div>
                <h3 class="font-headline font-black uppercase tracking-widest mb-2">¡Gana el Jackpot!</h3>
                <p class="text-on-surface-variant text-sm leading-relaxed max-w-[200px]">Si tu ticket es el elegido, el premio es tuyo. ¡Así de simple!</p>
            </div>
        </div>
    </section>


   
</main>

<!-- Modal -->
<div class="modal fade" id="modalRegistro" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content border-0 shadow-lg" style="background-color: rgb(9 19 40 / var(--tw-bg-opacity, 1)); border-radius: 16px;">

            <!-- Header -->
            <div class="modal-header border-0 d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center gap-3">

                    <label class="form-label text-white mb-0">
                        Sorteo:
                    </label>

                    <select name="raffle_id" 
                        class="form-select bg-dark text-white border-0"
                        style="width: auto; min-width: 220px;" required>

                        @foreach($sorteos as $item)
                            <option value="{{ $item->id }}" 
                                {{ $sorteo && $item->id == $sorteo->id ? 'selected' : '' }}>
                                
                                {{ $item->name }} - 
                                {{ \Carbon\Carbon::parse($item->fecha_sorteo)->format('d/m/Y') }}

                            </option>
                        @endforeach

                    </select>

                </div>
                
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>

            <!-- Body -->
            <div class="modal-body text-white">

                <form id="formRegistro" enctype="multipart/form-data">

                    <div class="row g-3">

                        <!-- Tipo Documento -->
                        <div class="col-md-6">
                            <label class="form-label">Tipo de Documento</label>
                            <select class="form-select bg-dark text-white border-0" name="tipo_documento" required>
                                <option class="text-black" value="">Seleccionar</option>
                                <option class="text-black" value="dni">DNI</option>
                                <option class="text-black" value="ce">Carnet de Extranjería</option>
                                <option class="text-black" value="pasaporte">Pasaporte</option>
                            </select>
                        </div>

                        <!-- Número Documento -->
                        <div class="col-md-6">
                            <label class="form-label">Número de Documento</label>
                            <input type="text" class="form-control bg-dark text-white border-0" name="numero_documento" required>
                        </div>

                        <!-- Nombres -->
                        <div class="col-md-6">
                            <label class="form-label">Nombres</label>
                            <input type="text" class="form-control bg-dark text-white border-0" name="nombres" required>
                        </div>

                        <!-- Apellidos -->
                        <div class="col-md-6">
                            <label class="form-label">Apellidos</label>
                            <input type="text" class="form-control bg-dark text-white border-0" name="apellidos" required>
                        </div>

                        <!-- Correo -->
                        <div class="col-md-6">
                            <label class="form-label">Correo</label>
                            <input type="email" class="form-control bg-dark text-white border-0" name="correo" required>
                        </div>

                        <!-- Teléfono -->
                        <div class="col-md-6">
                            <label class="form-label">Teléfono</label>
                            <input type="text" class="form-control bg-dark text-white border-0" name="telefono" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label">Departamento</label>
                            <select class="form-select bg-dark text-white border-0" name="departamento" required>
                                <option class="text-black" value="">Seleccionar</option>
                                <option class="text-black">Amazonas</option>
                                <option class="text-black">Áncash</option>
                                <option class="text-black">Apurímac</option>
                                <option class="text-black">Arequipa</option>
                                <option class="text-black">Ayacucho</option>
                                <option class="text-black">Cajamarca</option>
                                <option class="text-black">Callao</option>
                                <option class="text-black">Cusco</option>
                                <option class="text-black">Huancavelica</option>
                                <option class="text-black">Huánuco</option>
                                <option class="text-black">Ica</option>
                                <option class="text-black">Junín</option>
                                <option class="text-black">La Libertad</option>
                                <option class="text-black">Lambayeque</option>
                                <option class="text-black">Lima</option>
                                <option class="text-black">Loreto</option>
                                <option class="text-black">Madre de Dios</option>
                                <option class="text-black">Moquegua</option>
                                <option class="text-black">Pasco</option>
                                <option class="text-black">Piura</option>
                                <option class="text-black">Puno</option>
                                <option class="text-black">San Martín</option>
                                <option class="text-black">Tacna</option>
                                <option class="text-black">Tumbes</option>
                                <option class="text-black">Ucayali</option>
                            </select>
                        </div>

                    </div>

                    <!-- SECCIÓN PAGO -->
                    <div class="mt-4 p-3 rounded" style="background-color: rgba(255,255,255,0.05);">
                        <h6 class="fw-bold mb-3">Pago por Yape</h6>

                        <div class="row align-items-center">

                            <!-- QR -->
                            <div class="col-md-5 text-center">
                                <img src="{{ asset('img/yape-qr1.jpeg') }}" 
                                    alt="QR Yape" 
                                    class="img-fluid rounded shadow"
                                    style="max-width: 200px;">
                                <p class="mt-2 small">Escanea para pagar</p>
                            </div>

                            <!-- Upload -->
                            <div class="col-md-7">
                                <label class="form-label">Adjuntar comprobante</label>
                                <input type="file" class="form-control bg-dark text-white border-0" name="comprobante" accept="image/*,.pdf" required>
                            </div>

                        </div>
                    </div>

                    <!-- Footer -->
                    <div class="mt-4 text-end">
                        <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">
                            Cancelar
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Enviar Registro
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>
</div>



<script>
    // Fecha del sorteo desde Laravel
    

    let fechaSorteo = {!! ($sorteo && $sorteo->date) 
        ? '"' . \Carbon\Carbon::parse($sorteo->date)->format('Y-m-d H:i:s') . '"' 
        : 'null' !!};

    fechaSorteo = fechaSorteo ? new Date(fechaSorteo).getTime() : null;
    

    function actualizarContador() {

        if (!fechaSorteo) {
            document.getElementById("dias1").innerText = "--";
            document.getElementById("horas1").innerText = "--";
            document.getElementById("minutos1").innerText = "--";

            document.getElementById("dias").innerText = "--";
            document.getElementById("horas").innerText = "--";
            document.getElementById("minutos").innerText = "--";
            document.getElementById("segundos").innerText = "--";
            return;
        }

        const ahora = new Date().getTime();
        const diferencia = fechaSorteo - ahora;

        if (diferencia <= 0) {
            document.getElementById("dias").innerText = "00";
            document.getElementById("horas").innerText = "00";
            document.getElementById("minutos").innerText = "00";
            document.getElementById("segundos").innerText = "00";

            document.getElementById("dias1").innerText = "00";
            document.getElementById("horas1").innerText = "00";
            document.getElementById("minutos1").innerText = "00";
            return;
        }

        const dias = Math.floor(diferencia / (1000 * 60 * 60 * 24));
        const horas = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutos = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));
        const segundos = Math.floor((diferencia % (1000 * 60)) / 1000);

        const dias1 = Math.floor(diferencia / (1000 * 60 * 60 * 24));
        const horas1 = Math.floor((diferencia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutos1 = Math.floor((diferencia % (1000 * 60 * 60)) / (1000 * 60));


        document.getElementById("dias").innerText = String(dias).padStart(2, '0');
        document.getElementById("horas").innerText = String(horas).padStart(2, '0');
        document.getElementById("minutos").innerText = String(minutos).padStart(2, '0');
        document.getElementById("segundos").innerText = String(segundos).padStart(2, '0');

        document.getElementById("dias1").innerText = String(dias1).padStart(2, '0');
        document.getElementById("horas1").innerText = String(horas1).padStart(2, '0');
        document.getElementById("minutos1").innerText = String(minutos1).padStart(2, '0');
    }

    // Ejecutar cada segundo
    setInterval(actualizarContador, 1000);

    // Ejecutar inmediatamente al cargar
    actualizarContador();
</script>

<script>
    document.getElementById('formRegistro').addEventListener('submit', function(e) {
        e.preventDefault();

        let formData = new FormData(this);

        fetch("{{ route('tickets.store') }}", {
            method: "POST",
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: formData
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                alert(data.message);
                document.getElementById('formRegistro').reset();

                let modal = bootstrap.Modal.getInstance(document.getElementById('modalRegistro'));
                modal.hide();
            }
        })
        .catch(err => console.error(err));
    });
</script>

<script>
    document.getElementById('formRegistro').addEventListener('submit', function(e){

        const tipo = document.querySelector('[name="tipo_documento"]').value;
        const numero = document.querySelector('[name="numero_documento"]').value.trim();
        const nombres = document.querySelector('[name="nombres"]').value.trim();
        const apellidos = document.querySelector('[name="apellidos"]').value.trim();
        const telefono = document.querySelector('[name="telefono"]').value.trim();
        const correo = document.querySelector('[name="correo"]').value.trim();
        const file = document.querySelector('[name="comprobante"]').files[0];

        // 🚫 Regex seguros (solo letras y números básicos)
        const regexTexto = /^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/;
        const regexNumero = /^[0-9]+$/;
        const regexTelefono = /^[0-9]{9}$/;

        // ❌ Validaciones
        if(!regexTexto.test(nombres)){
            alert('Nombres inválidos');
            e.preventDefault(); return;
        }

        if(!regexTexto.test(apellidos)){
            alert('Apellidos inválidos');
            e.preventDefault(); return;
        }

        if(tipo === 'dni'){
            if(!regexNumero.test(numero) || numero.length !== 8){
                alert('El DNI debe tener 8 dígitos numéricos');
                e.preventDefault(); return;
            }
        }

        if(tipo === 'ce'){
            if(numero.length < 9){
                alert('Carnet de extranjería inválido');
                e.preventDefault(); return;
            }
        }

        if(tipo === 'pasaporte'){
            if(numero.length < 6){
                alert('Pasaporte inválido');
                e.preventDefault(); return;
            }
        }

        if(!regexTelefono.test(telefono)){
            alert('Teléfono debe tener 9 dígitos');
            e.preventDefault(); return;
        }

        // 📎 Validar archivo
        if(file){
            const allowedTypes = ['image/jpeg','image/png','image/jpg'];
            if(!allowedTypes.includes(file.type)){
                alert('Solo se permiten imágenes JPG o PNG');
                e.preventDefault(); return;
            }

            if(file.size > 2 * 1024 * 1024){
                alert('La imagen no debe superar los 2MB');
                e.preventDefault(); return;
            }
        }

    });
</script>

<script>
    // Solo números en documento
    document.querySelector('[name="numero_documento"]').addEventListener('input', function(){
        this.value = this.value.replace(/[^0-9a-zA-Z]/g, '');
    });

    // Solo letras en nombres
    document.querySelector('[name="nombres"]').addEventListener('input', function(){
        this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '');
    });

    document.querySelector('[name="apellidos"]').addEventListener('input', function(){
        this.value = this.value.replace(/[^a-zA-ZáéíóúÁÉÍÓÚñÑ\s]/g, '');
    });

    // Solo números en teléfono
    document.querySelector('[name="telefono"]').addEventListener('input', function(){
        this.value = this.value.replace(/[^0-9]/g, '');
    });
</script>

<script>
    const tipoDoc = document.querySelector('[name="tipo_documento"]');
    const numDoc = document.querySelector('[name="numero_documento"]');

    // 🔁 Cuando cambia el tipo de documento
    tipoDoc.addEventListener('change', function() {

        numDoc.value = ''; // limpiar

        if(this.value === 'dni'){
            numDoc.setAttribute('maxlength', '8');
            numDoc.setAttribute('inputmode', 'numeric');
        } else if(this.value === 'ce'){
            numDoc.setAttribute('maxlength', '12');
            numDoc.removeAttribute('inputmode');
        } else if(this.value === 'pasaporte'){
            numDoc.setAttribute('maxlength', '12');
            numDoc.removeAttribute('inputmode');
        } else {
            numDoc.removeAttribute('maxlength');
        }

    });

    // ⛔ Validación en tiempo real mientras escribe
    numDoc.addEventListener('input', function(){

        const tipo = tipoDoc.value;

        if(tipo === 'dni'){
            // solo números
            this.value = this.value.replace(/[^0-9]/g, '');
        }

        if(tipo === 'ce' || tipo === 'pasaporte'){
            // letras y números (sin símbolos raros)
            this.value = this.value.replace(/[^a-zA-Z0-9]/g, '');
        }

    });
</script>

<script>
    const modal = document.getElementById('modalRegistro');
    const form = document.getElementById('formRegistro');

    modal.addEventListener('hidden.bs.modal', function () {

        // 🔄 Resetear formulario
        form.reset();

        // 🧹 Limpiar inputs manuales (por si acaso)
        form.querySelectorAll('input, select').forEach(el => {
            el.value = '';
        });

        // 🧼 Limpiar archivo (importante)
        const fileInput = form.querySelector('[name="comprobante"]');
        if(fileInput){
            fileInput.value = '';
        }

    });
</script>

@endsection