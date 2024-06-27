<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<footer>
  <div class="footer-content">
      <div class="footer-left">
          <h2 style="color: rgb(255, 255, 255)">MIXU ACADEMY</h2>
          <p style="font-size: 1.2em;">Kreativitas Tak Terbatas Kesempatan Tanpa Akhir</p>
      </div>
      <div class="footer-right">
          <div class="sosmed">
              <h3 style="color: rgb(255, 255, 255)">Sosial Media</h3>
              <div class="sosmed-icons">
                  <a href="https://www.youtube.com/@cyberamikom" target="_blank"><i class="fab fa-youtube"></i></a>
                  <a href="https://www.instagram.com/ukm_cyber/" target="_blank"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-whatsapp" target="_blank"></i></a>
                  <a href="https://cyberamikom.org/" target="_blank"><i class="fas fa-globe"></i></a>
                  <a href="https://github.com/Cyber-STMIK-Amikom-Surakarta" target="_blank"><i class="fab fa-github"></i></a>
                  
                  <a href="https://discord.com/invite/yTve7S2tnJ?fbclid=PAAaYyZyulfLRCRljaYO4MnJf2JbcPwONDpUukY2BiMOywb0I52ajaBFYzRqw_aem_AXYeO0-Xnw6MfF1raEO8m2fIdTlst2INnxdXkuB9myTbCQfqcbTUvLrMz8o4P_l-tMg" target="_blank"><i class="fab fa-discord"></i></a>
              </div>
          </div>
          <div class="address">
              <h3 style="color: rgb(255, 255, 255)">Alamat Sekretariat</h3>
              <p> Kos Jatayu</p>
          </div>
      </div>
  </div>
  <div class="footer-bottom">
      <p>&copy; 2024 Lazuardi Mandegar. All rights reserved.</p>
  </div>
</footer>

<style>
  
  footer {
  background-color: #004741;
  color: white;
  padding: 20px 0;
  position: relative;
  width: 100%; /* Lebar footer mengisi lebar layar */
  bottom: 0; /* Letakkan di bagian bawah layar */
  z-index: 1000; /* Z-index untuk menempatkan footer di atas elemen lain */
  height: auto;
  max-height: 500px;
  margin-top: 100px;
}

.footer-content {
display: flex;
justify-content: space-between;
max-width: 1200px;
margin: 0 auto;
padding: 20px;
}

.footer-left, .footer-right {
flex: 1;
}

.footer-left {
text-align: left;
}

.footer-left h2 {
font-size: 1.8em;
margin-bottom: 10px;
text-align: left;
}

.footer-left p {
font-size: 1.2em;
}

.footer-right {
text-align: right;
padding-left: 20px;
}


.footer-right .sosmed {
margin-bottom: 20px;
}

.footer-right .sosmed h3,
.footer-right .address h3 {
font-size: 1.5em;
margin-bottom: 10px;
}

.footer-right .sosmed-icons a {
margin-right: 10px;
color: white;
font-size: 1.5em;
text-decoration: none;
}

.footer-right .address p {
margin: 0;
line-height: 1.6;
}

.footer-bottom {
background-color: #00A896 ;
text-align: center;
padding: 10px 0;
}

.footer-bottom p {
margin: 0;
font-size: 0.9em;
}

@media screen and (max-width: 768px) {

  .footer-content {
flex-direction: column;
text-align: center;
align-items: center;
}

.footer-left h2 {
  text-align: center;
}

.footer-right {
text-align: center;
padding-left: 0;
}

.footer-left {
text-align: center;
padding-left: 0;
}

.footer-right .sosmed-icons a {
display: inline-block;
margin: 0 10px;
}
}
</style>