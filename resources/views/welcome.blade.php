@extends('front.base')
@section('content')
    <!-- ── HERO ── -->
    <section class="hero" id="hero">
        <div class="hero-grid"></div>
        <div class="hero-blob"
            style="width:500px;height:500px;background:#4285F4;top:-100px;right:-100px;animation-delay:0s;"></div>
        <div class="hero-blob"
            style="width:400px;height:400px;background:#0F9D58;bottom:-80px;left:-80px;animation-delay:3s;"></div>
        <div class="hero-blob" style="width:300px;height:300px;background:#F4B400;top:40%;left:30%;animation-delay:6s;">
        </div>

        <div class="hero-inner">
            <div class="hero-grid-layout">
                <div>
                    <div class="hero-badge">
                        <div class="hero-badge-dot"></div>
                        <span>Perpustakaan Digital</span>
                    </div>
                    <h1>Pinjam Buku<span class="grad">Tanpa Ribet ✨</span>
                    </h1>
                    <p>Akses ribuan koleksi buku pelajaran dan referensi. Pinjam langsung tanpa perlu daftar akun —
                        cukup pilih buku dan isi data diri kamu.</p>
                    <div class="btn-row">
                        <a href="#books" class="btn-primary">
                            <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            Lihat Koleksi
                        </a>
                        <a href="#how" class="btn-outline">Cara Meminjam →</a>
                    </div>
                    <div class="hero-stats">
                        <div>
                            <div class="stat-val">248+</div>
                            <div class="stat-lbl">Judul Buku</div>
                        </div>
                        <div>
                            <div class="stat-val">12</div>
                            <div class="stat-lbl">Kategori</div>
                        </div>
                        <div>
                            <div class="stat-val">86+</div>
                            <div class="stat-lbl">Peminjam Aktif</div>
                        </div>
                    </div>
                </div>

                <div class="hero-books" style="display:flex;">
                    <div class="book"
                        style="left:8%;top:5%;width:128px;height:176px;background:linear-gradient(135deg,#4285F4,#1a56db);animation:bookFloat1 4s ease-in-out infinite;">
                        <svg width="36" height="36" fill="none" viewBox="0 0 24 24" stroke="white"
                            stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        <span>Laravel 12</span>
                    </div>
                    <div class="book"
                        style="left:36%;top:12%;width:144px;height:192px;background:linear-gradient(135deg,#0F9D58,#065f38);animation:bookFloat2 5s ease-in-out infinite;">
                        <svg width="40" height="40" fill="none" viewBox="0 0 24 24" stroke="white"
                            stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Pemrograman Web</span>
                    </div>
                    <div class="book"
                        style="right:6%;top:18%;width:112px;height:156px;background:linear-gradient(135deg,#DB4437,#9b1c1c);animation:bookFloat3 6s ease-in-out infinite;">
                        <svg width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="white"
                            stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                        </svg>
                        <span>Desain UI/UX</span>
                    </div>
                    <div class="book"
                        style="left:18%;bottom:8%;width:120px;height:164px;background:linear-gradient(135deg,#F4B400,#92400e);animation:bookFloat1 7s ease-in-out infinite reverse;">
                        <svg width="32" height="32" fill="none" viewBox="0 0 24 24" stroke="white"
                            stroke-width="1.5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 11h.01M12 11h.01M15 11h.01M4 19h16a2 2 0 002-2V7a2 2 0 00-2-2H4a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <span>Basis Data</span>
                    </div>
                    <div class="sparkle" style="top:2%;right:2%;color:#FDE68A;font-size:28px;">✦</div>
                    <div class="sparkle" style="bottom:10%;left:2%;color:#93C5FD;font-size:20px;animation-delay:.5s;">
                        ✦</div>
                    <div class="sparkle" style="top:50%;right:2%;color:#6EE7B7;font-size:24px;animation-delay:1s;">✦
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-hint">
            <span>Scroll</span>
            <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
        </div>
    </section>



    <!-- ── MARQUEE ── -->
    <div class="marquee-wrap">
        <div class="marquee-track" id="marqueeTrack"></div>
    </div>

    <!-- ── BUKU TERBARU ── -->
    <section class="books-section" id="books">
        <div class="section-inner">
            <div class="section-head reveal">
                <div class="section-tag tag-blue">Koleksi Terbaru</div>
                <div class="section-title">Buku <span class="grad-text">Terbaru</span> 📖</div>
                <div class="section-sub">Temukan koleksi buku terbaru yang baru saja ditambahkan ke perpustakaan kami.
                </div>
            </div>

            <div class="books-grid">

                @forelse ($books as $book)
                    <a href="{{ route('book.detail.front', $book->id) }}" class="book-card">
                @if ($book->cover)
                    <div class="book-cover" style="background-image:url('{{ asset('storage/' . $book->cover) }}');background-size:cover;background-position:center;">
                @else
                    <div class="book-cover" style="background:linear-gradient(145deg,#4285F4dd,#4285F488);">
                                    <svg width="36" height="36" fill="none" viewBox="0 0 24 24"
                                        stroke="white" stroke-width="1.5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                        @endif
            </div>
            <div class="book-info">
                <div class="book-title">{{ $book->title }}</div>
                <div class="book-author">{{ $book->autor }}</div>
                <div class="book-meta">
                    <span class="book-cat" style="background:#4285F415;color:#4285F4">{{ $book->category->name }}</span>
                    <span class="book-year">{{ $book->year }}</span>
                </div>
            </div>
            </a>
        @empty
            <p class="no-books">Belum ada buku terbaru saat ini. Cek kembali nanti!</p>
            @endforelse

        </div>

        <div style="text-align:center;" class="reveal">
            <a href="#" class="btn-primary">Lihat Semua Buku →</a>
        </div>
        </div>
    </section>

    <!-- ── KATEGORI ── -->
    <section id="categories" style="background:white;">
        <div class="section-inner">
            <div class="section-head reveal">
                <div class="section-tag tag-green">Jelajahi</div>
                <div class="section-title">Kategori <span class="grad-text">Buku</span> 🏷️</div>
                <div class="section-sub">Temukan buku berdasarkan bidang yang kamu minati.</div>
            </div>
            <div class="cats-grid">

                <a href="#" class="cat-card reveal">
                    <div class="cat-name">Fiksi</div>
                </a>

            </div>
        </div>
    </section>

    <!-- ── CARA MEMINJAM ── -->
    <section class="how-section" id="how">
        <div class="section-inner">
            <div class="section-head reveal">
                <div class="section-tag"
                    style="background:rgba(255,255,255,.1);color:rgba(255,255,255,.8);border:1px solid rgba(255,255,255,.15);">
                    Mudah & Cepat</div>
                <div class="section-title">Cara <span
                        style="background:linear-gradient(135deg,#60A5FA,#34D399);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Meminjam</span>
                    🚀</div>
                <div class="section-sub">Tidak perlu daftar akun. Pinjam buku dalam 3 langkah mudah.</div>
            </div>
            <div class="steps-grid">
                <div class="reveal" style="transition-delay:0s">
                    <div class="step-card">
                        <div class="step-num-bg">01</div>
                        <div class="step-emoji">🔍</div>
                        <div class="step-badge" style="background:#4285F4">01</div>
                        <div class="step-title">Pilih Buku</div>
                        <div class="step-desc">Cari judul buku yang kamu butuhkan lewat koleksi atau kategori yang
                            tersedia.</div>
                    </div>
                </div>
                <div class="reveal" style="transition-delay:0.15s">
                    <div class="step-card">
                        <div class="step-num-bg">02</div>
                        <div class="step-emoji">📝</div>
                        <div class="step-badge" style="background:#0F9D58">02</div>
                        <div class="step-title">Isi Data Diri</div>
                        <div class="step-desc">Klik tombol "Pinjam" lalu isi nama, NIS, dan nomor HP. Tidak perlu akun.
                        </div>
                    </div>
                </div>
                <div class="reveal" style="transition-delay:0.3s">
                    <div class="step-card">
                        <div class="step-num-bg">03</div>
                        <div class="step-emoji">📦</div>
                        <div class="step-badge" style="background:#F4B400">03</div>
                        <div class="step-title">Ambil Buku</div>
                        <div class="step-desc">Datang ke perpustakaan dan tunjukkan bukti pinjam untuk mengambil buku.
                        </div>
                    </div>
                </div>
            </div>
            <div style="text-align:center;margin-top:40px;" class="reveal">
                <a href="#books" class="btn-primary-dark">Mulai Pinjam Sekarang →</a>
            </div>
        </div>
    </section>

    <!-- ── TENTANG ── -->
    <section id="about" style="background:white;">
        <div class="section-inner">
            <div class="about-grid">
                <div class="reveal-left">
                    <div class="about-tag">Tentang Kami</div>
                    <div class="about-title">Perpustakaan Digital <span class="grad-text">Masa Kini</span> 📚</div>
                    <div class="about-p">E-Library adalah platform perpustakaan digital milik SMK yang memudahkan siswa
                        mengakses koleksi buku pelajaran, referensi, dan materi belajar tanpa batas waktu.</div>
                    <div class="about-p">Dirancang khusus untuk mendukung kegiatan belajar mengajar, E-Library hadir
                        dengan konsep pinjam mudah — cukup pilih buku, isi data, dan ambil di perpustakaan. Sesimpel
                        itu!</div>
                    <div class="perks-grid">
                        <div class="perk">
                            <div class="perk-icon">⚡</div>
                            <div>
                                <div class="perk-title">Proses Cepat</div>
                                <div class="perk-desc">Pengajuan pinjam dalam hitungan menit</div>
                            </div>
                        </div>
                        <div class="perk">
                            <div class="perk-icon">📖</div>
                            <div>
                                <div class="perk-title">Koleksi Lengkap</div>
                                <div class="perk-desc">248+ judul buku tersedia</div>
                            </div>
                        </div>
                        <div class="perk">
                            <div class="perk-icon">🆓</div>
                            <div>
                                <div class="perk-title">Gratis</div>
                                <div class="perk-desc">Tanpa biaya daftar apapun</div>
                            </div>
                        </div>
                        <div class="perk">
                            <div class="perk-icon">🔄</div>
                            <div>
                                <div class="perk-title">Mudah Dikembalikan</div>
                                <div class="perk-desc">Proses pengembalian yang simpel</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reveal-right">
                    <div class="about-card">
                        <div class="about-card-icon">🏫</div>
                        <div class="about-card-title">SMK Kelas X ROL</div>
                        <div class="about-card-p">Program Rekayasa Perangkat Lunak yang menghasilkan
                            developer-developer muda berbakat Indonesia.</div>
                        <div class="about-card-badges">
                            <span class="about-badge">💻 Coding</span>
                            <span class="about-badge">🎨 UI/UX</span>
                            <span class="about-badge">🌐 Web Dev</span>
                            <span class="about-badge">📱 Mobile</span>
                        </div>
                        <div class="about-stats">
                            <div style="text-align:center;">
                                <div class="about-stat-val">248+</div>
                                <div class="about-stat-lbl">Buku</div>
                            </div>
                            <div style="text-align:center;">
                                <div class="about-stat-val">12</div>
                                <div class="about-stat-lbl">Kategori</div>
                            </div>
                            <div style="text-align:center;">
                                <div class="about-stat-val">86+</div>
                                <div class="about-stat-lbl">Peminjam</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── TESTIMONI ── -->
    <section class="testi-section" id="testimonials">
        <div class="section-inner">
            <div class="section-head reveal">
                <div class="section-tag tag-purple">Kata Mereka</div>
                <div class="section-title">Apa Kata <span class="grad-text-warm">Siswa</span> Kami 💬</div>
                <div class="section-sub">Dengarkan pengalaman teman-temanmu menggunakan E-Library.</div>
            </div>
            <div class="testi-grid">
                <div class="testi-card reveal" style="transition-delay:0s">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">"E-Library bener-bener ngebantu banget! Pinjam buku sekarang gak ribet lagi,
                        langsung bisa dari HP. Prosesnya cepet dan simpel."</div>
                    <div class="testi-author">
                        <div class="testi-avatar" style="background:#EFF6FF">🧑‍💻</div>
                        <div>
                            <div class="testi-name">Rizky Maulana</div>
                            <div class="testi-class">Kelas X RPL 1</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card reveal" style="transition-delay:0.08s">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">"Koleksi bukunya lengkap banget, ada semua yang aku butuhin buat pelajaran.
                        Tampilannya juga kece, gampang dipake."</div>
                    <div class="testi-author">
                        <div class="testi-avatar" style="background:#F0FDF4">👩‍🎨</div>
                        <div>
                            <div class="testi-name">Aulia Putri</div>
                            <div class="testi-class">Kelas X RPL 2</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card reveal" style="transition-delay:0.16s">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">"Ga perlu bikin akun, tinggal isi nama sama NIS langsung bisa pinjam. Praktis
                        banget buat anak sekolah kayak aku!"</div>
                    <div class="testi-author">
                        <div class="testi-avatar" style="background:#FFF7ED">👨‍🔬</div>
                        <div>
                            <div class="testi-name">Dimas Aditya</div>
                            <div class="testi-class">Kelas X RPL 1</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card reveal" style="transition-delay:0.24s">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">"Fitur kategorinya keren, jadi gampang nemuin buku yang dicari. Perpustakaan
                        digital terbaik yang pernah aku pake!"</div>
                    <div class="testi-author">
                        <div class="testi-avatar" style="background:#FAF5FF">👩‍💼</div>
                        <div>
                            <div class="testi-name">Nadia Sari</div>
                            <div class="testi-class">Kelas X RPL 2</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card reveal" style="transition-delay:0.32s">
                    <div class="testi-stars">★★★★★</div>
                    <div class="testi-text">"Awalnya takut ribet, ternyata gampang banget. Dalam 2 menit langsung bisa
                        pinjam buku. Recommended banget!"</div>
                    <div class="testi-author">
                        <div class="testi-avatar" style="background:#FEF2F2">🧑‍🏫</div>
                        <div>
                            <div class="testi-name">Fajar Kurnia</div>
                            <div class="testi-class">Kelas X RPL 1</div>
                        </div>
                    </div>
                </div>
                <div class="testi-card reveal" style="transition-delay:0.4s">
                    <div class="testi-stars">★★★★☆</div>
                    <div class="testi-text">"Sangat membantu proses belajar. Tinggal pilih, isi data, ambil. Simple tapi
                        efektif. Semoga makin banyak buku baru!"</div>
                    <div class="testi-author">
                        <div class="testi-avatar" style="background:#FFFBEB">👩‍🎓</div>
                        <div>
                            <div class="testi-name">Sinta Dewi</div>
                            <div class="testi-class">Kelas X RPL 2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── CTA BANNER ── -->
    <section class="cta-section" id="cta">
        <div class="section-inner">
            <div class="cta-inner reveal">
                <div style="font-size:56px;margin-bottom:20px;">📚</div>
                <div class="cta-title">Siap Mulai <span
                        style="background:linear-gradient(135deg,#60A5FA,#34D399);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;">Belajar</span>?
                </div>
                <div class="cta-sub">Ribuan buku siap menunggu kamu. Mulai pinjam sekarang, gratis, tanpa ribet!</div>
                <div class="cta-btns">
                    <a href="#books" class="btn-primary">
                        <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                        Lihat Koleksi Buku
                    </a>
                    <a href="#how" class="btn-outline">Pelajari Cara Pinjam</a>
                </div>
                <div class="cta-features">
                    <div class="cta-feat"><span class="cta-feat-icon">✅</span> Tanpa daftar akun</div>
                    <div class="cta-feat"><span class="cta-feat-icon">✅</span> 100% Gratis</div>
                    <div class="cta-feat"><span class="cta-feat-icon">✅</span> Proses cepat</div>
                    <div class="cta-feat"><span class="cta-feat-icon">✅</span> Koleksi lengkap</div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── LOKASI ── -->
    <section class="address-section" id="address">
        <div class="section-inner">
            <div class="section-head reveal">
                <div class="section-tag tag-orange">Lokasi Kami</div>
                <div class="section-title">Temukan <span class="grad-text">Kami</span> 📍</div>
                <div class="section-sub">Kunjungi perpustakaan kami langsung untuk mengambil buku yang sudah kamu
                    pinjam.</div>
            </div>
            <div class="address-grid">
                <div class="reveal-left">
                    <div class="address-title">Perpustakaan SMK Kelas X ROL</div>
                    <div class="address-p">Kami berlokasi di dalam gedung sekolah, mudah dijangkau oleh seluruh siswa.
                        Jangan lupa bawa bukti pinjam digital saat datang!</div>
                    <div class="info-cards">
                        <div class="info-card">
                            <div class="info-icon" style="background:#EFF6FF;">📍</div>
                            <div>
                                <div class="info-label">Alamat</div>
                                <div class="info-value">Gedung A, Lantai 2, Ruang Perpustakaan<br>SMK Negeri, Jl.
                                    Pendidikan No. 1<br>Jakarta Selatan, DKI Jakarta 12345</div>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="info-icon" style="background:#F0FDF4;">🕐</div>
                            <div>
                                <div class="info-label">Jam Operasional</div>
                                <div class="info-value">Senin – Jumat: 07.30 – 15.30 WIB<br>Sabtu: 08.00 – 12.00
                                    WIB<br>Minggu & Libur Nasional: Tutup</div>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="info-icon" style="background:#FFF7ED;">📞</div>
                            <div>
                                <div class="info-label">Kontak</div>
                                <div class="info-value">WhatsApp: 0812-3456-7890<br>Email: perpustakaan@smk.sch.id
                                </div>
                            </div>
                        </div>
                        <div class="info-card">
                            <div class="info-icon" style="background:#FAF5FF;">📋</div>
                            <div>
                                <div class="info-label">Syarat Pengambilan</div>
                                <div class="info-value">Tunjukkan kode pinjam atau screenshot bukti peminjaman kepada
                                    petugas perpustakaan.</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="reveal-right">
                    <div class="map-placeholder">
                        <div class="map-pin">📍</div>
                        <div class="map-label">Perpustakaan SMK</div>
                        <div class="map-sub">Gedung A, Lantai 2</div>
                        <a href="https://maps.google.com" target="_blank" class="map-btn"
                            style="position:relative;z-index:2;">
                            <svg width="14" height="14" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2.5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                            </svg>
                            Buka di Google Maps
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ── FOOTER ── -->
    <footer>
        <div class="footer-top">
            <div class="footer-grid">
                <div>
                    <div class="footer-brand-logo">
                        <div class="footer-brand-icon">
                            <svg width="18" height="18" fill="none" viewBox="0 0 24 24" stroke="white"
                                stroke-width="2.2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <div class="footer-brand-name">E-Library</div>
                    </div>
                    <div class="footer-desc">Perpustakaan digital SMK Kelas X ROL. Akses ribuan koleksi buku pelajaran
                        dan referensi dengan mudah, cepat, dan gratis.</div>
                    <div class="footer-social">
                        <a href="#" class="social-btn" title="Instagram">
                            <svg width="16" height="16" fill="none" viewBox="0 0 24 24"
                                stroke="rgba(255,255,255,.6)" stroke-width="1.8">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5" />
                                <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z" />
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5" />
                            </svg>
                        </a>
                        <a href="#" class="social-btn" title="WhatsApp">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="rgba(255,255,255,.6)">
                                <path
                                    d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z" />
                            </svg>
                        </a>
                        <a href="#" class="social-btn" title="YouTube">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="rgba(255,255,255,.6)">
                                <path
                                    d="M23.495 6.205a3.007 3.007 0 00-2.088-2.088c-1.87-.501-9.396-.501-9.396-.501s-7.507-.01-9.396.501A3.007 3.007 0 00.527 6.205a31.247 31.247 0 00-.522 5.805 31.247 31.247 0 00.522 5.783 3.007 3.007 0 002.088 2.088c1.868.502 9.396.502 9.396.502s7.506 0 9.396-.502a3.007 3.007 0 002.088-2.088 31.247 31.247 0 00.5-5.783 31.247 31.247 0 00-.5-5.805zM9.609 15.601V8.408l6.264 3.602z" />
                            </svg>
                        </a>
                    </div>
                </div>
                <div>
                    <div class="footer-col-title">Navigasi</div>
                    <div class="footer-links">
                        <a href="#books" class="footer-link">Koleksi Buku</a>
                        <a href="#categories" class="footer-link">Kategori</a>
                        <a href="#how" class="footer-link">Cara Meminjam</a>
                        <a href="#about" class="footer-link">Tentang Kami</a>
                        <a href="#address" class="footer-link">Lokasi</a>
                    </div>
                </div>
                <div>
                    <div class="footer-col-title">Kategori</div>
                    <div class="footer-links">
                        <a href="#" class="footer-link">💻 Pemrograman</a>
                        <a href="#" class="footer-link">🎨 Desain</a>
                        <a href="#" class="footer-link">🌐 Jaringan</a>
                        <a href="#" class="footer-link">📐 Matematika</a>
                        <a href="#" class="footer-link">🗄️ Basis Data</a>
                    </div>
                </div>
                <div>
                    <div class="footer-col-title">Info</div>
                    <div class="footer-links">
                        <a href="#" class="footer-link">📋 Syarat & Ketentuan</a>
                        <a href="#" class="footer-link">🔒 Kebijakan Privasi</a>
                        <a href="#" class="footer-link">❓ FAQ</a>
                        <a href="#" class="footer-link">📞 Hubungi Kami</a>
                    </div>
                    <div style="margin-top:20px;">
                        <div class="footer-col-title" style="margin-bottom:10px;">Jam Buka</div>
                        <div style="color:rgba(255,255,255,.4);font-size:13px;line-height:1.9;">
                            Senin–Jumat<br>
                            <span style="color:rgba(255,255,255,.7);">07.30 – 15.30 WIB</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div style="border-top:1px solid rgba(255,255,255,.07);">
            <div class="footer-bottom">
                <div class="footer-copy">© 2024 E-Library SMK. All rights reserved.</div>
                <div class="footer-made">Dibuat dengan <span>❤️</span> oleh <strong>Siswa Kelas X ROL</strong></div>
            </div>
        </div>
    </footer>
@endsection
