<?php

use Larabook\Users\UserRepository;
use Laracasts\TestDummy\Factory as TestDummy;
class UserRepositoryTest extends \Codeception\TestCase\Test
{
    /**
     * @var \IntegrationTester
     */
    protected $tester;

    /**
     * @var
     */
    protected $repo;

    /**
     * Import user repository
     *
     */
    protected function _before()
    {
        $this->repo = new UserRepository();
    }

    public function test_it_paginates_all_users()
    {
        TestDummy::times(4)->create('Larabook\Users\User');

        $results = $this->repo->getPaginated(2);

        $this->assertCount(2, $results);
    }
}