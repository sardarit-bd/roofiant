<x-site-layout title="Home | roofiant">
    <x-breadcrumb title="Services" subtitle="home > services" />

    @include('components.services.categories')
    @include('components.services.choose')
    @include('components.home.testimonial')
    @include('components.services.explore')
    @include('components.home.financing')
    @include('components.home.cta')

</x-site-layout>
