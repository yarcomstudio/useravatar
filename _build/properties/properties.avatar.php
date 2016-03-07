<?php

$properties = array();

$tmp = array(
    'tplAuth' => array(
        'type'  => 'textfield',
        'value' => 'ua.auth',
    ),
    'tplNoAuth' => array(
        'type'  => 'textfield',
        'value' => 'ua.noauth',
    ),
    'source' => array(
        'type'  => 'numberfield',
        'value' => 0,
    ),
    'objectName'    => array(
        'type'  => 'textfield',
        'value' => 'UserAvatar',
    ),

    'frontendCss'   => array(
        'type'  => 'textfield',
        'value' => '[[+assetsUrl]]css/web/default.css',
    ),
    'frontendJs'    => array(
        'type'  => 'textfield',
        'value' => '[[+assetsUrl]]js/web/default.js',
    ),
    'jqueryJs'      => array(
        'type'  => 'textfield',
        'value' => '[[+assetsUrl]]vendor/jquery/dist/jquery.min.js',
    ),
    'actionUrl'     => array(
        'type'  => 'textfield',
        'value' => '[[+assetsUrl]]action.php',
    ),
    'toPlaceholder' => array(
        'type'  => 'textfield',
        'value' => ''
    ),
    'fileapi' => array(
        'type'  => 'textarea',
        'value' => '{"template":"base"}',
    ),
    'dropzone' => array(
        'type'  => 'textarea',
        'value' => '{"template":"base"}',
    ),

);

foreach ($tmp as $k => $v) {
    $properties[] = array_merge(
        array(
            'name'    => $k,
            'desc'    => PKG_NAME_LOWER . '_prop_' . $k,
            'lexicon' => PKG_NAME_LOWER . ':properties',
        ), $v
    );
}

return $properties;