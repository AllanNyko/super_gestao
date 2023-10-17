<?php

use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            SiteContato::class,
        ]);
    }
}
