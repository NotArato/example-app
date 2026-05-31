@extends('layouts.app')

@section('content')
<section class="hero">
    <div class="container">
        <div class="hero-grid">
            <div>
                <div class="kicker">Products</div>
                <h1>Built for performance. Designed for real life.</h1>
                <p class="sub">
                    Browse our featured products and get the support you need—fast, friendly, and always on your side.
                </p>

                <div class="hero-actions">
                    <a class="btn-primary" href="/contact">Get product help</a>
                    <a class="btn-ghost" href="/services">See services</a>
                </div>
            </div>

            <div class="hero-visual" aria-hidden="true">
                <div class="device"></div>
                <div class="specs">
                    <div class="spec">
                        <div class="label">Performance</div>
                        <div class="value">Fast & smooth</div>
                    </div>
                    <div class="spec">
                        <div class="label">Support</div>
                        <div class="value">Human help</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Featured products</h2>
            <p>Simple picks to get started</p>
        </div>

        <div class="product-grid">
            <div class="card">
                <div class="top">
                    <div class="badge">Pro</div>
                    <div class="price">$999</div>
                </div>
                <div class="product-visual"></div>
                <h3>Apple Workstation</h3>
                <p>For creators and teams that need power, speed, and reliability every day.</p>
                <a class="link-cta" href="/contact">
                    Contact support <span aria-hidden="true">→</span>
                </a>
            </div>

            <div class="card">
                <div class="top">
                    <div class="badge">Popular</div>
                    <div class="price">$799</div>
                </div>
                <div class="product-visual"></div>
                <h3>Everyday Laptop</h3>
                <p>Lightweight and dependable—perfect for work, school, and everything in between.</p>
                <a class="link-cta" href="/contact">
                    Contact support <span aria-hidden="true">→</span>
                </a>
            </div>

            <div class="card">
                <div class="top">
                    <div class="badge">New</div>
                    <div class="price">$699</div>
                </div>
                <div class="product-visual"></div>
                <h3>Studio Tablet</h3>
                <p>Bring your workflow with you. Sketch, present, and collaborate with ease.</p>
                <a class="link-cta" href="/contact">
                    Contact support <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-title">
            <h2>Not sure what to choose?</h2>
            <p>We’ll point you in the right direction</p>
        </div>

        <div class="usp">
            <div class="usp-item">
                <div class="t">Fast answers</div>
                <div class="d">Get help quickly with the right specialist for your question.</div>
            </div>
            <div class="usp-item">
                <div class="t">Clear guidance</div>
                <div class="d">Compare options and find what fits your needs and budget.</div>
            </div>
            <div class="usp-item">
                <div class="t">Support that sticks</div>
                <div class="d">From setup to troubleshooting, we’re here when you need us.</div>
            </div>
        </div>
    </div>
</section>
@endsection
