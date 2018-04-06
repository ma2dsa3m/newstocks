<?php
require "../controller/dashcontroller.php";
if (!isset($_SESSION['logged user'])){header('Location:../assets/landing/login.php');};
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

    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
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
            <div class="m-subheader ">
                <div class="d-flex align-items-center">
                    <div class="mr-auto">
                        <h1 class="m-subheader__title m-subheader__title--separator">
                            <?php echo @$title?>

                        </h1>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">

                            <li class="m-nav__item">

                                <a href="" class="m-nav__link" >
											<span class="m-nav__link-text">
                                                <h3>
												<?php echo @$ticker ?>
                                                </h3>
											</span>
                                </a>

                            </li>
                            <li class="m-nav__separator">
                                -
                            </li>

                            <li class="m-nav__item">

                                <a href="" class="m-nav__link" >
											<span class="m-nav__link-text" id="display">
                                     <h3>
                                         <?php echo @$price ?>

                                     </h3>
											</span>
                                </a>

                            </li>

                            <li class="m-nav__separator">
                                -
                            </li>
                            <li class="m-nav__item">
                                <a href="" class="m-nav__link">
											<span class="m-nav__link-text" id="display">
                                                <h5>
												(<?php echo @$change ?>)
                                                </h5>

											</span>
                                </a>

                            </li>
                        </ul>
                    </div>
                    <div>

								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker"><?php echo @$compprof?>
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
                        <button type="button" class="btn m-btn--square  m-btn m-btn--gradient-from-brand m-btn--gradient-to-info">
                            Add to Watchlist
                        </button>
                    </div>
                </div>
            </div>
            <!-- END: Subheader -->
            <div class="m-content">
                <!--Begin::Section-->
                <div class="m-portlet">
                    <div class="m-portlet__body  m-portlet__body--no-padding">
                        <div class="row m-row--no-padding m-row--col-separator-xl">
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Stats2-1 -->
                                <div class="m-widget1">
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                   Volatility
                                                </h3>
                                                <span class="m-widget1__desc">
                                                    Price To Earnings - <?php echo @$pe?>
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-brand">
															<?php echo @$volatility?>
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    Return on Investment
                                                </h3>
                                                <span class="m-widget1__desc">
															Average
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-info">
															<?php 
                                                                if(!@$roi){echo "n/a";} else echo @$roi;
                                                            ?>
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                   BPS
                                                </h3>
                                                <span class="m-widget1__desc">
															Book value Book/sh BPS
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-success">
															<?php echo @$bps?>
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    Target Price
                                                </h3>
                                                <span class="m-widget1__desc">
															Average
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-success">
															<?php 
                                                                    if(!@$targetprice){echo "n/a";} else echo @$targetprice;
                                                            ?>
														</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Stats2-1 -->
                            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Revenue Change-->
                                <div class="m-widget1">
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    52 Week Range
                                                </h3>
                                                <span class="m-widget1__desc">
															Price Range
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-brand">
															<?php echo @$weak?>
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    Beta
                                                </h3>
                                                <span class="m-widget1__desc">
															Beta Qty
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-info">
															<?php echo @$beta?>
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    Tech Analisis
                                                </h3>
                                                <span class="m-widget1__desc">
                                                Ratings by Technical Analisis
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-success">
															<?php if((@$sma50 - @$sma20)>=@$sma200){echo "Sell";}
															else echo "Buy";?>
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    EARNINGS PER SHARE Y
                                                </h3>
                                                <span class="m-widget1__desc">
                                                Current Dividents <?php echo @$divident?>
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-success">
															<?php  echo @$epsyear?>
														</span>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--end:: Widgets/Revenue Change-->
                            </div>
                            <div class="col-xl-4">
                                <!--begin:: Widgets/Profit Share-->
                                <div class="m-widget14">
                                    <div class="m-widget14__header">
                                        <h3 class="m-widget14__title">
                                            Investor Sentiment
                                        </h3>
                                        <span class="m-widget14__desc">
													Investor Sentiment Rating.
												</span>
                                    </div>
                                    <div class="row  align-items-center">
                                        <div class="col">
                                            <div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
                                                <div class="m-widget14__stat">
                                                    <?php if (@$recomend == "-") {
                                                                           echo "n/a";
                                                                        }elseif(@$recomend<2){echo "Buy";}
                                                                elseif (@$recomend>=2 && @$recomend<=3) {
                                                                echo "Hold";
                                                                } elseif (@$recomend>3 && @$recomend<=5) {
                                                                          echo "Sell";
                                                                        };?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="m-widget14__legends">
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                                    <span class="m-widget14__legend-text">
																<?php echo @$inmonth?> Invest Month
															</span>
                                                </div>
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                                    <span class="m-widget14__legend-text">
																<?php echo @$inquarter?> Invest 3 Month
															</span>
                                                </div>
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                                    <span class="m-widget14__legend-text">
																<?php echo @$inyear?> Invest Year
															</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end:: Widgets/Profit Share-->
                            </div>
                        </div>
                    </div>
                </div>
                <!--End::Section-->
                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-6">
                        <!--begin:: Widgets/Sales Stats-->
                        <div class="m-portlet m-portlet--full-height ">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Finance Summary
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="m-portlet__nav">
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline  m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="chart.php?ticket=<?php echo @$ticker?>" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-info m-btn m-btn--label-info">
                                               Chart Table
                                            </a>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="m-widget12">
                                    <div class="m-widget12__item">
												<span class="m-widget12__text1">
													Market Cap
													<br>
													<span>
														<?php echo @$marketcap?>
													</span>
												</span>
                                        <span class="m-widget12__text2">
													Earnings Date
													<br>
													<span>
														<?php echo @$earnings?>
													</span>
												</span>
                                    </div>
                                    <div class="m-widget12__item">
												<span class="m-widget12__text1">
													Volume
													<br>
													<span>
														<?php echo @$avervol?>
													</span>
												</span>
                                        <span class="m-widget12__text2">
													Exchange
													<br>
													<span>

														<?php echo(@$index[0]['#text'][0])
														//if(strlen($index[0]['#text'][0]) <= 11){echo($index[0]['#text'][0]);}else echo "n/a"; ?>
													</span>
												</span>
                                    </div>
                                    <div class="m-widget12__item">
												<span class="m-widget12__text1">
													Total Debt to Equity - <?php echo @$debt?>
													
												</span>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end:: Widgets/Sales Stats-->
                    </div>
                    <div class="col-xl-6">
                        <!--begin:: Widgets/Inbound Bandwidth-->
                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container m-portlet">
                            <div id="tradingview_76058"  style="height: 45vh"></div>

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
                                            "MAExp@tv-basicstudies"
                                        ],

                                        "show_popup_button": true,
                                        "popup_width": "1000",
                                        "popup_height": "650",
                                        "container_id": "tradingview_76058"
                                    }
                                );
                            </script>
                        </div>
                        <!-- TradingView Widget END -->
                        <!--end:: Widgets/Inbound Bandwidth-->

                        <!--begin:: Widgets/Outbound Bandwidth-->

                        <!--end:: Widgets/Outbound Bandwidth-->
                    </div>

                </div>
                <!--End::Section-->
                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-8">
                        <?php require "../controller/tickets/bigmoney.php";?>
                    </div>
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Audit Log-->
                        <div class="m-portlet m-portlet--full-height ">
                            <!-- TradingView Widget BEGIN -->
                            <div class="tradingview-widget-container" >
                                <div id="tradingview_f6710" style="height: 40vh"></div>

                                <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
                                <script type="text/javascript">
                                    new TradingView.widget(
                                        {
                                            "autosize": true,
                                            "symbol": "<?php echo @$ticker?>",
                                            "interval": "D",
                                            "theme": "Light",
                                            "locale": "en",
                                            "toolbar_bg": "#f1f3f6",
                                            "fundamental": "Script$EDGR_DIVIDEND_YIELD_V2@tv-scripting",
                                            "percentage": true,
                                            "hide_top_toolbar": true,
                                            "hide_side_toolbar": true,
                                            "allow_symbol_change": true,
                                            "save_image": false,
                                            "container_id": "tradingview_f6710"
                                        }
                                    );
                                </script>
                            </div>
                            <!-- TradingView Widget END -->
                        </div>
                        <!--end:: Widgets/Audit Log-->
                    </div>
                </div>
                <!--End::Section-->
                <!--Begin::Section-->
                <div class="row">
                    <div class="col-xl-4">
                        <!--begin:: Widgets/Support Tickets -->
                        <?php require "../controller/tickets/news.php"?>
                        <!--end:: Widgets/Support Tickets -->
                    </div>
                    <div class="col-xl-8">
                        <!--begin:: Widgets/Tasks -->

                       <?php if(!$inside){echo '<div class="m-alert m-alert--icon m-alert--icon-solid m-alert--outline alert alert-danger alert-dismissible fade show" role="alert">
											<div class="m-alert__icon">
												<i class="flaticon-exclamation-1"></i>
												<span></span>
											</div>
											<div class="m-alert__text">
												<strong>
													No Insider Data To Show
												</strong>
												
											</div>
											<div class="m-alert__close">
												<button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>
											</div>
										</div>';}else require "../controller/tickets/inside.php";?>
                        <!--end:: Widgets/Tasks -->
                    </div>

                </div>
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
<!-- begin::Quick Sidebar -->
<?php require "rightbar.php";?>
<!-- end::Quick Sidebar -->
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

<?php require "../controller/analytics.php";?>
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
