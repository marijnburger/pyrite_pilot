<html>
<head>
    <title>Review Responses</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/pilot.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/responses.js"></script>
</head>
<body>
    <?php
    require 'php/app_config.php';
    session_start();

    $counter = $_SESSION["counter"];
    $portionOf100 = 100 / (NUM_IMAGES * 2);
    $width = round($portionOf100 * $counter);
    ?>
    <div class="container col-sm-offset-2 col-sm-8">
        <div class="progress">
            <div id="progress"
                class="progress-bar progress-bar-info progress-bar-striped"
                role="progressbar" aria-valuenow="<?php echo $width; ?>"
                aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $width ?>%">
                <?php if ($counter != 0) { echo $width . '% completed'; } ?>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                Review your responses.
            </div>
            <div class="panel-body">
                <div class="panel-group" id="responses">
                    <div id="panel-1" class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Response 1</h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <form class="form-horizontal">
                                <div class="col-sm-4 positive-response-title">
                                    Positive Response:
                                </div>
                                <label class="control-label col-sm-5" for="select-1">Which kind of element did you react to?</label>
                                <div class="col-sm-3">
                                    <select id="select-1" class="form-control">
                                        <option selected="true" disabled="disabled">Select an element...</option>
                                        <option>Font Type</option>
                                        <option>Font Size</option>
                                        <option>Link</option>
                                        <option>Image</option>
                                        <option>Audio Clip</option>
                                        <option>Video Clip</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </form>
                            <div class="well col-sm-12 text-center response-well">
                                <img src="data/response1.png">
                            </div>
                            <div class="form-group">
                                <label for="react-1">Why did you react to this element?</label>
                                <textarea class="form-control" rows="4" id="react-1"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-default">Next <i class="fa fa-play" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div id="panel-2" class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Response 2</h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <form class="form-horizontal">
                                <div class="col-sm-4 negative-response-title">
                                    Negative Response:
                                </div>
                                <label class="control-label col-sm-5" for="select-2">Which kind of element did you react to?</label>
                                <div class="col-sm-3">
                                    <select id="select-2" class="form-control">
                                        <option selected="true" disabled="disabled">Select an element...</option>
                                        <option>Font Type</option>
                                        <option>Font Size</option>
                                        <option>Link</option>
                                        <option>Image</option>
                                        <option>Audio Clip</option>
                                        <option>Video Clip</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </form>
                            <div class="well col-sm-12 text-center response-well">
                                <img src="data/response2.png">
                            </div>
                            <div class="form-group">
                                <label for="react-2">Why did you react to this element?</label>
                                <textarea class="form-control" rows="4" id="react-2"></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-default">Next <i class="fa fa-play" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div id="panel-3" class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">Response 3</h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <form class="form-horizontal">
                                <div class="col-sm-4 positive-response-title">
                                    Positive Response:
                                </div>
                                <label class="control-label col-sm-5" for="select-3">Which kind of element did you react to?</label>
                                <div class="col-sm-3">
                                    <select id="select-3" class="form-control">
                                        <option selected="true" disabled="disabled">Select an element...</option>
                                        <option>Font Type</option>
                                        <option>Font Size</option>
                                        <option>Link</option>
                                        <option>Image</option>
                                        <option>Audio Clip</option>
                                        <option>Video Clip</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </form>
                            <div class="well col-sm-12 text-center response-well">
                                <img src="data/response3.png">
                            </div>
                            <div class="form-group">
                                <label for="react-3">Why did you react to this element?</label>
                                <textarea class="form-control" rows="4" id="react-3"></textarea>
                            </div>
                            <form action="end.php" method="post" class="text-right">
                                <button id="last-next" type="submit" class="btn btn-default">Next <i class="fa fa-play" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
