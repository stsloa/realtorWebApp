
<?php
function active($currect_page){
  $url_array =  explode('/', $_SERVER['REQUEST_URI']) ;
  $url = end($url_array);  
  if($currect_page == $url){
      echo 'active'; //class name in css 
  } 
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../css/styles.css">
        <link rel="stylesheet" href="./css/ptiStyles.css">
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        <script defer src="./js/scripts.js"></script>
        <script defer src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <header class="rNav">
        <p><a href="./index.php">BSstrategies Realtor CMS</a></p>
        <ul>
            <li><a href="#">Logout</a></li>
        </ul>
    </header>
    <body>
        <section class="firstSection">
            <div class="aTab">
                <ul>
                    <li><img src="./imgs/BLogoSmall.png" alt=""></li>
                    <a class="<?php active('pageTrafficInfo.php');?>" href="/realtor.bsstrategies.com/panel/includes/pageTrafficInfo.php"><li><i class='bx bxs-info-circle'></i>Page Traffic Info</li></a>
                    <a class="<?php active('listing.php');?>" href="/realtor.bsstrategies.com/panel/includes/listing.php"><li><i class='bx bxs-plus-circle'></i>Add Listing</li></a>
                    <a class="<?php active('rmedit.php');?>" href="/realtor.bsstrategies.com/panel/includes/rmedit.php"><li><i class='bx bxs-x-circle' ></i>Remove/Edit Listing</li></a>
                    <a class="<?php active('ems.php');?>" href="/realtor.bsstrategies.com/panel/includes/ems.php"><li><i class='bx bx-mail-send' ></i>Email Service</li></a>
                    <a class="<?php active('api.php');?>" href="/realtor.bsstrategies.com/panel/includes/api.php"><li><i class='bx bx-key' ></i>API Key</li></a>
                </ul>
            </div>
        </section>
</body>
</html>