<?php include "meta.php"; ?>


<main id="main">


        <div id="menu-center">
            <form method="post">
                Gebruikersnaam: <br><input type="text" class="invoer" name="gebruikersnaam"> <br/>
                Wachtwoord:     <br><input type="password" class="invoer" name="wachtwoord"><br/>
            <input type="submit" name="submit" value="Inloggen"><br/>
        </form>
            <?php


            if(!isset($_SESSION)){
                session_start();
            }
            // Inloggen en uniek check
            if(isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])){
                $user = $_POST['gebruikersnaam'];
                $wachtwoord = md5($_POST['wachtwoord']);
                $result = $database->execute("SELECT * FROM users WHERE username = '$user' AND password = '$wachtwoord'");
                echo "<pre>";
                print_r($result);
                echo "</pre>";

                if(count($result)== 1) {
                    $_SESSION["ID"] = $result[0]['ID'];
                    $user = database::user($_SESSION['ID']);

                    echo "<br />Login Succes";
//                    header('Location: '. $_SERVER['HTTP_REFERER']);


                }else{
                    echo "<br />Login Failed";
                }
            }

            ?>

        </div>
    </main>


</body>
</html>
