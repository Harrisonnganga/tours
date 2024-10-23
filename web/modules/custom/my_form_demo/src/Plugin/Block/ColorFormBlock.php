<?php

namespace Drupal\my_form_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'Color Form' Block.
 *
 * @Block(
 *   id = "color",
 *   admin_label = @Translation("Color Form Block"),
 *   category = @Translation("custom demo"),
 * )
 */
class ColorFormBlock extends BlockBase {
    /**
     * {@inheritdoc}
     */
    public function build() {
        // Retrieve the form as a render array
        $form = \Drupal::formBuilder()->getForm('Drupal\my_form_demo\Form\ColorForm');

        return $form;
    }
}