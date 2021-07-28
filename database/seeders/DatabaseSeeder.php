<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Organisation;
use App\Models\OrganisationType;
use App\Models\User;
use App\Models\UserType;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //me
        $ot1 = OrganisationType::factory()->create([
            'organisation_type' => 'Developer'
        ]);

        $t1 = UserType::factory()->create([
            'user_type' => 'Super Kami Admin'
        ]);

        $org1 = Organisation::factory()->create([
            'organisation_name' => 'Amongus Incorporated',
            'address' => '3 sussy road',
            'organisation_type_id' => $ot1->id,
        ]);

        $u1 = User::factory()->create([
            'username' => 'Sans_Platinum',
            'name' => 'Nathan Ross',
            'email' => 'ndr1874@gmail.com',
            'user_type_id' => $t1 -> id,
            'organisation_id' => $org1 -> id
        ]);


        //unassigned company and role
        $ot5 = OrganisationType::factory()->create([
            'organisation_type' => 'Unassigned',
            'id' => 2
        ]);

        $t5 = UserType::factory()->create([
            'user_type' => 'Unassigned',
            'id' => 2
        ]);
        $org1 = Organisation::factory()->create([
            'organisation_name' => 'Unassigned',
            'address' => 'Unassigned',
            'organisation_type_id' => 2
        ]);


        //other users

        //org types
        $ot2 = OrganisationType::factory()->create([
            'organisation_type' => 'Garage'
        ]);
        $ot3 = OrganisationType::factory()->create([
            'organisation_type' => 'Rental'
        ]);
        $ot4 = OrganisationType::factory()->create([
            'organisation_type' => 'Other'
        ]);

        //user types
        $t2 = UserType::factory()->create([
            'user_type' => 'Organisation User'
        ]);
        $t3 = UserType::factory()->create([
            'user_type' => 'Organisation Customer'
        ]);


        //organisations
        $org2 = Organisation::factory()->create([
            'organisation_type_id' => $ot2->id
        ]);

        $org3 = Organisation::factory()->create([
            'organisation_type_id' => $ot3->id
        ]);
        $org4 = Organisation::factory()->create([
            'organisation_type_id' => $ot4->id
        ]);

        //users
        $u2 = User::factory(4)->create([
            'user_type_id' => $t2 -> id,
            'organisation_id' => $org2 -> id
        ]);
        $u2 = User::factory(4)->create([
            'user_type_id' => $t3 -> id,
            'organisation_id' => $org2 -> id
        ]);

        $u3 = User::factory(4)->create([
            'user_type_id' => $t2 -> id,
            'organisation_id' => $org3 -> id
        ]);
        $u3 = User::factory(4)->create([
            'user_type_id' => $t3 -> id,
            'organisation_id' => $org3 -> id
        ]);

        $u4 = User::factory(4)->create([
            'user_type_id' => $t2 -> id,
            'organisation_id' => $org4 -> id
        ]);
        $u4 = User::factory(4)->create([
            'user_type_id' => $t3 -> id,
            'organisation_id' => $org4 -> id
        ]);


    }
}


//
// $org1 = Organisation::factory()->create([
//     'organisation_name' => 'Amongus Incorporated',
//     'address' => '3 sussy road',
//     'organisation_type_id' => 1
// ]);

// $u = User::factory()->create([
//     'username' => 'Sans_Platinum',
//     'name' => 'Nathan Ross',
//     'email' => 'ndr1874@gmail.com',
//     'user_type_id' => 1,
//     'organisation_id' => 1
// ]);