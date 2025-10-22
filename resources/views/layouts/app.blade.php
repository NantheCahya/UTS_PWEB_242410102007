<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>LiburanYuk - @yield('title')</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">

  <style>
    :root{
      --primary: #1ea7ff;
      --primary-600: #1790e6;
      --bg: #f6fbff;
      --muted: #6b7280;
      --card: #ffffff;
      font-family: 'Inter', system-ui, -apple-system, 'Segoe UI', Roboto, 'Helvetica Neue', Arial;
    }
    *{box-sizing:border-box}
    body{margin:0;background:var(--bg);color:#0f172a;min-height:100vh}

    /* layout utama */
    .app{display:flex;min-height:100vh;position:relative}

  /* sidebar */
    .sidebar{
      width:260px;
      background:linear-gradient(180deg,var(--primary),var(--primary-600));
      color:white;
      padding:24px;
      position:relative;
    }
    .sidebar .brand{font-weight:700;font-size:20px;margin-bottom:18px}
    .menu{list-style:none;padding:0;margin:0}
    .menu li{margin:12px 0}
    .menu a{
      color:rgba(255,255,255,0.95);
      text-decoration:none;
      display:flex;
      gap:10px;
      align-items:center;
      padding:8px;
      border-radius:8px;
    }
    .menu a.active, .menu a:hover{background:rgba(255,255,255,0.08)}

  /* konten utama */
    .main{flex:1;padding:28px;display:flex;flex-direction:column}
    header.topbar{display:flex;justify-content:space-between;align-items:center;margin-bottom:18px}
    .card{
      background:var(--card);
      padding:18px;
      border-radius:12px;
      box-shadow:0 6px 18px rgba(2,6,23,0.06)
    }

    /* grid wisata */
    .grid{display:grid;grid-template-columns:repeat(auto-fill,minmax(220px,1fr));gap:16px}
    .hero-img{width:100%;height:180px;object-fit:cover;border-radius:10px}

    /* tabel */
    table{width:100%;border-collapse:collapse}
    th,td{padding:10px;text-align:left;border-bottom:1px solid #eef2ff}

    /* footer */
    .footer{margin-top:auto;text-align:center;color:var(--muted);font-size:14px}

    /* responsif */
    @media (max-width:900px){
      .sidebar{display:none}
      .app{flex-direction:column}
      .main{padding:16px}
    }

    
    .login-page{
      display:flex;
      align-items:center;
      justify-content:center;
      min-height:100vh;
      background-size:cover;
      background-position:center;
      background-repeat:no-repeat;
      padding:40px; 
    }

    .login-card{
      width:360px;
      background:rgba(255,255,255,0.96);
      padding:28px 28px 22px 28px;
      border-radius:12px;
      box-shadow:0 12px 30px rgba(2,6,23,0.18);
      text-align:center; 
    }

    .login-card h3{
      margin:0 0 8px 0;
      font-size:22px;
      color:#0f172a;
      font-weight:700;
    }
    .login-card p.lead{
      margin:0 0 18px 0;
      color:var(--muted);
      font-size:14px;
    }

    .form-group{
      text-align:left; 
      margin-bottom:12px;
    }
    .form-group label{display:block;margin-bottom:6px;font-weight:600;color:#0b1220}
    .form-group input[type=text],
    .form-group input[type=password]{
      width:100%;
      padding:10px;
      border-radius:8px;
      border:1px solid #dbeafe;
      box-sizing:border-box;
    }

    .btn-primary{
      background:var(--primary);
      color:white;
      border:0;
      border-radius:8px;
      padding:10px 14px;
      cursor:pointer;
      width:100%;
      font-weight:600;
      margin-top:6px;
    }
    .btn-primary:hover{background:var(--primary-600)}

    
    .fade-in{
      animation: fadeIn 0.9s ease-in-out;
    }
    @keyframes fadeIn{
      from{opacity:0;transform:translateY(8px)}
      to{opacity:1;transform:translateY(0)}
    }
  </style>

  @stack('styles')
</head>
<body>
  @if(session()->has('username'))
  <div class="app">
    <aside class="sidebar">
      <div class="brand">LiburanYuk</div>
      <p style="font-size:13px;opacity:0.95">Selamat datang di LiburanYuk  jelajahi wisata Indonesia</p>
      <nav style="margin-top:20px">
        <ul class="menu">
          <li><a href="{{ route('dashboard') }}" class="{{ request()->is('dashboard') ? 'active' : '' }}">🏠 Dashboard</a></li>
          <li><a href="{{ route('pengelolaan') }}" class="{{ request()->is('pengelolaan') ? 'active' : '' }}">🗂 Pengelolaan</a></li>
          <li><a href="{{ route('profile') }}" class="{{ request()->is('profile') ? 'active' : '' }}">👤 Profile</a></li>
          <li><a href="{{ route('logout') }}">🔓 Logout</a></li>
        </ul>
      </nav>

      <div style="position:absolute;bottom:24px;left:24px;right:24px;font-size:13px;opacity:0.95">
        <div style="font-weight:600">LiburanYuk</div>
        <div style="font-size:12px;"></div>
      </div>
    </aside>

    <main class="main">
      <header class="topbar">
        <div>
          <h2 style="margin:0">@yield('title')</h2>
          <div style="color:var(--muted);font-size:14px">@yield('subtitle')</div>
        </div>

        <div>
          <div style="text-align:right;font-size:14px;color:var(--muted)">
            Selamat datang, <strong>{{ session('username') }}</strong>
          </div>
        </div>
      </header>

      <section>
        @yield('content')
      </section>

      <div class="footer">© {{ date('Y') }} LiburanYuk — Explore Indonesia</div>
    </main>
  </div>

  @else
  <div class="login-page fade-in" style="background-image:url('/images/indonesia-bg.jpg')">
    <div class="login-card">
      <h3>LiburanYuk</h3>
      <p class="lead">Masuk untuk menjelajahi wisata di negerimu!</p>
      @yield('content')
    </div>
  </div>
  @endif

  @stack('scripts')
</body>
</html>
