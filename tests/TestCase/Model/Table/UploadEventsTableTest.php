<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UploadEventsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UploadEventsTable Test Case
 */
class UploadEventsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\UploadEventsTable
     */
    public $UploadEvents;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.upload_events',
        'app.events',
        'app.juridical_relations',
        'app.special_projects',
        'app.institutions',
        'app.agenda_posters',
        'app.agendas',
        'app.check_productions',
        'app.communications',
        'app.estimate_controls',
        'app.funds',
        'app.hiring_requests',
        'app.historic_hiring_resquests',
        'app.users',
        'app.groups',
        'app.permissions',
        'app.call_comments',
        'app.calls',
        'app.type_calls',
        'app.log_reopenings',
        'app.status',
        'app.status_calls',
        'app.formation_effectives',
        'app.formations',
        'app.historics',
        'app.legal_persons',
        'app.logs',
        'app.physical_persons',
        'app.times',
        'app.funds_users',
        'app.locals',
        'app.detail_locals',
        'app.historic_occurrences',
        'app.occurrences',
        'app.sub_events',
        'app.type_events',
        'app.internal_events',
        'app.fiscals',
        'app.surrogates',
        'app.producers',
        'app.information_productions',
        'app.temp_posters',
        'app.type_occurrences',
        'app.cinemas',
        'app.movie_countries',
        'app.locals_users',
        'app.weblogs',
        'app.age_groups',
        'app.legal_representatives',
        'app.musics',
        'app.services',
        'app.temp_datas',
        'app.theater_dances',
        'app.workshops'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('UploadEvents') ? [] : ['className' => 'App\Model\Table\UploadEventsTable'];
        $this->UploadEvents = TableRegistry::get('UploadEvents', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UploadEvents);

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
