<html>
<head>
    <meta charset="UTF-8">
    <title>Agenda de contatos</title>
</head>
<body>
<form action="?act=save" method="POST" name="form1" >
    <h1>Agenda de contatos</h1>
    <hr>
    <input type="hidden" name="id" <?php
    // Preenche o id no campo id com um valor "value"
    if (isset($id) && $id != null || $id != "") {
        echo "value=\"{$id}\"";
    }
    ?> />
    Nome:
    <input type="text" name="nome" <?php
    // Preenche o nome no campo nome com um valor "value"
    if (isset($nome) && $nome != null || $nome != ""){
        echo "value=\"{$nome}\"";
    }
    ?> />
    E-mail:
    <input type="text" name="email" <?php
    // Preenche o email no campo email com um valor "value"
    if (isset($email) && $email != null || $email != ""){
        echo "value=\"{$email}\"";
    }
    ?> />
    Celular:
    <input type="text" name="celular" <?php
    // Preenche o celular no campo celular com um valor "value"
    if (isset($celular) && $celular != null || $celular != ""){
        echo "value=\"{$celular}\"";
    }
    ?> />
    <input type="submit" value="salvar" />
    <input type="reset" value="Novo" />
    <hr>
</form>
</body>
</html>