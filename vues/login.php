<?php
    include("./vues/header.php");
    include("./vues/menu.php");
?>
        <section>
            <h1>Se connecter</h1> 
            <h4>Veuillez vous identifier ou vous inscrire</h4>
            <form id='login-form' action="" method='GET' action="#?Connexion=ok" method='post'>
                <input type="text" placeholder="Username" required>
                <input type="password" placeholder="Password" required>
                <button type='submit'>Connexion</button>
            </form>
        </section>

<?php
    include("vues/footer.php");
?>
