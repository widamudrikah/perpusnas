<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $book->title }} — E-Library</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=DM+Sans:wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Book 3D — too complex for Tailwind utilities, kept as custom CSS */
        .book-3d-wrap  { perspective: 1200px; padding-bottom: 40px; }
        .book-3d {
            width: 200px; height: 280px;
            transform-style: preserve-3d;
            transform: rotateY(-18deg) rotateX(4deg);
            transition: transform .5s ease;
            position: relative; margin: 0 auto; cursor: pointer;
        }
        .book-3d:hover { transform: rotateY(-6deg) rotateX(2deg) scale(1.04); }
        .book-face, .book-spine, .book-back { position: absolute; border-radius: 4px; }
        .book-face {
            width: 200px; height: 280px;
            background: linear-gradient(145deg, var(--book-color, #4285F4), color-mix(in srgb, var(--book-color, #4285F4) 65%, #000));
            backface-visibility: hidden;
            box-shadow: 6px 6px 30px rgba(0,0,0,.5), inset -3px 0 8px rgba(0,0,0,.2);
            display: flex; flex-direction: column; align-items: center; justify-content: center;
            gap: 14px; padding: 20px; text-align: center;
            border-radius: 2px 8px 8px 2px; overflow: hidden;
        }
        .book-face::before {
            content: ''; position: absolute; inset: 0;
            background: linear-gradient(145deg, rgba(255,255,255,.15) 0%, transparent 50%, rgba(0,0,0,.1) 100%);
        }
        .book-face::after {
            content: ''; position: absolute; top: 0; left: 6px;
            width: 3px; height: 100%; background: rgba(0,0,0,.2);
        }
        .book-cover-img {
            position: absolute; inset: 16px;
            background-size: cover; background-position: center;
            border-radius: 4px; z-index: 1;
        }
        .book-spine {
            width: 22px; height: 280px;
            background: color-mix(in srgb, var(--book-color, #4285F4) 55%, #000);
            transform: rotateY(90deg) translateZ(-11px) translateX(-11px);
            border-radius: 2px 0 0 2px;
            box-shadow: inset -2px 0 6px rgba(0,0,0,.3);
        }
        .book-back {
            width: 200px; height: 280px;
            background: color-mix(in srgb, var(--book-color, #4285F4) 75%, #000);
            transform: translateZ(-18px);
            border-radius: 2px 8px 8px 2px;
        }
        /* Nav links (carried over from landing page style) */
        .nav-link {
            font-size: 14px; font-weight: 500; color: #374151;
            text-decoration: none; padding: 6px 0;
            position: relative; transition: color .2s;
        }
        .nav-link::after {
            content: ''; position: absolute; bottom: 0; left: 0;
            width: 0; height: 2px; background: #4285F4;
            transition: width .3s; border-radius: 2px;
        }
        .nav-link:hover::after { width: 100%; }
    </style>

</head>
<body class="bg-gray-50 min-h-screen text-gray-900">

<nav class="sticky top-0 z-50 bg-white/90 backdrop-blur-md border-b border-gray-100 shadow-sm">
    <div class="max-w-6xl mx-auto px-6 py-3.5 flex items-center justify-between">

        {{-- Logo --}}
        <a href="" class="flex items-center gap-2.5 no-underline">
            <div class="w-9 h-9 rounded-xl flex items-center justify-center" style="background: linear-gradient(135deg,#4285F4,#0F9D58)">
                <svg class="w-5 h-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2.2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.746 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                </svg>
            </div>
            <span class="font-sora font-bold text-gray-900 text-lg">E-Library</span>
        </a>

        {{-- Breadcrumb --}}
        <div class="hidden md:flex items-center gap-1.5 text-sm text-gray-400">
            <a href="" class="text-gray-500 hover:text-blue-500 transition-colors">Beranda</a>
            <span class="text-gray-300">/</span>
            <a href="#categories" class="text-gray-500 hover:text-blue-500 transition-colors">
                {{ $book->category->name }}
            </a>
            <span class="text-gray-300">/</span>
            <span class="text-gray-700 font-semibold max-w-xs truncate">{{ $book->title }}</span>
        </div>

        {{-- Desktop nav --}}
        <div class="hidden md:flex items-center gap-6">
            <a href="#books"      class="nav-link">Koleksi</a>
            <a href="#categories" class="nav-link">Kategori</a>
            <a href="#how"        class="nav-link">Cara Pinjam</a>
            <a href="{{ route('login') }}"
               class="font-sora text-sm font-semibold px-4 py-2 rounded-xl border border-gray-200 text-gray-600 hover:bg-gray-50 transition-all">
                Login Admin
            </a>
        </div>
    </div>
</nav>

<div class="relative overflow-hidden" style="background: linear-gradient(135deg,#0f172a 0%,#1e3a5f 55%,#0a2e1a 100%); padding: 56px 24px 0;">

    {{-- Grid texture --}}
    <div class="absolute inset-0 opacity-[0.04]" style="background-image: linear-gradient(#fff 1px,transparent 1px), linear-gradient(90deg,#fff 1px,transparent 1px); background-size: 40px 40px;"></div>

    <div class="relative z-10 max-w-6xl mx-auto">
        <div class="grid md:grid-cols-[280px_1fr] gap-10 md:gap-14 items-end pb-0">

            {{-- ── Book 3D Cover ── --}}
            <div class="book-3d-wrap flex justify-center md:justify-start">
                <div class="book-3d">
                    <div class="book-face">
                        @if ($book->cover)
                            <div class="book-cover-img"
                                 style="background-image: url('{{ asset('storage/' . $book->cover) }}');"></div>
                        @else
                            <span class="text-5xl relative z-10">📘</span>
                            <span class="relative z-10 text-white font-sora font-bold text-xs leading-tight text-center px-1">
                                {{ Str::limit($book->title, 40) }}
                            </span>
                            <span class="relative z-10 text-white/60 text-[10px]">{{ $book->author }}</span>
                        @endif
                    </div>
                </div>
            </div>

            {{-- ── Book Info ── --}}
            <div class="pb-10 md:pb-14 flex flex-col gap-0">
                {{-- Category badge --}}
                <div class="animate-fade-up-1 inline-flex items-center gap-1.5 px-3.5 py-1.5 rounded-full mb-4 w-fit bg-white/10 border border-white/20 text-white/85 text-xs font-semibold font-sora tracking-wide">
                    {{ $book->category->name }}
                </div>
                {{-- Title --}}
                <h1 class="animate-fade-up-2 font-sora font-extrabold text-white leading-tight mb-2" style="font-size: clamp(24px, 3.5vw, 40px);">
                    {{ $book->title }}
                </h1>
                {{-- Author & publisher --}}
                <p class="animate-fade-up-2 text-white/60 text-sm mb-5">
                    oleh <strong class="text-white/90 font-semibold">{{ $book->author }}</strong>
                    @if($book->publisher) · {{ $book->publisher }} @endif
                </p>
                {{-- Meta chips --}}
                <div class="animate-fade-up-3 flex flex-wrap gap-2 mb-5">
                    @if($book->year)
                    <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs text-white/80 bg-white/[0.07] border border-white/[0.12]">
                        <svg class="w-3.5 h-3.5 opacity-60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
                        {{ $book->year }}
                    </div>
                    @endif
                    @if($book->pages)
                    <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs text-white/80 bg-white/[0.07] border border-white/[0.12]">
                        <svg class="w-3.5 h-3.5 opacity-60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/></svg>
                        {{ $book->pages }} hal.
                    </div>
                    @endif
                    @if($book->language)
                    <div class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-xs text-white/80
                                bg-white/[0.07] border border-white/[0.12]">
                        <svg class="w-3.5 h-3.5 opacity-60" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129"/></svg>
                        {{ $book->language }}
                    </div>
                    @endif
                </div>

                {{-- Stock indicator --}}
                <div class="animate-fade-up-3 mb-6 w-fit">

                    @if ($book->stock > 0)
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold font-sora bg-green-500/10 border border-green-500/25 text-green-400">
                            <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse-dot"></span>
                            Tersedia {{ $book->stock }} stok
                        </div>
                    @else
                        <div class="inline-flex items-center gap-2 px-4 py-2 rounded-xl text-sm font-semibold font-sora bg-red-500/10 border border-red-500/25 text-red-400">
                            <span class="w-2 h-2 rounded-full bg-red-400 animate-pulse-dot"></span>
                            Stok Habis
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>

<div class="max-w-6xl mx-auto px-6 py-10 pb-20">
    <div class="grid grid-cols-1 lg:grid-cols-[1fr_340px] gap-8">

        {{-- ── LEFT COLUMN ── --}}
        <div class="flex flex-col gap-6">

            {{-- Deskripsi --}}
            @if($book->description)
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-7">
                <div class="flex items-center gap-2 font-sora font-extrabold text-gray-900 text-sm mb-4">
                    <svg class="w-4 h-4 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    Tentang Buku Ini
                </div>
                <div class="text-gray-600 text-sm leading-relaxed prose prose-sm max-w-none">
                    {!! $book->description !!}
                </div>
            </div>
            @endif

            {{-- Detail buku --}}
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
                <div class="px-7 py-4 border-b border-gray-50 flex items-center gap-2 font-sora font-extrabold text-gray-900 text-sm">
                    <svg class="w-4 h-4 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"/>
                    </svg>
                    Informasi Buku
                </div>

                @php
                $details = [
                    ['label' => 'Pengarang',    'value' => $book->author],
                    ['label' => 'Penerbit',     'value' => $book->publisher ?? '—'],
                    ['label' => 'Tahun Terbit', 'value' => $book->year ?? '—'],
                    ['label' => 'Kategori',     'value' => $book->category->name],
                ];
                @endphp

                <div class="divide-y divide-gray-50">
                    @foreach ($details as $d)
                    <div class="flex items-center px-7 py-3.5 hover:bg-gray-50/70 transition-colors">
                        <span class="w-36 text-xs font-semibold text-gray-400 uppercase tracking-wide flex-shrink-0">
                            {{ $d['label'] }}
                        </span>
                        <span class="text-sm text-gray-800 font-medium">{{ $d['value'] }}</span>
                    </div>
                    @endforeach

                    {{-- Stock row with color --}}
                    <div class="flex items-center px-7 py-3.5 hover:bg-gray-50/70 transition-colors">
                        <span class="w-36 text-xs font-semibold text-gray-400 uppercase tracking-wide flex-shrink-0">Stok</span>
                        @if($book->stock > 0)
                            <span class="text-sm font-bold text-green-600">{{ $book->stock }} tersedia</span>
                        @else
                            <span class="text-sm font-bold text-red-500">Habis</span>
                        @endif
                    </div>
                </div>
            </div>

        </div>

        {{-- ── RIGHT COLUMN (SIDEBAR) ── --}}
        <div class="flex flex-col gap-5">
            {{-- Form Peminjaman --}}
            <div class="bg-white rounded-2xl border border-gray-100 shadow-sm p-6" id="formSection">
                <div class="flex items-center gap-2 font-sora font-extrabold text-gray-900 text-sm mb-5">
                    Form Peminjaman
                </div>

                @if ($book->stock > 0)
                    <form action="{{ route('book.borrow.front', $book->id) }}" method="POST" id="borrowForm">
                        @csrf
                        
                        {{-- Nama --}}
                        <div class="mb-4">
                            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wide mb-1.5 font-sora">
                                Nama Lengkap *
                            </label>
                            <input id="inputNama" name="name" type="text" placeholder="contoh: Budi Santoso" value="{{ old('name') }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm bg-gray-50 focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 outline-none transition-all placeholder:text-gray-300 @error('name') border-red-400 bg-red-50 @enderror">
                            @error('name')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- WhatsApp --}}
                        <div class="mb-4">
                            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wide mb-1.5 font-sora">
                                No. WhatsApp *
                            </label>
                            <input id="inputHP" name="phone" type="text" placeholder="contoh: 0812-3456-7890" value="{{ old('whatsapp') }}" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm bg-gray-50 focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 outline-none transition-all placeholder:text-gray-300 @error('whatsapp') border-red-400 bg-red-50 @enderror">
                            @error('whatsapp')
                                <p class="text-xs text-red-500 mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Durasi --}}
                        <div class="mb-5">
                            <label class="block text-xs font-semibold text-gray-500 uppercase tracking-wide mb-1.5 font-sora">
                                Durasi Pinjam
                            </label>
                            <select id="inputDurasi" name="duration" class="w-full px-4 py-2.5 rounded-xl border border-gray-200 text-sm bg-gray-50 text-gray-700 focus:bg-white focus:border-blue-400 focus:ring-2 focus:ring-blue-100 outline-none transition-all appearance-none">
                                <option value="3">3 hari</option>
                                <option value="7">7 hari</option>
                                <option value="14">14 hari</option>
                            </select>
                        </div>

                        <button type="submit" class="w-full py-3 rounded-xl text-white font-sora font-bold text-sm flex items-center justify-center gap-2 transition-all hover:-translate-y-0.5 hover:shadow-lg" style="background: linear-gradient(135deg,#4285F4,#0F9D58); box-shadow: 0 4px 16px rgba(66,133,244,.3);">
                            Ajukan Peminjaman
                        </button>
                        <p class="text-center text-xs text-gray-400 mt-3">🔒 Data aman · Tanpa akun · Gratis 100%</p>
                    </form>
                @else
                    <div class="text-center py-6">
                        <div class="text-4xl mb-3">📚</div>
                        <p class="font-sora font-bold text-gray-700 text-sm mb-1">Stok Sedang Habis</p>
                        <p class="text-xs text-gray-400">Buku sedang dipinjam semua. Coba lagi nanti.</p>
                    </div>
                @endif
            </div>

            {{-- Cara pengambilan --}}
            <div class="rounded-2xl p-6" style="background: linear-gradient(135deg,#0f172a,#1e3a5f);">
                <div class="font-sora font-bold text-white text-sm mb-4 flex items-center gap-2">
                    <span>💡</span> Cara Pengambilan
                </div>
                <div class="flex flex-col gap-3.5">
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-lg flex items-center justify-center flex-shrink-0 font-sora text-white text-xs font-bold" style="background:#4285F4;">1</div>
                        <p class="text-xs text-white/65 leading-relaxed pt-0.5">Isi & submit form peminjaman</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-lg flex items-center justify-center flex-shrink-0 font-sora text-white text-xs font-bold" style="background:#0F9D58;">2</div>
                        <p class="text-xs text-white/65 leading-relaxed pt-0.5">Simpan kode peminjaman</p>
                    </div>
                    <div class="flex items-start gap-3">
                        <div class="w-6 h-6 rounded-lg flex items-center justify-center flex-shrink-0 font-sora text-white text-xs font-bold" style="background:#F4B400;">3</div>
                        <p class="text-xs text-white/65 leading-relaxed pt-0.5">Datang ke perpustakaan & tunjukkan kode ke petugas</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{{-- alert --}}
@if (session('borrow_success'))

<div id="modalOverlay" class="fixed inset-0 z-50 flex items-center justify-center px-4 bg-slate-900/70 backdrop-blur-sm transition-opacity duration-300">
    <div class="bg-white rounded-3xl p-10 max-w-sm w-full text-center shadow-2xl animate-fade-up">
        <div class="text-6xl mb-4">🎉</div>
        <h2 class="font-sora font-extrabold text-gray-900 text-2xl mb-2">Peminjaman Berhasil!</h2>
        <p class="text-gray-500 text-sm mb-6 leading-relaxed">
            Tunjukkan kode di bawah ini kepada petugas perpustakaan untuk mengambil buku.
        </p>

        {{-- Kode --}}
        <div class="bg-gray-50 border-2 border-dashed border-gray-200 rounded-2xl py-5 mb-5">
            <p class="text-xs text-gray-400 mb-1 uppercase tracking-widest">Kode Peminjaman</p>
            <p class="font-sora font-extrabold text-3xl text-gray-900 tracking-[.15em]">
                {{ session('borrow_code') }}
            </p>
        </div>

        {{-- Detail --}}
        <div class="text-left flex flex-col gap-2 mb-6 text-sm">
            <div class="flex justify-between py-1.5 border-b border-gray-100">
                <span class="text-gray-400">Nama</span>
                <span class="font-semibold text-gray-800">{{ session('borrow_name') }}</span>
            </div>
            <div class="flex justify-between py-1.5 border-b border-gray-100">
                <span class="text-gray-400">Buku</span>
                <span class="font-semibold text-gray-800 text-right max-w-[180px]">{{ $book->title }}</span>
            </div>
            <div class="flex justify-between py-1.5 border-b border-gray-100">
                <span class="text-gray-400">Durasi</span>
                <span class="font-semibold text-gray-800">{{ session('borrow_duration') }} hari</span>
            </div>
            <div class="flex justify-between py-1.5">
                <span class="text-gray-400">Kembali paling lambat</span>
                <span class="font-semibold text-red-500">{{ session('borrow_return_date') }}</span>
            </div>
        </div>

        <button onclick="document.getElementById('modalOverlay').remove()"
                class="w-full py-3.5 rounded-xl text-white font-sora font-bold text-sm
                       transition-all hover:-translate-y-0.5 hover:shadow-lg"
                style="background: linear-gradient(135deg,#4285F4,#0F9D58);">
            ✓ Mengerti, Tutup
        </button>
    </div>
</div>

<script>
    // Confetti on page load
    (function confetti() {
        const colors = ['#4285F4','#0F9D58','#F4B400','#DB4437','#60A5FA','#34D399'];
        for (let i = 0; i < 55; i++) {
            setTimeout(() => {
                const el = document.createElement('div');
                const size = 6 + Math.random() * 8;
                el.className = 'confetti-piece';
                el.style.cssText = `left:${Math.random()*100}vw;width:${size}px;height:${size}px;background:${colors[~~(Math.random()*colors.length)]};border-radius:${Math.random()>.5?'50%':'2px'};animation-duration:${1.5+Math.random()*2}s;`;
                document.body.appendChild(el);
                setTimeout(() => el.remove(), 3500);
            }, i * 35);
        }
    })();
</script>

@endif

</body>
</html>