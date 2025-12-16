@extends('layouts.app')

@section('title', 'Deins&Meins - Datenschutz')

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
<main class="flex-1 min-w-0 space-y-20 py-12 max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
<section class="scroll-mt-32" id="datenschutz">
<div class="mb-10 text-center md:text-left border-b border-border pb-10">
<span class="inline-block py-1 px-3 rounded-full bg-surface-light text-primary text-xs font-bold tracking-wide uppercase mb-4">Datenschutz</span>
<h1 class="text-4xl md:text-6xl font-display font-bold text-text-main mb-6">Datenschutzerklärung</h1>
</div>
<div class="prose max-w-none text-text-muted">
<p>Diese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. („Google“). Google Analytics verwendet sog. „Cookies“, Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert. Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite, wird Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt. Nur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt. Sie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem Sie das unter dem folgenden Link verfügbare Browser-Plugin herunterladen und installieren: <a href="http://tools.google.com/dlpage/gaoptout">http://tools.google.com/dlpage/gaoptout</a></p>
<p>Nähere Informationen zu Nutzungsbedingungen und Datenschutz finden Sie unter den <a href="http://www.google.com/analytics/terms/de.html">Google Analytics Bedingungen</a> bzw. unter der <a href="https://www.google.de/intl/de/policies/">Google Analytics Übersicht</a>. Wir weisen Sie darauf hin, dass auf dieser Webseite Google Analytics um den Code "gat._anonymizeIp();" erweitert wurde, um eine anonymisierte Erfassung von IP-Adressen (sog. IP-Masking) zu gewährleisten.</p>
</div>
</section>
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
