<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog - Fixie Website</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
        <main>
            <h2>Fixie Guides & Tips</h2>
            <article>
                <h3>Getting Started</h3>
                <p><b>Introduction to Fixed-Gear Bikes:</b> Learn what makes a fixie unique and why so many riders swear by them.</p>
                <p><b>Choosing Your First Fixie:</b> What to look for when buying your first bike, including frame types, gear ratios, and essential accessories.</p>
                <a href="post1.html" class="read-more">Read More</a>
            </article>
            <article>
                <h3>Riding Techniques</h3>
                <p><b>Basic Techniques:</b> How to ride a fixie safely, including stopping without brakes and navigating city streets.</p>
                <p><b>Advanced Skills:</b> Tricks, stunts, and skills that will take your riding to the next level.</p>
                <a href="post2.html" class="read-more">Read More</a>
            </article>
            <article>
                <h3>Maintenance & Care</h3>
                <p><b>Regular Maintenance:</b> Keep your bike in top shape with these simple maintenance tips.</p>
                <p><b>Fixing Common Issues:</b> Troubleshoot and fix common problems like chain tension and wheel alignment.</p>
                <a href="post3.html" class="read-more">Read More</a>
            </article>
        </main>
    </div>
    <footer>
        <p>&copy; 2024 My Simple Blog. All rights reserved.</p>
    </footer>
</body>
</html>
