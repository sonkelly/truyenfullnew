<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Maintag Model
 *
 * @method \App\Model\Entity\Maintag newEmptyEntity()
 * @method \App\Model\Entity\Maintag newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Maintag[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Maintag get($primaryKey, $options = [])
 * @method \App\Model\Entity\Maintag findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Maintag patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Maintag[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Maintag|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Maintag saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Maintag[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Maintag[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Maintag[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Maintag[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class MaintagTable extends Table
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

        $this->setTable('maintag');
        $this->setDisplayField('main_tag_id');
        $this->setPrimaryKey('main_tag_id');
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
            ->scalar('main_tag_name')
            ->maxLength('main_tag_name', 256)
            ->requirePresence('main_tag_name', 'create')
            ->notEmptyString('main_tag_name');

        $validator
            ->integer('main_tag_type')
            ->allowEmptyString('main_tag_type');

        $validator
            ->dateTime('createtime')
            ->allowEmptyDateTime('createtime');

        $validator
            ->dateTime('updatetime')
            ->allowEmptyDateTime('updatetime');

        return $validator;
    }
}
