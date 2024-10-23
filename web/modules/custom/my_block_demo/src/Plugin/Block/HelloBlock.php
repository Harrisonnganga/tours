<?php

namespace Drupal\my_block_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;

/**
 * Provides a 'HelloBlock' block.
 *
 * @Block(
 *   id = "my_block_demo_hello_block",
 *   admin_label = @Translation("Hello Block"),
 *   category = @Translation("Custom"),
 * )
 */
class HelloBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    return [
      '#markup' => $this->t("Hello world, I'm a block.")
    ];
  }
}