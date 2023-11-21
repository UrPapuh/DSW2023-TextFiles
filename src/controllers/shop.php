<?php
require_once('../src/models/product.php'); // use namespace
class Shop {
  private string $url_file;

  public function __Construct(string $url_file) {
    if (file_exists($url_file)) {
      $this->url_file = $url_file;
    }
  }

  public function add(Product $product) {
    file_put_contents($url_file, "$product->name;$product->price;$product->stock", FILE_APPEND);
  }

  public function list() {
    $file = fopen($url_file, 'r');
    if ($file) {
      require('../src/views/listAll.php'); // use namespace
      fclose($file);
    } else {
      echo "ERROR: No se pudo abrir el archivo";
    }
  }
}