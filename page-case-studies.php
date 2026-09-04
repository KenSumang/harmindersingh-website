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

    <!-- <div class="header__banner w-full h-screen min-h-[800px] bg-[url(/assets/images/banner-background.png)] bg-cover bg-center"> -->
    <div class="header__banner w-full h-screen min-h-[800px] bg-cover bg-center"
        style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/banner-background.png');">
        <div class="container max-w-full h-full">
            <div class="header__banner__wrapper flex flex-col w-full h-full">
                
                <?php get_header(); ?>

                <div class="banner__contents flex flex-col items-center m-auto gap-[18px] max-w-[330px] md:max-w-full text-light-primary slide-up">

                    <h1 class="banner__title text-center font-Playfair font-semibold text-[32px] sm:text-[42px] md:text-[50px] lg:text-[54px] 3xl:text-[64px]">
                        Integrated Solutions.<br>Documented Outcomes.
                    </h1>

                    <p class="banner__subtitle text-center font-DMSans text-[16px] max-w-[280px] md:max-w-[480px] lg:max-w-[680px] xl:max-w-[1200px] md:text-[18px] lg:text-[20px] 3xl:text-[26px] font-light mb-10">
                        Explore how our holistic, 'Connect The Dots' approach delivers exponential value where siloed expertise falls short.
                    </p>

                    <p class="banner__subtitle text-center font-DMSans text-[16px] max-w-[300px] md:max-w-[500px] lg:max-w-[750px] xl:max-w-[1000px] md:text-[18px] lg:text-[20px] 3xl:text-[26px] text-[#8CA2C0] font-light">
                        These are real-world examples of complex financial challenges met with bespoke, integrated strategies. 
                        Each case demonstrates the power of combining Accounting, Law, and Property expertise into a unified solution.
                    </p>
                    
                </div>
            </div>
        </div>
    </div>

    <section class="case-studies bg-[#eef0f4] py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">

            <!-- Cards Grid -->
            <div id="case-studies-grid" class="grid grid-cols-1 md:grid-cols-2 gap-x-10 gap-y-16 max-w-[350px] md:max-w-full mx-auto">
            </div>

            <!-- Pagination -->
            <div id="case-studies-pagination" class="flex flex-col items-center gap-6 mt-10">
            </div>

        </div>
    </section>

    <?php get_footer(); ?>