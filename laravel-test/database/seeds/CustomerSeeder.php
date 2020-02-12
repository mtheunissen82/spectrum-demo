<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customerList = [
            ['firstName' => 'Marc', 'lastName' => 'Theunissen', 'email' => 'marc@yolo.nl'],
            ['firstName' => 'Stefan', 'lastName' => 'Jansen', 'email' => 'stefan@yolo.nl'],
            ['firstName' => 'Gijs', 'lastName' => 'Gecko', 'email' => 'gecko@yolo.nl'],
            ['firstName' => 'Andries', 'lastName' => 'Jansen', 'email' => 'andries@yolo.nl'],
            ['firstName' => 'Mark', 'lastName' => 'Jansen', 'email' => 'mark@yolo.nl'],
            ['firstName' => 'Rowena', 'lastName' => 'Jansen', 'email' => 'rowena@yolo.nl'],
        ];

        foreach ($customerList as $customerData) {
            $customer =  new Customer();
            $customer->firstName = $customerData['firstName'];
            $customer->lastName = $customerData['lastName'];
            $customer->email = $customerData['email'];
            $customer->save();
        }
    }
}
