<?php

return array(
    // Twig_Environment configurations.
    // 'cache' => path('storage').'views', // Set to `path('storage').'views'` if you want to use Twig caching
    'debug' => true,
    'autoreload' => true,

    // Additional files to include. Put things like Twig functions, filters, etc. here.
    'include' => array(dirname(__DIR__).DS.'twigfunctions.php'),

    // Twig functions. These are used in the Twig templates.
    'functions' => array(
        'config' => array('function' => 'twig_fn_config', 'params' => array('is_safe' => array('html'))),
        'val' => array('function' => 'twig_fn_val', 'params' => array('is_safe' => array('html'))),
        'tr' => array('function' => 'twig_fn_tr', 'params' => array('is_safe' => array('html'))),
        'url_to' => array('function' => 'twig_fn_url_to', 'params' => array('is_safe' => array('html'))),
        'url_to_route' => array('function' => 'twig_fn_url_to_route', 'params' => array('is_safe' => array('html'))),
        'url_to_secure_route' => array('function' => 'twig_fn_url_to_secure_route', 'params' => array('is_safe' => array('html'))),
        'script' => array('function' => 'twig_fn_script', 'params' => array('is_safe' => array('html'))),
        'style' => array('function' => 'twig_fn_style', 'params' => array('is_safe' => array('html'))),
        'link' => array('function' => 'twig_fn_link', 'params' => array('is_safe' => array('html'))),
        'secure_link' => array('function' => 'twig_fn_secure_link', 'params' => array('is_safe' => array('html'))),
        'image' => array('function' => 'twig_fn_image', 'params' => array('is_safe' => array('html'))),
        'email' => array('function' => 'twig_fn_email', 'params' => array('is_safe' => array('html'))),

        // any static function
        'lav' => array('function' => 'twig_lav', 'params' => array('is_safe' => array('html'))),
        'form' => array('function' => 'twig_fn_form', 'params' => array('is_safe' => array('html'))),

        // Former bundle
        'f_horizontal_open' => array('function' => 'twig_fn_f_horizontal_open', 'params' => array('is_safe' => array('html'))),
        'f_id' => array('function' => 'twig_fn_f_id', 'params' => array('is_safe' => array('html'))),

        // bootstrapper bundle
        'boot_styles' => array('function' => 'twig_fn_boot_styles', 'params' => array('is_safe' => array('html'))),        
        'boot_scripts' => array('function' => 'twig_fn_boot_scripts', 'params' => array('is_safe' => array('html'))),        
        'form_horizontal_open' => array('function' => 'twig_fn_form_horizontal_open', 'params' => array('is_safe' => array('html'))),
        'form_control_group' => array('function' => 'twig_fn_form_control_group', 'params' => array('is_safe' => array('html'))),

        // Form class methods
        'form_open'                  => array('function' => 'twig_fn_form_open', 'params' => array('is_safe' => array('html'))),
        'form_search_open'           => array('function' => 'twig_fn_form_search_open', 'params' => array('is_safe' => array('html'))),
        'form_search_box'            => array('function' => 'twig_fn_form_search_box', 'params' => array('is_safe' => array('html'))),
        'form_open_secure'           => array('function' => 'twig_fn_form_open_secure', 'params' => array('is_safe' => array('html'))),
        'form_open_for_files'        => array('function' => 'twig_fn_form_open_for_files', 'params' => array('is_safe' => array('html'))),
        'form_open_secure_for_files' => array('function' => 'twig_fn_form_open_secure_for_files', 'params' => array('is_safe' => array('html'))),
        'form_close'                 => array('function' => 'twig_fn_form_close', 'params' => array('is_safe' => array('html'))),
        'form_token'                 => array('function' => 'twig_fn_form_token', 'params' => array('is_safe' => array('html'))),
        'form_label'                 => array('function' => 'twig_fn_form_label', 'params' => array('is_safe' => array('html'))),
        'form_input'                 => array('function' => 'twig_fn_form_input', 'params' => array('is_safe' => array('html'))),
        'form_text'                  => array('function' => 'twig_fn_form_text', 'params' => array('is_safe' => array('html'))),
        'form_password'              => array('function' => 'twig_fn_form_password', 'params' => array('is_safe' => array('html'))),
        'form_hidden'                => array('function' => 'twig_fn_form_hidden', 'params' => array('is_safe' => array('html'))),
        'form_search'                => array('function' => 'twig_fn_form_search', 'params' => array('is_safe' => array('html'))),
        'form_email'                 => array('function' => 'twig_fn_form_email', 'params' => array('is_safe' => array('html'))),
        'form_telephone'             => array('function' => 'twig_fn_form_telephone', 'params' => array('is_safe' => array('html'))),
        'form_url'                   => array('function' => 'twig_fn_form_url', 'params' => array('is_safe' => array('html'))),
        'form_number'                => array('function' => 'twig_fn_form_number', 'params' => array('is_safe' => array('html'))),
        'form_date'                  => array('function' => 'twig_fn_form_date', 'params' => array('is_safe' => array('html'))),
        'form_file'                  => array('function' => 'twig_fn_form_file', 'params' => array('is_safe' => array('html'))),
        'form_textarea'              => array('function' => 'twig_fn_form_textarea', 'params' => array('is_safe' => array('html'))),
        'form_select'                => array('function' => 'twig_fn_form_select', 'params' => array('is_safe' => array('html'))),
        'form_optgroup'              => array('function' => 'twig_fn_form_optgroup', 'params' => array('is_safe' => array('html'))),
        'form_option'                => array('function' => 'twig_fn_form_option', 'params' => array('is_safe' => array('html'))),
        'form_checkbox'              => array('function' => 'twig_fn_form_checkbox', 'params' => array('is_safe' => array('html'))),
        'form_radio'                 => array('function' => 'twig_fn_form_radio', 'params' => array('is_safe' => array('html'))),
        'form_checkable'             => array('function' => 'twig_fn_form_checkable', 'params' => array('is_safe' => array('html'))),
        'form_submit'                => array('function' => 'twig_fn_form_submit', 'params' => array('is_safe' => array('html'))),
        'form_reset'                 => array('function' => 'twig_fn_form_reset', 'params' => array('is_safe' => array('html'))),
        'form_image'                 => array('function' => 'twig_fn_form_image', 'params' => array('is_safe' => array('html'))),
        'form_button'                => array('function' => 'twig_fn_form_button', 'params' => array('is_safe' => array('html'))),
        'form_id'                    => array('function' => 'twig_fn_form_id', 'params' => array('is_safe' => array('html'))),
        
    ),

    // Twig filters. These are used in the Twig templates.
    'filters' => array(
        'slugify' => array('filter' => 'twig_flt_slugify', 'params' => array('is_safe' => array('html'))),
    ),
);
