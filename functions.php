<?php

/**
 *
 * @return BlogBuzzTime
 */
function uteUSblogBuzzTime_Install()
{
    return uteUSBlogbuzztime::getInstance()->install();
}

/**
 *
 * @return BlogBuzzTime
 */
function uteUSblogBuzzTime_Uninstall()
{
    return uteUSBlogbuzztime::getInstance()->uninstall();
}

function uteUSaddBlogBuzzTimeJs()
{
    if (is_admin() || !is_single())
        return false;

    $blogbuzztime = uteUSBlogBuzzTime::getInstance();
    $return = '<script>';
    $return.= 'var _bbtSingle=\'online user\';';
    $return.= 'var _bbtMany=\'online users\';';
    $return .= 'var _bbtLang = \'en\';(function(){var e=document.createElement("script");e.type="text/javascript";e.async=true;e.src="//assets.blogbuzztime.com/read.js;var t=document.getElementsByTagName("script")[0];t.parentNode.insertBefore(e,t)})()';
    $return .= '</script>';
    echo $return;
}

function uteUSblogbuzztime_widget()
{
    return register_widget("uteUSBlogBuzzTime_widget");
}

