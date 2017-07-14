<form method="post">
    <label>
        Nome:  
        <input type="text"  name="nome" 
            value="<?=@$data['dado']['nome'];?>" /></label>
    <?php if($data['t']=='pessoa'): ?>
    <label>
        Email: 
        <input type="email" name="email" 
            value="<?=@$data['dado']['email'];?>" /></label>
    <?php endif ?>
    <input type="submit" value="Salvar" />
</form>
<p><a href="..">Voltar</a></p>
