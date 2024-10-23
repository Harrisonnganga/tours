<?php

namespace Drupal\my_block_demo\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Session\AccountProxyInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Provides a demo block that displays the current user's username.
 *
 * @Block(
 *   id = "user_info_block",
 *   admin_label = @Translation("User Info Block"),
 *   category = @Translation("My Block Demo")
 * )
 */
class UserInfoBlock extends BlockBase {

  protected $currentUser;

  public function __construct(AccountProxyInterface $current_user) {
    $this->currentUser = $current_user;
  }

  public static function create(ContainerInterface $container) {
    return new static($container->get('current_user'));
  }

  public function build() {
    $username = $this->currentUser->getDisplayName() ?: $this->t('Anonymous');
    return [
      '#markup' => $this->t('You are currently logged in as @username', ['@username' => $username]),
    ];
  }
}