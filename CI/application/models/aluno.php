<!DOCTYPE html>
<html>
    <head>
        <meta chatset="UFTF-8">
    </head>
    <body>        
        <?php 
        
    require_once APPPATH."models/serializable.php";
    require_once APPPATH."models/nameable.php";
    class Aluna implements Serializable, Nameable{
  
            private $id, $nome, $email;
            
            public function __construct($id,$nome,$email) {
                $this->id = $id;
                $this->nome = $nome;
                $this->email = $email;
            }
            
            public function getId(){
                return $this->id;
            }
            
            public function getNome(){
                return $this->nome;
            }
            
            public function getEmail(){
                return $this->email;
            }
            
            //transforma todos os campos em array para colocar nas tabelas
            //para nao precisar deixar nada publico, para transformar a classe em obj
            //NAO FUNCIONOU DA MANEIRA AUTOMATICA, POR ISSO TEVE QUE COLOCAR MANUALMENTE
            public function toArray(){
                // isso nao funciona: return (array) $this;
            $aux = array();
            $aux["id"] = $this->id;
            $aux["nome"] = $this->nome;
            $aux["email"] = $this->email;
            return $aux;
    
            }
            
        }

//depois daqui, criar alunoDAO.php

?>
    </body>
</html>