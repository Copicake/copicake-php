<?php

use Copicake\Copicake;
use PHPUnit\Framework\TestCase;

class CopicakeTest extends TestCase
{
  protected $copicake;

  protected function setUp(): void
  {
    $this->copicake = new Copicake("API_KEY");
  }

  public function testGet()
  {
    $r = $this->copicake->image->get("B2OztWEJCdeZAjD1z0lwTRlGizRT");
    var_dump($r);
  }

  public function testCreate()
  {
    $r = $this->copicake->image->create([
      'template_id' => 'SZvbcJuiEQyVtpnnzgGJDrvmlL1M',
      'changes' => [
        ['name' => 'text-qm1zmj', 'text' => 'hello world', 'fill' => '#ff0000'],
      ],
      'options' => [
        'webhook_url' => 'https://webhook.site/6182664f-8502-48d1-99f0-fe5963c61054'
      ]
    ]);
    var_dump($r);
  }
}