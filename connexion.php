<?php
    session_start();
    $titre = 'Brain Fight - Connexion';
    include("includes/connBD.php");
    include("includes/entetepage.php");
?>
		<div clas="choixConnexion">
			<a href="seConnecter.php"> <img src="image/seconnecter.jpg" class="imgSeConnecter"> </a>
			<a href="sInscrire.php"> <img src="image/sinscrire.jpg" class="imgSinscrire"> </a>
			<a href="Invite.php"> <img src="image/invite.jpg" class="imgInvite"> </a>
		</div>
    </body>
</html>