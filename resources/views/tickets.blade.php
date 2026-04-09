@extends('layouts.app')

@section('content')


<main class="pt-24 pb-32 px-6 max-w-screen-xl mx-auto">
<!-- Header Section -->
<header class="mb-10">
<h2 class="font-headline text-5xl font-black tracking-tight mb-2 uppercase">Mis Tickets</h2>
<p class="text-on-surface-variant text-lg">Manage your entries and track upcoming draws.</p>
</header>
<!-- Stats Bento Grid -->
<div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-12">
<div class="bg-surface-container-highest p-6 rounded-xl flex flex-col justify-between h-32 hover:scale-[1.02] transition-transform">
<span class="text-on-surface-variant font-label text-xs uppercase tracking-widest">Active Entries</span>
<span class="font-headline text-4xl text-primary">08</span>
</div>
<div class="bg-surface-container-high p-6 rounded-xl flex flex-col justify-between h-32 hover:scale-[1.02] transition-transform">
<span class="text-on-surface-variant font-label text-xs uppercase tracking-widest">Total Wins</span>
<span class="font-headline text-4xl text-secondary">02</span>
</div>
<div class="bg-surface-container-low p-6 rounded-xl flex flex-col justify-between h-32 hover:scale-[1.02] transition-transform border border-outline-variant/10">
<span class="text-on-surface-variant font-label text-xs uppercase tracking-widest">Rewards Earned</span>
<div class="flex items-baseline gap-1">
<span class="font-headline text-4xl text-tertiary">$1,420</span>
<span class="text-xs text-tertiary-dim">USD</span>
</div>
</div>
</div>
<!-- Filter Tabs -->
<div class="flex gap-4 mb-8 overflow-x-auto no-scrollbar pb-2">
<button class="bg-primary text-on-primary-container px-6 py-2.5 rounded-full font-bold text-sm transition-all active:scale-95">Active</button>
<button class="bg-surface-variant text-on-surface-variant px-6 py-2.5 rounded-full font-bold text-sm hover:bg-surface-bright transition-all active:scale-95">Past</button>
<button class="bg-surface-variant text-on-surface-variant px-6 py-2.5 rounded-full font-bold text-sm hover:bg-surface-bright transition-all active:scale-95">Won</button>
</div>
<!-- Ticket Cards Grid -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
<!-- Ticket Card 1: Active -->
<div class="group bg-surface-container rounded-xl overflow-hidden shadow-2xl relative">
<div class="flex flex-col md:flex-row">
<div class="md:w-48 h-48 md:h-auto overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Luxury midnight blue sports car in a high-tech showroom with neon accents and dramatic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCUVPV55EGL4rl7pLalm4eyAEXrBlqABxmw6yFmpq9k1Ltm99klMrqh6AF2LDCn8mPU3KBY22zuR3sYkT4iJrlsKYMpa_XCw4ZjEju0X4SlVOkee5IpI3WhrdIJ46sGVD_sImGaxjb3CZxFmSK0rUNCggq96cEiD4YMwSMMWKNeT5XOxTmVoChd-gJ8st-xx8EiPxy_9ITD95_b8z3IFNUql6uy4htABbRiDpi-DfFYvGNRjX4tCIXUTSelX_9ZihpaUwZ7HKaGIS8"/>
<div class="absolute top-3 left-3 px-3 py-1 bg-tertiary/20 backdrop-blur-md rounded-full border border-tertiary/30">
<span class="text-tertiary text-[10px] font-bold uppercase tracking-tighter">Active</span>
</div>
</div>
<div class="flex-1 p-6">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="font-headline text-xl font-bold leading-tight">Supercar Sweepstakes #042</h3>
<p class="text-on-surface-variant text-xs mt-1">Prize Value: $120,000</p>
</div>
<div class="text-right">
<span class="block text-[10px] uppercase text-on-surface-variant font-bold">Draws In</span>
<span class="font-headline text-primary text-lg">04:12:45</span>
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
<!-- Ticket Card 2: Drawing Soon -->
<div class="group bg-surface-container rounded-xl overflow-hidden shadow-2xl relative">
<div class="flex flex-col md:flex-row">
<div class="md:w-48 h-48 md:h-auto overflow-hidden relative">
<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" data-alt="Exclusive luxury wristwatch with sapphire crystal on a dark velvet display case with warm cinematic lighting" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9lK0PJIc2uY36QaruzDJ3ZdvLXLcUL9eQa6sHwpQwi52VimTZB28mUCCC6MvdQkVbzUyo2CKsAsXESureCbXFFXASFZYRCabqSi5ezNLUZzy4K58ObIOOQBYI9jqTfKnWiwM-Zq_K-FLadxcJXJxGslguWE59V7AMYZPU547-Vru-Sru7WJutV0A_yseYs2i7zEbxkoN0oUDeB2ilNu40BRRjtdpUwDxGZDxIcSV_i2gRFFq2l-ZpHV0FlzmXmA9GTFVxwKTMXVI"/>
<div class="absolute top-3 left-3 px-3 py-1 bg-secondary/20 backdrop-blur-md rounded-full border border-secondary/30">
<span class="text-secondary text-[10px] font-bold uppercase tracking-tighter">Drawing Soon</span>
</div>
</div>
<div class="flex-1 p-6">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="font-headline text-xl font-bold leading-tight">Masterpiece Watch Edition</h3>
<p class="text-on-surface-variant text-xs mt-1">Prize Value: $18,500</p>
</div>
<div class="text-right">
<span class="block text-[10px] uppercase text-on-surface-variant font-bold">Draws In</span>
<span class="font-headline text-secondary text-lg">00:15:02</span>
</div>
</div>
<div class="bg-surface-container-low p-4 rounded-lg mb-6">
<span class="block text-[10px] uppercase text-on-surface-variant font-bold mb-2">Your Lucky Numbers</span>
<div class="flex flex-wrap gap-2">
<span class="w-8 h-8 rounded-full bg-surface-bright flex items-center justify-center font-bold text-xs border border-outline-variant/30">11</span>
<span class="w-8 h-8 rounded-full bg-surface-bright flex items-center justify-center font-bold text-xs border border-outline-variant/30">19</span>
<span class="w-8 h-8 rounded-full bg-surface-bright flex items-center justify-center font-bold text-xs border border-outline-variant/30">22</span>
<span class="w-8 h-8 rounded-full bg-surface-bright flex items-center justify-center font-bold text-xs border border-outline-variant/30">35</span>
</div>
</div>
<button class="w-full bg-surface-bright border border-outline-variant/20 py-3 rounded-full font-headline text-sm font-black uppercase tracking-widest text-on-surface active:scale-[0.96] transition-transform">
                            Monitor Live Draw
                        </button>
</div>
</div>
</div>
<!-- Ticket Card 3: Past / Finished -->
<div class="group bg-surface-container rounded-xl overflow-hidden shadow-2xl relative opacity-80 grayscale-[0.5] hover:grayscale-0 hover:opacity-100 transition-all">
<div class="flex flex-col md:flex-row">
<div class="md:w-48 h-48 md:h-auto overflow-hidden relative">
<img class="w-full h-full object-cover" data-alt="Interior of a modern high-end minimalist penthouse with floor to ceiling windows at dusk overlooking a city" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAceZpyusNtWFQYechRI3xkNAgfUSFFAwamb_jbt9YnY3iWdDaQChzGOI4TEb95KoV2RPElQMJMJgTmNvqljG-CX0rrBcfgBF8vER4ZGM8eBLYiCDTSZvjMtuNOZASMXHrjE2JVI06kOe3aeXMkxUas_MFxZpIw4eCoaGOOMgs09QXNbMDiuioqgrNA6Vjewu73MMcMbQGlrkXYofgYNMDy9BkOQCokL7R9Lm09WacPtpr6NFN0c_GCW26H2mR_MDuWMkSyqOuyQ0"/>
<div class="absolute top-3 left-3 px-3 py-1 bg-surface-variant/80 backdrop-blur-md rounded-full border border-outline-variant/30">
<span class="text-on-surface-variant text-[10px] font-bold uppercase tracking-tighter">Finished</span>
</div>
</div>
<div class="flex-1 p-6">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="font-headline text-xl font-bold leading-tight">Dream Loft Giveaway</h3>
<p class="text-on-surface-variant text-xs mt-1">Prize Value: $850,000</p>
</div>
<div class="text-right">
<span class="block text-[10px] uppercase text-on-surface-variant font-bold">Status</span>
<span class="font-headline text-error text-lg uppercase italic">Missed</span>
</div>
</div>
<div class="bg-surface-container-low p-4 rounded-lg mb-6">
<span class="block text-[10px] uppercase text-on-surface-variant font-bold mb-2">Winning Numbers</span>
<div class="flex flex-wrap gap-2">
<span class="w-8 h-8 rounded-full bg-error-container/20 flex items-center justify-center font-bold text-xs text-error">03</span>
<span class="w-8 h-8 rounded-full bg-error-container/20 flex items-center justify-center font-bold text-xs text-error">21</span>
<span class="w-8 h-8 rounded-full bg-error-container/20 flex items-center justify-center font-bold text-xs text-error">27</span>
<span class="w-8 h-8 rounded-full bg-error-container/20 flex items-center justify-center font-bold text-xs text-error">48</span>
</div>
</div>
<button class="w-full bg-surface-container-highest border border-outline-variant/10 py-3 rounded-full font-headline text-sm font-black uppercase tracking-widest text-on-surface-variant/60 cursor-not-allowed">
                            View Results History
                        </button>
</div>
</div>
</div>
<!-- Ticket Card 4: Won -->
<div class="group bg-surface-container rounded-xl overflow-hidden shadow-2xl relative border-2 border-secondary/50">
<div class="flex flex-col md:flex-row">
<div class="md:w-48 h-48 md:h-auto overflow-hidden relative">
<img class="w-full h-full object-cover" data-alt="Modern VR headset and high-end gaming station with vibrant RGB lighting in a dark futuristic room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCj5EMrKBhWhOAl8rAd7AVGwkm6mfoLZ0yrfOIpjYWZLiH-mxKA65F-19d15dAQS1k0fo0HuggMi8dsE-VhUlXXKbyHpX0YN8agFQJylURLj_3IH-oZ-bJvT1PxUITyNooFzUzCeNWG-3jxYNYthS_oW-8tnzcZoOJgSNaYc81Yc6PNcHVy4tigornLzCRGOOXPatWr9Uom8DkXHiimkd0Fn332nuYJrRyPxrjs4mBsDoY5RqrOlnvIvbGIi8V6fGp1XRGRiKAPPVM"/>
<div class="absolute inset-0 bg-secondary/10 backdrop-overlay"></div>
<div class="absolute top-3 left-3 px-3 py-1 bg-secondary text-on-secondary rounded-full">
<span class="text-[10px] font-black uppercase tracking-tighter">Winner</span>
</div>
</div>
<div class="flex-1 p-6">
<div class="flex justify-between items-start mb-4">
<div>
<h3 class="font-headline text-xl font-bold leading-tight">Next-Gen Gaming Setup</h3>
<p class="text-on-surface-variant text-xs mt-1">Prize Value: $5,200</p>
</div>
<div class="text-right">
<span class="block text-[10px] uppercase text-on-surface-variant font-bold">Claim Status</span>
<span class="font-headline text-tertiary text-lg uppercase italic">Ready</span>
</div>
</div>
<div class="bg-secondary-container/20 p-4 rounded-lg mb-6 border border-secondary/20">
<span class="block text-[10px] uppercase text-secondary font-bold mb-2">Your Winning Numbers</span>
<div class="flex flex-wrap gap-2">
<span class="w-8 h-8 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-bold text-xs">08</span>
<span class="w-8 h-8 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-bold text-xs">13</span>
<span class="w-8 h-8 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-bold text-xs">24</span>
<span class="w-8 h-8 rounded-full bg-secondary text-on-secondary flex items-center justify-center font-bold text-xs">31</span>
</div>
</div>
<button class="w-full bg-secondary text-on-secondary py-3 rounded-full font-headline text-sm font-black uppercase tracking-widest hover:bg-secondary-dim transition-all active:scale-[0.96]">
                            Claim Your Prize
                        </button>
</div>
</div>
</div>
</div>
</main>

@endsection