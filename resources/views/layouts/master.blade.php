<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Infinity Homes</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        inter: ['Inter', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            bg: '#030303',
                            muted: '#9ca3af',
                            gold: '#d4af37',
                            tabInactive: '#111111',
                            searchLabel: '#8b796d',
                            searchBtn: '#63432e',
                            searchBtnHover: '#7a543b'
                        },
                        bronze: {
                            primary: '#d4af37',
                            secondary: '#a68a2d',
                        },
                        card: '#111111',
                        muted: '#9ca3af'
                    },
                    backgroundImage: {
                        'accent-gradient': 'linear-gradient(90deg, #442f22 0%, #20140e 100%)',
                        'search-gradient': 'linear-gradient(90deg, #2c1a10 0%, #1a0e07 100%)',
                    }
                }
            }
        }
    </script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <style>
        /* ===== Scroll-Triggered Animations ===== */
        [data-animate] {
            opacity: 0;
            transition: opacity 0.8s cubic-bezier(0.16, 1, 0.3, 1),
                        transform 0.8s cubic-bezier(0.16, 1, 0.3, 1),
                        filter 0.8s cubic-bezier(0.16, 1, 0.3, 1);
        }
        [data-animate].is-visible {
            opacity: 1;
            transform: none !important;
            filter: none !important;
        }

        /* Animation Variants */
        [data-animate="fade-up"] { transform: translateY(60px); }
        [data-animate="fade-down"] { transform: translateY(-60px); }
        [data-animate="fade-left"] { transform: translateX(-80px); }
        [data-animate="fade-right"] { transform: translateX(80px); }
        [data-animate="scale-in"] { transform: scale(0.85); }
        [data-animate="blur-in"] { filter: blur(12px); transform: translateY(30px); }
        [data-animate="fade-in"] { /* just opacity */ }

        /* Hero entrance (plays automatically) */
        @keyframes heroFadeUp {
            from { opacity: 0; transform: translateY(50px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes heroFadeIn {
            from { opacity: 0; transform: scale(0.95); }
            to { opacity: 1; transform: scale(1); }
        }
        @keyframes heroSlideUp {
            from { opacity: 0; transform: translateY(40px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .hero-animate-1 { animation: heroFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) 0.1s both; }
        .hero-animate-2 { animation: heroFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) 0.3s both; }
        .hero-animate-3 { animation: heroFadeUp 1s cubic-bezier(0.16, 1, 0.3, 1) 0.5s both; }
        .hero-animate-4 { animation: heroSlideUp 1s cubic-bezier(0.16, 1, 0.3, 1) 0.7s both; }
        .hero-animate-5 { animation: heroSlideUp 1.2s cubic-bezier(0.16, 1, 0.3, 1) 0.4s both; }
        .hero-animate-img { animation: heroFadeIn 1.4s cubic-bezier(0.16, 1, 0.3, 1) 0.2s both; }

        /* Smooth scroll for the whole page */
        html { scroll-behavior: smooth; }
    </style>
</head>
<body class="bg-[#030303] min-h-screen font-inter m-0 p-0 box-border antialiased">

        @include('includes.header')
        <main>
            @yield('content')
        </main>
        @include('includes.footer')

    <!-- Scroll Animation Observer -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const animatedEls = document.querySelectorAll('[data-animate]');

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const el = entry.target;
                        const delay = el.dataset.delay || 0;
                        setTimeout(() => {
                            el.classList.add('is-visible');
                        }, delay);
                        observer.unobserve(el);
                    }
                });
            }, {
                threshold: 0.1,
                rootMargin: '0px 0px -40px 0px'
            });

            animatedEls.forEach(el => observer.observe(el));
        });
    </script>

</body>
</html>