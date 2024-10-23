<?php

namespace Drupal\my_form_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class FavouriteColorController extends ControllerBase {
  public function view($fav) {
    return [
      '#markup' => $this->t('Your favourite color is: @color', ['@color' => $fav]),
    ];
  }
}