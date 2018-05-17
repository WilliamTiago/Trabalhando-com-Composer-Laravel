<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ProdutoTableSeeder::class);
    }
}

class ProdutoTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
		
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array('Geladeira', 2, 150.00, 'Side by Side com gelo na porta'));
        
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array('Fogão', 2, 150.00, 'Painel Altomático e forno elétrico'));
        
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?,?,?,?)', array('Microondas', 2, 150.00, 'Manda SMS quando termina de esquentar'));
        
        
    }
}
