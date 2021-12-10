<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
    </head>
    <body>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="verification.php" method="POST">
                <h1>Connexion</h1>
                
                <label><b>Nom d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    
                }
                ?>
            </form>
        </div>
        <div id="container" >
            <form action="inscription.php" method="post">
                <h1>Inscription</h1>
                <input type="text" name="fullname" placeholder="e.g John Doe"><hr>
                <input type="mail" name="mail" placeholder="johndoe@email.com"><hr>
                <input type="password" name="password" placeholder="type password here"><br>
                <input type="password" name="cpassword" placeholder="confirm password"><br>
                <button type="submit" name="submit">submit form</button>
            </form>
        </div>
    </body>
</html>