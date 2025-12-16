@extends('layouts.app')

@section('title', 'Deins&Meins - Pick Nick Tasche')

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
<header class="sticky top-0 z-50 w-full bg-white/90 backdrop-blur-md border-b border-border-light transition-all duration-300">
<div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4 md:px-10">
<div class="flex items-center gap-3">
<div class="flex size-10 items-center justify-center rounded-full bg-primary/10 text-primary-dark">
<span class="material-symbols-outlined !text-[24px]">lunch_dining</span>
</div>
<h2 class="text-xl font-serif font-bold tracking-tight text-text-main">Deins&Meins</h2>
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
<main class="flex-grow">
<div class="relative w-full px-4 lg:px-20 py-8 lg:py-12 flex justify-center">
<div class="max-w-[1400px] w-full">
<div class="relative overflow-hidden rounded-[2.5rem] min-h-[500px] flex flex-col items-center justify-center text-center p-8 lg:p-16 bg-cover bg-center group shadow-xl shadow-text-main/5" data-alt="Cozy picnic setup on grass with basket and food" style="background-image: linear-gradient(rgba(44, 62, 52, 0.3), rgba(44, 62, 52, 0.4)), url('https://lh3.googleusercontent.com/aida-public/AB6AXuDj9-fiXfSFEp6kSAYOdOYJyAxUslJSGAQHGHUAMU4em6x3ItXdb4SbNwbXt2bLfjMBsXDlqZlWJLcsgAQWklFPJr2F4Mjq-XdgO7sF6LxR1JhtSEe4e8k0nHQrZ4y5Ijyhv1aAsCbj6HMhaIyJSGeI_YZBFIdnNtu39RWw_chdvoH-xDTIaREMXj4DINS5bfc2lQHo5ExZ5Z-Uq_Tl2R7phl1hfQ_kcp9aqwoTh1cwvTvylKvErurm8JoKLxINrxMIiL1lBy8oePE');">
<div class="relative z-10 flex flex-col items-center gap-6 max-w-3xl animate-fade-in-up">
<span class="inline-flex items-center rounded-full bg-white/20 backdrop-blur-md border border-white/40 px-5 py-2 text-xs font-bold uppercase tracking-wider text-white shadow-sm">Natur genießen</span>
<h1 class="text-white text-5xl lg:text-7xl font-black leading-tight tracking-tight drop-shadow-md font-serif">Pick Nick Tasche</h1>
<p class="text-white text-lg lg:text-xl font-medium leading-relaxed max-w-2xl drop-shadow-sm">Mal wieder an ein wundervolles Pick Nick in der Natur gedacht? Wir schon ... und haben da mal eine Pick Nick Tasche gepackt .... Radtour Pick Nick, Sonnenbad Pick Nick, Spielplatz Pick Nick, Geburtstags Pick Nick, Jahrestag Pick Nick ... oder einfach mal wieder die Natur genießen.</p>
<div class="flex flex-wrap justify-center gap-4 mt-6">
<button class="flex h-12 items-center justify-center rounded-full bg-white text-text-main px-8 text-base font-bold transition-transform hover:scale-105 shadow-lg">View Options</button>
<button class="flex h-12 items-center justify-center rounded-full bg-text-main/40 backdrop-blur-md border border-white/30 px-8 text-base font-bold text-white transition-colors hover:bg-text-main/60">How it works</button>
</div>
</div>
</div>
</div>
</div>
<section class="w-full px-4 lg:px-20 py-10 flex justify-center bg-accent/30" id="options">
<div class="max-w-[1400px] w-full flex flex-col gap-12">
<div class="flex flex-col md:flex-row md:items-end justify-between gap-6 border-b border-border-light pb-6">
<div>
<h2 class="text-text-main text-3xl lg:text-4xl font-bold leading-tight tracking-tight font-serif">Hier ein paar Vorschläge</h2>
<p class="text-primary-dark/70 mt-2 font-medium">Tasche incl. Pick Nick Decke // Leihgebühr 20 € // wird bei Rückgabe wieder erstattet</p>
</div>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-8">
<div class="group relative flex flex-col gap-6 rounded-[2rem] bg-white p-8 transition-all hover:-translate-y-1 shadow-soft hover:shadow-card border border-transparent hover:border-primary">
<div class="flex flex-col gap-2">
<h3 class="text-text-main text-2xl font-bold font-serif">Pick Nick Tasche</h3>
<div class="flex items-baseline gap-1 text-primary">
<span class="text-4xl font-black tracking-tight">€12.00</span>
<span class="text-text-muted text-sm font-medium">/ Person</span>
</div>
</div>
<div class="h-px w-full bg-border-light"></div>
<ul class="flex flex-col gap-3 flex-1 text-sm">
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Stullen mit Karotten Lauch Frischkäse und Kresse</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Stullen mit Omlette und Tomaten</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Obstsalate mit frischem Minzzucker</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Papp Teller, Papp Becher, Servietten, Bambus Besteck</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Mülltüte und Putztücher</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Pick Nick Tasche</span></li>
</ul>
<button class="mt-4 flex w-full items-center justify-center rounded-full h-12 bg-accent text-primary-dark font-bold transition-all group-hover:bg-primary group-hover:text-white border border-border-light group-hover:border-transparent">Auswählen</button>
</div>
<div class="group relative flex flex-col gap-6 rounded-[2rem] bg-gradient-to-b from-accent to-white p-8 transition-all hover:-translate-y-1 shadow-soft hover:shadow-card border border-primary ring-4 ring-accent/50">
<div class="absolute top-8 right-8">
<span class="inline-flex items-center justify-center rounded-full bg-primary text-white px-3 py-1 text-xs font-bold shadow-sm">Beliebt</span>
</div>
<div class="flex flex-col gap-2">
<h3 class="text-text-main text-2xl font-bold font-serif">Pick Nick Tasche extra</h3>
<div class="flex items-baseline gap-1 text-primary">
<span class="text-4xl font-black tracking-tight">€15.00</span>
<span class="text-text-muted text-sm font-medium">/ Person</span>
</div>
</div>
<div class="h-px w-full bg-border-light"></div>
<ul class="flex flex-col gap-3 flex-1 text-sm">
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Stullen mit Karotten Lauch Frischkäse und Kresse</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Stullen mit Omlette und Tomaten</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Oricette Nudelsalat mit Pesto Tomaten und Ruccola</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Obstsalate mit frischem Minzzucker</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Papp Teller, Papp Becher, Servietten, Bambus Besteck</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Mülltüte und Putztücher</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Pick Nick Tasche</span></li>
</ul>
<button class="mt-4 flex w-full items-center justify-center rounded-full h-12 bg-primary text-white font-bold transition-all hover:bg-primary-dark hover:shadow-lg shadow-primary/20">Auswählen</button>
</div>
<div class="group relative flex flex-col gap-6 rounded-[2rem] bg-white p-8 transition-all hover:-translate-y-1 shadow-soft hover:shadow-card border border-transparent hover:border-primary">
<div class="flex flex-col gap-2">
<h3 class="text-text-main text-2xl font-bold font-serif">Pick Nick Tasche extra plus</h3>
<div class="flex items-baseline gap-1 text-primary">
<span class="text-4xl font-black tracking-tight">€17.00</span>
<span class="text-text-muted text-sm font-medium">/ Person</span>
</div>
</div>
<div class="h-px w-full bg-border-light"></div>
<ul class="flex flex-col gap-3 flex-1 text-sm">
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Stullen mit Karotten Lauch Frischkäse und Kresse</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Stullen mit Omlette und Tomaten</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Oricette Nudelsalat mit Pesto Tomaten und Ruccola</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Wraps mit Avocado Paprika Salat gefüllt</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Obstsalate mit frischem Minzzucker</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Kuchenstücke</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Papp Teller, Papp Becher, Servietten, Bambus Besteck</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Mülltüte und Putztücher</span></li>
<li class="flex items-start gap-3 text-text-main"><span class="material-symbols-outlined text-primary text-[20px] shrink-0">check_circle</span><span>Pick Nick Tasche</span></li>
</ul>
<button class="mt-4 flex w-full items-center justify-center rounded-full h-12 bg-accent text-primary-dark font-bold transition-all group-hover:bg-primary group-hover:text-white border border-border-light group-hover:border-transparent">Auswählen</button>
</div>
</div>
</div>
</section>
<section class="w-full px-4 lg:px-20 py-16 flex justify-center bg-white">
<div class="max-w-[1400px] w-full grid grid-cols-1 lg:grid-cols-3 gap-10">
<div class="lg:col-span-2 flex flex-col gap-8">
<div class="flex items-baseline gap-3 px-2">
<h2 class="text-text-main text-2xl font-bold font-serif">Pick Nick Getränke</h2>
<span class="h-px bg-border-light flex-1"></span>
</div>
<p class="text-primary-dark/70 font-medium px-2">Pro Person 6,00 €</p>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
<div class="flex flex-col items-center justify-center p-6 rounded-xl bg-white border border-border-light hover:border-primary hover:shadow-md transition-all group">
<div class="size-14 rounded-full bg-accent flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors mb-3">
<span class="material-symbols-outlined">wine_bar</span>
</div>
<p class="text-text-main font-bold text-base text-center">Prosecco</p>
</div>
<div class="flex flex-col items-center justify-center p-6 rounded-xl bg-white border border-border-light hover:border-primary hover:shadow-md transition-all group">
<div class="size-14 rounded-full bg-accent flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors mb-3">
<span class="material-symbols-outlined">water_drop</span>
</div>
<p class="text-text-main font-bold text-base text-center">Wasser</p>
</div>
<div class="flex flex-col items-center justify-center p-6 rounded-xl bg-white border border-border-light hover:border-primary hover:shadow-md transition-all group">
<div class="size-14 rounded-full bg-accent flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-colors mb-3">
<span class="material-symbols-outlined">local_drink</span>
</div>
<p class="text-text-main font-bold text-base text-center">Limo</p>
</div>
</div>
</div>
<div class="lg:col-span-1 flex flex-col h-full">
<div class="flex items-baseline gap-3 px-2 mb-6">
<h2 class="text-text-main text-2xl font-bold font-serif">Pick Nick Decke</h2>
<span class="h-px bg-border-light flex-1"></span>
</div>
<div class="flex flex-col gap-4 p-8 rounded-[2rem] bg-text-main text-white h-full relative overflow-hidden shadow-xl shadow-text-main/20">
<div class="absolute -top-12 -right-12 w-48 h-48 bg-white/5 rounded-full blur-3xl"></div>
<div class="absolute bottom-0 left-0 w-32 h-32 bg-primary/20 rounded-full blur-2xl"></div>
<div class="flex items-center gap-4 mb-2 z-10">
<div class="size-12 rounded-full bg-white/10 flex items-center justify-center text-accent">
<span class="material-symbols-outlined">grass</span>
</div>
<h3 class="text-white font-bold text-xl font-serif">Pick Nick Decke Leihe</h3>
</div>
<p class="text-white/80 text-sm leading-relaxed z-10 font-medium">Unsere gemütlichen Pick Nick Decken sind in jeder Tasche dabei - perfekt für ein entspanntes Picknick im Freien.</p>
<div class="flex flex-col gap-3 mt-auto z-10 pt-6">
<div class="flex justify-between items-center text-sm border-b border-white/10 pb-2">
<span class="text-white/70">Leihgebühr (wird bei Rückgabe erstattet)</span>
<span class="text-white font-bold">€20.00</span>
</div>
<button class="mt-4 w-full flex items-center justify-center gap-2 rounded-full h-12 bg-white text-text-main text-sm font-bold hover:bg-accent transition-all shadow-lg">
<span>Hinzufügen</span>
<span class="material-symbols-outlined text-sm">add</span>
</button>
</div>
</div>
</div>
</div>
</section>
<div class="fixed bottom-6 left-1/2 -translate-x-1/2 z-40 w-full max-w-lg px-4">
<div class="flex items-center justify-between gap-4 p-2 pl-8 rounded-full bg-white/95 backdrop-blur-md border border-border-light shadow-2xl shadow-text-main/10">
<div class="flex flex-col">
<span class="text-text-muted text-xs font-bold uppercase tracking-wider">Total</span>
<span class="text-text-main font-bold text-xl">€0.00</span>
</div>
<button class="flex items-center gap-2 rounded-full bg-primary px-8 h-12 text-white font-bold hover:bg-primary-dark transition-colors shadow-lg shadow-primary/30">
<span>Complete Reservation</span>
<span class="material-symbols-outlined text-sm">arrow_forward</span>
</button>
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
@endsection
