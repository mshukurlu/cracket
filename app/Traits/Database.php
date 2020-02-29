<?php


namespace App\Traits;


trait Database
{
    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update($id, $data = [])
    {
        $data = $this->transformData($data);

        return $this->model->find($id)->update($data);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function  getAll()
    {
        return $this->model->all();
    }

    public function byLimit($limit)
    {
        return $this->model->paginate($limit);
    }

    public function  getModel()
    {
        return $this->model;
    }
}
