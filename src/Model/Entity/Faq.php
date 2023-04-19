<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Faq Entity
 *
 * @property int $id
 * @property string|null $question1
 * @property string|null $response1
 * @property string|null $question2
 * @property string|null $response2
 * @property string|null $question3
 * @property string|null $response3
 * @property string|null $question4
 * @property string|null $response4
 * @property string|null $question5
 * @property string|null $response5
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Faq extends Entity
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
        'question1' => true,
        'response1' => true,
        'question2' => true,
        'response2' => true,
        'question3' => true,
        'response3' => true,
        'question4' => true,
        'response4' => true,
        'question5' => true,
        'response5' => true,
        'created' => true,
        'modified' => true,
    ];
}
