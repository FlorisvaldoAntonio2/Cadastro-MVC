<?php

require_once 'HTML/Header.php';

session_start();

?>
<?php if(isset($_SESSION['msg'])): ?>
    <div class="alert alert-<?=$_SESSION['msg']['result']?>" role="alert">
        <?=$_SESSION['msg']['text']?>
    </div>   
<?php unset($_SESSION['msg']); endif; ?>   

<h2>Lista de usuarios:</h2>

<table class="table table-striped table-hover ">
    <thead>
        <tr>
            <th>Email</th>
            <th>Deletar</th>
            <th>Atualizar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($usuarios as $user) : ?>
            <tr>
                <th><?= $user['email'] ?></th>
                <th><a href="/deletar?id=<?= $user['id'] ?>"><i class="fas fa-user-times"></i></a></th>
                <th><a href="/atualizar?id=<?= $user['id'] ?>"><i class="fas fa-user-edit"></i></a></th>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<?php

require_once 'HTML/Footer.php';

?>