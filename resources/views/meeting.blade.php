@extends('layouts.app')

@section('title', 'MeetingBox | Deins&Meins')

@section('tailwind-config')
tailwind.config = {
  darkMode: "class",
  theme: {
    extend: {
      colors: {
        "primary": "#7fb590",
        "primary-dark": "#5a8c6a",
        "accent": "#d4eadd",
        "background-light": "#ffffff",
        "background-soft": "#f7fbf8",
        "text-main": "#2c3e34",
        "text-muted": "#6b7c73",
        "border-light": "#e0ece5",
      },
      fontFamily: {
        "sans": ["Spline Sans", "sans-serif"],
        "serif": ["Playfair Display", "serif"],
      },
      borderRadius: {"DEFAULT": "0.5rem", "lg": "1rem", "xl": "1.5rem", "2xl": "2rem", "full": "9999px"},
      boxShadow: {
        'soft': '0 10px 40px -10px rgba(0,0,0,0.05)',
        'card': '0 4px 20px -2px rgba(44, 62, 52, 0.05)',
      }
    },
  },
}
@endsection

@section('body-class', 'bg-background-soft font-sans text-text-main antialiased selection:bg-primary selection:text-white')

@section('content')
<div class="relative flex h-auto min-h-screen w-full flex-col overflow-x-hidden">
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
<div class="w-full flex justify-center p-4 md:px-6 md:py-6 lg:px-10">
<div class="w-full max-w-7xl mx-auto rounded-[2rem] overflow-hidden relative min-h-[600px] flex items-center justify-center shadow-2xl">
<div class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-transform duration-[10s] hover:scale-105" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBr_qSdt_FKxNBsbsN7slhVN1oFG1oR-MlUNNySTnjn8GXMjlRlhmuXm9Ja1gj1FzjgzX0mhWf5oljyFYjRZ06gEsz0fjadjEt7ftG_pP55kMvvu7CfMnW7vxifzlj4oaC2HDVWcoKZxEx5ugM1eYZqIhhaumOMBqmEnxFlKj3LIJu4Gq52YG9jptF9i6ZnYmGIyGFH-yva75m7s5_aLsFFrD2EZi8kSrjb8RxDR9pJsDxX7Byknf8tqexb_r5V5CSbbsX9JcOCoBw");'></div>
<div class="absolute inset-0 bg-gradient-to-t from-[#102217]/90 via-[#102217]/60 to-[#102217]/30"></div>
<div class="relative z-10 flex flex-col items-center text-center max-w-4xl px-6">
<div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 backdrop-blur-md border border-white/20 mb-6">
<span class="w-2 h-2 rounded-full bg-primary animate-pulse"></span>
<span class="text-white text-xs font-bold uppercase tracking-[0.2em]">Gesund & Leistungsfähig</span>
</div>
<h1 class="text-white font-serif text-5xl md:text-7xl lg:text-8xl font-medium leading-tight mb-6 drop-shadow-sm">Du hast ein Meeting<br/> <span class="text-primary italic">Wir haben die</span> MeetingBox</h1>
<p class="text-gray-200 text-lg md:text-xl font-light max-w-2xl mx-auto leading-relaxed mb-10">Du hast ein Meeting mit Geschäftskunden oder Kollegen und möchtest es einfach genießen – wir kümmern uns darum, dass Du mit gesunden und liebevoll zubereiteten Snacks den ganzen Tag konzentriert und leistungsfähig bleibst.</p>
<div class="flex flex-col sm:flex-row gap-5">
<a class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-full h-14 px-8 bg-primary text-white text-base font-semibold tracking-wide hover:bg-white hover:text-text-main transition-all duration-300 shadow-xl hover:shadow-2xl" href="#menu">MeetingBoxen ansehen</a>
<a class="flex min-w-[180px] cursor-pointer items-center justify-center rounded-full h-14 px-8 bg-transparent border border-white/30 text-white text-base font-medium tracking-wide hover:bg-white/10 backdrop-blur-sm transition-all duration-300" href="#contact">Jetzt bestellen</a>
</div>
</div>
</div>
</div>
<div class="w-full bg-background-soft py-20 md:py-32 relative" id="menu">
<div class="absolute top-0 left-0 w-full h-full overflow-hidden pointer-events-none opacity-40">
<div class="absolute top-[10%] left-[-5%] w-[300px] h-[300px] rounded-full bg-accent blur-[100px]"></div>
<div class="absolute bottom-[10%] right-[-5%] w-[400px] h-[400px] rounded-full bg-accent blur-[100px]"></div>
</div>
<div class="max-w-7xl mx-auto px-4 md:px-10 relative z-10">
<div class="flex flex-col items-center text-center gap-4 mb-16 md:mb-24">
<h2 class="text-primary font-bold uppercase tracking-widest text-sm md:text-base">So einfach geht's</h2>
<h3 class="text-text-main font-serif text-4xl md:text-5xl lg:text-6xl font-medium leading-tight">Unsere MeetingBoxen</h3>
<div class="w-24 h-1 bg-primary rounded-full mt-4"></div>
<p class="text-text-muted text-lg max-w-2xl mt-4 font-light">Teile uns spätestens einen Tag vorher die Anzahl der Personen und die Zeitspanne des Meetings mit – wir kümmern uns in Absprache mit Dir um die richtige MeetingBox. Die Bestellung ist ganz einfach per Telefon oder Mail möglich.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 items-start">
<!-- VORMITTAG -->
<div class="group flex flex-col bg-white rounded-xl p-6 border border-border-light hover:border-primary/50 transition-all duration-300 shadow-soft hover:shadow-card relative">
<div class="mb-4">
<span class="inline-block px-3 py-1 rounded-full bg-accent/50 text-primary-dark text-xs font-bold uppercase tracking-wider mb-3">Vormittag</span>
<h4 class="font-serif text-2xl text-text-main mb-1">MeetingBox</h4>
</div>
<div class="w-full h-px bg-border-light mb-4"></div>
<ul class="flex-1 flex flex-col gap-2 mb-6 text-sm">
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Ciabatta Salami mit Kresse</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Ciabatta Parma mit Tomate</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Vollkornbrot Käse mit Sprossen</span></li>
</ul>
<div class="flex flex-col mt-auto">
<span class="text-text-muted text-xs uppercase tracking-wide">Pro Person</span>
<span class="font-serif text-3xl text-text-main">€6,00</span>
</div>
</div>

<!-- VORMITTAG plus -->
<div class="group flex flex-col bg-white rounded-xl p-6 border border-border-light hover:border-primary/50 transition-all duration-300 shadow-soft hover:shadow-card relative">
<div class="mb-4">
<span class="inline-block px-3 py-1 rounded-full bg-accent/50 text-primary-dark text-xs font-bold uppercase tracking-wider mb-3">Vormittag</span>
<h4 class="font-serif text-2xl text-text-main mb-1">MeetingBox <span class="text-primary">plus</span></h4>
</div>
<div class="w-full h-px bg-border-light mb-4"></div>
<ul class="flex-1 flex flex-col gap-2 mb-6 text-sm">
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Ciabatta Salami mit Kresse</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Ciabatta Parma mit Tomate</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Vollkornbrot Käse mit Sprossen</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Mediterran gefüllte Hefeteilchen</span></li>
</ul>
<div class="flex flex-col mt-auto">
<span class="text-text-muted text-xs uppercase tracking-wide">Pro Person</span>
<span class="font-serif text-3xl text-text-main">€7,00</span>
</div>
</div>

<!-- VORMITTAG extra plus -->
<div class="group flex flex-col bg-white rounded-xl p-6 border border-primary/30 shadow-card transition-all duration-300 relative bg-gradient-to-b from-accent/10 to-white">
<div class="mb-4">
<span class="inline-block px-3 py-1 rounded-full bg-primary text-white text-xs font-bold uppercase tracking-wider mb-3">Vormittag</span>
<h4 class="font-serif text-2xl text-text-main mb-1">MeetingBox <span class="text-primary">extra plus</span></h4>
</div>
<div class="w-full h-px bg-border-light mb-4"></div>
<ul class="flex-1 flex flex-col gap-2 mb-6 text-sm">
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Ciabatta Brote belegt</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Vollkornbrote Käse mit Sprossen</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Puccolas (hausgemachtes Müsli)</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Obstsalate mit frischem Minzzucker</span></li>
</ul>
<div class="flex flex-col mt-auto">
<span class="text-text-muted text-xs uppercase tracking-wide">Pro Person</span>
<span class="font-serif text-3xl text-text-main">€9,00</span>
</div>
</div>

<!-- MITTAG -->
<div class="group flex flex-col bg-white rounded-xl p-6 border border-border-light hover:border-primary/50 transition-all duration-300 shadow-soft hover:shadow-card relative">
<div class="mb-4">
<span class="inline-block px-3 py-1 rounded-full bg-accent/50 text-primary-dark text-xs font-bold uppercase tracking-wider mb-3">Mittag</span>
<h4 class="font-serif text-2xl text-text-main mb-1">MeetingBox</h4>
</div>
<div class="w-full h-px bg-border-light mb-4"></div>
<ul class="flex-1 flex flex-col gap-2 mb-6 text-sm">
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Gemischte Platten (Antipasti)</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Zucchini, Paprika, Salami, Parma</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Manquego, Brotauswahl</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Obstsalate mit frischem Minzzucker</span></li>
</ul>
<div class="flex flex-col mt-auto">
<span class="text-text-muted text-xs uppercase tracking-wide">Pro Person</span>
<span class="font-serif text-3xl text-text-main">€7,00</span>
</div>
</div>

<!-- MITTAG plus -->
<div class="group flex flex-col bg-white rounded-xl p-6 border border-border-light hover:border-primary/50 transition-all duration-300 shadow-soft hover:shadow-card relative">
<div class="mb-4">
<span class="inline-block px-3 py-1 rounded-full bg-accent/50 text-primary-dark text-xs font-bold uppercase tracking-wider mb-3">Mittag</span>
<h4 class="font-serif text-2xl text-text-main mb-1">MeetingBox <span class="text-primary">plus</span></h4>
</div>
<div class="w-full h-px bg-border-light mb-4"></div>
<ul class="flex-1 flex flex-col gap-2 mb-6 text-sm">
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Ciabatta Salami mit Kresse</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Ciabatta Parma mit Tomate</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Vollkornbrote Käse mit Sprossen</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Gurkensalate</span></li>
</ul>
<div class="flex flex-col mt-auto">
<span class="text-text-muted text-xs uppercase tracking-wide">Pro Person</span>
<span class="font-serif text-3xl text-text-main">€8,00</span>
</div>
</div>

<!-- MITTAG extra plus -->
<div class="group flex flex-col bg-white rounded-xl p-6 border border-primary/30 shadow-card transition-all duration-300 relative bg-gradient-to-b from-accent/10 to-white">
<div class="mb-4">
<span class="inline-block px-3 py-1 rounded-full bg-primary text-white text-xs font-bold uppercase tracking-wider mb-3">Mittag</span>
<h4 class="font-serif text-2xl text-text-main mb-1">MeetingBox <span class="text-primary">extra plus</span></h4>
</div>
<div class="w-full h-px bg-border-light mb-4"></div>
<ul class="flex-1 flex flex-col gap-2 mb-6 text-sm">
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Mediterran gefüllte Hefeteilchen</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Vollkornbrote Käse mit Sprossen</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Feta Teilchen ODER Lachs Avocado Wraps</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Gurkensalate</span></li>
</ul>
<div class="flex flex-col mt-auto">
<span class="text-text-muted text-xs uppercase tracking-wide">Pro Person</span>
<span class="font-serif text-3xl text-text-main">€9,00</span>
</div>
</div>

<!-- NACHMITTAG -->
<div class="group flex flex-col bg-white rounded-xl p-6 border border-border-light hover:border-primary/50 transition-all duration-300 shadow-soft hover:shadow-card relative">
<div class="mb-4">
<span class="inline-block px-3 py-1 rounded-full bg-accent/50 text-primary-dark text-xs font-bold uppercase tracking-wider mb-3">Nachmittag</span>
<h4 class="font-serif text-2xl text-text-main mb-1">MeetingBox</h4>
</div>
<div class="w-full h-px bg-border-light mb-4"></div>
<ul class="flex-1 flex flex-col gap-2 mb-6 text-sm">
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Kuchenauswahl</span></li>
</ul>
<div class="flex flex-col mt-auto">
<span class="text-text-muted text-xs uppercase tracking-wide">Pro Person</span>
<span class="font-serif text-3xl text-text-main">€4,00</span>
</div>
</div>

<!-- NACHMITTAG plus -->
<div class="group flex flex-col bg-white rounded-xl p-6 border border-border-light hover:border-primary/50 transition-all duration-300 shadow-soft hover:shadow-card relative">
<div class="mb-4">
<span class="inline-block px-3 py-1 rounded-full bg-accent/50 text-primary-dark text-xs font-bold uppercase tracking-wider mb-3">Nachmittag</span>
<h4 class="font-serif text-2xl text-text-main mb-1">MeetingBox <span class="text-primary">plus</span></h4>
</div>
<div class="w-full h-px bg-border-light mb-4"></div>
<ul class="flex-1 flex flex-col gap-2 mb-6 text-sm">
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Kuchenauswahl</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Puccolas (hausgemachtes Müsli)</span></li>
<li class="flex items-start gap-2 text-text-main"><span class="material-symbols-outlined text-primary text-[18px] mt-0.5">check_circle</span><span class="font-light">Obstsalate mit frischem Minzzucker</span></li>
</ul>
<div class="flex flex-col mt-auto">
<span class="text-text-muted text-xs uppercase tracking-wide">Pro Person</span>
<span class="font-serif text-3xl text-text-main">€6,00</span>
</div>
</div>
</div>
</div>
</div>
<div class="w-full bg-white py-20 md:py-28" id="contact">
<div class="max-w-7xl mx-auto px-4 md:px-10 flex flex-col md:flex-row gap-16 lg:gap-24">
<div class="flex flex-col flex-1 gap-8">
<div>
<span class="text-primary font-bold uppercase tracking-widest text-sm mb-2 block">Bestellung</span>
<h2 class="text-text-main font-serif text-4xl md:text-5xl font-medium leading-tight mb-4">Jetzt bestellen</h2>
<p class="text-text-muted text-lg font-light leading-relaxed">Bestellen Sie Ihre MeetingBox einfach und bequem. Füllen Sie das Formular aus und wir kümmern uns um den Rest.</p>
</div>
<div class="flex flex-col gap-8 mt-4">
<div class="flex items-start gap-6 group">
<div class="flex-shrink-0 size-14 items-center justify-center rounded-2xl bg-accent text-primary-dark group-hover:bg-primary group-hover:text-white transition-colors duration-300">
<span class="material-symbols-outlined">location_on</span>
</div>
<div>
<h4 class="font-serif font-bold text-xl text-text-main mb-1">Besuchen Sie uns</h4>
<p class="text-text-muted">Deutschherrnstraße 27<br/>90429 Nürnberg</p>
</div>
</div>
<div class="flex items-start gap-6 group">
<div class="flex-shrink-0 size-14 items-center justify-center rounded-2xl bg-accent text-primary-dark group-hover:bg-primary group-hover:text-white transition-colors duration-300">
<span class="material-symbols-outlined">call</span>
</div>
<div>
<h4 class="font-serif font-bold text-xl text-text-main mb-1">Rufen Sie uns an</h4>
<p class="text-text-muted">0911 980 357 70<br/><span class="text-sm">Di-So, 9-18 Uhr</span></p>
</div>
</div>
<div class="flex items-start gap-6 group">
<div class="flex-shrink-0 size-14 items-center justify-center rounded-2xl bg-accent text-primary-dark group-hover:bg-primary group-hover:text-white transition-colors duration-300">
<span class="material-symbols-outlined">mail</span>
</div>
<div>
<h4 class="font-serif font-bold text-xl text-text-main mb-1">Schreiben Sie uns</h4>
<p class="text-text-muted">info@deinsundmeins.de<br/><span class="text-sm">Antwort innerhalb 24h</span></p>
</div>
</div>
</div>
</div>
<div class="flex flex-col flex-[1.2] bg-background-soft rounded-3xl p-8 md:p-12 shadow-soft border border-border-light">
<form class="flex flex-col gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-text-main tracking-wide uppercase">Ansprechpartner *</label>
<input class="w-full bg-white border-0 border-b border-gray-300 px-0 py-3 text-text-main placeholder-gray-400 focus:border-primary focus:ring-0 transition-all text-lg" placeholder="Ihr Name" type="text" required/>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-text-main tracking-wide uppercase">E-Mail *</label>
<input class="w-full bg-white border-0 border-b border-gray-300 px-0 py-3 text-text-main placeholder-gray-400 focus:border-primary focus:ring-0 transition-all text-lg" placeholder="name@beispiel.de" type="email" required/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-text-main tracking-wide uppercase">Telefonnummer *</label>
<input class="w-full bg-white border-0 border-b border-gray-300 px-0 py-3 text-text-main placeholder-gray-400 focus:border-primary focus:ring-0 transition-all text-lg" placeholder="0911 123456" type="tel" required/>
</div>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-text-main tracking-wide uppercase">Datum und Uhrzeit *</label>
<input class="w-full bg-white border-0 border-b border-gray-300 px-0 py-3 text-text-main placeholder-gray-400 focus:border-primary focus:ring-0 transition-all text-lg" type="datetime-local" required/>
</div>
<div class="flex flex-col gap-2">
<label class="text-sm font-bold text-text-main tracking-wide uppercase">MeetingBox *</label>
<div class="relative">
<select class="w-full appearance-none bg-white border-0 border-b border-gray-300 px-0 py-3 text-text-main focus:border-primary focus:ring-0 transition-all text-lg cursor-pointer" required>
<option value="">Bitte wählen...</option>
<option>VORMITTAG - €6,00</option>
<option>VORMITTAG plus - €7,00</option>
<option>VORMITTAG extra plus - €9,00</option>
<option>MITTAG - €7,00</option>
<option>MITTAG plus - €8,00</option>
<option>MITTAG extra plus - €9,00</option>
<option>NACHMITTAG - €4,00</option>
<option>NACHMITTAG plus - €6,00</option>
</select>
<div class="pointer-events-none absolute right-0 top-1/2 -translate-y-1/2 text-primary">
<span class="material-symbols-outlined">expand_more</span>
</div>
</div>
</div>
<div class="flex flex-col gap-3">
<label class="text-sm font-bold text-text-main tracking-wide uppercase">Service *</label>
<div class="flex flex-col gap-3">
<label class="flex items-center gap-3 cursor-pointer group">
<input type="checkbox" class="size-5 rounded border-gray-300 text-primary focus:ring-primary focus:ring-offset-0 cursor-pointer"/>
<span class="text-text-main text-base group-hover:text-primary transition-colors">Abholung</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input type="checkbox" class="size-5 rounded border-gray-300 text-primary focus:ring-primary focus:ring-offset-0 cursor-pointer"/>
<span class="text-text-main text-base group-hover:text-primary transition-colors">Lieferung</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input type="checkbox" class="size-5 rounded border-gray-300 text-primary focus:ring-primary focus:ring-offset-0 cursor-pointer"/>
<span class="text-text-main text-base group-hover:text-primary transition-colors">Geschirr zu Leihgabe (Pfand)</span>
</label>
<label class="flex items-center gap-3 cursor-pointer group">
<input type="checkbox" class="size-5 rounded border-gray-300 text-primary focus:ring-primary focus:ring-offset-0 cursor-pointer"/>
<span class="text-text-main text-base group-hover:text-primary transition-colors">ToGo Verpackung</span>
</label>
</div>
</div>
<div class="pt-2">
<p class="text-sm text-text-muted italic">Hinweis: Bitte die mit * gekennzeichneten Felder ausfüllen.</p>
</div>
<div class="pt-4">
<button class="w-full cursor-pointer rounded-full bg-text-main h-14 px-8 text-white text-lg font-bold tracking-wide hover:bg-primary transition-all duration-300 shadow-lg hover:shadow-xl hover:-translate-y-1" type="submit">Bestellung senden</button>
</div>
</form>
</div>
</div>
</div>
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
<h5 class="text-white font-bold mb-5 tracking-wide">Contact</h5>
<ul class="flex flex-col gap-3 text-sm">
<li><a class="hover:text-primary transition-colors" href="#">hello@deinsundmeins.com</a></li>
<li><a class="hover:text-primary transition-colors" href="#">+49 (0) 123 456 789</a></li>
</ul>
</div>
<div>
<h5 class="text-white font-bold mb-5 tracking-wide">Location</h5>
<ul class="flex flex-col gap-3 text-sm">
<li>Green Street 42</li>
<li>10115 Berlin, Germany</li>
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
