@extends('layouts.main')

@section('hero')
    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="layer">
            <div class="hero-container" data-aos="fade-up">
                <h1 class="text-oswald">Backpacker Teaching</h1>
                <h2>Mengajar Untuk Negeri</h2>
                <a href="#services" class="btn-get-started scrollto"><i class="bx bx-chevrons-down"></i></a>
            </div>
        </div>
    </section>
    <!-- End Hero -->

    <section id="services" class="services">

        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">

                <h2>Backpacker Teaching</h2>

                <!-- <p>Backpacker Teaching awalnya sebuah komunitas ( atau bisa disebut organisasi non-formal ). awalnya berdiri dari sebuah tugas mata kuliah yang ditugaskan membuat vidio pembelajaran dan dari tugas itu hanya 15 mahasiswa kelas BSD yang bersedia mengerjakannya.</p> -->

            </div>

            <div class="row">

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

                    <div class="icon-box" data-aos="fade-up">

                        <div class="icon">

                            <img src="assets/asset/Untitled-2-01.png" class="layer-1">

                            <img src="assets/asset/Untitled-2-04.png" class="layer-2">

                        </div>

                        <h4 class="title"><a href="">Visi</a></h4>

                        <p class="description">Menciptakan pendidik yang memiliki kemampuan khusus, jiwa sosial yang
                            tinggi, serta mewujudkan pendidikan yang merata untuk seluruh warga indonesia.</p>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">

                        <div class="icon">

                            <img src="assets/asset/Untitled-2-02.png" class="layer-1">

                            <img src="assets/asset/Untitled-2-05.png" class="layer-2">

                        </div>

                        <h4 class="title"><a href="">Misi</a></h4>

                        <p class="description">

                            Meningkatkan kompetensi calon pendidikan

                            <br>- Mengasah calon pendidik dalam meningkatkan kemampuan yang dimiliki

                            <br>- Meningkatkan kecintaan terhadap lingkungan sekitar

                            <br>- Meningkatkan sikap peduli terhadap permasalahan pendidikan

                        </p>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0">

                    <div class="icon-box" data-aos="fade-up" data-aos-delay="200">

                        <div class="icon">

                            <img src="assets/asset/Untitled-2-03.png" class="layer-1">

                            <img src="assets/asset/Untitled-2-06.png" class="layer-2">

                        </div>

                        <h4 class="title"><a href="">Tujuan</a></h4>

                        <p class="description">1. Untuk mengajak masyarakat peduli terhadap dunia pendidikan.

                            <br>2. Menambah pengetahuan dalam dunia pendidikan

                            <br>3. Agar dapat membuat perencanaan pembelajaran yang cocok untuk karakteristik siswa, untuk
                            memperhatikan perencanaan pembelajaran.

                            <br>4. Membuat pembelajaran yang menyenangkan.

                        </p>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <!-- End Services Section -->

    <!-- Peta Section -->

    <section id="peta" class="peta">

        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">

                <h2>Peta Sebaran Backpacker Teaching</h2>

            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-12 d-flex justify-content-center">

                    <img src="assets/img/peta-01.png" class="img-fluid" alt="Workplace" usemap="#petamap">

                    <map class="petamap">

                        <area shape="rect" coords="65,70,270,350" alt="Computer" href="computer.htm">

                        <area shape="rect" coords="290,172,333,250" alt="Phone" href="phone.htm">

                        <area shape="circle" coords="337,300,44" alt="Cup of coffee" href="coffee.htm">

                    </map>

                </div>

            </div>

        </div>

    </section>

    {{-- end section peta --}}

    {{-- section kegiatan --}}

    <section id="portfolio" class="portfolio">

        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">

                <h2>Aktivitas Backpacker Teaching</h2>

                <p></p>

                <!-- <h3>Goes To</h3> -->

            </div>

            <div class="row" data-aos="fade-in">

                <div class="col-lg-12 d-flex justify-content-center">

                    <ul id="portfolio-flters">

                        <li data-filter="*" class="filter-active">All</li>

                        <li data-filter=".filter-famgath">FAMGATH</li>

                        <li data-filter=".filter-kajian">Kajian</li>

                        <li data-filter=".filter-ldbt">LDBT</li>

                        <li data-filter=".filter-tbm">TBM</li>

                    </ul>

                </div>

            </div>

            <div class="row portfolio-container" data-aos="fade-up">

                <div class="col-lg-3 col-md-6 portfolio-item filter-famgath">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_famgath/famgath_2018/famgath_2018(1).JPG"
                            class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_famgath/famgath_2018/famgath_2018(1).JPG"
                                data-gall="portfolioGallery" class="venobox" title="famgath_2018"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-famgath">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_famgath/famgath_2018/famgath_2018(2).JPG"
                            class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_famgath/famgath_2018/famgath_2018(2).JPG"
                                data-gall="portfolioGallery" class="venobox" title="famgath_2018"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-famgath">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_famgath/famgath_2018/famgath_2018(3).JPG"
                            class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_famgath/famgath_2018/famgath_2018(3).JPG"
                                data-gall="portfolioGallery" class="venobox" title="famgath_2018"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-kajian">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_kajian_ramadan/kajian_ramadan_1.JPG" class="img-fluid"
                            alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_kajian_ramadan/kajian_ramadan_1.JPG"
                                data-gall="portfolioGallery" class="venobox" title="Kajian Ramadhan"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-kajian">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_kajian_ramadan/kajian_ramadan_2.JPG" class="img-fluid"
                            alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_kajian_ramadan/kajian_ramadan_2.JPG"
                                data-gall="portfolioGallery" class="venobox" title="Kajian Ramadhan"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-famgath">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_famgath/famgath_2018/famgath_2018(4).JPG"
                            class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_famgath/famgath_2018/famgath_2018(4).JPG"
                                data-gall="portfolioGallery" class="venobox" title="famgath_2018"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-kajian">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_kajian_ramadan/kajian_ramadan_3.JPG" class="img-fluid"
                            alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_kajian_ramadan/kajian_ramadan_3.JPG"
                                data-gall="portfolioGallery" class="venobox" title="Kajian Ramadhan"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-kajian">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_kajian_ramadan/kajian_ramadan_4.JPG" class="img-fluid"
                            alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_kajian_ramadan/kajian_ramadan_4.JPG"
                                data-gall="portfolioGallery" class="venobox" title="Kajian Ramadhan"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-famgath">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_famgath/famgath_2018/famgath_2018(5).JPG"
                            class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_famgath/famgath_2018/famgath_2018(5).JPG"
                                data-gall="portfolioGallery" class="venobox" title="famgath_2018"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-ldbt">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_ldbt/angkatan_1/ANGSA_1-min.JPG" class="img-fluid"
                            alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_ldbt/angkatan_1/ANGSA_1-min.JPG"
                                data-gall="portfolioGallery" class="venobox" title="angkatan_1"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-ldbt">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_ldbt/angkatan_1/ANGSA_2-min.JPG" class="img-fluid"
                            alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_ldbt/angkatan_1/ANGSA_2-min.JPG"
                                data-gall="portfolioGallery" class="venobox" title="angkatan_1"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-ldbt">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_ldbt/angkatan_1/ANGSA_3-min.JPG" class="img-fluid"
                            alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_ldbt/angkatan_1/ANGSA_3-min.JPG"
                                data-gall="portfolioGallery" class="venobox" title="angkatan_1"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-tbm">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_tbm/TBM_1-min.JPG" class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_tbm/TBM_1-min.JPG" data-gall="portfolioGallery"
                                class="venobox" title="TBM"><i class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-tbm">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_tbm/TBM_2-min.JPG" class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_tbm/TBM_2-min.JPG" data-gall="portfolioGallery"
                                class="venobox" title="TBM"><i class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-tbm">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_tbm/TBM_3-min.JPG" class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_tbm/TBM_3-min.JPG" data-gall="portfolioGallery"
                                class="venobox" title="1"><i class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-tbm">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_tbm/TBM_4-min.JPG" class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_tbm/TBM_4-min.JPG" data-gall="portfolioGallery"
                                class="venobox" title="1"><i class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-tbm">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_tbm/TBM_5-min.JPG" class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_tbm/TBM_5-min.JPG" data-gall="portfolioGallery"
                                class="venobox" title="1"><i class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-famgath">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_famgath/famgath_2019/famgath_2019(1).jpg"
                            class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_famgath/famgath_2019/famgath_2019(1).jpg"
                                data-gall="portfolioGallery" class="venobox" title="famgath_2019"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-famgath">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_famgath/famgath_2019/famgath_2019(2).jpg"
                            class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_famgath/famgath_2019/famgath_2019(2).jpg"
                                data-gall="portfolioGallery" class="venobox" title="famgath_2019"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-famgath">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_famgath/famgath_2019/famgath_2019(3).jpg"
                            class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_famgath/famgath_2019/famgath_2019(3).jpg"
                                data-gall="portfolioGallery" class="venobox" title="famgath_2019"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-famgath">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_famgath/famgath_2019/famgath_2019(4).jpg"
                            class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_famgath/famgath_2019/famgath_2019(4).jpg"
                                data-gall="portfolioGallery" class="venobox" title="famgath_2019"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-famgath">

                    <div class="portfolio-wrap">

                        <img src="assets/foto_untuk_web/foto_famgath/famgath_2019/famgath_2019(5).jpg"
                            class="img-fluid" alt="">

                        <div class="portfolio-links">

                            <a href="assets/foto_untuk_web/foto_famgath/famgath_2019/famgath_2019(5).jpg"
                                data-gall="portfolioGallery" class="venobox" title="famgath_2019"><i
                                    class="bx bx-plus"></i></a>

                            <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

    {{-- end section kegiatan --}}

    {{-- section struktur --}}
    <section id="team" class="team">

        <div class="container">


            <div class="section-title" data-aos="fade-in" data-aos-delay="100">

                <h2>Struktur Organisasi</h2>

                <p>Ini adalah struktur organisasi di backpacker teaching.</p>

            </div>



            <div class="row">

                <div class="col-md-12">

                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                        <ol class="carousel-indicators">

                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>

                        </ol>

                        <div class="carousel-inner">

                            <div class="carousel-item active">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/Dr.-Dirgantara-Wicaksono-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Dr. Dirgantara Wicaksono, CH, CHt, S.Pd, M.Pd, MM.</h4>

                                                <span>Pembina</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/Dr.-Mus-Mulyadi,-M.Pd-M.A-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Dr. Mus Mulyadi, M.Pd M.A</h4>

                                                <span>Penasihat</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_bph/Anggun-Ketum-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Fajar Anggun Permana</h4>

                                                <span>Ketua Umum</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_bph/Rahma-Waketum-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Rahmawati Azizah</h4>

                                                <span>Wakil Ketua Umum</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="carousel-item">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_bph/Nida-Bendahara-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Nida Mufidah</h4>

                                                <span>Bendahara</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_bph/Rana-Sekertaris-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Rana Salsabila</h4>

                                                <span>Sekertaris</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/Yusuf-Kabid Organisasi-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Yusuf Adhie Wicaksono</h4>

                                                <span>Ketua Bidang Organisasi</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/Indira-Sekbid Organisasi-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Indira fathia salsabila</h4>

                                                <span>Sekertaris Bidang Organisasi</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="carousel-item">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/April-Kabid Pendidikan-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy" style="height: 379px;">
                                            </div>

                                            <div class="member-info">

                                                <h4>Aprilia Nur Hidayati</h4>

                                                <span>Ketua Bidang Pendidikan</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/Nabila-Sekbid Pendidikan-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Nabilah Priyatna</h4>

                                                <span>Sekertaris Bidang Pendidikan</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/Efrida-Kabid Jurnalistik-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Efrida Arifita Berliantera</h4>

                                                <span>Ketua Bidang Jurnalistik</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/Mita-Sekbid Jurnalistik-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Mitasari</h4>

                                                <span>Sekertaris Bidang Jurnalistik</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="carousel-item">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/Sekar-Kabid Sosial-min.jpg" class="img-fluid"
                                                    alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Sekar Arum Sari</h4>

                                                <span>Ketua Bidang Sosial</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/Alda-Sekbid Sosial-min.jpg" class="img-fluid"
                                                    alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Robiatul Adawiyah</h4>

                                                <span>Sekertaris Bidang Sosial</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_bph/Andira-Kabid sbo-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Andira Lintang Pambayung</h4>

                                                <span>Ketua Bidang Seni Budaya dan Olahraga</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_bph/bagai-sekbid sbo-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Riski Bagai Setiawan</h4>

                                                <span>Sekertaris Bidang Seni Budaya dan Olahraga</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="carousel-item">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_bph/Dewi-Sekbid SDM-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Dewi kartika sari</h4>

                                                <span>Sekertaris Bidang Sumber Daya Manusia</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/Ditha-Kabid-Ekonomi-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy" style="height: 340px">
                                            </div>

                                            <div class="member-info">

                                                <h4>Reindhita Adellia Putri</h4>

                                                <span>Ketua Bidang Ekonomi</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_bph/Vina-Sekbid-Ekonomi-min.jpeg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Vina Husnul Laily</h4>

                                                <span>Sekertaris Bidang Ekonomi</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_dpo/Alfian_Alfandi-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Alfian Alfandi</h4>

                                                <span>Perintis</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>



                            <div class="carousel-item">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_dpo/Arif_Tirtana-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy" style="height: 340px">
                                            </div>

                                            <div class="member-info">

                                                <h4>Arif Tirtana</h4>

                                                <span>Perintis</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_dpo/diah_cahya_khodijah-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy" style="height: 340px">
                                            </div>

                                            <div class="member-info">

                                                <h4>Diah Cahya Khodijah</h4>

                                                <span>Perintis</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_dpo/Dzulfahmi-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Dzulfahmi</h4>

                                                <span>Perintis</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_dpo/melinda_wulandari-min.jpg" class="img-fluid"
                                                    alt="" loading="lazy"></div>

                                            <div class="member-info">

                                                <h4>Melinda Wulandari</h4>

                                                <span>Perintis</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>


                            <div class="carousel-item">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_dpo/Muhammad_Idhar_Adli-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy" style="height: 340px">
                                            </div>

                                            <div class="member-info">

                                                <h4>Muhammad Idhar Adli</h4>

                                                <span>Perintis</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_dpo/nanda_aulia_rahman-min.jpg" class="img-fluid"
                                                    alt="" loading="lazy" style=""></div>

                                            <div class="member-info">

                                                <h4>Nanda Aulia Rahman</h4>

                                                <span>Perintis</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_dpo/Rahmat_Kurnia-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy" style="height: 340px">
                                            </div>

                                            <div class="member-info">

                                                <h4>Rahmat Kurnia</h4>

                                                <span>Perintis</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img
                                                    src="assets/foto_dpo/Silpani_Pirda_Sari-min.jpg" class="img-fluid"
                                                    alt="" loading="lazy" style="height: 340px"></div>

                                            <div class="member-info">

                                                <h4>Silpani Pirda Sari</h4>

                                                <span>Perintis</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="carousel-item">

                                <div class="row">

                                    <div class="col-lg-3 col-md-3">

                                        <div class="member">

                                            <div class="pic"><img src="assets/foto_dpo/Tiara_Nasrizal-min.jpg"
                                                    class="img-fluid" alt="" loading="lazy" style="height: 340px">
                                            </div>

                                            <div class="member-info">

                                                <h4>Tiara Nasrizal</h4>

                                                <span>Perintis</span>

                                                <div class="social">

                                                    <a href=""><i class="icofont-twitter"></i></a>

                                                    <a href=""><i class="icofont-facebook"></i></a>

                                                    <a href=""><i class="icofont-instagram"></i></a>

                                                    <a href=""><i class="icofont-linkedin"></i></a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">

                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>

                            <span class="sr-only">Previous</span>

                        </a>

                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">

                            <span class="carousel-control-next-icon" aria-hidden="true"></span>

                            <span class="sr-only">Next</span>

                        </a>

                    </div>

                </div>

            </div>

        </div>

    </section>
    {{-- end section struktur --}}

    {{-- section kontak --}}
    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact section-bg">

        <div class="container">

            <div class="section-title" data-aos="fade-in" data-aos-delay="100">

                <h2>Kontak Kami</h2>

                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->

            </div>



            <div class="row" data-aos="fade-up" data-aos-delay="100">

                <div class="col-lg-6">

                    <div class="info-box mb-4">

                        <img src="assets/asset/Untitled-4-01.png" height="40px" width="52px">

                        <h3>Alamat Kami</h3>

                        <p>Jalan Bukit Sikumbang, Kelurahan Kecamatan No.103, Rangkapan Jaya Baru, Kec. Pancoran Mas, Kota
                            Depok, Jawa Barat 16433</p>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6">

                    <div class="info-box  mb-4">

                        <img src="assets/asset/Untitled-4-02.png" height="40px" width="52px">

                        <h3>Email</h3>

                        <p>Backpackerteaching@gmail.com</p>

                    </div>

                </div>



                <div class="col-lg-3 col-md-6">

                    <div class="info-box  mb-4">

                        <img src="assets/asset/Untitled-4-03.png" height="40px" width="52px">

                        <h3>Kontak</h3>

                        <p>082124100119</p>

                    </div>

                </div>



            </div>



            <div class="row" data-aos="fade-up" data-aos-delay="200">



                <div class="col-lg-6 ">

                    <iframe class="mb-4 mb-lg-0"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.978034873468!2d106.77396595071701!3d-6.3968319643235665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69e966f00b8b2b%3A0x468862342db39278!2sSMP%20%26%20SMK%20ATLANTIS%20PLUS!5e0!3m2!1sid!2sid!4v1612415711081!5m2!1sid!2sid"
                        frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>

                </div>



                <div class="col-lg-6">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">

                        <div class="form-row">

                            <div class="col-md-6 form-group">

                                <input type="text" name="name" class="form-control" id="name" placeholder="Nama"
                                    data-rule="minlen:4" data-msg="Please enter at least 4 chars" />

                                <div class="validate"></div>

                            </div>

                            <div class="col-md-6 form-group">

                                <input type="email" class="form-control" name="email" id="email" placeholder="Email Kamu"
                                    data-rule="email" data-msg="Please enter a valid email" />

                                <div class="validate"></div>

                            </div>

                        </div>

                        <div class="form-group">

                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />

                            <div class="validate"></div>

                        </div>

                        <div class="form-group">

                            <textarea class="form-control" name="message" rows="5" data-rule="required"
                                data-msg="Tuliskan sesuatu untuk kami" placeholder="Pesan"></textarea>

                            <div class="validate"></div>

                        </div>

                        <div class="mb-3">

                            <div class="loading">Loading</div>

                            <div class="error-message"></div>

                            <div class="sent-message">Pesan Anda telah dikirim. Terima kasih!</div>

                        </div>

                        <div class="text-center"><button type="submit">Kirim Pesan</button></div>

                    </form>

                </div>
            </div>
        </div>

    </section><!-- End Contact Section -->
    {{-- end section kontak --}}


@endsection
