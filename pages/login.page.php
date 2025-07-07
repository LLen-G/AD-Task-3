<?php
require_once UTILS_PATH . '/auth.util.php';

$title = 'Login';

ob_start();
require COMPONENTS_PATH . '/loginForm.component.php';
$content = ob_get_clean();

require LAYOUTS_PATH . '/main.layout.php';
