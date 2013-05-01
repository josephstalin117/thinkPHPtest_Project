<?php
class ArticleModel extends RelationModel{
    protected $_link=array(
      'Content'=>array(
          'mapping_type'=>HAS_ONE,
          'class_name'=>'Content',
          'foreign_key'=>'Aid',
      ),  
    );
}

?>
