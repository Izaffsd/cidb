<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIDB Malaysia - Program Pembangunan Kontraktor Secara Berterusan - Mata CCD 2025</title>
    <link rel="stylesheet" href="assests/style.css">
    <link rel="icon" type="image/png" sizes="32x32" href="icon-cidb-mewah.png">

    <?php include 'seo.php' ?>
    <?php renderSEOHead(); ?>
    <style>
        :root {
            --birumuda: #2dd6c1;
            --maing: #28a38c;
            --shadowg: #0cad98;
            --teal: #025e53;
            --background: #d8fff8;
            --biru: #005b96;
            --teks: #ffffff;
            --gray-50: #f8fafc;
            --gray-100: #f1f5f9;
            --gray-600: #475569;
            --gray-800: #1e293b;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Arial", sans-serif;
            color: var(--gray-800);
            line-height: 1.6;
        }

        .container {
            max-width: 1450px;
            margin: 0 auto;
            padding: 0 20px;
        }


        /* Main Layout Section */
        .main-layout-section {
            margin: 4rem 0;
            padding: 3rem 0;
        }

        .layout-container {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.8rem;
            align-items: center;
        }

        /* Left Side - Main Title */
        .left-content {
            display: flex;
            flex-direction: column;
            justify-content: center;
            order: 1;
        }

        .main-title {
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 1rem 2rem;
            text-align: center;
            color: var(--teal);
            position: relative;
            margin-bottom: 2rem;
        }

        .main-title h1 {
            font-size: clamp(1.8rem, 5vw, 2.6rem); /* 60% larger */
            margin-bottom: 0.8rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            line-height: 1;
        }

        .intro-image-container {
            position: relative;
            width: 100%;
            border-radius: 25px;
            overflow: hidden;
        }

        .intro-image {
            width: 100%;
            height: clamp(450px, 35vw, 450px);
            object-fit: contain;
            object-position: center;
            display: block;
        }

        /* Right Side - 4 Images Grid */
        .right-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1rem;
            height: 100%;
            order: 2;
        }

        .image-card {
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            border: 2px solid transparent;
            display: flex;
            flex-direction: column;
            max-width: 100%;
        }

        .image-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
            border-color: var(--birumuda);
        }

        .image-wrapper {
            position: relative;
            overflow: hidden;
            flex: 1;
        }

        .image-card .section-image {
            width: 100%;
            height: clamp(200px, 30vw, 277px);
            object-fit: contain;
            object-position: center;
            transition: transform 0.3s ease;
        }

        .image-card:hover .section-image {
            transform: scale(1.1);
        }

        .contact {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 15px;
            padding: 2rem;
            margin: 2rem 0;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            z-index: 2;
        }

        .contact p {
            font-size: clamp(1.28rem, 3.2vw, 1.44rem); /* 60% larger */
            margin-bottom: 1.28rem;
            text-align: center;
        }

        .link-button {
            display: inline-block;
            background: linear-gradient(135deg, var(--teal), var(--biru));
            color: white;
            padding: 1.28rem 2.56rem; /* 60% larger */
            border-radius: 50px;
            text-decoration: none;
            font-weight: bold;
            font-size: clamp(1.28rem, 3.2vw, 1.44rem); /* 60% larger */
            transition: all 0.3s ease;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.2);
            text-align: center;
            display: block;
            margin: 1.6rem auto 0;
            max-width: 300px;
        }

        .link-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 35px rgba(0, 0, 0, 0.3);
            background: linear-gradient(135deg, var(--biru), var(--teal));
        }

        /* Content Sections */
        .content-section {
            margin: 4rem 0;
            opacity: 0;
            transform: translateY(30px);
            animation: slideInUp 0.8s ease forwards;
        }

        .content-section:nth-child(even) {
            animation-delay: 0.2s;
        }

        .content-section:nth-child(odd) {
            animation-delay: 0.4s;
        }

        @keyframes slideInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes rotate {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        .section-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: clamp(1.8rem, 4.6vw, 2.8rem); /* 60% larger */
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .section-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.15);
        }

        .section-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 5px;
            background: linear-gradient(90deg, var(--birumuda), var(--maing), var(--teal));
        }

        .section-title {
            font-size: clamp(2.4rem, 6.4vw, 2.88rem); /* 60% larger */
            color: var(--teal);
            margin-bottom: 2.4rem;
            font-weight: bold;
            line-height: 1.3;
        }

        .section-content {
            font-size: clamp(1.6rem, 4vw, 1.76rem); /* 60% larger */
            line-height: 1.7;
            color: var(--gray-600);
        }

        .section-content p {
            margin-bottom: 1.6rem;
        }

        .section-content ul {
            margin-left: 2rem;
            margin-bottom: 1.6rem;
        }

        .section-content li {
            margin-bottom: 1.28rem;
            font-size: clamp(1.6rem, 4vw, 1.76rem); /* 60% larger */
        }

        /* CCD Info Section */
        .ccd-info {
            background: linear-gradient(135deg, var(--teal) 0%, var(--biru) 100%);
            color: var(--teks);
            border-radius: 20px;
            padding: clamp(3em, 7vw, 4rem); /* 60% larger */
            margin: 4rem 0;
            position: relative;
            overflow: hidden;
        }

        .ccd-info::before {
            content: "";
            position: absolute;
            top: -50%;
            right: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(45, 214, 193, 0.1) 0%, transparent 70%);
            animation: rotate 20s linear infinite;
        }

        .ccd-title {
            font-size: clamp(2.4rem, 6.4vw, 3.52rem); /* 60% larger */
            margin-bottom: 3.2rem;
            text-align: center;
            position: relative;
            z-index: 2;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
            line-height: 1.3;
            color: white;
        }

        .ccd-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 2rem;
            position: relative;
            z-index: 2;
        }

        .ccd-item {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            padding: 2.4rem;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .ccd-item:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
        }

        .ccd-item h3 {
            font-size: clamp(1.76rem, 4.8vw, 2.08rem); /* 60% larger */
            margin-bottom: 1.6rem;
            line-height: 1.3;
        }

        .ccd-item p {
            font-size: clamp(1.44rem, 4vw, 1.6rem); /* 60% larger */
            line-height: 1.6;
        }

        /* Benefits Section */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .benefit-item {
            background: linear-gradient(135deg, var(--gray-50), var(--background));
            border-radius: 15px;
            padding: clamp(2.4rem, 6.4vw, 3.2rem); /* 60% larger */
            text-align: center;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }

        .benefit-item:hover {
            transform: translateY(-8px);
            border-color: var(--birumuda);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .benefit-item h3 {
            font-size: clamp(1.76rem, 4.8vw, 1.92rem); /* 60% larger */
            color: var(--teal);
            margin-bottom: 1.6rem;
            line-height: 1.3;
        }

        .benefit-item p {
            font-size: clamp(1.44rem, 4vw, 1.6rem); /* 60% larger */
            color: var(--gray-600);
            line-height: 1.5;
        }

        /* Points Table */
        .points-table {
            background: var(--gray-50);
            border-radius: 15px;
            padding: clamp(2.4rem, 6.4vw, 3.2rem); /* 60% larger */
            margin: 2rem 0;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        .points-table h3 {
            color: var(--teal);
            margin-bottom: 2.4rem;
            font-size: clamp(1.92rem, 4.8vw, 2.4rem); /* 60% larger */
            line-height: 1.3;
        }

        .points-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
        }

        .points-item {
            background: var(--teks);
            padding: 1.6rem;
            border-radius: 10px;
            text-align: center;
            border-left: 4px solid var(--birumuda);
            transition: all 0.3s ease;
        }

        .points-item:hover {
            transform: translateX(5px);
            box-shadow: 0 3px 15px rgba(0, 0, 0, 0.1);
        }

        .grade {
            font-weight: bold;
            color: var(--teal);
            font-size: clamp(1.6rem, 4vw, 1.76rem); /* 60% larger */
            margin-bottom: 0.8rem;
        }

        .points {
            color: var(--maing);
            font-weight: bold;
            font-size: clamp(1.44rem, 3.2vw, 1.6rem); /* 60% larger */
        }

        /* Table Styles */
        .table-container {
            overflow-x: auto;
            margin: 2rem 0;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.08);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
            border-radius: 15px;
            overflow: hidden;
        }

        th, td {
            padding: 1.6rem 1.28rem; /* 60% larger */
            text-align: center;
            border-bottom: 1px solid #e2e8f0;
            font-size: clamp(1.28rem, 3.2vw, 1.44rem); /* 60% larger */
        }

        th {
            background: linear-gradient(135deg, var(--teal), var(--maing));
            color: white;
            font-weight: bold;
            font-size: clamp(1.44rem, 3.6vw, 1.6rem); /* 60% larger */
        }

        tbody tr:hover {
            background: var(--background);
        }

        /* Responsive Design */
        @media (min-width: 768px) {
            .container {
                padding: 0 30px;
            }

            .right-content {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 1024px) {
            .layout-container {
                grid-template-columns: 0.95fr 1.05fr;
                gap: 4rem;
            }

            .left-content {
                order: 0;
            }

            .right-content {
                order: 0;
            }
        }

        @media (min-width: 1200px) {
            .container {
                padding: 0 40px;
            }
        }

        @media (max-width: 767px) {
            .container {
                padding: 0 15px;
            }

            .main-layout-section {
                margin: 2rem 0;
                padding: 2rem 0;
            }

            .content-section {
                margin: 2rem 0;
            }

            .benefits-grid {
                grid-template-columns: 1fr;
                gap: 1.5rem;
            }

            .points-list {
                grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            }

            .right-content {
                grid-template-columns: 1fr;
            }

            .ccd-grid {
                grid-template-columns: 1fr;
            }

            .home1 {
                height: 50vh;
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 0 10px;
            }

            .main-title {
                padding: 1rem;
            }

            .points-list {
                grid-template-columns: 1fr;
            }

            .link-button {
                padding: 1.6rem 2rem;
            }

            th, td {
                padding: 1.28rem 0.8rem;
                font-size: clamp(1.12rem, 2.8vw, 1.28rem);
            }
        }

        /* Scroll animations */
        .fade-in {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-in.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Accessibility improvements */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
            }
        }
    </style>
</head>

<?php renderSEOSchemas(); ?>
<?php getSEOH1(); ?>
<?php include 'header-cidb.php'; ?>

<body>
    <!-- Header Section -->
    <section class="home1" id="home1">
        <img src="assests/images/life/sijil.jpg" alt="Home background" class="background-image1">
        <div class="content1">
            <h1>Program Mata CCD 2025 – Keperluan & Pendaftaran Seminar CIDB</h1>
            <p>Ketahui keperluan terkini mata CCD mengikut gred pendaftaran untuk pembaharuan lesen kontraktor CIDB pada 2025. Daftar seminar pembangunan kontraktor secara atas talian & fizikal</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container">


        <!-- Main Layout Section -->
        <section class="main-layout-section fade-in">
            <div class="layout-container">
                <!-- Left Side - Main Title and Intro Image -->
                <div class="left-content">
                    <div class="main-title">
                        <h1> CCD 2025 SEMINAR ATAS TALIAN & FIZIKAL RENEW LESEN/SEMINAR CCD (2025)</h1>
                    </div>

                    <div class="intro-image-container">
                        <img src="./assests/ppk/opening-cidb.jpg" alt="CIDB Malaysia Opening" class="intro-image">
                    </div>
                </div>

                <!-- Right Side - 4 Images Grid -->
                <div class="right-content">
                    <div class="image-card" data-section="01">
                        <div class="image-wrapper">
                            <img src="./assests/ppk/1-cidb.jpg" alt="CIDB Malaysia Section 01" class="section-image">
                        </div>
                    </div>

                    <div class="image-card" data-section="02">
                        <div class="image-wrapper">
                            <img src="./assests/ppk/2cidb.jpg" alt="CIDB Malaysia Section 02" class="section-image">
                        </div>
                    </div>

                    <div class="image-card" data-section="03">
                        <div class="image-wrapper">
                            <img src="./assests/ppk/3cidb.jpg" alt="CIDB Malaysia Section 03" class="section-image">
                        </div>
                    </div>

                    <div class="image-card" data-section="04">
                        <div class="image-wrapper">
                            <img src="./assests/ppk/4cidb.jpg" alt="CIDB Malaysia Section 04" class="section-image">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Introduction Section -->
        <section class="content-section fade-in">
            <div class="section-card">
                <h2 class="section-title">Pengenalan</h2>
                <div class="section-content">
                    <p>Program Pembangunan Kontraktor Secara Berterusan (CCD) adalah sebuah program yang dibangunkan oleh CIDB bagi meningkatkan pengetahuan dan penglibatan kontraktor dalam aktiviti industri pembinaan.</p>
                </div>
            </div>
        </section>

        <!-- CCD Information Section -->
        <section class="ccd-info fade-in">
            <h1 class="ccd-title">Mata CCD CIDB - Apa Itu Mata CCD?</h1>
            <div class="ccd-grid">
                <div class="ccd-item">
                    <h3>Program Pembangunan</h3>
                    <p>Mata CCD adalah satu Program Pembangunan Kontraktor Secara Berterusan (Continues Contractor Development Programme)</p>
                </div>
                <div class="ccd-item">
                    <h3>Sistem Pungutan</h3>
                    <p>Program ini diperkenalkan sebagai sistem pungutan mata CCD melalui penyertaan kontraktor dalam seminar, persatuan, penerbitan dan lain-lain acara yang telah diiktiraf untuk memperoleh mata CCD seperti yang ditetapkan oleh CIDB.</p>
                </div>
            </div>
        </section>

        <!-- Enforcement Section -->
        <section class="content-section fade-in">
            <div class="section-card">
                <h2 class="section-title">Penguatkuasaan Pengumpulan CCD</h2>
                <div class="section-content">
                    <p>CCD secara rasminya telah dikuatkuasakan pada <strong>1 Januari 2010</strong> dan diumumkan kepada industri pembinaan semenjak tahun 2008. Melalui Pekeliling CIDB Bil. 2/2008, setiap kontraktor perlu mengumpul mata CCD mengikut gred pendaftaran di CIDB.</p>

                    <p>Kontraktor yang gagal mengumpul jumlah mata CCD akan menyebabkan perakuan pendaftaran mereka tidak akan diperbaharui atau gred pendaftaran mereka akan diturunkan.</p>

                    <p>Kontraktor perlu mengemukakan dokumen sokongan seperti sijil, surat sokongan atau lain-lain sebagai bukti mata CCD yang telah dikumpul semasa mengemukakan permohonan untuk pembaharuan perakuan pendaftaran kontraktor.</p>
                </div>
            </div>
        </section>

        <!-- Objectives Section -->
        <section class="content-section fade-in">
            <div class="section-card">
                <h2 class="section-title">Objektif</h2>
                <div class="section-content">
                    <ul>
                        <li>Menggalakkan kontraktor meningkatkan ilmu pengetahuan bagi meningkatkan kepakaran dan profesionalisme kontraktor dan industri pembinaan secara umumnya.</li>
                        <li>Meningkatkan pengetahuan dan kecekapan kontraktor dalam pelbagai aspek pengurusan projek pembinaan.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Target Participants Section -->
        <section class="content-section fade-in">
            <div class="section-card">
                <h2 class="section-title">Peserta/Kumpulan Sasaran</h2>
                <div class="section-content">
                    <ul>
                        <li>Kontraktor yang berdaftar dengan CIDB dari Gred G1 hingga G7.</li>
                        <li>Pemilik / Pengarah Syarikat / Pengurusan Syarikat.</li>
                        <li>Pekerja yang dicarum KWSP oleh majikan sahaja.</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Benefits Grid -->
        <section class="content-section fade-in">
            <div class="section-card">
                <h2 class="section-title">Kelebihan Program Pembangunan Kontraktor Secara Berterusan (CCD)</h2>
                <div class="benefits-grid">
                    <div class="benefit-item">
                        <h3>Ilmu & Kepakaran</h3>
                        <p>Meningkatkan pengetahuan dalam kepakaran dan profesionalisme</p>
                    </div>
                    <div class="benefit-item">
                        <h3>Kecekapan Projek</h3>
                        <p>Meningkatkan kecekapan dalam pengurusan projek pembinaan</p>
                    </div>
                    <div class="benefit-item">
                        <h3>Networking</h3>
                        <p>Interaksi dan perkongsian pengalaman sesama kontraktor</p>
                    </div>
                    <div class="benefit-item">
                        <h3>Kepercayaan</h3>
                        <p>Memperkukuh kepercayaan orang awam terhadap perkhidmatan</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Points Requirements -->
        <section class="content-section fade-in">
            <div class="points-table">
                <h3>Jumlah mata CCD yang perlu dikumpul mengikut gred kontraktor untuk setahun:</h3>
                <div class="points-list">
                    <div class="points-item">
                        <div class="grade">G1 – G2</div>
                        <div class="points">10 Mata CCD</div>
                    </div>
                    <div class="points-item">
                        <div class="grade">G3 – G4</div>
                        <div class="points">20 Mata CCD</div>
                    </div>
                    <div class="points-item">
                        <div class="grade">G5 – G6</div>
                        <div class="points">30 Mata CCD</div>
                    </div>
                    <div class="points-item">
                        <div class="grade">G7</div>
                        <div class="points">40 Mata CCD</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Detailed CCD Points Table -->
        <section class="content-section fade-in">
            <div class="section-card">
                <h2 class="section-title">Mata CCD Mengikut Gred Pendaftaran</h2>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>Gred</th>
                                <th>Mata CCD bagi Pembaharuan Pendaftaran Kontraktor</th>
                                <th>1 Tahun</th>
                                <th>2 Tahun</th>
                                <th>3 Tahun</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>G1 & G2</strong></td>
                                <td>Pembaharuan Pendaftaran</td>
                                <td><strong>10</strong></td>
                                <td><strong>20</strong></td>
                                <td><strong>30</strong></td>
                            </tr>
                            <tr>
                                <td><strong>G3 & G4</strong></td>
                                <td>Pembaharuan Pendaftaran</td>
                                <td><strong>20</strong></td>
                                <td><strong>40</strong></td>
                                <td><strong>60</strong></td>
                            </tr>
                            <tr>
                                <td><strong>G5 & G6</strong></td>
                                <td>Pembaharuan Pendaftaran</td>
                                <td><strong>30</strong></td>
                                <td><strong>60</strong></td>
                                <td><strong>90</strong></td>
                            </tr>
                            <tr>
                                <td><strong>G7</strong></td>
                                <td>Pembaharuan Pendaftaran</td>
                                <td><strong>40</strong></td>
                                <td><strong>80</strong></td>
                                <td><strong>120</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </main>

    <script>
        // Intersection Observer for fade-in animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                }
            });
        }, observerOptions);

        // Observe all fade-in elements
        document.querySelectorAll('.fade-in').forEach(el => {
            observer.observe(el);
        });

        // Smooth scrolling for better UX
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add floating animation to benefit icons
        const benefitIcons = document.querySelectorAll('.benefit-icon');
        benefitIcons.forEach((icon, index) => {
            icon.style.animationDelay = `${index * 0.2}s`;
            icon.style.animation = 'float 3s ease-in-out infinite';
        });

        // CSS animation for floating effect
        const floatKeyframes = `
            @keyframes float {
                0%, 100% { transform: translateY(0px); }
                50% { transform: translateY(-10px); }
            }
        `;

        const styleSheet = document.createElement('style');
        styleSheet.textContent = floatKeyframes;
        document.head.appendChild(styleSheet);

        // Add hover effect for section cards
        document.querySelectorAll('.section-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.background = 'rgba(255, 255, 255, 0.95)';
            });

            card.addEventListener('mouseleave', function() {
                this.style.background = 'rgba(255, 255, 255, 0.9)';
            });
        });

        // Handle window resize for better responsive behavior
        let resizeTimer;
        window.addEventListener('resize', function() {
            clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                // Recalculate any dynamic elements if needed
                const images = document.querySelectorAll('.section-image, .intro-image');
                images.forEach(img => {
                    img.style.height = '';
                });
            }, 250);
        });

        // Improve image loading
        document.querySelectorAll('img').forEach(img => {
            img.addEventListener('load', function() {
                this.style.opacity = '1';
            });

            img.addEventListener('error', function() {
                this.style.opacity = '0.5';
                this.alt = 'Image not found';
            });
        });

        // Enhanced mobile touch interactions
        if ('ontouchstart' in window) {
            document.querySelectorAll('.image-card, .benefit-item, .ccd-item').forEach(card => {
                card.addEventListener('touchstart', function() {
                    this.style.transform = 'scale(0.98)';
                });

                card.addEventListener('touchend', function() {
                    this.style.transform = '';
                });
            });
        }

        // Performance monitoring code
        performance.mark('app-loaded');

        // Lazy loading for images
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        img.src = img.dataset.src || img.src;
                        img.classList.remove('lazy');
                        imageObserver.unobserve(img);
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }

        // Auto-scroll to top on page load
        window.addEventListener('load', function() {
            setTimeout(() => {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }, 100);
        });
    </script>

    <?php include 'footer-cidb.php' ?>
    <?php renderSEOWidgets(); ?>
    <?php renderSEOAnalytics(); ?>
    <?php renderSocialLinks(); ?>
</body>

</html>