<!-- BEGIN: Left Aside -->
<button class="m-aside-left-close  m-aside-left-close--skin-light " id="m_aside_left_close_btn">
    <i class="la la-close"></i>
</button>
<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-light ">
    <!-- BEGIN: Brand -->
    <div class="m-brand  m-brand--skin-light ">
        <a href="dash.php?ticket=<?php echo @$ticker?>" class="m-brand__logo">
            <img alt="" src="../assets/demo/demo7/media/img/logo/logo.png"/>
        </a>
    </div>
    <!-- END: Brand -->
    <!-- BEGIN: Aside Menu -->
    <div
        id="m_ver_menu"
        class="m-aside-menu  m-aside-menu--skin-light m-aside-menu--submenu-skin-light "
        data-menu-vertical="true"
        data-menu-scrollable="true" data-menu-dropdown-timeout="500"
    >
        <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
            <li class="m-menu__item  m-menu__item--submenu m-menu__item--submenu-fullheight" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-dropdown-toggle-class="m-aside-menu-overlay--on">
                <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-menu"></i>
                    <span class="m-menu__link-text">
										Applications
									</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <div class="m-menu__wrapper">
                        <ul class="m-menu__subnav">
                            <li class="m-menu__item  m-menu__item--parent m-menu__item--submenu-fullheight" aria-haspopup="true" >
												<span class="m-menu__link">
													<span class="m-menu__link-text">
														Tech Analisis
													</span>
												</span>
                            </li>
                            <li class="m-menu__section">
                                <h4 class="m-menu__section-text">
                                    Trendline
                                </h4>
                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														TD Support
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[2]["tr"][1] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-4"></i>
        <span class="m-menu__link-text">
																		',$signal[2]["tr"][1] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														TD Resistance
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[2]["tr"][2] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-3"></i>
        <span class="m-menu__link-text">
																		',$signal[2]["tr"][2] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>

                            <li class="m-menu__section">
                                <h4 class="m-menu__section-text">
                                    Channel
                                </h4>
                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Channel Up
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[3]["tr"][1] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-4"></i>
        <span class="m-menu__link-text">
																		',$signal[3]["tr"][1] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Channel
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[3]["tr"][2] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-3"></i>
        <span class="m-menu__link-text">
																		',$signal[3]["tr"][2] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">

                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Channel Down
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[3]["tr"][3] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-3"></i>
        <span class="m-menu__link-text">
																		',$signal[3]["tr"][3] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>

                            <li class="m-menu__section">
                                <h4 class="m-menu__section-text">
                                    Wedge
                                </h4>
                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Wedge Up
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[2]["tr"][4] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-4"></i>
        <span class="m-menu__link-text">
																		',$signal[2]["tr"][4] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Wedge
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[2]["tr"][5] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-3"></i>
        <span class="m-menu__link-text">
																		',$signal[2]["tr"][5] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">

                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Wedge Down
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[2]["tr"][6] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-3"></i>
        <span class="m-menu__link-text">
																		',$signal[2]["tr"][6] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>

                            <li class="m-menu__section">
                                <h4 class="m-menu__section-text">
                                    Top
                                </h4>
                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Double Top
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[3]["tr"][4] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-4"></i>
        <span class="m-menu__link-text">
																		',$signal[3]["tr"][4] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Multi Top
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[3]["tr"][5] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-3"></i>
        <span class="m-menu__link-text">
																		',$signal[3]["tr"][5] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>

                            <li class="m-menu__section">
                                <h4 class="m-menu__section-text">
                                    Triangle
                                </h4>
                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Triangle Ascending
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[2]["tr"][7] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-4"></i>
        <span class="m-menu__link-text">
																		',$signal[2]["tr"][7] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Triangle Descending
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[2]["tr"][8] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-3"></i>
        <span class="m-menu__link-text">
																		',$signal[2]["tr"][8] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>

                            <li class="m-menu__section">
                                <h4 class="m-menu__section-text">
                                    Top
                                </h4>
                                <i class="m-menu__section-icon flaticon-more-v3"></i>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Double Top
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[3]["tr"][4] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-4"></i>
        <span class="m-menu__link-text">
																		',$signal[3]["tr"][4] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>
                            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-menu-submenu-mode="accordion">
                                <a  href="#" class="m-menu__link m-menu__toggle">
													<span class="m-menu__link-text">
														Multi Top
													</span>
                                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                                </a>
                                <div class="m-menu__submenu ">
                                    <span class="m-menu__arrow"></span>
                                    <ul class="m-menu__subnav">
                                        <?php
                                        $i = [0,1,2,3,];
                                        foreach ($i as $io){
                                            echo '<li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
    <a  href="dash.php?ticket=',$signal[3]["tr"][5] ["td"][$io]["a"][0]["#text"][0],'" class="m-menu__link ">
        <i class="m-menu__link-icon flaticon-folder-3"></i>
        <span class="m-menu__link-text">
																		',$signal[3]["tr"][5] ["td"][$io]["a"][0]["#text"][0],'
																	</span>
    </a>
</li>';




                                        };
                                        ?>

                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="click" data-redirect="true">
                <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-add"></i>
                    <span class="m-menu__link-text">
										Add
									</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent" aria-haspopup="true"  data-redirect="true">
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Add
												</span>
											</span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-icon la la-commenting"></i>
                                <span class="m-menu__link-text">
													Post
												</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-icon la la-user"></i>
                                <span class="m-menu__link-text">
													Member
												</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-icon la la-cart-arrow-down"></i>
                                <span class="m-menu__link-text">
													Order
												</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-icon la la-coffee"></i>
                                <span class="m-menu__link-text">
													Entry
												</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom" aria-haspopup="true"  data-menu-submenu-toggle="click" data-redirect="true">
                <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-stopwatch"></i>
                    <span class="m-menu__link-text">
										Customers
									</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu ">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                       /////

                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-2" aria-haspopup="true"  data-menu-submenu-toggle="click">
                <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-settings"></i>
                    <span class="m-menu__link-text">
										Settings
									</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu m-menu__submenu--up">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-2" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Settings
												</span>
											</span>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu" aria-haspopup="true"  data-menu-submenu-toggle="hover" data-redirect="true">
                            <a  href="inner.html" class="m-menu__link m-menu__toggle">
                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Profile
												</span>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu ">
                                <span class="m-menu__arrow"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <i class="m-menu__link-icon flaticon-computer"></i>
                                            <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Pending
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--warning">
																			10
																		</span>
																	</span>
																</span>
															</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <i class="m-menu__link-icon flaticon-signs-2"></i>
                                            <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Urgent
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--danger">
																			6
																		</span>
																	</span>
																</span>
															</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <i class="m-menu__link-icon flaticon-clipboard"></i>
                                            <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Done
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--success">
																			2
																		</span>
																	</span>
																</span>
															</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <i class="m-menu__link-icon flaticon-multimedia-2"></i>
                                            <span class="m-menu__link-title">
																<span class="m-menu__link-wrap">
																	<span class="m-menu__link-text">
																		Archive
																	</span>
																	<span class="m-menu__link-badge">
																		<span class="m-badge m-badge--info m-badge--wide">
																			245
																		</span>
																	</span>
																</span>
															</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Accounts
												</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Help
												</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--line">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Notifications
												</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="m-menu__item  m-menu__item--submenu m-menu__item--bottom-1" aria-haspopup="true"  data-menu-submenu-toggle="click">
                <a  href="#" class="m-menu__link m-menu__toggle">
                    <i class="m-menu__link-icon flaticon-info"></i>
                    <span class="m-menu__link-text">
										Help
									</span>
                    <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
                <div class="m-menu__submenu m-menu__submenu--up">
                    <span class="m-menu__arrow"></span>
                    <ul class="m-menu__subnav">
                        <li class="m-menu__item  m-menu__item--parent m-menu__item--bottom-1" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Help
												</span>
											</span>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Support
												</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Blog
												</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Documentation
												</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Pricing
												</span>
                            </a>
                        </li>
                        <li class="m-menu__item " aria-haspopup="true"  data-redirect="true">
                            <a  href="inner.html" class="m-menu__link ">
                                <i class="m-menu__link-bullet m-menu__link-bullet--dot">
                                    <span></span>
                                </i>
                                <span class="m-menu__link-text">
													Terms
												</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
    <!-- END: Aside Menu -->
</div>
<div class="m-aside-menu-overlay"></div>
<!-- END: Left Aside -->