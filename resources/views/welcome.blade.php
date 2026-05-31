@extends('layouts.app')
@section('content')
 
<main>
    <section class="hero">
        <div class="container hero-grid">
            <div>
                <div class="kicker">Built for performance • Designed for delight</div>
                <h1>
                    Welcome to Apple
                </h1>
                <p class="sub">
                    Experience the best technology on the market—crafted with precision, powered for everyday work and play.
                </p>

                <div class="hero-actions">
                    <a class="btn-primary" href="#">Shop Now</a>
                    <a class="btn-ghost" href="#">Learn more</a>
                </div>
            </div>

            <div class="hero-visual" aria-hidden="true">
                <div class="device"></div>
                <div class="specs">
                    <div class="spec">
                        <div class="label">Performance</div>
                        <div class="value">Next‑gen chips</div>
                    </div>
                    <div class="spec">
                        <div class="label">Display</div>
                        <div class="value">Super‑bright</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Featured</h2>
                <p>Popular picks, updated for the season</p>
            </div>

            <div class="product-grid">
                <div class="card">
                    <div class="top">
                        <div class="badge">iPhone</div>
                        <div class="price">From $799</div>
                    </div>
                    <div class="product-visual"></div>
                    <h3>iPhone 15</h3>
                    <p>All‑day battery, pro‑level performance, and a camera built for every moment.</p>
                    <a class="link-cta" href="#">Learn More →</a>
                </div>

                <div class="card">
                    <div class="top">
                        <div class="badge">Mac</div>
                        <div class="price">From $1,999</div>
                    </div>
                    <div class="product-visual" style="background: radial-gradient(100px 60px at 30% 30%, rgba(255,255,255,.75), rgba(255,255,255,0) 60%), linear-gradient(135deg, rgba(0,113,227,.18), rgba(0,0,0,0));"></div>
                    <h3>MacBook Pro</h3>
                    <p>Studio‑class power for creators, engineered to stay fast for the long run.</p>
                    <a class="link-cta" href="#">Learn More →</a>
                </div>

                <div class="card">
                    <div class="top">
                        <div class="badge">iPad</div>
                        <div class="price">From $999</div>
                    </div>
                    <div class="product-visual" style="background: radial-gradient(100px 60px at 30% 30%, rgba(255,255,255,.75), rgba(255,255,255,0) 60%), linear-gradient(135deg, rgba(0,113,227,.20), rgba(0,0,0,0));"></div>
                    <h3>iPad Pro</h3>
                    <p>Portability meets productivity—perfect for drawing, writing, and everything in between.</p>
                    <a class="link-cta" href="#">Learn More →</a>
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section-title">
                <h2>Why Apple</h2>
                <p>Simple, premium, and thoughtfully designed</p>
            </div>

            <div class="usp">
                <div class="usp-item">
                    <div class="t">Seamless experience</div>
                    <div class="d">Your devices work together—sync, share, and pick up exactly where you left off.</div>
                </div>
                <div class="usp-item">
                    <div class="t">Privacy built in</div>
                    <div class="d">Security features designed to protect what matters without slowing you down.</div>
                </div>
                <div class="usp-item">
                    <div class="t">Craft & performance</div>
                    <div class="d">Premium materials and engineering that deliver fluid, reliable power.</div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection