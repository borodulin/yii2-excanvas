# ExplorerCanvas asset for Yii2 framework

[![Latest Version](https://img.shields.io/packagist/v/conquer/excanvas.svg)](https://packagist.org/packages/conquer/excanvas)
[![Total Downloads](https://img.shields.io/packagist/dt/conquer/excanvas.svg)](https://packagist.org/packages/conquer/excanvas)
[![License](https://img.shields.io/packagist/l/conquer/excanvas.svg)](LICENSE)

## Description

[ExplorerCanvas](https://github.com/arv/explorercanvas) brings the HTML5 `<canvas>` 2D drawing API
to Internet Explorer 8 and older.

The script is included in a `<!--[if lte IE 8]>` conditional comment: only IE 8 and older load it,
all other browsers (including IE 10+, which ignores conditional comments) skip it.
It is used by [conquer/flot](https://github.com/borodulin/yii2-flot), [conquer/peity](https://github.com/borodulin/yii2-peity)
and [conquer/jvectormap](https://github.com/borodulin/yii2-jvectormap).

## Requirements

- PHP 7.4 or 8.x
- Yii 2.0

## Installation

Install the extension via [Composer](https://getcomposer.org):

```bash
composer require conquer/excanvas:^1.0
```

## Usage

```php
\conquer\excanvas\ExcanvasAsset::register($this);
```

## License

**conquer/excanvas** is released under the MIT License, see [`LICENSE`](LICENSE).
The bundled ExplorerCanvas (`assets/excanvas.js`, `assets/excanvas.min.js`) is Copyright 2006 Google Inc.,
licensed under the [Apache License 2.0](http://www.apache.org/licenses/LICENSE-2.0).
