<?php

use Illuminate\Database\Seeder;

class DiversTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('divers')->insert(
          array(
          	array(
          		'langues' => 'Arabe'),
          	array(
          		'langues' => 'Anglais'),
          	array(
          		'langues' => 'Allemand'),
          	array(
          		'langues' => 'Bengali'),
          	array(
          		'langues' => 'Chinois'),
          	array(
          		'langues' => 'Danois'),
          	array(
          		'langues' => 'Espagnol'),
          	array(
          		'langues' => 'Hindi'),
          	array(
          		'langues' => 'Indonesien'),
          	array(
          		'langues' => 'Italien'),
          	array(
          		'langues' => 'Japonais'),
          	array(
          		'langues' => 'Norvegien'),
          	array(
          		'langues' => 'Portugais'),
          	array(
          		'langues' => 'Polonais'),
          	array(
          		'langues' => 'Russe'),
          	array(
          		'langues' => 'Suedois'),
          	array(
          		'langues' => 'Truc')
           )     
          );
          }
          	 
    }

