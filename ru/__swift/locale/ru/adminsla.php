<?php
/**
 * ###############################################
 *
 * SWIFT Framework
 * _______________________________________________
 *
 * @author		Varun Shoor
 *
 * @package		SWIFT
 * @copyright	Copyright (c) 2001-2012, Kayako
 * @license		http://www.kayako.com/license
 * @link		http://www.kayako.com
 *
 * ###############################################
 */

$__LANG = array (
	'insertholiday' => 'Добавить выходной день',
	'impex' => 'Импорт/Экспорт',
	'manageholidays' => 'Выходные дни',
	'desc_manageholidays' => '',
	'desc_insertholiday' => '',
	'holidaytitle' => 'Название выходного дня',
	'desc_holidaytitle' => 'Введите название выходного для плана SLA',
	'holidaydate' => 'Дата выходного дня',
	'desc_holidaydate' => 'Пожалуйста, укажите дату для этого выходного',
	'tabslaplans' => 'Планы SLA',
	'flagicon' => 'Значок флага',
	'desc_flagicon' => 'Укажите URL изображения флага. Стандартный пакет изображений флагов находится в каталоге themes/__global/flags. Вы можете использовать следующие переменные:<br><b>{$themepath}</b> - указатель URL каталога изображений<br> - Пример: {$themepath}us.gif',
	'slaplans' => 'Доступные планы SLA',
	'slaiscustom' => 'Связан с настраиваемыми планами SLA',
	'desc_slaiscustom' => 'Укажите, связан ли этот выходной с настраиваемими планами SLA',
	'customall' => 'Все',
	'custom' => 'Настраевымие',
	'wineditslaholiday' => 'Редактировать выходной для плана SLA: %s',
	'editholiday' => 'Редактировать выходной',
	'desc_editholiday' => '',
	'invalidslaholiday' => 'Недопустимый выходной для плана SLA. Пожалуйста, убедитесь, что такой выходной для плана SLA существует в базе данных.',
	'titleinsertslaholiday' => 'Добавлен выходной для плана SLA',
	'msginsertslaholiday' => 'Выходной для плаа SLA "%s" успешно добавлен в базу данных.',
	'titleupdateslaholiday' => 'Обновлен выходной для плана SLA',
	'msgupdateslaholiday' => 'Выходной для плана SLA "%s" успешно обновлен.',
	'titledelslaholidays' => 'Удалено "%d" выходных для плана SLA',
	'msgdelslaholidays' => 'Следующие выходные для плана SLA были успешно удалены из базы данных:',
	'slaimportexport' => 'Импорт/Экспорт',
	'desc_slaimportexport' => '',
	'tabexport' => 'Экспорт',
	'tabimport' => 'Импорт',
	'import' => 'Импорт',
	'export' => 'Экспорт',
	'exporttitle' => 'Название',
	'desc_exporttitle' => 'Введите название для этого пакета выходных для плана SLA',
	'exportauthor' => 'Автор',
	'desc_exportauthor' => 'Укажите автора этого пакета выходных для плана SLA',
	'exportfilename' => 'Имя файла',
	'desc_exportfilename' => 'Укажите имя файла для этого пакета выходных для плана SLA',
	'slaholidaypack' => 'Пакет выходных для плана SLA',
	'slaholidayfile' => 'Файл с пакетом выходных для плана SLA',
	'desc_slaholidayfile' => 'Загрузите XML файл с пакетом выходных для плана SLA. Kayako импортирует в базу данных все выходные, которые находятся в XML файле.',
	'titleslaholidayimpex' => 'Импортирован пакет выходных для плана SLA',
	'msgslaholidayimpex' => '<b>"%d"</b> выходных для плана SLA было успешно добавлено в базу данных.',
	'titleslaholidayimpexfailed' => 'Не удалось импортировать пакет выходных для плана SLA',
	'msgslaholidayimpexfailed' => 'Не удалось импортировать пакет выходных для плана SLA. Пожалуйста, убедитесь, что файл с пакетом содержит корректный XML, сгенерированный Kayako.',
	'insertschedule' => 'Добавить график',
	'sladayopen24' => 'Открыто (24 часа)',
	'sladayclosed' => 'Закрыто',
	'sladayopencustom' => 'Открыто (Другие настройки)',
	'titleinvalidhrange' => 'Недопустимый диапазон времени',
	'msginvalidhrange' => 'Пожалуйста, исправьте диапазон времени для графика плана SLA внизу, чтобы продолжить:',
	'manageschedules' => 'Управлять графиками',
	'desc_manageschedules' => '',
	'titleinsertslasched' => 'Добавлен график плана SLA',
	'msginsertslasched' => 'График плана SLA "%s" успешно добавлен в базу данных.',
	'titleupdateslasched' => 'Обновлен график плана SLA',
	'msgupdateslasched' => 'График плана SLA "%s" успешно обновлен.',
	'creationdate' => 'Дата создания',
	'invalidslaschedule' => 'Недопустимый график плана SLA. Пожалуйста, убедитесь, что такой график плана SLA существует в базе данных.',
	'editschedule' => 'Редактировать график',
	'desc_editschedule' => '',
	'titleslaschedulenodel' => 'Невозможно удалить график плана SLA',
	'msgslaschedulenodel' => 'Kayako не может удалить следующие графики, так как они связаны с какими-то планами SLA.  Пожалуйста, отмените связь, чтобы удалить записи их базы данных.',
	'titledelslaschedules' => 'Удалено "%d" графиков SLA планов',
	'msgdelslaschedules' => 'Следующие графики SLA планов успешно удалены из базы данных.',
	'slasettings' => 'Настройки SLA',
	'tabsettings' => 'Настройки',
	'sla' => 'SLA',
	'insertplan' => 'Добавить план',
	'desc_insertplan' => '',
	'tabholidays' => 'Выходные',
	'plantitle' => 'Название плана',
	'desc_plantitle' => 'Введите ваше название для плана.',
	'resolutionduehrs' => 'Время решения (часов)',
	'desc_resolutionduehrs' => 'Ведите количество часов, по истечению которых заявка перейдет в статус решенной.',
	'resolutionduehrs2' => 'Время решения (часов)',
	'overduehrs' => 'Просроченное время (часов)',
	'desc_overduehrs' => 'Ведите количество часов, по истечению которых заявка перейдет в статус просроченной. Вы можете указать минуты в десятичных цифрах. Например: 1.20',
	'planschedule' => 'График SLA плана',
	'desc_planschedule' => 'Укажите график выполнения задач, для которых назначен этот SLA план. Просроченное время автоматически рассчитывается из графика выполнения задач.',
	'smatchtype' => 'Тип совпадения',
	'matchtype' => 'Опции критериев',
	'desc_matchtype' => 'Выберите метод группирования критериев.',
	'smatchall' => 'Совпадение по всем (и)',
	'smatchany' => 'Совпадение по любому (или)',
	'isenabled' => 'Активировано?',
	'desc_isenabled' => 'Переключите выполнение этого SLA плана посредством включения/выключения этой опции.',
	'sortorder' => 'Порядок сортировки',
	'desc_sortorder' => 'Укажите порядок сортировки для этого правила последовательности действий. Правила всегда обрабатываются в порядке возрастания.',
	'insertcriteria' => 'Добавить критерии',
	'manageplans' => 'Планы',
	'schedules' => 'Графики',
	'desc_manageplans' => '',
	'scheduletitle' => 'Название графика',
	'desc_scheduletitle' => 'Например <em>Поддержка в рабочее время </em> или <em>Время работы второй линии технической поддержки </em>.',
	'titlenocriteriaadded' => 'Нет доступных критериев',
	'msgnocriteriaadded' => 'Необходимо добавить как минимум один критерий, чтобы добавить/редактировать SLA план.',
	'noscheduleavailable' => '-- Нет доступных графиков --',
	'titlenoslasched' => 'SLA график недоступен',
	'msgnoslasched' => 'Нет SLA графиков, добавленных в Kayako. Необходимо добавить SLA график, чтобы дабавить/применить SLA план в систему.',
	'nocustomholidays' => 'Нет доступных настраиваемых выходных. Вы можете переключить этот параметр в закладке Управлять выходными &gt; Редактировать',
	'editplan' => 'Редактировать план',
	'desc_editplan' => '',
	'invalidslaplan' => 'Недопустимый SLA план. Убедитесь, что такой SLA план существует  базе данных.',
	'titleslaplandel' => 'Удалено "%d" SLA планов',
	'msgslaplandel' => 'Следующие SLA планы успешно удалены из базы данных:',
	'titleslaplanenable' => 'Активировано "%d" SLA планов',
	'msgslaplanenable' => 'Следующие SLA планы успешно активированы:',
	'titleslaplandisable' => 'Деактивировано "%d" SLA планов',
	'msgslaplandisable' => 'Следующие SLA планы успешно деактивированы:',
	'linkedholidays' => 'Связанные выходные (настраиваемые)',
	'titleslaplaninsert' => 'Добавлен SLA план',
	'msgslaplaninsert' => 'SLA план "%s" успешно добавлен в базу данных.',
	'titleslaplanupdate' => 'Обновлен SLA',
	'msgslaplanupdate' => 'SLA план "%s" успешно обновлен.',
	'if' => 'Если',
	'scheduledesc' => 'Информация о графике',

	// SLA Rules
	'srticketstatus' => 'Статус заявки',
	'desc_srticketstatus' => '',
	'srticketpriority' => 'Приоритет заявки',
	'desc_srticketpriority' => '',
	'srdepartmentid' => 'Департамент',
	'desc_srdepartmentid' => 'Заявки, которые относятся к одному из департаментов.',
	'srownerstaffid' => 'Владелец заявки',
	'desc_srownerstaffid' => 'Заявки, которые относятся к определенному сотруднику.',
	'sremailqueueid' => 'Очередь электронной почты',
	'desc_sremailqueueid' => 'Заявки, которые были созданы или на которые ответили письмом с использованием очереди ожидания Email.',
	'srusergroupid' => 'Группа пользователей',
	'desc_srusergroupid' => 'Поиск заявок по получателям, которые относятся к определенной группе пользователей.',
	'notapplicable' => '-- Нет данных --',
	'srfullname' => 'Имя и фамилия',
	'desc_srfullname' => 'Искать имена получателей заявки.',
	'sremail' => 'Email',
	'desc_sremail' => 'Искать заявки по email адресам получателей.',
	'srlastreplier' => 'Последний ответивший',
	'desc_srlastreplier' => '',
	'srsubject' => 'Тема',
	'desc_srsubject' => 'Поиск темы заявки.',
	'srcharset' => 'Кодировка',
	'desc_srcharset' => 'Заявки определенной кодировки.',
	'srflagtype' => 'Тип флага',
	'desc_srflagtype' => '',
	'srbayescategory' => 'Категория по Байесу',
	'desc_srbayescategory' => 'Заявки, которые совпали с определенной категорией по Байесу.',
	'srcreator' => 'Создатель',
	'desc_srcreator' => '',
	'creatorstaff' => 'Сотрудник',
	'creatorclient' => 'Пользователь',
	'srunassigned' => '-- Не назначенный --',
	'srtemplategroup' => 'Группа шаблонов',
	'desc_srtemplategroup' => 'Заявки, которые относятся к определенной группе шаблонов.',
	'srisresolved' => 'Решенный?',
	'desc_srisresolved' => 'Поиск решенных заявок (сделать статус<strong>решена</strong> , противоположностью статуса <strong>открыта</strong>).',
	'srtickettype' => 'Тип заявки',
	'desc_srtickettype' => '',
	'srwasreopened' => 'Была повторно открыта?',
	'desc_srwasreopened' => 'Поиск заявок которые были решены, а затем открыты снова.',
	'srtotalreplies' => 'Всего ответов',
	'desc_srtotalreplies' => 'Заявки с указанным количеством ответов.',


	'slajanuary' => 'Январь (01)',
	'slafebruary' => 'Февраль (02)',
	'slamarch' => 'Март (03)',
	'slaapril' => 'Апрель (04)',
	'slamay' => 'Май (05)',
	'slajune' => 'Июнь (06)',
	'slajuly' => 'Июль (07)',
	'slaaugust' => 'Август (08)',
	'slaseptember' => 'Сентябрь (09)',
	'slaoctober' => 'Октябрь (10)',
	'slanovember' => 'Ноябрь (11)',
	'sladecember' => 'Декабрь (12)',

	// Potentialy unused phrases in adminsla.php
	'desc_insertschedule' => '',
);
?>