<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supun Tharaka - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <!-- Add this at the beginning of your body tag -->
<div class="preloader">
    <div class="loader">
        <div class="inner one"></div>
        <div class="inner two"></div>
        <div class="inner three"></div>
        <div class="loading-text">
            <span>L</span>
            <span>O</span>
            <span>A</span>
            <span>D</span>
            <span>I</span>
            <span>N</span>
            <span>G</span>
        </div>
    </div>
</div>

    <!-- Navigation -->
    <nav class="side-navbar">
        <div class="nav-content">
            <ul class="nav-links">
                <li>
                    <a href="#home" data-tooltip="Home">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="#about" data-tooltip="About">
                        <i class="fas fa-user"></i>
                    </a>
                </li>
                <li>
                    <a href="#skills" data-tooltip="Skills">
                        <i class="fas fa-code"></i>
                    </a>
                </li>
                <li>
                    <a href="#projects" data-tooltip="Projects">
                        <i class="fas fa-project-diagram"></i>
                    </a>
                </li>
                <li>
                    <a href="#education" data-tooltip="Education">
                        <i class="fas fa-graduation-cap"></i>
                    </a>
                </li>
                <li>
                    <a href="#contact" data-tooltip="Contact">
                        <i class="fas fa-envelope"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6" data-aos="fade-right">
                    <h1 class="display-4">Hi, I'm <span class="highlight">Supun Tharaka</span></h1>
                    <div class="typed-text">I'm a <span class="typing"></span></div>
                    <p class="lead">Information Technology Student at SLIIT</p>
                    <div class="social-links">
                        <a href="https://github.com/Tharaka1103" target="_blank"><i class="fab fa-github"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="hero-image">
                        <div class="image-container">
                            <img src="img.png" alt="Supun Tharaka" class="profile-image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">About Me</h2>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <p class="about-text">
                        I'm a passionate Information Technology student specializing in IT at SLIIT, Sri Lanka. 
                        With a strong foundation in modern technologies and a keen interest in software development,
                        I'm constantly exploring new technologies and working on exciting projects.
                    </p>
                    <div class="about-details">
                        <p><strong>Age:</strong> 23</p>
                        <p><strong>Location:</strong> Sri Lanka</p>
                        <p><strong>Email:</strong> your.email@example.com</p>
                    </div>
                    <a href="tharaka-cv.pdf" class="btn btn-primary particletext bubbles" download>Download CV</a>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="about-stats">
                        <div class="stat-item">
                            <h3>2+</h3>
                            <p>Years Experience</p>
                        </div>
                        <div class="stat-item">
                            <h3>10+</h3>
                            <p>Projects Completed</p>
                        </div>
                        <div class="stat-item">
                            <h3>5+</h3>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My Skills</h2>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="skill-category">
                        <h3>Technical Skills</h3>
                        <div class="skill-item">
                            <span>HTML/CSS</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span>JavaScript</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 85%"></div>
                            </div>
                        </div>
                        <!-- Add more skills -->
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="skill-category">
                        <h3>Soft Skills</h3>
                        <div class="skill-item">
                            <span>Team Work</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 95%"></div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <span>Communication</span>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 90%"></div>
                            </div>
                        </div>
                        <!-- Add more skills -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My Projects</h2>
            <div class="row">
                <!-- Project cards will be added here -->
            </div>
        </div>
    </section>

    <!-- Education Section -->
    <section id="education" class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Education</h2>
            <div class="timeline">
                <div class="timeline-item" data-aos="fade-up">
                    <div class="timeline-content">
                        <h3>BSc Honors in Information Technology</h3>
                        <p>SLIIT - Sri Lanka</p>
                        <span class="date">2020 - Present</span>
                    </div>
                </div>
                <!-- Add more education items -->
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Contact Me</h2>
            <div class="row">
                <div class="col-lg-6" data-aos="fade-right">
                    <form id="contact-form">
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Your Email" required>
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="5" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-info">
                        <div class="info-item">
                            <i class="fas fa-envelope"></i>
                            <p>supuntharakapro999@gmail.com</p>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-phone"></i>
                            <p>+94 71 4310 048</p>
                        </div>
                        <div class="info-item">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>Sri Lanka</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2023 Supun Tharaka. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <script src="script.js"></script>
</body>
</html>
