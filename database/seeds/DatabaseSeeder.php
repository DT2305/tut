<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminsTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(FacultiesTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(IssuedPlacesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(NationsTableSeeder::class);
        $this->call(ReligionsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(SubjectCombinationsTableSeeder::class);
        $this->call(EducationLevelsTableSeeder::class);
        $this->call(EducationTypesTable::class);
        $this->call(AdmissionFormsSeeder::class);

    }
}
