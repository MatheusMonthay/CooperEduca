<?php

use League\CommonMark\CommonMarkConverter;

if (!function_exists('markdown_to_html')) {
    function markdown_to_html($markdown) {
        $converter = new CommonMarkConverter();
        return $converter->convertToHtml($markdown);
    }
}