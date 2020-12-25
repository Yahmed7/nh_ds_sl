<?php 
 
 $requete = "SELECT * FROM article ORDER BY Date"; 
 if ($resultat = mysqli_query($connect,$requete)) { 
    /* fetch le tableau associatif */ 
    while ($ligne = mysqli_fetch_assoc($resultat)) { 
       $dt_debut = date_create_from_format('Y-m-d H:i:s', $ligne['Date']); 
       echo "<h3 align=center>".$ligne['Titre']."</h3>"; 
       echo "<h4 align=center>Le ".$dt_debut->format('d/m/Y H:i:s')."</h4>"; 
       echo "<div>".$ligne['Commentaire']." </div>"; 
       if ($ligne['Photo'] != "") { 
          echo "<img src='photos/".$ligne['Photo']."' width='400px' height='400px' align='center'/>"; 
       } 
       echo "<hr />"; 
    } 
 } 
 ?>