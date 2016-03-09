<?php
use Migrations\AbstractMigration;

class DropImgSrcField extends AbstractMigration
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
        $table
            ->removeColumn('img_src')
            ->update();
    }
}
