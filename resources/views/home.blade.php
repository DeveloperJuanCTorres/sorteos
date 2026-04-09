@extends('layouts.app')

@section('content')


<main class="pb-32 px-4 md:px-8 max-w-7xl mx-auto space-y-16">
<!-- Hero Section: Featured Sweepstakes -->
<section class="relative rounded-[2rem] overflow-hidden min-h-[500px] flex items-end p-8 md:p-16 group">
<div class="absolute inset-0 z-0">
<img alt="Tesla Sweepstakes" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" data-alt="high performance electric sports car in a dark futuristic showroom with electric blue neon lights and polished floor reflections" src="img/banner1.jpg"/>
<div class="absolute inset-0 bg-gradient-to-t from-background via-background/40 to-transparent"></div>
</div>
<div class="relative z-10 w-full max-w-2xl">
<div class="inline-flex items-center gap-2 px-4 py-1 rounded-full bg-tertiary-container/20 backdrop-blur-md border border-tertiary/20 text-tertiary mb-6">
<span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
<span class="text-xs font-black tracking-widest uppercase font-label">Sorteo Destacado</span>
</div>
<h1 class="text-5xl md:text-7xl font-headline font-black tracking-tighter leading-[0.9] mb-4">
                    TESLA MODEL S <br/><span class="text-primary italic">PLAID EDITION</span>
</h1>
<div class="flex flex-wrap items-center gap-6 mt-8">
<div class="flex gap-4">
<div class="bg-surface-container-highest/80 backdrop-blur-md p-4 rounded-xl border-b-2 border-primary">
<span class="block text-2xl font-black font-headline tracking-tighter">04</span>
<span class="text-[10px] uppercase font-black text-on-surface-variant tracking-widest">Días</span>
</div>
<div class="bg-surface-container-highest/80 backdrop-blur-md p-4 rounded-xl border-b-2 border-primary">
<span class="block text-2xl font-black font-headline tracking-tighter">18</span>
<span class="text-[10px] uppercase font-black text-on-surface-variant tracking-widest">Hrs</span>
</div>
<div class="bg-surface-container-highest/80 backdrop-blur-md p-4 rounded-xl border-b-2 border-primary">
<span class="block text-2xl font-black font-headline tracking-tighter">42</span>
<span class="text-[10px] uppercase font-black text-on-surface-variant tracking-widest">Min</span>
</div>
</div>
<button class="bg-gradient-to-r from-primary to-primary-dim text-on-primary-fixed px-10 py-3 rounded-full font-headline font-black text-xl uppercase tracking-tighter shadow-[0_0_40px_rgba(144,171,255,0.4)] hover:shadow-[0_0_60px_rgba(144,171,255,0.6)] transition-all active:scale-95 duration-200">
                        Participar Ahora
                    </button>
</div>
</div>
</section><section class="relative bg-surface-container-low rounded-3xl overflow-hidden border border-primary/20 p-6 md:p-8 flex flex-col md:flex-row items-center justify-between gap-8 shadow-[0_0_30px_rgba(37,99,235,0.15)]">
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
<span class="text-3xl md:text-5xl font-headline font-black text-primary">02</span>
</div>
<span class="text-[10px] font-black uppercase tracking-widest mt-2 text-on-surface-variant">Días</span>
</div>
<div class="flex flex-col items-center">
<div class="bg-background border-2 border-primary/40 w-16 h-20 md:w-20 md:h-24 rounded-xl flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.2)]">
<span class="text-3xl md:text-5xl font-headline font-black text-primary">14</span>
</div>
<span class="text-[10px] font-black uppercase tracking-widest mt-2 text-on-surface-variant">Hrs</span>
</div>
<div class="flex flex-col items-center">
<div class="bg-background border-2 border-primary/40 w-16 h-20 md:w-20 md:h-24 rounded-xl flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.2)]">
<span class="text-3xl md:text-5xl font-headline font-black text-primary">52</span>
</div>
<span class="text-[10px] font-black uppercase tracking-widest mt-2 text-on-surface-variant">Min</span>
</div>
<div class="flex flex-col items-center">
<div class="bg-background border-2 border-primary/40 w-16 h-20 md:w-20 md:h-24 rounded-xl flex items-center justify-center shadow-[0_0_20px_rgba(37,99,235,0.3)] ring-2 ring-primary/20">
<span class="text-3xl md:text-5xl font-headline font-black text-primary">18</span>
</div>
<span class="text-[10px] font-black uppercase tracking-widest mt-2 text-primary animate-pulse">Seg</span>
</div>
</div>
<button class="relative z-10 bg-primary hover:bg-primary-dim text-on-primary-fixed px-8 py-4 rounded-2xl font-headline font-black uppercase tracking-tighter transition-all active:scale-95 shadow-[0_0_30px_rgba(37,99,235,0.4)]">
    Obtener Tickets
  </button>
</section>
<!-- Proof Banner -->
<div class="bg-surface-container-low rounded-3xl p-6 flex flex-col md:flex-row items-center justify-between gap-6 border-l-4 border-secondary shadow-lg">
<div class="flex items-center gap-4">
<div class="w-12 h-12 bg-secondary/20 rounded-2xl flex items-center justify-center">
<span class="material-symbols-outlined text-secondary text-3xl" data-icon="stars" data-weight="fill">stars</span>
</div>
<div>
<p class="text-secondary font-black font-headline text-xl uppercase italic tracking-tight">Victoria de Elite</p>
<p class="text-on-surface-variant text-sm">Más de $1,000,000 entregados en premios reales.</p>
</div>
</div>
<div class="flex -space-x-4">
<img alt="Winner" class="w-10 h-10 rounded-full border-2 border-surface" data-alt="portrait of a happy person with celebratory expression" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDaaAg4_3fO3aWFnJwProMeUXZqWytAh8FQU4wumoLHqhhH0bHWFhC3iMBjk650ZJCZL9QaAKMrS2vGD-sPU7hz_n2kC6tFqDbZ4uPCWjJstKkf6soD1Otz8kCYVNYC-RtLR0usQZjGqMLu_KFMWXxhOfHI3djp9v12WABfcOmHJfdRWtSgxlA2gsrZWNRZxWITMRURBgLvLbjlfqB2GnSfjmuA9AbWJNr5qL-XCKBexl7oOPpOjkRvoSujGM8UDNm7Y_pgwlkstS0"/>
<img alt="Winner" class="w-10 h-10 rounded-full border-2 border-surface" data-alt="portrait of a smiling woman with colorful lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBUyp-cA41nxitpq7nR8P-cl5qoduP9xLNGVS-5UMPSAKc5gouTFyX1K1KIJ5dVqCJ0mpfW1pKKaNzG41ku0Qr8N7Xcv1ns_eQmxJlgUxdrGW0pPz58ghZYTsL9rFaNTDYa7Evr8_mZ-vPqZOnWL-wdHY1PKid0E2EmVSnanvzpqEBtcmbdM7DPlAe5rsj_rkQtntchZImTtMaI4vvr8tBfuGYsZanPsi6qYtTR68lDGhFCbUOhlulReiUqtN9IXIPusdmTKmv8XYo"/>
<img alt="Winner" class="w-10 h-10 rounded-full border-2 border-surface" data-alt="portrait of a happy man against tech background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDZuUoCPMCG_1sN-edWbyGvKsHCmGofO70GCQXvebr4-u6QHeXxQS5KIy4ntpVYjWC10O_GSW80sL-jVDdA0_gnAbwnyKcTLRC4K27D_zPDR5zKB7Xk6PHLwcMuAHAxiEeg1ZiSq9pb1ejbo1uKfw6XMAU97JskAiU5zR_WBEe0EAW8Ew0URX4C8Y44uctXQWoKHl7Nf1jzE7CCsLUH4w9jn0ZMsAx68xvhvggO1Q6b6BI79Je9oJOxogwUyjoMiUj3CrGKu8pay_Q"/>
<div class="w-10 h-10 rounded-full border-2 border-surface bg-surface-bright flex items-center justify-center text-[10px] font-bold text-primary">+5k</div>
</div>
</div>

<!-- Popular Sweepstakes Grid -->
<section>
<div class="flex justify-between items-end mb-8">
<div>
<h2 class="text-3xl font-headline font-black uppercase tracking-tighter">Próximo <span class="text-primary-container">Sorteo</span></h2>
<p class="text-on-surface-variant text-sm mt-1 uppercase tracking-widest font-black">Tu próxima victoria está a un ticket de distancia</p>
</div>
<button class="text-primary font-black uppercase text-sm tracking-widest hover:underline transition-all">Ver todos</button>
</div>
<div class="grid grid-cols-1 md:grid-cols-3 gap-8">
<!-- Card 1 -->
<div class="bg-surface-container-highest rounded-[1.5rem] overflow-hidden group border border-outline-variant/10">
<div class="relative h-48">
<img alt="Setup" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="insane gaming setup with three monitors, vertical rgb strips, high end pc case, and ergonomic chair in a dark room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCOWasipNTByRBCmYjYKfb96YFb9UJB6g8ZvZoDocfpwHpvOrGAlLQeYzdRWnca6EoiIVsD0lTYQ4vnFx6vu6Egllmg7-nLkZWOYswiGFulFXZKesRByPFQBQZNPdu-tbYIz_9cuMjCicuZa7josr_mck8iupxuYc4oGfbIXP3gnt9deEVL9lmc9UFXtukpxd--xHcABx9K-6gP0Hgr0R0MMtjvByzixYF5LoYso91lgJ_tZRIg1B2TSLqjczrZ0IEqBVcsIYfd9_I"/>
<div class="absolute top-4 right-4 bg-background/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest border border-primary/20 text-primary">
                            12h restantes
                        </div>
</div>
<div class="p-6 space-y-4">
<div class="flex justify-between items-start">
<h3 class="font-headline font-black text-xl uppercase tracking-tighter leading-tight">Ultimate PC <br/>Gaming Setup</h3>
<span class="text-secondary font-black text-lg font-headline tracking-tighter">$5.00</span>
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
<button class="w-full py-3 bg-surface-bright text-on-surface font-black uppercase text-xs tracking-widest rounded-full hover:bg-primary hover:text-on-primary-fixed transition-all">Participar</button>
</div>
</div>
<!-- Card 2 -->
<div class="bg-surface-container-highest rounded-[1.5rem] overflow-hidden group border border-outline-variant/10">
<div class="relative h-48">
<img alt="Travel" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="luxurious overwater bungalow in Maldives at sunset with crystal clear turquoise water and dramatic sky" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBKixUvnBcw9vaX1plBBYUdfmdA1oMFWfiBCtr6wYhwt5umYuUk3BnA4JHj3O6sY3KzoZmR3MBeR9sd3d32aZL6o7n0b4g_dQgyXf4BUPAzFNuyCyiHz_QdIP9KNE6W4p3tINrmAgPl2eLYlPDMb4xybUQBPbXWUXNA2m_sltINfAyKzv1-t4GK5iZjNAOjNXfHsoYqDgiVKfeUrQY01IaHuL1vEpdSlp-60FWtxKOtnK2I-cwvjOoVVqDBiIyVZck5ji2cU5RMsvM"/>
<div class="absolute top-4 right-4 bg-background/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest border border-primary/20 text-primary">
                            2d restantes
                        </div>
</div>
<div class="p-6 space-y-4">
<div class="flex justify-between items-start">
<h3 class="font-headline font-black text-xl uppercase tracking-tighter leading-tight">Maldivas <br/>VIP Experience</h3>
<span class="text-secondary font-black text-lg font-headline tracking-tighter">$15.00</span>
</div>
<div class="space-y-2">
<div class="flex justify-between text-[10px] font-black uppercase tracking-widest text-on-surface-variant">
<span>Progreso</span>
<span class="text-primary">42%</span>
</div>
<div class="h-2 w-full bg-surface-container-low rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full shadow-[0_0_10px_rgba(144,171,255,0.5)]" style="width: 42%"></div>
</div>
</div>
<button class="w-full py-3 bg-surface-bright text-on-surface font-black uppercase text-xs tracking-widest rounded-full hover:bg-primary hover:text-on-primary-fixed transition-all">Participar</button>
</div>
</div>
<!-- Card 3 -->
<div class="bg-surface-container-highest rounded-[1.5rem] overflow-hidden group border border-outline-variant/10">
<div class="relative h-48">
<img alt="Cash" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" data-alt="abstract stacks of high denomination bank notes with blue aesthetic atmospheric lighting and motion blur" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwsn8QX9oAFvoTFzmmWJm4LjFRwo8m11CL8_xlw_ZQgDOmeWHjBc8QsDaMRuhV5Qw20Q3b1Xwev7O_3LgsRFTvh49lWHzpYv0u59gMGpS8iiVxPHlr6-vpGjOLlyYmtHaVlE6dLZIkLDCY_vW4WP486Fw-Vgyw_qIUYGUmJfhRS4FvRQ0Z1K5epUvRIhZK0ZwRjuFJGoln4FideYcfA_RD9c7rU2sPpqYf4oqHinXqsnhfkFH4lr-ePnjBWRBD7hhcQh5qR6jT4e0"/>
<div class="absolute top-4 right-4 bg-background/80 backdrop-blur-md px-3 py-1 rounded-full text-[10px] font-black uppercase tracking-widest border border-primary/20 text-primary">
                            6h restantes
                        </div>
</div>
<div class="p-6 space-y-4">
<div class="flex justify-between items-start">
<h3 class="font-headline font-black text-xl uppercase tracking-tighter leading-tight">$10,000 <br/>Efectivo Instantáneo</h3>
<span class="text-secondary font-black text-lg font-headline tracking-tighter">$2.50</span>
</div>
<div class="space-y-2">
<div class="flex justify-between text-[10px] font-black uppercase tracking-widest text-on-surface-variant">
<span>Progreso</span>
<span class="text-primary">91%</span>
</div>
<div class="h-2 w-full bg-surface-container-low rounded-full overflow-hidden">
<div class="h-full bg-primary rounded-full shadow-[0_0_10px_rgba(144,171,255,0.5)]" style="width: 91%"></div>
</div>
</div>
<button class="w-full py-3 bg-surface-bright text-on-surface font-black uppercase text-xs tracking-widest rounded-full hover:bg-primary hover:text-on-primary-fixed transition-all">Participar</button>
</div>
</div>
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
<!-- BottomNavBar Shell (Mobile Only) -->
<nav class="md:hidden fixed bottom-0 left-0 w-full flex justify-around items-center px-4 pb-6 pt-3 bg-[#060e20]/90 backdrop-blur-xl z-50 rounded-t-[1.5rem] no-border tonal-layering shadow-[0_-4px_24px_rgba(144,171,255,0.1)]">
<a class="flex flex-col items-center justify-center bg-blue-500/20 text-blue-400 rounded-2xl px-6 py-2 scale-110 transition-transform" href="#">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="font-inter text-[10px] font-bold uppercase tracking-widest mt-1">Inicio</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-500 py-2 hover:bg-blue-500/10 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="confirmation_number">confirmation_number</span>
<span class="font-inter text-[10px] font-bold uppercase tracking-widest mt-1">Tickets</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-500 py-2 hover:bg-blue-500/10 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="emoji_events">emoji_events</span>
<span class="font-inter text-[10px] font-bold uppercase tracking-widest mt-1">Ganadores</span>
</a>
<a class="flex flex-col items-center justify-center text-slate-500 py-2 hover:bg-blue-500/10 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-inter text-[10px] font-bold uppercase tracking-widest mt-1">Perfil</span>
</a>
</nav>
@endsection