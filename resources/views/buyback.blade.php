@extends('fe.layouts.main')
@section('container')
    <!-- ===== HERO: Split layout — left text, right image panel ===== -->
    <div class="ve-trust-bar">
        <div class="ve-trust-inner">
            <span><i class="fa fa-shield"></i> Logam Mulia Tasikmalaya</span>
            <span><i class="fa fa-check-circle"></i> Teman Investasi</span>
            <span><i class="fa fa-users"></i> Pilih yang terpercaya</span>
            <span><i class="fa fa-shield"></i> Logam Mulia Tasikmalaya</span>
            <span><i class="fa fa-check-circle"></i> Teman Investasi</span>
            <span><i class="fa fa-users"></i> Pilih yang terpercaya</span>
            <span><i class="fa fa-shield"></i> Logam Mulia Tasikmalaya</span>
            <span><i class="fa fa-check-circle"></i> Teman Investasi</span>
            <span><i class="fa fa-users"></i> Pilih yang terpercaya</span>
            <span><i class="fa fa-shield"></i> Logam Mulia Tasikmalaya</span>
            <span><i class="fa fa-check-circle"></i> Teman Investasi</span>
            <span><i class="fa fa-users"></i> Pilih yang terpercaya</span>
        </div>
    </div>

    <!-- ===== SERVICES GRID (new card layout) ===== -->

    <!-- ===== WHY US (two-column: image left, content right) ===== -->
    <section class="ve-section ve-whyus-section">
        <div class="container">
            <div class="row align-items-center">
                <!-- Image Side -->
                <div class="col-12 col-lg-5">
                    <div class="ve-whyus-img-wrap wow fadeInLeft" data-wow-delay="100ms">
                        <div class="ve-whyus-img-main bg-img" style="background-image:url(/fe_assets/img/bg-img/Your.png);">
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
                        <span class="ve-section-tag">Kenapa LMT?</span>
                        <h2>Pilihan Tepat untuk <span>Buyback Emas</span> yang Aman</h2>
                        <p>Kami menghadirkan layanan buyback emas yang aman, transparan, dan terpercaya untuk membantu
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
                       <a href="https://wa.me/6282128055123?text=Halo%20Admin,%20saya%20ingin%20bertanya%20terkait%20buyback%20emas."
   target="_blank"
   class="ve-btn-primary mt-30">
    Jual Emas Sekarang!
</a>
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
                    <p>"Harga Kompetitif aman dan percaya kalo soal emas ya di Logam Mulia Tasikmalaya"</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(/fe_assets/img/bg-img/user.png);">
                        </div>
                        <div><strong>Hamni R.H</strong><span>Karyawan Swasta</span></div>
                    </div>
                </div>
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Pokonya ga nyesel beli aset emas di Logam Mulia Tasikmalaya. Next Mau order lagi pokoknyaaaa"</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(/fe_assets/img/bg-img/user.png);">
                        </div>
                        <div><strong>Gian</strong><span>Karyawan Swasta</span></div>
                    </div>
                </div>
                <div class="ve-testi-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                    <p>"Wajib cobain nanti ketagihan investasi emas apalagi beli dan buybacknya di Logam Mulia Tasikmalaya"</p>
                    <div class="ve-testi-author">
                        <div class="ve-testi-avatar bg-img" style="background-image:url(/fe_assets/img/bg-img/user.png);">
                        </div>
                        <div><strong>Agung P</strong><span>Co Founder</span></div>
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
                     <a href="https://wa.me/6282128055123?text=Hello%20kak%2C%20saya%20ingin%20konsultasi%20terkait%20emasnya" 
   target="_blank" 
   class="ve-btn-primary mt-30">
    Konsultasi Sekarang!
</a>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== LATEST INSIGHTS ===== -->
    <!-- <section class="ve-section ve-insights-section">
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
    </section> -->

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
