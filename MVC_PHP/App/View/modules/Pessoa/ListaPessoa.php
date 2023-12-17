<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIsta Pessoas</title>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
        </tr>

        <?php foreach($model->rows as $items): ?>
        <tr>
            <td><?= $items->id ?></td>
            <td><?= $items->nome ?></td>
            <td><?= $items->cpf ?></td>
            <td><?= $items->data_nascimento ?></td>
        </tr>
        <?php endforeach ?>
        
    </table>
</body>
</html>