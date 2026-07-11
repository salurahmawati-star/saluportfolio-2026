<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salu Portofolio - Creative Developer</title>
    <link rel="stylesheet"
    href="{{ asset('assets/template/css/tooplate-titan-style.css') }}">
<!--

Tooplate 2147 Titan Folio

https://www.tooplate.com/view/2147-titan-folio

Free HTML CSS Template

-->
</head>
<body>
    @php
    $profile = \App\Models\Profile::first();
    $projects = \App\Models\Project::latest()->get();
    $skills = \App\Models\Skill::all();
@endphp
    <nav id="navbar">
        <div class="nav-container">
            <a href="#home" class="logo">
                <div class="logo-icon">⚡</div>
                <div class="logo-text">Salu Portofolio</div>
            </a>
            <ul class="nav-links">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="mobile-menu-btn" id="mobileMenuBtn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <div class="mobile-nav" id="mobileNav">
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#timeline">Journey</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>

    <section id="home" class="hero">
        <div class="hero-bg-animation">
            <div class="floating-shape shape-1"></div>
            <div class="floating-shape shape-2"></div>
            <div class="floating-shape shape-3"></div>
            <div class="geo-shape geo-1"></div>
            <div class="geo-shape geo-2"></div>
            <div class="particles">
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
                <span class="particle"></span>
            </div>
        </div>
        <div class="hero-content">
            <h1>{{ $profile?->name }}</h1>
            <p class="subtitle">{{ $profile?->title }}</p>
            <p>{{ $profile?->tagline }}</p>
            <div class="cta-buttons">
                <a href="#portfolio" class="cta-primary">View My Projects</a>
                <a href="#contact" class="cta-secondary">Let's Talk</a>
            </div>
        </div>
    </section>

    <section id="about" class="fade-in">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                    {{ $settings['about_title'] ?? 'About Me' }}
                </h2>
            </div>

            <div class="about-content">
                <div class="about-intro">

                    <div class="about-image">
                        @if($profile?->photo)
                            <img
                                src="{{ asset('storage/' . $profile->photo) }}"
                                alt="{{ $profile->name }}"
                                style="
                                    width: 100%;
                                    height: 100%;
                                    object-fit: cover;
                                    border-radius: 50%;
                                "
                            >
                        @endif
                    </div>

        <div class="about-text">
            <p>{{ $profile?->bio }}</p>
        </div>

    </div>
                
                <div class="about-cards">
                    <div class="about-card">
                        <h4>🎯 Mission</h4>
                        <p>{{ $profile?->mission }}</p>
                    </div>
                    
                    <div class="about-card">
                        <h4>💡 Vision</h4>
                        <p>{{ $profile?->vision }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="fade-in">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                {{ $settings['skills_title'] ?? 'Skills & Expertise' }}
            </h2>
                <p class="section-subtitle">
                    {{ $settings['skills_subtitle'] ?? '' }}
                </p>
            </div>

            <div class="skills-container">
                <div class="skills-wrapper">
                    <div class="skills-visual">
                        <div class="skills-circle">
                            <div class="skill-node">
                                <div class="skill-icon">🎨</div>
                                <div class="skill-name">Laravel</div>
                            </div>
                            <div class="skill-node">
                                <div class="skill-icon">⚛️</div>
                                <div class="skill-name">Livewire</div>
                            </div>
                            <div class="skill-node">
                                <div class="skill-icon">📱</div>
                                <div class="skill-name">Filament v3</div>
                            </div>
                            <div class="skill-node">
                                <div class="skill-icon">⚙️</div>
                                <div class="skill-name">MySQL</div>
                            </div>
                            <div class="skill-node">
                                <div class="skill-icon">🚀</div>
                                <div class="skill-name">Docker</div>
                            </div>
                            <div class="skill-node">
                                <div class="skill-icon">💡</div>
                                <div class="skill-name">Git</div>
                            </div>
                            <div class="skills-center">⚡</div>
                        </div>
                    </div>
                    
                    <div class="skills-list">

                @foreach($skills as $skill)

                    <div class="skill-item">

                        <h4>{{ $skill->title }}</h4>

                        <p>{{ $skill->description }}</p>

                        <div class="skill-progress">
                            <div
                                class="skill-progress-bar"
                                style="width: {{ $skill->percentage }}%"
                            ></div>
                        </div>

                    </div>

                @endforeach

            </div>
                </div>
            </div>
        </div>
    </section>


    <section id="portfolio" class="fade-in">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                {{ $settings['portfolio_title'] ?? 'My Projects' }}
            </h2>
                <p class="section-subtitle">
                {{ $settings['portfolio_subtitle'] ?? '' }}
            </p>

            <div class="portfolio-grid">

    @foreach($projects as $project)

<a
    href="{{ route('project.show', $project) }}"
    class="portfolio-card"
    style="text-decoration: none;"
>
            <div 
                class="portfolio-image"
                style="
                    background-image: url('{{ asset('storage/' . $project->diagram) }}');
                    background-size: cover;
                    background-position: center;
                    height: 250px;
                "
            ></div>

            <div class="portfolio-content">
                <h3 class="portfolio-title">
                    {{ $project->title }}
                </h3>

                <p class="portfolio-description">
                    {{ $project->short_description }}
                </p>
                <div class="project-progress">
                    <p style="color:#60a5fa;">
                        <strong>Status:</strong>
                        {{ $project->progress == 100 ? 'Completed ✅' : 'On Going 🚀' }}
                    </p>

                    <p style="color:white;">
                        Progress Project {{ $project->progress }}%
                    </p>

                    <div class="progress-bar">
                        <div
                            class="progress-fill"
                            style="width: {{ $project->progress }}%;"
                        ></div>
                    </div>

                </div>
            </div>

        </a>

    @endforeach

</div>  

    <section id="contact" class="fade-in">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">
                {{ $settings['contact_title'] ?? "Let's Create Together" }}
            </h2>
                <p class="section-subtitle">
                {{ $settings['contact_subtitle'] ?? '' }}
            </p>
            </div>

                <div class="contact-form-container">

    @if(session('success'))
        <div style="margin-bottom:20px; color:lime;">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.store') }}" method="POST" class="contact-form">
        @csrf

        <div class="form-group">
            <input 
                type="text"
                name="name"
                class="form-input"
                placeholder="Your Name"
                required
            >
        </div>

        <div class="form-group">
            <input 
                type="email"
                name="email"
                class="form-input"
                placeholder="Your Email"
                required
            >
        </div>

        <div class="form-group">
            <input 
                type="text"
                name="subject"
                class="form-input"
                placeholder="Project Type"
                required
            >
        </div>

        <div class="form-group">
            <textarea 
                name="message"
                class="form-textarea"
                rows="5"
                placeholder="Tell me about your project..."
                required
            ></textarea>
        </div>

        <button type="submit" class="submit-btn">
            Send Message
        </button>
    </form>
</div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-bottom">
            <p class="footer-copyright">
                © 2026 salu Folio. All rights reserved.
            </p>

                <a href="https://github.com/salurahmawati-star"
                target="_blank"
                rel="noopener noreferrer"
                class="footer-credit-link">
                    <span class="footer-credit-icon">🐙</span>
                    <span>GitHub-@salurahmawati-star</span>
                </a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/template/js/tooplate-titan-script.js') }}"></script>
</body>
</html>