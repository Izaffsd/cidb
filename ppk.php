<!DOCTYPE html>
<html lang="ms">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perakuan Pendaftaran Kontraktor (PPK) - CIDB Malaysia</title>

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
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: var(--gray-800);
            background-color: var(--gray-50);
        }

        .ppk-main-container {
            width: 100%;
            min-height: 100vh;
        }

        /* Hero Banner */
        .ppk-hero-banner {
            background: linear-gradient(135deg, var(--maing) 0%, var(--teal) 100%);
            color: var(--teks);
            padding: 4rem 2rem;
            text-align: center;
        }

        .ppk-hero-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 2rem;
        }

        .ppk-hero-text {
            flex: 1;
            text-align: left;
        }

        .ppk-main-title {
            font-size: 5.1rem;
            font-weight: 700;
            margin-bottom: 1rem;
            line-height: 1.2;
        }

        .ppk-hero-subtitle {
            font-size: 2.04rem;
            opacity: 0.9;
        }

        .ppk-hero-image-placeholder {
            flex: 0 0 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(10px);
        }

        .ppk-cidb-logo {
            font-size: 3.4rem;
            font-weight: bold;
            color: var(--teks);
        }

        /* Content Wrapper */
        .ppk-content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        .ppk-section-title {
            font-size: 4.25rem;
            color: var(--maing);
            margin-bottom: 2rem;
            text-align: center;
            font-weight: 600;
        }

        /* Definition Section */
        .ppk-definition-section {
            margin-bottom: 4rem;
        }

        .ppk-definition-card {
            background: var(--teks);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(12, 173, 152, 0.15);
            border: 1px solid var(--gray-100);
        }

        .ppk-definition-card p {
            font-size: 1.87rem;
            color: var(--gray-600);
            margin-bottom: 1.5rem;
        }

        .ppk-equity-info h3 {
            color: var(--maing);
            margin-bottom: 1rem;
            font-size: 2.04rem;
        }

        .ppk-equity-list {
            list-style: none;
            padding: 0;
        }

        .ppk-equity-list li {
            padding: 0.5rem 0;
            padding-left: 1.5rem;
            position: relative;
            color: var(--gray-600);
            font-size: 1.7rem;
        }

        .ppk-equity-list li::before {
            content: "•";
            color: var(--maing);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        /* Scope Section */
        .ppk-scope-section {
            margin-bottom: 4rem;
        }

        .ppk-scope-intro {
            text-align: center;
            font-size: 1.87rem;
            color: var(--gray-600);
            margin-bottom: 2rem;
        }

        .ppk-scope-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .ppk-scope-item {
            background: var(--teks);
            padding: 2rem;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(12, 173, 152, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .ppk-scope-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(12, 173, 152, 0.2);
        }

        .ppk-scope-icon {
            font-size: 5.1rem;
            margin-bottom: 1rem;
        }

        .ppk-scope-item h3 {
            color: var(--maing);
            margin-bottom: 1rem;
            font-size: 2.21rem;
        }

        .ppk-scope-item p {
            color: var(--gray-600);
            font-size: 1.615rem;
        }

        /* Categories Section */
        .ppk-categories-section {
            margin-bottom: 4rem;
        }

        .ppk-categories-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
        }

        .ppk-category-card {
            background: var(--teks);
            padding: 2.5rem;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 6px 20px rgba(12, 173, 152, 0.12);
            transition: all 0.3s ease;
            border: 1px solid var(--gray-100);
        }

        .ppk-category-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 35px rgba(12, 173, 152, 0.25);
            border-color: var(--birumuda);
        }

        .ppk-category-icon {
            font-size: 5.95rem;
            margin-bottom: 1.5rem;
            display: block;
        }

        .ppk-category-card h3 {
            color: var(--maing);
            margin-bottom: 1rem;
            font-size: 2.38rem;
            font-weight: 600;
        }

        .ppk-category-card p {
            color: var(--gray-600);
            line-height: 1.6;
            font-size: 1.7rem;
        }

        /* Info Section */
        .ppk-info-section {
            margin-bottom: 4rem;
        }

        .ppk-info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
        }

        .ppk-info-box {
            background: var(--teks);
            padding: 2.5rem;
            border-radius: 16px;
            box-shadow: 0 8px 25px rgba(12, 173, 152, 0.15);
            border: 1px solid var(--gray-100);
        }

        .ppk-info-title {
            color: var(--maing);
            font-size: 2.55rem;
            margin-bottom: 1.5rem;
            font-weight: 600;
            text-align: center;
        }

        /* Grade Table */
        .ppk-grade-table {
            display: flex;
            flex-direction: column;
            gap: 0.8rem;
        }

        .ppk-grade-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem;
            background: var(--gray-50);
            border-radius: 8px;
            border-left: 4px solid var(--maing);
        }

        .ppk-grade {
            font-weight: bold;
            color: var(--maing);
            font-size: 1.87rem;
        }

        .ppk-limit {
            color: var(--gray-600);
            font-weight: 500;
            font-size: 1.7rem;
        }

        /* Category Details */
        .ppk-category-details {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .ppk-category-item strong {
            color: var(--maing);
            font-size: 1.785rem;
        }

        .ppk-category-item p {
            color: var(--gray-600);
            margin-top: 0.3rem;
            font-size: 1.615rem;
        }

        /* Specialization Info */
        .ppk-specialization-info {
            display: flex;
            flex-direction: column;
            gap: 1.2rem;
        }

        .ppk-spec-item strong {
            color: var(--maing);
            font-size: 1.785rem;
        }

        .ppk-spec-item p {
            color: var(--gray-600);
            margin-top: 0.3rem;
            font-size: 1.615rem;
        }

        /* Classification Section */
        .ppk-classification-section {
            margin-bottom: 4rem;
        }

        .ppk-classification-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }

        .ppk-status-card {
            background: var(--teks);
            padding: 2.5rem;
            border-radius: 16px;
            text-align: center;
            box-shadow: 0 6px 20px rgba(12, 173, 152, 0.12);
            transition: all 0.3s ease;
            border: 1px solid var(--gray-100);
        }

        .ppk-status-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(12, 173, 152, 0.2);
        }

        .ppk-status-icon {
            font-size: 5.1rem;
            margin-bottom: 1rem;
        }

        .ppk-status-card h3 {
            color: var(--maing);
            margin-bottom: 1rem;
            font-size: 2.21rem;
            font-weight: 600;
        }

        .ppk-status-card p {
            color: var(--gray-600);
            line-height: 1.5;
            font-size: 1.7rem;
        }

        /* Footer */
        .ppk-footer {
            background: var(--gray-800);
            color: var(--teks);
            text-align: center;
            padding: 2rem;
            font-size: 1.7rem;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .ppk-hero-content {
                flex-direction: column;
                text-align: center;
            }

            .ppk-hero-text {
                text-align: center;
            }

            .ppk-main-title {
                font-size: 3.4rem;
            }

            .ppk-hero-image-placeholder {
                flex: none;
                width: 150px;
                height: 150px;
            }

            .ppk-content-wrapper {
                padding: 2rem 1rem;
            }

            .ppk-section-title {
                font-size: 3.4rem;
            }

            .ppk-scope-grid,
            .ppk-categories-grid,
            .ppk-info-grid,
            .ppk-classification-grid {
                grid-template-columns: 1fr;
            }

            .ppk-definition-card,
            .ppk-info-box,
            .ppk-category-card,
            .ppk-status-card {
                padding: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .ppk-hero-banner {
                padding: 2rem 1rem;
            }

            .ppk-main-title {
                font-size: 2.55rem;
            }

            .ppk-hero-subtitle {
                font-size: 1.7rem;
            }
        }

        .ppk-pdf-viewer {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .ppk-pdf-viewer h3 {
            margin-bottom: 10px;
            font-size: 30.6px;
            color: #333;
        }

        .ppk-pdf-viewer iframe {
            width: 100%;
            height: 600px;
            border: none;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
    </style>
    <link rel="stylesheet" href="assests/style.css">


    <?php include 'seo.php' ?>
    <?php renderSEOHead(); ?>
</head>

<?php renderSEOSchemas(); ?>
<?php getSEOH1(); ?>
<?php include 'header-cidb.php'; ?>
</head>

<body>

    <section class="home1" id="home1">
        <img src="assests\images\life\sijil.jpg" alt="Home background" class="background-image1">
        <div class="content1">
            <h1>Perakuan Pendaftaran Kontraktor Tempatan (PPK)</h1>
            <p>Panduan Lengkap Pendaftaran Kontraktor di Malaysia — Proses, Syarat Kelayakan, Kategori PPK, Dokumen Sokongan dan Tatacara Permohonan untuk Syarikat Tempatan.

            </p>
        </div>
    </section>
    <div class="ppk-main-container">


        <!-- Definition Section -->
        <div class="ppk-content-wrapper">
            <div class="ppk-definition-section">
                <h2 class="ppk-section-title">Definisi PPK</h2>
                <div class="ppk-definition-card">
                    <p>Pendaftaran PPK hanya dibuka kepada syarikat yang diperbadankan di Malaysia serta mempunyai pegangan ekuiti tempatan tujuh puluh peratus (70%) dan ke atas.</p>
                    <div class="ppk-equity-info">
                        <h3>Pegangan Ekuiti Asing yang Dibenarkan:</h3>
                        <ul class="ppk-equity-list">
                            <li>Ekuiti asing: maksimum 30% dari jumlah modal</li>
                            <li>Ekuiti ASEAN: maksimum 51% dari jumlah modal</li>
                            <li>Ekuiti FTA: berbagai peratusan mengikut negara</li>
                        </ul>
                    </div>
                </div>
                <!-- PDF Viewer Section -->
                <div class="ppk-pdf-viewer">
                    <h3>Lihat Dokumen PDF:</h3>
                    <iframe src=".\assests\doc\Definisi-PPK&Pendaftaran.pdf" type="application/pdf" frameborder="0"></iframe>
                </div>
            </div>

            <!-- Scope Section -->
            <div class="ppk-scope-section">
                <h2 class="ppk-section-title">Skop Pendaftaran</h2>
                <p class="ppk-scope-intro">Setiap kontraktor didaftarkan mengikut empat kriteria utama:</p>

                <div class="ppk-scope-grid">
                    <div class="ppk-scope-item">
                        <div class="ppk-scope-icon">📊</div>
                        <h3>Gred</h3>
                        <p>Menentukan had keupayaan menender dan menjalankan kerja</p>
                    </div>
                    <div class="ppk-scope-item">
                        <div class="ppk-scope-icon">🏗️</div>
                        <h3>Kategori</h3>
                        <p>Jenis pembinaan yang boleh dilaksanakan</p>
                    </div>
                    <div class="ppk-scope-item">
                        <div class="ppk-scope-icon">⚙️</div>
                        <h3>Pengkhususan</h3>
                        <p>Bidang kerja khusus dalam setiap kategori</p>
                    </div>
                    <div class="ppk-scope-item">
                        <div class="ppk-scope-icon">⭐</div>
                        <h3>Pengkelasan</h3>
                        <p>Status berdasarkan pengalaman projek</p>
                    </div>
                </div>
            </div>

            <!-- Categories Section -->
            <div class="ppk-categories-section">
                <h2 class="ppk-section-title">Kategori Pendaftaran</h2>
                <div class="ppk-categories-grid">
                    <div class="ppk-category-card">
                        <div class="ppk-category-icon ppk-icon-building">🏢</div>
                        <h3>Pembinaan Bangunan (B)</h3>
                        <p>Pembinaan struktur bangunan kediaman, komersial dan institusi</p>
                    </div>
                    <div class="ppk-category-card">
                        <div class="ppk-category-icon ppk-icon-civil">🛣️</div>
                        <h3>Pembinaan Kejuruteraan Awam (CE)</h3>
                        <p>Pembinaan infrastruktur awam seperti jalan, jambatan dan utiliti</p>
                    </div>
                    <div class="ppk-category-card">
                        <div class="ppk-category-icon ppk-icon-mechanical">⚡</div>
                        <h3>Mekanikal dan Elektrikal (ME)</h3>
                        <p>Pemasangan dan penyelenggaraan sistem mekanikal dan elektrikal</p>
                    </div>
                    <div class="ppk-category-card">
                        <div class="ppk-category-icon ppk-icon-facility">🔧</div>
                        <h3>Fasiliti (F)</h3>
                        <p>Pengurusan dan penyelenggaraan fasiliti bangunan</p>
                    </div>
                </div>
            </div>

            <!-- Info Boxes Section -->
            <div class="ppk-info-section">
                <div class="ppk-info-grid">
                    <div class="ppk-info-box">
                        <h3 class="ppk-info-title">Gred & Keupayaan</h3>
                        <div class="ppk-grade-table">
                            <div class="ppk-grade-row">
                                <span class="ppk-grade">G1</span>
                                <span class="ppk-limit">≤ RM200,000</span>
                            </div>
                            <div class="ppk-grade-row">
                                <span class="ppk-grade">G2</span>
                                <span class="ppk-limit">≤ RM500,000</span>
                            </div>
                            <div class="ppk-grade-row">
                                <span class="ppk-grade">G3</span>
                                <span class="ppk-limit">≤ RM1,000,000</span>
                            </div>
                            <div class="ppk-grade-row">
                                <span class="ppk-grade">G4</span>
                                <span class="ppk-limit">≤ RM3,000,000</span>
                            </div>
                            <div class="ppk-grade-row">
                                <span class="ppk-grade">G5</span>
                                <span class="ppk-limit">≤ RM5,000,000</span>
                            </div>
                            <div class="ppk-grade-row">
                                <span class="ppk-grade">G6</span>
                                <span class="ppk-limit">≤ RM10,000,000</span>
                            </div>
                            <div class="ppk-grade-row">
                                <span class="ppk-grade">G7</span>
                                <span class="ppk-limit">Tiada Had</span>
                            </div>
                        </div>
                    </div>

                    <div class="ppk-info-box">
                        <h3 class="ppk-info-title">Kategori</h3>
                        <div class="ppk-category-details">
                            <div class="ppk-category-item">
                                <strong>B (Bangunan):</strong>
                                <p>Untuk permohonan baru, kategori B diberikan secara automatik</p>
                            </div>
                            <div class="ppk-category-item">
                                <strong>CE (Kejuruteraan Awam):</strong>
                                <p>Diberikan untuk permohonan baru bersama kategori B</p>
                            </div>
                            <div class="ppk-category-item">
                                <strong>ME (Mekanikal & Elektrikal):</strong>
                                <p>Memerlukan personel teknikal berkelayakan</p>
                            </div>
                            <div class="ppk-category-item">
                                <strong>F (Fasiliti):</strong>
                                <p>Hanya untuk syarikat ROC/SKM/ROS Gred G4 ke atas</p>
                            </div>
                        </div>
                    </div>

                    <div class="ppk-info-box">
                        <h3 class="ppk-info-title">Pengkhususan</h3>
                        <div class="ppk-specialization-info">
                            <div class="ppk-spec-item">
                                <strong>Permohonan Baru:</strong>
                                <p>B04 dan CE21 diberikan secara automatik</p>
                            </div>
                            <div class="ppk-spec-item">
                                <strong>M15:</strong>
                                <p>Diberikan jika ada personel teknikal berkelayakan</p>
                            </div>
                            <div class="ppk-spec-item">
                                <strong>F01/F02:</strong>
                                <p>Memerlukan sijil akademik dan pengalaman fasiliti</p>
                            </div>
                            <div class="ppk-spec-item">
                                <strong>Pengkhususan Lain:</strong>
                                <p>Berdasarkan surat tawaran kerja atau sijil kecekapan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Classification Status Section -->
            <div class="ppk-classification-section">
                <h2 class="ppk-section-title">Status Pengkelasan</h2>
                <div class="ppk-classification-grid">
                    <div class="ppk-status-card ppk-status-new">
                        <div class="ppk-status-icon">🆕</div>
                        <h3>BARU</h3>
                        <p>Kontraktor yang baru berdaftar</p>
                    </div>
                    <div class="ppk-status-card ppk-status-active">
                        <div class="ppk-status-icon">✅</div>
                        <h3>AKTIF</h3>
                        <p>Kontraktor yang dianugerah projek dalam tempoh 3 tahun terkini</p>
                    </div>
                    <div class="ppk-status-card ppk-status-inactive">
                        <div class="ppk-status-icon">⏸️</div>
                        <h3>TIDAK AKTIF</h3>
                        <p>Kontraktor yang tidak dianugerah sebarang projek</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php include 'footer-cidb.php' ?>

    <script>
        // Performance monitoring code
        performance.mark('app-loaded');
    </script>

    <?php renderSEOWidgets(); ?>
    <?php renderSEOAnalytics(); ?>
    <?php renderSocialLinks(); ?>
</body>

</html>