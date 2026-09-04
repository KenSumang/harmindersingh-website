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
        $icon         = get_field('icon');
        $result_badge = get_field('result_badge');

        $icons = [
            'bolt'   => '<path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>',
            'grid'   => '<rect x="3" y="3" width="7" height="7"/><rect x="14" y="3" width="7" height="7"/><rect x="3" y="14" width="7" height="7"/><rect x="14" y="14" width="7" height="7"/>',
            'house'  => '<path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>',
            'clock'  => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
            'shield' => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
            'dollar' => '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>',
        ];

        $svg_path = $icons[$icon] ?? $icons['bolt'];
    ?>

    <section class="case_study_banner bg-white py-10 md:py-14">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl">
            <div class="case_study_banner_contents flex flex-col">

                <!-- Back link -->
                <a href="<?php echo home_url('/case-studies'); ?>"
                    class="inline-flex items-center font-DMSans text-[#4a5568] text-sm sm:text-base hover:text-gold-accent transition-colors duration-200 mb-6">
                    ← Back to Case Studies
                </a>

                <h2 class="text-gold-accent font-DMSans tracking-widest text-[18px] font-semibold">Case Study</h2>

                <!-- Main Title -->
                <h1 class="text-[#0d1b2e] font-Playfair font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-tight mb-4 md:mb-6">
                    <?php the_title(); ?>
                </h1>

                <!-- Subtitle / Excerpt -->
                <p class="text-[#374151] font-DMSans text-sm sm:text-base md:text-lg">
                    <?php echo esc_html($result_badge); ?>
                </p>

            </div>
        </div>
    </section>

    <section class="case_study_content bg-white py-16 md:py-20">
        <div class="container mx-auto px-6 sm:px-10 max-w-4xl">
            <div class="font-DMSans text-[#374151] leading-relaxed text-sm sm:text-base wp-content">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <section class="bg-[#0d1b2e] py-20 md:py-28">
        <div class="container mx-auto px-6 sm:px-10 max-w-4xl flex flex-col items-center gap-10">

            <div class="px-8 sm:px-14 py-10 text-center blockappear">
                <h2 class="text-white font-bold text-3xl sm:text-4xl md:text-5xl leading-tight"
                    style="font-family: 'Playfair Display', serif;">
                    Your Complex Challenge Requires a Strategist, Not an Accountant.
                </h2>
            </div>

            <p class="text-white/60 font-DMSans text-sm sm:text-base md:text-lg leading-relaxed text-center max-w-2xl blockappear">
                If your financial situation involves multiple moving pieces—business, property, legal structures, tax optimization—you need someone who sees the full picture.
            </p>

            <a href="<?php echo home_url('/contact-us'); ?>"
                class="mt-2 px-12 sm:px-16 py-4 sm:py-5 text-primary uppercase tracking-widest text-[12px] md:text-[17px] font-semibold bg-gold-accent hover:bg-[#a7884c] transition-colors duration-300 blockappear">
                Apply for Strategy Vetting
            </a>

        </div>
    </section>

    <?php endwhile; ?>
    
<?php get_footer(); ?>