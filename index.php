<?php
// Advanced caching and performance headers
header('Cache-Control: max-age=31536000, public');
header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + 31536000));
header('Vary: Accept-Encoding');
header('Link: <critical.min.css>; rel=preload; as=style, <kad-cidb.jpg>; rel=preload; as=image');

// Implement HTTP/2 Server Push for critical assets
if (function_exists('apache_get_modules') && in_array('mod_http2', apache_get_modules())) {
    header('Link: </critical.min.css>; rel=preload; as=style, </kad-cidb.jpg>; rel=preload; as=image', true);
}

// Dynamic content compression
if (extension_loaded('zlib')) {
    ob_start('ob_gzhandler');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Title Tag -->
    <title>CIDB Kad Hijau - Renew Kad Hijau CIDB Secara Online</title>
    <meta name="description" content="Renew kad hijau CIDB & Daftar CIDB secara online dengan cepat di CIDBKadHijau.com." />
    <meta name="keywords" content="CIDB, Kad Hijau, Renew CIDB, Daftar CIDB, Malaysia, Portal CIDB, Pendaftaran Kontraktor, Lesen Binaan Malaysia">

    <!-- Comprehensive Robots Meta -->
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:160, max-video-preview:60">
    <meta name="googlebot" content="index, follow, snippet, archive">
    
    <!-- JSON-LD Schema Markup -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "WebPage",
          "@id": "https://cidbkadhijau.com/",
          "url": "https://cidbkadhijau.com/",
          "name": "CIDB Kad Hijau - Renew Kad Hijau CIDB Secara Online",
          "description": "Renew kad hijau CIDB & Daftar CIDB dengan cepat di CIDB Kad Hijau secara online.",
          
          "publisher": {
            "@type": "Organization",
            "name": "CIDB Kad Hijau",
            "url": "https://cidbkadhijau.com/",
            "logo": {
              "@type": "ImageObject",
              "url": "https://cidbkadhijau.com/icon.png"
            }
          },
          "mainEntityOfPage": "https://cidbkadhijau.com/"
        },
        
      ]
    }
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "Mewah Services CIDB - Khidmat 24 Jam",
      "image": "https://cidbkadhijau.com/icon.png",
      "description": "Pakar pembaharuan dan pendaftaran Kad Hijau CIDB Malaysia. Perkhidmatan 24 jam dengan proses express dan profesional.",
      "@id": "https://cidbkadhijau.com",
      "url": "https://cidbkadhijau.com",
      "telephone": ["+601126165376", "+60169743112"],
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "YOUR_ADDRESS",
        "addressLocality": "YOUR_CITY",
        "postalCode": "YOUR_POSTCODE",
        "addressCountry": "MY"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": YOUR_LATITUDE,
        "longitude": YOUR_LONGITUDE
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
        "opens": "00:00",
        "closes": "23:59"
      },
      "sameAs": [
        "YOUR_FACEBOOK_URL",
        "YOUR_INSTAGRAM_URL",
        "YOUR_LINKEDIN_URL"
      ],
      "priceRange": "$$",
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "reviewCount": "250"
      },
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Perkhidmatan CIDB 24 Jam",
        "itemListElement": [
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Pembaharuan Express Kad Hijau CIDB",
              "description": "Perkhidmatan pembaharuan kad CIDB dalam masa 24 jam",
              "price": "YOURPRICE",
              "priceCurrency": "MYR"
            }
          },
          {
            "@type": "Offer",
            "itemOffered": {
              "@type": "Service",
              "name": "Pendaftaran Kad Hijau Baru",
              "description": "Pendaftaran kad hijau baru dengan proses yang cepat",
              "price": "YOURPRICE",
              "priceCurrency": "MYR"
            }
          }
        ]
      }
    }
    </script>
    
      <!-- Open Graph Enhanced -->
      <meta property="og:locale" content="ms_MY">
      <meta property="og:type" content="website">
      <meta property="og:title" content="CIDB Kad Hijau - Portal Rasmi Renewal">
      <meta property="og:description" content="Platform rasmi untuk renewal dan pendaftaran Kad Hijau CIDB Malaysia">
      <meta property="og:url" content="https://cidbkadhijau.com">
      <meta property="og:site_name" content="CIDB Kad Hijau">
      <meta property="og:image" content="https://cidbkadhijau.com/icon.jpg">
      <meta property="og:image:width" content="1200">
      <meta property="og:image:height" content="630">
      <link rel="amphtml" href="https://cidbkadhijau.com/">
      <!-- Twitter Card -->
      <meta name="twitter:card" content="summary_large_image">
      <meta name="twitter:title" content="CIDB Kad Hijau">
      <meta name="twitter:description" content="Portal rasmi renewal Kad Hijau CIDB">

      <!-- PWA Support -->
    <link rel="manifest" href="manifest.json">
    <meta name="theme-color" content="#0A6E3D">
    <link rel="apple-touch-icon" href="icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon.png">

    

    <link rel="stylesheet" href="./assests/style.css">

    <!-- RemixIcons CDN -->
    <script src="https://kit.fontawesome.com/0ede200358.js" crossorigin="anonymous" defer></script>

    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.min.css" rel="stylesheet">

     <!-- Performance Optimization -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

    <!-- Performance Script Loading -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async defer></script>

    <!-- Web App Capabilities -->
    <meta name="application-name" content="CIDB Kad Hijau">
    <meta name="theme-color" content="#0A6E3D">

    <!-- Canonical URL -->
    <link rel="canonical" href="https://cidbkadhijau.com">

     <!-- Critical CSS -->
    <link rel="stylesheet" href="critical.min.css" media="all">
    <link rel="preload" href="critical.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="critical.min.css"></noscript>
</head>
<body>

<!-- header ends -->

<header>
    <a href="#home" class="logo">MEWAH SERVICES</a>
    <div id="menu-bar" class="ri-menu-3-line"></div>

    <ul class="navbar">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li class="dropdown">
            <a style="cursor: pointer;">Card<span class="arrow-down">&#x25BE;</span></a>
            <ul class="dropdown-menu">
                <li><a href="card.php">Apa itu Kad CIDB</a></li>
                <li><a href="daftar-baru.php">Daftar Baru</a></li>
                <li><a href="renew-kad.php">Pembaharuan Kad</a></li>
                <li><a href="kad-hilang.php">Gantian Kad Hilang</a></li>
            </ul>
        </li>
        <li><a href="#projects">Services</a></li>
        <li><a href="#blog">Blog</a></li>
        <li><a href="#operasi">Operation</a></li>
    </ul>
</header>

<!-- header ends -->
<!-- home section starts -->
<section class="home" id="home">
    
<img src="kad-cidb.jpg" alt="Kad Hijau CIDB Malaysia" class="background-image lazyload" 
             width="1200" height="800"
             srcset="kad-cidb-sm.jpg 300w, kad-cidb-md.jpg 600w, kad-cidb.jpg 1200w"
             sizes="(max-width: 300px) 300px, (max-width: 600px) 600px, 1200px">
    <div class="content">
        <h2>Segera Perbaharui Kad Hijau CIDB Anda!</h2>
        <p>Pakar dalam pendaftaran dan pembaharuan Kad Hijau CIDB Malaysia!</p>
        <span>Hubungi kami sekarang untuk bantuan segera!</span>
        <div class="btn-container">
            <a href="https://wasap.my/601126165376/CIDBKadhijauwebsite" class="btn btn2">+601126165376</a>
            <a href="https://wasap.my/60169743112/CIDBKadhijauwebsite" class="btn btn2">+60169743112</a>
        </div>
    </div>
    
</section>
<!-- home section ends -->

<!-- about section starts -->
<section class="about" id="about">
    <h2 class="heading">Mewah Services</h2>
        <p class="subtext">Portal Rasmi bagi Pengurusan Pekerja & Syarikat Dengan Lembaga Pembangunan Industri Pembinaan Malaysia (CIDB)</p>
        <span class="description">CIDB Green Card juga dikenali sebagai Kad Hijau, Kad CIDB atau Kad Personal Binaan CIDB.</span>

    <div class="container">

        <div class="wrapper">
            <!-- Content on the left -->
            <div class="content">
                <h2>Mewah services adalah sebuah syarikat setiausaha yang mempunyai kepakaran dalam Daftar & perbaharui kad hijau baru. Dan kami juga pakar dalam bidang Pendaftaran Lesen Kontraktor CIDB. Kami adalah sebuah syarikat berdaftar yang bertauliah dan  berpengalaman dalam bidang perlesenan dan pendaftaran lesen kontraktor CIDB, MOF dan Kad Hijau CIDB. Kami amat komited dalam memberikan perkhidmatan yang terbaik demi kepuasan pelanggan.
                    <br><br>
                    <span>VISI KAMI</span><br> 
                    <span style="font-weight: 500;">Menjadi sebuah syarikat  setiausaha dan perunding perniagaan yang komited.</span><br><br>
                    <span>MISI KAMI</span><br>
                    <span style="font-weight: 500;">Memastikan setiap pelanggan berpuas hati dengan khidmat kami.</span>
                </h2>
            </div>
            
            <!-- Consultation Services List on the right -->
            <div class="list-container">
                <h3>Consultation Services</h3>
                <ul>
                <li>✓ Pendaftaran & Pembaharuan Kad Hijau CIDB</li>
                        <li>Pendaftaran & Pembaharuan Lesen CIDB G1-G7</li>
                        <li>Pendaftaran & Pembaharuan Lesen MOF</li>
                        <li>Pendaftaran & Pembaharuan SPKK & STB</li>
                        <li>Pendaftaran & Pembaharuan Sijil Taraf Bumi</li>
                        <li>Kemaskini Lesen MOF/CIDB</li>
                        <li>Kenaikan/Penurunan Gred CIDB</li>
                        <li>Pendaftaran Sijil ISO</li>
                        <li>Pendaftaran & Pembaharuan SCORE</li>
                </ul>
            </div>
        </div>

    </div>
</section>




<!-- Pricing Section Starts -->
<section class="pricing" id="pricing">
    <div class="container">
        <!-- Kad Hijau Section -->
        <h2 class="heading">Kad <span>Hijau</span> / Kad Personel Binaan CIDB</h2>
        
        <div class="certificate-section">
            <!-- Image Container -->
            <div class="image">
                <a href="card.php">
                    <img src="./assests/images/project/kad-personel-binaan-baru-cidb.jpg" alt="CIDB Kad Hijau Image">
                </a>
            </div>

            <!-- Description -->
            <div class="desc">
                <p>
                    Merupakan perakuan bagi pekerja binaan yang telah menjalani kursus & latihan keselamatan di tapak pembinaan yang dikeluarkan oleh Lembaga Pembangunan Industri Pembinaan Malaysia â€“ Construction Industry Development Board (CIDB). 
                    Setiap pekerja binaan (tempatan/asing) WAJIB memiliki Kad Hijau yang sah selaras dengan Seksyen 33, Akta CIDB 520.
                    Berkuatkuasa mulai 15 Oktober 2019.
                </p>
                <a href="card.php" class="btn primary-btn">Apa itu Kad Hijau CIDB</a>
                <a href="https://cims.cidb.gov.my/pbsearch/Forms/Transactions/search.aspx" class="btn secondary-btn">Semak Status Kad Hijau Anda</a>
            </div>
        </div>

        <!-- Pakej Harga Section -->
        <h2 class="heading">Pakej Harga Kad Hijau</h2>
        <div class="box-container">
            <!-- Box 1 -->
            <div class="box">
                <div class="title">
                    <h2>Daftar Baru untuk Warga Tempatan</h2>
                    <span>(Termasuk Yuran Kursus)</span>
                </div>
                <div class="desc">
                    <ul>
                        <li><span>RM200</span> untuk 1 tahun</li>
                        <li><span>RM225</span> untuk 2 tahun</li>
                        <li><span>RM250</span> untuk 3 tahun</li>
                        <li><span>RM275</span> untuk 4 tahun</li>
                        <li><span>RM300</span> untuk 5 tahun</li>
                    </ul>
                </div>
                <a href="https://www.watsap.my/601126165376/CIDBKadhijauwebsite" class="btn">Daftar Sekarang</a>
            </div>

            <!-- Box 2 -->
            <div class="box">
                <div class="title">
                    <h2>Perbaharui Kad Hijau untuk Warga Tempatan</h2>
                </div>
                <div class="desc">
                    <ul>
                        <li><span>RM95</span> untuk 1 tahun</li>
                        <li><span>RM120</span> untuk 2 tahun</li>
                        <li><span>RM145</span> untuk 3 tahun</li>
                        <li><span>RM170</span> untuk 4 tahun</li>
                        <li><span>RM195</span> untuk 5 tahun</li>
                    </ul>
                </div>
                <a href="https://www.watsap.my/601126165376/CIDBKadhijauwebsite" class="btn">Perbaharui Sekarang</a>
            </div>

            <!-- Box 3 -->
            <div class="box">
                <div class="title">
                    <h2>Harga untuk Warga Asing</h2>
                    <span>(Bergantung pada tarikh tamat tempoh permit.)</span>
                </div>
                <div class="desc">
                    <ul>
                        <li><span>RM300</span> untuk daftar baru</li>
                        <li><span>RM200</span> untuk renew</li>
                    </ul>
                </div>
                <a href="https://www.watsap.my/601126165376/CIDBKadhijauwebsite" class="btn">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</section>




<section class="steps" id="steps">
    <div class="steps-container">
        <h2>Langkah Pembaharuan Kad Personel Binaan (Kad Hijau CIDB)</h2>
        
        <!-- Step Cards -->
        <div class="steps">
            <div class="step">
                <div class="step-header">Langkah 1</div>
                <div class="step-content">
                    <i class="ri-file-user-line"></i>
                    <h3>Isi Borang</h3>
                    <p>Sertakan salinan IC (depan dan belakang) untuk pengesahan.</p>
                </div>
            </div>

            <div class="step">
                <div class="step-header">Langkah 2</div>
                <div class="step-content">
                    <i class="ri-bank-card-2-line"></i>
                    <h3>Buat Pembayaran</h3>
                    <p>Bayar melalui saluran yang ditetapkan dan simpan bukti pembayaran.</p>
                </div>
            </div>

            <div class="step">
                <div class="step-header">Langkah 3</div>
                <div class="step-content">
                    <i class="ri-timer-line"></i>
                    <h3>Permohonan Diproses</h3>
                    <p>Tunggu makluman status permohonan.</p>
                </div>
            </div>

            <div class="step">
                <div class="step-header">Langkah 4</div>
                <div class="step-content">
                    <i class="ri-pass-valid-line"></i>
                    <h3>Pas Sementara</h3>
                    <p>Gunakan pas sementara sehingga kad fizikal siap (anggaran 2 minggu).</p>
                </div>
            </div>

            <div class="step">
                <div class="step-header">Langkah 5</div>
                <div class="step-content">
                    <i class="ri-mail-send-line"></i>
                    <h3>Kad Siap</h3>
                    <p>Kad dihantar ke alamat anda. Semak status penghantaran secara berkala.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Promo Section -->
    <div class="promo-section">
        <h2>Tawaran Khas untuk Pemilik Kad NIOSH OGSP!</h2>
            
            <p class="promo-description">
                Kami menawarkan peluang mudah untuk memohon Kad Hijau CIDB. Hanya kemas 
                kini maklumat Kad NIOSH OGSP anda â€” tanpa perlu hadir kelas. Mohon sekarang 
                dan terus terima Kad Hijau CIDB anda!
            </p>
            
            <p class="promo-details">
                Jika anda sudah memiliki Kad NIOSH seperti OGSP, NTSP, EOSP, atau NTMSP, 
                anda boleh terus buat Kad Hijau CIDB tanpa kursus.
                <strong>Jimat masa dan kos, proses selesai dalam 3 hari bekerja.</strong>
            </p>

            <p class="promo-tajuk">Senarai safety passport keluaran NIOSH yang dibenarkan</p>
            <ul class="safety-list">
                <li><strong>OGSP</strong> - Oil And Gas Safety Passport</li>
                <li><strong>EOSP</strong> - Expressway Operation Safety Passport</li>
                <li><strong>NTSP</strong> - NIOSH TNB Safety Passport</li>
                <li><strong>NTMSP</strong> - NIOSH Telekom Safety Passport</li>
                <li><strong>ANSP</strong> - Air Selangor-NIOSH Safety Passport</li>
            </ul>
        <p class="note">Termasuk semua safety passport keluaran NIOSH.</p>

        <img src="assests/images/life/niosh.jpg" alt="cidb Kad Hijau Image">

        <div class="features-grid">
            <div class="feature-card">
                <h3><span class="icon">ðŸ“š</span> Tiada Kehadiran Kelas Diperlukan</h3>
                <p>Mohon Kad Hijau CIDB tanpa perlu hadir kursus.</p>
            </div>

            <div class="feature-card">
                <h3><span class="icon">ðŸ’°</span> Jimat Masa & Duit</h3>
                <p>Proses yang cepat dan penjimatan kos untuk menukar OGSP kepada Kad Hijau CIDB.</p>
            </div>

            <div class="feature-card">
                <h3><span class="icon">âš¡</span> Syarat</h3>
                <p>Memiliki Kad NIOSH OGSP adalah syarat kelayakan.</p>
            </div>
        </div>

        <div class="cta-section">
            <a href="https://www.watsap.my/601126165376/CIDBKadhijauwebsite" class="cta-button">
                Convert OGSP Card to CIDB Card
                <span>â†’</span>
            </a>
        </div>
    </div>
</section>



<section class="projects" id="projects">
    <h2 class="heading" style="font-size: 3rem; margin-top: 3rem;
    margin-bottom: 5rem;
    text-align: center;"><span>Perkhidmatan</span> Kami</h2>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="./assests/images/project/Lesen-CIDB-1.jpg" alt="CIDB Kad Hijau Image">
            </div>
            <div class="desc">
                <h3>Sijil PPK</h3>
               
                <p>Sijil Perakuan Pendaftaran Kontraktor (PPK) adalah sijil yang dikeluarkan oleh CIDB kepada syarikat kontraktor berdaftar mengikut Akta 520 dan peraturan di bawahnya. Pendaftaran dengan CIDB adalah wajib bagi kontraktor yang terlibat dalam kerja-kerja pembinaan. Untuk memohon PPK, syarikat perlu memiliki pendaftaran SSM.</p>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./assests/images/project/Lesen-CIDB-SPKK.jpg" alt="CIDB Kad Hijau Image">
            </div>
            <div class="desc">
                <h3>Sijil Perakuan Kerja Kerajaan (SPKK)
                </h3>
                
                <p>SPKK adalah sijil yang mengesahkan bahawa penama layak menyertai projek pembinaan kerajaan Malaysia. Penama boleh terdiri daripada warganegara Malaysia seperti pemilik perniagaan, pengarah, atau kakitangan syarikat yang bekerja sepenuh masa. Untuk memohon SPKK, syarikat perlu telah beroperasi lebih dari 3 tahun.</p>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./assests/images/project/Lesen-CIDB-STB-.jpg" alt="CIDB Kad Hijau Image">
            </div>
            <div class="desc">
                <h3>Sijil Taraf Bumiputera (STB)</h3>
                <!-- <span>21 Sep, 2024</span> -->
                <p>Sijil Taraf Bumiputera (STB) diperkenalkan oleh Kementerian Kewangan Malaysia untuk syarikat dan perniagaan yang memenuhi syarat bumiputera. Pendaftarannya berbeza daripada sijil MOF, dan hanya pembekal tertentu yang layak. Dengan STB, pembekal boleh menyertai tender dan sebut harga yang dikhususkan untuk syarikat bumiputera sahaja.</p>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./assests/images/project/lesen-iaf.jpg" alt="CIDB Kad Hijau Image">
            </div>
            <div class="desc">
                <h3>SIJIL ISO</h3>
                <!-- <span>ISO 9001:2015</span> -->
                <p>
                    Sijil ISO adalah standard yang menetapkan elemen asas dalam sistem kualiti untuk memastikan perkhidmatan organisasi memenuhi kehendak pelanggan dan keperluan undang-undang secara konsisten. Organisasi menggunakan standard ini untuk menunjukkan keupayaan mereka dalam menyediakan produk dan perkhidmatan yang berkualiti. Selain itu, kontraktor yang ingin mendaftar SCORE dan SPKK G7 perlu memiliki pendaftaran ISO terlebih dahulu.</p>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./assests/images/project/lesen-score.jpg" alt="CIDB Kad Hijau Image">
            </div>
            <div class="desc">
                <h3>SCORE-CIDB</h3>
                <!-- <span>ISO 9001:2015</span> -->
                <p>
                    Program Penilaian Keupayaan dan Kemampuan Kontraktor (SCORE) oleh CIDB, dibangunkan bersama SME Corp, bertujuan mengukur keupayaan kontraktor tempatan dan asing di Malaysia. Program ini selaras dengan Program Transformasi Industri Pembinaan (CITP) 2016-2020, yang berfokus pada peningkatan kualiti, keselamatan, dan profesionalisme industri. Penilaian SCORE-CIDB dilakukan melalui analisis terhadap 7 parameter yang ditetapkan untuk kontraktor tempatan.</p>
            </div>
        </div>

        <div class="box">
            <div class="image">
                <img src="./assests/images/project/Mof.jpg" alt="CIDB Kad Hijau Image">
            </div>
            <div class="desc">
                <h3>Sijil MOF</h3>
                <!-- <span>24 Sep, 2024</span> -->
                <p>Sijil Kementerian Kewangan (MOF) adalah wajib bagi pembekal/kontraktor yang ingin memohon tender kerajaan. Tanpa sijil ini, syarikat tidak layak menyertai tender kerajaan. Syarikat dengan 51% pemilikan Bumiputera juga boleh memohon Sijil Taraf Bumiputera, yang memberi kelebihan dalam tender khusus untuk syarikat Bumiputera.</p>
            </div>
        </div>
    </div>
</section>

<section class="life" id="blog">
    <h2 class="heading"><span>Blog</span></h2>
  
    <div class="container">
      <img id="curimg" class="center" src="./assests/images/life/kadhijau1.jpg" alt="CIDB Kad Hijau Image">
      
      <div class="wrapper">
        <div id="img-gallery">
            <span id="prev" class="prev-next fas fa-chevron-left"></span>
            <div id="lifeimg-gallery">
                <img src="./assests/images/life/kadhijau1.jpg" alt="CIDB Kad Hijau Image 1" class="lifeimg active">
                <img src="./assests/images/life/kadhijau2.jpg" alt="CIDB Kad Hijau Image 2" class="lifeimg">
                <img src="./assests/images/life/kadhijau3.jpg" alt="CIDB Kad Hijau Image 3" class="lifeimg">
                <img src="./assests/images/life/kadhijau4.jpg" alt="CIDB Kad Hijau Image 4" class="lifeimg">
                <img src="./assests/images/life/kadhijau5.jpg" alt="CIDB Kad Hijau Image 5" class="lifeimg">
                <img src="./assests/images/life/kadhijau6.jpg" alt="CIDB Kad Hijau Image 6" class="lifeimg">
            </div>
            <span id="next" class="prev-next fas fa-chevron-right"></span>
            
        </div>
      </div>
    </div>
</section>

<!-- blog section starts -->
<section class="blog" id="operasi">
    <h2 class="heading" style="font-size: 3rem; margin-top: 3rem;
    margin-bottom: 5rem;
    text-align: center;"><span>Operasi</span> Khas Oleh CIDB</h2>

    <div class="box-container">
        <div class="box">
            <!-- Image slider -->
            <div class="image-slider">
                <div class="slides">
                    <img src="./assests/images/blog/kadCidb11.jpg" alt="CIDB Kad Hijau Image Khas 1">
                    <img src="./assests/images/blog/kadCidb12.jpg" alt="CIDB Kad Hijau Image Khas 2">
                    <img src="./assests/images/blog/kadCidb13.jpg" alt="CIDB Kad Hijau Image Khas 3">
                    <img src="./assests/images/blog/kadCidb14.jpg" alt="CIDB Kad Hijau Image Khas 4">
                    <img src="./assests/images/blog/kadCidb15.jpg" alt="CIDB Kad Hijau Image Khas 5">
                    <img src="./assests/images/blog/kadCidb16.jpg" alt="CIDB Kad Hijau Image Khas 6">
                    <img src="./assests/images/blog/kadCidb17.jpg" alt="CIDB Kad Hijau Image Khas 7">
                    <img src="./assests/images/blog/kadCidb18.jpg" alt="CIDB Kad Hijau Image Khas 8">
                    <img src="./assests/images/blog/kadCidb19.jpg" alt="CIDB Kad Hijau Image Khas 9">
                    <img src="./assests/images/blog/kadCidb20.jpg" alt="CIDB Kad Hijau Image Khas 10">
                    <img src="./assests/images/blog/kadCidb21.jpg" alt="CIDB Kad Hijau Image Khas 11">
                </div>
            </div>
            <!-- Description -->
            <div class="desc">
                <p>
                    Operasi Khas Sempadan dilalukan di tapak pembinaan. Skop operasi khas ini menumpukan pematuhan Akreditasi Pekerja Binaan Mahir di bawah Akta 520. Operasi Khas Sempadan juga diadakan bagi memastikan pemeriksaan tapak projek antara kedua-dua sempadan ini dapat dipantau dengan lebih berkesan. Semasa Operasi berlangsung, terdapat beberapa ketidakpatuhan yang ditemui semasa pemeriksaan. Antaranya adalah Perakuan Pendaftaran yang tamat tempoh, gagal mengisytihar projek pembinaan, dan pekerja binaan mahir yang tidak diakredit oleh CIDB. Turut serta dalam operasi ini adalah daripada Sektor Penguatkuasa CIDB Ibu Pejabat, Sektor Kontraktor Levi CIDB Ibu Pejabat dan Akademi Binaan Malaysia Wilayah Tengah (ABM).
                </p>
            </div>
        </div>
    </div>
</section>

   <!-- Trust Indicators Section -->
   <section class="trust-indicators">
   </section>

<section class="testimonials">
        <div class="testimonial-slider">
        </div>
</section>

<section class="faq" id="faq">
        <div class="faq-container">
        </div>
</section>

<div id="live-chat"></div>

<section class="faq" id="faq">
        <div class="faq-container">
            <!-- Add your FAQs here -->
        </div>
    </section>
    <!-- WhatsApp Floating Button -->
    <a href="https://www.watsap.my/601126165376/CIDBKadhijauwebsite" class="whatsapp-float" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Chat">
        <div class="whatsapp-btn">
            <i class="fab fa-whatsapp"></i> Kami Sedia Membantu Anda!
        </div>
    </a>


<?php include 'footer.php' ?>

  <!-- Structured Data for FAQ -->
  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [{
        "@type": "Question",
        "name": "Apakah itu Kad Hijau CIDB?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Kad Hijau CIDB atau Kad Personel Binaan adalah perakuan wajib bagi pekerja binaan yang telah menjalani kursus & latihan keselamatan di tapak pembinaan, dikeluarkan oleh CIDB Malaysia."
        }
      }, {
        "@type": "Question",
        "name": "Berapa lama proses pembaharuan Kad Hijau CIDB?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Dengan Mewah Services, proses pembaharuan Kad Hijau CIDB boleh diselesaikan dalam tempoh 24 jam bekerja."
        }
      }]
    }
    </script>

    <!-- Analytics Implementation -->
    <?php if (!isset($_SERVER['HTTP_DNT']) || $_SERVER['HTTP_DNT'] != 1): ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=YOUR-GA4-ID"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());
        gtag('config', 'YOUR-GA4-ID', {
            'anonymize_ip': true,
            'cookie_flags': 'SameSite=None;Secure'
        });
    </script>
    <?php endif; ?>

    <div id="cookie-consent" class="cookie-banner" style="display: none;">
        <p>
           <a href="privacy-policy.php"></a>
        </p>
        <button id="accept-cookies"></button>
    </div>

    <script>
        // Cookie Consent Handler
        if (!localStorage.getItem('cookieConsent')) {
            document.getElementById('cookie-consent').style.display = 'block';
        }

        document.getElementById('accept-cookies').addEventListener('click', function() {
            localStorage.setItem('cookieConsent', 'true');
            document.getElementById('cookie-consent').style.display = 'none';
        });
    </script>

    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday",
        "Tuesday",
        "Wednesday",
        "Thursday",
        "Friday"
      ],
      "opens": "09:00",
      "closes": "18:00"
    }
    </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script src="./assests/script.js"></script>

<script>
        // Performance monitoring code
        performance.mark('app-loaded');
</script>

</body>
</html>