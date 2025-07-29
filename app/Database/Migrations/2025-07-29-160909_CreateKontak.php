<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateKontak extends Migration
{
   public function up()
{
    $this->forge->addField([
        'id'         => ['type' => 'INT', 'auto_increment' => true],
        'nama'       => ['type' => 'VARCHAR', 'constraint' => 100],
        'email'      => ['type' => 'VARCHAR', 'constraint' => 100],
        'telepon'    => ['type' => 'VARCHAR', 'constraint' => 20],
        'deskripsi'  => ['type' => 'TEXT'],
        'created_at' => ['type' => 'DATETIME', 'null' => true],
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('kontak');
}
    public function down()
    {
        //
    }
}
