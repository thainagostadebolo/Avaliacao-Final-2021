<?php
//------------------CONEXAO-------------//
//$host = 'localhost';
$pdo = new PDO("mysql:dbname=CRUDPDO;host=localhost,"root","")
try{

} catch(Exception $e){
echo "Erro com banco de dados: ".$e->getMessage();

}
catch(Exception $e)
{
    echo "Erro generico: ".$e->getMessage();;
}
//---------------INSERT-----------//
$pdo->prepare("INSERT INTO DISCO(id, titulo, cantor) VALUES(:n, :t, :e)");
$res->bindValue(":n","1");
$eres->bindValue(":t", "shakira");
$eres->bindValue(":e","shakira");
$eres->execute();

//$pdo->query("INSERT INTO DISCO(id, titulo, cantor) VALUES('Miriam', '00000000', 'teste@gmail.com')");//


//---------------------- DELETE E UPDATE ------------//
$res= $pdo->prepare("DELETE FROM DISCO WHERE id = :id");
$id= 2;
$cmd-> bindValue(":id", $id);
$cmd->execute();

//ou
$res= $pdo->query("DELETE FROM DISCO WHERE id = '3'");
 $cmd=$pdo->prepare("UPDATE DISCO SET titulo= :e WHERE id= :id");
 $cmd->bindValue(":e", "Shakira");
 $cmd->bindValue(":id",1);
 $cmd->execute();

 $res= $pdo->query("UPDATE DISCO SET titulo= Demi WHERE id = '4'");

//---------------------SELECT---------------//
$cmd= $pdo->prepare("SELECT * FROM DISCO WHERE id = :id");
$cmd->bindValue(":id",4);
$cmd-execute();
$resultado = $cmd->fetch(PDO:: FETCH_ASSOC);
foreach($variable as $key => $value){
    echo $key.":".$value."<br>";
}



?>