<?php

// Register the Metabox in Blog_Post
function my_custom_meta_box() {
    add_meta_box(
        'my_meta_box',              // Unique ID
        'Custom Meta Box Title',    // Box title
        'my_custom_meta_box_html',  // Content callback, must be of type callable
        'Blog_Post',                // Post type
        'normal',                   // Context (normal, side, advanced)
        'high'                      // Priority (high, core, default, low)
    );
}
add_action('add_meta_boxes', 'my_custom_meta_box');

// Metabox HTML
function my_custom_meta_box_html($post) {
    $value = get_post_meta($post->ID, '_my_custom_field', true);
    ?>
    <label for="my_custom_field">Custom Field Label</label>
    <input type="text" id="my_custom_field" name="my_custom_field" value="<?php echo esc_attr($value); ?>" />
    <?php
    // Nonce field for security
    wp_nonce_field('save_my_custom_meta_box', 'my_custom_meta_box_nonce');
}

// Save Metabox Data
function save_my_custom_meta_box($post_id) {
    // Check if our nonce is set and verify it.
    if (!isset($_POST['my_custom_meta_box_nonce']) || !wp_verify_nonce($_POST['my_custom_meta_box_nonce'], 'save_my_custom_meta_box')) {
        return;
    }

    // Check if the user has the permission to edit the post.
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Avoid autosave.
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Save the custom field value.
    if (isset($_POST['my_custom_field'])) {
        $my_data = sanitize_text_field($_POST['my_custom_field']);
        update_post_meta($post_id, '_my_custom_field', $my_data);
    }
}
add_action('save_post', 'save_my_custom_meta_box');
