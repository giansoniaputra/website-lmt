@extends('fe.layouts.main')

@section('container')
    <!-- HERO -->
    <section class="ve-page-hero" style="background-image:url(/fe_assets/img/bg-img/21.jpg);">
        <div class="ve-page-hero-overlay"></div>

        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Our Product</span>

            <h1>
                Investasi <span>Emas</span><br>
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

                        @foreach ($products as $i => $product)
                            <!-- CARD -->
                            <div class="col-lg-3 col-md-6 col-sm-12 mb-4 wow fadeInUp" data-wow-delay="100ms">
                                <!-- RIBBON AVAILABLE -->
                                @if ($product->stok > 0)
                                    <span
                                        style="
                            position:absolute;
                            top:1px;
                            right:-5px;
                            transform:rotate(0deg);
                            background:#d4af37;
                            color:#fff;
                            padding:4px 10px;
                            font-size:10px;
                            font-weight:;
                            z-index:10;
                            letter-spacing:1px;
                            box-shadow:0 2px 8px rgba(0,0,0,0.2);
                            ">
                                        Ready Stok
                                    </span>
                                @else
                                    <span
                                        style="
                            position:absolute;
                            top:1px;
                            right:-5px;
                            transform:rotate(0deg);
                            background:red;
                            color:#fff;
                            padding:4px 10px;
                            font-size:10px;
                            font-weight:;
                            z-index:10;
                            letter-spacing:1px;
                            box-shadow:0 2px 8px rgba(0,0,0,0.2);
                            ">
                                        Habis
                                    </span>
                                @endif

                                <div class="ve-insight-card h-100">

                                    <!-- IMAGE -->
                                    <div class="ve-insight-img bg-img"
                                        style="background-image:url(/storage/{{ $product->photo }});">
                                    </div>

                                    <!-- BODY -->
                                    <div class="ve-insight-body">

                                        <span class="ve-insight-cat">
                                            Brand Emas
                                        </span>

                                        <h6 class="mb-3">
                                            <a href="#">
                                                {{ short_text($product->deskripsi) }}
                                            </a>
                                        </h6>

                                        <div class="ve-insight-meta">
                                            <button type="button" class="btn btn-sm" data-toggle="modal"
                                                data-target="#exampleModal{{ $i }}"
                                                style="
                                                background:#d4af37;
                                                color:#fff;
                                                border:none;
                                                padding:8px 16px;
                                                font-weight:500;
                                                border-radius:6px;
                                                transition:0.3s;
                                            "
                                                onmouseover="this.style.background='#bf9b30'"
                                                onmouseout="this.style.background='#d4af37'">

                                                Beli Sekarang!
                                                <i class="fa fa-arrow-right ml-1"></i>

                                            </button>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <!-- MODAL -->
                            <div class="modal fade" id="exampleModal{{ $i }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel{{ $i }}" aria-hidden="true">

                                <div class="modal-dialog modal-dialog-centered" role="document">

                                    <div class="modal-content">

                                        <!-- HEADER -->
                                        <div class="modal-header">

                                            <h5 class="modal-title" id="exampleModalLabel{{ $i }}">

                                                {{ $product->judul }}

                                            </h5>

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                                                <span aria-hidden="true">&times;</span>

                                            </button>

                                        </div>
                                        <div class="modal-body text-center position-relative">

                                            <!-- Badge Stock -->
                                            <span class="badge position-absolute"
                                                style="top:15px; right:15px; background:#d4af37; color:#fff; font-size:14px; padding:8px 12px;">
                                                Stok : {{ $product->stok }}
                                            </span>

                                            <img src="/storage/{{ $product->photo }}" class="img-fluid rounded mb-3"
                                                alt="Antam Redmark 50gr">
                                            <span class="ve-insight-cat">
                                                {{ $product->jenis }}
                                            </span>
                                            <p class="mb-0">
                                                {{ $product->deskripsi }}
                                            </p>

                                        </div>
                                        <!-- FOOTER -->
                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">

                                                Keluar

                                            </button>

                                            <a href="https://wa.me/6282128055123?text=Halo%20Admin,%20saya%20ingin%20memesan%20{{ $product->judul }}"
                                                target="_blank" class="btn btn-success">

                                                Pesan Sekarang!

                                            </a>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>

                    <!-- PAGINATION -->
                    {{ $products->links() }}
                    {{-- <div class="ve-pagination mt-4">

                        <a href="#" class="active">1</a>

                        <a href="#">2</a>

                        <a href="#">3</a>

                        <a href="#">
                            <i class="fa fa-chevron-right"></i>
                        </a>

                    </div> --}}

                </div>

            </div>

        </div>
    </section>
@endsection
