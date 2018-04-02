<?php //if (!isset($_SESSION['logged user'])){header('Location:login.php');};
require "../controller/dashcontroller.php";

?>

<!DOCTYPE html>

<html lang="en" >
<!-- begin::Head -->
<head>
    <meta charset="utf-8" />
    <title>
        Inrutrade | Dashboard
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>

    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <script type="text/javascript">
        var auto_refresh = setInterval(
            function ()
            {
                $('#display').load('../controller/tickets/update.php?q=<?php echo $price; ?>').fadeIn("slow");
            }, 10000); // refresh every 10000 milliseconds

    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->
    <link href="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="../assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../assets/demo/demo7/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="../assets/demo/demo7/media/img/logo/favicon.ico" />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-light m-aside-left--fixed m-aside-left--offcanvas m-aside-left--minimize m-brand--minimize m-footer--push m-aside--offcanvas-default"  >
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page">
    <?php require "topbar.php"?>
    <!-- begin::Body -->
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <?php require "leftbar.php"?>
        <div class="m-grid__item m-grid__item--fluid m-wrapper">
            <!-- BEGIN: Subheader -->

            <!-- END: Subheader -->
            <div class="m-content">
                <!--Begin::Section-->

                        <div class="row  m-portlet--full-height ">
                            <div class="col-xl-8">
                                <!--begin:: Widgets/Stats2-1 -->



                                        <div id="tradingview_76058" style="height: 80vh"></div>

                                        <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                        <script type="text/javascript">
                                            new TradingView.widget(
                                                {
                                                    "autosize": true,
                                                    "symbol": "<?php echo $u?>",
                                                    "interval": "D",
                                                    "timezone": "Etc/UTC",
                                                    "theme": "Light",
                                                    "style": "1",
                                                    "locale": "en",
                                                    "toolbar_bg": "#f1f3f6",
                                                    "enable_publishing": false,
                                                    "hide_top_toolbar": true,
                                                    "allow_symbol_change": true,
                                                    "hideideas": true,
                                                    "studies": [
                                                        "MAExp@tv-basicstudies",
                                                        "FisherTransform@tv-basicstudies"
                                                    ],

                                                    "show_popup_button": true,
                                                    "popup_width": "1000",
                                                    "popup_height": "650",
                                                    "container_id": "tradingview_76058"
                                                }
                                            );
                                        </script>




                                <!--end:: Widgets/Stats2-1 -->
                            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Sales Stats-->


                                    <div id="tradingview_462c1" style="height: 40vh"></div>

                                    <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                    <script type="text/javascript">
                                        new TradingView.widget(
                                            {
                                                "autosize": true,
                                                "symbol": "<?php echo $u?>",
                                                "interval": "60",
                                                "timezone": "Etc/UTC",
                                                "theme": "Light",
                                                "style": "1",
                                                "locale": "en",
                                                "toolbar_bg": "#f1f3f6",
                                                "enable_publishing": false,
                                                "hide_top_toolbar": true,
                                                "allow_symbol_change": true,
                                                "hideideas": true,
                                                "studies": [
                                                    "MAExp@tv-basicstudies"
                                                ],

                                                "show_popup_button": true,
                                                "popup_width": "1000",
                                                "popup_height": "650",
                                                "container_id": "tradingview_462c1"
                                            }
                                        );
                                    </script>

                                <div id="tradingview_462c2" style="height: 40vh"></div>

                                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                <script type="text/javascript">
                                    new TradingView.widget(
                                        {
                                            "autosize": true,
                                            "symbol": "<?php echo $u?>",
                                            "interval": "5",
                                            "timezone": "Etc/UTC",
                                            "theme": "Light",
                                            "style": "1",
                                            "locale": "en",
                                            "toolbar_bg": "#f1f3f6",
                                            "enable_publishing": false,
                                            "hide_top_toolbar": true,
                                            "allow_symbol_change": true,
                                            "hideideas": true,
                                            "studies": [
                                                "MAExp@tv-basicstudies"
                                            ],

                                            "show_popup_button": true,
                                            "popup_width": "1000",
                                            "popup_height": "650",
                                            "container_id": "tradingview_462c2"
                                        }
                                    );
                                </script>


                                <!--end:: Widgets/Sales Stats-->
                            </div>

                        </div>


                <!--End::Section-->
                <!--Begin::Section-->

                <!--End::Section-->
                <!--Begin::Section-->

                <!--End::Section-->
                <!--Begin::Section-->

                <!--End::Section-->

            </div>
        </div>
    </div>
    <!-- end:: Body -->
    <!-- begin::Footer -->
    <footer class="m-grid__item		m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last">
							<span class="m-footer__copyright">
								2018 &copy; Inrutrade by
								<a href="#" class="m-link">
									Inrutrade Develop
								</a>
							</span>
                </div>
                <div class="m-stack__item m-stack__item--right m-stack__item--middle m-stack__item--first">
                    <ul class="m-footer__nav m-nav m-nav--inline m--pull-right">
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											About
										</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#"  class="m-nav__link">
										<span class="m-nav__link-text">
											Privacy
										</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											T&C
										</span>
                            </a>
                        </li>
                        <li class="m-nav__item">
                            <a href="#" class="m-nav__link">
										<span class="m-nav__link-text">
											Purchase
										</span>
                            </a>
                        </li>
                        <li class="m-nav__item m-nav__item">
                            <a href="#" class="m-nav__link" data-toggle="m-tooltip" title="Support Center" data-placement="left">
                                <i class="m-nav__link-icon flaticon-technology-1 m--icon-font-size-lg3"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- end::Footer -->
</div>
<!-- end:: Page -->

<!-- begin::Scroll Top -->
<div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500" data-scroll-speed="300">
    <i class="la la-arrow-up"></i>
</div>
<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
<ul class="m-nav-sticky" style="margin-top: 30px;">
    <!--
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Showcase" data-placement="left">
				<a href="">
					<i class="la la-eye"></i>
				</a>
			</li>
			<li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Pre-sale Chat" data-placement="left">
				<a href="" >
					<i class="la la-comments-o"></i>
				</a>
			</li>
			-->
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Purchase" data-placement="left">
        <a href="https://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes" target="_blank">
            <i class="la la-cart-arrow-down"></i>
        </a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Documentation" data-placement="left">
        <a href="https://keenthemes.com/metronic/documentation.html" target="_blank">
            <i class="la la-code-fork"></i>
        </a>
    </li>
    <li class="m-nav-sticky__item" data-toggle="m-tooltip" title="Support" data-placement="left">
        <a href="https://keenthemes.com/forums/forum/support/metronic5/" target="_blank">
            <i class="la la-life-ring"></i>
        </a>
    </li>
</ul>
<!-- begin::Quick Nav -->

<!--begin::Base Scripts -->
<script src="../assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="../assets/demo/demo7/base/scripts.bundle.js" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<script src="../assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
<!--end::Page Vendors -->
<!--begin::Page Snippets -->
<script src="../assets/app/js/dashboard.js" type="text/javascript"></script>
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
