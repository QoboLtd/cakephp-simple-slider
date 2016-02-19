<?php
namespace SimpleSlider\Test\TestCase\Model\Table;

use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;
use SimpleSlider\Model\Table\SlidesTable;

/**
 * SimpleSlider\Model\Table\SlidesTable Test Case
 */
class SlidesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \SimpleSlider\Model\Table\SlidesTable
     */
    public $Slides;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'plugin.simple_slider.slides',
        'plugin.simple_slider.galleries',
        'plugin.simple_slider.attrs'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Slides') ? [] : ['className' => 'SimpleSlider\Model\Table\SlidesTable'];
        $this->Slides = TableRegistry::get('Slides', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Slides);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
