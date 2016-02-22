<?php
use Migrations\AbstractMigration;

class AlterSlides extends AbstractMigration
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
        $table->addColumn('img_src', 'string', [
            'after' => 'title',
            'default' => null,
            'limit' => 255,
            'null' => false,
        ]);
        $table->update();
    }
}
