<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Employee Management System</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Employee Management System</h2>
        <hr>
        @yield('content')
        <footer>
            <p>&copy; 2026 Employee CRUD Application. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>