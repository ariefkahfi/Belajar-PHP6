<?php
/**
 * Created by IntelliJ IDEA.
 * User: arief
 * Date: 27/09/17
 * Time: 18:37
 */

interface UserDAO
{
    public function save(User $user);
    public function getAll();
    public function delete($id);
}