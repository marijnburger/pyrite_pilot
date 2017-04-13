<html>
<head>
    <title>Print Consent Form</title>
    <link rel="icon" type="image/png" href="data/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/pilot.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
    <?php

        //TODO store, submitted form
    ?>
    <div class="container col-sm-offset-2 col-sm-8" id="print-form">
        <?php
            $signed = true; //compile signed form
            include 'php/consent.php';
        ?>
    </div>
</body>
</html>
