<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">

<head>
	<title>ERREUR</title>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
	<meta name="author" content="Cyril Bataillie" />
	<meta name="copyright"	content="Copyright 2016 Bataillie Cyril" />	
	<meta name="keywords" content="Prepa PSI; fiches PSI; fiches CPGE; PCSI; PSI; Maths SPE" />
	<meta name="description" content="L'essentiel de la SPE en fiches et en programmes calculatrice" />
	<link rel="icon" type="image/png" href="style/icon.ico" />
	<link rel="stylesheet" type="text/css" href="http://prepa.psi.free.fr/style/style.css" />
	<link rel="stylesheet" type="text/css" href="http://prepa.psi.free.fr/style/orange.css" />
</head>

<body>
  <div id="main">
  
<!-- Liens utiles -->  
    <div id="links">
      <em style="text-decoration:underline">Liens utiles</em> : <a href="https://tiplanet.org/forum/portal.php"  target="_blank">TI-Planet</a> | <a href="http://lavau.pagesperso-orange.fr/psipc.htm"  target="_blank">Cours de maths PSI</a> | <a href="http://www.myprepa.fr/concours/prepas-scientifiques"  target="_blank">My Prepa (Prépa en ligne)</a>
    </div>
    
<!-- En-tête -->    
    <div id="logo"><h1>Prepa PSI</h1><h2>&quot;L'essentiel de la SPE en fiches et en programmes calculatrice&quot;</h2></div>
    <div id="menu">
      <ul>
        <li><a href="http://prepa.psi.free.fr">Accueil</a></li>
        <li><a href="http://prepa.psi.free.fr/">Mathématiques</a></li>
        <li><a href="http://prepa.psi.free.fr/">Physique</a></li>
        <li><a href="http://prepa.psi.free.fr/">Chimie</a></li>
        <li><a href="http://prepa.psi.free.fr/">Sciences de l'Ingénieur</a></li>
        <li><a href="http://prepa.psi.free.fr/">Contact et Avis</a></li>
      </ul>
    </div>
    

    <div id="content">    
<!-- Corps de la page -->     
      
      <div id="column2">
        <h1>Erreur <?php  echo $_GET['erreur']  ?></h1>
        <p style="text-align:center">
    	    <img src="http://prepa.psi.free.fr/style/erreur.png" width="500" /><br/>

<?php
switch($_GET['erreur'])
{
   case '400':
   echo 'Échec de l\'analyse HTTP.';
   break;
   case '401':
   echo 'Le pseudo ou le mot de passe n\'est pas correct !';
   break;
   case '402':
   echo 'Le client doit reformuler sa demande avec les bonnes données de paiement.';
   break;
   case '403':
   echo 'Requête interdite !';
   break;
   case '404':
   echo 'La page n\'existe pas ou plus !';
   break;
   case '405':
   echo 'Méthode non autorisée.';
   break;
   case '500':
   echo 'Erreur interne au serveur ou serveur saturé.';
   break;
   case '501':
   echo 'Le serveur ne supporte pas le service demandé.';
   break;
   case '502':
   echo 'Mauvaise passerelle.';
   break;
   case '503':
   echo ' Service indisponible.';
   break;
   case '504':
   echo 'Trop de temps à la réponse.';
   break;
   case '505':
   echo 'Version HTTP non supportée.';
   break;
   default:
   echo 'Erreur !';
}
?>

<br />
<br />
	<a href="http://prepa.psi.free.fr">Retour a l'accueil</a>
        </p>
        
        
        
        
        
        
        
        
        
        
    <div id="footer">
      Copyright &copy; 2016 Cyril Bataillie | <a href="http://validator.w3.org/check?uri=referer" target="_blank">XHTML</a> | <a href="http://jigsaw.w3.org/css-validator/check/referer" target="_blank">CSS</a> | <a href="http://www.dcarter.co.uk" target="_blank">design inspiré par dcarter (free template)</a>
    </div>
  </div>
</body>
</html>








</body>
</html>