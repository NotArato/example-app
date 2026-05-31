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

        .about-hero{
            border-radius: var(--radius-xl);
            background:
                radial-gradient(700px 260px at 50% -10%, rgba(0,113,227,.22), transparent 60%),
                radial-gradient(420px 160px at 18% 35%, rgba(0,0,0,.10), transparent 60%),
                linear-gradient(180deg, rgba(17,17,17,.03), rgba(17,17,17,.00));
            border: 1px solid rgba(17,17,17,.06);
            box-shadow: var(--shadow);
            padding: 28px;
            overflow: hidden;
            position: relative;
        }

        .kicker{
            font-size: 12.5px;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: rgba(17,17,17,.56);
            margin-bottom: 14px;
        }

        .about-hero h1{
            font-size: clamp(34px, 3.8vw, 52px);
            line-height: 1.05;
            letter-spacing: -0.03em;
            margin-bottom: 10px;
        }

        .about-hero p{
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
            transition: transform .18s ease, box-shadow .18s ease;
        }

        .card:hover{
            transform: translateY(-3px);
            box-shadow: 0 18px 45px rgba(0,0,0,.08);
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

        .values{
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px;
        }

        .value-panel{
            border-radius: var(--radius-xl);
            background: linear-gradient(180deg, rgba(245,245,247,.95), rgba(245,245,247,.70));
            border: 1px solid rgba(17,17,17,.07);
            padding: 18px;
        }

        .value-panel h3{
            font-size: 18px;
            letter-spacing: -.02em;
            margin-bottom: 8px;
        }

        .value-panel p{
            color: rgba(17,17,17,.62);
            line-height: 1.7;
            font-size: 14.5px;
        }

        .about-footer{
            padding-top: 18px;
            color: rgba(17,17,17,.55);
            font-size: 13.5px;
            text-align: center;
        }

        @media (max-width: 900px){
            .cards{ grid-template-columns: 1fr; }
            .values{ grid-template-columns: 1fr; }
            .about-wrap{ padding-top: 40px; }
        }
    </style>

    <div class="about-wrap">
        <div class="container">
            <div class="about-hero">
                <div class="kicker">Design • Performance • Privacy</div>
                <h1>{{ $abouttitle }}</h1>
                <p>
                    We build experiences that feel effortless. Every detail—from engineering to interaction—aims to deliver
                    clarity, speed, and confidence in how your devices work together.
                </p>

                <div class="hero-actions">
                    <a class="btn-primary" href="/">Explore products</a>
                    <a class="btn-ghost" href="/contact">Talk to us</a>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="section-title">
                    <h2>What we stand for</h2>
                    <p>Simple, premium, and thoughtfully designed</p>
                </div>

                <div class="cards">
                    <div class="card">
                        <div class="t">Craft & engineering</div>
                        <div class="d">Premium materials and performance-minded design that stays fast over time.</div>
                    </div>
                    <div class="card">
                        <div class="t">Privacy by default</div>
                        <div class="d">Security features that protect what matters—without getting in your way.</div>
                    </div>
                    <div class="card">
                        <div class="t">Seamless teamwork</div>
                        <div class="d">Devices that work together so you can move fluidly between work, play, and everything in between.</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="values">
                    <div class="value-panel">
                        <h3>Our approach</h3>
                        <p>
                            We focus on the details that change everyday life: responsive performance, intuitive interfaces, and
                            consistent quality across every product experience.
                        </p>
                    </div>
                    <div class="value-panel">
                        <h3>How we improve</h3>
                        <p>
                            We iterate relentlessly—refining design, tightening performance, and reducing friction—so each update
                            feels like progress, not disruption.
                        </p>
                    </div>
                </div>

                <div class="about-footer">
                    © {{ date('Y') }} Apple Store. All rights reserved.
                </div>
            </div>
        </div>
    </div>
@endsection
