<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gantian Kad CIDB - MEWAH SERVICES</title>
    <link rel="stylesheet" href="./assests/style.css">
    <?php include 'seo.php'; ?>

    <style>
        /* Gantian Kad Container */
        .cidb-gantian-container {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 3rem;
            background: var(--teks);
            box-shadow: 0 15px 40px rgba(13, 173, 152, 0.1);
            border-radius: 20px;
        }

        .cidb-gantian-title {
            text-align: center;
            color: var(--teal);
            font-size: 3rem;
            margin-bottom: 2rem;
            font-weight: 700;
            position: relative;
        }

        .cidb-gantian-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: var(--birumuda);
        }

        .cidb-gantian-pricing {
            background-color: var(--gray-50);
            border-radius: 15px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            border-left: 5px solid var(--birumuda);
        }

        .cidb-gantian-pricing h3 {
            font-size: 2rem;
            color: var(--black);
            margin-bottom: 1rem;
        }

        .cidb-gantian-pricing-details {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
        }

        .cidb-gantian-pricing-card {
            flex: 1;
            background-color: var(--teks);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            box-shadow: 0 10px 20px rgba(13, 173, 152, 0.1);
            transition: transform 0.3s ease;
        }

        .cidb-gantian-pricing-card:hover {
            transform: translateY(-10px);
        }

        .cidb-gantian-pricing-card .times {
            font-size: 1.8rem;
            color: var(--teal);
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .cidb-gantian-pricing-card .price {
            font-size: 2.2rem;
            color: var(--maing);
            font-weight: 700;
        }

        .cidb-gantian-info {
            background-color: var(--gray-100);
            border-radius: 15px;
            padding: 2.5rem;
        }

        .cidb-gantian-info h2 {
            font-size: 2.2rem;
            color: var(--black);
            margin-bottom: 1.5rem;
        }

        .cidb-gantian-info ul {
            list-style-type: disc;
            padding-left: 2rem;
        }

        .cidb-gantian-info li {
            font-size: 1.6rem;
            margin-bottom: 1.3rem;
            color: var(--gray-600);
        }

        .cidb-gantian-info li strong {
            color: var(--teal);
        }

        /* Responsive Adjustments */
        @media (max-width: 1024px) {
            .cidb-gantian-pricing-details {
                flex-direction: column;
            }
        }

        @media (max-width: 768px) {
            .cidb-gantian-container {
                padding: 2rem;
                margin: 2rem 1rem;
            }

            .cidb-gantian-title {
                font-size: 2.5rem;
            }

            .cidb-gantian-pricing h3 {
                font-size: 1.8rem;
            }

            .cidb-gantian-info li {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {

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
    </style>
<?php renderSEOHead(); ?>
</head>

<body>
<?php renderSEOSchemas(); ?>
<?php getSEOH1(); ?>

    <!-- header starts -->
    <?php include 'header-cidb.php' ?>
    <!-- header ends -->

    <section class="home1" id="home1">
        <img src="kad-cidb.jpg" alt="Home background" class="background-image1">
        <div class="content1">
            <h1>Gantian Kad CIDB</h1>
            <p>Maklumat dan prosedur penggantian Kad Personel Binaan CIDB yang hilang atau rosak</p>     
        </div>
    </section>

    <div class ="cidb-gantian-container">
        <h1 class="cidb-gantian-title">Info Gantian Kad CIDB</h1>
        
        <div class="cidb-gantian-pricing">
            <h3>Cas Gantian Kad</h3>
            <div class="cidb-gantian-pricing-details">
                <div class="cidb-gantian-pricing-card">
                    <div class="times">Kali Pertama</div>
                    <div class="price">RM 140.00</div>
                </div>
                <div class="cidb-gantian-pricing-card">
                    <div class="times">Kali Kedua</div>
                    <div class="price">RM 240.00</div>
                </div>
                <div class="cidb-gantian-pricing-card">
                    <div class="times">Kali Ketiga & Ke Atas</div>
                    <div class="price">RM 340.00</div>
                </div>
            </div>
        </div>

        <div class="cidb-gantian-info">
            <h2>Prosedur Penggantian Kad</h2>
            <ul>
                <li><strong>Tidak perlu laporan polis</strong> untuk kad yang hilang.</li>
                <li>Laporkan kepada bank jika kad digunakan untuk urusan perbankan.</li>
                <li>No pendaftaran kad tidak diperlukan; maklumat dicari menggunakan no I/C.</li>
                <li>Data pemohon mesti aktif dalam pangkalan data CIDB.</li>
                <li>Permohonan pembaharuan diperlukan jika data tidak aktif.</li>
                <li>Pass Sementara diterima dalam 4 hari waktu bekerja.</li>
                <li>Gantian Kad Hijau diterima dalam 60 hari waktu bekerja.</li>
                <li>Isi borang online untuk gantian kad yang hilang atau rosak.</li>
                <li><strong>Kursus semula</strong> diperlukan jika kad tamat tempoh lebih dari 10 tahun.</li>
            </ul>
        </div>
    </div>
<?php include 'whatapps-cidb.php'; ?>
    
<?php  include 'footer-cidb.php' ?> 
<?php renderSEOWidgets(); ?>
<?php renderSEOAnalytics(); ?>
<?php renderSocialLinks(); ?>
</body>
</html>