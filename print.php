<html>
<head>
    <title>Print Consent Form</title>

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
    <div class="container" id="print-form">
        <?php
            $signed = true; //compile signed form
            include 'php/consent.php';
        ?>
    </div>
</body>
</html>
