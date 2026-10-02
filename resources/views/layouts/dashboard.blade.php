<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio Dashboard</title>
</head>
<body>
    <nav>
        <a href="{{ url('/dashboard') }}">Dashboard</a> |
        <a href="{{ url('/dashboard/contacts') }}">Contacts</a> |
        <a href="{{ url('/dashboard/projects') }}">Projects</a> |
        <a href="{{ url('/dashboard/projects/create') }}">Add Project</a>
    </nav>

    <hr>

    @yield('content')
</body>
</html>