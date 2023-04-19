<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher;


/**
 * User Entity
 *
 * @property string $email
 * @property string $password
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property int $phone_number
 * @property string|null $image
 * @property int $user_id
 * @property string $street
 * @property string $suburb
 * @property int $post_code
 * @property string $STATE
 * @property string $first_name
 * @property string|null $middle_name
 * @property string|null $last_name
 * @property \Cake\I18n\FrozenDate|null $DOB
 */
class User extends Entity
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
        'password' => true,
        'created' => true,
        'modified' => true,
        'phone_number' => true,
        'image' => true,
        'street' => true,
        'suburb' => true,
        'post_code' => true,
        'STATE' => true,
        'first_name' => true,
        'middle_name' => true,
        'last_name' => true,
        'DOB' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
    ];
    protected function _setPassword(string $password): ?string {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
        return $password;
    }
    //to retrieve the users full name
    protected function _getFullName(): string {
        return $this->first_name . ' ' .$this->middle_name . ' '.$this->last_name;
    }
    //to retrieve the users full address
    protected function _getUserFullAddress(): string {
        return $this->street . ' ' . $this->suburb . ' '. $this->post_code. ' '.$this->STATE;
    }


}
