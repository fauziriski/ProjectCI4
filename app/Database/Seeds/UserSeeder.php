<?php namespace App\Database\Seeds;

class UserSeeder extends \CodeIgniter\Database\Seeder
{
        public function run()
        {
                $data = [
                        'name'          => 'Fauzi',
                        'password'      =>  base64_encode('Tamvan123'),
                ];

                // Simple Queries
                $this->db->query("INSERT INTO users (name, password) VALUES(:name:, :password:)",
                        $data
                );

                // Using Query Builder
                // $this->db->table('users')->insert($data);
        }
}