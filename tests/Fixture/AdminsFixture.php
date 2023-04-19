<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AdminsFixture
 */
class AdminsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'admin_id' => 1,
                'email' => 'Lorem ipsum dolor sit amet',
                'contact_number' => 1,
                'password' => 'Lorem ipsum dolor sit amet',
                'created' => 1681823368,
                'modified' => 1681823368,
                'DOB' => '2023-04-18',
                'image' => 'Lorem ipsum dolor sit amet',
                'street' => 'Lorem ipsum dolor sit amet',
                'suburb' => 'Lorem ipsum dolor sit amet',
                'post_code' => 1,
                'state' => 'Lorem ipsum dolor sit amet',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'middle_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
