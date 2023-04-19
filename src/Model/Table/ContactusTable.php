<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Contactus Model
 *
 * @method \App\Model\Entity\Contactus newEmptyEntity()
 * @method \App\Model\Entity\Contactus newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Contactus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Contactus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Contactus findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Contactus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Contactus[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Contactus|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contactus saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Contactus[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contactus[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contactus[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Contactus[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ContactusTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('contactus');
        $this->setDisplayField('contact_id');
        $this->setPrimaryKey('contact_id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->scalar('full_name')
            ->maxLength('full_name', 300)
            ->requirePresence('full_name', 'create')
            ->notEmptyString('full_name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->integer('contact_number')
            ->allowEmptyString('contact_number');

        $validator
            ->scalar('query')
            ->allowEmptyString('query');

        $validator
            ->boolean('query_replied')
            ->requirePresence('query_replied', 'create')
            ->notEmptyString('query_replied');

        return $validator;
    }
}
