<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FundsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FundsTable Test Case
 */
class FundsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\FundsTable
     */
    public $Funds;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.funds',
        'app.institutions',
        'app.agenda_posters',
        'app.agendas',
        'app.check_productions',
        'app.communications',
        'app.estimate_controls',
        'app.events',
        'app.juridical_relations',
        'app.special_projects',
        'app.type_events',
        'app.internal_events',
        'app.fiscals',
        'app.surrogates',
        'app.producers',
        'app.information_productions',
        'app.sub_events',
        'app.historic_occurrences',
        'app.occurrences',
        'app.type_occurrences',
        'app.locals',
        'app.cinemas',
        'app.movie_countries',
        'app.temp_posters',
        'app.age_groups',
        'app.users',
        'app.groups',
        'app.permissions',
        'app.call_comments',
        'app.calls',
        'app.formation_effectives',
        'app.formations',
        'app.historics',
        'app.legal_persons',
        'app.log_reopenings',
        'app.logs',
        'app.physical_persons',
        'app.times',
        'app.funds_users',
        'app.locals_users',
        'app.legal_representatives',
        'app.musics',
        'app.services',
        'app.temp_datas',
        'app.theater_dances',
        'app.upload_events',
        'app.workshops',
        'app.hiring_requests',
        'app.weblogs',
        'app.historic_hiring_resquests'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Funds') ? [] : ['className' => 'App\Model\Table\FundsTable'];
        $this->Funds = TableRegistry::get('Funds', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Funds);

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
