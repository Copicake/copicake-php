<?php

namespace Copicake;

class Rendering
{
  public string $id;
  public string $type;
  public string $status;
  public array $changes;
  public mixed $options;
  public string $template_id;
  public string $permanent_url;
  public string $created_by;
  public string $created_at;

  public function __construct($response)
  {
    $this->id = $response->id ?? "";
    $this->type = $response->type ?? "";
    $this->status = $response->status ?? "";

    $this->changes = array_map(function ($data) {
      return new Changes($data);
    }, (array) $response->changes ?? []);

    $this->options = new Options($response->options);
    $this->template_id = $response->template_id ?? "";
    $this->permanent_url = $response->permanent_url ?? "";
    $this->created_by = $response->created_by ?? "";
    $this->created_at = $response->created_at ?? "";
  }
}