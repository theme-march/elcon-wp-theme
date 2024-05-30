<?php 

if( class_exists( 'CSF' ) ) {

if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = 'elecon_prefix_options';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'CSF Demo',
  'menu_slug'  => 'csf-demo',
  'framework_title' => 'CSF Demo',
  'footer_text' => 'CSF Demo',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'Overview',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'    => 'opt-textarea',
      'type'  => 'textarea',
      'title' => 'Textarea',
      'help'  => 'The help text of the field.',
    ),

    array(
      'id'    => 'opt-upload',
      'type'  => 'upload',
      'title' => 'Upload',
    ),

    array(
      'id'    => 'opt-switcher',
      'type'  => 'switcher',
      'title' => 'Switcher',
      'label' => 'The label text of the switcher.',
    ),

    array(
      'id'      => 'opt-color',
      'type'    => 'color',
      'title'   => 'Color',
      'default' => '#3498db',
    ),

    array(
      'id'    => 'opt-checkbox',
      'type'  => 'checkbox',
      'title' => 'Checkbox',
      'label' => 'The label text of the checkbox.',
    ),

    array(
      'id'      => 'opt-radio',
      'type'    => 'radio',
      'title'   => 'Radio',
      'options' => array(
        'yes'   => 'Yes, Please.',
        'no'    => 'No, Thank you.',
      ),
      'default' => 'yes',
    ),

    array(
      'id'          => 'opt-select',
      'type'        => 'select',
      'title'       => 'Select',
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
      ),
    ),

    array(
      'id'      => 'opt-image-select',
      'type'    => 'image_select',
      'title'   => 'Image Select',
      'options' => array(
        'opt-1' => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'opt-2' => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'opt-3' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'opt-4' => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'opt-5' => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'default' => 'opt-1',
    ),

    array(
      'id'    => 'opt-background',
      'type'  => 'background',
      'title' => 'Background',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'success',
      'content' => 'A <strong>notice</strong> field with <strong>success</strong> style.',
    ),

    array(
      'id'    => 'opt-icon',
      'type'  => 'icon',
      'title' => 'Icon',
    ),

    array(
      'id'    => 'opt-alt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'         => 'opt-alt-textarea',
      'type'       => 'textarea',
      'title'      => 'Textarea',
      'subtitle'   => 'A textarea with shortcoder.',
      'shortcoder' => 'csf_demo_shortcodes',
    ),

  )
) );

//
// Basic Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'basic_fields',
  'title' => 'Basic Fields',
  'icon'  => 'fas fa-plus-circle',
) );

//
// Field: text
//
CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'Text',
  'icon'        => 'far fa-square',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=text" target="_blank">Field: text</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-text-1',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'      => 'opt-text-2',
      'type'    => 'text',
      'title'   => 'Text with default',
      'default' => 'This is default value bla bla bla',
    ),

    array(
      'id'       => 'opt-text-3',
      'type'     => 'text',
      'title'    => 'Text field ingenuity',
      'subtitle' => 'The field of subtitle text.',
      'help'     => 'The field of help text.',
      'before'   => '<p>The field of before text.</p>',
      'after'    => '<p>The field of after text.</p>',
    ),

    array(
      'id'          => 'opt-text-4',
      'type'        => 'text',
      'title'       => 'Text with placeholder',
      'placeholder' => 'Typed something...'
    ),

    array(
      'id'         => 'opt-text-5',
      'type'       => 'text',
      'title'      => 'Text readonly',
      'attributes' => array(
        'readonly' => 'readonly'
      ),
      'default'    => 'readonly text field, can not be changed'
    ),

    array(
      'id'          => 'opt-text-6',
      'type'        => 'text',
      'title'       => 'Text with maxlength (5)',
      'attributes'  => array(
        'maxlength' => '5'
      ),
      'default'     => 'abc',
    ),

    array(
      'id'         => 'opt-text-7',
      'type'       => 'text',
      'title'      => 'Text usign custom styles',
      'attributes' => array(
        'style'    => 'width: 100%; height: 40px; border-color: #93C054;'
      ),
    ),

    array(
      'id'    => 'opt-text-8',
      'type'  => 'text',
      'after' => '<p>It shows full width if there is no field of title.</p>',
    ),

  )
) );

//
// Field: textarea
//
CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'Textarea',
  'icon'        => 'far fa-square',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=textarea" target="_blank">Field: textrea</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-textarea-1',
      'type'  => 'textarea',
      'title' => 'Textarea',
    ),

    array(
      'id'      => 'opt-textarea-2',
      'type'    => 'textarea',
      'title'   => 'Textarea wtih default',
      'default' => 'This is default value bla bla bla',
    ),

    array(
      'id'          => 'opt-textarea-3',
      'type'        => 'textarea',
      'title'       => 'Text with placeholder',
      'placeholder' => 'Typed something...'
    ),

    array(
      'id'         => 'opt-textarea-4',
      'type'       => 'textarea',
      'title'      => 'Textarea with shortcoder',
      'shortcoder' => 'csf_demo_shortcodes',
    ),

    array(
      'id'       => 'opt-textarea-5',
      'type'     => 'textarea',
      'title'    => 'Textarea field ingenuity',
      'subtitle' => 'The field of subtitle text.',
      'help'     => 'The field of help text.',
      'before'   => '<p>The field of before text.</p>',
      'after'    => '<p>The field of after text.</p>',
    ),

    array(
      'id'    => 'opt-textarea-6',
      'type'  => 'textarea',
      'after' => '<p>It shows full width if there is no field of title.</p>',
    ),

  )
) );

//
// Field: select
//
CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'Select',
  'icon'        => 'fas fa-list',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=select" target="_blank">Field: select</a>',
  'fields'      => array(

    array(
      'id'          => 'opt-select-1',
      'type'        => 'select',
      'title'       => 'Select',
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
      ),
    ),

    array(
      'id'          => 'opt-select-2',
      'type'        => 'select',
      'title'       => 'Select with default',
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
      ),
      'default'     => 'opt-2'
    ),

    array(
      'id'          => 'opt-select-3',
      'type'        => 'select',
      'title'       => 'Select with group related options',
      'placeholder' => 'Select an option',
      'options'     => array(
        'Group 1'   => array(
          'opt-1'   => 'Option 1',
          'opt-2'   => 'Option 2',
          'opt-3'   => 'Option 3',
        ),
        'Group 2'   => array(
          'opt-4'   => 'Option 4',
          'opt-5'   => 'Option 5',
          'opt-6'   => 'Option 6',
        ),
        'Group 3'   => array(
          'opt-7'   => 'Option 7',
          'opt-8'   => 'Option 8',
          'opt-9'   => 'Option 9',
        ),
      ),
    ),

    array(
      'id'         => 'opt-select-4',
      'type'       => 'select',
      'title'      => 'Select with multiple choice',
      'multiple'   => true,
      'attributes' => array(
        'style'    => 'min-width: 200px;'
      ),
      'options'    => array(
        'opt-1'    => 'Option 1',
        'opt-2'    => 'Option 2',
        'opt-3'    => 'Option 3',
        'opt-4'    => 'Option 4',
        'opt-5'    => 'Option 5',
        'opt-6'    => 'Option 6',
      ),
      'default'    => array( 'opt-2', 'opt-3' ),
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'Select with <strong>chosen</strong> style.',
    ),

    array(
      'id'          => 'opt-select-5',
      'type'        => 'select',
      'title'       => 'Select with Chosen',
      'chosen'      => true,
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
        'opt-4'     => 'Option 4',
        'opt-5'     => 'Option 5',
        'opt-6'     => 'Option 6',
      ),
    ),

    array(
      'id'          => 'opt-select-6',
      'type'        => 'select',
      'title'       => 'Select with multiple Chosen',
      'chosen'      => true,
      'multiple'    => true,
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
        'opt-4'     => 'Option 4',
        'opt-5'     => 'Option 5',
        'opt-6'     => 'Option 6',
      ),
    ),

    array(
      'id'          => 'opt-select-7',
      'type'        => 'select',
      'title'       => 'Select with multiple Chosen and Sortable',
      'chosen'      => true,
      'multiple'    => true,
      'sortable'    => true,
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
        'opt-4'     => 'Option 4',
        'opt-5'     => 'Option 5',
        'opt-6'     => 'Option 6',
      ),
      'default'     => array( 'opt-1', 'opt-2', 'opt-3' )
    ),

    array(
      'id'          => 'opt-select-8',
      'type'        => 'select',
      'title'       => 'Select with multiple AJAX search Pages',
      'chosen'      => true,
      'multiple'    => true,
      'sortable'    => true,
      'ajax'        => true,
      'options'     => 'pages',
      'placeholder' => 'Select pages',
    ),

    array(
      'id'          => 'opt-select-9',
      'type'        => 'select',
      'title'       => 'Select with multiple AJAX search Posts',
      'chosen'      => true,
      'multiple'    => true,
      'sortable'    => true,
      'ajax'        => true,
      'options'     => 'posts',
      'placeholder' => 'Select posts',
    ),

    array(
      'id'          => 'opt-select-10',
      'type'        => 'select',
      'title'       => 'Select with AJAX search Category',
      'chosen'      => true,
      'ajax'        => true,
      'options'     => 'category',
      'placeholder' => 'Select a category',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'Select with <strong>predefined wp query</strong> options.',
    ),

    array(
      'id'          => 'opt-select-11',
      'type'        => 'select',
      'title'       => 'Select with pages',
      'placeholder' => 'Select a page',
      'options'     => 'pages',
    ),

    array(
      'id'          => 'opt-select-12',
      'type'        => 'select',
      'title'       => 'Select with posts',
      'placeholder' => 'Select a post',
      'options'     => 'posts',
    ),

    array(
      'id'          => 'opt-select-13',
      'type'        => 'select',
      'title'       => 'Select with categories',
      'placeholder' => 'Select a category',
      'options'     => 'categories',
    ),

    array(
      'id'          => 'opt-select-14',
      'type'        => 'select',
      'title'       => 'Select with menus',
      'placeholder' => 'Select a menu',
      'options'     => 'menus',
    ),

    array(
      'id'          => 'opt-select-15',
      'type'        => 'select',
      'title'       => 'Select with locations',
      'placeholder' => 'Select a location',
      'options'     => 'locations',
    ),

    array(
      'id'          => 'opt-select-16',
      'type'        => 'select',
      'title'       => 'Select with sidebars',
      'placeholder' => 'Select a sidebar',
      'options'     => 'sidebars',
    ),

    array(
      'id'          => 'opt-select-17',
      'type'        => 'select',
      'title'       => 'Select with wp roles',
      'placeholder' => 'Select a role',
      'options'     => 'roles',
    ),

    array(
      'id'          => 'opt-select-18',
      'type'        => 'select',
      'title'       => 'Select with users',
      'placeholder' => 'Select a user',
      'options'     => 'users',
    ),

    array(
      'id'          => 'opt-select-19',
      'type'        => 'select',
      'title'       => 'Select with post type',
      'placeholder' => 'Select a post type',
      'options'     => 'post_types',
    ),

    array(
      'id'          => 'opt-select-20',
      'type'        => 'select',
      'title'       => 'Select with CPT (custom post type) posts',
      'placeholder' => 'Select a post',
      'options'     => 'posts',
      'query_args'  => array(
        'post_type' => 'your_post_type_name',
      ),
    ),

    array(
      'id'          => 'opt-select-21',
      'type'        => 'select',
      'title'       => 'Select with CPT (custom post type) categories',
      'placeholder' => 'Select a category',
      'options'     => 'categories',
      'query_args'  => array(
        'taxonomy'  => 'your_taxonomy_name',
      ),
    ),

  )
) );

//
// Field: checkbox
//
CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'Checkbox',
  'icon'        => 'fas fa-check-square',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=checkbox" target="_blank">Field: checkbox</a>',
  'fields'      => array(

    array(
      'id'    => 'opt-checkbox-1',
      'type'  => 'checkbox',
      'title' => 'Checkbox',
      'label' => 'The label text of the checkbox.',
    ),

    array(
      'id'      => 'opt-checkbox-2',
      'type'    => 'checkbox',
      'title'   => 'Checkbox with default',
      'label'   => 'The label text of the checkbox.',
      'default' => true,
    ),

    array(
      'id'      => 'opt-checkbox-3',
      'type'    => 'checkbox',
      'title'   => 'Checkbox with multiple choice',
      'options' => array(
        'opt-1' => 'Option 1',
        'opt-2' => 'Option 2',
        'opt-3' => 'Option 3',
      ),
    ),

    array(
      'id'      => 'opt-checkbox-4',
      'type'    => 'checkbox',
      'title'   => 'Checkbox inline with multiple choice',
      'inline'  => true,
      'options' => array(
        'opt-1' => 'Option 1',
        'opt-2' => 'Option 2',
        'opt-3' => 'Option 3',
      ),
    ),

    array(
      'id'      => 'opt-checkbox-5',
      'type'    => 'checkbox',
      'title'   => 'Checkbox multiple choice with default',
      'options' => array(
        'opt-1' => 'Option 1',
        'opt-2' => 'Option 2',
        'opt-3' => 'Option 3',
      ),
      'default' => array( 'opt-1', 'opt-2' )
    ),

    array(
      'id'        => 'opt-checkbox-6',
      'type'      => 'checkbox',
      'title'     => 'Checkbox with group related options',
      'options'   => array(
        'Group 1' => array(
          'opt-1' => 'Option 1',
          'opt-2' => 'Option 2',
          'opt-3' => 'Option 3',
        ),
        'Group 2' => array(
          'opt-4' => 'Option 4',
          'opt-5' => 'Option 5',
          'opt-6' => 'Option 6',
        ),
      ),
    ),

    array(
      'id'       => 'opt-checkbox-7',
      'type'     => 'checkbox',
      'title'    => 'Checkbox testing on many items',
      'options'  => array(
        'opt-1'  => 'Option 1',
        'opt-2'  => 'Option 2',
        'opt-3'  => 'Option 3',
        'opt-4'  => 'Option 4',
        'opt-5'  => 'Option 5',
        'opt-6'  => 'Option 6',
        'opt-7'  => 'Option 7',
        'opt-8'  => 'Option 8',
        'opt-9'  => 'Option 9',
        'opt-10' => 'Option 10',
        'opt-11' => 'Option 11',
        'opt-12' => 'Option 12',
        'opt-13' => 'Option 13',
        'opt-14' => 'Option 14',
        'opt-15' => 'Option 15',
      ),
      'desc'     => 'Vertical scroll showing automatically after add many items',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'info',
      'content' => 'Checkbox with <strong>predefined wp query</strong> options similar like <strong>select</strong> field. (see select field for all options models.)',
    ),

    array(
      'id'      => 'opt-checkbox-8',
      'type'    => 'checkbox',
      'title'   => 'Checkbox with categories',
      'options' => 'categories',
    ),

  )
) );

//
CSF::createSection( $prefix, array(
    'id'    => 'copy_right',
    'title' => 'Copy Rights',
    'icon'  => 'fas fa-plus-circle',
  ) );

  CSF::createSection( $prefix, array(
    'parent'      => 'copy_right',
    'title'       => 'Text',
    'icon'        => 'far fa-square',
    'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=text" target="_blank">Field: text</a>',
    'fields'      => array(
  
      array(
        'id'    => 'opt-text-hkglg',
        'type'  => 'text',
        'title' => 'Text',
      ),

      array(
        'id' => 'opt-text-sdfsdf',
        'type' => 'repeater',
        'title' => 'Text',
        'fields' => array(
     
                array(
                    'id' => 'social-icon',
                    'type' => 'icon',
                    'title'=>'Icon',

                ),
                array(
                    'id' => 'social-Link',
                    'type' => 'text',
                    'title'=>'Social Link',
                    'default' => 'https://www.facebook.com',
                ), 
                ),
            ),
            
        )
    ) );

}