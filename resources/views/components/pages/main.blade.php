<x-layout.layouts>

    
    <!-- Header Start -->
    <div class="container-fluid bg-primary px-0 px-md-5 mb-5">
        <div class="row align-items-center px-3">
            <div class="col-lg-6 text-center text-lg-left">
                <h4 class="text-white mb-4 mt-5 mt-lg-0">Shavkat Mirziyoyev:</h4>
                <h1 class="display-3 font-weight-bold text-white">"Maktabgacha ta'lim sohasida zamonaviy tizim yaratish
                    muhim vazifamizdir"</h1>
                <!-- <p class="text-white mb-4">Sea ipsum kasd eirmod kasd magna, est sea et diam ipsum est amet sed sit.
                    Ipsum dolor no justo dolor et, lorem ut dolor erat dolore sed ipsum at ipsum nonumy amet. Clita
                    lorem dolore sed stet et est justo dolore.</p> -->
                <!-- <a href="" class="btn btn-secondary mt-1 py-3 px-5">Ko'proq ma'lumot olish</a> -->
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <img class="img-fluid mt-5" src="/assetsJ/img/header.png" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Facilities Start -->
   @include('components.section.facilities')
    <!-- Facilities Start -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid rounded mb-5 mb-lg-0" src="/assetsJ/img/about-1.jpg" alt="">
                </div>
                <div class="col-lg-7">
                    <p class="section-title pr-5"><span class="pr-2">So'nggi maqola</span></p>
                    <h1 class="mb-4">Farzandlaringiz uchun eng yaxshi maktab</h1>
                    <p>Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Class Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bizning sinflar</span></p>
                <h1 class="mb-4">Farzandlaringiz uchun gruhni tanlang</h1>
            </div>
            @include('components.section.klass')
        </div>
    </div>

    <!-- Class End -->


    <!-- Registration Start -->
    @include('components.section.registration')
    <!-- Registration End -->


    <!-- Team Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bizning o'qituvchilarimiz</span></p>
                <h1 class="mb-4">O'qituvchilarimiz bilan tanishing</h1>
            </div>
            @include('components.section.teachers')
        </div>
    </div>
    <!-- Team End -->


    <!-- Testimonial Start -->
    @include('components.section.testimonial')
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-2">
                <p class="section-title px-5"><span class="px-2">Bog'cha hayoti</span></p>
                <h1 class="mb-4">So'nggi maqolalar</h1>
            </div>
            <div class="row pb-3">
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="/assetsJ/img/blog-1.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Maqola sarlavhasi</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Komiljanova
                                    Nargiza</small>
                                <!-- <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small> -->
                                <!-- <small class="mr-3"><i class="fa fa-eye text-primary"></i> 15</small> -->
                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod
                                kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <!-- <a href="" class="btn btn-primary px-4 mx-auto my-2">Batafsil</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="/assetsJ/img/blog-2.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Maqola sarlavhasi</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Komiljanova
                                    Nargiza</small>
                                <!-- <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small> -->
                                <!-- <small class="mr-3"><i class="fa fa-eye text-primary"></i> 15</small> -->
                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod
                                kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <!-- <a href="" class="btn btn-primary px-4 mx-auto my-2">Batafsil</a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card border-0 shadow-sm mb-2">
                        <img class="card-img-top mb-2" src="/assetsJ/img/blog-3.jpg" alt="">
                        <div class="card-body bg-light text-center p-4">
                            <h4 class="">Maqola sarlavhasi</h4>
                            <div class="d-flex justify-content-center mb-3">
                                <small class="mr-3"><i class="fa fa-user text-primary"></i> Komiljanova
                                    Nargiza</small>
                                <!-- <small class="mr-3"><i class="fa fa-folder text-primary"></i> Web Design</small> -->
                                <!-- <small class="mr-3"><i class="fa fa-eye text-primary"></i> 15</small> -->
                            </div>
                            <p>Sed kasd sea sed at elitr sed ipsum justo, sit nonumy diam eirmod, duo et sed sit eirmod
                                kasd clita tempor dolor stet lorem. Tempor ipsum justo amet stet...</p>
                            <!-- <a href="" class="btn btn-primary px-4 mx-auto my-2">Batafsil</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->
</x-layout.layouts>
