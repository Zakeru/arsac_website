<?php
/**
 * @file
 * views_accelerator.admin.inc
 *
 * Configuration options for the Views Accelerator module.
 */

/**
 * Menu callback for admin settings.
 */
function views_accelerator_admin_configure() {
  $form = array();
  $form['views_accelerator_advanced'] = array(
    '#type' => 'fieldset',
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
    '#title' => t('Advanced options'),
  );
  $form['views_accelerator_advanced']['views_accelerator_analysis_level'] = array(
    '#type' => 'radios',
    '#title' => t('Display view execution times'),
    '#options' => array(
      0 => t('Off'),
      1 => t('Terse, summary only'),
      2 => t('Detailed'),
    ),
    '#default_value' => variable_get('views_accelerator_analysis_level', 0),
    '#description' => t('Summary statistics are shown to the users specified below for all views visited. <br>Detailed execution times are shown only for views enabled via the special <strong>Caching</strong> setting on the Views configuration panel.'),
  );
  $form['views_accelerator_advanced']['views_accelerator_priv_users'] = array(
    '#type' => 'textfield',
    '#title' => t('Users that may view execution times'),
    '#default_value' => variable_get('views_accelerator_priv_users'),
    '#description' => t('Enter a comma-separated list of names of users that may view execution statistics coming from this module. Use <strong>anon</strong> for the anonymous user.'),
  );
  $form['views_accelerator_advanced']['views_accelerator_decimals'] = array(
    '#type' => 'textfield',
    '#size' => 2,
    '#maxsize' => 2,
    '#title' => t('Accuracy'),
    '#default_value' => variable_get('views_accelerator_decimals', 2),
    '#description' => t('Number of decimals shown when displaying execution times.'),
  );
  return system_settings_form($form);
}