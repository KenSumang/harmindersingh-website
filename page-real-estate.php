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
                        Real Estate
                    </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-[#0d1b2e] font-Playfair font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-tight mb-16 md:mb-24">
                    Century 21 Projects Australasia
                </h1>

                <!-- Divider -->
                <hr class="border-[#e5e7eb] my-6" />

                <!-- Subtitle -->
                <p class="text-[#374151] font-DMSans text-sm sm:text-base md:text-lg">
                    Sydney's Trusted Local Real Estate Agents
                </p>

                <!-- Divider -->
                <hr class="border-[#e5e7eb] mt-6" />
            </div>
        </div>
    </section>

    <section class="estimates bg-white py-16 md:py-20">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl">
            <div class="flex flex-col gap-12">

            <!-- Block 1 -->
            <div class="flex flex-col gap-4 slide-up">
                <h2 class="text-[#0d1b2e] font-Playfair font-bold text-3xl sm:text-4xl leading-tight">
                How much is your home really worth?
                </h2>
                <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed">
                Find out with Century 21 Projects Australasia - your local real estate experts in Sydney and surrounds.
                </p>
                <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed">
                Interested in obtaining an up-to-date opinion of your home's current market value? <span class="font-bold text-[#0d1b2e]">Century 21 Projects Australasia's agents would love nothing more than to dazzle you with their local knowledge and expertise, we can help.</span>
                </p>
            </div>

            <!-- Block 2 -->
            <div class="flex flex-col gap-4 slide-up">
                <h2 class="text-[#0d1b2e] font-Playfair font-bold text-3xl sm:text-4xl leading-tight">
                Quality Real Estate for Sale in Sydney, Gosford and surrounds
                </h2>
                <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed">
                We take the quality of our customer service extremely seriously and will always strive to make your search for the perfect property as seamless as straightforward and stress-free as possible.
                </p>
                <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed">
                If you'd like to speak to one of our friendly real estate agents about houses and property for sale or rent in Australia, contact Century 21 Projects Australasia today.
                </p>
            </div>

            </div>
        </div>
    </section>

    <section class="projects bg-[#eef0f4] py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">

            <!-- Section Title -->
            <h2 class="text-[#0d1b2e] font-Playfair font-bold text-3xl sm:text-4xl md:text-5xl text-center mb-12 md:mb-16 blockappear">
                Century 21 Projects for Sale
            </h2>

            <!-- Cards Grid -->
            <div id="realestate-grid" class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10 min-h-[400px]">
            </div>

            <!-- Pagination -->
            <div id="realestate-pagination" class="flex flex-col items-center gap-6 mt-10">
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
                <h2 class="text-white font-bold text-3xl sm:text-4xl md:text-5xl leading-tight"
                    style="font-family: 'Playfair Display', serif;">
                    About Century 21 Projects Australasia
                </h2>
            </div>

            <!-- Body paragraphs -->
            <div class="flex flex-col gap-6 mb-14 md:mb-20">
                <p class="text-white/80 text-sm sm:text-base leading-relaxed"
                    style="font-family: 'Source Serif 4', serif;">
                    New marketplace. New rules. Century 21 Projects Australasia gives developers an unmatched advantage by providing insightful, and results-oriented, 
                    step-by-step guidance and support from site acquisition, sales & marketing to final sellout for projects of all sizes, price points, and locations.
                    We use comprehensive market analytics to hone our planning, design, and branding strategies, and we leverage Century 21 & Better Homes and Gardens to deliver potent,
                    breakthrough content and sales campaigns that are targeted and amplified through our innovative platforms.
                </p>

                <p class="text-white/80 text-sm sm:text-base leading-relaxed"
                    style="font-family: 'Source Serif 4', serif;">
                    Utilising the strength of the local offices, Century 21 Projects Australasia, is in the unbeatable position to provide developers and purchasers with up-to-date Local Area Knowledge.
                </p>

                <p class="text-white/80 text-sm sm:text-base leading-relaxed"
                    style="font-family: 'Source Serif 4', serif;">
                    Within just under 2 years of opening the doors to Century 21 Projects Australasia, we have successfully transacted over $1billion worth of assets across our site acquisitions & project sales.
                </p>

                <p class="text-white/80 text-sm sm:text-base leading-relaxed"
                    style="font-family: 'Source Serif 4', serif;">
                    With an overseas reach into Asia and India our team offers a wide reach with diverse international strategies helping maximize all opportunities for our Developer partners.
                </p>
            </div>

            <!-- CTA link -->
            <a href="https://projectsau.century21.com.au/team/harminder-singh"
                target="_blank"
                class="group text-white/70 text-sm sm:text-base hover:text-gold-accent transition-colors duration-200"
                style="font-family: 'Source Serif 4', serif;">
                More on <span class="font-bold text-white group-hover:text-gold-accent transition-colors duration-200">Century 21 Projects Australasia</span> →
            </a>

            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/contact'); ?>

    <?php get_footer(); ?>