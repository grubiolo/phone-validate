<?php

require_once 'phone_validate.civix.php';
use CRM_PhoneValidate_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/ 
 */
function phone_validate_civicrm_config(&$config) {
  _phone_validate_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function phone_validate_civicrm_xmlMenu(&$files) {
  _phone_validate_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function phone_validate_civicrm_install() {
  _phone_validate_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function phone_validate_civicrm_postInstall() {
  _phone_validate_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function phone_validate_civicrm_uninstall() {
  _phone_validate_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function phone_validate_civicrm_enable() {
  _phone_validate_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function phone_validate_civicrm_disable() {
  _phone_validate_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function phone_validate_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _phone_validate_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function phone_validate_civicrm_managed(&$entities) {
  _phone_validate_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function phone_validate_civicrm_caseTypes(&$caseTypes) {
  _phone_validate_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function phone_validate_civicrm_angularModules(&$angularModules) {
  _phone_validate_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function phone_validate_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _phone_validate_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function phone_validate_civicrm_entityTypes(&$entityTypes) {
  _phone_validate_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function phone_validate_civicrm_themes(&$themes) {
  _phone_validate_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 *
function phone_validate_civicrm_preProcess($formName, &$form) {

} // */

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 *
function phone_validate_civicrm_navigationMenu(&$menu) {
  _phone_validate_civix_insert_navigation_menu($menu, 'Mailings', array(
    'label' => E::ts('New subliminal message'),
    'name' => 'mailing_subliminal_message',
    'url' => 'civicrm/mailing/subliminal',
    'permission' => 'access CiviMail',
    'operator' => 'OR',
    'separator' => 0,
  ));
  _phone_validate_civix_navigationMenu($menu);
} // */




/*    ~~~~~~~~~~~~~~~~~~  FUNCIONES EJEMPLOS DE LA WEB      ~~~~~~~~~~~~~~~~~~     */


/*
function phone_validate_civicrm_validateForm($formName, &$fields, &$files, &$form, &$errors) {
    // sample implementation
    if ($formName == 'CRM_Contact_Form_Contact') {
       // ensure that external identifier is present and valid
       $externalID = CRM_Utils_Array::value( 'external_identifier', $fields );
       if (! $externalID ) {
          $errors['external_identifier'] = ts( 'External Identifier is a required field' );
       }
       elseif (! myCustomValidatorFunction($externalID)) {
          $errors['external_identifier'] = ts( 'External Identifier is not valid' );
       }
    }
    return;

}
*/


/*
function phone_validate_civicrm_validateForm($formName, &$fields, &$files, &$form, &$errors) {
  if ($formName == 'CRM_Contact_Form_Contact') {
    foreach ($fields['address'] as $key => $address) {
      //if country is set to UK or is empty, check for UK postcode formatting
      if (empty($address['country_id']) || $address['country_id'] == 1226) {
    $postcode = str_replace(' ', '', strtoupper($address['postal_code']));
    /*$preg = "/^([A-PR-UWYZ]([0-9]([0-9]|[A-HJKSTUW])?|[A-HK-Y][0-9]([0-9]|[ABEHMNPRVWXY])?)[0-9][ABD-HJLNP-UW-Z]{2}|GIR0AA)$/";*/
/*    $preg = "/^([ABEHMNPRVWXY])([0-9])([ABEHMNPRVWXY])$/";
    $match = preg_match($preg, $postcode) ? true : false;
    if (!$match) {
      $errors['address[' . $key . '][postal_code]'] = ts('El código postal no pertenece al Reino Unido');
    }
      }
    }
  }
  return;
}
*/



/*    ~~~~~~~~~~~~~~~~~~  FUNCION VALIDAR TELEFONO     ~~~~~~~~~~~~~~~~~~    */ 



function phone_validate_civicrm_validateForm($formName, &$fields, &$files, &$form, &$errors) {
  if ($formName == 'CRM_Contact_Form_Contact' || 'CRM_Contact_Form_Inline_Phone') {
    foreach ($fields['phone'] as $key => $phone) {
      if (($phone['phone'])!=NULL) { 
        if (!is_numeric($phone['phone'])) {
            $errors['phone[' . $key . '][phone]'] = ts('El teléfono solo puede contener números');
        }
      }
    }
  }
  return;
}