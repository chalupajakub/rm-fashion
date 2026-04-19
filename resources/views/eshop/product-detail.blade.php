@extends('layouts.main')

@section('title', 'Loose Fit Hoodie — Nextgen')

@section('content')
<!-- BREADCRUMB -->
  <nav class="text-xs text-muted mb-6">
    <a href="#" class="hover:text-[var(--fg)]">Men</a>
    <span class="mx-2">/</span>
    <a href="#" class="hover:text-[var(--fg)]">Hoodies</a>
    <span class="mx-2">/</span>
    <span class="text-[var(--fg)]">Loose Fit Hoodie</span>
  </nav>

  <!-- PRODUCT SECTION -->
  <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">
    <!-- GALLERY -->
    <div class="flex flex-col gap-4">
      <div class="relative aspect-[4/5] overflow-hidden rounded-3xl bg-secondary">
        <img id="mainImage" src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=1024&q=80" alt="Loose Fit Hoodie" class="absolute inset-0 w-full h-full object-cover fade-img"/>
      </div>
      <div class="grid grid-cols-4 gap-3" id="thumbs">
        <button class="thumb active aspect-square rounded-2xl overflow-hidden bg-secondary" data-src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=1024&q=80">
          <img src="https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=400&q=80" class="w-full h-full object-cover" alt="thumb 1"/>
        </button>
        <button class="thumb aspect-square rounded-2xl overflow-hidden bg-secondary" data-src="https://images.unsplash.com/photo-1542327897-d73f4005b533?w=1024&q=80">
          <img src="https://images.unsplash.com/photo-1542327897-d73f4005b533?w=400&q=80" class="w-full h-full object-cover" alt="thumb 2"/>
        </button>
        <button class="thumb aspect-square rounded-2xl overflow-hidden bg-secondary" data-src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?w=1024&q=80">
          <img src="https://images.unsplash.com/photo-1620799140408-edc6dcb6d633?w=400&q=80" class="w-full h-full object-cover" alt="thumb 3"/>
        </button>
        <button class="thumb aspect-square rounded-2xl overflow-hidden bg-secondary" data-src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=1024&q=80">
          <img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?w=400&q=80" class="w-full h-full object-cover" alt="thumb 4"/>
        </button>
      </div>
    </div>


        <!-- INFO -->
        <div class="flex flex-col">
      <span class="text-xs uppercase tracking-[0.2em] text-muted">Man Fashion</span>
      <h1 class="font-display text-4xl sm:text-5xl lg:text-6xl leading-[1.05] mt-3">Loose Fit <em class="italic">Hoodie</em></h1>

      <div class="flex items-baseline gap-3 mt-6">
        <span class="text-3xl font-medium">$89.00</span>
        <span class="text-base text-muted line-through">$120.00</span>
        <span class="text-xs px-2 py-0.5 rounded-full font-medium" style="background: rgba(201,185,154,0.3)">-25%</span>
      </div>

      <div class="mt-6 flex items-center gap-3 p-4 rounded-2xl bg-secondary">
        <div class="h-10 w-10 rounded-full bg-card flex items-center justify-center">
          <x-heroicon-o-truck class="w-5 h-5"/>
        </div>
        <div class="flex-1">
          <p class="text-sm font-medium">Free delivery</p>
          <p class="text-xs text-muted">Order in 4h 32m for delivery by Thursday</p>
        </div>
      </div>

      <div class="mt-8">
        <div class="flex items-center justify-between mb-3">
          <span class="text-sm font-medium">Select size</span>
          <button class="text-xs text-muted underline underline-offset-4 hover:text-[var(--fg)]">Size guide</button>
        </div>
        <div class="grid grid-cols-5 gap-2" id="sizes">
          <button class="size-btn h-12 rounded-xl border border-default bg-card text-sm font-medium hover:border-[var(--fg)]/40 transition-all">S</button>
          <button class="size-btn h-12 rounded-xl border border-default bg-card text-sm font-medium hover:border-[var(--fg)]/40 transition-all">M</button>
          <button class="size-btn active h-12 rounded-xl border border-default bg-card text-sm font-medium hover:border-[var(--fg)]/40 transition-all">L</button>
          <button class="size-btn h-12 rounded-xl border border-default bg-card text-sm font-medium hover:border-[var(--fg)]/40 transition-all">XL</button>
          <button class="size-btn h-12 rounded-xl border border-default bg-card text-sm font-medium hover:border-[var(--fg)]/40 transition-all">XXL</button>
        </div>
      </div>

      <div class="mt-6 flex items-center gap-3">
        <button class="flex-1 h-14 rounded-full bg-fg text-bg font-medium inline-flex items-center justify-center gap-2 hover:opacity-90 transition group">
          + Add to Cart
        </button>
        <button id="wishBtn" class="h-14 w-14 rounded-full border border-default bg-card flex items-center justify-center hover:border-[var(--fg)]/40 transition-all" aria-label="Wishlist">
          <x-heroicon-o-heart class="w-7 h-7"/>
        </button>
      </div>

      <!-- ACCORDION -->
      <div class="mt-10 border-y border-default divide-y divide-[var(--border)]">
        <details open>
          <summary class="flex items-center gap-4 py-5">
            <x-heroicon-o-information-circle class="w-5 h-5 text-muted"/>
            <span class="flex-1 font-medium">Description & Fit</span>
            <x-heroicon-o-plus class="plus-icon text-black w-4 h-4"/>
            <x-heroicon-o-minus class="minus-icon w-4 h-4"/>
          </summary>
          <div class="accordion-content pl-9 pr-4 text-sm text-muted leading-relaxed">
            Crafted from organic heavyweight cotton, this loose fit hoodie features a relaxed silhouette, dropped shoulders, and a kangaroo pocket. Pre-washed for softness with ribbed cuffs and hem. Model is 6'1" and wears size L.
          </div>
        </details>
        <details>
          <summary class="flex items-center gap-4 py-5">
            <x-heroicon-o-archive-box class="w-5 h-5 text-muted"/>
            <span class="flex-1 font-medium">Shipping & Returns</span>
            <x-heroicon-o-plus class="plus-icon text-black w-4 h-4"/>
            <x-heroicon-o-minus class="minus-icon w-4 h-4"/>
          </summary>
          <div class="accordion-content pl-9 pr-4 text-sm text-muted leading-relaxed">
            Free standard shipping on orders over $75. Express delivery available at checkout. Free returns within 30 days — items must be unworn with original tags.
          </div>
        </details>
      </div>
    </div>
  </div>
    
      <!-- REVIEWS -->
      <section class="mt-16">
    <h2 class="font-display text-3xl sm:text-4xl">Ratings & Reviews</h2>
    <div class="mt-8 grid grid-cols-1 lg:grid-cols-3 gap-8">
      <div>
        <div class="flex items-baseline gap-2">
          <span class="font-display text-6xl">4.5</span>
          <span class="text-muted">/ 5</span>
        </div>
        <div class="flex gap-0.5 mt-2 text-[var(--fg)]">
            <x-heroicon-o-star class="w-4 h-4 fill-current"/>
            <x-heroicon-o-star class="w-4 h-4 fill-current"/>
            <x-heroicon-o-star class="w-4 h-4 fill-current"/>
            <x-heroicon-o-star class="w-4 h-4 fill-current"/>
            <x-heroicon-o-star class="w-4 h-4 text-muted"/>
        </div>
        <p class="text-sm text-muted mt-2">Based on 1,284 reviews</p>
        <div class="mt-6 space-y-2" id="breakdown">
            <x-rating-bar 
                :star="5"
                :percent="72"
            />

            <x-rating-bar 
                :star="4"
                :percent="18"
            />

            <x-rating-bar 
                :star="3"
                :percent="6"
            />

            <x-rating-bar 
                :star="2"
                :percent="3"
            />

            <x-rating-bar 
                :star="1"
                :percent="1"
            />
        </div>
      </div>

      <div class="lg:col-span-2 rounded-3xl bg-card border border-default p-6 sm:p-8">
        <div class="flex items-start gap-4">
          <div class="h-12 w-12 rounded-full flex items-center justify-center font-medium" style="background: rgba(201,185,154,0.4)">JM</div>
          <div class="flex-1">
            <div class="flex items-center justify-between flex-wrap gap-2">
              <div>
                <p class="font-medium">James Morrison</p>
                <p class="text-xs text-muted">Verified buyer · 2 weeks ago</p>
              </div>
              <div class="flex gap-0.5">
                <x-heroicon-o-star class="w-4 h-4 fill-current"/>
                <x-heroicon-o-star class="w-4 h-4 fill-current"/>
                <x-heroicon-o-star class="w-4 h-4 fill-current"/>
                <x-heroicon-o-star class="w-4 h-4 fill-current"/>
                <x-heroicon-o-star class="w-4 h-4 fill-current"/>
              </div>
            </div>
            <h3 class="font-medium mt-4">Exactly what I was looking for</h3>
            <p class="text-sm text-muted leading-relaxed mt-2">
              The fabric quality is exceptional — heavy enough to feel premium but still breathable. The oversized cut is perfectly tailored, not sloppy. I went up one size for the relaxed look and it's spot on. Already ordered another in black.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- RECOMMENDATIONS -->
  <section class="mt-20">
    <div class="flex items-end justify-between mb-8">
      <h2 class="font-display text-3xl sm:text-4xl">You might also like</h2>
      <a href="#" class="text-sm text-muted hover:text-[var(--fg)] underline underline-offset-4">View all</a>
    </div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6" id="recs">
        <article class="group">
      <div class="relative aspect-[4/5] overflow-hidden rounded-2xl bg-secondary">
        <img src="https://images.unsplash.com/photo-1551028719-00167b16eac5?w=600&q=80" alt="bomber-jacket" loading="lazy" class="h-full w-full object-cover transition-transform duration-700 group-hover:scale-105"/>
        <span class="absolute top-3 left-3 px-2 py-0.5 rounded-full bg-fg text-bg text-[10px] font-medium">-67%</span>
        <button class="absolute top-3 right-3 h-8 w-8 rounded-full bg-[var(--bg)]/90 backdrop-blur flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity">
          <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path d="M20.84 4.61a5.5 5.5 0 00-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 00-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 000-7.78z"/></svg>
        </button>
      </div>
      <div class="mt-3 px-1">
        <h3 class="text-sm font-medium leading-snug">Classic bomber jacket</h3>
        <div class="flex items-center justify-between mt-1.5">
          <div class="flex items-center gap-1 text-xs text-muted">
            <svg class="h-3 w-3 fill-current text-[var(--fg)]" viewBox="0 0 24 24"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
            4.7
          </div>
            <span class="text-sm font-medium">$67</span>
                </div>
            </div>
        </article>
    </div>
  </section>
@endsection