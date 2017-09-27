<?php
/**
 * Created by IntelliJ IDEA.
 * User: arief
 * Date: 27/09/17
 * Time: 18:40
 */

include "UserDAO.php";
include "../pdo/koneksi/MyPdoConnection.php";

class UserDAOImpl extends MyPdoConnection implements UserDAO
{


    public function save(User $user)
    {
        $nama = $user->getNama();
        $pass = $user->getPass();

        $pdo = MyPdoConnection::panggilKoneksi();

        $st = $pdo->prepare("insert into user (nama,pass) values (?,?) ");
        $st->bindParam(1,$nama,PDO::PARAM_STR);
        $st->bindParam(2,$pass,PDO::PARAM_STR);

        $b = $st->execute();

        if($b){
          echo "Query OK ";
        }else{
           echo "Query Error";
        }
    }

    public function getAll()
    {

        $arr = array();

        $pdo = MyPdoConnection::panggilKoneksi();
        $st = $pdo->query("select * from user");

        while($rs = $st->fetch(PDO::FETCH_ASSOC)){
            array_push($arr,$rs);
            //print_r($rs);
        }

        return $arr;
    }

    public function delete($id)
    {
       $pdo =MyPdoConnection::panggilKoneksi();
       $st = $pdo->prepare("delete from user where id = ? ");

       $st->bindParam(1,$id,PDO::PARAM_INT);
       $st->execute();
    }
}