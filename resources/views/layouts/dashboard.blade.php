<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Dashboard</title>

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: #0b1020;
            color: #edf2ff;
            font-family: "Segoe UI", Arial, sans-serif;
            line-height: 1.6;
        }

        .dashboard-nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 10px;
            padding: 16px;
            background: #121a2e;
            border-bottom: 1px solid #27324a;
        }

        .dashboard-nav a {
            padding: 8px 12px;
            color: #aab5cc;
            text-decoration: none;
            border-radius: 8px;
        }

        .dashboard-nav a:hover {
            color: #62e6c5;
            background: #0b1020;
        }

        .dashboard-main {
            width: min(100% - 32px, 960px);
            margin: 40px auto;
        }

        h1 { font-size: clamp(2rem, 5vw, 3rem); }
        p { color: #aab5cc; }

        .dashboard-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
        }

        article {
            padding: 20px;
            background: #121a2e;
            border: 1px solid #27324a;
            border-radius: 14px;
        }

        article a { color: #62e6c5; }

        @media (max-width: 600px) {
            .dashboard-main { margin: 24px auto; }
        }
    </style>
</head>
<body>
    <nav class="dashboard-nav">
        <a href="{{ url('/dashboard') }}">Dashboard</a>
        <a href="{{ url('/dashboard/contacts') }}">Contacts</a>
        <a href="{{ url('/dashboard/projects') }}">Projects</a>
        <a href="{{ url('/dashboard/projects/create') }}">Add Project</a>
    </nav>

    <main class="dashboard-main">
        @yield('content')
    </main>
</body>
</html>