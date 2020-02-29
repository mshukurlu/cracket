<?php


namespace App\Repositories;


interface DatabaseInterface
{
    public function create($data);

    public function update($id,$data=[]);

    public function delete($id);

    public function getById($id);

    public function getAll();

    public  function byLimit($limit);

}
