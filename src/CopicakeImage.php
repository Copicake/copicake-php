<?php

namespace Copicake;

use Exception;

class CopicakeImage extends CopicakeBase
{

  public function __construct(string $apiKey)
  {
    parent::__construct($apiKey);
  }

  public function get(string $renderingId)
  {
    $curl = $this->getCurl();
    $curl->get(IMAGE_API_END_POINT . '/get?id=' . $renderingId);
    $curl->close();

    if ($curl->error) {
      throw new Exception($curl->error);
    } else {
      $response = $curl->response;
      if ($response->error) {
        throw new Exception($response->error);
      } else {
        $rendering = new Rendering($response->data);
        return $rendering;
      }
    }
  }

  public function getUntilFinished(string $renderingId, int $retried = 0)
  {
    if ($retried > MAX_RETRY_TIMES) {
      throw new Exception('Internal server error');
    } else {
      $rendering = $this->get($renderingId);
      if ($rendering->status === "processing") {
        return $this->getUntilFinished($renderingId, $retried + 1);
      }
      return $rendering;
    }
  }

  public function create($data)
  {
    $curl = $this->getCurl();
    $curl->post(IMAGE_API_END_POINT . '/create', $data);
    $curl->close();

    if ($curl->error) {
      throw new Exception($curl->error);
    } else {
      $response = $curl->response;
      if ($response->error) {
        throw new Exception($response->error);
      } else {
        $rendering = new Rendering($response->data);
        return $rendering;
      }
    }
  }
}