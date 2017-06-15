<?php include "meta.php"; ?>


<main id="main">

    <div id="menu-center">
    <form method="post">
        Gebruikersnaam:* <br/>
        <input type="text" class="input" name="username">
        <br/>
        Wachtwoord:* <br/>
        <input type="password" class="input" name="password">
        <br/>
        Herhaal wachtwoord:* <br/>
        <input type="password" class="input" name="confirmpass">
        <br/>
        E-mail adres:* <br/>
        <input type="text" class="input" name="email">
        <br/>
        Voornaam:* <br/>
        <input type="text" class="input" name="name">
        <br/>
        Achternaam:* <br/>
        <input type="text" class="input" name="surname">
        <br/>
        Geboortedatum: <br/>
        <input type="date" id="date" class="invoer" name="birthdate">
        <br/>
        <input type="submit" id="submit" name="Submit">
    </form>
    </div>

</main>

<?php

// Formulier controle
if(isset($_POST['username'])
    && !empty($_POST['username'])
    && !empty($_POST['password'])
    && !empty($_POST['confirmpass'])
    && !empty($_POST['email'])
    && !empty($_POST['name'])
    && !empty($_POST['surname'])
    && !empty($_POST['birthdate']))

    {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmpass = $_POST['confirmpass'];
    $email = $_POST['email'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $birthdate = $_POST['birthdate'];
    $sqldate = date('Y-m-d', strtotime($birthdate));


     if (preg_match('/\@/', $email) && preg_match('/\./', $email)) {

            if ($password === $confirmpass) {

//        Check if the password contains the right characters

                if (preg_match('/[\!\@\#\$\%\^\&\*\(\)]/', $password) && preg_match('/[123456789]/', $password) && preg_match('/[abcdefghijklmopqrstuvwxyz]/', $password) && preg_match('/[ABCDEFGHIJKLMOPQRSTUVWXYZ]/', $password)) {

//        Hashing password to md5

                $password = md5($password);
                $confirmpass = md5($confirmpass);

//        Query insertion

                $result = $database->execute_no_fetch("INSERT INTO users (username,password,email,name,surname,birthdate) VALUES ('$username','$password','$email','$name','$surname','$sqldate')");
                } else {
                echo "Your password must contain a capital, small letter, special character and a number";
              }
            } else {
            echo "Your confirmation password isn't the same as your password";
          }
     } else {
             echo "Your e-mail isn't legit";
         }
    } else {
        echo "Fill in the required fields";
}

?>




</body>
</html>