<?php
return array(
    'form_name' => '<img src="static/apps/instagram_widget/img/icon-32.png" style="vertical-align:middle;">&nbsp;'.__('Instagram configuration'), //Optional
    'layout' => array(
        'lines' => array(
            array(
                'cols' => array(
                    array(
                        'col_number' => 7,
                        'view' => 'nos::form/expander',
                        'params' => array(
                            'title'   => __('Client information'),
                            'options' => array(
                                'allowExpand' => false,
                            ),
                            'content' => array(
                                'view' => 'nos::form/fields',
                                'params' => array(
                                    'fields' => array(
                                        'client_id',
                                        'client_secret',
                                        'callback_uri_show',
                                        'callback_uri',
                                    ),
                                ),
                            ),
                        ),
                    ),
                    array(
                        'col_number' => 5,
                        'view' => 'nos::form/expander',
                        'params' => array(
                            'title'   => __('How to use it'),
                            'options' => array(
                                'allowExpand' => false,
                            ),
                            'content' => array(
                                'view' => 'nos::form/fields',
                                'params' => array(
                                    'fields' => array(
                                        'explaination',
                                    ),
                                ),
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'fields' => array(
        'client_id' => array(
            'label' => __('Client ID'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'client_secret' => array(
            'label' => __('Client Secret'),
            'form' => array(
                'type' => 'text',
            ),
        ),
        'callback_uri' => array(
            'form' => array(
                'type' => 'hidden',
                'value' => \Uri::base(false).'apps/instagram_widget/redirect.php',
            ),
        ),
        'callback_uri_show' => array(
            'label' => __('Callback URI'),
            'renderer' => '\Nos\Renderer_Text',
            'form' => array(
                'value' => \Uri::base(false).'apps/instagram_widget/redirect.php',
            ),
        ),
        'explaination' => array(
            'label' => __('Install this application'),
            'renderer' => '\Nos\Renderer_Text',
            'form' => array(
                'value' => \View::forge('instagram_widget::admin/explanation'),
            )
        ),
    ),
);