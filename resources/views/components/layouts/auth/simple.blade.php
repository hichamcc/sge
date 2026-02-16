<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>{{ $title ?? 'Login' }} — SGE Prime Contracting</title>
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
            body { font-family: 'Inter', sans-serif; }
            .font-serif { font-family: 'DM Serif Display', serif; }
            .form-input:focus {
                border-color: #1a3a2a;
                box-shadow: 0 0 0 3px rgba(26,58,42,0.08);
                outline: none;
            }
        </style>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="min-h-screen bg-sg-cream antialiased">
        <div class="flex min-h-screen">
            {{-- Left: Branded panel --}}
            <div class="hidden lg:flex lg:w-1/2 bg-sg-forest relative overflow-hidden flex-col justify-between p-12">
                <div class="absolute inset-0 opacity-10">
                    <div class="absolute top-0 right-0 w-px h-32 bg-sg-gold/40"></div>
                    <div class="absolute top-0 right-32 w-32 h-px bg-sg-gold/40"></div>
                    <div class="absolute bottom-0 left-0 w-px h-24 bg-sg-gold/40"></div>
                    <div class="absolute bottom-24 left-0 w-24 h-px bg-sg-gold/40"></div>
                </div>

                <div>
                    <a href="{{ route('home') }}">
                        <img src="/images/Logo-co.png" alt="SGE Prime Contracting" class="h-16 w-auto brightness-0 invert">
                    </a>
                </div>

                <div class="relative z-10">
                    <div class="w-8 h-px bg-sg-gold mb-8"></div>
                    <h1 class="font-serif text-5xl xl:text-6xl text-white leading-[1.1] mb-6">
                        Building<br>
                        <span class="text-sg-gold">Critical</span><br>
                        Infrastructure
                    </h1>
                    <p class="text-white/50 text-sm leading-relaxed max-w-sm">
                        General contracting and civil construction with over 15 years of proven delivery across Alberta.
                    </p>
                </div>

                <div class="flex items-center gap-10">
                    <div>
                        <p class="font-serif text-3xl text-sg-gold">15+</p>
                        <p class="text-white/30 text-[11px] uppercase tracking-wider mt-1">Years</p>
                    </div>
                    <div>
                        <p class="font-serif text-3xl text-sg-gold">COR</p>
                        <p class="text-white/30 text-[11px] uppercase tracking-wider mt-1">Certified</p>
                    </div>
                    <div>
                        <p class="font-serif text-3xl text-sg-gold">95%</p>
                        <p class="text-white/30 text-[11px] uppercase tracking-wider mt-1">Self-Performed</p>
                    </div>
                </div>
            </div>

            {{-- Right: Login form --}}
            <div class="flex flex-1 flex-col items-center justify-center p-6 md:p-12">
                <div class="w-full max-w-md">
                    {{-- Mobile logo --}}
                    <div class="lg:hidden flex justify-center mb-10">
                        <a href="{{ route('home') }}">
                            <img src="/images/Logo-co.png" alt="SGE Prime Contracting" class="h-14 w-auto">
                        </a>
                    </div>

                    {{ $slot }}

                    <p class="text-center text-sg-muted text-xs mt-12">
                        &copy; {{ date('Y') }} Sensibly Green Enterprises Ltd.
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
