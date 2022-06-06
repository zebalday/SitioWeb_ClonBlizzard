<?php
require_once './Usuario.php';

class BD{

    // ---------------- Atributos ----------------

    private $server = "localhost";
    private $user = "root";
    private $pwd = "";
    private $bd = "bleezzard";
    private mysqli $connection;

    // ---------------- Constructor ----------------

    public function __construct(){ } 

    
    // ---------------- Métodos CRUD ----------------

    public function setConnection(){
        try{
            $this->connection = new mysqli($this->server, $this->user, $this->pwd, $this->bd);
        }
        catch (Exception $ex){ 
            $this->connection = null;
            echo "ERROR: $ex->getMessage()";
        }
        return $this->connection;

    }

    public function addUser(Usuario $user){

        $this->connection = $this->setConnection();
        try{
            $queryInsert = "INSERT INTO `usuario` (`id_usu`, `nom_usu`, `apl_usu`, `dia_usu`, `mes_usu`, `aio_usu`, `cor_usu`, `con_usu`, `pas_usu`, `pre_usu`, `res_usu`) VALUES (NULL, '".$user->getNombre()."', '". $user->getApellido() ."', '". $user->getDia() ."', '". $user->getMes() ."', '". $user->getAno() ."', '". $user->getCorreo() ."', '". $user->getPass() ."', '". $user->getPais() ."', '". $user->getPregunta() ."', '". $user->getRespuesta() ."')";
            $resultado = mysqli_query($this->connection, $queryInsert);
        }      
        catch(Exception $ex){
            echo "<p>ERROR: $ex->getMessage()</p>";
            $resultado = null;
        }
        return $resultado;
    }

    public function deleteUser(Usuario $user){

        $this->connection = $this->setConnection();
        try{
            $queryDelete = "DELETE FROM `usuario` WHERE `cor_usu` = '". $user->getCorreo()."'";
            echo $queryDelete;
            $resultado = mysqli_query($this->connection, $queryDelete);
        }
        catch(Exception $ex){
            echo "<p>ERROR: $ex->getMessage()</p>";
            $resultado = null;
        }
        return $resultado;
    }

    public function updateUser(Usuario $user){

        $this->connection = $this->setConnection();
        try{
            $queryUpdate = "UPDATE `usuario` SET `nom_usu` = '". $user->getNombre() ."', `apl_usu` = '". $user->getApellido() ."', `dia_usu` = '". $user->getDia() ."', `mes_usu` = '". $user->getMes() ."', `aio_usu` = '". $user->getAno() ."', `con_usu` = '". $user->getPass() ."', `pas_usu` = '". $user->getPais() ."', `pre_usu` = '". $user->getPregunta() ."', `res_usu` = '". $user->getRespuesta() ."' WHERE `usuario`.`cor_usu` = '". $user->getCorreo() ."'";
            $resultado = mysqli_query($this->connection, $queryUpdate);
        }
        catch(Exception $ex){
            echo "<p>ERROR: $ex->getMessage()</p>";
            $resultado = null;
        }
        return $resultado;
    }

    // SE BUSCA A TRAVÉS DEL CORREO YA QUE ES EL ÚNICO CAMPO UNIQUE
    public function searchUser(Usuario $user){

        $this->connection = $this->setConnection();
        try{
            $querySearch = "SELECT * FROM `usuario` WHERE `cor_usu` = '". $user->getCorreo() ."'";
            $resultado = mysqli_query($this->connection, $querySearch);
        }
        catch(Exception $ex){
            echo "<p>ERROR: $ex->getMessage()</p>";
            $resultado = null;
        }
        return $resultado;
    }


    // ------------------- METODOS PARA EL FUNCIONAMIENTO DE LA PAGINA -------------------

    public function llenarPaises(){

        $this->connection = $this->setConnection();
        try{
            $querySelect = "SELECT * FROM pais";
            $resultado = $this->connection->query($querySelect);
            while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                echo "<option value=".$fila['nom_pas'].">".$fila['nom_pas']."</option>";
            }
        }
        catch(Exception $ex){
        }
    }

    public function llenarPreguntas(){

        $this->connection = $this->setConnection();
        try{
            $querySelect = "SELECT * FROM pregunta";
            $resultado = $this->connection->query($querySelect);
            while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
                echo "<option value=".$fila['val_pre'].">".$fila['val_pre']."</option>";
            }
        }
        catch(Exception $ex){
        }
    }



}


?>