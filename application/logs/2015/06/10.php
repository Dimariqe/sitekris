<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-10 05:32:35 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Conference class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-06-10 05:32:35 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 D:\OpenServer\domains\sitekris\application\views\pages\register.php(11): Kohana_ORM->__get('name')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-06-10 05:33:06 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Conference class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-06-10 05:33:06 --- DEBUG: #0 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 D:\OpenServer\domains\sitekris\application\views\pages\register.php(11): Kohana_ORM->__get('name')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#14 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#15 {main} in D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php:603
2015-06-10 06:49:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:49:27 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:49:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:49:31 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:49:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:49:39 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:49:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:49:48 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:50:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:50:01 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:50:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:50:17 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:50:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:50:32 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:50:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:50:38 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:54:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:54:21 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:54:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:54:40 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:55:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:55:13 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:55:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:55:28 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:56:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:56:10 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:58:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 06:58:10 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 07:11:02 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in D:\OpenServer\domains\sitekris\system\classes\Kohana\Cookie.php:67
2015-06-10 07:11:02 --- DEBUG: #0 D:\OpenServer\domains\sitekris\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 D:\OpenServer\domains\sitekris\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in D:\OpenServer\domains\sitekris\system\classes\Kohana\Cookie.php:67
2015-06-10 07:11:36 --- CRITICAL: ErrorException [ 1 ]: Call to a member function as_array() on a non-object ~ APPPATH\classes\Controller\Auth.php [ 19 ] in file:line
2015-06-10 07:11:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 08:42:34 --- CRITICAL: ErrorException [ 1 ]: Call to a member function find_all() on a non-object ~ APPPATH\classes\Controller\Auth.php [ 20 ] in file:line
2015-06-10 08:42:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 08:43:44 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ APPPATH\classes\Controller\Auth.php [ 21 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:21
2015-06-10 08:43:44 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\OpenServer\\d...', 21, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:21
2015-06-10 08:43:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ APPPATH\classes\Controller\Auth.php [ 22 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 08:43:55 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 08:45:09 --- CRITICAL: ErrorException [ 8 ]: Undefined index: login ~ APPPATH\classes\Controller\Auth.php [ 22 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 08:45:09 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 08:45:22 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Auth.php [ 20 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:20
2015-06-10 08:45:22 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(20): Kohana_Core::error_handler(8, 'Undefined offse...', 'D:\\OpenServer\\d...', 20, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:20
2015-06-10 08:45:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 08:45:32 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 08:47:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 08:47:51 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 08:51:44 --- CRITICAL: ErrorException [ 1 ]: Call to a member function isLogin() on a non-object ~ APPPATH\classes\Controller\Auth.php [ 24 ] in file:line
2015-06-10 08:51:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 09:00:52 --- CRITICAL: ErrorException [ 1 ]: Call to a member function isLogin() on a non-object ~ APPPATH\classes\Controller\Auth.php [ 24 ] in file:line
2015-06-10 09:00:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 09:01:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function isLogin() on a non-object ~ APPPATH\classes\Controller\Auth.php [ 24 ] in file:line
2015-06-10 09:01:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 09:01:08 --- CRITICAL: ErrorException [ 1 ]: Call to a member function isLogin() on a non-object ~ APPPATH\classes\Controller\Auth.php [ 24 ] in file:line
2015-06-10 09:01:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 09:48:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:48:22 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:51:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:51:57 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:52:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\Controller\Auth.php [ 20 ] in file:line
2015-06-10 09:52:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 09:52:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:52:34 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:52:57 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:52:57 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:53:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:53:08 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:53:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:53:42 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:53:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: action ~ APPPATH\views\template.php [ 22 ] in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 09:53:54 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:22
2015-06-10 10:01:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\pages\auth.php [ 2 ] in D:\OpenServer\domains\sitekris\application\views\pages\auth.php:2
2015-06-10 10:01:44 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\pages\auth.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 2, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\sitekris\application\views\pages\auth.php:2
2015-06-10 10:13:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Template.php [ 5 ] in file:line
2015-06-10 10:13:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 10:13:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Template.php [ 5 ] in file:line
2015-06-10 10:13:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 10:19:39 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:19:39 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:20:01 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:20:01 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:30:19 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:30:19 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:31:24 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:31:24 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:33:12 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:33:12 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:33:18 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:33:18 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:36:40 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:36:40 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:37:25 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:37:25 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:37:43 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:37:43 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:37:53 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:37:53 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:39:44 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:39:44 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:39:45 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:39:45 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:40:18 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:40:18 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:40:25 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:40:25 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:40:34 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:40:34 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:40:41 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:40:41 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:41:08 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:41:08 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:41:34 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:41:34 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:42:03 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:42:03 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:42:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-06-10 10:42:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 10:42:45 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-06-10 10:42:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 10:43:13 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:43:13 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:43:38 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:43:38 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:43:59 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 22 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:43:59 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:44:34 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 22 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:44:34 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:45:02 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 22 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:45:02 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:45:17 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 22 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:45:17 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:46:05 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 22 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:46:05 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:46:10 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:46:10 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:46:54 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 22 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:46:54 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:46:59 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 22 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:46:59 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:47:54 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 22 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:47:54 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(22): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 22, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_registration()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:22
2015-06-10 10:47:56 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:47:56 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:48:25 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:48:25 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:48:39 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:48:39 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:48:51 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Auth.php [ 18 ] in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 10:48:51 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(18): Kohana_Core::error_handler(2, 'Attempt to assi...', 'D:\\OpenServer\\d...', 18, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#7 {main} in D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php:18
2015-06-10 11:05:50 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Users::$user ~ APPPATH\classes\Model\Users.php [ 15 ] in D:\OpenServer\domains\sitekris\application\classes\Model\Users.php:15
2015-06-10 11:05:50 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Model\Users.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\OpenServer\\d...', 15, Array)
#1 D:\OpenServer\domains\sitekris\application\classes\Model\Users.php(15): Model_Users->__get('user')
#2 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(824): Model_Users->__get('id')
#3 D:\OpenServer\domains\sitekris\application\classes\Model\Users.php(5): Kohana_ORM->as_array()
#4 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(29): Model_Users->authorization('admin', 'admin')
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\sitekris\application\classes\Model\Users.php:15
2015-06-10 11:06:55 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Model_Users::$user ~ APPPATH\classes\Model\Users.php [ 15 ] in D:\OpenServer\domains\sitekris\application\classes\Model\Users.php:15
2015-06-10 11:06:55 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\classes\Model\Users.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', 'D:\\OpenServer\\d...', 15, Array)
#1 D:\OpenServer\domains\sitekris\application\classes\Model\Users.php(15): Model_Users->__get('user')
#2 D:\OpenServer\domains\sitekris\modules\orm\classes\Kohana\ORM.php(824): Model_Users->__get('id')
#3 D:\OpenServer\domains\sitekris\application\classes\Model\Users.php(5): Kohana_ORM->as_array()
#4 D:\OpenServer\domains\sitekris\application\classes\Controller\Auth.php(29): Model_Users->authorization('admin', 'admin')
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(84): Controller_Auth->action_auth()
#6 [internal function]: Kohana_Controller->execute()
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#10 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#11 {main} in D:\OpenServer\domains\sitekris\application\classes\Model\Users.php:15
2015-06-10 11:18:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 26 ] in D:\OpenServer\domains\sitekris\application\views\template.php:26
2015-06-10 11:18:48 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 26, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:26
2015-06-10 11:19:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 26 ] in D:\OpenServer\domains\sitekris\application\views\template.php:26
2015-06-10 11:19:10 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 26, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:26
2015-06-10 11:34:36 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Conference as array ~ APPPATH\views\pages\register.php [ 42 ] in file:line
2015-06-10 11:34:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 11:35:47 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Conference as array ~ APPPATH\views\pages\register.php [ 42 ] in file:line
2015-06-10 11:35:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-10 11:35:56 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\pages\register.php [ 42 ] in D:\OpenServer\domains\sitekris\application\views\pages\register.php:42
2015-06-10 11:35:56 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\pages\register.php(42): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\\OpenServer\\d...', 42, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\application\views\template.php(26): Kohana_View->__toString()
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\sitekris\application\views\pages\register.php:42
2015-06-10 11:36:39 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\views\pages\register.php [ 42 ] in D:\OpenServer\domains\sitekris\application\views\pages\register.php:42
2015-06-10 11:36:39 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\pages\register.php(42): Kohana_Core::error_handler(4096, 'Object of class...', 'D:\\OpenServer\\d...', 42, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\application\views\template.php(26): Kohana_View->__toString()
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\sitekris\application\views\pages\register.php:42
2015-06-10 11:59:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 26 ] in D:\OpenServer\domains\sitekris\application\views\template.php:26
2015-06-10 11:59:09 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 26, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:26
2015-06-10 11:59:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 26 ] in D:\OpenServer\domains\sitekris\application\views\template.php:26
2015-06-10 11:59:51 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 26, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:26
2015-06-10 12:11:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\template.php [ 26 ] in D:\OpenServer\domains\sitekris\application\views\template.php:26
2015-06-10 12:11:04 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\template.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 26, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#10 {main} in D:\OpenServer\domains\sitekris\application\views\template.php:26