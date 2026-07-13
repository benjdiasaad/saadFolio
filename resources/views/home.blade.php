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
            <a href="#projects">{{ __('portfolio.nav.projects') }}</a>
            <a href="#contact">{{ __('portfolio.nav.contact') }}</a>
        </nav>

        @php($locale = app()->getLocale())

        <div class="lang-switch" role="navigation" aria-label="Language switch">
            <a href="{{ route('lang.switch', 'fr') }}"
            class="lang-btn {{ $locale === 'fr' ? 'active' : '' }}"
            aria-current="{{ $locale === 'fr' ? 'page' : 'false' }}">
                FR
            </a>

            <a href="{{ route('lang.switch', 'en') }}"
            class="lang-btn {{ $locale === 'en' ? 'active' : '' }}"
            aria-current="{{ $locale === 'en' ? 'page' : 'false' }}">
                EN
            </a>
        </div>

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
                            <li>{{ __('portfolio.experience.esolution.points.p6') }}</li>
                            <li>{{ __('portfolio.experience.esolution.points.p7') }}</li>
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

                <article class="cert-card reveal">
                    <div class="cert-icon">◎</div>
                    <div>
                        <h4>{{ __('portfolio.certs.items.semrush.title') }}</h4>
                        <p class="muted">{{ __('portfolio.certs.items.semrush.desc') }}</p>
                    </div>
                </article>

            </div>
        </section>

        <!-- PROJECTS (placeholder) -->
        <section id="projects" class="section">
            <div class="section-head reveal">
                <h3>{{ __('portfolio.projects.title') }}</h3>
                <p>{{ __('portfolio.projects.subtitle') }}</p>
            </div>

            <div class="project-grid">
                <article class="project-card reveal">
                <div class="project-top">
                    <h4>Laravel DB Monitor</h4>
                    <span class="pill">Laravel • Performance • Monitoring</span>
                </div>

                <p class="muted">
                    {{ __('portfolio.projects.dbmonitor.desc') }}
                </p>

                <ul class="list compact">
                    <li>{{ __('portfolio.projects.dbmonitor.f1') }}</li>
                    <li>{{ __('portfolio.projects.dbmonitor.f2') }}</li>
                    <li>{{ __('portfolio.projects.dbmonitor.f3') }}</li>
                    <li>{{ __('portfolio.projects.dbmonitor.f4') }}</li>
                </ul>

                <div class="project-actions">
                    <a class="btn small" target="_blank" rel="noopener"
                    href="https://github.com/benjdiasaad/laravel-db-monitor">
                    GitHub <span aria-hidden="true">↗</span>
                    </a>

                    <button class="btn small ghost" data-toast="composer require benjdiasaad/laravel-db-monitor">
                    Install
                    </button>
                </div>
                </article>

                <article class="project-card reveal">
                <div class="project-top">
                    <h4>Coffee Shop E-Commerce</h4>
                    <span class="pill">Laravel • Angular • MySQL</span>
                    <a class="stars" target="_blank" rel="noopener"
                    href="https://github.com/benjdiasaad/Full-stack_Coffee-shop/stargazers"
                    title="Stars on GitHub" aria-label="24 stars on GitHub">
                    <span class="star" aria-hidden="true">★</span> 24
                    </a>
                </div>

                <p class="muted">
                    {{ __('portfolio.projects.coffeeshop.desc') }}
                </p>

                <ul class="list compact">
                    <li>{{ __('portfolio.projects.coffeeshop.f1') }}</li>
                    <li>{{ __('portfolio.projects.coffeeshop.f2') }}</li>
                    <li>{{ __('portfolio.projects.coffeeshop.f3') }}</li>
                    <li>{{ __('portfolio.projects.coffeeshop.f4') }}</li>
                </ul>

                <div class="project-actions">
                    <a class="btn small" target="_blank" rel="noopener"
                    href="https://github.com/benjdiasaad/Full-stack_Coffee-shop">
                    GitHub <span aria-hidden="true">↗</span>
                    </a>

                    <button type="button" class="btn small ghost" data-preview
                    data-title="Coffee Shop E-Commerce"
                    data-images="{{ asset('images/projects/coffeeshop-1.svg') }}|{{ asset('images/projects/coffeeshop-2.svg') }}">
                    {{ __('portfolio.projects.preview') }} <span aria-hidden="true">◐</span>
                    </button>
                </div>
                </article>

                <article class="project-card reveal">
                <div class="project-top">
                    <h4>Restaurant Management System</h4>
                    <span class="pill">Laravel • Jetstream • Bootstrap</span>
                    <a class="stars" target="_blank" rel="noopener"
                    href="https://github.com/benjdiasaad/Restaurant_management_system/stargazers"
                    title="Stars on GitHub" aria-label="16 stars on GitHub">
                    <span class="star" aria-hidden="true">★</span> 16
                    </a>
                </div>

                <p class="muted">
                    {{ __('portfolio.projects.restaurant.desc') }}
                </p>

                <ul class="list compact">
                    <li>{{ __('portfolio.projects.restaurant.f1') }}</li>
                    <li>{{ __('portfolio.projects.restaurant.f2') }}</li>
                    <li>{{ __('portfolio.projects.restaurant.f3') }}</li>
                    <li>{{ __('portfolio.projects.restaurant.f4') }}</li>
                </ul>

                <div class="project-actions">
                    <a class="btn small" target="_blank" rel="noopener"
                    href="https://github.com/benjdiasaad/Restaurant_management_system">
                    GitHub <span aria-hidden="true">↗</span>
                    </a>

                    <button type="button" class="btn small ghost" data-preview
                    data-title="Restaurant Management System"
                    data-images="{{ asset('images/projects/restaurant-1.svg') }}|{{ asset('images/projects/restaurant-2.svg') }}">
                    {{ __('portfolio.projects.preview') }} <span aria-hidden="true">◐</span>
                    </button>
                </div>
                </article>
            </div>
            </section>

        <!-- CONTACT -->
        <section id="contact" class="section">
            <div class="section-head reveal">
                <h3>{{ __('portfolio.contact.title') }}</h3>
                <p>{{ __('portfolio.contact.subtitle') }}</p>
            </div>

            <div class="grid-2">
                <div class="panel reveal">
                    <div class="panel-head">
                        <h4>{{ __('portfolio.contact.details') }}</h4>
                        <span class="status-chip"><span class="status-dot"></span>{{ __('portfolio.hero.available') }}</span>
                    </div>

                    <div class="contact-list">
                        <a class="contact-item" href="mailto:benjdiasaad97@gmail.com">
                            <span class="ci-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                            </span>
                            <span class="ci-text">
                                <span class="k">{{ __('portfolio.contact.email') }}</span>
                                <span class="v">benjdiasaad97@gmail.com</span>
                            </span>
                            <span class="ci-arrow" aria-hidden="true">↗</span>
                        </a>

                        <a class="contact-item" href="tel:+212620669912">
                            <span class="ci-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg>
                            </span>
                            <span class="ci-text">
                                <span class="k">{{ __('portfolio.contact.phone') }}</span>
                                <span class="v">+212 620 669 912</span>
                            </span>
                            <span class="ci-arrow" aria-hidden="true">↗</span>
                        </a>

                        <a class="contact-item" target="_blank" rel="noopener"
                            href="https://www.linkedin.com/in/saadbenjdia">
                            <span class="ci-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5A2.5 2.5 0 1 1 5 8.5a2.5 2.5 0 0 1-.02-5ZM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-1 1.83-2.05 3.77-2.05 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.4c0-1.3-.02-2.96-1.8-2.96-1.8 0-2.08 1.4-2.08 2.86V21H9z"/></svg>
                            </span>
                            <span class="ci-text">
                                <span class="k">LinkedIn</span>
                                <span class="v">/in/saadbenjdia</span>
                            </span>
                            <span class="ci-arrow" aria-hidden="true">↗</span>
                        </a>

                        <a class="contact-item" target="_blank" rel="noopener" href="https://github.com/benjdiasaad">
                            <span class="ci-icon">
                                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02a9.5 9.5 0 0 1 5 0c1.91-1.29 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10 10 0 0 0 12 2Z"/></svg>
                            </span>
                            <span class="ci-text">
                                <span class="k">GitHub</span>
                                <span class="v">/benjdiasaad</span>
                            </span>
                            <span class="ci-arrow" aria-hidden="true">↗</span>
                        </a>

                        <div class="contact-item static">
                            <span class="ci-icon">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M12 21s-6-5.3-6-10a6 6 0 0 1 12 0c0 4.7-6 10-6 10Z"/><circle cx="12" cy="11" r="2.2"/></svg>
                            </span>
                            <span class="ci-text">
                                <span class="k">{{ __('portfolio.contact.address') }}</span>
                                <span class="v">{{ __('portfolio.contact.city') }}</span>
                            </span>
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
            <div class="footer-inner reveal">
                <div class="footer-brand">
                    <span class="footer-logo">SB</span>
                    <div class="footer-brand-text">
                        <p class="footer-name">Saad Benjdia</p>
                        <p class="footer-tag">{{ __('portfolio.footer.tagline') }}</p>
                    </div>
                </div>

                <nav class="footer-socials" aria-label="Social links">
                    <a href="https://github.com/benjdiasaad" target="_blank" rel="noopener" aria-label="GitHub">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M12 2a10 10 0 0 0-3.16 19.49c.5.09.68-.22.68-.48v-1.7c-2.78.6-3.37-1.34-3.37-1.34-.45-1.16-1.1-1.47-1.1-1.47-.9-.62.07-.6.07-.6 1 .07 1.53 1.03 1.53 1.03.9 1.52 2.34 1.08 2.91.83.09-.65.35-1.09.63-1.34-2.22-.25-4.55-1.11-4.55-4.94 0-1.09.39-1.98 1.03-2.68-.1-.25-.45-1.27.1-2.65 0 0 .84-.27 2.75 1.02a9.5 9.5 0 0 1 5 0c1.91-1.29 2.75-1.02 2.75-1.02.55 1.38.2 2.4.1 2.65.64.7 1.03 1.59 1.03 2.68 0 3.84-2.34 4.68-4.57 4.93.36.31.68.92.68 1.85v2.74c0 .27.18.58.69.48A10 10 0 0 0 12 2Z"/></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/saadbenjdia" target="_blank" rel="noopener" aria-label="LinkedIn">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M4.98 3.5A2.5 2.5 0 1 1 5 8.5a2.5 2.5 0 0 1-.02-5ZM3 9h4v12H3zM9 9h3.8v1.7h.05c.53-1 1.83-2.05 3.77-2.05 4.03 0 4.78 2.65 4.78 6.1V21h-4v-5.4c0-1.3-.02-2.96-1.8-2.96-1.8 0-2.08 1.4-2.08 2.86V21H9z"/></svg>
                    </a>
                    <a href="mailto:benjdiasaad97@gmail.com" aria-label="Email">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                    </a>
                    <a href="tel:+212620669912" aria-label="Phone">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"><path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2Z"/></svg>
                    </a>
                </nav>
            </div>

            <div class="footer-bottom">
                <p>© <span id="year"></span> Saad Benjdia · {{ __('portfolio.footer.rights') }}</p>
                <a class="footer-top" href="#home">{{ __('portfolio.footer.top') }} <span aria-hidden="true">↑</span></a>
            </div>
        </footer>
    </main>

    <!-- Toast -->
    <div id="toast" class="toast" data-msg="{{ __('portfolio.contact.toast') }}" role="status" aria-live="polite"
        aria-atomic="true"></div>

    <!-- Project preview lightbox -->
    <div id="lightbox" class="lightbox" role="dialog" aria-modal="true" aria-label="Project preview" hidden>
        <div class="lightbox-backdrop" data-lb-close></div>
        <div class="lightbox-panel">
            <div class="lightbox-head">
                <span id="lightboxTitle" class="lightbox-title"></span>
                <button type="button" class="lightbox-close" data-lb-close aria-label="Close preview">✕</button>
            </div>
            <div class="lightbox-stage">
                <button type="button" class="lightbox-nav prev" data-lb-prev aria-label="Previous image">‹</button>
                <img id="lightboxImg" class="lightbox-img" alt="Project preview" />
                <button type="button" class="lightbox-nav next" data-lb-next aria-label="Next image">›</button>
            </div>
            <div id="lightboxDots" class="lightbox-dots"></div>
        </div>
    </div>

    <!-- Three.js (module) -->
    <script type="module" src="{{ asset('assets/js/app.js') }}?v={{ config('app.version') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function () {

        // NAV active link + CTA style depends on active section
        const navLinks = document.querySelectorAll(".nav a[href^='#']");
        const sections = [...document.querySelectorAll("section[id]")];

        // Which section should be styled as CTA when active?
        const ctaSectionId = "contact"; // you can change to "projects" etc.

        function setActiveById(id){
        navLinks.forEach(a => {
            const isActive = a.getAttribute("href") === "#" + id;
            a.classList.toggle("active", isActive);
            a.classList.toggle("is-cta", isActive && id === ctaSectionId);
        });
        }

        function getCurrentSectionId(){
        const y = window.scrollY + 140; // offset for your fixed topbar
        let current = sections[0]?.id;

        for (const s of sections){
            const top = s.offsetTop;
            const bottom = top + s.offsetHeight;
            if (y >= top && y < bottom) current = s.id;
        }
        return current;
        }

        // On scroll: update active
        window.addEventListener("scroll", () => {
        const id = getCurrentSectionId();
        if (id) setActiveById(id);
        });

        // On click: update active immediately (smooth scroll happens after)
        navLinks.forEach(a => {
        a.addEventListener("click", () => {
            const id = a.getAttribute("href").slice(1);
            setActiveById(id);
        });
        });

        // Init on load
        const first = getCurrentSectionId();
        if (first) setActiveById(first);
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