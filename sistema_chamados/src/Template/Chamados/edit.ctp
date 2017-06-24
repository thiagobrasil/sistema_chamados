<h1>Edit Chamado</h1>
<?php
    echo $this->Form->create($chamado);
    echo $this->Form->input('title');
    echo $this->Form->input('body', ['rows' => '3']);
    echo $this->Form->button(__('Salvar chamado'));
    echo $this->Form->end();
?>
