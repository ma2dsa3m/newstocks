
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

                            <?php echo @$amdtitle ?>

                        </h1>
                        <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">

                            <li class="m-nav__item">

                                <a href="" class="m-nav__link" >
											<span class="m-nav__link-text">
                                                <h3>
												<?php echo @$amdticket ?>
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
                                         <?php echo @$amdprice ?>

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
												(<?php echo @$amdchange ?>)
                                                </h5>
											</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker"><?php echo $timestamp?>
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
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
                                                   Open/Close Range
                                                </h3>
                                                <span class="m-widget1__desc">
                                                    Awerage Day Price - <?php echo (@$dayopen+@$dayclose)/2?>
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-brand">
															<?php echo @$dayopen," - ",@$dayclose?>
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    Intraday/Before Volume
                                                </h3>
                                                <span class="m-widget1__desc">
															Average
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-info">
															<?php echo @$indayvol?>
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                   Investor Sentiment
                                                </h3>
                                                <span class="m-widget1__desc">
															System bugs and issues
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-success">
															<?php echo @$anrec?>
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
															<?php echo @$target?>
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
															<?php echo @$weakrange?>
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
															<?php if(strlen($techrank)<=40){echo @$techrank;}
															else echo "n/a";?>
														</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget1__item">
                                        <div class="row m-row--no-padding align-items-center">
                                            <div class="col">
                                                <h3 class="m-widget1__title">
                                                    EX-DIVIDEND DATE
                                                </h3>
                                                <span class="m-widget1__desc">
                                                Current Dividents <?php echo @$divident?>
														</span>
                                            </div>
                                            <div class="col m--align-right">
														<span class="m-widget1__number m--font-success">
															<?php echo @$dividate?>
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
                                            Public Rating
                                        </h3>
                                        <span class="m-widget14__desc">
													Environment, Social and Governance (ESG) Ratings
												</span>
                                    </div>
                                    <div class="row  align-items-center">
                                        <div class="col">
                                            <div id="m_chart_profit_share" class="m-widget14__chart" style="height: 160px">
                                                <div class="m-widget14__stat">
                                                    <?php echo @$esg?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="m-widget14__legends">
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-accent"></span>
                                                    <span class="m-widget14__legend-text">
																<?php echo @$monper?> Invest Month
															</span>
                                                </div>
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-warning"></span>
                                                    <span class="m-widget14__legend-text">
																<?php echo @$triper?> Invest 3 Month
															</span>
                                                </div>
                                                <div class="m-widget14__legend">
                                                    <span class="m-widget14__legend-bullet m--bg-brand"></span>
                                                    <span class="m-widget14__legend-text">
																<?php echo @$yearper?> Invest Year
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
                                        <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                                            <a href="#" class="m-portlet__nav-link m-dropdown__toggle dropdown-toggle btn btn--sm m-btn--pill btn-secondary m-btn m-btn--label-danger">
                                               Chart Table
                                            </a>
                                            <div class="m-dropdown__wrapper">
                                                <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust" style="left: auto; right: 50.203125px;"></span>
                                                <div class="m-dropdown__inner">
                                                    <div class="m-dropdown__body">
                                                        <div class="m-dropdown__content">
                                                            <ul class="m-nav">
                                                                <li class="m-nav__section m-nav__section--first">
																			<span class="m-nav__section-text">
																				Charting by TradingView
																			</span>
                                                                </li>
                                                                <li class="m-nav__item">
                                                                    <a href="chart.php?ticket=<?php echo @$amdticket?>" class="m-nav__link">
                                                                        <i class="m-nav__link-icon flaticon-share"></i>
                                                                        <span class="m-nav__link-text">
																					1d-1h-5m
																				</span>
                                                                    </a>
                                                                </li>

                                                                <button type="button" class="btn btn-success" data-container="body" data-toggle="m-popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="">
                                                                    Popover on left
                                                                </button>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
													Average Volume
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
													Avarage Product Price
													
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
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <h3 class="m-portlet__head-text">
                                            Insider
                                        </h3>
                                    </div>
                                </div>
                                <div class="m-portlet__head-tools">
                                    <ul class="nav nav-pills nav-pills--brand m-nav-pills--align-right m-nav-pills--btn-pill m-nav-pills--btn-sm" role="tablist">
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_widget4_tab1_content" role="tab">
                                                3 month
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab2_content" role="tab">
                                                6 month
                                            </a>
                                        </li>
                                        <li class="nav-item m-tabs__item">
                                            <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_widget4_tab3_content" role="tab">
                                                1 year
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="m_widget4_tab1_content">
                                        <div class="m-scrollable" data-scrollable="true" data-max-height="200" style="height: 400px; overflow: hidden;">
                                            <div class="m-list-timeline m-list-timeline--skin-light">
                                                <div class="m-list-timeline__items">
                                                    <div class="m-list-timeline__item">
                                                        <span class="m-list-timeline__badge m-list-timeline__badge--success"></span>
                                                        <span class="m-list-timeline__text">
																	12 new users registered
																</span>
                                                        <span class="m-list-timeline__time">
																	Just now
																</span>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="m_widget4_tab2_content"></div>
                                    <div class="tab-pane" id="m_widget4_tab3_content"></div>
                                </div>
                            </div>
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
<div id="m_quick_sidebar" class="m-quick-sidebar m-quick-sidebar--tabbed m-quick-sidebar--skin-light">
    <div class="m-quick-sidebar__content m--hide">
				<span id="m_quick_sidebar_close" class="m-quick-sidebar__close">
					<i class="la la-close"></i>
				</span>
        <ul id="m_quick_sidebar_tabs" class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_quick_sidebar_tabs_messenger" role="tab">
                    Messages
                </a>
            </li>
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link" 		data-toggle="tab" href="#m_quick_sidebar_tabs_settings" role="tab">
                    Settings
                </a>
            </li>
            <li class="nav-item m-tabs__item">
                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_quick_sidebar_tabs_logs" role="tab">
                    Technical Analisis
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane active m-scrollable" id="m_quick_sidebar_tabs_messenger" role="tabpanel">
                <div class="m-messenger m-messenger--message-arrow m-messenger--skin-light">
                    <div class="m-messenger__messages">
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--in">
                                <div class="m-messenger__message-pic">
                                    <img src="assets/app/media/img//users/user3.jpg" alt=""/>
                                </div>
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-username">
                                            Megan wrote
                                        </div>
                                        <div class="m-messenger__message-text">
                                            Hi Bob. What time will be the meeting ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--out">
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-text">
                                            Hi Megan. It's at 2.30PM
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--in">
                                <div class="m-messenger__message-pic">
                                    <img src="assets/app/media/img//users/user3.jpg" alt=""/>
                                </div>
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-username">
                                            Megan wrote
                                        </div>
                                        <div class="m-messenger__message-text">
                                            Will the development team be joining ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--out">
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-text">
                                            Yes sure. I invited them as well
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__datetime">
                            2:30PM
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--in">
                                <div class="m-messenger__message-pic">
                                    <img src="assets/app/media/img//users/user3.jpg"  alt=""/>
                                </div>
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-username">
                                            Megan wrote
                                        </div>
                                        <div class="m-messenger__message-text">
                                            Noted. For the Coca-Cola Mobile App project as well ?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--out">
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-text">
                                            Yes, sure.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--out">
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-text">
                                            Please also prepare the quotation for the Loop CRM project as well.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__datetime">
                            3:15PM
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--in">
                                <div class="m-messenger__message-no-pic m--bg-fill-danger">
											<span>
												M
											</span>
                                </div>
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-username">
                                            Megan wrote
                                        </div>
                                        <div class="m-messenger__message-text">
                                            Noted. I will prepare it.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--out">
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-text">
                                            Thanks Megan. I will see you later.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="m-messenger__wrapper">
                            <div class="m-messenger__message m-messenger__message--in">
                                <div class="m-messenger__message-pic">
                                    <img src="assets/app/media/img//users/user3.jpg"  alt=""/>
                                </div>
                                <div class="m-messenger__message-body">
                                    <div class="m-messenger__message-arrow"></div>
                                    <div class="m-messenger__message-content">
                                        <div class="m-messenger__message-username">
                                            Megan wrote
                                        </div>
                                        <div class="m-messenger__message-text">
                                            Sure. See you in the meeting soon.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="m-messenger__seperator"></div>
                    <div class="m-messenger__form">
                        <div class="m-messenger__form-controls">
                            <input type="text" name="" placeholder="Type here..." class="m-messenger__form-input">
                        </div>
                        <div class="m-messenger__form-tools">
                            <a href="" class="m-messenger__form-attachment">
                                <i class="la la-paperclip"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_settings" role="tabpanel">
                <div class="m-list-settings">
                    <div class="m-list-settings__group">
                        <div class="m-list-settings__heading">
                            General Settings
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Email Notifications
									</span>
                            <span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Site Tracking
									</span>
                            <span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										SMS Alerts
									</span>
                            <span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Backup Storage
									</span>
                            <span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Audit Logs
									</span>
                            <span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
                        </div>
                    </div>
                    <div class="m-list-settings__group">
                        <div class="m-list-settings__heading">
                            System Settings
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										System Logs
									</span>
                            <span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Error Reporting
									</span>
                            <span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Applications Logs
									</span>
                            <span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Backup Servers
									</span>
                            <span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" checked="checked" name="">
												<span></span>
											</label>
										</span>
									</span>
                        </div>
                        <div class="m-list-settings__item">
									<span class="m-list-settings__item-label">
										Audit Logs
									</span>
                            <span class="m-list-settings__item-control">
										<span class="m-switch m-switch--outline m-switch--icon-check m-switch--brand">
											<label>
												<input type="checkbox" name="">
												<span></span>
											</label>
										</span>
									</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane  m-scrollable" id="m_quick_sidebar_tabs_logs" role="tabpanel">
                <div class="m-list-timeline">
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            Golden Cross (50MA cross up 200MA)
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo ($techtable[1]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo ($techtable[1]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
											echo($techprice[0]['#text'][0]);
											?>
										</span>
                            </div>

                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo ($techtable[2]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo ($techtable[2]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo($techprice[3]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo ($techtable[3]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo ($techtable[3]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo($techprice[6]['#text'][0]);
                                    ?>
										</span>
                            </div>

                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo ($techtable[4]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$techtable[4]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$techprice[9]['#text'][0]);
                                    ?>
										</span>
                            </div>

                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo ($techtable[5]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$techtable[5]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$techprice[12]['#text'][0]);
                                    ?>
										</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            Death Cross (50MA cross down 200MA)
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$downcross[1]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$downcross[1]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$downprice[0]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$downcross[2]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$downcross[2]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$downprice[3]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo ($downcross[3]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$downcross[3]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$downprice[6]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$downcross[4]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$downcross[4]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$downprice[9]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$downcross[5]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$downcross[5]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$downprice[12]['#text'][0]);
                                    ?>
										</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            Oversold + Momentum Rising
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$oversold[1]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$oversold[1]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$oversprice[0]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo ($oversold[2]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$oversold[2]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$oversprice[3]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$oversold[3]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$oversold[3]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$oversprice[6]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$oversold[4]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$oversold[4]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$oversprice[9]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$oversold[5]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$oversold[5]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$oversprice[12]['#text'][0]);
                                    ?>
										</span>
                            </div>
                        </div>
                    </div>
                    <div class="m-list-timeline__group">
                        <div class="m-list-timeline__heading">
                            Overbought + Momentum Falling
                        </div>
                        <div class="m-list-timeline__items">
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$overboug[1]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$overboug[1]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$overbprice[0]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo ($overboug[2]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$overboug[2]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$overbprice[3]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$overboug[3]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$overboug[3]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$overbprice[6]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$overboug[4]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$overboug[4]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$overbprice[9]['#text'][0]);
                                    ?>
										</span>
                            </div>
                            <div class="m-list-timeline__item">
                                <span class="m-list-timeline__badge m-list-timeline__badge--state-success"></span>
                                <a href="dash.php?ticket=<?php echo (@$overboug[5]['#text'][0]);?>" class="m-list-timeline__text">
                                    <?php
                                    echo (@$overboug[5]['#text'][0]);

                                    ?>

                                </a>
                                <span class="m-list-timeline__time">
                                    <?php
                                    echo(@$overbprice[12]['#text'][0]);
                                    ?>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
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
<!--end::Page Snippets -->
</body>
<!-- end::Body -->
</html>
