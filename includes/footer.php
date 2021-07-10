<?php
    //include('includes/database.php');
    //include('functions/functions.php');
    //$sub_categories=getSubCategories();
?>
<!--=================================
Footer -->
<footer class="shop-footer">
    <div class="container">
        <div class="row overview-block-ptb2">
            <div class="col-lg-3 col-md-12 col-sm-12 iq-mtb-15">
                <div class="logo">
                    <img id="footer_logo_img" class="img-fluid" src="images/logo/FINAL.png" alt="#">
                    <ul class="iq-contact">
                        <li><span class="iq-tw-8 iq-font-black iq-lead"><i class="fa fa-phone" aria-hidden="true"></i> +92 321 961 9666</span></li>
                        <li><span class="iq-tw-8 iq-font-black iq-lead"><i class="fa fa-envelope-o" aria-hidden="true"></i> export@hascorp-apparels.com</span>
                        </li>
                        <li>
                            <span>206, Nasheman Housing, Wazirabad Road, Sialkot-51310, Pakistan</span>
                        </li>
                    </ul>
                    <ul class="iq-media-blog text-left">
                        <li><a href="#"><i class="fa fa-phone"></i></a></li>
                        <li><a target="_blank" href="https://www.facebook.com/hascorp.apparels"><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/hascorp.apparels/"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-link"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-github"></i></a></li> -->
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 iq-mtb-15">
                        <h6 class="iq-tw-6">Company</h6>
                        <ul class="menu">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Products</a></li>
                            <li><a href="#">Make an Inquiry</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 iq-mtb-15">
                        <h6 class="iq-tw-6">Products</h6>
                        <ul class="menu">
                            <?php 
                                if(!empty($sub_categories)){
                                for($i=0;$i<count($sub_categories);$i++){ 
                            ?>
                            <li><a href="#"><?php echo $sub_categories[$i]['sub_category_title'] ?></a></li>
                            <?php 
                                }
                            }
                            ?>
                        </ul>
                    </div>
                    
                    <div class="col-lg-4 col-md-4 col-sm-12 iq-mtb-15">
                        <h6 class="iq-tw-6">Legal</h6>
                        <ul class="link">
                            <li class="d-inline-block"><a href="#">Terms and Conditions</a></li>
                            <li class="d-inline-block"><a href="#"> Sustainability Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12 iq-mtb-15">
                <div class="newsletter">
                    <h6 class="iq-tw-6">Newsletter</h6>
                    <form class="newsletter-form">
                        <div class="input-group">
                            <input type="email" class="form-control placeholder" placeholder="Enter your Email">
                            <a class="button" href="contact-us-1.html" role="button"><i class="fa fa-paper-plane" aria-hidden="true"></i></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <hr>
        <div class="row overview-block-ptb2 align-items-center">
            <div class="col-lg-6 col-md-6 col-sm-12 iq-mtb-10">
                <div class="iq-paysys text-left">
                    <ul class="iq-paybox">
                        <li>
                            <a href="#"><img class="img-fluid" src="images/shop/paysys/01.png" alt="#"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-fluid" src="images/shop/paysys/02.png" alt="#"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-fluid" src="images/shop/paysys/03.png" alt="#"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-fluid" src="images/shop/paysys/04.png" alt="#"></a>
                        </li>
                        <li>
                            <a href="#"><img class="img-fluid" src="images/shop/paysys/05.png" alt="#"></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 iq-mtb-10">
                <div class="iq-copyright text-right">
                    Copyright 2021 <a href="index.html">HASCORP APPARELS</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</footer>
<!--=================================
Footer -->
<!-- back-to-top -->
<div id="back-to-top">
    <a class="top" id="top" href="#top"> <i class="ion-ios-upload-outline"></i> </a>
</div>
<!-- back-to-top End -->
<!--================ Jquery =================-->
<!-- Jquery  -->
<script src="js/jquery.min.js"></script>
<!-- bootstrap -->
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Google captcha code Js -->
<script src='https://www.google.com/recaptcha/api.js'></script>
<!-- Mega Menu -->
<script src="js/mega-menu/mega_menu.js"></script>
<!-- Main -->
<script src="js/main.js"></script>
<!-- ADD-ONS JS FILES -->
<script src="revolution/js/revolution.addon.snow.min.js"></script>
<script src="revolution/js/revolution.addon.particles.min.js"></script>
<!-- REVOLUTION JS FILES -->
<script src="revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="revolution/js/extensions/revolution.extension.video.min.js"></script>
<!-- Custom -->
<script src="js/custom.js"></script>
<script>
    var revapi133,
        tpj;
    (function() {
        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad);
        else onLoad();

        function onLoad() {
            if (tpj === undefined) { tpj = jQuery; if ("off" == "on") tpj.noConflict(); }
            if (tpj("#rev_slider_133_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_133_1");
            } else {
                revapi133 = tpj("#rev_slider_133_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "//localhost/revslider-standalone/revslider/public/assets/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "vertical",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "reverse",
                        onHoverStop: "off",
                        arrows: {
                            style: "gyges",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1170,
                    gridheight: 790,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "spinner0",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }; /* END OF revapi call */
        }; /* END OF ON LOAD FUNCTION */
    }()); /* END OF WRAPPING FUNCTION */
</script>
</body>

</html>