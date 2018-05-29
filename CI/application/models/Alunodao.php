<?php

//DAO: Data Acess Object

    //fica mais generalizado, vale para todos
  require_once APPPATH."models/serianameable.php";
    class InsertDAO extends CI_Model{
        //polimorfismo permitiu que eu coloque qqc Serianamable aqui
        public function insert(Serianameable $alu){
  		    //o CI ja faz o insert into... automaticamente, só precisa
		    //informar a tabela
		    $this->db->insert($alu->getClassName(),$alu->toArray());
		    //depois daqui criar o view e por ultimo o control[back do front]
	    }
    }
    
?>
    </body>
</html>
