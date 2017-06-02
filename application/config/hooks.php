<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'core/CustomExceptions.php';
/*
| -------------------------------------------------------------------------
| Hooks
| -------------------------------------------------------------------------
| This file lets you define "hooks" to extend CI without hacking the core
| files.  Please see the user guide for info:
|
|	https://codeigniter.com/user_guide/general/hooks.html
|
*/
$hook['post_controller_constructor'] = array(
   'class'    => 'doHooks',
   'function' => 'init',
   'filename' => 'doHooks.php',
   'filepath' => 'hooks'
);