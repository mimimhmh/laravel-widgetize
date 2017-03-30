<?php

namespace Imanghafoori\Widgets\Utils;

/**
 * Class Html Minifier
 * @package Imanghafoori\Widgets\Utils
 */
class HtmlMinifier
{
    private $replace = [
        '<!--(.*?)-->' => '', //remove comments
        "/<\?php/" => '<?php ',
        "/\n([\S])/" => '$1',
        "/\r/" => '', // remove carrage return
        "/\n/" => '', // remove new lines
        "/\t/" => '', // remove tab
        "/\s+/" => ' ', // remove spaces
    ];

    /**
     * @param $htmlString
     * @return null
     */
    public function minify($htmlString)
    {
        return preg_replace(array_keys($this->replace), array_values($this->replace), $htmlString);
    }
}
