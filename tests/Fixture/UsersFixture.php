<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'email' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'created' => 1681823449,
                'modified' => 1681823449,
                'phone_number' => 1,
                'image' => 'Lorem ipsum dolor sit amet',
                'user_id' => 1,
                'street' => 'Lorem ipsum dolor sit amet',
                'suburb' => 'Lorem ipsum dolor sit amet',
                'post_code' => 1,
                'STATE' => 'Lorem ip',
                'first_name' => 'Lorem ipsum dolor sit amet',
                'middle_name' => 'Lorem ipsum dolor sit amet',
                'last_name' => 'Lorem ipsum dolor sit amet',
                'DOB' => '2023-04-18',
            ],
        ];
        parent::init();
    }
}
