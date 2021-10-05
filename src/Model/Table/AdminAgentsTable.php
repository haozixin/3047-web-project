<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AdminAgents Model
 *
 * @property \App\Model\Table\AgentsTable&\Cake\ORM\Association\BelongsTo $Agents
 * @property \App\Model\Table\AdminsTable&\Cake\ORM\Association\BelongsTo $Admins
 *
 * @method \App\Model\Entity\AdminAgent newEmptyEntity()
 * @method \App\Model\Entity\AdminAgent newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AdminAgent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AdminAgent get($primaryKey, $options = [])
 * @method \App\Model\Entity\AdminAgent findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AdminAgent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AdminAgent[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AdminAgent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdminAgent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AdminAgent[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AdminAgent[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AdminAgent[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AdminAgent[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AdminAgentsTable extends Table
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

        $this->setTable('admin_agents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Agents', [
            'foreignKey' => 'agent_id',
        ]);
        $this->belongsTo('Admins', [
            'foreignKey' => 'admin_id',
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
            ->integer('price')
            ->requirePresence('price', 'create')
            ->notEmptyString('price');

        $validator
            ->scalar('comments')
            ->maxLength('comments', 256)
            ->requirePresence('comments', 'create')
            ->notEmptyString('comments');

        $validator
            ->date('cooperation_start_date')
            ->requirePresence('cooperation_start_date', 'create')
            ->notEmptyDate('cooperation_start_date');

        $validator
            ->date('cooperation_end_date')
            ->requirePresence('cooperation_end_date', 'create')
            ->notEmptyDate('cooperation_end_date');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['agent_id'], 'Agents'), ['errorField' => 'agent_id']);
        $rules->add($rules->existsIn(['admin_id'], 'Admins'), ['errorField' => 'admin_id']);

        return $rules;
    }
}
