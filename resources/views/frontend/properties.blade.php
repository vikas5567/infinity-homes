@extends('layouts.master')
@section('content')

<!-- Hero Banner -->
<section class="relative h-[50vh] md:h-[60vh] flex items-center overflow-hidden">
    <img src="https://images.unsplash.com/photo-1600596542815-ffad4c1539a9?auto=format&fit=crop&q=80&w=1600" alt="Properties" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/40"></div>
    <div class="absolute inset-0 bg-gradient-to-t from-[#030303] via-transparent to-transparent"></div>

    <div class="px-6 md:px-10 lg:px-20 relative z-10 w-full">
        <div class="max-w-[700px] mx-auto lg:mx-0 text-center lg:text-left pt-6 lg:pt-0">
            <div class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-brand-gold/10 border border-brand-gold/20 mb-5 lg:mb-5 hero-animate-1 mx-auto lg:mx-0">
                <span class="w-1 h-1 rounded-full bg-brand-gold animate-pulse"></span>
                <p class="text-brand-gold text-[10px] font-bold tracking-[2.4px] uppercase">Our Portfolio</p>
            </div>
            <h1 class="text-white text-4xl md:text-[42px] lg:text-[54px] leading-[1.15] font-bold mb-3 lg:mb-4 hero-animate-2">Exclusive Properties</h1>
            <h2 class="text-brand-gold/80 text-lg md:text-xl lg:text-2xl font-medium mb-6 lg:mb-6 hero-animate-3">If you dream — we can create it</h2>
            <p class="text-white/60 text-[15px] leading-relaxed max-w-[550px] hero-animate-4">
                At Nexus Asset Developments Ltd, we proudly offer a diverse range of properties designed to meet your needs and aspirations. Whether you're seeking a luxurious family home or an investment opportunity, our selections feature exceptional options.
            </p>
        </div>
    </div>
</section>

<!-- Search Bar -->
<div class="relative z-20 mx-6 md:mx-10 lg:mx-20 -mt-[35px] bg-card rounded-2xl shadow-2xl border border-white/5 flex flex-col md:flex-row items-center p-3 gap-3 md:gap-0 hero-animate-5">

    <div class="w-full md:flex-1 flex items-center px-5 border-b md:border-b-0 md:border-r border-white/10 pb-3 md:pb-0">
        <select class="w-full bg-transparent outline-none text-[0.95rem] text-white/70 cursor-pointer appearance-none">
            <option class="bg-[#111]">All Location</option>
            <option class="bg-[#111]">Dhaka</option>
            <option class="bg-[#111]">Gazipur</option>
        </select>
        <i class="fa-solid fa-chevron-down text-brand-gold text-xs ml-2 pointer-events-none"></i>
    </div>

    <div class="w-full md:flex-1 flex items-center px-5 border-b md:border-b-0 md:border-r border-white/10 py-3 md:py-0">
        <select class="w-full bg-transparent outline-none text-[0.95rem] text-white/70 cursor-pointer appearance-none">
            <option class="bg-[#111]">Status</option>
            <option class="bg-[#111]">Buy</option>
            <option class="bg-[#111]">Rent</option>
        </select>
        <i class="fa-solid fa-chevron-down text-brand-gold text-xs ml-2 pointer-events-none"></i>
    </div>

    <div class="w-full md:flex-[2] flex items-center px-5 py-3 md:py-0">
        <i class="fa-solid fa-magnifying-glass text-white/30 mr-3"></i>
        <input type="text" placeholder="Find Your Property" class="w-full bg-transparent outline-none text-[0.95rem] text-white placeholder-white/30">
    </div>

    <button class="w-full md:w-[48px] h-[48px] bg-accent-gradient hover:opacity-90 text-white rounded-xl md:rounded-2xl flex justify-center items-center text-base transition-all duration-300 shrink-0">
        <i class="fa-solid fa-arrow-right"></i>
    </button>
</div>

<!-- Properties Grid Section -->
<section class="px-6 md:px-10 lg:px-20 pt-10 lg:pt-[80px]">

    <div class="text-center mb-16" data-animate="fade-up">
        <p class="text-brand-gold text-[11px] font-semibold tracking-[3px] uppercase mb-4">Explore</p>
        <h2 class="text-3xl md:text-[42px] lg:text-[54px] font-bold text-white tracking-wide leading-[1.15]">Find Your Ideal Places</h2>
    </div>

    <!-- Filter Tabs -->
    <div class="flex justify-center flex-wrap gap-4 mb-14" data-animate="fade-up" data-delay="100">
        <button class="bg-accent-gradient text-white px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300 shadow-lg">All</button>
        <button class="bg-transparent text-white/50 border border-white/10 hover:border-brand-gold hover:text-brand-gold px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300">Featured</button>
        <button class="bg-transparent text-white/50 border border-white/10 hover:border-brand-gold hover:text-brand-gold px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300">New</button>
        <button class="bg-transparent text-white/50 border border-white/10 hover:border-brand-gold hover:text-brand-gold px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300">Location</button>
        <button class="bg-transparent text-white/50 border border-white/10 hover:border-brand-gold hover:text-brand-gold px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300">Ongoing</button>
        <button class="bg-transparent text-white/50 border border-white/10 hover:border-brand-gold hover:text-brand-gold px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300">Upcoming</button>
    </div>

    <!-- Properties Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">

        <!-- Property Card 1 -->
        <div class="relative h-[320px] md:h-[380px] lg:h-[420px] rounded-2xl lg:rounded-[24px] overflow-hidden group cursor-pointer border border-white/5" data-animate="fade-up" data-delay="100">
            <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&q=80&w=800" alt="Dhaka Apartment" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-6 bg-black/40 backdrop-blur-xl px-5 py-4 lg:px-7 lg:py-5 rounded-2xl flex flex-col gap-2 border border-white/10 group-hover:bg-black/60 transition-colors duration-300">
                <h3 class="text-white text-lg font-bold">Dhaka Apartment, Dhanmondi</h3>
                <div class="text-white/50 text-[13px] flex items-center gap-2">
                    <i class="fa-solid fa-location-dot text-brand-gold"></i> Road 12, Dhanmondi, Dhaka
                </div>
                <div class="flex items-center justify-between border-t border-white/10 pt-3 mt-1">
                    <span class="text-brand-gold font-bold text-base">BDT 1,45,0000</span>
                    <div class="flex items-center gap-5">
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bed text-white/30"></i> 4</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bath text-white/30"></i> 4</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-vector-square text-white/30"></i> 230 ft²</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Property Card 2 -->
        <div class="relative h-[320px] md:h-[380px] lg:h-[420px] rounded-2xl lg:rounded-[24px] overflow-hidden group cursor-pointer border border-white/5" data-animate="fade-up" data-delay="200">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=800" alt="Lakeside Residence" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-6 bg-black/40 backdrop-blur-xl px-5 py-4 lg:px-7 lg:py-5 rounded-2xl flex flex-col gap-2 border border-white/10 group-hover:bg-black/60 transition-colors duration-300">
                <h3 class="text-white text-lg font-bold">Lakeside Residence, Gulshan</h3>
                <div class="text-white/50 text-[13px] flex items-center gap-2">
                    <i class="fa-solid fa-location-dot text-brand-gold"></i> Road 12, Gulshan, Dhaka
                </div>
                <div class="flex items-center justify-between border-t border-white/10 pt-3 mt-1">
                    <span class="text-brand-gold font-bold text-base">BDT 1,25,0000</span>
                    <div class="flex items-center gap-5">
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bed text-white/30"></i> 3</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bath text-white/30"></i> 3</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-vector-square text-white/30"></i> 180 ft²</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Explore More Card -->
        <div class="relative h-[320px] md:h-[380px] lg:h-[420px] rounded-2xl lg:rounded-[24px] overflow-hidden group cursor-pointer border border-white/5 bg-bronze-primary/10" data-animate="scale-in" data-delay="300">
            <img src="https://images.unsplash.com/photo-1464146072230-91cabc968266?auto=format&fit=crop&q=80&w=800" alt="Explore" class="w-full h-full object-cover opacity-40 grayscale transition-transform duration-700 group-hover:scale-110">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120px] h-[120px] bg-bronze-primary rounded-full flex justify-center items-center shadow-2xl cursor-pointer transition-all duration-500 hover:scale-110 hover:bg-bronze-secondary">
                <svg class="absolute w-full h-full animate-[spin_10s_linear_infinite]" viewBox="0 0 120 120">
                    <path id="propCirclePath" d="M 60, 60 m -45, 0 a 45,45 0 1,1 90,0 a 45,45 0 1,1 -90,0" fill="none" />
                    <text class="text-[11px] font-bold fill-white tracking-[3px] uppercase">
                        <textPath href="#propCirclePath" startOffset="0%">
                            Explore • Explore • Explore •
                        </textPath>
                    </text>
                </svg>
                <i class="fa-solid fa-arrow-up text-white text-2xl rotate-45 z-20"></i>
            </div>
        </div>

        <!-- Property Card 3 -->
        <div class="relative h-[320px] md:h-[380px] lg:h-[420px] rounded-2xl lg:rounded-[24px] overflow-hidden group cursor-pointer border border-white/5" data-animate="fade-up" data-delay="300">
            <img src="https://images.unsplash.com/photo-1574362848149-11496d93a7c7?auto=format&fit=crop&q=80&w=800" alt="Green Villas" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-6 bg-black/40 backdrop-blur-xl px-5 py-4 lg:px-7 lg:py-5 rounded-2xl flex flex-col gap-2 border border-white/10 group-hover:bg-black/60 transition-colors duration-300">
                <h3 class="text-white text-lg font-bold">Green Villas, Bashundhara</h3>
                <div class="text-white/50 text-[13px] flex items-center gap-2">
                    <i class="fa-solid fa-location-dot text-brand-gold"></i> Block C, Bashundhara, Dhaka
                </div>
                <div class="flex items-center justify-between border-t border-white/10 pt-3 mt-1">
                    <span class="text-brand-gold font-bold text-base">BDT 1,60,0000</span>
                    <div class="flex items-center gap-5">
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bed text-white/30"></i> 5</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bath text-white/30"></i> 4</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-vector-square text-white/30"></i> 320 ft²</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Property Card 4 -->
        <div class="relative h-[320px] md:h-[380px] lg:h-[420px] rounded-2xl lg:rounded-[24px] overflow-hidden group cursor-pointer border border-white/5" data-animate="fade-up" data-delay="100">
            <img src="https://images.unsplash.com/photo-1554469384-e58fac16e23a?auto=format&fit=crop&q=80&w=800" alt="Urban Nest" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-6 bg-black/40 backdrop-blur-xl px-5 py-4 lg:px-7 lg:py-5 rounded-2xl flex flex-col gap-2 border border-white/10 group-hover:bg-black/60 transition-colors duration-300">
                <h3 class="text-white text-lg font-bold">Urban Nest Apartment, Banani</h3>
                <div class="text-white/50 text-[13px] flex items-center gap-2">
                    <i class="fa-solid fa-location-dot text-brand-gold"></i> Road 4, Banani, Dhaka
                </div>
                <div class="flex items-center justify-between border-t border-white/10 pt-3 mt-1">
                    <span class="text-brand-gold font-bold text-base">BDT 1,35,0000</span>
                    <div class="flex items-center gap-5">
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bed text-white/30"></i> 3</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bath text-white/30"></i> 3</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-vector-square text-white/30"></i> 200 ft²</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Property Card 5 -->
        <div class="relative h-[320px] md:h-[380px] lg:h-[420px] rounded-2xl lg:rounded-[24px] overflow-hidden group cursor-pointer border border-white/5" data-animate="fade-up" data-delay="200">
            <img src="https://images.unsplash.com/photo-1579625407024-817a8ea3f2eb?auto=format&fit=crop&q=80&w=800" alt="Cedar Residence" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-6 bg-black/40 backdrop-blur-xl px-5 py-4 lg:px-7 lg:py-5 rounded-2xl flex flex-col gap-2 border border-white/10 group-hover:bg-black/60 transition-colors duration-300">
                <h3 class="text-white text-lg font-bold">Cedar Residence, Uttara</h3>
                <div class="text-white/50 text-[13px] flex items-center gap-2">
                    <i class="fa-solid fa-location-dot text-brand-gold"></i> Sector 11, Uttara, Dhaka
                </div>
                <div class="flex items-center justify-between border-t border-white/10 pt-3 mt-1">
                    <span class="text-brand-gold font-bold text-base">BDT 1,10,0000</span>
                    <div class="flex items-center gap-5">
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bed text-white/30"></i> 4</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bath text-white/30"></i> 3</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-vector-square text-white/30"></i> 210 ft²</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Property Card 6 -->
        <div class="relative h-[320px] md:h-[380px] lg:h-[420px] rounded-2xl lg:rounded-[24px] overflow-hidden group cursor-pointer border border-white/5" data-animate="fade-up" data-delay="100">
            <img src="https://images.unsplash.com/photo-1515263487990-61b07816b324?auto=format&fit=crop&q=80&w=800" alt="Sapphire Apartment" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-6 bg-black/40 backdrop-blur-xl px-5 py-4 lg:px-7 lg:py-5 rounded-2xl flex flex-col gap-2 border border-white/10 group-hover:bg-black/60 transition-colors duration-300">
                <h3 class="text-white text-lg font-bold">Sapphire Apartment, Mirpur</h3>
                <div class="text-white/50 text-[13px] flex items-center gap-2">
                    <i class="fa-solid fa-location-dot text-brand-gold"></i> Section 6, Mirpur, Dhaka
                </div>
                <div class="flex items-center justify-between border-t border-white/10 pt-3 mt-1">
                    <span class="text-brand-gold font-bold text-base">BDT 95,0000</span>
                    <div class="flex items-center gap-5">
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bed text-white/30"></i> 3</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bath text-white/30"></i> 2</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-vector-square text-white/30"></i> 150 ft²</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Property Card 7 -->
        <div class="relative h-[320px] md:h-[380px] lg:h-[420px] rounded-2xl lg:rounded-[24px] overflow-hidden group cursor-pointer border border-white/5" data-animate="fade-up" data-delay="200">
            <img src="https://images.unsplash.com/photo-1542361345-89e58247f2d5?auto=format&fit=crop&q=80&w=800" alt="Dhaka Apartments" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
            <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
            <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-6 bg-black/40 backdrop-blur-xl px-5 py-4 lg:px-7 lg:py-5 rounded-2xl flex flex-col gap-2 border border-white/10 group-hover:bg-black/60 transition-colors duration-300">
                <h3 class="text-white text-lg font-bold">Dhaka Apartments, Dhanmondi</h3>
                <div class="text-white/50 text-[13px] flex items-center gap-2">
                    <i class="fa-solid fa-location-dot text-brand-gold"></i> Road 27, Dhanmondi, Dhaka
                </div>
                <div class="flex items-center justify-between border-t border-white/10 pt-3 mt-1">
                    <span class="text-brand-gold font-bold text-base">BDT 1,45,0000</span>
                    <div class="flex items-center gap-5">
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bed text-white/30"></i> 4</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-bath text-white/30"></i> 4</span>
                        <span class="text-[13px] text-white/50 font-medium flex items-center gap-1.5"><i class="fa-solid fa-vector-square text-white/30"></i> 230 ft²</span>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Load More Button -->
    <div class="flex justify-center mb-16" data-animate="fade-up" data-delay="200">
        <a href="#" class="group inline-flex items-center gap-3 bg-accent-gradient hover:opacity-90 text-white px-10 py-4 rounded-full font-semibold text-base transition-all duration-300 shadow-xl">
            Load More Properties
            <i class="fa-solid fa-arrow-right-long text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
        </a>
    </div>
</section>

<!-- Partners Section -->
<section class="px-6 md:px-10 lg:px-20 pt-10 lg:pt-[40px]">
    <div class="flex justify-center items-center gap-16 md:gap-28 flex-wrap opacity-50" data-animate="fade-up" data-delay="100">
        <div class="flex flex-col items-center gap-3 text-white hover:text-brand-gold transition-colors duration-300 cursor-pointer group">
            <i class="fa-solid fa-city text-4xl group-hover:scale-110 transition-transform"></i>
            <span class="text-[11px] font-bold tracking-[2px] uppercase">Realestate</span>
        </div>
        <div class="flex flex-col items-center gap-3 text-white hover:text-brand-gold transition-colors duration-300 cursor-pointer group">
            <i class="fa-brands fa-hive text-4xl group-hover:scale-110 transition-transform"></i>
            <span class="text-[11px] font-bold tracking-[2px] uppercase">Realstate</span>
        </div>
        <div class="flex flex-col items-center gap-3 text-white hover:text-brand-gold transition-colors duration-300 cursor-pointer group">
            <i class="fa-solid fa-house-chimney text-4xl group-hover:scale-110 transition-transform"></i>
            <span class="text-[11px] font-bold tracking-[2px] uppercase">Housedeco</span>
        </div>
        <div class="flex flex-col items-center gap-3 text-white hover:text-brand-gold transition-colors duration-300 cursor-pointer group">
            <i class="fa-regular fa-building text-4xl group-hover:scale-110 transition-transform"></i>
            <span class="text-[11px] font-bold tracking-[2px] uppercase">Construction</span>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="px-6 md:px-10 lg:px-20 pt-10 lg:pt-[80px] pb-10 lg:pb-[80px]">
    <div class="relative w-full rounded-[24px] overflow-hidden flex flex-col md:flex-row items-center min-h-[380px] p-10 md:p-16 shadow-2xl border border-white/5" data-animate="fade-up" data-delay="100">
        <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&q=80&w=1600" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/90 via-black/70 to-black/40"></div>

        <div class="relative z-10 text-white flex-1 max-w-[500px] text-center md:text-left mb-8 md:mb-0">
            <p class="text-brand-gold text-[11px] font-semibold tracking-[3px] uppercase mb-4">Start Today</p>
            <h2 class="text-3xl md:text-[36px] lg:text-[42px] font-bold mb-4 lg:mb-5 leading-[1.15]">Get Started Now</h2>
            <p class="text-white/60 text-[15px] mb-8 leading-relaxed">
                Begin your journey towards a smarter real estate investment with Nexus Asset Developments Ltd. Explore our luxury properties and embark on your journey toward a secure investment today.
            </p>
            <a href="#" class="group inline-flex items-center gap-3 bg-accent-gradient hover:opacity-90 text-white px-10 py-4 rounded-full font-semibold text-base transition-all duration-300 shadow-xl">
                Contact Us
                <i class="fa-solid fa-arrow-right-long text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
        </div>

        <div class="relative z-10 w-full md:w-[400px] h-[250px] rounded-2xl overflow-hidden border border-white/10 shadow-2xl md:ml-auto">
            <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=600" alt="Building Video" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[60px] h-[60px] bg-brand-gold text-[#030303] rounded-full flex justify-center items-center text-xl cursor-pointer shadow-[0_0_30px_rgba(212,175,55,0.4)] transition-all duration-300 hover:scale-110">
                <i class="fa-solid fa-play ml-1"></i>
            </div>
        </div>
    </div>
</section>

@endsection