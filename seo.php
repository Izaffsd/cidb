<?php
/**
 * Fixed SEO.php - Advanced SEO Implementation for CIDB Kad Hijau Website
 * Optimized for Malaysian search queries and local SEO
 * Include this file in your pages: include_once 'seo.php';
 * Author: Advanced SEO Optimization for cidbkadhijau.com
 * Version: 2.1 - Fixed for actual website structure
 */

// Prevent direct access
if (!defined('SEO_INCLUDED')) {
    define('SEO_INCLUDED', true);
}

// Check if class already exists before declaring
if (!class_exists('CIDBKadHijauSEO')) {

class CIDBKadHijauSEO {
    
    private $siteUrl = 'https://cidbkadhijau.com';
    private $siteName = 'CIDB Kad Hijau Malaysia';
    private $businessPhone = '+601126165376';
    private $businessEmail = 'info@cidbkadhijau.com';
    private $businessAddress = 'Malaysia';
    
    private $socialMedia = [
        'instagram' => 'https://www.instagram.com/mewahservices',
        'facebook' => 'https://www.facebook.com/cidbgreencardmewah/',
        'tiktok' => 'https://www.tiktok.com/@mewahservices',
        'youtube' => 'https://www.youtube.com/@mewahservices'
    ];
    
    private $pageData = [];
    private $currentPage = 'home';
    
    // Enhanced Malaysian-specific keywords
    private $commonKeywords = [
        'cidb kad hijau',
        'kad hijau cidb',
        'green card cidb',
        'kad hijau malaysia',
        'cidb card malaysia',
        'kad personel binaan',
        'construction personnel card',
        'cidb online',
        'kad hijau online'
    ];
    
    // Location-based keywords for better local SEO
    private $locationKeywords = [
        'kuala lumpur', 'selangor', 'johor', 'penang', 'perak', 'kedah', 
        'kelantan', 'terengganu', 'pahang', 'negeri sembilan', 'melaka',
        'sabah', 'sarawak', 'perlis', 'putrajaya', 'labuan'
    ];
    
    public function __construct() {
        $this->initializePageData();
        $this->detectCurrentPage();
    }
    
    private function initializePageData() {
        $this->pageData = [
            'home' => [
                'title' => 'CIDB Kad Hijau Malaysia | Renew, Daftar & Ganti Online | Pantas & Murah 2025',
                'description' => 'Servis CIDB Kad Hijau terbaik Malaysia! ✓ Renew kad hijau online ✓ Daftar baru ✓ Kad rosak/hilang ✓ Sijil bumiputera ✓ Proses pantas 1-3 hari ✓ Harga berpatutan ✓ WhatsApp +601126165376',
                'keywords' => 'cidb kad hijau, kad hijau rosak, renew kad hijau, kad hijau hilang, daftar kad hijau, kad hijau malaysia, ganti kad hijau, cidb online, kad personel binaan, sijil bumiputera cidb, cidb card renewal malaysia, pembaharuan kad hijau',
                'canonical' => $this->siteUrl,
                'h1' => 'CIDB Kad Hijau Malaysia - Renew, Daftar & Ganti Online | Servis Terpantas 2025',
                'schema_type' => 'LocalBusiness',
                'content_keywords' => [
                    'kad hijau rosak', 'kad hijau hilang', 'ganti kad hijau', 'renew kad hijau online',
                    'daftar kad cidb', 'sijil bumiputera', 'kad personel binaan', 'cidb malaysia',
                    'pembaharuan kad hijau', 'kad hijau expired', 'cidb card lost', 'cidb registration'
                ]
            ],
            'about' => [
                'title' => 'Tentang Kami - CIDB Kad Hijau Malaysia | Pengalaman 10+ Tahun',
                'description' => 'Syarikat profesional dengan pengalaman 10+ tahun dalam servis CIDB Kad Hijau. Dipercayai ribuan pelanggan di seluruh Malaysia. Proses pantas, harga berpatutan.',
                'keywords' => 'tentang kami cidb, syarikat kad hijau, pengalaman cidb card, professional cidb service malaysia, trusted cidb provider',
                'canonical' => $this->siteUrl . '/about.php',
                'h1' => 'Tentang Kami - Pakar CIDB Kad Hijau Malaysia',
                'schema_type' => 'Organization',
                'content_keywords' => [
                    'pengalaman cidb', 'profesional kad hijau', 'dipercayai pelanggan', 'syarikat terpercaya'
                ]
            ],
            'card' => [
                'title' => 'Apa Itu Kad CIDB Malaysia | Panduan Lengkap Kad Hijau 2025',
                'description' => 'Panduan lengkap tentang Kad CIDB Malaysia - fungsi, kepentingan, jenis kad, syarat kelayakan. Semua yang anda perlu tahu tentang kad hijau pekerja binaan.',
                'keywords' => 'apa itu kad cidb, fungsi kad hijau, jenis kad cidb, kepentingan kad hijau, panduan kad cidb malaysia, kad personel binaan',
                'canonical' => $this->siteUrl . '/card-cidb.php',
                'h1' => 'Apa Itu Kad CIDB? | Panduan Lengkap Kad Hijau Malaysia',
                'schema_type' => 'Article',
                'content_keywords' => [
                    'apa itu kad cidb', 'fungsi kad hijau', 'jenis kad cidb', 'kegunaan kad hijau'
                ]
            ],
            'daftar_baru' => [
                'title' => 'Daftar Kad Hijau CIDB Baru Malaysia | Pendaftaran Online Pantas 2025',
                'description' => 'Daftar kad hijau CIDB baru secara online. Pendaftaran pantas untuk pekerja binaan. Termasuk sijil bumiputera. Proses mudah, harga berpatutan. Hubungi +601126165376!',
                'keywords' => 'daftar kad hijau, pendaftaran kad hijau cidb, cidb registration online, kad hijau baru, daftar cidb card, sijil bumiputera cidb, kad personel binaan baru, register cidb green card',
                'canonical' => $this->siteUrl . '/daftar-baru-cidb.php',
                'h1' => 'Daftar Kad Hijau CIDB Baru Malaysia | Pendaftaran Online + Sijil Bumiputera',
                'schema_type' => 'Service',
                'content_keywords' => [
                    'cara daftar kad hijau', 'syarat daftar kad hijau', 'dokumen kad hijau baru',
                    'sijil bumiputera', 'pendaftaran pekerja asing', 'kad hijau untuk warga asing'
                ]
            ],
            'renew' => [
                'title' => 'Renew Kad Hijau CIDB Online Malaysia | Pembaharuan Pantas 1-3 Hari 2025',
                'description' => 'Renew kad hijau CIDB online dengan mudah! Pembaharuan pantas 1-3 hari kerja. Harga terbaik, proses mudah, tiada perlu ke kaunter. WhatsApp +601126165376 sekarang!',
                'keywords' => 'renew kad hijau, pembaharuan kad hijau, renew cidb card online, kad hijau expired, cara renew kad hijau, renew kad hijau online malaysia, cidb card renewal, bayaran renew kad hijau',
                'canonical' => $this->siteUrl . '/renew-kad-cidb.php',
                'h1' => 'Renew Kad Hijau CIDB Online | Pembaharuan Pantas & Mudah Malaysia',
                'schema_type' => 'Service',
                'content_keywords' => [
                    'cara renew kad hijau', 'dokumen renew kad hijau', 'bayaran renew kad hijau',
                    'renew kad hijau expired', 'pembaharuan kad hijau online', 'tempoh renew kad hijau'
                ]
            ],
            'gantian' => [
                'title' => 'Ganti Kad Hijau Rosak/Hilang Malaysia | Penggantian CIDB Card Pantas 2025',
                'description' => 'Kad hijau rosak atau hilang? Dapatkan penggantian pantas! Ganti kad hijau CIDB dengan mudah. Proses online, dokumentasi lengkap. WhatsApp +601126165376 untuk bantuan segera.',
                'keywords' => 'kad hijau rosak, kad hijau hilang, ganti kad hijau, penggantian kad hijau, kad hijau pecah, kad hijau damaged, replace cidb card, kad hijau replacement malaysia',
                'canonical' => $this->siteUrl . '/kad-cidb-hilang.php',
                'h1' => 'Ganti Kad Hijau Rosak/Hilang | Penggantian CIDB Card Malaysia',
                'schema_type' => 'Service',
                'content_keywords' => [
                    'kad hijau rosak', 'kad hijau hilang', 'kad hijau pecah', 'kad hijau faded',
                    'ganti kad hijau baru', 'bayaran ganti kad hijau', 'dokumen ganti kad hijau'
                ]
            ],
            'bumiputera' => [
                'title' => 'Sijil Bumiputera CIDB Malaysia | Iktiraf Sijil + Kad Hijau 2025',
                'description' => 'Dapatkan sijil bumiputera CIDB dan kad hijau sekaligus! Pengiktirafan sijil kemahiran bumiputera untuk kontraktor. Proses pantas, harga terbaik. Hubungi +601126165376!',
                'keywords' => 'sijil bumiputera cidb, iktiraf sijil bumiputera, sijil kemahiran bumiputera, cidb bumiputera certificate, sijil kontraktor bumiputera, pengiktirafan sijil cidb',
                'canonical' => $this->siteUrl . '/iktirafan-sijil-taraf-bumiputera-cidb.php',
                'h1' => 'Sijil Bumiputera CIDB Malaysia | Pengiktirafan Sijil Kemahiran',
                'schema_type' => 'Service',
                'content_keywords' => [
                    'sijil bumiputera', 'iktiraf sijil', 'sijil kemahiran', 'sijil kontraktor',
                    'pengiktirafan cidb', 'sijil bumiputera malaysia'
                ]
            ],
            'services' => [
                'title' => 'Servis CIDB Kad Hijau Malaysia | Lengkap & Profesional 2025',
                'description' => 'Servis lengkap CIDB Kad Hijau Malaysia - Daftar baru, Renew, Ganti kad rosak/hilang, Sijil bumiputera. Proses pantas, harga berpatutan. WhatsApp +601126165376!',
                'keywords' => 'servis cidb kad hijau, services cidb malaysia, lengkap kad hijau service, professional cidb provider',
                'canonical' => $this->siteUrl . '/services.php',
                'h1' => 'Servis CIDB Kad Hijau Lengkap Malaysia',
                'schema_type' => 'Service',
                'content_keywords' => [
                    'servis lengkap', 'professional service', 'trusted provider'
                ]
            ],
            'blog' => [
                'title' => 'Blog CIDB Kad Hijau Malaysia | Tips & Panduan Terkini 2025',
                'description' => 'Blog terkini tentang CIDB Kad Hijau Malaysia. Tips, panduan, berita terbaru, FAQ. Maklumat berguna untuk pekerja binaan dan kontraktor.',
                'keywords' => 'blog cidb kad hijau, tips kad hijau, panduan cidb, berita terkini kad hijau, maklumat berguna cidb',
                'canonical' => $this->siteUrl . '/blog.php',
                'h1' => 'Blog CIDB Kad Hijau Malaysia | Tips & Panduan',
                'schema_type' => 'Blog',
                'content_keywords' => [
                    'tips kad hijau', 'panduan cidb', 'maklumat berguna'
                ]
            ],
            'operation' => [
                'title' => 'Operasi & Proses CIDB Kad Hijau Malaysia | Cara Kerja Kami 2025',
                'description' => 'Ketahui bagaimana operasi dan proses kerja kami untuk servis CIDB Kad Hijau. Langkah mudah, sistem profesional, hasil terjamin.',
                'keywords' => 'operasi cidb kad hijau, proses kerja cidb, cara kerja service, sistem professional cidb',
                'canonical' => $this->siteUrl . '/operation.php',
                'h1' => 'Operasi & Proses CIDB Kad Hijau Malaysia',
                'schema_type' => 'Organization',
                'content_keywords' => [
                    'operasi professional', 'proses mudah', 'sistem terjamin'
                ]
            ],
            'whatsapp' => [
                'title' => 'WhatsApp CIDB Kad Hijau Malaysia | Hubungi +601126165376',
                'description' => 'Hubungi kami melalui WhatsApp +601126165376 untuk servis CIDB Kad Hijau terpantas. Respon cepat, konsultasi percuma, bantuan 24/7.',
                'keywords' => 'whatsapp cidb kad hijau, hubungi +601126165376, bantuan whatsapp cidb, konsultasi percuma',
                'canonical' => $this->siteUrl . '/whatsapps-cidb.php',
                'h1' => 'WhatsApp CIDB Kad Hijau | Hubungi +601126165376',
                'schema_type' => 'ContactPage',
                'content_keywords' => [
                    'whatsapp support', 'bantuan cepat', 'konsultasi percuma'
                ]
            ]
        ];
    }
    
    private function detectCurrentPage() {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $path = parse_url($uri, PHP_URL_PATH);
        
        // Remove leading slash and convert to lowercase
        $path = ltrim(strtolower($path), '/');
        
        // Remove .php extension if present
        $path = str_replace('.php', '', $path);
        
        // Enhanced URL mappings based on your actual files
        $urlMappings = [
            '' => 'home',
            'index' => 'home',
            'home' => 'home',
            
            // About page
            'about' => 'about',
            
            // Card information
            'card-cidb' => 'card',
            'card' => 'card',
            
            // Registration (Daftar Baru)
            'daftar-baru-cidb' => 'daftar_baru',
            'daftar-baru' => 'daftar_baru',
            'daftar' => 'daftar_baru',
            'register' => 'daftar_baru',
            
            // Renewal
            'renew-kad-cidb' => 'renew',
            'renew' => 'renew',
            'renewal' => 'renew',
            'pembaharuan' => 'renew',
            
            // Replacement (Gantian)
            'kad-cidb-hilang' => 'gantian',
            'gantian' => 'gantian',
            'replacement' => 'gantian',
            'kad-rosak' => 'gantian',
            'kad-hilang' => 'gantian',
            
            // Bumiputera
            'iktirafan-sijil-taraf-bumiputera-cidb' => 'bumiputera',
            'bumiputera' => 'bumiputera',
            'sijil-bumiputera' => 'bumiputera',
            
            // Services
            'services' => 'services',
            'servis' => 'services',
            
            // Blog
            'blog' => 'blog',
            
            // Operation
            'operation' => 'operation',
            'operasi' => 'operation',
            
            // WhatsApp
            'whatsapps-cidb' => 'whatsapp',
            'whatsapp' => 'whatsapp',
            'hubungi' => 'whatsapp'
        ];
        
        $this->currentPage = $urlMappings[$path] ?? 'home';
    }
    
    public function getCurrentPage() {
        return $this->currentPage;
    }
    
    public function getPageData($page = null) {
        $page = $page ?? $this->currentPage;
        return $this->pageData[$page] ?? $this->pageData['home'];
    }
    
    public function renderHeadTags() {
        $page = $this->pageData[$this->currentPage] ?? $this->pageData['home'];
        
        echo "\n<!-- Enhanced SEO Meta Tags - Generated by Fixed SEO.php -->\n";
        echo '<meta charset="UTF-8">' . "\n";
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
        echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n";
        
        // Primary SEO tags
        echo '<title>' . htmlspecialchars($page['title']) . '</title>' . "\n";
        echo '<meta name="description" content="' . htmlspecialchars($page['description']) . '">' . "\n";
        echo '<meta name="keywords" content="' . htmlspecialchars($page['keywords']) . '">' . "\n";
        echo '<link rel="canonical" href="' . htmlspecialchars($page['canonical']) . '">' . "\n";
        
        // Fixed favicon - using your icon.png
        echo '<link rel="icon" type="image/png" sizes="32x32" href="icon.png">' . "\n";
        echo '<link rel="icon" type="image/png" sizes="16x16" href="icon.png">' . "\n";
        echo '<link rel="apple-touch-icon" href="icon.png">' . "\n";
        
        // Enhanced meta tags
        echo '<meta name="author" content="' . htmlspecialchars($this->siteName) . '">' . "\n";
        echo '<meta name="publisher" content="' . htmlspecialchars($this->siteName) . '">' . "\n";
        echo '<meta name="copyright" content="© ' . date('Y') . ' ' . htmlspecialchars($this->siteName) . '">' . "\n";
        echo '<meta name="revisit-after" content="7 days">' . "\n";
        echo '<meta name="distribution" content="global">' . "\n";
        echo '<meta name="rating" content="general">' . "\n";
        
        // Geographic targeting for Malaysia
        echo '<meta name="geo.region" content="MY">' . "\n";
        echo '<meta name="geo.country" content="Malaysia">' . "\n";
        echo '<meta name="geo.placename" content="Malaysia">' . "\n";
        echo '<meta name="ICBM" content="3.1390, 101.6869">' . "\n";
        
        // Language and locale
        echo '<meta name="language" content="ms-MY,en-MY">' . "\n";
        echo '<meta http-equiv="content-language" content="ms-MY">' . "\n";
        
        // Open Graph Tags
        echo '<meta property="og:title" content="' . htmlspecialchars($page['title']) . '">' . "\n";
        echo '<meta property="og:description" content="' . htmlspecialchars($page['description']) . '">' . "\n";
        echo '<meta property="og:url" content="' . htmlspecialchars($page['canonical']) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:site_name" content="' . htmlspecialchars($this->siteName) . '">' . "\n";
        echo '<meta property="og:locale" content="ms_MY">' . "\n";
        echo '<meta property="og:image" content="' . $this->siteUrl . '/icon.png">' . "\n";
        echo '<meta property="og:image:width" content="512">' . "\n";
        echo '<meta property="og:image:height" content="512">' . "\n";
        
        // Twitter Card Tags
        echo '<meta name="twitter:card" content="summary">' . "\n";
        echo '<meta name="twitter:title" content="' . htmlspecialchars($page['title']) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . htmlspecialchars($page['description']) . '">' . "\n";
        echo '<meta name="twitter:image" content="' . $this->siteUrl . '/icon.png">' . "\n";
        
        // Robots directives
        echo '<meta name="robots" content="index, follow, max-image-preview:large">' . "\n";
        echo '<meta name="googlebot" content="index, follow">' . "\n";
        
        // Performance optimization
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
        echo '<link rel="dns-prefetch" href="//www.google-analytics.com">' . "\n";
        
        // Mobile optimization
        echo '<meta name="mobile-web-app-capable" content="yes">' . "\n";
        echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
        echo '<meta name="theme-color" content="#ffffff">' . "\n";
        
        echo "<!-- End Enhanced SEO Meta Tags -->\n\n";
    }
    
    public function renderSchemaMarkup() {
        $page = $this->pageData[$this->currentPage] ?? $this->pageData['home'];
        
        echo "\n<!-- Schema Markup - Generated by Fixed SEO.php -->\n";
        echo '<script type="application/ld+json">' . "\n";
        
        switch ($page['schema_type']) {
            case 'LocalBusiness':
                echo $this->getLocalBusinessSchema();
                break;
            case 'Service':
                echo $this->getServiceSchema();
                break;
            case 'Organization':
                echo $this->getOrganizationSchema();
                break;
            case 'Article':
                echo $this->getArticleSchema();
                break;
            case 'Blog':
                echo $this->getBlogSchema();
                break;
            case 'ContactPage':
                echo $this->getContactPageSchema();
                break;
            default:
                echo $this->getLocalBusinessSchema();
        }
        
        echo "\n" . '</script>' . "\n";
        echo "<!-- End Schema Markup -->\n\n";
    }
    
    private function getLocalBusinessSchema() {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "LocalBusiness",
            "name" => $this->siteName,
            "description" => "Professional CIDB Kad Hijau services in Malaysia - Registration, Renewal, Replacement",
            "url" => $this->siteUrl,
            "telephone" => $this->businessPhone,
            "email" => $this->businessEmail,
            "priceRange" => "RM50-RM300",
            "address" => [
                "@type" => "PostalAddress",
                "addressCountry" => "MY",
                "addressRegion" => "Malaysia"
            ],
            "geo" => [
                "@type" => "GeoCoordinates",
                "latitude" => "3.1390",
                "longitude" => "101.6869"
            ],
            "sameAs" => array_values($this->socialMedia),
            "serviceArea" => [
                "@type" => "Country",
                "name" => "Malaysia"
            ]
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function getServiceSchema() {
        $page = $this->pageData[$this->currentPage];
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "Service",
            "name" => str_replace(' | ', ' - ', $page['title']),
            "description" => $page['description'],
            "provider" => [
                "@type" => "LocalBusiness",
                "name" => $this->siteName,
                "telephone" => $this->businessPhone,
                "url" => $this->siteUrl
            ],
            "areaServed" => [
                "@type" => "Country",
                "name" => "Malaysia"
            ]
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function getOrganizationSchema() {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "Organization",
            "name" => $this->siteName,
            "url" => $this->siteUrl,
            "logo" => $this->siteUrl . "/icon.png",
            "description" => "Leading CIDB Kad Hijau service provider in Malaysia",
            "telephone" => $this->businessPhone,
            "email" => $this->businessEmail,
            "sameAs" => array_values($this->socialMedia)
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function getArticleSchema() {
        $page = $this->pageData[$this->currentPage];
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "Article",
            "headline" => $page['title'],
            "description" => $page['description'],
            "author" => [
                "@type" => "Organization",
                "name" => $this->siteName
            ],
            "publisher" => [
                "@type" => "Organization",
                "name" => $this->siteName,
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $this->siteUrl . "/icon.png"
                ]
            ],
            "datePublished" => date('c'),
            "dateModified" => date('c')
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function getBlogSchema() {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "Blog",
            "name" => "Blog CIDB Kad Hijau Malaysia",
            "description" => "Tips dan panduan terkini tentang CIDB Kad Hijau Malaysia",
            "url" => $this->siteUrl . "/blog.php",
            "publisher" => [
                "@type" => "Organization",
                "name" => $this->siteName
            ]
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function getContactPageSchema() {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "ContactPage",
            "name" => "Hubungi Kami - CIDB Kad Hijau Malaysia",
            "mainEntity" => [
                "@type" => "LocalBusiness",
                "name" => $this->siteName,
                "telephone" => $this->businessPhone,
                "email" => $this->businessEmail
            ]
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    public function renderBreadcrumbs() {
        $breadcrumbs = $this->generateBreadcrumbs();
        
        if (count($breadcrumbs) > 1) {
            echo "\n<!-- Breadcrumb Schema -->\n";
            echo '<script type="application/ld+json">' . "\n";
            echo json_encode([
                "@context" => "https://schema.org",
                "@type" => "BreadcrumbList",
                "itemListElement" => $breadcrumbs
            ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
            echo "\n" . '</script>' . "\n";
        }
    }
    
    private function generateBreadcrumbs() {
        $breadcrumbs = [];
        $breadcrumbs[] = [
            "@type" => "ListItem",
            "position" => 1,
            "name" => "Laman Utama",
            "item" => $this->siteUrl
        ];
        
        if ($this->currentPage !== 'home') {
            $pageNames = [
                'about' => 'Tentang Kami',
                'card' => 'Apa Itu Kad CIDB',
                'daftar_baru' => 'Daftar Baru',
                'renew' => 'Renew Kad Hijau',
                'gantian' => 'Ganti Kad Hijau',
                'bumiputera' => 'Sijil Bumiputera',
                'services' => 'Servis',
                'blog' => 'Blog',
                'operation' => 'Operasi',
                'whatsapp' => 'WhatsApp'
            ];
            
            $breadcrumbs[] = [
                "@type" => "ListItem",
                "position" => 2,
                "name" => $pageNames[$this->currentPage] ?? 'Halaman',
                "item" => $this->pageData[$this->currentPage]['canonical']
            ];
        }
        
        return $breadcrumbs;
    }
    
    public function getCurrentPageH1() {
        $page = $this->pageData[$this->currentPage] ?? $this->pageData['home'];
        return '<h1>' . $page['h1'] . '</h1>';
    }
    
    public function renderWhatsAppWidget() {
        echo "\n<!-- WhatsApp Widget -->\n";
        echo '<div id="whatsapp-widget" class="floating-widget whatsapp-widget" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">' . "\n";
        echo '<a href="https://wa.me/601126165376?text=Hi%2C%20saya%20nak%20tanya%20tentang%20servis%20kad%20hijau%20CIDB" target="_blank" rel="noopener" onclick="trackWhatsAppClick()" aria-label="WhatsApp Kami">' . "\n";
        echo '<img src="' . $this->siteUrl . '/icon.png" alt="WhatsApp" width="60" height="60" style="border-radius: 50%; box-shadow: 0 4px 12px rgba(0,0,0,0.3); transition: transform 0.3s ease;">' . "\n";
        echo '</a>' . "\n";
        echo '</div>' . "\n";
        echo "<!-- End WhatsApp Widget -->\n\n";
    }
    
    public function renderClickToCallButton() {
        echo "\n<!-- Click to Call Button -->\n";
        echo '<div id="call-button" class="floating-widget call-widget" style="position: fixed; bottom: 90px; right: 20px; z-index: 9999;">' . "\n";
        echo '<a href="tel:' . $this->businessPhone . '" onclick="trackPhoneClick()" rel="noopener" aria-label="Call Us">' . "\n";
        echo '<span style="display: inline-block; width: 50px; height: 50px; background: #007bff; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; font-size: 20px;">📞</span>' . "\n";
        echo '</a>' . "\n";
        echo '</div>' . "\n";
        echo "<!-- End Click to Call Button -->\n\n";
    }
    
    public function renderSocialMediaLinks() {
        echo "\n<!-- Social Media Links -->\n";
        echo '<div class="social-media-links" style="display: flex; gap: 10px; align-items: center;">' . "\n";
        foreach ($this->socialMedia as $platform => $url) {
            $platformName = ucfirst($platform);
            echo '<a href="' . $url . '" target="_blank" rel="noopener nofollow" aria-label="Follow us on ' . $platformName . '" class="social-link ' . $platform . '">' . "\n";
            echo '<span style="display: inline-block; padding: 8px; background: #333; color: white; border-radius: 5px; text-decoration: none;">' . $platformName . '</span>' . "\n";
            echo '</a>' . "\n";
        }
        echo '</div>' . "\n";
        echo "<!-- End Social Media Links -->\n\n";
    }
    
    public function renderAnalytics() {
        echo "\n<!-- Analytics & Tracking -->\n";
        
        // Google Analytics 4
        echo '<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>' . "\n";
        echo '<script>' . "\n";
        echo 'window.dataLayer = window.dataLayer || [];' . "\n";
        echo 'function gtag(){dataLayer.push(arguments);}' . "\n";
        echo 'gtag("js", new Date());' . "\n";
        echo 'gtag("config", "GA_MEASUREMENT_ID", {' . "\n";
        echo '  page_title: "' . htmlspecialchars($this->pageData[$this->currentPage]['title']) . '",' . "\n";
        echo '  page_location: "' . $this->pageData[$this->currentPage]['canonical'] . '"' . "\n";
        echo '});' . "\n";
        echo '</script>' . "\n";
        
        // Event tracking functions
        echo '<script>' . "\n";
        echo 'function trackWhatsAppClick() {' . "\n";
        echo '  if (typeof gtag !== "undefined") {' . "\n";
        echo '    gtag("event", "click", {' . "\n";
        echo '      event_category: "Contact",' . "\n";
        echo '      event_label: "WhatsApp"' . "\n";
        echo '    });' . "\n";
        echo '  }' . "\n";
        echo '}' . "\n";
        echo 'function trackPhoneClick() {' . "\n";
        echo '  if (typeof gtag !== "undefined") {' . "\n";
        echo '    gtag("event", "click", {' . "\n";
        echo '      event_category: "Contact",' . "\n";
        echo '      event_label: "Phone"' . "\n";
        echo '    });' . "\n";
        echo '  }' . "\n";
        echo '}' . "\n";
        echo '</script>' . "\n";
        
        echo "<!-- End Analytics -->\n\n";
    }
    
    public function renderPerformanceOptimization() {
        echo "\n<!-- Performance Optimization -->\n";
        
        // Critical CSS
        echo '<style>' . "\n";
        echo '/* Critical CSS for above-the-fold content */' . "\n";
        echo 'body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;margin:0;padding:0;line-height:1.6;color:#333}' . "\n";
        echo 'h1{font-size:clamp(1.8rem,4vw,2.5rem);color:#2c3e50;margin:1rem 0;font-weight:700}' . "\n";
        echo 'h2{font-size:clamp(1.5rem,3vw,2rem);color:#34495e;margin:0.8rem 0}' . "\n";
        echo '.floating-widget{cursor:pointer}' . "\n";
        echo '.floating-widget:hover{transform:scale(1.1)}' . "\n";
        echo '@media (max-width: 768px){.floating-widget{bottom:10px;right:10px}}' . "\n";
        echo '</style>' . "\n";
        
        echo "<!-- End Performance Optimization -->\n\n";
    }
    
    public function renderMobileOptimization() {
        echo "\n<!-- Mobile Optimization -->\n";
        echo '<script>' . "\n";
        echo 'if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){' . "\n";
        echo '  document.documentElement.classList.add("mobile-device");' . "\n";
        echo '}' . "\n";
        echo '</script>' . "\n";
        echo "<!-- End Mobile Optimization -->\n\n";
    }
    
} // END OF CLASS

} // End of class_exists check

// Initialize SEO class only if not already initialized
if (!isset($seo)) {
    $seo = new CIDBKadHijauSEO();
}

// Function definitions for easy use
if (!function_exists('renderSEOHead')) {
    function renderSEOHead() {
        global $seo;
        $seo->renderHeadTags();
        $seo->renderPerformanceOptimization();
    }
}

if (!function_exists('renderSEOSchemas')) {
    function renderSEOSchemas() {
        global $seo;
        $seo->renderSchemaMarkup();
        $seo->renderBreadcrumbs();
    }
}

if (!function_exists('renderSEOWidgets')) {
    function renderSEOWidgets() {
        global $seo;
        $seo->renderWhatsAppWidget();
        $seo->renderClickToCallButton();
        $seo->renderMobileOptimization();
    }
}

if (!function_exists('renderSEOAnalytics')) {
    function renderSEOAnalytics() {
        global $seo;
        $seo->renderAnalytics();
    }
}

if (!function_exists('getSEOH1')) {
    function getSEOH1() {
        global $seo;
        return $seo->getCurrentPageH1();
    }
}

if (!function_exists('renderSocialLinks')) {
    function renderSocialLinks() {
        global $seo;
        $seo->renderSocialMediaLinks();
    }
}

// Utility functions
if (!function_exists('getSEOTitle')) {
    function getSEOTitle() {
        global $seo;
        $page = $seo->getPageData();
        return $page['title'];
    }
}

if (!function_exists('getSEODescription')) {
    function getSEODescription() {
        global $seo;
        $page = $seo->getPageData();
        return $page['description'];
    }
}

if (!function_exists('getSEOKeywords')) {
    function getSEOKeywords() {
        global $seo;
        $page = $seo->getPageData();
        return $page['keywords'];
    }
}

if (!function_exists('getCanonicalURL')) {
    function getCanonicalURL() {
        global $seo;
        $page = $seo->getPageData();
        return $page['canonical'];
    }
}

if (!function_exists('getCurrentPageType')) {
    function getCurrentPageType() {
        global $seo;
        return $seo->getCurrentPage();
    }
}

?>