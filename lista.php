<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
        <tr>
            <th>
                <a class="btn btn-link" href="?ordem=<?= $ordem ?>">Id</a>
                <span class="<?=$class?>"></span>
            </th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Idade</th>
            <th>CPF</th>
            <th>Cidade</th>
            <th>Email</th>
            <th>Fone</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($lista as $cliente):?>
            <tr class="trClick">
                <td data-id="<?=$cliente->getId()?>"><?=$cliente->getId()?></td>
                <td><?=$cliente->getNome()?></td>
                <td><?=$cliente->getSobrenome()?></td>
                <td><?=$cliente->getIdade()?></td>
                <td><?=$cliente->getCpf()?></td>
                <td><?=$cliente->getCidade()?></td>
                <td><?=$cliente->getEmail()?></td>
                <td><?=$cliente->getFone()?></td>
            </tr>
        <?php endforeach ?>
        </tbody>

        <tfoot class="text-center">
        <tr>
            <td colspan="8">Temos registrados <?=TOTALCLIENTES?> Clientes</td>
        </tr>
        </tfoot>
    </table>
</div>