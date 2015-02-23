<?php namespace Delorean\Core\Domain\Repositories;

use Delorean\Core\Domain\Entities\EloquentEntity;
use Delorean\Core\Domain\Repositories\CrudRepository;

abstract class EloquentRepository implements CrudRepository {

    protected $entity;

    public function __construct(EloquentEntity $entity)
    {
        $this->entity = $entity;
    }

    public function all()
    {
        $this->entity->all();
    }

    public function find($id)
    {
        return $this->find($id);
    }

    public function create(array $data)
    {
        return $this->create($data);
    }

    public function update($id, array $data)
    {
        $row = $this->entity->find($id);
        if( !is_null($row) ){
            return $row->update($data);
        }

        return null;
    }

    public function delete($id)
    {
        return $this->entity->delete($id);
    }

    public function search(array $where = array(), array $order = null, array $columns = array('*'))
    {
        $query = $this->entity->select($columns);

        if( is_array($where) ){
            foreach( $order as $column => $direction ) {
                $query->entity->orderBy($column, $direction);
            }
        }

        if( is_array($order) ){
            foreach( $order as $column => $direction ) {
                $query->entity->orderBy($column, $direction);
            }
        }

        return $query->get();
    }
}
