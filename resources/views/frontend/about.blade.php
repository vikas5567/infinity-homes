@extends('layouts.master')
@section('content')

<!-- Hero Banner -->
<section class="relative h-[50vh] md:h-[60vh] flex items-center overflow-hidden">
    <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&q=80&w=1600" alt="About Infinity Homes" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/40"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#030303] via-transparent to-transparent"></div>

    <div class="px-6 md:px-10 lg:px-20 relative z-10 w-full">
        <div class="max-w-[700px] pt-6 lg:pt-0">
            <p class="text-brand-gold text-[11px] font-semibold tracking-[3px] uppercase mb-5 hero-animate-1">About Us</p>
            <h1 class="text-white text-3xl md:text-[42px] lg:text-[54px] leading-[1.15] font-bold mb-4 lg:mb-6 hero-animate-2">Excellent Agents Deliver<br>Outstanding Results</h1>
            <p class="text-white/70 text-[15px] leading-relaxed max-w-[550px] hero-animate-3">
                Our expert agents continuously monitor the market to guarantee the best results. A focus on client satisfaction stands above and beyond expectations. Partner with us to build a progressive portfolio tailored to your success.
            </p>
        </div>
    </div>
</section>

<!-- Our Story Section -->
<section class="px-6 md:px-10 lg:px-20 pt-10 lg:pt-[100px]">
    <div class="flex flex-col lg:flex-row items-center gap-16 lg:gap-24">

        <!-- Image Composition -->
        <div class="flex-1 w-full relative min-h-[300px] lg:min-h-[450px]" data-animate="fade-right">
            <div class="absolute top-5 left-5 w-[65%] h-[300px] bg-gradient-to-br from-bronze-primary/20 to-bronze-secondary/10 rounded-2xl z-0 border border-brand-gold/10"></div>
            <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80&w=800"
                 alt="Luxury Interior"
                 class="absolute top-[80px] right-0 w-[80%] h-[320px] object-cover rounded-2xl shadow-[0_20px_60px_rgba(0,0,0,0.5)] border-4 border-[#111111] z-10">
        </div>

        <!-- Story Content -->
        <div class="flex-1 text-center lg:text-left mt-10 lg:mt-0" data-animate="fade-up">
            <p class="text-brand-gold text-[11px] font-semibold tracking-[3px] uppercase mb-4">Our Journey</p>
            <h2 class="text-3xl md:text-[42px] lg:text-[54px] font-bold leading-[1.15] mb-6 lg:mb-8 text-white">Our Story</h2>
            <p class="text-white/60 text-[15px] leading-[1.9] mb-12">
                Find Your Property — we've put together more than 50 examples of automated real estate solutions for your first investment journey. An About Us page is the voice of a brand. Great About Us pages build trustworthy relationships between the brand and the customer, shaping a visual of a business beyond its name. We showcase excellence in every project we deliver.
            </p>

            <div class="flex flex-col sm:flex-row justify-center lg:justify-start gap-10 md:gap-16">
                <div class="text-center lg:text-left" data-animate="scale-in" data-delay="100">
                    <h4 class="text-[36px] lg:text-[48px] font-bold text-bronze-primary mb-1 leading-none">07+</h4>
                    <p class="text-[11px] font-semibold text-white/50 uppercase tracking-[2px]">Years of Business</p>
                </div>
                <div class="text-center lg:text-left" data-animate="scale-in" data-delay="200">
                    <h4 class="text-[36px] lg:text-[48px] font-bold text-bronze-primary mb-1 leading-none">100+</h4>
                    <p class="text-[11px] font-semibold text-white/50 uppercase tracking-[2px]">Projects Delivered</p>
                </div>
                <div class="text-center lg:text-left" data-animate="scale-in" data-delay="300">
                    <h4 class="text-[36px] lg:text-[48px] font-bold text-bronze-primary mb-1 leading-none">77+</h4>
                    <p class="text-[11px] font-semibold text-white/50 uppercase tracking-[2px]">Satisfied Customers</p>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- Why Choose Us Section -->
<section class="px-6 md:px-10 lg:px-20 pt-10 lg:pt-[80px]">
    <div class="text-center mb-10 lg:mb-16" data-animate="fade-up">
        <p class="text-brand-gold text-[11px] font-semibold tracking-[3px] uppercase mb-4">Our Advantages</p>
        <h2 class="text-3xl md:text-[42px] lg:text-[54px] font-bold text-white mb-6 tracking-wide leading-[1.15]">Why Choose Infinity Homes?</h2>
        <p class="text-[15px] text-white/60 max-w-[650px] mx-auto leading-relaxed">
            We create an unprecedented experience of fine living. Prestige, elegant architecture, and meticulous attention to detail set us apart in the luxury real estate market.
        </p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
        <div class="relative h-[300px] rounded-2xl overflow-hidden group cursor-pointer border border-white/5" data-animate="fade-up" data-delay="100">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=600" alt="Building" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-full px-6 py-5">
                <span class="text-brand-gold text-[11px] font-semibold tracking-[2px] uppercase">Tax Optimized</span>
                <h4 class="text-white text-lg font-bold mt-1">Affordable Property Taxes</h4>
            </div>
        </div>

        <div class="relative h-[300px] rounded-2xl overflow-hidden group cursor-pointer border border-white/5" data-animate="fade-up" data-delay="200">
            <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&q=80&w=600" alt="Living Room" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-full px-6 py-5">
                <span class="text-brand-gold text-[11px] font-semibold tracking-[2px] uppercase">Full Coverage</span>
                <h4 class="text-white text-lg font-bold mt-1">Property Insurance</h4>
            </div>
        </div>

        <div class="relative h-[300px] rounded-2xl overflow-hidden group cursor-pointer border border-white/5" data-animate="fade-up" data-delay="300">
            <img src="https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?auto=format&fit=crop&q=80&w=600" alt="Kitchen" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent"></div>
            <div class="absolute bottom-0 left-0 w-full px-6 py-5">
                <span class="text-brand-gold text-[11px] font-semibold tracking-[2px] uppercase">Streamlined</span>
                <h4 class="text-white text-lg font-bold mt-1">Fast and Easy Process</h4>
            </div>
        </div>

        <div class="h-[300px] rounded-2xl overflow-hidden bg-accent-gradient p-8 flex flex-col justify-center transition-all duration-300 hover:-translate-y-2 border border-white/5 shadow-xl" data-animate="scale-in" data-delay="400">
            <div class="w-14 h-14 rounded-2xl bg-white/10 border border-white/20 flex justify-center items-center mb-6">
                <svg class="w-7 h-7 stroke-brand-gold fill-none stroke-[1.5]" viewBox="0 0 24 24">
                    <path d="M9 12l2 2 4-4" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke-linecap="round"/>
                </svg>
            </div>
            <h4 class="text-white text-xl font-bold mb-3">Guaranteed Quality</h4>
            <p class="text-white/70 text-[0.9rem] leading-relaxed">
                Industry expertise to secure the best properties with custom solutions that inspire modern households.
            </p>
        </div>
    </div>

    <div class="flex justify-center" data-animate="fade-up" data-delay="300">
        <a href="#" class="group inline-flex items-center gap-3 bg-accent-gradient hover:opacity-90 text-white px-10 py-4 rounded-full font-semibold text-base transition-all duration-300 shadow-xl">
            Explore Our Services
            <i class="fa-solid fa-arrow-right-long text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
        </a>
    </div>
</section>

<!-- Board of Directors Section -->
<section class="px-6 md:px-10 lg:px-20 pt-10 lg:pt-[80px]">
    <div class="text-center mb-16" data-animate="fade-up">
        <p class="text-brand-gold text-[11px] font-semibold tracking-[3px] uppercase mb-4">Leadership</p>
        <h2 class="text-3xl md:text-[42px] lg:text-[54px] font-bold text-white tracking-wide leading-[1.15]">Board Of Directors</h2>
    </div>

    <!-- Managing Director Spotlight -->
    <div class="flex flex-col lg:flex-row items-center gap-8 lg:gap-20 mb-12 lg:mb-20 bg-card rounded-3xl p-6 md:p-10 lg:p-14 border border-white/5 shadow-2xl" data-animate="fade-up" data-delay="100">
        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?auto=format&fit=crop&q=80&w=600" alt="Managing Director" class="w-full lg:w-[320px] h-[280px] lg:h-[380px] object-cover rounded-2xl shadow-lg shrink-0 border border-white/5">

        <div class="text-center lg:text-left">
            <h3 class="text-3xl font-bold text-white mb-2">Name - Khandakar</h3>
            <h4 class="text-brand-gold font-semibold text-base mb-8 tracking-wide">Managing Director</h4>

            <div class="relative pl-0 lg:pl-8 border-l-0 lg:border-l-2 border-brand-gold/30">
                <i class="fa-solid fa-quote-left text-brand-gold text-2xl mb-4 block opacity-40"></i>
                <p class="text-white/60 text-[15px] italic leading-[1.9]">
                    Find Your Property — I've put together more than 50 examples of automated real estate text message scripts to use in your first text messaging campaign. An About Us page is the voice of a website from where you can learn about the story, history, and mission of its life. Great About Us pages work to build a trustworthy relationship between the brand and the customer.
                </p>
            </div>
        </div>
    </div>

    <!-- Directors Grid -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="group" data-animate="fade-up" data-delay="100">
            <div class="relative h-[300px] lg:h-[400px] rounded-2xl overflow-hidden mb-5 border border-white/5">
                <img src="https://images.unsplash.com/photo-1557862921-37829c790f19?auto=format&fit=crop&q=80&w=600" alt="Shuva Saha" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            </div>
            <h4 class="text-xl font-bold text-white mb-1">Shuva Saha</h4>
            <p class="text-[0.9rem] text-brand-gold font-semibold">Managing Director</p>
        </div>

        <div class="group" data-animate="fade-up" data-delay="200">
            <div class="relative h-[300px] lg:h-[400px] rounded-2xl overflow-hidden mb-5 border border-white/5">
                <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?auto=format&fit=crop&q=80&w=600" alt="MR. Javi" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            </div>
            <h4 class="text-xl font-bold text-white mb-1">MR. Javi</h4>
            <p class="text-[0.9rem] text-brand-gold font-semibold">Director</p>
        </div>

        <div class="group" data-animate="fade-up" data-delay="300">
            <div class="relative h-[300px] lg:h-[400px] rounded-2xl overflow-hidden mb-5 border border-white/5">
                <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&q=80&w=600" alt="Ashiq Rahman" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
            </div>
            <h4 class="text-xl font-bold text-white mb-1">Ashiq Rahman</h4>
            <p class="text-[0.9rem] text-brand-gold font-semibold">Managing Director</p>
        </div>
    </div>
</section>

<!-- Partners Section -->
<section class="px-6 md:px-10 lg:px-20 pt-10 lg:pt-[80px] pb-10 lg:pb-[80px]">
    <div class="text-center mb-10 lg:mb-16" data-animate="blur-in">
        <p class="text-brand-gold text-[11px] font-semibold tracking-[3px] uppercase mb-4">Collaborations</p>
        <h2 class="text-3xl md:text-[42px] lg:text-[54px] font-bold text-white tracking-wide leading-[1.15]">Our Partners</h2>
    </div>

    <div class="flex justify-center items-center gap-10 md:gap-16 lg:gap-28 flex-wrap" data-animate="fade-up" data-delay="200">
        <div class="flex flex-col items-center gap-3 text-white/50 hover:text-brand-gold transition-all duration-300 cursor-pointer group">
            <i class="fa-solid fa-city text-4xl group-hover:scale-110 transition-transform"></i>
            <div class="flex flex-col items-center">
                <span class="text-[11px] font-bold tracking-[2px] uppercase">Realestate</span>
                <span class="text-[7px] tracking-[3px] text-white/30 uppercase mt-1">Premium Partner</span>
            </div>
        </div>

        <div class="flex flex-col items-center gap-3 text-white/50 hover:text-brand-gold transition-all duration-300 cursor-pointer group">
            <i class="fa-brands fa-hive text-4xl group-hover:scale-110 transition-transform"></i>
            <div class="flex flex-col items-center">
                <span class="text-[11px] font-bold tracking-[2px] uppercase">Realstate</span>
                <span class="text-[7px] tracking-[3px] text-white/30 uppercase mt-1">Trusted Ally</span>
            </div>
        </div>

        <div class="flex flex-col items-center gap-3 text-white/50 hover:text-brand-gold transition-all duration-300 cursor-pointer group">
            <i class="fa-solid fa-house-chimney text-4xl group-hover:scale-110 transition-transform"></i>
            <div class="flex flex-col items-center">
                <span class="text-[11px] font-bold tracking-[2px] uppercase">Housedeco</span>
                <span class="text-[7px] tracking-[3px] text-white/30 uppercase mt-1">Design Partner</span>
            </div>
        </div>

        <div class="flex flex-col items-center gap-3 text-white/50 hover:text-brand-gold transition-all duration-300 cursor-pointer group">
            <i class="fa-regular fa-building text-4xl group-hover:scale-110 transition-transform"></i>
            <div class="flex flex-col items-center">
                <span class="text-[11px] font-bold tracking-[2px] uppercase">Construction</span>
                <span class="text-[7px] tracking-[3px] text-white/30 uppercase mt-1">Build Partner</span>
            </div>
        </div>
    </div>
</section>

@endsection