<?php
    if (isset($_POST['mot_de_passe']) ==  "kangourou")
    {

    ?>
        <p>Bravo tu as trouvé</p>
        <?php
    }
    else
    {
        echo '<p>Mot de passe incorrect</p>';
    }
    ?>
