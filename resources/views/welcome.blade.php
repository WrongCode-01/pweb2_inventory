<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Inventory Management</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
            color: #1a202c;
            margin: 0;
        }
        .container {
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }
        /* Header */
        .header {
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            padding: 1rem 0;
        }
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: 700;
            color: #2563eb;
            text-decoration: none;
        }
        .nav-links a {
            color: #4a5568;
            text-decoration: none;
            margin-left: 1.5rem;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        .nav-links a:hover {
            color: #2563eb;
        }
        .nav-auth {
            display: flex;
            align-items: center;
        }
        .auth-link {
            font-weight: 600;
            color: #4a5568;
            text-decoration: none;
            margin-left: 1.5rem;
            transition: color 0.3s ease;
        }
        .auth-link:hover {
            color: #2563eb;
        }
        .auth-button {
            background-color: #2563eb;
            color: #ffffff;
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease;
            margin-left: 1.5rem;
        }
        .auth-button:hover {
            background-color: #1d4ed8;
        }

        /* Hero Section */
        .hero {
            background-color: #e0e7ff;
            padding: 6rem 0;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 1rem;
        }
        .hero p {
            font-size: 1.125rem;
            color: #374151;
            max-width: 600px;
            margin: 0 auto 2rem auto;
        }
        .hero .cta-button {
            background-color: #2563eb;
            color: #ffffff;
            padding: 1rem 2.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-size: 1.125rem;
            font-weight: 600;
            transition: background-color 0.3s ease;
        }
        .hero .cta-button:hover {
            background-color: #1d4ed8;
        }

        /* Features Section */
        .features {
            padding: 4rem 0;
            background-color: #ffffff;
        }
        .section-title {
            text-align: center;
            font-size: 2.25rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 3rem;
        }
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
        }
        .feature-card {
            background-color: #f8fafc;
            border: 1px solid #e5e7eb;
            border-radius: 0.75rem;
            padding: 2rem;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }
        .feature-icon {
            background-color: #dbeafe;
            color: #2563eb;
            height: 60px;
            width: 60px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 1.5rem;
        }
        .feature-card h3 {
            font-size: 1.25rem;
            font-weight: 600;
            color: #1e3a8a;
            margin-bottom: 0.5rem;
        }
        .feature-card p {
            color: #4b5563;
        }

        /* Testimonial Section */
        .testimonials {
            background-color: #e0e7ff;
            padding: 4rem 0;
        }
        .testimonial-card {
            background-color: #ffffff;
            border-radius: 0.75rem;
            padding: 2rem;
            max-width: 700px;
            margin: 0 auto;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .testimonial-card p {
            font-style: italic;
            color: #374151;
            margin-bottom: 1.5rem;
        }
        .testimonial-author {
            font-weight: 600;
            color: #1e3a8a;
        }

        /* Footer */
        .footer {
            background-color: #1e3a8a;
            color: #ffffff;
            padding: 2rem 0;
            text-align: center;
        }
    </style>
</head>
<body class="antialiased">

    <header class="header">
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">Inventory Management</a>
                <div class="nav-auth">
                    @if (Route::has('login'))
                        @auth
                            <a href="{{ url('/dashboard') }}" class="auth-button">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="auth-link">Masuk</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="auth-button">Daftar</a>
                            @endif
                        @endauth
                    @endif
                </div>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <h1>Solusi Cerdas untuk Manajemen Inventaris Anda</h1>
                <p>Otomatiskan pelacakan stok, kelola pesanan, dan tingkatkan efisiensi bisnis Anda dengan platform yang mudah digunakan.</p>
            </div>
        </section>

        <section class="features">
            <div class="container">
                <h2 class="section-title">Fitur</h2>
                <div class="features-grid">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <h3>Pelacakan Real-Time</h3>
                        <p>Pantau tingkat persediaan Anda secara akurat dan real-time dari mana saja, kapan saja.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 12h16.5m-16.5 3.75h16.5M3.75 19.5h16.5M5.25 4.5h13.5a2.25 2.25 0 012.25 2.25v2.25a2.25 2.25 0 01-2.25 2.25H5.25a2.25 2.25 0 01-2.25-2.25V6.75a2.25 2.25 0 012.25-2.25z" />
                            </svg>
                        </div>
                        <h3>Manajemen Pesanan</h3>
                        <p>Kelola pesanan pembelian dan penjualan dengan mudah dalam satu sistem terpusat.</p>
                    </div>
                    <div class="feature-card">
                        <div class="feature-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" width="30" height="30">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 100 15 7.5 7.5 0 000-15zM21 21l-5.197-5.197" />
                            </svg>
                        </div>
                        <h3>Laporan & Analitik</h3>
                        <p>Dapatkan wawasan mendalam tentang tren penjualan dan kinerja inventaris Anda.</p>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Inventory Management.</p>
        </div>
    </footer>

</body>
</html>