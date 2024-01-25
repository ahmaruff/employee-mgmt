<?php

namespace Database\Seeders;

use App\Models\Division;
use App\Models\Position;
use App\Models\Employee;
use App\Models\Salary;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $div = Division::find(1);
        $employee = new Employee;
        $employee->firstname = 'Ahmad';
        $employee->lastname = 'Ma\'ruf';
        $employee->email = 'ahmadmaruf2701@gmail.com';
        $employee->phone = '085173303967';
        $employee->date_of_birth = '2002-01-27';
        $employee->gender = 'male';
        $employee->address = 'Wonosobo';
        $employee->division_id = $div->id;

        $employee->save();

        Salary::create([
            'employee_id' => $employee->id,
            'amount' => 40000,
            'payment_date' => '2024-01-10'
        ]);

        $pos = Position::find(1);
        $employee->positions()->attach($pos,['employee_id' => $employee->id,'start_date'=> '2024-01-04']);
        $employee->save();
    }
}

