<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-29 09:11:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::find_all() ~ APPPATH\views\pages\news.php [ 1 ] in file:line
2015-05-29 09:11:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-29 11:56:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_News::find_all() ~ APPPATH\views\pages\news.php [ 1 ] in file:line
2015-05-29 11:56:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-29 12:01:06 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in D:\OpenServer\domains\sitekris\modules\database\classes\Kohana\Database\MySQL.php:171
2015-05-29 12:01:06 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 D:\OpenServer\domains\sitekris\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('news')
#3 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 D:\OpenServer\domains\sitekris\application\classes\Controller\News.php(8): Kohana_ORM->__construct()
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_News->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#10 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#12 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#13 {main} in D:\OpenServer\domains\sitekris\modules\database\classes\Kohana\Database\MySQL.php:171
2015-05-29 12:05:34 --- CRITICAL: Kohana_Exception [ 0 ]: The data property does not exist in the Model_News class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:05:34 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('data')
#1 D:\OpenServer\domains\sitekris\application\views\pages\news.php(5): Kohana_ORM->__get('data')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:06:54 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\pages\news.php [ 5 ] in file:line
2015-05-29 12:06:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\\OpenServer\\d...', 5, Array)
#1 D:\OpenServer\domains\sitekris\application\views\pages\news.php(5): strtotime('H:i d.m.Y', '2015-05-29 23:0...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-05-29 12:06:55 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\pages\news.php [ 5 ] in file:line
2015-05-29 12:06:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\\OpenServer\\d...', 5, Array)
#1 D:\OpenServer\domains\sitekris\application\views\pages\news.php(5): strtotime('H:i d.m.Y', '2015-05-29 23:0...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-05-29 12:07:36 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\pages\news.php [ 5 ] in file:line
2015-05-29 12:07:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\\OpenServer\\d...', 5, Array)
#1 D:\OpenServer\domains\sitekris\application\views\pages\news.php(5): date('H:i d.m.Y', '2015-05-29 23:0...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-05-29 12:07:48 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\pages\news.php [ 5 ] in file:line
2015-05-29 12:07:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\\OpenServer\\d...', 5, Array)
#1 D:\OpenServer\domains\sitekris\application\views\pages\news.php(5): date('H:i d.m.Y', '2015-05-29 23:0...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-05-29 12:07:49 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\pages\news.php [ 5 ] in file:line
2015-05-29 12:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\\OpenServer\\d...', 5, Array)
#1 D:\OpenServer\domains\sitekris\application\views\pages\news.php(5): date('H:i d.m.Y', '2015-05-29 23:0...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-05-29 12:07:49 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\pages\news.php [ 5 ] in file:line
2015-05-29 12:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\\OpenServer\\d...', 5, Array)
#1 D:\OpenServer\domains\sitekris\application\views\pages\news.php(5): date('H:i d.m.Y', '2015-05-29 23:0...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-05-29 12:07:50 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\pages\news.php [ 5 ] in file:line
2015-05-29 12:07:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\\OpenServer\\d...', 5, Array)
#1 D:\OpenServer\domains\sitekris\application\views\pages\news.php(5): date('H:i d.m.Y', '2015-05-29 23:0...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-05-29 12:07:50 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\pages\news.php [ 5 ] in file:line
2015-05-29 12:07:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\\OpenServer\\d...', 5, Array)
#1 D:\OpenServer\domains\sitekris\application\views\pages\news.php(5): date('H:i d.m.Y', '2015-05-29 23:0...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-05-29 12:08:01 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\pages\news.php [ 5 ] in file:line
2015-05-29 12:08:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\\OpenServer\\d...', 5, Array)
#1 D:\OpenServer\domains\sitekris\application\views\pages\news.php(5): date('H:i d.m', '2015-05-29 23:0...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-05-29 12:08:10 --- CRITICAL: ErrorException [ 8 ]: A non well formed numeric value encountered ~ APPPATH\views\pages\news.php [ 5 ] in file:line
2015-05-29 12:08:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A non well form...', 'D:\\OpenServer\\d...', 5, Array)
#1 D:\OpenServer\domains\sitekris\application\views\pages\news.php(5): date('d', '2015-05-29 23:0...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2015-05-29 12:42:44 --- CRITICAL: Kohana_Exception [ 0 ]: The Activities property does not exist in the Model_Conference class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:42:44 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('Activities')
#1 D:\OpenServer\domains\sitekris\application\views\pages\conference.php(2): Kohana_ORM->__get('Activities')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Conference))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:42:55 --- CRITICAL: Kohana_Exception [ 0 ]: The activities property does not exist in the Model_Conference class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:42:55 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('activities')
#1 D:\OpenServer\domains\sitekris\application\views\pages\conference.php(2): Kohana_ORM->__get('activities')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Conference))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:42:55 --- CRITICAL: Kohana_Exception [ 0 ]: The activities property does not exist in the Model_Conference class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:42:55 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('activities')
#1 D:\OpenServer\domains\sitekris\application\views\pages\conference.php(2): Kohana_ORM->__get('activities')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Conference))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:43:00 --- CRITICAL: Kohana_Exception [ 0 ]: The activitie property does not exist in the Model_Conference class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:43:00 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('activitie')
#1 D:\OpenServer\domains\sitekris\application\views\pages\conference.php(2): Kohana_ORM->__get('activitie')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Conference))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:43:14 --- CRITICAL: Kohana_Exception [ 0 ]: The activities property does not exist in the Model_Conference class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:43:14 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('activities')
#1 D:\OpenServer\domains\sitekris\application\views\pages\conference.php(2): Kohana_ORM->__get('activities')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Conference))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:43:51 --- CRITICAL: Kohana_Exception [ 0 ]: The id_conference property does not exist in the Model_Conference class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:43:51 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('id_conference')
#1 D:\OpenServer\domains\sitekris\application\views\pages\conference.php(2): Kohana_ORM->__get('id_conference')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Conference))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:49:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Activities::finc_all() ~ APPPATH\views\pages\conference.php [ 6 ] in file:line
2015-05-29 12:49:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-29 12:49:26 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Activities class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:49:26 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 D:\OpenServer\domains\sitekris\application\views\pages\conference.php(9): Kohana_ORM->__get('name')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Conference))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:54:18 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Activities class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-05-29 12:54:18 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 D:\OpenServer\domains\sitekris\application\views\pages\conference.php(8): Kohana_ORM->__get('name')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Conference))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603