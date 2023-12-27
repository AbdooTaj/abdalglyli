<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your App Title</title>
    <!-- Include your CSS stylesheets and JavaScript files here -->
</head>
<body>
    <header>
        <!-- Include your header content here -->
    </header>

    <main>
        <div class="container">
            @yield('content')
        </div>
    </main>

    <footer>
        <!-- Include your footer content here -->
    </footer>
</body>
</html>