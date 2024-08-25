<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Fixie Website</title>
    <link rel="stylesheet" href={{ asset('css/styles.css') }}>
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Fixed</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home')}}">Home</a></li>
                    <li><a href="{{ route('content')}}">Content</a></li>
                    <li><a href="{{ route('about')}}">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <aside>
            <h2>Recent Posts</h2>
            <ul>
                <li><a href="">How to Start Riding a Fixie</a></li>
                <li><a href="">Tips for Beginners</a></li>
                <li><a href="">The Importance of a Good Fixie Build</a></li>
            </ul>
        </aside>
        <main>
            <article>
                <h2>Welcome to Fixie World</h2>
                <p>Discover the purest form of cycling with fixed-gear bikes. Whether you're a seasoned rider or just curious, our site is dedicated to everything fixie—from tips and tricks to the latest gear. Experience the simplicity, the style, and the freedom of riding fixed.</p>
                <img src="{{ asset('images/fixed.jpg') }}" alt="Blog Image" class="blog-image" width="500" height="300">
                <p>Explore our guides, dive into our community, or learn more about the history of fixed-gear bikes.</p>
            </article>
        </main>
    </div>
    <footer>
        <p>&copy; 2024 Fixed. All rights reserved.</p>
    </footer>
</body>
</html>
