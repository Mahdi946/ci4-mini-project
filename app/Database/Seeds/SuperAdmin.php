<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\Shield\Entities\User;

class SuperAdmin extends Seeder
{
    public function run()
    {
        $users = auth()->getProvider();
        $user = new User([
            'username' => 'admin',
            'email'    => 'admin@gmail.com',
            'password' => '1qaz2wsx!@#$',
        ]);
        $users->save($user);

        $user = $users->findById($users->getInsertID());

        $user->addGroup("superadmin");
    }
}
