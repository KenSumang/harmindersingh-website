<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/icons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/icons/site.webmanifest">
    
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <div class="header__banner w-full h-screen min-h-[800px] bg-cover bg-center"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-background.png')">
            <div class="header__banner__wrapper flex flex-col w-full h-full">

                <?php get_header(); ?>

                <div class="banner__contents flex flex-col items-center m-auto gap-[18px] max-w-[330px] md:max-w-full text-light-primary slide-up">

                    <h1 class="banner__title text-center font-Playfair font-semibold text-[32px] sm:text-[42px] md:text-[50px] lg:text-[54px] 3xl:text-[64px]">
                        Expert Services.<br>Integrated Strategy.
                    </h1>

                    <p class="banner__subtitle text-center font-DMSans text-[16px] max-w-[280px] md:max-w-[480px] lg:max-w-[680px] xl:! md:text-[18px] lg:text-[20px] 3xl:text-[26px] font-light mb-10">
                        Explore how our unified approach across Accounting, Law, and Property delivers outcomes that no single specialist could achieve alone.
                    </p>

                    <p class="banner__subtitle text-center font-DMSans text-[16px] max-w-[300px] md:max-w-[500px] lg:max-w-[750px] xl:max-w-[1000px] md:text-[18px] lg:text-[20px] 3xl:text-[26px] text-extra-light-primary font-light">
                        Every service we offer is designed to work in concert, not in isolation. Whether you're structuring a business, protecting an asset, or planning your financial future,
                        each engagement draws on the full depth of our expertise to deliver a solution that is precise, strategic, and built to last.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>

    <section class="services bg-[#eef0f4] py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-16 max-w-[350px] md:max-w-full mx-auto">

                <!-- Card 1: Financial Services -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">

                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[28px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/financial-services-icon.png" alt="Financial Services Icon">
                        </div>
                    </div>

                    <div class="flex flex-col flex-1 p-6 sm:p-8 blockappear">

                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-3 group-hover:text-gold-accent transition duration-200">
                            Financial Services
                        </h3>

                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1">
                            Comprehensive accounting and advisory solutions designed to keep you compliant, strengthen financial performance, and support sustainable business growth.
                        </p>

                        <div class="mt-6 text-right">
                            <a href="<?php echo home_url('/financial'); ?>" class="text-[#0d1b2e] text-sm font-semibold hover:text-[#c9a84c] transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;">
                            Explore →
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Card 2: Legal Services -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">

                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[42px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/legal-services-icon.png" alt="Legal Services Icon">
                        </div>
                    </div>

                    <div class="flex flex-col flex-1 p-6 sm:p-8 blockappear">

                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-3 group-hover:text-gold-accent transition duration-200">
                            Legal Services
                        </h3>

                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1">
                            Accessible, reliable, and dedicated support with flexible options, 24/7 availability, and a commitment to achieving the best possible outcome.
                        </p>

                        <div class="mt-6 text-right">
                            <a href="<?php echo home_url('/legal'); ?>" class="text-[#0d1b2e] text-sm font-semibold hover:text-[#c9a84c] transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;">
                            Explore →
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Card 3: Property Development -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">

                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[28px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/property-development-icon.png" alt="Property Development Icon">
                        </div>
                    </div>

                    <div class="flex flex-col flex-1 p-6 sm:p-8 blockappear">

                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-3 group-hover:text-gold-accent transition duration-200">
                            Property Development
                        </h3>

                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1">
                            Over 11 years of Expertise in Delivering innovative Residential and Commercial Projects in Sydney's North West Growth Corridor
                        </p>

                        <div class="mt-6 text-right">
                            <a href="<?php echo home_url('/property-development'); ?>" class="text-[#0d1b2e] text-sm font-semibold hover:text-[#c9a84c] transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;">
                            Explore →
                            </a>
                        </div>

                    </div>
                </div>

                <!-- Card 4: Real Estate -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">
                    
                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[42px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/real-estate-icon.png" alt="Real Estate Icon">
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col flex-1 p-6 sm:p-8 blockappear">

                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-3 group-hover:text-gold-accent transition duration-200">
                            Real Estate
                        </h3>

                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1">
                            For properties for sale or rent in Sydney - City and Inner South, NSW, Century 21 Projects Australasia offers a wide range of homes to suit all budgets.
                        </p>

                        <div class="mt-6 text-right">
                            <a href="<?php echo home_url('/real-estate'); ?>" class="text-[#0d1b2e] text-sm font-semibold hover:text-[#c9a84c] transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;">
                            Explore →
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- 
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script> -->

<?php get_footer(); ?>