<?php

namespace Database\Seeders;

use GuzzleHttp\Client;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::find(1)) {
            // DUMMY USERS API
            $client = new Client();
            $response = $client->request("GET", "https://dummyapi.io/data/v1/user?page=1&limit=10", ['headers' => ['Accept' => 'application/json', 'app-id' => '62164af2de9e74dca4e3d16b']]);
            $response_data = json_decode((string) $response->getBody(), true);
            $oUsers =  $response_data['data'];

            foreach ($oUsers as $key => $oUser) {
                $role = Role::where('name', 'user')->firstOrFail();
                User::create([
                    'name'           => $oUser['firstName'],
                    'email'          => $oUser['firstName'] . '@mail.com',
                    'avatar'         => $oUser['picture'],
                    'password'       => bcrypt('password'),
                    'remember_token' => Str::random(60),
                    'role_id'        => $role->id,
                ]);
            }  
        }
    }
}
