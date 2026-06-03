<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Nirmala Filter Air')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        body {
            background: radial-gradient(circle at top, rgba(66,153,225,0.16), transparent 24%),
                        linear-gradient(180deg, #f8fbff 0%, #eef7ff 32%, #f7fbfe 100%);
        }
        .page-shell {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        body {
            font-size: 1rem;
            line-height: 1.8;
        }
        h1 {
            font-size: clamp(3rem, 4vw, 5.2rem);
            letter-spacing: -0.04em;
        }
        h2 {
            font-size: clamp(2rem, 3vw, 3.4rem);
            letter-spacing: -0.03em;
        }
        h3 {
            font-size: clamp(1.6rem, 2.2vw, 2.2rem);
        }
        p {
            font-size: 1.05rem;
            line-height: 1.9;
        }
        section,
        main {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }
        .top-header {
            background: #ffffff;
        }
        .header-inner {
            width: 100%;
            margin: 0;
            padding: 1.5rem clamp(1rem, 4vw, 4rem);
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 1rem;
            box-sizing: border-box;
        }
        .header-copy {
            color: #475569;
            font-size: 1rem;
            letter-spacing: 0.18em;
            text-transform: uppercase;
            white-space: nowrap;
        }
        .brand-logo {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 0.35rem;
        }
        .brand-logo h1 {
            margin: 0;
            font-size: 2.3rem;
            line-height: 1;
            color: #4f7fc3;
            font-weight: 800;
        }
        .brand-logo .brand-subtitle {
            color: #64748b;
            font-size: 1rem;
            font-weight: 600;
        }
        .site-nav {
            background: #ffffff;
            border-top: 1px solid rgba(148, 163, 184, 0.12);
        }
        .nav-inner {
            width: 100%;
             margin: 0 auto;
            padding: 0 clamp(1rem, 4vw, 4rem);
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            gap: 1.5rem;
            min-height: 80px;
            box-sizing: border-box;
        }
        .nav-links {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            align-items: center;
        }
        .nav-links a {
            color: #334155;
            font-size: 1rem;
            font-weight: 600;
            transition: color 0.2s ease;
        }
        .nav-links a.active,
        .nav-links a:hover {
            color: #3464a3;
        }
        .cta-link {
            background: #facc15;
            color: #3464a3;
            border-radius: 9999px;
            padding: 1rem 2rem;
            font-weight: 800;
            font-size: 1rem;
            box-shadow: 0 12px 30px rgba(250, 204, 21, 0.22);
        }
        .cta-link:hover {
            background: #fcd34d;
        }
        .site-footer {
            background: linear-gradient(180deg, #4f7fc3 0%, #3464a3 100%);
            color: #eef8ff;
        }
        .footer-inner {
            width: 100%;
            margin: 0;
            display: grid;
            grid-template-columns: 1fr auto;
            gap: 28px;
            align-items: flex-start;
            padding: 3rem clamp(1rem, 4vw, 4rem);
            box-sizing: border-box;
        }
        .footer-left .brand-small {
            font-size: 1rem;
            font-weight: 800;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #f8fbff;
        }
        .footer-right {
            text-align: right;
        }
        .footer-right p {
            opacity: 0.96;
            font-size: 1rem;
        }
        .footer-right p:first-child {
            font-size: 1.15rem;
        }
        @media (max-width: 768px) {
            .header-inner {
                flex-direction: column;
                text-align: left;
                align-items: flex-start;
                padding: 18px 24px;
            }
            .brand-logo {
                align-items: flex-start;
            }
            .nav-inner {
                padding: 0 24px;
                min-height: 72px;
                justify-content: flex-start;
                gap: 1rem;
            }
            .nav-links {
                gap: 1rem;
            }
            .footer-inner {
                grid-template-columns: 1fr;
                text-align: left;
            }
            .footer-right {
                text-align: left;
            }
        }
    </style>
    @yield('styles')
</head>
<body class="font-sans antialiased text-slate-900">
    <div class="page-shell">
        @include('partials.header')

        <div class="flex-1">
            @yield('content')
        </div>

        @include('partials.footer')
    </div>

    @yield('scripts')
</body>
</html>