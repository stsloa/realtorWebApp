<!DOCTYPE html>
<html>
    <head>
        <title>Panel</title>
        <link rel="stylesheet" href="./css/styles.css">
        <script defer src="./js/scripts.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <header class="rNav">
        <p>Realtor Name</p>
        <ul>
            <li><a href="#">Logout</a></li>
        </ul>
    </header>
    <body>
        <section class="firstSection">
            <div class="firstSectionDiv">
                <div class="porfolioPic">
                    <div>
                    
                    </div>
                </div>
                <div class="portfolioText">
                    <div class="heading">
                        <p>Your Name</p>
                    </div>
                    <form action="#" method="POST">
                        <label for="fname">First name:</label>
                        <input type="text" id="fname" name="fname">
                        <label for="lname">Last name:</label>
                        <input type="text" id="lname" name="lname">
                        <input type="submit" name="Update" id="sub">
                    </form>
                    <div class="heading">
                        <p>Portfolio Description</p>
                    </div>
                    <div class="portfolioDesc">
                    <form action="#" method="POST">
                        <textarea id="w3review" name="w3review"></textarea>
                        <input type="submit" name="Update" id="update">
                    </form>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>