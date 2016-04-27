<?php
use Migrations\AbstractMigration;

class SlideAddnewTabField extends AbstractMigration
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
        $table = $this->table('slides');
        $table->addColumn('new_tab', 'boolean', [
            'default' => false,
            'null' => false,
            'after' => 'caption',
        ]);
        $table->update();
    }
}
