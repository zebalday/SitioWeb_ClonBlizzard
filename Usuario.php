<?php

class Usuario{

    // ------------- ATRIBUTOS -------------

    private $nombre;
    private $apellido;
    private $dia_nac;
    private $mes_nac;
    private $ano_nac;
    private $correo;
    private $pwd;
    private $pais;
    private $pregunta;
    private $respuesta;
    

    // ------------- CONSTRUCTOR -------------

    public function __construct(){}

    public function __construct1($Nom, $Ap, $Dia, $Mes, $Ano, $Cor, $Pwd, $Pais, $Pre, $Res){

        $usuario = new Usuario();
        $usuario->setNombre($Nom);
        $usuario->setApellido($Ap);
        $usuario->setDia($Dia);
        $usuario->setMes($Mes);
        $usuario->setAno($Ano);
        $usuario->setCorreo($Cor);
        $usuario->setPass($Pwd);
        $usuario->setPais($Pais);
        $usuario->setPregunta($Pre);
        $usuario->setRespuesta($Res);
        return $usuario;
    }

    public function __construct2($Correo, $Password){
        
        $usuario = new Usuario();
        $usuario->setCorreo($Correo);
        $usuario->setPass($Password);
        return $usuario;
    }


    // ------------- GETTERS -------------

    public function getNombre(){return $this->nombre;}
    public function getApellido(){return $this->apellido;}
    public function getDia(){return $this->dia_nac;}
    public function getMes(){return $this->mes_nac;}
    public function getAno(){return $this->ano_nac;}
    public function getCorreo(){return $this->correo;}
    public function getPass(){return $this->pwd;}
    public function getPais(){return $this->pais;}
    public function getPregunta(){return $this->pregunta;}
    public function getRespuesta(){return $this->respuesta;}


    // ------------- SETTERS -------------

    public function setNombre($nombre){$this->nombre = $nombre;}
    public function setApellido($apellido){$this->apellido = $apellido ;}
    public function setDia($dia){$this->dia_nac = $dia;}
    public function setMes($mes){$this->mes_nac = $mes;}
    public function setAno($ano){$this->ano_nac = $ano;}
    public function setCorreo($correo){$this->correo = $correo;}
    public function setPass($pwd){$this->pwd = $pwd;}
    public function setPais($pais){$this->pais = $pais;}
    public function setPregunta($pregunta){$this->pregunta = $pregunta;}
    public function setRespuesta($respuesta){$this->respuesta = $respuesta;}




}

?>