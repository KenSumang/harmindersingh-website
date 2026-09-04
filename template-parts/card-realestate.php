<?php
$location      = get_field('location');
$external_link = get_field('external_link');
$title         = get_the_title();
$excerpt       = get_the_excerpt();
$thumbnail     = get_the_post_thumbnail_url(get_the_ID(), 'medium_large');
?>

<div class="bg-white flex flex-col border border-[#e5e7eb] hover:scale-[1.02] transition-transform duration-250 blockappear">

    <?php if ($thumbnail) : ?>
        <img src="<?php echo esc_url($thumbnail); ?>"
             alt="<?php echo esc_attr($title); ?>"
             class="w-full h-48 object-cover"/>
    <?php else : ?>
        <div class="w-full h-48 bg-[#eef0f4] flex items-center justify-center">
            <span class="text-[#9ca3af] text-sm"
                  style="font-family: 'Source Serif 4', serif;">
                No image
            </span>
        </div>
    <?php endif; ?>

    <div class="flex flex-col flex-1 p-6">

        <?php if ($location) : ?>
            <p class="text-[#6b7280] text-xs mb-1 blockappear"
               style="font-family: 'Source Serif 4', serif;">
                <?php echo esc_html($location); ?>
            </p>
        <?php endif; ?>

        <h3 class="text-[#0d1b2e] font-Playfair font-bold text-lg mb-3 blockappear">
            <?php echo esc_html($title); ?>
        </h3>

        <p class="text-[#4a5568] text-sm leading-relaxed flex-1 blockappear"
           style="font-family: 'Source Serif 4', serif;">
            <?php echo esc_html($excerpt); ?>
        </p>

        <a href="<?php echo esc_url($external_link ?: '#'); ?>"
           class="mt-6 text-[#0d1b2e] text-sm font-semibold hover:text-[#c9a84c] transition-colors duration-200"
           style="font-family: 'Source Serif 4', serif;"
           <?php echo $external_link ? 'target="_blank"' : ''; ?>>
            Explore →
        </a>

    </div>
</div>