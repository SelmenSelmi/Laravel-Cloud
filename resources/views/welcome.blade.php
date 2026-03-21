<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Summit Flow Plumbing | Reliable Plumbing Across the USA</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Bebas+Neue&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #f2f5f8;
            --surface: #ffffff;
            --ink: #0f1d2f;
            --muted: #4d5d72;
            --brand: #0a84d8;
            --brand-deep: #0662a5;
            --accent: #ff7f2a;
            --line: #d5e1eb;
            --ok: #11b981;
            --radius-lg: 24px;
            --radius-md: 16px;
            --shadow: 0 24px 50px rgba(9, 37, 63, 0.14);
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Outfit, "Segoe UI", sans-serif;
            color: var(--ink);
            background:
                radial-gradient(circle at 15% 8%, #d9eefc 0%, transparent 36%),
                radial-gradient(circle at 90% 20%, #ffe7d5 0%, transparent 42%),
                var(--bg);
            line-height: 1.5;
        }

        img {
            max-width: 100%;
            display: block;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1140px, 92%);
            margin: 0 auto;
        }

        .pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 14px;
            border-radius: 999px;
            border: 1px solid var(--line);
            background: #ffffffb8;
            font-size: 0.84rem;
            color: var(--muted);
            backdrop-filter: blur(8px);
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            border-radius: 999px;
            padding: 14px 24px;
            font-weight: 700;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
        }

        .btn-primary {
            color: #fff;
            background: linear-gradient(130deg, var(--brand), var(--brand-deep));
            box-shadow: 0 12px 25px rgba(8, 113, 191, 0.35);
        }

        .btn-secondary {
            background: #fff;
            color: var(--ink);
            border: 1px solid var(--line);
        }

        .site-header {
            padding: 22px 0;
        }

        .header-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 20px;
            padding: 12px 18px;
            background: #ffffffcc;
            border: 1px solid #cfe1ef;
            border-radius: 999px;
            backdrop-filter: blur(8px);
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            font-weight: 700;
            letter-spacing: 0.2px;
        }

        .brand-mark {
            width: 42px;
            height: 42px;
            border-radius: 12px;
            display: grid;
            place-items: center;
            font-size: 20px;
            background: linear-gradient(140deg, #0a84d8, #08538b);
            color: #fff;
        }

        .header-actions {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .hero {
            padding: 36px 0 64px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            gap: 32px;
            align-items: center;
        }

        .hero-copy h1 {
            margin-top: 18px;
            font-family: "Bebas Neue", sans-serif;
            font-size: clamp(2.8rem, 6.4vw, 5.8rem);
            line-height: 0.9;
            letter-spacing: 0.02em;
            text-transform: uppercase;
        }

        .hero-copy p {
            margin-top: 20px;
            max-width: 58ch;
            font-size: 1.08rem;
            color: var(--muted);
        }

        .hero-cta {
            margin-top: 28px;
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .trust-row {
            margin-top: 24px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .hero-card {
            position: relative;
            background: var(--surface);
            border: 1px solid #cfe1ef;
            border-radius: var(--radius-lg);
            overflow: hidden;
            box-shadow: var(--shadow);
        }

        .hero-card img {
            aspect-ratio: 4 / 3;
            width: 100%;
            object-fit: cover;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            padding: 14px;
            background: #fff;
            border-top: 1px solid var(--line);
        }

        .hero-stats strong {
            display: block;
            font-size: 1.2rem;
            color: var(--brand-deep);
        }

        .hero-stats span {
            color: var(--muted);
            font-size: 0.84rem;
        }

        section {
            padding: 70px 0;
        }

        .section-title {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 14px;
            margin-bottom: 26px;
        }

        .section-title h2 {
            font-size: clamp(1.8rem, 3vw, 2.8rem);
            line-height: 1.08;
        }

        .section-title p {
            max-width: 56ch;
            color: var(--muted);
        }

        .services-grid {
            display: grid;
            gap: 14px;
            grid-template-columns: repeat(3, minmax(0, 1fr));
        }

        .service {
            padding: 22px;
            border: 1px solid var(--line);
            border-radius: var(--radius-md);
            background: linear-gradient(160deg, #ffffff, #f7fbff);
        }

        .service h3 {
            margin: 10px 0 8px;
            font-size: 1.1rem;
        }

        .service p {
            color: var(--muted);
            font-size: 0.95rem;
        }

        .tag {
            display: inline-block;
            padding: 6px 10px;
            border-radius: 999px;
            background: #e5f4ff;
            color: #075086;
            font-size: 0.76rem;
            font-weight: 700;
            letter-spacing: 0.04em;
            text-transform: uppercase;
        }

        .split {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            align-items: stretch;
        }

        .image-panel {
            border-radius: var(--radius-lg);
            overflow: hidden;
            min-height: 360px;
            border: 1px solid #cfe1ef;
        }

        .image-panel img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .reasons {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            padding: 24px;
        }

        .reason {
            padding: 16px 0;
            border-bottom: 1px dashed #cde0ef;
        }

        .reason:last-child {
            border-bottom: 0;
            padding-bottom: 0;
        }

        .reason h4 {
            margin-bottom: 4px;
        }

        .reason p {
            color: var(--muted);
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(4, minmax(0, 1fr));
            gap: 12px;
        }

        .gallery img {
            border-radius: var(--radius-md);
            border: 1px solid #cfe1ef;
            aspect-ratio: 4 / 3;
            object-fit: cover;
        }

        .testimonials {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 12px;
        }

        .quote {
            padding: 20px;
            border-radius: var(--radius-md);
            background: #fff;
            border: 1px solid var(--line);
        }

        .quote p {
            color: #24364b;
        }

        .quote strong {
            display: block;
            margin-top: 12px;
            font-size: 0.9rem;
            color: var(--brand-deep);
        }

        .cta-band {
            border-radius: 28px;
            border: 1px solid #88c6ef;
            padding: 34px;
            background: linear-gradient(130deg, #0976c3, #0f5281);
            color: #fff;
            display: grid;
            gap: 18px;
            grid-template-columns: 1.2fr 0.8fr;
            align-items: center;
        }

        .cta-band h3 {
            font-size: clamp(1.6rem, 3vw, 2.6rem);
            line-height: 1.1;
        }

        .cta-band p {
            color: #d8ecfb;
            margin-top: 8px;
        }

        .cta-actions {
            display: flex;
            justify-content: end;
            flex-wrap: wrap;
            gap: 10px;
        }

        .btn-light {
            background: #fff;
            color: #114066;
        }

        .btn-ghost {
            border: 1px solid #9dd2f4;
            color: #fff;
            background: #ffffff1c;
        }

        .form-wrap {
            border-radius: 28px;
            border: 1px solid #88c6ef;
            padding: 34px;
            background: linear-gradient(130deg, #0976c3, #0f5281);
            color: #fff;
            display: grid;
            gap: 22px;
            grid-template-columns: 1fr;
        }

        .form-intro h3 {
            font-size: clamp(1.6rem, 3vw, 2.6rem);
            line-height: 1.1;
        }

        .form-intro p {
            color: #d8ecfb;
            margin-top: 8px;
            max-width: 60ch;
        }

        .alert {
            border-radius: 14px;
            padding: 12px 14px;
            font-size: 0.95rem;
        }

        .alert-success {
            background: #e6fbf3;
            border: 1px solid #9de4c9;
            color: #0f6848;
        }

        .alert-error {
            background: #fff0f0;
            border: 1px solid #ffcbcb;
            color: #8a2222;
        }

        .request-form {
            display: grid;
            gap: 14px;
        }

        .form-row {
            display: grid;
            gap: 14px;
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .field {
            display: grid;
            gap: 6px;
        }

        .field label {
            font-size: 0.9rem;
            font-weight: 600;
            color: #e6f4ff;
        }

        .field input,
        .field textarea {
            width: 100%;
            border-radius: 12px;
            border: 1px solid #9acdf0;
            background: #ffffff;
            color: #17344d;
            padding: 12px 14px;
            font-family: inherit;
            font-size: 0.97rem;
        }

        .field textarea {
            min-height: 130px;
            resize: vertical;
        }

        .field input:focus,
        .field textarea:focus {
            outline: 2px solid #79c3f5;
            outline-offset: 1px;
            border-color: #79c3f5;
        }

        .field small {
            color: #ffd4d4;
            font-size: 0.83rem;
            min-height: 1.2em;
        }

        .form-submit {
            margin-top: 4px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
        }

        .form-submit p {
            color: #d8ecfb;
            font-size: 0.9rem;
        }

        .site-footer {
            padding: 24px 0 44px;
            color: #48617d;
            font-size: 0.92rem;
        }

        .footer-inner {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 12px;
        }

        .fade-up {
            animation: fadeUp 0.7s ease both;
        }

        .delay-1 {
            animation-delay: 0.08s;
        }

        .delay-2 {
            animation-delay: 0.16s;
        }

        .delay-3 {
            animation-delay: 0.24s;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(18px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @media (max-width: 980px) {
            .hero-grid,
            .split,
            .cta-band {
                grid-template-columns: 1fr;
            }

            .form-row {
                grid-template-columns: 1fr;
            }

            .cta-actions {
                justify-content: start;
            }

            .services-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .gallery {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .testimonials {
                grid-template-columns: 1fr;
            }

            .header-inner {
                border-radius: 18px;
            }
        }

        @media (max-width: 640px) {
            .header-actions {
                display: none;
            }

            .hero {
                padding-top: 16px;
            }

            .services-grid,
            .gallery {
                grid-template-columns: 1fr;
            }

            .hero-stats {
                grid-template-columns: 1fr 1fr;
            }
        }
        /* Toast styles */
        .toast {
            position: fixed;
            right: 20px;
            bottom: 20px;
            background: linear-gradient(180deg, #fbfffd, #e6fbf3);
            border: 1px solid #9de4c9;
            color: #0f6848;
            padding: 14px 18px;
            border-radius: 12px;
            box-shadow: 0 8px 24px rgba(9,37,63,0.12);
            display: flex;
            align-items: center;
            gap: 12px;
            transform: translateY(14px);
            opacity: 0;
            transition: transform 0.28s cubic-bezier(.22,.9,.31,1), opacity 0.28s ease;
            z-index: 9999;
            max-width: calc(100% - 48px);
        }

        .toast.show {
            transform: translateY(0);
            opacity: 1;
        }

        .toast .toast-msg {
            font-size: 0.95rem;
        }

        .toast .toast-close {
            background: transparent;
            border: 0;
            font-size: 18px;
            line-height: 1;
            color: inherit;
            cursor: pointer;
            padding: 6px;
        }

    </style>
</head>
<body>
    <header class="site-header">
        <div class="container header-inner fade-up">
            <a class="brand" href="#">
                <span class="brand-mark">&#128703;</span>
                <span>Summit Flow Plumbing</span>
            </a>

            <div class="header-actions">
                <a class="pill" href="tel:+18005551234">24/7 Emergency: (800) 555-1234</a>
                @if (Route::has('login'))
                    @auth
                        <a class="btn btn-secondary" href="{{ route('dashboard') }}">Dashboard</a>
                    @else
                        <a class="btn btn-secondary" href="{{ route('login') }}">Client Login</a>
                    @endauth
                @endif
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container hero-grid">
                <div class="hero-copy fade-up delay-1">
                    <span class="pill">Licensed - Bonded - Insured - Serving major U.S. metro areas</span>
                    <h1>Modern Plumbing. Fast Response. Zero Stress.</h1>
                    <p>
                        From emergency burst pipes to water heater upgrades and whole-home repiping,
                        our certified technicians deliver premium service with transparent pricing and same-day scheduling.
                    </p>

                    <div class="hero-cta">
                        <a class="btn btn-primary" href="tel:+18005551234">Call Now</a>
                        <a class="btn btn-secondary" href="#quote">Get Free Quote</a>
                    </div>

                    <div class="trust-row">
                        <span class="pill">4.9/5 average rating</span>
                        <span class="pill">2-hour arrival windows</span>
                        <span class="pill">Upfront flat-rate pricing</span>
                    </div>
                </div>

                <article class="hero-card fade-up delay-2">
                    <img
                        src="https://images.pexels.com/photos/8486972/pexels-photo-8486972.jpeg?auto=compress&cs=tinysrgb&w=1400"
                        alt="Professional plumber fixing kitchen sink plumbing"
                    >
                    <div class="hero-stats">
                        <div>
                            <strong>25+</strong>
                            <span>Years Experience</span>
                        </div>
                        <div>
                            <strong>12k+</strong>
                            <span>Homes Served</span>
                        </div>
                        <div>
                            <strong>99%</strong>
                            <span>On-Time Arrivals</span>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-title fade-up">
                    <div>
                        <span class="tag">Services</span>
                        <h2>Everything your home or business needs</h2>
                    </div>
                    <p>
                        High-end workmanship for everyday plumbing and complex infrastructure upgrades,
                        with clean finishes and code-compliant installations.
                    </p>
                </div>

                <div class="services-grid">
                    <article class="service fade-up delay-1">
                        <span class="tag">Emergency</span>
                        <h3>24/7 Emergency Repairs</h3>
                        <p>Immediate response for burst pipes, overflows, and major leaks to protect your property fast.</p>
                    </article>
                    <article class="service fade-up delay-2">
                        <span class="tag">Drain</span>
                        <h3>Hydro Jetting & Drain Cleaning</h3>
                        <p>Advanced tools remove deep clogs, grease buildup, and recurring blockages safely.</p>
                    </article>
                    <article class="service fade-up delay-3">
                        <span class="tag">Water</span>
                        <h3>Water Heater Installs</h3>
                        <p>Tank and tankless upgrades with energy-efficient systems sized to your home usage.</p>
                    </article>
                    <article class="service fade-up delay-1">
                        <span class="tag">Sewer</span>
                        <h3>Sewer Line Repair</h3>
                        <p>Camera inspections and trenchless repair solutions to reduce downtime and disruption.</p>
                    </article>
                    <article class="service fade-up delay-2">
                        <span class="tag">Remodel</span>
                        <h3>Kitchen & Bath Remodeling</h3>
                        <p>Precision plumbing rough-ins and finish work for luxury and modern renovation projects.</p>
                    </article>
                    <article class="service fade-up delay-3">
                        <span class="tag">Commercial</span>
                        <h3>Commercial Plumbing</h3>
                        <p>Reliable maintenance and repair plans for offices, retail spaces, and multi-unit properties.</p>
                    </article>
                </div>
            </div>
        </section>

        <section>
            <div class="container split">
                <div class="image-panel fade-up">
                    <img
                        src="https://images.pexels.com/photos/8005369/pexels-photo-8005369.jpeg?auto=compress&cs=tinysrgb&w=1400"
                        alt="Plumber using tools to repair plumbing under sink"
                    >
                </div>

                <div class="reasons fade-up delay-1">
                    <span class="tag">Why Choose Us</span>
                    <h2 style="margin-top: 12px; font-size: clamp(1.7rem, 3vw, 2.4rem);">Built for clients who expect premium service</h2>
                    <div class="reason">
                        <h4>Transparent estimates before we begin</h4>
                        <p>No surprise charges. You approve every scope and rate in advance.</p>
                    </div>
                    <div class="reason">
                        <h4>Uniformed, background-checked technicians</h4>
                        <p>Professional teams that treat your home or office with care and respect.</p>
                    </div>
                    <div class="reason">
                        <h4>Industry-leading warranty coverage</h4>
                        <p>Parts and labor backed by strong guarantees for long-term confidence.</p>
                    </div>
                    <div class="reason">
                        <h4>Digital service reports with photos</h4>
                        <p>Receive clear documentation and recommendations after each visit.</p>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-title fade-up">
                    <div>
                        <span class="tag">Projects</span>
                        <h2>Recent work across U.S. homes</h2>
                    </div>
                    <p>From modern condo retrofits to suburban whole-home repiping projects.</p>
                </div>

                <div class="gallery">
                    <img class="fade-up delay-1" src="https://images.pexels.com/photos/5989924/pexels-photo-5989924.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Modern bathroom plumbing installation">
                    <img class="fade-up delay-2" src="https://images.pexels.com/photos/669615/pexels-photo-669615.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Plumbing pipe system in utility room">
                    <img class="fade-up delay-3" src="https://images.pexels.com/photos/8112172/pexels-photo-8112172.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Plumber installing faucet hardware">
                    <img class="fade-up delay-1" src="https://images.pexels.com/photos/6474470/pexels-photo-6474470.jpeg?auto=compress&cs=tinysrgb&w=1200" alt="Technician working with plumbing tools">
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="section-title fade-up">
                    <div>
                        <span class="tag">Reviews</span>
                        <h2>What customers are saying</h2>
                    </div>
                </div>

                <div class="testimonials">
                    <article class="quote fade-up delay-1">
                        <p>"Super clean work and very professional. They solved a leak another company missed for months."</p>
                        <strong>Sarah M. - Austin, TX</strong>
                    </article>
                    <article class="quote fade-up delay-2">
                        <p>"Same-day service, clear pricing, and excellent communication from start to finish."</p>
                        <strong>David R. - Phoenix, AZ</strong>
                    </article>
                    <article class="quote fade-up delay-3">
                        <p>"Our go-to commercial plumbing team. Reliable, fast, and always code compliant."</p>
                        <strong>Kendall Property Group - Charlotte, NC</strong>
                    </article>
                </div>
            </div>
        </section>

        <section id="quote">
            <div class="container">
                <div class="form-wrap fade-up">
                    <div class="form-intro">
                        <h3>Tell us about your issue and we will get back to you fast.</h3>
                        <p>
                            Fill out the form below with your contact details and a short description of the issue.
                            Our team will review it and reach out with next steps.
                        </p>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-error">Please fix the highlighted fields and submit the form again.</div>
                    @endif

                    <form class="request-form" action="{{ route('service-requests.store') }}" method="POST">
                        @csrf

                        <div class="form-row">
                            <div class="field">
                                <label for="first_name">First Name</label>
                                <input id="first_name" name="first_name" type="text" value="{{ old('first_name') }}" required>
                                <small>{{ $errors->first('first_name') }}</small>
                            </div>
                            <div class="field">
                                <label for="last_name">Last Name</label>
                                <input id="last_name" name="last_name" type="text" value="{{ old('last_name') }}" required>
                                <small>{{ $errors->first('last_name') }}</small>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="field">
                                <label for="phone">Phone Number</label>
                                <input id="phone" name="phone" type="text" value="{{ old('phone') }}" required>
                                <small>{{ $errors->first('phone') }}</small>
                            </div>
                            <div class="field">
                                <label for="email">Email Address</label>
                                <input id="email" name="email" type="email" value="{{ old('email') }}" required>
                                <small>{{ $errors->first('email') }}</small>
                            </div>
                        </div>

                        <div class="field">
                            <label for="issue_description">Issue Description</label>
                            <textarea id="issue_description" name="issue_description" required>{{ old('issue_description') }}</textarea>
                            <small>{{ $errors->first('issue_description') }}</small>
                        </div>

                        <div class="form-submit">
                            <button class="btn btn-light" type="submit">Send Request</button>
                            <p>Need urgent help? Call <a href="tel:+18005551234">(800) 555-1234</a>.</p>
                        </div>
                    </form>

                    <div class="cta-actions">
                        <a class="btn btn-ghost" href="mailto:service@summitflowplumbing.com">Or Email Us Directly</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-inner">
            <p>© {{ date('Y') }} Summit Flow Plumbing. All rights reserved.</p>
            <p>Licensed Plumbing Services | Residential & Commercial | USA</p>
        </div>
    </footer>
    <!-- Toast markup -->
    <div id="toast" class="toast" role="status" aria-live="polite" style="display: none;">
        <div class="toast-msg" id="toast-message"></div>
        <button class="toast-close" id="toast-close" aria-label="Dismiss">×</button>
    </div>

    <script>
        (function(){
            const toastText = @json(session('status'));
            const toast = document.getElementById('toast');
            const msgEl = document.getElementById('toast-message');
            const closeBtn = document.getElementById('toast-close');

            if (!toast) return;

            function hideToast(){
                toast.classList.remove('show');
                setTimeout(()=>{ toast.style.display = 'none'; }, 280);
            }

            if (toastText) {
                msgEl.textContent = toastText;
                toast.style.display = 'flex';
                // trigger animation
                setTimeout(()=> toast.classList.add('show'), 10);

                closeBtn.addEventListener('click', hideToast);
                // auto-hide after 5s
                setTimeout(hideToast, 5000);
            }
        })();
    </script>
</body>
</html>
