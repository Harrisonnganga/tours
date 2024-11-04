<?php

namespace Drupal\my_form_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\RedirectResponse;

class RedirectController extends ControllerBase {
  public function redirectToColor() {
    return new RedirectResponse('/color');
  }
}