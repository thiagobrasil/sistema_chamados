<h1><?= h($chamado->title) ?></h1>
<p><?= h($chamado->body) ?></p>
<p><small>Criado: <?= $chamado->created->format(DATE_RFC850) ?></small></p>
