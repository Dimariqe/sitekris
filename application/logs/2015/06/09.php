<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-09 14:54:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fill ~ APPPATH\views\pages\calendar.php [ 43 ] in D:\OpenServer\domains\sitekris\application\views\pages\calendar.php:43
2015-06-09 14:54:34 --- DEBUG: #0 D:\OpenServer\domains\sitekris\application\views\pages\calendar.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'D:\\OpenServer\\d...', 43, Array)
#1 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#2 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#3 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 D:\OpenServer\domains\sitekris\application\views\template.php(22): Kohana_View->__toString()
#5 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(62): include('D:\\OpenServer\\d...')
#6 D:\OpenServer\domains\sitekris\system\classes\Kohana\View.php(359): Kohana_View::capture('D:\\OpenServer\\d...', Array)
#7 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 D:\OpenServer\domains\sitekris\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Calendar))
#11 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 D:\OpenServer\domains\sitekris\system\classes\Kohana\Request.php(997): Kohana_Request_Client->execute(Object(Request))
#13 D:\OpenServer\domains\sitekris\index.php(118): Kohana_Request->execute()
#14 {main} in D:\OpenServer\domains\sitekris\application\views\pages\calendar.php:43