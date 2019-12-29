<?php


namespace imi;


use Amp\Uri\InvalidUriException;
use Amp\Uri\Uri;
use Curl\Curl;

class uiuri
{
    private $url;

    /**
     * uri constructor.
     * @param $uri
     */
    public function __construct($uri)
    {
        try {
            $url = new Uri($uri);
            if (Uri::isValid($url)) {
                $this->url = $url;
                return $url;
            } else {
                $this->url = false;
                return false;
            }
        } catch (InvalidUriException $e) {
            echo $e->getMessage();
        }
    }

    /**
     * @return Uri|bool
     */
    public function getUri()
    {
        return $this->url;
    }

    public function getCurl($method = 'get', $data = [])
    {
        $curl = new Curl();
        switch (strtolower($method))
        {
            case "get":
                $curl->get($this->getUri()->getOriginalUri(), $data);
                break;
            case "post":
                $curl->post($this->getUri()->getOriginalUri(), $data);
                break;
        }
        return $curl;
    }
}