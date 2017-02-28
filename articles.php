<html>
<head>
    <title>Articles</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/pilot.css" />

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/articles.js"></script>
</head>
<body>
    <div class="container col-sm-offset-2 col-sm-8">
        <div class="panel panel-default">
            <div class="panel-heading">
                Review article and respond below.
            </div>
            <div class="panel-body">
                <div class="well text-center align-middle" id="articlewell">
                    <img id="article">
                </div>
                <div id="likert" class="form-group">
                    <div class="progress">
                        <div id="progress" class="progress-bar progress-bar-striped" role="progressbar" aria-valuenow="0"
                             aria-valuemin="0" aria-valuemax="100" style="width:0%">
                        </div>
                    </div>
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
                    <button type="submit" id="continue" disabled="true" class="btn btn-default">Continue</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
