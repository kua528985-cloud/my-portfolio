<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Computer Engineering student portfolio: projects, skills, and contact information.">
    <title>My Portfolio</title>

    <style>
        :root {
            color-scheme: dark;
            --background: #0b1020;
            --surface: #121a2e;
            --text: #edf2ff;
            --muted: #aab5cc;
            --accent: #62e6c5;
            --border: #27324a;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: var(--background);
            color: var(--text);
            font-family: Inter, "Segoe UI", Arial, sans-serif;
            line-height: 1.7;
        }

        nav {
            position: sticky;
            top: 0;
            z-index: 10;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            padding: 16px 20px;
            background: rgba(11, 16, 32, .94);
            border-bottom: 1px solid var(--border);
        }

        nav a {
            padding: 8px 14px;
            color: var(--muted);
            text-decoration: none;
            border-radius: 8px;
        }

        nav a:hover {
            color: var(--accent);
            background: var(--surface);
        }

        hr { display: none; }

        body > #app,
        body > main,
        body > section {
            width: min(100% - 40px, 960px);
            margin: 56px auto;
        }

        h1, h2, h3 { line-height: 1.2; }

        h1 {
            font-size: clamp(2.2rem, 7vw, 4.5rem);
            letter-spacing: -0.04em;
        }

        h2 { font-size: clamp(1.5rem, 4vw, 2.2rem); }

        p { color: var(--muted); }

        a { color: var(--accent); }

        article, li {
            margin: 16px 0;
            padding: 20px;
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 14px;
        }

        input, textarea {
            width: 100%;
            max-width: 560px;
            padding: 12px;
            color: var(--text);
            background: var(--surface);
            border: 1px solid var(--border);
            border-radius: 8px;
        }

        button {
            padding: 10px 16px;
            color: var(--background);
            background: var(--accent);
            border: 0;
            border-radius: 8px;
            font-weight: 700;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            nav { gap: 2px; padding: 10px; }
            nav a { padding: 7px 9px; font-size: .92rem; }
            body > #app, body > main, body > section {
                width: min(100% - 28px, 960px);
                margin: 32px auto;
            }
        }
       .hero {
    max-width: 820px;
    margin: 56px auto;
    padding: clamp(24px, 6vw, 56px);
    background: radial-gradient(ellipse at top right, #183b4b 0, #121a2e 45%, #121a2e 100%);
    border: 1px solid var(--border);
    border-radius: 24px;
}

.eyebrow {
    color: var(--accent);
    font-size: .8rem;
    font-weight: 700;
    letter-spacing: .16em;
}

.hero h1 { margin: 16px 0; }
.hero h1 span { color: var(--accent); }

.intro {
    max-width: 620px;
    font-size: 1.1rem;
}

.skills, .actions {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 28px;
}

.skills span {
    padding: 6px 12px;
    color: var(--muted);
    background: #0b1020;
    border: 1px solid var(--border);
    border-radius: 999px;
    font-size: .9rem;
}

.button {
    display: inline-block;
    padding: 11px 17px;
    color: var(--background);
    background: var(--accent);
    border-radius: 9px;
    font-weight: 700;
    text-decoration: none;
}

.button.secondary {
    color: var(--text);
    background: transparent;
    border: 1px solid var(--border);
}

    </style>
</head>
<body>
    <nav>
        <a href="{{ url('/') }}">Home</a>
        <a href="{{ url('/about') }}">About</a>
        <a href="{{ url('/projects') }}">Projects</a>
        <a href="{{ url('/contact') }}">Contact</a>
    </nav>

    <main>
        @yield('content')
    </main>
</body>
</html>