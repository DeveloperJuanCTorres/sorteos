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

            <button onclick="filtrar('0', this)" class="filtro-btn bg-surface-variant text-on-surface-variant px-6 py-2.5 rounded-full font-bold text-sm">
                Aprobados
            </button>

            <button onclick="filtrar('1', this)" class="filtro-btn bg-surface-variant text-on-surface-variant px-6 py-2.5 rounded-full font-bold text-sm">
                Sin aprobar
            </button>
            
        </div>
        
        <!-- Ticket Cards Grid -->
         @foreach($tickets as $ticket)
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 ticket-item" data-estado="{{ $ticket->aprobado }}">
            <!-- Ticket Card 1: Active -->
            <div class="group bg-surface-container rounded-xl overflow-hidden shadow-2xl relative">
                <div class="flex flex-col md:flex-row">
                    <div class="md:w-48 h-48 md:h-auto overflow-hidden relative">
                        <img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Luxury midnight blue sports car in a high-tech showroom with neon accents and dramatic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUVPV55EGL4rl7pLalm4eyAEXrBlqABxmw6yFmpq9k1Ltm99klMrqh6AF2LDCn8mPU3KBY22zuR3sYkT4iJrlsKYMpa_XCw4ZjEju0X4SlVOkee5IpI3WhrdIJ46sGVD_sImGaxjb3CZxFmSK0rUNCggq96cEiD4YMwSMMWKNeT5XOxTmVoChd-gJ8st-xx8EiPxy_9ITD95_b8z3IFNUql6uy4htABbRiDpi-DfFYvGNRjX4tCIXUTSelX_9ZihpaUwZ7HKaGIS8" />
                        <div class="absolute top-3 left-3 px-3 py-1 bg-tertiary/20 backdrop-blur-md rounded-full border border-tertiary/30">
                            <span class="text-tertiary text-[10px] font-bold uppercase tracking-tighter">Active</span>
                        </div>
                    </div>
                    <div class="flex-1 p-6">
                        <div class="flex justify-between items-start mb-4">
                            <div>
                                <h3 class="font-headline text-xl font-bold leading-tight">{{$ticket->sorteo->name}}</h3>
                                <p class="text-on-surface-variant text-xs mt-1">Precio: S/. {{$ticket->sorteo->price}}</p>
                            </div>
                            <div class="text-right">
                                <span class="block text-[10px] uppercase text-on-surface-variant font-bold">Fecha</span>
                                <span class="font-headline text-primary text-lg">{{$ticket->created_at}}</span>
                            </div>
                        </div>
                        <div class="bg-surface-container-low p-4 rounded-lg mb-6">
                            <span class="block text-[10px] uppercase text-on-surface-variant font-bold mb-2">Your Lucky Numbers</span>
                            <div class="flex flex-wrap gap-2">
                                <span class="w-8 h-8 rounded-full bg-surface-bright flex items-center justify-center font-bold text-xs border border-primary/20">07</span>
                                <span class="w-8 h-8 rounded-full bg-surface-bright flex items-center justify-center font-bold text-xs border border-primary/20">14</span>
                                <span class="w-8 h-8 rounded-full bg-surface-bright flex items-center justify-center font-bold text-xs border border-primary/20">23</span>
                                <span class="w-8 h-8 rounded-full bg-surface-bright flex items-center justify-center font-bold text-xs border border-primary/20">42</span>
                                <span class="w-8 h-8 rounded-full bg-primary/20 flex items-center justify-center font-bold text-xs border border-primary text-primary">PB</span>
                            </div>
                        </div>
                        <button class="w-full bg-gradient-to-r from-primary to-primary-dim py-3 rounded-full font-headline text-sm font-black uppercase tracking-widest text-on-primary active:scale-[0.96] transition-transform">
                            View Ticket Details
                        </button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    @else
        <p class="text-center text-gray-400">Ingresa tu DNI para ver tus tickets</p>
    @endif
</main>

<script>
    function filtrar(tipo, btn) {
        const items = document.querySelectorAll('.ticket-item');
        const botones = document.querySelectorAll('.filtro-btn');

        // 🔹 FILTRO
        items.forEach(item => {
            if (tipo === 'todos') {
                item.style.display = 'flex';
            } else {
                item.style.display = item.dataset.estado === tipo ? 'flex' : 'none';
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

@endsection