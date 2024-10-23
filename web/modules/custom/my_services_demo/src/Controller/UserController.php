<?php

namespace Drupal\my_services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Class UserController.
 */
class UserController extends ControllerBase {

  public function currentUserDemo() {

    $current_user = $this->currentUser();

    // Get the username.
    $username = $current_user->getDisplayName();

    // Retun the message.
    return [
      '#markup' => $this->t('Hello, @name', ['@name' => $username]),
    ];
  }

  public function currentUserEmailDemo() {
    $current_user = $this->currentUser();

    $email = $current_user->getEmail();

    return [
      '#markup' => $this->t('Your email address is: @email', ['@email' => $email]),
    ];
  }
}