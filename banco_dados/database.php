 <!-- Função que conecta com o banco de dados e retorna a conexão com o banco ou false -->
 <?php

function conectDb() {
    $user="root";
    $pass="aluno";
    $database="crud";
    $host="localhost";

    $db= new PDO( "mysql:host=$host;dbname=$database",  $user,password:$pass);
    $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



    if ($db) {
        return $db;
    }
    else {
        return false;
    }

}

function check_conn($conn_id): void{
    if ($conn_id ) {
        echo "Conexão feita";
}
    else {
        echo "Erro na conexão";
}
}
//var_dump(conectDb());
//check_conn( conectDb());

 ?>