<div class="flex items-center gap-3 text-xs">
    <span class="w-3 text-[var(--muted)]">{{$star}}</span>
    <svg class="h-3 w-3 fill-current" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
    <div class="flex-1 h-1.5 rounded-full bg-secondary overflow-hidden"><div class="h-full bg-fg rounded-full" style="width:{{$percent}}%"></div></div>
    <span class="w-8 text-right text-[var(--muted)]">{{$percent}}%</span>
</div>