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
    $r = $this->copicake->image->get("tzPTx9rT76pSMHKLIwLoNT4YC8Vw");
    var_dump($r);
  }

  public function testCreate()
  {
    $r = $this->copicake->image->create([
      'template_id' => 'jfwrFJdR3z1eF8BcEhSnAFyhxgOq',
      'changes' => [
        ['name' => 'text-9so09m', 'text' => 'hello world', 'fill' => '#ff0000'],
        ['name' => 'image-yeavh7', 'src' => 'https://your_website.com/test.png'],
      ],
      'options' => [
        'webhook_url' => 'https://your_website.com/webhook_url'
      ]
    ]);
  }
}