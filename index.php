<html>
<head>
    <title>Pyrite Pilot</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/pilot.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/index.js"></script>
</head>
<body>
    <div class="container col-sm-offset-2 col-sm-8">
        <div class="jumbotron text-center">
            <h1>Pyrite Research Demo</h1>
        </div>
        <?php
            require 'php/app_config.php';

            session_start();
            $_SESSION["counter"] = 0;

            //print consent form if necessary
            if (REQUIRE_CONSENT) {
                echo
                '<div class="panel panel-default">
                    <div class="panel-heading">
                        Consent
                    </div>
                    <div class="panel-body" id="sign-form">';

                $signed = false; //compile unsigned form
                include 'php/consent.php';

                echo
                        '<form class="form-horizontal" action="print.php" method="post">
                            <div class="col-sm-10">
                                <label class="checkbox-inline">
                                    <input type="checkbox" id="consent-check" name="consent-check" value="consent-check">
                                    I give my consent to participate in this study.
                                    <span id="signed-date">(' . date('m/y/d') . '); ?></span>
                                </label>
                            </div>
                            <div class="form-group col-sm-2 text-center">
                                <button type="submit" id="submit-consent" disabled="true" class="btn btn-default">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>';
            } else { //for pilot/demo purposes
                echo
                '<form action="articles.php" method="post" class="text-center">
                    <button type="submit" id="start-pilot" class="btn btn-default btn-lg" value="Start">Start Demo <i class="fa fa-play" aria-hidden="true"></i></button>
                </form>';
            }
        ?>
    </div>
</body>
</html>
