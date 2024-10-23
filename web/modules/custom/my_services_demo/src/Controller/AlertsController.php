<?php

namespace Drupal\my_services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class AlertsController extends ControllerBase {

  // This variable will hold the Messenger service.
  protected $messenger;

  // Dependency injection for the Messenger service.
  public function __construct(MessengerInterface $messenger) {
    $this->messenger = $messenger;
  }

  // Method to display alerts based on the type parameter.
  public function showAlert($type) {
    // Determine the type of alert to display.
    switch ($type) {
      case 'status':
        $this->messenger->addStatus("I'm a status alert.");
        break;

      case 'warning':
        $this->messenger->addWarning("I'm a warning alert.");
        break;

      case 'error':
        $this->messenger->addError("I'm an error alert.");
        break;

      default:
        $this->messenger->addError("Invalid alert type.");
        break;
    }

    // Render the page content.
    return [
      '#markup' => 'Alert of type ' . $type . ' has been displayed.',
    ];
  }

  // Dependency Injection: Create function
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('messenger')
    );
  }
}