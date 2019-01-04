<?php
/**
 * Created by PhpStorm.
 * User: nakrulic
 * Date: 24/11/18
 * Time: 10:06
 */

require_once('models/connection.php');

require_once('DAL/ArticleGateway.php');

require_once('DAL/UserGateway.php');

$dsn ='mysql:host=localhost;dbname=dbnakrulic';

$user = "root";
$password = "";

$db = new Connection($dsn,$user,$password);

$gtA = new ArticleGateway($db);

$gtU = new UserGateway($db);



$query= 'SELECT * FROM News';
$stmt=$db->executeQuery($query);
$resultat= $db->getResultsTableau();

foreach ($resultat as $row)
    print($row['id_article'] . ' - ' . $row['titre'] . ' - ' . $row['date_publication'] . '<br/>' . $row['article'] . '<br/><br/>');

print('<hr>');
/*
function insert($id,$titre,$article,$date)
{
    $dsn ='mysql:host=localhost;dbname=dbnakrulic';
    $user = "nakrulic";
    $password = "achanger";
    $db = new Connection($dsn,$user,$password);
    $query = 'INSERT INTO News VALUES (:id,:titre,:article,:date)';
    $db->executeQuery($query,array(':id'=> array($id,PDO::PARAM_INT),
        ':titre'=> array($titre,PDO::PARAM_STR),
        ':article'=> array($article,PDO::PARAM_STR),
        ':date'=> array($date,PDO::PARAM_STR),
        ));
}
*/
/*
$query = 'INSERT INTO News VALUES (:id,:titre,:article,:date)';
print('<hr>');

$db->executeQuery($query,array(':id'=> array(6,PDO::PARAM_INT),
    ':titre'=> array("titre 654 654 ",PDO::PARAM_STR),
    ':article'=> array("jrjlkjlmjlmk55555",PDO::PARAM_STR),
    ':date'=> array("2018-11-28",PDO::PARAM_STR),
));
//insert(4,"Bnjour tout le modne","OSEF","2018-11-28");

$query= 'SELECT * FROM News';
$stmt=$db->executeQuery($query);
$resultat=$db->getResultsTableau();




foreach ($resultat as $row)
    print($row['id_article'] . ' - ' . $row['titre'] . ' - ' . $row['date_publication'] . '<br/>' . $row['article'] . '<br/><br/>');

*/

print('<br/> <h1>SELECTION DE LIGNE SIMPLE </h1>');



/*
$query= 'SELECT * FROM News where date_publication=?';
$stmt=$db->executeQuery($query,
    [1=>["2018-11-28",PDO::PARAM_STR]]
    );
$resultat= $db->getResultsTableau();


foreach ($resultat as $row)
    print($row['id_article'] . ' - ' . $row['titre'] . ' - ' . $row['date_publication'] . '<br/>' . $row['article'] . '<br/><br/>');*/

//$gt->insert("Bnjour tout le modne","OSEF","2018-11-28");

//$gt->Update(4,"NOUVEAU TITRE MDR !","ARTICLE MIS A JOUR");

$result = $gtU->FindAll();
foreach ($result as $row)
    print($row['id_user'] . ' - ' . $row['nom'] . ' - ' . $row['prenom'] . '<br/>' . $row['pseudo'] . '<br/>' . $row['mail'] . '<br/><br/>');






