<?php
/**
 * SEO.php - Complete SEO Implementation for CIDB Kad Hijau Website
 * Include this file in your pages: include_once 'seo.php';
 * Author: SEO Optimization for cidbkadhijau.com
 * Version: 1.0
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
    private $socialMedia = [
        'instagram' => 'https://www.instagram.com/mewahservices',
        'facebook' => 'https://www.facebook.com/cidbgreencardmewah/',
        'tiktok' => 'https://www.tiktok.com/@mewahservices'
    ];
    
    private $pageData = [];
    private $currentPage = 'home';
    
    public function __construct() {
        $this->initializePageData();
        $this->detectCurrentPage();
    }
    
    private function initializePageData() {
        $this->pageData = [
            'home' => [
                'title' => 'CIDB Kad Hijau Malaysia | Renew & Register Online | Fast Service',
                'description' => 'Professional CIDB Kad Hijau registration & renewal service in Malaysia. Quick online process, competitive fees. Get your green card renewed today! ✓ Fast ✓ Reliable ✓ Affordable',
                'keywords' => 'cidb kad hijau, kad hijau cidb, renew cidb card online, cidb green card malaysia, cidb registration online, renew kad hijau online',
                'canonical' => $this->siteUrl,
                'h1' => '<h1 style="position:absolute;width:1px;height:1px;padding:0;margin:-1px;overflow:hidden;clip:rect(0,0,0,0);white-space:nowrap;border:0;">CIDB Kad Hijau Malaysia - Online Registration & Renewal Service</h1>',
                'schema_type' => 'LocalBusiness'
            ],
            'renew' => [
                'title' => 'Renew CIDB Kad Hijau Online | Quick & Easy Process Malaysia',
                'description' => 'Renew your CIDB Kad Hijau online in Malaysia. Fast processing, competitive fees. No need to visit counter. WhatsApp +601126165376 for instant help.',
                'keywords' => 'renew cidb card online, pembaharuan kad hijau, how to renew cidb card, cidb card renewal, renew kad hijau online',
                'canonical' => $this->siteUrl . '/renew-kad-hijau',
                'h1' => 'Renew CIDB Kad Hijau Online | Professional Service Malaysia',
                'schema_type' => 'Service'
            ],
            'register' => [
                'title' => 'CIDB Green Card Registration Malaysia | New Application Online',
                'description' => 'Register for new CIDB Kad Hijau in Malaysia. Professional service with quick approval. Get your construction personnel card today. Call +601126165376.',
                'keywords' => 'cidb registration online, daftar kad hijau cidb, cidb card application, new cidb green card, pendaftaran kad personel binaan',
                'canonical' => $this->siteUrl . '/register-cidb-card',
                'h1' => 'CIDB Green Card Registration Malaysia | New Application Online',
                'schema_type' => 'Service'
            ],
            'fees' => [
                'title' => 'CIDB Kad Hijau Fees 2025 | Complete Pricing Guide Malaysia',
                'description' => 'Complete CIDB Kad Hijau fees and pricing guide for 2025. Transparent costs for registration, renewal, and replacement. Get accurate pricing information.',
                'keywords' => 'cidb kad hijau fees, bayaran kad hijau cidb, cidb card renewal cost, cidb registration fees 2025',
                'canonical' => $this->siteUrl . '/fees-pricing',
                'h1' => 'CIDB Kad Hijau Fees 2025 | Complete Pricing Guide',
                'schema_type' => 'PriceSpecification'
            ],
            'faq' => [
                'title' => 'CIDB Kad Hijau FAQ | Common Questions & Answers Malaysia',
                'description' => 'Frequently asked questions about CIDB Kad Hijau registration, renewal, requirements, and fees. Get quick answers to your construction card queries.',
                'keywords' => 'cidb kad hijau faq, cidb card questions, kad hijau requirements, cidb renewal process',
                'canonical' => $this->siteUrl . '/faq',
                'h1' => 'CIDB Kad Hijau FAQ | Common Questions & Answers',
                'schema_type' => 'FAQPage'
            ],
            'requirements' => [
                'title' => 'CIDB Kad Hijau Requirements | Documents & Eligibility Malaysia',
                'description' => 'Complete list of CIDB Kad Hijau requirements, documents needed, and eligibility criteria. Download checklist for smooth application process.',
                'keywords' => 'cidb card requirements, dokumen kad hijau, cidb eligibility, construction card documents malaysia',
                'canonical' => $this->siteUrl . '/requirements',
                'h1' => 'CIDB Kad Hijau Requirements | Documents & Eligibility',
                'schema_type' => 'Article'
            ],
            'contact' => [
                'title' => 'Contact CIDB Kad Hijau Service | WhatsApp +601126165376',
                'description' => 'Contact our CIDB Kad Hijau service team. WhatsApp +601126165376 for instant help with registration, renewal, and inquiries. Fast response guaranteed.',
                'keywords' => 'contact cidb service, cidb kad hijau help, whatsapp cidb service malaysia',
                'canonical' => $this->siteUrl . '/contact',
                'h1' => 'Contact CIDB Kad Hijau Service Malaysia',
                'schema_type' => 'ContactPage'
            ]
        ];
    }
    
    private function detectCurrentPage() {
        $uri = $_SERVER['REQUEST_URI'] ?? '/';
        $path = parse_url($uri, PHP_URL_PATH);
        
        // Remove leading slash and convert to lowercase
        $path = ltrim(strtolower($path), '/');
        
        // Map URLs to page types
        $urlMappings = [
            '' => 'home',
            'index.php' => 'home',
            'renew-kad-hijau' => 'renew',
            'renew' => 'renew',
            'renewal' => 'renew',
            'register-cidb-card' => 'register',
            'register' => 'register',
            'registration' => 'register',
            'fees-pricing' => 'fees',
            'fees' => 'fees',
            'pricing' => 'fees',
            'faq' => 'faq',
            'frequently-asked-questions' => 'faq',
            'requirements' => 'requirements',
            'documents' => 'requirements',
            'contact' => 'contact',
            'contact-us' => 'contact'
        ];
        
        $this->currentPage = $urlMappings[$path] ?? 'home';
    }
    
    // ADD THESE METHODS INSIDE THE CLASS (BEFORE THE CLOSING BRACE)
    public function getCurrentPage() {
        return $this->currentPage;
    }
    
    public function getPageData($page = null) {
        $page = $page ?? $this->currentPage;
        return $this->pageData[$page] ?? $this->pageData['home'];
    }
    
    public function renderHeadTags() {
        $page = $this->pageData[$this->currentPage] ?? $this->pageData['home'];
        
        echo "\n<!-- SEO Meta Tags - Generated by SEO.php -->\n";
        echo '<meta charset="UTF-8">' . "\n";
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">' . "\n";
        echo '<title>' . htmlspecialchars($page['title']) . '</title>' . "\n";
        echo '<meta name="description" content="' . htmlspecialchars($page['description']) . '">' . "\n";
        echo '<meta name="keywords" content="' . htmlspecialchars($page['keywords']) . '">' . "\n";
        echo '<link rel="canonical" href="' . htmlspecialchars($page['canonical']) . '">' . "\n";
        
        // Open Graph Tags
        echo '<meta property="og:title" content="' . htmlspecialchars($page['title']) . '">' . "\n";
        echo '<meta property="og:description" content="' . htmlspecialchars($page['description']) . '">' . "\n";
        echo '<meta property="og:url" content="' . htmlspecialchars($page['canonical']) . '">' . "\n";
        echo '<meta property="og:type" content="website">' . "\n";
        echo '<meta property="og:site_name" content="' . htmlspecialchars($this->siteName) . '">' . "\n";
        echo '<meta property="og:locale" content="en_MY">' . "\n";
        echo '<meta property="og:image" content="' . $this->siteUrl . '/images/cidb-kad-hijau-og.jpg">' . "\n";
        
        // Twitter Card Tags
        echo '<meta name="twitter:card" content="summary_large_image">' . "\n";
        echo '<meta name="twitter:title" content="' . htmlspecialchars($page['title']) . '">' . "\n";
        echo '<meta name="twitter:description" content="' . htmlspecialchars($page['description']) . '">' . "\n";
        echo '<meta name="twitter:image" content="' . $this->siteUrl . '/images/cidb-kad-hijau-twitter.jpg">' . "\n";
        
        // Additional SEO Tags
        echo '<meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">' . "\n";
        echo '<meta name="author" content="CIDB Kad Hijau Malaysia Service">' . "\n";
        echo '<meta name="geo.region" content="MY">' . "\n";
        echo '<meta name="geo.placename" content="Malaysia">' . "\n";
        echo '<meta name="language" content="en-MY">' . "\n";
        
        // Favicon and Icons
        echo '<link rel="icon" type="image/x-icon" href="' . $this->siteUrl . '/favicon.ico">' . "\n";
        echo '<link rel="apple-touch-icon" sizes="180x180" href="' . $this->siteUrl . '/apple-touch-icon.png">' . "\n";
        echo '<link rel="icon" type="image/png" sizes="32x32" href="' . $this->siteUrl . '/favicon-32x32.png">' . "\n";
        echo '<link rel="icon" type="image/png" sizes="16x16" href="' . $this->siteUrl . '/favicon-16x16.png">' . "\n";
        
        // Preconnect for performance
        echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
        echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
        echo '<link rel="dns-prefetch" href="//www.google-analytics.com">' . "\n";
        
        echo "<!-- End SEO Meta Tags -->\n\n";
    }
    
    public function renderSchemaMarkup() {
        $page = $this->pageData[$this->currentPage] ?? $this->pageData['home'];
        
        echo "\n<!-- Schema Markup - Generated by SEO.php -->\n";
        echo '<script type="application/ld+json">' . "\n";
        
        switch ($page['schema_type']) {
            case 'LocalBusiness':
                echo $this->getLocalBusinessSchema();
                break;
            case 'Service':
                echo $this->getServiceSchema();
                break;
            case 'FAQPage':
                echo $this->getFAQSchema();
                break;
            case 'Article':
                echo $this->getArticleSchema();
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
            "description" => "Professional CIDB Kad Hijau registration and renewal service in Malaysia",
            "url" => $this->siteUrl,
            "telephone" => $this->businessPhone,
            "priceRange" => "$$",
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
            "openingHours" => "Mo-Su 09:00-18:00",
            "sameAs" => array_values($this->socialMedia),
            "serviceArea" => [
                "@type" => "Country",
                "name" => "Malaysia"
            ],
            "hasOfferCatalog" => [
                "@type" => "OfferCatalog",
                "name" => "CIDB Services",
                "itemListElement" => [
                    [
                        "@type" => "Offer",
                        "itemOffered" => [
                            "@type" => "Service",
                            "name" => "CIDB Kad Hijau Renewal"
                        ]
                    ],
                    [
                        "@type" => "Offer",
                        "itemOffered" => [
                            "@type" => "Service",
                            "name" => "CIDB Green Card Registration"
                        ]
                    ]
                ]
            ]
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function getServiceSchema() {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "Service",
            "name" => "CIDB Kad Hijau Service",
            "description" => "Professional CIDB Green Card registration and renewal service in Malaysia",
            "provider" => [
                "@type" => "LocalBusiness",
                "name" => $this->siteName,
                "telephone" => $this->businessPhone,
                "url" => $this->siteUrl
            ],
            "serviceType" => "Government Document Services",
            "areaServed" => [
                "@type" => "Country",
                "name" => "Malaysia"
            ],
            "hasOfferCatalog" => [
                "@type" => "OfferCatalog",
                "name" => "CIDB Services",
                "itemListElement" => [
                    [
                        "@type" => "Offer",
                        "itemOffered" => [
                            "@type" => "Service",
                            "name" => "CIDB Card Renewal",
                            "description" => "Fast online CIDB Kad Hijau renewal service"
                        ]
                    ]
                ]
            ]
        ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function getFAQSchema() {
        return json_encode([
            "@context" => "https://schema.org",
            "@type" => "FAQPage",
            "mainEntity" => [
                [
                    "@type" => "Question",
                    "name" => "How much does CIDB Kad Hijau renewal cost?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "CIDB Kad Hijau renewal fees vary based on worker category. Contact us at +601126165376 for current pricing and fast service."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "How long does CIDB card renewal take?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "Our CIDB card renewal service typically takes 1-3 working days with our fast processing system."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "Can I renew my CIDB card online?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "Yes, you can renew your CIDB Kad Hijau online through our professional service. WhatsApp +601126165376 to start the process."
                    ]
                ],
                [
                    "@type" => "Question",
                    "name" => "What documents are needed for CIDB renewal?",
                    "acceptedAnswer" => [
                        "@type" => "Answer",
                        "text" => "You need your IC copy, passport photo, existing CIDB card, and payment. We'll guide you through the complete process."
                    ]
                ]
            ]
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
                "url" => $this->siteUrl
            ],
            "datePublished" => date('c'),
            "dateModified" => date('c'),
            "mainEntityOfPage" => [
                "@type" => "WebPage",
                "@id" => $page['canonical']
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
            "name" => "Home",
            "item" => $this->siteUrl
        ];
        
        if ($this->currentPage !== 'home') {
            $pageNames = [
                'renew' => 'Renew CIDB Card',
                'register' => 'Register CIDB Card',
                'fees' => 'Fees & Pricing',
                'faq' => 'FAQ',
                'requirements' => 'Requirements',
                'contact' => 'Contact Us'
            ];
            
            $breadcrumbs[] = [
                "@type" => "ListItem",
                "position" => 2,
                "name" => $pageNames[$this->currentPage] ?? 'Page',
                "item" => $this->pageData[$this->currentPage]['canonical']
            ];
        }
        
        return $breadcrumbs;
    }
    
    public function renderAnalytics() {
        echo "\n<!-- Analytics & Tracking -->\n";
        
        // Google Analytics 4 (Replace GA_MEASUREMENT_ID with your actual ID)
        echo '<script async src="https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID"></script>' . "\n";
        echo '<script>' . "\n";
        echo 'window.dataLayer = window.dataLayer || [];' . "\n";
        echo 'function gtag(){dataLayer.push(arguments);}' . "\n";
        echo 'gtag("js", new Date());' . "\n";
        echo 'gtag("config", "GA_MEASUREMENT_ID");' . "\n";
        echo '</script>' . "\n";
        
        // Facebook Pixel (Replace PIXEL_ID with your actual ID)
        echo '<script>' . "\n";
        echo '!function(f,b,e,v,n,t,s)' . "\n";
        echo '{if(f.fbq)return;n=f.fbq=function(){n.callMethod?' . "\n";
        echo 'n.callMethod.apply(n,arguments):n.queue.push(arguments)};' . "\n";
        echo 'if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version="2.0";' . "\n";
        echo 'n.queue=[];t=b.createElement(e);t.async=!0;' . "\n";
        echo 't.src=v;s=b.getElementsByTagName(e)[0];' . "\n";
        echo 's.parentNode.insertBefore(t,s)}(window, document,"script",' . "\n";
        echo '"https://connect.facebook.net/en_US/fbevents.js");' . "\n";
        echo 'fbq("init", "PIXEL_ID");' . "\n";
        echo 'fbq("track", "PageView");' . "\n";
        echo '</script>' . "\n";
        echo '<noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=PIXEL_ID&ev=PageView&noscript=1"/></noscript>' . "\n";
        
        echo "<!-- End Analytics -->\n\n";
    }
    
    public function renderHreflangs() {
        // If you have multiple language versions
        echo "\n<!-- Hreflang Tags -->\n";
        echo '<link rel="alternate" hreflang="en-my" href="' . $this->siteUrl . '">' . "\n";
        echo '<link rel="alternate" hreflang="ms-my" href="' . $this->siteUrl . '/ms">' . "\n";
        echo '<link rel="alternate" hreflang="x-default" href="' . $this->siteUrl . '">' . "\n";
        echo "<!-- End Hreflang -->\n\n";
    }
    
    public function getCurrentPageH1() {
        $page = $this->pageData[$this->currentPage] ?? $this->pageData['home'];
        return $page['h1'];
    }
    
    public function renderWhatsAppWidget() {
        echo "\n<!-- WhatsApp Widget -->\n";
        echo '<div id="whatsapp-widget" style="position: fixed; bottom: 20px; right: 20px; z-index: 9999;">' . "\n";
        echo '<a href="https://wa.me/601126165376?text=Hi%2C%20I%20need%20help%20with%20CIDB%20Kad%20Hijau%20service" target="_blank" rel="noopener">' . "\n";
        echo '</a>' . "\n";
        echo '</div>' . "\n";
        echo "<!-- End WhatsApp Widget -->\n\n";
    }
    
    public function renderClickToCallButton() {
        echo "\n<!-- Click to Call -->\n";
        echo '<div id="call-button" style="position: fixed; bottom: 90px; right: 20px; z-index: 9999;">' . "\n";
        echo '<a href="tel:' . $this->businessPhone . '" rel="noopener">' . "\n";
        echo '</a>' . "\n";
        echo '</div>' . "\n";
        echo "<!-- End Click to Call -->\n\n";
    }
    
    public function renderSocialMediaLinks() {
        echo "\n<!-- Social Media Links -->\n";
        echo '<div class="social-media-links">' . "\n";
        foreach ($this->socialMedia as $platform => $url) {
            $platformName = ucfirst($platform);
            echo '<a href="' . $url . '" target="_blank" rel="noopener nofollow" aria-label="Follow us on ' . $platformName . '">' . "\n";
            echo '<img src="' . $this->siteUrl . '/images/' . $platform . '-icon.png" alt="' . $platformName . '" width="32" height="32">' . "\n";
            echo '</a>' . "\n";
        }
        echo '</div>' . "\n";
        echo "<!-- End Social Media Links -->\n\n";
    }
    
    public function renderPerformanceOptimization() {
        echo "\n<!-- Performance Optimization -->\n";
        
        // Critical CSS should be inlined here
        echo '<style>' . "\n";
        echo '/* Critical CSS for above-the-fold content */' . "\n";
        echo 'body{font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,sans-serif;margin:0;padding:0}' . "\n";
        echo 'h1{font-size:2rem;color:#333;margin:1rem 0}' . "\n";
        echo '.container{max-width:1200px;margin:0 auto;padding:0 20px}' . "\n";
        echo '#whatsapp-widget img,#call-button img{transition:transform 0.3s ease}' . "\n";
        echo '#whatsapp-widget:hover img,#call-button:hover img{transform:scale(1.1)}' . "\n";
        echo '</style>' . "\n";
        
        // Preload important resources
        echo '<link rel="preload" href="' . $this->siteUrl . '/css/main.css" as="style" onload="this.onload=null;this.rel=\'stylesheet\'">' . "\n";
        echo '<noscript><link rel="stylesheet" href="' . $this->siteUrl . '/css/main.css"></noscript>' . "\n";
        
        echo "<!-- End Performance Optimization -->\n\n";
    }
    
} // END OF CLASS - MAKE SURE THIS CLOSING BRACE IS HERE

} // End of class_exists check

// Initialize SEO class only if not already initialized
if (!isset($seo)) {
    $seo = new CIDBKadHijauSEO();
}

// Function to easily render SEO elements - with function_exists check
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

// Auto-render head elements if not disabled
if (!defined('DISABLE_AUTO_SEO_HEAD')) {
    // This will auto-execute when file is included
    // add_action('wp_head', 'renderSEOHead'); // For WordPress - commented out for regular PHP
    // For regular PHP, you'll call renderSEOHead() manually in your <head>
}

// Utility functions for easy access - with function_exists check
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

// Custom event tracking functions
if (!function_exists('trackCIDBEvent')) {
    function trackCIDBEvent($eventName, $eventData = []) {
        echo '<script>';
        echo 'gtag("event", "' . $eventName . '", ' . json_encode($eventData) . ');';
        echo '</script>';
    }
}

if (!function_exists('trackWhatsAppClick')) {
    function trackWhatsAppClick() {
        trackCIDBEvent('whatsapp_click', [
            'event_category' => 'Contact',
            'event_label' => 'WhatsApp Widget'
        ]);
    }
}

if (!function_exists('trackPhoneClick')) {
    function trackPhoneClick() {
        trackCIDBEvent('phone_click', [
            'event_category' => 'Contact',
            'event_label' => 'Phone Button'
        ]);
    }
}




