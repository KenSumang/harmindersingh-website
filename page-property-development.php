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
                        Property Development Services
                    </span>
                </div>

                <!-- Main Title -->
                <h1 class="text-[#0d1b2e] font-Playfair font-bold text-4xl sm:text-5xl md:text-6xl lg:text-7xl leading-tight mb-16 md:mb-24">
                    BuildStead
                </h1>

                <!-- Divider -->
                <hr class="border-[#e5e7eb] my-6" />

                <!-- Subtitle -->
                <p class="text-[#374151] font-DMSans text-sm sm:text-base md:text-lg">
                    Your Partner in Property Development Excellence
                </p>

                <!-- Divider -->
                <hr class="border-[#e5e7eb] mt-6" />
            </div>
        </div>
    </section>
    
    <section class="services_banner bg-[#F4F4F4] py-10 md:py-14">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl">
            <div class="services_banner_contents flex flex-col">

                <!-- Section Title -->
                <h2 class="text-[#0d1b2e] font-Playfair font-bold text-3xl sm:text-4xl md:text-5xl mb-12 md:mb-16">
                    Welcome to BuildStead
                </h2>

                <p class="text-[#4a5568] font-DMSans font-light text-sm sm:text-base leading-relaxed">
                    We begin with a comprehensive consultation to understand your financial goals and challenges. This helps us tailor our services to meet your specific needs.
                </p>

            </div>
        </div>
    </section>
    
    <section class="proven-process bg-white py-16 md:py-20">
        <div class="container mx-auto px-6 sm:px-10 max-w-5xl">

            <!-- Section Title -->
            <h2 class="text-[#0d1b2e] font-Playfair font-bold text-3xl text-center sm:text-4xl md:text-5xl mb-12 md:mb-16 blockappear">
                Specialist Project Management in Property Development
            </h2>

            <!-- Steps -->
            <div class="flex flex-col gap-10 md:gap-12">

                <!-- Step 1 -->
                <div class="slide-up">
                    <h3 class="text-gold-accent font-Playfair font-bold text-lg sm:text-xl mb-4">
                        Project Management
                    </h3>

                    <p class="text-[#4a5568] text-sm sm:text-base leading-relaxed pl-4 border-l-0"
                        style="font-family: 'Source Serif 4', serif;">
                        Over 11 years experience in delivering residential and commercial real estate projects.
                    </p>
                </div>

                <!-- Step 2 -->
                <div class="slide-up">
                    <h3 class="text-gold-accent font-Playfair font-bold text-lg sm:text-xl mb-4">
                        Due Diligence & Feasibility
                    </h3>

                    <p class="text-[#4a5568] text-sm sm:text-base leading-relaxed pl-4 border-l-0"
                        style="font-family: 'Source Serif 4', serif;">
                        Site investigation and assessment of property development opportunities.
                    </p>
                </div>

                <!-- Step 3 -->
                <div class="slide-up">
                    <h3 class="text-gold-accent font-Playfair font-bold text-lg sm:text-xl mb-4">
                        Design & Development Approval
                    </h3>

                    <p class="text-[#4a5568] text-sm sm:text-base leading-relaxed pl-4"
                        style="font-family: 'Source Serif 4', serif;">
                        Partnering with leading design and engineering companies to optimise development approvals
                    </p>
                </div>

                <!-- Step 4 -->
                <div class="slide-up">
                    <h3 class="text-gold-accent font-Playfair font-bold text-lg sm:text-xl mb-4">
                        Value-Adding Insights
                    </h3>
                    
                    <p class="text-[#4a5568] text-sm sm:text-base leading-relaxed pl-4"
                        style="font-family: 'Source Serif 4', serif;">
                        Legal, tax, accounting and structuring expertise to unlock hidden value and deliver maximal returns on investment.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <section class="projects bg-[#eef0f4] py-16 md:py-20">
        <div class="container mx-auto px-4 sm:px-6 max-w-5xl">

            <!-- Section Title -->
            <h2 class="text-[#0d1b2e] font-Playfair font-bold text-3xl sm:text-4xl md:text-5xl text-center mb-12 md:mb-16 blockappear">
                Projects
            </h2>

            <!-- Cards Grid -->
            <div id="projects-grid" class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10 min-h-[400px]">
            </div>

            <!-- Pagination -->
            <div id="projects-pagination" class="flex flex-col items-center gap-6 mt-10">
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
                        About BuildStead
                    </h2>

                </div>

                <!-- Body paragraphs -->
                <div class="flex flex-col gap-6 mb-14 md:mb-20">
                    
                    <p class="text-white/80 text-sm sm:text-base leading-relaxed"
                        style="font-family: 'Source Serif 4', serif;">
                        BuildStead has successfully managed its client's property development projects for more than a decade. The company was established in 2012 with a focus on the economy and community of Sydney's North-West growth corridor. Over the past eleven years, the company has undertaken many projects in this area and earned a reputation for being trustworthy and reliable with a commitment to exceeding client's expectations.
                    </p>

                    <p class="text-white/80 text-sm sm:text-base leading-relaxed"
                        style="font-family: 'Source Serif 4', serif;">
                        The strength of the company is the depth and breadth of the team's knowledge and expertise combined with a shared passion for property development. The ability to think outside the box on every project to maximise returns is a key value driver for BuildStead. BuildStead undertakes projects in collaboration with a trusted and extensive network of experienced business partners.
                    </p>
                    
                </div>

                <!-- CTA link -->
                <a href="https://www.buildstead.com.au/"
                    target="_blank"
                    class="group text-white/70 text-sm sm:text-base hover:text-gold-accent transition-colors duration-200"
                    style="font-family: 'Source Serif 4', serif;">
                    More on <span class="font-bold text-white group-hover:text-gold-accent transition-colors duration-200">BuildStead</span> →
                </a>

            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/contact'); ?>

    <?php get_footer(); ?>