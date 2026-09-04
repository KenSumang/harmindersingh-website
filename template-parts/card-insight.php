<?php
    $post_category = get_field('category');
    $icon_type     = get_field('icon_type');
    $date          = get_the_date('F j, Y');
    $title         = get_the_title();
    $excerpt       = get_the_excerpt();
    $link          = get_permalink();

    $icons = [
        'shield'   => '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        'layers'   => '<path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/>',
        'house'    => '<path d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>',
        'document' => '<path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M9 13h6m-6 4h6"/>',
        'dollar'   => '<line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/>',
        'clock'    => '<circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/>',
    ];

    $svg_path = $icons[$icon_type] ?? $icons['shield'];
?>

<div class="bg-white flex flex-col border border-[#e5e7eb] relative hover:scale-[1.02] transition-transform duration-200 blockappear">

    <div class="absolute top-4 right-4 bg-gold-accent px-3 py-1">
        <span class="text-white text-xs font-semibold uppercase tracking-widest"
                style="font-family: 'Source Serif 4', serif; letter-spacing: 0.15em;">
            <?php echo esc_html($post_category); ?>
        </span>
    </div>

    <div class="bg-primary flex items-center justify-center py-10">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
            stroke="#c5a059" stroke-width="1.5" stroke-linecap="round"
            stroke-linejoin="round" width="48" height="48">
            <?php echo $svg_path; ?>
        </svg>
    </div>

    <div class="flex flex-col flex-1 p-6 blockappear">  

        <p class="text-[#9ca3af] text-xs mb-3"
            style="font-family: 'Source Serif 4', serif;">
            <?php echo $date; ?>
        </p>

        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-lg leading-snug mb-3">
            <?php echo esc_html($title); ?>
        </h3>

        <p class="text-[#4a5568] text-sm leading-relaxed flex-1"
            style="font-family: 'Source Serif 4', serif;">
            <?php echo esc_html($excerpt); ?>
        </p>

        <a href="<?php echo esc_url($link); ?>"
            class="mt-6 text-[#0d1b2e] text-sm font-semibold hover:text-gold-accent transition-colors duration-200 w-fit"
            style="font-family: 'Source Serif 4', serif;">
            Read Analysis →
        </a>

    </div>
</div>