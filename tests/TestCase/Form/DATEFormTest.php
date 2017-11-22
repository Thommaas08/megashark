<?php
namespace App\Test\TestCase\Form;

use App\Form\DATEForm;
use Cake\TestSuite\TestCase;

/**
 * App\Form\DATEForm Test Case
 */
class DATEFormTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Form\DATEForm
     */
    public $DATE;

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $this->DATE = new DATEForm();
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->DATE);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
