<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * NewsletterSubscriptions Model
 *
 * @method \App\Model\Entity\NewsletterSubscription newEmptyEntity()
 * @method \App\Model\Entity\NewsletterSubscription newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\NewsletterSubscription[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\NewsletterSubscription get($primaryKey, $options = [])
 * @method \App\Model\Entity\NewsletterSubscription findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\NewsletterSubscription patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\NewsletterSubscription[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\NewsletterSubscription|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NewsletterSubscription saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\NewsletterSubscription[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\NewsletterSubscription[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\NewsletterSubscription[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\NewsletterSubscription[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class NewsletterSubscriptionsTable extends Table
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

        $this->setTable('newsletter_subscriptions');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->scalar('customer_name')
            ->maxLength('customer_name', 50)
            ->requirePresence('customer_name', 'create')
            ->notEmptyString('customer_name');

        $validator
            ->scalar('customer_email')
            ->maxLength('customer_email', 50)
            ->requirePresence('customer_email', 'create')
            ->notEmptyString('customer_email');



        return $validator;
    }
}
