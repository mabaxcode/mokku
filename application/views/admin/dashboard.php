<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US">
<!--<![endif]-->

<? $this->load->view('template-office/header'); ?>

<body>

    <!-- #wrapper -->
    <div id="wrapper">
        <!-- #page -->
        <div id="page" class="">
            <!-- layout-wrap -->
            <div class="layout-wrap">
                <!-- preload -->
                <div id="preload" class="preload-container">
                    <div class="preloading">
                        <span></span>
                    </div>
                </div>
                <!-- /preload -->
                <!-- section-menu-left -->
                <div class="section-menu-left">
                    <div class="box-logo">
                        <a href="index.html" id="site-logo-inner">
                            <img class="" id="logo_header" alt="" src="<?= base_url();?>assets/images/logo/logo.svg" data-light="../images/logo/logo.svg" data-dark="<?= base_url();?>assets-office/images/logo/logo-white.svg" >
                        </a>
                        <div class="button-show-hide">
                            <i class="icon-chevron-left"></i>
                        </div>
                    </div>
                    <div class="section-menu-left-wrap">
                        <div class="center">
                            <div class="center-item">
                                <ul class="">
                                    <li class="menu-item active">
                                        <a href="index.html" class="">
                                            <div class="icon">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.2652 3.57566C12.1187 3.42921 11.8813 3.42921 11.7348 3.57566L5.25 10.0605V19.8748C5.25 20.0819 5.41789 20.2498 5.625 20.2498H9V16.1248C9 15.0893 9.83947 14.2498 10.875 14.2498H13.125C14.1605 14.2498 15 15.0893 15 16.1248V20.2498H18.375C18.5821 20.2498 18.75 20.0819 18.75 19.8748V10.0605L12.2652 3.57566ZM20.25 11.5605L21.2197 12.5302C21.5126 12.8231 21.9874 12.8231 22.2803 12.5302C22.5732 12.2373 22.5732 11.7624 22.2803 11.4695L13.3258 2.51499C12.5936 1.78276 11.4064 1.78276 10.6742 2.515L1.71967 11.4695C1.42678 11.7624 1.42678 12.2373 1.71967 12.5302C2.01256 12.8231 2.48744 12.8231 2.78033 12.5302L3.75 11.5605V19.8748C3.75 20.9104 4.58947 21.7498 5.625 21.7498H18.375C19.4105 21.7498 20.25 20.9104 20.25 19.8748V11.5605ZM13.5 20.2498H10.5V16.1248C10.5 15.9177 10.6679 15.7498 10.875 15.7498H13.125C13.3321 15.7498 13.5 15.9177 13.5 16.1248V20.2498Z" fill="#111111"/>
                                                </svg>
                                            </div>
                                            <div class="text">Ecommerce</div>
                                        </a>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-file-plus"></i></div>
                                            <div class="text">Product</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="product-list.html" class="">
                                                    <div class="text">All Products</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="<? echo ('manage/addProduct'); ?>" class="">
                                                    <div class="text">Add Product</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon">
                                                <svg width="24" height="22" viewBox="0 0 22 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.5 1.875C0.5 0.839466 1.33947 0 2.375 0H19.625C20.6605 0 21.5 0.839466 21.5 1.875V3.375C21.5 4.29657 20.8351 5.06285 19.9589 5.22035L19.3733 15.1762C19.28 16.7619 17.9669 18 16.3785 18H5.62154C4.03311 18 2.71999 16.7619 2.62671 15.1762L2.04108 5.22035C1.16485 5.06285 0.5 4.29657 0.5 3.375V1.875ZM2.75659 3.75C2.75266 3.74997 2.74873 3.74997 2.74479 3.75H2.375C2.16789 3.75 2 3.58211 2 3.375V1.875C2 1.66789 2.16789 1.5 2.375 1.5H19.625C19.8321 1.5 20 1.66789 20 1.875V3.375C20 3.58211 19.8321 3.75 19.625 3.75H19.2552C19.2513 3.74997 19.2473 3.74997 19.2434 3.75H2.75659ZM3.54541 5.25L4.12412 15.0881C4.17076 15.8809 4.82732 16.5 5.62154 16.5H16.3785C17.1727 16.5 17.8292 15.8809 17.8759 15.0881L18.4546 5.25H3.54541ZM8.24976 8.25C8.24976 7.83579 8.58554 7.5 8.99976 7.5H12.9998C13.414 7.5 13.7498 7.83579 13.7498 8.25C13.7498 8.66421 13.414 9 12.9998 9H8.99976C8.58554 9 8.24976 8.66421 8.24976 8.25Z" fill="#111111"/>
                                                </svg>
                                            </div>
                                            <div class="text">Attributes</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="attributes.html" class="">
                                                    <div class="text">Attributes</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="add-attributes.html" class="">
                                                    <div class="text">Add attributes</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon">
                                                <svg width="24" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0001 2C8.34322 2 7.00008 3.34315 7.00008 5V5.75H13.0001V5C13.0001 3.34315 11.6569 2 10.0001 2ZM14.5001 5.75V5C14.5001 2.51472 12.4854 0.5 10.0001 0.5C7.51479 0.5 5.50008 2.51472 5.50008 5V5.75H3.51287C2.55332 5.75 1.74862 6.47444 1.64817 7.42872L0.385015 19.4287C0.268481 20.5358 1.13652 21.5 2.24971 21.5H17.7504C18.8636 21.5 19.7317 20.5358 19.6151 19.4287L18.352 7.42872C18.2515 6.47444 17.4468 5.75 16.4873 5.75H14.5001ZM13.0001 7.25H7.00008V8.66146C7.23023 8.86745 7.37508 9.16681 7.37508 9.5C7.37508 10.1213 6.8714 10.625 6.25008 10.625C5.62876 10.625 5.12508 10.1213 5.12508 9.5C5.12508 9.16681 5.26992 8.86745 5.50008 8.66146V7.25H3.51287C3.32096 7.25 3.16002 7.39489 3.13993 7.58574L1.87677 19.5857C1.85347 19.8072 2.02707 20 2.24971 20H17.7504C17.9731 20 18.1467 19.8072 18.1234 19.5857L16.8602 7.58574C16.8401 7.39489 16.6792 7.25 16.4873 7.25H14.5001V8.66146C14.7302 8.86746 14.8751 9.16681 14.8751 9.5C14.8751 10.1213 14.3714 10.625 13.7501 10.625C13.1288 10.625 12.6251 10.1213 12.6251 9.5C12.6251 9.16681 12.7699 8.86745 13.0001 8.66146V7.25Z" fill="#111111"/>
                                                </svg>
                                            </div>
                                            <div class="text">Order</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="oder-list.html" class="">
                                                    <div class="text">Order list</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="oder-detail.html" class="">
                                                    <div class="text">Order detail</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="oder-tracking.html" class="">
                                                    <div class="text">Order tracking</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item has-children">
                                        <a href="javascript:void(0);" class="menu-item-button">
                                            <div class="icon"><i class="icon-user"></i></div>
                                            <div class="text">Users</div>
                                        </a>
                                        <ul class="sub-menu">
                                            <li class="sub-menu-item">
                                                <a href="all-user.html" class="">
                                                    <div class="text">All user</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="add-new-user.html" class="">
                                                    <div class="text">Add new user</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="login.html" class="">
                                                    <div class="text">Login</div>
                                                </a>
                                            </li>
                                            <li class="sub-menu-item">
                                                <a href="sign-up.html" class="">
                                                    <div class="text">Sign up</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item">
                                        <a href="report.html" class="">
                                            <div class="icon"><i class="icon-pie-chart"></i></div>
                                            <div class="text">Report</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="setting.html" class="">
                                            <div class="icon">
                                                <svg width="24" height="22" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.85353 1.81675C7.00421 0.91265 7.78644 0.25 8.70302 0.25H11.297C12.2136 0.25 12.9958 0.91265 13.1465 1.81675L13.36 3.0978C13.3789 3.21129 13.463 3.34312 13.6275 3.43418C13.7099 3.47981 13.7914 3.52694 13.8719 3.57554C14.0328 3.67272 14.1891 3.67975 14.297 3.63933L15.5139 3.18345C16.3722 2.86189 17.3372 3.208 17.7955 4.00177L19.0924 6.24821C19.5507 7.04199 19.368 8.05075 18.6603 8.63329L17.656 9.46011C17.5671 9.5333 17.4952 9.67172 17.4987 9.85864C17.4996 9.90566 17.5 9.95278 17.5 10C17.5 10.0472 17.4996 10.0943 17.4987 10.1413C17.4952 10.3283 17.5671 10.4667 17.656 10.5399L18.6603 11.3667C19.368 11.9492 19.5507 12.958 19.0924 13.7518L17.7955 15.9982C17.3372 16.792 16.3722 17.1381 15.5139 16.8165L14.297 16.3607C14.1891 16.3202 14.0328 16.3273 13.8719 16.4244C13.7914 16.4731 13.7099 16.5202 13.6275 16.5658C13.463 16.6569 13.3789 16.7887 13.36 16.9022L13.1465 18.1832C12.9958 19.0874 12.2136 19.75 11.297 19.75H8.70302C7.78644 19.75 7.00421 19.0873 6.85353 18.1832L6.64002 16.9022C6.62111 16.7887 6.53703 16.6569 6.37251 16.5658C6.29008 16.5202 6.20861 16.4731 6.12812 16.4245C5.96719 16.3273 5.81089 16.3203 5.703 16.3607L4.48613 16.8166C3.62781 17.1381 2.66282 16.792 2.20454 15.9982L0.907557 13.7518C0.44927 12.958 0.632026 11.9493 1.33966 11.3667L1.81634 11.9457L1.33966 11.3667L2.34401 10.5399C2.43291 10.4667 2.50477 10.3283 2.50131 10.1414C2.50044 10.0943 2.5 10.0472 2.5 10C2.5 9.95279 2.50044 9.90568 2.50131 9.85866C2.50477 9.67174 2.43291 9.53331 2.34401 9.46012L1.33966 8.63331C0.632025 8.05076 0.44927 7.042 0.907556 6.24823L2.20454 4.00179C2.66283 3.20801 3.62781 2.8619 4.48613 3.18346L5.70298 3.63934C5.81087 3.67975 5.96717 3.67273 6.12811 3.57555C6.2086 3.52695 6.29008 3.47981 6.37251 3.43418C6.53703 3.34312 6.62111 3.21129 6.64002 3.0978L6.85353 1.81675ZM8.70302 1.75C8.5197 1.75 8.36326 1.88253 8.33312 2.06335L8.11961 3.3444C8.01385 3.97899 7.59798 4.47031 7.09896 4.74654C7.03304 4.78303 6.96787 4.82073 6.90348 4.85961C6.41435 5.15497 5.77999 5.26999 5.17675 5.044L3.95989 4.58812C3.78823 4.52381 3.59523 4.59303 3.50358 4.75179L2.20659 6.99823C2.11494 7.15698 2.15149 7.35873 2.29301 7.47524L3.29737 8.30206C3.79348 8.71048 4.01162 9.31573 4.00105 9.88643C4.00035 9.92419 4 9.96205 4 10C4 10.038 4.00035 10.0758 4.00105 10.1136C4.01162 10.6843 3.79348 11.2895 3.29737 11.698L2.29302 12.5248L1.96067 12.1211L2.29302 12.5248C2.15149 12.6413 2.11494 12.843 2.20659 13.0018L3.50358 15.2482C3.59523 15.407 3.78823 15.4762 3.95989 15.4119L5.17676 14.956C5.78 14.73 6.41436 14.845 6.90349 15.1404C6.96787 15.1793 7.03304 15.217 7.09896 15.2535C7.59798 15.5297 8.01385 16.021 8.11961 16.6556L8.33312 17.9366C8.36326 18.1175 8.5197 18.25 8.70302 18.25H11.297C11.4803 18.25 11.6367 18.1175 11.6669 17.9366L11.8804 16.6556C11.9862 16.021 12.402 15.5297 12.901 15.2535C12.967 15.217 13.0321 15.1793 13.0965 15.1404C13.5856 14.845 14.22 14.73 14.8233 14.956L16.0401 15.4119C16.2118 15.4762 16.4048 15.407 16.4964 15.2482L17.7934 13.0018C17.8851 12.843 17.8485 12.6413 17.707 12.5248L16.7026 11.6979C16.2065 11.2895 15.9884 10.6843 15.999 10.1136C15.9997 10.0758 16 10.038 16 10C16 9.96205 15.9996 9.92419 15.9989 9.88642C15.9884 9.31571 16.2065 8.71046 16.7026 8.30204L17.707 7.47523C17.8485 7.35872 17.8851 7.15697 17.7934 6.99821L16.4964 4.75177C16.4048 4.59302 16.2118 4.5238 16.0401 4.58811L14.8232 5.04399C14.22 5.26998 13.5856 5.15496 13.0965 4.8596C13.0321 4.82072 12.967 4.78303 12.901 4.74654C12.402 4.47031 11.9862 3.979 11.8804 3.3444L11.6669 2.06335C11.6367 1.88253 11.4803 1.75 11.297 1.75H8.70302ZM9.99977 7.74992C8.75713 7.74992 7.74977 8.75728 7.74977 9.99992C7.74977 11.2426 8.75713 12.2499 9.99977 12.2499C11.2424 12.2499 12.2498 11.2426 12.2498 9.99992C12.2498 8.75728 11.2424 7.74992 9.99977 7.74992ZM6.24977 9.99992C6.24977 7.92885 7.9287 6.24992 9.99977 6.24992C12.0708 6.24992 13.7498 7.92885 13.7498 9.99992C13.7498 12.071 12.0708 13.7499 9.99977 13.7499C7.9287 13.7499 6.24977 12.071 6.24977 9.99992Z" fill="#0A0A0C"/>
                                                </svg>
                                            </div>
                                            <div class="text">Setting</div>
                                        </a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="<? echo base_url('admin/logout'); ?>" class="">
                                            <div class="icon">
                                                <svg width="24" height="22" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M8.125 18.6875C8.125 18.903 8.0394 19.1097 7.88702 19.262C7.73465 19.4144 7.52799 19.5 7.3125 19.5H1.625C1.19402 19.5 0.780698 19.3288 0.475951 19.024C0.171205 18.7193 0 18.306 0 17.875V1.625C0 1.19402 0.171205 0.780698 0.475951 0.475951C0.780698 0.171205 1.19402 0 1.625 0H7.3125C7.52799 0 7.73465 0.0856026 7.88702 0.237976C8.0394 0.390349 8.125 0.597012 8.125 0.8125C8.125 1.02799 8.0394 1.23465 7.88702 1.38702C7.73465 1.5394 7.52799 1.625 7.3125 1.625H1.625V17.875H7.3125C7.52799 17.875 7.73465 17.9606 7.88702 18.113C8.0394 18.2653 8.125 18.472 8.125 18.6875ZM19.2623 9.17516L15.1998 5.11266C15.0474 4.9602 14.8406 4.87455 14.625 4.87455C14.4094 4.87455 14.2026 4.9602 14.0502 5.11266C13.8977 5.26511 13.812 5.47189 13.812 5.6875C13.812 5.90311 13.8977 6.10989 14.0502 6.26234L16.7263 8.9375H7.3125C7.09701 8.9375 6.89035 9.0231 6.73798 9.17548C6.5856 9.32785 6.5 9.53451 6.5 9.75C6.5 9.96549 6.5856 10.1722 6.73798 10.3245C6.89035 10.4769 7.09701 10.5625 7.3125 10.5625H16.7263L14.0502 13.2377C13.8977 13.3901 13.812 13.5969 13.812 13.8125C13.812 14.0281 13.8977 14.2349 14.0502 14.3873C14.2026 14.5398 14.4094 14.6255 14.625 14.6255C14.8406 14.6255 15.0474 14.5398 15.1998 14.3873L19.2623 10.3248C19.3379 10.2494 19.3978 10.1598 19.4387 10.0611C19.4796 9.9625 19.5006 9.85678 19.5006 9.75C19.5006 9.64322 19.4796 9.5375 19.4387 9.43886C19.3978 9.34023 19.3379 9.25062 19.2623 9.17516Z" fill="#111111"/>
                                                </svg>
                                            </div>
                                            <div class="text">Log out</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /section-menu-left -->
                <!-- section-content-right -->
                <div class="section-content-right">
                    <!-- header-dashboard -->
                    <div class="header-dashboard">
                        <div class="wrap">
                            <div class="header-left">
                                <a href="index.html">
                                    <img class="" id="logo_header_mobile" alt="" src="../images/logo/logo.svg" data-light="../images/logo/logo.svg" data-dark="../images/logo/logo-white.svg" >
                                </a>
                                <div class="button-show-hide">
                                    <i class="icon-chevron-left"></i>
                                </div>
                                <form class="form-search flex-grow">
                                    <fieldset class="name">
                                        <input type="text" placeholder="Search" class="show-search" name="name" tabindex="2" value="" aria-required="true" required="">
                                    </fieldset>
                                    <div class="button-submit">
                                        <button class="" type="submit"><i class="icon-search"></i></button>
                                    </div>
                                    <div class="box-content-search" id="box-content-search">
                                        <ul class="mb-24">
                                            <li class="mb-14">
                                                <div class="body-title">Top selling product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-1.jpg" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Neptune Longsleeve</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-2.jpg" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Ribbed Tank Top</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-3.jpg" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Ribbed modal T-shirt</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="">
                                            <li class="mb-14">
                                                <div class="body-title">Order product</div>
                                            </li>
                                            <li class="mb-14">
                                                <div class="divider"></div>
                                            </li>
                                            <li>
                                                <ul>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-4.jpg" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Oversized Motif T-shirt</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-5.jpg" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">V-neck linen T-shirt</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14 mb-10">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-6.jpg" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Jersey thong body</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="mb-10">
                                                        <div class="divider"></div>
                                                    </li>
                                                    <li class="product-item gap14">
                                                        <div class="image no-bg">
                                                            <img src="images/products/product-7.jpg" alt="">
                                                        </div>
                                                        <div class="flex items-center justify-between gap20 flex-grow">
                                                            <div class="name">
                                                                <a href="product-list.html" class="body-text">Jersey thong body</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                            <div class="header-grid">
                                <div class="header-item button-dark-light">
                                    <i class="icon-moon"></i>
                                </div>
                                <?/*
                                <div class="popup-wrap noti type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-bell"></i>
                                            </span>
                                        </button>

                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton1" >
                                            <li>
                                                <h6>Notifications</h6>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="images/customers/customer-1.jpg" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Cameron Williamson</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Hello?</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="images/customers/customer-2.jpg" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Ralph Edwards</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Are you there?  interested i this...</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="images/customers/customer-3.jpg" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Eleanor Pena</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Interested in this loads?</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="noti-item w-full wg-user active">
                                                    <div class="image">
                                                        <img src="images/customers/customer-1.jpg" alt="">
                                                    </div>
                                                    <div class="flex-grow">
                                                        <div class="flex items-center justify-between">
                                                            <a href="#" class="body-title">Jane Cooper</a>
                                                            <div class="time">10:13 PM</div>
                                                        </div>
                                                        <div class="text-tiny">Okay...Do we have a deal?</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all</a></li>
                                        </ul>
                                       
                                    </div>
                                </div>
                                */?>
                                <?/*
                                <div class="popup-wrap message type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <span class="text-tiny">1</span>
                                                <i class="icon-message-square"></i>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton2" >
                                            <li>
                                                <h6>Message</h6>
                                            </li>
                                            <li>
                                                <div class="message-item item-1">
                                                    <div class="image">
                                                        <i class="icon-noti-1"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Discount available</div>
                                                        <div class="text-tiny">Morbi sapien massa, ultricies at rhoncus at, ullamcorper nec diam</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-2">
                                                    <div class="image">
                                                        <i class="icon-noti-2"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Account has been verified</div>
                                                        <div class="text-tiny">Mauris libero ex, iaculis vitae rhoncus et</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-3">
                                                    <div class="image">
                                                        <i class="icon-noti-3"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order shipped successfully</div>
                                                        <div class="text-tiny">Integer aliquam eros nec sollicitudin sollicitudin</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="message-item item-4">
                                                    <div class="image">
                                                        <i class="icon-noti-4"></i>
                                                    </div>
                                                    <div>
                                                        <div class="body-title-2">Order pending: <span>ID 305830</span></div>
                                                        <div class="text-tiny">Ultricies at rhoncus at ullamcorper</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all</a></li>
                                        </ul>
                                    </div>
                                </div>
                                */?>
                                <div class="header-item button-zoom-maximize">
                                    <div class="">
                                        <i class="icon-maximize"></i>
                                    </div>
                                </div>
                                <div class="popup-wrap apps type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-item">
                                                <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M3.625 0.812501C3.06874 0.812501 2.52497 0.977451 2.06246 1.28649C1.59995 1.59553 1.23946 2.03479 1.02659 2.5487C0.813719 3.06262 0.758022 3.62812 0.866543 4.17369C0.975064 4.71926 1.24293 5.2204 1.63626 5.61374C2.0296 6.00707 2.53074 6.27494 3.07631 6.38346C3.62188 6.49198 4.18738 6.43628 4.7013 6.22341C5.21522 6.01054 5.65447 5.65006 5.96351 5.18754C6.27255 4.72503 6.4375 4.18126 6.4375 3.625C6.4375 2.87908 6.14118 2.16371 5.61374 1.63626C5.08629 1.10882 4.37092 0.812501 3.625 0.812501ZM3.625 5.3125C3.29125 5.3125 2.96498 5.21353 2.68748 5.02811C2.40997 4.84268 2.19368 4.57913 2.06595 4.27078C1.93823 3.96243 1.90481 3.62313 1.96993 3.29579C2.03504 2.96844 2.19576 2.66776 2.43176 2.43176C2.66776 2.19576 2.96844 2.03504 3.29579 1.96993C3.62313 1.90481 3.96243 1.93823 4.27078 2.06595C4.57913 2.19368 4.84268 2.40997 5.02811 2.68748C5.21353 2.96498 5.3125 3.29125 5.3125 3.625C5.3125 4.07255 5.13471 4.50178 4.81824 4.81824C4.50178 5.13471 4.07255 5.3125 3.625 5.3125ZM10.375 6.4375C10.9313 6.4375 11.475 6.27255 11.9375 5.96351C12.4001 5.65447 12.7605 5.21522 12.9734 4.7013C13.1863 4.18738 13.242 3.62188 13.1335 3.07631C13.0249 2.53074 12.7571 2.0296 12.3637 1.63626C11.9704 1.24293 11.4693 0.975064 10.9237 0.866543C10.3781 0.758022 9.81262 0.813719 9.2987 1.02659C8.78479 1.23946 8.34553 1.59995 8.03649 2.06246C7.72745 2.52497 7.5625 3.06874 7.5625 3.625C7.5625 4.37092 7.85882 5.08629 8.38626 5.61374C8.91371 6.14118 9.62908 6.4375 10.375 6.4375ZM10.375 1.9375C10.7088 1.9375 11.035 2.03647 11.3125 2.2219C11.59 2.40732 11.8063 2.67087 11.934 2.97922C12.0618 3.28757 12.0952 3.62687 12.0301 3.95422C11.965 4.28156 11.8042 4.58224 11.5682 4.81824C11.3322 5.05425 11.0316 5.21496 10.7042 5.28008C10.3769 5.34519 10.0376 5.31177 9.72922 5.18405C9.42087 5.05633 9.15732 4.84003 8.9719 4.56253C8.78647 4.28502 8.6875 3.95876 8.6875 3.625C8.6875 3.17745 8.86529 2.74823 9.18176 2.43176C9.49823 2.11529 9.92745 1.9375 10.375 1.9375ZM3.625 7.5625C3.06874 7.5625 2.52497 7.72745 2.06246 8.03649C1.59995 8.34553 1.23946 8.78479 1.02659 9.2987C0.813719 9.81262 0.758022 10.3781 0.866543 10.9237C0.975064 11.4693 1.24293 11.9704 1.63626 12.3637C2.0296 12.7571 2.53074 13.0249 3.07631 13.1335C3.62188 13.242 4.18738 13.1863 4.7013 12.9734C5.21522 12.7605 5.65447 12.4001 5.96351 11.9375C6.27255 11.475 6.4375 10.9313 6.4375 10.375C6.4375 9.62908 6.14118 8.91371 5.61374 8.38626C5.08629 7.85882 4.37092 7.5625 3.625 7.5625ZM3.625 12.0625C3.29125 12.0625 2.96498 11.9635 2.68748 11.7781C2.40997 11.5927 2.19368 11.3291 2.06595 11.0208C1.93823 10.7124 1.90481 10.3731 1.96993 10.0458C2.03504 9.71844 2.19576 9.41776 2.43176 9.18176C2.66776 8.94576 2.96844 8.78504 3.29579 8.71993C3.62313 8.65481 3.96243 8.68823 4.27078 8.81595C4.57913 8.94368 4.84268 9.15997 5.02811 9.43748C5.21353 9.71498 5.3125 10.0412 5.3125 10.375C5.3125 10.8226 5.13471 11.2518 4.81824 11.5682C4.50178 11.8847 4.07255 12.0625 3.625 12.0625ZM10.375 7.5625C9.81874 7.5625 9.27497 7.72745 8.81246 8.03649C8.34995 8.34553 7.98946 8.78479 7.77659 9.2987C7.56372 9.81262 7.50802 10.3781 7.61654 10.9237C7.72506 11.4693 7.99293 11.9704 8.38626 12.3637C8.7796 12.7571 9.28074 13.0249 9.82631 13.1335C10.3719 13.242 10.9374 13.1863 11.4513 12.9734C11.9652 12.7605 12.4045 12.4001 12.7135 11.9375C13.0226 11.475 13.1875 10.9313 13.1875 10.375C13.1875 9.62908 12.8912 8.91371 12.3637 8.38626C11.8363 7.85882 11.1209 7.5625 10.375 7.5625ZM10.375 12.0625C10.0412 12.0625 9.71498 11.9635 9.43748 11.7781C9.15997 11.5927 8.94368 11.3291 8.81595 11.0208C8.68823 10.7124 8.65481 10.3731 8.71993 10.0458C8.78504 9.71844 8.94576 9.41776 9.18176 9.18176C9.41776 8.94576 9.71844 8.78504 10.0458 8.71993C10.3731 8.65481 10.7124 8.68823 11.0208 8.81595C11.3291 8.94368 11.5927 9.15997 11.7781 9.43748C11.9635 9.71498 12.0625 10.0412 12.0625 10.375C12.0625 10.8226 11.8847 11.2518 11.5682 11.5682C11.2518 11.8847 10.8226 12.0625 10.375 12.0625Z" fill="#0A0A0C"/>
                                                </svg>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton4" >
                                            <li>
                                                <h6>Related apps</h6>
                                            </li>
                                            <li>
                                                <ul class="list-apps">
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-1.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Photoshop</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-2.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">illustrator</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-3.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Sheets</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-4.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Gmail</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-5.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Messenger</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-6.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Youtube</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-7.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Flaticon</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-8.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">Instagram</div>
                                                        </a>
                                                    </li>
                                                    <li class="item">
                                                        <div class="image">
                                                            <img src="images/apps/item-9.png" alt="">
                                                        </div>
                                                        <a href="#">
                                                            <div class="text-tiny">PDF</div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#" class="tf-button w-full">View all app</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="popup-wrap user type-header">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
                                            <span class="header-user wg-user">
                                                <span class="image">
                                                    <img src="images/avatar/user-1.png" alt="">
                                                </span>
                                                <span class="flex flex-column">
                                                    <span class="body-text text-main-dark">Kristin Watson</span>
                                                    <span class="text-tiny">Sale Administrator</span>
                                                </span>
                                            </span>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end has-content" aria-labelledby="dropdownMenuButton3" >
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-user"></i>
                                                    </div>
                                                    <div class="body-title-2">Account</div>
                                                </a>
                                            </li>
                                            <!-- <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-mail"></i>
                                                    </div>
                                                    <div class="body-title-2">Inbox</div>
                                                    <div class="number">27</div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-file-text"></i>
                                                    </div>
                                                    <div class="body-title-2">Taskboard</div>
                                                </a>
                                            </li> -->
                                            <li>
                                                <a href="setting.html" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-settings"></i>
                                                    </div>
                                                    <div class="body-title-2">Setting</div>
                                                </a>
                                            </li>
                                            <!-- <li>
                                                <a href="#" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-headphones"></i>
                                                    </div>
                                                    <div class="body-title-2">Support</div>
                                                </a>
                                            </li> -->
                                            <li>
                                                <a href="<? echo base_url('admin/logout'); ?>" class="user-item">
                                                    <div class="icon">
                                                        <i class="icon-log-out"></i>
                                                    </div>
                                                    <div class="body-title-2">Log out</div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /header-dashboard -->
                    <!-- main-content -->
                    <div class="main-content">
                        <!-- main-content-wrap -->
                        <div class="main-content-inner">
                            <!-- main-content-wrap -->
                            <div class="main-content-wrap">
                                <div class="tf-section-4 mb-30">
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="top">
                                            <div class="flex items-center gap14">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#22C55E"/>
                                                    </svg>
                                                    <span class="icon">
                                                        <svg width="19.5" height="19.5" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10 2.25C5.44365 2.25 1.75 5.94365 1.75 10.5C1.75 15.0563 5.44365 18.75 10 18.75C14.5563 18.75 18.25 15.0563 18.25 10.5C18.25 5.94365 14.5563 2.25 10 2.25ZM0.25 10.5C0.25 5.11522 4.61522 0.75 10 0.75C15.3848 0.75 19.75 5.11522 19.75 10.5C19.75 15.8848 15.3848 20.25 10 20.25C4.61522 20.25 0.25 15.8848 0.25 10.5ZM10 3.75C10.4142 3.75 10.75 4.08579 10.75 4.5V5.3157C11.3768 5.42679 11.9745 5.67882 12.4691 6.07178L12.884 6.40137C13.2084 6.65902 13.2624 7.13081 13.0048 7.45514C12.7471 7.77947 12.2753 7.83353 11.951 7.57588L11.5361 7.24629C11.309 7.06586 11.0392 6.93462 10.75 6.85259V9.80961C11.4021 9.91435 12.0381 10.1591 12.5714 10.559C13.3164 11.1178 13.75 11.9035 13.75 12.75C13.75 13.5965 13.3164 14.3822 12.5714 14.941C12.0381 15.3409 11.4021 15.5856 10.75 15.6904V16.5C10.75 16.9142 10.4142 17.25 10 17.25C9.58579 17.25 9.25 16.9142 9.25 16.5V15.6904C8.59794 15.5856 7.96206 15.3409 7.42886 14.941L6.54999 14.2818C6.21862 14.0333 6.15147 13.5632 6.40001 13.2318C6.64854 12.9004 7.11865 12.8333 7.45001 13.0818L8.32888 13.741C8.5864 13.9341 8.90284 14.0771 9.25 14.1616V11.1844C8.63267 11.075 8.03304 10.8274 7.53058 10.4283C6.81822 9.86237 6.41752 9.07872 6.41752 8.25003C6.41752 7.42133 6.81822 6.63768 7.53058 6.07178C8.02533 5.67876 8.6231 5.42672 9.25 5.31565V4.5C9.25 4.08579 9.58579 3.75 10 3.75ZM9.25 6.85252C8.96071 6.93454 8.69081 7.0658 8.46361 7.24629C8.06987 7.55907 7.91752 7.92707 7.91752 8.25003C7.91752 8.57298 8.06987 8.94098 8.46361 9.25376C8.68603 9.43046 8.95518 9.56376 9.25 9.64747V6.85252ZM10.75 11.3384V14.1616C11.0972 14.0772 11.4138 13.9342 11.6713 13.741C12.0978 13.4211 12.25 13.0551 12.25 12.75C12.25 12.4449 12.0978 12.0789 11.6713 11.759C11.4138 11.5658 11.0972 11.4228 10.75 11.3384Z" fill="white"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="flex gap10 items-center">
                                                        <div class="body-text mt-2 mb-4">Total Earnings</div>
                                                        <div class="box-icon-trending up">
                                                            <i class="icon-trending-up"></i>
                                                            <div class="body-title number">1.56%</div>
                                                        </div>
                                                    </div>
                                                    <h4>$334,945</h4>
                                                </div>
                                            </div>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">Weekly<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">Monthly</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Yearly</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div class="wrap-line-chart" id="line-chart-1"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="top">
                                            <div class="flex items-center gap14">
                                                <div class="image type-white">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 48 52" fill="none">
                                                        <path d="M19.1094 2.12943C22.2034 0.343099 26.0154 0.343099 29.1094 2.12943L42.4921 9.85592C45.5861 11.6423 47.4921 14.9435 47.4921 18.5162V33.9692C47.4921 37.5418 45.5861 40.8431 42.4921 42.6294L29.1094 50.3559C26.0154 52.1423 22.2034 52.1423 19.1094 50.3559L5.72669 42.6294C2.63268 40.8431 0.726688 37.5418 0.726688 33.9692V18.5162C0.726688 14.9435 2.63268 11.6423 5.72669 9.85592L19.1094 2.12943Z" fill="#FF5200"/>
                                                    </svg>
                                                    <span class="icon">
                                                        <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.99959 1.5C8.34273 1.5 6.99959 2.84315 6.99959 4.5V5.25H12.9996V4.5C12.9996 2.84315 11.6564 1.5 9.99959 1.5ZM14.4996 5.25V4.5C14.4996 2.01472 12.4849 0 9.99959 0C7.51431 0 5.49959 2.01472 5.49959 4.5V5.25H3.51238C2.55283 5.25 1.74813 5.97444 1.64768 6.92872L0.384527 18.9287C0.267993 20.0358 1.13603 21 2.24922 21H17.75C18.8631 21 19.7312 20.0358 19.6147 18.9287L18.3515 6.92872C18.251 5.97444 17.4463 5.25 16.4868 5.25H14.4996ZM12.9996 6.75H6.99959V8.16146C7.22974 8.36745 7.37459 8.66681 7.37459 9C7.37459 9.62132 6.87091 10.125 6.24959 10.125C5.62827 10.125 5.12459 9.62132 5.12459 9C5.12459 8.66681 5.26943 8.36745 5.49959 8.16146V6.75H3.51238C3.32047 6.75 3.15953 6.89489 3.13944 7.08574L1.87628 19.0857C1.85298 19.3072 2.02659 19.5 2.24922 19.5H17.75C17.9726 19.5 18.1462 19.3072 18.1229 19.0857L16.8597 7.08574C16.8396 6.89489 16.6787 6.75 16.4868 6.75H14.4996V8.16146C14.7297 8.36746 14.8746 8.66681 14.8746 9C14.8746 9.62132 14.3709 10.125 13.7496 10.125C13.1283 10.125 12.6246 9.62132 12.6246 9C12.6246 8.66681 12.7694 8.36745 12.9996 8.16146V6.75Z" fill="white"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="flex gap15 items-center">
                                                        <div class="body-text mt-2 mb-4">Total Orders</div>
                                                        <div class="box-icon-trending down">
                                                            <i class="icon-trending-down"></i>
                                                            <div class="body-title number">1.56%</div>
                                                        </div>
                                                    </div>
                                                    <h4>2,802</h4>
                                                </div>
                                            </div>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">Monthly<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">Weekly</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Yearly</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div class="wrap-line-chart" id="line-chart-2"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="top">
                                            <div class="flex items-center gap14">
                                                <div class="image type-white">
                                                    <svg width="52" height="52" viewBox="0 0 48 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.1084 2.12894C22.2024 0.34261 26.0144 0.342611 29.1084 2.12894L42.4911 9.85544C45.5851 11.6418 47.4911 14.943 47.4911 18.5157V33.9687C47.4911 37.5413 45.5851 40.8426 42.4911 42.6289L29.1084 50.3554C26.0144 52.1418 22.2024 52.1418 19.1084 50.3554L5.72571 42.6289C2.6317 40.8426 0.725712 37.5413 0.725712 33.9687V18.5157C0.725712 14.943 2.6317 11.6418 5.72571 9.85544L19.1084 2.12894Z" fill="#8F77F3"/>
                                                    </svg>
                                                    <span class="icon">
                                                        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.61976 16.1198C5.51618 15.2233 6.73199 14.7197 7.99973 14.7197H15.9997C17.2675 14.7197 18.4833 15.2233 19.3797 16.1198C20.2761 17.0162 20.7797 18.232 20.7797 19.4997V21.4997C20.7797 21.9305 20.4305 22.2797 19.9997 22.2797C19.5689 22.2797 19.2197 21.9305 19.2197 21.4997V19.4997C19.2197 18.6457 18.8805 17.8267 18.2766 17.2228C17.6727 16.619 16.8537 16.2797 15.9997 16.2797H7.99973C7.14573 16.2797 6.32671 16.619 5.72284 17.2228C5.11898 17.8267 4.77973 18.6457 4.77973 19.4997V21.4997C4.77973 21.9305 4.43051 22.2797 3.99973 22.2797C3.56894 22.2797 3.21973 21.9305 3.21973 21.4997V19.4997C3.21973 18.232 3.72333 17.0162 4.61976 16.1198Z" fill="white"/>
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9997 4.27973C10.2214 4.27973 8.77973 5.72137 8.77973 7.49973C8.77973 9.27808 10.2214 10.7197 11.9997 10.7197C13.7781 10.7197 15.2197 9.27808 15.2197 7.49973C15.2197 5.72137 13.7781 4.27973 11.9997 4.27973ZM7.21973 7.49973C7.21973 4.85981 9.35981 2.71973 11.9997 2.71973C14.6396 2.71973 16.7797 4.85981 16.7797 7.49973C16.7797 10.1396 14.6396 12.2797 11.9997 12.2797C9.35981 12.2797 7.21973 10.1396 7.21973 7.49973Z" fill="white"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="flex gap9 items-center">
                                                        <div class="body-text mt-2 mb-4">Customers</div>
                                                        <div class="box-icon-trending up color-violet">
                                                            <i class="icon-trending-up"></i>
                                                            <div class="body-title number">1.56%</div>
                                                        </div>
                                                    </div>
                                                    <h4>4,945</h4>
                                                </div>
                                            </div>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">Yearly<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">Monthly</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Weekly</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div class="wrap-line-chart" id="line-chart-3"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                    <!-- chart-default -->
                                    <div class="wg-chart-default">
                                        <div class="top">
                                            <div class="flex items-center gap14">
                                                <div class="image type-white">
                                                    <svg width="52" height="52" viewBox="0 0 48 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M19.1084 2.12894C22.2024 0.34261 26.0144 0.342611 29.1084 2.12894L42.4911 9.85544C45.5851 11.6418 47.4911 14.943 47.4911 18.5157V33.9687C47.4911 37.5413 45.5851 40.8426 42.4911 42.6289L29.1084 50.3554C26.0144 52.1418 22.2024 52.1418 19.1084 50.3554L5.72571 42.6289C2.6317 40.8426 0.725712 37.5413 0.725712 33.9687V18.5157C0.725712 14.943 2.6317 11.6418 5.72571 9.85544L19.1084 2.12894Z" fill="#2377FC"/>
                                                    </svg>
                                                    <span class="icon">
                                                        <svg width="18" height="21" viewBox="0 0 18 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.5 1.5C9.82674 1.5 9.25525 1.94413 9.06623 2.55717C9.02336 2.69622 9 2.84469 9 3H13.5C13.5 2.84469 13.4766 2.69622 13.4338 2.55717C13.2448 1.94413 12.6733 1.5 12 1.5H10.5ZM7.83701 1.61765C8.33669 0.656928 9.3409 0 10.5 0H12C13.1591 0 14.1633 0.656928 14.663 1.61765C14.8877 1.63319 15.1121 1.65026 15.3359 1.66884C16.8752 1.7966 18 3.10282 18 4.60822V15C18 16.6569 16.6569 18 15 18H13.5V19.125C13.5 20.1605 12.6605 21 11.625 21H1.875C0.839466 21 0 20.1605 0 19.125V7.875C0 6.83947 0.839466 6 1.875 6H4.5V4.60822C4.5 3.10283 5.62475 1.7966 7.16405 1.66884C7.38795 1.65026 7.61227 1.63319 7.83701 1.61765ZM7.50702 3.14604C7.43401 3.15177 7.36104 3.15765 7.28812 3.1637C6.56523 3.2237 6 3.84365 6 4.60822V6H11.625C12.6605 6 13.5 6.83947 13.5 7.875V16.5H15C15.8284 16.5 16.5 15.8284 16.5 15V4.60822C16.5 3.84365 15.9348 3.2237 15.2119 3.1637C15.139 3.15765 15.066 3.15177 14.993 3.14604C14.9196 3.90594 14.2792 4.5 13.5 4.5H9C8.22085 4.5 7.58044 3.90594 7.50702 3.14604ZM12 7.875C12 7.66789 11.8321 7.5 11.625 7.5H1.875C1.66789 7.5 1.5 7.66789 1.5 7.875V19.125C1.5 19.3321 1.66789 19.5 1.875 19.5H11.625C11.8321 19.5 12 19.3321 12 19.125V7.875ZM3 10.5C3 10.0858 3.33579 9.75 3.75 9.75H3.7575C4.17171 9.75 4.5075 10.0858 4.5075 10.5V10.5075C4.5075 10.9217 4.17171 11.2575 3.7575 11.2575H3.75C3.33579 11.2575 3 10.9217 3 10.5075V10.5ZM5.25 10.5C5.25 10.0858 5.58579 9.75 6 9.75H9.75C10.1642 9.75 10.5 10.0858 10.5 10.5C10.5 10.9142 10.1642 11.25 9.75 11.25H6C5.58579 11.25 5.25 10.9142 5.25 10.5ZM3 13.5C3 13.0858 3.33579 12.75 3.75 12.75H3.7575C4.17171 12.75 4.5075 13.0858 4.5075 13.5V13.5075C4.5075 13.9217 4.17171 14.2575 3.7575 14.2575H3.75C3.33579 14.2575 3 13.9217 3 13.5075V13.5ZM5.25 13.5C5.25 13.0858 5.58579 12.75 6 12.75H9.75C10.1642 12.75 10.5 13.0858 10.5 13.5C10.5 13.9142 10.1642 14.25 9.75 14.25H6C5.58579 14.25 5.25 13.9142 5.25 13.5ZM3 16.5C3 16.0858 3.33579 15.75 3.75 15.75H3.7575C4.17171 15.75 4.5075 16.0858 4.5075 16.5V16.5075C4.5075 16.9217 4.17171 17.2575 3.7575 17.2575H3.75C3.33579 17.2575 3 16.9217 3 16.5075V16.5ZM5.25 16.5C5.25 16.0858 5.58579 15.75 6 15.75H9.75C10.1642 15.75 10.5 16.0858 10.5 16.5C10.5 16.9142 10.1642 17.25 9.75 17.25H6C5.58579 17.25 5.25 16.9142 5.25 16.5Z" fill="white"/>
                                                        </svg>
                                                    </span>
                                                </div>
                                                <div>
                                                    <div class="flex gap10 items-center">
                                                        <div class="body-text mt-2 mb-4">My Balance</div>
                                                        <div class="box-icon-trending up color-blue">
                                                            <i class="icon-trending-up"></i>
                                                            <div class="body-title number">1.56%</div>
                                                        </div>
                                                    </div>
                                                    <h4>4,945</h4>
                                                </div>
                                            </div>
                                            <div class="dropdown default">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <span class="view-all">Yearly<i class="icon-chevron-down"></i></span>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-end">
                                                    <li>  
                                                        <a href="javascript:void(0);">Monthly</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Weekly</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="wrap-chart">
                                            <div class="wrap-line-chart" id="line-chart-4"></div>
                                        </div>
                                    </div>
                                    <!-- /chart-default -->
                                </div>
                                <div class="tf-section-2 mb-30">
                                    <!-- Revenue -->
                                    <div class="wg-box">
                                        <div class="flex items-center justify-between">
                                            <h5>Revenue</h5>
                                            <div class="dropdown default style-box">
                                                <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <a href="product-list.html" class="view-all">Yearly<i class="icon-chevron-down"></i></a>
                                                </button>
                                                <ul class="dropdown-menu">
                                                    <li>  
                                                        <a href="javascript:void(0);">Weekly</a>
                                                    </li>
                                                    <li>  
                                                        <a href="javascript:void(0);">Monthly</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="flex flex-wrap gap40">
                                            <div>
                                                <div class="mb-1">
                                                    <div class="block-legend">
                                                        <div class="dot t3"></div>
                                                        <div class="text-tiny">Revenue</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap12">
                                                    <h4>$37,802</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number text-grey">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="mb-1">
                                                    <div class="block-legend">
                                                        <div class="dot t5"></div>
                                                        <div class="text-tiny">Order</div>
                                                    </div>
                                                </div>
                                                <div class="flex items-center gap12">
                                                    <h4>$28,305</h4>
                                                    <div class="box-icon-trending up">
                                                        <i class="icon-trending-up"></i>
                                                        <div class="body-title number text-grey">0.56%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="line-chart-7"></div>
                                    </div>
                                    <!-- /Revenue -->
                                    <div class="flex gap20 flex-wrap-mobile">
                                        <!-- top-product -->
                                        <div class="wg-box w-half">
                                            <div class="flex items-center justify-between">
                                                <h5>Promotional Sales</h5>
                                                <div class="dropdown default style-box">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <a href="product-list.html" class="view-all">Weekly<i class="icon-chevron-down"></i></a>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>  
                                                            <a href="javascript:void(0);">Yearly</a>
                                                        </li>
                                                        <li>  
                                                            <a href="javascript:void(0);">Monthly</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="flex flex-wrap gap40">
                                                <div>
                                                    <div class="mb-1">
                                                        <div class="block-legend">
                                                            <div class="text-tiny">Visitors</div>
                                                        </div>
                                                    </div>
                                                    <div class="flex items-center gap10">
                                                        <h4>7,802</h4>
                                                        <div class="box-icon-trending up">
                                                            <i class="icon-trending-up"></i>
                                                            <div class="body-title number text-grey">0.56%</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="morris-donut-1" class="text-center"></div>
                                            <div class="flex gap20">
                                                <div class="block-legend style-1 w-full">
                                                    <div class="dot t4"></div>
                                                    <div class="text-tiny">Social Media</div>
                                                </div>
                                                <div class="block-legend style-1 w-full">
                                                    <div class="dot t2"></div>
                                                    <div class="text-tiny">Website</div>
                                                </div>
                                                <div class="block-legend style-1 w-full">
                                                    <div class="dot t3"></div>
                                                    <div class="text-tiny">Store</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /top-product -->
                                        <!-- top-countries -->
                                        <div class="wg-box w-half">
                                            <div class="flex items-center justify-between">
                                                <h5>Top sale</h5>
                                                <div class="dropdown default style-box">
                                                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <a href="product-list.html" class="view-all">Weekly<i class="icon-chevron-down"></i></a>
                                                    </button>
                                                    <ul class="dropdown-menu">
                                                        <li>  
                                                            <a href="javascript:void(0);">Yearly</a>
                                                        </li>
                                                        <li>  
                                                            <a href="javascript:void(0);">Monthly</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <ul class="flex flex-column h-full has-divider-line">
                                                <li class="wg-product">
                                                    <div class="name flex-grow">
                                                        <div class="image">
                                                            <img src="images/products/product-1.jpg" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="title">
                                                                <a href="#" class="body-text">Neptune Longsleeve</a>
                                                            </div>
                                                            <div class="price text-tiny">$138</div>
                                                        </div>
                                                    </div>
                                                    <div class="sale body-text">952 Sales</div>
                                                </li>
                                                <li class="wg-product">
                                                    <div class="name flex-grow">
                                                        <div class="image">
                                                            <img src="images/products/product-2.jpg" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="title">
                                                                <a href="#" class="body-text">Ribbed Tank Top</a>
                                                            </div>
                                                            <div class="price text-tiny">$108</div>
                                                        </div>
                                                    </div>
                                                    <div class="sale body-text">952 Sales</div>
                                                </li>
                                                <li class="wg-product">
                                                    <div class="name flex-grow">
                                                        <div class="image">
                                                            <img src="images/products/product-3.jpg" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="title">
                                                                <a href="#" class="body-text">Ribbed modal T-shirt</a>
                                                            </div>
                                                            <div class="price text-tiny">$125</div>
                                                        </div>
                                                    </div>
                                                    <div class="sale body-text">902 Sales</div>
                                                </li>
                                                <li class="wg-product">
                                                    <div class="name flex-grow">
                                                        <div class="image">
                                                            <img src="images/products/product-4.jpg" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="title">
                                                                <a href="#" class="body-text">Oversized Motif T-shirt</a>
                                                            </div>
                                                            <div class="price text-tiny">$98</div>
                                                        </div>
                                                    </div>
                                                    <div class="sale body-text">882 Sales</div>
                                                </li>
                                                <li class="wg-product">
                                                    <div class="name flex-grow">
                                                        <div class="image">
                                                            <img src="images/products/product-5.jpg" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="title">
                                                                <a href="#" class="body-text">V-neck linen T-shirt</a>
                                                            </div>
                                                            <div class="price text-tiny">$158</div>
                                                        </div>
                                                    </div>
                                                    <div class="sale body-text">869 Sales</div>
                                                </li>
                                                <li class="wg-product">
                                                    <div class="name flex-grow">
                                                        <div class="image">
                                                            <img src="images/products/product-6.jpg" alt="">
                                                        </div>
                                                        <div>
                                                            <div class="title">
                                                                <a href="#" class="body-text">Jersey thong body</a>
                                                            </div>
                                                            <div class="price text-tiny">$78</div>
                                                        </div>
                                                    </div>
                                                    <div class="sale body-text">833 Sales</div>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /top-countries -->
                                    </div>
                                </div>
                            </div>
                            <!-- /main-content-wrap -->
                        </div>
                        <!-- /main-content-wrap -->
                        <!-- bottom-page -->
                        <div class="bottom-page">
                            <div class="body-text">Copyright © 2024 <a href="../index.html">Ecomus</a>. Design by Themesflat All rights reserved</div>
                        </div>
                        <!-- /bottom-page -->
                    </div>
                    <!-- /main-content -->
                </div>
                <!-- /section-content-right -->
            </div>
            <!-- /layout-wrap -->
        </div>
        <!-- /#page -->
    </div>
    <!-- /#wrapper -->

    <!-- Javascript -->
    <? $this->load->view('template-office/script'); ?>

</body>

</html>