@extends('layouts.app')

@section('content')


<main class="pt-24 px-6 max-w-screen-xl mx-auto">
    <!-- Hero Section -->
    <section class="relative mb-12 rounded-3xl overflow-hidden bg-surface-container-high aspect-[21/9] flex items-center">
        <div class="absolute inset-0 z-0">
            <img alt="Winning Experience" class="w-full h-full object-cover opacity-40 mix-blend-luminosity" data-alt="dramatic wide shot of a luxury sports car on a dark stage with intense neon blue floor lighting and atmospheric smoke" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHVQcVVX224rSt3w8j1XMIWeVcSmRBvNT80_7Ndsg_j8mGiHBv3GwiwGKBB9H0qXO5w2aa8i0d-cW1fI6zpnTK4MNGktg8055tI-YRBx34weQ-Aul7GFdF9wHZEeAoDnBihm9dChVxr_AKwifruhB4m9THwWS_V5_9FzIiyFLx5yQc7XSu-oHAKKRKHG9gXiJo2uDdiSbmDPrEY4WaTgpTtW6xk9cablPEAyyxoVdehF45Tj5O-SPQJDudRXqZBM3vSC9lx-wd88E"/>
            <div class="absolute inset-0 bg-gradient-to-r from-surface via-surface/60 to-transparent"></div>
        </div>
        <div class="relative z-10 px-12 max-w-2xl">
            <span class="text-tertiary font-headline font-black uppercase tracking-[0.3em] text-sm mb-4 block">Recent Hall of Fame</span>
            <h2 class="text-5xl md:text-7xl font-headline font-black italic tracking-tighter mb-4 text-on-surface leading-tight">THEY DREAMT.<br/><span class="text-secondary">THEY WON.</span></h2>
            <p class="text-on-surface-variant text-lg max-w-md font-medium leading-relaxed">Join the circle of champions. Total transparency, real winners, life-changing prizes delivered daily.</p>
        </div>
    </section>

    <!-- Winners Bento Feed -->
    <div class="grid grid-cols-1 md:grid-cols-12 gap-6">        

        <!-- Regular Winner Grid Item 1 -->
        <div class="md:col-span-4 bg-surface-container-high rounded-[2rem] overflow-hidden flex flex-col border border-outline-variant/10 shadow-xl group">
            <div class="h-48 overflow-hidden relative">
                <img alt="iPhone Prize" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="macro close-up of a high-end smartphone camera lens with purple and blue light reflections on a dark glossy surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcRHibluPy8lW5PCQKPxp0WD85WJdbHtiAlwFRWeav97WahKTOcIu743xvHcaQiWu4M3nJt73xmtUX9mpKhYRX8ewcedCw6XkOgoLnU5zDnQXFvqhp84NwJz1G3AOnqFtsh8s0muzWI7BDtxdZ_THEA-AEWORW55hf3ihbEqprMojl-ivQnJ2m4vKApSF7A2C_C8_f8oQOiRGO2WrTefEawfyJfmi3Omqac0Gxj5tgbi4f9jSKScy8jgd7nsDp8p2kfVEsebzgles"/>
                <div class="absolute inset-0 bg-gradient-to-t from-surface-container-high to-transparent"></div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h5 class="font-headline font-bold text-on-surface">Sarah J***</h5>
                    <span class="text-outline text-[10px] font-bold uppercase">2h ago</span>
                </div>
                <p class="text-on-surface-variant text-sm mb-6 leading-relaxed">"Upgraded to the latest iPhone thanks to a single ticket! Unbelievable luck!"</p>
                <button class="w-full py-3 bg-surface-bright text-on-surface font-bold text-xs uppercase tracking-widest rounded-xl border border-outline-variant/30 hover:bg-surface-variant transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">link</span>
                        Verify Transaction
                </button>
            </div>
        </div>
        
        <!-- Regular Winner Grid Item 2 -->
        <div class="md:col-span-4 bg-surface-container-high rounded-[2rem] overflow-hidden flex flex-col border border-outline-variant/10 shadow-xl group">
            <div class="h-48 overflow-hidden relative">
                <img alt="Gaming Setup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="gamer setup with mechanical keyboard and mouse glowing in vibrant neon cyan and magenta lights in a dark room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByjoL0nUQ5DgTRdjr68tiUxxAkyRQpUs3QOFym1HJjKnsmJhrnDcq8RT1PKF7UCduJnPKxL3gH9FS_8zRXaGVdtkJ7f7mKd-O30J9o5-pHj3dpUxzuolrOmMlCc7n5VY4jpL2pxDwhWn5LY9udJl-tjTYzGcP8zHfGdQX8X0P30ZU7NSq9jhbBDRAWYnkyowFVqp0R4IRbmGhKBUfubwMna825tGxEFsTBtehRcmLB_wlFdml5UQagskPAx0VnjKkHAlHt9lQhOeg"/>
                <div class="absolute inset-0 bg-gradient-to-t from-surface-container-high to-transparent"></div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h5 class="font-headline font-bold text-on-surface">Alex R***</h5>
                    <span class="text-outline text-[10px] font-bold uppercase">5h ago</span>
                </div>
                <p class="text-on-surface-variant text-sm mb-6 leading-relaxed">"The dream battle station is finally complete. Neon Arena is legit, my prize arrived in 2 days."</p>
                <button class="w-full py-3 bg-surface-bright text-on-surface font-bold text-xs uppercase tracking-widest rounded-xl border border-outline-variant/30 hover:bg-surface-variant transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">link</span>
                            Verify Transaction
                </button>
            </div>
        </div>

        <!-- Regular Winner Grid Item 3 -->
        <div class="md:col-span-4 bg-surface-container-high rounded-[2rem] overflow-hidden flex flex-col border border-outline-variant/10 shadow-xl group">
            <div class="h-48 overflow-hidden relative">
                <img alt="PlayStation 5" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="sleek white gaming console standing vertically with blue LED accents against a dark moody architectural background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8FzQZpKTpeQPzRAd7xBLZgnCV7rdwcP1X18sJ4ETb706xH2TzbH-Q4YaicAIQlU0EdMtkZOCEI0wY90Wuj3rWSzZpTLgsiMxALDuCKQSl0nf3N4w6CXPTn_1OPf4aasRUciunApeAuSuP20SIZBaeUWqB3cr6OYbJkJASS6hIaoKPMOpJTaH91TDbyhr443p9MdqNbi3FR151vNqI6GiSNz3eeXtccvNugyWOuoNSZVC7azCHb1fCq1tMiiDnhbEEuyr0Z3yOe7Q"/>
                <div class="absolute inset-0 bg-gradient-to-t from-surface-container-high to-transparent"></div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h5 class="font-headline font-bold text-on-surface">David L***</h5>
                    <span class="text-outline text-[10px] font-bold uppercase">Yesterday</span>
                </div>
                <p class="text-on-surface-variant text-sm mb-6 leading-relaxed">"I've entered so many times and finally it happened! PS5 bundle secured."</p>
                <button class="w-full py-3 bg-surface-bright text-on-surface font-bold text-xs uppercase tracking-widest rounded-xl border border-outline-variant/30 hover:bg-surface-variant transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">link</span>
                            Verify Transaction
                </button>
            </div>
        </div>

        <!-- Regular Winner Grid Item 1 -->
        <div class="md:col-span-4 bg-surface-container-high rounded-[2rem] overflow-hidden flex flex-col border border-outline-variant/10 shadow-xl group">
            <div class="h-48 overflow-hidden relative">
                <img alt="iPhone Prize" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="macro close-up of a high-end smartphone camera lens with purple and blue light reflections on a dark glossy surface" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAcRHibluPy8lW5PCQKPxp0WD85WJdbHtiAlwFRWeav97WahKTOcIu743xvHcaQiWu4M3nJt73xmtUX9mpKhYRX8ewcedCw6XkOgoLnU5zDnQXFvqhp84NwJz1G3AOnqFtsh8s0muzWI7BDtxdZ_THEA-AEWORW55hf3ihbEqprMojl-ivQnJ2m4vKApSF7A2C_C8_f8oQOiRGO2WrTefEawfyJfmi3Omqac0Gxj5tgbi4f9jSKScy8jgd7nsDp8p2kfVEsebzgles"/>
                <div class="absolute inset-0 bg-gradient-to-t from-surface-container-high to-transparent"></div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h5 class="font-headline font-bold text-on-surface">Sarah J***</h5>
                    <span class="text-outline text-[10px] font-bold uppercase">2h ago</span>
                </div>
                <p class="text-on-surface-variant text-sm mb-6 leading-relaxed">"Upgraded to the latest iPhone thanks to a single ticket! Unbelievable luck!"</p>
                <button class="w-full py-3 bg-surface-bright text-on-surface font-bold text-xs uppercase tracking-widest rounded-xl border border-outline-variant/30 hover:bg-surface-variant transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">link</span>
                        Verify Transaction
                </button>
            </div>
        </div>
        
        <!-- Regular Winner Grid Item 2 -->
        <div class="md:col-span-4 bg-surface-container-high rounded-[2rem] overflow-hidden flex flex-col border border-outline-variant/10 shadow-xl group">
            <div class="h-48 overflow-hidden relative">
                <img alt="Gaming Setup" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="gamer setup with mechanical keyboard and mouse glowing in vibrant neon cyan and magenta lights in a dark room" src="https://lh3.googleusercontent.com/aida-public/AB6AXuByjoL0nUQ5DgTRdjr68tiUxxAkyRQpUs3QOFym1HJjKnsmJhrnDcq8RT1PKF7UCduJnPKxL3gH9FS_8zRXaGVdtkJ7f7mKd-O30J9o5-pHj3dpUxzuolrOmMlCc7n5VY4jpL2pxDwhWn5LY9udJl-tjTYzGcP8zHfGdQX8X0P30ZU7NSq9jhbBDRAWYnkyowFVqp0R4IRbmGhKBUfubwMna825tGxEFsTBtehRcmLB_wlFdml5UQagskPAx0VnjKkHAlHt9lQhOeg"/>
                <div class="absolute inset-0 bg-gradient-to-t from-surface-container-high to-transparent"></div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h5 class="font-headline font-bold text-on-surface">Alex R***</h5>
                    <span class="text-outline text-[10px] font-bold uppercase">5h ago</span>
                </div>
                <p class="text-on-surface-variant text-sm mb-6 leading-relaxed">"The dream battle station is finally complete. Neon Arena is legit, my prize arrived in 2 days."</p>
                <button class="w-full py-3 bg-surface-bright text-on-surface font-bold text-xs uppercase tracking-widest rounded-xl border border-outline-variant/30 hover:bg-surface-variant transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">link</span>
                            Verify Transaction
                </button>
            </div>
        </div>

        <!-- Regular Winner Grid Item 3 -->
        <div class="md:col-span-4 bg-surface-container-high rounded-[2rem] overflow-hidden flex flex-col border border-outline-variant/10 shadow-xl group">
            <div class="h-48 overflow-hidden relative">
                <img alt="PlayStation 5" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500" data-alt="sleek white gaming console standing vertically with blue LED accents against a dark moody architectural background" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA8FzQZpKTpeQPzRAd7xBLZgnCV7rdwcP1X18sJ4ETb706xH2TzbH-Q4YaicAIQlU0EdMtkZOCEI0wY90Wuj3rWSzZpTLgsiMxALDuCKQSl0nf3N4w6CXPTn_1OPf4aasRUciunApeAuSuP20SIZBaeUWqB3cr6OYbJkJASS6hIaoKPMOpJTaH91TDbyhr443p9MdqNbi3FR151vNqI6GiSNz3eeXtccvNugyWOuoNSZVC7azCHb1fCq1tMiiDnhbEEuyr0Z3yOe7Q"/>
                <div class="absolute inset-0 bg-gradient-to-t from-surface-container-high to-transparent"></div>
            </div>
            <div class="p-6">
                <div class="flex justify-between items-center mb-4">
                    <h5 class="font-headline font-bold text-on-surface">David L***</h5>
                    <span class="text-outline text-[10px] font-bold uppercase">Yesterday</span>
                </div>
                <p class="text-on-surface-variant text-sm mb-6 leading-relaxed">"I've entered so many times and finally it happened! PS5 bundle secured."</p>
                <button class="w-full py-3 bg-surface-bright text-on-surface font-bold text-xs uppercase tracking-widest rounded-xl border border-outline-variant/30 hover:bg-surface-variant transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined text-sm">link</span>
                            Verify Transaction
                </button>
            </div>
        </div>
    </div>


<!-- Transparency Banner -->
<section class="mt-12 bg-surface-container rounded-3xl p-8 border border-outline-variant/20 flex flex-col md:flex-row items-center gap-8 top-20">
<div class="flex-1">
<h4 class="text-2xl font-headline font-black text-on-surface mb-2 italic">BUILT ON TRUST. VERIFIED BY DATA.</h4>
<p class="text-on-surface-variant">Every single drawing in the Neon Arena is powered by a decentralized Random Number Generator. Your win is mathematically guaranteed to be fair, tamper-proof, and publicly verifiable on the blockchain.</p>
</div>
<div class="flex gap-4">
<img class="h-12 w-auto grayscale opacity-50" data-alt="logo of a blockchain technology company in white flat vector style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC3L3EzdXoRZOCO1Ew7HTsKaWR3Q6s_BjqvOOK1-dBAe2occ6Kc9WxBQv-_eaomBTAgmQDT1iIr9Cgh3ZlkPiOF5D8EmmIJboUeHiMTckwwxH8SWyuPYA2oH95AnjkgN7iusP4QNCVNxQBI-36-BVMR0jvoXth9eB5g3rVB3_N92rhR2bolkfLm3z724XafM8qq5qzpOKyn41Zl0AqzwrjJ3TjkA4QcnTpeJmvN9DCnnkk9BSXDjViEVOL5WpJ1yvTdO4sZaLgrGJA"/>
<img class="h-12 w-auto grayscale opacity-50" data-alt="logo of a security verification brand in white flat vector style" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPmvdo83FR011RAPbZ7qyrw3sbM8IbZXfAVC1bRm1XAMqrQCRtoxHbucxeMckBStNIvB1dm8F69qNK0swxLFKxMcLsCj00s1_cvo-KnqP93IpEaKhrjpBA4OSXA2PziQnLPvP2GKR7rX22JkNR8alx7AcgJVZiNAcLqoyqBfiIhBMNLKE96oN67G_qvGe-Q0M7uGyHjaOhD42slU_lWa37meG7PKeD1sFQo1-AbTQOmYhYIhzUGbnRit1gADNdazIrexpaZWjVuH8"/>
</div>
</section>
</main>

@endsection