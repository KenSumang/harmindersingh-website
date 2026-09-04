<header class="header flex justify-center w-full">
    <div class="container max-w-full font-Lato">
        <div class="top__header__wrapper w-full flex h-[52px] md:h-[58px] justify-center bg-primary">
            <div class="top__header__contents h-full w-[1300px] 3xl:w-[1480px] flex justify-between items-center">

                <nav class="top__header__leftnav justify-center text-white">

                    <div id="menu" name="menu" class="burger-menu flex flex-col gap-[4.8px] mx-[16px] justify-center items-center lg:hidden hover:cursor-pointer" onclick="Menu(this)">
                            
                        <div class="button w-[24px] h-[2px] rounded-full bg-white"></div>

                        <div class="button w-[24px] h-[2px] rounded-full bg-white"></div>

                        <div class="button w-[24px] h-[2px] rounded-full bg-white"></div>

                    </div>

                    <ul class="hidden flex-row gap-[28px] lg:flex mx-[16px]">

                        <li>
                            <a href="<?php echo home_url('/insights'); ?>" class="top_nav nav-link relative hover:after:w-[100%] text-[13px]">INSIGHTS</a>
                        </li>

                        <li>
                            <a href="<?php echo home_url('/services'); ?>" class="top_nav nav-link relative hover:after:w-[100%] text-[13px]">SERVICES</a>
                        </li>

                        <li>
                            <a href="<?php echo home_url('/case-studies'); ?>" class="top_nav nav-link relative hover:after:w-[100%] text-[13px]">CASE STUDIES</a>
                        </li>

                        <li>
                            <a href="<?php echo home_url('/about'); ?>" class="top_nav nav-link relative hover:after:w-[100%] text-[13px]">ABOUT US</a>
                        </li>

                        <li>
                            <a href="<?php echo home_url('/contact-us'); ?>" class="top_nav nav-link relative hover:after:w-[100%] text-[13px]">CONTACT US</a>
                        </li>

                    </ul>
                </nav>

                <a href="<?php echo home_url('/'); ?>" class="absolute right-1/2 translate-x-1/2 lg:hidden hover:cursor-pointer">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/harmindersingh-logo-white.png" alt="logo" class="w-[140px] md:w-[156px] lg:w-[176px]">
                </a>

                <nav class="top__header__rightnav text-primary hidden lg:block">
                    <ul class="flex gap-[16px] mx-[16px]">

                        <li class="flex">
                            <!-- #c9a84c hover color -->
                            <a href="<?php echo home_url('/'); ?>" target="_blank" class="">
                                <i class="fa-brands fa-facebook-f text-white text-[18px] hover:text-gold-accent transition duration-250"></i>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo home_url('/'); ?>" target="_blank" class="">
                                <i class="fa-brands fa-x-twitter text-white text-[18px] hover:text-gold-accent transition duration-250"></i>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo home_url('/'); ?>" target="_blank" class="">
                                <i class="fa-brands fa-linkedin-in text-white text-[18px] hover:text-gold-accent transition duration-250"></i>
                            </a>
                        </li>

                    </ul>
                </nav>
            </div>
        </div>

        <div class="bottom__header__wrapper hidden lg:flex w-full h-[52px] md:h-[58px] justify-center">
            <div class="bottom__header__contents h-full w-[1300px] 3xl:w-[1480px] flex justify-between items-center">

                <div class="header__logo hover:cursor-pointer">
                    <a href="<?php echo home_url('/'); ?>" class="flex h-full items-center mx-[16px] hover:cursor-pointer">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/harmindersingh-logo.png" alt="logo" class="w-[130px] md:w-[156px] lg:w-[176px]">
                    </a>
                </div>

                <nav class="bottom__header__nav text-primary">
                    <ul class="hidden flex-row gap-[28px] lg:flex mx-[16px] text-primary">

                        <li>
                            <a href="<?php echo home_url('/services/financial'); ?>" class="bottom_nav nav-link relative hover:after:w-[100%] text-[13px] font-regular">FINANCIAL</a>
                        </li>

                        <li>
                            <a href="<?php echo home_url('/services/legal'); ?>" class="bottom_nav nav-link relative hover:after:w-[100%] text-[13px] font-regular">LEGAL</a>
                        </li>

                        <li>
                            <a href="<?php echo home_url('/services/property-development'); ?>" class="bottom_nav nav-link relative hover:after:w-[100%] text-[13px] font-regular">PROPERTY DEVELOPMENT</a>
                        </li>

                        <li>
                            <a href="<?php echo home_url('/services/real-estate'); ?>" class="bottom_nav nav-link relative hover:after:w-[100%] text-[13px] font-regular">REAL ESTATE</a>
                        </li>

                    </ul>
                </nav>

            </div>
        </div>

        <div id="side_nav" class="side_nav flex items-center bg-[#0d1b2e] z-10 fixed overflow-y-auto h-full lg:h-screen w-3/4 max-w-[500px] top-0 left-0 translate-x-[-100%] flex-col lg:hidden transition-transform duration-500 z-[100]">
            <div class="side_nav_contents flex flex-col w-full h-full">

                <!-- Top: Logo + Close -->
                <div class="side_nav_top flex items-center justify-between px-8 pt-8 pb-6 border-b border-white/10">

                    <a href="<?php echo home_url('/'); ?>" class="hover:opacity-80 transition-opacity duration-200">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/harmindersingh-logo-white.png" alt="logo" class="max-w-[160px] sm:max-w-[180px]">
                    </a>

                    <i name="close-menu" id="close-menu"
                        class="fa-solid fa-xmark text-white text-[18px] cursor-pointer hover:text-gold-accent transition-colors duration-200"
                        onclick="Menu(this)">
                    </i>

                </div>

                <!-- Gold accent line -->
                <div class="h-[2px] w-12 bg-gold-accent mx-8 mt-8 mb-2"></div>

                <!-- Nav Links -->
                <ul class="flex flex-col w-full px-8 mt-4 gap-1 flex-1">

                    <li>
                        <a href="<?php echo home_url('/insights'); ?>"
                            class="group nav-link flex items-center gap-4 py-4 border-b border-white/10 font-DMSans text-white/70 hover:text-white transition-colors duration-200">
                                
                            <span class="text-gold-accent text-xs font-semibold">01</span>

                            <span class="text-[13px] md:text-[15px] uppercase tracking-widest font-semibold group-hover:translate-x-1 transition-transform duration-200">
                                Insights
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo home_url('/services'); ?>"
                            class="group nav-link flex items-center gap-4 py-4 border-b border-white/10 font-DMSans text-white/70 hover:text-white transition-colors duration-200">
                                
                            <span class="text-gold-accent text-xs font-semibold">02</span>

                            <span class="text-[13px] md:text-[15px] uppercase tracking-widest font-semibold group-hover:translate-x-1 transition-transform duration-200">
                                Services
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo home_url('/case-studies'); ?>"
                            class="group nav-link flex items-center gap-4 py-4 border-b border-white/10 font-DMSans text-white/70 hover:text-white transition-colors duration-200">
                                
                            <span class="text-gold-accent text-xs font-semibold">03</span>

                            <span class="text-[13px] md:text-[15px] uppercase tracking-widest font-semibold group-hover:translate-x-1 transition-transform duration-200">
                                Case Studies
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo home_url('/about'); ?>"
                            class="group nav-link flex items-center gap-4 py-4 border-b border-white/10 font-DMSans text-white/70 hover:text-white transition-colors duration-200">
                                
                            <span class="text-gold-accent text-xs font-semibold">04</span>

                            <span class="text-[13px] md:text-[15px] uppercase tracking-widest font-semibold group-hover:translate-x-1 transition-transform duration-200">
                                About Us
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo home_url('/contact-us'); ?>"
                            class="group nav-link text-gold-accent flex items-center gap-4 py-4 border-b border-white/10 font-DMSans text-white/70 hover:text-white transition-colors duration-200">
                                
                            <span class="text-gold-accent text-xs font-semibold">05</span>

                            <span class="text-[13px] md:text-[15px] uppercase tracking-widest font-semibold group-hover:translate-x-1 transition-transform duration-200">
                                Contact Us
                            </span>
                        </a>
                    </li>
                </ul>

                <!-- Bottom: Social Icons -->
                <div class="px-8 py-8 border-t border-white/10">

                    <p class="text-white/30 text-xs uppercase tracking-widest mb-4"
                        style="font-family: 'Source Serif 4', serif; letter-spacing: 0.18em;">
                        Follow Us
                    </p>

                    <ul class="flex gap-6">
                        <li>
                            <a href="<?php echo home_url('/'); ?>" target="_blank"
                                class="w-9 h-9 border border-white/20 flex items-center justify-center hover:border-gold-accent hover:text-gold-accent text-white/70 transition-colors duration-200">
                                <i class="fa-brands fa-facebook-f text-[14px]"></i>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo home_url('/'); ?>" target="_blank"
                                class="w-9 h-9 border border-white/20 flex items-center justify-center hover:border-gold-accent hover:text-gold-accent text-white/70 transition-colors duration-200">
                                <i class="fa-brands fa-x-twitter text-[14px]"></i>
                            </a>
                        </li>

                        <li>
                            <a href="<?php echo home_url('/'); ?>" target="_blank"
                                class="w-9 h-9 border border-white/20 flex items-center justify-center hover:border-gold-accent hover:text-gold-accent text-white/70 transition-colors duration-200">
                                <i class="fa-brands fa-linkedin-in text-[14px]"></i>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</header>
