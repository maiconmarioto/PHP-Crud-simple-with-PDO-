<?php

$find = new \Models\User;
$user = $find->findBy('id', $_GET['id']);
$nome = explode(' ', $user->name );
?>
<br><br>
<div class="row">
    <form class="col s12" method="POST" action="/">
        <input type="hidden" value="update" name="action">
        <input type="hidden" value="<?php echo $user->id ?>" name="id">
        <div class="row">
            <div class="input-field col s6">
                <input name="first_name" id="first_name" type="text" value="<?php echo $nome[0] ?>" class="validate">
                <label for="first_name">First Name</label>
            </div>
            <div class="input-field col s6">
                <input id="last_name" name="last_name" type="text" value="<?php echo $nome[1] ?>" class="validate">
                <label for="last_name">Last Name</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="email" name="email" type="email" value="<?php echo $user->email ?>" class="validate">
                <label for="email">Email</label>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <input id="password" name="password" value="<?php echo $user->password ?>" type="password" class="validate">
                <label for="password">Password</label>
            </div>
        </div>

        <button type="submit" class="btn waves-effect waves-light" > Submit <i class="material-icons right">send</i> </button>
        <a href="\" class="waves-effect waves-light btn red"><i class="material-icons right">cancel</i>Cancel</a>

    </form>
</div>