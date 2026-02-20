<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

    <meta charset="utf-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="icon" type="image/ico" href="{{ asset('assets/images/favicon.ico') }}?v={{ config('app.version') }}">

    <title>{{ __('portfolio.meta.title') }}</title>

    <meta name="description" content="{{ __('portfolio.meta.description') }}">

    <meta name="keywords" content="{{ __('portfolio.meta.keywords') }}">

    <meta name="author" content="{{ __('portfolio.meta.author') }}">

    <meta name="robots" content="{{ __('portfolio.meta.robots') }}">

    <meta property="og:title" content="{{ __('portfolio.meta.og_title') }}">

    <meta property="og:description" content="{{ __('portfolio.meta.og_description') }}">

    <meta property="og:image" content="{{ __('portfolio.meta.og_image') }}">

    <meta property="og:url" content="{{ __('portfolio.meta.og_url') }}">

    <meta property="og:type" content="{{ __('portfolio.meta.og_type') }}">

    <meta name="twitter:card" content="{{ __('portfolio.meta.twitter_card') }}">

    <meta name="twitter:title" content="{{ __('portfolio.meta.twitter_title') }}">

    <meta name="twitter:description" content="{{ __('portfolio.meta.twitter_description') }}">

    <meta name="twitter:image" content="{{ __('portfolio.meta.twitter_image') }}">

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
            <a href="#about">{{ __('portfolio.nav.about') }}</a>
            <a href="#skills">{{ __('portfolio.nav.skills') }}</a>
            <a href="#experience">{{ __('portfolio.nav.experience') }}</a>
            <a href="#education">{{ __('portfolio.nav.education') }}</a>
            <a href="#certs">{{ __('portfolio.nav.certs') }}</a>
            <a href="#contact" class="nav-cta">{{ __('portfolio.nav.contact') }}</a>
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
            <a href="#about">{{ __('portfolio.nav.about') }}</a>
            <a href="#skills">{{ __('portfolio.nav.skills') }}</a>
            <a href="#experience">{{ __('portfolio.nav.experience') }}</a>
            <a href="#education">{{ __('portfolio.nav.education') }}</a>
            <a href="#certs">{{ __('portfolio.nav.certs') }}</a>
            <a href="#contact" class="nav-cta">{{ __('portfolio.nav.contact') }}</a>
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
                    {{ __('portfolio.hero.available') }}
                </p>

                <h1 class="sr-only">
                    {{ __('portfolio.hero.h1') }}
                </h1>

                <h2 class="hero-title">
                    {!! __('portfolio.hero.title', [
                    'performantes' => '<span class="gradient">'.__('portfolio.hero.performant').'</span>',
                    'robustes' => '<span class="gradient">'.__('portfolio.hero.robust').'</span>',
                    ]) !!}
                </h2>

                <p class="lead">
                    {!! __('portfolio.hero.lead', [
                    'php' => '<b>PHP/Laravel</b>',
                    'js' => '<b>JavaScript</b>',
                    'angular' => '<b>Angular</b>',
                    'devops' => '<b>DevOps</b>',
                    ]) !!}
                </p>

                <div class="hero-actions">
                    <a class="btn primary" href="#contact">{{ __('portfolio.hero.cta_contact') }}</a>
                    <a class="btn" href="#experience">{{ __('portfolio.hero.cta_path') }}</a>
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
                            <img src="{{ asset('assets/images/image.png') }}"
                                 alt="{{ __('portfolio.profile.photo_alt') }}"
                                 loading="lazy" />
                        </div>
                        
                        <div>
                            <h2>Saad Benjdia</h2>
                            <p>{{ __('portfolio.profile.title') }}</p>
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
                <h3>{{ __('portfolio.about.title') }}</h3>
                <p>{!! __('portfolio.about.text') !!}</p>
            </div>

            <div class="grid-2">
                <div class="panel reveal">
                    <h4>{{ __('portfolio.about.what_i_bring') }}</h4>
                    <ul class="list">
                        <li>{!! __('portfolio.about.bring_1') !!}</li>
                        <li>{!! __('portfolio.about.bring_2') !!}</li>
                        <li>{!! __('portfolio.about.bring_3') !!}</li>
                        <li>{!! __('portfolio.about.bring_4') !!}</li>
                    </ul>
                </div>

                <div class="panel reveal">
                    <h4>{{ __('portfolio.about.soft_skills') }}</h4>

                    <div class="skills-bubbles">
                        <span class="bubble">{{ __('portfolio.about.soft.skill_team') }}</span>
                        <span class="bubble">{{ __('portfolio.about.soft.rigorous') }}</span>
                        <span class="bubble">{{ __('portfolio.about.soft.autonomous') }}</span>
                        <span class="bubble">{{ __('portfolio.about.soft.dynamic') }}</span>
                    </div>

                    <div class="callout">
                        <p class="callout-title">{{ __('portfolio.about.goal_title') }}</p>
                        <p>{{ __('portfolio.about.goal_text') }}</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- SKILLS --}}
        <section id="skills" class="section">
            <div class="section-head reveal">
                <h3>{{ __('portfolio.skills.title') }}</h3>
            </div>

            <div class="cards">
                <article class="skill-card reveal">
                    <h4>{{ __('portfolio.skills.backend.title') }}</h4>
                    <div class="tags">
                        <span>PHP</span><span>Laravel</span><span>Symfony</span><span>REST
                            API</span><span>Java</span><span>Spring</span>
                        <span>Python</span>
                    </div>
                    <p class="muted">{{ __('portfolio.skills.backend.desc') }}</p>
                </article>

                <article class="skill-card reveal">
                    <h4>{{ __('portfolio.skills.frontend.title') }}</h4>
                    <div class="tags">
                        <span>JavaScript</span><span>Angular</span><span>Next.js</span><span>Bootstrap</span>
                        <span>Tailwind CSS</span>
                        <span>Vue.js</span>
                    </div>
                    <p class="muted">{{ __('portfolio.skills.frontend.desc') }}</p>
                </article>

                <article class="skill-card reveal">
                    <h4>{{ __('portfolio.skills.data.title') }}</h4>
                    <div class="tags">
                        <span>SQL</span><span>SQL Server</span><span>MySQL</span><span>Oracle 19c</span>
                    </div>
                    <p class="muted">{{ __('portfolio.skills.data.desc') }}</p>
                </article>

                <article class="skill-card reveal">
                    <h4>{{ __('portfolio.skills.devops.title') }}</h4>
                    <div class="tags">
                        <span>Linux</span><span>GitHub</span><span>CI/CD</span><span>PHPStan</span>
                    </div>
                    <p class="muted">{{ __('portfolio.skills.devops.desc') }}</p>
                </article>
            </div>
        </section>

        {{-- EXPERIENCE --}}
        <section id="experience" class="section">
            <div class="section-head reveal">
                <h3>{{ __('portfolio.experience.title') }}</h3>
            </div>

            <div class="timeline">
                <div class="time-item reveal">
                    <div class="time-dot"></div>
                    <div class="time-content">
                        <div class="time-top">
                            <h4>{{ __('portfolio.experience.esolution.company') }}</h4>
                            <span class="pill">{{ __('portfolio.experience.esolution.period') }}</span>
                        </div>

                        <p class="muted">
                            <b>{{ __('portfolio.experience.esolution.role') }}</b>
                        </p>

                        <ul class="list compact">
                            <li>{{ __('portfolio.experience.esolution.points.p1') }}</li>
                            <li>{!! __('portfolio.experience.esolution.points.p2') !!}</li>
                            <li>{{ __('portfolio.experience.esolution.points.p3') }}</li>
                            <li>{{ __('portfolio.experience.esolution.points.p4') }}</li>
                            <li>{{ __('portfolio.experience.esolution.points.p5') }}</li>
                        </ul>

                        <div class="tags small">
                            <span>PHP 5/7/8</span><span>Laravel</span><span>Angular</span><span>MySQL</span><span>SQL
                                Server</span>
                            <span>Linux</span><span>GitHub</span><span>PHPStan</span>
                        </div>
                    </div>
                </div>

                <div class="time-item reveal">
                    <div class="time-dot"></div>
                    <div class="time-content">
                        <div class="time-top">
                            <h4>{{ __('portfolio.experience.rbc.company') }}</h4>
                            <span class="pill">{{ __('portfolio.experience.rbc.period') }}</span>
                        </div>

                        <p class="muted"><b>{{ __('portfolio.experience.rbc.role') }}</b></p>

                        <ul class="list compact">
                            <li>{{ __('portfolio.experience.rbc.points.p1') }}</li>
                            <li>{{ __('portfolio.experience.rbc.points.p2') }}</li>
                            <li>{{ __('portfolio.experience.rbc.points.p3') }}</li>
                        </ul>

                        <div class="tags small">
                            <span>Laravel</span><span>Bootstrap</span><span>REST API</span><span>SQL
                                Server</span><span>GitHub</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- EDUCATION --}}
        <section id="education" class="section">
            <div class="section-head reveal">
                <h3>{{ __('portfolio.education.title') }}</h3>
                <p>{{ __('portfolio.education.subtitle') }}</p>
            </div>

            <div class="edu-grid">
                <div class="edu-card reveal">
                    <h4>{{ __('portfolio.education.master.title') }}</h4>
                    <p class="muted">{{ __('portfolio.education.master.school') }}</p>
                    <span class="pill">{{ __('portfolio.education.master.period') }}</span>
                    <p class="tiny">{{ __('portfolio.education.master.mention') }}</p>
                </div>

                <div class="edu-card reveal">
                    <h4>{{ __('portfolio.education.licence.title') }}</h4>
                    <p class="muted">{{ __('portfolio.education.licence.school') }}</p>
                    <span class="pill">{{ __('portfolio.education.licence.period') }}</span>
                    <p class="tiny">{{ __('portfolio.education.licence.mention') }}</p>
                </div>

                <div class="edu-card reveal">
                    <h4>{{ __('portfolio.education.bts.title') }}</h4>
                    <p class="muted">{{ __('portfolio.education.bts.school') }}</p>
                    <span class="pill">{{ __('portfolio.education.bts.period') }}</span>
                    <p class="tiny">{{ __('portfolio.education.bts.mention') }}</p>
                </div>
            </div>
        </section>

        {{-- CERTS --}}
        <section id="certs" class="section">
            <div class="section-head reveal">
                <h3>{{ __('portfolio.certs.title') }}</h3>
                <p>{{ __('portfolio.certs.subtitle') }}</p>
            </div>

            <div class="cards">
                <article class="cert-card reveal">
                    <div class="cert-icon" aria-hidden="true">◎</div>
                    <div>
                        <h4>{{ __('portfolio.certs.items.scrum.title') }}</h4>
                        <p class="muted">{{ __('portfolio.certs.items.scrum.desc') }}</p>
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
                <h3>{{ __('portfolio.contact.title') }}</h3>
                <p>{{ __('portfolio.contact.subtitle') }}</p>
            </div>

            <div class="grid-2">
                <div class="panel reveal">
                    <h4>{{ __('portfolio.contact.details') }}</h4>

                    <div class="contact-list">
                        <a class="contact-item" href="mailto:benjdiasaad97@gmail.com">
                            <span class="k">{{ __('portfolio.contact.email') }}</span>
                            <span class="v">benjdiasaad97@gmail.com</span>
                        </a>

                        <a class="contact-item" href="tel:+212620669912">
                            <span class="k">{{ __('portfolio.contact.phone') }}</span>
                            <span class="v">+212 620 669 912</span>
                        </a>

                        <a class="contact-item" target="_blank" rel="noopener"
                            href="https://www.linkedin.com/in/saadbenjdia">
                            <span class="k">LinkedIn</span>
                            <span class="v">/in/saadbenjdia</span>
                        </a>

                        <a class="contact-item" target="_blank" rel="noopener" href="https://github.com/benjdiasaad">
                            <span class="k">GitHub</span>
                            <span class="v">/benjdiasaad</span>
                        </a>

                        <div class="contact-item">
                            <span class="k">{{ __('portfolio.contact.address') }}</span>
                            <span class="v">{{ __('portfolio.contact.city') }}</span>
                        </div>
                    </div>
                </div>

                <form class="panel reveal" id="contactForm" method="POST" action="{{ route('CONTACT') }}">
                    @csrf
                    <h4>{{ __('portfolio.contact.send_title') }}</h4>

                    <label>
                        <span>{{ __('portfolio.contact.name') }}</span>
                        <input name="name" type="text" placeholder="{{ __('portfolio.contact.name_ph') }}" required />
                    </label>

                    <label>
                        <span>{{ __('portfolio.contact.email') }}</span>
                        <input name="email" type="email" placeholder="{{ __('portfolio.contact.email_ph') }}"
                            required />
                    </label>

                    <label>
                        <span>{{ __('portfolio.contact.message') }}</span>
                        <textarea name="message" rows="5" placeholder="{{ __('portfolio.contact.message_ph') }}"
                            required></textarea>
                    </label>

                    <button class="btn primary" type="submit" style="margin-top:10px;">
                        {{ __('portfolio.contact.submit') }}
                    </button>
                </form>
            </div>
        </section>

        <footer class="footer">
            <p>© <span id="year"></span> Saad Benjdia</p>
        </footer>
    </main>

    <!-- Toast -->
    <div id="toast" class="toast" data-msg="{{ __('portfolio.contact.toast') }}" role="status" aria-live="polite"
        aria-atomic="true"></div>

    <!-- Three.js (module) -->
    <script type="module" src="{{ asset('assets/js/app.js') }}?v={{ config('app.version') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const form = document.getElementById("contactForm");
            const toast = document.getElementById("toast");

            const defaultMsg = toast?.dataset?.msg || "Message received.";

            function showToast(message) {
                if (!toast) return;
                toast.textContent = message;
                toast.classList.add("show");
                setTimeout(() => toast.classList.remove("show"), 4000);
            }

            if (form) {
                form.addEventListener("submit", async function (e) {
                    e.preventDefault();

                    const action = form.getAttribute("action");
                    const formData = new FormData(form);

                    try {
                        const res = await fetch(action, {
                            method: "POST",
                            headers: {
                                "X-Requested-With": "XMLHttpRequest",
                                "Accept": "application/json",
                            },
                            body: formData
                        });

                        const data = await res.json();

                        if (!res.ok) {
                            // Laravel validation errors
                            const msg = data?.message || "Validation error.";
                            showToast(msg);
                            return;
                        }

                        form.reset();
                        showToast(data?.message || defaultMsg);
                    } catch (err) {
                        showToast("Server error. Please try again.");
                    }
                });
            }
        
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener("click", function (e) {
                    e.preventDefault();
        
                    const target = document.querySelector(this.getAttribute("href"));
                    if (!target) return;
        
                    target.scrollIntoView({ behavior: "smooth" });
        
                    // Remove hash from URL (clean)
                    history.replaceState(null, "", window.location.pathname + window.location.search);
                });
            });
        });
    </script>
</body>

</html>