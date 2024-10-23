<?php

namespace Drupal\my_form_demo\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Messenger\MessengerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ChristmasDinnerForm extends FormBase {

  protected $messenger;

  // Dependency injection
  public function __construct(MessengerInterface $messenger) {
    $this->messenger = $messenger;
  }

  // Factory method
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('messenger')
    );
  }

  // Form ID
  public function getFormId() {
    return 'christmas_dinner_form';
  }

  // Build the form
  public function buildForm(array $form, FormStateInterface $form_state) {
    // First name field
    $form['first_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('First Name'),
      '#required' => TRUE,
      '#placeholder' => $this->t('Enter your first name'),
    ];

    // Last name field
    $form['last_name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Last Name'),
      '#required' => TRUE,
      '#placeholder' => $this->t('Enter your last name'),
    ];

    // Number of guests field
    $form['number_of_guests'] = [
      '#type' => 'select',
      '#title' => $this->t('Number of Guests'),
      '#options' => range(1, 10),
      '#required' => TRUE,
    ];

    // Number of meat/fish choices
    $form['number_of_meat_fish'] = [
      '#type' => 'number',
      '#title' => $this->t('Number of Meat/Fish Choices'),
      '#required' => TRUE,
      '#min' => 0,
    ];

    // Number of vegetarian choices
    $form['number_of_vegetarian'] = [
      '#type' => 'number',
      '#title' => $this->t('Number of Vegetarian Choices'),
      '#required' => TRUE,
      '#min' => 0,
    ];

    // Number of vegan choices
    $form['number_of_vegan'] = [
      '#type' => 'number',
      '#title' => $this->t('Number of Vegan Choices'),
      '#required' => TRUE,
      '#min' => 0,
    ];

    // Alcohol-free option
    $form['alcohol_free'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Would you like your table to be alcohol-free?'),
    ];

    // Submit button
    $form['save'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit Order'),
    ];

    return $form;
  }

  // Form submission handler
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $first_name = $form_state->getValue('first_name');
    $last_name = $form_state->getValue('last_name');
    $number_of_guests = $form_state->getValue('number_of_guests');
    $number_of_meat_fish = $form_state->getValue('number_of_meat_fish');
    $number_of_vegetarian = $form_state->getValue('number_of_vegetarian');
    $number_of_vegan = $form_state->getValue('number_of_vegan');
    $alcohol_free = $form_state->getValue('alcohol_free') ? $this->t('Yes') : $this->t('No');

    $this->messenger->addMessage($this->t('Thank you @first_name @last_name! Your order has been submitted.', [
      '@first_name' => $first_name,
      '@last_name' => $last_name,
    ]));

    $this->messenger->addMessage($this->t('Number of guests: @guests', ['@guests' => $number_of_guests]));
    $this->messenger->addMessage($this->t('Meat/Fish Choices: @meat_fish', ['@meat_fish' => $number_of_meat_fish]));
    $this->messenger->addMessage($this->t('Vegetarian Choices: @vegetarian', ['@vegetarian' => $number_of_vegetarian]));
    $this->messenger->addMessage($this->t('Vegan Choices: @vegan', ['@vegan' => $number_of_vegan]));
    $this->messenger->addMessage($this->t('Alcohol-free: @alcohol_free', ['@alcohol_free' => $alcohol_free]));
  }
}