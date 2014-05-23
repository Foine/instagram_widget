<?php
return array(
    'fields' => array(
        'widget_type' => array(
            'form' => array(
                'type' => 'hidden',
                'value' => 'hashtag',
            ),
        ),
        'hashtag' => array(
            'label' => __('Choose the hashtag'),
            'form' => array(
                'type' => 'text',
            ),
            'template' => '<br/><br/>{label}<br/><br/>{field}',
        ),
        'post_number' => array(
            'label' => __('Number of post you want to display'),
            'form' => array(
                'type' => 'number',
            ),
            'template' => '<br/><br/>{label}<br/><br/>{field}',
        ),
        'show_post_info' => array(
            'label' => __('Show post information ?'),
            'form' => array(
                'type' => 'checkbox',
                'value' => 1,
                'empty' => 0,
            ),
            'template' => '<br/><br/>{label}&nbsp;{field}',
        )
    ),
);