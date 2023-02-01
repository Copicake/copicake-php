<?php

namespace Copicake;

use Curl\Curl;

class CopicakeBase
{
  protected string $apiKey;

  public function __construct(string $apiKey)
  {
    $this->apiKey = $apiKey;
  }

  protected function getCurl()
  {
    $curl = new Curl();
    $curl->setHeader('Content-Type', 'application/json');
    $curl->setHeader('Authorization', "Bearer {$this->apiKey}");
    return $curl;
  }
}