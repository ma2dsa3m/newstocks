<div class="m-portlet m-portlet--full-height ">
    <div class="m-portlet__head">
        <div class="m-portlet__head-caption">
            <div class="m-portlet__head-title">
                <h3 class="m-portlet__head-text">
                   Latest News
                </h3>
            </div>
        </div>
        <div class="m-portlet__head-tools">
            <ul class="m-portlet__nav">
                <li class="m-portlet__nav-item m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
                    <a href="#" class="m-portlet__nav-link m-portlet__nav-link--icon m-portlet__nav-link--icon-xl m-dropdown__toggle">
                        <i class="la la-ellipsis-h m--font-brand"></i>
                    </a>
                    <div class="m-dropdown__wrapper">
                        <span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
                        <div class="m-dropdown__inner">
                            <div class="m-dropdown__body">
                                <div class="m-dropdown__content">
                                    <ul class="m-nav">
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-share"></i>
                                                <span class="m-nav__link-text">
																					Activity
																				</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-chat-1"></i>
                                                <span class="m-nav__link-text">
																					Messages
																				</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-info"></i>
                                                <span class="m-nav__link-text">
																					FAQ
																				</span>
                                            </a>
                                        </li>
                                        <li class="m-nav__item">
                                            <a href="" class="m-nav__link">
                                                <i class="m-nav__link-icon flaticon-lifebuoy"></i>
                                                <span class="m-nav__link-text">
																					Support
																				</span>
                                            </a>
                                        </li>
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
        <div class="m-widget3">
            <div class="m-widget3__item">
                <div class="m-widget3__header">

                    <a href="<?php echo($news[1]['a'][0]['href'])?>" class="m-widget3__info">
														<span class="m-widget3__username">

															<?php echo($news[1]["span"][0]['#text'][0])?>
														</span>

                        <span class="m-widget3__time">
															<?php echo($news[0]['#text'][0])?>
														</span>
                    </a>

                </div>
                <div class="m-widget3__body">
                    <p class="m-widget3__text">
                        <?php echo($news[1]['a'][0]["#text"][0])?>
                    </p>
                </div>
            </div>

            <div class="m-widget3__item">
                <div class="m-widget3__header">

                    <a href="<?php echo($news[3]['a'][0]['href'])?>" class="m-widget3__info">
														<span class="m-widget3__username">
															<?php echo($news[3]["span"][0]['#text'][0])?>
														</span>
                        <span class="m-widget3__time">
															<?php echo($news[2]['#text'][0])?>
														</span>
                    </a>

                </div>
                <div class="m-widget3__body">
                    <p class="m-widget3__text">
                        <?php echo($news[3]['a'][0]["#text"][0])?>
                    </p>
                </div>
            </div>
            <div class="m-widget3__item">
                <div class="m-widget3__header">

                    <a href="<?php echo($news[5]['a'][0]['href'])?>" class="m-widget3__info">
														<span class="m-widget3__username">
															<?php echo($news[5]["span"][0]['#text'][0])?>
														</span>
                        <span class="m-widget3__time">
															<?php echo($news[4]['#text'][0])?>
														</span>
                    </a>

                </div>
                <div class="m-widget3__body">
                    <p class="m-widget3__text">
                        <?php echo($news[5]['a'][0]["#text"][0])?>
                    </p>
                </div>
            </div>
            <div class="m-widget3__item">
                <div class="m-widget3__header">

                    <a href="<?php echo($news[7]['a'][0]['href'])?>" class="m-widget3__info">
														<span class="m-widget3__username">
															<?php echo($news[7]["span"][0]['#text'][0])?>
														</span>
                        <span class="m-widget3__time">
															<?php echo($news[6]['#text'][0])?>
														</span>
                    </a>

                </div>
                <div class="m-widget3__body">
                    <p class="m-widget3__text">
                        <?php echo($news[7]['a'][0]["#text"][0])?>
                    </p>
                </div>
            </div>

            <div class="m-widget3__item">
                <div class="m-widget3__header">

                    <a href="<?php echo($news[9]['a'][0]['href'])?>" class="m-widget3__info">
														<span class="m-widget3__username">
															<?php echo($news[9]["span"][0]['#text'][0])?>
														</span>
                        <span class="m-widget3__time">
															<?php echo($news[8]['#text'][0])?>
														</span>
                    </a>

                </div>
                <div class="m-widget3__body">
                    <p class="m-widget3__text">
                        <?php echo($news[9]['a'][0]["#text"][0])?>
                    </p>
                </div>
            </div>

            <div class="m-widget3__item">
                <div class="m-widget3__header">

                    <a href="<?php echo($news[11]['a'][0]['href'])?>" class="m-widget3__info">
														<span class="m-widget3__username">
															<?php echo($news[11]["span"][0]['#text'][0])?>
														</span>
                        <span class="m-widget3__time">
															<?php echo($news[10]['#text'][0])?>
														</span>
                    </a>

                </div>
                <div class="m-widget3__body">
                    <p class="m-widget3__text">
                        <?php echo($news[11]['a'][0]["#text"][0])?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>