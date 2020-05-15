<?php
namespace App\Repositories;

use App\Agent;

class AgentRepository implements AgentRepositoryInterface
{

    /**
     * AgentRepository Constructor
     */
    public function __construct(Agent $agent)
    {
        $this->model = $agent;
    }

        /**
     * Find Agent
     * 
     * @param int 
     */
    public function findAgent(int $id)
    {
        try{
            return $this->model->findOrFail($id);
        }catch(Exception $e){
            throw new Exception($e);
        }
    }

    /**
     * Create Agent
     * 
     * @param array 
     */
    public function create(array $data)
    {
        try{
            return $this->model->create($data);
        }catch(Exception $e){
            throw new Exception($e);
        }
    }

        /**
     * Update Agent
     * 
     * @param array $data
     */
    public function updateAgent(array $data)
    {
        try {
            return $this->model->update($data);
        }catch(Exception $e) {
            throw new Exception($e);
        }
    }


    /**
     * Delete Agent
     * 
     * @param array
     */
    public function deleteAgent(int $id)
    {
        try {
            return $this->model->delete();
        }catch(Exception $e) {
            throw new Exception($e);
        }
    }
}