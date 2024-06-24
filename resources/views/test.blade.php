@extends('layouts.main')

@section('container')

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .footer {
        display: flex;
        flex-direction: column;
        align-items: center;
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
    }
    .footer-boxes {
        display: flex;
        flex-direction: column;
        width: 100%;
    }
    .footer-box {
        flex: 1;
        padding: 10px;
        align-content: center;
        align-items: center;
    }
    .footer-box:first-child img {
        width: 50px;
        vertical-align: middle;
    }
    .footer-box:first-child div {
        display: inline-block;
        vertical-align: middle;
        margin-left: 10px;
    }
    .social-media a {
        display: inline-block;
        margin: 0 5px;
        color: white;
    }
    .social-media {
        color: white;
    }
    .social-media img {
        width: 24px;
        height: 24px;
    }
    .footer-bottom {
        margin-top: 20px;
        display: flex;
        justify-content: space-between;
        width: 100%;
    }
    .footer-bottom a {
        color: white;
        text-decoration: none;
        margin: 0 10px;
    }
    @media(min-width: 768px) {
        .footer-boxes {
            flex-direction: row;
            justify-content: space-around;
        }
        .footer-box {
            text-align: left;
        }
        .footer-bottom {
            justify-content: space-between;
        }
    }
</style>


<footer class="footer">
    <div class="footer-boxes">
        <div class="footer-box">
            <img src="logo.png" alt="Logo">
            <div>Nama Perusahaan</div>
        </div>
        <div class="footer-box">
            <h3>About</h3>
            <p>Deskripsi singkat tentang perusahaan atau situs web.</p>
        </div>
        <div class="footer-box">
            <h3>Follow Us</h3>
            <div class="social-media">
                <a href="https://www.youtube.com/@cyberamikom" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://www.instagram.com/ukm_cyber/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-whatsapp" target="_blank"></i></a>
                <a href="https://cyberamikom.org/" target="_blank"><i class="fas fa-globe"></i></a>
                <a href="https://github.com/Cyber-STMIK-Amikom-Surakarta" target="_blank"><i class="fab fa-github"></i></a>
                
                <a href="https://discord.com/invite/yTve7S2tnJ?fbclid=PAAaYyZyulfLRCRljaYO4MnJf2JbcPwONDpUukY2BiMOywb0I52ajaBFYzRqw_aem_AXYeO0-Xnw6MfF1raEO8m2fIdTlst2INnxdXkuB9myTbCQfqcbTUvLrMz8o4P_l-tMg" target="_blank"><i class="fab fa-discord"></i></a>
</div>
            <p>Alamat Kami</p>
        </div>
    </div>
    <div class="footer-bottom">
        <span>&copy; 2024 Nama Perusahaan</span>
        <div>
            <a href="index.html">Home</a>
            <a href="about.html">About</a>
            <a href="contact.html">Contact</a>
            <!-- Tambahkan link lainnya sesuai kebutuhan -->
        </div>
    </div>
</footer>

@endsection