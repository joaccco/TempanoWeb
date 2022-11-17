<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Ticket::create([
            'number'  =>  '2001',  
            'date'  =>  '7/11/22',   
            'status'  =>  '2',  
            'detail'  =>  'se dejo una heladera', 
            'mount'  =>  '200',
            'user_id'  =>  '1'
        ]);

        Ticket::create([
            'number'  =>  '2002',  
            'date'  =>  '7/11/22',   
            'status'  =>  '2',  
            'detail'  =>  'se dejo un tacho', 
            'mount'  =>  '200',
            'user_id'  =>  '1'
        ]);

        Ticket::create([
            'number'  =>  '2003',  
            'date'  =>  '7/11/22',   
            'status'  =>  '2',  
            'detail'  =>  'se dejo un tacho y trailer', 
            'mount'  =>  '200',
            'user_id'  =>  '1'
        ]);

        Ticket::create([
            'number'  =>  '2004',  
            'date'  =>  '7/11/22',   
            'status'  =>  '2',  
            'detail'  =>  'se dejaron 3 tachos', 
            'mount'  =>  '200',
            'user_id'  =>  '1'
        ]);
    }
}
