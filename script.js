// Initialize AOS (Animate On Scroll)
AOS.init({
    duration: 1000,
    once: true,
    offset: 100
});

// Typing Animation
document.addEventListener('DOMContentLoaded', function() {
    const typed = new Typed('.typing', {
        strings: ['Web Developer', 'IT Student', 'Software Engineer'],
        typeSpeed: 100,
        backSpeed: 60,
        loop: true
    });
});

// Smooth Scrolling
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Navbar Color Change on Scroll
window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
        document.querySelector('.navbar').classList.add('scrolled');
    } else {
        document.querySelector('.navbar').classList.remove('scrolled');
    }
});

// Skills Progress Animation
const skillsSection = document.querySelector('#skills');
const progressBars = document.querySelectorAll('.progress-bar');

function showProgress() {
    progressBars.forEach(progress => {
        const value = progress.dataset.progress;
        progress.style.opacity = 1;
        progress.style.width = 10;
    });
}

function hideProgress() {
    progressBars.forEach(progress => {
        progress.style.opacity = 0;
        progress.style.width = 0;
    });
}

window.addEventListener('scroll', () => {
    const sectionPos = skillsSection.getBoundingClientRect().top;
    const screenPos = window.innerHeight / 2;
    
    if(sectionPos < screenPos) {
        showProgress();
    } else {
        hideProgress();
    }
});

// Form Submission
const contactForm = document.getElementById('contact-form');
contactForm.addEventListener('submit', function(e) {
    e.preventDefault();
    // Add your form submission logic here
    alert('Thank you for your message! I will get back to you soon.');
    contactForm.reset();
});

// Project Filter Animation
const filterButtons = document.querySelectorAll('.filter-btn');
const projectItems = document.querySelectorAll('.project-item');

filterButtons.forEach(button => {
    button.addEventListener('click', function() {
        const filter = this.dataset.filter;
        
        filterButtons.forEach(btn => btn.classList.remove('active'));
        this.classList.add('active');
        
        projectItems.forEach(item => {
            if (filter === 'all' || item.dataset.category === filter) {
                item.style.display = 'block';
                item.classList.add('show');
            } else {
                item.style.display = 'none';
                item.classList.remove('show');
            }
        });
    });
});

// Add this to your existing script.js
document.addEventListener('DOMContentLoaded', () => {
    setTimeout(() => {
        const preloader = document.querySelector('.preloader');
        preloader.classList.add('fade-out');
        
        setTimeout(() => {
            preloader.style.display = 'none';
            // Trigger entrance animations for your content here
            document.body.style.overflow = 'visible';
        }, 500);
    }, 1000); // Adjust loading time as needed
});
// Add this to your existing script.js
document.querySelector('.btn-primary[download]').addEventListener('click', function() {
    const downloadMsg = document.createElement('div');
    downloadMsg.className = 'download-message';
    downloadMsg.textContent = 'CV Download Started!';
    document.body.appendChild(downloadMsg);
    
    setTimeout(() => {
        downloadMsg.remove();
    }, 500);
});


function initparticles() {
    bubbles();
    // Remove sunbeams() call since the element is commented out
    }

    function bubbles() {
    $.each($(".particletext.bubbles"), function(){
        var bubblecount = ($(this).width()/50)*10;
        for(var i = 0; i <= bubblecount; i++) {
            var size = ($.rnd(40,80)/10);
            $(this).append('<span class="particle" style="top:' + $.rnd(20,80) + '%; left:' + $.rnd(0,95) + '%;width:' + size + 'px; height:' + size + 'px;animation-delay: ' + ($.rnd(0,30)/10) + 's;"></span>');
        }
    });
    }

    jQuery.rnd = function(m,n) {
        m = parseInt(m);
        n = parseInt(n);
        return Math.floor( Math.random() * (n - m + 1) ) + m;
    }

    $(document).ready(function() {
        initparticles();
    });
// Active section detection and smooth scrolling
const sections = document.querySelectorAll('section');
const navLinks = document.querySelectorAll('.nav-links a');

// Smooth scrolling
navLinks.forEach(link => {
    link.addEventListener('click', e => {
        e.preventDefault();
        const targetId = link.getAttribute('href');
        const targetSection = document.querySelector(targetId);
        targetSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    });
});

// Active section detection
window.addEventListener('scroll', () => {
    let current = '';
    
    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;
        
        if (scrollY >= (sectionTop - sectionHeight/3)) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        if (link.getAttribute('href').slice(1) === current) {
            link.classList.add('active');
        }
    });
});

// Initial check for active section
document.addEventListener('DOMContentLoaded', () => {
    window.dispatchEvent(new Event('scroll'));
});
