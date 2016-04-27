<?php

# database/seeds/ControlTableSeeder.php

use App\Models\Control;  
use Illuminate\Database\Seeder;

class ControlTableSeeder extends Seeder  
{

	protected $table = "Control";

    public function run()
    {
        Control::create([
            'request' => 'control/last'
        ]);

        Control::create([
            'request' => 'results/lawyers'
        ]);

        Control::create([
            'request' => 'control/last'
        ]);
    }
}