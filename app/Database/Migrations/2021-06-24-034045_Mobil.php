<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mobil extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'            => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama_mobil'         => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tanggal_submit'   => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'created_at'		=> [
				'type'			=> 'DATETIME',
				'null'			=> TRUE
			],
			'updated_at' => [
				'type'			=> 'DATETIME',
				'null'			=> TRUE
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('dataset_mbl');
	}

	public function down()
	{
		$this->forge->dropTable('dataset_mbl');
	}
}