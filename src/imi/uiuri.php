<?php


namespace imi;


use Amp\Uri\InvalidUriException;
use Amp\Uri\Uri;

class uiuri
{
    private $url;

    /**
     * uri constructor.
     * @param $uri
     */
    public function __construct($uri)
    {
        $this->url = $uri;
    }

    /**
     * @return Uri|bool
     */
    public function getUri()
    {
        try {
            $uri = new Uri($this->url);
            if (Uri::isValid($uri)) {
                return $uri;
            } else {
                return false;
            }
        } catch (InvalidUriException $e) {
            echo $e->getMessage();
        }
    }
}