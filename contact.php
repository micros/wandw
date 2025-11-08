<?php

if (isset($_POST) && !empty($_POST)) {
    $asunto = "Hello, " . htmlentities(ucwords(strtolower($_POST["Name"]))) . " in touch through our website";
    $para = "W&W Website <contact@thewnw.com>";
    //$para = "W&W Group Website <feviva@yahoo.com>";

    $cuerpo = "<h3>This message has been sent through the W&amp;W Group website</h3>";

    $cuerpo .= "<p><strong>Name:</strong> " . htmlentities(ucwords(strtolower($_POST["Name"]))) . "</p>";
    $cuerpo .= "<p><strong>Company:</strong> " . htmlentities(ucwords(strtolower($_POST["Company"]))) . "</p>";
    $cuerpo .= "<p><strong>Email: </strong> " . htmlentities(strtolower($_POST["Email"])) . "</p>";
    $cuerpo .= "<p><strong>Message: </strong> " . $_POST["Message"] . "</p>";
    $cuerpo .= "<br /><br /><img alt='W&amp;W Group Logo' src='https://www.flekso.com.co/wandw/images/logo.jpg' style='max-width:254px;' /><br /><h4>W&amp;W Group</h4>";

    $headers_mensaje = "MIME-Version: 1.0" . "\r\n";
    $headers_mensaje .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers_mensaje .= "From: W&W Group Website <contact@thewnw.com>" . "\r\n";

    $cuerpo_mensaje  = "<html><div style='font-family: Arial; font-size: 14px;'>";
    $cuerpo_mensaje .= $cuerpo;
    $cuerpo_mensaje .= "</div></html>";

    $exito = mail($para, $asunto, $cuerpo_mensaje, $headers_mensaje);
}
?>
<!DOCTYPE html><!--  This site was created in Webflow. https://webflow.com  --><!--  Last Published: Mon Oct 27 2025 19:55:46 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="68f92340f4a6758d62da7abc" data-wf-site="68f92340f4a6758d62da7abd">

<head>
    <meta charset="utf-8">
    <title>W&amp;W Group</title>
    <meta content="" name="description">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="Webflow" name="generator">
    <link href="css/normalize.css" rel="stylesheet" type="text/css">
    <link href="css/webflow.css" rel="stylesheet" type="text/css">
    <link href="css/kinetics_webflow.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({
            google: {
                families: ["Archivo:regular,500,600,700"]
            }
        });
    </script>
    <script type="text/javascript">
        ! function(o, c) {
            var n = c.documentElement,
                t = " w-mod-";
            n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
        }(window, document);
    </script>
    <link href="images/favicon.svg" rel="shortcut icon" type="image/x-icon">
    <link href="images/webclip.svg" rel="apple-touch-icon"><!--  Keep this css code to improve the font quality -->
    <style>
        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            -o-font-smoothing: antialiased;
            -webkit-appearance: none;
        }
    </style>
</head>

<body class="body">
    <div class="page-wrapper">
        <div data-animation="default" class="navbar_component w-nav" data-easing2="ease" fs-scrolldisable-element="smart-nav" data-easing="ease" data-collapse="medium" data-w-id="953a3ef5-f13b-eed2-7aed-ac6a2dba9042" role="banner" data-duration="400">
            <div class="navbar_container">
                <a href="index" aria-current="page" class="navbar_logo-link w-nav-brand w--current">
                    <img loading="lazy" src="images/logo_350.png" alt="loggo-kinetiq" class="navbar_logo"></a>
                <nav role="navigation" class="navbar_menu is-page-height-tablet w-nav-menu">
                    <div class="navbar_menu-links">
                        <a href="index" class="navbar_link w-nav-link">Home</a>
                        <a href="about" class="navbar_link w-nav-link">About Us</a>
                        <a href="services" class="navbar_link w-nav-link">Services</a>
                        <a href="contact" class="navbar_link w-nav-link">Contact</a>
                    </div>
                </nav>
                <div class="navbar_menu-button w-nav-button">
                    <div class="menu-icon">
                        <div class="menu-icon_line-top"></div>
                        <div class="menu-icon_line-middle">
                            <div class="menu-icon_line-middle-inner"></div>
                        </div>
                        <div class="menu-icon_line-bottom"></div>
                    </div>
                </div>
            </div>
        </div>

        <header id="home" class="section_hero">
            <div class="padding-global padding-medium">&nbsp;</div>
        </header>

        <main class="main-wrapper">
            <section id="services" class="section_home_services">
                <div class="padding-global">
                    <div class="padding-section-small">
                        <div class="container-medium">
                            <div class="home_about_component">
                                <div class="section_header">
                                    <div class="home_about_heading">
                                        <h2 data-w-id="5d6a46c6-61cc-cd38-256f-3d038a98b568" style="opacity:0;-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)">Let’s Build Your Market Narrative</h2>
                                    </div>
                                    <div class="home_about_text_2">
                                        <p data-w-id="c1ff5a39-bff6-42d0-a9cc-876383ab1d1a" style="opacity:0;-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0); font-size: 1.5rem">
                                            We partner with companies shaping the future of finance and digital assets.
                                            Get in touch to discuss how strategic communications can strengthen your valuation, credibility, and visibility.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="padding-global">
                    <div class="padding-section-small">
                        <div class="container-medium">
                            <form id="wf-form-Newsletter-Form" name="wf-form-Newsletter-Form" data-name="Contact Form" method="post" class="" data-wf-page-id="68f92340f4a6758d62da7abc" data-wf-element-id="7664773d-100d-ff22-267d-708e0fe72b53" action="#response">
                                <div class="home_about_component">
                                    <div class="section_header_1">
                                        <div class="home_about_heading">
                                            <div class="form-block w-form">
                                                <div class="margin-bottom margin-small">
                                                    <h4>Name</h4>
                                                    <input class="footer_newsletter_input w-input" maxlength="256" name="Name" data-name="Name" placeholder="Enter Your Name" type="text" id="Name" required="true">
                                                </div>
                                                <div class="margin-bottom margin-small">
                                                    <h4>Company Name</h4>
                                                    <input class="footer_newsletter_input w-input" maxlength="256" name="Company" data-name="Company" placeholder="Enter Your Company Name" type="text" id="Company" required="true">
                                                </div>
                                                <div class="margin-bottom margin-small">
                                                    <h4>Email</h4>
                                                    <input class="footer_newsletter_input w-input" maxlength="256" name="Email" data-name="Email" placeholder="Enter Your Mail" type="email" id="Email" required="true">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="home_about_text">
                                            <div class="margin-bottom margin-small">
                                                <h4>Message</h4>
                                            </div>
                                            <div class="margin-bottom margin-small">
                                                <textarea class="footer_newsletter_input_1 w-input" name="Message" data-name="Message" placeholder="Enter Your Message" type="text" id="Message" rows="8" required="true"></textarea>
                                            </div>
                                            <div class="margin-bottom margin-small">
                                                <button id="" class="newsletter_submit">
                                                    <div>Request Consultation</div>
                                                    <div class="button-icon"><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewbox="0 0 26 16" fill="none">
                                                            <path d="M1 7C0.447715 7 0 7.44772 0 8C0 8.55228 0.447715 9 1 9V7ZM25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.29289L19.3431 0.928932C18.9526 0.538408 18.3195 0.538408 17.9289 0.928932C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM1 9H25V7H1V9Z" fill="currentColor"></path>
                                                        </svg>
                                                    </div>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                if (isset($exito)) { ?>
                    <div class="padding-global">
                        <div class="padding-section-small">
                            <div class="container-small">
                                <div id="response" class="form-block">
                                    <?php
                                    if ($exito == true) { ?>
                                        <div class="form_message-success" style="border-radius: 20px;">
                                            <div>
                                                <h5>Thank you! Your message has been submitted!</h5>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <div class="form_message-error" style="border-radius: 20px;">
                                            <div>
                                                <h5>Oops! Something went wrong while submitting the form.</h5>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="bg-element-wrapper">
                    <div class="bg-color-right"></div>
                </div>
            </section>
        </main>

        <footer class="section_footer">
            <div class="padding-global footer">
                <div class="container-large">
                    <div class="footer_component">
                        <div class="margin-bottom margin-xxhuge">
                            <a data-w-id="8a81daa6-ca03-9a6f-e88c-36c39e154573" href="contact" class="footer_cta w-inline-block">
                                <div class="footer_cta-text">Get in touch</div>
                                <div style="background-color:rgba(255,255,255,0)" class="footer_cta-icon">
                                    <div style="-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)" class="footer_cta-icon-inner"><svg xmlns="http://www.w3.org/2000/svg" width="100%" viewbox="0 0 36 36" fill="none">
                                            <path d="M29.3826 4H8.78402C8.4888 4 8.20567 4.11728 7.99692 4.32603C7.78816 4.53478 7.67089 4.81791 7.67089 5.11314C7.67089 5.40836 7.78816 5.69149 7.99692 5.90024C8.20567 6.109 8.4888 6.22627 8.78402 6.22627H27.1998L4.35931 29.0678C4.24889 29.1695 4.16017 29.2924 4.09846 29.4291C4.03676 29.5659 4.00335 29.7138 4.00024 29.8638C3.99713 30.0138 4.02439 30.1629 4.08038 30.3022C4.13636 30.4414 4.21992 30.5679 4.32603 30.674C4.43214 30.7801 4.55861 30.8636 4.69783 30.9196C4.83706 30.9756 4.98617 31.0029 5.13619 30.9998C5.28622 30.9967 5.43407 30.9632 5.57086 30.9015C5.70765 30.8398 5.83055 30.7511 5.93217 30.6407L28.7737 7.79913V26.216C28.7737 26.5112 28.891 26.7943 29.0998 27.0031C29.3085 27.2118 29.5916 27.3291 29.8869 27.3291C30.1821 27.3291 30.4652 27.2118 30.674 27.0031C30.8827 26.7943 31 26.5112 31 26.216V5.6185C30.9994 5.18962 30.8289 4.77846 30.5257 4.47509C30.2225 4.17172 29.8115 4.00088 29.3826 4Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="footer_content">
                            <div class="footer_info">
                                <h3 class="footer_link_title">Strategic Communications for the Digital Economy</h3>
                            </div>
                            <div class="footer_links-wrapper">
                                <div class="footer_link_item">
                                    <h3 class="footer_link_title">Contact Us</h3>
                                    <div class="footer_links_inner">
                                        <div class="footer_item">
                                            <a href="tel:+19292600339" class="footer_link-item w-inline-block">
                                                <div>+1 929-260-0339</div>
                                            </a>
                                        </div>
                                        <a href="mailto:contact@thewnw.com?subject=Hello, I'm in touch through the website" class="footer_link-item w-inline-block">
                                            <div>contact@thewnw.com</div>
                                        </a>
                                        <div class="footer_item">
                                            <div>New York City</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="footer_bottom" style="text-align: left;">
                            <p>
                                <a href="index" aria-current="page" class="footer_logo w-inline-block w--current">
                                    <img src="images/logo.png" loading="lazy" alt="logo-footer" style="max-width: 254px;">
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=68f92340f4a6758d62da7abd" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="js/webflow.js" type="text/javascript"></script>
</body>

</html>