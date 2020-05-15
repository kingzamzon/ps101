<?php

namespace Tests\Unit\Agents;

use App\Agent;
use App\Repositories\AgentRepository;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class AgentUnitTest extends TestCase
{
    use WithFaker;

    /**
     * It can delete agent
     * 
     * @return void
     */
    public function test_it_can_delete_the_agent()
    {
        $agent = factory(Agent::class)->create();

        $agentRepo = new AgentRepository($agent);
        $delete = $agentRepo->deleteAgent($agent->id);

        $this->assertTrue($delete);
    }
    
    /**
     * admin can delete agent
     * 
     * @return void
     */
    public function test_it_can_update_the_agent()
    {
        $agent = factory(Agent::class)->create();

        $data = [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name
        ];

        $agentRepo = new AgentRepository($agent);
        $update = $agentRepo->updateAgent($data);

        $this->assertTrue($update);
        $this->assertEquals($data['first_name'], $agent->first_name);
    }

    /**
     * It can show the agent 
     * @return void
     */
    public function test_it_can_show_the_agent()
    {
        $agent = factory(Agent::class)->create();
        $agentRepo = new AgentRepository(new Agent);
        $found = $agentRepo->findAgent($agent->id);

        $this->assertInstanceOf(Agent::class, $found);
        $this->assertEquals($found->first_name, $agent->first_name);
    }

    /**
     * Repo unit test to allow admin create agent.
     *
     * @return void
     */
    public function test_admin_can_create_agent()
    {
        $data = [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name
        ];

        $agentRepo = new AgentRepository(new Agent);
        $agent = $agentRepo->create($data);

        $this->assertInstanceOf(Agent::class, $agent);
        $this->assertEquals($data['first_name'], $agent->first_name);

        // $this->assertTrue(true);
    }

    
}
