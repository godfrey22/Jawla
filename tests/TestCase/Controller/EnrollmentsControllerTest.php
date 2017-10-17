<?php
namespace App\Test\TestCase\Controller;

use App\Controller\EnrollmentsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\EnrollmentsController Test Case
 */
class EnrollmentsControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.enrollments',
        'app.users',
        'app.enrollment_payer',
        'app.participants',
        'app.enrollment_participants',
        'app.studios',
        'app.events',
        'app.teachers',
        'app.class_types',
        'app.payments'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
