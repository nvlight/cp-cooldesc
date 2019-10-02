<?php

use Huangdijia\Debuger\Facades\Debuger;

require 'vendor/autoload.php';
require 'pages/head.php';
require 'vendor/mgerman/Debug.php';

?>

<div class="page-wrap">
    <?php

    require 'pages/header.php';

    ?>
    <div class="inner-content center-bl markdown-body">

        <h2>Checkout</h2>

        <?php
        //Debuger::remark('begin');
        echo \App\Debug::d($_GET,'get',1);
        //Debuger::remark('end');
        ?>

    </div>
    <?php

    require 'pages/footer.php';

    ?>
</div>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,800" rel="stylesheet">
<link href="css/style.min.css" rel="stylesheet">
<link href="css/markdown.css" rel="stylesheet">
<!-- Owl Stylesheets (begin) -->
<link href="css/owl.carousel.min.css" rel="stylesheet">
<!-- Owl Stylesheets (end) -->
<!-- fancybox Stylesheets (begin) -->
<link href="css/jquery.fancybox.min.css" rel="stylesheet">
<!-- fancybox Stylesheets (end) -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/jquery.typed.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.fancybox.min.js"></script>

<!--[if lte IE 9]><script src="js/jquery.placeholder.js"></script><script>$('input, textarea').placeholder();</script><![endif]-->
</body>
</html>
