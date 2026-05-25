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
            <p>Membangun aplikasi web modern menggunakan Laravel, Livewire, dan Filament</p>
            <div class="cta-buttons">
                <a href="#portfolio" class="cta-primary">View My Projects</a>
                <a href="#contact" class="cta-secondary">Let's Talk</a>
            </div>
            
            <div class="stats-section">
                <div class="stat-card">
                    <span class="stat-number">10+</span>
                    <span class="stat-label">Projects</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">mahasiswa</span>
                    <span class="stat-label">Teknik informatika</span>
                </div>
                <div class="stat-card">
                    <span class="stat-number">4</span>
                    <span class="stat-label">Semester</span>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="fade-in">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">About Me</h2>
                <p class="section-subtitle">Fokus membangun aplikasi web modern yang cepat, terstruktur, dan mudah digunakan.</p>
            </div>

            <div class="about-content">
                <div class="about-intro">
                    <div class="about-image"></div>
                    <div class="about-text">
                        <h3>Tentang Saya</h3>
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
                <h2 class="section-title">Skills & Expertise</h2>
                <p class="section-subtitle">Combining technical excellence with creative vision</p>
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
                <h2 class="section-title">My Projects</h2>
                <p class="section-subtitle">Kumpulan proyek terpilih yang dibangun dengan teknologi modern dan praktik pengembangan yang baik</p>
            </div>

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
            </div>

        </a>

    @endforeach

</div>  

    <section id="contact" class="fade-in">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Let's Create Together</h2>
                <p class="section-subtitle">Ready to bring your ideas to life? Let's start a conversation</p>
            </div>

            <div class="contact-content">
                <div class="contact-info">
                    <h3>Hubungi Saya</h3>
                    <p>Saya selalu antusias untuk mengerjakan proyek baru dan berkolaborasi dengan orang-orang hebat. Jika Anda memiliki proyek tertentu atau sekadar ingin berdiskusi, saya dengan senang hati akan mendengarkannya.</p>
                    
                    <div class="contact-details">
                        <h4>💼 Available for:</h4>
                        <ul>
                            <li>Freelance kecil</li>
                            <li>Project kampus</li>
                            <li>Learning collaboration</li>
                        </ul>
                    </div>

                    <div class="contact-details">
                        <h4>📍 Based in:</h4>
                        <p>Indonesia (Remote Friendly)</p>
                    </div>
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
            <div class="footer-credits">
                <a href="https://www.tooplate.com" target="_blank" rel="noopener noreferrer" class="footer-credit-link tooplate">
                    <span class="footer-credit-icon">🎨</span>
                    <span>Design by Tooplate</span>
                </a>
                <div class="footer-divider"></div>
                <a href="https://fonts.google.com" target="_blank" rel="noopener noreferrer" class="footer-credit-link">
                    <span class="footer-credit-icon">📝</span>
                    <span>Google Fonts</span>
                </a>
                <a href="https://unsplash.com" target="_blank" rel="noopener noreferrer" class="footer-credit-link">
                    <span class="footer-credit-icon">📸</span>
                    <span>Unsplash</span>
                </a>
                <a href="https://cdnjs.com" target="_blank" rel="noopener noreferrer" class="footer-credit-link">
                    <span class="footer-credit-icon">⚡</span>
                    <span>CDNJS</span>
                </a>
            </div>
        </div>
    </footer>

    <script src="{{ asset('assets/template/js/tooplate-titan-script.js') }}"></script>
</body>
</html>