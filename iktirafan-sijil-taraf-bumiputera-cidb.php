<!DOCTYPE html>
<html lang="ms">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Senarai Semak Pengiktirafan Taraf Bumiputera (STB) CIDB - Panduan Permohonan</title>
  <link rel="icon" type="image/png" sizes="32x32" href="icon.png">
  <script src="https://kit.fontawesome.com/0ede200358.js" crossorigin="anonymous" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css" rel="stylesheet">
  <link rel="stylesheet" href="/assests/style.css">
  <style>
    .home1 {
      overflow: hidden;
      position: relative;
      width: 100%;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 60vh;
      /* Full-screen height */
      padding: 4rem 2rem;

    }

    .home1 .background-image1 {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 120%;
      object-fit: cover;
      /* Ensures the image covers the section properly */
      z-index: -1;
      opacity: 0.8;
      background-size: cover;
      background-position: center;
      /* Ensures background stays centered */
      background-repeat: no-repeat;
      background-attachment: fixed;
      filter: brightness(50%);
      /* transform: translateZ(0); 
    will-change: transform;  */
    }

    .home1::before {
      content: "";
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      background: linear-gradient(to top, rgba(0, 0, 2, 2), rgba(0, 0, 0, 1.7));
      height: 100%;
      /* opacity: 0.8; */
      z-index: -1;
    }

    /* Home section content */
    .home1 .content1 {
      display: flex;
      flex-direction: column;
      align-items: center;
      text-align: center;
      /* Center text */
      row-gap: 2rem;
      padding: 1.6rem;
      max-width: 700px;
      /* Prevent content from stretching too wide */
      z-index: 2;
      background-color: rgba(0, 0, 0, 0.5);
      /* Dark transparent background for text readability */
      border-radius: 12px;
    }

    .home1 .content1 h2 {
      font-size: 3.8rem;
      color: var(--maing);
      /* Main color for the title */
      font-weight: bold;
    }

    .home1 .content1 p {
      font-size: 1.4rem;
      color: #fff;
      line-height: 1.5;
    }
  </style>
</head>

<body>
  <?php include 'header-cidb.php'; ?>
  <!-- Hero Section -->
  <section class="home1" id="home1">
    <img src="assests\images\life\sijil.jpg" alt="Home background" class="background-image1">
    <div class="content1">
      <h2>Senarai Semak Pengiktirafan Taraf Bumiputera (STB) CIDB</h2>
      <p>Panduan Lengkap untuk Persediaan Dokumen Permohonan, Pembaharuan, atau Perubahan Maklumat</p>

    </div>
  </section>

  <div class="container">
    <!-- Process Overview -->
    <section class="section fade-in" id="process">
      <div class="section-header">
        <h3><i class="ri-roadmap-line"></i> Proses Permohonan STB</h3>
      </div>
      <div class="section-content">
        <div class="alert alert-info">
          <strong>Penting:</strong> Pastikan anda telah memperoleh atau memperbaharui Perakuan Pendaftaran Kontraktor (PPK) dan Sijil Perolehan Kerja Kerajaan (SPKK) daripada CIDB terlebih dahulu sebelum memohon pengiktirafan taraf Bumiputera.
        </div>

        <div class="process-flow">
          <div class="process-step">
            <div class="step-icon">
              <i class="ri-file-text-line"></i>
            </div>
            <div class="step-title">Sediakan Dokumen</div>
            <p>Kumpul semua dokumen mandatori dan sokongan</p>
          </div>
          <div class="process-step">
            <div class="step-icon">
              <i class="ri-upload-line"></i>
            </div>
            <div class="step-title">Muat Naik</div>
            <p>Muat naik dokumen melalui Sistem CIMS</p>
          </div>
          <div class="process-step">
            <div class="step-icon">
              <i class="ri-search-eye-line"></i>
            </div>
            <div class="step-title">Semakan</div>
            <p>PKK akan menyemak permohonan anda</p>
          </div>
          <div class="process-step">
            <div class="step-icon">
              <i class="ri-award-line"></i>
            </div>
            <div class="step-title">Kelulusan</div>
            <p>Dapatkan sijil maya STB yang boleh dicetak</p>
          </div>
        </div>

        <h4 style="margin-top: 2rem; color: var(--primary-blue);">Jenis-jenis Permohonan STB:</h4>

        <div class="app-types">
          <div class="app-type">
            <h4><i class="ri-add-circle-line"></i> Permohonan Baharu</h4>
            <p>Permohonan kali pertama bagi syarikat yang ingin mendapatkan STB. Tempoh sah laku STB tertakluk kepada tarikh dalam sijil maya yang boleh dicetak melalui Sistem CIMS.</p>
          </div>

          <div class="app-type">
            <h4><i class="ri-refresh-line"></i> Pembaharuan</h4>
            <p>Permohonan untuk syarikat yang telah berdaftar dengan PKK, sama ada STB masih dalam tempoh sah laku atau telah tamat tempoh.</p>
          </div>

          <div class="app-type">
            <h4><i class="ri-edit-line"></i> Perubahan Maklumat</h4>
            <p>Permohonan untuk membuat pindaan terhadap maklumat syarikat seperti perubahan gred, alamat, pemilik, atau ahli lembaga pengarah.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Mandatory Documents -->
    <section class="section fade-in" id="documents">
      <div class="section-header">
        <h3><i class="ri-file-list-3-line"></i> Dokumen Mandatori</h3>
      </div>
      <div class="section-content">
        <div class="alert alert-warning">
          <strong>Perhatian:</strong> PKK berhak menolak permohonan syarikat jika dokumen mandatori dan sokongan tidak dimuat-naik dengan lengkap.
        </div>

        <ul class="doc-list">
          <li class="doc-item">
            <span class="doc-number">1</span>
            <div class="doc-title">Kad Pengenalan dan Surat Beranak/Sijil Kelahiran (Berwarna)</div>
            <div class="doc-details">
              Diperlukan untuk:
              <ul>
                <li>Ahli Lembaga Pengarah</li>
                <li>Pemegang Ekuiti (individu & individu dalam syarikat pemegang ekuiti)</li>
                <li>Penandatangan Cek</li>
                <li>Penama dalam Sijil</li>
                <li>Perakuan Pengesahan Anak Negeri (Sekiranya perlu bagi Sabah & Sarawak)</li>
              </ul>
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">2</span>
            <div class="doc-title">Surat Pengesahan Bank untuk Tahun Semasa</div>
            <div class="doc-details">
              <strong>Nota:</strong> Sila gunakan format yang disediakan oleh PKK.
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">3</span>
            <div class="doc-title">Penyata Caruman KWSP dan Borang A berserta Resit Bayaran</div>
            <div class="doc-details">
              <strong>Keperluan:</strong>
              <ul>
                <li>Terkini (3 bulan dari tarikh permohonan)</li>
                <li>Semua maklumat hendaklah dipaparkan dengan jelas</li>
                <li>Jika Penama/Penandatangan Cek bukan Ahli Lembaga/Pemegang Ekuiti, mereka hendaklah dicarum di bawah syarikat</li>
                <li>Jika syarikat tiada pekerja, surat makluman hendaklah dilampirkan</li>
              </ul>
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">4</span>
            <div class="doc-title">Carta Organisasi Syarikat yang Lengkap dan Terkini</div>
            <div class="doc-details">
              Hendaklah mengandungi nama dan jawatan setiap individu.
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">5</span>
            <div class="doc-title">Borang Pengakuan Pekerjaan (Akuan Berkanun)</div>
            <div class="doc-details">
              <strong>Nota:</strong> Gunakan format yang disediakan. Jika sedang bekerja dengan Kerajaan, Surat Kebenaran melakukan kerja luar (yang disahkan) hendaklah dilampirkan.
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">6</span>
            <div class="doc-title">Peta Lakar yang Lengkap</div>
            <div class="doc-details">
              Dengan mercu tanda dan nama jalan menuju ke premis syarikat.
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">7</span>
            <div class="doc-title">Gambar Hadapan Premis</div>
            <div class="doc-details">
              Gambar yang jelas menunjukkan hadapan bangunan premis syarikat.
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">8</span>
            <div class="doc-title">Dokumen Pemilikan Premis Syarikat</div>
            <div class="doc-details">
              Geran, Perjanjian Sewa yang dimeteri setem, atau dokumen pemilikan premis yang sah.
            </div>
          </li>
        </ul>
      </div>
    </section>

    <!-- Supporting Documents -->
    <section class="section fade-in" id="supporting">
      <div class="section-header">
        <h3><i class="ri-folder-add-line"></i> Dokumen Sokongan (Sekiranya Berkaitan)</h3>
      </div>
      <div class="section-content">
        <div class="alert alert-info">
          <strong>Maklumat:</strong> Dokumen sokongan berikut hendaklah dilampirkan sekiranya berkaitan dengan syarikat anda.
        </div>

        <ul class="doc-list">
          <li class="doc-item">
            <span class="doc-number">1</span>
            <div class="doc-title">e-Info SSM yang Terkini</div>
            <div class="doc-details">
              3 bulan dari tarikh permohonan (Bagi syarikat yang ekuiti dipegang oleh syarikat lain).
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">2</span>
            <div class="doc-title">Salinan Resolusi Penandatangan Cek</div>
            <div class="doc-details">
              Terkini dan disahkan oleh Setiausaha Syarikat (Bagi syarikat ROC).
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">3</span>
            <div class="doc-title">Salinan Perjanjian Perkongsian</div>
            <div class="doc-details">
              Dimeteri setem oleh LHDN (Bagi syarikat ROC/ROB).
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">4</span>
            <div class="doc-title">Borang B – Lesen Perniagaan</div>
            <div class="doc-details">
              Bagi syarikat yang beroperasi di Sabah & Labuan.
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">5</span>
            <div class="doc-title">Borang I – Ekstrak Perniagaan dan Lesen Perniagaan</div>
            <div class="doc-details">
              Bagi syarikat yang beroperasi di Sarawak.
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">6</span>
            <div class="doc-title">Borang CAP 64 dan R22</div>
            <div class="doc-details">
              Bagi syarikat yang beroperasi di Sarawak.
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">7</span>
            <div class="doc-title">Annual Return</div>
            <div class="doc-details">
              Bagi satu tahun kewangan terkini yang disahkan SSM (Bagi ekuiti syarikat yang dipegang oleh entiti syarikat lain).
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">8</span>
            <div class="doc-title">Surat Pengesahan MITI</div>
            <div class="doc-details">
              Bahawa syarikat layak diberikan taraf Bumiputera Controlled Public Listed Company (BCPLC) yang masih sah tempoh kelulusan (Bagi syarikat tersenarai dalam Bursa Malaysia).
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">9</span>
            <div class="doc-title">Minit Mesyuarat Tahunan</div>
            <div class="doc-details">
              Bagi syarikat yang berdaftar dengan Pendaftar Pertubuhan (ROS/Koperasi/Badan Amanah).
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">10</span>
            <div class="doc-title">Undang-undang Tubuh/Perlembagaan</div>
            <div class="doc-details">
              Bagi syarikat yang berdaftar dengan Pendaftar Pertubuhan (ROS/Koperasi/Badan Amanah).
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">11</span>
            <div class="doc-title">Senarai Ahli Jawatankuasa/Lembaga</div>
            <div class="doc-details">
              Ahli Lembaga Pemegang Amanah/Ahli Lembaga Koperasi (Gunakan format yang disediakan) - Bagi syarikat berdaftar dengan ROS/Koperasi/Badan Amanah.
            </div>
          </li>

          <li class="doc-item">
            <span class="doc-number">12</span>
            <div class="doc-title">Penyata Akaun Bank Terkini</div>
            <div class="doc-details">
              3 bulan dari tarikh permohonan.
            </div>
          </li>
        </ul>
      </div>
    </section>
  </div>

  
<?php include 'footer-cidb.php'; ?>


</body>

</html>