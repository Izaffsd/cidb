<!DOCTYPE html>
<html lang="ms">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Renew Kad CIDB - MEWAH SERVICES</title>
    <link rel="stylesheet" href="./assests/style.css">
    <?php include 'seo.php'; ?>


    <style>

        /* Renewal Information Container */
        .cidb-renewal-container {
            max-width: 1200px;
            margin: 4rem auto;
            padding: 3rem;
            background: var(--teks);
            box-shadow: 0 15px 40px rgba(13, 173, 152, 0.1);
            border-radius: 20px;
        }

        .cidb-renewal-title {
            text-align: center;
            color: var(--teal);
            font-size: 3rem;
            margin-bottom: 2rem;
            font-weight: 700;
        }

        .cidb-renewal-info {
            background-color: var(--gray-50);
            border-radius: 15px;
            padding: 2.5rem;
            margin-bottom: 2rem;
            border-left: 5px solid var(--birumuda);
        }

        .cidb-renewal-info p {
            font-size: 1.6rem;
            color: black;
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        .cidb-renewal-pricing {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 1.5rem;
        }

        .cidb-renewal-card {
            background-color: var(--gray-100);
            border-radius: 15px;
            padding: 2rem;
            text-align: center;
            width: 200px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .cidb-renewal-card:hover {
            border-color: var(--birumuda);
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(13, 173, 152, 0.1);
        }

        .cidb-renewal-card .duration {
            font-size: 1.8rem;
            color: var(--teal);
            font-weight: bold;
            margin-bottom: 0.5rem;
        }

        .cidb-renewal-card .price {
            font-size: 2.2rem;
            color: var(--maing);
            font-weight: 700;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .cidb-renewal-container {
                padding: 2rem;
                margin: 2rem 1rem;
            }

            .cidb-renewal-title {
                font-size: 2.5rem;
            }

            .cidb-renewal-info p {
                font-size: 1.2rem;
            }
        }

        @media (max-width: 480px) {

            .cidb-renewal-pricing {
                flex-direction: column;
                align-items: center;
            }

            .cidb-renewal-card {
                width: 100%;
                max-width: 300px;
            }
        }

        .cidb-renewal-pricing-container {
            display: flex;
            justify-content: space-between;
            gap: 2rem;
            margin-top: 3rem;
        }

        .cidb-renewal-pricing-local, 
        .cidb-renewal-pricing-foreign {
            flex: 1;
            background-color: var(--gray-50);
            border-radius: 15px;
            padding: 2.5rem;
            text-align: center;
            transition: all 0.3s ease;
        }

        .cidb-renewal-pricing-title {
            font-size: 2.2rem;
            color: var(--teal);
            margin-bottom: 2rem;
            position: relative;
            display: inline-block;
        }

        .cidb-renewal-pricing-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50%;
            height: 4px;
            background-color: var(--birumuda);
        }

        .cidb-renewal-pricing-local .cidb-renewal-card,
        .cidb-renewal-pricing-foreign .cidb-renewal-card {
            background-color: var(--teks);
            margin-bottom: 1.5rem;
            box-shadow: 0 10px 20px rgba(13, 173, 152, 0.1);
        }

        .cidb-renewal-pricing-note {
            font-size: 1.2rem;
            color: var(--gray-600);
            margin-top: 1rem;
            font-style: italic;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .cidb-renewal-pricing-container {
                flex-direction: column;
            }
        }
    </style>

<?php renderSEOHead(); ?>
</head>

<body>
<?php renderSEOSchemas(); ?>
<?php getSEOH1(); ?>


    <?php include 'header-cidb.php' ?>


    <section class="home1" id="home1">
        <img src="kad-cidb.jpg" alt="Home background" class="background-image1">
        <div class="content1">
            <h2>Renew Kad CIDB</h2>
            <p>Maklumat dan prosedur pembaharuan Kad Personel Binaan CIDB untuk pekerja tempatan</p>     
        </div>
    </section>

    <div class="cidb-renewal-container">
        <h1 class="cidb-renewal-title">Pembaharuan Kad Personel Binaan CIDB</h1>
        
        <div class="cidb-renewal-info">
            <p>Pembaharuan kad CIDB versi lama (yang ada gambar) akan mendapat kad baru seperti IC terkini (mempunyai cip emas seperti ATM kad) setelah membuat pembayaran kepada pihak kami mengikut tempoh sah yang dipilih oleh pelanggan.</p>
            
            <p>Kepada yang telah menerima kad baru, pihak pelanggan tidak akan menerima lagi kad dalam jangka 5 tahun tetapi harus dipantau lesen aktifnya dahulu di mana-mana pejabat CIDB atau melalui talian telefon.</p>
            
            <p>Selepas pembayaran dibuat kepada pihak kami, pelanggan akan menerima Pas Sementara dalam masa 3-4 hari waktu bekerja (tidak termasuk Sabtu dan Ahad) melalui email yang didaftarkan.</p>
            
            <p>Pembayaran boleh dibuat secara online bank in atau pun menggunakan mesin auto di bank (Manual Transfer). Resit pembayaran haruslah disimpan untuk bukti pembayaran.</p>
        </div>

        <div class="cidb-renewal-pricing-container">
            <div class="cidb-renewal-pricing-local">
                <h2 class="cidb-renewal-pricing-title">Warga Tempatan</h2>
                <div class="cidb-renewal-pricing">
                    <div class="cidb-renewal-card">
                        <div class="duration">1 Tahun</div>
                        <div class="price">RM 95.00</div>
                    </div>
                    <div class="cidb-renewal-card">
                        <div class="duration">2 Tahun</div>
                        <div class="price">RM 120.00</div>
                    </div>
                    <div class="cidb-renewal-card">
                        <div class="duration">3 Tahun</div>
                        <div class="price">RM 125.00</div>
                    </div>
                    <div class="cidb-renewal-card">
                        <div class="duration">4 Tahun</div>
                        <div class="price">RM 170.00</div>
                    </div>
                    <div class="cidb-renewal-card">
                        <div class="duration">5 Tahun</div>
                        <div class="price">RM 195.00</div>
                    </div>
                </div>
            </div>

            <div class="cidb-renewal-pricing-foreign">
                <h2 class="cidb-renewal-pricing-title">Warga Asing</h2>
                <div class="cidb-renewal-pricing">
                    <div class="cidb-renewal-card">
                        <div class="duration">Renew</div>
                        <div class="price">RM 250.00</div>
                    </div>
                </div>
                <p class="cidb-renewal-pricing-note">*Harga bergantung pada tarikh tamat tempoh permit kerja</p>
            </div>
        </div>
    </div>
    <?php include 'whatapps-cidb.php'; ?>

<?php  include 'footer-cidb.php' ?> 

<?php renderSEOWidgets(); ?>
<?php renderSEOAnalytics(); ?>
<?php renderSocialLinks(); ?>
</body>
</html> 
