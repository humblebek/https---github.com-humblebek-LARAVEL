<x-layout.layouts>

    <x-slot:title>
    Sinflar
</x-slot:title>
<x-header>
    Sinflar
</x-header>
    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bizning sinflar</span></p>
                <h1 class="mb-4">Farzandlaringiz uchun gruhni tanlang</h1>
            </div>
            @include('components.section.klass')
            @include('components.section.klass')
        </div>
    </div>

    <!-- Class End -->


    <!-- Registration Start -->
    @include('components.section.registration')
    <!-- Registration End -->
</x-layout.layouts>
