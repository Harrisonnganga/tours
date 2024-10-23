<?php

namespace Drupal\my_services_demo\Controller;

use Drupal\Core\Controller\ControllerBase;
use Psr\Log\LoggerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoggingController extends ControllerBase {
  protected $logger;

  public function __construct(LoggerInterface $logger) {
    $this->logger = $logger;
  }

  public static function create(ContainerInterface $container) {
    return new static($container->get('logger.factory')->get('my_services_demo'));
  }

  public function logMessages() {
    // Generate log messages for each log level.
    $this->logger->debug('This is a debug message.');
    $this->logger->info('This is an info message.');
    $this->logger->notice('This is a notice message.');
    $this->logger->warning('This is a warning message.');
    $this->logger->error('This is an error message.');
    $this->logger->critical('This is a critical message.');
    $this->logger->alert('This is an alert message.');
    $this->logger->emergency('This is an emergency message.');

    return [
      '#markup' => $this->t('Log entries have been generated.'),
    ];
  }
}