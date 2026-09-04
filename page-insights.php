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
        <div class="container mx-auto px-4 sm:px-6 max-w-full">
            <div class="banner_contents">
                <div class="banner_contents h-full flex flex-col gap-[18px] text-light-primary justify-center items-center slide-up">

                    <h1 class="banner_title text-center font-Playfair font-semibold text-[42px] md:text-[50px] lg:text-[54px] 3xl:text-[64px]">
                        The Integrated View: Insights from the Wealth Strategist
                    </h1>

                    <p class="banner_subtitle text-center italic font-DMSans text-[16px] max-w-3xl md:text-[18px] lg:text-[20px] 3xl:text-[26px] font-light">
                        Analysis at the intersection of accounting, legal frameworks, and property development.
                    </p>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="category_filter_search bg-secondary-white py-12 md:py-14">
        <div class="container mx-auto px-4 sm:px-6 max-w-6xl">
            <div class="category_filter_search_contents flex flex-wrap gap-8 justify-between">

                <!-- Category Tabs -->
                <div class="flex overflow-x-auto gap-2" id="category-tabs">
                    <button data-category=""
                            class="insights-tab px-4 py-2 text-xs sm:text-sm font-semibold uppercase border transition-colors duration-200 bg-gold-accent border-gold-accent hover:border-[#0d1b2e] text-white hover:bg-[#0d1b2e] hover:text-white"
                            style="font-family: 'Source Serif 4', serif; letter-spacing: 0.15em;">
                        All Topics
                    </button>
                    <button data-category="Accounting"
                            class="insights-tab px-4 py-2 text-xs sm:text-sm font-semibold uppercase border transition-colors duration-200 bg-transparent border-[#0d1b2e] text-[#0d1b2e] hover:border-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white"
                            style="font-family: 'Source Serif 4', serif; letter-spacing: 0.15em;">
                        Accounting
                    </button>
                    <button data-category="Legal"
                            class="insights-tab px-4 py-2 text-xs sm:text-sm font-semibold uppercase border transition-colors duration-200 bg-transparent border-[#0d1b2e] text-[#0d1b2e] hover:border-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white"
                            style="font-family: 'Source Serif 4', serif; letter-spacing: 0.15em;">
                        Legal
                    </button>
                    <button data-category="Property Development"
                            class="insights-tab px-4 py-2 text-xs sm:text-sm font-semibold uppercase border transition-colors duration-200 bg-transparent border-[#0d1b2e] text-[#0d1b2e] hover:border-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white"
                            style="font-family: 'Source Serif 4', serif; letter-spacing: 0.15em;">
                        Property Development
                    </button>
                    <button data-category="Real Estate"
                            class="insights-tab px-4 py-2 text-xs sm:text-sm font-semibold uppercase border transition-colors duration-200 bg-transparent border-[#0d1b2e] text-[#0d1b2e] hover:border-[#0d1b2e] hover:bg-[#0d1b2e] hover:text-white"
                            style="font-family: 'Source Serif 4', serif; letter-spacing: 0.15em;">
                        Real Estate
                    </button>
                </div>

                <!-- Search Bar -->
                <div class="h-fit flex flex-wrap gap-2">
                    <input
                        type="text"
                        id="insights-search"
                        placeholder="Search insights..."
                        class="border border-[#d1d5db] px-4 py-2 text-sm text-[#374151] placeholder-[#9ca3af] focus:outline-none focus:border-[#c9a84c] transition-colors duration-200 w-[220px]"
                        style="font-family: 'Source Serif 4', serif;"/>
                    <button id="insights-search-btn"
                            class="bg-[#0d1b2e] hover:bg-gold-accent text-white text-xs font-semibold uppercase px-5 transition-colors duration-200"
                            style="font-family: 'Source Serif 4', serif; letter-spacing: 0.15em;">
                        Search
                    </button>
                </div>

            </div>
        </div>
    </section>

    <?php
        $featured = get_field('featured_insight');

        if ($featured) :
            $featured_id      = $featured->ID;
            $featured_title   = get_the_title($featured_id);
            $featured_excerpt = get_the_excerpt($featured_id);
            $featured_link    = get_permalink($featured_id);
            $featured_icon    = get_field('icon_type', $featured_id);

            $icons = [
                'shield'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
                'layers'   => '<path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>',
                'house'    => '<path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>',
                'document' => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M9 13h6m-6 4h6"/>',
                'dollar'   => '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>',
                'clock'    => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
            ];

            $svg_path = $icons[$featured_icon] ?? '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 3"/>';
        ?>

    <section class="featured bg-primary py-20 md:py-28">
        <div class="container mx-auto px-4 sm:px-6 max-w-6xl">
            <div class="featured__contents flex flex-wrap md:flex-nowrap gap-8 justify-between items-center slide-up">

                <!-- Icon -->
                <div class="featured_icon mx-auto p-8 size-fit border border-gold-accent border-3 bg-gold-accent/15 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                        stroke="#c5a059" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" width="80" height="80">
                        <?php echo $svg_path; ?>
                    </svg>
                </div>

                <!-- Description -->
                <div class="featured_description flex flex-col items-start gap-4 w-2xl">

                    <h3 class="text-gold-accent font-DMSans font-semibold uppercase text-lg">
                        Featured Analysis
                    </h3>

                    <div class="py-2 text-start">
                        <h2 class="text-white font-bold text-3xl sm:text-4xl md:text-5xl leading-tight"
                            style="font-family: 'Playfair Display', serif;">
                            <?php echo esc_html($featured_title); ?>
                        </h2>
                    </div>

                    <p class="text-white/60 font-DMSans text-sm sm:text-base md:text-lg leading-relaxed text-start max-w-2xl">
                        <?php echo esc_html($featured_excerpt); ?>
                    </p>

                    <a href="<?php echo esc_url($featured_link); ?>"
                    class="text-gold-accent font-DMSans font-semibold text-lg mb-3 hover:opacity-70 transition-opacity duration-200">
                        Read Full Analysis →
                    </a>

                </div>
            </div>
        </div>
    </section>

    <?php endif; ?>
    
    <section class="insights bg-white py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">

            <!-- Cards Grid -->
            <div id="insights-grid" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 mb-10 min-h-[400px]">
            </div>

            <!-- Pagination -->
            <div id="insights-pagination" class="flex flex-col items-center gap-6 mt-10">
            </div>

        </div>
    </section>

<?php get_footer(); ?>