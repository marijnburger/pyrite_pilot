<?php
    class response {
        public $responderID;
        public $responsevalue;
        public $duration;
        public $counter;
    }

    $command = $_POST["command"];
    if ($command == "response") {
        $responseObj = new response();
        $responseObj->responderID = $_POST["responderID"];
        $responseObj->responsevalue = $_POST["responsevalue"];
        $responseObj->duration = $_POST["duration"];
        $responseObj->counter = $_POST["counter"];
        $responseJSON = json_encode($responseObj);

        $responses = fopen("../data/responses.txt", "a");
        fwrite($responses, $responseJSON);
        fwrite($responses, "\n");
        fclose($responses);
        echo var_dump(json_decode($responseJSON));
    }
?>
