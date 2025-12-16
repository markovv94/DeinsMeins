@extends('layouts.app')

@section('title', 'Wir | Deins&Meins')

@section('tailwind-config')
tailwind.config = {
    theme: {
        extend: {
            colors: {
                "primary": "#84A98C",
                "primary-dark": "#52796F",
                "secondary": "#CAD2C5",
                "background-light": "#ffffff",
                "background-soft": "#F5F7F6",
                "text-main": "#1B2A22",
                "text-muted": "#5C6B63",
            },
            fontFamily: {
                "display": ["Playfair Display", "serif"],
                "body": ["Spline Sans", "sans-serif"]
            },
            borderRadius: {
                "DEFAULT": "0.5rem",
                "lg": "1.5rem",
                "xl": "2.5rem",
                "2xl": "3rem",
                "full": "9999px"
            },
        },
    },
}
@endsection

@section('body-class', 'bg-background-light text-text-main font-body overflow-x-hidden antialiased selection:bg-primary selection:text-white')

@section('content')
<div class="relative flex min-h-screen w-full flex-col group/design-root">
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
<div class="layout-container flex h-full grow flex-col">
<div class="px-4 md:px-10 lg:px-20 flex flex-1 justify-center py-5">
<div class="layout-content-container flex flex-col max-w-[1200px] flex-1">
<div class="@container mb-16">
<div class="@[480px]:p-0">
<div class="flex min-h-[600px] flex-col gap-8 bg-cover bg-center bg-no-repeat rounded-xl md:rounded-[2rem] items-center justify-center p-10 relative overflow-hidden group shadow-lg" data-alt="Cozy cafe interior with warm lighting, wooden furniture, and comfortable seating" style='background-image: linear-gradient(rgba(27, 42, 34, 0.3) 0%, rgba(27, 42, 34, 0.5) 100%), url("https://lh3.googleusercontent.com/aida-public/AB6AXuAu-0BOybUbON-S4_bm7tjkj415DR6C8b06NaKKy1493FYuK4LPOE2Kb5uDdkJJ-afHzB2OIdi7jfuSaKT0tKtv1_jpe3tavozUp8se_VB1ZTtYWREtuolBr4Kl7Dhb_A9_uMLMXO8eAtx3eUqWwA17nLurNGZtJzYZuPM-pHZDSSOx7jlK9zJqtxo91d0nAlluS_wKV1S6u4dr8GriUwQjyKsBsk0wY0IjJX9cC0kULBkq00TSYmKF-a-y_kZATs0oPrDG7oflg_MM");'>
<div class="flex flex-col gap-6 text-center max-w-[800px] z-10">
<h1 class="text-white text-5xl font-serif font-medium leading-tight md:text-7xl md:leading-[1.1] drop-shadow-sm">Deins&Meins stellt sich vor</h1>
<h2 class="text-white/95 text-lg font-sans font-light leading-relaxed md:text-xl tracking-wide max-w-[600px] mx-auto">Mein Traum von einem kleinen gemütlichen Tageskaffee in Nürnberg ist nun endlich Realität geworden.</h2>
</div>
</div>
</div>
</div>
<div class="flex flex-col gap-12 py-12 @container" id="concept">
<div class="flex flex-col gap-4 items-center text-center">
<span class="text-primary font-bold tracking-widest uppercase text-sm">Unser Konzept</span>
<h2 class="text-text-main text-4xl md:text-5xl font-serif font-medium leading-tight">Deins&Meins - auch zum Mitnehmen</h2>
<p class="text-text-muted text-lg font-light leading-relaxed max-w-[750px]">Deins&Meins ist ein kleines Tageskaffee, in dem Ihr Euch wohlfühlen sollt. Hier finden Menschen einen Platz, die großen Wert auf Genuss legen. Selbstverständlich verwöhnen wir Euch mit besten Zutaten, wenn möglich bevorzugen wir Lebensmittel aus unserer Region, die ihren Geschmack und ihre Frische nicht auf langen Transportwegen verloren haben.</p>
</div>
<div class="grid md:grid-cols-2 gap-8">
<div class="flex flex-col gap-6 p-8 rounded-[2rem] bg-white border border-gray-100 hover:border-primary/30 hover:shadow-xl transition-all duration-300 group shadow-sm" id="leckeres">
<div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-2xl overflow-hidden relative shadow-inner" data-alt="Close up of a latte art coffee and a slice of homemade cake on a rustic wooden table" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuC-biIzQNR2yN-JaZ8Bx448GgOHWH6jkBfIcVa62rjZvVlO0KzM4TuaoZAjWGX2GEnMBhVeS81QGqPn200SoRXmGhjr1t0bqnkF3uuA8lOiWNNjBRkqJ04pTczxTkKuzsnjBA6ddf-yYA8rHRz6Mb50S-zgj6XUm3Vn-TgBeOrF_jjc_vs24w7YM-Kw4_-baQr9nxvhpjuLKkohY-hhOxVlmUVR2SzQxW22vLl7o-Lh9FNzosWzUeXJhHWEpS7466AMT-2AxXOMvdk");'>
</div>
<div>
<div class="flex items-center gap-3 mb-3">
<div class="p-2 bg-primary/10 rounded-full text-primary">
<span class="material-symbols-outlined">bakery_dining</span>
</div>
<h3 class="text-text-main text-2xl font-serif font-semibold leading-normal">Leckeres</h3>
</div>
<p class="text-text-muted text-base font-light leading-relaxed">Untypisch für ein Tageskaffee gibt es "Leckeres" zum Mitnehmen. Unsere selbstgemachten Kuchen im Glas, unsere frisch zubereiteten Suppen im Glas, oder unsere Gewürzmischungen und vieles vieles mehr warten darauf von Dir entdeckt zu werden. Zum Selbstgenießen oder als kleines Mitbringsel für Deine Lieben.</p>
</div>
</div>
<div class="flex flex-col gap-6 p-8 rounded-[2rem] bg-white border border-gray-100 hover:border-primary/30 hover:shadow-xl transition-all duration-300 group shadow-sm" id="schoenes">
<div class="w-full bg-center bg-no-repeat aspect-video bg-cover rounded-2xl overflow-hidden relative shadow-inner" data-alt="Beautifully arranged home decor items including ceramic vases and dried flowers" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBVpRDiMVfO6RVTfF1VB6_wiVP2cFIClrb1qhzRV5sXGKrREfc1tfPtWMEZOi2NP0AIiFRQ_Acq7YVNFOgf4t-MJen-sGTqpbU3P7eNP8igARtMVGAW1hS5yw5s9f43t63WktADUei15XJC8P51kFJnHrGhfItkjht42rN6QI6w0AwLCMjSIpBdOtbUpB-e7-DoPmV5ynE1XGZYBn4E-7kTc41HPBjmxhw5gOWWUOHs-2gltfw0nG9w2UBxc5Fy90Fyo0CeR5i3fkM");'>
</div>
<div>
<div class="flex items-center gap-3 mb-3">
<div class="p-2 bg-primary/10 rounded-full text-primary">
<span class="material-symbols-outlined">local_mall</span>
</div>
<h3 class="text-text-main text-2xl font-serif font-semibold leading-normal">Schönes</h3>
</div>
<p class="text-text-muted text-base font-light leading-relaxed">"Schönes" bekommst Du auch bei uns. Wohnaccessoires und viele kleine Geschenke für Dich und Deine Freunde stehen für Dich bereit. Oder darf's auch etwas größer sein? Lass Dich überraschen.</p>
</div>
</div>
</div>
</div>
<div class="py-16 md:py-24" id="about">
<div class="bg-background-soft rounded-[3rem] p-8 md:p-16">
<div class="flex flex-col md:flex-row gap-16 items-center">
<div class="flex-1 flex flex-col gap-8">
<div class="flex items-center gap-3">
<span class="h-px w-12 bg-primary"></span>
<span class="text-primary text-sm font-bold uppercase tracking-widest">Wir sind für Dich da</span>
</div>
<h2 class="text-text-main text-4xl md:text-5xl font-serif font-medium leading-tight">Simone Kraußer<br/><span class="text-2xl text-text-muted font-light">und das Deins&Meins Team</span></h2>
<div class="space-y-6">
<p class="text-text-main text-lg leading-relaxed font-light">Genaugenommen musst Du es nicht einmal mitnehmen, wir schicken es Dir auch gerne zu.</p>
<p class="text-text-muted text-base leading-relaxed">Wir glauben an die Kraft von <span class="font-medium text-primary">"Regionalität"</span> — Unterstützung unserer lokalen Gemeinschaft durch unsere Küchenzutaten und die Kunsthandwerker, deren Arbeit unsere Regale ziert.</p>
</div>
<div class="flex flex-col sm:flex-row gap-8 mt-6">
<div class="flex items-start gap-4">
<div class="bg-white p-3 rounded-full text-primary shadow-sm border border-gray-100">
<span class="material-symbols-outlined text-[24px]">eco</span>
</div>
<div>
<h4 class="text-text-main font-bold font-display text-lg">Sustainability</h4>
<p class="text-sm text-text-muted mt-1">Eco-friendly & minimal waste</p>
</div>
</div>
<div class="flex items-start gap-4">
<div class="bg-white p-3 rounded-full text-primary shadow-sm border border-gray-100">
<span class="material-symbols-outlined text-[24px]">handshake</span>
</div>
<div>
<h4 class="text-text-main font-bold font-display text-lg">Community</h4>
<p class="text-sm text-text-muted mt-1">Local gathering place</p>
</div>
</div>
</div>
</div>
<div class="flex-1 w-full">
<div class="relative">
<div class="aspect-[4/5] rounded-[2rem] overflow-hidden w-full bg-white shadow-xl" data-alt="Portrait of the cafe owners smiling in their shop holding coffee cups" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuBuLJBehi1xHhl9K0x94wqjEi2B6-xiYnrU3-VN7_ddN_9YDLViYWsPpju1K_bpCnRqUZVmET1uZ7tWJGYDOM8A6U6NELiboGa3-x5pKYgZZQ3KjDaqZLlYkA0fLXO-vxr_d1teDPmlAXF2bS0na-v3fIrLxMocYd07vxitM1Cvqp8ArRsMfbAgplsBWm1NK7knNh-U_hCMF00_bjw_gUjo4PLIgovGuVUX14wlz8Fwp-xhLTgxPcL1GE1MfHfrO-pL11FdoTseNUw"); background-size: cover; background-position: center;'>
</div>
<div class="absolute -bottom-8 -left-8 bg-white p-6 rounded-2xl shadow-[0_8px_30px_rgb(0,0,0,0.08)] border border-gray-50 max-w-[220px]">
<p class="text-primary font-display font-bold text-4xl mb-1">100%</p>
<p class="text-text-main text-sm font-medium leading-snug">Organic & Locally Sourced Products</p>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="grid lg:grid-cols-3 gap-8 pb-20" id="contact">
<div class="lg:col-span-1 bg-primary text-white rounded-[2rem] p-10 shadow-lg flex flex-col justify-between relative overflow-hidden group">
<div class="absolute top-0 right-0 w-40 h-40 bg-white/10 rounded-full -mr-10 -mt-10 blur-2xl"></div>
<div class="relative z-10">
<div class="w-14 h-14 rounded-full bg-white/20 flex items-center justify-center text-white mb-8 backdrop-blur-sm">
<span class="material-symbols-outlined text-2xl">schedule</span>
</div>
<h3 class="text-white text-3xl font-serif font-medium mb-8">Öffnungszeiten</h3>
<div class="space-y-5">
<div class="flex justify-between items-center border-b border-white/20 pb-4">
<span class="text-white/80 font-light">Dienstag - Sonntag</span>
<span class="text-white font-semibold tracking-wide">09:00 - 18:00</span>
</div>
<div class="flex justify-between items-center pb-4">
<span class="text-white/80 font-light">Montag</span>
<span class="text-white/90 font-semibold tracking-wide bg-white/10 px-3 py-1 rounded-full text-sm">bauen wir ein Eulennest</span>
</div>
</div>
</div>
<div class="mt-10 pt-6 border-t border-white/20 relative z-10">
<p class="text-white/70 text-sm font-light">Wir sind für Dich da.</p>
</div>
</div>
<div class="lg:col-span-2 relative h-full min-h-[350px] rounded-[2rem] overflow-hidden group shadow-lg">
<div class="absolute inset-0 bg-cover bg-center transition-transform duration-700 group-hover:scale-105" data-alt="Map showing location of Deins & Meins cafe in the city center" data-location="Berlin, Germany" style='background-image: url("https://lh3.googleusercontent.com/aida-public/AB6AXuAOVR3Myt0tB_jForCdxsavfNV3DkN5WzyEWvfD7fG3dkl7mMhYjB4BmNc4MVY7OXaKlrxYgtwLPSCUzq6Odaxc4feX0iPjV7jiaf4HmdUSLLa7aj02dMpHi5939CFX9NpMihRq0KYJCx5ZegVBsSHsUsgDa746XLhC3GXCZmtva7hG9vE8pILy6o6bIKTUEktDsXctvlFTGIg6cplSVt_Qvs6gWKF0Qx3tYpdpe_172FSOq7-FecKeRE0hFxPMKWSPcWwlQAY59dc");'>
</div>
<div class="absolute inset-0 bg-text-main/30 hover:bg-text-main/20 transition-colors flex flex-col items-center justify-center p-8 text-center backdrop-blur-[1px]">
<div class="bg-white/90 backdrop-blur-md p-8 rounded-3xl shadow-xl max-w-sm w-full">
<span class="material-symbols-outlined text-primary text-4xl mb-3">location_on</span>
<h3 class="text-text-main text-2xl font-serif font-bold mb-2">Besuche uns</h3>
<p class="text-text-muted text-lg font-light mb-2">Deutschherrnstraße 27</p>
<p class="text-text-muted text-lg font-light mb-6">90429 Nürnberg</p>
<a class="inline-block bg-text-main text-white px-8 py-3 rounded-full text-sm font-bold uppercase tracking-wider hover:bg-primary transition-colors" href="#">Route</a>
</div>
</div>
</div>
</div>
<div class="relative bg-[#E9F0EB] rounded-[2.5rem] p-8 md:p-20 overflow-hidden">
<div class="absolute top-0 right-0 w-96 h-96 bg-primary/10 rounded-full blur-[80px] -mr-32 -mt-32 pointer-events-none"></div>
<div class="absolute bottom-0 left-0 w-64 h-64 bg-primary/10 rounded-full blur-[60px] -ml-20 -mb-20 pointer-events-none"></div>
<div class="relative z-10 max-w-2xl mx-auto text-center mb-12">
<span class="text-primary font-bold tracking-widest uppercase text-sm mb-2 block">Kontakt</span>
<h2 class="text-text-main text-4xl md:text-5xl font-serif font-medium mb-6">Schreib uns</h2>
<p class="text-text-muted text-lg font-light mb-4">Hast Du Fragen zu unseren Produkten oder möchtest Du einen großen Tisch reservieren? Sende uns eine Nachricht!</p>
<p class="text-text-main text-xl font-medium">
<span class="material-symbols-outlined inline-block align-middle mr-2">call</span>
<a href="tel:+4991198035770" class="hover:text-primary transition-colors">0911 980 357 70</a>
</p>
</div>
<form class="relative z-10 max-w-2xl mx-auto space-y-6">
<div class="grid md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="text-sm font-bold text-text-main uppercase tracking-wider ml-1" for="name">Name *</label>
<input class="w-full bg-white border border-gray-200 rounded-xl px-6 py-4 text-text-main placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all shadow-sm" id="name" placeholder="Dein Name" type="text" required/>
</div>
<div class="space-y-2">
<label class="text-sm font-bold text-text-main uppercase tracking-wider ml-1" for="email">E-Mail *</label>
<input class="w-full bg-white border border-gray-200 rounded-xl px-6 py-4 text-text-main placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all shadow-sm" id="email" placeholder="Deine E-Mail" type="email" required/>
</div>
</div>
<div class="space-y-2">
<label class="text-sm font-bold text-text-main uppercase tracking-wider ml-1" for="message">Nachricht *</label>
<textarea class="w-full bg-white border border-gray-200 rounded-xl px-6 py-4 text-text-main placeholder-gray-400 focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-all resize-none shadow-sm" id="message" placeholder="Wie können wir Dir helfen?" rows="5" required></textarea>
</div>
<div class="pt-2 text-center">
<p class="text-xs text-text-muted mb-4">Hinweis: Bitte die mit * gekennzeichneten Felder ausfüllen.</p>
<button class="inline-flex items-center justify-center gap-3 w-full md:w-auto min-w-[200px] bg-text-main text-white font-bold text-lg py-4 px-10 rounded-full hover:bg-primary transition-all shadow-lg hover:shadow-primary/30" type="button">
<span>Nachricht senden</span>
<span class="material-symbols-outlined text-sm">send</span>
</button>
</div>
</form>
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
</div>
@endsection
