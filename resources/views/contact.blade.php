@extends('fe.layouts.main')
@section('container')
    <section class="ve-page-hero" style="background-image:url(/fe_assets/img/bg-img/333.png);">
        <div class="ve-page-hero-overlay"></div>
        <div class="container ve-page-hero-content">
            <span class="ve-section-tag">Get In Touch</span>
            <h1>Kami Senang Mendengar <span>Pendapatmu</span></h1>
            <nav aria-label="breadcrumb">
                <ol class="ve-breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Contact</li>
                </ol>
            </nav>
        </div>
    </section>

    <section class="ve-contact-cards-section">
        <div class="container">
            <div class="ve-contact-cards-grid">
                <a href="https://maps.app.goo.gl/VvgBXKYpcthkcmLm8" target="_blank">
                    <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="100ms">
                        <div class="ve-ci-icon"><i class="fa fa-map-marker"></i></div>
                        <h5>Visit Our Office</h5>
                        <p>Perumahan Bumi Parahyangan Blok P. 3, Setiaratu, Kec. Cibeureum, Kab. Tasikmalaya, Jawa Barat
                            46196
                        </p>
                    </div>
                </a>
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="250ms">
                    <div class="ve-ci-icon"><i class="fa fa-phone"></i></div>
                    <h5>Call Us</h5>
                    <p>+1 800 555 0199<br><small>Mon–Fri, 9am – 6pm PST</small></p>
                </div>
                <div class="ve-contact-info-card wow fadeInUp" data-wow-delay="400ms">
                    <div class="ve-ci-icon"><i class="fa fa-envelope"></i></div>
                    <h5>Email Us</h5>
                    <p>hello@vaultedge.com<br><small>We reply within 24 hours</small></p>
                </div>
            </div>
        </div>
    </section>

    <section class="ve-section ve-contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-7 wow fadeInLeft" data-wow-delay="100ms">
                    <div class="ve-contact-form-wrap">
                        <span class="ve-section-tag">Send a Message</span>
                        <h2>Konsultasi <span>Investasi Emas Gratis</span></h2>
                        <p>Isi formulir berikut dan tim kami akan menghubungi Anda untuk membantu memulai investasi emas
                            dengan aman dan tepat.</p>
                        <form class="ve-contact-form" action="javascript:;" id="send-messange">
                            <div class="ve-form-row">
                                <div class="ve-form-group"><label>Nama Anda</label><input type="text"
                                        placeholder="Masukan Nama Anda" required name="nama"></div>
                                <div class="ve-form-group"><label>Nomor Telepon</label><input type="tel"
                                        placeholder="Masukan Nomor Telepon" name="telepon"></div>
                            </div>
                            <div class="ve-form-group"><label>Pesan Kamu</label>
                                <textarea rows="5" placeholder="Masukan pesan anda" name="pesan"></textarea>
                            </div>
                            <button type="submit" class="ve-btn-primary">Kirim Pesan <i
                                    class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-5 wow fadeInRight" data-wow-delay="200ms">
                    <div class="ve-contact-aside">
                        <div class="ve-ca-box">
                            <h4>Why Clients Choose Us</h4>
                            <ul class="ve-ca-list">
                                <li><i class="fa fa-check-circle"></i> Konsultasi Gratis</li>
                                <li><i class="fa fa-check-circle"></i> Respon Cepat</li>
                                <li><i class="fa fa-check-circle"></i> Tanpa Tekanan Penjualan</li>
                                <li><i class="fa fa-check-circle"></i> Pelayanan Ramah & Profesional</li>
                                <li><i class="fa fa-check-circle"></i> Harga Transparan</li>
                            </ul>
                        </div>
                        {{-- <div class="ve-ca-hours">
                            <h5><i class="fa fa-clock-o"></i> Office Hours</h5>
                            <ul>
                                <li><span>Monday – Friday</span><strong>9:00 AM – 6:00 PM</strong></li>
                                <li><span>Saturday</span><strong>10:00 AM – 2:00 PM</strong></li>
                                <li><span>Sunday</span><strong>Closed</strong></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.getElementById("send-messange").addEventListener("submit", function(e) {
            e.preventDefault();

            // Ambil nilai input
            const nama = document.querySelector("input[name='nama']").value;
            const telepon = document.querySelector("input[name='telepon']").value;
            const pesan = document.querySelector("textarea[name='pesan']").value;

            // Format pesan
            let text = `Halo, saya ingin menghubungi:\n\n`;
            text += `Nama: ${nama}\n`;
            text += `No HP: ${telepon}\n`;
            text += `Pesan: ${pesan}`;

            // Encode URL
            const encodedText = encodeURIComponent(text);

            // Ganti dengan nomor WhatsApp tujuan (format internasional tanpa +)
            const nomor = @json($no_telepon);

            // URL WhatsApp
            const url = `https://wa.me/${nomor}?text=${encodedText}`;

            // Buka di tab baru
            window.open(url, "_blank");
        });
    </script>
@endsection
