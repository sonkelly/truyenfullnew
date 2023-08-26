<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Maintag Entity
 *
 * @property int $main_tag_id
 * @property string $main_tag_name
 * @property int|null $main_tag_type
 * @property \Cake\I18n\FrozenTime|null $createtime
 * @property \Cake\I18n\FrozenTime|null $updatetime
 */
class Maintag extends Entity
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
        'main_tag_name' => true,
        'main_tag_type' => true,
        'createtime' => true,
        'updatetime' => true,
    ];
}
