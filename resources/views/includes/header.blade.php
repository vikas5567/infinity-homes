<nav class="flex justify-between items-center px-6 md:px-10 lg:px-20 py-3 lg:py-6 relative z-50">
    <a href="{{ route('home') }}" class="flex items-center gap-3 hover:opacity-80 transition duration-300">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" 
         class="w-10 h-10 lg:w-14 lg:h-14 object-cover object-center rounded-full shadow-[0_0_15px_rgba(212,175,55,0.3)]">
    
    <div class="flex flex-col leading-tight">
        <span class="text-brand-gold text-sm lg:text-lg font-bold uppercase tracking-[3px]">Infinity</span>
        <span class="text-white/70 text-[10px] lg:text-sm font-light uppercase tracking-[4px]">Homes</span>
    </div>
</a>

    <!-- Desktop Nav -->
    <div class="hidden lg:flex gap-10">
        <a href="{{ route('home') }}" class="text-white text-normal font-normal transition-colors duration-300">Home</a>
        <a href="{{ route('about') }}" class="text-brand-muted hover:text-white text-normal font-normal transition-colors duration-300">About</a>
        <a href="{{ route('properties') }}" class="text-brand-muted hover:text-white text-normal font-normal transition-colors duration-300">Properties</a>
        <a href="{{ route('services') }}" class="text-brand-muted hover:text-white text-normal font-normal transition-colors duration-300">Services</a>
        <a href="{{ route('contact') }}" class="text-brand-muted hover:text-white text-normal font-normal transition-colors duration-300">Contact</a>
    </div>

    <a href="{{ route('contact') }}" 
   class="hidden lg:block bg-accent-gradient text-white py-3 px-9 rounded-full text-base transition-opacity duration-300 hover:opacity-90 text-center">
    Schedule Viewing
</a>

    <!-- Mobile Hamburger -->
    <button id="mobileMenuBtn" class="lg:hidden flex flex-col justify-center items-center w-10 h-10 gap-1.5 cursor-pointer z-50" onclick="document.getElementById('mobileMenu').classList.toggle('translate-x-full')">
        <span class="w-6 h-[2px] bg-white rounded-full transition-all duration-300"></span>
        <span class="w-6 h-[2px] bg-white rounded-full transition-all duration-300"></span>
        <span class="w-4 h-[2px] bg-brand-gold rounded-full transition-all duration-300 self-end"></span>
    </button>
</nav>

<!-- Mobile Menu Overlay -->
<div id="mobileMenu" class="fixed inset-0 bg-[#030303]/98 backdrop-blur-xl z-40 flex flex-col justify-center items-center gap-8 transition-transform duration-500 ease-in-out translate-x-full lg:hidden">
    <button id="mobileCloseBtn" class="absolute top-4 right-6 w-10 h-10 flex items-center justify-center text-white/50 hover:text-brand-gold transition-colors" onclick="document.getElementById('mobileMenu').classList.add('translate-x-full')">
        <i class="fa-solid fa-xmark"></i>
    </button>

    <a href="{{ route('home') }}" class="text-white text-2xl font-semibold tracking-wider hover:text-brand-gold transition-colors duration-300">Home</a>
    <a href="{{ route('about') }}" class="text-white/70 text-2xl font-semibold tracking-wider hover:text-brand-gold transition-colors duration-300">About</a>
    <a href="{{ route('properties') }}" class="text-white/70 text-2xl font-semibold tracking-wider hover:text-brand-gold transition-colors duration-300">Properties</a>
    <a href="{{ route('services') }}" class="text-white/70 text-2xl font-semibold tracking-wider hover:text-brand-gold transition-colors duration-300">Services</a>
    <a href="{{ route('contact') }}" class="text-white/70 text-2xl font-semibold tracking-wider hover:text-brand-gold transition-colors duration-300">Contact</a>

    <a href="{{ route('contact') }}" class="mt-4 bg-accent-gradient text-white py-3 px-10 rounded-full text-base font-semibold transition-opacity duration-300 hover:opacity-90">
        Schedule Viewing
    </a>
</div>
