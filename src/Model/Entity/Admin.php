<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Admin Entity
 *
 * @property int $admin_id
 * @property string $email
 * @property int $contact_number
 * @property string $password
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenDate|null $DOB
 * @property string|null $image
 * @property string $street
 * @property string $suburb
 * @property int $post_code
 * @property string $state
 * @property string $first_name
 * @property string|null $middle_name
 * @property string|null $last_name
 */
class Admin extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'email' => true,
        'contact_number' => true,
        'password' => true,
        'created' => true,
        'modified' => true,
        'DOB' => true,
        'image' => true,
        'street' => true,
        'suburb' => true,
        'post_code' => true,
        'state' => true,
        'first_name' => true,
        'middle_name' => true,
        'last_name' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
}
