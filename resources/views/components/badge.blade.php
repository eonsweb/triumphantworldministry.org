@props(['title' => 'Badge Title Here'])
<div class="inline-flex items-center space-x-3 mb-6" data-aos="fade-down">
    <div class="h-px w-8 bg-gray-900"></div>
    <span class="text-lg font-semibold tracking-wide uppercase gradient-overlay bg-clip-text text-transparent">
        {{ $title }}
    </span>
    <div class="h-px w-8 bg-gray-900"></div>
</div>
