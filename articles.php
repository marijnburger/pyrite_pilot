<html>
<head>
    <title>Review Articles</title>
    <link rel="icon" type="image/png" href="data/favicon.ico">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/pilot.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/articles.js"></script>
</head>
<body>
    <?php
        require 'php/app_config.php';
        session_start();

        //store POST data if necessary
        if (isset($_POST["likert"])) {
            $_SESSION["counter"]++; //increment for next article call
            //store likert data
        }
        $counter = $_SESSION["counter"];
        if ($counter >= NUM_IMAGES) {
            $_SESSION["experimentStarted"] = false;
            header('Location: responses.php');
        }

        $portionOf100 = 100 / (NUM_IMAGES * 2);
        $width = round($portionOf100 * $counter);

    ?>
    <div class="container col-sm-offset-2 col-sm-8">
        <div class="progress text-center">
            <div id="progress"
                class="progress-bar progress-bar-info progress-bar-striped"
                role="progressbar" aria-valuenow="<?php echo $width; ?>"
                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $width ?>%">
                <?php if ($counter != 0) { echo $width . '% completed'; } ?>
            </div>
            <?php if ($counter == 0) { echo '0% completed'; } ?>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Review article and respond below.
            </div>
            <div class="panel-body">
                <div id="article-well" class="well text-center align-middle">
                    <img id="article" src="data/article<?php echo $counter; ?>.png">
                    <div id="response" class="hidden">
                        <a id="positive" class="hoverable"><i class="fa fa-thumbs-up fa-4x" aria-hidden="true"></i></a>
                        <a id="negative" class="hoverable"><i class="fa fa-thumbs-down fa-4x" aria-hidden="true"></i></a>
                        <a id="close-response"><i class="fa fa-times" aria-hidden="true"></i></a>
                    </div>
                </div>
                <form action="articles.php" method="post">
                    <div id="likert" class="form-group">
                        <h4>This article seems believable.</h4>
                        <div class="table-responsive table">
                            <table class="text-center">
                                <tr id="labels" class="small">
                                    <td>Strongly Disagree</td>
                                    <td>Disagree</td>
                                    <td>Somewhat Disagree</td>
                                    <td>Neither Agree nor Disagree</td>
                                    <td>Somewhat Agree</td>
                                    <td>Agree</td>
                                    <td>Strongly Agree</td>
                                </tr>
                                <tr id="radios">
                                    <td><label><input type="radio" name="likert" value="strongly-disagree"></label></td>
                                    <td><label><input type="radio" name="likert" value="disagree"></label></td>
                                    <td><label><input type="radio" name="likert" value="somewhat-disagree"></label></td>
                                    <td><label><input type="radio" name="likert" value="neither"></label></td>
                                    <td><label><input type="radio" name="likert" value="somewhat-agree"></label></td>
                                    <td><label><input type="radio" name="likert" value="agree"></label></td>
                                    <td><label><input type="radio" name="likert" value="strongly-agree"></label></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div id="button-row" class="text-center col-sm-12">
                        <button type="submit" id="continue" disabled="true" class="btn btn-default">Continue <i class="fa fa-play" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
