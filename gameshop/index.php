<?php
	session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Games.lan - homepage</title>
        <base href="http://gameshop.sygnal.nl/" />
        <link rel="stylesheet/less" type="text/css" href="css/style.less">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <script src="js/less.js" type="text/javascript"></script>
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/index.js" type="text/javascript"></script>
    </head>
    <body>
        <header>
            <div id="topheader-wrapper" class="header-wrapper">
                <nav id="topheader" class="header">
                    <span id="logo" class="header-block">
                        <a href="home">GAME</a>
                    </span>
                    <span id="search" class="header-block">
                        <input placeholder="search">
                    </span>
                    <span id="info" class="header-block">
                        <br />
                        <a href="faq">Help</a><br />
                        <a href="stores">Store finder</a>
                    </span>
                    <span id="account" class="header-block">
                        <br />
						<?php
							if(!isset($_SESSION['loggedin']))
							{
								echo"<a id='login' href='login'>Log in</a><br />";
							}
							else
							{
								echo"<a id='login' href='loguit.php'>Log uit</a><br />";
							}
						?>
                    </span>
                    <span id="basket" class="header-block">
                       <a href="basket"><i class="fa fa-shopping-cart"></i>   Basket</a>
                    </span>
                </nav>
            </div>
            <div id="midheader-wrapper" class="header-wrapper">
                <nav id="midheader" class="header">
                    <span id="all" class="header-block">
                        <a href="games/all"><i class="fa fa-cog"></i> All systems</a>
                    </span>
                    <span id="pc" class="header-block">
                        <a href="games/pc"><i class="fa fa-windows"></i></a>
                    </span>
                    <span id="ps4" class="header-block">
                        <a href="games/ps4">Z</a>
                    </span>
                    <span id="xbox" class="header-block">
                        <a href="games/xbox_one">f</a>
                    </span>
                    <span id="wii" class="header-block">
                        <a href="games/wii_u">G</a>
                    </span>
                </nav>
            </div>
            <div id="botheader-wrapper" class="header-wrapper">
                <nav id="botheader" class="header">
                    <span id="all" class="header-block">
                        <a href="/game/games/all">Sales</a>
                    </span>
                    <span id="all" class="header-block">
                        <a href="/game/newGames/new">New Games</a>
                    </span>
                    <span id="all" class="header-block">
                        <a href="/game/newGames/upcoming">Upcoming games</a>
                    </span>
                    <span id="all" class="header-block">
                        <a href="/game/newGames/best">Best Selling</a>
                    </span>
                    <span id="all" class="header-block">
                        <a href="/game/newGames/exclusive">Exclusive</a>
                    </span>
                    <span id="all" class="header-block">
                        <a href="/game/stores">Contact</a>
                    </span>
                    <span id="all" class="header-block">
                        <a href="/game/faq">Faq</a>
                    </span>
                    <span id="all" class="header-block">
                        <a href="/game/refunds">Refund</a>
                    </span>
                </nav>
            </div>
        </header>
        <div id="content">
            <div id="pageheader">
            </div>
            <div id="pagecontent">
            </div>
        </div>
        <footer>
            <div id="topfooter-wrapper" class="footer-wrapper">
                <nav id="topfooter" class="footer">
                    <div id="products" class="footer-block">
                        <ul>
                            <li>Products</li>
                            <li><a href="/game/games/all">Games</li>
                            <li><a href="/game/gifts">Gift cards</a></li>
                        </ul>
                    </div>
                    <div id="services" class="footer-block">
                        <ul>
                            <li>Services</li>
                            <li><a href="/game/basket">Order</a></li>
                            <li><a href="/game/refunds">Refunds</a></li>
                        </ul>
                    </div>
                    <div id="customerService" class="footer-block">
                        <ul>
                            <li>Customer services</li>
                            <li><a href="/game/faq">Faq</a></li>
                            <li><a href="/game/stores">Contact</a></li>
                        </ul>
                    </div>
                    <div id="about" class="footer-block">
                        <ul>
                            <li>About us</li>
                            <li><a href="/game/stores">Store finder</a></li>
                        </ul>
                    </div>
                    <div id="payment" class="footer-block">
                        <ul>
                            <li>Payment methods</li>
                            <li><a href="/game/payments">PayPal</a></li>
                            <li><a href="/game/payments">Cash (in-store)</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div id="midfooter-wrapper" class="footer-wrapper">
                <nav id="midfooter" class="footer">
                    <div id="newsletter" class="footer-block">
                        <h3>Newsletter</h3>
                        <p>Sign up and we'll keep you up-to-date on all the latest games and news, the cheapest deals and the biggest gaming events - straight to your inbox every week!</p>
                        <form action="" method="">
                            <input type="text" placeholder="emailadres">
                            <input type="submit">
                        </form>
                    </div>
                    <div id="social" class="footer-block">
                        <h3>Connect with us</h3>
                        <a href="https://www.facebook.com/GAMEstore" id="facebook" class="social"><i class="fa fa-facebook"></i></a>
                        <a href="https://twitter.com/gamedigital" id="twitter" class="social"><i class="fa fa-twitter"></i></a>
                        <a href="https://plus.google.com/+gameuk/posts" id="googleplus" class="social"><i class="fa fa-google-plus"></i></a>
                        <a href="https://www.youtube.com/user/game" id="youtube" class="social"><i class="fa fa-youtube"></i></a>
                        <a href="http://www.twitch.tv/gamedigital" id="twitch" class="social"><i class="fa fa-twitch"></i></a>
                        <a href="http://instagram.com/gamedigital" id="instagram" class="social"><i class="fa fa-instagram"></i></a>
                        <a href="http://www.pinterest.com/gamedigital/" id="pinterest" class="social"><i class="fa fa-pinterest-p"></i></a><br /><br />
                        <a href="/game/terms">Terms and conditions</a> |
                        <a href="/game/priv">Privacy</a> |
                        <a href="/game/cookies">Cookies</a> |
                        <a href="/game/cop">Copyright</a>
                    </div>
                </nav>
            </div>
            <div id="botfooter-wrapper" class="footer-wrapper">
                <nav id="botfooter" class="footer">
                    <div id="copyright" class="footer-block">
                        <h3>Disclaimer</h3>
                        Deze website is gemaakt als schoolproject - Deze website is visueel gebaseerd op game.co.uk <br />
                        Er is echter op geen enkele manier een band tussen deze website en Game ltd.<br />
                        Deze website is gemaakt in 2015
                    </div>
                </nav>
            </div>
        </footer>
    </body>
</html>
