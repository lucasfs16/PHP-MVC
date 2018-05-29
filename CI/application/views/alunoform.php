<!DOCTYPE html>
<html>
    <head>
        <meta chatset="UFTF-8">
    </head>
    <body>  
        <div>
            <?= $msg ?>
        </div>

        <form action="aluno/cadastro/" method="post">
            Nome: <input type="text" name="nome"/>
            <br>
            Email: <input type="email" name="email"/>
            <br>
            <input type="submit" value="Cadastrar"/>
        </form>
</body>
</html>