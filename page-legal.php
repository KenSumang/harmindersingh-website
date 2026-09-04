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
                        Legal Services
                    </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-[#0d1b2e] font-Playfair font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-tight mb-16 md:mb-24">
                    Quill Legal
                </h1>

                <!-- Divider -->
                <hr class="border-[#e5e7eb] my-6" />

                <!-- Subtitle -->
                <p class="text-[#374151] font-DMSans text-sm sm:text-base md:text-lg">
                    Sydney's Leading Criminal Defence Lawyer
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
                You will always feel supported with Quill Legal by your side.
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-16 max-w-[350px] md:max-w-full mx-auto">

                <!-- Card 1: Free Initial Consultation -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">

                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[36px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/free-initial-consultation.png" alt="Financial Services Icon">
                        </div>
                    </div>

                    <div class="flex flex-col flex-1 p-6 sm:p-8">

                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-6 group-hover:text-gold-accent transition duration-200">
                            Free Initial Consultation
                        </h3>

                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1 pb-3">
                            We offer a free, no obligation consultation because we understand that your situation is urgent.
                        </p>

                        <!-- <div class="mt-6 text-right">
                            <a href="#" class="text-[#0d1b2e] text-sm font-semibold hover:text-gold-accent transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;">
                            Explore →
                            </a>
                        </div> -->

                    </div>

                </div>

                <!-- Card 2: Flexible Payment Options -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">

                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[42px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/flexible-payment-options.png" alt="Legal Services Icon">
                        </div>
                    </div>

                    <div class="flex flex-col flex-1 p-6 sm:p-8">

                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-6 group-hover:text-gold-accent transition duration-200">
                            Flexible Payment Options
                        </h3>

                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1 pb-3">
                            We are ready to provide a variety of payment options you can choose from.
                        </p>

                        <!-- <div class="mt-6 text-right">
                            <a href="#" class="text-[#0d1b2e] text-sm font-semibold hover:text-gold-accent transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;">
                            Explore →
                            </a>
                        </div> -->

                    </div>

                </div>

                <!-- Card 3: Operating 24/7 -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">

                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[42px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/operating-24-7.png" alt="Property Development Icon">
                        </div>
                    </div>

                    <div class="flex flex-col flex-1 p-6 sm:p-8">

                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-6 group-hover:text-gold-accent transition duration-200">
                            Operating 24/7
                        </h3>

                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1 pb-3">
                            We are always ready and available to take your call as we operate on a 24/7 basis.
                        </p>

                        <!-- <div class="mt-6 text-right">
                            <a href="#" class="text-[#0d1b2e] text-sm font-semibold hover:text-gold-accent transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;">
                            Explore →
                            </a>
                        </div> -->

                    </div>
                </div>

                <!-- Card 4: Result Driven -->
                <div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 md:min-w-[350px] slide-up-delay">

                    <!-- Dark header with icon -->
                    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
                        <div class="icon_frame w-[42px]">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/result-driven.png" alt="Real Estate Icon">
                        </div>
                    </div>

                    <!-- Content -->
                    <div class="flex flex-col flex-1 p-6 sm:p-8">

                        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-6 group-hover:text-gold-accent transition duration-200">
                            Result Driven
                        </h3>

                        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1 pb-3">
                            We are with you, and for you, every step of the way. We focus and fight for the best possible result.
                        </p>

                        <!-- <div class="mt-6 text-right">
                            <a href="#" class="text-[#0d1b2e] text-sm font-semibold hover:text-gold-accent transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif;">
                            Explore →
                            </a>
                        </div> -->

                    </div>

                </div>

            </div>
        </div>
    </section>

    <section class="hero-statement bg-[#0d1b2e] py-16 md:py-24">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl">

            <!-- Heading -->
            <h2 class="text-white font-Playfair font-bold text-3xl sm:text-4xl md:text-5xl leading-tight mb-10 md:mb-12 blockappear">
                Have you been accused of committing a crime?<br>
                Have you been charged with a criminal offence?
            </h2>

            <!-- Body paragraphs -->
            <div class="flex flex-col gap-6 max-w-4xl font-DMSans">

                <p class="text-white/70 text-sm sm:text-base leading-relaxed blockappear">
                    When your freedom is at stake, you need the best legal team to protect you. At Quill Legal, we pride ourselves on our approach to criminal law matters. We are reliable, accountable and totally transparent so you fully appreciate the seriousness of the charges you are facing. We believe that the smallest detail often win cases, so we will spend extra time up front to understand the intricacies of your particular circumstances.
                </p>

                <p class="text-white/70 text-sm sm:text-base leading-relaxed blockappear">
                    Here at Quill Legal, we will continue to defend you, and be there for you every step of the way.
                </p>

            </div>

        </div>
    </section>
    
    <section class="matters bg-white py-16 md:py-20 md:h-[900px]">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl">

            <!-- Section Title -->
            <h2 class="text-[#0d1b2e] font-Playfair font-bold text-3xl sm:text-4xl md:text-5xl text-center leading-tight mb-10 md:mb-14 blockappear">
                Quill Legal can assist you with a range of matters including:
            </h2>

            <!-- Category Tabs -->
            <div class="flex overflow-x-auto truncate gap-2 mb-10 md:mb-14 blockappear">

                <button class="category-tab px-4 py-2 text-xs sm:text-sm font-semibold uppercase border transition-colors duration-200 bg-gold-accent border-gold-accent hover:border-[#0d1b2e] text-white hover:bg-[#0d1b2e] hover:text-white"
                    data-category="criminal"
                    style="font-family: 'Source Serif 4', serif; letter-spacing: 0.12em;">
                    Criminal Law
                </button>

                <button class="category-tab px-4 py-2 text-xs sm:text-sm font-semibold uppercase border transition-colors duration-200 bg-transparent border-[#0d1b2e] text-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white"
                    data-category="historical"
                    style="font-family: 'Source Serif 4', serif; letter-spacing: 0.12em;">
                    Historical Abuse
                </button>

                <button class="category-tab px-4 py-2 text-xs sm:text-sm font-semibold uppercase border transition-colors duration-200 bg-transparent border-[#0d1b2e] text-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white"
                    data-category="traffic"
                    style="font-family: 'Source Serif 4', serif; letter-spacing: 0.12em;">
                    Traffic Law
                </button>

                <button class="category-tab px-4 py-2 text-xs sm:text-sm font-semibold uppercase border transition-colors duration-200 bg-transparent border-[#0d1b2e] text-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white"
                    data-category="family"
                    style="font-family: 'Source Serif 4', serif; letter-spacing: 0.12em;">
                    Family Law
                </button>

                <button class="category-tab px-4 py-2 text-xs sm:text-sm font-semibold uppercase border transition-colors duration-200 bg-transparent border-[#0d1b2e] text-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white"
                    data-category="commercial"
                    style="font-family: 'Source Serif 4', serif; letter-spacing: 0.12em;">
                    Commercial Law
                </button>

            </div>

            <!-- Two column layout -->
            <div class="flex flex-col md:flex-row items-stretch gap-0">

                <!-- Left: Numbered list -->
                <div class="w-full md:w-1/2 pr-0 md:pr-12 flex flex-col justify-start mb-10 md:mb-0 blockappear">
                    <ol id="matters-list" class="flex flex-col gap-3 mt-5"
                        style="font-family: 'Source Serif 4', serif;">
                    <!-- Populated by JS -->
                    </ol>
                </div>

                <!-- Right: Dark navy info card -->
                <div class="w-full md:w-1/2 bg-[#0d1b2e] px-8 sm:px-12 py-12 flex flex-col justify-between gap-10 slide-up">
                    <div>
                        <p id="matter-title"
                            class="text-gold-accent font-semibold text-xs uppercase tracking-widest mb-4 transition-opacity duration-200"
                            style="font-family: 'Source Serif 4', serif; letter-spacing: 0.15em;">
                        </p>

                        <p id="matter-description"
                            class="text-white/80 text-sm sm:text-base leading-relaxed transition-opacity duration-200"
                            style="font-family: 'Source Serif 4', serif;">
                        </p>

                        </div>
                        <div class="flex justify-end">

                        <a href=""
                            id="matter-link"
                            target="_blank"
                            class="bg-gold-accent hover:bg-[#b8962e] text-white text-xs sm:text-sm font-semibold uppercase tracking-widest px-6 py-3 transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif; letter-spacing: 0.15em;">
                            Learn More
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="how-it-works bg-[#eef0f4] py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">

            <!-- Section Title -->
            <h2 class="text-[#0d1b2e] font-Playfair font-bold text-3xl sm:text-4xl md:text-5xl text-center mb-12 md:mb-16 blockappear">
                Why Quill Legal &amp; How It Works
            </h2>

            <!-- Cards Grid -->
            <div class="flex flex-wrap justify-center xl:justify-between gap-5 w-full max-w-[350px] lg:max-w-full mx-auto">

                <!-- Card 1: Consultation -->
                <div class="bg-white flex flex-col p-7 sm:p-8 border-t-2 border-gold-accent w-[312px] hover:scale-[1.02] transition duration-200 slide-up-delay">
                    <!-- Icon -->
                    <div class="w-14 h-14 rounded-full bg-[#0d1b2e] flex items-center justify-center mb-6 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gold-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </div>

                    <!-- Title -->
                    <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-1">
                        Consultation
                    </h3>

                    <!-- Gold tag -->
                    <p class="text-gold-accent text-sm font-semibold mb-4"
                        style="font-family: 'Source Serif 4', serif;">
                        Free
                    </p>

                    <!-- Body -->
                    <p class="text-[#4a5568] font-DMSans text-base leading-relaxed">
                        The first step is to contact us via telephone or email. One of our staff members will then book you in for a consultation with our expert lawyers. You will then receive a confirmation email with the relevant details.
                    </p>

                </div>

                <!-- Card 2: Strategise -->
                <div class="bg-white flex flex-col p-7 sm:p-8 border-t-2 border-gold-accent w-[312px] hover:scale-[1.02] transition duration-200 slide-up-delay">

                    <!-- Icon -->
                    <div class="w-14 h-14 rounded-full bg-[#0d1b2e] flex items-center justify-center mb-6 flex-shrink-0">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gold-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.8"/>
                            <circle cx="12" cy="12" r="7" stroke="currentColor" stroke-width="1.8"/>
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.8"/>
                        </svg>
                    </div>

                    <!-- Title -->
                    <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-5">
                        Strategise
                    </h3>

                    <!-- Body -->
                    <p class="text-[#4a5568] font-DMSans text-base leading-relaxed">
                        The FREE consultation will allow you to sit with an experienced lawyer who will tailor their advice based on your current circumstances. We will then strategize the next steps and focus on the result.
                    </p>

                </div>

                <!-- Card 3: Take Action -->
                <div class="bg-white flex flex-col p-7 sm:p-8 border-t-2 border-gold-accent w-[312px] hover:scale-[1.02] transition duration-200 slide-up-delay">

                    <!-- Icon -->
                    <div class="w-14 h-14 rounded-full bg-[#0d1b2e] flex items-center justify-center mb-6 flex-shrink-0">

                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gold-accent" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 6l4 4L15 3m-4 18l-4-4 8-8"/>
                            <!-- Gavel icon -->
                        </svg>

                        <!-- Cleaner gavel -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gold-accent absolute" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="display:none;"></svg>
                    
                    </div>

                    <!-- Title -->
                    <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-5">
                        Take Action
                    </h3>

                    <!-- Body -->
                    <p class="text-[#4a5568] font-DMSans text-base leading-relaxed">
                        With our legal team by your side, you can be assured that your concerns will be transformed into confidence and favourable outcomes. We will be with you every step of the way.
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
                        About Quill Legal
                    </h2>

                </div>

                <!-- Body paragraphs -->
                <div class="flex flex-col gap-6 mb-14 md:mb-20">
                    <p class="text-white/80 text-sm sm:text-base leading-relaxed"
                        style="font-family: 'Source Serif 4', serif;">
                        At Quill Legal we innovate, educate, and plan to evoke excellence and confidence.
                        Our principal solicitor, Shams, and his team are focused on delivering an honest, first-class service.
                        With Quill legal by your side, you have lawyers who will passionately listen, advise and advocate your rights from start to finish.
                    </p>
                </div>

                <!-- CTA link -->
                <a href="https://quilllegal.com.au/legal-services/criminal-law/"
                    target="_blank"
                    class="group text-white/70 text-sm sm:text-base hover:text-gold-accent transition-colors duration-200"
                    style="font-family: 'Source Serif 4', serif;">
                    More on <span class="font-bold text-white group-hover:text-gold-accent transition-colors duration-200">Quill Legal</span> →
                </a>

            </div>

        </div>
    </section>

    <?php get_template_part('template-parts/contact'); ?>

    <?php get_footer(); ?>