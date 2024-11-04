<?php

namespace Drupal\my_form_demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ColorForm extends FormBase {

  protected $messenger;

  // Dependency injection of the messenger service
  public function __construct(MessengerInterface $messenger) {
    $this->messenger = $messenger;
  }

  // Factory method for creating the form
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('messenger')
    );
  }

  // Unique form ID
  public function getFormId() {
    return 'color_form_block';
  }

  // Build the form
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['fav_color'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Your favourite color'),
      '#description' => $this->t('Please enter purple, violet, or yellow.'),
    ];

    $form['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Save'),
    ];

    return $form;
  }

  // Validation handler
  public function validateForm(array &$form, FormStateInterface $form_state) {
    $allowed_colours = ['purple', 'violet', 'yellow'];
    $fav_color = strtolower($form_state->getValue('fav_color')); // Convert to lower case

    // Check if the submitted color is in the allowed colors
    if (!in_array($fav_color, $allowed_colours)) {
        $form_state->setErrorByName('fav_color', $this->t('@color is not among your favourite colours. Valid colours are: purple, violet, or yellow.', ['@color' => ucfirst($fav_color)]));
    }
}

  // Submit handler
  public function submitForm(array &$form, FormStateInterface $form_state) {
    // Retrieve the submitted color value
    $submitted_color = $form_state->getValue('fav_color');

    // Notify the user of their submission using the injected messenger service
    $this->messenger->addMessage($this->t('Your favourite color is: @color', ['@color' => $submitted_color]));

    // Redirect to the specified route
    $form_state->setRedirect('my_form_demo.favourite_colour_route', [
        'fav' => $submitted_color,
    ]);
  }
}