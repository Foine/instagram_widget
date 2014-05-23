<?php

namespace Instagram\Widget;

use Nos\Controller_Front_Application;

class Controller_Front_Instagram extends Controller_Front_Application {

    protected $_user_config = array();
    protected $_config = array();
    protected $_public_instagram_instance = null;

    public function action_widget($params = array()) {

        $context = \Arr::get($params, 'context', \Nos\Nos::main_controller()->getContext());
        if ($context) {
            $this->_config = $this->_getUserConfig($context);
        }

        $type = \Arr::get($params, 'widget_type');
        if (empty($type)) return '';

        $value = \Arr::get($params, $type);
        if (empty($value)) return '';

        $oInstagram = $this->_getPublicInstagramInstance();
        if (empty($oInstagram)) return '';

        $post_number = \Arr::get($params, 'post_number', 10);
        \Arr::set($params, 'post_number', $post_number);

        switch ($type) {
            case 'hashtag' :
            default :
                $oAnswer = $oInstagram->getTagMedia($value, $post_number);
                break;
        }

        if (empty($oAnswer) || $oAnswer->meta->code != 200) return '';

        $aData = $oAnswer->data;
        if (empty($aData)) return '';

        $show_post_info = \Arr::get($params, 'show_post_info', false);
        \Arr::set($params, 'show_post_info', $show_post_info);

        return \View::forge('instagram_widget::front/widget', array('aData' => $aData, 'show_post_info' => $show_post_info, 'params' => $params), false);
    }

    protected function _getPublicInstagramInstance() {
        $client_id = \Arr::get($this->_config, 'client_id');
        if (empty($this->_public_instagram_instance) && !empty($client_id)) {
            $this->_public_instagram_instance = new Instagram($client_id);
        }
        return $this->_public_instagram_instance;
    }

    protected function _getUserConfig($context) {
        if (empty($this->_user_config)) {
            $this->_user_config = Controller_Admin_Config::getOptions();
        }
        return \Arr::get($this->_user_config, $context);
    }

}