document.addEventListener('DOMContentLoaded', () => {
    
    /* =========================================
       1. NAVBAR BEHAVIOR (Sticky & Mobile)
    ========================================= */
    const navbar = document.getElementById('navbar');
    const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
    const mobileMenu = document.querySelector('.mobile-menu');
    const scrollTopBtn = document.getElementById('scrollTopBtn');
    
    // Sticky Navbar & Scroll To Top Button
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }

        if (window.scrollY > 500) {
            scrollTopBtn.classList.add('visible');
        } else {
            scrollTopBtn.classList.remove('visible');
        }
    });

    // Mobile Menu Toggle
    mobileMenuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('active');
        const icon = mobileMenuToggle.querySelector('i');
        if (mobileMenu.classList.contains('active')) {
            icon.classList.remove('fa-bars');
            icon.classList.add('fa-xmark');
        } else {
            icon.classList.remove('fa-xmark');
            icon.classList.add('fa-bars');
        }
    });

    // Close mobile menu when link is clicked
    document.querySelectorAll('.mobile-menu a').forEach(link => {
        link.addEventListener('click', () => {
            mobileMenu.classList.remove('active');
            mobileMenuToggle.querySelector('i').classList.remove('fa-xmark');
            mobileMenuToggle.querySelector('i').classList.add('fa-bars');
        });
    });

    // Scroll to Top action
    scrollTopBtn.addEventListener('click', () => {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });

    /* =========================================
       2. SCROLL REVEAL ANIMATIONS
    ========================================= */
    const revealElements = document.querySelectorAll('.reveal');
    
    const revealOptions = {
        threshold: 0.15,
        rootMargin: "0px 0px -50px 0px"
    };

    const revealOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add('active');
            observer.unobserve(entry.target); // Stop observing once revealed
        });
    }, revealOptions);

    revealElements.forEach(el => {
        revealOnScroll.observe(el);
    });

    /* =========================================
       3. NUMBER COUNTER ANIMATION
    ========================================= */
    const counters = document.querySelectorAll('.counter');
    let counted = false;

    const countOptions = {
        threshold: 0.5
    };

    const countOnScroll = new IntersectionObserver(function(entries, observer) {
        entries.forEach(entry => {
            if (entry.isIntersecting && !counted) {
                counters.forEach(counter => {
                    const updateCount = () => {
                        const target = +counter.getAttribute('data-target');
                        const count = +counter.innerText;
                        
                        // Lower inc to slow and higher to speed up
                        const inc = target / 50; 
                        
                        if (count < target) {
                            counter.innerText = Math.ceil(count + inc);
                            setTimeout(updateCount, 30);
                        } else {
                            counter.innerText = target;
                        }
                    };
                    updateCount();
                });
                counted = true;
            }
        });
    }, countOptions);

    const resultsSection = document.querySelector('.results-section');
    if (resultsSection) {
        countOnScroll.observe(resultsSection);
    }

    /* =========================================
       4. ANNOUNCEMENT SLIDER
    ========================================= */
    const slides = document.querySelectorAll('.announcement-slide');
    const prevBtn = document.getElementById('prevAnn');
    const nextBtn = document.getElementById('nextAnn');
    let currentSlide = 0;
    
    // Check if empty state
    const hasAnnouncements = true; // Set to false to test empty state
    
    if (!hasAnnouncements) {
        slides.forEach(s => s.style.display = 'none');
        document.querySelector('.announcements .empty-state').style.display = 'block';
        prevBtn.style.display = 'none';
        nextBtn.style.display = 'none';
    } else {
        // Simple slider logic
        function showSlide(index) {
            slides.forEach(slide => slide.classList.remove('active'));
            if (index >= slides.length - 1) { // -1 because last element is empty state
                currentSlide = 0;
            } else if (index < 0) {
                currentSlide = slides.length - 2;
            } else {
                currentSlide = index;
            }
            slides[currentSlide].classList.add('active');
        }

        if(nextBtn && prevBtn) {
            nextBtn.addEventListener('click', () => showSlide(currentSlide + 1));
            prevBtn.addEventListener('click', () => showSlide(currentSlide - 1));
            
            // Auto slide every 5 seconds
            setInterval(() => {
                showSlide(currentSlide + 1);
            }, 5000);
        }
    }

    /* =========================================
       5. COUNTDOWN TIMER
    ========================================= */
    const targetDateStr = "Oct 25, 2026 08:00:00"; // Example date
    const countDate = new Date(targetDateStr).getTime();
    
    const daysEl = document.getElementById('days');
    const hoursEl = document.getElementById('hours');
    const minsEl = document.getElementById('minutes');
    const secsEl = document.getElementById('seconds');
    
    // Only run if elements exist
    if (daysEl && hoursEl && minsEl && secsEl) {
        const updateCountdown = () => {
            const now = new Date().getTime();
            const gap = countDate - now;

            if (gap <= 0) {
                document.getElementById('countdown').innerHTML = "<h4 style='color: var(--accent-green);'>Exam has started!</h4>";
                return;
            }

            const second = 1000;
            const minute = second * 60;
            const hour = minute * 60;
            const day = hour * 24;

            const d = Math.floor(gap / day);
            const h = Math.floor((gap % day) / hour);
            const m = Math.floor((gap % hour) / minute);
            const s = Math.floor((gap % minute) / second);

            daysEl.innerText = d < 10 ? '0' + d : d;
            hoursEl.innerText = h < 10 ? '0' + h : h;
            minsEl.innerText = m < 10 ? '0' + m : m;
            secsEl.innerText = s < 10 ? '0' + s : s;
        };
        
        setInterval(updateCountdown, 1000);
        updateCountdown();
    }

    /* =========================================
       6. DRAW SVG LINES IN HERO
    ========================================= */
    // Simulating dynamic data connection lines like in the Signal AI reference image
    const svgContainer = document.querySelector('.connection-lines');
    
    if (svgContainer) {
        // Draw some static elegant lines connecting to center
        const path1 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        path1.setAttribute('d', 'M 50 100 C 150 100, 200 250, 250 250');
        path1.setAttribute('fill', 'transparent');
        path1.setAttribute('stroke', '#e2e8f0');
        path1.setAttribute('stroke-width', '2');
        path1.setAttribute('stroke-dasharray', '5,5');
        
        const path2 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        path2.setAttribute('d', 'M 75 400 C 150 400, 200 250, 250 250');
        path2.setAttribute('fill', 'transparent');
        path2.setAttribute('stroke', '#e2e8f0');
        path2.setAttribute('stroke-width', '2');
        
        const path3 = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        path3.setAttribute('d', 'M 475 200 C 350 200, 300 250, 250 250');
        path3.setAttribute('fill', 'transparent');
        path3.setAttribute('stroke', '#e2e8f0');
        path3.setAttribute('stroke-width', '2');

        svgContainer.appendChild(path1);
        svgContainer.appendChild(path2);
        svgContainer.appendChild(path3);
    }
});
