@extends('layouts.app')

@section('title', 'Deins&Meins - Geburtstags Frühstück')

@section('tailwind-config')
tailwind.config = {
    theme: {
        extend: {
            colors: {
                "primary": "#5BA676",
                "primary-dark": "#3E7B54",
                "primary-light": "#E8F5E9",
                "text-main": "#2C3E34",
                "text-muted": "#6B7C75",
                "background-page": "#F9FCFA",
                "surface-white": "#ffffff",
            },
            fontFamily: {
                "sans": ["Spline Sans", "sans-serif"],
                "serif": ["Playfair Display", "serif"],
            },
            borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "2xl": "2rem", "3xl": "3rem", "full": "9999px"},
        },
    },
}
@endsection

@section('body-class', 'bg-background-page text-text-main font-sans antialiased overflow-x-hidden selection:bg-primary selection:text-white')

@section('content')
<div class="relative flex flex-col min-h-screen w-full">
<header class="sticky top-0 z-50 w-full bg-white/90 backdrop-blur-md border-b border-border-light transition-all duration-300">
<div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4 md:px-10">
<div class="flex items-center gap-3">
<img src="/photos/image.png" alt="Deins&Meins Logo" class="h-10 w-auto">
</div>
<div class="hidden md:flex flex-1 justify-center items-center">
<nav class="flex items-center gap-8">
<a class="text-sm font-medium hover:text-primary-dark transition-colors relative group" href="/">Home<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span></a>
<a class="text-sm font-medium hover:text-primary-dark transition-colors relative group" href="/uberuns">Wir<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span></a>
<a class="text-sm font-medium hover:text-primary-dark transition-colors relative group" href="/birthday">GEBURTSTAGS FRÜHSTÜCK<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span></a>
<a class="text-sm font-medium hover:text-primary-dark transition-colors relative group" href="/picknick">Pic Nick Tasche<span class="absolute -bottom-1 left-0 w-0 h-0.5 bg-primary transition-all group-hover:w-full"></span></a>
</nav>
</div>
<button class="md:hidden flex items-center text-text-main hover:text-primary transition-colors">
<span class="material-symbols-outlined text-3xl">menu</span>
</button>
</div>
</header>
<main class="flex-1 flex flex-col items-center w-full">
<section class="w-full max-w-[1200px] px-4 lg:px-10 py-8 lg:py-12">
<div class="relative w-full rounded-2xl lg:rounded-[3rem] overflow-hidden min-h-[500px] lg:min-h-[600px] flex items-center justify-center bg-cover bg-center shadow-2xl shadow-primary/5" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuCuGulnZ4FDHyRZ8-RKBoaj9W7QoTBf40NRZ76yu9aQW5-qjELoMWltqw76xw_IPvWCTh0iwBodYJWXT5tUy16CplruCMpj5KVjMmzQfYEi6qnVL036FbpcWRSS6kXZpWowLchIuAdSr2bGWdwFwDEjZ1t7uzc_LlNONkRd9yy9VDY34s9j8dME_jbz83_U1OT-oRtX6B4hjMjxKo0fkzqrSsEN9tcjMLEqam6VGa6nHWMzGfZ1sjCQO5QG3aqyA8mlWe5VomjqzR8");'>
<div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
<div class="absolute inset-0 bg-primary/10 mix-blend-multiply"></div>
<div class="relative z-10 flex flex-col items-center gap-6 max-w-3xl text-center px-6">
<div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/20 backdrop-blur-md border border-white/30 text-white">
<span class="material-symbols-outlined text-sm">cake</span>
<span class="text-xs font-bold uppercase tracking-widest">Geburtstags-Special</span>
</div>
<h1 class="text-white text-5xl md:text-6xl lg:text-7xl font-serif font-medium leading-[1.1] drop-shadow-lg">Geburtstags <br/> <span class="italic text-primary-light">Frühstück</span></h1>
<p class="text-white/90 text-lg md:text-xl font-light leading-relaxed max-w-xl mx-auto drop-shadow-md">DU HAST GEBURTSTAG? ODER DU MÖCHTEST DAS GEBURTSTAGSKIND ÜBERRASCHEN?<br/>Was gibt es schöneres als einen entspannten Start in den Tag und mit einem schönen gesunden Frühstück ins neue Lebensjahr zu starten?</p>
<div class="flex flex-col sm:flex-row gap-4 mt-6">
<button class="px-8 py-3.5 rounded-full bg-white text-primary-dark text-base font-bold hover:bg-gray-50 transition-colors shadow-xl">Reserve Your Table</button>
<button class="px-8 py-3.5 rounded-full bg-transparent border border-white text-white text-base font-medium hover:bg-white/10 transition-colors backdrop-blur-sm">View Menu PDF</button>
</div>
</div>
</div>
</section>
<div class="w-full max-w-[800px] px-6 py-12 text-center">
<span class="text-primary text-sm font-bold uppercase tracking-widest mb-3 block">Hier ein paar Vorschläge</span>
<h2 class="text-4xl md:text-5xl font-serif text-text-main mb-4">Geburtstags TISCH</h2>
<p class="text-text-muted text-lg font-light">Du und Deine Gäste müssen nur noch - am liebevoll gedeckten Tisch - platz nehmen und genießen.</p>
</div>
<section class="w-full max-w-[1200px] px-4 lg:px-10 pb-20">
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-start">
<div class="bg-surface-white rounded-3xl p-6 border border-gray-100 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_50px_-10px_rgba(0,0,0,0.1)] transition-all duration-300 flex flex-col gap-5 group h-full">
<div>
<h3 class="text-xl font-serif text-text-main">Happy Birthday</h3>
<div class="mt-3 flex items-baseline gap-1 text-primary-dark">
<span class="text-3xl font-serif">€11.00</span>
<span class="text-xs font-medium text-text-muted">/ Person</span>
</div>
</div>
<hr class="border-dashed border-gray-200"/>
<ul class="flex flex-col gap-2 flex-1 text-xs">
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Wurst Etageren</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Käse Etageren</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Marmelade</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Puccola (hausgemachtes Müsli)</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Obstsalat mit frischem Minzzucker</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Brötchen und Brot</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Wasserkaraffen incl. refill</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Tischdeko und gedeckter Tisch</span></li>
</ul>
<button class="w-full py-2.5 rounded-xl border border-primary text-primary text-sm font-semibold hover:bg-primary hover:text-white transition-all duration-300 mt-auto">Auswählen</button>
</div>
<div class="bg-surface-white rounded-3xl p-6 border border-gray-100 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_50px_-10px_rgba(0,0,0,0.1)] transition-all duration-300 flex flex-col gap-5 group h-full">
<div>
<h3 class="text-xl font-serif text-text-main">Happy Birthday plus</h3>
<div class="mt-3 flex items-baseline gap-1 text-primary-dark">
<span class="text-3xl font-serif">€13.00</span>
<span class="text-xs font-medium text-text-muted">/ Person</span>
</div>
</div>
<hr class="border-dashed border-gray-200"/>
<ul class="flex flex-col gap-2 flex-1 text-xs">
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Wurst Etageren</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Käse Etageren</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Rühr oder Spiegeleier</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Marmelade</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Puccola (hausgemachtes Müsli)</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Obstsalat mit frischem Minzzucker</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Brötchen und Brot</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Wasserkaraffen incl. refill</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Tischdeko und gedeckter Tisch</span></li>
</ul>
<button class="w-full py-2.5 rounded-xl border border-primary text-primary text-sm font-semibold hover:bg-primary hover:text-white transition-all duration-300 mt-auto">Auswählen</button>
</div>
<div class="relative bg-surface-white rounded-3xl p-6 border-2 border-primary/20 shadow-[0_20px_60px_-15px_rgba(91,166,118,0.15)] flex flex-col gap-5 h-full z-10">
<div class="absolute -top-3 left-1/2 -translate-x-1/2 bg-primary text-white text-[10px] font-bold uppercase tracking-wider px-3 py-1 rounded-full shadow-lg">Beliebt</div>
<div>
<h3 class="text-xl font-serif text-text-main">Happy Birthday extra plus</h3>
<div class="mt-3 flex items-baseline gap-1 text-primary">
<span class="text-3xl font-serif">€15.00</span>
<span class="text-xs font-medium text-text-muted">/ Person</span>
</div>
</div>
<hr class="border-primary/10"/>
<ul class="flex flex-col gap-2 flex-1 text-xs">
<li class="flex items-start gap-2 text-text-main font-medium"><span class="material-symbols-outlined text-primary text-base">check_circle</span><span>Wurst Etageren</span></li>
<li class="flex items-start gap-2 text-text-main font-medium"><span class="material-symbols-outlined text-primary text-base">check_circle</span><span>Käse Etageren</span></li>
<li class="flex items-start gap-2 text-text-main font-medium"><span class="material-symbols-outlined text-primary text-base">check_circle</span><span>Rühr oder Spiegeleier</span></li>
<li class="flex items-start gap-2 text-text-main font-medium"><span class="material-symbols-outlined text-primary text-base">check_circle</span><span>Marmelade</span></li>
<li class="flex items-start gap-2 text-text-main font-medium"><span class="material-symbols-outlined text-primary text-base">check_circle</span><span>Puccola (hausgemachtes Müsli)</span></li>
<li class="flex items-start gap-2 text-text-main font-medium"><span class="material-symbols-outlined text-primary text-base">check_circle</span><span>Obstsalat mit frischem Minzzucker</span></li>
<li class="flex items-start gap-2 text-text-main font-medium"><span class="material-symbols-outlined text-primary text-base">check_circle</span><span>Brötchen und Brot</span></li>
<li class="flex items-start gap-2 text-text-main font-medium"><span class="material-symbols-outlined text-primary text-base">check_circle</span><span>Wasserkaraffen incl. refill</span></li>
<li class="flex items-start gap-2 text-text-main font-medium"><span class="material-symbols-outlined text-primary text-base">check_circle</span><span>ein Heisgetränk pro Person</span></li>
<li class="flex items-start gap-2 text-text-main font-medium"><span class="material-symbols-outlined text-primary text-base">check_circle</span><span>Tischdeko und gedeckter Tisch</span></li>
</ul>
<button class="w-full py-2.5 rounded-xl bg-primary text-white text-sm font-bold hover:bg-primary-dark shadow-lg shadow-primary/25 transition-all duration-300 mt-auto transform hover:-translate-y-0.5">Auswählen</button>
</div>
<div class="bg-surface-white rounded-3xl p-6 border border-gray-100 shadow-[0_10px_40px_-15px_rgba(0,0,0,0.05)] hover:shadow-[0_20px_50px_-10px_rgba(0,0,0,0.1)] transition-all duration-300 flex flex-col gap-5 group h-full">
<div>
<h3 class="text-xl font-serif text-text-main">Happy Birthday sorglos</h3>
<div class="mt-3 flex items-baseline gap-1 text-primary-dark">
<span class="text-3xl font-serif">€17.00</span>
<span class="text-xs font-medium text-text-muted">/ Person</span>
</div>
</div>
<hr class="border-dashed border-gray-200"/>
<ul class="flex flex-col gap-2 flex-1 text-xs">
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Wurst Etageren</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Käse Etageren</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Rühr oder Spiegeleier</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Marmelade</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Puccola (hausgemachtes Müsli)</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Obstsalat mit frischem Minzzucker</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Brötchen und Brot</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Wasserkaraffen incl. refill</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>ein Heisgetränk pro Person</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>ein Prosecco pro Person</span></li>
<li class="flex items-start gap-2 text-text-muted"><span class="material-symbols-outlined text-primary text-base">check</span><span>Tischdeko und gedeckter Tisch</span></li>
</ul>
<button class="w-full py-2.5 rounded-xl border border-primary text-primary text-sm font-semibold hover:bg-primary hover:text-white transition-all duration-300 mt-auto">Auswählen</button>
</div>
</div>
</section>
<section class="w-full bg-white border-y border-gray-100 py-16">
<div class="max-w-[1200px] mx-auto px-4 lg:px-10">
<div class="flex flex-col items-center text-center mb-12">
<span class="text-primary text-xs font-bold uppercase tracking-widest mb-2">mögliche EXTRAS</span>
<h3 class="text-3xl font-serif text-text-main">Besondere Extras</h3>
</div>
<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">
<div class="group cursor-pointer">
<div class="aspect-square w-full rounded-2xl overflow-hidden mb-4 relative shadow-md group-hover:shadow-xl transition-all duration-500">
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors z-10"></div>
<img alt="Geburtstags Kuchen" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAwLn6ERo0sPHX8Sp3yl-cdG_gAybP9hpCq5KKy1493FYuK4LPOE2Kb5uDdkJJ-afHzB2OIdi7jfuSaKT0tKtv1_jpe3tavozUp8se_VB1ZTtYWREtuolBr4Kl7Dhb_A9_uMLMXO8eAtx3eUqWwA17nLurNGZtJzYZuPM-pHZDSSOx7jlK9zJqtxo91d0nAlluS_wKV1S6u4dr8GriUwQjyKsBsk0wY0IjJX9cC0kULBkq00TSYmKF-a-y_kZATs0oPrDG7oflg_MM"/>
<button class="absolute bottom-4 right-4 bg-white text-primary rounded-full p-2 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 shadow-lg z-20">
<span class="material-symbols-outlined">add</span>
</button>
</div>
<div class="flex justify-between items-start">
<div>
<h4 class="font-serif font-bold text-lg text-text-main">Geburtstags Kuchen</h4>
<p class="text-sm text-text-muted mt-1">selbstgemacht</p>
</div>
<span class="text-primary font-bold font-serif text-lg">Extra</span>
</div>
</div>
<div class="group cursor-pointer">
<div class="aspect-square w-full rounded-2xl overflow-hidden mb-4 relative shadow-md group-hover:shadow-xl transition-all duration-500">
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors z-10"></div>
<img alt="Prosecco" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCVm0auoOxWeR6jgIYwYyAgmS2jVAOa6TTwpWlA29xWxGPMXGhhjcr3zaBdkaozjS5GI36INKyg9dgikhPG6N0Oxd0Tc-FW4Tl6GdA4z8_gw35O1q2NjNJZHtFK3YDvguooeBuLEfzOWmVmA3YEQBcvAlOpba-L5tTm5PF2vE6u66G8Dw769xa9i_Or91JmF3BNdjsrn7kHEQG5I0VVRgVsNfqFUGf0z-Nw3RXZ4w4qOXWiAm0N06x5PmrbAXaeKAeqT7CbMgY5Mro"/>
<button class="absolute bottom-4 right-4 bg-white text-primary rounded-full p-2 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 shadow-lg z-20">
<span class="material-symbols-outlined">add</span>
</button>
</div>
<div class="flex justify-between items-start">
<div>
<h4 class="font-serif font-bold text-lg text-text-main">Prosecco Flasche</h4>
<p class="text-sm text-text-muted mt-1">gekühlt</p>
</div>
<span class="text-primary font-bold font-serif text-lg">Extra</span>
</div>
</div>
<div class="group cursor-pointer">
<div class="aspect-square w-full rounded-2xl overflow-hidden mb-4 relative shadow-md group-hover:shadow-xl transition-all duration-500">
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors z-10"></div>
<img alt="Blumenstrauß" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBPklDkMY4RsBzv0BrKF9ri3Iy1wVDebIfrKlFNjvRWDzvTQ95vwQ7NPh3emjg3ypaX6ph-kR7Mo80D3JJnmdDk7tyUKKwCWw_928i25V4ulO9rRGA7H7Ee9IgQRpdv-vhBC7dxqqXpm_WtA-QV-sKYWlnW6iraSKrycHfvrsi9f0tLZomOWNzF-78wa5cHZg_M4KcMFZA0GD0oeohS3pFlEVCulxxUHqIblMi-Rjs9qBkRrOqnYRxXa9oW89sFPej_KQsM-jU1xjE"/>
<button class="absolute bottom-4 right-4 bg-white text-primary rounded-full p-2 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 shadow-lg z-20">
<span class="material-symbols-outlined">add</span>
</button>
</div>
<div class="flex justify-between items-start">
<div>
<h4 class="font-serif font-bold text-lg text-text-main">Blumenstrauß</h4>
<p class="text-sm text-text-muted mt-1">saisonal</p>
</div>
<span class="text-primary font-bold font-serif text-lg">Extra</span>
</div>
</div>
<div class="group cursor-pointer">
<div class="aspect-square w-full rounded-2xl overflow-hidden mb-4 relative shadow-md group-hover:shadow-xl transition-all duration-500">
<div class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition-colors z-10"></div>
<img alt="Geschenke" class="w-full h-full object-cover transform group-hover:scale-110 transition-transform duration-700" src="https://lh3.googleusercontent.com/aida-public/AB6AXuANz86-lAtyrQGP6ZJ8Cj1RfxbKRQrBt5kGTs2qlo59eyzoK2aWmYj2eo3htVGAy_tejtbNTGVWTidMlTm_uYbLn4uTxyaG03Ka0eEi7oCGXwBA6JFwRnx-pT_sGOks5gscQbf224x4udNBENtp4fmMQkSIknQ0R3DF44bTVMDSOzK3ry1i2GleF8pRbN9btn9hh9b3LAVDaFVVliwe7fb6XBTu4b8Mi_UbiwVthwFz4TXe0DteFTBWowmFVXa4aZ16f5MOSZxdKG8"/>
<button class="absolute bottom-4 right-4 bg-white text-primary rounded-full p-2 opacity-0 group-hover:opacity-100 transform translate-y-4 group-hover:translate-y-0 transition-all duration-300 shadow-lg z-20">
<span class="material-symbols-outlined">add</span>
</button>
</div>
<div class="flex justify-between items-start">
<div>
<h4 class="font-serif font-bold text-lg text-text-main">Geschenke Service</h4>
<p class="text-sm text-text-muted mt-1">besorgen & verpacken</p>
</div>
<span class="text-primary font-bold font-serif text-lg">Extra</span>
</div>
</div>
</div>
</div>
</section>
<div class="w-full bg-[#EBF5EE] border-t border-primary/10 py-16">
<div class="max-w-[1000px] mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-10">
<div class="flex items-start gap-5 max-w-lg">
<div class="p-4 rounded-full bg-white text-primary shadow-sm shrink-0">
<span class="material-symbols-outlined text-2xl">info</span>
</div>
<div>
<h4 class="text-xl font-serif font-bold text-text-main mb-2">Gut zu wissen</h4>
<p class="text-text-muted leading-relaxed text-sm">Wir freuen uns Eure Wünsche (vegan, vegetarisch, Fisch, Champagner) zu realisieren - sprich uns an.<br/><br/>Personenanzahl von 2-22 Personen möglich (incl. hinterer Raum 30 Personen).<br/><br/><strong>call 0911 980 357 70</strong></p>
</div>
</div>
<div class="w-full h-px md:w-px md:h-20 bg-primary/20"></div>
<div class="flex flex-col items-center md:items-start gap-2">
<div class="flex -space-x-3 mb-1">
<img alt="User" class="w-12 h-12 rounded-full border-2 border-white shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuD3O2T4EL2KK2svgXyupYUwrtOqqUxp6w-gf213-psvc8LRyjsikWpu782SD4OpiypT431E3IduGKKFIozIedb_8Dg81esAba0FHdGbPjMVBcSko1WNKAPvUSpldidAJkF6z1JLbx-LVqzUCR_GARyg6qlZFLK3jO7iWg8vmANjOodDc8Ixf0DrUjXA6I9ftFd_c5xrHjqJsH1UUJ3N3lmktAq0Vpbe4LsJo8iVVfsiTGlREA9SujgAJpzbaWVrjVXR6GlE0i9lekM"/>
<img alt="User" class="w-12 h-12 rounded-full border-2 border-white shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDD83rTUkTBZ35YjgRKlobctaseULrrwjwYvmsOzltjYGXwkaOAvuARVnBpOrKj2-rO9WGZVLNO5-ax_TEh6mwiGitrSbLueJkwCd5VVEp4KLZ6rdcKTk0_klc3_tDXqTsUw6y7-H1nyMKgcWwiQAnXnylVJvj9HQpS39og82EfgALaZJFfGjn0gbvUVQuP86ybXtivIHjCK8HQc3aeFNHEd21MX6z8oeu1azYvqFeHl20RbM5pKqgvrX3FjgZ2gMBrCZctYwpevF8"/>
<img alt="User" class="w-12 h-12 rounded-full border-2 border-white shadow-sm" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCvGnAJFkQIrMsfGKoHkAwanANBUfUeq-L8Z1oPyj_jyuW2INBHFmPltaHf3B4bCqTfT93V2a4530cxJOIOLhq4IA2RpzyM6QzrrvzTrFgZRUj45Y8rRcMjFEb3jke7mi7xfVEd36hou6_cdNoisTH-hjMpRGMRP_Hy1isheSYgdVqCjt7zRCTEevVvHW0LpvzLvvi60HrjnOyGJWcqOoPG0x69jyDiJ4ch90WBHdul3I0Ti9M1VTG-BVgm6-lzlNrtgo4sXwUzGzI"/>
</div>
<div class="flex items-center gap-2">
<div class="flex text-amber-400 text-sm">
<span class="material-symbols-outlined text-[18px] fill-current">star</span>
<span class="material-symbols-outlined text-[18px] fill-current">star</span>
<span class="material-symbols-outlined text-[18px] fill-current">star</span>
<span class="material-symbols-outlined text-[18px] fill-current">star</span>
<span class="material-symbols-outlined text-[18px] fill-current">star</span>
</div>
<span class="text-sm font-bold text-text-main">Von Locals geliebt</span>
</div>
</div>
</div>
</div>
</main>
<footer class="w-full bg-[#1e2e26] pt-16 pb-8 text-white/80">
<div class="max-w-[1200px] mx-auto px-6 lg:px-10">
<div class="grid grid-cols-1 md:grid-cols-4 gap-12 mb-16">
<div class="col-span-1 md:col-span-1 flex flex-col gap-4">
<div class="flex items-center gap-2 text-white mb-2">
<span class="material-symbols-outlined text-primary text-2xl">eco</span>
<span class="font-serif font-bold text-xl">Deins&Meins</span>
</div>
<p class="text-sm leading-relaxed text-gray-400">Your cozy neighborhood cafe for regional delicacies, great coffee, and beautiful home accessories.</p>
</div>
<div>
<h5 class="text-white font-bold mb-5 tracking-wide">Kontakt</h5>
<ul class="flex flex-col gap-3 text-sm">
<li><a class="hover:text-primary transition-colors" href="tel:+4991198035770">0911 980 357 70</a></li>
<li><a class="hover:text-primary transition-colors" href="#">hello@deinsundmeins.com</a></li>
</ul>
</div>
<div>
<h5 class="text-white font-bold mb-5 tracking-wide">Adresse</h5>
<ul class="flex flex-col gap-3 text-sm">
<li>Deutschherrnstraße 27</li>
<li>90429 Nürnberg</li>
</ul>
</div>
<div>
<h5 class="text-white font-bold mb-5 tracking-wide">Opening Hours</h5>
<ul class="flex flex-col gap-3 text-sm">
<li class="flex justify-between border-b border-gray-800 pb-2"><span>Mon - Fri</span> <span>08:00 - 18:00</span></li>
<li class="flex justify-between border-b border-gray-800 pb-2"><span>Saturday</span> <span>09:00 - 17:00</span></li>
<li class="flex justify-between"><span>Sunday</span> <span>09:00 - 15:00</span></li>
</ul>
</div>
</div>
<div class="border-t border-gray-800 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-xs text-gray-500">
<p>© 2024 Deins&Meins. All rights reserved.</p>
<div class="flex gap-6">
<a class="hover:text-white transition-colors" href="/datenschutz">Datenschutz</a>
<a class="hover:text-white transition-colors" href="/impressum">Impressum</a>
</div>
</div>
</div>
</footer>
</div>
@endsection
