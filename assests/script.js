// Remove $(document).ready and use DOMContentLoaded instead
document.addEventListener('DOMContentLoaded', function() {
    // Menu elements
    const menu = document.querySelector('#menu-bar');
    const navbar = document.querySelector('.navbar');
    
    // Menu toggle function with improved class handling
    if (menu && navbar) {
        menu.onclick = (e) => {
            e.stopPropagation();
            menu.classList.toggle('ri-close-line');
            menu.classList.toggle('ri-menu-3-line');
            navbar.classList.toggle('active');
        };
    }

    // Close menu when clicking outside - converted from jQuery
    document.addEventListener('click', function(e) {
        if (!e.target.closest('.navbar') && !e.target.closest('#menu-bar')) {
            menu.classList.remove('ri-close-line');
            menu.classList.add('ri-menu-3-line');
            navbar.classList.remove('active');
        }
    });

    // Combined scroll and load handler - converted from jQuery
    function handleScrollAndLoad() {
        // Reset menu on scroll
        if (menu && navbar) {
            menu.classList.remove('ri-close-line');
            menu.classList.add('ri-menu-3-line');
            navbar.classList.remove('active');
        }

        // Scroll top button
        let scrollTopElem = document.querySelector('#scroll-top');
        if (scrollTopElem) {
            if (window.scrollY > 200) {
                scrollTopElem.classList.add('active');
            } else {
                scrollTopElem.classList.remove('active');
            }
        }

        // Header sticky behavior
        const header = document.querySelector('header');
        if (header) {
            header.classList.toggle("sticky", window.scrollY > 0);
        }

        // Scroll spy for sections - converted from jQuery
        const sections = document.querySelectorAll('section');
        sections.forEach(function(section) {
            let height = section.offsetHeight;
            let offset = section.offsetTop - 200;
            let top = window.scrollY;
            let id = section.getAttribute('id');

            if (top > offset && top < offset + height) {
                // Remove active class from all navbar links
                const navbarLinks = document.querySelectorAll('.navbar li a');
                navbarLinks.forEach(link => link.classList.remove('active'));
                
                // Add active class to current section link
                const activeLink = document.querySelector(`.navbar a[href="#${id}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    }

    window.addEventListener('scroll', handleScrollAndLoad);
    window.addEventListener('load', handleScrollAndLoad);

    // Smooth scrolling - converted from jQuery
    const anchorLinks = document.querySelectorAll('a[href*="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                // Smooth scroll to target
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
            
            // Close mobile menu after clicking a link
            if (window.innerWidth <= 768) {
                menu.classList.remove('ri-close-line');
                menu.classList.add('ri-menu-3-line');
                navbar.classList.remove('active');
            }
        });
    });

    // Home background changer
    const imgBtn = document.querySelectorAll('.img-btn');
    if (imgBtn.length > 0) {
        imgBtn.forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelector('.controls .active').classList.remove('active');
                btn.classList.add('active');
                let src = btn.getAttribute('data-src');
                document.querySelector('#home').style.backgroundImage = 'url("' + src + '")';
            });
        });
    }

    // Enhanced Life/Blog images carousel functionality
    const currentImage = document.querySelector('#curimg');
    const lifeImages = document.querySelectorAll('.lifeimg');
    const galleryContainer = document.getElementById('lifeimg-gallery');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');
    
    let currentIndex = 0;

    // Initialize the gallery
    function initGallery() {
        if (lifeImages.length === 0) return;
        
        lifeImages.forEach((img, index) => {
            img.addEventListener('click', () => {
                updateActiveImage(index);
            });
        });
    }

    // Update active image and thumbnail
    function updateActiveImage(index) {
        // Remove active class from all images
        lifeImages.forEach(img => img.classList.remove('active'));
        
        // Add active class to current image
        lifeImages[index].classList.add('active');
        
        // Update main image with fade effect
        currentImage.style.opacity = 0.5;
        currentImage.src = lifeImages[index].src;
        currentImage.alt = lifeImages[index].alt;
        setTimeout(() => {
            currentImage.style.opacity = 1;
        }, 100);
        
        currentIndex = index;
        
        // Scroll thumbnail into view
        lifeImages[index].scrollIntoView({
            behavior: 'smooth',
            block: 'nearest',
            inline: 'center'
        });
    }

    // Gallery navigation
    if (prevButton && nextButton && galleryContainer) {
        prevButton.addEventListener('click', () => {
            galleryContainer.scrollBy({
                left: -150,
                behavior: 'smooth'
            });
            
            if (currentIndex > 0) {
                updateActiveImage(currentIndex - 1);
            }
        });

        nextButton.addEventListener('click', () => {
            galleryContainer.scrollBy({
                left: 150,
                behavior: 'smooth'
            });
            
            if (currentIndex < lifeImages.length - 1) {
                updateActiveImage(currentIndex + 1);
            }
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft' && currentIndex > 0) {
                updateActiveImage(currentIndex - 1);
            } else if (e.key === 'ArrowRight' && currentIndex < lifeImages.length - 1) {
                updateActiveImage(currentIndex + 1);
            }
        });

        // Touch swipe support
        let touchStartX = 0;
        let touchEndX = 0;

        galleryContainer.addEventListener('touchstart', (e) => {
            touchStartX = e.changedTouches[0].screenX;
        });

        galleryContainer.addEventListener('touchend', (e) => {
            touchEndX = e.changedTouches[0].screenX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            const swipeLength = touchEndX - touchStartX;
            
            if (Math.abs(swipeLength) > swipeThreshold) {
                if (swipeLength > 0 && currentIndex > 0) {
                    updateActiveImage(currentIndex - 1);
                } else if (swipeLength < 0 && currentIndex < lifeImages.length - 1) {
                    updateActiveImage(currentIndex + 1);
                }
            }
        }
    }

    // Initialize gallery on page load
    initGallery();

    // Image loading animation
    if (currentImage) {
        currentImage.addEventListener('load', function() {
            this.style.opacity = 1;
        });

        currentImage.addEventListener('loadstart', function() {
            this.style.opacity = 0.5;
        });
    }
});

// Google Maps initialization (kept separate as it's called by the Maps API)
function initMap() {
    const coord = { lat: 28.7041, lng: 77.1025 };
    const mapElem = document.getElementById("map");
    if (mapElem) {
        const map = new google.maps.Map(mapElem, {
            zoom: 14,
            center: coord,
            mapId: "efffb52a8e985f64",
        });
        const marker = new google.maps.Marker({
            position: coord,
            map: map,
        });
    }
}