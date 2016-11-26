<?php
class Language_loader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
            $ci->lang->load('auth',$siteLang);
            $ci->lang->load('message',$siteLang);
        } else {
            $ci->lang->load('auth','english');
            $ci->lang->load('message','english');
        }
    }
}