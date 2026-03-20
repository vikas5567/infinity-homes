@extends('layouts.master')
@section('content')

<!-- Hero Section -->
<section class="relative min-h-[50vh] lg:min-h-[60vh] flex items-center overflow-hidden">
    <!-- Background Content -->
    <div class="absolute inset-0 z-0">
        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=2000" alt="Executive Building" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/95 via-black/70 to-black/30"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-brand-bg via-transparent to-transparent"></div>
    </div>
    
    <div class="px-6 md:px-10 lg:px-20 relative z-10 w-full pt-16 lg:pt-0">
        <div class="max-w-[750px] mx-auto lg:mx-0 text-center lg:text-left">
            <div class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-brand-gold/10 border border-brand-gold/20 mb-6 hero-animate-1 mx-auto lg:mx-0">
                <span class="w-1 h-1 rounded-full bg-brand-gold animate-pulse"></span>
                <p class="text-brand-gold text-[10px] font-bold tracking-[2.4px] uppercase">Get In Touch</p>
            </div>
            <h1 class="text-white text-4xl md:text-[54px] lg:text-[64px] font-bold leading-[1.1] mb-6 hero-animate-2 tracking-tight">Connect With Our <br class="hidden md:block">Expert Advisors</h1>
            <p class="text-brand-muted text-base md:text-lg leading-relaxed max-w-[550px] hero-animate-3 mx-auto lg:mx-0">Whether you're looking to invest, buy, or manage a portfolio, our team in Dhaka is ready to provide personalized elite support.</p>
        </div>
    </div>
</section>

<!-- Contact Info Cards -->
<section class="px-6 md:px-10 lg:px-20 relative z-20 -mt-16 mb-20 lg:mb-32">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 lg:gap-8">
        
        <!-- Address -->
        <div class="bg-card p-10 rounded-3xl border border-white/5 transition-all duration-500 hover:-translate-y-2 group relative overflow-hidden shadow-2xl" data-animate="fade-up" data-delay="100">
            <div class="absolute top-0 right-0 w-32 h-32 bg-brand-gold/5 blur-[50px] rounded-full group-hover:bg-brand-gold/10 transition-colors"></div>
            <div class="w-16 h-16 rounded-2xl bg-brand-gold/10 border border-brand-gold/20 flex items-center justify-center mb-8 group-hover:bg-brand-gold group-hover:border-brand-gold transition-all duration-500">
                <i class="fa-solid fa-location-dot text-brand-gold text-2xl group-hover:text-black transition-colors"></i>
            </div>
            <h3 class="text-xl font-bold text-white mb-4">Elite Office</h3>
            <p class="text-brand-muted text-[15px] leading-relaxed">
                House #58 (4th Floor), Road #13,<br>Sector #12, Uttara, Dhaka-1230
            </p>
        </div>

        <!-- Phone -->
        <div class="bg-card p-10 rounded-3xl border border-white/5 transition-all duration-500 hover:-translate-y-2 group relative overflow-hidden shadow-2xl" data-animate="fade-up" data-delay="200">
            <div class="absolute top-0 right-0 w-32 h-32 bg-brand-gold/5 blur-[50px] rounded-full group-hover:bg-brand-gold/10 transition-colors"></div>
            <div class="w-16 h-16 rounded-2xl bg-brand-gold/10 border border-brand-gold/20 flex items-center justify-center mb-8 group-hover:bg-brand-gold group-hover:border-brand-gold transition-all duration-500">
                <i class="fa-solid fa-phone-volume text-brand-gold text-2xl group-hover:text-black transition-colors"></i>
            </div>
            <h3 class="text-xl font-bold text-white mb-4">Direct Support</h3>
            <p class="text-brand-muted text-[15px] leading-relaxed">
                General: +880 17112 63606<br>Office: info@infinityhomes.com
            </p>
        </div>

        <!-- Email -->
        <div class="bg-card p-10 rounded-3xl border border-white/5 transition-all duration-500 hover:-translate-y-2 group relative overflow-hidden shadow-2xl" data-animate="fade-up" data-delay="300">
            <div class="absolute top-0 right-0 w-32 h-32 bg-brand-gold/5 blur-[50px] rounded-full group-hover:bg-brand-gold/10 transition-colors"></div>
            <div class="w-16 h-16 rounded-2xl bg-brand-gold/10 border border-brand-gold/20 flex items-center justify-center mb-8 group-hover:bg-brand-gold group-hover:border-brand-gold transition-all duration-500">
                <i class="fa-solid fa-envelope-open-text text-brand-gold text-2xl group-hover:text-black transition-colors"></i>
            </div>
            <h3 class="text-xl font-bold text-white mb-4">Email Inquiry</h3>
            <p class="text-brand-muted text-[15px] leading-relaxed break-all">
                nexusassetdevelopments@gmail.com
            </p>
        </div>

    </div>
</section>

<!-- Form & Map Section -->
<section class="max-w-[1440px] mx-auto px-6 md:px-10 lg:px-20 grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-24 mb-20 lg:mb-32">
    
    <!-- Map Wrapper -->
    <div class="w-full min-h-[450px] lg:h-full rounded-3xl p-3 bg-card border border-white/5 shadow-2xl relative overflow-hidden" data-animate="fade-left">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224408.00730251477!2d77.51599554999999!3d28.498359799999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cea64b8f89aef%3A0xec0ccabb5317962e!2sGreater%20Noida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1774013372804!5m2!1sen!2sin" 
            class="w-full h-full border-0 grayscale invert opacity-70 blur-[1px] hover:grayscale-0 hover:invert-0 hover:opacity-100 hover:blur-0 transition-all duration-1000 rounded-2xl"
            allowfullscreen="" 
            loading="lazy">
        </iframe>
        <div class="absolute inset-0 pointer-events-none rounded-3xl border-[12px] border-card"></div>
    </div>

    <!-- Contact Form Card -->
    <div class="py-5" data-animate="fade-right">
        <span class="inline-block text-brand-gold text-[11px] font-bold tracking-[3px] uppercase mb-4">Send a Message</span>
        <h2 class="text-3xl md:text-5xl font-bold text-white mb-10 leading-tight">Request a <br class="hidden md:block"><span class="text-brand-gold">Consultation</span></h2>
        
        <form class="space-y-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <input type="text" placeholder="Full Name" class="w-full bg-card border border-white/10 rounded-xl px-6 py-4 text-white focus:outline-none focus:border-brand-gold transition-colors">
                <input type="email" placeholder="Email Address" class="w-full bg-card border border-white/10 rounded-xl px-6 py-4 text-white focus:outline-none focus:border-brand-gold transition-colors">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <input type="tel" placeholder="Phone Number" class="w-full bg-card border border-white/10 rounded-xl px-6 py-4 text-white focus:outline-none focus:border-brand-gold transition-colors">
                <div class="relative">
                    <select class="w-full bg-card border border-white/10 rounded-xl px-6 py-4 text-white/50 focus:outline-none focus:border-brand-gold transition-colors appearance-none cursor-pointer">
                        <option>Investment Inquiry</option>
                        <option>Property Viewing</option>
                        <option>Management Request</option>
                        <option>General Support</option>
                    </select>
                    <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none">
                        <i class="fa-solid fa-chevron-down text-brand-gold text-xs"></i>
                    </div>
                </div>
            </div>
            <textarea placeholder="Write your message here..." rows="5" class="w-full bg-card border border-white/10 rounded-xl px-6 py-4 text-white focus:outline-none focus:border-brand-gold transition-colors resize-none"></textarea>
            
            <button class="w-full bg-accent-gradient text-white py-5 rounded-xl font-bold uppercase tracking-widest hover:opacity-90 transition-opacity shadow-lg group">
                Submit Portfolio Request <i class="fa-solid fa-arrow-right-long ml-2 transition-all group-hover:ml-4"></i>
            </button>
        </form>
    </div>
</section>

@endsection