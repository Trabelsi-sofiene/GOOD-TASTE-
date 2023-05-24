<?php

session_start();

if (isset($_SESSION["user_id"])) {

    $mysqli = require __DIR__ . "/database.php";

    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";

    $result = $mysqli->query($sql);

    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Contact.css" />
    <title>CONTACT|GOOD TASTE </title>
    <link rel="shortcut icon" href="./assets/logo.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
</head>

<body>

    <a href="Home.html">Home</a>

    <?php if (isset($user)): ?>

        <p>Hello
            <?= htmlspecialchars($user["name"]) ?>
        </p>

       

    <?php else: ?>

        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>

    <?php endif; ?>

    <div class="main_bg">
        <div class="form">
            <div class="form-text">
                <h1>BOOK NOW </h1>
                <p>Fill this form to book your Table</p>
            </div>
            <div class="main-form">
                <form action="reserve.php" method="POST" >
                    <div>
                        <span>Your full name ?</span>
                        <input type="text" name="fullname" id="fullname" placeholder="Write your name here..." required>
                    </div>
                    <div>
                        <span>Your email address ?</span>
                        <input type="email" name="email" id="email" placeholder="Write your email here..." required>
                    </div>
                    <div>

                        <span>How many people ?</span>
                        <select name="people" id="people" required>
                            <option value=""><---People---></option>
                            <option value="1">1 People</option>
                            <option value="2">2 People</option>
                            <option value="3">3 People</option>
                            <option value="4">4 People</option>
                            <option value="5">5 People</option>
                            <option value="6">6 People</option>
                            <option value="7">7 People</option>
                            <option value="8">8 People</option>
                            <option value="9">9 People</option>
                            <option value="10">10 People</option>
                        </select>

                    </div>
                    <div>
                        <span>What time ?</span>
                        <select name="hour" id="hour" placeholder="Select Hour">
                            <option value="hour-select" id="select-hour">Select Hour</option>
                            <option value="10">10: 00</option>
                            <option value="10">12: 00</option>
                            <option value="10">14: 00</option>
                            <option value="10">16: 00</option>
                            <option value="10">18: 00</option>
                            <option value="10">20: 00</option>
                            <option value="10">22: 00</option>
                        </select>
                    </div>
                    <div>
                        <span>What is the date ?</span>
                        <input type="date" name="date3" id="date3" placeholder="date" required>
                    </div>
                    <div>
                        <span>Your phone number ?</span>
                        <input type="number" name="numberp" id="numberp" placeholder="Write your number here..." required>
                    </div>
                    <div id="submit">
                        <input type="submit" value="SUBMIT" id="submit">
                    </div>


                </form>
            </div>
        </div>
    </div>


    
</body>

</html>