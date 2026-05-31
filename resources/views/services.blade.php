@extends('layouts.app')

@section('content')
    <style>
        :root{
            --bg: #ffffff;
            --text: #111111;
            --muted: rgba(17,17,17,.65);
            --border: rgba(17,17,17,.08);
            --shadow: 0 20px 50px rgba(0,0,0,.10);
            --blue: #0071e3;
            --blue-hover: #0077ed;
            --radius-xl: 26px;
            --radius-lg: 18px;
        }

        .about-wrap{
            padding: 56px 0 48px;
        }

        .container{
            max-width: 1120px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero-card{
            border-radius: var(--radius-xl);
            background:
                radial-gradient(700px 260px at 50% -10%, rgba(0,113,227,.22), transparent 60%),
                radial-gradient(420px 160px at 18% 35%, rgba(0,0,0,.10), transparent 60%),
                linear-gradient(180deg, rgba(17,17,17,.03), rgba(17,17,17,.00));
            border: 1px solid rgba(17,17,17,.06);
            box-shadow: var(--shadow);
            padding: 28px;
            overflow: hidden;
        }

        .kicker{
            font-size: 12.5px;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: rgba(17,17,17,.56);
            margin-bottom: 14px;
        }

        h1{
            font-size: clamp(34px, 3.8vw, 52px);
            line-height: 1.05;
            letter-spacing: -0.03em;
            margin-bottom: 10px;
        }

        .lead{
            color: var(--muted);
            line-height: 1.7;
            max-width: 70ch;
            margin-bottom: 18px;
            font-size: 16.5px;
        }

        .hero-actions{
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            align-items: center;
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

        .section{
            padding: 26px 0;
        }

        .section-title{
            display: flex;
            align-items: baseline;
            justify-content: space-between;
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

        .cards{
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 16px;
        }

        .card{
            border-radius: var(--radius-lg);
            background: rgba(255,255,255,.78);
            border: 1px solid rgba(17,17,17,.07);
            padding: 16px;
            transition: transform .18s ease, box-shadow .18s ease, border-color .18s ease;
        }

        .card:hover{
            transform: translateY(-3px);
            box-shadow: 0 18px 45px rgba(0,0,0,.08);
            border-color: rgba(0,113,227,.25);
        }

        .card .t{
            font-weight: 750;
            letter-spacing: -.02em;
            margin-bottom: 6px;
        }

        .card .d{
            font-size: 13.5px;
            color: rgba(17,17,17,.62);
            line-height: 1.55;
        }

        .about-footer{
            padding-top: 18px;
            color: rgba(17,17,17,.55);
            font-size: 13.5px;
            text-align: center;
        }

        @media (max-width: 900px){
            .cards{ grid-template-columns: 1fr; }
            .about-wrap{ padding-top: 40px; }
        }
    </style>

    <div class="about-wrap">
        <div class="container">
            <div class="hero-card">
                <div class="kicker">Support • Services • Care</div>
                <h1>{{ $serv }}</h1>
                <p class="lead">{{ $info }}</p>

                <div class="hero-actions">
                    <a class="btn-primary" href="/contact">Contact support</a>
                    <a class="btn-ghost" href="/">Browse products</a>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Service highlights</h2>
                    <p>Designed to feel fast, clear, and effortless</p>
                </div>

                <div class="cards">
                    <div class="card">
                        <div class="t">Device setup</div>
                        <div class="d">Get started quickly with guided setup and best-practice recommendations.</div>
                    </div>
                    <div class="card">
                        <div class="t">Repairs & maintenance</div>
                        <div class="d">Reliable service options to keep your devices performing at their best.</div>
                    </div>
                    <div class="card">
                        <div class="t">Account assistance</div>
                        <div class="d">Help with sign-in, recovery, and recommendations for account security.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Ready when you are</h2>
                    <p>Get the help you need, without the hassle</p>
                </div>

                <div class="hero-actions" style="justify-content:center;">
                    <a class="btn-primary" href="/contact">Start a conversation</a>
                    <a class="btn-ghost" href="/about">Learn about us</a>
                </div>

                <div class="about-footer">
                    © {{ date('Y') }} Apple Store. All rights reserved.
                </div>
            </div>
        </div>
    </div>
@endsection
