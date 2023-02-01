<?php

namespace Copicake;

class Copicake
{
  private string $apiKey;
  public CopicakeImage $image;
  public CopicakeUtils $utils;

  public function __construct(string $apiKey)
  {
    $this->image = new CopicakeImage($apiKey);
    $this->utils = new CopicakeUtils($apiKey);
  }
}