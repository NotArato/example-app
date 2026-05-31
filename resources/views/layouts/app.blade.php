<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apple Store</title>

    <style>
        :root{
            --bg: #ffffff;
            --text: #111111;
            --muted: rgba(17,17,17,.65);
            --card: rgba(245,245,247,.9);
            --border: rgba(17,17,17,.08);
            --shadow: 0 20px 50px rgba(0,0,0,.10);
            --blue: #0071e3;
            --blue-hover: #0077ed;
            --radius-xl: 26px;
            --radius-lg: 18px;
            --radius-md: 14px;
        }

        * { margin: 0; padding: 0; box-sizing: border-box; }

        body{
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            background: var(--bg);
            color: var(--text);
        }

        a{ color: inherit; text-decoration: none; }

        .container{
            max-width: 1120px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header{
            position: sticky;
            top: 0;
            z-index: 50;
            background: rgba(255,255,255,.75);
            backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(17,17,17,.06);
        }

        .nav{
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .brand{
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 650;
            letter-spacing: .2px;
        }

        .brand .logo{
            width: 34px;
            height: 34px;
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(0,113,227,.18), rgba(0,0,0,0));
            display: grid;
            place-items: center;
            font-size: 18px;
        }

        .links{
            display: flex;
            align-items: center;
            gap: 18px;
        }

        .links a{
            font-size: 13.5px;
            color: rgba(17,17,17,.72);
            padding: 10px 10px;
            border-radius: 12px;
            transition: background .2s ease, color .2s ease;
        }

        .links a:hover{
            background: rgba(17,17,17,.05);
            color: rgba(17,17,17,.92);
        }

        .nav-cta{
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .pill{
            font-size: 13.5px;
            padding: 10px 14px;
            border-radius: 999px;
            border: 1px solid var(--border);
            background: rgba(255,255,255,.8);
            color: rgba(17,17,17,.78);
            transition: transform .15s ease, background .15s ease;
        }

        .pill:hover{
            transform: translateY(-1px);
            background: rgba(255,255,255,1);
        }

        .hamburger{
            display: none;
            width: 40px;
            height: 40px;
            border-radius: 14px;
            border: 1px solid var(--border);
            background: rgba(255,255,255,.75);
        }

        .hamburger div{
            width: 18px;
            height: 2px;
            background: rgba(17,17,17,.7);
            margin: 4px auto;
            border-radius: 2px;
        }

        /* Hero */
        .hero{
            padding: 56px 0 28px;
            position: relative;
            overflow: hidden;
        }

        .hero::before{
            content: "";
            position: absolute;
            inset: -120px -40px auto -40px;
            height: 520px;
            background:
                radial-gradient(700px 260px at 50% 0%, rgba(0,113,227,.22), transparent 65%),
                radial-gradient(420px 160px at 18% 30%, rgba(0,0,0,.12), transparent 60%),
                radial-gradient(420px 160px at 82% 30%, rgba(0,0,0,.08), transparent 60%),
                linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,.04) 100%);
            pointer-events: none;
        }

        .hero-grid{
            display: grid;
            grid-template-columns: 1.15fr .85fr;
            gap: 28px;
            align-items: center;
            position: relative;
        }

        .kicker{
            font-size: 12.5px;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: rgba(17,17,17,.56);
            margin-bottom: 14px;
        }

        h1{
            font-size: clamp(38px, 4.4vw, 60px);
            line-height: 1.02;
            letter-spacing: -0.03em;
            margin-bottom: 14px;
        }

        .sub{
            font-size: 16.5px;
            color: var(--muted);
            line-height: 1.6;
            max-width: 54ch;
            margin-bottom: 22px;
        }

        .hero-actions{
            display: flex;
            gap: 12px;
            align-items: center;
            flex-wrap: wrap;
        }

        .btn-primary{
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 18px;
            border-radius: 999px;
            background: var(--blue);
            color: #fff;
            font-weight: 600;
            border: 1px solid rgba(0,113,227,.35);
            transition: background .15s ease, transform .15s ease;
        }
        .btn-primary:hover{
            background: var(--blue-hover);
            transform: translateY(-1px);
        }

        .btn-ghost{
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 16px;
            border-radius: 999px;
            background: rgba(255,255,255,.75);
            border: 1px solid var(--border);
            color: rgba(17,17,17,.86);
            font-weight: 600;
            transition: transform .15s ease, background .15s ease;
        }
        .btn-ghost:hover{
            transform: translateY(-1px);
            background: rgba(255,255,255,1);
        }

        .hero-visual{
            border-radius: var(--radius-xl);
            background:
                radial-gradient(120px 120px at 20% 20%, rgba(255,255,255,.6), rgba(255,255,255,0) 60%),
                linear-gradient(135deg, rgba(0,113,227,.18), rgba(0,0,0,.0)),
                linear-gradient(180deg, rgba(0,0,0,.06), rgba(0,0,0,.0));
            border: 1px solid rgba(17,17,17,.07);
            box-shadow: var(--shadow);
            padding: 18px;
            position: relative;
            overflow: hidden;
            min-height: 310px;
        }

        /* iPhone-like silhouette */
        .device{
            position: absolute;
            left: 50%;
            top: 52%;
            transform: translate(-50%, -50%);
            width: min(260px, 78%);
            height: 320px;
            border-radius: 48px;
            background:
                linear-gradient(180deg, rgba(255,255,255,.65), rgba(255,255,255,.0)),
                linear-gradient(135deg, rgba(0,0,0,.18), rgba(0,0,0,.02));
            border: 1px solid rgba(17,17,17,.12);
            box-shadow: 0 24px 70px rgba(0,0,0,.18);
        }
        .device::before{
            content:"";
            position: absolute;
            inset: 18px 16px 90px 16px;
            border-radius: 38px;
            background:
                radial-gradient(260px 150px at 50% 15%, rgba(0,113,227,.35), rgba(0,113,227,0) 62%),
                linear-gradient(180deg, rgba(0,0,0,.75), rgba(0,0,0,.20));
            border: 1px solid rgba(255,255,255,.10);
        }
        .device::after{
            content:"";
            position: absolute;
            left: 50%;
            top: 78px;
            transform: translateX(-50%);
            width: 110px;
            height: 28px;
            border-radius: 999px;
            background: rgba(0,0,0,.35);
            border: 1px solid rgba(255,255,255,.08);
        }

        .specs{
            position: absolute;
            left: 18px;
            right: 18px;
            bottom: 16px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .spec{
            padding: 12px 12px;
            border-radius: 16px;
            background: rgba(255,255,255,.78);
            border: 1px solid rgba(17,17,17,.06);
        }
        .spec .label{
            font-size: 12px;
            color: rgba(17,17,17,.55);
            margin-bottom: 4px;
        }
        .spec .value{
            font-size: 14px;
            font-weight: 650;
            letter-spacing: -.01em;
        }

        /* Sections */
        .section{
            padding: 26px 0;
        }

        .section-title{
            display: flex;
            justify-content: space-between;
            align-items: baseline;
            gap: 16px;
            margin-bottom: 14px;
        }

        .section-title h2{
            font-size: 20px;
            letter-spacing: -.02em;
        }
        .section-title p{
            font-size: 13.5px;
            color: rgba(17,17,17,.55);
        }

        .product-grid{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .card{
            border-radius: var(--radius-lg);
            background: linear-gradient(180deg, rgba(245,245,247,.95), rgba(245,245,247,.70));
            border: 1px solid rgba(17,17,17,.07);
            padding: 18px;
            transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
            position: relative;
            overflow: hidden;
        }

        .card:hover{
            transform: translateY(-4px);
            box-shadow: 0 18px 45px rgba(0,0,0,.10);
            border-color: rgba(0,113,227,.25);
        }

        .card .top{
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .badge{
            font-size: 12px;
            padding: 8px 10px;
            border-radius: 999px;
            background: rgba(0,113,227,.10);
            border: 1px solid rgba(0,113,227,.18);
            color: rgba(0,113,227,.95);
            font-weight: 650;
        }

        .price{
            font-weight: 700;
            color: rgba(17,17,17,.88);
            letter-spacing: -.02em;
        }

        .product-visual{
            height: 120px;
            border-radius: 18px;
            border: 1px solid rgba(17,17,17,.06);
            background:
                radial-gradient(100px 60px at 30% 30%, rgba(255,255,255,.75), rgba(255,255,255,0) 60%),
                linear-gradient(135deg, rgba(0,113,227,.22), rgba(0,0,0,0));
            position: relative;
            overflow: hidden;
            margin: 12px 0 14px;
        }
        .product-visual::after{
            content:"";
            position: absolute;
            inset: -40% -30%;
            background: linear-gradient(120deg, rgba(255,255,255,.0), rgba(255,255,255,.35), rgba(255,255,255,.0));
            transform: rotate(18deg);
            opacity: .35;
        }

        .card h3{
            font-size: 18px;
            letter-spacing: -.02em;
            margin-bottom: 6px;
        }

        .card p{
            color: rgba(17,17,17,.60);
            font-size: 13.5px;
            line-height: 1.5;
            margin-bottom: 14px;
        }

        .link-cta{
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 650;
            color: rgba(0,113,227,.98);
            font-size: 13.5px;
            padding: 10px 12px;
            border-radius: 999px;
            border: 1px solid rgba(0,113,227,.18);
            background: rgba(0,113,227,.06);
            transition: transform .15s ease, background .15s ease;
        }
        .link-cta:hover{
            transform: translateY(-1px);
            background: rgba(0,113,227,.10);
        }

        /* USP */
        .usp{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }
        .usp-item{
            border-radius: var(--radius-lg);
            border: 1px solid rgba(17,17,17,.07);
            background: rgba(255,255,255,.75);
            padding: 16px;
        }
        .usp-item .t{
            font-weight: 750;
            margin-bottom: 6px;
            letter-spacing: -.02em;
        }
        .usp-item .d{
            font-size: 13.5px;
            line-height: 1.55;
            color: rgba(17,17,17,.62);
        }

        /* Footer */
        footer{
            padding: 36px 0 50px;
            border-top: 1px solid rgba(17,17,17,.06);
            margin-top: 12px;
        }
        .footer-grid{
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
        }
        .footer-links{
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }
        .footer-links a{
            font-size: 13.5px;
            color: rgba(17,17,17,.62);
            padding: 8px 10px;
            border-radius: 12px;
        }
        .footer-links a:hover{
            background: rgba(17,17,17,.05);
            color: rgba(17,17,17,.88);
        }

        /* Responsive */
        @media (max-width: 900px){
            .hero-grid{ grid-template-columns: 1fr; }
            .hero-visual{ min-height: 290px; }
            .product-grid{ grid-template-columns: 1fr; }
            .usp{ grid-template-columns: 1fr; }
            .links{ display: none; }
            .hamburger{ display: block; }
        }
    </style>
</head>

<body>
<header>
    <div class="container nav">
        <div class="brand" aria-label="Brand">
            <div class="logo">🍎</div>
            <div>Apple Store</div>
        </div>

        @include('components.nav')

        <div class="nav-cta">
            <a class="pill" href="#">Search</a>
            <button class="hamburger" aria-label="Menu" type="button">
                <div></div><div></div><div></div>
            </button>
        </div>
    </div>
</header>

@yield('content')

<footer>
    <div class="container footer-grid">
        <div style="font-weight:650; letter-spacing:-.01em;">Apple Store</div>
        <div class="footer-links" aria-label="Footer links">
            <a href="#">Privacy</a>
            <a href="#">Terms</a>
            <a href="#">Support</a>
        </div>
        <div style="font-size:13.5px; color: rgba(17,17,17,.55);">
            © {{ date('Y') }} Apple Store. All rights reserved.
        </div>
    </div>
</footer>
</body>
</html>
