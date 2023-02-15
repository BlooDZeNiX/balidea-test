<?php

namespace Drupal\balidea_test\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Returns responses for HZ Base routes.
 */
class BalideaTestController extends ControllerBase {

  /**
   * Builds the response.
   */
  public function build() {

    $text = $this->config('balidea_test.settings')->get('balidea_test_text');
    $number = $this->config('balidea_test.settings')->get('balidea_test_number');

    return [
      '#theme' => 'balidea_test',
      '#text' => $text,
      '#number' => $number,
    ];
  }

}
