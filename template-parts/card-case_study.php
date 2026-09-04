<?php
    $icon         = get_field('icon');
    $result_badge = get_field('result_badge');
    $title        = get_the_title();
    $excerpt      = get_the_excerpt();
    $link         = get_permalink();

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

<div class="bg-white group flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 blockappear">

    <div class="bg-[#0d1b2e] flex items-center justify-center h-[106px]">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
             stroke="#c5a059" stroke-width="1.5" stroke-linecap="round"
             stroke-linejoin="round" width="42" height="42">
            <?php echo $svg_path; ?>
        </svg>
    </div>

    <div class="flex flex-col flex-1 p-6 sm:p-8 blockappear">

        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-xl sm:text-2xl mb-3 group-hover:text-gold-accent transition duration-250">
            <?php echo esc_html($title); ?>
        </h3>

        <p class="text-[#4a5568] font-DMSans text-sm sm:text-base leading-relaxed flex-1">
            <?php echo esc_html($excerpt); ?>
        </p>

        <div class="mt-6 text-right">
            <a href="<?php echo esc_url($link); ?>"
               class="text-[#0d1b2e] text-sm font-semibold hover:text-gold-accent transition-colors duration-200"
               style="font-family: 'Source Serif 4', serif;">
                Read Full Case →
            </a>
        </div>

    </div>
</div>