<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-08 00:01:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::get_user() ~ APPPATH/classes/Controller/Admin/User.php [ 31 ] in file:line
2015-01-08 00:01:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 00:02:23 --- EMERGENCY: RedisException [ 0 ]: Connection closed ~ APPPATH/classes/Controller/Admin/User.php [ 32 ] in /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php:32
2015-01-08 00:02:23 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(32): session_start()
#1 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_test()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#6 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#7 {main} in /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php:32
2015-01-08 00:22:01 --- EMERGENCY: ErrorException [ 1 ]: Class 'session' not found ~ APPPATH/classes/Controller/Admin/User.php [ 32 ] in file:line
2015-01-08 00:22:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 00:39:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH/classes/Model/User.php [ 28 ] in /home/samba/kongfangbao/code/application/classes/Model/User.php:28
2015-01-08 00:39:40 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Model/User.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/samba/kon...', 28, Array)
#1 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(42): Model_User->get_user(1)
#2 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#7 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#8 {main} in /home/samba/kongfangbao/code/application/classes/Model/User.php:28
2015-01-08 00:51:50 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 20 ] in file:line
2015-01-08 00:51:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 00:52:51 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 19 ] in file:line
2015-01-08 00:52:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 00:53:07 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 19 ] in file:line
2015-01-08 00:53:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 00:53:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 19 ] in file:line
2015-01-08 00:53:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 00:59:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 19 ] in file:line
2015-01-08 00:59:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 00:59:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 23 ] in file:line
2015-01-08 00:59:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 00:59:40 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 23 ] in file:line
2015-01-08 00:59:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 01:00:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 22 ] in file:line
2015-01-08 01:00:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 01:00:10 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 22 ] in file:line
2015-01-08 01:00:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 01:00:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 22 ] in file:line
2015-01-08 01:00:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 01:00:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 22 ] in file:line
2015-01-08 01:00:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 01:01:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Model/User.php [ 15 ] in /home/samba/kongfangbao/code/application/classes/Model/User.php:15
2015-01-08 01:01:17 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Model/User.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/samba/kon...', 15, Array)
#1 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(58): Model_User->exist('username', 'tom')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#7 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#8 {main} in /home/samba/kongfangbao/code/application/classes/Model/User.php:15
2015-01-08 01:01:32 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 20 ] in file:line
2015-01-08 01:01:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 01:02:15 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 20 ] in file:line
2015-01-08 01:02:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 01:02:31 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 18 ] in file:line
2015-01-08 01:02:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 01:02:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Model/User.php [ 15 ] in /home/samba/kongfangbao/code/application/classes/Model/User.php:15
2015-01-08 01:02:48 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Model/User.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/samba/kon...', 15, Array)
#1 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(58): Model_User->exist('username', 'tom')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#7 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#8 {main} in /home/samba/kongfangbao/code/application/classes/Model/User.php:15
2015-01-08 01:03:00 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::excute() ~ APPPATH/classes/Model/User.php [ 21 ] in file:line
2015-01-08 01:03:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 01:05:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/Model/User.php [ 19 ] in /home/samba/kongfangbao/code/application/classes/Model/User.php:19
2015-01-08 01:05:08 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Model/User.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/samba/kon...', 19, Array)
#1 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(58): Model_User->exist('username', 'tom')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#7 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#8 {main} in /home/samba/kongfangbao/code/application/classes/Model/User.php:19
2015-01-08 01:05:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/Model/User.php [ 16 ] in /home/samba/kongfangbao/code/application/classes/Model/User.php:16
2015-01-08 01:05:19 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Model/User.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/samba/kon...', 16, Array)
#1 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(58): Model_User->exist('username', 'tom')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#7 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#8 {main} in /home/samba/kongfangbao/code/application/classes/Model/User.php:16
2015-01-08 01:05:29 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/Model/User.php [ 16 ] in /home/samba/kongfangbao/code/application/classes/Model/User.php:16
2015-01-08 01:05:29 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Model/User.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/samba/kon...', 16, Array)
#1 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(58): Model_User->exist('username', 'tom')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#7 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#8 {main} in /home/samba/kongfangbao/code/application/classes/Model/User.php:16
2015-01-08 01:05:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: res ~ APPPATH/classes/Model/User.php [ 16 ] in /home/samba/kongfangbao/code/application/classes/Model/User.php:16
2015-01-08 01:05:39 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Model/User.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/samba/kon...', 16, Array)
#1 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(58): Model_User->exist('username', 'tom')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#7 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#8 {main} in /home/samba/kongfangbao/code/application/classes/Model/User.php:16
2015-01-08 01:06:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/Model/User.php [ 19 ] in /home/samba/kongfangbao/code/application/classes/Model/User.php:19
2015-01-08 01:06:00 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Model/User.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/samba/kon...', 19, Array)
#1 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(58): Model_User->exist('username', 'tom')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#7 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#8 {main} in /home/samba/kongfangbao/code/application/classes/Model/User.php:19
2015-01-08 01:14:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/Model/User.php [ 19 ] in /home/samba/kongfangbao/code/application/classes/Model/User.php:19
2015-01-08 01:14:40 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Model/User.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/samba/kon...', 19, Array)
#1 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(58): Model_User->exist('username', 'tom')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#7 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#8 {main} in /home/samba/kongfangbao/code/application/classes/Model/User.php:19
2015-01-08 01:14:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/Model/User.php [ 19 ] in /home/samba/kongfangbao/code/application/classes/Model/User.php:19
2015-01-08 01:14:42 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Model/User.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/samba/kon...', 19, Array)
#1 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(58): Model_User->exist('username', 'tom')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#7 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#8 {main} in /home/samba/kongfangbao/code/application/classes/Model/User.php:19
2015-01-08 01:15:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: total ~ APPPATH/classes/Model/User.php [ 19 ] in /home/samba/kongfangbao/code/application/classes/Model/User.php:19
2015-01-08 01:15:16 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Model/User.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/samba/kon...', 19, Array)
#1 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(58): Model_User->exist('username', 'tom')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#7 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#8 {main} in /home/samba/kongfangbao/code/application/classes/Model/User.php:19
2015-01-08 01:26:08 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/admin/user/add.php [ 2 ] in /home/samba/kongfangbao/code/application/views/admin/user/add.php:2
2015-01-08 01:26:08 --- DEBUG: #0 /home/samba/kongfangbao/code/application/views/admin/user/add.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/samba/kon...', 2, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(62): include('/home/samba/kon...')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/samba/kon...', Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(60): Kohana_Response->body(Object(View))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#9 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#11 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#12 {main} in /home/samba/kongfangbao/code/application/views/admin/user/add.php:2
2015-01-08 01:28:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/admin/user/add.php [ 2 ] in /home/samba/kongfangbao/code/application/views/admin/user/add.php:2
2015-01-08 01:28:35 --- DEBUG: #0 /home/samba/kongfangbao/code/application/views/admin/user/add.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/samba/kon...', 2, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(62): include('/home/samba/kon...')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/samba/kon...', Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(66): Kohana_Response->body(Object(View))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#9 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#11 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#12 {main} in /home/samba/kongfangbao/code/application/views/admin/user/add.php:2
2015-01-08 01:28:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH/views/admin/user/add.php [ 2 ] in /home/samba/kongfangbao/code/application/views/admin/user/add.php:2
2015-01-08 01:28:37 --- DEBUG: #0 /home/samba/kongfangbao/code/application/views/admin/user/add.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/samba/kon...', 2, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(62): include('/home/samba/kon...')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/samba/kon...', Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(66): Kohana_Response->body(Object(View))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#9 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#11 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#12 {main} in /home/samba/kongfangbao/code/application/views/admin/user/add.php:2
2015-01-08 01:42:53 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/admin/user/add.php [ 6 ] in /home/samba/kongfangbao/code/application/views/admin/user/add.php:6
2015-01-08 01:42:53 --- DEBUG: #0 /home/samba/kongfangbao/code/application/views/admin/user/add.php(6): Kohana_Core::error_handler(8, 'Array to string...', '/home/samba/kon...', 6, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(62): include('/home/samba/kon...')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/samba/kon...', Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(75): Kohana_Response->body(Object(View))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#9 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#11 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#12 {main} in /home/samba/kongfangbao/code/application/views/admin/user/add.php:6
2015-01-08 01:46:01 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/views/admin/user/add.php [ 6 ] in /home/samba/kongfangbao/code/application/views/admin/user/add.php:6
2015-01-08 01:46:01 --- DEBUG: #0 /home/samba/kongfangbao/code/application/views/admin/user/add.php(6): Kohana_Core::error_handler(8, 'Array to string...', '/home/samba/kon...', 6, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(62): include('/home/samba/kon...')
#2 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/samba/kon...', Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(75): Kohana_Response->body(Object(View))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#9 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#11 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#12 {main} in /home/samba/kongfangbao/code/application/views/admin/user/add.php:6
2015-01-08 02:06:52 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'confirm' in 'field list' [ INSERT INTO rd_user (username, password, confirm) VALUES ('jack', '8bf36b967749e7a0545eade7426ebbef9ea1a249d24d6baf31b55352caef33f5', '123456') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:06:52 --- DEBUG: #0 /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rd_...', false, Array)
#1 /home/samba/kongfangbao/code/application/classes/Model/User.php(11): Kohana_Database_Query->execute()
#2 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(68): Model_User->add_user(Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#8 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#9 {main} in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:12:20 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Admin/User.php [ 68 ] in /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php:68
2015-01-08 02:12:20 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(68): Kohana_Core::error_handler(8, 'Array to string...', '/home/samba/kon...', 68, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#6 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#7 {main} in /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php:68
2015-01-08 02:16:54 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'username' at row 1 [ INSERT INTO rd_user (username, password) VALUES ('hanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimei', '8bf36b967749e7a0545eade7426ebbef9ea1a249d24d6baf31b55352caef33f5') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:16:54 --- DEBUG: #0 /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rd_...', false, Array)
#1 /home/samba/kongfangbao/code/application/classes/Model/User.php(11): Kohana_Database_Query->execute()
#2 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(68): Model_User->add_user(Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#8 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#9 {main} in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:17:37 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'username' at row 1 [ INSERT INTO rd_user (username, password) VALUES ('hanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimei', '8bf36b967749e7a0545eade7426ebbef9ea1a249d24d6baf31b55352caef33f5') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:17:37 --- DEBUG: #0 /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rd_...', false, Array)
#1 /home/samba/kongfangbao/code/application/classes/Model/User.php(11): Kohana_Database_Query->execute()
#2 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(68): Model_User->add_user(Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#8 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#9 {main} in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:17:40 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'username' at row 1 [ INSERT INTO rd_user (username, password) VALUES ('hanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimei', '8bf36b967749e7a0545eade7426ebbef9ea1a249d24d6baf31b55352caef33f5') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:17:40 --- DEBUG: #0 /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rd_...', false, Array)
#1 /home/samba/kongfangbao/code/application/classes/Model/User.php(11): Kohana_Database_Query->execute()
#2 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(68): Model_User->add_user(Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#8 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#9 {main} in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:18:00 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'username' at row 1 [ INSERT INTO rd_user (username, password) VALUES ('hanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimei', '8bf36b967749e7a0545eade7426ebbef9ea1a249d24d6baf31b55352caef33f5') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:18:00 --- DEBUG: #0 /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rd_...', false, Array)
#1 /home/samba/kongfangbao/code/application/classes/Model/User.php(11): Kohana_Database_Query->execute()
#2 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(68): Model_User->add_user(Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#8 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#9 {main} in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:19:15 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'username' at row 1 [ INSERT INTO rd_user (username, password) VALUES ('hanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimei', 'fe95e7b4028798fa9d0d5667a24f9f41ceed0d1c7e67fe8ae3681b089b9f66cc') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:19:15 --- DEBUG: #0 /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rd_...', false, Array)
#1 /home/samba/kongfangbao/code/application/classes/Model/User.php(11): Kohana_Database_Query->execute()
#2 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(71): Model_User->add_user(Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#8 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#9 {main} in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:20:20 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'username' at row 1 [ INSERT INTO rd_user (username, password) VALUES ('hanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimei', 'b193562f079cb6a9f296d511e7253497531429a46072bc9f7140f4deb2060af0') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:20:20 --- DEBUG: #0 /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rd_...', false, Array)
#1 /home/samba/kongfangbao/code/application/classes/Model/User.php(11): Kohana_Database_Query->execute()
#2 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(71): Model_User->add_user(Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#8 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#9 {main} in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:21:01 --- EMERGENCY: Database_Exception [ 22001 ]: SQLSTATE[22001]: String data, right truncated: 1406 Data too long for column 'username' at row 1 [ INSERT INTO rd_user (username, password) VALUES ('hanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimeihanmeimei', '8bf36b967749e7a0545eade7426ebbef9ea1a249d24d6baf31b55352caef33f5') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:21:01 --- DEBUG: #0 /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rd_...', false, Array)
#1 /home/samba/kongfangbao/code/application/classes/Model/User.php(11): Kohana_Database_Query->execute()
#2 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(71): Model_User->add_user(Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#8 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#9 {main} in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 02:34:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Usertype' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2015-01-08 02:34:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-08 03:02:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Admin/User.php [ 77 ] in /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php:77
2015-01-08 03:02:48 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(77): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/samba/kon...', 77, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#6 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#7 {main} in /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php:77
2015-01-08 03:03:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH/classes/Controller/Admin/User.php [ 77 ] in /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php:77
2015-01-08 03:03:00 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(77): Kohana_Core::error_handler(8, 'Undefined offse...', '/home/samba/kon...', 77, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#6 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#7 {main} in /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php:77
2015-01-08 03:03:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: types ~ APPPATH/classes/Controller/Admin/User.php [ 83 ] in /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php:83
2015-01-08 03:03:16 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(83): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/samba/kon...', 83, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#6 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#7 {main} in /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php:83
2015-01-08 03:07:57 --- EMERGENCY: Database_Exception [ 42S22 ]: SQLSTATE[42S22]: Column not found: 1054 Unknown column 'user_type' in 'field list' [ INSERT INTO rd_user (username, password, user_type) VALUES ('xiaohanhan1', 'facd7e550e78d1b598184a50d902fbcce80865b5d8be0bea3fb2c4c4d5b091b1', '1') ] ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 157 ] in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251
2015-01-08 03:07:57 --- DEBUG: #0 /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_PDO->query(2, 'INSERT INTO rd_...', false, Array)
#1 /home/samba/kongfangbao/code/application/classes/Model/User.php(11): Kohana_Database_Query->execute()
#2 /home/samba/kongfangbao/code/application/classes/Controller/Admin/User.php(67): Model_User->add_user(Array)
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_User->Action_Add()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_User))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#8 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#9 {main} in /home/samba/kongfangbao/code/modules/database/classes/Kohana/Database/Query.php:251