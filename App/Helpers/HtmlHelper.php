<?php

namespace App\Helpers;


class HtmlHelper
{
    static function style( $url ) {
        return "<link rel='stylesheet' type='text/css' href='".asset($url)."'></script>";
    }

    static function script( $url ) {
        return "<script src='".asset($url)."'></script>";
    }

}
