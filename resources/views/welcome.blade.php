<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SGE Prime Contracting — General Contracting & Civil Construction | Cochrane, Alberta</title>
    <meta name="description" content="Sensibly Green Enterprises Ltd. — Over 15 years of general contracting and civil construction experience delivering complex infrastructure across Alberta.">
    <meta property="og:title" content="SGE Prime Contracting — General Contracting & Civil Construction">
    <meta property="og:description" content="Building critical infrastructure across Alberta. Family owned, COR certified, 15+ years of proven delivery.">
    <meta property="og:type" content="website">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=dm-serif-display:400|inter:300,400,500,600,700" rel="stylesheet" />

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        sg: {
                            forest: '#1a3a2a',
                            pine: '#22472f',
                            dark: '#0f2118',
                            green: '#1a5038',
                            sage: '#2d6b4e',
                            gold: '#c9a84c',
                            'gold-light': '#dfc06a',
                            'gold-dark': '#a88a34',
                            cream: '#f8f6f1',
                            warm: '#f2efe8',
                            ink: '#1a1a1a',
                            muted: '#6b7280',
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body { font-family: 'Inter', sans-serif; color: #1a1a1a; background: #ffffff; }
        .font-serif { font-family: 'DM Serif Display', serif; }
        html { scroll-behavior: smooth; }

        .reveal { opacity: 0; transform: translateY(30px); transition: opacity 0.8s cubic-bezier(.16,1,.3,1), transform 0.8s cubic-bezier(.16,1,.3,1); }
        .reveal.visible { opacity: 1; transform: translateY(0); }
        .reveal-delay-1 { transition-delay: 0.1s; }
        .reveal-delay-2 { transition-delay: 0.2s; }
        .reveal-delay-3 { transition-delay: 0.3s; }
        .reveal-delay-4 { transition-delay: 0.4s; }

        .nav-scrolled {
            background: rgba(255,255,255,0.97);
            backdrop-filter: blur(16px);
            box-shadow: 0 1px 0 rgba(0,0,0,0.06);
        }

        .form-input:focus {
            border-color: #1a3a2a;
            box-shadow: 0 0 0 3px rgba(26,58,42,0.08);
            outline: none;
        }

        /* Carousel */
        #carousel-track { -webkit-overflow-scrolling: touch; }
        #carousel-track.dragging { transition: none !important; }
        #carousel-track.dragging img { pointer-events: none; }
    </style>
</head>
<body class="antialiased">

    {{-- ==================== NAVIGATION ==================== --}}
    <nav id="navbar" class="fixed top-0 w-full z-50 transition-all duration-500">
        <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
            <div class="flex justify-between items-center py-5">
                <a href="#" class="flex items-center">
                    <img src="/images/Logo-co.png" alt="SGE Prime Contracting" class="nav-logo h-16 sm:h-20 w-auto transition-all duration-500">
                </a>

                <div class="hidden lg:flex items-center gap-8">
                    <a href="#about" class="nav-link text-[13px] font-medium text-sg-ink/60 hover:text-sg-ink tracking-wider uppercase transition-all duration-300">About</a>
                    <a href="#services" class="nav-link text-[13px] font-medium text-sg-ink/60 hover:text-sg-ink tracking-wider uppercase transition-all duration-300">Services</a>
                    <a href="#experience" class="nav-link text-[13px] font-medium text-sg-ink/60 hover:text-sg-ink tracking-wider uppercase transition-all duration-300">Experience</a>
                    <a href="#leadership" class="nav-link text-[13px] font-medium text-sg-ink/60 hover:text-sg-ink tracking-wider uppercase transition-all duration-300">Leadership</a>
                    <a href="#contact" class="nav-cta border border-sg-forest hover:bg-sg-forest hover:text-white text-sg-forest px-6 py-2.5 text-[13px] font-semibold tracking-wider uppercase transition-all duration-300">
                        Contact
                    </a>
                </div>

                <button id="mobile-menu-btn" class="mobile-btn lg:hidden p-2 text-sg-ink" aria-label="Menu">
                    <svg id="menu-icon" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg id="close-icon" class="w-6 h-6 hidden" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
            <div id="mobile-menu" class="hidden lg:hidden pb-6">
                <div class="flex flex-col gap-1 pt-4 border-t border-gray-100">
                    <a href="#about" class="px-3 py-2.5 text-sg-ink/60 hover:text-sg-ink text-sm font-medium mobile-link">About</a>
                    <a href="#services" class="px-3 py-2.5 text-sg-ink/60 hover:text-sg-ink text-sm font-medium mobile-link">Services</a>
                    <a href="#experience" class="px-3 py-2.5 text-sg-ink/60 hover:text-sg-ink text-sm font-medium mobile-link">Experience</a>
                    <a href="#leadership" class="px-3 py-2.5 text-sg-ink/60 hover:text-sg-ink text-sm font-medium mobile-link">Leadership</a>
                    <a href="#contact" class="px-3 py-2.5 text-sg-ink/60 hover:text-sg-ink text-sm font-medium mobile-link">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    {{-- ==================== HERO ==================== --}}
    <section class="relative min-h-screen bg-white overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
            <div class="grid lg:grid-cols-12 min-h-screen items-center gap-8">
                {{-- Left: Text --}}
                <div class="lg:col-span-5 pt-32 lg:pt-0 z-10">
                    <div class="relative">
                        <div class="w-8 h-px bg-sg-gold mb-8"></div>
                        <p class="text-sg-gold text-xs font-semibold tracking-[0.25em] uppercase mb-6">{{ $company['location'] }}</p>
                        <div class="relative">
                            <span class="absolute -left-3 top-1/2 -translate-y-1/2 font-serif text-[8rem] sm:text-[10rem] lg:text-[12rem] xl:text-[14rem] leading-none text-sg-forest/[0.05] select-none pointer-events-none whitespace-nowrap">SGE</span>
                            <h1 class="relative font-serif text-[2.75rem] sm:text-[3.5rem] lg:text-[4rem] xl:text-[4.5rem] text-sg-ink leading-[1.05] mb-8">
                                Building<br>
                                <span class="text-sg-gold">Critical</span><br>
                                Infrastructure
                            </h1>
                        </div>
                        <p class="text-sg-muted text-base lg:text-lg leading-relaxed max-w-md mb-10">
                            {{ $hero['subline'] }}
                        </p>
                        <div class="flex items-center gap-6">
                            <a href="{{ $hero['cta_primary']['link'] }}" class="bg-sg-forest hover:bg-sg-dark text-white px-8 py-4 text-[13px] font-semibold tracking-wider uppercase transition-all duration-300">
                                {{ $hero['cta_primary']['text'] }}
                            </a>
                            <a href="{{ $hero['cta_secondary']['link'] }}" class="text-sg-ink text-[13px] font-semibold tracking-wider uppercase hover:text-sg-gold transition-colors flex items-center gap-2">
                                {{ $hero['cta_secondary']['text'] }}
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                            </a>
                        </div>

                        {{-- Stats --}}
                        <div class="flex items-center gap-10 mt-16 pt-10 border-t border-gray-100">
                            @foreach($stats as $stat)
                            <div>
                                <p class="font-serif text-3xl lg:text-4xl text-sg-gold">{{ $stat['value'] }}</p>
                                <p class="text-sg-muted text-[11px] uppercase tracking-wider mt-1">{{ $stat['label'] }}</p>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                {{-- Right: Image composition --}}
                <div class="lg:col-span-7 relative pb-12 lg:pb-0 lg:h-screen flex items-center">
                    <div class="relative w-full">
                        {{-- Main dark block with image --}}
                        <div class="bg-sg-forest relative ml-auto w-full lg:w-[95%] aspect-[4/3] lg:aspect-auto lg:h-[70vh] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1556894769-b9a5dab851c0?q=80&w=2370&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"
                                alt="Civil construction infrastructure"
                                class="w-full h-full object-cover opacity-60 mix-blend-luminosity">
                            <div class="absolute inset-0 bg-gradient-to-l from-transparent to-sg-forest/40"></div>
                            {{-- Floating label --}}
                            <div class="absolute bottom-8 left-8">
                                <p class="text-white/40 text-[11px] tracking-[0.3em] uppercase">{{ $company['legal'] }}</p>
                            </div>
                        </div>

                        {{-- Offset small accent block --}}
                        <div class="hidden lg:block absolute -left-8 bottom-12 w-48 h-48 bg-sg-cream z-10 p-6 flex flex-col justify-end">
                            <div class="w-6 h-px bg-sg-gold mb-3"></div>
                            <p class="text-sg-ink text-xs font-medium leading-relaxed">{{ $company['established'] }}<br>since 2011</p>
                        </div>

                        {{-- Thin line accents --}}
                        <div class="hidden lg:block absolute -right-4 top-8 w-px h-24 bg-sg-gold/30"></div>
                        <div class="hidden lg:block absolute right-20 -top-4 w-24 h-px bg-sg-gold/30"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== ABOUT ==================== --}}
    <section id="about" class="py-28 md:py-36 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
            <div class="grid lg:grid-cols-2 gap-20 lg:gap-32 items-start">
                <div class="reveal">
                    {{-- Asymmetric image block --}}
                    <div class="relative">
                        <div class="bg-sg-forest w-full aspect-[4/5] overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1504307651254-35680f356dfd?q=80&w=1200&auto=format&fit=crop"
                                alt="Construction site"
                                class="w-full h-full object-cover opacity-50 mix-blend-luminosity">
                        </div>
                        {{-- Floating stat card --}}
                        <div class="absolute -bottom-8 -right-4 lg:-right-12 bg-white p-8 shadow-xl shadow-black/5">
                            <p class="font-serif text-5xl text-sg-gold mb-1">15+</p>
                            <p class="text-sg-muted text-xs uppercase tracking-wider">Years of<br>Delivery</p>
                        </div>
                        {{-- Line accent --}}
                        <div class="absolute -left-4 top-12 w-px h-20 bg-sg-gold/40"></div>
                        <div class="absolute -left-4 top-12 w-8 h-px bg-sg-gold/40"></div>
                    </div>
                </div>

                <div class="reveal reveal-delay-2">
                    <p class="text-sg-gold text-xs font-semibold tracking-[0.25em] uppercase mb-6">About Us</p>
                    <h2 class="font-serif text-4xl sm:text-5xl lg:text-[3.5rem] text-sg-ink leading-[1.1] mb-8">
                        Family owned.<br>Field proven.
                    </h2>
                    <div class="space-y-5 text-sg-muted text-[15px] leading-[1.8]">
                        <p>
                            Sensibly Green Enterprises Ltd. is a Cochrane, Alberta-based construction management and civil infrastructure company. For over 15 years, we've delivered complex public infrastructure projects with a focus on safety, accountability, and community-based delivery.
                        </p>
                        <p>
                            As a small, adaptable organization supported by a core team of experienced professionals, we maintain a streamlined structure that enables direct communication, rapid decision-making, and hands-on leadership from senior management on every project.
                        </p>
                        <p>
                            We don't operate as a pass-through contractor. Our model emphasizes strong in-house self-performance combined with trusted trade partners — directly integrated into planning, risk management, and commissioning.
                        </p>
                    </div>

                    {{-- Credentials --}}
                    <div class="mt-12 pt-10 border-t border-gray-100">
                        <p class="text-sg-ink text-xs font-semibold tracking-[0.2em] uppercase mb-6">Credentials</p>
                        <div class="grid grid-cols-2 gap-x-8 gap-y-3">
                            @foreach($credentials as $credential)
                            <div class="flex items-center gap-3">
                                <div class="w-1.5 h-1.5 bg-sg-gold flex-shrink-0"></div>
                                <span class="text-sg-muted text-sm">{{ $credential }}</span>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== SERVICES ==================== --}}
    <section id="services" class="py-28 md:py-36 bg-sg-cream">
        <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
            <div class="grid lg:grid-cols-12 gap-12 lg:gap-20 mb-20 reveal">
                <div class="lg:col-span-5">
                    <p class="text-sg-gold text-xs font-semibold tracking-[0.25em] uppercase mb-6">What We Do</p>
                    <h2 class="font-serif text-4xl sm:text-5xl lg:text-[3.5rem] text-sg-ink leading-[1.1]">
                        Core<br>Capabilities
                    </h2>
                </div>
                <div class="lg:col-span-7 lg:pt-12">
                    <p class="text-sg-muted text-[15px] leading-[1.8] max-w-xl">
                        Integrated general contracting and civil construction services delivered with in-house expertise and direct accountability.
                    </p>
                </div>
            </div>

            <div class="grid md:grid-cols-2 gap-px bg-gray-200/60 reveal">
                @foreach($services as $index => $service)
                <div class="bg-white p-10 md:p-12 group hover:bg-sg-forest transition-all duration-500">
                    <div class="flex items-start justify-between mb-8">
                        <span class="font-serif text-6xl text-gray-100 group-hover:text-white/10 transition-colors">0{{ $index + 1 }}</span>
                        <div class="w-10 h-10 border border-gray-200 group-hover:border-sg-gold/30 flex items-center justify-center transition-colors">
                            @if($service['icon'] === 'building')
                            <svg class="w-5 h-5 text-sg-forest group-hover:text-sg-gold transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/></svg>
                            @elseif($service['icon'] === 'excavator')
                            <svg class="w-5 h-5 text-sg-forest group-hover:text-sg-gold transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17a2 2 0 11-4 0 2 2 0 014 0zM19 17a2 2 0 11-4 0 2 2 0 014 0zM13 16V6a1 1 0 00-1-1H4a1 1 0 00-1 1v10m16 0V8a1 1 0 00-1-1h-3l-3 9"/></svg>
                            @elseif($service['icon'] === 'water')
                            <svg class="w-5 h-5 text-sg-forest group-hover:text-sg-gold transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 3c-4.97 4.97-7 8-7 11a7 7 0 1014 0c0-3-2.03-6.03-7-11z"/></svg>
                            @else
                            <svg class="w-5 h-5 text-sg-forest group-hover:text-sg-gold transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/></svg>
                            @endif
                        </div>
                    </div>

                    <h3 class="font-serif text-2xl text-sg-ink group-hover:text-white mb-4 transition-colors">{{ $service['title'] }}</h3>
                    @if(isset($service['badge']))
                    <p class="text-sg-gold text-xs font-semibold tracking-wider uppercase mb-4 group-hover:text-sg-gold-light transition-colors">{{ $service['badge'] }}</p>
                    @endif
                    <p class="text-sg-muted group-hover:text-white/60 text-sm leading-relaxed mb-8 transition-colors">{{ $service['description'] }}</p>

                    <ul class="space-y-2.5">
                        @foreach($service['capabilities'] as $cap)
                        <li class="flex items-center gap-3 text-sm text-gray-500 group-hover:text-white/50 transition-colors">
                            <div class="w-4 h-px bg-sg-gold/60 flex-shrink-0"></div>
                            {{ $cap }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== SECTORS ==================== --}}
    <section class="py-28 md:py-36 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
            <div class="grid lg:grid-cols-12 gap-12 items-start">
                <div class="lg:col-span-4 lg:sticky lg:top-32 reveal">
                    <p class="text-sg-gold text-xs font-semibold tracking-[0.25em] uppercase mb-6">Industries</p>
                    <h2 class="font-serif text-4xl sm:text-5xl text-sg-ink leading-[1.1] mb-6">
                        Sectors<br>We Serve
                    </h2>
                    <p class="text-sg-muted text-[15px] leading-[1.8]">
                        Proven delivery across diverse and demanding environments.
                    </p>
                    <div class="w-16 h-px bg-sg-gold/40 mt-8"></div>
                </div>

                <div class="lg:col-span-8 reveal reveal-delay-2">
                    <div class="grid sm:grid-cols-2 gap-px bg-gray-100">
                        @foreach($sectors as $index => $sector)
                        <div class="bg-white p-8 md:p-10 group hover:bg-sg-cream transition-colors duration-300">
                            <div class="flex items-start justify-between mb-4">
                                <span class="text-sg-gold/40 text-xs font-medium tracking-wider">0{{ $index + 1 }}</span>
                            </div>
                            <h3 class="font-serif text-xl text-sg-ink mb-3">{{ $sector['name'] }}</h3>
                            <p class="text-sg-muted text-sm leading-relaxed">{{ $sector['description'] }}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== PROJECT EXPERIENCE ==================== --}}
    <section id="experience" class="py-28 md:py-36 bg-sg-forest overflow-hidden">
        <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-8 mb-16 reveal">
                <div>
                    <p class="text-sg-gold text-xs font-semibold tracking-[0.25em] uppercase mb-6">Portfolio</p>
                    <h2 class="font-serif text-4xl sm:text-5xl lg:text-[3.5rem] text-white leading-[1.1]">
                        Project<br>Experience
                    </h2>
                </div>
                <div class="flex items-center gap-4">
                    <button id="carousel-prev" class="w-12 h-12 border border-white/20 hover:border-sg-gold flex items-center justify-center transition-all group">
                        <svg class="w-5 h-5 text-white/40 group-hover:text-sg-gold transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button id="carousel-next" class="w-12 h-12 border border-white/20 hover:border-sg-gold flex items-center justify-center transition-all group">
                        <svg class="w-5 h-5 text-white/40 group-hover:text-sg-gold transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>
        </div>

        <div class="reveal">
            <div id="carousel-track" class="flex gap-6 pl-6 sm:pl-8 lg:pl-[calc((100vw-1400px)/2+3rem)] transition-transform duration-600 ease-[cubic-bezier(.16,1,.3,1)] cursor-grab active:cursor-grabbing select-none">
                @foreach($projects as $index => $project)
                <div class="carousel-card flex-shrink-0 w-[340px] sm:w-[400px] lg:w-[460px] group">
                    <div class="bg-white h-full flex flex-col">
                        {{-- Image block --}}
                        <div class="relative aspect-[3/2] overflow-hidden bg-sg-cream">
                            <img src="{{ $project['image'] }}" alt="{{ $project['name'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" loading="lazy">
                            {{-- Highlight --}}
                            <div class="absolute top-0 right-0 bg-sg-forest px-4 py-2">
                                <span class="text-sg-gold text-xs font-semibold tracking-wider">{{ $project['highlight'] }}</span>
                            </div>
                        </div>

                        {{-- Content --}}
                        <div class="p-7 flex-1 flex flex-col">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-4 h-px bg-sg-gold"></div>
                                <span class="text-sg-gold text-[11px] font-semibold tracking-[0.2em] uppercase">{{ $project['scope'] }}</span>
                            </div>
                            <h3 class="font-serif text-xl text-sg-ink mb-3">{{ $project['name'] }}</h3>
                            <p class="text-sg-muted text-sm leading-relaxed flex-1">{{ $project['detail'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            {{-- Progress --}}
            <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12 mt-10">
                <div class="h-px bg-white/10 overflow-hidden">
                    <div id="carousel-progress" class="h-full bg-sg-gold transition-all duration-500" style="width: 25%"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== LEADERSHIP ==================== --}}
    <section id="leadership" class="py-28 md:py-36 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
            <div class="grid lg:grid-cols-12 gap-16 lg:gap-20">
                <div class="lg:col-span-4 reveal">
                    <p class="text-sg-gold text-xs font-semibold tracking-[0.25em] uppercase mb-6">Team</p>
                    <h2 class="font-serif text-4xl sm:text-5xl text-sg-ink leading-[1.1] mb-6">
                        Leadership
                    </h2>
                    <p class="text-sg-muted text-[15px] leading-[1.8]">
                        Senior leadership with direct accountability on every project — from bid to turnover.
                    </p>
                    <div class="w-16 h-px bg-sg-gold/40 mt-8"></div>
                </div>

                <div class="lg:col-span-8">
                    <div class="space-y-px">
                        @foreach($leadership as $index => $leader)
                        <div class="reveal reveal-delay-{{ $index + 1 }} bg-sg-cream p-8 md:p-12 group hover:bg-sg-forest transition-all duration-500">
                            <div class="flex flex-col md:flex-row md:items-start gap-6 md:gap-10">
                                <div class="flex-shrink-0">
                                    <div class="w-20 h-20 bg-sg-forest group-hover:bg-white/10 flex items-center justify-center transition-colors">
                                        <span class="font-serif text-3xl text-sg-gold">{{ substr($leader['name'], 0, 1) }}</span>
                                    </div>
                                </div>
                                <div class="flex-1">
                                    <div class="flex flex-wrap items-baseline gap-x-4 gap-y-1 mb-2">
                                        <h3 class="font-serif text-2xl text-sg-ink group-hover:text-white transition-colors">{{ $leader['name'] }}</h3>
                                        <span class="text-sg-gold text-sm font-medium">{{ $leader['title'] }}</span>
                                    </div>
                                    <div class="flex flex-wrap gap-3 mb-4">
                                        <span class="text-xs text-sg-muted group-hover:text-white/50 transition-colors">{{ $leader['experience'] }} Experience</span>
                                        @if(isset($leader['credentials']))
                                        <span class="text-xs text-sg-muted group-hover:text-white/50 transition-colors">{{ $leader['credentials'] }}</span>
                                        @endif
                                    </div>
                                    <p class="text-sg-muted group-hover:text-white/60 text-sm leading-relaxed transition-colors">{{ $leader['description'] }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== DIFFERENTIATORS ==================== --}}
    <section class="py-28 md:py-36 bg-sg-cream">
        <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
            <div class="text-center mb-20 reveal">
                <p class="text-sg-gold text-xs font-semibold tracking-[0.25em] uppercase mb-6">Why Choose Us</p>
                <h2 class="font-serif text-4xl sm:text-5xl lg:text-[3.5rem] text-sg-ink leading-[1.1]">Why SGE</h2>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-px bg-gray-200/50 reveal">
                @foreach($differentiators as $index => $diff)
                <div class="bg-white p-8 md:p-10 text-center group">
                    <div class="w-12 h-12 border border-sg-forest/10 flex items-center justify-center mx-auto mb-6">
                        <span class="font-serif text-xl text-sg-gold">{{ $index + 1 }}</span>
                    </div>
                    <h3 class="font-serif text-lg text-sg-ink mb-4">{{ $diff['title'] }}</h3>
                    <p class="text-sg-muted text-sm leading-relaxed">{{ $diff['description'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- ==================== CONTACT ==================== --}}
    <section id="contact" class="py-28 md:py-36 bg-white">
        <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12">
            <div class="grid lg:grid-cols-12 gap-16 lg:gap-24">
                <div class="lg:col-span-5 reveal">
                    <p class="text-sg-gold text-xs font-semibold tracking-[0.25em] uppercase mb-6">Inquire</p>
                    <h2 class="font-serif text-4xl sm:text-5xl text-sg-ink leading-[1.1] mb-6">
                        Get in<br>Touch
                    </h2>
                    <p class="text-sg-muted text-[15px] leading-[1.8] mb-12">
                        For project inquiries, prequalification information, or general questions — we'd welcome the conversation.
                    </p>

                    <div class="space-y-8">
                        <div>
                            <p class="text-sg-ink text-xs font-semibold tracking-[0.2em] uppercase mb-2">Location</p>
                            <p class="text-sg-muted text-sm">{{ $company['address'] }}</p>
                        </div>
                        <div>
                            <p class="text-sg-ink text-xs font-semibold tracking-[0.2em] uppercase mb-2">Phone</p>
                            <a href="tel:4039664593" class="text-sg-muted text-sm hover:text-sg-gold transition-colors">{{ $company['phone'] }}</a>
                        </div>
                        <div>
                            <p class="text-sg-ink text-xs font-semibold tracking-[0.2em] uppercase mb-2">Email</p>
                            <a href="mailto:{{ $company['email'] }}" class="text-sg-muted text-sm hover:text-sg-gold transition-colors">{{ $company['email'] }}</a>
                        </div>
                    </div>

                    {{-- Decorative lines --}}
                    <div class="mt-12 relative">
                        <div class="w-px h-16 bg-sg-gold/30"></div>
                        <div class="w-8 h-px bg-sg-gold/30 absolute bottom-0 left-0"></div>
                    </div>
                </div>

                <div class="lg:col-span-7 reveal reveal-delay-2">
                    @if(session('success'))
                    <div class="mb-8 bg-sg-forest/5 border-l-2 border-sg-forest text-sg-forest p-5 text-sm">
                        {{ session('success') }}
                    </div>
                    @endif

                    <form action="{{ route('sge.contact') }}" method="POST" class="bg-sg-cream p-8 md:p-12">
                        @csrf
                        <div class="grid sm:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label for="name" class="block text-xs font-semibold tracking-[0.15em] uppercase text-sg-ink mb-2">Name <span class="text-sg-gold">*</span></label>
                                <input type="text" id="name" name="name" required value="{{ old('name') }}"
                                    class="form-input w-full px-0 py-3 bg-transparent border-0 border-b border-gray-300 text-sm transition-all">
                                @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-xs font-semibold tracking-[0.15em] uppercase text-sg-ink mb-2">Email <span class="text-sg-gold">*</span></label>
                                <input type="email" id="email" name="email" required value="{{ old('email') }}"
                                    class="form-input w-full px-0 py-3 bg-transparent border-0 border-b border-gray-300 text-sm transition-all">
                                @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>
                        <div class="grid sm:grid-cols-2 gap-5 mb-5">
                            <div>
                                <label for="organization" class="block text-xs font-semibold tracking-[0.15em] uppercase text-sg-ink mb-2">Organization</label>
                                <input type="text" id="organization" name="organization" value="{{ old('organization') }}"
                                    class="form-input w-full px-0 py-3 bg-transparent border-0 border-b border-gray-300 text-sm transition-all">
                            </div>
                            <div>
                                <label for="subject" class="block text-xs font-semibold tracking-[0.15em] uppercase text-sg-ink mb-2">Subject</label>
                                <select id="subject" name="subject"
                                    class="form-input w-full px-0 py-3 bg-transparent border-0 border-b border-gray-300 text-sm transition-all">
                                    <option value="">Select...</option>
                                    <option value="prequalification">Prequalification</option>
                                    <option value="project-inquiry">Project Inquiry</option>
                                    <option value="partnership">Trade Partnership</option>
                                    <option value="general">General Inquiry</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-8">
                            <label for="message" class="block text-xs font-semibold tracking-[0.15em] uppercase text-sg-ink mb-2">Message <span class="text-sg-gold">*</span></label>
                            <textarea id="message" name="message" rows="4" required
                                class="form-input w-full px-0 py-3 bg-transparent border-0 border-b border-gray-300 text-sm transition-all resize-none">{{ old('message') }}</textarea>
                            @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <button type="submit" class="bg-sg-forest hover:bg-sg-dark text-white px-10 py-4 text-[13px] font-semibold tracking-wider uppercase transition-all duration-300">
                            Submit Inquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- ==================== FOOTER ==================== --}}
    <footer class="bg-sg-forest">
        <div class="max-w-[1400px] mx-auto px-6 sm:px-8 lg:px-12 py-20">
            <div class="grid md:grid-cols-12 gap-12 mb-16">
                <div class="md:col-span-5">
                    <img src="/images/Logo-co.png" alt="SGE Prime Contracting" class="h-20 w-auto brightness-0 invert mb-6">
                    <p class="text-white/40 text-sm leading-relaxed max-w-sm">
                        {{ $company['established'] }} in {{ $company['location'] }}. General contracting and civil construction with over {{ $company['years'] }} years of proven infrastructure delivery.
                    </p>
                </div>
                <div class="md:col-span-3 md:col-start-7">
                    <p class="text-white/60 text-xs font-semibold tracking-[0.2em] uppercase mb-5">Navigate</p>
                    <ul class="space-y-3 text-sm">
                        <li><a href="#about" class="text-white/30 hover:text-white transition-colors">About</a></li>
                        <li><a href="#services" class="text-white/30 hover:text-white transition-colors">Capabilities</a></li>
                        <li><a href="#experience" class="text-white/30 hover:text-white transition-colors">Experience</a></li>
                        <li><a href="#leadership" class="text-white/30 hover:text-white transition-colors">Leadership</a></li>
                        <li><a href="#contact" class="text-white/30 hover:text-white transition-colors">Contact</a></li>
                    </ul>
                </div>
                <div class="md:col-span-3">
                    <p class="text-white/60 text-xs font-semibold tracking-[0.2em] uppercase mb-5">Contact</p>
                    <ul class="space-y-3 text-sm text-white/30">
                        <li>{{ $company['address'] }}</li>
                        <li><a href="tel:4039664593" class="hover:text-white transition-colors">{{ $company['phone'] }}</a></li>
                        <li><a href="mailto:{{ $company['email'] }}" class="hover:text-white transition-colors">{{ $company['email'] }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/[0.06] pt-8 flex flex-col sm:flex-row justify-between items-center gap-4">
                <p class="text-white/20 text-xs">&copy; {{ date('Y') }} {{ $company['legal'] }} All rights reserved.</p>
                <p class="text-white/20 text-xs">Cochrane, Alberta, Canada</p>
            </div>
        </div>
    </footer>

    {{-- ==================== JAVASCRIPT ==================== --}}
    <script>
        // Mobile menu
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        const menuIcon = document.getElementById('menu-icon');
        const closeIcon = document.getElementById('close-icon');

        mobileMenuBtn.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });

        document.querySelectorAll('.mobile-link').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                menuIcon.classList.remove('hidden');
                closeIcon.classList.add('hidden');
            });
        });

        // Nav scroll
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            navbar.classList.toggle('nav-scrolled', window.scrollY > 60);
        });

        // Reveal on scroll
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.08, rootMargin: '0px 0px -60px 0px' });

        document.querySelectorAll('.reveal').forEach(el => observer.observe(el));

        // Carousel
        const track = document.getElementById('carousel-track');
        const prevBtn = document.getElementById('carousel-prev');
        const nextBtn = document.getElementById('carousel-next');
        const progress = document.getElementById('carousel-progress');
        let pos = 0;

        function getCardWidth() {
            const card = track.querySelector('.carousel-card');
            return card ? card.offsetWidth + 24 : 460;
        }

        function getMaxScroll() {
            return Math.max(0, track.scrollWidth - track.parentElement.offsetWidth);
        }

        function updateCarousel() {
            track.style.transform = `translateX(${-pos}px)`;
            const max = getMaxScroll();
            const pct = max > 0 ? Math.min(((pos + track.parentElement.offsetWidth) / track.scrollWidth) * 100, 100) : 100;
            progress.style.width = pct + '%';
        }

        prevBtn.addEventListener('click', () => {
            pos = Math.max(0, pos - getCardWidth());
            updateCarousel();
        });

        nextBtn.addEventListener('click', () => {
            pos = Math.min(getMaxScroll(), pos + getCardWidth());
            updateCarousel();
        });

        // Drag
        let isDragging = false, startX = 0, dragStart = 0;

        track.addEventListener('mousedown', (e) => {
            isDragging = true; startX = e.pageX; dragStart = pos;
            track.classList.add('dragging');
        });

        track.addEventListener('touchstart', (e) => {
            isDragging = true; startX = e.touches[0].pageX; dragStart = pos;
        }, { passive: true });

        function onMove(pageX) {
            if (!isDragging) return;
            const diff = startX - pageX;
            pos = Math.max(0, Math.min(getMaxScroll(), dragStart + diff));
            track.style.transform = `translateX(${-pos}px)`;
        }

        document.addEventListener('mousemove', (e) => onMove(e.pageX));
        document.addEventListener('touchmove', (e) => onMove(e.touches[0].pageX), { passive: true });

        function endDrag() {
            if (!isDragging) return;
            isDragging = false;
            track.classList.remove('dragging');
            const cw = getCardWidth();
            pos = Math.round(pos / cw) * cw;
            pos = Math.max(0, Math.min(getMaxScroll(), pos));
            updateCarousel();
        }

        document.addEventListener('mouseup', endDrag);
        document.addEventListener('touchend', endDrag);

        track.addEventListener('click', (e) => {
            if (Math.abs(pos - dragStart) > 5) e.preventDefault();
        });

        window.addEventListener('resize', () => {
            pos = Math.min(pos, getMaxScroll());
            updateCarousel();
        });
    </script>

</body>
</html>
