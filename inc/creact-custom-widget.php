<?php
class My_Custom_Widget extends WP_Widget {

    function __construct() {
        parent::__construct(
            'my_custom_widget',
            __( 'My Custom Widget', 'mytheme' ),
            array( 'description' => __( 'A Custom Widget with two input fields', 'mytheme' ), )
        );
    }

    // Front-end display of widget
    public function widget( $args, $instance ) {
        echo $args['before_widget'];
        if ( ! empty( $instance['title'] ) ) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ) . $args['after_title'];
        }
        if ( ! empty( $instance['subtitle'] ) ) {
            echo '<h3>' . esc_html( $instance['subtitle'] ) . '</h3>';
        }
        if ( ! empty( $instance['message'] ) ) {
            echo '<p>' . esc_html( $instance['message'] ) . '</p>';
        }
        echo $args['after_widget'];
    }

    // Back-end widget form
    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : __( 'New title', 'mytheme' );
        $subtitle = ! empty( $instance['subtitle'] ) ? $instance['subtitle'] : __( 'New subtitle', 'mytheme' );
        $message = ! empty( $instance['message'] ) ? $instance['message'] : __( 'New message', 'mytheme' );
        ?>
        <p>
            <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:', 'mytheme' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'subtitle' ); ?>"><?php _e( 'Subtitle:', 'mytheme' ); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id( 'subtitle' ); ?>" name="<?php echo $this->get_field_name( 'subtitle' ); ?>" type="text" value="<?php echo esc_attr( $subtitle ); ?>">
        </p>
        <p>
            <label for="<?php echo $this->get_field_id( 'message' ); ?>"><?php _e( 'Message:', 'mytheme' ); ?></label>
            <textarea class="widefat" id="<?php echo $this->get_field_id( 'message' ); ?>" name="<?php echo $this->get_field_name( 'message' ); ?>"><?php echo esc_attr( $message ); ?></textarea>
        </p>
        <?php 
    }

    // Sanitize widget form values as they are saved
    public function update( $new_instance, $old_instance ) {
        $instance = array();
        $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
        $instance['subtitle'] = ( ! empty( $new_instance['subtitle'] ) ) ? strip_tags( $new_instance['subtitle'] ) : '';
        $instance['message'] = ( ! empty( $new_instance['message'] ) ) ? strip_tags( $new_instance['message'] ) : '';
        return $instance;
    }
}

// Register the custom widget
function my_register_custom_widget() {
    register_widget( 'My_Custom_Widget' );
}
add_action( 'widgets_init', 'my_register_custom_widget' );

?>