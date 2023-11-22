<?php
class Login{
    private $usuario;
    private $senha;

    // Getters / Setters
    public function getUsuario(){ // Get
        return $this->usuario;
    }
    public function setUsuario($user){ //Set
        $this->usuario = $user;
    }

    public function setSenha($pass){ // Set
        $this->senha = $pass;
    }
    public function getSenha(){ // Get
        return $this->senha;
    }

    public function Logar(){
        if($this->usuario == "userphp" and $this->senha == "1234"):
            echo "Logado com sucesso!";
        else:
            echo "Dados invalidos!";
        endif;
    }
}
$logar = new Login();
// $logar->usuario = "userphp";
// $logar->senha = "1234";
$logar->setUsuario("userphp");
$logar->setSenha("1234");
$logar->Logar();
echo "<br>"."Usuario: ";
echo $logar->getUsuario();
echo "<br>"."Senha: ";
echo $logar->getSenha();

?>