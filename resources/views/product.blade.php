@extends('fe.layouts.main')
@section('container')
    <section class="ve-page-hero" style="background-image:url(/fe_assets/img/bg-img/21.jpg);">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Our Product</span>
            <h1>Financial <span>Produk Emas </span><br>Untuk Masa Depan Anda</h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="/">Home</a></li>
                    <li class="active">Product</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="ve-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        @for($i=0;$i<10;$i++)
                        <div class="col-sm-3 wow fadeInUp" data-wow-delay="100ms">
                            <div class="ve-insight-card">
                                <div class="ve-insight-img bg-img"
                                    style="background-image:url(/fe_assets/img/bg-img/lmt.jpg);"></div>
                                <div class="ve-insight-body"><span class="ve-insight-cat">Red Mark</span>
                                    <h6><a href="single-post.html">Antam 50 Gram Emas Logam Mulia Press Certieye</a></h6>
                                    <p></p>
                                    <div class="ve-insight-meta"><span></span><a
                                            href="single-post.html">Read More <i class="fa fa-arrow-right"></i></a></div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                    <div class="ve-pagination"><a href="#" class="active">1</a><a href="#">2</a><a
                            href="#">3</a><a href="#"><i class="fa fa-chevron-right"></i></a></div>
                </div>
                <!-- <div class="col-12 col-lg-4">
                    <div class="ve-sidebar">
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Search</h5>
                            <div class="ve-search-box"><input type="text" placeholder="Search articles..."><button><i
                                        class="fa fa-search"></i></button></div>
                        </div>
                        <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Categories</h5>
                            <ul class="ve-cat-list">
                                <li><a href="#">Investment <span>12</span></a></li>
                                <li><a href="#">Wealth Management <span>8</span></a></li>
                                <li><a href="#">Retirement <span>6</span></a></li>
                                <li><a href="#">Tax Advisory <span>9</span></a></li>
                                <li><a href="#">Market Analysis <span>15</span></a></li>
                                <li><a href="#">Savings Tips <span>11</span></a></li>
                            </ul>
                        </div>
                        {{-- <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Recent Posts</h5>
                            <div class="ve-recent-post">
                                <div class="ve-rp-img bg-img" style="background-image:url(/fe_assets/img/bg-img/10.jpg);">
                                </div>
                                <div><a href="single-post.html">5 Smart Investment Strategies for 2025</a><span><i
                                            class="fa fa-calendar"></i> April 26</span></div>
                            </div>
                            <div class="ve-recent-post">
                                <div class="ve-rp-img bg-img" style="background-image:url(/fe_assets/img/bg-img/11.jpg);">
                                </div>
                                <div><a href="single-post.html">Understanding Your Credit Score</a><span><i
                                            class="fa fa-calendar"></i> April 20</span></div>
                            </div>
                            <div class="ve-recent-post">
                                <div class="ve-rp-img bg-img" style="background-image:url(/fe_assets/img/bg-img/12.jpg);">
                                </div>
                                <div><a href="single-post.html">Building Wealth in Your 30s</a><span><i
                                            class="fa fa-calendar"></i> April 14</span></div>
                            </div>
                        </div> --}}
                        {{-- <div class="ve-sidebar-widget">
                            <h5 class="ve-sidebar-title">Popular Tags</h5>
                            <div class="ve-tags"><a href="#">Investing</a><a href="#">Wealth</a><a
                                    href="#">Retirement</a><a href="#">Taxes</a><a href="#">Savings</a><a
                                    href="#">Portfolio</a><a href="#">Markets</a><a
                                    href="#">Planning</a><a href="#">ETFs</a>
                            </div>
                        </div> --}}
                    </div>
                </div> -->
            </div>
        </div>
    </section>
    <section class="ve-newsletter-section">
        <div class="container">
            <div class="ve-newsletter-wrap">
                <div class="ve-nl-left"><i class="fa fa-envelope-o"></i>
                    <div>
                        <h3>Stay Ahead of the Markets</h3>
                        <p>Weekly insights — straight to your inbox.</p>
                    </div>
                </div>
                <div class="ve-nl-right">
                    <form class="ve-nl-form" action="#" method="post"><input type="email"
                            placeholder="Enter your email address" required><button type="submit">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
