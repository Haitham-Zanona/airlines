<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airlines Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/flights">Flights</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero">
            <h1>Welcome to Our Airlines</h1>
            <p>Experience the best flights with us.</p>
            <a href="/flights" class="btn">Book a Flight</a>
        </section>

        <section class="features">
            <h2>Why Choose Us?</h2>
            <div class="feature">
                <h3>Comfortable Seats</h3>
                <p>Enjoy the most comfortable seats in the industry.</p>
            </div>
            <div class="feature">
                <h3>In-flight Entertainment</h3>
                <p>Watch movies, listen to music, and more during your flight.</p>
            </div>
            <div class="feature">
                <h3>Delicious Meals</h3>
                <p>Savor our gourmet meals prepared by top chefs.</p>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Airlines. All rights reserved.</p>
    </footer>
</body>
</html>
