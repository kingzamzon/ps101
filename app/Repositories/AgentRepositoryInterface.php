<?php
namespace App\Repositories;

interface AgentRepositoryInterface 
{
    /**
     * Find Agent
     * 
     * @param int 
     */
    public function findAgent(int $id);

    /**
     * Create Agent
     * 
     * @param array 
     */
    public function create(array $data);

    /**
     * Update Agent
     * 
     * @param array
     */
    public function updateAgent(array $data);

    /**
     * Delete Agent
     * 
     * @param int
     */
    public function deleteAgent(int $id);
}