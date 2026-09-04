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
        <div class="container max-w-full h-full">
            <div class="header__banner__wrapper flex flex-col w-full h-full">

                <?php get_header(); ?>

                <div class="banner__contents flex flex-col items-center m-auto gap-[18px] max-w-[330px] md:max-w-full text-light-primary slide-up">

                    <h1 class="banner__title text-center font-Playfair font-semibold text-[32px] sm:text-[42px] md:text-[50px] lg:text-[54px] 3xl:text-[64px]">
                        When Siloed Experts Create Blind Spots,<br class="hidden md:block">We Connect The Dots.
                    </h1>

                    <p class="banner__subtitle text-center text-extra-light-primary font-DMSans text-[16px] md:text-[18px] lg:text-[20px] 3xl:text-[26px] font-light">
                        The Integrated Wealth Strategy and Advisory Service for Complex High-Net-Worth Challenges.
                    </p>

                    <a href="<?php echo home_url('/about#expertise-pillars'); ?>" class="">
                        <button class="banner__button w-[271px] h-[48px] bg-white/20 backdrop-blur-sm border border-light-primary mt-[12px] md:mt-[14px] lg:mt-[20px] hover:cursor-pointer
                            hover:bg-light-primary hover:text-white transition duration-400">
                            REVIEW OUR STRATEGY
                        </button>
                    </a>

                </div>
            </div>
        </div>
    </div>

    <section id="harminder" class="about__harminder py-12 md:py-16">
        <div class="container mx-auto px-4 sm:px-6 max-w-6xl">
            <div class="about__harminder__wrapper">
                <div class="about__harminder__contents flex flex-col md:flex-row justify-center items-center md:items-stretch gap-8 md:gap-12 lg:gap-24">

                    <!-- Banner Photo -->
                    <div class="flex-shrink-0 w-full max-w-sm mx-auto md:mx-0 md:w-[380px] lg:w-[480px]">
                        <img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/harminder.png"
                            alt="Harminder Singh"
                            class="w-full h-[500px] md:h-full object-cover object-top grayscale slide-up"
                            style="max-height: 709px;"
                        />
                    </div>

                    <!-- Description -->
                    <div class="harminder__description flex flex-col justify-center py-4 text-center font-Playfair text-light-primary md:text-left">

                        <h2 class="font-bold text-4xl sm:text-5xl lg:text-6xl leading-tight mb-6 md:mb-8 blockappear">
                            The Architect of<br>Your Wealth.
                        </h2>

                        <p class="text-base text-extra-light-primary font-DMSans sm:text-lg lg:text-lg leading-[32px] mb-10 md:mb-16 max-w-lg mx-auto md:mx-0 blockappear">
                            Harminder brings a rare combination of expertise across Accounting, Law, and Property - three
                            pillars that traditionally operate in isolation. With decades of experience navigating complex
                            financial landscapes, he understands that true wealth strategy requires integration, not
                            specialization. Where others see problems to manage, Harminder identifies opportunities to
                            leverage.
                        </p>

                        <h3 class="italic font-normal text-3xl sm:text-4xl lg:text-5xl blockappear">
                            Harminder
                        </h3>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <section class="comparison bg-[#eef0f4] py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-6xl">
            <div class="comparison__wrapper">
                <div class="comparison__contents flex flex-col">

                    <!-- Tagline -->
                    <h1 class="text-center font-Playfair text-[#2b3f5c] text-3xl sm:text-4xl lg:text-5xl mb-12 md:mb-16 blockappear">
                        Silos create gaps. We create leverage.
                    </h1>

                    <!-- Two Columns -->
                    <div class="comparison flex flex-col md:flex-row items-start justify-between gap-12 md:gap-8">

                        <!-- The Old Way -->
                        <div class="old-way w-full md:w-1/2 flex flex-col justify-center items-center">
                            <h2 class="text-[#2b3f5c] font-Playfair font-bold text-3xl sm:text-4xl mb-10 md:mb-14 text-center md:text-left blockappear">
                                The Old Way
                            </h2>

                            <!-- Three separate circles -->
                            <div class="flex flex-row items-center justify-center font-Playfair gap-4 sm:gap-6 flex-wrap md:mt-18 blockappear">

                                <div class="flex items-center justify-center rounded-full bg-[#d4d4d4] text-[#2b3f5c] font-semibold text-sm sm:text-base text-center leading-tight slide-up-delay"
                                    style="width: 120px; height: 120px; min-width: 120px;">
                                    Accountant
                                </div>

                                <div class="flex items-center justify-center rounded-full bg-[#d4d4d4] text-[#2b3f5c] font-semibold text-sm sm:text-base text-center leading-tight slide-up-delay"
                                    style="width: 120px; height: 120px; min-width: 120px;">
                                    Lawyer
                                </div>

                                <div class="flex items-center justify-center rounded-full bg-[#d4d4d4] text-[#2b3f5c] font-semibold text-sm sm:text-base text-center leading-tight slide-up-delay px-2"
                                    style="width: 120px; height: 120px; min-width: 120px;">
                                    Property<br>Agent
                                </div>

                            </div>
                        </div>

                        <!-- The Harminder Way -->
                        <div class="harminder-way w-full md:w-1/2 flex flex-col justify-center items-center">
                            <h2 class="text-[#2b3f5c] font-Playfair font-bold text-3xl sm:text-4xl mb-10 md:mb-14 text-center md:text-left blockappear">
                                The Harminder Way
                            </h2>

                            <!-- Venn Diagram -->
                            <div class="relative flex items-center justify-center blockappear"
                                style="width: 280px; height: 280px;">
                                
                                <!-- Top circle -->
                                <div class="absolute rounded-full border-gold-accent border-3 animate-pulse"
                                    style="width: 145px; height: 145px;
                                            background: rgba(190, 160, 100, 0.45);
                                            top: 10px; left: 50%; transform: translateX(-50%);"></div>

                                <!-- Bottom-left circle -->
                                <div class="absolute rounded-full border-gold-accent border-3 animate-pulse"
                                    style="width: 145px; height: 145px;
                                            background: rgba(190, 160, 100, 0.45);
                                            bottom: 30px; left: 10px;"></div>

                                <!-- Bottom-right circle -->
                                <div class="absolute rounded-full border-gold-accent border-3 animate-pulse"
                                    style="width: 145px; height: 145px;
                                            background: rgba(190, 160, 100, 0.45);
                                            bottom: 30px; right: 10px;"></div>

                                <!-- Center label -->
                                <div class="absolute flex items-center justify-center rounded-full z-10 text-center bg-gold-accent slide-up"
                                    style="width: 120px; height: 120px;
                                            top: 50%; left: 50%; transform: translate(-50%, -50%);">

                                    <span class="text-[#2b1f0a] font-bold text-sm font-Playfair leading-tight px-2">
                                        Integrated<br>Strategy
                                    </span>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
        $featured_case = get_field('featured_case_study');

        if ($featured_case) :
            $case_id      = $featured_case->ID;
            $case_title   = get_the_title($case_id);
            $case_excerpt = get_the_excerpt($case_id);
            $case_content = get_the_content(null, false, $case_id);
            $case_result  = get_field('result_badge',$case_id);
            $case_link    = get_permalink($case_id);
        ?>


    <section class="case-study bg-[#0d1b2e] py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-4xl">

            <!-- Card with gold border -->
            <div class="border border-gold-accent p-8 sm:p-10 md:p-14">

                <!-- Label -->
                <p class="text-gold-accent uppercase tracking-widest text-xs sm:text-sm font-semibold mb-4"
                    style="font-family: 'Source Serif 4', serif; letter-spacing: 0.15em;">
                    Case Study: <?php echo esc_html($case_title); ?>
                </p>

                <!-- Main Title -->
                <h1 class="text-white font-Playfair font-bold text-3xl sm:text-4xl lg:text-5xl leading-tight mb-10 md:mb-14">
                    <?php echo esc_html($case_result); ?>
                </h1>

                <!-- Content Preview -->
                <div class="text-[#c8cdd6] text-sm sm:text-base leading-relaxed mb-10 md:mb-14 wp-content-dark"
                     style="font-family: 'Source Serif 4', serif;">
                    <?php echo wp_kses_post(apply_filters('the_content', $case_content)); ?>
                </div>

                <!-- Gold left-border divider -->
                <div class="border-l-2 border-gold-accent h-16 ml-1 mb-10"></div>

                <!-- CTA Link -->
                <a href="<?php echo esc_url($case_link); ?>"
                   class="text-white underline decoration-1 underline-offset-2 text-sm sm:text-base hover:text-gold-accent transition-colors duration-200">
                    Read the full analysis →
                </a>
                
            </div>
        </div>
    </section>
    
    <?php endif; ?>

    <section class="cta w-full bg-[#1e3050] py-24 sm:py-32 md:py-40">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">
            <div class="cta__wrapper w-full">
                <div class="cta__contents flex flex-col items-center gap-8 sm:gap-10">

                    <!-- Heading -->
                    <h1 class="text-white font-Playfair font-semibold text-3xl sm:text-4xl md:text-5xl text-center leading-tight max-w-4xl blockappear">
                        We partner with clients who have the aptitude for exponential growth.
                    </h1>

                    <!-- CTA Button -->
                    <a href="<?php echo home_url('/contact-us'); ?>"
                        class="mt-2 px-12 sm:px-16 py-4 sm:py-5 border border-2 border-white text-white tracking-widest text-[12px] md:text-[17px]
                        font-semibold hover:bg-white hover:text-[#1e3050] transition-colors duration-300 blockappear">
                        APPLY FOR A CONSULTATION
                    </a>

                    <!-- Subtext -->
                    <p class="text-white/50 text-sm sm:text-base text-center mt-2 blockappear">
                        Strictly Confidential. By Application Only.
                    </p>

                </div>
            </div>
        </div>
    </section>

<?php get_footer(); ?>