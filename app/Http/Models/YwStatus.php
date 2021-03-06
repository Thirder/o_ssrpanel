<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * SS节点信息
 * Class SsNode
 *
 * @package App\Http\Models
 */
class YwStatus extends Model
{
    protected $table = 'yw_status';
    protected $primaryKey = 'l_id';
    public $timestamps = false;//关闭create_at,update_at

  public function SsNode()
  {
    return $this->hasOne(SsNode::class, 'id', 'l_sn_id');
  }
}