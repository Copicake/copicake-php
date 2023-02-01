<?php

namespace Copicake;

use Exception;

class CopicakeUtils
{
  private string $apiKey;

  public function __construct(string $apiKey)
  {
    $this->apiKey = $apiKey;
  }

  public function uploadTempImage()
  {
    throw new Exception("Not implemented");
  }
}