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
    
    <?php get_header(); ?>

    <section class="services_banner bg-white py-10 md:py-14">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl">
            <div class="services_banner_contents flex flex-col slide-up">
                <!-- Back link -->
                <a href="<?php echo home_url('/services'); ?>"
                    class="inline-flex items-center font-DMSans text-[#4a5568] text-sm sm:text-base hover:text-gold-accent transition-colors duration-200 mb-6">
                    ← Back to Services
                </a>

                <!-- Gold badge -->
                <div class="inline-block bg-gold-accent px-4 py-2 mb-10 mr-auto">
                    <span class="text-primary font-DMSans uppercase tracking-widest text-xs font-semibold">
                        Financial Services
                    </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-[#0d1b2e] font-Playfair font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-tight mb-16 md:mb-24">
                    HP Accountants &amp; Associates
                </h1>

                <!-- Divider -->
                <hr class="border-[#e5e7eb] my-6" />

                <!-- Subtitle -->
                <p class="text-[#374151] font-DMSans text-sm sm:text-base md:text-lg">
                    Helping you Achieve Financial Success with Tailored Solutions
                </p>

                <!-- Divider -->
                <hr class="border-[#e5e7eb] mt-6" />
            </div>
        </div>
    </section>

    <section class="services bg-[#eef0f4] py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">

            <!-- Section Title -->
            <h2 class="text-[#0d1b2e] font-Playfair font-bold text-3xl sm:text-4xl text-center mb-10 md:mb-14 max-w-[800px] mx-auto">
                Our Services
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-16 max-w-[350px] md:max-w-full mx-auto">

                <!-- Card 1: Taxation Services -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">

                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[34px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/taxation.png" alt="Financial Services Icon">
                        </div>
                    </div>

                    <div class="flex flex-col flex-1 p-6 sm:p-8">
                        
                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-3 group-hover:text-gold-accent transition duration-200">
                            Taxation Services
                        </h3>
                        
                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1">
                            We offer comprehensive tax planning and compliance services for individuals, businesses, trusts, partnerships and SMSFs.
                        </p>
                        
                        <div class="mt-6 text-right">
                            <a href="https://www.hpaa.com.au/#comp-m8glui0l" class="text-[#0d1b2e] text-sm font-semibold hover:text-gold-accent transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;" target="_blank">
                            Explore →
                            </a>
                        </div>
                        
                    </div>

                </div>

                <!-- Card 2: Business Advisory Services -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">

                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[42px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/business-advisory.png" alt="Legal Services Icon">
                        </div>
                    </div>

                    <div class="flex flex-col flex-1 p-6 sm:p-8">

                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-3 group-hover:text-gold-accent transition duration-200">
                            Business Advisory Services
                        </h3>

                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1">
                            Our strategic advisory services help overcome financial challenges and support sustainable business growth.
                        </p>

                        <div class="mt-6 text-right">
                            <a href="https://www.hpaa.com.au/#comp-m8glui0l" class="text-[#0d1b2e] text-sm font-semibold hover:text-gold-accent transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;" target="_blank">
                                Explore →
                            </a>
                        </div>

                    </div>

                </div>

                <!-- Card 3: Annual Financial Development -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">

                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[34px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/annual-financial.png" alt="Property Development Icon">
                        </div>
                    </div>

                    <div class="flex flex-col flex-1 p-6 sm:p-8">

                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-3 group-hover:text-gold-accent transition duration-200">
                            Annual Financial Statements
                        </h3>

                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1">
                            We prepare compliant financial statements that provide clear insights into your financial performance to support informed business decisions.
                        </p>

                        <div class="mt-6 text-right">
                            <a href="https://www.hpaa.com.au/#comp-m8glui0l" class="text-[#0d1b2e] text-sm font-semibold hover:text-gold-accent transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;" target="_blank">
                                Explore →
                            </a>
                        </div>

                    </div>

                </div>

                <!-- Card 4: Bookkeeping and BAS -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">

                    <!-- Dark header with icon -->
                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[30px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/bookkeeping.png" alt="Real Estate Icon">
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col flex-1 p-6 sm:p-8">

                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-3 group-hover:text-gold-accent transition duration-200">
                            Bookkeeping and BAS
                        </h3>

                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1">
                            We provide accurate bookkeeping and prepare BAS and IAS, helping you stay compliant and focus on your business.
                        </p>

                        <div class="mt-6 text-right">
                            <a href="https://www.hpaa.com.au/#comp-m8glui0l" class="text-[#0d1b2e] text-sm font-semibold hover:text-gold-accent transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;" target="_blank">
                                Explore →
                            </a>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="proven-process bg-white py-16 md:py-20">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl">

            <!-- Section Title -->
            <h2 class="text-[#0d1b2e] font-Playfair font-bold text-3xl sm:text-4xl md:text-5xl mb-12 md:mb-16">
                Our Proven Process for Your Financial Success
            </h2>

            <!-- Steps -->
            <div class="flex flex-col gap-10 md:gap-12">

                <!-- Step 1 -->
                <div class="slide-up">

                    <h3 class="text-gold-accent font-Playfair font-bold text-lg sm:text-xl mb-4">
                        1. Initial Consultation 
                    </h3>

                    <p class="text-[#4a5568] text-sm sm:text-base leading-relaxed pl-4 border-l-0"
                        style="font-family: 'Source Serif 4', serif;">
                        We begin with a comprehensive consultation to understand your financial goals and challenges. This helps us tailor our services to meet your specific needs.
                    </p>

                </div>

                <!-- Step 2 -->
                <div class="slide-up">

                    <h3 class="text-gold-accent font-Playfair font-bold text-lg sm:text-xl mb-4">
                        2. Customised Strategy
                    </h3>
                    <p class="text-[#4a5568] text-sm sm:text-base leading-relaxed pl-4"
                        style="font-family: 'Source Serif 4', serif;">
                        Based on our consultation, we develop a personalised financial strategy that aligns with your objectives. This plan is designed to optimise your financial outcomes and ensure you get the most of our services.
                    </p>

                </div>

                <!-- Step 3 -->
                <div class="slide-up">

                    <h3 class="text-gold-accent font-Playfair font-bold text-lg sm:text-xl mb-4">
                        3. Implementation
                    </h3>

                    <p class="text-[#4a5568] text-sm sm:text-base leading-relaxed pl-4"
                        style="font-family: 'Source Serif 4', serif;">
                        We execute the customised strategy, managing all aspects of your financial needs. Our team ensures every detail is handled with precision and care.
                    </p>

                </div>

                <!-- Step 4 -->
                <div class="slide-up">
                    <h3 class="text-gold-accent font-Playfair font-bold text-lg sm:text-xl mb-4">
                        4. Ongoing Support
                    </h3>

                    <p class="text-[#4a5568] text-sm sm:text-base leading-relaxed pl-4"
                        style="font-family: 'Source Serif 4', serif;">
                        Our commitment doesn't end with implementation. We provide continuous support and adjustments to your strategy, ensuring it remains effective as your financial situation evolves.
                    </p>
                    
                </div>

            </div>
        </div>
    </section>

    <section class="about-hp bg-[#0d1b2e] py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl">

            <!-- Gold bordered card -->
            <div class="border border-gold-accent px-8 sm:px-12 py-12 sm:py-16">

                <!-- Title with left gold bar -->
                <div class="flex items-stretch gap-4 mb-10 md:mb-14">

                    <div class="w-1 bg-gold-accent flex-shrink-0"></div>

                    <h2 class="text-white font-Playfair font-bold text-3xl sm:text-4xl md:text-5xl leading-tight">
                        About HP Accountants &amp; Associates
                    </h2>

                </div>

                <!-- Body paragraphs -->
                <div class="flex flex-col gap-6 mb-14 md:mb-20">

                    <p class="text-white/80 text-sm sm:text-base leading-relaxed"
                        style="font-family: 'Source Serif 4', serif;">
                        Established in 2009, our practice is built on a foundation of over 20 years of experience in accounting, finance and legal matters. Our team consists of Chartered Accountants (Australia &amp; NZ) and Certified Practicing Accountants (CPA Australia) who are committed to delivering personalised, high quality services.
                    </p>

                    <p class="text-white/80 text-sm sm:text-base leading-relaxed"
                        style="font-family: 'Source Serif 4', serif;">
                        We understand that every client is unique, so we take the time to listen, providing tailored solutions that meet your individual or business needs. Our proactive approach ensures that we are always one step ahead, offering advice that makes a real difference to your financial future.
                    </p>

                </div>

                <!-- CTA link -->
                <a href="https://www.hpaa.com.au/"
                    target="_blank"
                    class="group text-white/70 text-sm sm:text-base hover:text-gold-accent transition-colors duration-200"
                    style="font-family: 'Source Serif 4', serif;">
                    More on <span class="font-bold text-white group-hover:text-gold-accent transition-colors duration-200">HP Accountants &amp; Associates</span> →
                </a>

            </div>
            
        </div>
    </section>

<?php get_template_part('template-parts/contact'); ?>

<?php get_footer(); ?>