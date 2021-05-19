<?php

Hook::set('page.content', function($content) use($url) {
    return strtr($content, [
        ' href="/' => ' href="' . $url . '/',
        ' src="/' => ' src="' . $url . '/'
    ]);
});
