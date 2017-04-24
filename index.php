<!DOCTYPEhtml>
<html>
<head>
  <meta charset="utf-8"/>
  <a href= index.php?batiment=12&salle=101&semaine=12&langage=PHP&serveur=LAMP&dateDebut=2/05/2016&dateFin=27/11/2016&age=12&nom=Nemare&prenom=Jean></a>
</head>
<body>
<p><?php
echo "<br>", $_GET['nom'];
echo "<br>", $_GET['prenom'];
 ?></p>
 <p><?php
echo $_GET['age'];
  ?></p>
  <p><?php
echo "<br>", $_GET['dateDebut'];
echo "<br>", $_GET['dateFin'];
   ?></p>
  <p><?php
echo "<br>", $_GET['langage'];
echo "<br>", $_GET['serveur'];
  ?></p>
  <p><?php
echo "<br>", $_GET['semaine'];
  ?></p>
  <p><?php
echo "<br>", $_GET['batiment'];
echo "<br>", $_GET['salle'];
  ?></p>
</body>
</html>
