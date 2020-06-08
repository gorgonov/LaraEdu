<?php
require_once 'vendor/autoload.php';

use App\Models\TeacherProfile;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class, 5)->create()->each(function ($user) {
            if ($user->role == User::TEACHER) {
                $user->teacherprofile()->save(factory(TeacherProfile::class)->make());
            }
        });

        $password = Hash::make('123456'); //bcrypt('123456'),
        $data = [
            [ // админ
                'name' => 'mergen',
                'email' => 'mergen@g.g',
                'email_verified_at' => now(),
                'password' => $password,
                'remember_token' => Str::random(10),
                'first_name' => 'Mergen',
                'last_name' => 'Mergenov',
                'status' => 10,
                'avatar' => '51.png',
                'city' => 'Горно=Алтайск',
                'role' => User::ADMIN,
            ],
            [ // teacher
                'name' => 'Kuchiyak',
                'email' => 'kuchiyak@g.g',
                'email_verified_at' => now(),
                'password' => $password,
                'remember_token' => Str::random(10),
                'first_name' => 'Stepan',
                'last_name' => 'Kuchiyak',
                'status' => 10,
                'avatar' => '52.png',
                'city' => 'Горно=Алтайск',
                'role' => User::TEACHER,
            ],
            [ // student
                'name' => 'Shmakov',
                'email' => 'shmakov@g.g',
                'email_verified_at' => now(),
                'password' => $password,
                'remember_token' => Str::random(10),
                'first_name' => 'Vovka',
                'last_name' => 'Shmakov',
                'status' => 10,
                'avatar' => '53.png',
                'city' => 'Горно=Алтайск',
                'role' => User::STUDENT,
            ],
        ];
        DB::table('users')->insert($data);
    }
}
