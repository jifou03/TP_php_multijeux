Labyrinthe facile à utiliser et à modifier------------------------------------------
Url     : http://codes-sources.commentcamarche.net/source/30414-labyrinthe-facile-a-utiliser-et-a-modifierAuteur  : Arto_8000Date    : 21/08/2013
Licence :
=========

Ce document intitulé « Labyrinthe facile à utiliser et à modifier » issu de CommentCaMarche
(codes-sources.commentcamarche.net) est mis à disposition sous les termes de
la licence Creative Commons. Vous pouvez copier, modifier des copies de cette
source, dans les conditions fixées par la licence, tant que cette note
apparaît clairement.

Description :
=============

Comme le titre le dit c'est un labyrinthe dans lequel on peut se d&eacute;placer
 &agrave; l'aide des fl&egrave;ches situ&eacute;es sur le c&ocirc;t&eacute; (2,4
,6,8) ou pour les navigateurs qui ne supportent pas le event.keyCode il y a des 
boutons dans le bas du script pour se d&eacute;placer. Aussi j'ai int&eacute;gr&
eacute; dans le zip un g&eacute;n&eacute;rateur de labyrinthe qui est aussi faci
le &agrave; utiliser.
<br /><a name='source-exemple'></a><h2> Source / Exemple 
: </h2>
<br /><pre class='code' data-mode='basic'>
&lt;HTML&gt;
&lt;HEAD&gt;

&lt;TITLE&gt;..: Labyrinthe :..&lt;/TITLE&gt;
&lt;SCRIPT language=&quot;javas
cript&quot;&gt;
positionFin = &quot;19,24&quot;
window.status = &quot;Chargeme
nt de la page&quot;
function départ()
{
window.status = &quot;Création des mu
rs&quot;
créemur()
window.status = &quot;Initiation de la case de départ&quot;

document.getElementById(&quot;0,0&quot;).style.backgroundColor = &quot;C80000&
quot;
document.getElementById(&quot;f0,0&quot;).color=&quot;C80000&quot;
docum
ent.form.positionX.value = 0
document.form.positionY.value = 0
window.status =
 &quot;Initiation de la case de la fin&quot;
document.getElementById(positionFi
n).style.backgroundColor = &quot;0AC814&quot;
document.getElementById(&quot;f&q
uot;+positionFin).color = &quot;0AC814&quot;
window.status = &quot;&quot;
}
f
unction move(e)
{
y = document.form.positionY.value*1
x = document.form.posit
ionX.value*1
if (e == 50 &amp;&amp; check(y+1,x))
{
afficher(y+1,x)
}
if (e
 == 54 &amp;&amp; check(y,x+1))
{
afficher(y,x+1)
}
if (e == 56 &amp;&amp; c
heck(y-1,x))
{
afficher(y-1,x)
}
if (e == 52 &amp;&amp; check(y,x-1))
{
af
ficher(y,x-1)
}
}
function check(Y,X)
{
if (document.getElementById(Y+&quot
;,&quot;+X)) return true
else return false
}
function afficher(Y,X)
{
effac
er(document.form.positionY.value,document.form.positionX.value)
document.getEle
mentById(Y+&quot;,&quot;+X).style.backgroundColor = &quot;C80000&quot;
document
.getElementById(&quot;f&quot;+Y+&quot;,&quot;+X).color=&quot;C80000&quot;
docum
ent.form.positionX.value = X
document.form.positionY.value = Y
vérifier()
}

function effacer(Y,X)
{
document.getElementById(Y+&quot;,&quot;+X).style.backg
roundColor = &quot;FFFFFF&quot;
document.getElementById(&quot;f&quot;+Y+&quot;,
&quot;+X).color = &quot;FFFFFF&quot;
}
function créemur()
{
position = new A
rray(&quot;1,1&quot;,&quot;2,2&quot;,&quot;0,1&quot;,&quot;2,1&quot;,&quot;4,0&q
uot;,&quot;4,2&quot;,&quot;5,2&quot;,&quot;4,3&quot;,&quot;2,3&quot;,&quot;2,4&q
uot;,&quot;6,2&quot;,&quot;6,1&quot;,&quot;8,1&quot;,&quot;8,2&quot;,&quot;8,3&q
uot;,&quot;8,4&quot;,&quot;7,4&quot;,&quot;6,4&quot;,&quot;2,6&quot;,&quot;3,6&q
uot;,&quot;4,6&quot;,&quot;5,6&quot;,&quot;6,6&quot;,&quot;7,6&quot;,&quot;4,5&q
uot;,&quot;6,7&quot;,&quot;8,5&quot;,&quot;8,6&quot;,&quot;0,3&quot;,&quot;0,4&q
uot;,&quot;0,5&quot;,&quot;0,6&quot;,&quot;0,7&quot;,&quot;0,8&quot;,&quot;1,8&q
uot;,&quot;2,8&quot;,&quot;3,8&quot;,&quot;4,8&quot;,&quot;6,9&quot;,&quot;7,9&q
uot;,&quot;8,9&quot;,&quot;8,8&quot;,&quot;9,8&quot;,&quot;4,9&quot;,&quot;4,10&
quot;,&quot;4,11&quot;,&quot;5,11&quot;,&quot;6,11&quot;,&quot;6,0&quot;,&quot;9
,3&quot;,&quot;10,3&quot;,&quot;10,4&quot;,&quot;10,5&quot;,&quot;10,6&quot;,&qu
ot;11,6&quot;,&quot;11,7&quot;,&quot;11,8&quot;,&quot;11,9&quot;,&quot;11,10&quo
t;,&quot;10,10&quot;,&quot;10,11&quot;,&quot;9,11&quot;,&quot;8,11&quot;,&quot;1
0,0&quot;,&quot;10,1&quot;,&quot;11,1&quot;,&quot;12,1&quot;,&quot;12,3&quot;,&q
uot;12,4&quot;,&quot;13,4&quot;,&quot;13,5&quot;,&quot;14,1&quot;,&quot;14,2&quo
t;,&quot;14,3&quot;,&quot;14,4&quot;,&quot;15,2&quot;,&quot;16,0&quot;,&quot;16,
1&quot;,&quot;16,2&quot;,&quot;13,7&quot;,&quot;13,8&quot;,&quot;13,9&quot;,&quo
t;13,10&quot;,&quot;13,11&quot;,&quot;13,12&quot;,&quot;12,12&quot;,&quot;14,7&q
uot;,&quot;15,7&quot;,&quot;15,6&quot;,&quot;16,6&quot;,&quot;16,5&quot;,&quot;1
6,4&quot;,&quot;18,1&quot;,&quot;18,2&quot;,&quot;18,3&quot;,&quot;18,4&quot;,&q
uot;18,5&quot;,&quot;18,6&quot;,&quot;19,4&quot;,&quot;4,13&quot;,&quot;5,13&quo
t;,&quot;6,13&quot;,&quot;7,13&quot;,&quot;8,13&quot;,&quot;9,13&quot;,&quot;10,
13&quot;,&quot;19,8&quot;,&quot;18,8&quot;,&quot;17,8&quot;,&quot;17,9&quot;,&qu
ot;16,9&quot;,&quot;15,9&quot;,&quot;17,10&quot;,&quot;18,10&quot;,&quot;18,11&q
uot;,&quot;18,12&quot;,&quot;18,13&quot;,&quot;17,13&quot;,&quot;16,13&quot;,&qu
ot;16,12&quot;,&quot;15,12&quot;,&quot;15,11&quot;,&quot;13,13&quot;,&quot;14,14
&quot;,&quot;13,14&quot;,&quot;10,14&quot;,&quot;11,14&quot;,&quot;1,10&quot;,&q
uot;2,10&quot;,&quot;2,11&quot;,&quot;2,12&quot;,&quot;2,13&quot;,&quot;3,13&quo
t;,&quot;0,12&quot;,&quot;0,14&quot;,&quot;0,15&quot;,&quot;1,15&quot;,&quot;11,
15&quot;,&quot;11,16&quot;,&quot;12,16&quot;,&quot;13,16&quot;,&quot;15,16&quot;
,&quot;16,16&quot;,&quot;16,15&quot;,&quot;17,15&quot;,&quot;18,15&quot;,&quot;1
9,15&quot;,&quot;19,17&quot;,&quot;18,17&quot;,&quot;18,18&quot;,&quot;17,18&quo
t;,&quot;16,18&quot;,&quot;15,18&quot;,&quot;14,18&quot;,&quot;13,18&quot;,&quot
;12,18&quot;,&quot;11,18&quot;,&quot;10,18&quot;,&quot;9,18&quot;,&quot;9,17&quo
t;,&quot;9,16&quot;,&quot;8,16&quot;,&quot;8,15&quot;,&quot;7,15&quot;,&quot;6,1
5&quot;,&quot;5,15&quot;,&quot;5,14&quot;,&quot;2,15&quot;,&quot;3,15&quot;,&quo
t;3,16&quot;,&quot;3,17&quot;,&quot;4,17&quot;,&quot;5,17&quot;,&quot;6,17&quot;
,&quot;6,18&quot;,&quot;7,18&quot;,&quot;3,19&quot;,&quot;4,19&quot;,&quot;4,20&
quot;,&quot;5,20&quot;,&quot;6,20&quot;,&quot;7,20&quot;,&quot;8,20&quot;,&quot;
9,20&quot;,&quot;10,20&quot;,&quot;11,20&quot;,&quot;12,20&quot;,&quot;10,21&quo
t;,&quot;10,22&quot;,&quot;11,22&quot;,&quot;12,22&quot;,&quot;13,22&quot;,&quot
;14,22&quot;,&quot;14,21&quot;,&quot;14,20&quot;,&quot;15,20&quot;,&quot;16,20&q
uot;,&quot;17,20&quot;,&quot;18,20&quot;,&quot;17,21&quot;,&quot;17,22&quot;,&qu
ot;18,22&quot;,&quot;19,22&quot;,&quot;15,22&quot;,&quot;1,17&quot;,&quot;1,18&q
uot;,&quot;1,19&quot;,&quot;1,20&quot;,&quot;1,21&quot;,&quot;1,23&quot;,&quot;0
,23&quot;,&quot;2,21&quot;,&quot;2,22&quot;,&quot;2,23&quot;,&quot;3,22&quot;,&q
uot;5,22&quot;,&quot;5,23&quot;,&quot;5,24&quot;,&quot;7,21&quot;,&quot;7,22&quo
t;,&quot;7,23&quot;,&quot;9,22&quot;,&quot;10,24&quot;,&quot;12,23&quot;,&quot;1
4,24&quot;,&quot;16,24&quot;,&quot;15,22&quot;,&quot;18,23&quot;)
pos = positio
n
for (i=0;i&lt;position.length;i++)
{
pos[i] = pos[i].split(&quot;,&quot;)

if (check(pos[i][0],pos[i][1]))
{
document.getElementById(position[i]).style.b
ackgroundColor = &quot;000000&quot;
document.getElementById(&quot;f&quot;+posit
ion[i]).color = &quot;000000&quot;
document.getElementById(position[i]).id = &q
uot;&quot;
}
}
}
function vérifier()
{
if (document.form.positionY.value+&
quot;,&quot;+document.form.positionX.value == positionFin)
{
alert(&quot;Vous 
avez gagné !&quot;)
}
}
&lt;/SCRIPT&gt;
&lt;/HEAD&gt;
&lt;BODY onload=&quot
;départ()&quot; onkeypress=&quot;move(event.keyCode)&quot;&gt;
&lt;FORM name=&q
uot;form&quot;&gt;
&lt;INPUT type=&quot;hidden&quot; name=&quot;hauteur&quot;&g
t;
&lt;INPUT type=&quot;hidden&quot; name=&quot;largeur&quot;&gt;
&lt;INPUT ty
pe=&quot;hidden&quot; name=&quot;positionX&quot;&gt;
&lt;INPUT type=&quot;hidde
n&quot; name=&quot;positionY&quot;&gt;
&lt;/FORM&gt;
&lt;SCRIPT&gt;
window.st
atus = &quot;Chargement du labyrinthe&quot;
hauteur = 20
largeur = 25
backgco
lor = &quot;FFFFFF&quot;
code =&quot;&lt;TABLE border='0'&gt;&lt;TR&gt;&quot;

for (i=0;i&lt;largeur+2;i++)
{
code+=&quot;&lt;TD bgcolor='000000'&gt;&lt;/TD&
gt;&quot;
}
code+=&quot;&lt;/TR&gt;&quot;
for (i=0;i&lt;hauteur;i++)
{
code
 +=&quot;&lt;TR&gt;&lt;TD bgcolor='000000'&gt;&lt;/TD&gt;&quot;
for (x=0;x&lt;l
argeur;x++)
{
code += &quot;&lt;TD id='&quot;+i+&quot;,&quot;+x+&quot;' bgcolo
r='&quot;+backgcolor+&quot;'&gt;&lt;FONT color='&quot;+backgcolor+&quot;' id='f&
quot;+i+&quot;,&quot;+x+&quot;'&gt;---&lt;/FONT&gt;&lt;/TD&gt;&quot;
}
code+=&
quot;&lt;TD bgcolor='000000'&gt;&lt;/TD&gt;&lt;/TR&gt;&quot;
}
code+=&quot;&lt
;TR&gt;&quot;
for (i=0;i&lt;largeur+2;i++)
{
code+=&quot;&lt;TD bgcolor='0000
00'&gt;&lt;/TD&gt;&quot;
}
code+=&quot;&lt;/TR&gt;&quot;
code+=&quot;&lt;/TAB
LE&gt;&quot;
document.write(code)
document.form.hauteur.value = hauteur
docum
ent.form.largeur.value = largeur
&lt;/SCRIPT&gt;
&lt;FORM&gt;           &lt;IN
PUT type=&quot;button&quot; value=&quot;Haut&quot; onclick=&quot;move(56)&quot;&
gt;&lt;BR&gt;&lt;INPUT type=&quot;button&quot; value=&quot;Gauche&quot; onclick=
&quot;move(52)&quot;&gt;&lt;INPUT type=&quot;button&quot; value=&quot;Droite&quo
t; onclick=&quot;move(54)&quot;&gt;&lt;BR&gt;            &lt;INPUT type=&quot;bu
tton&quot; value=&quot;Bas&quot; onclick=&quot;move(50)&quot;&gt;&lt;/FORM&gt;

Vous devez vous rendre à la case verte.
&lt;/BODY&gt;
&lt;/HTML&gt;
</pre>
<
br /><a name='conclusion'></a><h2> Conclusion : </h2>
<br />Voici le principe 
de mon script :
<br />- Premi&egrave;rment il cr&eacute;e un tableau vide avec 
les dimensions voulues.
<br />- Deuxi&egrave;ment il cr&eacute;e les murs ( enl
&egrave;ve le id des cases et les mets de couleur )
<br />- Troisi&egrave;ment 
lorsque l'on se d&eacute;place si il ne trouve pas l'object vers lequel il se d&
eacute;place il ne bouge pas, donc si on a enlev&eacute; le id o&ugrave; il y a 
des murs il ne peut pas se d&eacute;placer sur le mur.
<br />
<br />Test&eacut
e; sur :
<br />- Internet Explorer
<br />- Modzilla
<br />- Netscape
<br />-
 Firefox
<br />- Op&eacute;ra
