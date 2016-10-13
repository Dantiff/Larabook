<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{

    /**
     * @var array
     */
    protected $table = [
        'users',
        'statuses'
    ];

    /**
     * @var array
     */
    protected $seeders = [
        'UsersTableSeeder',
        'StatusesTableSeeder'
    ];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->cleanDatabase();

        foreach ($this->seeders as $seedClass) {

            $this->call($seedClass);
        }
	}

    /**
     * Clean the Database for new seed generation
     *
     */
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->table as $table)
        {
            DB::table($table)->truncate();

        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }

}
