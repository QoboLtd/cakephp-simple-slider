<?php
use Migrations\AbstractMigration;

class CreateSliders extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('sliders', ['id' => false, 'primary_key' => ['id']]);
        $table->addColumn('id', 'uuid', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('alias', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('shuffle', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('hover', 'boolean', [
            'default' => null,
            'null' => false,
        ]);
        $table->addColumn('delay', 'integer', [
            'default' => null,
            'limit' => 11,
            'null' => false,
        ]);
        $table->addColumn('size', 'string', [
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->create();
    }
}
