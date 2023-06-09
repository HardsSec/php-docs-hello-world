<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Importance of Threat Modeling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            display: flex;
        }

        .header {
            background-color: #f5f5f5;
            padding: 10px 0;
            display: flex; /* Added display flex */
            align-items: center; /* Added align items center */
        }

        .header img {
            margin-right: 10px; /* Added margin right */
            heigh: 60px;
            width: 200px;
        }

        nav {
            text-align: center;
        }

        nav a {
            text-decoration: none;
            color: #333;
            margin: 0 10px;
        }

        nav a:hover {
            color: #555;
        }

        .sidebar {
            width: 200px;
            position: sticky;
            top: 60px; /* Adjust the top value to accommodate the header height */
            background-color: #f5f5f5;
            padding: 20px;
        }

        .sidebar ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .sidebar li {
            margin-bottom: 10px;
        }

        .content {
            margin-left: 220px;
        }

        h1 {
            text-align: center;
        }

        .image-container {
            width: 100%;
            margin: 20px 0;
            text-align: center;
        }

        img {
            max-width: 100%;
            height: auto;
            margin: 20px 0;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        .fade-in {
            opacity: 0;
            animation: fadeIn 1s ease-in-out;
            animation-fill-mode: forwards;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="favicon.ico" alt="Favicon">
        <nav>
            <a href="index.php">Importance of Cybersecurity</a> |
            <a href="threatmodeling.php">Importance of Threat Modeling</a>
        </nav>
    </div>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="#introduction">Introduction</a></li>
                <li><a href="#cybersecurity">Cybersecurity</a></li>
                <li><a href="#consequences">Consequences</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>The Importance of Cybersecurity</h1>

            <div id="introduction" class="image-container fade-in">
                <img src="cybersecurity1.png" alt="Cybersecurity Image 1">
            </div>

            <p>
                In today's interconnected world, cybersecurity has become more critical than ever. With the increasing number of cyber threats and data breaches, protecting sensitive information and maintaining the privacy and integrity of digital assets is of utmost importance.
            </p>

            <div id="cybersecurity" class="image-container fade-in">
                <img src="cybersecurity2.png" alt="Cybersecurity Image 2">
            </div>

            <p>
                Cybersecurity involves implementing measures to prevent unauthorized access, misuse, and damage to computer systems, networks, and data. It encompasses various practices, such as strong password management, regular software updates, secure network configurations, and robust firewalls.
            </p>

            <div id="consequences" class="image-container fade-in">
                <img src="cybersecurity3.png" alt="Cybersecurity Image 3">
            </div>

            <p>
                The consequences of inadequate cybersecurity can be severe, including financial losses, reputational damage, legal issues, and compromised personal or business information. Cyber attacks can disrupt operations, lead to data loss, and even result in identity theft or fraud.
                By prioritizing cybersecurity, individuals and organizations can safeguard their digital assets and mitigate potential risks. It is essential to stay updated on the latest threats, educate oneself and employees, and implement robust security measures to protect against cyber threats.
            </p>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var images = document.querySelectorAll(".fade-in");

            function fadeInImages() {
                images.forEach(function(image) {
                    if (isElementInViewport(image)) {
                        image.style.opacity = "1";
                    }
                });
            }

            function isElementInViewport(element) {
                var rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }

            window.addEventListener("scroll", fadeInImages);
            window.addEventListener("resize", fadeInImages);
            fadeInImages();
        });
    </script>
</body>
</html>
