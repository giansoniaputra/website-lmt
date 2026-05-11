@extends('fe.layouts.main')

@section('container')

<!-- HERO -->
<section class="ve-page-hero" style="background-image:url(/fe_assets/img/bg-img/21.jpg);">
    <div class="ve-page-hero-overlay"></div>

    <div class="container ve-page-hero-content">
        <span class="ve-section-tag">Our Product</span>

        <h1>
            Financial <span>Produk Emas</span><br>
            Untuk Masa Depan Anda
        </h1>

        <nav aria-label="breadcrumb">
            <ol class="ve-breadcrumb">
                <li>
                    <a href="/">Home</a>
                </li>

                <li class="active">
                    Product
                </li>
            </ol>
        </nav>
    </div>
</section>

<!-- PRODUCT -->
<section class="ve-section">
    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <div class="row">

                    @for($i = 0; $i < 10; $i++)

                    <!-- CARD -->
                    <div class="col-lg-3 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-delay="100ms">

                        <div class="ve-insight-card h-100">

                            <!-- IMAGE -->
                            <div class="ve-insight-img bg-img"
                                style="background-image:url(/fe_assets/img/bg-img/mulai.png);">
                            </div>

                            <!-- BODY -->
                            <div class="ve-insight-body">

                                <span class="ve-insight-cat">
                                    Red Mark
                                </span>

                                <h6 class="mb-3">
                                    <a href="#">
                                        Antam 50 Gram Emas Logam Mulia Press Certieye
                                    </a>
                                </h6>

                                <div class="ve-insight-meta">

                                    <button type="button"
                                        class="btn btn-warning btn-sm"
                                        data-toggle="modal"
                                        data-target="#exampleModal{{$i}}">

                                        Beli Sekarang!
                                        <i class="fa fa-arrow-right ml-1"></i>

                                    </button>

                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- MODAL -->
                    <div class="modal fade"
                        id="exampleModal{{$i}}"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="exampleModalLabel{{$i}}"
                        aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered" role="document">

                            <div class="modal-content">

                                <!-- HEADER -->
                                <div class="modal-header">

                                    <h5 class="modal-title"
                                        id="exampleModalLabel{{$i}}">

                                        Antam Redmark 50gr

                                    </h5>

                                    <button type="button"
                                        class="close"
                                        data-dismiss="modal"
                                        aria-label="Close">

                                        <span aria-hidden="true">&times;</span>

                                    </button>

                                </div>

                                <!-- BODY -->
                                <div class="modal-body text-center">

                                    <img src="/fe_assets/img/bg-img/mulai.png"
                                        class="img-fluid rounded mb-3"
                                        alt="Antam Redmark 50gr">

                                    <p class="mb-0">
                                        Antam 50 Gram Emas Logam Mulia Press Certieye
                                        dengan sertifikat resmi dan kualitas terbaik.
                                    </p>

                                </div>

                                <!-- FOOTER -->
                                <div class="modal-footer">

                                    <button type="button"
                                        class="btn btn-secondary"
                                        data-dismiss="modal">

                                        Close

                                    </button>

                                    <a href="https://wa.me/6282128055123?text=Halo%20Admin,%20saya%20ingin%20memesan%20Antam%20Redmark%2050gr"
                                        target="_blank"
                                        class="btn btn-success">

                                        Pesan Sekarang!

                                    </a>

                                </div>

                            </div>
                        </div>
                    </div>

                    @endfor

                </div>

                <!-- PAGINATION -->
                <div class="ve-pagination mt-4">

                    <a href="#" class="active">1</a>

                    <a href="#">2</a>

                    <a href="#">3</a>

                    <a href="#">
                        <i class="fa fa-chevron-right"></i>
                    </a>

                </div>

            </div>

        </div>

    </div>
</section>

@endsection