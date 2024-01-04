<x-layout.layouts>

    <x-slot:title>
  O'qituvchilar
</x-slot:title>
<x-header>
    O'qituvchilar
</x-header>


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Rahbariyat</span></p>
            </div>
            @include('components.section.teachers')
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bizning o'qituvchilarimiz</span></p>
                <h1 class="mb-4">O'qituvchilarimiz bilan tanishing</h1>
            </div>
            @include('components.section.teachers')
            @include('components.section.teachers')
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('components.section.testimonial')
    <!-- Testimonial End -->
</x-layout.layouts>
