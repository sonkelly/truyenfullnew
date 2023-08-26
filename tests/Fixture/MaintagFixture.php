<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MaintagFixture
 */
class MaintagFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'maintag';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'main_tag_id' => 1,
                'main_tag_name' => 'Lorem ipsum dolor sit amet',
                'main_tag_type' => 1,
                'createtime' => '',
                'updatetime' => '',
            ],
        ];
        parent::init();
    }
}
