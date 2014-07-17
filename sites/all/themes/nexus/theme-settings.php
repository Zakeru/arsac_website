<?php
/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function nexus_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['nexus_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('Nexus Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['nexus_settings']['breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('breadcrumbs','nexus'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['nexus_settings']['slideshow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Front Page Slideshow'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['nexus_settings']['slideshow']['slideshow_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show slideshow'),
    '#default_value' => theme_get_setting('slideshow_display','nexus'),
    '#description'   => t("Check this option to show Slideshow in front page. Uncheck to hide."),
  );
  $form['nexus_settings']['slideshow']['slide'] = array(
    '#markup' => t('You can change the description and URL of each slide in the following Slide Setting fieldsets.'),
  );
  $form['nexus_settings']['slideshow']['slide1'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 1'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['nexus_settings']['slideshow']['slide1']['slide1_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide1_head','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide1']['slide1_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide1_desc','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide1']['slide1_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide1_url','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide2'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 2'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['nexus_settings']['slideshow']['slide2']['slide2_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide2_head','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide2']['slide2_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide2_desc','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide2']['slide2_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide2_url','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide3'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 3'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['nexus_settings']['slideshow']['slide3']['slide3_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide3_head','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide3']['slide3_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide3_desc','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide3']['slide3_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide3_url','nexus'),
  );

  $form['nexus_settings']['slideshow']['slide4'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 4'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['nexus_settings']['slideshow']['slide4']['slide4_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide4_head','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide4']['slide4_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide4_desc','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide4']['slide4_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide4_url','nexus'),
  );

  $form['nexus_settings']['slideshow']['slide5'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 5'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['nexus_settings']['slideshow']['slide5']['slide5_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide5_head','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide5']['slide5_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide5_desc','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide5']['slide5_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide5_url','nexus'),
  );

  $form['nexus_settings']['slideshow']['slide6'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 6'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['nexus_settings']['slideshow']['slide6']['slide6_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide6_head','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide6']['slide6_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide6_desc','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide6']['slide6_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide6_url','nexus'),
  );

  $form['nexus_settings']['slideshow']['slide7'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 7'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['nexus_settings']['slideshow']['slide7']['slide7_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide7_head','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide7']['slide7_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide7_desc','nexus'),
  );
  $form['nexus_settings']['slideshow']['slide7']['slide7_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide7_url','nexus'),
  );

  $form['nexus_settings']['slideshow']['slideimage'] = array(
    '#markup' => t('To change the Slide Images, Replace the slide-image-1.jpg, slide-image-2.jpg, slide-image-3.jpg, slide-image-4.jpg, slide-image-5.jpg, slide-image-6.jpg and slide-image-7.jpg in the images folder of the theme folder.'),
  );
}
