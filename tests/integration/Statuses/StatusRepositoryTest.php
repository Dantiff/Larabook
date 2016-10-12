<?php

use Larabook\Statuses\StatusRepository;
use Laracasts\TestDummy\Factory as TestDummy;

class StatusRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    protected $repo;

    protected function _before()
    {
        $this->repo = new StatusRepository();

//        $this->tester->grabService('Larabook\Statuses\StatusRepository');
    }

    public function test_it_gets_all_statuses_for_a_a_user()
    {
        //Given I have two users\
        $users = TestDummy::times(2)->create('Larabook\Users\User');

        //And Statuses for two of them
        TestDummy::times(2)->create('Larabook\Statuses\Status', [
            'user_id'=>$users[0]->id,
            'body'=>'My Status'
        ]);

        TestDummy::times(2)->create('Larabook\Statuses\Status', [
            'user_id'=>$users[1]->id,
            'body'=>'His Status'
        ]);

        //When I fetch statuses for one user
        $statusesForUser = $this->repo->getAllforUser($users[0]);

        //Then I should receive only the relevant ones
        $this->assertCount(2, $statusesForUser);
        $this->assertEquals('My Status', $statusesForUser[0]->body);
        $this->assertEquals('My Status', $statusesForUser[1]->body);

    }

    public function test_it_saves_status_for_a_user()
    {
        //Given I have an unsaved status
        $status = TestDummy::create('Larabook\Statuses\Status', [
            'user_id'=>null,
            'body'=>'My Status'
        ]);

        //And an existing user
        $user = TestDummy::create('Larabook\Users\User');

        //When I try to persist this status
        $savedStatus = $this->repo->save($status, $user->id);

        //then it should be saved
        $users = TestDummy::times(2)->create('Larabook\Users\User');

        //And the status should have the correct user_id
        $this->assertEquals($user->id, $savedStatus->user_id);

    }
}