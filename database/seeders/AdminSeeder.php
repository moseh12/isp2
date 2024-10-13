use App\Models\Admin;

public function run()
{
    Admin::create([
        'name' => 'Admin',
        'email' => 'mosesochieng4521@gmail.com',
        'password' => bcrypt('password123'),  // Use a secure password
    ]);
}
