<?php
namespace Drupal\test_module\Controller;
use Drupal\Core\Controller\ControllerBase;
class HelloController extends ControllerBase {
 public function hello() {
   return [
     '#markup' => 'Hello. It is a fine day indeed!',
   ];
 }
 public function helloName($first_name, $last_name) {
  return [
    '#markup' => $this->t('Hello @first_name @last_name', [
      '@first_name' => $first_name,
      '@last_name' => $last_name,
    ]),
  ];
}
}

class GoodbyeController extends ControllerBase {
 public function goodbye() {
   return [
     '#markup' => 'Goodbye. Twas pleasure having you!',
   ];
 }
 public function goodbyeName($first_name, $last_name) {
  return [
    '#markup' => $this->t('Goodbye, Twas pleasure having you! @first_name @last_name', [
      '@first_name' => $first_name,
      '@last_name' => $last_name,
    ]),
  ];
}
}

class productController extends Controllerbase{
  public function showProduct($name, $size = 'M', $color = 'white') {
    $content = $this->t('Product: @name, Size: @size, Colour: @colour', [
      '@name' => $name,
      '@size' => $size,
      '@color' => $color,
    ]);

   return [
      '#markup' => $content,
    ];
  }
}