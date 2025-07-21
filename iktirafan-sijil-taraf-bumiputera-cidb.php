<!DOCTYPE html>
<html lang="ms">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!-- <link rel="stylesheet" href="./assests/style.css"> -->

    <!-- RemixIcons CDN -->

    <script src="https://kit.fontawesome.com/0ede200358.js" crossorigin="anonymous" defer></script>

    <link href="
    https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css
    " rel="stylesheet">

    <?php include 'header-cidb.php' ?>

<!-- header ends -->

  <style>
    /* @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap'); */

    :root {
      /* Your original color palette */
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

      /* Enhanced variations of your colors */
      --birumuda-light: #5ee4d3;
      --birumuda-dark: #1ab5a1;
      --maing-light: #4bb5a2;
      --maing-dark: #1e8a73;
      --teal-light: #0a8a79;
      --teal-dark: #014238;
      --biru-light: #2575b8;
      --biru-dark: #003d6b;

      /* Additional grays for better contrast */
      --gray-200: #e2e8f0;
      --gray-300: #cbd5e1;
      --gray-700: #334155;
      --gray-900: #0f172a;
      --white: #ffffff;

      /* Shadows and effects */
      --shadow-sm: 0 1px 2px 0 rgb(0 0 0 / 0.05);
      --shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
      --shadow-md: 0 4px 6px -1px rgb(0 0 0 / 0.1), 0 2px 4px -2px rgb(0 0 0 / 0.1);
      --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
      --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
      --blur-backdrop: blur(20px);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background: var(--white);
      min-height: 100vh;
      color: var(--gray-800);
      line-height: 1.7;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
    }

    .hero-header {
      background: linear-gradient(135deg, var(--birumuda), var(--maing));
      color: var(--teks);
      padding: 3rem 2rem;
      text-align: center;
      border-radius: 16px;
      margin-bottom: 3rem;
      box-shadow: 0 8px 32px rgba(45, 214, 193, 0.15);
      position: relative;
      overflow: hidden;
    }

    .hero-header::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(45deg, transparent, rgba(255, 255, 255, 0.1), transparent);
      opacity: 0;
      animation: shimmer 3s ease-in-out infinite;
      z-index: 1;
    }

    .hero-header h1,
    .hero-header p {
      position: relative;
      z-index: 2;
    }

    .hero-header h1 {
      font-size: clamp(2rem, 4vw, 3rem);
      font-weight: 700;
      color: var(--white);
      margin-bottom: 1rem;
      text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
      line-height: 1.2;
    }

    .hero-header p {
      font-size: 1.25rem;
      color: rgba(255, 255, 255, 0.95);
      font-weight: 400;
      margin-bottom: 2rem;
    }

    .image-section {
      display: flex;
      justify-content: center;
      margin: 2rem 0;
      opacity: 0;
      animation: fadeInUp 0.6s ease-out 0.3s forwards;
    }

    .image-container {
      position: relative;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: var(--shadow-lg);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      max-width: 800px;
      /* Increased from 500px */
      width: 90%;
      /* Use 90% of available width */
      max-height: 85vh;
      /* Prevent overflow on smaller screens */
    }

    .image-container:hover {
      transform: translateY(-5px) scale(1.02);
      box-shadow: var(--shadow-xl);
    }

    .image-container img {
      width: 100%;
      height: 80vh;
      /* Increased from 70vh */
      object-fit: contain;
      /* Changed from 'cover' to 'contain' to show all image content */
      display: block;
      background-color: #f8f9fa;
      /* Optional: light background for letterboxing */
    }

    .image-overlay {
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      background: linear-gradient(transparent, rgba(0, 0, 0, 0.7));
      color: white;
      padding: 1rem;
      text-align: center;
      font-size: 0.875rem;
      font-weight: 500;
    }

    .section {
      background: var(--white);
      border: 1px solid var(--gray-200);
      border-radius: 12px;
      padding: 2rem;
      margin-bottom: 2rem;
      box-shadow: 0 2px 12px rgba(0, 0, 0, 0.08);
      transition: all 0.3s ease;
      opacity: 0;
      animation: fadeInUp 0.6s ease-out forwards;
    }

    .section:nth-child(2) {
      animation-delay: 0.1s;
    }

    .section:nth-child(3) {
      animation-delay: 0.2s;
    }

    .section:nth-child(4) {
      animation-delay: 0.3s;
    }

    .section:nth-child(5) {
      animation-delay: 0.4s;
    }

    .section:nth-child(6) {
      animation-delay: 0.5s;
    }

    .section:hover {
      transform: translateY(-3px);
      box-shadow: 0 8px 28px rgba(0, 0, 0, 0.12);
      border-color: var(--birumuda);
    }

    .section h2 {
      font-size: 1.75rem;
      font-weight: 600;
      color: var(--gray-900);
      margin-bottom: 1.5rem;
      position: relative;
      padding-left: 1rem;
    }

    .section h2::before {
      content: '';
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 4px;
      background: linear-gradient(135deg, var(--birumuda), var(--maing));
      border-radius: 2px;
    }

    .checklist {
      list-style: none;
      padding: 0;
      display: grid;
      gap: 1rem;
    }

    .checklist li {
      display: flex;
      align-items: flex-start;
      padding: 1.25rem;
      background: var(--gray-50);
      border-radius: 10px;
      border: 1px solid var(--gray-200);
      transition: all 0.3s ease;
      position: relative;
      overflow: hidden;
    }

    .checklist li::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 4px;
      height: 100%;
      background: var(--birumuda);
      transform: scaleY(0);
      transition: transform 0.3s ease;
    }

    .checklist li:hover {
      background: var(--white);
      border-color: var(--birumuda);
      transform: translateX(6px);
      box-shadow: 0 4px 20px rgba(45, 214, 193, 0.15);
    }

    .checklist li:hover::before {
      transform: scaleY(1);
    }

    .icon {
      font-size: 1.25rem;
      margin-right: 1rem;
      flex-shrink: 0;
      width: 2.25rem;
      height: 2.25rem;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 8px;
      background: var(--gray-100);
      color: var(--teal);
      transition: all 0.3s ease;
      border: 1px solid var(--gray-200);
    }

    .checklist li:hover .icon {
      background: var(--birumuda);
      color: var(--white);
      transform: scale(1.05);
      border-color: var(--birumuda);
    }

    .icon.check {
      background: var(--gray-100);
      color: var(--maing);
    }

    .icon.id {
      background: var(--gray-100);
      color: var(--biru);
    }

    .icon.bank {
      background: var(--gray-100);
      color: var(--teal);
    }

    .icon.office {
      background: var(--gray-100);
      color: var(--shadowg);
    }

    .text-content {
      flex: 1;
      font-size: 1rem;
      color: var(--gray-700);
      line-height: 1.6;
    }

    .text-content strong {
      color: var(--gray-900);
      font-weight: 600;
    }

    .floating-elements {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
      z-index: -1;
      overflow: hidden;
    }

    .floating-circle {
      position: absolute;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--birumuda), var(--maing));
      opacity: 0.03;
      animation: float 8s ease-in-out infinite;
    }

    .floating-circle:nth-child(1) {
      width: 120px;
      height: 120px;
      top: 10%;
      left: 5%;
      animation-delay: 0s;
    }

    .floating-circle:nth-child(2) {
      width: 80px;
      height: 80px;
      top: 50%;
      right: 10%;
      animation-delay: 3s;
    }

    .floating-circle:nth-child(3) {
      width: 100px;
      height: 100px;
      bottom: 15%;
      left: 15%;
      animation-delay: 6s;
    }

    @keyframes shimmer {
      0% {
        transform: translateX(-100%);
        opacity: 0;
      }

      50% {
        opacity: 1;
      }

      100% {
        transform: translateX(100%);
        opacity: 0;
      }
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes float {

      0%,
      100% {
        transform: translateY(0px) rotate(0deg);
      }

      33% {
        transform: translateY(-15px) rotate(120deg);
      }

      66% {
        transform: translateY(15px) rotate(240deg);
      }
    }

    @media (max-width: 768px) {
      .container {
        padding: 1rem;
      }

      .hero-header {
        padding: 2rem 1rem;
        border-radius: 16px;
      }

      .section {
        padding: 1.5rem;
        border-radius: 16px;
      }

      .section h2 {
        font-size: 1.5rem;
      }

      .checklist li {
        flex-direction: column;
        gap: 0.5rem;
        padding: 1rem;
      }

      .icon {
        align-self: flex-start;
        margin-bottom: 0.5rem;
      }

      .image-container {
        max-width: 250px;
      }

      .image-container img {
        height: 100vh;
      }
    }

    @media (max-width: 480px) {
      .hero-header h1 {
        font-size: 1.75rem;
      }

      .hero-header p {
        font-size: 1rem;
      }

      .section h2 {
        font-size: 1.25rem;
      }
    }
  </style>
</head>

<body>
  <div class="floating-elements">
    <div class="floating-circle"></div>
    <div class="floating-circle"></div>
    <div class="floating-circle"></div>
  </div>

  <div class="container">
    <div class="hero-header">
      <h1>Senarai Semak Pengiktirafan Taraf Bumiputera (STB) CIDB</h1>
      <p>Persediaan Dokumen untuk Permohonan, Pembaharuan, atau Perubahan Maklumat</p>
    </div>

    <div class="image-section">
      <div class="image-container">
        <img src="bumi-putera-cidb.jpg" alt="Contoh Premis dan Dokumen STB CIDB">
        <div class="image-overlay">
          Contoh Premis Operasi Syarikat dan Dokumen Berkaitan
        </div>
      </div>
    </div>

    <div class="section">
      <h2>Jenis Permohonan</h2>
      <ul class="checklist">
        <li>
          <div class="icon check">✅</div>
          <div class="text-content">
            <strong>Permohonan Baharu:</strong> Untuk syarikat yang belum mempunyai STB.
          </div>
        </li>
        <li>
          <div class="icon check">🔄</div>
          <div class="text-content">
            <strong>Pembaharuan:</strong> Untuk memperbaharui tempoh sah laku STB.
          </div>
        </li>
        <li>
          <div class="icon check">✏️</div>
          <div class="text-content">
            <strong>Perubahan Maklumat:</strong> Untuk pindaan gred, alamat, pemilik, dsb.
          </div>
        </li>
      </ul>
    </div>

    <div class="section">
      <h2>Syarat Utama Sebelum Memohon</h2>
      <ul class="checklist">
        <li>
          <div class="icon check">📋</div>
          <div class="text-content">
            Dapatkan atau perbaharui Perakuan Pendaftaran Kontraktor (PPK).
          </div>
        </li>
        <li>
          <div class="icon check">🏛️</div>
          <div class="text-content">
            Dapatkan Sijil Perolehan Kerja Kerajaan (SPKK).
          </div>
        </li>
        <li>
          <div class="icon check">📁</div>
          <div class="text-content">
            Pastikan dokumen wajib dan sokongan lengkap.
          </div>
        </li>
      </ul>
    </div>

    <div class="section">
      <h2>Dokumen Mandatori</h2>
      <ul class="checklist">
        <li>
          <div class="icon id">🪪</div>
          <div class="text-content">
            Kad Pengenalan & Sijil Lahir (Berwarna) untuk Ahli Lembaga Pengarah, Pemegang Ekuiti, Penandatangan Cek, Penama dalam Sijil.
          </div>
        </li>
        <li>
          <div class="icon check">🏴</div>
          <div class="text-content">
            Perakuan Anak Negeri (untuk Sabah & Sarawak, jika perlu).
          </div>
        </li>
        <li>
          <div class="icon bank">🏦</div>
          <div class="text-content">
            Surat Pengesahan Bank Tahun Semasa (ikut format CIDB).
          </div>
        </li>
        <li>
          <div class="icon check">💰</div>
          <div class="text-content">
            Penyata Caruman KWSP & Borang A dengan resit bayaran (3 bulan terkini).
          </div>
        </li>
        <li>
          <div class="icon check">📄</div>
          <div class="text-content">
            Surat makluman jika syarikat tiada pekerja.
          </div>
        </li>
        <li>
          <div class="icon office">📊</div>
          <div class="text-content">
            Carta Organisasi Syarikat (nama & jawatan).
          </div>
        </li>
        <li>
          <div class="icon check">📝</div>
          <div class="text-content">
            Borang Pengakuan Pekerjaan (Akuan Berkanun).
          </div>
        </li>
        <li>
          <div class="icon check">✉️</div>
          <div class="text-content">
            Surat Kebenaran Kerja Luar (jika bekerja dengan kerajaan).
          </div>
        </li>
        <li>
          <div class="icon office">🗺️</div>
          <div class="text-content">
            Peta Lakar ke Premis (mercu tanda & nama jalan).
          </div>
        </li>
        <li>
          <div class="icon office">📸</div>
          <div class="text-content">
            Gambar Hadapan Premis.
          </div>
        </li>
        <li>
          <div class="icon office">🏢</div>
          <div class="text-content">
            Dokumen Pemilikan Premis / Geran / Perjanjian Sewa bermeterai setem.
          </div>
        </li>
      </ul>
    </div>

    <div class="section">
      <h2>Dokumen Sokongan (Jika Berkaitan)</h2>
      <ul class="checklist">
        <li>
          <div class="icon check">💼</div>
          <div class="text-content">
            e-Info SSM terkini (jika syarikat pegang ekuiti lain).
          </div>
        </li>
        <li>
          <div class="icon check">📋</div>
          <div class="text-content">
            Salinan Resolusi penandatangan cek (disahkan Setiausaha Syarikat).
          </div>
        </li>
        <li>
          <div class="icon check">🤝</div>
          <div class="text-content">
            Salinan Perjanjian Perkongsian (dimeterai LHDN).
          </div>
        </li>
        <li>
          <div class="icon check">📜</div>
          <div class="text-content">
            Borang B – Lesen Perniagaan (Sabah & Labuan).
          </div>
        </li>
        <li>
          <div class="icon check">📋</div>
          <div class="text-content">
            Borang I – Ekstrak Perniagaan & Lesen Perniagaan (Sarawak).
          </div>
        </li>
        <li>
          <div class="icon check">📄</div>
          <div class="text-content">
            Borang CAP 64 dan R22 (Sarawak).
          </div>
        </li>
        <li>
          <div class="icon check">📊</div>
          <div class="text-content">
            Annual Return tahun kewangan terkini disahkan SSM.
          </div>
        </li>
        <li>
          <div class="icon check">🏛️</div>
          <div class="text-content">
            Surat pengesahan MITI (syarikat Bursa Malaysia, BCPLC).
          </div>
        </li>
        <li>
          <div class="icon check">📝</div>
          <div class="text-content">
            Minit Mesyuarat Tahunan (Pendaftar Pertubuhan/Koperasi/Badan Amanah).
          </div>
        </li>
        <li>
          <div class="icon check">⚖️</div>
          <div class="text-content">
            Undang-undang Tubuh/Perlembagaan (Pendaftar Pertubuhan/Koperasi/Badan Amanah).
          </div>
        </li>
        <li>
          <div class="icon check">👥</div>
          <div class="text-content">
            Senarai Ahli Jawatankuasa/Lembaga Pemegang Amanah/Koperasi.
          </div>
        </li>
        <li>
          <div class="icon bank">💳</div>
          <div class="text-content">
            Penyata akaun bank terkini (3 bulan dari tarikh permohonan).
          </div>
        </li>
      </ul>
    </div>

  </div>
  <?php include 'footer-cidb.php' ?>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->

  <!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->

  <!-- <script src="./assests/script.js"></script> -->

</body>

</html>