
<!DOCTYPE html>
<html lang="en">

    <?php require('header.html'); ?>

    <body>

        <!-- Header -->
        <div class="container">
            <div class="header row">
                <div class="span12">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <h1>
                                <a class="brand" href="index.php">Green Park | Kost Executive</a>
                            </h1>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li>
                                        <a href="index.php"><i class="icon-home"></i><br />Home</a>
                                    </li>
                                    <li>
                                        <a href="price.php"><i class="icon-shopping-cart"></i><br />Price</a>
                                    </li>
                                    <li>
                                        <a href="facilities.php"><i class="icon-star"></i><br />Facilities</a>
                                    </li>
                                    <li>
                                        <a href="location.php"><i class="icon-map-marker"></i><br />Location</a>
                                    </li>
                                    <li>
                                        <a href="about.php"><i class="icon-user"></i><br />About</a>
                                    </li>
                                    <li class="current-page">
                                        <a href="#"><i class="icon-envelope-alt"></i><br />Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Page Title -->
        <div class="page-title">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <i class="icon-envelope-alt page-title-icon"></i>
                        <h2>Contact Us /</h2>
                        <p>Here is how you can contact us</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contact Us -->
        <div class="contact-us container">
            <div class="row">
                <div class="contact-form span7">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper <a href="">suscipit lobortis</a> nisl ut aliquip ex ea commodo consequat.</p>
                    <form method="post" action="assets/sendmail.php">
                        <label for="name" class="nameLabel">Name</label>
                        <input id="name" type="text" name="name" placeholder="Enter your name...">
                        <label for="email" class="emailLabel">Email</label>
                        <input id="email" type="text" name="email" placeholder="Enter your email...">
                        <label for="subject">Subject</label>
                        <input id="subject" type="text" name="subject" placeholder="Your subject...">
                        <label for="message" class="messageLabel">Message</label>
                        <textarea id="message" name="message" placeholder="Your message..."></textarea>
                        <button type="submit">Send</button>
                    </form>
                </div>
                <div class="contact-address span5">
                    <h4>We Are Here</h4>
                    <div class="map"></div>
                    <h4>Address</h4>
                    <p>Via Principe Amedeo 9 <br> 10100, Torino, TO, Italy</p>
                    <p>Phone: 0039 333 12 68 347</p>
                </div>
            </div>
        </div>

        <?php require('footer.html'); ?>

    </body>

</html>
