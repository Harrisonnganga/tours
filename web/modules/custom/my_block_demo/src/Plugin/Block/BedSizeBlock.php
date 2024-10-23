<?php

namespace Drupal\my_block_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Routing\RouteMatchInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a Bed Size Block.
 *
 * @Block(
 *   id = "bed_size_block",
 *   admin_label = @Translation("Bed Size Block"),
 *   category = @Translation("Custom")
 * )
 */
class BedSizeBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function build() {
    // Get the current route name.
    $route_name = \Drupal::routeMatch()->getRouteName();

    // Initialize variables for output message and image.
    $output = '';
    $image_path = '';

    // Determine the output and image based on the current route.
    switch ($route_name) {
      case 'bed.small':
        $output = $this->t('This bed is too small.');
        $image_path = 'public://images/bed-small.png'; // Update with the correct path
        break;

      case 'bed.medium':
        $output = $this->t('This bed is just right.');
        $image_path = 'public://images/bed-small.png'; // Update with the correct path
        break;

      case 'bed.large':
        $output = $this->t('This bed is too large.');
        $image_path = 'public://images/bed-small.png'; // Update with the correct path
        break;

      default:
        $output = $this->t('Unknown bed size.');
    }

    // Build the render array.
    $build = [
      '#markup' => $output,
    ];

    // Add the image if the path is set.
    if ($image_path) {
      $build['#theme'] = 'image';
      $build['#uri'] = $image_path;
      $build['#alt'] = $this->t('Image of the bed size');
    }

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function getCacheContexts() {
    // Cache the block by the current route.
    return \Drupal\Core\Cache\Cache::mergeContexts(parent::getCacheContexts(), ['route.name']);
  }
}
