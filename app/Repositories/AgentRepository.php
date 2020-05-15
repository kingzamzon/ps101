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
            return $e;
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
            return $e;
        }
    }
}