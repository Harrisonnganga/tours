<?php

namespace Drupal\my_services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;

class TranslationController extends ControllerBase {

  public function TranslationDemo() {
    $name = 'Harry';
    $count = 10;
    $status = 'new';

    $msg1 = $this->t('Hello @name!', ['@name' => $name]);
    $msg2 = $this->t('You have %count unread messages.', ['%count' => $count]);
    $msg3 = $this->t('There are :status messages in your inbox.', [':status' => $status]);

    return [
      '#markup' => "<p>$msg1</p><p>$msg2</p><p>$msg3</p>",
    ];
  }

  public function placeholdersDemo() {
    $unread = 5;
    $read = 12;

    $translated_message = $this->t('You have %unread unread messages and %read read messages.', [
      '%unread' => $unread,
      '%read' => $read,
    ]);

    return [
      '#markup' => "<p>$translated_message</p>",
    ];
  }
}