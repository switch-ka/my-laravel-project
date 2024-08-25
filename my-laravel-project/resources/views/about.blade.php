<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about - Fixie Website</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <header>
        <div class="header-content">
            <h1>Fixed</h1>
            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('content') }}">Content</a></li>
                    <li><a href="{{ route('about') }}">About</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container">
        <main>
            <h2>About Fixie World</h2>
            <article>
                <p><b>Our Mission: </b>Fixie World was founded by a group of passionate cyclists who believe in the simplicity and elegance of fixed-gear riding. Our mission is to share our love for fixies with the world, providing riders of all levels with the information, inspiration, and community they need.</p>
            </article>
            <article>
                <p><b>Our Team: </b>Meet the enthusiasts behind Fixie World—each of us brings a unique perspective on riding, from urban commuting to long-distance adventures.</p>
            </article>
            <article>
                <p><b>Join Us: </b>We invite you to become part of our community. Share your stories, learn from others, and ride with us. Together, let's keep the fixie spirit alive.</p>
            </article>
        </main>
    </div>
</body>
</html>