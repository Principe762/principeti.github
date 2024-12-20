<?php

#################################################################
#<!-----------------------------------------------------------!>#
#<!---------- SISTEMA PANDA | TECNOLOGIA E INOVAÇÃO ----------!>#
#<!----------------- CODER BY THE-FAKE -----------------------!>#
#<!-----------------------------------------------------------!>#
#################################################################

require_once("utils/Headers.php");
require_once("utils/Crawlers.php");
require_once("utils/Exclusions.php");

class CrawlerDetect {

    protected $userAgent = null;

    protected $httpHeaders = array();

    protected $matches = array();

    protected $crawlers;

    protected $exclusions;

    protected $uaHttpHeaders;

    protected $compiledRegex;

    protected $compiledExclusions;

    public function __construct(array $headers = null, $userAgent = null){
	
        $this->crawlers = new Crawlers();
        $this->exclusions = new Exclusions();
        $this->uaHttpHeaders = new Headers();

        $this->compiledRegex = $this->compileRegex($this->crawlers->getAll());
        $this->compiledExclusions = $this->compileRegex($this->exclusions->getAll());

        $this->setHttpHeaders($headers);
        $this->userAgent = $this->setUserAgent($userAgent);
    }

    public function compileRegex($patterns) {
	
        return '('.implode('|', $patterns).')';
    }

    public function setHttpHeaders($httpHeaders) {
	
        if (! is_array($httpHeaders) || ! count($httpHeaders)) {
            $httpHeaders = $_SERVER;
        }

        $this->httpHeaders = array();

        foreach ($httpHeaders as $key => $value) {
            if (strpos($key, 'HTTP_') === 0) {
                $this->httpHeaders[$key] = $value;
            }
        }
    }

    public function getUaHttpHeaders() {
	
        return $this->uaHttpHeaders->getAll();
    }

    public function setUserAgent($userAgent) {
	
        if (is_null($userAgent)) {
            foreach ($this->getUaHttpHeaders() as $altHeader) {
                if (isset($this->httpHeaders[$altHeader])) {
                    $userAgent .= $this->httpHeaders[$altHeader].' ';
                }
            }
        }

        return $userAgent;
    }

    public function isCrawler($userAgent = null) {
	
        $agent = $userAgent ?: $this->userAgent;

        $agent = preg_replace('/'.$this->compiledExclusions.'/i', '', $agent);

        if (strlen(trim($agent)) == 0) {
            return false;
        }

        $result = preg_match('/'.$this->compiledRegex.'/i', trim($agent), $matches);

        if ($matches) {
            $this->matches = $matches;
        }

        return (bool) $result;
    }

    public function getMatches() {
	
        return isset($this->matches[0]) ? $this->matches[0] : null;
    }
}
