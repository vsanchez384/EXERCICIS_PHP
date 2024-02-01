# EXERCICIS CONNEXIÓ A BD

1 - Crea una base de dades anomenada CLIENT i crea una taula CLIENT amb els camps id autonumeric, nom, llinatge1, llinatge2, email. Fes un programa amb PHP que faci un insert a aquesta taula de valors fixes que posaràs directament al programa. La base de dades i la taula l’has d’haver creada des del PHPMyAdmin / Workbench. 

2 - Fes un formulari que reculli el nom, llinatge1, llinatge2 i email d’un client. Quan l’usuari cliqui enviar, s’ha de recarregar el mateix formulari i s’ha de fer un insert a la taula client amb els valors del formulari. Per fer-ho has d’emprar l’exercici5 de exercicis formularis bàsics i l’exercici anterior1 d’aquest mateix bloc.

3 - Fes un programa consulta.php que consulti els clients de la base de dades i els mostri dins una taula HTML.

4 - Prova els arxius 8_delete.php i 9_update.php que vos he passat . Modifica’ls perque enlloc de modificar o borrar registres de la taula MyGuests, ho faci de la vostra taula CLIENT. 

5 - Crea una classe CLIENT amb els mètodes de: alta, baixa, modificació, consulta. Cada un d’aquests mètodes ha de fer la inserció, baixa, modifcació i consulta a la taula CLIENT. Veure exemple que vos he passat a MySQLDatabase (tot l’apartat). 

6 - Canvia el formulari de l’exercici2 perque enlloc de fer l’insert directe crida al mètode inserir de la classe CLIENT. 
Al formulari hem de posar: 

> $client = new Client();
> $client -> inserir($servername,$username,$password,$name,$email);

> Per poder fer això haureu hagut de fer un include “classe_client.php” al fitxer del formulari

7 - Canvia l’exercici3 perque empri aquesta classe CLIENT fent ús del mètode consulta de la classe CLIENT tal com has fet a l’exercici6 amb el mètode inserir.