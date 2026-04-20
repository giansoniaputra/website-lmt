<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="VaultEdge - Premium financial planning and investment management HTML template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>LMTasikmalaya</title>

    <link rel="icon" href="/fe_assets/img/core-img/favicon.ico">
    <link rel="stylesheet" href="/fe_assets/style.css">
    <link rel="stylesheet" href="/fe_assets/css/custom-override.css">
</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- ===== NAVBAR (single dark bar, logo left, nav center, CTA right) ===== -->
    <header class="ve-header" id="ve-sticky">
        <div class="container-fluid ve-nav-wrap">
            <!-- Logo -->
            <div class="ve-logo">
                <a href="/">
                    <span class="ve-logo-icon">LM</span>
                    <span class="ve-logo-text">Tasikmalaya<strong></strong></span>
                </a>
            </div>

            <!-- Nav Links -->
            <nav class="ve-nav">
                <ul>
                    <li><a href="/" {{ $title == 'Home' ? 'class=active' : '' }}>Home</a></li>
                    <li><a href="/about" {{ $title == 'About Us' ? 'class=active' : '' }}>About Us</a></li>
                    <li><a href="/service" {{ $title == 'Service' ? 'class=active' : '' }}>Our Services</a></li>
                    <li><a href="/product" {{ $title == 'Product' ? 'class=active' : '' }}>Product</a></li>
                    <li><a href="/contact" {{ $title == 'Contact' ? 'class=active' : '' }}>Contact</a></li>
                </ul>
            </nav>

            <!-- CTA -->
            <div class="ve-nav-cta">
                <a href="https://wa.me/{{ $no_telepon }}" target="_blank" class="ve-cta-btn">Contact Us <i
                        class="fa fa-arrow-right"></i></a>
            </div>

            <!-- Mobile Toggle -->
            <button class="ve-toggler" id="ve-toggle">
                <span></span><span></span><span></span>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="ve-mobile-menu" id="ve-mobile-menu">
            <ul>
                <li><a href="/" {{ $title == 'Home' ? 'class=active' : '' }}>Home</a></li>
                <li><a href="/about" {{ $title == 'About Us' ? 'class=active' : '' }}>About Us</a></li>
                <li><a href="/service" {{ $title == 'Service' ? 'class=active' : '' }}>Our Services</a></li>
                <li><a href="#" {{ $title == 'Product' ? 'class=active' : '' }}>Product</a></li>
                <li><a href="#" {{ $title == 'Contact' ? 'class=active' : '' }}>Contact</a></li>
            </ul>
        </div>
    </header>



    <!-- ===== MARQUEE TRUST BAR ===== -->
    @yield('container')

    <!-- ===== FOOTER (dark, 4-column) ===== -->
    <footer class="ve-footer">
        <div class="container">
            <div class="row">
                <!-- Col 1: Brand -->
                <div class="col-12 col-sm-6 col-lg-4 mb-50">
                    <div class="ve-footer-brand">
                        <a href="/" class="ve-footer-logo">
                            <span class="ve-logo-icon">LM</span>
                            <span class="ve-logo-text">Tasikmalaya<strong></strong></span>
                        </a>
                        <p>Investasi emas terpercaya bersama Logam Mulia Tasikmalaya untuk lindungi nilai aset dan raih
                            keuntungan
                            jangka panjang.</p>
                        <div class="ve-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                <!-- Col 2: Quick Links -->
                <div class="col-12 col-sm-6 col-lg-2 mb-50">
                    <h5 class="ve-footer-title">Quick Links</h5>
                    <ul class="ve-footer-links">
                        <li><a href="/">Home</a></li>
                        <li><a href="/about">About Us</a></li>
                        <li><a href="/service">Services</a></li>
                        <li><a href="/product">Product</a></li>
                        <li><a href="/contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 mb-50">
                    <h5 class="ve-footer-title">Get In Touch</h5>
                    <ul class="ve-footer-contact">
                        <li><i class="fa fa-map-marker"></i> Perumahan Bumi Parahyangan Blok P. 5, Setiaratu, Kec.
                            Cibeureum, Kab. Tasikmalaya, Jawa Barat 46196</li>
                        <li><i class="fa fa-phone"></i> +{{ $no_telepon }}</li>
                        <li><i class="fa fa-envelope"></i> hello@vaultedge.com</li>
                        <li><i class="fa fa-clock-o"></i> Mon–Fri, 9am – 6pm</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Footer Bottom Bar -->
        <div class="ve-footer-bottom">
            <div class="container">
                <div class="ve-footer-bottom-inner">
                    <p>Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> VaultEdge. All Rights Reserved <a
                            href="https://github.com/Rabina-Vishwakarma/" class="text-white" target="_blank">Rabina
                            Vishwakarma</a> • Distributed by <a href="https://themewagon.com" class="text-white"
                            target="_blank">ThemeWagon</a>
                    </p>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="/fe_assets/js/jquery/jquery-2.2.4.min.js"></script>
    <script src="/fe_assets/js/bootstrap/popper.min.js"></script>
    <script src="/fe_assets/js/bootstrap/bootstrap.min.js"></script>
    <script src="/fe_assets/js/plugins/plugins.js"></script>
    <script src="/fe_assets/js/active.js"></script>
    <script src="/fe_assets/js/vaultedge.js"></script>
</body>

</html>
