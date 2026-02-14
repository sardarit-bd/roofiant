<div class="relative min-h-[280px] md:min-h-[340px] flex flex-col justify-center items-center text-center text-white overflow-hidden"
    style="background-image: url('{{ asset('images/hero.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat;">

    <!-- Overlay -->
    <div class="absolute inset-0 bg-[#292c73]/80"></div>

    <!-- Content -->
    <div class="relative z-10 px-4">
        <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold uppercase tracking-wide">
            {{ $title }}
        </h1>

        @if (!empty($subtitle))
            <p class="mt-3 text-sm md:text-base lg:text-lg opacity-90">
                {{ $subtitle }}
            </p>
        @endif
    </div>

</div>
