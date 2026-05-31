@extends('layouts.app')
@section('content')
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
        }

        .contact-wrap{
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
            position: relative;
        }

        .kicker{
            font-size: 12.5px;
            letter-spacing: .14em;
            text-transform: uppercase;
            color: rgba(17,17,17,.56);
            margin-bottom: 14px;
        }

        .hero-card h1{
            font-size: clamp(34px, 3.8vw, 52px);
            line-height: 1.05;
            letter-spacing: -0.03em;
            margin-bottom: 10px;
        }

        .lead{
            color: rgba(17,17,17,.65);
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
            border: 1px solid rgba(17,17,17,.08);
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
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card .icon{
            width: 34px;
            height: 34px;
            border-radius: 14px;
            background: rgba(0,113,227,.10);
            border: 1px solid rgba(0,113,227,.18);
            display: grid;
            place-items: center;
            font-size: 16px;
        }

        .card .d{
            font-size: 13.5px;
            color: rgba(17,17,17,.62);
            line-height: 1.55;
        }

        .contact-grid{
            display: grid;
            grid-template-columns: 1fr .95fr;
            gap: 16px;
            align-items: start;
        }

        .panel{
            border-radius: var(--radius-xl);
            background: linear-gradient(180deg, rgba(245,245,247,.95), rgba(245,245,247,.70));
            border: 1px solid rgba(17,17,17,.07);
            padding: 18px;
            box-shadow: 0 10px 35px rgba(0,0,0,.04);
        }

        form{
            display: grid;
            gap: 12px;
        }

        label{
            font-size: 13.5px;
            color: rgba(17,17,17,.72);
            font-weight: 650;
            letter-spacing: -.01em;
        }

        input, textarea, select{
            width: 100%;
            border-radius: 14px;
            border: 1px solid rgba(17,17,17,.10);
            background: rgba(255,255,255,.85);
            padding: 12px 12px;
            font-size: 14.5px;
            outline: none;
            transition: border-color .15s ease, box-shadow .15s ease, background .15s ease;
        }

        textarea{
            min-height: 120px;
            resize: vertical;
        }

        input:focus, textarea:focus, select:focus{
            border-color: rgba(0,113,227,.35);
            box-shadow: 0 0 0 4px rgba(0,113,227,.10);
            background: rgba(255,255,255,1);
        }

        .form-actions{
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            align-items: center;
            justify-content: flex-start;
            margin-top: 2px;
        }

        .note{
            font-size: 12.5px;
            color: rgba(17,17,17,.55);
            line-height: 1.5;
        }

        .faq{
            display: grid;
            gap: 12px;
        }

        .faq-item{
            border-radius: var(--radius-lg);
            background: rgba(255,255,255,.78);
            border: 1px solid rgba(17,17,17,.07);
            padding: 14px;
        }

        .faq-q{
            font-weight: 750;
            letter-spacing: -.02em;
            margin-bottom: 6px;
        }

        .faq-a{
            font-size: 13.5px;
            color: rgba(17,17,17,.62);
            line-height: 1.6;
        }

        @media (max-width: 900px){
            .contact-grid{ grid-template-columns: 1fr; }
            .cards{ grid-template-columns: 1fr; }
            .contact-wrap{ padding-top: 40px; }
        }
    </style>

    <div class="contact-wrap">
        <div class="container">
            <div class="hero-card">
                <div class="kicker">Support • Contact • Care</div>
                <h1>{{ $contact }}</h1>
                <p class="lead">
                    Get help for your Apple Store experience—order support, product questions, and account assistance.
                    We’ll guide you to the right team, fast.
                </p>

                <div class="hero-actions">
                    <a class="btn-primary" href="#">Start a chat</a>
                    <a class="btn-ghost" href="mailto:support@example.com">Email support</a>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="section-title">
                    <h2>Choose a support option</h2>
                    <p>Typically available 24/7</p>
                </div>

                <div class="cards">
                    <div class="card">
                        <div class="t"><span class="icon">📞</span>Phone support</div>
                        <div class="d">
                            Talk to a specialist for help with orders, setup, and account questions.
                        </div>
                    </div>

                    <div class="card">
                        <div class="t"><span class="icon">💬</span>Chat support</div>
                        <div class="d">
                            Quick answers for product questions and troubleshooting—without waiting on hold.
                        </div>
                    </div>

                    <div class="card">
                        <div class="t"><span class="icon">✉️</span>Email support</div>
                        <div class="d">
                            Send details and we’ll respond with next steps and clear instructions.
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="section">
            <div class="container">
                <div class="contact-grid">
                    <div class="panel">
                        <div class="section-title" style="margin-bottom: 12px;">
                            <h2 style="margin:0; font-size:18px;">Send us a message</h2>
                            <p style="margin:0;">We’ll route you to the right team</p>
                        </div>

                        <form method="POST" action="#">
                            @csrf

                            <div>
                                <label for="name">Full name</label>
                                <input id="name" name="name" type="text" placeholder="Your name" required>
                            </div>

                            <div>
                                <label for="email">Email</label>
                                <input id="email" name="email" type="email" placeholder="you@example.com" required>
                            </div>

                            <div>
                                <label for="topic">Topic</label>
                                <select id="topic" name="topic" required>
                                    <option value="" selected disabled>Select a topic</option>
                                    <option>Order & billing</option>
                                    <option>Product question</option>
                                    <option>Account assistance</option>
                                    <option>Technical support</option>
                                </select>
                            </div>

                            <div>
                                <label for="message">Message</label>
                                <textarea id="message" name="message" placeholder="How can we help?" required></textarea>
                            </div>

                            <div class="form-actions">
                                <button class="btn-primary" type="submit">Submit message</button>
                                <div class="note">This form is visual-only (no backend submission yet).</div>
                            </div>
                        </form>
                    </div>

                    <div class="panel">
                        <div class="section-title" style="margin-bottom: 12px;">
                            <h2 style="margin:0; font-size:18px;">Quick answers</h2>
                            <p style="margin:0;">Before you reach out</p>
                        </div>

                        <div class="faq">
                            <div class="faq-item">
                                <div class="faq-q">How fast will I get a response?</div>
                                <div class="faq-a">Most requests receive a reply within 1–2 business days.</div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-q">What info should I include?</div>
                                <div class="faq-a">Include your email, device/product details, and a short description of the issue.</div>
                            </div>

                            <div class="faq-item">
                                <div class="faq-q">Can you help with order changes?</div>
                                <div class="faq-a">Yes—reach out with your order number and the change you’d like to make.</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="note" style="margin-top: 14px; text-align:center;">
                    © {{ date('Y') }} Apple Store. All rights reserved.
                </div>
            </div>
        </div>
    </div>
@endsection

