@include('templates.partial.header')

    <body id="top">

        @include('templates.partial.navbar')

        <!-- Slider Start -->
        <section class="banner" style="margin-top: 5rem;" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-xl-7">
                        <div class="block">
                            <div class="divider mb-3"></div>
                            <span class="text-uppercase text-sm letter-spacing ">Total Health care solution</span>
                            <h1 class="mb-3 mt-3">PUSKESMAS Sekura</h1>

                            <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                            <div class="btn-container ">
                                <a href="appoinment.html" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">SIGN UP <i class="icofont-simple-right ml-2  "></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feature-block d-lg-flex">
                            <div class="feature-item mb-5 mb-lg-0">
                                <div class="feature-icon mb-4">
                                    <i class="icofont-surgeon-alt"></i>
                                </div>
                                <span>24 Hours Service</span>
                                <h4 class="mb-3">Online Appoinment</h4>
                                <p class="mb-4">Get ALl time support for emergency.We have introduced the principle of family medicine.</p>
                                <a href="appoinment.html" class="btn btn-main btn-round-full">Make a appoinment</a>
                            </div>

                            <div class="feature-item mb-5 mb-lg-0">
                                <div class="feature-icon mb-4">
                                    <i class="icofont-ui-clock"></i>
                                </div>
                                <span>Timing schedule</span>
                                <h4 class="mb-3">Working Hours</h4>
                                <ul class="w-hours list-unstyled">
                                    <li class="d-flex justify-content-between">Sun - Wed : <span>8:00 - 17:00</span></li>
                                    <li class="d-flex justify-content-between">Thu - Fri : <span>9:00 - 17:00</span></li>
                                    <li class="d-flex justify-content-between">Sat - sun : <span>10:00 - 17:00</span></li>
                                </ul>
                            </div>

                            <div class="feature-item mb-5 mb-lg-0">
                                <div class="feature-icon mb-4">
                                    <i class="icofont-support"></i>
                                </div>
                                <span>Emegency Cases</span>
                                <h4 class="mb-3">1-800-700-6200</h4>
                                <p>Get ALl time support for emergency.We have introduced the principle of family medicine.Get Conneted with us for any urgency .</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section service about" style="padding-top: 100px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="service-list mb-5 mb-lg-0" style="text-align: -webkit-center;">
                        <div class="feature-icon mb-2">
                            <i class="icofont-loop"></i>
                        </div>
                        <h4 class="p-0 m-0">Antrian</h4>
                        </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="service-list mb-5 mb-lg-0" style="text-align: -webkit-center;">
                        <div class="feature-icon mb-2">
                            <i class="icofont-patient-bed"></i>
                        </div>
                        <h4 class="p-0 m-0">Rawat Inap</h4>
                        </div>
                            </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="service-list mb-5 mb-lg-0" style="text-align: -webkit-center;">
                            <div class="feature-icon mb-2">
                                <i class="icofont-medical-sign"></i>
                            </div>
                            <h4 class="p-0 m-0">IGD</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section doctors gray-bg" id="artikel">
            <div class="container">
                <div class="row justify-content-center">
                        <div class="col-lg-6 text-center">
                        <div class="section-title">
                            <h2>Artikel Kesehatan</h2>
                            <div class="divider mx-auto my-4"></div>
                            <p>We provide a wide range of creative services adipisicing elit. Autem maxime rem modi eaque, voluptate. Beatae officiis neque </p>
                        </div>
                    </div>
                </div>

                <div class="col-12 text-center  mb-5">
                    <div class="btn-group btn-group-toggle " data-toggle="buttons">
                        <label class="btn active">
                            <input type="radio" name="shuffle-filter" value="all" checked="checked">Semua Artikel
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="cat1">Cardiology
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="cat2">Dental
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="cat3">Neurology
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="cat4">Medicine
                        </label>
                            <label class="btn">
                            <input type="radio" name="shuffle-filter" value="cat5">Pediatric
                        </label>
                        <label class="btn">
                            <input type="radio" name="shuffle-filter" value="cat6">Traumatology
                        </label>
                    </div>
                </div>

                <div class="row shuffle-wrapper portfolio-gallery shuffle" style="position: relative; overflow: hidden; height: 1113px; transition: height 250ms cubic-bezier(0.4, 0, 0.2, 1) 0s;">
                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                                <div class="doctor-img">
                                <img src="{{asset('template')}}/images/team/1.jpg" alt="doctor-image" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-0"><a href="doctor-single.html">4 Efek Narkoba yang Berbahaya untuk Kesehatan Jantung</a></h4>
                                <p>Cardiology</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat2&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(285px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                            <div class="doctor-img">
                                <img src="{{asset('template')}}/images/team/2.jpg" alt="doctor-image" class="img-fluid w-100">
                            </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-0"><a href="doctor-single.html">Artikel 2</a></h4>
                                <p>Radiology</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat3&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(570px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                            <div class="doctor-img">
                                <img src="{{asset('template')}}/images/team/3.jpg" alt="doctor-image" class="img-fluid w-100">
                            </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-0"><a href="doctor-single.html">Artikel 3</a></h4>
                                <p>Dental</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item shuffle-item--visible" data-groups="[&quot;cat3&quot;,&quot;cat4&quot;]" style="position: absolute; top: 0px; left: 0px; visibility: visible; will-change: transform; opacity: 1; transform: translate(855px, 0px) scale(1); transition-duration: 250ms; transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1); transition-property: transform, opacity;">
                        <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                            <div class="doctor-img">
                                <img src="{{asset('template')}}/images/team/4.jpg" alt="doctor-image" class="img-fluid w-100">
                            </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-0"><a href="doctor-single.html">Edward john</a></h4>
                                <p>Pediatry</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section service" id="visi-misi" style="padding-top: 100px;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <div class="section-title">
                            <h2>Visi & Misi</h2>
                            <div class="divider mx-auto my-4"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-item mb-4" style="background: #6F8BA4;">
                            <div class="icon d-flex align-items-center justify-content-center" style="float: none;">
                                <h4 class="mt-3 mb-3 p-0 text-white">VISI</h4>
                            </div>

                            <div class="content">
                                <ul class="list-unstyled department-service">
                                    <li class="text-white"><i class="icofont-check mr-2"></i>Menjadi Pusat Pelayanan Kesehatan yang Mandiri, Bermutu dan Berakhlakul Karimah Menuju Kecamatan Teluk Keramat Sehat</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-item mb-4" style="background: #6F8BA4;">
                            <div class="icon d-flex align-items-center justify-content-center" style="float: none;">
                                <h4 class="mt-3 mb-3 p-0 text-white">MISI</h4>
                            </div>

                            <div class="content">
                                <ul class="list-unstyled department-service">
                                    <li class="text-white"><i class="icofont-check mr-2"></i>Mendorong kesadaran masyarakat supaya berperilaku hidup bersih dan sehat secara mandiri</li>
                                    <li class="text-white"><i class="icofont-check mr-2"></i>Menjadikan Puskesmas sebagai pusat informasi dan pelayanan kesehatan</li>
                                    <li class="text-white"><i class="icofont-check mr-2"></i>Meningkatkan profesionalisme tenaga kesehatan, secara berkelanjutan sesuai dengan kompetensi masing-masing petugas kesehatan</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="service-item mb-4" style="background: #6F8BA4;">
                            <div class="icon d-flex align-items-center justify-content-center" style="float: none;">
                                <h4 class="mt-3 mb-3 p-0 text-white">TATA NILAI</h4>
                            </div>

                            <div class="content">
                                <ul class="list-unstyled department-service">
                                    <li class="text-white"><i class="icofont-check mr-2"></i>Senyum</li>
                                    <li class="text-white"><i class="icofont-check mr-2"></i>Edukatif</li>
                                    <li class="text-white"><i class="icofont-check mr-2"></i>Komitmen</li>
                                    <li class="text-white"><i class="icofont-check mr-2"></i>Unggul</li>
                                    <li class="text-white"><i class="icofont-check mr-2"></i>Religius</li>
                                    <li class="text-white"><i class="icofont-check mr-2"></i>Akuntable</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-form-wrap section gray-bg">
            <div class="container">
                <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                    <h2 class="text-md mb-2">Kritik & Saran</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">Laboriosam exercitationem molestias beatae eos pariatur, similique, excepturi mollitia sit
                        perferendis maiores ratione aliquam?</p>
                    </div>
                </div>
                </div>
                <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <form id="contact-form" class="contact__form " method="post" action="mail.php">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                        <div class="alert alert-success contact__msg" style="display: none" role="alert">
                            Your message was sent successfully.
                        </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                        <div class="form-group">
                            <input name="name" id="name" type="text" class="form-control bg-white" placeholder="Your Full Name">
                        </div>
                        </div>

                        <div class="col-lg-6">
                        <div class="form-group">
                            <input name="email" id="email" type="email" class="form-control bg-white" placeholder="Your Email Address" required="">
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                            <input name="subject" id="subject" type="text" class="form-control bg-white" placeholder="Your Query Topic" required="">
                        </div>
                        </div>
                        <div class="col-lg-6">
                        <div class="form-group">
                            <input name="phone" id="phone" type="text" class="form-control bg-white" placeholder="Your Phone Number" required="">
                        </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control bg-white" rows="8" placeholder="Your Message" required=""></textarea>
                    </div>

                    <div>
                        <input class="btn btn-main btn-round-full" name="submit" type="submit" value="Send Messege">
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </section>

        <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.5013558711094!2d109.2193878742217!3d1.4721770611719955!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31e4c04d34165fb5%3A0xd4f2cb54da1b75b4!2sPuskesmas%20Sekura!5e0!3m2!1sid!2sid!4v1688981913737!5m2!1sid!2sid"
            width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        @include('templates.partial.footer')
        @include('templates.partial.script')
    </body>
</html>
