<?php require 'MM/Config/config.php'; ?>


<?php
if  ((isset($_POST['action'])) and ($_POST['action'] == 'create')) {
    $user = new \Models\User();
    $user->create([
        'name' => $_POST['first_name'] . " " . $_POST['last_name'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]);
}
if ((isset($_GET['action'])) and ($_GET['action'] == 'delete')) {
    $user = new \Models\User;
    $user->delete('id', $_GET['id']);
}


if ((isset($_POST['action'])) and ($_POST['action'] == 'update')) {
    $user = new \Models\User;
    $updated = $user->update('id',$_POST['id'], [
        'name' => $_POST['first_name']. ' ' .$_POST['last_name'],
        'email' => $_POST['email'],
        'password' => $_POST['password']
    ]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
    <title>Simple Crud</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="bower_components/Materialize/dist/css/materialize.min.css" type="text/css" rel="stylesheet"
          media="screen,projection"/>
    <link rel="stylesheet" href="Public/css/style.css" type="text/css" rel="stylesheet" media="screen,projection">

</head>
<body>

<main>
    <nav class="light-blue lighten-1" role="navigation">
        <div class="nav-wrapper container"><a id="logo-container" href="/" class="brand-logo center">Crud with
                Materialize</a>
            <ul class="right hide-on-med-and-down">
                <li><a href="?p=create"><i class="material-icons">add</i></a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="?p=create">New</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <?php
            echo (isset($updateMsg)) ? $updateMsg . '<br><br>' : '';



            require (isset($_GET['p'])) ? 'Views/' . $_GET['p'] . '.php' : 'Views/list.php'; ?>
            <br><br>
        </div>
    </div>

</main>
<footer class="page-footer teal lighten-3">
    <div class="footer-copyright">
        <div class="container">
            Made with <a class="white-text text-lighten-1" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>
<!--  Scripts-->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/Materialize/dist/js/materialize.min.js"></script>
<script src="Public/js/init.js"></script>

</body>
</html>
