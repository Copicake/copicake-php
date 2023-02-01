<?php

namespace Copicake;

class Changes
{
  public string $name;
  public string $text;
  public string $fill;
  public string $src;

  public function __construct($data)
  {
    $this->name = $data->name;
    $this->text = $data->text;
    $this->fill = $data->fill;
    $this->src = $data->src;
  }
}