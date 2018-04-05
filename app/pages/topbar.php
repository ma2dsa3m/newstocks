<!-- BEGIN: Header -->
<header class="m-grid__item    m-header "  data-minimize-offset="200" data-minimize-mobile-offset="200" >
    <div class="m-container m-container--fluid m-container--full-height">
        <div class="m-stack m-stack--ver m-stack--desktop">
            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand ">
                <div class="m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-stack__item--middle m-brand__logo">
                        <a href="dash.php?ticket=<?php echo @$ticker?>" class="m-brand__logo-wrapper">
                            <img alt="" src="../assets/demo/demo7/media/img/logo/logo.png"/>
                        </a>
                    </div>
                    <div class="m-stack__item m-stack__item--middle m-brand__tools">
                        <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                        <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                            <span></span>
                        </a>
                        <!-- END -->
                        <!-- BEGIN: Responsive Header Menu Toggler -->
                        <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                            <span></span>
                        </a>
                        <!-- END -->
                        <!-- BEGIN: Topbar Toggler -->
                        <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                            <i class="flaticon-more"></i>
                        </a>
                        <!-- BEGIN: Topbar Toggler -->
                    </div>
                </div>
            </div>
            <!-- END: Brand -->
            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">
                <!-- BEGIN: Horizontal Menu -->
                <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-light " id="m_aside_header_menu_mobile_close_btn">
                    <i class="la la-close"></i>
                </button>
                <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-light m-aside-header-menu-mobile--submenu-skin-light "  >
                    <ul class="m-menu__nav  m-menu__nav--submenu-arrow ">
                        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" aria-haspopup="true">
                            <a  href="#" class="m-menu__link m-menu__toggle">
                                <span class="m-menu__item-here"></span>
                                <span class="m-menu__link-text">
												<?php echo @$title ?>
											</span>
                                <i class="m-menu__hor-arrow la la-angle-down"></i>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left" style="width:600px">
                                <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                <ul class="m-menu__subnav">
                                    <?php echo(@$about)?>
                                </ul>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                            <a  href="#" class="m-menu__link m-menu__toggle">
                                <span class="m-menu__item-here"></span>
                                <span class="m-menu__link-text">
												New Inside
											</span>
                                <i class="m-menu__hor-arrow la la-angle-down"></i>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu  m-menu__submenu--fixed m-menu__submenu--left" style="width:800px">
                                <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                <div class="m-menu__subnav">
                                    <ul class="m-menu__content">

                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Ticker</th>
                                                <th>Latest Insider Trading</th>
                                                <th>Relationship</th>
                                                <th>Date</th>
                                                <th>Transaction</th>
                                                <th>Cost</th>
                                                <th>Shares</th>
                                                <th>Value($)</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$newinside[0]['a'][0]['#text'][0])?>" ><?php echo(@$newinside[0]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$newinside[1]['a'][0]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[2]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[3]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[4]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[5]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[6]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[7]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$newinside[8]['a'][0]['#text'][0])?>" ><?php echo(@$newinside[8]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$newinside[9]['a'][0]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[10]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[11]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[12]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[13]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[14]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[15]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$newinside[16]['a'][0]['#text'][0])?>" ><?php echo(@$newinside[16]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$newinside[17]['a'][0]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[18]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[19]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[20]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[21]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[22]['#text'][0])?></td>
                                                <td><?php echo(@$newinside[23]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$newinside2[0]['a'][0]['#text'][0])?>" ><?php echo(@$newinside2[0]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$newinside2[1]['a'][0]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[2]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[3]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[4]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[5]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[6]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[7]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$newinside2[8]['a'][0]['#text'][0])?>" ><?php echo(@$newinside2[8]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$newinside2[9]['a'][0]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[10]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[11]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[12]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[13]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[14]['#text'][0])?></td>
                                                <td><?php echo(@$newinside2[15]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$newinsidesell[0]['a'][0]['#text'][0])?>" ><?php echo(@$newinsidesell[0]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$newinsidesell[1]['a'][0]['#text'][0])?></td>
                                                <td><?php echo(@$newinsidesell[2]['#text'][0])?></td>
                                                <td><?php echo(@$newinsidesell[3]['#text'][0])?></td>
                                                <td><?php echo(@$newinsidesell[4]['#text'][0])?></td>
                                                <td><?php echo(@$newinsidesell[5]['#text'][0])?></td>
                                                <td><?php echo(@$newinsidesell[6]['#text'][0])?></td>
                                                <td><?php echo(@$newinsidesell[7]['#text'][0])?></td>
                                            </tr>

                                            </tbody>
                                        </table>

                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                            <a  href="#" class="m-menu__link m-menu__toggle">
                                <span class="m-menu__item-here"></span>
                                <span class="m-menu__link-text">
												Top Up
											</span>
                                <i class="m-menu__hor-arrow la la-angle-down"></i>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu  m-menu__submenu--fixed-m m-menu__submenu--center" style="width: 335px">
                                <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                <div class="m-menu__subnav">
                                    <ul class="m-menu__content">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Tiker</th>
                                                <th>Last</th>
                                                <th>Change</th>
                                                <th>Signal</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[6]['a'][0]['#text'][0])?>" ><?php echo(@$topup[6]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[7]['#text'][0])?></td>
                                                <td><?php echo(@$topup[8]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[11]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[12]['a'][0]['#text'][0])?>" ><?php echo(@$topup[12]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[13]['#text'][0])?></td>
                                                <td><?php echo(@$topup[14]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[17]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[18]['a'][0]['#text'][0])?>" ><?php echo(@$topup[18]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[19]['#text'][0])?></td>
                                                <td><?php echo(@$topup[20]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[23]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[24]['a'][0]['#text'][0])?>" ><?php echo(@$topup[24]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[25]['#text'][0])?></td>
                                                <td><?php echo(@$topup[26]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[29]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[30]['a'][0]['#text'][0])?>" ><?php echo(@$topup[30]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[31]['#text'][0])?></td>
                                                <td><?php echo(@$topup[32]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[35]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[36]['a'][0]['#text'][0])?>" ><?php echo(@$topup[36]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[37]['#text'][0])?></td>
                                                <td><?php echo(@$topup[38]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[41]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[42]['a'][0]['#text'][0])?>" ><?php echo(@$topup[42]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[43]['#text'][0])?></td>
                                                <td><?php echo(@$topup[44]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[47]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[48]['a'][0]['#text'][0])?>" ><?php echo(@$topup[48]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[49]['#text'][0])?></td>
                                                <td><?php echo(@$topup[50]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[53]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[54]['a'][0]['#text'][0])?>" ><?php echo(@$topup[54]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[55]['#text'][0])?></td>
                                                <td><?php echo(@$topup[56]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[59]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[60]['a'][0]['#text'][0])?>" ><?php echo(@$topup[60]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[61]['#text'][0])?></td>
                                                <td><?php echo(@$topup[62]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[65]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[66]['a'][0]['#text'][0])?>" ><?php echo(@$topup[66]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[67]['#text'][0])?></td>
                                                <td><?php echo(@$topup[68]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[71]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[72]['a'][0]['#text'][0])?>" ><?php echo(@$topup[72]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[73]['#text'][0])?></td>
                                                <td><?php echo(@$topup[74]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[77]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[78]['a'][0]['#text'][0])?>" ><?php echo(@$topup[78]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[79]['#text'][0])?></td>
                                                <td><?php echo(@$topup[80]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[83]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[84]['a'][0]['#text'][0])?>" ><?php echo(@$topup[84]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[85]['#text'][0])?></td>
                                                <td><?php echo(@$topup[86]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[89]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[90]['a'][0]['#text'][0])?>" ><?php echo(@$topup[90]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[91]['#text'][0])?></td>
                                                <td><?php echo(@$topup[92]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[95]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[96]['a'][0]['#text'][0])?>" ><?php echo(@$topup[96]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[97]['#text'][0])?></td>
                                                <td><?php echo(@$topup[98]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[101]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                            <a  href="#" class="m-menu__link m-menu__toggle">
                                <span class="m-menu__item-here"></span>
                                <span class="m-menu__link-text">
												Top Down
											</span>
                                <i class="m-menu__hor-arrow la la-angle-down"></i>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu  m-menu__submenu--fixed-xl m-menu__submenu--center" style="width: 335px">
                                <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                <div class="m-menu__subnav">
                                    <ul class="m-menu__content">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Tiker</th>
                                                <th>Last</th>
                                                <th>Change</th>
                                                <th>Signal</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[126]['a'][0]['#text'][0])?>" ><?php echo(@$topup[126]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[127]['#text'][0])?></td>
                                                <td><?php echo(@$topup[128]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[131]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[132]['a'][0]['#text'][0])?>" ><?php echo(@$topup[132]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[133]['#text'][0])?></td>
                                                <td><?php echo(@$topup[134]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[137]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[138]['a'][0]['#text'][0])?>" ><?php echo(@$topup[138]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[139]['#text'][0])?></td>
                                                <td><?php echo(@$topup[140]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[143]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[144]['a'][0]['#text'][0])?>" ><?php echo(@$topup[144]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[145]['#text'][0])?></td>
                                                <td><?php echo(@$topup[146]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[149]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[150]['a'][0]['#text'][0])?>" ><?php echo(@$topup[150]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[151]['#text'][0])?></td>
                                                <td><?php echo(@$topup[152]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[155]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[156]['a'][0]['#text'][0])?>" ><?php echo(@$topup[156]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[157]['#text'][0])?></td>
                                                <td><?php echo(@$topup[158]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[161]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[162]['a'][0]['#text'][0])?>" ><?php echo(@$topup[162]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[163]['#text'][0])?></td>
                                                <td><?php echo(@$topup[164]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[167]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[168]['a'][0]['#text'][0])?>" ><?php echo(@$topup[168]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[169]['#text'][0])?></td>
                                                <td><?php echo(@$topup[170]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[173]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[174]['a'][0]['#text'][0])?>" ><?php echo(@$topup[174]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[175]['#text'][0])?></td>
                                                <td><?php echo(@$topup[176]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[179]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[180]['a'][0]['#text'][0])?>" ><?php echo(@$topup[180]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[181]['#text'][0])?></td>
                                                <td><?php echo(@$topup[182]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[185]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[186]['a'][0]['#text'][0])?>" ><?php echo(@$topup[186]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[187]['#text'][0])?></td>
                                                <td><?php echo(@$topup[188]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[191]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[192]['a'][0]['#text'][0])?>" ><?php echo(@$topup[192]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[193]['#text'][0])?></td>
                                                <td><?php echo(@$topup[194]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[197]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[198]['a'][0]['#text'][0])?>" ><?php echo(@$topup[198]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[199]['#text'][0])?></td>
                                                <td><?php echo(@$topup[200]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[203]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[204]['a'][0]['#text'][0])?>" ><?php echo(@$topup[204]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[205]['#text'][0])?></td>
                                                <td><?php echo(@$topup[206]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[209]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[210]['a'][0]['#text'][0])?>" ><?php echo(@$topup[210]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[211]['#text'][0])?></td>
                                                <td><?php echo(@$topup[212]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[215]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><a href="dash.php?ticket=<?php echo(@$topup[216]['a'][0]['#text'][0])?>" ><?php echo(@$topup[216]['a'][0]['#text'][0])?></a></th>
                                                <td><?php echo(@$topup[217]['#text'][0])?></td>
                                                <td><?php echo(@$topup[218]["span"][0]['#text'][0])?></td>
                                                <td><?php echo(@$topup[221]['a'][0]['#text'][0])?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                            <a  href="#" class="m-menu__link m-menu__toggle">
                                <span class="m-menu__item-here"></span>
                                <span class="m-menu__link-text">
													Earnings Release
											</span>
                                <i class="m-menu__hor-arrow la la-angle-down"></i>
                                <i class="m-menu__ver-arrow la la-angle-right"></i>
                            </a>
                            <div class="m-menu__submenu  m-menu__submenu--center" style="width: 600px">
                                <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                <div class="m-menu__subnav">
                                    <ul class="m-menu__content">
                                        <table class="table">
                                            <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th scope="row"><?php echo(@$earningstoday[4]['#text'][0])?></th>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[6]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[6]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[7]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[7]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[8]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[8]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[9]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[9]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[10]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[10]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[11]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[11]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[12]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[12]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[13]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[13]['a'][0]['#text'][0])?></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?php echo(@$earningstoday[15]['#text'][0])?></th>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[17]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[17]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[18]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[18]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[19]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[19]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[20]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[20]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[21]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[21]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[22]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[22]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[23]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[23]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[24]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[24]['a'][0]['#text'][0])?></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?php echo(@$earningstoday[26]['#text'][0])?></th>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[28]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[28]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[29]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[29]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[30]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[30]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[31]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[31]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[32]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[32]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[33]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[33]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[34]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[34]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[35]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[35]['a'][0]['#text'][0])?></a></td>
                                            </tr>
                                            <tr>
                                                <th scope="row"><?php echo(@$earningstoday[37]['#text'][0])?></th>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[39]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[39]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[40]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[40]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[41]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[41]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[42]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[42]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[43]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[43]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[44]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[44]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[45]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[45]['a'][0]['#text'][0])?></a></td>
                                                <td><a href="dash.php?ticket=<?php echo(@$earningstoday[46]['a'][0]['#text'][0])?>"><?php echo(@$earningstoday[46]['a'][0]['#text'][0])?></a></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="m-menu__item  m-menu__item--submenu m-menu__item--rel m-menu__item--more m-menu__item--icon-only"  data-menu-submenu-toggle="click" data-redirect="true" aria-haspopup="true">
                            <a  href="#" class="m-menu__link m-menu__toggle">
                                <span class="m-menu__item-here"></span>
                                <i class="m-menu__link-icon flaticon-more-v3"></i>
                                <span class="m-menu__link-text"></span>
                            </a>
                            <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left m-menu__submenu--pull">
                                <span class="m-menu__arrow m-menu__arrow--adjust"></span>
                                <ul class="m-menu__subnav">
                                    <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <i class="m-menu__link-icon flaticon-business"></i>
                                            <span class="m-menu__link-text">
															eCommerce
														</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
                                        <a  href="crud/datatable_v1.html" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-computer"></i>
                                            <span class="m-menu__link-text">
															Audience
														</span>
                                            <i class="m-menu__hor-arrow la la-angle-right"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--right">
                                            <span class="m-menu__arrow "></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-users"></i>
                                                        <span class="m-menu__link-text">
																		Active Users
																	</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-interface-1"></i>
                                                        <span class="m-menu__link-text">
																		User Explorer
																	</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-lifebuoy"></i>
                                                        <span class="m-menu__link-text">
																		Users Flows
																	</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-graphic-1"></i>
                                                        <span class="m-menu__link-text">
																		Market Segments
																	</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-graphic"></i>
                                                        <span class="m-menu__link-text">
																		User Reports
																	</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <i class="m-menu__link-icon flaticon-map"></i>
                                            <span class="m-menu__link-text">
															Marketing
														</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                        <a  href="inner.html" class="m-menu__link ">
                                            <i class="m-menu__link-icon flaticon-graphic-2"></i>
                                            <span class="m-menu__link-title">
															<span class="m-menu__link-wrap">
																<span class="m-menu__link-text">
																	Campaigns
																</span>
																<span class="m-menu__link-badge">
																	<span class="m-badge m-badge--success">
																		3
																	</span>
																</span>
															</span>
														</span>
                                        </a>
                                    </li>
                                    <li class="m-menu__item  m-menu__item--submenu"  data-menu-submenu-toggle="hover" data-redirect="true" aria-haspopup="true">
                                        <a  href="#" class="m-menu__link m-menu__toggle">
                                            <i class="m-menu__link-icon flaticon-infinity"></i>
                                            <span class="m-menu__link-text">
															Cloud Manager
														</span>
                                            <i class="m-menu__hor-arrow la la-angle-right"></i>
                                            <i class="m-menu__ver-arrow la la-angle-right"></i>
                                        </a>
                                        <div class="m-menu__submenu m-menu__submenu--classic m-menu__submenu--left">
                                            <span class="m-menu__arrow "></span>
                                            <ul class="m-menu__subnav">
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-add"></i>
                                                        <span class="m-menu__link-title">
																		<span class="m-menu__link-wrap">
																			<span class="m-menu__link-text">
																				File Upload
																			</span>
																			<span class="m-menu__link-badge">
																				<span class="m-badge m-badge--danger">
																					3
																				</span>
																			</span>
																		</span>
																	</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-signs-1"></i>
                                                        <span class="m-menu__link-text">
																		File Attributes
																	</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-folder"></i>
                                                        <span class="m-menu__link-text">
																		Folders
																	</span>
                                                    </a>
                                                </li>
                                                <li class="m-menu__item "  data-redirect="true" aria-haspopup="true">
                                                    <a  href="inner.html" class="m-menu__link ">
                                                        <i class="m-menu__link-icon flaticon-cogwheel-2"></i>
                                                        <span class="m-menu__link-text">
																		System Settings
																	</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- END: Horizontal Menu -->
                <!-- BEGIN: Topbar -->
                <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general">
                    <div class="m-stack__item m-stack__item--middle m-dropdown m-dropdown--arrow m-dropdown--large m-dropdown--mobile-full-width m-dropdown--align-right m-dropdown--skin-light m-header-search m-header-search--expandable m-header-search--skin-light" id="m_quicksearch" data-search-type="default">
                        <!--BEGIN: Search Form -->
                        <form class="m-header-search__form" method="post">
                            <div class="m-header-search__wrapper">
											<span class="m-header-search__icon-search" id="m_quicksearch_search">
												<i class="flaticon-search"></i>
											</span>
                                <span class="m-header-search__input-wrapper">
												<input autocomplete="on" type="text" name="ticket" class="m-header-search__input" value="<?php echo strtolower(@$ticker)?>" placeholder="Search..." id="m_quicksearch_input" autofocus>
											</span>
                                <span class="m-header-search__icon-close" id="m_quicksearch_close">
												<i class="la la-remove"></i>
											</span>
                                <span class="m-header-search__icon-cancel" id="m_quicksearch_cancel">
												<i class="la la-remove"></i>
											</span>
                            </div>
                        </form>
                        <!--END: Search Form -->
                        <!--BEGIN: Search Results -->
                        <div class="m-dropdown__wrapper">
                            <div class="m-dropdown__arrow m-dropdown__arrow--center"></div>
                            <div class="m-dropdown__inner">
                                <div class="m-dropdown__body">
                                    <div class="m-dropdown__scrollable m-scrollable" data-max-height="300" data-mobile-max-height="200">
                                        <div class="m-dropdown__content m-list-search m-list-search--skin-light"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--BEGIN: END Results -->
                    </div>
                    <div class="m-stack__item m-topbar__nav-wrapper">
                        <ul class="m-topbar__nav m-nav m-nav--inline">
                            <li class="m-nav__item m-topbar__notifications m-dropdown m-dropdown--large m-dropdown--arrow m-dropdown--align-center 	m-dropdown--mobile-full-width" data-dropdown-toggle="click" data-dropdown-persistent="true">
                                <a href="#" class="m-nav__link m-dropdown__toggle" id="m_topbar_notification_icon">
                                    <span class="m-nav__link-badge m-badge m-badge--dot m-badge--dot-small m-badge--danger"></span>
                                    <span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-music-2"></i>
													</span>
												</span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--center"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center">
														<span class="m-dropdown__header-title">
															9 New
														</span>
                                            <span class="m-dropdown__header-subtitle">
															User Notifications
														</span>
                                        </div>
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="nav nav-tabs m-tabs m-tabs-line m-tabs-line--brand" role="tablist">
                                                    <li class="nav-item m-tabs__item">
                                                        <a class="nav-link m-tabs__link active" data-toggle="tab" href="#topbar_notifications_notifications" role="tab">
                                                            Alerts
                                                        </a>
                                                    </li>
                                                    <li class="nav-item m-tabs__item">
                                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_events" role="tab">
                                                            Events
                                                        </a>
                                                    </li>
                                                    <li class="nav-item m-tabs__item">
                                                        <a class="nav-link m-tabs__link" data-toggle="tab" href="#topbar_notifications_logs" role="tab">
                                                            Logs
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="tab-content">
                                                    <div class="tab-pane active" id="topbar_notifications_notifications" role="tabpanel">
                                                        <div class="m-scrollable" data-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                            <div class="m-list-timeline m-list-timeline--skin-light">
                                                                <div class="m-list-timeline__items">
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge -m-list-timeline__badge--state-success"></span>
                                                                        <span class="m-list-timeline__text">
																						12 new users registered
																					</span>
                                                                        <span class="m-list-timeline__time">
																						Just now
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">
																						System shutdown
																						<span class="m-badge m-badge--success m-badge--wide">
																							pending
																						</span>
																					</span>
                                                                        <span class="m-list-timeline__time">
																						14 mins
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">
																						New invoice received
																					</span>
                                                                        <span class="m-list-timeline__time">
																						20 mins
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">
																						DB overloaded 80%
																						<span class="m-badge m-badge--info m-badge--wide">
																							settled
																						</span>
																					</span>
                                                                        <span class="m-list-timeline__time">
																						1 hr
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">
																						System error -
																						<a href="#" class="m-link">
																							Check
																						</a>
																					</span>
                                                                        <span class="m-list-timeline__time">
																						2 hrs
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span href="" class="m-list-timeline__text">
																						New order received
																						<span class="m-badge m-badge--danger m-badge--wide">
																							urgent
																						</span>
																					</span>
                                                                        <span class="m-list-timeline__time">
																						7 hrs
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item m-list-timeline__item--read">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">
																						Production server down
																					</span>
                                                                        <span class="m-list-timeline__time">
																						3 hrs
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge"></span>
                                                                        <span class="m-list-timeline__text">
																						Production server up
																					</span>
                                                                        <span class="m-list-timeline__time">
																						5 hrs
																					</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="topbar_notifications_events" role="tabpanel">
                                                        <div class="m-scrollable" m-scrollabledata-scrollable="true" data-max-height="250" data-mobile-max-height="200">
                                                            <div class="m-list-timeline m-list-timeline--skin-light">
                                                                <div class="m-list-timeline__items">
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                        <a href="" class="m-list-timeline__text">
                                                                            New order received
                                                                        </a>
                                                                        <span class="m-list-timeline__time">
																						Just now
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-danger"></span>
                                                                        <a href="" class="m-list-timeline__text">
                                                                            New invoice received
                                                                        </a>
                                                                        <span class="m-list-timeline__time">
																						20 mins
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-success"></span>
                                                                        <a href="" class="m-list-timeline__text">
                                                                            Production server up
                                                                        </a>
                                                                        <span class="m-list-timeline__time">
																						5 hrs
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                        <a href="" class="m-list-timeline__text">
                                                                            New order received
                                                                        </a>
                                                                        <span class="m-list-timeline__time">
																						7 hrs
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                        <a href="" class="m-list-timeline__text">
                                                                            System shutdown
                                                                        </a>
                                                                        <span class="m-list-timeline__time">
																						11 mins
																					</span>
                                                                    </div>
                                                                    <div class="m-list-timeline__item">
                                                                        <span class="m-list-timeline__badge m-list-timeline__badge--state1-info"></span>
                                                                        <a href="" class="m-list-timeline__text">
                                                                            Production server down
                                                                        </a>
                                                                        <span class="m-list-timeline__time">
																						3 hrs
																					</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
                                                        <div class="m-stack m-stack--ver m-stack--general" style="min-height: 180px;">
                                                            <div class="m-stack__item m-stack__item--center m-stack__item--middle">
																			<span class="">
																				All caught up!
																				<br>
																				No new logs.
																			</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-nav__item m-topbar__quick-actions m-dropdown m-dropdown--skin-light m-dropdown--large m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push m-dropdown--mobile-full-width m-dropdown--skin-light"  data-dropdown-toggle="click">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
                                    <span class="m-nav__link-badge m-badge m-badge--dot m-badge--info m--hide"></span>
                                    <span class="m-nav__link-icon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-share"></i>
													</span>
												</span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center">
														<span class="m-dropdown__header-title">
															Quick Actions
														</span>
                                            <span class="m-dropdown__header-subtitle">
															Shortcuts
														</span>
                                        </div>
                                        <div class="m-dropdown__body m-dropdown__body--paddingless">
                                            <div class="m-dropdown__content">
                                                <div class="m-scrollable" data-scrollable="false" data-max-height="380" data-mobile-max-height="200">
                                                    <div class="m-nav-grid m-nav-grid--skin-light">
                                                        <div class="m-nav-grid__row">
                                                            <a href="#" class="m-nav-grid__item">
                                                                <i class="m-nav-grid__icon flaticon-file"></i>
                                                                <span class="m-nav-grid__text">
																				Generate Report
																			</span>
                                                            </a>
                                                            <a href="#" class="m-nav-grid__item">
                                                                <i class="m-nav-grid__icon flaticon-time"></i>
                                                                <span class="m-nav-grid__text">
																				Add New Event
																			</span>
                                                            </a>
                                                        </div>
                                                        <div class="m-nav-grid__row">
                                                            <a href="#" class="m-nav-grid__item">
                                                                <i class="m-nav-grid__icon flaticon-folder"></i>
                                                                <span class="m-nav-grid__text">
																				Create New Task
																			</span>
                                                            </a>
                                                            <a href="#" class="m-nav-grid__item">
                                                                <i class="m-nav-grid__icon flaticon-clipboard"></i>
                                                                <span class="m-nav-grid__text">
																				Completed Tasks
																			</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="m-nav__item m-topbar__user-profile  m-dropdown m-dropdown--medium m-dropdown--arrow  m-dropdown--align-right m-dropdown--mobile-full-width m-dropdown--skin-light" data-dropdown-toggle="click">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-topbar__userpic m--hide">
													<img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless m--img-centered" alt=""/>
												</span>
                                    <span class="m-nav__link-icon m-topbar__usericon">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-user-ok"></i>
													</span>
												</span>
                                    <span class="m-topbar__username m--hide">
													Nick
												</span>
                                </a>
                                <div class="m-dropdown__wrapper">
                                    <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                                    <div class="m-dropdown__inner">
                                        <div class="m-dropdown__header m--align-center">
                                            <div class="m-card-user m-card-user--skin-light">
                                                <div class="m-card-user__pic">
                                                    <img src="assets/app/media/img/users/user4.jpg" class="m--img-rounded m--marginless" alt=""/>
                                                </div>
                                                <div class="m-card-user__details">
																<span class="m-card-user__name m--font-weight-500">
																	<?php echo $username?>
																</span>
                                                    <a href="" class="m-card-user__email m--font-weight-300 m-link">
                                                        <?php echo $usermail?>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-dropdown__body">
                                            <div class="m-dropdown__content">
                                                <ul class="m-nav m-nav--skin-light">
                                                    <li class="m-nav__section m--hide">
																	<span class="m-nav__section-text">
																		Section
																	</span>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="profile.html" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-profile-1"></i>
                                                            <span class="m-nav__link-title">
																			<span class="m-nav__link-wrap">
																				<span class="m-nav__link-text">
																					My Profile
																				</span>
																				<span class="m-nav__link-badge">
																					<span class="m-badge m-badge--success">
																						2
																					</span>
																				</span>
																			</span>
																		</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="profile.html" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-share"></i>
                                                            <span class="m-nav__link-text">
																			Activity
																		</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="profile.html" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                            <span class="m-nav__link-text">
																			Messages
																		</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="profile.html" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-info"></i>
                                                            <span class="m-nav__link-text">
																			FAQ
																		</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__item">
                                                        <a href="profile.html" class="m-nav__link">
                                                            <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                            <span class="m-nav__link-text">
																			Support
																		</span>
                                                        </a>
                                                    </li>
                                                    <li class="m-nav__separator m-nav__separator--fit"></li>
                                                    <li class="m-nav__item">
                                                        <a href="../controller/logout.php" class="btn m-btn--pill    btn-secondary m-btn m-btn--custom m-btn--label-brand m-btn--bolder">
                                                            Logout
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li id="m_quick_sidebar_toggle" class="m-nav__item">
                                <a href="#" class="m-nav__link m-dropdown__toggle">
												<span class="m-nav__link-icon m-nav__link-icon-alt">
													<span class="m-nav__link-icon-wrapper">
														<i class="flaticon-grid-menu"></i>
													</span>
												</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- END: Topbar -->
            </div>
        </div>
    </div>
</header>
<!-- END: Header -->