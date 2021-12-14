<?php
namespace Modules\User\Database\Seeders;
use Illuminate\Database\Seeder;
use Modules\User\Entities\User;
use Modules\Acl\Entities\Role;
use Illuminate\Support\Facades\DB;
class UserDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Admin', 
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456')
        ]);
        $role=Role::create([
            'name' => 'admin', 
        ]);
        DB::table('role_user')->insert([
            'role_id' => $role->id,
            'user_id' => $user->id
         ]);
   }
}
