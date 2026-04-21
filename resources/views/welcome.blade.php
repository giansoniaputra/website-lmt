@extends('fe.layouts.main')
@section('container')
    <!-- ===== HERO: Split layout — left text, right image panel ===== -->
    <section class="ve-hero">
        <!-- Left Panel -->
        <div class="ve-hero-left">
            <span class="ve-hero-badge">&nbsp;·&nbsp; Logam Mulia Tasikmalaya &nbsp;·&nbsp; </span>
            <h1>Tempat Terpercaya<span class="ve-highlight">Jual & Beli</span><br>Emasmu</h1>
            <p>Investasi emas terpercaya bersama Logam Mulia Tasikmalaya untuk lindungi nilai aset dan raih keuntungan
                jangka panjang.</p>
            <div class="ve-hero-btns">
                <a href="services.html" class="ve-btn-primary">Explore Product</a>
                <a href="about.html" class="ve-btn-ghost">Explore Services</a>
            </div>
            <!-- Quick Stats Row -->
            {{-- <div class="ve-hero-stats">
                <div class="ve-stat">
                    <strong>$4.2B+</strong>
                    <span>Assets Managed</span>
                </div>
                <div class="ve-stat-divider"></div>
                <div class="ve-stat">
                    <strong>97%</strong>
                    <span>Client Satisfaction</span>
                </div>
                <div class="ve-stat-divider"></div>
                <div class="ve-stat">
                    <strong>12+</strong>
                    <span>Years Experience</span>
                </div>
            </div> --}}
        </div>
        <!-- Right Panel: overlapping image cards -->
        <div class="ve-hero-right">
            <div class="ve-hero-img-main bg-img" style="background-image:url(/fe_assets/img/bg-img/1.jpeg);"></div>
            {{-- <div class="ve-hero-img-accent bg-img" style="background-image:url(/fe_assets/img/bg-img/3.jpg);"></div> --}}
            <!-- Floating card -->
            <!-- <div class="ve-float-card">
                <i class="fa fa-line-chart"></i>
                <div>
                    <strong>+18.4%</strong>
                    <span>Annual Returns</span>
                </div>
            </div> -->
        </div>
    </section>
    <div class="ve-trust-bar">
        <div class="ve-trust-inner">
            <span><i class="fa fa-shield"></i> Logam Mulia Tasikmalaya</span>
            <span><i class="fa fa-check-circle"></i> Teman Investasi</span>
            <span><i class="fa fa-users"></i> Pilih yang terpercaya</span>
        </div>
    </div>

    <!-- ===== SERVICES GRID (new card layout) ===== -->
    <section class="ve-section ve-services-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">What We Offer</span>
                <h2>Solusi Investasi Emas untuk <span>Masa Depan Anda</span></h2>
                <p>Mulai dari pembelian emas, jual kembali (buyback), hingga edukasi investasi—kami siap membantu Anda di
                    setiap langkah menuju masa depan finansial yang lebih aman.</p>
            </div>
            <div class="ve-services-grid">
                <div class="ve-service-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-service-icon"><i class="icon-profits"></i></div>
                    <h4>Beli Emas</h4>
                    <p>Dapatkan emas asli dengan harga transparan dan diperbarui setiap hari.</p>
                    <!-- <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a> -->
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="200ms">
                    <div class="ve-service-icon"><i class="icon-money-1"></i></div>
                    <h4>Jual / Buyback Emas</h4>
                    <p>Jual emas Anda dengan harga kompetitif, proses cepat, dan terpercaya.</p>
                    <!-- <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a> -->
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="300ms">
                    <div class="ve-service-icon"><i class="icon-coin"></i></div>
                    <h4>Tabungan Emas</h4>
                    <p>Mulai investasi emas dari nominal kecil, cocok untuk pemula.</p>
                    <!-- <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a> -->
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-service-icon"><i class="icon-smartphone-1"></i></div>
                    <h4>Konsultasi Investasi</h4>
                    <p>Kami bantu Anda menentukan strategi investasi emas yang tepat sesuai kebutuhan.</p>
                    <!-- <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a> -->
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="500ms">
                    <div class="ve-service-icon"><i class="icon-diamond"></i></div>
                    <h4>Edukasi Investasi Emas</h4>
                    <p>Pelajari cara berinvestasi emas dengan benar agar lebih aman dan menguntungkan.</p>
                    <!-- <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a> -->
                </div>
                <div class="ve-service-card wow fadeInUp" data-wow-delay="600ms">
                    <div class="ve-service-icon"><i class="icon-piggy-bank"></i></div>
                    <h4>Perencanaan Keuangan</h4>
                    <p>Rencanakan masa depan Anda dengan strategi berbasis emas yang stabil.</p>
                    <!-- <a href="services.html" class="ve-card-link">Learn more <i class="fa fa-long-arrow-right"></i></a> -->
                </div>
            </div>
        </div>
    </section>

    <!-- ===== WHY US (two-column: image left, content right) ===== -->
    <section class="ve-section ve-whyus-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Side -->
                <div class="col-12 col-lg-5">
                    <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                        <div class="ve-whyus-img-main bg-img" style="background-image:url(/fe_assets/img/bg-img/5.jpeg);">
                        </div>
                
                        <!-- <div class="ve-whyus-badge">
                            <strong>12+</strong>
                            <span>Years of Financial Excellence</span>
                        </div> -->
                    </div>
                </div>
                <!-- Content Side -->
                <div class="col-12 col-lg-7 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-whyus-content">
                        <span class="ve-section-tag">WHY VAULTEDGE</span>
                        <h2>Pilihan Tepat untuk <span>Investasi Emas</span> yang Aman</h2>
                        <p>Kami menghadirkan layanan investasi emas yang aman, transparan, dan terpercaya untuk membantu
                            Anda menjaga nilai aset serta mempersiapkan masa depan finansial yang lebih baik.</p>
                        <div class="ve-checklist">
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Pelayanan Personal</strong>
                                    <p>Setiap pelanggan mendapatkan pendampingan sesuai kebutuhan investasinya.</p>
                                </div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Harga Transparan</strong>
                                    <p>Harga beli dan buyback selalu jelas, tanpa biaya tersembunyi.</p>
                                </div>
                            </div>
                            <div class="ve-check-item">
                                <i class="fa fa-check-circle"></i>
                                <div><strong>Layanan Responsif</strong>
                                    <p>Tim kami siap membantu Anda dengan cepat dan ramah kapan pun dibutuhkan.</p>
                                </div>
                            </div>
                        </div>
                        <a href="https://wa.me/{{ $no_telepon }}" target="_blank" class="ve-btn-primary mt-30">Contact
                            Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== COUNTERS ===== -->
    <!-- <section class="ve-counter-section">
        <div class="container">
            <div class="ve-counter-grid">
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="100ms">
                    <i class="fa fa-users"></i>
                    <strong class="counter" data-count="50000">0</strong><span>+</span>
                    <p>Happy Clients</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="200ms">
                    <i class="fa fa-briefcase"></i>
                    <strong class="counter" data-count="4200">0</strong><span>M+</span>
                    <p>Assets Managed</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="300ms">
                    <i class="fa fa-globe"></i>
                    <strong class="counter" data-count="30">0</strong><span>+</span>
                    <p>Countries Served</p>
                </div>
                <div class="ve-counter-item wow fadeInUp" data-wow-delay="400ms">
                    <i class="fa fa-trophy"></i>
                    <strong class="counter" data-count="18">0</strong><span></span>
                    <p>Industry Awards</p>
                </div>
            </div>
        </div>
    </section> -->

    <!-- ===== TESTIMONIALS ===== -->
    <section class="ve-section ve-testimonials-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Client Stories</span>
                <h2>Apa yang di katakan <span>Klien</span></h2>
            </div>
            <div class="ve-testi-grid">
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"VaultEdge transformed how I manage my finances. My portfolio has grown by 22% in just 18 months.
                        Incredible service!"</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(/fe_assets/img/bg-img/32.jpg);">
                        </div>
                        <div><strong>Alex Morgan</strong><span>Entrepreneur</span></div>
                    </div>
                </div>
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"The retirement planning team at VaultEdge gave me total peace of mind. Professional, responsive,
                        and results-driven."</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(/fe_assets/img/bg-img/33.jpg);">
                        </div>
                        <div><strong>Sarah Patel</strong><span>Marketing Director</span></div>
                    </div>
                </div>
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Switched from our old firm and couldn't be happier. Their tax advisory alone saved us thousands
                        in the first year."</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(/fe_assets/img/bg-img/14.jpg);">
                        </div>
                        <div><strong>James Liu</strong><span>Business Owner</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== CTA BANNER ===== -->
    <section class="ve-cta-banner bg-img" style="background-image:url(/fe_assets/img/bg-img/61.png);">
        <div class="ve-cta-overlay"></div>
        <div class="container ve-cta-content">
            <div class="row align-items-center">
                <div class="col-12 col-lg-8">
                    <h2>Siap Mulai Investasi Emas untuk <span>Masa Depan Anda?</span></h2>
                    <p>Mulai investasi emas sekarang dengan panduan yang tepat. Kami siap membantu Anda memilih langkah
                        terbaik untuk masa depan finansial yang lebih aman.</p>
                </div>
                <div class="col-12 col-lg-4 text-lg-right">
                     <a href="https://wa.me/{{ $no_telepon }}" target="_blank" class="ve-btn-primary mt-30">Konsultasikan</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== LATEST INSIGHTS ===== -->
    <section class="ve-section ve-insights-section">
        <div class="container">
            <div class="ve-section-header text-center">
                <span class="ve-section-tag">Blog &amp; News</span>
                <h2>Latest Financial <span>Insights</span></h2>
                <p>Stay ahead with expert commentary, market analysis, and actionable financial tips.</p>
            </div>
            <div class="row">
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="100ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url(/fe_assets/img/bg-img/10.jpg);">
                        </div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Investment</span>
                            <h5><a href="single-post.html">5 Smart Investment Strategies for 2025</a></h5>
                            <p>Discover the top strategies seasoned investors are using to grow wealth in volatile
                                markets.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 26</span>
                                <a href="single-post.html">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url(/fe_assets/img/bg-img/11.jpg);">
                        </div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Credit</span>
                            <h5><a href="single-post.html">Understanding Your Credit Score in 2025</a></h5>
                            <p>Learn the key factors that influence your credit score and how to improve it fast.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 20</span>
                                <a href="single-post.html">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-insight-card">
                        <div class="ve-insight-img bg-img" style="background-image:url(/fe_assets/img/bg-img/12.jpg);">
                        </div>
                        <div class="ve-insight-body">
                            <span class="ve-insight-cat">Savings</span>
                            <h5><a href="single-post.html">Building Wealth in Your 30s — A Full Guide</a></h5>
                            <p>The financial habits and investment moves that set you up for lifelong prosperity.</p>
                            <div class="ve-insight-meta">
                                <span><i class="fa fa-calendar"></i> April 14</span>
                                <a href="single-post.html">Read More <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <!-- ===== NEWSLETTER ===== -->
    <section class="ve-newsletter-section">
        <div class="container">
            <div class="ve-newsletter-wrap">
                <div class="ve-nl-left">
                    <i class="fa fa-envelope-o"></i>
                    <div>
                        <h3>Stay Ahead of the Markets</h3>
                        <p>Weekly insights, tips, and exclusive offers — straight to your inbox.</p>
                    </div>
                </div>
                <div class="ve-nl-right">
                    <form class="ve-nl-form" action="#" method="post">
                        <input type="email" placeholder="Enter your email address" required>
                        <button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
