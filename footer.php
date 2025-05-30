<!-- footer section starts -->
<main class="footer">
    <div class="newsletter">
        <div class="wrapper">
            <h2>Dapatkan Berita Kami!</h2>
            <p>Terima maklumat terkini mengenai jualan, discount dan banyak lagi terus ke Email anda!!</p>
           <form id="subscribe-form">
            <div class="input-container">
                <input type="email" name="user_email" placeholder="Masukkan alamat emel anda" required />
                <button type="submit" class="btn">Hantar</button>
            </div>
            </form>

            <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
            <script>
            (function() {
                emailjs.init("EY3VYsv8aIt7Ms0oC"); // Your public key
            })();

            document.getElementById("subscribe-form").addEventListener("submit", function(e) {
                e.preventDefault();

                emailjs.sendForm('contact_template', 'template_856pmar', this)
                .then(() => {
                    alert("Terima kasih! Emel anda telah dihantar.");
                    this.reset();
                }, (error) => {
                    alert("Ralat semasa menghantar emel. Sila cuba lagi.");
                    console.error(error);
                });
            });
            </script>
        </div>
    </div>

<!-- hbaharu br -->

<!-- br -->

    <div class="box-container">
        <div class="box disclaimer">
            <h3>DISCLAIMER</h3>
            <p>
                MewahServicesCIDB @ A & N Management Resources (CT0097614P) adalah penyedia perkhidmatan pembaharuan Kad Personel Binaan & pendaftaran kontraktor dengan Lembaga Pembangunan Industri Pembinaan Malaysia (CIDB).
            </p>
            <p>
                Dengan melayari laman web ini, anda bersetuju dengan 
                <a href="#">Terms & Conditions</a> 
                dan membenarkan MewahServicesCIDB @ A & N Management Resources (CT0097614P) untuk menguruskan permohonan anda.
            </p>
        </div>
        
        <div class="box services">
            <h3>Our Services</h3>
            <a href="#">CIDB Green Card Registration</a>
            <a href="#">CIDB Green Card Renewal</a>
            <a href="#">Consulting Services</a>
        </div>
        
        <div class="box contact-info">
            <h3>Contact Info</h3>
            <p> <i class="fas fa-phone"></i> +601126165376</p>
            <p> <i class="fas fa-envelope"></i> mewahservices@gmail.com</p>
            <p> <i class="fas fa-map-marked-alt"></i> Shah Alam, Malaysia</p>
            <div class="share">
                <a href="https://www.tiktok.com/@mewahservices?_t=8pr1BAPdN5g&_r=1" class="fab fa-tiktok" aria-label="TikTok"></a>
                <a href="https://www.facebook.com/cidbgreencardmewah/" class="fab fa-facebook-f" aria-label="Facebook"></a>
                <a href="https://www.instagram.com/mewahservices?igsh=Yno4NHgxODkxb2xx" class="fab fa-instagram" aria-label="Instagram"></a>
            </div>
        </div>
    </div>

    <h1 class="credit">&copy; 2025 Mewah Services CIDB | develop by 
        <a href="https://www.linkedin.com/in/muhd-iskandar-b96b31300/" target="_blank" rel="noopener">Izaf Dev</a> | all rights reserved</h1>
        
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="./assests/script.js"></script>