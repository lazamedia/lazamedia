@extends('layouts.main')

@section('container')
<link rel="stylesheet" href="css/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<script src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script>
    (function() {
        emailjs.init("pQbXVpRuBu6ItQPr3");  // Ganti YOUR_USER_ID dengan User ID Anda
    })();
</script>

  <div class="container">
    {{-- <h1>Kontak Kami</h1> --}}
    <div class="contact-container">
        <div class="contact-info">
            <div class="info-box">
                <h2><i class="fas fa-map-marker-alt"></i>Alamat</h2>
                <div class="contact-item">
                    
                    <p>Surakarta </br>
                    Untuk sementara ini kami bertempatan di kost jatayu surakarta
                    </p>
                </div>
            </div>
            <div class="smaller-box-container">
                <div class="info-box smaller">
                    <h2>Email</h2>
                    <div class="contact-item">
                        
                        <p><i class="fas fa-envelope"></i> info@lazamedia.my.id</p>
                    </div>
                </div>
                <div class="info-box smaller">
                    <h2>Telepon</h2>
                    <div class="contact-item">
                       
                        <p><i class="fas fa-phone"></i> 0821 3474 9670</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-box">
            <h2>Hubungi Kami</h2>
            <form id="contact-form">
                <label for="name">Nama</label>
                <input type="text" id="name" name="name" required>
                
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
                
                <label for="subject">Subjek</label>
                <input type="text" id="subject" name="subject" required>
                
                <label for="message">Pesan</label>
                <textarea id="message" name="message" rows="5" required></textarea>
                
                <button type="submit">Kirim</button>
            </form>
        </div>
    </div>
    <div class="map">
        <h2>Lokasi</h2>
       
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d862.6211870134458!2d110.74818956128694!3d-7.547745400149138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a148d8d70b9d9%3A0xc1e245d411c6ff6a!2sSTMIK%20AMIKOM%20Surakarta!5e0!3m2!1sid!2sid!4v1716025839364!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
</div>


<script>
  document.getElementById('contact-form').addEventListener('submit', function(event) {
      event.preventDefault();
      emailjs.sendForm('service_mc72536', 'template_o2jt8zt', this)  // Ganti YOUR_SERVICE_ID dan YOUR_TEMPLATE_ID dengan ID Anda
          .then(function() {
              alert('Pesan terkirim!');
          }, function(error) {
              alert('Gagal mengirim pesan: ' + JSON.stringify(error));
          });
  });
</script>

@endsection