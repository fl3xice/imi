<?php


namespace imi;


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
     * @param uri $uri
     * @return uri
     */
    public function saveUri(uri $uri)
    {
        $this->uri = $uri;
        return $this->uri;
    }

    /**
     * @return string
     */
    public function getUri()
    {
        return implode($this->uri->getBox());
    }
}