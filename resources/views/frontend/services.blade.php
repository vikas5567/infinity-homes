@extends('layouts.master')
@section('content')

<!-- Hero Section -->
<section class="relative min-h-[50vh] lg:min-h-[60vh] flex items-center overflow-hidden">
    <!-- Background Content -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=2000" alt="Luxury Architecture" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/95 via-black/70 to-black/30"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-[#030303] via-transparent to-transparent"></div>
    </div>
    
    <div class="px-6 md:px-10 lg:px-20 relative z-10 w-full pt-16 lg:pt-0">
        <div class="max-w-[750px] mx-auto lg:mx-0 text-center lg:text-left">
            <div class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-brand-gold/10 border border-brand-gold/20 mb-6 hero-animate-1 mx-auto lg:mx-0">
                <span class="w-1 h-1 rounded-full bg-brand-gold animate-pulse"></span>
                <p class="text-brand-gold text-[10px] font-bold tracking-[2.4px] uppercase">Service Excellence</p>
            </div>
            <h1 class="text-white text-4xl md:text-[54px] lg:text-[64px] font-bold leading-[1.1] mb-6 hero-animate-2 tracking-tight">Our Elite <br class="hidden md:block">Real Estate Services</h1>
            <p class="text-brand-muted text-base md:text-lg leading-relaxed max-w-[550px] hero-animate-3 mx-auto lg:mx-0">We provide white-glove real estate solutions tailored for high-net-worth individuals, ensuring your property journey is seamless and successful.</p>
        </div>
    </div>
</section>

<!-- Core Services Grid -->
<section class="px-6 md:px-10 lg:px-20 pt-16 lg:pt-[100px] bg-brand-bg">
    <div class="text-center mb-12 lg:mb-20" data-animate="fade-up">
        <p class="text-brand-gold text-[11px] font-bold tracking-[3px] uppercase mb-4">What We Offer</p>
        <h2 class="text-3xl md:text-[42px] lg:text-[54px] font-bold text-white mb-6">Bespoke Solutions</h2>
        <div class="w-20 h-1 bg-brand-gold mx-auto"></div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20">
        
        <!-- Service 1 -->
        <div class="bg-card p-10 rounded-3xl border border-white/5 transition-all duration-500 hover:-translate-y-2 group overflow-hidden relative" data-animate="fade-up" data-delay="100">
            <!-- Background Image Overlay -->
            <div class="absolute inset-0 z-0 opacity-[0.05] group-hover:opacity-[0.08] transition-opacity duration-500">
                <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80&w=800" alt="Management" class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[2s]">
            </div>
            
            <div class="relative z-10">
                <div class="w-16 h-16 rounded-2xl bg-brand-gold/10 border border-brand-gold/20 flex items-center justify-center mb-10 group-hover:bg-brand-gold group-hover:border-brand-gold transition-all duration-500">
                    <i class="fa-solid fa-hotel text-brand-gold text-2xl group-hover:text-black transition-colors"></i>
                </div>
                
                <h3 class="text-2xl font-bold text-white mb-5">Property Management</h3>
                <p class="text-brand-muted text-[15px] leading-relaxed mb-10">We handle the complexities of your assets, from maintenance to tenant relations, ensuring your investment remains in peak condition and maximizes yield.</p>
                
                <a href="#" class="inline-flex items-center gap-2 pt-8 border-t border-white/5 text-brand-gold font-semibold text-sm tracking-wide group-hover:gap-4 transition-all w-full">
                    LEARN MORE <i class="fa-solid fa-arrow-right-long text-xs"></i>
                </a>
            </div>
        </div>

        <!-- Service 2 -->
        <div class="bg-card p-10 rounded-3xl border border-white/5 transition-all duration-500 hover:-translate-y-2 group overflow-hidden relative" data-animate="fade-up" data-delay="200">
            <!-- Background Image Overlay -->
            <div class="absolute inset-0 z-0 opacity-[0.05] group-hover:opacity-[0.08] transition-opacity duration-500">
                <img src="https://images.unsplash.com/photo-1600880212319-7837e98d84a9?auto=format&fit=crop&q=80&w=800" alt="Consulting" class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[2s]">
            </div>

            <div class="relative z-10">
                <div class="w-16 h-16 rounded-2xl bg-brand-gold/10 border border-brand-gold/20 flex items-center justify-center mb-10 group-hover:bg-brand-gold group-hover:border-brand-gold transition-all duration-500">
                    <i class="fa-solid fa-scale-balanced text-brand-gold text-2xl group-hover:text-black transition-colors"></i>
                </div>
                
                <h3 class="text-2xl font-bold text-white mb-5">Real Estate Consulting</h3>
                <p class="text-brand-muted text-[15px] leading-relaxed mb-10">Expert advisory services for property acquisition, portfolio diversification, and market entry strategies tailored to your unique financial goals.</p>
                
                <a href="#" class="inline-flex items-center gap-2 pt-8 border-t border-white/5 text-brand-gold font-semibold text-sm tracking-wide group-hover:gap-4 transition-all w-full">
                    LEARN MORE <i class="fa-solid fa-arrow-right-long text-xs"></i>
                </a>
            </div>
        </div>

        <!-- Service 3 -->
        <div class="bg-card p-10 rounded-3xl border border-white/5 transition-all duration-500 hover:-translate-y-2 group overflow-hidden relative" data-animate="fade-up" data-delay="300">
            <!-- Background Image Overlay -->
            <div class="absolute inset-0 z-0 opacity-[0.05] group-hover:opacity-[0.08] transition-opacity duration-500">
                <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?auto=format&fit=crop&q=80&w=800" alt="Analysis" class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[2s]">
            </div>

            <div class="relative z-10">
                <div class="w-16 h-16 rounded-2xl bg-brand-gold/10 border border-brand-gold/20 flex items-center justify-center mb-10 group-hover:bg-brand-gold group-hover:border-brand-gold transition-all duration-500">
                    <i class="fa-solid fa-chart-line text-brand-gold text-2xl group-hover:text-black transition-colors"></i>
                </div>
                
                <h3 class="text-2xl font-bold text-white mb-5">Market Analysis & Valuation</h3>
                <p class="text-brand-muted text-[15px] leading-relaxed mb-10">Data-driven valuation reports and competitive market analysis using real-world statistics to ensure you buy and sell at the absolute best price.</p>
                
                <a href="#" class="inline-flex items-center gap-2 pt-8 border-t border-white/5 text-brand-gold font-semibold text-sm tracking-wide group-hover:gap-4 transition-all w-full">
                    LEARN MORE <i class="fa-solid fa-arrow-right-long text-xs"></i>
                </a>
            </div>
        </div>

        <!-- Service 4 -->
        <div class="bg-card p-10 rounded-3xl border border-white/5 transition-all duration-500 hover:-translate-y-2 group overflow-hidden relative" data-animate="fade-up" data-delay="100">
            <!-- Background Image Overlay -->
            <div class="absolute inset-0 z-0 opacity-[0.05] group-hover:opacity-[0.08] transition-opacity duration-500">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800" alt="Investment" class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[2s]">
            </div>

            <div class="relative z-10">
                <div class="w-16 h-16 rounded-2xl bg-brand-gold/10 border border-brand-gold/20 flex items-center justify-center mb-10 group-hover:bg-brand-gold group-hover:border-brand-gold transition-all duration-500">
                    <i class="fa-solid fa-key text-brand-gold text-2xl group-hover:text-black transition-colors"></i>
                </div>
                
                <h3 class="text-2xl font-bold text-white mb-5">Investment Strategy</h3>
                <p class="text-brand-muted text-[15px] leading-relaxed mb-10">We assist investors in identifying high-potential projects, calculating ROI, and navigating the complexities of long-term real estate investment.</p>
                
                <a href="#" class="inline-flex items-center gap-2 pt-8 border-t border-white/5 text-brand-gold font-semibold text-sm tracking-wide group-hover:gap-4 transition-all w-full">
                    LEARN MORE <i class="fa-solid fa-arrow-right-long text-xs"></i>
                </a>
            </div>
        </div>

        <!-- Service 5 -->
        <div class="bg-card p-10 rounded-3xl border border-white/5 transition-all duration-500 hover:-translate-y-2 group overflow-hidden relative" data-animate="fade-up" data-delay="200">
            <!-- Background Image Overlay -->
            <div class="absolute inset-0 z-0 opacity-[0.05] group-hover:opacity-[0.08] transition-opacity duration-500">
                <img src="https://images.unsplash.com/photo-1589829545856-d10d557cf95f?auto=format&fit=crop&q=80&w=800" alt="Legal" class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[2s]">
            </div>

            <div class="relative z-10">
                <div class="w-16 h-16 rounded-2xl bg-brand-gold/10 border border-brand-gold/20 flex items-center justify-center mb-10 group-hover:bg-brand-gold group-hover:border-brand-gold transition-all duration-500">
                    <i class="fa-solid fa-building-circle-check text-brand-gold text-2xl group-hover:text-black transition-colors"></i>
                </div>
                
                <h3 class="text-2xl font-bold text-white mb-5">Legal & Documentation</h3>
                <p class="text-brand-muted text-[15px] leading-relaxed mb-10">Streamlined handling of all legal paperwork, title deeds, and regulatory approvals, ensuring your property transition is fully compliant and secure.</p>
                
                <a href="#" class="inline-flex items-center gap-2 pt-8 border-t border-white/5 text-brand-gold font-semibold text-sm tracking-wide group-hover:gap-4 transition-all w-full">
                    LEARN MORE <i class="fa-solid fa-arrow-right-long text-xs"></i>
                </a>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="bg-card p-10 rounded-3xl border border-white/5 transition-all duration-500 hover:-translate-y-2 group overflow-hidden relative" data-animate="fade-up" data-delay="300">
            <!-- Background Image Overlay -->
            <div class="absolute inset-0 z-0 opacity-[0.05] group-hover:opacity-[0.08] transition-opacity duration-500">
                <img src="https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?auto=format&fit=crop&q=80&w=800" alt="After-Sales" class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-transform duration-[2s]">
            </div>

            <div class="relative z-10">
                <div class="w-16 h-16 rounded-2xl bg-brand-gold/10 border border-brand-gold/20 flex items-center justify-center mb-10 group-hover:bg-brand-gold group-hover:border-brand-gold transition-all duration-500">
                    <i class="fa-solid fa-hand-holding-heart text-brand-gold text-2xl group-hover:text-black transition-colors"></i>
                </div>
                
                <h3 class="text-2xl font-bold text-white mb-5">After-Sales Support</h3>
                <p class="text-brand-muted text-[15px] leading-relaxed mb-10">Our relationship doesn't end at the sale. We provide lifelong support for maintenance, resale, or upgrades to your acquired property.</p>
                
                <a href="#" class="inline-flex items-center gap-2 pt-8 border-t border-white/5 text-brand-gold font-semibold text-sm tracking-wide group-hover:gap-4 transition-all w-full">
                    LEARN MORE <i class="fa-solid fa-arrow-right-long text-xs"></i>
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Luxury Quote Section -->
<section class="px-6 md:px-10 lg:px-20 py-24 lg:py-32 bg-card relative overflow-hidden border-y border-white/5">
    <div class="absolute right-0 top-0 w-1/3 h-full bg-brand-gold/5 blur-[120px] rounded-full"></div>
    
    <div class="max-w-[1000px] mx-auto text-center relative z-10" data-animate="fade-up">
        <i class="fa-solid fa-quote-left text-brand-gold/30 text-6xl mb-12"></i>
        <h2 class="text-2xl md:text-4xl font-light italic text-white leading-relaxed mb-12">
            "Excellence is not an act, but a habit. We don't just find houses; we secure legacies for our clients through meticulous service and unwavering integrity."
        </h2>
        <div class="flex flex-col items-center">
            <h4 class="text-brand-gold font-bold text-lg uppercase tracking-widest mb-2">Infinity Homes Management</h4>
            <p class="text-brand-muted text-[13px] tracking-[4px] uppercase">Service Department</p>
        </div>
    </div>
</section>

<!-- Partner Logos (Consistency with Home/About) -->
<section class="px-6 md:px-10 lg:px-20 pt-16 pb-16">
    <div class="flex flex-wrap justify-center items-center gap-12 md:gap-24 opacity-40 hover:opacity-100 transition-opacity duration-500" data-animate="fade-up">
        <div class="flex items-center gap-2 text-xl font-bold text-white hover:text-brand-gold transition-all cursor-pointer">
            <i class="fa-solid fa-city text-2xl"></i> REALESTATE
        </div>
        <div class="flex items-center gap-2 text-xl font-bold text-white hover:text-brand-gold transition-all cursor-pointer">
            <i class="fa-brands fa-hive text-2xl"></i> NEXUS
        </div>
        <div class="flex items-center gap-2 text-xl font-bold text-white hover:text-brand-gold transition-all cursor-pointer">
            <i class="fa-solid fa-house-chimney text-2xl"></i> DECORA
        </div>
        <div class="flex items-center gap-2 text-xl font-bold text-white hover:text-brand-gold transition-all cursor-pointer">
            <i class="fa-regular fa-building text-2xl"></i> BUILDERS
        </div>
    </div>
</section>

@endsection