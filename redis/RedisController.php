<?php 

// redis数据结构
// 登录用户hashmap 
// 				key:login 
// 				memember:user2
// 				value:password
// 信息sorted sets 
// 				key:user2-content
// 				score:timestamp
// 				value:content
// 用户最近时间戳string
// 				key:user2-timestamp
// 				value:timestamp
date_default_timezone_set('PRC');
	class RedisController{
		
		public $redisInstance;
		public $redisConfig = array (
										'host' => '127.0.0.1',
										'port' => '6379'
									);
		public $loginHashMap = 'login';
		public $contents = array();
		public $contentTime=array();
									
		public function __construct(){
			$this->redisInstance = new Redis();
			$this->redisInstance -> connect(
											$this->redisConfig['host'],
											$this->redisConfig['port']
											);
		}
		
		// 将登陆姓名与密码设置为hash列表,hash表为login
		// memember为username

		public function setLoginHashMap($name,$password){
			$this->redisInstance->hset($loginHashMap,$name,$password);
			return 1;
		}

		public function getLoginHashMapByKey($name){
			$value=$this->redisInstance->hget($this->loginHashMap,$name);
			return $value;
		}
		public function getLoginHashMapAll(){
			$value=$this->redisInstance->hgetall($this->loginHashMap);
			return $value;
		}
		

		// 将消息列表放在有序列表中,params为
		// username,content,time
		// 一个用户一个username,将有序列表的key设置为username,而uername的取值从login为key的hash表中取得
		public function setMessageSS($username,$content){
			$this->redisInstance->zadd($username.'-content',time(),$content);
			return 1;
		}

		//获取全部数据,遍历用户
		public function getMessageSS(){
			// return $this->redisInstance->zrange($username.'-content',0,-1);

			$userSorts=RedisController::getLoginHashMapAll();
			foreach ($userSorts as $k => $v) {
				# code...
				// $this->contents=$this->contents.' '.$this->redisInstance->zrange($key.'-content',0,-1);
				$userContent=$this->redisInstance->zrange($k.'-content',0,-1);
				if(is_array($userContent)){
					foreach ($userContent as $key => $value) {
						# code...
						$this->contents[]=$value;
						$creatTime=$this->redisInstance->zscore($k.'-content',$value);
						$this->contents[]=$creatTime;
					}
				}
			}
			return $this->contents;
			// var_dump($userSorts);			
		}
		

		//按照时间戳来获取时间，是按照用户的信息来获取
		/*
			缺乏一个排序算法来实现
		*/
		public function getMessageByTimestamp($username){
			$timestamp=(double)$this->redisInstance->get($username.'-timestamp');
			// echo $timestamp;

			// return $this->redisInstance->zrangebyscore($username.'-content',$timestamp,2020202020);
			$userSorts=RedisController::getLoginHashMapAll();
			foreach ($userSorts as $key => $value) {
				# code...
				// $timestamp=(double)$this->redisInstance->get($key.'-timestamp');
				$userContent=$this->redisInstance->zrangebyscore($key.'-content',$timestamp,2020202020);
				if(is_array($userContent)){
					foreach ($userContent as $k => $v) {
						# code...
						$this->contents[]=$v;

						// 将时间戳保存在数组，转换为正常时间
						$creatTime=$this->redisInstance->zscore($key.'-content',$v);
						$creatTime=date('Y-m-d H:i:s', $creatTime);
						$this->contents[]=$creatTime;
					}
				}
			}
			/*排序数组*/
			// ksort($this->contents);
			return $this->contents;
		}

		//设置一个用户接收的最近消息的最近时间戳
		public function setUserTimestamp($username,$timestamp){
			$this->redisInstance->set($username.'-timestamp',$timestamp);
		}


		public function resetTimestamp($username,$value){
			$v=$this->redisInstance->getset($username."-timestamp",$value);
			return $v;
		}
	}
