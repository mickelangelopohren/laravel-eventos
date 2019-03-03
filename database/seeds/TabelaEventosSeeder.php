<?php

use Illuminate\Database\Seeder;

class TabelaEventosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('eventos')->insert([
    		'nome' => 'Evento sem SeatsIO com nome grande para testar a quantidade',
    		'local' => 'Amantaní, Caapiranga',
    		'data_realizacao' => '2018-12-20 23:30:30',
    		'descricao' => 'Descricao do evento sem SeatsIO com nome grande para testar a quantidade',
    		'quantidade_ingresso' => '10',
    		'valor' => '47.00', 
            'img_link' => 'http://www.classicalsource.com/images/upload/9203_1.jpg',
    	]);
    	DB::table('eventos')->insert([
    		'nome' => 'Evento com SeatsIO',
    		'local' => 'Olympic Gymnastics Arena, Porto Alegre',
    		'data_realizacao' => '2019-02-07 23:30:30',
    		'descricao' => 'Descricao evento com SeatsIO',
    		'quantidade_ingresso' => '500',
    		'valor' => '100.00',
            'img_link' => 'https://api.ngo.pl/media/get/57784?w=200&h=200',
    	]);
    	DB::table('eventos')->insert([
    		'nome' => 'Natal pelo Mundo',
    		'local' => 'Expo gramado RS, Gramado',
    		'data_realizacao' => '2018-11-29 18:30:00',
    		'descricao' => 'Descricao Natal pelo Mundo',
    		'quantidade_ingresso' => '600',
    		'valor' => '29.50',
            'img_link' => 'https://www.seueventocorporativo.com.br/uploads/capa/20171204085801647407434_thumb.png',
    	]);
    	DB::table('eventos')->insert([
    		'nome' => 'Grande Desfile de Natal',
    		'local' => 'Expo gramado RS, Gramado',
    		'data_realizacao' => '2018-11-29 23:30:30',
    		'descricao' => 'Descricao Grande Desfile de Natal',
    		'quantidade_ingresso' => '30',
    		'valor' => '15.75',
            'img_link' => 'https://www.weiermair.at/typo3temp/pics/20306d91b1.jpg',
    	]);
    }
}