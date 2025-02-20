<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $role = Role::create(['name' => 'SuperAdmin']);
      $role_admin = Role::create(['name' => 'Admin']);
      $role_lawyer = Role::create(['name' => 'Lawyer']);
      $role_batonnier = Role::create(['name' => 'Batonnier']);
      $role_President = Role::create(['name' => 'President']);
      $role_deontologie = Role::create(['name' => 'Deontology']);
      $role_scrutin = Role::create(['name' => 'Vote']);
      $role_Accreditation = Role::create(['name' => 'Accreditation']);
      $role_Discipline = Role::create(['name' => 'Discipline']);
      $role_Assistant = Role::create(['name' => 'Assistant']);
      $role_Training = Role::create(['name' => 'Training']);
      $role_Website = Role::create(['name' => 'Website']);
      $role_Board = Role::create(['name' => 'Board member']);
      $role_Accountant = Role::create(['name' => 'Accountant']);
      $role_trainee = Role::create(['name' => 'Trainee']);

    }
}
