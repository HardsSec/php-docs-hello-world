<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <title>Importance of Threat Modeling</title>
    <link rel="stylesheet" href="styles.css"> 
</head>
<body>
    <header>
        <img src="favicon.ico" alt="Favicon">
        <nav>
            <a href="index.php">Importance of Cybersecurity</a> |
            <a href="threatmodeling.php">Importance of Threat Modeling</a>
        </nav>
    </header>
    <div class="container">
        <div class="sidebar">
            <ul>
                <li><a href="#introduction">Introduction</a></li>
                <li><a href="#threatmodeling">Threat Modeling</a></li>
                <li><a href="#benefits">Benefits</a></li>
            </ul>
        </div>
        <div class="content">
            <h1>The Importance of Threat Modeling</h1>

            <div id="introduction" class="image-container fade-in">
                <img src="images/threatmodelling1.png" alt="Threat Modeling Image 1">
            </div>

            <p>
                Threat modeling is a systematic approach to identify and evaluate potential security threats and vulnerabilities in software systems or applications. It helps organizations proactively assess risks and develop effective security measures to protect against potential attacks.
            </p>

            <div id="threatmodeling" class="image-container fade-in">
                <img src="images/threatmodelling2.png" alt="Threat Modeling Image 2">
            </div>

            <p>
                Threat modeling involves analyzing the system architecture, identifying potential threats, assessing their potential impact, and designing appropriate countermeasures. It helps in understanding the security requirements, making informed decisions, and prioritizing security efforts.
            </p>

            <div id="benefits" class="image-container fade-in">
                <img src="threatmodeling3.png" alt="Threat Modeling Image 3">
            </div>

            <p>
                The benefits of threat modeling include improved security posture, reduced vulnerabilities, enhanced risk management, and cost-effective security investments. By incorporating threat modeling into the software development lifecycle, organizations can proactively address security issues and minimize the impact of potential threats.
                It is essential to integrate threat modeling as an ongoing process, considering evolving threats, changing technologies, and system updates.
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
