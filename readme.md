Take a snapshot with a web camera via OpenCV4.

## Requirement

- libopevncv-dev (opencv4 or higher)
- g++
- pkg-config
- PHP 7.4 or higher with PHP-FFI extension
- GNU Make

## Installation

```
$ composer require hanhan1978/php-opencv-webcam
$ cd vendor/hanhan1978/php-opencv-webcam/
$ make
```

## Example

```PHP
<?php

require_once './vendor/autoload.php';

$camera = new \Hanhan1978\OpenCv\Camera();
$camera->snapshot('test.png');
```
