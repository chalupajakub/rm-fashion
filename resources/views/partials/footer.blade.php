<footer class="mt-24 border-t border-default" style="background: rgba(240,235,227,0.4)">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-10 py-16">
        <div class="grid grid-cols-2 lg:grid-cols-6 gap-10">
            {{-- Brand Section --}}
            <div class="col-span-2">
                <a href="{{ url('/') }}" class="font-display text-3xl">Nextgen<span style="color:var(--accent)">.</span></a>
                <p class="text-sm text-muted mt-4 max-w-xs leading-relaxed">
                    Modern essentials, considered design and timeless quality — crafted for the next generation.
                </p>
                {{-- Socials --}}
                <div class="flex gap-2 mt-6">
                    @foreach(['instagram', 'twitter', 'facebook', 'youtube'] as $social)
                        <a href="#" class="h-9 w-9 rounded-full bg-card border border-default flex items-center justify-center hover:border-[var(--fg)]/40 transition-colors">
                            <i data-lucide="{{ $social }}" class="w-4 h-4"></i>
                        </a>
                    @endforeach
                </div>
            </div>

            {{-- Link Columns --}}
            <div>
                <h4 class="text-sm font-medium mb-4">Company</h4>
                <ul class="space-y-2.5 text-sm text-muted">
                    <li><a href="#" class="hover:text-[var(--fg)]">About</a></li>
                    <li><a href="#" class="hover:text-[var(--fg)]">Careers</a></li>
                    <li><a href="#" class="hover:text-[var(--fg)]">Sustainability</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-medium mb-4">Help</h4>
                <ul class="space-y-2.5 text-sm text-muted">
                    <li><a href="#" class="hover:text-[var(--fg)]">Contact</a></li>
                    <li><a href="#" class="hover:text-[var(--fg)]">Shipping</a></li>
                    <li><a href="#" class="hover:text-[var(--fg)]">Returns</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-medium mb-4">FAQ</h4>
                <ul class="space-y-2.5 text-sm text-muted">
                    <li><a href="#" class="hover:text-[var(--fg)]">Account</a></li>
                    <li><a href="#" class="hover:text-[var(--fg)]">Sizing</a></li>
                    <li><a href="#" class="hover:text-[var(--fg)]">Payments</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-sm font-medium mb-4">Resources</h4>
                <ul class="space-y-2.5 text-sm text-muted">
                    <li><a href="#" class="hover:text-[var(--fg)]">Blog</a></li>
                    <li><a href="#" class="hover:text-[var(--fg)]">Lookbook</a></li>
                    <li><a href="#" class="hover:text-[var(--fg)]">Style Guide</a></li>
                </ul>
            </div>
        </div>

        {{-- Bottom Bar --}}
        <div class="mt-12 pt-8 border-t border-default flex flex-col sm:flex-row items-center justify-between gap-4">
            <p class="text-xs text-muted">© {{ date('Y') }} Nextgen. All rights reserved.</p>
            
            {{-- Payment Icons --}}
            <div class="flex items-center gap-2">
                @foreach(['VISA', 'MC', 'AMEX', 'PAYPAL', 'APPLE'] as $pay)
                    <span class="px-2.5 py-1 rounded-md bg-card border border-default text-[10px] font-medium text-muted">{{ $pay }}</span>
                @endforeach
            </div>
        </div>
    </div>
</footer>