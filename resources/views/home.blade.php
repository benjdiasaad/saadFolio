<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" type="image/ico" href="{{ asset('assets/images/favicon.ico') }}?v={{ config('app.version') }}">

    <title>
        Saad Benjdia | Laravel Developer in Morocco | Full Stack Engineer
    </title>

    <meta name="description"
        content="Saad Benjdia est un développeur Laravel et ingénieur Full Stack basé à Casablanca, Maroc. Laravel Developer & Full Stack Engineer specialized in high-performance web applications, Angular and DevOps. Portfolio officiel et projets.">

    <meta name="keywords"
        content="Saad Benjdia, Développeur Laravel Maroc, Laravel Developer Morocco, PHP Developer Casablanca, Angular Developer, Ingénieur Full Stack, Full Stack Engineer Morocco, Portfolio développeur">
        
    <meta name="author" content="Saad Benjdia">

    <meta name="robots" content="index, follow">

    <meta property="og:title" content="Saad Benjdia — Laravel & Full Stack Developer">

    <meta property="og:description"
        content="Portfolio officiel de Saad Benjdia, ingénieur spécialisé en Laravel, Angular et DevOps.">

    <meta property="og:image" content="https://benjdiasaad.com/assets/images/preview.png">

    <meta property="og:url" content="https://benjdiasaad.com/">

    <meta property="og:type" content="website">

    <meta name="twitter:card" content="summary_large_image">

    <meta name="twitter:title" content="Saad Benjdia — Laravel Developer">

    <meta name="twitter:description" content="Ingénieur Laravel & Full Stack Developer basé à Casablanca.">

    <meta name="twitter:image" content="https://benjdiasaad.com/assets/images/preview.png">

    <link rel="alternate" hreflang="fr" href="https://benjdiasaad.com/" />
    
    <link rel="alternate" hreflang="en" href="https://benjdiasaad.com/" />

    <link rel="canonical" href="https://benjdiasaad.com/" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />

    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}?v={{ config('app.version') }}" />

    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Saad Benjdia",
        "url": "https://benjdiasaad.com",
        "image": "https://benjdiasaad.com/assets/images/image.png",
        "jobTitle": "Ingénieur Études et Développement",
        "worksFor": {
            "@type": "Organization",
            "name": "E-solution"
        },
        "sameAs": [
            "https://github.com/benjdiasaad",
            "https://www.linkedin.com/in/saadbenjdia/"
        ]
        }

    </script>

</head>

<body>
    <!-- 3D background -->
    <canvas id="bg"></canvas>

    <div class="noise" aria-hidden="true"></div>
    <div class="scroll-progress" aria-hidden="true">
        <span id="progressBar"></span>
    </div>

    <!-- Header -->
    <header class="topbar">
        <a class="brand" href="#home" aria-label="Aller en haut">
            <span class="brand-dot"></span>
            <span>Saad Benjdia</span>
        </a>

        <nav class="nav">
            <a href="#about">À propos</a>
            <a href="#skills">Compétences</a>
            <a href="#experience">Expériences</a>
            <a href="#education">Formation</a>
            <a href="#certs">Certificats</a>
            <a href="#contact" class="nav-cta">Contact</a>
        </nav>

        <button id="themeToggle" class="theme-btn" aria-label="Basculer le thème" title="Light/Dark">
            <span class="theme-icon" aria-hidden="true">☾</span>
        </button>

        <button id="menuBtn" class="menu-btn" aria-label="Ouvrir le menu">
            <span></span><span></span><span></span>
        </button>
    </header>

    <!-- Mobile menu -->
    <aside id="mobileMenu" class="mobile-menu" aria-hidden="true">
        <div class="mobile-menu-inner">
            <a href="#about">À propos</a>
            <a href="#skills">Compétences</a>
            <a href="#experience">Expériences</a>
            <a href="#education">Formation</a>
            <a href="#certs">Certificats</a>
            <a href="#contact">Contact</a>
            <a class="ghost" href="mailto:benjdiasaad97@gmail.com">benjdiasaad97@gmail.com
            </a>
            <a class="ghost" target="_blank" rel="noopener" href="https://github.com/benjdiasaad">GitHub</a>
        </div>
    </aside>

    <main id="home" class="page">
        <!-- HERO -->
        <section class="hero">
            <div class="hero-left reveal">
                <p class="badge">
                    <span class="ping" aria-hidden="true"></span>
                    Disponible — Ingénieur Études & Développement
                </p>

                <h1 class="sr-only">
                    Saad Benjdia — Laravel Developer & Full Stack Engineer in Morocco
                </h1>

                <h2 class="hero-title">
                    Je conçois des applications web <span class="gradient">performantes</span> & <span
                        class="gradient">robustes</span>.
                </h2>

                <p class="lead">
                    Ingénieur spécialisé en <b>PHP/Laravel</b>, <b>JavaScript</b> et
                    <b>Angular</b>, avec une forte culture <b>DevOps</b> et une
                    expertise API.
                </p>

                <div class="hero-actions">
                    <a class="btn primary" href="#contact">Me contacter</a>
                    <a class="btn" href="#experience">Voir mon parcours</a>
                </div>

                <div class="chips" aria-label="Technos principales">
                    <span class="chip">Laravel</span>
                    <span class="chip">Angular</span>
                    <span class="chip">Next.js</span>
                    <span class="chip">Spring</span>
                    <span class="chip">REST API</span>
                    <span class="chip">SQL Server / MySQL</span>
                    <span class="chip">Linux</span>
                    <span class="chip">GitHub</span>
                </div>
            </div>

            <div class="hero-right reveal">
                <div class="glass-card">
                    <div class="card-top">
                        <div class="avatar avatar-img">
                            <img src="{{ asset('assets/images/image.png') }}" alt="Photo de Saad Benjdia"
                                loading="lazy" />
                        </div>
                        <div>
                            <h2>Saad Benjdia</h2>
                            <p>Ingénieur études et développement — Confirmé</p>
                        </div>
                    </div>

                    <div class="card-grid">
                        <div class="mini">
                            <p class="mini-k">Localisation</p>
                            <p class="mini-v">Casablanca, Maroc</p>
                        </div>
                        <div class="mini">
                            <p class="mini-k">Langues</p>
                            <p class="mini-v">FR (courant) • EN (interm.) • AR (natif)</p>
                        </div>
                        <div class="mini">
                            <p class="mini-k">Focus</p>
                            <p class="mini-v">Qualité • Optimisation • Innovation</p>
                        </div>
                        <div class="mini">
                            <p class="mini-k">Stack</p>
                            <p class="mini-v">PHP • JS • Java • Python</p>
                        </div>
                    </div>

                    <div class="card-links">
                        <a class="link" target="_blank" rel="noopener" href="https://www.linkedin.com/in/saadbenjdia/">
                            LinkedIn
                            <span aria-hidden="true">↗</span>
                        </a>
                        <a class="link" target="_blank" rel="noopener" href="https://github.com/benjdiasaad">
                            GitHub
                            <span aria-hidden="true">↗</span>
                        </a>
                        <a class="link" href="mailto:benjdiasaad97@gmail.com">
                            Email
                            <span aria-hidden="true">↗</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section id="about" class="section">
            <div class="section-head reveal">
                <h3>À propos</h3>
                <p>
                    Ingénieur en études et développement spécialisé dans les
                    applications web, avec expertise
                    <b>PHP/Laravel</b>, <b>JavaScript</b> et <b>Angular</b>. Capacité à
                    concevoir, développer et déployer des solutions innovantes adaptées
                    aux besoins client.
                </p>
            </div>

            <div class="grid-2">
                <div class="panel reveal">
                    <h4>Ce que j’apporte</h4>
                    <ul class="list">
                        <li>
                            <b>Développement full-stack</b> : front & back, architectures
                            orientées API
                        </li>
                        <li>
                            <b>Qualité</b> : maintenance, résolution d’anomalies, bonnes
                            pratiques, PHPStan
                        </li>
                        <li>
                            <b>Delivery</b> : packaging et mise en production, culture
                            DevOps
                        </li>
                        <li>
                            <b>Analyse</b> : besoins, spécifications fonctionnelles &
                            techniques
                        </li>
                    </ul>
                </div>

                <div class="panel reveal">
                    <h4>Soft skills</h4>
                    <div class="skills-bubbles">
                        <span class="bubble">Esprit d’équipe</span>
                        <span class="bubble">Rigoureux</span>
                        <span class="bubble">Autonome</span>
                        <span class="bubble">Dynamique</span>
                    </div>

                    <div class="callout">
                        <p class="callout-title">Objectif</p>
                        <p>
                            Contribuer à des produits fiables et performants, avec une
                            exécution propre et mesurable.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SKILLS -->
        <section id="skills" class="section">
            <div class="section-head reveal">
                <h3>Compétences</h3>
            </div>

            <div class="cards">
                <article class="skill-card reveal">
                    <h4>Backend</h4>
                    <div class="tags">
                        <span>PHP</span><span>Laravel</span><span>Symfony</span><span>REST
                            API</span><span>Java</span><span>Spring</span>
                        <span>Python</span>
                    </div>
                    <p class="muted">
                        APIs, logique métier, sécurité, performance, maintenance.
                    </p>
                </article>

                <article class="skill-card reveal">
                    <h4>Frontend</h4>
                    <div class="tags">
                        <span>JavaScript</span><span>Angular</span><span>Next.js</span><span>Bootstrap</span>
                        <span>Tailwind css</span>
                        <span>Vue.Js</span>
                    </div>
                    <p class="muted">
                        Interfaces réactives, composants, intégration, UX.
                    </p>
                </article>

                <article class="skill-card reveal">
                    <h4>Données</h4>
                    <div class="tags">
                        <span>SQL</span><span>SQL Server</span><span>MySQL</span><span>Oracle 19c</span>
                    </div>
                    <p class="muted">
                        Requêtes, modélisation, optimisation, intégrité.
                    </p>
                </article>

                <article class="skill-card reveal">
                    <h4>DevOps & Qualité</h4>
                    <div class="tags">
                        <span>Linux</span><span>GitHub</span><span>CI/CD</span><span>PHPStan</span>
                    </div>
                    <p class="muted">
                        Packaging, déploiement, pipelines, bonnes pratiques.
                    </p>
                </article>
            </div>
        </section>

        <!-- EXPERIENCE -->
        <section id="experience" class="section">
            <div class="section-head reveal">
                <h3>Expériences</h3>
            </div>

            <div class="timeline">
                <div class="time-item reveal">
                    <div class="time-dot"></div>
                    <div class="time-content">
                        <div class="time-top">
                            <h4>E-solution — Casablanca (CDI)</h4>
                            <span class="pill">05/2022 → Actuel</span>
                        </div>
                        <p class="muted">
                            <b>Ingénieur d’études et développement Sénior</b>
                        </p>
                        <ul class="list compact">
                            <li>
                                Développement de nouvelles fonctionnalités, maintenance et
                                résolution d’anomalies
                            </li>
                            <li>
                                Modules : <b>e-sourcing</b>, <b>demandes d’achats</b>, gestion
                                des réclamations
                            </li>
                            <li>Packaging et mise en production</li>
                            <li>
                                Analyse des besoins, rédaction/complétion des spécifications
                            </li>
                            <li>
                                Partage des bonnes pratiques pour un travail d’équipe uniforme
                            </li>
                        </ul>
                        <div class="tags small">
                            <span>PHP 5/7/8</span><span>Laravel</span><span>Angular</span><span>MySQL</span> <span>SQL
                                Server</span><span>Linux</span><span>GitHub</span><span>PHPStan</span>
                        </div>
                    </div>
                </div>

                <div class="time-item reveal">
                    <div class="time-dot"></div>
                    <div class="time-content">
                        <div class="time-top">
                            <h4>Société de soutien au programme RBC — Settat (Stage)</h4>
                            <span class="pill">01/2019 → 07/2019</span>
                        </div>
                        <p class="muted"><b>Développeur Full Stack</b></p>
                        <ul class="list compact">
                            <li>Analyse & réalisation du site web de l’association</li>
                            <li>Développement de fonctionnalités selon besoins</li>
                            <li>Maintenance et documentation</li>
                        </ul>
                        <div class="tags small">
                            <span>Laravel</span><span>Bootstrap</span><span>REST API</span><span>SQL
                                Server</span><span>GitHub</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- EDUCATION -->
        <section id="education" class="section">
            <div class="section-head reveal">
                <h3>Formation</h3>
                <p>Parcours académique.</p>
            </div>

            <div class="edu-grid">
                <div class="edu-card reveal">
                    <h4>Master de recherche</h4>
                    <p class="muted">
                        Ingénierie des systèmes informatiques — Béni Mellal
                    </p>
                    <span class="pill">09/2019 → 09/2021</span>
                    <p class="tiny">Mention : Bien</p>
                </div>

                <div class="edu-card reveal">
                    <h4>Licence professionnelle</h4>
                    <p class="muted">
                        Développement des systèmes informatiques — El Jadida
                    </p>
                    <span class="pill">09/2017 → 08/2018</span>
                    <p class="tiny">Mention : Bien</p>
                </div>

                <div class="edu-card reveal">
                    <h4>BTS</h4>
                    <p class="muted">
                        Développement des systèmes d’informations — Settat
                    </p>
                    <span class="pill">09/2015 → 09/2017</span>
                    <p class="tiny">Mention : Bien</p>
                </div>
            </div>
        </section>

        <!-- CERTS -->
        <section id="certs" class="section">
            <div class="section-head reveal">
                <h3>Certificats</h3>
                <p>Certifications et apprentissages.</p>
            </div>

            <div class="cards">
                <article class="cert-card reveal">
                    <div class="cert-icon" aria-hidden="true">◎</div>
                    <div>
                        <h4>Certificat Professionnel — SCRUM Foundation (CertiProf)</h4>
                        <p class="muted">
                            Approche agile, collaboration, livraison continue.
                        </p>
                    </div>
                </article>
            </div>
        </section>

        <!-- PROJECTS (placeholder) -->
        <!-- <section id="projects" class="section">
        <div class="section-head reveal">
          <h3>Projets</h3>
          <p>Ajoute ici 3 à 6 projets concrets (titre, stack, impact, lien).</p>
        </div>

        <div class="project-grid">
          <article class="project-card reveal">
            <div class="project-top">
              <h4>Plateforme e-sourcing</h4>
              <span class="pill">Laravel • Angular</span>
            </div>
            <p class="muted">
              Modules achats, workflows, intégrations API, qualité &
              maintenance.
            </p>
            <div class="project-actions">
              <a class="btn small" href="#contact">Demander une démo</a>
              <button
                class="btn small ghost"
                data-toast="Projet interne (lien privé)"
              >
                Lien
              </button>
            </div>
          </article>

          <article class="project-card reveal">
            <div class="project-top">
              <h4>Gestion des réclamations</h4>
              <span class="pill">REST API • SQL</span>
            </div>
            <p class="muted">
              Création/gestion, traçabilité, optimisation des requêtes.
            </p>
            <div class="project-actions">
              <a class="btn small" href="#contact">En savoir plus</a>
              <button
                class="btn small ghost"
                data-toast="Ajoute ton lien GitHub"
              >
                Lien
              </button>
            </div>
          </article>

          <article class="project-card reveal">
            <div class="project-top">
              <h4>Site web association</h4>
              <span class="pill">Laravel • Bootstrap</span>
            </div>
            <p class="muted">
              Analyse, réalisation, documentation, maintenance.
            </p>
            <div class="project-actions">
              <a class="btn small" href="#contact">Voir détails</a>
              <button class="btn small ghost" data-toast="Ajoute ton lien">
                Lien
              </button>
            </div>
          </article>
        </div>
      </section> -->

        <!-- CONTACT -->
        <section id="contact" class="section">
            <div class="section-head reveal">
                <h3>Contact</h3>
                <p>
                    Envoie-moi un message (formulaire) ou contacte-moi directement.
                </p>
            </div>

            <div class="grid-2">
                <div class="panel reveal">
                    <h4>Coordonnées</h4>
                    <div class="contact-list">
                        <a class="contact-item" href="mailto:benjdiasaad97@gmail.com">
                            <span class="k">Email</span><span class="v">benjdiasaad97@gmail.com</span>
                        </a>
                        <a class="contact-item" href="tel:+212620669912">
                            <span class="k">Téléphone</span><span class="v">+212 620 669 912</span>
                        </a>
                        <a class="contact-item" target="_blank" rel="noopener"
                            href="https://www.linkedin.com/in/saadbenjdia">
                            <span class="k">LinkedIn</span><span class="v">/in/saadbenjdia</span>
                        </a>
                        <a class="contact-item" target="_blank" rel="noopener" href="https://github.com/benjdiasaad">
                            <span class="k">GitHub</span><span class="v">/benjdiasaad</span>
                        </a>
                        <div class="contact-item">
                            <span class="k">Adresse</span><span class="v">Casablanca, Maroc</span>
                        </div>
                    </div>
                </div>

                <form class="panel reveal" id="contactForm">
                    <h4>Envoyer un message</h4>

                    <label>
                        <span>Nom</span>
                        <input name="name" type="text" placeholder="Votre nom" required />
                    </label>

                    <label>
                        <span>Email</span>
                        <input name="email" type="email" placeholder="vous@exemple.com" required />
                    </label>

                    <label>
                        <span>Message</span>
                        <textarea name="message" rows="5" placeholder="Décrivez votre besoin..." required></textarea>
                    </label>

                    <button class="btn primary" type="submit" style="margin-top:10px;">
                        Envoyer
                    </button>

                </form>

            </div>
        </section>

        <footer class="footer">
            <p>© <span id="year"></span> Saad Benjdia</p>
        </footer>
    </main>

    <!-- Toast -->
    <div id="toast" class="toast" role="status" aria-live="polite" aria-atomic="true"></div>

    <!-- Three.js (module) -->
    <script type="module" src="{{ asset('assets/js/app.js') }}?v={{ config('app.version') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
        const form = document.getElementById("contactForm");

        if (form) {
            form.addEventListener("submit", function (e) {
            e.preventDefault();

            // Reset form
            form.reset();

            // Toast message
            showToast("Votre message a bien été reçu. Je vous répondrai rapidement.");
            });
        }

        function showToast(message) {
            const toast = document.getElementById("toast");
            toast.textContent = message;
            toast.classList.add("show");

            setTimeout(() => {
            toast.classList.remove("show");
            }, 4000);
        }
        });

        // Smooth scroll without hash in URL
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener("click", function (e) {
                e.preventDefault();

                const target = document.querySelector(this.getAttribute("href"));

                if (target) {
                target.scrollIntoView({
                    behavior: "smooth"
                });

                // Remove hash from URL
                history.replaceState(null, null, " ");
                }
            });
        });

    </script>
</body>

</html>