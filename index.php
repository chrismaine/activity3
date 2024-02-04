<!DOCTYPE html>
<html lang="en">
<head>
    <title>SHOPEEPEE</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">SHOPEEPEE</h2>
            </div>
        </div>

        <div class="content">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="photos/1.png" style="width:100%" alt="Slide 1">
                </div>

                <div class="mySlides fade">
                    <img src="photos/2.png" style="width:100%" alt="Slide 2">
                </div>

                <div class="mySlides fade">
                    <img src="photos/3.png" style="width:100%" alt="Slide 3">
                </div>
            </div>

            <script>
                let slideIndex = 0;
                showSlides();

                function showSlides() {
                    let i;
                    const slides = document.getElementsByClassName("mySlides");

                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }

                    slideIndex++;

                    if (slideIndex > slides.length) {
                        slideIndex = 1;
                    }

                    slides[slideIndex - 1].style.display = "block";
                    setTimeout(showSlides, 2000); // Change slide every 2 seconds
                }
            </script>

            <div class="vertical-line"></div>

            <div class="form-container">
                <form class="login-form" action="config/login.php" method="post">
                    <div class="form">
                        <?php
                            session_start();
                            // Check if the alert session variable is set
                            if(isset($_SESSION["alert"])) {
                                echo '<div class="alert alert-danger" role="alert">' . $_SESSION["alert"] . '</div>';
                                // Unset the alert session variable
                                unset($_SESSION["alert"]);
                            }
                        ?>
                        <h2>SHOPEEPEE</h2>
                        <input type="text" id="username" name="userName" placeholder="Email" required>
                        <input type="password" id="password" name="Password" placeholder="Password" required>
                        <button class="btnn" type="submit" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/ionicons@5.4.0/dist/ionicons.js"></script>
</body>
</html>
