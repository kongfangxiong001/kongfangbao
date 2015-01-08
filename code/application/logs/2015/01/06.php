<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-06 00:20:56 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant DB - assumed 'DB' ~ APPPATH/classes/Controller/Welcome.php [ 8 ] in /home/samba/kongfangbao/code/application/classes/Controller/Welcome.php:8
2015-01-06 00:20:56 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Controller/Welcome.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/samba/kon...', 8, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/samba/kongfangbao/code/index.php(118): Kohana_Request->execute()
#7 {main} in /home/samba/kongfangbao/code/application/classes/Controller/Welcome.php:8
2015-01-06 00:47:58 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant DB - assumed 'DB' ~ APPPATH/classes/Controller/Welcome.php [ 8 ] in /home/samba/kongfangbao/code/application/classes/Controller/Welcome.php:8
2015-01-06 00:47:58 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Controller/Welcome.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/samba/kon...', 8, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/samba/kongfangbao/code/index.php(118): Kohana_Request->execute()
#7 {main} in /home/samba/kongfangbao/code/application/classes/Controller/Welcome.php:8
2015-01-06 00:48:01 --- EMERGENCY: ErrorException [ 8 ]: Use of undefined constant DB - assumed 'DB' ~ APPPATH/classes/Controller/Welcome.php [ 8 ] in /home/samba/kongfangbao/code/application/classes/Controller/Welcome.php:8
2015-01-06 00:48:01 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Controller/Welcome.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', '/home/samba/kon...', 8, Array)
#1 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/samba/kongfangbao/code/index.php(118): Kohana_Request->execute()
#7 {main} in /home/samba/kongfangbao/code/application/classes/Controller/Welcome.php:8
2015-01-06 03:39:41 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Permission denied ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home/samba/kongfangbao/code/application/classes/Controller/Admin/Home.php:7
2015-01-06 03:39:41 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Controller/Admin/Home.php(7): Kohana_Database_PDO->connect()
#1 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Home))
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#6 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#7 {main} in /home/samba/kongfangbao/code/application/classes/Controller/Admin/Home.php:7
2015-01-06 03:40:02 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Permission denied ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home/samba/kongfangbao/code/application/classes/Controller/Admin/Home.php:7
2015-01-06 03:40:02 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Controller/Admin/Home.php(7): Kohana_Database_PDO->connect()
#1 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Home))
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#6 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#7 {main} in /home/samba/kongfangbao/code/application/classes/Controller/Admin/Home.php:7
2015-01-06 03:40:16 --- EMERGENCY: Database_Exception [ 2002 ]: SQLSTATE[HY000] [2002] Permission denied ~ MODPATH/database/classes/Kohana/Database/PDO.php [ 59 ] in /home/samba/kongfangbao/code/application/classes/Controller/Admin/Home.php:7
2015-01-06 03:40:16 --- DEBUG: #0 /home/samba/kongfangbao/code/application/classes/Controller/Admin/Home.php(7): Kohana_Database_PDO->connect()
#1 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Home))
#4 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#6 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#7 {main} in /home/samba/kongfangbao/code/application/classes/Controller/Admin/Home.php:7
2015-01-06 03:55:52 --- EMERGENCY: ErrorException [ 1 ]: Class 'view' not found ~ APPPATH/classes/Controller/Admin/Home.php [ 8 ] in file:line
2015-01-06 03:55:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-06 03:56:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view views/admin/home/index could not be found ~ SYSPATH/classes/Kohana/View.php [ 265 ] in /home/samba/kongfangbao/code/system/classes/Kohana/View.php:145
2015-01-06 03:56:00 --- DEBUG: #0 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(145): Kohana_View->set_filename('views/admin/hom...')
#1 /home/samba/kongfangbao/code/system/classes/Kohana/View.php(30): Kohana_View->__construct('views/admin/hom...', NULL)
#2 /home/samba/kongfangbao/code/application/classes/Controller/Admin/Home.php(8): Kohana_View::factory('views/admin/hom...')
#3 /home/samba/kongfangbao/code/system/classes/Kohana/Controller.php(84): Controller_Admin_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin_Home))
#6 /home/samba/kongfangbao/code/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/samba/kongfangbao/code/system/classes/Kohana/Request.php(996): Kohana_Request_Client->execute(Object(Request))
#8 /home/samba/kongfangbao/code/index.php(117): Kohana_Request->execute()
#9 {main} in /home/samba/kongfangbao/code/system/classes/Kohana/View.php:145
2015-01-06 03:59:09 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH/classes/Message.php [ 10 ] in file:line
2015-01-06 03:59:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-06 03:59:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller::body() ~ APPPATH/classes/Message.php [ 10 ] in file:line
2015-01-06 03:59:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-06 19:11:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH/classes/Controller/Admin/Home.php [ 12 ] in file:line
2015-01-06 19:11:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line