<h1>Chamados Empresa</h1>

<p><?= $this->Html->link('Adicionar um chamado', ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Título</th>
        <th>Criado</th>
        <th>Ações</th>
    </tr>

    <!-- Aqui é onde iremos iterar nosso objeto de solicitação $articles, exibindo informações de artigos -->

    <?php foreach ($chamados as $chamado): ?>
    <tr>
        <td><?= $chamado->id ?></td>
        <td>
            <?= $this->Html->link($chamado->title, ['action' => 'view', $chamado->id]) ?>
        </td>
        <td>
            <?= $chamado->created->format(DATE_RFC850) ?>
        </td>
        <td>
            <?= $this->Form->postLink(
                'Deletar',
                ['action' => 'delete', $chamado->id],
                ['confirm' => 'Tem certeza?'])
            ?>
            <?= $this->Html->link('Edit', ['action' => 'edit', $chamado->id]) ?>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
