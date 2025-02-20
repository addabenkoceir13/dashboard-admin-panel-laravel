<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class MangementAccountSystemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $batonnierRole = Role::firstOrCreate(['name' => 'President']);

        $userBatonnier = User::create([
            'name' => 'Batonnier',
            'email' => 'batonnier@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userBatonnier->assignRole($batonnierRole);

        // **---------------------------------------------------------
        $RoleSuperAdmin = Role::firstOrCreate(['name' => 'SuperAdmin']);

        $userSuperAdmin = User::create([
            'name' => 'SuperAdmin',
            'email' => 'superadmin@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userSuperAdmin->assignRole($RoleSuperAdmin);

        // **---------------------------------------------------------
        $RoleAdmin = Role::firstOrCreate(['name' => 'Admin']);

        $userAdmin = User::create([
            'name' => 'Admin',
            'email' => 'admin@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userAdmin->assignRole($RoleAdmin);

        // **---------------------------------------------------------
        $RoleLawyer = Role::firstOrCreate(['name' => 'Lawyer']);

        $userLawyer = User::create([
            'name' => 'Lawyer',
            'email' => 'lawyer@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userLawyer->assignRole($RoleLawyer);

        // **---------------------------------------------------------
        $RoleDeontology = Role::firstOrCreate(['name' => 'Deontology']);

        $userDeontology = User::create([
            'name' => 'Deontology',
            'email' => 'deontology@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userDeontology->assignRole($RoleDeontology);

        // **---------------------------------------------------------
        $RoleVote = Role::firstOrCreate(['name' => 'Vote']);

        $userVote = User::create([
            'name' => 'Vote',
            'email' => 'vote@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userVote->assignRole($RoleVote);


        // **---------------------------------------------------------
        $RoleAccreditation = Role::firstOrCreate(['name' => 'Accreditation']);

        $userAccreditation = User::create([
            'name' => 'Accreditation',
            'email' => 'accreditation@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userAccreditation->assignRole($RoleAccreditation);


        // **---------------------------------------------------------
        $RoleDiscipline = Role::firstOrCreate(['name' => 'Discipline']);

        $userDiscipline = User::create([
            'name' => 'Discipline',
            'email' => 'discipline@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userDiscipline->assignRole($RoleDiscipline);


        // **---------------------------------------------------------
        $RoleAssistant = Role::firstOrCreate(['name' => 'Assistant']);

        $userAssistant = User::create([
            'name' => 'Assistant',
            'email' => 'assistant@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userAssistant->assignRole($RoleAssistant);


        // **---------------------------------------------------------
        $RoleTraining = Role::firstOrCreate(['name' => 'Training']);

        $userTraining = User::create([
            'name' => 'Training',
            'email' => 'training@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userTraining->assignRole($RoleTraining);


        // **---------------------------------------------------------
        $RoleWebsite = Role::firstOrCreate(['name' => 'Website']);

        $userWebsite = User::create([
            'name' => 'Website',
            'email' => 'website@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userWebsite->assignRole($RoleWebsite);

        // **---------------------------------------------------------
        $RoleBoard = Role::firstOrCreate(['name' => 'Board member']);

        $userBoard = User::create([
            'name' => 'Board member',
            'email' => 'board-member@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userBoard->assignRole($RoleBoard);

        // **---------------------------------------------------------
        $RoleAccountant = Role::firstOrCreate(['name' => 'Accountant']);

        $userAccountant = User::create([
            'name' => 'Accountant',
            'email' => 'accountant@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userAccountant->assignRole($RoleAccountant);

        // **---------------------------------------------------------
        $RoleTrainee = Role::firstOrCreate(['name' => 'Trainee']);

        $userTrainee = User::create([
            'name' => 'Trainee',
            'email' => 'trainee@barreau-alger.org',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);

        $userTrainee->assignRole($RoleTrainee);
    }
}
