<x-site-layout title="Service Area | roofiant">
    @include('components.service-area.one')
    @include('components.service-area.two')
    @include('components.services.explore')
    @include('components.service-area.lists')
    @include('components.service-area.choose')
    @include('components.home.cta')
    <style>
        .nopage {
            display: none;
        }
    </style>
</x-site-layout>
