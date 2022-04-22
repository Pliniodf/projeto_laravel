<?php

use App\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $companies = [
            [

                'id'    => 1,
                'name'  => 'nome',
                'email' => 'email@email',
                'cnpj'  => '12345612345678',
            ],
            [
                'id' => 2,
                'name' => 'nome2',
                'email' => 'email2@email2',
                'cnpj'  => '12345612300018',
            ]
        ];
        foreach ($companies as $key => $value) {
            $company = new Company;
            $company->name = $value['name'];
            $company->email = $value['email'];
            $company->cnpj = $value['cnpj'];
            $company->save();
        }
        /* echo $companies[1]['name']; */
    }

}

