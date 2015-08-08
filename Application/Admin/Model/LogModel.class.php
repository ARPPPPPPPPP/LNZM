<?php
namespace Admin\Model;
use Think\Model;
use Think\Model\MongoModel;
class LogModel extends MongoModel {
	protected $connection = array(
			'db_type' => 'mongo',
			'db_user' => '',//用户名
			'db_pwd' => '',//密码
			'db_host' => '127.0.0.1',//数据库地址
			'db_port' => '27017',//数据库端口 默认27017
			'db_name' => 'lnzm',//数据库名 ,实际上不起作用,如果和你的全局配置有冲突的话,还是用的你的全局配置数据库名
			'db_charset' => 'utf8',
	);
	protected $dbName='lnzm';//如果配置了全局配置,mongodb数据库和mysql数据库名称不一样的话,必须配置此项
	protected $trueTableName = 'log';//数据表名
	Protected $_idType = self::TYPE_INT; //参考手册
	protected $_autoinc = true;//参考手册
}