<?php

namespace Drupal\my_block_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class BedSizeController extends ControllerBase {

  public function small() {
    return [
      '#markup' => $this->t('Small bed content'),
    ];
  }

  public function medium() {
    return [
      '#markup' => $this->t('Medium bed content'),
    ];
  }

  public function large() {
    return [
      '#markup' => $this->t('Large bed content'),
    ];
  }

}