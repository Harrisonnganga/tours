<?php

namespace Drupal\my_form_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class ColorFormController extends ControllerBase {
  public function content() {
    $form = \Drupal::formBuilder()->getForm('Drupal\my_form_demo\Form\ColorForm');
    return $form;
  }
}