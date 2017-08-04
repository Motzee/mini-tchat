<h1>Mini-tchat, bienvenue</h1>

<form id="accesTchat" method="POST" action="tchat.php">
    <p><label for="pseudo" required>Pseudo :</label><br/>
        <input id="pseudo"  name="pseudo" type="text" maxlength="31" required /></p>
    
    <p><label for="motdepasse">Mot de passe :</label><br/>
        <input id="motdepasse"  name="motdepasse" type="text" /></p>
    
    <p><label for="salon">Salon de discussion :</label><br/>
        <select name="salon" id="salon">
            
        </select>
    </p>
    
    <p><input id="btnTchat" class="btnValid" type="submit" value="Tchatter" /></p>
</form>

<p id="infosAcces">Il n'est pas nécessaire d'indiquer un mot de passe. Cependant, en créant un compte ou en t'identifiant, tu pourras te réserver l'usage d'un pseudo régulier, en choisir la couleur et accéder à des salons réservés.</p>

<?php
/*

    
        <?php
        if(isset($user)) {
            echo 'Bienvenue '.$user->getPseudo() ;
        } else {
        ?>
        

        
        <?php
        }
        ?>
    
        
            <?php
                $listingSalonsC = $dbMinitchat->recupListeSalons() ;
                foreach($listingSalonsC as $objet) {
                    echo "<option value=".$objet->getIdSalon().">".$objet->getNomSalon()."</option>" ;
                }
                ?>
            </select>
        </p>
        
</form>


*/