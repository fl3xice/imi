<?php


namespace imi;


use Amp\Uri\Uri;

class imi
{
    private $uri;

    /**
     * imi constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param uiuri $uri
     * @return uiuri
     */
    public function saveUri(uiuri $uri)
    {
        $this->uri = $uri;
        return $this->uri;
    }

    /**
     * @return uiuri
     */
    public function getUiUri()
    {
        return $this->uri;
    }

    /**
     * @return false|string
     */
    public function getNowTime()
    {
        return date("H:i", time());
    }
}