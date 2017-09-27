<?php
include "../pdo/model/User.php";
include "../pdo/services/UserDAOImpl.php";

if(isset($_POST['nama']) && isset($_POST['alamat']) ){
    $user = new User($_POST['nama'],$_POST['alamat']);

    $dao  = new UserDAOImpl();

    $dao->save($user);
}


