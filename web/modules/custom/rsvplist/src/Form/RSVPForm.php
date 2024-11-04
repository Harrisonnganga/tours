<?php

/**
 * @file
 * A form to collect an email address for RSVP details.
 */

namespace Drupal\rsvplist\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

class RsvpForm extends FormBase {

    /**
     * {@inheritdoc}
     */
    public function getFormId() {
        return 'rsvplist_email_form';
    }

    /**
     * {@inheritdoc}
     */
    public function buildForm(array $form, FormStateInterface $form_state) {
        \Drupal::logger('rsvplist')->notice('Building RSVP form.');

        $node = \Drupal::routeMatch()->getParameter('node');

        // Get the node ID or set a default.
        $nid = ($node instanceof \Drupal\node\NodeInterface) ? $node->id() : 0;

        $form['email'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Email address'),
            '#description' => $this->t('We will send updates to the email address you provided.'),
            '#default_value' => '',
            '#size' => 25,
            '#maxlength' => 128,
            '#required' => TRUE,
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('RSVP'),
        ];

        $form['nid'] = [
            '#type' => 'hidden',
            '#value' => $nid,
        ];

        return $form;
    }


    /**
     * {@inheritdoc}
     */
    public function validateForm(array &$form, FormStateInterface $form_state) {
        $value = $form_state->getValue('email');
        if ( !(\Drupal::service('email.validator')->isValid($value)) ) {
           $form_state->setErrorByName('email',
           $this->t('The provided email address is not valid.Please try
           again',['%mail' => $value]));
        }
    }
    /**
     * {@inheritdoc}
     */
    public function submitForm(array &$form, FormStateInterface $form_state) {
        $submittedemail = $form_state->getValue('email');
        $this->messenger()->addMessage($this->t("The form is working! You entered @entry.", ['@entry' => $submittedemail]));
        \Drupal::logger('rsvplist')->notice('Submitted email: @entry', ['@entry' => $submittedemail]);
    }
}
