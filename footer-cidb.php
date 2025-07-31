<!-- footer section starts -->
<main class="footer">
    <div class="newsletter">
        <div class="wrapper">
            <h2>Dapatkan Berita Kami!</h2>
            <p>Terima maklumat terkini mengenai jualan, discount dan banyak lagi terus ke Email anda!!</p>
            <form id="subscribe-form" style="display: flex; gap: 10px; align-items: center; flex-wrap: wrap;">
                <input
                    type="text"
                    name="user_name"
                    id="name"
                    placeholder="Masukkan Nama Anda"
                    required
                    style="padding: 10px 20px; border: none; border-radius: 25px; outline: none; flex: 1; min-width: 200px;" />
                <input
                    type="email"
                    name="user_email"
                    id="email"
                    placeholder="Masukkan alamat emel anda"
                    required
                    style="padding: 10px 20px; border: none; border-radius: 25px; outline: none; flex: 2; min-width: 200px; text-transform: none;" />
                <button
                    type="submit"
                    id="submit-btn"
                    style="padding: 10px 20px; border: none; border-radius: 25px; background: #2dd4bf; color: white; font-weight: bold; cursor: pointer;">
                    Hantar
                </button>
            </form>

            <script src="https://cdn.emailjs.com/dist/email.min.js"></script>
            <script>
                (function() {
                    emailjs.init("EY3VYsv8aIt7Ms0oC");
                })();

                const form = document.getElementById("subscribe-form");
                const submitBtn = document.getElementById("submit-btn");
                let isSubmitting = false;

                form.addEventListener("submit", function(e) {
                    e.preventDefault();

                    if (isSubmitting) return;

                    isSubmitting = true;
                    submitBtn.textContent = "Sending...";
                    submitBtn.disabled = true;

                    emailjs.sendForm('contact_template', 'template_856pmar', this)
                        .then(() => {
                            alert("Terima kasih! Emel anda telah dihantar.");
                            form.reset();
                            submitBtn.textContent = "Hantar";
                            isSubmitting = false;
                            submitBtn.disabled = false;

                            setTimeout(() => {
                                // Reset status after 5 seconds (mimicking React's status reset)
                                submitBtn.textContent = "Hantar";
                            }, 5000);
                        }, (error) => {
                            alert("Ralat semasa menghantar emel. Sila cuba lagi.");
                            console.error(error);
                            submitBtn.textContent = "Hantar";
                            isSubmitting = false;
                            submitBtn.disabled = false;

                            setTimeout(() => {
                                submitBtn.textContent = "Hantar";
                            }, 5000);
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
                MewahServicesCIDB adalah penyedia perkhidmatan pembaharuan Kad Personel Binaan & pendaftaran kontraktor dengan Lembaga Pembangunan Industri Pembinaan Malaysia (CIDB).
            </p>
            <p>
                Dengan melayari laman web ini, anda bersetuju dengan
                <a href="#">Terms & Conditions</a>
                dan membenarkan MewahServicesCIDB untuk menguruskan permohonan anda.
            </p>
        </div>

        <div class="box services">
            <h3>Our Services</h3>
            <a href="daftar-baru-cidb.php">CIDB Green Card Registration</a>
            <a href="renew-kad-cidb.php">CIDB Green Card Renewal</a>
            <a href="card-cidb.php">Consulting Services</a>
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
        <a href="https://www.linkedin.com/in/muhd-iskandar-b96b31300/" target="_blank" rel="noopener">Izaf Dev</a> | all rights reserved
    </h1>

</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="./assests/script.js"></script>