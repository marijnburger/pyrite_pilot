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
    <div class="container col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Review your responses.
            </div>
            <div class="panel-body">
                <div class="panel-group" id="responses">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#responses" href="#collapse1">
                                    <i class="fa fa-minus-square" aria-hidden="true"></i> Response 1
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse in">
                            <form class="form-horizontal">
                                <div class="col-sm-4 positive-response-title">
                                    Positive Response:
                                </div>
                                <label class="control-label col-sm-5" for="select-1">Which kind of element did you react to?</label>
                                <div class="col-sm-3">
                                    <select id="select-1" class="form-control">
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
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#responses" href="#collapse2">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Response 2
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse">
                            <form class="form-horizontal">
                                <div class="col-sm-4 negative-response-title">
                                    Negative Response:
                                </div>
                                <label class="control-label col-sm-5" for="select-2">Which kind of element did you react to?</label>
                                <div class="col-sm-3">
                                    <select id="select-2" class="form-control">
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
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#responses" href="#collapse3">
                                    <i class="fa fa-plus-square" aria-hidden="true"></i> Response 3
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse">
                            <form class="form-horizontal">
                                <div class="col-sm-4 positive-response-title">
                                    Positive Response:
                                </div>
                                <label class="control-label col-sm-5" for="select-3">Which kind of element did you react to?</label>
                                <div class="col-sm-3">
                                    <select id="select-3" class="form-control">
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
                        </div>
                    </div>
                </div>
                <form action="end.php" method="post" class="text-center col-sm-12">
                    <button type="submit" class="btn btn-default">Continue <i class="fa fa-play" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
