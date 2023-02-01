<?php

namespace Copicake;

class Options
{
  public string $webhook_url;

  public function __construct($data)
  {
    $this->webhook_url = $data->webhook_url ?? "";
  }
}