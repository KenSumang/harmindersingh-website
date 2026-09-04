<?php

function harminder_enqueue_assets() {
    wp_enqueue_style(
        'harminder-fonts',
        'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,400&family=DM+Sans:wght@300;400;500;600&family=Lato:wght@300;400;700&family=Source+Serif+4:wght@400;600&display=swap',
        [],
        null
    );

    wp_enqueue_style(
        'harminder-style',
        get_template_directory_uri() . '/assets/css/output.css',
        ['harminder-fonts'],
        filemtime(get_template_directory() . '/assets/css/output.css')
    );

    wp_enqueue_script(
        'harminder-script',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true
    );
}
add_action('wp_enqueue_scripts', 'harminder_enqueue_assets');

// Remove default WordPress block styles
add_action('wp_enqueue_scripts', function() {
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
    wp_dequeue_style('global-styles');
}, 100);


// Register Case Study Custom Post Type
function harminder_register_case_study_post_type() {
    register_post_type('case_study', [
        'labels' => [
            'name'          => 'Case Studies',
            'singular_name' => 'Case Study',
            'add_new_item'  => 'Add New Case Study',
            'edit_item'     => 'Edit Case Study',
        ],
        'public'        => true,
        'has_archive'   => true,
        'show_in_rest'  => true,
        'supports'      => ['title', 'editor', 'excerpt', 'thumbnail'],
        'menu_icon'     => 'dashicons-portfolio',
        'rewrite'       => ['slug' => 'case-study'],
    ]);
}
add_action('init', 'harminder_register_case_study_post_type');


// Register Insights Custom Post Type
function harminder_register_post_types() {
    register_post_type('insight', [
        'labels' => [
            'name'          => 'Insights',
            'singular_name' => 'Insight',
            'add_new_item'  => 'Add New Insight',
            'edit_item'     => 'Edit Insight',
        ],
        'public'        => true,
        'has_archive'   => true,
        'show_in_rest'  => true,
        'supports'      => ['title', 'editor', 'excerpt', 'thumbnail'],
        'menu_icon'     => 'dashicons-lightbulb',
        'rewrite'       => ['slug' => 'insight'],
    ]);
}
add_action('init', 'harminder_register_post_types');


// Register Property Development Project Custom Post Type
function harminder_register_property_dev_project_post_type() {
    register_post_type('property_dev_project', [
        'labels' => [
            'name'          => 'Property Development',
            'singular_name' => 'Property Development',
            'add_new_item'  => 'Add New Project',
            'edit_item'     => 'Edit Project',
        ],
        'public'        => true,
        'has_archive'   => false,
        'show_in_rest'  => true,
        'supports'      => ['title', 'excerpt', 'thumbnail'],
        'menu_icon'     => 'dashicons-building',
        'rewrite'       => ['slug' => 'pd-project'],
    ]);
}
add_action('init', 'harminder_register_property_dev_project_post_type');


// Register Real Estate Project Post Type
function harminder_register_realestate_project_post_type() {
    register_post_type('realestate', [
        'labels' => [
            'name'          => 'Real Estate',
            'singular_name' => 'Real Estate',
            'add_new_item'  => 'Add New Real Estate',
            'edit_item'       => 'Edit Real Estate',
        ],
        'public'        => true,
        'has_archive'   => false,
        'show_in_rest'  => true,
        'supports'      => ['title', 'excerpt', 'thumbnail'],
        'menu_icon'     => 'dashicons-admin-home',
        'rewrite'       => ['slug' => 'realestate'],
    ]);
}
add_action('init', 'harminder_register_realestate_project_post_type');


function harminder_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('wp-block-styles');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/output.css');
}
add_action('after_setup_theme', 'harminder_setup');


function harminder_filter_realestate() {
    check_ajax_referer('harminder_posts_nonce', 'nonce');

    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

    $query = new WP_Query([
        'post_type'      => 'realestate',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'paged'          => $paged,
    ]);

    $total_pages = $query->max_num_pages;

    ob_start();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            get_template_part('template-parts/card', 'realestate');
        endwhile;
        wp_reset_postdata();
    else : ?>
        <div class="col-span-3 py-20 text-center">
            <p class="text-[#4a5568] text-base"
               style="font-family: 'Source Serif 4', serif;">
                No properties found.
            </p>
        </div>
    <?php endif;

    $html = ob_get_clean();

    wp_send_json_success([
        'cards'       => $html,
        'total_pages' => $total_pages,
        'paged'       => $paged,
    ]);
}
add_action('wp_ajax_filter_realestate',        'harminder_filter_realestate');
add_action('wp_ajax_nopriv_filter_realestate', 'harminder_filter_realestate');


function harminder_filter_projects() {
    check_ajax_referer('harminder_posts_nonce', 'nonce');

    $paged = isset($_POST['paged']) ? intval($_POST['paged']) : 1;

    $query = new WP_Query([
        'post_type'      => 'property_dev_project',
        'posts_per_page' => 3,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'paged'          => $paged,
    ]);

    $total_pages = $query->max_num_pages;

    ob_start();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            get_template_part('template-parts/card', 'property-dev-project');
        endwhile;
        wp_reset_postdata();
    else : ?>
        <div class="col-span-3 py-20 text-center">
            <p class="text-[#4a5568] text-base" style="font-family: 'Source Serif 4', serif;">
                No projects found.
            </p>
        </div>
    <?php endif;

    $html = ob_get_clean();

    wp_send_json_success([
        'cards'       => $html,
        'total_pages' => $total_pages,
        'paged'       => $paged,
    ]);
}

add_action('wp_ajax_filter_projects',        'harminder_filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'harminder_filter_projects');


function harminder_filter_posts() {
    check_ajax_referer('harminder_posts_nonce', 'nonce');

    $post_type = isset($_POST['post_type']) ? sanitize_text_field($_POST['post_type']) : 'insight';
    $category  = isset($_POST['category'])  ? sanitize_text_field($_POST['category'])  : '';
    $search    = isset($_POST['search'])    ? sanitize_text_field($_POST['search'])    : '';
    $paged     = isset($_POST['paged'])     ? intval($_POST['paged'])                  : 1;

    $meta_query = [];
    if (!empty($category)) {
        $meta_query[] = [
            'key'     => 'category',
            'value'   => $category,
            'compare' => '=',
        ];
    }

    $query = new WP_Query([
        'post_type'      => $post_type,
        'posts_per_page' => 6,
        'orderby'        => 'date',
        'order'          => 'DESC',
        'paged'          => $paged,
        's'              => $search,
        'meta_query'     => $meta_query,
    ]);

    $total_pages = $query->max_num_pages;

    ob_start();

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            // Load the appropriate card template
            get_template_part('template-parts/card', $post_type);
        endwhile;
        wp_reset_postdata();
    else : ?>
        <div class="col-span-3 py-20 text-center">
            <p class="text-[#4a5568] text-base" style="font-family: 'Source Serif 4', serif;">
                No results found<?php echo $search ? ' for "' . esc_html($search) . '"' : ''; ?>.
            </p>
        </div>
    <?php endif;

    $html = ob_get_clean();

    wp_send_json_success([
        'cards'       => $html,
        'total_pages' => $total_pages,
        'paged'       => $paged,
    ]);
}
add_action('wp_ajax_filter_posts',        'harminder_filter_posts');
add_action('wp_ajax_nopriv_filter_posts', 'harminder_filter_posts');

function harminder_localize_scripts() {
    wp_localize_script('harminder-script', 'harminder_ajax', [
        'ajax_url' => admin_url('admin-ajax.php'),
        'nonce'    => wp_create_nonce('harminder_posts_nonce'),
    ]);
}
add_action('wp_enqueue_scripts', 'harminder_localize_scripts');

// // Register Case Study Custom Post Type
// function harminder_register_case_study_post_type() {
//     register_post_type('case_study', [
//         'labels' => [
//             'name'          => 'Case Studies',
//             'singular_name' => 'Case Study',
//             'add_new_item'  => 'Add New Case Study',
//             'edit_item'     => 'Edit Case Study',
//         ],
//         'public'        => true,
//         'has_archive'   => true,
//         'show_in_rest'  => true,
//         'supports'      => ['title', 'editor', 'excerpt', 'thumbnail'],
//         'menu_icon'     => 'dashicons-portfolio',
//         'rewrite'       => ['slug' => 'case-studies'],
//     ]);
// }
// add_action('init', 'harminder_register_case_study_post_type');