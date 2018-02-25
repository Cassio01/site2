<table class="table table-dark">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Opções</th>
    </tr>
    <?php foreach($listar as $lista): ?>
    <tr>
        <td><?php echo $lista['id']; ?></td>
        <td><?php echo $lista['nome']; ?></td>
        <td><?php echo $lista['email']; ?></td>
        <td><?php echo $lista['telefone']; ?></td>
        <td><a href="editar.php?id=<?php echo $lista['id']; ?>">Editar</a>
            <a href="remover.php?id=<?php echo $lista['id']; ?>">Excluir</a></td>
    </tr>
    <?php endforeach; ?>
</table>