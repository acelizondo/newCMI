<?php
/**
 * Created by PhpStorm.
 * User: aaron
 * Date: 6/12/16
 * Time: 7:40 PM
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>CMI-Badgers</title>


    <!--foundation css-->
    <link rel="stylesheet" href="library/foundation-5.5.3/css/foundation.css" type="text/css"/>
    <link rel="stylesheet" href="library/foundation-5.5.3/css/normalize.css" type="text/css"/>
    <link rel="stylesheet" href="style/home.css" type="text/css"/>

</head>
<body>

    <header>
        <div class="row">
            <div class="columns">
                <div class="logo" data-interchange="[images/logoS.png, (default)], [images/logoM.png, (medium)], [images/logo.png, (large)]">
                    <h2>Badger Chapter</h2>
                </div>

                <ul class="social">
                    <li class="twitter"><a href="http://twitter.com/CMIBadgers/" target="_blank"><span class="hide">twitter</span></a></li>
                    <li class="facebook"><a href="http://facebook.com/CMIBadgers/" target="_blank"><span class="hide">facebook</span></a></li>
                    <li class="instagram"><a href="https://instagram.com/CMIBadgers/" target="_blank"><span class="hide">instagram</span></a></li>
                </ul>
            </div><!--end of col-->
        </div><!--end of row-->

    </header>

    <div class="contain-to-grid sticky"><!--start nav-->
        <nav class="top-bar" role="navigation">
            <ul class="title-area">
                <li class="name"></li>
                <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
            </ul>

            <section class="top-bar-section">
                <ul class="left">
                    <li class="divider"></li>
                    <li><a href="index.html">Home</a></li><li class="divider"></li>
                    <li><a href="#">About Us</a></li><li class="divider"></li>
                    <li><a href="#">Photos</a></li><li class="divider"></li>
                    <li><a href="#">Events</a></li><li class="divider"></li>
                    <li class="active"><a href="contact.php">Contact</a></li><li class="divider"></li>
                </ul>
            </section>
        </nav>
    </div><!--end nav-->

    <section id="class">
        <div class="row">
            <div class="columns">
                <h2>Let's Get in Touch!</h2>
                <hr class="primary">
                <p>Have any questions? Send us an email!</p>
            </div>
        </div>

        <form data-abide action="#" method="post" enctype="multipart/form-data" >
            <div class="row">
                <fieldset>
                    <legend>Contact</legend>
                    <div class="small-12 medium-9 columns">
                        <div><!-- Wrap the label and error message in a division. Add required to the input -->
                            <label>First <small>required</small><input type="text" name="FIRST:" placeholder="First Name" required></label>
                            <small class="error">Name required and must contain only letter</small>
                        </div>

                        <div>
                            <label>Email <small>required</small><input type="text" name="Email:" placeholder="Email" required></label>
                            <small class="error">Valid email required</small>
                        </div>

                        <label>Other<textarea type="message" name="Message:" placeholder="Body Message"></textarea></label>
                    </div>
                </fieldset>
            </div>
            <div class="row">
                <button name="submit" id="submit" class="small-4 medium-2 radius">Send Email</button>
            </div>
        </form>
    </section>




    <script type="text/javascript" src="library/jquery/jquery-2.2.3.js"></script>
    <script type="text/javascript" src="library/foundation-5.5.3/js/foundation.min.js"></script>
    <script type="text/javascript" src="library/foundation-5.5.3/js/foundation/foundation.interchange.js"></script>
    <script>$(document).foundation();</script>
</body>
</html>