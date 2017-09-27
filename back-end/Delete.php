<?php
//header('Location: http://localhost/BelajarPDOdiPHP1/back-end/Select.php');

include "../pdo/services/UserDAOImpl.php";

$id = $_GET['id'] ;

$dao = new UserDAOImpl();

$dao->delete($id);

//exit;