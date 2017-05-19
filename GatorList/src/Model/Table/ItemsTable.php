<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Item get($primaryKey, $options = [])
 * @method \App\Model\Entity\Item newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Item[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Item[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItemsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('items');
        $this->setDisplayField('title');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
        $this->addBehavior('Proffer.Proffer', [
    'photo' => [    // The name of your upload field
        'root' => WWW_ROOT. 'img', // Customise the root upload folder here, or omit to use the default
        'dir' => 'photo_dir',    // The name of the field to store the folder
        'thumbnailSizes' => [ // Declare your thumbnails
            'square' => [    // Define the prefix of your thumbnail
                'w' => 200,    // Width
                'h' => 200,    // Height
                'jpeg_quality'    => 100
            ],
            'portrait' => [        // Define a second thumbnail
                'w' => 100,
                'h' => 300
            ],
        ],
        'thumbnailMethod' => 'gd'    // Options are Imagick or Gd
    ]
]);
         $this->addBehavior('Search.Search');
         $this->searchManager()
            ->value('category_id')
          //'search' is the name we give to the form bar
                 //we use %LIKE% to search our table for any matching input from user
            ->add('search', 'Search.Like', [
                'filterEmpty' => true,
                'before' => true,
                'after' => true,
                'fieldMode' => 'OR',
                'comparison' => 'LIKE',
                'wildcardAny' => '*',
                'wildcardOne' => '?',
                'field' => ['title', 'description'], //we want search to work for user input in title and description
                ['rule'=>['email'],
                    'message' => "must contain alphanumeric"]     
               
            ]);
           $validate = ['search' => array(
            'rule' =>('notempty'),
        'message' => "Search is required",
        'required' =>true
            )
        
            ];

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
       $this->belongsTo('Categorys', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('title');

        $validator
            ->allowEmpty('description');

        $validator
            ->allowEmpty('url');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['user_id'], 'Users'));

        return $rules;
    }
}
