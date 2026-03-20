@extends('layouts.master')
@section('content')

<!-- Hero Section -->
<section class="bg-brand-bg w-full min-h-[80vh] lg:h-[90vh] relative flex flex-col overflow-hidden">
    <!-- Mobile Background Accent -->
    <div class="absolute inset-0 lg:hidden z-0">
        <img src="{{ asset('images/home.png') }}" alt="Background" class="w-full h-full object-cover opacity-20 grayscale">
        <div class="absolute inset-0 bg-gradient-to-b from-brand-bg via-transparent to-brand-bg"></div>
    </div>

    <main class="flex flex-1 px-6 md:px-10 lg:px-20 relative">
        
        <div class="flex-1 flex flex-col justify-center items-center lg:items-start text-center lg:text-left max-w-[650px] mx-auto lg:mx-0 z-10 pb-10 lg:pb-16 pt-6 lg:pt-0">
            <div class="inline-flex items-center gap-2 py-1 px-3 rounded-full bg-brand-gold/10 border border-brand-gold/20 mb-6 lg:mb-5 hero-animate-1 transition-all">
                <span class="w-1 h-1 rounded-full bg-brand-gold animate-pulse"></span>
                <p class="text-brand-gold text-[10px] font-bold tracking-[2.4px] uppercase">Infinity Real Estate</p>
            </div>
            <h1 class="text-white text-4xl md:text-[42px] lg:text-[54px] leading-[1.15] font-bold mb-6 lg:mb-6 hero-animate-2">Discover Your Future:<br class="hidden lg:block"> Find The Perfect Property</h1>
            <p class="text-brand-muted text-sm lg:text-[15px] leading-relaxed mb-8 lg:mb-10 max-w-[95%] lg:max-w-[90%] hero-animate-3">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo, felis sed elementum ultrices, tortor urna molestie metus, accumsan sem ante quis urna.</p>
            
            <div class="flex flex-col sm:flex-row gap-4 hero-animate-4">
                <a href="/properties" class="bg-accent-gradient text-white py-4 lg:py-[15px] px-10 rounded-full text-base lg:text-[15px] font-bold w-full sm:w-fit flex justify-center items-center gap-2.5 hover:opacity-90 transition-all active:scale-95 shadow-[0_10px_20px_rgba(212,175,55,0.2)]">
                Explore Properties
                <i class="fa-solid fa-arrow-right-long text-sm"></i>
                </a>
            </div>

            <div class="mt-auto hero-animate-5 hidden md:block">
                <div class="flex">
                    <div class="py-3 lg:py-[15px] px-6 lg:px-10 text-sm font-medium cursor-pointer bg-[#2c1a10] text-white">Buy</div>
                    <!-- <div class="py-3 lg:py-[15px] px-6 lg:px-10 text-sm font-medium cursor-pointer text-[#888888] bg-brand-tabInactive">Rent</div> -->
                </div>
                <div class="bg-search-gradient flex items-center py-4 lg:py-5 px-5 lg:px-[30px] gap-5 lg:gap-[30px] w-fit">
                    
                    <div class="flex flex-col gap-2">
                        <label class="text-brand-searchLabel text-[13px] font-medium">Location</label>
                        <span class="text-white text-sm font-normal">Greater Noida, Uttar Pradesh, India</span>
                    </div>
                    
                    <div class="w-[1px] h-10 bg-white/10"></div>
                    
                    <div class="flex flex-col gap-2">
                        <label class="text-brand-searchLabel text-[13px] font-medium">Pricing</label>
                        <span class="text-white text-sm font-normal">$15000 - $65000</span>
                    </div>

                    <button class="bg-brand-searchBtn hover:bg-brand-searchBtnHover border-none w-[50px] h-[50px] rounded flex justify-center items-center cursor-pointer ml-5 transition-colors duration-300">
                        <svg class="w-5 h-5 fill-none stroke-white stroke-2" viewBox="0 0 24 24">
                            <circle cx="11" cy="11" r="8"></circle>
                            <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="absolute right-2 top-[5%] w-[55%] h-[85%] z-0 hidden lg:flex items-center justify-end pr-5 hero-animate-img">
            <img src="{{ asset('images/home.png') }}" alt="Modern 3D House" class="w-full h-auto object-cover rounded-xl drop-shadow-[-20px_20px_30px_rgba(0,0,0,0.8)]">
        </div>
    </main>
</section>

<!-- Trusted Advisors Section -->
<section class="pt-10 lg:pt-[100px]">
        <div class="px-6 md:px-10 lg:px-20 flex flex-col lg:flex-row justify-between items-start mb-10 lg:mb-16 gap-10 lg:gap-[100px] items-start">
            
            <div class="flex-1 w-full">
                <h2 class="font-serif text-3xl md:text-[42px] lg:text-[54px] font-bold leading-[1.15] mb-6 lg:mb-8 text-center lg:text-left text-white" data-animate="fade-up">
                    Your Trusted Real Estate Advisors
                </h2>
                
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <div class="bg-card p-5 lg:p-[30px] rounded-2xl flex flex-col justify-center shadow-xl border border-white/5" data-animate="scale-in" data-delay="100">
                        <span class="text-[40px] lg:text-[64px] font-bold mb-2.5 text-bronze-primary leading-none">30+</span>
                        <p class="text-base text-muted m-0 font-medium">Satisfied Customers</p>
                    </div>
                    
                    <div class="bg-gradient-to-br from-bronze-primary to-bronze-secondary p-5 lg:p-[30px] rounded-2xl flex flex-col justify-center shadow-xl" data-animate="scale-in" data-delay="200">
                        <span class="text-[40px] lg:text-[64px] font-bold mb-2.5 text-white leading-none">5k+</span>
                        <p class="text-base text-white/90 m-0 font-medium">Award Winning</p>
                    </div>
                    
                    <div class="bg-card p-5 lg:p-[30px] rounded-2xl flex flex-col justify-center shadow-xl border border-white/5" data-animate="scale-in" data-delay="300">
                        <span class="text-[40px] lg:text-[64px] font-bold mb-2.5 text-bronze-primary leading-none">07+</span>
                        <p class="text-base text-muted m-0 font-medium">Years of Experience</p>
                    </div>
                    
                    <div class="bg-card p-5 lg:p-[30px] rounded-2xl flex flex-col justify-center shadow-xl border border-white/5" data-animate="scale-in" data-delay="400">
                        <span class="text-[40px] lg:text-[64px] font-bold mb-2.5 text-bronze-primary leading-none">33+</span>
                        <p class="text-base text-muted m-0 font-medium">Projects Delivered</p>
                    </div>
                </div>
            </div>
            
            <div class="flex-1 w-full" data-animate="fade-right" data-delay="200">
                <p class="text-[15px] leading-relaxed text-white/70 mb-10 text-center lg:text-left font-medium max-w-[90%]">
                    Find Your Property I've put together more than 50 examples of automated real estate text message scripts to use in your first text messaging campaign.
                </p>
                
                <div class="flex flex-col gap-5">
                    <div class="w-full h-[200px] lg:h-[250px]">
                        <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=1000" 
                             alt="Modern Building" 
                             class="w-full h-full object-cover rounded-xl shadow-lg border border-white/5">
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-5">
                        <div class="flex-1 relative h-[220px] lg:h-[300px]">
                            <img src="https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&q=80&w=600" 
                                 alt="Modern Interior" 
                                 class="w-full h-full object-cover rounded-xl shadow-lg border border-white/5">
                            
                            <div class="absolute -right-4 -bottom-4 lg:-right-6 lg:bottom-10 w-[90px] h-[90px] rounded-full bg-bronze-primary flex justify-center items-center shadow-xl z-10 border border-bronze-primary/50">
                                <svg class="absolute w-full h-full animate-[spin_10s_linear_infinite]" viewBox="0 0 100 100">
                                    <path id="circlePath" d="M 50, 50 m -35, 0 a 35,35 0 1,1 70,0 a 35,35 0 1,1 -70,0" fill="none" />
                                    <text class="text-[14px] font-bold uppercase tracking-[2px] fill-white">
                                        <textPath href="#circlePath" startOffset="0%">
                                            Explore • Explore •
                                        </textPath>
                                    </text>
                                </svg>
                                <i class="fa-solid fa-arrow-up text-white text-xl z-10 rotate-45"></i>
                            </div>
                        </div>
                        
                        <div class="flex-1 h-[220px] lg:h-[300px]">
                            <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&q=80&w=600" 
                                 alt="Property Details" 
                                 class="w-full h-full object-cover rounded-xl shadow-lg border border-white/5">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <!-- Featured Properties -->
    <section class="px-5 md:px-10 lg:px-20 pt-12 lg:pt-[80px]">
        
        <div class="flex flex-col lg:flex-row justify-between items-start mb-16 gap-10">
            <h2 class="text-3xl md:text-[42px] lg:text-[54px] font-bold leading-[1.15] flex-1 max-w-[650px] text-white" data-animate="fade-up">
                Discover Your Perfect Property Match
            </h2>
            <p class="text-[15px] text-white/70 flex-1 max-w-[500px] leading-relaxed pt-2" data-animate="fade-up" data-delay="150">
                Browse our curated selection of ultra-luxury residences and investment opportunities. Each property is handpicked for its exceptional design, prime location, and premium amenities.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-16">
            
            <div class="relative h-[300px] md:h-[380px] lg:h-[450px] rounded-2xl lg:rounded-[24px] overflow-hidden group border border-white/5" data-animate="fade-up" data-delay="100">
                <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&q=80&w=1000" alt="Skyper Pool Apartment" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                
                <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-6 bg-black/40 backdrop-blur-xl px-5 py-4 lg:px-8 lg:py-6 rounded-2xl flex flex-col gap-2 lg:gap-3 border border-white/10 group-hover:bg-black/60 transition-colors duration-300">
                    <h3 class="text-lg lg:text-2xl font-bold text-white">Skyper Pool Apartment</h3>
                    <div class="text-[0.9rem] text-white/60 flex items-center gap-2">
                        <i class="fa-solid fa-location-dot text-brand-gold"></i> Road 12, Dhanmondi, Dhaka
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center mt-3 font-semibold gap-6">
                        <span class="text-brand-gold text-lg">BDT 1,45,0000</span>
                        <div class="flex items-center gap-4 text-white/70 font-medium">
                            <span class="flex items-center gap-2 text-[0.85rem]">
                                <i class="fa-solid fa-bed text-brand-gold"></i> 4
                            </span>
                            <span class="flex items-center gap-2 text-[0.85rem]">
                                <i class="fa-solid fa-bath text-brand-gold"></i> 4
                            </span>
                            <span class="flex items-center gap-2 text-[0.85rem]">
                                <i class="fa-solid fa-vector-square text-brand-gold"></i> 230 ft
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative h-[300px] md:h-[380px] lg:h-[450px] rounded-2xl lg:rounded-[24px] overflow-hidden group border border-white/5" data-animate="fade-up" data-delay="200">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=1000" alt="Cedar Residence" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                
                <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-6 bg-black/40 backdrop-blur-xl px-5 py-4 lg:px-8 lg:py-6 rounded-2xl flex flex-col gap-2 lg:gap-3 border border-white/10 group-hover:bg-black/60 transition-colors duration-300">
                    <h3 class="text-lg lg:text-2xl font-bold text-white">Cedar Residence</h3>
                    <div class="text-[0.9rem] text-white/60 flex items-center gap-2">
                        <i class="fa-solid fa-location-dot text-brand-gold"></i> Road 12, Uttara, Dhaka
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center mt-3 font-semibold gap-6">
                        <span class="text-brand-gold text-lg">BDT 1,25,0000</span>
                        <div class="flex items-center gap-4 text-white/70 font-medium">
                            <span class="flex items-center gap-2 text-[0.85rem]">
                                <i class="fa-solid fa-bed text-brand-gold"></i> 4
                            </span>
                            <span class="flex items-center gap-2 text-[0.85rem]">
                                <i class="fa-solid fa-bath text-brand-gold"></i> 4
                            </span>
                            <span class="flex items-center gap-2 text-[0.85rem]">
                                <i class="fa-solid fa-vector-square text-brand-gold"></i> 230 ft
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative h-[300px] md:h-[380px] lg:h-[450px] rounded-2xl lg:rounded-[24px] overflow-hidden group border border-white/5" data-animate="fade-up" data-delay="300">
                <img src="https://images.unsplash.com/photo-1464146072230-91cabc968266?auto=format&fit=crop&q=80&w=1000" alt="Lakeside Apartment" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                
                <div class="absolute bottom-4 left-4 right-4 lg:bottom-6 lg:left-6 lg:right-6 bg-black/40 backdrop-blur-xl px-5 py-4 lg:px-8 lg:py-6 rounded-2xl flex flex-col gap-2 lg:gap-3 border border-white/10 group-hover:bg-black/60 transition-colors duration-300">
                    <h3 class="text-lg lg:text-2xl font-bold text-white">Lakeside Apartment</h3>
                    <div class="text-[0.9rem] text-white/60 flex items-center gap-2">
                        <i class="fa-solid fa-location-dot text-brand-gold"></i> Road 12, Dhanmondi, Dhaka
                    </div>
                    <div class="flex flex-col sm:flex-row sm:items-center mt-3 font-semibold gap-6">
                        <span class="text-brand-gold text-lg">BDT 1,45,0000</span>
                        <div class="flex items-center gap-4 text-white/70 font-medium">
                            <span class="flex items-center gap-2 text-[0.85rem]">
                                <i class="fa-solid fa-bed text-brand-gold"></i> 8
                            </span>
                            <span class="flex items-center gap-2 text-[0.85rem]">
                                <i class="fa-solid fa-bath text-brand-gold"></i> 6
                            </span>
                            <span class="flex items-center gap-2 text-[0.85rem]">
                                <i class="fa-solid fa-vector-square text-brand-gold"></i> 360 ft
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative h-[300px] md:h-[380px] lg:h-[450px] rounded-2xl lg:rounded-[24px] overflow-hidden group border border-white/5 bg-bronze-primary/10" data-animate="scale-in" data-delay="400">
                <img src="https://images.unsplash.com/photo-1554469384-e58fac16e23a?auto=format&fit=crop&q=80&w=1000" alt="Building" class="w-full h-full object-cover opacity-40 grayscale transition-transform duration-700 group-hover:scale-110">
                
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120px] h-[120px] bg-bronze-primary rounded-full flex justify-center items-center shadow-2xl cursor-pointer transition-all duration-500 hover:scale-110 hover:bg-bronze-secondary">
                    <svg class="absolute w-full h-full animate-[spin_10s_linear_infinite]" viewBox="0 0 100 100">
                        <path id="circlePath2" d="M 50, 50 m -35, 0 a 35,35 0 1,1 70,0 a 35,35 0 1,1 -70,0" fill="none" />
                        <text class="text-[12px] font-bold fill-white tracking-[2.5px] uppercase">
                            <textPath href="#circlePath2" startOffset="0%">
                                View More • View More •
                            </textPath>
                        </text>
                    </svg>
                    <i class="fa-solid fa-arrow-right text-white text-2xl z-10 -rotate-45"></i>
                </div>
            </div>

        </div>

        <div class="flex justify-center" data-animate="fade-up" data-delay="300">
            <a href="{{ route('properties') }}" class="group inline-flex items-center gap-3 bg-accent-gradient hover:opacity-90 text-white px-10 py-4 rounded-full font-semibold text-base transition-all duration-300 shadow-xl">
                Explore All Properties
                <i class="fa-solid fa-arrow-right-long text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
        </div>
        
    </section>

    <!-- Areas -->
    <section class="px-5 md:px-10 lg:px-20 pt-12 lg:pt-[80px]">
        
        <div class="flex flex-col lg:flex-row justify-between items-start mb-16 gap-10">
            <h2 class="text-3xl md:text-[42px] lg:text-[54px] font-bold leading-[1.15] flex-1 max-w-[650px] text-white" data-animate="fade-up">
                Find Properties In<br>These Areas
            </h2>
            <p class="text-[15px] text-white/70 flex-1 max-w-[500px] leading-relaxed pt-2" data-animate="fade-up" data-delay="150">
                Discover the most prestigious neighborhoods. From the bustling heart of Dhanmondi to the serene suburbs of Uttara, find the location that perfectly reflects your lifestyle.
            </p>
        </div>

        <div class="flex justify-start md:justify-center items-center mb-12 gap-4 overflow-x-auto pb-4 md:pb-0 flex-nowrap md:flex-wrap scrollbar-hide" data-animate="fade-up" data-delay="200">
            <button class="whitespace-nowrap bg-accent-gradient text-white px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300 shadow-lg">
                All Neighborhoods
            </button>
            <button class="whitespace-nowrap bg-white/5 text-white/80 border border-white/10 hover:border-brand-gold hover:text-white px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300 backdrop-blur-md">
                Dhanmondi
            </button>
            <button class="whitespace-nowrap bg-white/5 text-white/80 border border-white/10 hover:border-brand-gold hover:text-white px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300 backdrop-blur-md">
                Banani
            </button>
            <button class="whitespace-nowrap bg-white/5 text-white/80 border border-white/10 hover:border-brand-gold hover:text-white px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300 backdrop-blur-md">
                Uttara
            </button>
            <button class="whitespace-nowrap bg-white/5 text-white/80 border border-white/10 hover:border-brand-gold hover:text-white px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300 backdrop-blur-md">
                Mirpur
            </button>
            <button class="whitespace-nowrap bg-white/5 text-white/80 border border-white/10 hover:border-brand-gold hover:text-white px-8 py-3 rounded-full text-[0.95rem] font-semibold cursor-pointer transition-all duration-300 backdrop-blur-md">
                Basundhara
            </button>
            <button class="whitespace-nowrap bg-transparent text-white/50 border-none p-2 text-[1.1rem] cursor-pointer hover:text-brand-gold transition-colors">
                <i class="fa-solid fa-chevron-right"></i>
            </button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-16">
            
            <div class="relative h-[280px] md:h-[350px] rounded-2xl lg:rounded-[24px] overflow-hidden group cursor-pointer md:col-span-2 border border-white/5" data-animate="fade-up" data-delay="100">
                <img src="https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?auto=format&fit=crop&q=80&w=1000" alt="Gazipur" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute bottom-0 left-0 w-full h-[70%] bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-8">
                    <span class="text-brand-gold text-[0.9rem] font-bold mb-1 tracking-wider">8 PROPERTIES</span>
                    <h3 class="text-white text-3xl font-bold">Gazipur</h3>
                </div>
            </div>

            <div class="relative h-[350px] rounded-[24px] overflow-hidden group cursor-pointer border border-white/5">
                <img src="https://images.unsplash.com/photo-1486406146926-c627a92ad1ab?auto=format&fit=crop&q=80&w=1000" alt="Uttara" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute bottom-0 left-0 w-full h-[70%] bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-8">
                    <span class="text-brand-gold text-[0.9rem] font-bold mb-1 tracking-wider">8 PROPERTIES</span>
                    <h3 class="text-white text-3xl font-bold">Uttara</h3>
                </div>
            </div>

            <div class="relative h-[350px] rounded-[24px] overflow-hidden group cursor-pointer border border-white/5">
                <img src="https://images.unsplash.com/photo-1464146072230-91cabc968266?auto=format&fit=crop&q=80&w=1000" alt="Mirpur" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute bottom-0 left-0 w-full h-[70%] bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-8">
                    <span class="text-brand-gold text-[0.9rem] font-bold mb-1 tracking-wider">8 PROPERTIES</span>
                    <h3 class="text-white text-3xl font-bold">Mirpur</h3>
                </div>
            </div>

            <div class="relative h-[350px] rounded-[24px] overflow-hidden group cursor-pointer border border-white/5">
                <img src="https://images.unsplash.com/photo-1574362848149-11496d93a7c7?auto=format&fit=crop&q=80&w=1000" alt="Bashundhara" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute bottom-0 left-0 w-full h-[70%] bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-8">
                    <span class="text-brand-gold text-[0.9rem] font-bold mb-1 tracking-wider">8 PROPERTIES</span>
                    <h3 class="text-white text-3xl font-bold">Bashundhara</h3>
                </div>
            </div>

            <div class="relative h-[350px] rounded-[24px] overflow-hidden group cursor-pointer border border-white/5">
                <img src="https://images.unsplash.com/photo-1574362848149-11496d93a7c7?auto=format&fit=crop&q=80&w=1000" alt="Gulshan" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute bottom-0 left-0 w-full h-[70%] bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-8">
                    <span class="text-brand-gold text-[0.9rem] font-bold mb-1 tracking-wider">8 PROPERTIES</span>
                    <h3 class="text-white text-3xl font-bold">Gulshan</h3>
                </div>
            </div>

            <div class="relative h-[350px] rounded-[24px] overflow-hidden group cursor-pointer border border-white/5">
                <img src="https://images.unsplash.com/photo-1582407947304-fd86f028f716?auto=format&fit=crop&q=80&w=1000" alt="Dhanmondi" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                <div class="absolute bottom-0 left-0 w-full h-[70%] bg-gradient-to-t from-black/90 via-black/40 to-transparent flex flex-col justify-end p-8">
                    <span class="text-brand-gold text-[0.9rem] font-bold mb-1 tracking-wider">8 PROPERTIES</span>
                    <h3 class="text-white text-3xl font-bold">Dhanmondi</h3>
                </div>
            </div>

            <div class="relative h-[350px] rounded-[24px] overflow-hidden group cursor-pointer border border-white/5 bg-bronze-primary/10">
                <img src="https://images.unsplash.com/photo-1515263487990-61b07816b324?auto=format&fit=crop&q=80&w=1000" alt="Explore More" class="w-full h-full object-cover opacity-30 grayscale transition-transform duration-700 group-hover:scale-110">
                
                <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120px] h-[120px] bg-bronze-primary rounded-full flex justify-center items-center shadow-2xl z-10 transition-all duration-500 hover:scale-110 hover:bg-bronze-secondary">
                    <svg class="absolute w-full h-full animate-[spin_10s_linear_infinite]" viewBox="0 0 100 100">
                        <path id="circlePath3" d="M 50, 50 m -35, 0 a 35,35 0 1,1 70,0 a 35,35 0 1,1 -70,0" fill="none" />
                        <text class="text-[12px] font-bold fill-white tracking-[2.5px] uppercase">
                            <textPath href="#circlePath3" startOffset="0%">
                                All Locations • All Locations •
                            </textPath>
                        </text>
                    </svg>
                    <i class="fa-solid fa-arrow-right text-white text-2xl rotate-45 z-20"></i>
                </div>
            </div>

        </div>

        <div class="flex justify-center">
            <a href="{{ route('properties') }}" class="group inline-flex items-center gap-3 bg-accent-gradient hover:opacity-90 text-white px-10 py-4 rounded-full font-semibold text-base transition-all duration-300 shadow-xl">
                Explore All Neighborhoods
                <i class="fa-solid fa-arrow-right-long text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
            </a>
        </div>
        
    </section>

    <!--our services section-->
    <section class="px-6 md:px-10 lg:px-20 pt-10 lg:pt-[80px]">
        
        <div class="mb-10 lg:mb-16 text-center flex flex-col items-center">
            <h2 class="text-3xl md:text-[42px] lg:text-[54px] font-bold text-white mb-6 tracking-wide leading-[1.15]" data-animate="fade-up">
                Our Services
            </h2>
            <p class="text-white/70 text-[15px] max-w-[500px] leading-relaxed" data-animate="fade-up" data-delay="100">
                Experience excellence with our comprehensive range of specialized real estate services, designed to make your journey smooth and rewarding.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12">
            
            <div class="bg-accent-gradient text-white rounded-2xl p-6 lg:p-10 flex items-start gap-4 lg:gap-6 transition-all duration-300 hover:-translate-y-1 shadow-xl" data-animate="fade-up" data-delay="100">
                <div class="w-16 h-16 shrink-0 mt-1">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-brand-gold stroke-current stroke-[1.5]">
                        <path d="M10 32L32 10L54 32V54H10V32Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32 46V36M28 40H36" stroke-linecap="round" stroke-linejoin="round"/>
                        <circle cx="32" cy="41" r="5" stroke-linecap="round"/>
                        <path d="M44 24L50 18M50 18V24M50 18H44" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-3">Affordable Property Taxes</h3>
                    <p class="text-[0.95rem] text-white/80 leading-relaxed">
                        We help you find a new home by offering a smart real estate experience with optimized fiscal planning.
                    </p>
                </div>
            </div>

            <div class="bg-card text-white rounded-2xl p-6 lg:p-10 flex items-start gap-4 lg:gap-6 transition-all duration-300 hover:-translate-y-1 shadow-lg border border-white/5" data-animate="fade-up" data-delay="200">
                <div class="w-16 h-16 shrink-0 mt-1">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-brand-gold stroke-current stroke-[1.5]">
                        <path d="M12 50C12 50 16 46 22 46H42C48 46 52 50 52 50" stroke-linecap="round"/>
                        <path d="M32 38C38.6274 38 44 32.6274 44 26C44 19.3726 38.6274 14 32 14C25.3726 14 20 19.3726 20 26C20 32.6274 25.3726 38 32 38Z" stroke-linecap="round"/>
                        <path d="M32 31V21M29 24L32 21L35 24" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M52 50L44 42" stroke-linecap="round"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-3 text-white">Guaranteed Quality Homes</h3>
                    <p class="text-[0.95rem] text-white/70 leading-relaxed">
                        Every listing is vetted for quality and value, ensuring you only see the finest properties available.
                    </p>
                </div>
            </div>

            <div class="bg-card text-white rounded-2xl p-10 flex items-start gap-6 transition-all duration-300 hover:-translate-y-1 shadow-lg border border-white/5">
                <div class="w-16 h-16 shrink-0 mt-1">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-brand-gold stroke-current stroke-[1.5]">
                        <circle cx="32" cy="35" r="20" stroke-linecap="round"/>
                        <path d="M32 15V10M27 10H37" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32 35L40 27" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M8 35H12M52 35H56" stroke-linecap="round"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-3 text-white">Fast and Easy Process</h3>
                    <p class="text-[0.95rem] text-white/70 leading-relaxed">
                        Our streamlined workflows and expert advisors mean you get results faster than ever before.
                    </p>
                </div>
            </div>

            <div class="bg-card text-white rounded-2xl p-10 flex items-start gap-6 transition-all duration-300 hover:-translate-y-1 shadow-lg border border-white/5">
                <div class="w-16 h-16 shrink-0 mt-1">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-full h-full text-brand-gold stroke-current stroke-[1.5]">
                        <path d="M10 28L32 10L54 28V54H10V28Z" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M32 32C32 32 40 34 40 42C40 50 32 54 32 54C32 54 24 50 24 42C24 34 32 32 32 32Z" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-3 text-white">Property Insurance</h3>
                    <p class="text-[0.95rem] text-white/70 leading-relaxed">
                        Complete peace of mind with our curated selection of premium insurance partners for your new home.
                    </p>
                </div>
            </div>

        </div>

        <div class="flex justify-start mt-4 text-center flex flex-col items-center">
            <a href = "{{ route('services') }}">
            <button class="group inline-flex items-center gap-3 bg-accent-gradient hover:opacity-90 text-white px-10 py-4 rounded-full font-semibold text-base transition-all duration-300 shadow-xl">
                Explore All Services
                <i class="fa-solid fa-arrow-right-long text-sm transition-transform duration-300 group-hover:translate-x-1"></i>
            </button>
            </a>
        </div>
        
    </section>
    
    <!-- Testimonial Section -->
    <section class="px-6 md:px-10 lg:px-20 pt-10 lg:pt-[80px] pb-0 text-center">
        
        <div class="mb-10 lg:mb-16" data-animate="fade-up">
            <h2 class="text-3xl md:text-[42px] lg:text-[54px] font-bold leading-[1.15] text-white" data-animate="blur-in">
                What our customers are<br>saying about us?
            </h2>
        </div>

        <div class="flex items-center justify-center gap-8 relative mb-14">
            
            <button id="prevTestimonial" class="hidden lg:flex justify-center items-center w-14 h-14 bg-white/10 border border-white/20 text-white rounded-full shadow-2xl cursor-pointer transition-all duration-300 hover:bg-bronze-primary hover:border-bronze-primary hover:-translate-y-1 shrink-0 z-10 group/btn">
                <svg class="w-6 h-6 stroke-current fill-none stroke-2" viewBox="0 0 24 24">
                    <path d="M15 18l-6-6 6-6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            <div id="testimonialSlider" class="flex gap-8 overflow-x-auto lg:overflow-hidden snap-x snap-mandatory py-5 px-4 scrollbar-hide scroll-smooth" style="scrollbar-width: none; -ms-overflow-style: none;">
                
                <div class="bg-card rounded-[24px] p-10 w-[380px] text-left shadow-2xl border border-white/5 shrink-0 snap-center transition-all duration-300 hover:-translate-y-2 hover:border-white/10">
                    <div class="flex items-center mb-8 relative">
                        <div class="relative w-[60px] h-[60px] rounded-full p-[2px] bg-accent-gradient mr-4 shrink-0 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?auto=format&fit=crop&q=80&w=150" alt="Esther Howard" class="w-full h-full rounded-full object-cover border-2 border-[#1a1a1a]">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl font-bold text-white">Esther Howard</span>
                            <span class="text-[0.9rem] text-brand-gold font-semibold mt-0.5">Marketing Director</span>
                        </div>
                        <div class="absolute right-0 top-0 text-brand-gold text-2xl opacity-40">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                    </div>
                    <p class="text-[15px] text-white/70 leading-relaxed italic">
                        "Infinity Homes provided an unparalleled experience. Their attention to detail and market expertise made finding our dream penthouse in Dhanmondi completely seamless."
                    </p>
                </div>

                <div class="bg-card rounded-[24px] p-10 w-[380px] text-left shadow-2xl border border-white/5 shrink-0 snap-center transition-all duration-300 hover:-translate-y-2 hover:border-white/10">
                    <div class="flex items-center mb-8 relative">
                        <div class="relative w-[60px] h-[60px] rounded-full p-[2px] bg-accent-gradient mr-4 shrink-0 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&q=80&w=150" alt="Cameron Williamson" class="w-full h-full rounded-full object-cover border-2 border-[#1a1a1a]">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl font-bold text-white">Cameron Williamson</span>
                            <span class="text-[0.9rem] text-brand-gold font-semibold mt-0.5">Investment Banker</span>
                        </div>
                        <div class="absolute right-0 top-0 text-brand-gold text-2xl opacity-40">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                    </div>
                    <p class="text-[15px] text-white/70 leading-relaxed italic">
                        "The investment insights provided by the Infinity team were world-class. They don't just sell properties; they help build long-term generational wealth."
                    </p>
                </div>

                <div class="bg-card rounded-[24px] p-10 w-[380px] text-left shadow-2xl border border-white/5 shrink-0 snap-center transition-all duration-300 hover:-translate-y-2 hover:border-white/10">
                    <div class="flex items-center mb-8 relative">
                        <div class="relative w-[60px] h-[60px] rounded-full p-[2px] bg-accent-gradient mr-4 shrink-0 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&q=80&w=150" alt="Leslie Alexander" class="w-full h-full rounded-full object-cover border-2 border-[#1a1a1a]">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl font-bold text-white">Leslie Alexander</span>
                            <span class="text-[0.9rem] text-brand-gold font-semibold mt-0.5">Architect</span>
                        </div>
                        <div class="absolute right-0 top-0 text-brand-gold text-2xl opacity-40">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                    </div>
                    <p class="text-[15px] text-white/70 leading-relaxed italic">
                        "As an architect, I'm highly critical of property finishes. Infinity Homes only represents developments that meet the highest standards of luxury and structural integrity."
                    </p>
                </div>

                <div class="bg-card rounded-[24px] p-10 w-[380px] text-left shadow-2xl border border-white/5 shrink-0 snap-center transition-all duration-300 hover:-translate-y-2 hover:border-white/10">
                    <div class="flex items-center mb-8 relative">
                        <div class="relative w-[60px] h-[60px] rounded-full p-[2px] bg-accent-gradient mr-4 shrink-0 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?auto=format&fit=crop&q=80&w=150" alt="Guy Hawkins" class="w-full h-full rounded-full object-cover border-2 border-[#1a1a1a]">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl font-bold text-white">Guy Hawkins</span>
                            <span class="text-[0.9rem] text-brand-gold font-semibold mt-0.5">CEO, TechFlow</span>
                        </div>
                        <div class="absolute right-0 top-0 text-brand-gold text-2xl opacity-40">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                    </div>
                    <p class="text-[15px] text-white/70 leading-relaxed italic">
                        "Infinity Homes helped us secure our regional headquarters and three residential estates in one month. Their efficiency is unmatched in the market."
                    </p>
                </div>

                <div class="bg-card rounded-[24px] p-10 w-[380px] text-left shadow-2xl border border-white/5 shrink-0 snap-center transition-all duration-300 hover:-translate-y-2 hover:border-white/10">
                    <div class="flex items-center mb-8 relative">
                        <div class="relative w-[60px] h-[60px] rounded-full p-[2px] bg-accent-gradient mr-4 shrink-0 shadow-lg">
                            <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?auto=format&fit=crop&q=80&w=150" alt="Jane Cooper" class="w-full h-full rounded-full object-cover border-2 border-[#1a1a1a]">
                        </div>
                        <div class="flex flex-col">
                            <span class="text-xl font-bold text-white">Jane Cooper</span>
                            <span class="text-[0.9rem] text-brand-gold font-semibold mt-0.5">Interior Designer</span>
                        </div>
                        <div class="absolute right-0 top-0 text-brand-gold text-2xl opacity-40">
                            <i class="fa-solid fa-quote-right"></i>
                        </div>
                    </div>
                    <p class="text-[15px] text-white/70 leading-relaxed italic">
                        "The design-led approach of Infinity Homes is refreshing. They understand that luxury isn't just about price; it's about the aesthetic experience."
                    </p>
                </div>

            </div>

            <button id="nextTestimonial" class="hidden lg:flex justify-center items-center w-14 h-14 bg-white/10 border border-white/20 text-white rounded-full shadow-2xl cursor-pointer transition-all duration-300 hover:bg-bronze-primary hover:border-bronze-primary hover:-translate-y-1 shrink-0 z-10 group/btn">
                <svg class="w-6 h-6 stroke-current fill-none stroke-2" viewBox="0 0 24 24">
                    <path d="M9 18l6-6-6-6" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>

        <!-- Partnership Logos -->
        <div class="flex justify-center items-center gap-12 md:gap-24 flex-wrap pb-0 opacity-50" data-animate="fade-up" data-delay="200">
            
            <div class="flex flex-col items-center gap-3 text-white hover:text-brand-gold transition-colors duration-300 cursor-pointer group">
                <i class="fa-solid fa-house-chimney text-4xl group-hover:scale-110 transition-transform"></i>
                <div class="flex flex-col items-center">
                    <span class="text-[11px] font-bold tracking-[2px] uppercase">Housedeco</span>
                    <span class="text-[7px] tracking-[3px] text-white/40 uppercase mt-1">Slogan Goes Here</span>
                </div>
            </div>
            
            <div class="flex flex-col items-center gap-3 text-white hover:text-brand-gold transition-colors duration-300 cursor-pointer group">
                <i class="fa-brands fa-hive text-4xl group-hover:scale-110 transition-transform"></i>
                <div class="flex flex-col items-center">
                    <span class="text-[11px] font-bold tracking-[2px] uppercase">Realstate</span>
                    <span class="text-[7px] tracking-[3px] text-white/40 uppercase mt-1">Slogan Goes Here</span>
                </div>
            </div>
            
            <div class="flex flex-col items-center gap-3 text-white hover:text-brand-gold transition-colors duration-300 cursor-pointer group">
                <i class="fa-solid fa-city text-4xl group-hover:scale-110 transition-transform"></i>
                <div class="flex flex-col items-center">
                    <span class="text-[11px] font-bold tracking-[2px] uppercase">Realestate</span>
                    <span class="text-[7px] tracking-[3px] text-white/40 uppercase mt-1">Slogan Goes Here</span>
                </div>
            </div>
            
            <div class="flex flex-col items-center gap-3 text-white hover:text-brand-gold transition-colors duration-300 cursor-pointer group">
                <i class="fa-regular fa-building text-4xl group-hover:scale-110 transition-transform"></i>
                <div class="flex flex-col items-center">
                    <span class="text-[11px] font-bold tracking-[2px] uppercase">Construction</span>
                    <span class="text-[7px] tracking-[3px] text-white/40 uppercase mt-1">Slogan Goes Here</span>
                </div>
            </div>
            
        </div>

    </section>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const slider = document.getElementById('testimonialSlider');
            const prevBtn = document.getElementById('prevTestimonial');
            const nextBtn = document.getElementById('nextTestimonial');

            if (slider && prevBtn && nextBtn) {
                const scrollAmount = 412; // Card width (380px) + Gap (32px)

                prevBtn.addEventListener('click', () => {
                    slider.scrollBy({
                        left: -scrollAmount,
                        behavior: 'smooth'
                    });
                });

                nextBtn.addEventListener('click', () => {
                    slider.scrollBy({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });
                });

                // Periodic check to disable buttons if at ends (optional but premium)
                const updateButtons = () => {
                   const isAtStart = slider.scrollLeft === 0;
                   const isAtEnd = slider.scrollLeft + slider.clientWidth >= slider.scrollWidth - 10;
                   
                   prevBtn.style.opacity = isAtStart ? '0.3' : '1';
                   prevBtn.style.pointerEvents = isAtStart ? 'none' : 'auto';
                   
                   nextBtn.style.opacity = isAtEnd ? '0.3' : '1';
                   nextBtn.style.pointerEvents = isAtEnd ? 'none' : 'auto';
                };

                slider.addEventListener('scroll', updateButtons);
                window.addEventListener('resize', updateButtons);
                updateButtons();
            }
        });
    </script>


    <!--get in touch section-->
    <section class="block px-6 md:px-10 lg:px-20 pt-10 lg:pt-[80px] pb-10 lg:pb-[80px] flex flex-col lg:flex-row items-start gap-10 lg:gap-24 overflow-hidden relative z-10 bg-brand-bg">
        
        <!-- Decorative Glow -->
        <div class="absolute -left-[10%] -top-[10%] w-[40%] h-[40%] bg-bronze-primary/10 blur-[120px] rounded-full pointer-events-none"></div>

        <div class="flex-1 w-full z-10">
            <h2 class="text-3xl md:text-[42px] lg:text-[54px] font-bold text-white mb-4 lg:mb-8 tracking-wide leading-[1.15]" data-animate="fade-up">
                Get In <span class="text-brand-gold">Touch</span>
            </h2>
            <p class="text-white/70 text-[15px] mb-12 leading-relaxed max-w-[550px]" data-animate="fade-up" data-delay="100">
                We're here to support all your real estate needs. Whether you have inquiries, need further details, or are ready to begin your investment journey, our team is just a phone call or email away.
            </p>

            <div class="space-y-10" data-animate="fade-left" data-delay="200">
                <div class="flex items-start gap-6 group">
                    <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex justify-center items-center shrink-0 group-hover:bg-brand-gold/10 group-hover:border-brand-gold/30 transition-all duration-300">
                        <svg class="w-6 h-6 stroke-brand-gold fill-none stroke-2" viewBox="0 0 24 24">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="10" r="3" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg mb-2">Office Address</h3>
                        <p class="text-white/70 text-[15px] leading-relaxed max-w-[300px]">
                            House #58 (4th Floor), Road #13, Sector #12, Uttara, Dhaka-1230
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-6 group">
                    <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex justify-center items-center shrink-0 group-hover:bg-brand-gold/10 group-hover:border-brand-gold/30 transition-all duration-300">
                        <svg class="w-6 h-6 stroke-brand-gold fill-none stroke-2 group-hover:rotate-12 transition-transform duration-300" viewBox="0 0 24 24">
                            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg mb-2">Call Us</h3>
                        <p class="text-white/70 text-[15px] leading-relaxed">
                            +880 17112 63606
                        </p>
                    </div>
                </div>

                <div class="flex items-start gap-6 group">
                    <div class="w-14 h-14 rounded-2xl bg-white/5 border border-white/10 flex justify-center items-center shrink-0 group-hover:bg-brand-gold/10 group-hover:border-brand-gold/30 transition-all duration-300">
                        <svg class="w-6 h-6 stroke-brand-gold fill-none stroke-2" viewBox="0 0 24 24">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M22 6l-10 7L2 6" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div>
                        <h3 class="text-white font-bold text-lg mb-2">Email Address</h3>
                        <p class="text-white/70 text-[15px] leading-relaxed break-all">
                            nexusassetdevelopments@gmail.com
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex-1 w-full lg:max-w-[700px] z-10" data-animate="fade-right" data-delay="300">
            <div class="bg-card p-3 rounded-[32px] shadow-2xl border border-white/5 relative overflow-hidden group">
                <div class="w-full h-[450px] rounded-[24px] overflow-hidden">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d112165.584345914!2d77.4018260381656!3d28.46076735467616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cc1d051f66773%3A0x6e8a49c4a896a2b!2sGreater%20Noida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1711000000000!5m2!1sen!2sin" 
                        class="w-full h-full border-0 grayscale invert contrast-125 opacity-80 hover:grayscale-0 hover:invert-0 hover:opacity-100 transition-all duration-700"
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
                <!-- Decorative Frame Overlay -->
                <div class="absolute inset-0 border-[20px] border-card pointer-events-none rounded-[32px]"></div>
            </div>
        </div>

    </section>

@endsection