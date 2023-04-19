<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Contactus Entity
 *
 * @property int $contact_id
 * @property string $full_name
 * @property string $email
 * @property int|null $contact_number
 * @property string|null $query
 * @property bool $query_replied
 * @property \Cake\I18n\FrozenTime $created
 */
class Contactus extends Entity
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
        'full_name' => true,
        'email' => true,
        'contact_number' => true,
        'query' => true,
        'query_replied' => true,
        'created' => true,
    ];
}
