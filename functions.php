<?php
    /*
    ** add my custom styles function
    ** wp-enqueue_style()
    */
    
    function add_styles() {
        wp_enqueue_style('bootstrapcss', get_template_directory_uri(). '/css/bootstrap.min.css');
        wp_enqueue_style('fontawesomecss', get_template_directory_uri(). '/css/font-awesome.min.css');
        wp_enqueue_style('maincss', get_template_directory_uri(). '/css/main.css');
    }

    /*
    ** add my custom scripts function
    ** wp-enqueue_script()
    ** i make it true to be in the footer not in the header
    */

    function add_scripts() {
        //to put the jquery script link in the footer
        wp_deregister_script('jquery'); //deregistration the jquery
        wp_register_script('jquery',includes_url('/js/jquery/jquery.js'),false,'',true); // regestration it
        wp_enqueue_script('jquery'); //include it 
        wp_enqueue_script('bootstrap', get_template_directory_uri(). '/js/bootstrap.min.js', array('jquery'), false , true);
        wp_enqueue_script('main', get_template_directory_uri(). '/js/main.js', array(), false, true);
    }

    /*
    ** wp_enqueue_scripts() and add_action() functions
    ** add action to my functions
    */

    add_action('wp_enqueue_scripts', 'add_styles');
    add_action('wp_enqueue_scripts', 'add_scripts');