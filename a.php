PASSO A PASSO:

 para usar o php MyAdmin:

1) mysql-ctl install

2) mysql-ctl start

3) phpmyadmin-ctl install

- criar arq .php para testar, run no arq e digitar phpmyadmin depois da /:
    https://php2-mvc-anajuliabl.c9users.io/phpmyadmin/
    
    na pag "phpmyadmin":
        usuario igual do c9
        nao precisa colocar senha
        
        criar banco de dados

4) Instala o Code Igniter: wget https://github.com/bcit-ci/CodeIgniter/archive/3.1.6.zip



PARA ABRIR BD: https://php2-mvc-anajuliabl.c9users.io/phpmyadmin/ --> login: anajuliabl senha [vazio]
---------------------------------

AULA 2

VER AULA NA MAQUINA "aulaphp2" do https://ide.c9.io/romefeller

...
colocar no "config" >> autoload, na linha 61: $autoload['libraries'] = array(database);


no "database.php": 	

    'hostname' => 'localhost',
	'username' => 'anajuliabl',
	'password' => '',
	'database' => 'aula',
	
	para testar: https://php2-mvc-anajuliabl.c9users.io/CI/index.php/aluno
	vai abrir o formulario
	
PARA REDIRECIONAR DEPOIS DO CADASTRO NO FORMULARIO:	
	na linha 92 do autoload.php: $autoload['helper'] = array('url');

    e no config.php, na linha 26: $config['base_url'] = 'https://php2-mvc-anajuliabl.c9users.io/CI';
 
 na linha 61, do arq autoload.php: $autoload['libraries'] = array('database', 'session');



depois, criamos uma interface para rodar as funçõs com nome e email do usuario (serianamable,...)

