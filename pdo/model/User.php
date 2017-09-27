<?php
/**
 * Created by IntelliJ IDEA.
 * User: arief
 * Date: 27/09/17
 * Time: 18:38
 */

class User
{
    private $id;
    private $nama;
    private $pass;

    public function __construct($nama,$pass)
    {
       $this->nama=$nama;
       $this->pass=$pass;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNama()
    {
        return $this->nama;
    }

    /**
     * @param mixed $nama
     */
    public function setNama($nama)
    {
        $this->nama = $nama;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }


}