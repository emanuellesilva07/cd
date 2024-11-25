<?php
// Conexão com o banco de dados
$conn = new mysqli("localhost", "root", "", "cadastro");
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


   

// Consultando os itens
$achados = $conn->query("SELECT * FROM objetos_achados");
$perdidos = $conn->query("SELECT * FROM objeto_perdido");
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Itens Registrados</title>
    <style>
    {
    padding:0;
    margin:0;
}
body{
    background-color: rgb(242, 242, 242);
    display: flex;
    justify-content: center;  
    align-items: center;      
    height: 80vh;            
    margin: 0;                
}
.form-sla{
        background-color:#FFC0CB;
    margin:0 auto;
    margin-top:50px;
    width:300px;
    padding:20px;
    border-radius:10px;
    color: black;
    width: 600px;
    font-size: 1.2em;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    font-family: system-ui;
    text-align:center;
    
}
.form-sla1{
        background-color:#FFC0CB;
    margin:0 auto;
    margin-top:50px;
    width:300px;
    padding:20px;
    border-radius:10px;
    color: black;
    width: 600px;
    font-size: 1.2em;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    font-family: system-ui;
    text-align:center;
    
}

.but1{
    background-color: #DB7093;
    width: 100px;
    font-size: 16px;
}
h2{
    text-align:center;
}
h1{
    position: absolute;
    top: 0;
    left: 50%;
    transform: translateX(-50%);
    padding:90px;
    color: black;
    width: 600px;
    font-size: 3em;
    font-family: system-ui;
    text-align:center;  
    text-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}
.border{
    font-size: 35px;
    color: white;
    text-shadow: 1px 1px 2.50px rgba(0, 0, 0, 0.5), -2px -2px 5px rgba(0, 0, 0, 0.5);
}

</style>
</head>
<body>

    <h1>Registros</h1>
<div class='form-sla'>
    <h2>Itens Achados</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Local</th>
            <th>Data</th>
            <th>Descrição</th>
        </tr>
        <?php while ($row = $achados->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['local'] ?></td>
            <td><?= $row['data'] ?></td>
            <td><?= $row['descricao'] ?></td>

        </tr>
        <?php } ?>
    </table>
</div>
<div class='form-sla1'>
    <h2>Itens Perdidos</h2>
    <table border="1">
        <tr>
        <th>ID</th>
            <th>Nome</th>
            <th>Local</th>
            <th>Data</th>
            <th>Descrição</th>
        </tr>
        <?php while ($row = $perdidos->fetch_assoc()) { ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['nome'] ?></td>
            <td><?= $row['local'] ?></td>
            <td><?= $row['data'] ?></td>
            <td><?= $row['descricao'] ?></td>
       </tr>
        <?php } ?>
    </table>
    </div>
</body>
</html>
	
