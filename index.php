<?php
$startDate = new DateTime('2012-02-01');
$currentDate = new DateTime();
$interval = $startDate->diff($currentDate);
$yearsOfExperience = $interval->y;

// Dynamic theme rotator - randomly picks a theme on each refresh
// $themes = ['style', 'theme-purple', 'theme-orange', 'theme-monochrome', 'theme-forest'];
// $selectedTheme = $themes[array_rand($themes)];
$selectedTheme = 'theme-forest';

// Map themes to their favicon
$faviconMap = [
    'style' => 'favicon.svg',
    'theme-purple' => 'favicon-purple.svg',
    'theme-orange' => 'favicon-orange.svg',
    'theme-monochrome' => 'favicon-monochrome.svg',
    'theme-forest' => 'favicon-forest.svg'
];
$selectedFavicon = $faviconMap[$selectedTheme];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pankit Kapadia | Software Architect</title>
    <meta name="description" content="Portfolio of Pankit Kapadia, a Software Architect with <?php echo $yearsOfExperience; ?>+ years of experience in React.js, Redux, TypeScript, and Node.js.">
    
    <!-- Canonical URL -->
    <link rel="canonical" href="https://kapadiapankit.in">
    
    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="<?php echo $selectedFavicon; ?>">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://kapadiapankit.in">
    <meta property="og:title" content="Pankit Kapadia | Software Architect">
    <meta property="og:description" content="Software Architect specializing in React, TypeScript, and Node.js. <?php echo $yearsOfExperience; ?>+ years building scalable web applications.">
    <meta property="og:site_name" content="Pankit Kapadia Portfolio">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:url" content="https://kapadiapankit.in">
    <meta name="twitter:title" content="Pankit Kapadia | Software Architect">
    <meta name="twitter:description" content="Software Architect specializing in React, TypeScript, and Node.js. <?php echo $yearsOfExperience; ?>+ years building scalable web applications.">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500&family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/<?php echo $selectedTheme; ?>.css?v=<?php echo time(); ?>">
    
    <!-- Structured Data (JSON-LD) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Pankit Kapadia",
      "jobTitle": "Software Architect",
      "email": "pankit_1990@yahoo.com",
      "url": "https://kapadiapankit.in",
      "sameAs": [
        "https://www.linkedin.com/in/kapadiapankit/"
      ],
      "knowsAbout": ["React.js", "TypeScript", "Node.js", "Electron.js", "Redux", "JavaScript", "Web Development"],
      "worksFor": {
        "@type": "Organization",
        "name": "Qualitia Software"
      }
    }
    </script>
</head>
<body>

    <nav>
        <div class="logo">PK</div>
        <ul class="nav-links">
            <li><a href="#about"><span>01.</span> About</a></li>
            <li><a href="#experience"><span>02.</span> Experience</a></li>
            <li><a href="#skills"><span>03.</span> Skills</a></li>
            <li><a href="#contact"><span>04.</span> Contact</a></li>
        </ul>
    </nav>

    <main class="container">
        <!-- HERO SECTION -->
        <section id="hero" class="section hero">
            <h1>Hi, my name is</h1>
            <h2>Pankit Kapadia.</h2>
            <h3>I build scalable web applications.</h3>
            <p>
                I'm a Software Architect with <?php echo $yearsOfExperience; ?>+ years of experience delivering scalable, performant, and user-centric web applications across diverse domains including Banking, Test Automation, E-commerce, and Marketing. Currently focusing on AI-driven features at Qualitia Software.
            </p>
            <a href="mailto:pankit_1990@yahoo.com" class="btn">Get In Touch</a>
        </section>

        <!-- ABOUT SECTION -->
        <section id="about" class="section about">
            <div class="section-title">
                <span>01.</span> About Me
            </div>
            <div class="about-content">
                <div class="about-text">
                    <p>
                        Hello! I'm Pankit, a software architect who enjoys building things that live on the internet. My journey started back in 2012, and over the years, I've delivered solutions across diverse domains including <strong>Digital Marketing</strong>, <strong>Banking</strong>, <strong>E-Commerce</strong>, <strong>Healthcare</strong>, and <strong>Test Automation</strong>.
                    </p>
                    <p>
                        My main focus these days is building accessible, inclusive products and digital experiences at <strong>Qualitia Software</strong>. I specialize in architecting frontend frameworks, reusable UI components, and integrating AI-driven features.
                    </p>
                    <p>Here are a few technologies I've been working with recently:</p>
                    <ul class="skills-list">
                        <li>React.js</li>
                        <li>TypeScript</li>
                        <li>Node.js</li>
                        <li>Electron.js</li>
                        <li>Redux</li>
                    </ul>
                </div>
                <div class="about-img">
                </div>
            </div>
        </section>

        <!-- EXPERIENCE SECTION -->
        <section id="experience" class="section experience">
            <div class="section-title">
                <span>02.</span> Where I've Worked
            </div>
            <div class="jobs-container">
                
                <div class="job-card">
                    <div class="job-header">
                        <h4>Lead Software Engineer <span style="color: var(--accent);">@ Qualitia Software</span></h4>
                        <h5>Jul 2024 – Present</h5>
                    </div>
                    <ul class="job-desc">
                        <li>Leading development of an advanced test automation platform using React.js, Redux, Electron.js, and Node.js.</li>
                        <li>Architected and implemented AI-driven features to auto-generate test cases and scripts via natural language — reducing manual effort by 70%.</li>
                        <li>Refactored core modules and introduced reusable component libraries, improving maintainability and performance.</li>
                        <li>Designed and built RESTful Node.js APIs integrated with LLMs to support AI workflows.</li>
                        <li>Conducted regular code reviews and mentored team members on best practices.</li>
                    </ul>
                </div>

                <div class="job-card">
                    <div class="job-header">
                        <h4>Technology Specialist <span style="color: var(--accent);">@ Xoriant Solutions</span></h4>
                        <h5>Feb 2020 – Jul 2024</h5>
                    </div>
                    <ul class="job-desc">
                        <li>Built and maintained large-scale frontend applications with React.js, Redux, and TypeScript.</li>
                        <li>Implemented test suites with Jest and React Testing Library to maintain more than 80% of code coverage.</li>
                        <li>Led refactoring efforts and contributed to performance tuning and tech-debt reduction.</li>
                        <li>Championed pair programming, peer reviews, and onboarding of new team members.</li>
                        <li>Recognized with TITANS Award (Highest team award) and STARS Award for outstanding performance.</li>
                    </ul>
                </div>

                <div class="job-card">
                    <div class="job-header">
                        <h4>UI Developer <span style="color: var(--accent);">@ Barclays</span></h4>
                        <h5>May 2018 – Jan 2020</h5>
                    </div>
                    <ul class="job-desc">
                        <li>Developed and maintained UI components using React.js, Backbone.js, and Handlebars.</li>
                        <li>Collaborated with BAs and QA for story refinement and testing alignment.</li>
                        <li>Maintained quality via SonarQube and Checkmarx compliance reports.</li>
                        <li>Performed code reviews, sanity testing, and post-deployment support.</li>
                    </ul>
                </div>

                <div class="job-card">
                    <div class="job-header">
                        <h4>Team Lead – Web Development <span style="color: var(--accent);">@ Amura Marketing</span></h4>
                        <h5>Apr 2014 – Apr 2018</h5>
                    </div>
                    <ul class="job-desc">
                        <li>Managed a team of 12 frontend developers, assigning projects based on individual strengths.</li>
                        <li>Designed and developed responsive web applications for marketing campaigns using JavaScript, jQuery, Bootstrap.</li>
                        <li>Played a key role in delivering major projects such as Apartment Selector and Marketing India.</li>
                        <li>Promoted 3 times within 2.5 years, from Web Developer to Team Lead.</li>
                    </ul>
                </div>

            </div>
        </section>

        <!-- SKILLS SECTION -->
        <section id="skills" class="section skills">
            <div class="section-title">
                <span>03.</span> Technical Skills
            </div>
            <div class="card-grid">
                <div class="card">
                    <header>
                        <div class="folder-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="16 18 22 12 16 6"></polyline><polyline points="8 6 2 12 8 18"></polyline></svg>
                        </div>
                        <h3>Languages</h3>
                    </header>
                    <ul class="skill-tags">
                        <li>JavaScript (ES6+)</li>
                        <li>TypeScript</li>
                        <li>HTML5</li>
                        <li>CSS3</li>
                        <li>Handlebars</li>
                        <li>PHP</li>
                    </ul>
                </div>
                <div class="card">
                    <header>
                        <div class="folder-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                        </div>
                        <h3>Frameworks</h3>
                    </header>
                    <ul class="skill-tags">
                        <li>React.js</li>
                        <li>Redux</li>
                        <li>Node.js</li>
                        <li>Electron.js</li>
                        <li>Backbone.js</li>
                    </ul>
                </div>
                <div class="card">
                    <header>
                        <div class="folder-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"></path></svg>
                        </div>
                        <h3>Tools & DevOps</h3>
                    </header>
                    <ul class="skill-tags">
                        <li>Git</li>
                        <li>GitHub</li>
                        <li>CircleCI</li>
                        <li>Jenkins</li>
                        <li>Webpack</li>
                        <li>Babel</li>
                        <li>NPM</li>
                        <li>Docker</li>
                    </ul>
                </div>
                <div class="card">
                    <header>
                        <div class="folder-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 2v7.527a2 2 0 0 1-.211.896L4.72 20.55a1 1 0 0 0 .9 1.45h12.76a1 1 0 0 0 .9-1.45l-5.069-10.127A2 2 0 0 1 14 9.527V2"></path><path d="M8.5 2h7"></path><path d="M7 16h10"></path></svg>
                        </div>
                        <h3>Testing</h3>
                    </header>
                    <ul class="skill-tags">
                        <li>Jest</li>
                        <li>React Testing Library</li>
                        <li>Mocha</li>
                        <li>Chai</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- CONTACT SECTION -->
        <section id="contact" class="section contact">
            <div class="section-title">
                <span>04.</span> What's Next?
            </div>
            <h2 style="font-size: 50px; margin-bottom: 20px;">Get In Touch</h2>
            <p>
                Whether you're building the next big thing or just want to talk tech, my inbox is open. Let's connect!
            </p>
            <div class="contact-buttons">
                <a href="mailto:pankit_1990@yahoo.com" class="btn">Say Hello</a>
                <a href="https://www.linkedin.com/in/kapadiapankit/" target="_blank" class="icon-btn" aria-label="LinkedIn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                </a>
                <a href="tel:+919824565684" class="icon-btn" aria-label="Call">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                </a>
            </div>
        </section>

    </main>

    <footer>
        <p>Designed & Built by Pankit Kapadia</p>
    </footer>

    <script src="assets/js/script.js"></script>
</body>
</html>