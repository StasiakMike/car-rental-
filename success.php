<?php

/**
 * OpenPayU Examples
 *
 * @copyright  Copyright (c) 2011-2016 PayU
 * @license    http://opensource.org/licenses/LGPL-3.0  Open Software License (LGPL 3.0)
 * http://www.payu.com
 * http://developers.payu.com
 */

require_once realpath(dirname(__FILE__)) . '/lib/openpayu.php';
require_once realpath(dirname(__FILE__)) . '/config.php';

if(isset($_GET['error']))
    header('Location: ./error.php?error=' . $_GET['error']);

?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Order create successful</title>
    <link rel="stylesheet" href="<?php echo EXAMPLES_DIR;?>layout/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo EXAMPLES_DIR;?>layout/css/style.css">
</head>
<body>
<div class="container">
  <h1>Dziękujemy za płatność</h1>
  <a href="index.php">Powrót do strony głównej</a>
</div>
</body>
</html>