<?php
use App\Phone;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class PhonesTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('phones')->delete();

        Phone::create([
            'contact_id' => 5,
            'phone_number' => '0894589361',
        ]);

        Phone::create([
            'contact_id' => 1,
            'phone_number' => '089987890',
        ]);

        Phone::create([
            'contact_id' => 3,
            'phone_number' => '089987777',
        ]);

        Phone::create([
            'contact_id' => 2,
            'phone_number' => '0894676790',
        ]);
    }
}