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
            <th></th>
            <th>Id</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>Data Nascimento</th>
        </tr>

        <?php foreach($model->rows as $items): ?>
        <tr>
            <td>
                <a href="pessoa/delete?id=<?= $items->id ?>">X</a>
            </td>
            <td><?= $items->id ?></td>
            <td>
                <a href="pessoa/form?id=<?= $items->id ?>"><?= $items->nome ?></a>
            </td>
            <td><?= $items->cpf ?></td>
            <td><?= $items->data_nascimento ?></td>
        </tr>
        <?php endforeach ?>
        
        <?php if(count($model->rows) == 0): ?>
             <tr>
                <td colspan="5">Nenhum registro encontrado.</td>
             </tr>
        <?php endif ?>
    </table>
</body>
</html>