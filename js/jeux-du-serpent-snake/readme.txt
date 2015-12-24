Jeux du serpent snake---------------------
Url     : http://codes-sources.commentcamarche.net/source/100226-jeux-du-serpent-snakeAuteur  : kazmaDate    : 11/11/2013
Licence :
=========

Ce document intitulé « Jeux du serpent snake » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

un jeux bien connue celui du serpent qui grandi en mangeant des pommes
<br />

<br />il y a  deux scripts un qui fonction avec le dom donc directement dans la 
page l'autre fonctionne dans un canvas
<br />
<br />pour la technique j'utilis
e deux array qui detiennes la position en x et y de la tete du serpent et qui gr
andis a chaque gobage de pommes en conservant l'ancienne position et donc a chaq
ue deplacement je fait un ajout de la nouvelle position et un retrait de la dern
iere position ce qui, apour effet d'operer un decalage des position, un troisiem
e array contient une reference de chaque div contenant une portion du corp et la
 tete du serpent la position des elements de cette array reste fixe et donc en p
arcourant le array en meme temp que les autre avec une boucle chaque div pendra 
les anciennes positions de la tete qui est en quelque sorte le meneur   
<br />

<br />sinon il y a la gestion classique des colision, une gestion de la rotati
on des div avec le style transforme rotate du css3 et l'utilisation de la balise
 audio quand le serpent mange la pomme.
