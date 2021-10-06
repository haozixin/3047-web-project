<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Agents Model
 *
 * @property \App\Model\Table\AdminAgentsTable&\Cake\ORM\Association\HasMany $AdminAgents
 *
 * @method \App\Model\Entity\Agent newEmptyEntity()
 * @method \App\Model\Entity\Agent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Agent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Agent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Agent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AgentsTable extends Table
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

        $this->setTable('agents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('AdminAgents', [
            'foreignKey' => 'agent_id',
        ]);
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('given_name')
            ->maxLength('given_name', 64)
            ->requirePresence('given_name', 'create')
            ->notEmptyString('given_name');


        $validator
            ->scalar('family_name')
            ->maxLength('family_name', 64)
            ->requirePresence('family_name', 'create')
            ->notEmptyString('family_name');

        $validator
            ->scalar('state')
            ->requirePresence('state', 'create')
            ->notEmptyString('state');
        $validator
            ->scalar('city')
            ->requirePresence('city', 'create')
            ->notEmptyString('city');
        $validator
            ->scalar('street')
            ->requirePresence('street', 'create')
            ->notEmptyString('street');

        $validator
            ->scalar('country')
            ->requirePresence('country', 'create')
            ->notEmptyString('country');
        $validator
            ->add("email", [
                "valid_email" => [
                    "rule" => ["email"],
                    "message" => "Email Address is not valid Please try again.(e.g.abc@example.com)",
                ]])
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('subscription_status')
            ->maxLength('subscription_status', 64)
            ->requirePresence('subscription_status', 'create')
            ->notEmptyString('subscription_status');

        $validator
            ->scalar('user_name')
            ->maxLength('user_name', 64)
            ->requirePresence('user_name', 'create')
            ->notEmptyString('user_name');

        $validator
            ->scalar('password')
            ->maxLength('password', 640)
            ->requirePresence('password', 'create')
            ->notEmptyString('password');

        return $validator;
    }
}
