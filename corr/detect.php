<?php

class BrowserDetection
{
    private $userAgent;

    public function __construct($userAgent = null)
    {
        if ($userAgent === null) {
            $this->userAgent = $_SERVER['HTTP_USER_AGENT'];
        } else {
            $this->userAgent = $userAgent;
        }
    }

    public function getName()
    {
        $browsers = array(
            'Opera' => '/Opera|OPR/i',
            'Edge' => '/Edge/i',
            'Chrome' => '/Chrome/i',
            'Safari' => '/Safari/i',
            'Firefox' => '/Firefox/i',
            'Internet Explorer' => '/MSIE|Trident/i'
        );

        foreach ($browsers as $name => $pattern) {
            if (preg_match($pattern, $this->userAgent)) {
                return $name;
            }
        }
        return 'Unknown';
    }

    public function getVersion()
    {
        $pattern = '#(?<browser>Version|' . implode('|', array('OPR', 'Edge', 'Chrome', 'Safari', 'Firefox', 'MSIE', 'Trident')) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';

        if (preg_match_all($pattern, $this->userAgent, $matches)) {
            return $matches['version'][0] ?? 'Unknown';
        }
        return 'Unknown';
    }

    public function isMobile()
    {
        return preg_match('/Mobile|Android|Silk|Kindle|BlackBerry|Opera Mini|Opera Mobi/i', $this->userAgent);
    }

    public function getPlatform()
    {
        $platforms = array(
            'Windows' => '/windows nt/i',
            'Mac' => '/macintosh|mac os x/i',
            'Linux' => '/linux/i',
            'iPhone' => '/iphone/i',
            'iPad' => '/ipad/i',
            'Android' => '/android/i'
        );

        foreach ($platforms as $name => $pattern) {
            if (preg_match($pattern, $this->userAgent)) {
                return $name;
            }
        }
        return 'Unknown';
    }
}
