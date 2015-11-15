<?php
class Post extends AppModel {
	public $validate = array(
			'title' => array(
				'rule' => 'notSpace',
				'message' => '空白以外の文字も入力してください'
			),
			'body' => array(
				'rule' => 'notSpace',
				'message' => '空白以外の文字も入力してください'
			)
	);
}