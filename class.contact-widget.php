<?php
// Create Contact_Widget class
class Contact_Widget extends WP_Widget {

    // Widget constructor
    public function __construct() {
        parent::__construct(
            'contact_widget',  // Widget ID
            'Contact Widget',        // Widget name
            array(
                'description' => 'A widget for displaying contact information.'
            )
        );
    }
    
    // Widget frontend display
    public function widget( $args, $instance ) {
        // Widget output
    }
    
    // Widget form
    public function form( $instance ) {
        // Widget form fields
    }
    
    // Widget form update
    public function update( $new_instance, $old_instance ) {
        // Update widget settings
    }
}