<x-layouts.auth :title="__('Log in')">
<div class="space-y-8">
    <div>
        <p class="text-sg-gold text-xs font-semibold tracking-[0.25em] uppercase mb-3">Admin Portal</p>
        <h2 class="font-serif text-3xl text-sg-ink leading-[1.1] mb-2">Sign In</h2>
        <p class="text-sg-muted text-sm">Enter your credentials to access the dashboard.</p>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div>
            <label for="email" class="block text-xs font-semibold tracking-[0.15em] uppercase text-sg-ink mb-2">Email <span class="text-sg-gold">*</span></label>
            <input type="email" id="email" name="email" required autofocus autocomplete="email" value="{{ old('email') }}"
                class="form-input w-full px-4 py-3 bg-white border border-gray-300 text-sm transition-all">
            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div>
            <div class="flex items-center justify-between mb-2">
                <label for="password" class="block text-xs font-semibold tracking-[0.15em] uppercase text-sg-ink">Password <span class="text-sg-gold">*</span></label>
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="text-xs text-sg-gold hover:text-sg-gold-dark transition-colors">Forgot password?</a>
                @endif
            </div>
            <input type="password" id="password" name="password" required autocomplete="current-password"
                class="form-input w-full px-4 py-3 bg-white border border-gray-300 text-sm transition-all">
            @error('password') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
        </div>

        <div class="flex items-center gap-2">
            <input type="checkbox" id="remember" name="remember" class="w-4 h-4 border-gray-300 text-sg-forest focus:ring-sg-forest/20 rounded">
            <label for="remember" class="text-sm text-sg-muted">Remember me</label>
        </div>

        <button type="submit" class="w-full bg-sg-forest hover:bg-sg-dark text-white px-8 py-4 text-[13px] font-semibold tracking-wider uppercase transition-all duration-300">
            Sign In
        </button>
    </form>

    @if (Route::has('register'))
        <p class="text-center text-sm text-sg-muted">
            Don't have an account?
            <a href="{{ route('register') }}" class="text-sg-gold hover:text-sg-gold-dark font-medium transition-colors">Sign up</a>
        </p>
    @endif
</div>
</x-layouts.auth>
