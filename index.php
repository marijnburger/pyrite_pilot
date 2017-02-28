<html>
<head>
    <title>Pyrite Pilot</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/pilot.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
    <div class="container col-sm-offset-2 col-sm-8">
        <div class="jumbotron">
            <h1>Pyrite Research Pilot</h1>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Consent
            </div>
            <div class="panel-body" id="sign-form">
                <?php
                    $signed = false; //compile unsigned form
                    include 'php/consent.php';
                ?>
                <form class="form-horizontal" action="print.php" method="post">
                    <div class="col-sm-10">
                        <label class="checkbox-inline">
                            <input type="checkbox" id="consent-check" name="consent-check" value="consent-check">
                            I give my consent to participate in this study.
                            <span id="signed-date"><?php echo '(' . date('m/y/d') . ')'; ?></span>
                        </label>
                    </div>
                    <div class="form-group col-sm-2 text-center">
                        <button type="submit" id="submit-consent" disabled="true" class="btn btn-default">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
