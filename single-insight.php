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
    
    <?php while (have_posts()) : the_post();
        $category  = get_field('category');
        $icon_type = get_field('icon_type');
        $date      = get_the_date('F j, Y');
    ?>

    <section class="insight_banner bg-white py-10 md:py-14">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl">
            <div class="insight_banner_contents flex flex-col slide-up">

                <!-- Back link -->
                <a href="<?php echo home_url('/insights'); ?>"
                    class="inline-flex items-center font-DMSans text-[#4a5568] text-sm sm:text-base hover:text-gold-accent transition-colors duration-200 mb-6">
                    ← Back to Insights
                </a>

                <!-- Gold badge -->
                <div class="inline-block bg-gold-accent px-4 py-2 mb-10 mr-auto">
                    <span class="text-primary font-DMSans uppercase tracking-widest text-xs font-semibold">
                        <?php echo esc_html($category); ?>
                    </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-[#0d1b2e] font-Playfair font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-tight mb-16 md:mb-24">
                    <?php the_title(); ?>
                </h1>

                <!-- Divider -->
                <hr class="border-[#e5e7eb] my-6" />

                <!-- Date -->
                <p class="text-[#374151] font-DMSans text-sm sm:text-base md:text-lg">
                    Published: <?php echo $date; ?>
                </p>

                <!-- Divider -->
                <hr class="border-[#e5e7eb] mt-6" />

            </div>
        </div>
    </section>

    <section class="insight_content bg-white py-10 md:py-14">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl">
            <div class="font-DMSans text-[#374151] leading-relaxed text-sm sm:text-base wp-content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <section class="services_banner bg-[#F4F4F4] py-10 md:py-14">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl">
            <div class="flex flex-col lg:flex-row items-center gap-6">

                <!-- Avatar -->
                <div class="flex-shrink-0 size-28 lg:size-42 rounded-full bg-[#0d1b2e] flex items-center justify-center my-auto mx-auto slide-up">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/harminder-circle-icon.png" alt="Harminder">
                </div>

                <!-- Info -->
                <div class="flex flex-col gap-1">
                    <h4 class="text-[#0d1b2e] font-bold font-Playfair text-lg mx-auto lg:mx-0 blockappear">
                        Harminder
                    </h4>
                    <p class="text-[#c9a84c] text-sm font-Playfair font-semibold mb-2 mx-auto lg:mx-0 blockappear">
                        Wealth Strategist
                    </p>
                    <p class="text-[#4a5568] font-DMSans text-center leading-[24px] lg:text-left blockappear">
                        Harminder specializes in integrated wealth strategy at the intersection of
                        accounting, legal frameworks, and property development. With decades of
                        experience navigating complex financial landscapes, he provides high-net-worth
                        individuals with the strategic architecture needed for exponential wealth creation
                        and protection.
                    </p>
                </div>

            </div>
        </div>
    </section>
    
    <!-- <section class="insight_banner bg-white py-10 md:py-14">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl"> -->

    <section class="bg-[#0d1b2e] py-20 md:py-28">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl flex flex-col items-center gap-10 slide-up">

            <div class="px-8 sm:px-14 py-10 text-center">
                <h2 class="text-white font-bold text-3xl sm:text-4xl md:text-5xl leading-tight"
                    style="font-family: 'Playfair Display', serif;">
                    Your Complex Challenge Requires a Strategist, Not an Accountant.
                </h2>
            </div>

            <p class="text-white/60 font-DMSans text-sm sm:text-base md:text-lg leading-relaxed text-center max-w-2xl">
                If your financial situation involves multiple moving pieces—business, property, legal structures, tax optimization—you need someone who sees the full picture.
            </p>

            <a href="<?php echo home_url('/contact-us'); ?>"
                class="mt-2 px-12 sm:px-16 py-4 sm:py-5 text-primary uppercase tracking-widest text-[12px] md:text-[17px] font-semibold bg-gold-accent hover:bg-[#a7884c] transition-colors duration-300">
                Apply for Strategy Vetting
            </a>

        </div>
    </section>

    <?php endwhile; ?>
    
<?php get_footer(); ?>