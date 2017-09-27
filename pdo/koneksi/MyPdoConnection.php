<?php
/**
 * Created by IntelliJ IDEA.
 * User: arief
 * Date: 27/09/17
 * Time: 18:30
 */

class MyPdoConnection
{
    public static function panggilKoneksi(){
       $con = new PDO('mysql:host=localhost;dbname=pdo1',"arief","arief");
       return $con;
    }
}