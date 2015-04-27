<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>chatting-room||ZUSTON</title>

	<!-- css -->
	<link href="template/css/base.min.css" rel="stylesheet">

	<script type="text/javascript" src="template/js/jquery-1.7.2.min.js"></script>
	<!-- favicon -->
	<!-- ... -->

	
	<script type="text/javascript">
		$(function(){
		// 	$('.header-logo').click(function(e){
		// 		// alert(2323);
		// 	    $.ajax({      
		// 	                type:"POST",      
		// 	                dataType:"json",      
		// 	                url:"data.php",      
		// 	                timeout:40000,     //ajax请求超时时间80秒      
		// 	                data:{time:"80"}, //40秒后无论结果服务器都返回数据      
		// 	                success:function(data,textStatus){      
		// 	                    //从服务器得到数据，显示数据并继续查询      
		// 	                    if(data.success=="1"){  
		// 	                     var length=data.text.length;
		// 	                     var sortLength=length/2;
		// 	                     for(var i=0;i<sortLength;i++){
		// 	                     	// alert(i);
		// 	                     	// $('#content').append('[内容]'+data.text[i*2]);
		// 	                     	$('#content').before('<div class="tile tile-collapse"><div class="tile-toggle" data-target="#tile-collapse-'+i+'" data-toggle="tile"><div class="pull-left tile-side"><div class="avatar avatar-red avatar-sm"><span class="icon icon-launch"></span></div></div><div class="tile-action" data-ignore="tile"><ul class="nav nav-list pull-right"><li><a href="javascript:void(0)"><span class="access-hide">Add</span><span class="icon icon-add"></span></a></li><li><a href="javascript:void(0)"><span class="access-hide">Delete</span><span class="icon icon-delete"></span></a></li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="access-hide">Edit</span><span class="icon icon-settings"></span></a><ul class="dropdown-menu"><li><a href="javascript:void(0)"><span class="icon icon-loop margin-right-half"></span>Lorem Ipsum</a></li><li><a href="javascript:void(0)"><span class="icon icon-replay margin-right-half"></span>Consectetur Adipiscing</a></li><li><a href="javascript:void(0)"><span class="icon icon-shuffle margin-right-half"></span>Sed Ornare</a></li></ul></li></ul></div><div class="tile-inner"><div class="text-overflow">'+data.text[i*2]+'</div></div></div><div class="tile-active-show collapse" id="tile-collapse-'+i+'"><div class="tile-sub"><p>Additional information<br><small>Aliquam in pharetra leo. In congue, massa sed elementum dictum, justo quam efficitur risus, in posuere mi orci ultrices diam.</small></p></div><div class="tile-footer"><ul class="nav nav-list pull-left"><li><a href="javascript:void(0)"><span class="icon icon-check"></span>&nbsp;OK</a></li><li><a data-dismiss="tile" href="javascript:void(0)"><span cla ss="icon icon-close"></span>&nbsp;Cancel</a></li></ul></div></div></div>');
		// 	                     	// $('#time').append('[时间]'+data.text[i*2+1]);
		// 	                     }    
		// 	                     // $("#msg").append("<br>[有数据]"+data.text.length);      
		// 	                     $('.header-logo').click();      
		// 	                    }      
		// 	                 //未从服务器得到数据，继续查询      
		// 	                    if(data.success=="0"){      
		// 	                    $("#msg").append("<br>[无数据]");      
		// 	                    $('.header-logo').click();      
		// 	                    }      
		// 	                },      
		// 	             //Ajax请求超时，继续查询      
		// 	             error:function(XMLHttpRequest,textStatus,errorThrown){      
		// 	                     if(textStatus=="timeout"){      
		// 	                         $("#msg").append("<br>[超时]");      
		// 	                         $('.header-logo').click();      
		// 	                     }      
		// 	             }      
			                      
		// 	            })
			                    
		// });

		function listerner(){
			$.ajax({      
			                type:"POST",      
			                dataType:"json",      
			                url:"index.php?listener=data",      
			                timeout:40000,     //ajax请求超时时间80秒      
			                data:{time:"80"}, //40秒后无论结果服务器都返回数据      
			                success:function(data,textStatus){      
			                    //从服务器得到数据，显示数据并继续查询 
			                    var timestamp = Date.parse(new Date());      
			                    if(data.success=="1"){  
			                     var length=data.text.length;
			                     var sortLength=length/2;
			                     for(var i=0;i<sortLength;i++){
			                     	// alert(i);
			                     	// $('#content').append('[内容]'+data.text[i*2]);
			                     	$('#content').before('<div class="tile tile-collapse"><div class="tile-toggle" data-target="#tile-collapse-'+timestamp+'" data-toggle="tile"><div class="pull-left tile-side"><div class="avatar avatar-red avatar-sm"><span class="icon icon-launch"></span></div></div><div class="tile-action" data-ignore="tile"><ul class="nav nav-list pull-right"><li><a href="javascript:void(0)"><span class="access-hide">Add</span><span class="icon icon-add"></span></a></li><li><a href="javascript:void(0)"><span class="access-hide">Delete</span><span class="icon icon-delete"></span></a></li><li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown"><span class="access-hide">Edit</span><span class="icon icon-settings"></span></a><ul class="dropdown-menu"><li><a href="javascript:void(0)"><span class="icon icon-loop margin-right-half"></span>Lorem Ipsum</a></li><li><a href="javascript:void(0)"><span class="icon icon-replay margin-right-half"></span>Consectetur Adipiscing</a></li><li><a href="javascript:void(0)"><span class="icon icon-shuffle margin-right-half"></span>Sed Ornare</a></li></ul></li></ul></div><div class="tile-inner"><div class="text-overflow">'+data.text[i*2]+'</div></div></div><div class="tile-active-show collapse" id="tile-collapse-'+timestamp+'"><div class="tile-sub"><p>信息时间戳<br><small>'+data.text[i*2+1]+'</small></p></div><div class="tile-footer"><ul class="nav nav-list pull-left"><li><a href="javascript:void(0)"><span class="icon icon-check"></span>&nbsp;OK</a></li><li><a data-dismiss="tile" href="javascript:void(0)"><span cla ss="icon icon-close"></span>&nbsp;Cancel</a></li></ul></div></div></div>');
			                     	// $('#time').append('[时间]'+data.text[i*2+1]);
			                     }    
			                     // $("#msg").append("<br>[有数据]"+data.text.length);      
			                        listerner();      
			                    }      
			                 //未从服务器得到数据，继续查询      
			                    if(data.success=="0"){      
			                        
			                    	listerner();      
			                    }      
			                },      
			             //Ajax请求超时，继续查询      
			             error:function(XMLHttpRequest,textStatus,errorThrown){      
			                     // if(textStatus=="error"){      
			                         listerner();  
			                           
			             }      
			                      
			            })
		}
		listerner();
		$('#submit').click(function(e){
			var data=$('#float-text').val();
			// alert(data);
			if(data!=''){
				$('#float-text').val('');
				$.ajax({
				type:"GET",      
			    dataType:"json",      
			    url:"index.php",      
			    timeout:10000,            //ajax请求超时时间80秒      
			    data:{value:data}, //40秒后无论结果服务器都返回数据      
			    success:function(data,textStatus){
			    if(data.success==1){
			    	
			    }else{
			       
			          }
			     }
			})

			}else{
				alert('为空');
			}
		})
})
	</script>
</head>
<body>
	<header class="header">
		<ul class="nav nav-list pull-left">
			<li>
				<a class="menu-toggle" href="#menu">
					<span class="access-hide">Menu</span>
					<span class="icon icon-menu"></span>
					<span class="header-close icon icon-close"></span>
				</a>
			</li>
		</ul>
		<a class="header-logo">Zuston</a>
		<ul class="nav nav-list pull-right">
			<li>
				<a class="menu-toggle" href="#search">
					<span class="access-hide">Search</span>
					<span class="icon icon-search"></span>
					<span class="header-close icon icon-close"></span>
				</a>
			</li>
			<li>
				<a class="menu-toggle" href="#profile">
					<span class="access-hide">John Smith</span>
					<span class="avatar avatar-sm"><img alt="alt text for John Smith avatar" src="template/images/users/avatar-001.jpg"></span>
					<span class="header-close icon icon-close"></span>
				</a>
			</li>
		</ul>
	</header>
	
	
	
	<div class="content">
		<div class="content-heading">
			<div class="container">
				<h1 class="heading">聊天主界面------<?php echo $_SESSION['username'];?></h1>
				
			</div>
		</div>
		<div class="content-inner">
			<div class="container">
				
				
					
				<div class='form'>
						<legend>发言中心</legend>
						<div class="form-group form-group-label">
							<div class="row">
								<div class="col-lg-6 col-sm-8">
									<label class="floating-label" for="float-text">Input Field</label>
									<input class="form-control" id="float-text" type="text" name='content'>
								</div>
							</div>
						</div>
						<div class="form-group-btn">
						<button class="btn btn-blue waves-button waves-light waves-effect" type="submit" id='submit'>提交</button><button class="btn waves-button waves-effect" type="button">取消</button>
						</div>
				</div>
				<h2 class="content-sub-heading">消息列表</h2>
				<div class="tile-wrap" id='content'>
					<!-- 填充消息列表 -->
				</div>
				
				
				
				
				
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<p>designed by zuston |  theme by google</p>
		</div>
	</footer>
	<div class="fbtn-container">
		<div class="fbtn-inner">
			<a class="fbtn fbtn-red fbtn-lg waves-circle waves-effect waves-light" data-toggle="dropdown" title="Upload"><span class="access-hide">Action</span><span class="fbtn-ori icon icon-add"></span><span class="fbtn-sub icon icon-edit"></span></a>
			<div class="fbtn-dropdown">
				<a class="fbtn fbtn-blue waves-circle waves-effect waves-light" href="javascript:void(0)"><span class="fbtn-text">Action 1</span><span class="icon icon-mic"></span></a>
				<a class="fbtn fbtn-green waves-circle waves-effect waves-light" href="javascript:void(0)"><span class="fbtn-text">Action 2</span><span class="icon icon-image"></span></a>
				<a class="fbtn fbtn-yellow waves-circle waves-effect waves-light" href="javascript:void(0)"><span class="fbtn-text">Action 3</span><span class="icon icon-videocam"></span></a>
			</div>
		</div>
	</div>

	<script src="template/js/base.min.js" type="text/javascript"></script>
</body>
</html>