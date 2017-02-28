<?php
    include 'db_config.php';
    try {
        $conn = new PDO('mysql:host='.DB_HOST.';port='.DB_PORT.';dbname='.DB_NAME,
                        DB_USERNAME, DB_PASSWORD);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $articlepaths = "";
        $loadquery = 'SELECT * FROM ArticlePaths';
        foreach($conn->query($loadquery) as $row) {
            $articlepaths[] .= $row['path'] . ', ';
        }
        //remove trailing comma
        $articlepaths = substr($articlepaths, 0, strlen($articlepaths) - 2);
        echo $articlepaths;
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }
?>
