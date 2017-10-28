<?php

use Phinx\Migration\AbstractMigration;

class CreateUsersTable extends AbstractMigration
{

    private $guideShopData = [];

    /**
     * Migrate Up.
     */
    public function change()
    {
        $table = $this->table('users');
        $table->addColumn('login', 'string', ['limit' => 20])
            ->addColumn('password', 'string', ['limit' => 40])
            ->addColumn('email', 'string', ['limit' => 100])
            ->addColumn('conversion_rate', 'float', ['null' => true])
            ->addColumn('created_at', 'datetime', ['null' => false])
            ->create();
    }

    /**
     * Migrate Up.
     */

    public function up()
    {
    }

    /**
     * Migrate Down.
     */
    public function down()
    {
    }

}