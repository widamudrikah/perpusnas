<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'E-Library — Perpustakaan Digital SMK')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=DM+Sans:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
   
    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/css/landing.css', 'resources/js/app.js'])
</head>

<body>
    
    <nav class="navbar" id="navbar">
        <div class="nav-inner">
            <a href="" class="nav-logo">
                <div class="nav-logo-icon">
                    <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2.2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                </div>
                <span class="nav-logo-text">E-Library</span>
            </a>
            <div class="nav-links">
                <a href="#books" class="nav-link">Koleksi Buku</a>
                <a href="#categories" class="nav-link">Kategori</a>
                <a href="#how" class="nav-link">Cara Pinjam</a>
                <a href="#about" class="nav-link">Tentang</a>
                <a href="#address" class="nav-link">Lokasi</a>
            </div>
            <a href="{{ route('login') }}" class="nav-cta">Login Admin</a>
        </div>
    </nav>

 
    @yield('content')

           
    <script>
        const marqueeItems = ['📚 Pemrograman', '🎨 Desain', '🌐 Jaringan', '📐 Matematika', '💬 Bahasa Inggris',
            '🔐 Keamanan', '🗄️ Basis Data', '⚙️ Algoritma', '📱 Mobile Dev', '🖥️ Web Dev'
        ];

        const track = document.getElementById('marqueeTrack');
        if (track) {
            [...marqueeItems, ...marqueeItems].forEach(item => {
                const el = document.createElement('span');
                el.className = 'marquee-pill';
                el.textContent = item;
                track.appendChild(el);
            });
        }

        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(e => {
                if (e.isIntersecting) {
                    e.target.classList.add('visible');
                }
            });
        }, {
            threshold: 0.1
        });

        document.querySelectorAll('.reveal, .reveal-left, .reveal-right').forEach(el => observer.observe(el));
    </script>
</body>

</html>
