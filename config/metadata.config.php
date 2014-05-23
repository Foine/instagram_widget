<?php

return array(
    'name'    => 'Instagram widget',
    'version' => '1.0',
    'provider' => array(
        'name' => 'Foine',
    ),
    'requires' => array(
        'lib_options',
    ),
    'namespace' => 'Instagram\Widget',
    'launchers' => array(
        'Instagram\Widget::Config' => array(
            'name'    => __('Instagram configuration'), // displayed name of the launcher
            'action' => array(
                'action' => 'nosTabs',
                'tab' => array(
                    'url' => 'admin/instagram_widget/config/form', // url to load
                ),
            ),
            'icon64' => 'static/apps/instagram_widget/img/icon-64.png',
        ),
    ),
    'enhancers' =>  array(
        'Instagram_Widget' => array(
            'title' => __('Instagram Widget'),
            'desc'  => '',
            // Here it's just a regular enhancer
            'enhancer' => 'instagram_widget/front/instagram/widget',
            //'urlEnhancer' => 'noviusos_form/front/main',
            'iconUrl' => 'static/apps/instagram_widget/img/icon-16.png',
            // And the user has to configure it
            'dialog' => array(
                'contentUrl' => 'admin/instagram_widget/enhancer/widget/popup',
                'width' => 450,
                'height' => 400,
                'ajax' => true,
            ),
        )
    ),
    'icons' => array(
        64 => 'static/apps/instagram_widget/img/icon-64.png',
        32 => 'static/apps/instagram_widget/img/icon-32.png',
        16 => 'static/apps/instagram_widget/img/icon-16.png',
    ),
);
