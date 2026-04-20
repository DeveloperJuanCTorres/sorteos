@extends('layouts.app')

@section('content')


<main class="pt-24 pb-32 px-6 max-w-screen-xl mx-auto">
    <!-- Header Section -->
    <header class="mb-10">
        <h2 class="font-headline text-5xl font-black tracking-tight mb-2 uppercase">Mis Tickets</h2>
        <p class="text-on-surface-variant text-lg">Consulta aquí tus tickets y el estado de tus entradas.</p>

        <form method="GET" action="{{ route('tickets.buscar') }}" class="mb-10">
            <div class="flex flex-col md:flex-row gap-4 items-center py-4">
                
                <input 
                    type="text" 
                    name="dni" 
                    placeholder="Ingresa tu DNI" 
                    class="w-full md:w-80 px-5 py-3 rounded-full border text-black border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary"
                    required
                >

                <button 
                    type="submit"
                    class="bg-primary text-white px-6 py-3 rounded-full font-bold hover:scale-105 transition"
                >
                    Consultar
                </button>

            </div>
        </form>
    </header>

    @if(isset($tickets) && count($tickets) > 0)
        <!-- Stats Bento Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-12">
            <div class="bg-surface-container-highest p-6 rounded-xl flex flex-col justify-between h-32 hover:scale-[1.02] transition-transform">
                <span class="text-on-surface-variant font-label text-xs uppercase tracking-widest">Aprobados</span>
                <span class="font-headline text-4xl text-primary">{{ $aprobados->count() }}</span>
            </div>
            <div class="bg-surface-container-high p-6 rounded-xl flex flex-col justify-between h-32 hover:scale-[1.02] transition-transform">
                <span class="text-on-surface-variant font-label text-xs uppercase tracking-widest">Sin Aprobar</span>
                <span class="font-headline text-4xl text-secondary">{{ $pendientes->count() }}</span>
            </div>
            <div class="bg-surface-container-low p-6 rounded-xl flex flex-col justify-between h-32 hover:scale-[1.02] transition-transform border border-outline-variant/10">
                <span class="text-on-surface-variant font-label text-xs uppercase tracking-widest">Total</span>
                <div class="flex items-baseline gap-1">
                    <span class="font-headline text-4xl text-tertiary">{{ $tickets->count() }}</span>
                    <!-- <span class="text-xs text-tertiary-dim">USD</span> -->
                </div>
            </div>
        </div>

        <!-- Filter Tabs -->
        <div class="flex gap-4 mb-8 overflow-x-auto no-scrollbar pb-2">
            <button onclick="filtrar('todos', this)" class="filtro-btn bg-primary text-on-primary-container px-6 py-2.5 rounded-full font-bold text-sm">
                Todos
            </button>

            <button onclick="filtrar('1', this)" class="filtro-btn bg-surface-variant text-on-surface-variant px-6 py-2.5 rounded-full font-bold text-sm">
                Aprobados
            </button>

            <button onclick="filtrar('0', this)" class="filtro-btn bg-surface-variant text-on-surface-variant px-6 py-2.5 rounded-full font-bold text-sm">
                Sin aprobar
            </button>
            
        </div>
        
        <!-- Ticket Cards Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

            @foreach($tickets as $ticket)
            <div class="ticket-shape bg-surface-container-highest text-white p-6 shadow-2xl ticket-item"
                data-estado="{{ $ticket->aprobado }}">

                <!-- Header -->
                <div class="flex justify-between items-center border-b border-dashed border-white/20 pb-4 mb-4">
                    <div>
                        <p class="text-[10px] uppercase text-white/50">SORTEO</p>
                        <h3 class="text-lg font-bold leading-tight">
                            {{$ticket->sorteo->name}}
                        </h3>
                    </div>

                    <span class="text-[10px] px-2 py-1 rounded-full 
                        {{ $ticket->aprobado ? 'bg-green-500/20 text-green-400' : 'bg-yellow-500/20 text-yellow-400' }}">
                        {{ $ticket->aprobado ? 'Aprobado' : 'Pendiente' }}
                    </span>
                </div>

                <!-- Info -->
                <div class="flex justify-between mb-6">
                    <div>
                        <p class="text-[10px] text-white/50">Precio</p>
                        <p class="font-bold">S/. {{$ticket->sorteo->price}}</p>
                    </div>

                    <div class="text-right">
                        <p class="text-[10px] text-white/50">Fecha</p>
                        <p class="text-sm">{{$ticket->created_at}}</p>
                    </div>
                </div>

                <!-- Footer -->
                <div class="border-t border-dashed border-white/20 pt-4 flex justify-between items-center">
                    <span class="text-xs font-mono tracking-widest">
                        #{{$ticket->id}}
                    </span>

                    <!-- Código de barras -->
                    <div class="flex gap-[2px]">
                        @for($i=0;$i<18;$i++)
                            <div class="w-[2px] h-6 bg-white"></div>
                        @endfor
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    @else
        <p class="text-center text-gray-400">Ingresa tu DNI para ver tus tickets</p>
    @endif
</main>


<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function filtrar(tipo, btn) {
        const items = document.querySelectorAll('.ticket-item');
        const botones = document.querySelectorAll('.filtro-btn');

        // 🔹 FILTRO
        items.forEach(item => {
            if (tipo === 'todos') {
                item.style.display = 'block';
            } else {
                item.style.display = item.dataset.estado === tipo ? 'block' : 'none';
            }
        });

        // 🔹 RESET estilos de botones
        botones.forEach(b => {
            b.classList.remove('bg-primary', 'text-on-primary-container');
            b.classList.add('bg-surface-variant', 'text-on-surface-variant');
        });

        // 🔹 ACTIVAR botón actual
        btn.classList.remove('bg-surface-variant', 'text-on-surface-variant');
        btn.classList.add('bg-primary', 'text-on-primary-container');
    }
</script>

@if(isset($sinResultados) && $sinResultados && isset($busqueda))
<script>
    document.addEventListener('DOMContentLoaded', function () {

        Swal.fire({
            icon: 'warning',
            title: 'Sin resultados',
            html: `
                <p style="font-size:14px; color:#cbd5e1;">
                    No se encontraron tickets para el DNI ingresado.
                </p>
            `,
            confirmButtonText: 'Intentar nuevamente',
            background: '#091328',
            color: '#fff',
            confirmButtonColor: '#90abff',
            backdrop: 'rgba(0,0,0,0.8)',
            customClass: {
                popup: 'rounded-3xl shadow-2xl'
            },
            didOpen: () => {
                // 🔥 limpiar URL sin recargar
                window.history.replaceState({}, document.title, "{{ route('tickets') }}");
            },
            didClose: () => {
                const input = document.querySelector('input[name="dni"]');
                if(input){
                    input.focus();
                    input.value = '';
                }
            }
        });

        

    });
</script>
@endif

@endsection