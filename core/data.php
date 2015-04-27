<?php
    require_once 'redis/RedisController.php';
    if(empty($_POST['time']))exit();      
    set_time_limit(0);//无限请求超时时间   

    // 设置用户名称
    // $username=$_SESSION['username'];
    $username='user1';
    // 登录时保存全局变量

    $redis=new RedisController();

    $i=0;
    while (true) {
        # code...
        usleep(2000000);
        $i++;
        $value=$redis->getMessageByTimestamp($username);   
        if(!$value==null){

            $timestamp=(double)time();

            $redis->setUserTimestamp($username,$timestamp);

            $arr=array('success'=>'1','name'=>'zuston','text'=>$value);
            echo json_encode($arr);
            exit();
        }else{
            echo 'error';
            exit();
        }

        if($i==$_POST['time']){
            $arr=array('success'=>'0','name'=>'zuston','text'=>'error');
            echo json_encode($arr);
            exit();
        }
    }
    
    
