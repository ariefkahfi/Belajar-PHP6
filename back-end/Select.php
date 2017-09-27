<?php
include "../pdo/services/UserDAOImpl.php";


$dao = new UserDAOImpl();

$jsonArr = $dao->getAll();

echo json_encode(array('person'=>$jsonArr));
