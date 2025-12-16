@extends('layouts.app')

@section('title', 'Deins&Meins - Impressum & Datenschutz')

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
<main class="flex-grow flex flex-col md:flex-row max-w-7xl mx-auto w-full px-4 sm:px-6 lg:px-8 py-12 gap-12">
<aside class="hidden md:block w-64 flex-shrink-0">
<div class="sticky top-32 space-y-8">
<div class="bg-surface-light rounded-2xl p-6 border border-border/50">
<h3 class="text-xs font-bold uppercase tracking-widest text-text-muted mb-6 pl-2">Navigation</h3>
<nav class="flex flex-col space-y-2">
<a class="group flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-lg bg-white text-primary shadow-sm border border-border" href="#impressum">
<span class="material-symbols-outlined text-[20px]">gavel</span>Impressum
</a>
<a class="group flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-lg text-text-muted hover:bg-white hover:text-text-main hover:shadow-sm hover:border hover:border-border/50 transition-all" href="#kontakt">
<span class="material-symbols-outlined text-[20px]">contact_mail</span>Kontakt & Register
</a>
<a class="group flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-lg text-text-muted hover:bg-white hover:text-text-main hover:shadow-sm hover:border hover:border-border/50 transition-all" href="#haftung">
<span class="material-symbols-outlined text-[20px]">shield</span>Haftung
</a>
<a class="group flex items-center gap-3 px-3 py-2.5 text-sm font-medium rounded-lg text-text-muted hover:bg-white hover:text-text-main hover:shadow-sm hover:border hover:border-border/50 transition-all" href="/datenschutz">
<span class="material-symbols-outlined text-[20px]">lock</span>Datenschutz
</a>
</nav>
</div>
<div class="rounded-2xl p-6 bg-text-main text-white shadow-soft relative overflow-hidden hidden lg:block">
<div class="absolute top-0 right-0 -mt-4 -mr-4 w-24 h-24 bg-primary/20 rounded-full blur-2xl"></div>
<div class="flex items-center gap-3 mb-4 relative z-10">
<span class="material-symbols-outlined text-primary">eco</span>
<span class="font-display font-bold text-sm">Regional & Frisch</span>
</div>
<p class="text-xs text-secondary/80 leading-relaxed relative z-10">Wir setzen auf lokale Partner und nachhaltige Produkte. Danke, dass du uns unterstützt.</p>
</div>
</div>
</aside>
<main class="flex-1 min-w-0 space-y-20">
<section class="scroll-mt-32" id="impressum">
<div class="mb-10 text-center md:text-left border-b border-border pb-10">
<span class="inline-block py-1 px-3 rounded-full bg-surface-light text-primary text-xs font-bold tracking-wide uppercase mb-4">Rechtliche Hinweise</span>
<h1 class="text-4xl md:text-6xl font-display font-bold text-text-main mb-6">Impressum</h1>
<p class="text-lg md:text-xl text-text-muted font-light max-w-3xl leading-relaxed">Angaben gemäß § 5 TMG für Deins<span class="text-primary">&</span>Meins. <br/>Verantwortlich für den Inhalt dieser Website.</p>
</div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-8">
<div class="flex flex-col items-center md:items-start p-8 rounded-2xl border border-border bg-white shadow-soft hover:shadow-lg transition-shadow duration-300">
<div class="w-12 h-12 rounded-full bg-surface-light flex items-center justify-center text-primary mb-5">
<span class="material-symbols-outlined">storefront</span>
</div>
<h3 class="text-xs uppercase tracking-wider font-bold text-text-muted mb-2">Anschrift</h3>
<p class="text-base font-medium text-text-main text-center md:text-left">Simone Kraußer<br/>Deutschherrnstraße 27<br/>90429 Nürnberg</p>
</div>
<div class="flex flex-col items-center md:items-start p-8 rounded-2xl border border-border bg-white shadow-soft hover:shadow-lg transition-shadow duration-300">
<div class="w-12 h-12 rounded-full bg-surface-light flex items-center justify-center text-primary mb-5">
<span class="material-symbols-outlined">call</span>
</div>
<h3 class="text-xs uppercase tracking-wider font-bold text-text-muted mb-2">Telefon</h3>
<p class="text-base font-medium text-text-main text-center md:text-left">+49 (0) 911 980 357 70<br/><span class="text-sm text-text-muted">Fax: +49 (0) 911 97 59 83 69</span></p>
</div>
<div class="flex flex-col items-center md:items-start p-8 rounded-2xl border border-border bg-white shadow-soft hover:shadow-lg transition-shadow duration-300">
<div class="w-12 h-12 rounded-full bg-surface-light flex items-center justify-center text-primary mb-5">
<span class="material-symbols-outlined">mail</span>
</div>
<h3 class="text-xs uppercase tracking-wider font-bold text-text-muted mb-2">E-Mail</h3>
<p class="text-base font-medium text-text-main text-center md:text-left">simone.krausser@gmail.com</p>
</div>
</div>
</section>
<section class="scroll-mt-32" id="kontakt">
<div class="rounded-2xl overflow-hidden border border-border shadow-card bg-white">
<div class="bg-surface-light px-8 py-6 border-b border-border flex items-center justify-between">
<h2 class="font-display font-bold text-xl text-text-main">Registereinträge & Vertretung</h2>
<span class="material-symbols-outlined text-text-muted/50">info</span>
</div>
<div class="divide-y divide-border/60">
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-8 py-6 hover:bg-surface-light/30 transition-colors">
<div class="text-sm font-semibold text-text-muted">Inhaber</div>
<div class="sm:col-span-2 text-sm text-text-main font-medium">Simone Kraußer</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-8 py-6 hover:bg-surface-light/30 transition-colors">
<div class="text-sm font-semibold text-text-muted">Umsatzsteuer-ID</div>
<div class="sm:col-span-2 text-sm text-text-main">DE815444372 (gemäß §27 a Umsatzsteuergesetz)</div>
</div>
<div class="grid grid-cols-1 sm:grid-cols-3 gap-4 px-8 py-6 hover:bg-surface-light/30 transition-colors">
<div class="text-sm font-semibold text-text-muted">Aufsichtsbehörde</div>
<div class="sm:col-span-2 text-sm text-text-main">Landratsamt Nürnberg</div>
</div>
</div>
</div>
</section>
<section class="scroll-mt-32 space-y-12" id="haftung">
<div class="bg-surface-light/50 rounded-2xl p-8 border border-border/50">
<h2 class="text-2xl font-display font-bold text-text-main mb-6 flex items-center gap-3">
<span class="w-1.5 h-8 bg-primary rounded-full"></span>Haftung für Inhalte
</h2>
<div class="prose max-w-none text-text-muted">
<p class="leading-relaxed">Als Diensteanbieter sind wir gemäß § 7 Abs.1 TMG für eigene Inhalte auf diesen Seiten nach den allgemeinen Gesetzen verantwortlich. Nach §§ 8 bis 10 TMG sind wir als Diensteanbieter jedoch nicht verpflichtet, übermittelte oder gespeicherte fremde Informationen zu überwachen oder nach Umständen zu forschen, die auf eine rechtswidrige Tätigkeit hinweisen.</p>
</div>
</div>
<div class="bg-surface-light/50 rounded-2xl p-8 border border-border/50">
<h2 class="text-2xl font-display font-bold text-text-main mb-6 flex items-center gap-3">
<span class="w-1.5 h-8 bg-primary rounded-full"></span>Haftung für Links
</h2>
<div class="prose max-w-none text-text-muted">
<p class="leading-relaxed">Unser Angebot enthält Links zu externen Websites Dritter, auf deren Inhalte wir keinen Einfluss haben. Deshalb können wir für diese fremden Inhalte auch keine Gewähr übernehmen.</p>
</div>
</div>
</section>
<section class="scroll-mt-32 pt-10 border-t border-border" id="datenschutz">
<div class="mb-12">
<div class="inline-flex items-center gap-2 mb-4">
<div class="p-2 rounded-lg bg-surface-light text-primary">
<span class="material-symbols-outlined">security</span>
</div>
<span class="text-sm font-bold text-primary uppercase tracking-wide">Datenschutz</span>
</div>
<h2 class="text-3xl font-display font-bold text-text-main mb-6">Datenschutzerklärung</h2>
<p class="text-text-muted text-lg font-light leading-relaxed max-w-4xl">Wir nehmen den Schutz Ihrer persönlichen Daten sehr ernst. Wir behandeln Ihre personenbezogenen Daten vertraulich und entsprechend der gesetzlichen Datenschutzvorschriften sowie dieser Datenschutzerklärung.</p>
</div>
<div class="grid gap-8">
<div class="bg-white border border-border rounded-2xl p-8 shadow-soft hover:border-primary/30 transition-colors">
<h3 class="text-xl font-bold text-text-main mb-4 flex items-center gap-3">
<span class="material-symbols-outlined text-primary">database</span> Datenerfassung auf unserer Website
</h3>
<p class="text-text-muted mb-4 text-sm leading-relaxed">Die Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis.</p>
</div>
</div>
</section>
</main>
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
</div>
@endsection
