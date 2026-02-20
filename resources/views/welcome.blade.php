<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Muhammad Rafi Ramadhan Kartika</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;600;700;800&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">

    <style>
        *, *::before, *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        :root {
            --bg-dark: #0d0d14;
            --bg-card: #13131f;
            --accent-1: #7c3aed;
            --accent-2: #06b6d4;
            --accent-3: #f59e0b;
            --text-primary: #f0f0f8;
            --text-muted: #8b8ba8;
            --border: rgba(255, 255, 255, 0.07);
        }

        body {
            font-family: 'Outfit', sans-serif;
            background-color: var(--bg-dark);
            color: var(--text-primary);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            position: relative;
        }

        /* Animated background blobs */
        .blob {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.15;
            animation: floatBlob 10s ease-in-out infinite alternate;
            pointer-events: none;
            z-index: 0;
        }

        .blob-1 {
            width: 500px;
            height: 500px;
            background: var(--accent-1);
            top: -150px;
            left: -100px;
            animation-delay: 0s;
        }

        .blob-2 {
            width: 400px;
            height: 400px;
            background: var(--accent-2);
            bottom: -100px;
            right: -80px;
            animation-delay: 3s;
        }

        .blob-3 {
            width: 300px;
            height: 300px;
            background: var(--accent-3);
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-delay: 6s;
        }

        @keyframes floatBlob {
            0%   { transform: translate(0, 0) scale(1); }
            100% { transform: translate(30px, 40px) scale(1.1); }
        }

        /* Grid background */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(var(--border) 1px, transparent 1px),
                linear-gradient(90deg, var(--border) 1px, transparent 1px);
            background-size: 50px 50px;
            z-index: 0;
            pointer-events: none;
        }

        /* Main card */
        .card-wrapper {
            position: relative;
            z-index: 1;
            width: 100%;
            max-width: 680px;
            padding: 1.5rem;
        }

        /* Glowing border effect */
        .card-glow {
            position: relative;
            border-radius: 24px;
            padding: 2px;
            background: linear-gradient(135deg, var(--accent-1), var(--accent-2), var(--accent-3));
            animation: rotateBorder 6s linear infinite;
            background-size: 200% 200%;
        }

        @keyframes rotateBorder {
            0%   { background-position: 0% 50%; }
            50%  { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        .card {
            background: var(--bg-card);
            border-radius: 22px;
            padding: 3rem 3.5rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        /* Shimmer overlay inside card */
        .card::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle at center, rgba(124, 58, 237, 0.06) 0%, transparent 60%);
            pointer-events: none;
        }

        /* Avatar / Monogram */
        .avatar {
            width: 90px;
            height: 90px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--accent-1), var(--accent-2));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            font-weight: 800;
            color: #fff;
            margin: 0 auto 1.75rem;
            box-shadow: 0 0 30px rgba(124, 58, 237, 0.4), 0 0 60px rgba(6, 182, 212, 0.15);
            animation: pulseShadow 3s ease-in-out infinite;
            letter-spacing: -1px;
        }

        @keyframes pulseShadow {
            0%, 100% { box-shadow: 0 0 30px rgba(124, 58, 237, 0.4), 0 0 60px rgba(6, 182, 212, 0.15); }
            50%       { box-shadow: 0 0 45px rgba(124, 58, 237, 0.65), 0 0 80px rgba(6, 182, 212, 0.25); }
        }

        /* Label badge */
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            background: rgba(124, 58, 237, 0.15);
            border: 1px solid rgba(124, 58, 237, 0.35);
            color: #a78bfa;
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            padding: 5px 14px;
            border-radius: 100px;
            margin-bottom: 1.25rem;
        }

        .badge-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #a78bfa;
            animation: blink 1.5s ease-in-out infinite;
        }

        @keyframes blink {
            0%, 100% { opacity: 1; }
            50%       { opacity: 0.3; }
        }

        /* Name */
        h1 {
            font-size: clamp(1.75rem, 5vw, 2.6rem);
            font-weight: 800;
            line-height: 1.15;
            letter-spacing: -0.03em;
            background: linear-gradient(135deg, #fff 30%, #a78bfa 70%, #67e8f9 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            margin-bottom: 0.5rem;
        }

        /* Divider */
        .divider {
            width: 60px;
            height: 3px;
            background: linear-gradient(90deg, var(--accent-1), var(--accent-2));
            border-radius: 100px;
            margin: 1.4rem auto;
        }

        /* NIM section */
        .nim-label {
            font-size: 0.72rem;
            font-weight: 600;
            letter-spacing: 0.15em;
            text-transform: uppercase;
            color: var(--text-muted);
            margin-bottom: 0.5rem;
        }

        .nim-value {
            font-family: 'JetBrains Mono', monospace;
            font-size: clamp(1.5rem, 4.5vw, 2.2rem);
            font-weight: 700;
            letter-spacing: 0.1em;
            color: var(--accent-2);
            text-shadow: 0 0 20px rgba(6, 182, 212, 0.35);
            padding: 0.6rem 1.5rem;
            background: rgba(6, 182, 212, 0.07);
            border: 1px solid rgba(6, 182, 212, 0.2);
            border-radius: 12px;
            display: inline-block;
            margin-bottom: 2rem;
        }

        /* Info pills */
        .info-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-top: 0.5rem;
        }

        .info-pill {
            display: flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid var(--border);
            border-radius: 10px;
            padding: 9px 16px;
            font-size: 0.82rem;
            color: var(--text-muted);
            transition: background 0.2s, border-color 0.2s;
        }

        .info-pill:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.15);
            color: var(--text-primary);
        }

        .info-pill .icon {
            font-size: 1rem;
        }

        /* Footer */
        .footer {
            margin-top: 2.5rem;
            font-size: 0.72rem;
            color: rgba(139, 139, 168, 0.5);
            letter-spacing: 0.05em;
        }

        /* Nav buttons top-right */
        .nav-bar {
            position: fixed;
            top: 1.5rem;
            right: 1.5rem;
            display: flex;
            gap: 10px;
            z-index: 10;
        }

        .nav-btn {
            font-family: 'Outfit', sans-serif;
            font-size: 0.8rem;
            font-weight: 600;
            text-decoration: none;
            padding: 8px 20px;
            border-radius: 8px;
            transition: all 0.2s;
        }

        .nav-btn.ghost {
            color: var(--text-muted);
            background: transparent;
            border: 1px solid var(--border);
        }

        .nav-btn.ghost:hover {
            color: var(--text-primary);
            border-color: rgba(255,255,255,0.2);
            background: rgba(255,255,255,0.05);
        }

        .nav-btn.solid {
            color: #fff;
            background: linear-gradient(135deg, var(--accent-1), #9333ea);
            border: 1px solid transparent;
            box-shadow: 0 4px 15px rgba(124, 58, 237, 0.35);
        }

        .nav-btn.solid:hover {
            box-shadow: 0 6px 20px rgba(124, 58, 237, 0.5);
            transform: translateY(-1px);
        }

        /* Entrance animation */
        .card-wrapper {
            animation: fadeUp 0.7s cubic-bezier(0.22, 1, 0.36, 1) both;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(30px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 480px) {
            .card { padding: 2rem 1.75rem; }
            .nav-bar { top: 1rem; right: 1rem; }
        }
    </style>
</head>
<body>

    <!-- Blobs -->
    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>
    <div class="blob blob-3"></div>

    <!-- Navigation -->
    @if (Route::has('login'))
        <nav class="nav-bar">
            @auth
                <a href="{{ url('/dashboard') }}" class="nav-btn solid">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="nav-btn ghost">Masuk</a>
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-btn solid">Daftar</a>
                @endif
            @endauth
        </nav>
    @endif

    <!-- Main Card -->
    <div class="card-wrapper">
        <div class="card-glow">
            <div class="card">

                <!-- Avatar -->
                <div class="avatar">MR</div>

                <!-- Badge -->
                <div class="badge">
                    <span class="badge-dot"></span>
                    Mahasiswa Aktif
                </div>

                <!-- Name -->
                <h1>Muhammad Rafi Ramadhan Kartika</h1>

                <!-- Divider -->
                <div class="divider"></div>

                <!-- NIM -->
                <p class="nim-label">Nomor Induk Mahasiswa</p>
                <div class="nim-value">20230140138</div>

                <!-- Info Pills -->
                <div class="info-grid">
                    <div class="info-pill">
                        <span class="icon">🎓</span>
                        <span>Pemrograman Web Framework</span>
                    </div>
                    <div class="info-pill">
                        <span class="icon">📅</span>
                        <span>Semester 5</span>
                    </div>
                    <div class="info-pill">
                        <span class="icon">⚡</span>
                        <span>Laravel</span>
                    </div>
                </div>

                <!-- Footer -->
                <p class="footer">{{ date('Y') }} &mdash; Muhammad Rafi Ramadhan Kartika</p>
            </div>
        </div>
    </div>

</body>
</html>
