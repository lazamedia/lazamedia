@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="css/home.css">
<script src="https://cdn.emailjs.com/dist/email.min.js"></script>
    <section class="section">
        <div class="content-box">
            <div class="left-box animate">
                <img src="img/single.png" alt="Logo">
                <h1>MIXU Academy</h1>
                <p>Selamat datang di MIXU Academy – Tempat terbaik untuk mengembangkan kemampuan desain grafis, coding, UI/UX desain, dan strategi periklanan digital Anda. Pelajari dari para ahli dan akses berbagai produk inovatif yang kami tawarkan.</p>
                <div class="stats">
                    <div class="stat-box animate">
                        <h2 class="count" data-target="20">0</h2>
                        <p>Modul</p>
                    </div>
                    <div class="stat-box animate">
                        <h2 class="count" data-target="100">0</h2>
                        <p>Project</p>
                    </div>
                    <div class="stat-box animate">
                        <h2 class="count" data-target="150">0</h2>
                        <p>User</p>
                    </div>
                </div>
            </div>
            <div class="right-box animate">
                <img src="img/hero2.png" alt="Gambar">
            </div>
        </div>
    </section>
    <script> 
        document.addEventListener("DOMContentLoaded", function() {
            const elements = document.querySelectorAll('.animate');
            elements.forEach((el, index) => {
                setTimeout(() => {
                    el.classList.add('fade-in');
                    if (el.classList.contains('stat-box')) {
                        startCounting(el.querySelector('.count'));
                    }
                }, index * 300); // delay setiap elemen 300ms
            });
        });

        function startCounting(element) {
            const target = +element.getAttribute('data-target');
            const increment = target / 200; // adjust this for speed
            let count = 0;

            const updateCount = () => {
                count += increment;
                if (count < target) {
                    element.innerText = Math.ceil(count);
                    requestAnimationFrame(updateCount);
                } else {
                    element.innerText = target;
                }
            };

            updateCount();
        }
    </script>
<section class="join-section">
    <div class="join-container">
        <div class="join-text animate">
            <h2>Ayo Bergabung Sekarang Juga!</h2>
            {{-- <p>Dapatkan manfaat eksklusif dengan bergabung bersama kami.</p> --}}
        </div>
        <div class="join-button animate">
            <button class="join-btn" id="joinBtn" >Gabung</button>
        </div>
    </div>
</section>
{{-- POPUP FORM --}}
<div id="popupForm" class="popup-form">
    <div class="popup-content">
        <span class="close-btn" id="closeBtn">&times;</span>
        <h2>Form Pendaftaran</h2>
        <form id="contact-form">
            <label for="name">Nama</label>
            <input type="text" id="name" name="name" placeholder="Nama Lengkap" required>
            
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email Anda" required>
            
            <label for="subject">Subjek</label>
            <input type="text" id="subject" name="subject" placeholder="Contoh : Saya Ingin Daftar" required>
            
            <label for="message">Pesan</label>
            <textarea id="message" name="message" rows="5" placeholder="Alasan / Pertanyaan lain..." required></textarea>
            
            <button type="submit">Kirim</button>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/emailjs-com@2.6.4/dist/email.min.js"></script>
<script>
    (function(){
        emailjs.init("pQbXVpRuBu6ItQPr3");
    })();

    document.getElementById('joinBtn').addEventListener('click', function() {
        document.getElementById('popupForm').style.display = 'flex';
    });

    document.getElementById('closeBtn').addEventListener('click', function() {
        document.getElementById('popupForm').style.display = 'none';
    });

    document.getElementById('popupForm').addEventListener('click', function(event) {
        if (event.target === this) {
            document.getElementById('popupForm').style.display = 'none';
        }
    });

    document.getElementById('contact-form').addEventListener('submit', function(event) {
        event.preventDefault();
        emailjs.sendForm('service_mc72536', 'template_o2jt8zt', this)  // Ganti YOUR_SERVICE_ID dan YOUR_TEMPLATE_ID dengan ID Anda
            .then(function() {
                alert('Pesan terkirim! Silahkan close dan Tunggu Jawaban diEmail anda :) ');
            }, function(error) {
                alert('Gagal mengirim pesan: ' + JSON.stringify(error));
            });
    });
</script>

{{-- LATAR BELAKANG --}}
<div class="judul-lb">
    <div class="judullb">Latar Belakang</div>
</div>
<section class="latarbelakang">
    <div class="boxlb boxlb-left">
        <div class="content">
            <h2>Latar Belakang</h2>
            <p>Halo, saya Lazuardi Mandegar. Sebagai seorang yang belajar web development, desain, UI/UX, dan ads management secara mandiri, saya memahami betapa sulitnya menemukan sumber belajar yang terstruktur dan mudah dipahami..</p>
        </div>
        <img src="img/lb.png" alt="Gambar Kiri">
    </div>
    <div class="boxlb boxlb-right">
        <img src="img/motivasi.png" alt="Gambar Kanan">
        <div class="content">
            <h2>Motivasi</h2>
            <p>Saya membuat MIXU Academy untuk membantu pemula belajar keterampilan ini dengan lebih mudah dan maksimal. Dengan konten yang terstruktur dan mudah diakses, saya berharap dapat memudahkan proses belajar Anda dan membantu Anda mencapai tujuan.</p>
        </div>
    </div>
    <div class="line"></div>
</section>


{{-- FLIP BOX --}}
        <section class="box1">
            <div class="box" onclick="window.location.href='#'">
                <div class="box-inner">
                    <div class="box-front">
                        <i class="fas fa-paint-brush icon"></i>
                        <h2>Desain Grafis</h2>
                    </div>
                    <div class="box-back">
                        
                        <p>Visualize Your Imagination</p>
                    </div>
                </div>
            </div>
            <div class="box" onclick="window.location.href='#'">
                <div class="box-inner">
                    <div class="box-front">
                        <i class="fas fa-code icon"></i>
                        <h2>Programmer</h2>
                    </div>
                    <div class="box-back">
                        <p>Innovate with Code</p>
                    </div>
                </div>
            </div>
            <div class="box" onclick="window.location.href='#'">
                <div class="box-inner">
                    <div class="box-front">
                        <i class="fas fa-bullhorn icon"></i>
                        <h2>Ads Manager</h2>
                    </div>
                    <div class="box-back">
                        <p>Boost Your Brand Visibility</p>
                    </div>
                </div>
            </div>
            <div class="box" onclick="window.location.href='#'">
                <div class="box-inner">
                    <div class="box-front">
                        <i class="fas fa-drafting-compass icon"></i>
                        <h2>UI UX Desain</h2>
                    </div>
                    <div class="box-back">
                        <p>Where Design Meets Usability</p>
                    </div>
                </div>
            </div>
        </section>


{{-- KEUNTUNGAN --}}
<section class="c-keuntungan">
    <div class="left-keuntungan">
        <div class="video-keuntungan">
            <iframe src="https://www.youtube.com/embed/aG01KIXWrbU?si=TIqUa8621J_SA1-S" frameborder="0" allowfullscreen></iframe>
            {{-- <div class="u-animation"></div> --}}
        </div>
    </div>
    <div class="right-keuntungan">
        <h2>Keuntungan bergabung bersama kami</h2>
        <div class="b-untung">
            <img src="img/vidio.png" alt="YouTube Logo">
            <p>Vidio Pembelajaran</p>
        </div>
        <div class="b-untung">
            <img src="img/buku.png" alt="Google Drive Logo">
            <p>Modul materi lengkap</p>
        </div>
        <div class="b-untung">
            <img src="img/grup.png" alt="Additional Content Logo">
            <p>Grup support aktiv</p>
        </div>
    </div>
</section>


{{-- BENEFIT --}}
        <section class="benefit">
            <div class="benefit-box" >
                <i class="icon-benefit fas fa-unlock-alt"></i>
                <h3 >Akses Selamanya</h3>
                <p>Dapatkan akses tak terbatas ke semua konten kami selamanya.</p>
            </div>
            <div class="benefit-box">
                <i class="icon-benefit fas fa-map-signs"></i>
                <h3>Roadmap Study</h3>
                <p>Ikuti panduan belajar yang terstruktur untuk mencapai tujuan Anda.</p>
            </div>
            <div class="benefit-box">
                <i class="icon-benefit fas fa-headset"></i>
                <h3>Customer Service</h3>
                <p>Dapatkan bantuan kapan saja dengan layanan pelanggan 24/7 kami.</p>
            </div>
        </section>

{{-- FASILITATOR --}}
<section class="section-pengajar">
    <h2>Fasilitator</h2>
    <div class="box-pengajar">

        <div class="profile-card">
            <img src="img/logo.jpg" alt="Profile 1" class="profile-pic">
            <h3 class="name">Lazuardi Mandegar</h3>
            <p class="position">UI/UX Designer</p>
        </div>

    </div>
</section>



{{-- SOWTFAWARE --}}



<script src="https://kit.fontawesome.com/a076d05399.js"></script>
   



@endsection
