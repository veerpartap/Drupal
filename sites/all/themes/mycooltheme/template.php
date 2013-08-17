<?php 

function mycooltheme_theme(&$existing, $type, $theme, $path) {

   // $hooks['custom_content_type_node_form'] = array(
   //    'arguments' => array('form' => NULL),
   //    'template' => 'templates/custom-content-type-node-form',
   //    'render element' => 'form'
   //  );

   $hooks['user_login_block'] = array(
     //'template' => 'templates/user-login-block',
     'render element' => 'form',
   );
   
   return $hooks;
}

function mycooltheme_preprocess_user_login_block(&$vars) {
  $vars['name'] = render($vars['form']['name']);
  $vars['pass'] = render($vars['form']['pass']);
  $vars['submit'] = render($vars['form']['actions']['submit']);
  $vars['rendered'] = drupal_render_children($vars['form']);
}
 
function mycooltheme_form_user_login_block_alter(&$form, &$form_state, $form_id) {
  $form['name']['#size'] = 30;
  $form['name']['#maxlength'] = 30;
  $form['pass']['#size'] = 30;
  $form['pass']['#maxlength'] = 20;
  $markup = l(t('Forgot your password?'), 'user/password', array('attributes' => array('title' => t('Request new password via e-mail.'))));
  if (variable_get('user_register', USER_REGISTER_VISITORS_ADMINISTRATIVE_APPROVAL)) {
    $markup .= ' ' . l(t('Sign up'), 'user/register', array('attributes' => array('title' => t('Create a new user account.'), 'class' => 'register-link')));
  }
  $markup = '<div class="clearfix">' . $markup . '</div>';
  $form['links']['#markup'] = $markup;
}




/*

If you don't want to replace the whole template, you can override it's elements with template.php. 
You can use hook_form_alter hook to alter the form:

Use this to see available form elements:
//dpm($form);     print_r($form);

// function mycooltheme_form_alter(&$form, &$form_state, $form_id) {
//   if ($form['#id'] == 'user-login-form') {
//     //dpm($form);
//     $form['name']['#title'] = t("Quote title");
//     $form['actions']['submit']['#value'] = t("Click Here to login!");
//   }
// }

*/