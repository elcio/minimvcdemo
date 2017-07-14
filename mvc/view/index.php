<ul>
<?php foreach($data['dados'] as $dado): ?>
    <li>
        <a href="pessoa/?t=<?=$data['t']?>&id=<?=$dado['id']?>"><?=$dado['nome']?></a> | 
        <a href="excluir/?t=<?=$data['t']?>&id=<?=$dado['id']?>"
            onclick="return confirm('Tem certeza?')">excluir</a>
    </li>
<?php endforeach; ?>
</ul>
<a href="pessoa/?t=<?=$data['t']?>">Criar <?=$data['t']?></a>
