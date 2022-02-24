<?php
include('header.php');


?>

<html>
    <head>
        <title>Panel | Page Traffic Info</title>
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="./css/ptiStyles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <section>
        <div class="centerContent">
            <div class="pageContainer">
                <h1>Page Views</h1>
                <p>TOTAL: <?php echo $ip; ?></p>
            </div>
            <div class="pageContainer">
            <h1>Emails(Past 30 days)</h1>
            </div>
            <div class="pageContainer">
                <h1>Page Click Graph</h1>
            </div>
        </div>
        <div class="centerContentTwo">
            <div class="pageContainer">
                <h1>IP Logs:</h1>
                <div class="innerLogs">
                    <p><?php 
                        $view = fopen('C:/xampp/htdocs/realtor.bsstrategies.com/panel/ips.txt', 'r');

                        if($view) {
                            while (($line = fgets($view)) !== false) {
                                echo $line . "<br>";
                            }
                        } else {
                            echo "Error: Unable to load logs!";
                        }
                    
                    ?></p>
                </div>
            </div>
            <div class="pageContainer">
                <h1>Request Logs</h1>
            </div>

        </div>
    </section>
    <?php include('footer.php') ?>
</body>

</html>