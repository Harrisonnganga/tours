<?php

namespace Drupal\my_form_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\my_form_demo\Form\ChristmasDinnerForm;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ChristmasDinnerController extends ControllerBase {

  // Adds the form to the page.
  public function content() {
    $form = \Drupal::formBuilder()->getForm(ChristmasDinnerForm::class);
    return $form;
  }
}