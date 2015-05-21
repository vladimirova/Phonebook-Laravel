<?php
use App\Contact;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('contacts')->delete();

        Contact::create([
            'user_id' => 1,
            'fname' => 'Paulette',
            'lname' => 'Northern',
            'email' => 'northern@admin.com',
            ]);

        Contact::create([
            'user_id' => 1,
            'fname' => 'Audrie',
            'lname' => 'Hardie',
            'email' => 'hardie@admin.com',
        ]);

        Contact::create([
            'user_id' => 1,
            'fname' => 'Delpha',
            'lname' => 'Rosebrook',
            'email' => 'drosebrook@admin.com',
        ]);

        Contact::create([
            'user_id' => 1,
            'fname' => 'Candace',
            'lname' => 'Banach',
            'email' => 'cbanach@admin.com',
        ]);

        Contact::create([
            'user_id' => 1,
            'fname' => 'Lynell',
            'lname' => 'Stainback',
            'email' => 'lynell@admin.com',
        ]);

        Contact::create([
            'user_id' => 1,
            'fname' => 'Margeret',
            'lname' => 'Tullos',
            'email' => 'margeret_tullos@admin.com',
        ]);
    }
}