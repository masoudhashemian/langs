<?php

// Language definitions used in admin_maintenance.php
$lang_admin_maintenance = array(

'Maintenance head'				=>	'Обслуживание форума',
'Rebuild index subhead'			=>	'Перестройка поискового индекса',
'Rebuild index info'			=>	'Если вы добавляли, правили или удаляли сообщения вручную в базе данных или если наблюдаете проблемы с поиском, вы можете перестроить поисковый индекс. Для большей производительности включите %s на время перестройки. <strong>Перестройка индекса может занять продолжительное время и увеличивает загрузку сервера!</strong>',
'Posts per cycle label'			=>	'Сообщений за цикл',
'Posts per cycle help'			=>	'Количество индексируемых сообщений на одной странице. Т.е. если вы введёте  300, триста сообщений будут проиндексированы и затем страница обновится. Это сделано для того, чтобы скрипт не превысил допустимое время на выполнение.',
'Starting post label'			=>	'ID первого сообщения',
'Starting post help'			=>	'ID сообщения, с которого начнется перестройка. По умолчанию оно равно ID первого сообщения в базе. Как правило, вам не нужно трогать это поле.',
'Empty index label'				=>	'Очищать индекс',
'Empty index help'				=>	'Включите эту опцию, если надо очистить индекс перед переиндексацией (см. ниже).',
'Rebuild completed info'		=>	'Когда процесс завершится, вы будете перенаправлены снова на эту страницу. Настоятельно рекомендуем не выключать поддержку JavaScript в вашем браузере на время индексации (нужен для автопереадресации по завершении очередного цикла). Если захотите прервать процесс, запишите значение ID которое получилось в конце страницы и введите ID+1 в "ID первого сообщения" когда/если захотите продолжить ("Очищать индекс" надо будет выключить).',
'Rebuild index'					=>	'Перестроить индекс',
'Rebuilding search index'		=>	'Перестройка поискового индекса',
'Rebuilding index info'			=>	'Перестройка индекса. Подходящее время чтобы попить кофе :-)',
'Processing post'				=>	'Обрабатывается сообщение <strong>%s</strong> …',
'Click here'					=>	'Кликните здесь',
'Javascript redirect failed'	=>	'Переадресация JavaScript обломалась. %s чтобы продолжить …',

);
