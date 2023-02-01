# Copicake PHP

🍰 Copicake, a data-driven image generating service to let you generate any social media material with just ONE CLICK.

- 🔗 Website: https://copicake.com/
- 📘 Official API Docs: https://docs.copicake.com/

# Installations

```bash
composer require copicake
```

# Usage

## Initialization

```php
<?php

use Copicake\Copicake;

$copicake = new Copicake("YOUR_API_KEY");
```

## Image

### Create an image

#### create(`mixed` $data)

```php
try {
  $response = $copicake->image->create([
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
catch(Exception $exception) {
  var_dump($exception);
}
```

#### get(`string` $renderingId)

```php
try {
  $response = $copicake->image->get('YOUR_RENDERING_ID');
}
catch(Exception $exception) {
  var_dump($exception);
}
```

#### getUntilFinished(`string` $renderingId)

```php
try {
  $response = $copicake->image->getUntilFinished('YOUR_RENDERING_ID');
}
catch(Exception $exception) {
  var_dump($exception);
}
```
