<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Baru Kad CIDB - MEWAH SERVICES</title>

    <style>
:root {
    --birumuda: #2dd6c1;
    --maing: #28a38c;
    --shadowg: #0cad98;
    --teal: #025e53;    
    --background: #d8fff8;
    --biru: #005B96;
    --teks: #FFFFFF;
    --gray-50: #f8fafc;
    --gray-100: #f1f5f9;
    --gray-600: #475569;
    --gray-800: #1e293b;

    --primary-color: var(--birumuda);
    --secondary-color: var(--maing);
    --accent-color: var(--biru);
}

.cidb-container {
    max-width: 1200px;
    margin: 4rem auto;
    padding: 3rem;
    background: var(--teks);
    box-shadow: 0 15px 40px rgba(13, 173, 152, 0.1);
    border-radius: 20px;
    position: relative;
    overflow: hidden;
}

.cidb-container::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 10px;
    background: linear-gradient(to right, var(--birumuda), var(--maing));
}

.cidb-page__title {
    text-align: center;
    color: var(--maing);
    font-size: 3.5rem;
    margin-bottom: 3rem;
    font-weight: 700;
    position: relative;
}

.cidb-page__title::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 50%;
    transform: translateX(-50%);
    width: 100px;
    height: 4px;
    background: var(--primary-color);
}

.cidb-section__title {
    color: var(--teal);
    font-size: 2.5rem;
    margin-bottom: 2rem;
    position: relative;
    padding-left: 20px;
}

.cidb-section__title::before {
    content: '';
    position: absolute;
    left: 0;
    top: 6px;
    width: 10px;
    height: 70%;
    background: var(--primary-color);
}

.cidb-requirements {
    background-color: var(--gray-50);
    padding: 2.5rem;
    border-radius: 15px;
    margin-bottom: 3rem;
    border-left: 5px solid var(--primary-color);
    list-style: none;

}

.cidb-requirements__item {
    margin-bottom: 1.5rem;
    font-size: 1.7rem;
    position: relative;
    padding-left: 3rem;
    color: var(--gray-600);
}

.cidb-requirements__item::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary-color);
    font-weight: bold;
    font-size: 2rem;
}

.cidb-pricing__grid {
    display: flex;
    gap: 2rem;
    margin-top: 3rem;
}

.cidb-pricing__section {
    flex: 1;
    background-color: var(--gray-100);
    border-radius: 15px;
    padding: 2.5rem;
    text-align: center;
    transition: all 0.3s ease;
    border: 2px solid transparent;
    font-size: 1.6rem;
}

.cidb-pricing__section:hover {
    border-color: var(--primary-color);
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(13, 173, 152, 0.1);
}

.cidb-pricing__card {
    background-color: var(--teks);
    border-radius: 15px;
    padding: 2rem;
    margin: 1.5rem 0;
    box-shadow: 0 10px 20px rgba(13, 173, 152, 0.1);
    transition: transform 0.3s ease;
}

.cidb-pricing__card:hover {
    transform: scale(1.05);
}

.cidb-pricing__duration {
    font-size: 1.8rem;
    font-weight: bold;
    color: var(--teal);
    margin-bottom: 0.5rem;
}

.cidb-pricing__amount {
    font-size: 2.1rem;
    color: var(--secondary-color);
    font-weight: 700;
}

.cidb-exemption, .cidb-notice {
    background-color: var(--gray-100);
    border-radius: 15px;
    padding: 3.4rem;
    margin-top: 3rem;
    border-left: 5px solid var(--primary-color);
}

/* Responsive Design */
@media (max-width: 1024px) {
    .cidb-pricing__grid {
        flex-direction: column;
    }
}

@media (max-width: 768px) {
    .cidb-container {
        padding: 2rem;
        margin: 2rem 1rem;
    }

    .cidb-page__title {
        font-size: 2.8rem;
    }

    .cidb-section__title {
        font-size: 2.2rem;
    }
}

@media (max-width: 480px) {
    html {
        font-size: 14px;
    }

    .home1 {
        height: 40vh;
    }

    .home1 .content1 h2 {
        font-size: 2.5rem;
    }

    .home1 .content1 p {
        font-size: 1.3rem;
    }
}

/* Additional Subtle Animations */
@keyframes fadeIn {
    from { opacity: 0; transform: translateY(20px); }
    to { opacity: 1; transform: translateY(0); }
}

.cidb-pricing__section 
    {
        animation: fadeIn 0.5s ease forwards;
    }

.cidb-exemption h2, .cidb-notice h3 {
    font-size: 2.4rem;
    margin-bottom: 1.5rem;
    color: var(--teal);
}

.cidb-exemption p, .cidb-notice ul {
    font-size: 1.6rem;
    color: var(--gray-600);
}

.requirements-list li {
    font-size: 1.6rem;
    margin-bottom: 1rem;
    line-height: 1.4;
    color: var(--gray-800);
}
    </style>
</head>
<body>
<!-- header starts -->

<?php include 'header-cidb.php' ?>

<section class="home1" id="home1">
    <img src="kad-cidb.jpg" alt="Home background" class="background-image1">
    <div class="content1">
        <h2>Daftar Kad Hijau CIDB + Kursus (Baru)</h2>
        <p>Berikut dinyatakan senarai bagi pendaftaran baru kad hijau CIDB bagi sesiapa yang tidak pernah ada CIDB sebelum in</p>     
    </div>
</section>


    <main class="cidb-content">
        <div class="cidb-container">
            <h1 class="cidb-page__title">Info Daftar Kad Hijau CIDB</h1>
            
            <div class="cidb-info-card">
                <h2 class="cidb-section__title">Daftar Kad Hijau CIDB + Kursus / Ahli Baru</h2>
                <ul class="cidb-requirements">
                    <li class="cidb-requirements__item">Untuk Daftar Baru Kad Hijau CIDB + Kursus bagi yang tidak pernah ada sebelum ini perlu menjalani kursus secara fizikal terlebih dahulu. <strong>(Kenali Kad Hijau / Kad Pintar Personel Binaan CIDB)</strong></li>
                    <li class="cidb-requirements__item">Kursus secara fizikal akan dijalankan selama <strong>6 ke 8 jam</strong> bg 1 sesi. Kursus akan bermula seawal 8am dan akan di bagi masa rehat sebanyak 2 kali oleh pelatih.</li>
                    <li class="cidb-requirements__item">Setelah kursus tamat peserta akan mendapat SIJIL digital kehadiran pada keesokkan harinya <strong>(melalui Whatsapp)</strong>.</li>
                    <li class="cidb-requirements__item">Pendaftaran kursus mesti dilakukan secara dalam talian melalui platform kami.</li>
                    <li class="cidb-requirements__item">Untuk mendaftar mestilah <strong>3-5 hari lebih awal</strong> dari tarikh kursus yang telah dijadual <strong>(termasuk pembayaran keseluruhan)</strong></li>
                </ul>
    
                <div class="cidb-pricing__grid">
                    <!-- Warga Tempatan Section -->
                    <div class="cidb-pricing__section">
                        <h3>Daftar Baru untuk Warga Tempatan</h3>
                        <p>(Termasuk Yuran Kursus)</p>
                        <div class="cidb-pricing__card">
                            <div class="cidb-pricing__duration">1 Tahun</div>
                            <div class="cidb-pricing__amount">RM 200</div>
                        </div>
                        <div class="cidb-pricing__card">
                            <div class="cidb-pricing__duration">2 Tahun</div>
                            <div class="cidb-pricing__amount">RM 225</div>
                        </div>
                        <div class="cidb-pricing__card">
                            <div class="cidb-pricing__duration">3 Tahun</div>
                            <div class="cidb-pricing__amount">RM 250</div>
                        </div>
                        <div class="cidb-pricing__card">
                            <div class="cidb-pricing__duration">4 Tahun</div>
                            <div class="cidb-pricing__amount">RM 275</div>
                        </div>
                        <div class="cidb-pricing__card">
                            <div class="cidb-pricing__duration">5 Tahun</div>
                            <div class="cidb-pricing__amount">RM 300</div>
                        </div>
                    </div>

                    <!-- Warga Asing Section -->
                    <div class="cidb-pricing__section">
                        <h3>Harga untuk Warga Asing</h3>
                        <p>(Bergantung pada tarikh tamat tempoh permit.)</p>
                        <div class="cidb-pricing__card">
                            <div class="cidb-pricing__duration">Daftar Baru</div>
                            <div class="cidb-pricing__amount">RM 300</div>
                        </div>
                        <p class="cidb-pricing__note">*Tempoh sah laku kad adalah bergantung kepada tarikh tamat permit kerja</p>
                    </div>
                </div>
            </div>
    
            <div class="cidb-info-card cidb-exemption">
                <h2 class="section-title">Pengecualian Kursus</h2>
                <p>Jika anda mempunyai <strong>"Sijil / Kad"</strong> bagi kursus yang dinyatakan seperti dibawah, anda dikecualikan untuk mengambil <strong>Program Kursus Kad Hijau CIDB (SICW)</strong>:</p>
                <ul class="requirements-list">
                    <li>NIOSH – Nestle Safety Passport <strong>(NNSP)</strong></li>
                    <li>NIOSH – OM Materials Safety Passport <strong>(NOMSP)</strong></li>
                    <li>NIOSH – Port Safety Passport <strong>(NPTSP)</strong></li>
                    <li>NIOSH – TENAGA Safety Leader Passport <strong>(NTSLP)</strong></li>
                    <li>NIOSH – TENAGA Safety Passport <strong>(NTSP)</strong></li>
                    <li>NIOSH – TM Safety Passport <strong>(NTMSP)</strong></li>
                    <li>Oil and Gas Safety Passport <strong>(OGSP)</strong></li>
                    <li>Air Kelantan Safety Card <strong>(AKSC)</strong></li>
                    <li>Air Selangor – NIOSH Safety Passport <strong>(ANSP)</strong></li>
                    <li>'Blue Card Safety Induction' SHE <strong>KVMRT</strong></li>
                    <li>Contractor Safety Passport System All Risks Work <strong>(CPSAR)</strong></li>
                    <li>E-Idaman Safety Passport <strong>(EISP)</strong></li>
                    <li>Expressway Operations Safety Passport <strong>(EOSP)</strong></li>
                    <li>GAMUDA Construction SHE Passport <strong>(GCSP)</strong></li>
                </ul>
            </div>
    
            <div class="cidb-info-card cidb-notice">
                <h3 class="section-title">Nota Penting:</h3>
                <ul class="requirements-list">
                    <li>Bagi yang pernah ada kad tapi sudah tamat tempoh melebihi 10 tahun dan ke atas diwajibkan mengambil kursus semula.</li>
                    <li>Pas Sementara dari pihak CIDB akan dihantar oleh kami dalam masa 3 – 4 hari waktu bekerja (tidak termasuk hari Sabtu & Ahad) selepas kursus dijalankan.</li>
                </ul>
            </div>
        </div>
    </main>

    <?php include 'footer-cidb.php' ?>

</body>
</html>