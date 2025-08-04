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
            width: 90%;
            min-height: 100vh;
            margin: auto;
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
        }

        .ppk-main-title {
            font-size: 5.6rem;
            font-weight: 700;
            margin-bottom: 1.6rem;
            line-height: 1.2;
        }

        .ppk-hero-subtitle {
            font-size: 2.4rem;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto;
        }

        /* Content Wrapper */
        .ppk-content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4.8rem 1.8rem;
        }

        .ppk-section {
            margin-bottom: 6.4rem;
        }

        .ppk-section-title {
            font-size: 4rem;
            color: var(--maing);
            margin-bottom: 3.2rem;
            font-weight: 600;
            border-bottom: 3px solid var(--birumuda);
            padding-bottom: 0.8rem;
        }

        .ppk-subsection-title {
            font-size: 2.9rem;
            color: var(--teal);
            margin-bottom: 1.6rem;
            margin-top: 3.2rem;
            font-weight: 600;
        }

        .ppk-text-content {
            font-size: 1.76rem;
            color: var(--gray-600);
            margin-bottom: 2.4rem;
            line-height: 1.7;
        }

        .ppk-definition-text {
            background: var(--teks);
            padding: 3.2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 3.2rem;
        }

        .ppk-list {
            list-style: none;
            padding: 0;
            margin: 1.6rem 0;
        }

        .ppk-list li {
            padding: 0.8rem 0;
            padding-left: 2.4rem;
            position: relative;
            color: var(--gray-600);
            font-size: 1.76rem;
        }

        .ppk-list li::before {
            content: "•";
            color: var(--maing);
            font-weight: bold;
            position: absolute;
            left: 0;
        }

        /* Table Styles */
        .ppk-table {
            width: 100%;
            border-collapse: collapse;
            margin: 2.4rem 0;
            background: var(--teks);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .ppk-table th,
        .ppk-table td {
            padding: 1.6rem;
            text-align: left;
            border-bottom: 1px solid var(--gray-100);
        }

        .ppk-table th {
            background: var(--maing);
            color: var(--teks);
            font-weight: 600;
            font-size: 1.76rem;
        }

        .ppk-table td {
            font-size: 1.6rem;
            color: var(--gray-600);
        }

        .ppk-table tr:last-child td {
            border-bottom: none;
        }

        .ppk-table tr:hover {
            background: var(--gray-50);
        }

        /* Grid Layout for structured content */
        .ppk-content-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 3.2rem;
            margin: 3.2rem 0;
        }

        .ppk-content-box {
            background: var(--teks);
            padding: 3.2rem;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .ppk-content-box h4 {
            color: var(--maing);
            font-size: 2.08rem;
            margin-bottom: 1.6rem;
            font-weight: 600;
        }

        .ppk-content-box p {
            color: var(--gray-600);
            font-size: 1.6rem;
            line-height: 1.6;
            margin-bottom: 0.8rem;
        }

        /* Status indicators */
        .ppk-status-list {
            display: flex;
            flex-direction: column;
            gap: 1.6rem;
            margin: 3.2rem 0;
        }

        .ppk-status-item {
            background: var(--teks);
            padding: 2.4rem;
            border-radius: 8px;
            border-left: 4px solid var(--maing);
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .ppk-status-item h4 {
            color: var(--maing);
            font-size: 1.92rem;
            margin-bottom: 0.8rem;
            font-weight: 600;
        }

        .ppk-status-item p {
            color: var(--gray-600);
            font-size: 1.6rem;
            margin: 0;
        }

        /* Footer */
        .ppk-footer {
            background: var(--gray-800);
            color: var(--teks);
            text-align: center;
            padding: 3.2rem;
            font-size: 1.6rem;
        }

        /* Responsive Design */
        /* Large tablets and small desktops */
        @media (max-width: 1024px) {
            .ppk-main-title {
                font-size: 4.8rem;
            }

            .ppk-hero-subtitle {
                font-size: 2.08rem;
            }

            .ppk-section-title {
                font-size: 3.6rem;
            }

            .ppk-subsection-title {
                font-size: 2.6rem;
            }

            .ppk-text-content {
                font-size: 1.6rem;
            }

            .ppk-content-wrapper {
                padding: 4rem 3.4rem;
            }
        }

        /* Tablets */
        @media (max-width: 768px) {
            .ppk-main-title {
                font-size: 4rem;
            }

            .ppk-hero-subtitle {
                font-size: 1.92rem;
            }

            .ppk-section-title {
                font-size: 3.2rem;
            }

            .ppk-subsection-title {
                font-size: 2.4rem;
            }

            .ppk-text-content {
                font-size: 1.6rem;
            }

            .ppk-content-wrapper {
                padding: 3.2rem 2.6rem;
            }

            .ppk-section {
                margin-bottom: 4.8rem;
            }

            .ppk-content-grid {
                grid-template-columns: 1fr;
                gap: 2.4rem;
            }

            .ppk-content-box {
                padding: 2.4rem;
            }

            .ppk-content-box h4 {
                font-size: 1.92rem;
            }

            .ppk-content-box p {
                font-size: 1.44rem;
            }

            .ppk-table {
                font-size: 1.44rem;
            }

            .ppk-table th,
            .ppk-table td {
                padding: 1.2rem 0.8rem;
            }

            .ppk-table th {
                font-size: 1.6rem;
            }

            .ppk-list li {
                font-size: 1.6rem;
                padding-left: 2rem;
            }

            .ppk-status-item {
                padding: 2rem;
            }

            .ppk-status-item h4 {
                font-size: 1.76rem;
            }

            .ppk-status-item p {
                font-size: 1.44rem;
            }

            .ppk-definition-text {
                padding: 2.4rem;
            }
        }

        /* Large mobile phones */
        @media (max-width: 640px) {
            .ppk-main-title {
                font-size: 3.6rem;
            }

            .ppk-hero-subtitle {
                font-size: 1.76rem;
            }

            .ppk-section-title {
                font-size: 2.8rem;
            }

            .ppk-subsection-title {
                font-size: 2.2rem;
            }

            .ppk-text-content {
                font-size: 1.5rem;
            }

            .ppk-content-wrapper {
                padding: 2.4rem 1.2rem;
            }

            .ppk-hero-banner {
                padding: 2.4rem 1.2rem;
            }

            .ppk-content-box {
                padding: 1.8rem;
            }

            .ppk-content-box h4 {
                font-size: 1.76rem;
            }

            .ppk-content-box p {
                font-size: 1.3rem;
            }

            .ppk-list li {
                font-size: 1.44rem;
            }

            .ppk-table th {
                font-size: 1.44rem;
            }

            .ppk-table td {
                font-size: 1.28rem;
            }

            .ppk-status-item h4 {
                font-size: 1.6rem;
            }

            .ppk-status-item p {
                font-size: 1.3rem;
            }
        }

        /* Standard mobile phones */
        @media (max-width: 480px) {
            .ppk-hero-banner {
                padding: 2rem 1rem;
            }

            .ppk-main-title {
                font-size: 3.2rem;
                line-height: 1.1;
            }

            .ppk-hero-subtitle {
                font-size: 1.6rem;
                line-height: 1.4;
            }

            .ppk-section-title {
                font-size: 2.4rem;
                margin-bottom: 2.4rem;
            }

            .ppk-subsection-title {
                font-size: 2rem;
                margin-bottom: 1.2rem;
                margin-top: 2.4rem;
            }

            .ppk-text-content {
                font-size: 1.4rem;
                margin-bottom: 1.8rem;
            }

            .ppk-content-wrapper {
                padding: 2rem 1rem;
            }

            .ppk-section {
                margin-bottom: 3.2rem;
            }

            .ppk-content-grid {
                gap: 1.6rem;
            }

            .ppk-content-box {
                padding: 1.6rem;
            }

            .ppk-content-box h4 {
                font-size: 1.6rem;
                margin-bottom: 1.2rem;
            }

            .ppk-content-box p {
                font-size: 1.25rem;
                line-height: 1.5;
            }

            .ppk-definition-text {
                padding: 1.8rem;
                margin-bottom: 2.4rem;
            }

            .ppk-list {
                margin: 1.2rem 0;
            }

            .ppk-list li {
                font-size: 1.35rem;
                padding: 0.6rem 0;
                padding-left: 1.8rem;
                line-height: 1.5;
            }

            .ppk-table {
                font-size: 1.2rem;
            }

            .ppk-table th,
            .ppk-table td {
                padding: 0.8rem 0.6rem;
            }

            .ppk-table th {
                font-size: 1.3rem;
            }

            .ppk-table td {
                font-size: 1.2rem;
            }

            .ppk-status-list {
                gap: 1.2rem;
                margin: 2.4rem 0;
            }

            .ppk-status-item {
                padding: 1.6rem;
            }

            .ppk-status-item h4 {
                font-size: 1.5rem;
                margin-bottom: 0.6rem;
            }

            .ppk-status-item p {
                font-size: 1.25rem;
                line-height: 1.5;
            }

            .ppk-footer {
                padding: 2.4rem;
                font-size: 1.4rem;
            }
        }

        /* Small mobile phones */
        @media (max-width: 360px) {
            .ppk-main-title {
                font-size: 2.8rem;
            }

            .ppk-hero-subtitle {
                font-size: 1.4rem;
            }

            .ppk-section-title {
                font-size: 2.2rem;
            }

            .ppk-subsection-title {
                font-size: 1.8rem;
            }

            .ppk-text-content {
                font-size: 1.3rem;
            }

            .ppk-content-box h4 {
                font-size: 1.5rem;
            }

            .ppk-content-box p {
                font-size: 1.2rem;
            }

            .ppk-list li {
                font-size: 1.25rem;
            }

            .ppk-table {
                font-size: 1.1rem;
            }

            .ppk-table th {
                font-size: 1.2rem;
            }

            .ppk-table td {
                font-size: 1.1rem;
            }

            .ppk-status-item h4 {
                font-size: 1.4rem;
            }

            .ppk-status-item p {
                font-size: 1.2rem;
            }
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
            <h1>Perkhidmatan Pendaftaran Lesen Kontraktor Berdaftar</h1>
            <p>Pendaftaran dan perolehan lesen yang diperlukan oleh kontraktor untuk menjalankan aktiviti pembinaan di Malaysia.</p>
        </div>
    </section>

    <div class="ppk-main-container">
        <!-- Content Wrapper -->
        <div class="ppk-content-wrapper">
            <!-- Definition Section -->
            <section class="ppk-section">
                <h2 class="ppk-section-title">Definisi PPK</h2>
                <div class="ppk-definition-text">
                    <p class="ppk-text-content">Pendaftaran PPK hanya dibuka kepada syarikat yang diperbadankan di Malaysia serta mempunyai pegangan ekuiti tempatan tujuh puluh peratus (70%) dan ke atas.</p>
                </div>
                
                <h3 class="ppk-subsection-title">Pegangan Ekuiti Asing yang Dibenarkan</h3>
                <ul class="ppk-list">
                    <li>Ekuiti asing: maksimum 30% dari jumlah modal</li>
                    <li>Ekuiti ASEAN: maksimum 51% dari jumlah modal</li>
                    <li>Ekuiti FTA: berbagai peratusan mengikut negara</li>
                </ul>
            </section>

            <!-- Scope Section -->
            <section class="ppk-section">
                <h2 class="ppk-section-title">Skop Pendaftaran</h2>
                <p class="ppk-text-content">Setiap kontraktor didaftarkan mengikut empat kriteria utama:</p>

                <div class="ppk-content-grid">
                    <div class="ppk-content-box">
                        <h4>Gred</h4>
                        <p>Menentukan had keupayaan menender dan menjalankan kerja berdasarkan nilai projek</p>
                    </div>
                    <div class="ppk-content-box">
                        <h4>Kategori</h4>
                        <p>Jenis pembinaan yang boleh dilaksanakan oleh kontraktor</p>
                    </div>
                    <div class="ppk-content-box">
                        <h4>Pengkhususan</h4>
                        <p>Bidang kerja khusus dalam setiap kategori pembinaan</p>
                    </div>
                    <div class="ppk-content-box">
                        <h4>Pengkelasan</h4>
                        <p>Status berdasarkan pengalaman dan aktiviti projek kontraktor</p>
                    </div>
                </div>
            </section>

            <!-- Categories Section -->
            <section class="ppk-section">
                <h2 class="ppk-section-title">Kategori Pendaftaran</h2>
                
                <div class="ppk-content-grid">
                    <div class="ppk-content-box">
                        <h4>Pembinaan Bangunan (B)</h4>
                        <p>Pembinaan struktur bangunan kediaman, komersial dan institusi termasuk rumah, pejabat, kedai dan bangunan awam.</p>
                    </div>
                    <div class="ppk-content-box">
                        <h4>Pembinaan Kejuruteraan Awam (CE)</h4>
                        <p>Pembinaan infrastruktur awam seperti jalan raya, jambatan, sistem saliran dan kerja-kerja utiliti.</p>
                    </div>
                    <div class="ppk-content-box">
                        <h4>Mekanikal dan Elektrikal (ME)</h4>
                        <p>Pemasangan dan penyelenggaraan sistem mekanikal dan elektrikal dalam bangunan dan infrastruktur.</p>
                    </div>
                    <div class="ppk-content-box">
                        <h4>Fasiliti (F)</h4>
                        <p>Pengurusan dan penyelenggaraan fasiliti bangunan termasuk pembersihan, keselamatan dan penyelenggaraan.</p>
                    </div>
                </div>
            </section>

            <!-- Grade & Capability Section -->
            <section class="ppk-section">
                <h2 class="ppk-section-title">Gred dan Keupayaan Tender</h2>
                
                <table class="ppk-table">
                    <thead>
                        <tr>
                            <th>Gred</th>
                            <th>Had Nilai Tender</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>G1</strong></td>
                            <td>≤ RM200,000</td>
                            <td>Projek kecil dan pembaikan minor</td>
                        </tr>
                        <tr>
                            <td><strong>G2</strong></td>
                            <td>≤ RM500,000</td>
                            <td>Projek sederhana dan renovasi</td>
                        </tr>
                        <tr>
                            <td><strong>G3</strong></td>
                            <td>≤ RM1,000,000</td>
                            <td>Projek pembinaan standard</td>
                        </tr>
                        <tr>
                            <td><strong>G4</strong></td>
                            <td>≤ RM3,000,000</td>
                            <td>Projek pembinaan besar</td>
                        </tr>
                        <tr>
                            <td><strong>G5</strong></td>
                            <td>≤ RM5,000,000</td>
                            <td>Projek kompleks dan khusus</td>
                        </tr>
                        <tr>
                            <td><strong>G6</strong></td>
                            <td>≤ RM10,000,000</td>
                            <td>Projek mega dan infrastruktur</td>
                        </tr>
                        <tr>
                            <td><strong>G7</strong></td>
                            <td>Tiada Had</td>
                            <td>Semua jenis projek tanpa had nilai</td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <!-- Category Details Section -->
            <section class="ppk-section">
                <h2 class="ppk-section-title">Maklumat Kategori Terperinci</h2>
                
                <div class="ppk-content-grid">
                    <div class="ppk-content-box">
                        <h4>Kategori B (Bangunan)</h4>
                        <p><strong>Permohonan Baru:</strong> Kategori B diberikan secara automatik kepada semua pemohon baru.</p>
                        <p><strong>Skop Kerja:</strong> Pembinaan rumah, bangunan komersial, institusi dan industri.</p>
                    </div>
                    
                    <div class="ppk-content-box">
                        <h4>Kategori CE (Kejuruteraan Awam)</h4>
                        <p><strong>Permohonan Baru:</strong> Diberikan bersama kategori B untuk permohonan baru.</p>
                        <p><strong>Skop Kerja:</strong> Jalan raya, jambatan, terowong, lapangan terbang dan infrastruktur awam.</p>
                    </div>
                    
                    <div class="ppk-content-box">
                        <h4>Kategori ME (Mekanikal & Elektrikal)</h4>
                        <p><strong>Syarat:</strong> Memerlukan personel teknikal berkelayakan dalam bidang berkaitan.</p>
                        <p><strong>Skop Kerja:</strong> Sistem penyaman udara, elektrik, paip, lif dan sistem mekanikal.</p>
                    </div>
                    
                    <div class="ppk-content-box">
                        <h4>Kategori F (Fasiliti)</h4>
                        <p><strong>Syarat:</strong> Hanya untuk syarikat ROC/SKM/ROS yang telah mencapai Gred G4 ke atas.</p>
                        <p><strong>Skop Kerja:</strong> Pengurusan fasiliti, pembersihan, keselamatan dan penyelenggaraan.</p>
                    </div>
                </div>
            </section>

            <!-- Specialization Section -->
            <section class="ppk-section">
                <h2 class="ppk-section-title">Pengkhususan</h2>
                
                <h3 class="ppk-subsection-title">Pengkhususan Automatik untuk Permohonan Baru</h3>
                <ul class="ppk-list">
                    <li><strong>B04:</strong> Pembinaan bangunan am - diberikan secara automatik</li>
                    <li><strong>CE21:</strong> Kerja-kerja am kejuruteraan awam - diberikan secara automatik</li>
                    <li><strong>M15:</strong> Pemasangan jentera am - diberikan jika ada personel teknikal berkelayakan</li>
                </ul>

                <h3 class="ppk-subsection-title">Pengkhususan Fasiliti</h3>
                <ul class="ppk-list">
                    <li><strong>F01/F02:</strong> Memerlukan sijil akademik dan pengalaman dalam pengurusan fasiliti</li>
                    <li><strong>Syarat Tambahan:</strong> Bukti pengalaman kerja dan sijil kecekapan berkaitan</li>
                </ul>

                <h3 class="ppk-subsection-title">Pengkhususan Lain</h3>
                <p class="ppk-text-content">Pengkhususan tambahan diberikan berdasarkan:</p>
                <ul class="ppk-list">
                    <li>Surat tawaran kerja dari projek berkaitan</li>
                    <li>Sijil kecekapan dalam bidang khusus</li>
                    <li>Pengalaman kerja yang dapat dibuktikan</li>
                    <li>Kelayakan akademik berkaitan</li>
                </ul>
            </section>

            <!-- Classification Status Section -->
            <section class="ppk-section">
                <h2 class="ppk-section-title">Status Pengkelasan</h2>
                
                <div class="ppk-status-list">
                    <div class="ppk-status-item">
                        <h4>Status BARU</h4>
                        <p>Kontraktor yang baru mendaftar dan belum mempunyai rekod projek yang lengkap. Status ini diberikan kepada syarikat yang baru memulakan operasi pembinaan.</p>
                    </div>
                    
                    <div class="ppk-status-item">
                        <h4>Status AKTIF</h4>
                        <p>Kontraktor yang telah dianugerahkan dan melaksanakan projek dalam tempoh 3 tahun terkini. Menunjukkan syarikat yang aktif dalam industri pembinaan.</p>
                    </div>
                    
                    <div class="ppk-status-item">
                        <h4>Status TIDAK AKTIF</h4>
                        <p>Kontraktor yang tidak dianugerahkan sebarang projek dalam tempoh yang ditetapkan. Perlu mengemaskini maklumat untuk kembali aktif.</p>
                    </div>
                </div>
            </section>

            <!-- Additional Information -->
            <section class="ppk-section">
                <h2 class="ppk-section-title">Maklumat Tambahan</h2>
                
                <h3 class="ppk-subsection-title">Syarat Asas Pendaftaran</h3>
                <ul class="ppk-list">
                    <li>Syarikat mesti diperbadankan di Malaysia</li>
                    <li>Pegangan ekuiti tempatan minimum 70%</li>
                    <li>Mempunyai modal berbayar yang mencukupi</li>
                    <li>Personel teknikal berkelayakan untuk kategori tertentu</li>
                </ul>

                <h3 class="ppk-subsection-title">Dokumen Diperlukan</h3>
                <ul class="ppk-list">
                    <li>Borang SSM (Sijil Penubuhan Syarikat)</li>
                    <li>Memorandum dan Artikel Pertubuhan</li>
                    <li>Senarai Pengarah dan Pemegang Saham</li>
                    <li>Penyata Kewangan Teraudit</li>
                    <li>Sijil dan kelayakan personel teknikal</li>
                </ul>

                <h3 class="ppk-subsection-title">Proses Permohonan</h3>
                <p class="ppk-text-content">Permohonan PPK boleh dibuat secara dalam talian melalui portal rasmi CIDB Malaysia. Pemohon perlu melengkapkan semua dokumen yang diperlukan dan membayar yuran pendaftaran yang ditetapkan.</p>
            </section>
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