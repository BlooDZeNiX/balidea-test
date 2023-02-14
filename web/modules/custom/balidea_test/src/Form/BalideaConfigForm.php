<?php

namespace Drupal\balidea_test\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Configuration form for balidea_test module.
 */
class BalideaConfigForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'balidea_test_config_form';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return ['balidea_test.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $config = $this->config('balidea_test.settings');

    $form['balidea_test_text'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Balidea Texto'),
      '#default_value' => $config->get('balidea_test_text'),
      '#description' => $this->t('Ingrese el texto que desea.'),
      '#rows' => 5,
      '#format' => 'full_html',
    ];

    $form['balidea_test_number'] = [
      '#type' => 'number',
      '#title' => $this->t('Balidea Número'),
      '#default_value' => $config->get('balidea_test_number'),
      '#description' => $this->t('Ingrese un número entero.'),
      '#step' => 1,
      '#min' => 0,
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $this->config('balidea_test.settings')
      ->set('balidea_test_text', $form_state->getValue('balidea_test_text'))
      ->set('balidea_test_number', $form_state->getValue('balidea_test_number'))
      ->save();

    parent::submitForm($form, $form_state);
  }

}
