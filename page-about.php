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

    <section class="banner py-12 md:py-14">
        <div class="container mx-auto px-4 sm:px-6 max-w-6xl">
            <div class="banner__contents">
                <div class="banner__contents h-full flex flex-col mt-[64px] md:mt-[70px] lg:mt-[78px] 3xl:mt-[86px] gap-[18px] text-light-primary justify-center items-center slide-up">

                    <h1 class="banner__title text-center font-Playfair font-semibold text-[42px] md:text-[50px] lg:text-[54px] 3xl:text-[64px]">
                        The Integration: Where Expertise </br> Converges
                    </h1>

                    <p class="banner__subtitle text-center italic font-DMSans text-[16px] md:text-[18px] lg:text-[20px] 3xl:text-[26px] font-light">
                        Our mandate is to see the complete financial landscape, not just its parts.
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
    
    <section class="quote w-full bg-gold-accent py-20 sm:py-24 md:py-36">
        <div class="container mx-auto px-8 sm:px-12 md:px-16 max-w-6xl relative">

            <!-- Quote mark -->
            <span class="text-[#2b3f5c] text-opacity-75 font-Playfair font-bold text-6xl sm:text-7xl md:text-8xl mb-2 absolute -top-16">"</span>

            <!-- Quote text -->
            <p class="text-primary font-Playfair font-bold text-xl/6 sm:text-2xl/[35px] md:text-3xl/[50px] lg:text-4xl/[60px] text-center max-w-5xl mx-auto">
                Traditional advisory operates on transactional scarcity; we operate on strategic abundance. The greatest risk to high net worth is the blind spot created by siloed advice. Our philosophy is the antidote.
            </p>

        </div>
    </section>

    <section id="expertise-pillars" class="expertise-pillars bg-[#eef0f4] py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-6xl">

            <!-- Section Title -->
            <h2 class="text-primary font-Playfair font-bold text-3xl sm:text-4xl md:text-5xl text-center mb-12 md:mb-16 blockappear">
                Expertise Pillars: Integrated by Design
            </h2>

            <!-- Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 md:gap-4 lg:gap-6">

                <!-- Card 1: Accounting -->
                <div class="bg-white flex flex-col p-8 border-t-2 border-gold-accent hover:scale-[1.02] transition-transform duration-200 slide-up-delay">
                    <!-- Icon -->
                    <div class="w-14 h-14 rounded-full bg-[#1e3050] flex items-center justify-center mb-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/stack.png" alt="stack-icon" class="w-7">
                    </div>

                    <h3 class="text-primary font-Playfair font-bold text-2xl sm:text-3xl mb-2">
                        Accounting
                    </h3>

                    <p class="text-gold-accent font-semibold text-md sm:text-lg mb-4"
                        style="font-family: 'Source Serif 4', serif;">
                        Mastering Financial Mechanics
                    </p>

                    <p class="text-[#4a5568] font-DMSans text-md sm:text-lg leading-relaxed">
                        Deep understanding of tax structures, cash flow optimization, and business efficiency is not an end in itself—it's intelligence that directly informs legal entity structuring and property acquisition strategies. When we understand the numbers, we know exactly how to position assets for maximum protection and growth.
                    </p>

                </div>

                <!-- Card 2: Legal Frameworks -->
                <div class="bg-white flex flex-col p-8 border-t-2 border-gold-accent hover:scale-[1.02] transition-transform duration-200 slide-up-delay">

                    <!-- Icon -->
                    <div class="w-14 h-14 rounded-full bg-[#1e3050] flex items-center justify-center mb-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/shield.png" alt="stack-icon" class="w-8">
                    </div>

                    <h3 class="text-primary font-Playfair font-bold text-2xl sm:text-3xl mb-2">
                        Legal<br class="hidden sm:block md:hidden lg:block">Frameworks
                    </h3>

                    <p class="text-gold-accent font-semibold text-md sm:text-lg mb-4"
                        style="font-family: 'Source Serif 4', serif;">
                        Navigating Risk &amp; Protecting Assets
                    </p>

                    <p class="text-[#4a5568] font-DMSans text-md sm:text-lg leading-relaxed">
                        Knowing the legal triggers—caveats, disputes, liability structures, regulatory compliance—allows us to anticipate threats before they materialize. This legal intelligence directly impacts financial viability and asset valuation, ensuring that wealth is protected at the structural level, not just the transactional level.
                    </p>

                </div>

                <!-- Card 3: Property Development -->
                <div class="bg-white flex flex-col p-8 border-t-2 border-gold-accent hover:scale-[1.02] transition-transform duration-200 slide-up-delay">

                    <!-- Icon -->
                    <div class="w-14 h-14 rounded-full bg-[#1e3050] flex items-center justify-center mb-6">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/real-estate-icon.png" alt="stack-icon" class="w-6">
                    </div>

                    <h3 class="text-[#2b3f5c] font-Playfair font-bold text-2xl sm:text-3xl mb-2">
                        Property<br class="hidden sm:block md:hidden lg:block">Development
                    </h3>

                    <p class="text-gold-accent font-semibold text-md sm:text-lg mb-4"
                        style="font-family: 'Source Serif 4', serif;">
                        Capitalizing on Real Assets
                    </p>

                    <p class="text-[#4a5568] font-DMSans text-md sm:text-lg leading-relaxed">
                        Deep market knowledge and development expertise transform property from a passive holding into an active wealth creation vehicle. Understanding development cycles, market positioning, and value drivers allows us to optimize financial structures and leverage real assets for exponential growth, not merely liability management.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="client-relationship bg-white py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl">

            <!-- Section Title -->
            <h2 class="font-Playfair text-primary font-bold text-3xl sm:text-4xl md:text-5xl text-center leading-tight mb-14 md:mb-20 blockappear">
                The Client Relationship: Built on Trust,<br class="hidden sm:block"> Designed for Growth
            </h2>

            <!-- Items -->
            <div class="flex flex-col gap-10 md:gap-14">
                <!-- Trust First -->
                <div>
                    <h3 class="font-Playfair italic text-gold-accent font-semibold text-lg sm:text-xl mb-4 blockappear">
                        Trust First
                    </h3>

                    <p class="font-DMSans text-[#4a5568] text-sm sm:text-base leading-relaxed blockappear">
                        The relationship we build with clients extends beyond transactional advisory. Many clients grant us full financial authority, not because we demand it, but because the quality of integrated strategy earns it. This level of trust is the foundation upon which exponential wealth is built. Without trust, there is no integration. Without integration, there is no leverage.
                    </p>
                </div>

                <!-- Value Creation Over Fee Generation -->
                <div>
                    <h3 class="font-Playfair italic text-gold-accent font-semibold text-lg sm:text-xl mb-4 blockappear">
                        Value Creation Over Fee Generation
                    </h3>
                    
                    <p class="font-DMSans text-[#4a5568] text-sm sm:text-base leading-relaxed blockappear">
                        Our focus is long-term, exponential wealth creation, not short-term revenue extraction. We are compensated for outcomes, not hours. This alignment ensures that every strategic decision is made with the client's long-term interest as the primary variable. If a strategy doesn't create compounding value, we don't recommend it.
                    </p>
                </div>

                <!-- Vetting as Responsibility -->
                <div>
                    <h3 class="font-Playfair italic text-gold-accent font-semibold text-lg sm:text-xl mb-4 blockappear">
                        Vetting as Responsibility
                    </h3>
                    
                    <p class="font-DMSans text-[#4a5568] text-sm sm:text-base leading-relaxed blockappear">
                        We do not accept every engagement. Client vetting is not a barrier—it is a responsibility. We must ensure that the client has the aptitude, resources, and commitment necessary for the strategies we deploy. Success requires partnership. We vet to protect both parties and to uphold the standard of excellence that defines this practice.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="attention bg-primary py-12 md:py-14">
        <div class="container mx-auto px-4 sm:px-6 max-w-6xl">
            <div class="attention__contents">
                <p class="font-DMSans text-center text-white text-opacity-75 text-sm sm:text-base md:text-lg leading-relaxed max-w-4xl mx-auto">
                    Harminder Wealth Strategist operates on a vetted-client basis. All engagements are confidential and subject to mutual 
                    agreement. This website does not constitute financial advice.
                </p>
            </div>
        </div>
    </section>
    
    <?php get_footer(); ?>
    <!-- <div class="footer" id="footer"></div>

    <script src="assets/js/main.js"></script>
</body>
</html> -->