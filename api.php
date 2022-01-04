<?php
class galleriesAPI extends CRUDAPI {

	public function buildRelation($relations,$relation){
    $recordDetails = $this->Auth->query('SELECT * FROM `pictures` WHERE `dirname` = ?',$relations[$relation['relationship']][$relation['link_to']]['dirname']);
    if($recordDetails->numRows() > 0){
      foreach($recordDetails->fetchAll()->All() as $recordDetail){
        $relations[$relation['relationship']][$relation['link_to']]['pictures'][$recordDetail['id']] = $recordDetail;
      }
    } else { $relations[$relation['relationship']][$relation['link_to']]['pictures'] = []; }
    return $relations;
  }
}
