<?php

namespace Drupal\my_block_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Datetime\DrupalDateTime;

/**
 * Provides a 'DateBlock' block that displays the current date and time.
 *
 * @Block(
 *   id = "my_block_demo_date",
 *   admin_label = @Translation("Date Block"),
 *   category = @Translation("Custom"),
 * )
 */
class DateBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    $request_time = \Drupal::time()->getCurrentTime();

    $date = $this->t('Hi, today is @weekday of week @weeknum of @year.', [
      '@weekday' => date('l', $request_time),
      '@weeknum' => date('W', $request_time),
      '@year' => date('Y', $request_time),
    ]);

    $time = $this->t('The time is @time.', [
      '@time' => date('H:i:s', $request_time),
    ]);

    return [
      '#markup' => $date . ' ' . $time,
    ];
  }
}