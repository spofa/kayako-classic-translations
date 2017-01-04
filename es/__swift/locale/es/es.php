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

	// Initial pass done
	// Usage script run

$_SWIFT = SWIFT::GetInstance();

$__LANG = array(
	'charset'                      => 'UTF-8',
	'html_encoding'                => '8 bit',
	'text_encoding'                => '8 bit',
	'html_charset'                 => 'UTF-8',
	'text_charset'                 => 'UTF-8',
	'base_charset'                 => '',
	'yes'                          => 'Sí',
	'no'                           => 'No',
	'menusupportcenter'            => 'Centro de soporte',
	'menustaffcp'                  => 'Panel de control del personal',
	'menuadmincp'                  => 'Panel de control de admin',
	'app_notreg'                   => 'La aplicación %s no está registrada',
	'event_notreg'                 => 'El evento %s no está registrado',
	'unable_to_execute'            => 'No se puede ejecutar %s',
	'action_notreg'                => 'La acción %s no está registrada',
	'username'                     => 'Nombre de usuario',
	'password'                     => 'Contraseña',
	'rememberme'                   => 'Recordarme',
	'defaulttitle'                 => '%s - con la tecnología de Kayako',
	'login'                        => 'Iniciar sesión',
	'global'                       => 'Global',
	'first'                        => 'Primero',
	'last'                         => 'Último',
	'pagination'                   => 'Página %s de %s',
	'submit'                       => 'Enviar',
	'reset'                        => 'Reiniciar',
	'poweredby'                    => 'Software de helpdesk con la tecnología de Kayako',
	'copyright'                    => 'Copyright &copy; 2001-%s Kayako',
	'notifycsrfhash'               => 'Kayako detectó un problema al validar esta petición',
	'titlecsrfhash'                => 'Kayako detectó un problema al validar esta petición',
	'msgcsrfhash'                  => 'Kayako valida las peticiones como protección contra falsificaciones de petición en sitios cruzados y no pudo validar esta petición. Por favor, inténtelo de nuevo.',
	'invaliduser'                  => 'Nombre de usuario o contraseña incorrecta',
	'invaliduseripres'             => 'Dirección IP no autorizada (intento: %d de %d)',
	'invaliduserdisabled'          => 'Esta cuenta está desactivada (intento: %d de %d)',
	'invalid_sessionid'            => 'Su sesión ha caducado, por favor inicie sesión',
	'staff_not_admin'              => 'El usuario no tiene privilegios de administrador',
	'sort_desc'                    => 'Clasificación descendiente',
	'sort_asc'                     => 'Clasificación ascendiente',
	'options'                      => 'Opciones',
	'delete'                       => 'Eliminar',
	'settings'                     => 'Configuración',
	'search'                       => 'Buscar',
	'searchbutton'                 => 'Buscar',
	'actionconfirm'                => '¿Estás seguro de que desea continuar?',
	'loggedout'                    => 'Sesión cerrada correctamente',
	'view'                         => 'Ver',
	'dashboard'                    => 'Inicio',
	'help'                         => 'Ayuda',
	'size'                         => 'Tamaño',
	'home'                         => 'Inicio',
	'logout'                       => 'Salir',
	'staffcp'                      => 'Panel de control del personal',
	'admincp'                      => 'Panel de control de admin',
	'winapp'                       => 'Kayako Desktop',
	'staffapi'                     => 'Staff API',
	'bytes'                        => 'Bytes',
	'kb'                           => 'KB',
	'mb'                           => 'MB',
	'gb'                           => 'GB',
	'noitemstodisplay'             => 'No hay elementos que mostrar',
	'manage'                       => 'Administrar',
	'title'                        => 'Título',
	'disable'                      => 'Activar',
	'enable'                       => 'Desactivar',
	'edit'                         => 'Editar',
	'back'                         => 'Volver',
	'forward'                      => 'Continuar',
	'insert'                       => 'Insertar',
	'edit'                         => 'Editar',
	'update'                       => 'Actualizar',
	'public'                       => 'Público',
	'private'                      => 'Privado',
	'requiredfieldempty'           => 'Uno de los campos obligatorios está vacío',
	'clifatalerror'                => 'ERROR FATAL',
	'clienterchoice'               => 'Por favor introduzca su elección: ',
	'clinotvalidchoice'            => '"%s" no es una opción válida; por favor, inténtelo de nuevo.: ',
	'description'                  => 'Descripción',
	'success'                      => 'Correcto',
	'failure'                      => 'Fallo',
	'status'                       => 'Estado',
	'date'                         => 'Fecha',
	'seconds'                      => 'Segundos',
	'order'                        => 'Orden',
	'email'                        => 'Correo electrónico',
	'subject'                      => 'Asunto',
	'contents'                     => 'Contenidos',
	'sunday'                       => 'Domingo',
	'monday'                       => 'Lunes',
	'tuesday'                      => 'Martes',
	'wednesday'                    => 'Miércoles',
	'thursday'                     => 'Jueves',
	'friday'                       => 'Viernes',
	'saturday'                     => 'Sábado',
	'am'                           => 'AM',
	'pm'                           => 'PM',
	'pfieldreveal'                 => '[Mostrar]',
	'pfieldhide'                   => '[Ocultar]',
	'loadingwindow'                => 'Cargando...',
	'customfields'                 => 'Campos personalizados',
	'nopermission'                 => 'Lamentablemente no tiene permiso para llevar a cabo esta petición.',
	'nopermissiontext'             => 'Lamentablemente no tiene permiso para llevar a cabo esta petición.',
	'generationdate'               => 'XML generado: %s',
	'approve'                      => 'Aprobar',
	'paginall'                     => 'Todo',
	'fullname'                     => 'Nombre y apellido',
	'onlineusers'                  => 'Personal conectado',
	'vardate1'                     => '%dd %dh %dm',
	'vardate2'                     => '%dh %dm %ds',
	'vardate3'                     => '%dm %ds',
	'vardate4'                     => '%ds',
	'reports'                      => 'Informes',
	'demomode'                     => 'No puede realizar esta acción en el modo demo',
	'unmodifiedreport'			 => 'Running the report unmodified as user does not have permission to modify report.',
	'titledemomode'                => 'No se puede continuar',
	'msgdemomode'                  => 'No puede realizar esta acción en el modo demo',
	'filter'                       => 'Filtro',
	'editor'                       => 'Editor',
	'images'                       => 'Imágenes',
	'tabedit'                      => 'Editar',
	'notifyfieldempty'             => 'Uno de los campos obligatorios está vacío',
	'titlefieldempty'              => 'Campos faltantes',
	'msgfieldempty'                => 'Uno de los campo obligatorios está vacío o contiene datos no válidos; por favor, compruebe los datos introducidos.',
	'save'                         => 'Guardar',
	'viewall'                      => 'Ver todos',
	'cancel'                       => 'Cancelar',
	'save'                         => 'Guardar',
	'tabgeneral'                   => 'General',
	'language'                     => 'Idioma',
	'loginshare'                   => 'LoginShare',
	'licenselimit_unabletocreate'  => 'No se puede crear un nuevo usuario del personal porque ha alcanzado el límite de su licencia',
	'help'                         => 'Ayuda',
	'name'                         => 'Nombre',
	'value'                        => 'Valor',
	'engagevisitor'                => 'Contactar con visitante',
	'inlinechat'                   => 'Chat en línea',
	'url'                          => 'URL',
	'hexcode'                      => 'Código hexadecimal',
	'vactionvariables'             => 'Acción: Variables',
	'vactionvexp'                  => 'Acción: Experiencia del visitante',
	'vactionsalerts'               => 'Acción: Notificaciones del personal',
	'vactionsetdepartment'         => 'Acción: Fijar departamento',
	'vactionsetskill'              => 'Acción: Fijar habilidad',
	'vactionsetgroup'              => 'Acción: Fijar grupo de visitantes',
	'vactionsetcolor'              => 'Acción: Fijar color',
	'vactionbanvisitor'            => 'Acción: Bloquear visitante',
	'customengagevisitor'          => 'Contactar con visitante de forma personalizada',
	'managerules'                  => 'Administrar reglas',
	'open'                         => 'Abrir',
	'close'                        => 'Cerrar',
	'titleupdatedswiftsettings'    => '%s configuraciones actualizadas',
	'msgupdatedswiftsettings'      => 'La configuración de %s se actualizó correctamente.',
	'geoipprocessrunning'          => 'La construcción de base de datos de GeoIP ya está en curso',
	'continueprocessquestion'      => 'Aún se está ejecutanto una tarea. Si abandona esta página se detendrá. ¿Desea continuar?',
	'titleupdsettings'             => '%s configuraciones actualizadas',
	'type'                         => 'Tipo',
	'banip'                        => 'IP (255.255.255.255)',
	'banclassc'                    => 'Clase C (255.255.255.*)',
	'banclassb'                    => 'Clase B (255.255.*.*)',
	'banclassa'                    => 'Clase A (255.*.*.*)',
	'if'                           => 'Si',
	'loginlogerror'                => 'Inicio de sesión bloqueado por %d minutos (intento: %d de %d)',
	'loginlogwarning'              => 'Contraseña o nombre de usuario no válido (intento: %d de %d)',
	'na'                           => '- NA -',
	'redirectloading'              => 'Cargando...',
	'noinfoinview'                 => 'No hay nada que mostrar aquí',
	'nochange'                     => '-- Ningún cambio --',
	'activestaff'                  => '-- Personal activo --',
	'notificationuser'             => 'Usuario',
	'notificationuserorganization' => 'Organización de usuarios',
	'notificationstaff'            => 'Personal (propietario)',
	'notificationteam'             => 'Equipos de personal',
	'notificationdepartment'       => 'Departamento',
	'notificationsubject'          => 'Asunto: ',
	'lastupdate'                   => 'Última actualización',
	'interface_admin'              => 'Panel de control de admin',
	'interface_staff'              => 'Panel de control del personal',
	'interface_intranet'           => 'Intranet',
	'interface_api'                => 'API',
	'interface_winapp'             => 'Kayako Desktop/API del personal',
	'interface_syncworks'          => 'SyncWorks',
	'interface_instaalert'         => 'InstaAlert',
	'interface_pda'                => 'PDA',
	'interface_rss'                => 'RSS',
	'error_database'               => 'Base de datos',
	'error_php'                    => 'PHP',
	'error_exception'              => 'Excepción',
	'error_mail'                   => 'Email',
	'error_general'                => 'General',
	'error_loginshare'             => 'LoginShare',
	'loading'                      => 'Cargando...',
	'pwtooshort'                   => 'Demasiado corta',
	'pwveryweak'                   => 'Muy débil',
	'pwweak'                       => 'Débil',
	'pwmedium'                     => 'Media',
	'pwstrong'                     => 'Fuerte',
	'pwverystrong'                 => 'Muy fuerte',
	'pwunsafeword'                 => 'Contraseña potencialmente insegura',
	'staffpasswordpolicy'          => '<strong>Requisitos de contraseña:</strong> Longitud mínima: %d caracteres, mínimo de dígitos: %d, mínimo de símbolos: %d, mínimo de letras mayúsculas: %d',
	'userpasswordpolicy'           => '<strong>Password requirements:</strong> Minimum length: %d characters, Minimum digits: %d, Minimum symbols: %d, Minimum uppercase letters: %d',
	'titlepwpolicy'                => 'La contraseña no cumple con los requisitos',
	'passwordexpired'              => 'La contraseña ha caducado',
	'newpassword'                  => 'Nueva contraseña',
	'passwordagain'                => 'Contraseña (repetir)',
	'passworddontmatch'            => 'Las contraseñas no coinciden',
	'defaulttimezone'              => '-- Zona horaria por defecto --',
	'tagcloud'                     => 'Nube de etiquetas',
	'searchmodeactive'             => 'Los resultados se filtran - haga clic para restablecer',
	'notifysearchfailed'           => 'Se han encontrado "0" resultados',
	'titlesearchfailed'            => 'Se han encontrado "0" resultados',
	'msgsearchfailed'              => 'Kayako no pudo localizar registros que coincidieran con los criterios especificados.',
	'quickfilter'                  => 'Filtro rápido',
	'fuenterurl'                   => 'Introducir URL:',
	'fuorupload'                   => 'o subir:',
	'errorsmtpconnect'             => 'No se puede conectar al servidor SMTP',
	'starttypingtags'              => 'Comience a escribir para insertar etiquetas...',
	'titleinvalidfileext'          => 'Tipo de imagen no admitido',
	'msginvalidfileext'            => 'Los tipos de archivo de imagen admitidos son: gif, jpeg, jpg, png.',
	'notset'                       => '-- No fijado --',
	'ratings'                      => 'Calificaciones',
	'system'                       => 'Sistema',
	'schatid'                      => 'ID del chat',
	'supportcenterfield'           => 'Centro de soporte:',
	'smessagesurvey'               => 'Mensajes/Encuestas',
	'nosubject'                    => '(Sin asunto)',
	'nolocale'                     => '(nolocale)',

	// Easy Dates
	'edoneyear'                    => 'un año',
	'edxyear'                      => '%d años',
	'edonemonth'                   => 'un mes',
	'edxmonth'                     => '%d meses',
	'edoneday'                     => 'un día',
	'edxday'                       => '%d días',
	'edonehour'                    => 'una hora',
	'edxhour'                      => '%d horas',
	'edoneminute'                  => 'un minuto',
	'edxminute'                    => '%d minutos',
	'edjustnow'                    => 'Ahora',
	'edxseconds'                   => '%d segundos',
	'ago'                          => 'hace',

	// Operators
	'opcontains'                   => 'Contiene',
	'opnotcontains'                => 'No contiene',
	'opequal'                      => 'Igual a',
	'opnotequal'                   => 'No es igual a',
	'opgreater'                    => 'Mayor que',
	'opless'                       => 'Menor a',
	'opregexp'                     => 'Expresión regular',
	'opchanged'                    => 'Cambiado',
	'opnotchanged'                 => 'No cambiado',
	'opchangedfrom'                => 'Cambió de',
	'opchangedto'                  => 'Cambió a',
	'opnotchangedfrom'             => 'No cambiado de',
	'opnotchangedto'               => 'No cambiado a',
	'matchand'                     => 'AND',
	'matchor'                      => 'OR',
	'strue'                        => 'Verdadero',
	'sfalse'                       => 'Falso',
	'notifynoperm'                 => 'Lamentablemente no tiene permiso para llevar a cabo esta petición.',
	'titlenoperm'                  => 'Permisos insuficientes',
	'msgnoperm'                    => 'Lamentablemente no tiene permiso para llevar a cabo esta petición.',
	'cyesterday'                   => 'Ayer',
	'ctoday'                       => 'Hoy',
	'ccurrentwtd'                  => 'Semana actual hasta la fecha',
	'ccurrentmtd'                  => 'Mes corriente hasta la fecha',
	'ccurrentytd'                  => 'Año actual hasta la fecha',
	'cl7days'                      => 'Últimos 7 días',
	'cl30days'                     => 'Últimos 30 días',
	'cl90days'                     => 'Últimos 90 días',
	'cl180days'                    => 'Últimos 180 días',
	'cl365days'                    => 'Últimos 365 días',
	'ctomorrow'                    => 'Mañana',
	'cnextwfd'                     => 'Semana actual desde hoy',
	'cnextmfd'                     => 'Mes actual desde hoy',
	'cnextyfd'                     => 'Año corriente desde hoy',
	'cn7days'                      => 'Próximos 7 días',
	'cn30days'                     => 'Próximos 30 días',
	'cn90days'                     => 'Próximos 30 días',
	'cn180days'                    => 'Próximos 180 días',
	'cn365days'                    => 'Próximos 365 días',
	'new'                          => 'Nuevo',
	'phoneext'                     => 'Teléfono: %s',
	'snewtickets'                  => 'Nuevos tickets',
	'sadvancedsearch'              => 'Búsqueda avanzada',
	'squicksearch'                 => 'Búsqueda rápida:',
	'sticketidlookup'              => 'Búsqueda de ID de tickets:',
	'screatorreplier'              => 'Creador/Respuesta de:',
	'smanage'                      => 'Administrar',
	'clear'                        => 'Borrar',
	'never'                        => 'Nunca',
	'seuser'                       => 'Usuarios',
	'seuserorg'                    => 'Organizaciones de usuarios',
	'manage'                       => 'Administrar',
	'import'                       => 'Importar',
	'export'                       => 'Exportar',
	'comments'                     => 'Comentarios',
	'commentdata'                  => 'Comentarios:',
	'postnewcomment'               => 'Publicar un nuevo comentario',
	'replytocomment'               => 'Responder al comentario',
	'buttonsubmit'                 => 'Enviar',
	'reply'                        => 'Responder',

	// Flags
	'purpleflag'                   => 'Marcador morado',
	'redflag'                      => 'Marcador rojo',
	'orangeflag'                   => 'Marcador naranja',
	'yellowflag'                   => 'Marcador amarillo',
	'blueflag'                     => 'Marcador azul',
	'greenflag'                    => 'Marcador verde',

	// ======= CALENDAR LOCALE =======
	'calendar'                     => 'Calendario',
	'cal_january'                  => 'Enero',
	'cal_february'                 => 'Febrero',
	'cal_march'                    => 'Marzo',
	'cal_april'                    => 'Abril',
	'cal_may'                      => 'Mayo',
	'cal_june'                     => 'Junio',
	'cal_july'                     => 'Julio',
	'cal_august'                   => 'Agosto',
	'cal_september'                => 'Septiembre',
	'cal_october'                  => 'Octubre',
	'cal_november'                 => 'Noviembre',
	'cal_december'                 => 'Diciembre',

	/**
	 * ###############################################
	 * APP LIST
	 * ###############################################
	 */
	'app_base'                     => 'Base',
	'app_tickets'                  => 'Tickets',
	'app_knowledgebase'            => 'Base de conocimientos',
	'app_parser'                   => 'Analizador de correos electrónicos',
	'app_livechat'                 => 'Soporte en vivo',
	'app_troubleshooter'           => 'Solucionador de problemas',
	'app_news'                     => 'Noticias',
	'app_core'                     => 'Núcleo',
	'app_backend'                  => 'Back-end',
	'app_reports'                  => 'Informes',

	// Potentialy unused phrases in en-us.php
	'defaultloginapi'              => 'Kayako Login Routine',
	'redirect_login'               => 'Processing Login...',
	'redirect_dashboard'           => 'Redirecting to Home...',
	'no_wait'                      => 'Please click here if your browser does not automatically redirect you',
	'select_un_all'                => 'Select/Unselect All Items',
	'quicksearch'                  => 'Quick Search',
	'mass_action'                  => 'Mass Action',
	'massfieldaction'              => 'Action: ',
	'advanced_search'              => 'Advanced Search',
	'searchfieldquery'             => 'Query: ',
	'searchfieldfield'             => 'Field: ',
	'settingsfieldresultsperpage'  => 'Results Per Page: ',
	'clidefault'                   => '%s v%s\nCopyright (c) 2001-%s Kayako\n',
	'firstselect'                  => '- Select -',
	'exportasxml'                  => 'XML',
	'exportascsv'                  => 'CSV',
	'exportassql'                  => 'SQL',
	'exportaspdf'                  => 'PDF',
	'clientarea'                   => 'Support Center',
	'pdainterface'                 => 'PDA Interface',
	'kayakomobile'                 => 'Kayako Mobile',
	'thousandsseperator'           => ',',
	'clierror'                     => '[ERROR]: ',
	'cliwarning'                   => '[WARNING]: ',
	'cliok'                        => '[OK]: ',
	'cliinfo'                      => '[INFO]: ',
	'sections'                     => 'Sections',
	'twodesc'                      => '%s (%s)',
	'hourrenderus'                 => '%s:%s %s',
	'hourrendereu'                 => '%s:%s',
	'jump'                         => 'Jump',
	'newprvmsgconfirm'             => 'You have a new private message\nClick OK to open the private message list in a new window.',
	'commentdelconfirm'            => 'Comment deleted successfully',
	'commentstatusconfirm'         => 'Comment status change completed successfully',
	'commentupdconfirm'            => 'Comment by "%s" updated successfully',
	'unapprove'                    => 'Unapprove',
	'approvedcomments'             => 'Approved Comments',
	'unapprovedcomments'           => 'Unapproved Comments',
	'editcomment'                  => 'Edit Comment',
	'quickjump'                    => 'Quick Jump',
	'choiceadd'                    => 'Add >',
	'choicerem'                    => '< Remove',
	'choicemup'                    => 'Move Up',
	'choicemdn'                    => 'Move Down',
	'ticketsubjectformat'          => '[%s#%s]: %s',
	'forwardticketsubjectformat'   => '[%s~%s]: %s',
	'loggedinas'                   => 'Logged In: ',
	'tcustomize'                   => 'Customize...',
	'notifydemomode'               => 'Permission denied. Product is in demo mode.',
	'uploadfile'                   => 'Upload File: ',
	'uploadedimages'               => 'Uploaded Images',
	'tabinsert'                    => 'Insert',
	'allpages'                     => 'All Pages',
	'maddimage'                    => 'Image',
	'maddlinktoimage'              => 'Link to Image',
	'maddthumbnail'                => 'Thumbnail',
	'maddthumbnailwithlink'        => 'Thumbnail with Link',
	'checkuncheckall'              => 'Check/Uncheck All',
	'defaultloginshare'            => 'Kayako LoginShare',
	'invalidusernoapiaccess'       => 'Invalid Staff. This staff does not have API access, please configure under Settings > General.',
	'msgupdsettings'               => 'Successfully updated all settings for "%s"',
	'msgpwpolicy'                  => 'The password specified does not match the requirements of the Password Policy.',
	'passwordpolicymismatch'       => 'The password specified does not match the requirements of the Password Policy.',
	'short_all_tickets'            => 'All',
	'iprestrictdenial'             => 'Access Denied (%s): IP not allowed (%s), please add the IP in the allowed list under /config/config.php',
	'cal_clear'                    => 'Clear',
	'cal_close'                    => 'Close',
	'cal_prev'                     => '&laquo; Prev',
	'cal_next'                     => 'Next &raquo;',
	'cal_today'                    => 'Today',
	'cal_sunday'                   => 'Su',
	'cal_monday'                   => 'Mo',
	'cal_tuesday'                  => 'Tu',
	'cal_wednesday'                => 'We',
	'cal_thursday'                 => 'Th',
	'cal_friday'                   => 'Fr',
	'cal_saturday'                 => 'Sa',
	'app_bugs'                     => 'Bugs',
);


/*
 * ###############################################
 * BEGIN INTERFACE RELATED CODE
 * ###############################################
 */



if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_ADMIN)
{
	/**
	* Admin Area Navigation Bar
	*/

	$_adminBarContainer = array (

		14 => array ('Settings', 'bar_settings.gif', APP_CORE, '/Base/Settings/Index'),
		26 => array ('REST API', 'bar_restapi.gif', APP_BASE),
		27 => array ('Tag Generator', 'bar_tag.gif', APP_LIVECHAT, '/Base/TagGenerator/Index'),
		0 => array ('Templates', 'bar_templates.gif', APP_BASE),
		1 => array ('Languages', 'bar_languages.gif', APP_CORE),
		2 => array ('Custom Fields', 'bar_customfields.gif', APP_CORE),
		25 => array ('GeoIP', 'bar_geoip.gif', APP_CORE, '/Base/GeoIP/Manage'),
		13 => array ('Live Support', 'bar_livesupport.gif', APP_LIVECHAT),
		4 => array ('Email Parser', 'bar_mailparser.gif', APP_PARSER),
		5 => array ('Tickets', 'bar_tickets.gif', APP_TICKETS),
		29 => array ('Workflow', 'bar_workflow.gif', APP_TICKETS, '/Tickets/Workflow/Manage'),
		30 => array ('Ratings', 'bar_ratings.gif', APP_TICKETS, '/Base/Rating/Manage'),
		6 => array ('SLA', 'bar_sla.gif', APP_TICKETS),
		7 => array ('Escalations', 'bar_escalations.gif', APP_TICKETS, '/Tickets/Escalation/Manage'),
		20 => array ('Bayesian', 'bar_bayesian.gif', APP_TICKETS),
		21 => array ('Knowledgebase', 'bar_knowledgebase.gif', APP_KNOWLEDGEBASE),
		23 => array ('News', 'bar_news.gif', APP_NEWS),
		24 => array ('Troubleshooter', 'bar_troubleshooter.gif', APP_TROUBLESHOOTER),
		31 => array ('Widgets', 'bar_widgets.gif', APP_BASE, '/Base/Widget/Manage'),
		32 => array ('Apps', 'bar_apps.gif', APP_BASE, '/Base/App/Manage'),
		9 => array ('Logs', 'bar_logs.gif', APP_BASE),
		10 => array ('Scheduled Tasks', 'bar_cron.gif', APP_BASE),
		11 => array ('Database', 'bar_database.gif', APP_BASE),
		33 => array ('Import', 'bar_import.gif', APP_BASE),
		12 => array ('Diagnostics', 'bar_diagnostics.gif', APP_BASE),
		34 => array ('Maintenance', 'bar_maintenance.gif', APP_BASE),
	);

	SWIFT::Set('adminbar', $_adminBarContainer);

	$_adminBarItemContainer = array (
		0 => array (
				0 => array ('Groups', '/Base/TemplateGroup/Manage'),
				1 => array ('Templates', '/Base/Template/Manage'),
				2 => array ('Search', '/Base/TemplateSearch/Index'),
				3 => array ('Import/Export', '/Base/TemplateManager/ImpEx'),
				4 => array ('Restore', '/Base/TemplateRestore/Index'),
				5 => array ('Diagnostics', '/Base/TemplateDiagnostics/Index'),
				6 => array ('Header Logos', '/Base/TemplateManager/Personalize'),
			),

		1 => array (
				0 => array ('Languages', '/Base/Language/Manage'),
				1 => array ('Phrases', '/Base/LanguagePhrase/Manage'),
				2 => array ('Search', '/Base/LanguagePhrase/Search'),
				3 => array ('Import/Export', '/Base/LanguageManager/ImpEx'),
				4 => array ('Restore', '/Base/LanguageManager/Restore'),
				5 => array ('Diagnostics', '/Base/LanguageManager/Diagnostics'),
			),

		2 => array (
				0 => array ('Groups', '/Base/CustomFieldGroup/Manage'),
				1 => array ('Fields', '/Base/CustomField/Manage'),
			),

		4 => array (
				0 => array ('Settings', '/Parser/SettingsManager/Index'),
				1 => array ('Email Queues', '/Parser/EmailQueue/Manage'),
				2 => array ('Rules', '/Parser/Rule/Manage'),
				3 => array ('Breaklines', '/Parser/Breakline/Manage'),
				4 => array ('Bans', '/Parser/Ban/Manage'),
				5 => array ('Catch-all Rules', '/Parser/CatchAll/Manage'),
				6 => array ('Loop Blockages', '/Parser/LoopBlock/Manage'),
				7 => array ('Loop Blocker Rules', '/Parser/LoopRule/Manage'),
				9 => array ('Parser Log', '/Parser/ParserLog/Manage'),
			),

		5 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/Index'),
				1 => array ('Types', '/Tickets/Type/Manage'),
				2 => array ('Statuses', '/Tickets/Status/Manage'),
				3 => array ('Priorities', '/Tickets/Priority/Manage'),
				4 => array ('File Types', '/Tickets/FileType/Manage'),
				5 => array ('Links', '/Tickets/Link/Manage'),
				8 => array ('Auto Close', '/Tickets/AutoClose/Manage'),
				7 => array ('Maintenance', '/Tickets/Maintenance/Index'),
			),

		6 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/SLA'),
				1 => array ('Plans', '/Tickets/SLA/Manage'),
				2 => array ('Schedules', '/Tickets/Schedule/Manage'),
				3 => array ('Holidays', '/Tickets/Holiday/Manage'),
				4 => array ('Import/Export', '/Tickets/HolidayManager/Index'),
			),

		20 => array (
				0 => array ('Settings', '/Tickets/SettingsManager/Bayesian'),
				1 => array ('Categories', '/Tickets/BayesianCategory/Manage'),
				2 => array ('Diagnostics', '/Tickets/BayesianDiagnostics/Index'),
		),

		9 => array (
				0 => array ('Error Log', '/Base/ErrorLog/Manage'),
				1 => array ('Task Log', '/Base/ScheduledTasks/TaskLog'),
				3 => array ('Activity Log', '/Base/ActivityLog/Manage'),
				4 => array ('Login Log', '/Base/LoginLog/Manage'),
		),

		10 => array (
				0 => array ('Manage', '/Base/ScheduledTasks/Manage'),
				1 => array ('Task Log', '/Base/ScheduledTasks/TaskLog'),
			),

		11 => array (
				0 => array ('Table Information', '/Base/Database/TableInfo'),
			),

		12 => array (
				0 => array ('Active Sessions', '/Base/Diagnostics/ActiveSessions'),
				1 => array ('Cache Info', '/Base/Diagnostics/CacheInformation'),
				2 => array ('Rebuild Cache', '/Base/Diagnostics/RebuildCache'),
				3 => array ('PHP Info', '/Base/Diagnostics/PHPInfo'),
				4 => array ('Report Issue', '/Base/Diagnostics/ReportBug'),
				5 => array ('License Info', '/Base/Diagnostics/LicenseInformation'),
			),

		13 => array (
				0 => array ('Settings', '/LiveChat/SettingsManager/Index'),
				1 => array ('Visitor Rules', '/LiveChat/Rule/Manage'),
				2 => array ('Visitor Groups', '/LiveChat/Group/Manage'),
				3 => array ('Staff Skills', '/LiveChat/Skill/Manage'),
				4 => array ('Visitor Bans', '/LiveChat/Ban/Manage'),
				5 => array ('Message Routing', '/LiveChat/MessageRouting/Index'),
				6 => array ('Staff Status', '/LiveChat/OnlineStatus/Index'),
			),

		19 => array (
				0 => array ('Settings', '/Manuals/SettingsManager/Index'),
			),

		21 => array (
				0 => array ('Settings', '/KnowledgeBase/SettingsManager/Index'),
				1 => array ('Maintenance', '/KnowledgeBase/Maintenance/Index'),
			),

		22 => array (
				0 => array ('Settings', '/Downloads/SettingsManager/Index'),
			),

		23 => array (
				0 => array ('Settings', '/News/SettingsManager/Index'),
				1 => array ('Import/Export', '/News/ImpEx/Manage'),
			),

		24 => array (
				0 => array ('Settings', '/Troubleshooter/SettingsManager/Index'),
			),

		25 => array (
				0 => array ('Maintenance', '/Base/GeoIP/Manage'),
			),

		26 => array (
				0 => array ('Settings', '/Base/Settings/RESTAPI'),
				1 => array ('API Information', '/Base/RESTAPI/Index'),
			),

		33 => array (
				0 => array ('Manage', '/Base/Import/Manage'),
				1 => array ('Import Log', '/Base/ImportLog/Manage'),
			),

		34 => array (
				0 => array ('Purge Attachments', '/Base/PurgeAttachments/Index'),
				1 => array ('Move Attachments', '/Base/MoveAttachments/Index'),
			),

	);

	// Log stuff
	if (SWIFT_PRODUCT == 'Fusion' || SWIFT_PRODUCT == 'Resolve' || SWIFT_PRODUCT == 'Case') {
		$_adminBarItemContainer[9][2] = array('Parser Log', '/Parser/ParserLog/Manage');
	}

	if (SWIFT_PRODUCT == 'Fusion' || SWIFT_PRODUCT == 'Engage')
	{
		unset($_adminBarContainer[27]);
	}

	SWIFT::Set('adminbaritems', $_adminBarItemContainer);


	/**
	* Admin Area Menu Links
	* Translate the Highlighted Text: 0 => array (>>>'Home'<<<, 100, APP_NAME),
	* ! IMPORTANT ! The following array does NOT have a Zero based index
	*/

	$_adminMenuContainer = array (

		1 => array ('Home', 80, APP_CORE),
		2 => array ('Staff', 100, APP_BASE),
		3 => array ('Departments', 120, APP_BASE),
		4 => array ('Users', 100, APP_BASE),
	);

	SWIFT::Set('adminmenu', $_adminMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the separator items for the menu items
	*/
	$_adminLinkContainer = array (

		1 => array (
				0 => array ('Home', '/Base/Home/Index'),
				1 => array ('Settings', '/Base/Settings/Index'),
				),

		2 => array (
				0 => array ('Manage Staff', '/Base/Staff/Manage'),
				1 => array ('Manage Teams', '/Base/StaffGroup/Manage'),
				2 => array ('Insert Staff', '/Base/Staff/Insert'),
				3 => array ('Insert Team', '/Base/StaffGroup/Insert'),
				4 => array ('LoginShare', '/Base/Settings/StaffLoginShare'),
				5 => array ('Settings', '/Base/Settings/Staff'),
				),

		3 => array (
				0 => array ('Manage Departments', '/Base/Department/Manage'),
				1 => array ('Insert Department', '/Base/Department/Insert'),
				2 => array ('Access Overview', '/Base/Department/AccessOverview'),
				),

		4 => array (
				0 => array ('Manage User Groups', '/Base/UserGroup/Manage'),
				1 => array ('Insert User Group', '/Base/UserGroup/Insert'),
				2 => array ('LoginShare', '/Base/Settings/UserLoginShare'),
				3 => array ('Settings', '/Base/Settings/User'),
				),
	);

	SWIFT::Set('adminlinks', $_adminLinkContainer);
} else if ($_SWIFT->Interface->GetInterface() == SWIFT_Interface::INTERFACE_STAFF) {
	/**
	* Staff Area Menu Links
	* Translate the Highlighted Text: 0 => array (>>>'Home'<<<, 100),
	* ! IMPORTANT ! The following array does NOT have a Zero based index
	*/

	$_staffMenuContainer = array (
		1 => array ('Home', 80, APP_CORE),
		2 => array ('Tickets', 100, APP_TICKETS, 't_entab'),
		3 => array ('Live Support', 120, APP_LIVECHAT, 'ls_entab'),
		4 => array ('Knowledgebase', 140, APP_KNOWLEDGEBASE, 'kb_entab'),
		6 => array ('Troubleshooter', 140, APP_TROUBLESHOOTER, 'tr_entab'),
		7 => array ('News', 90, APP_NEWS, 'nw_entab'),
		8 => array ('Users', 90, APP_CORE, 'cu_entab'),
		9 => array ('Reports', 90, APP_REPORTS, 'rp_entab'),
	);

	SWIFT::Set('staffmenu', $_staffMenuContainer);

	/**
	* Item Format Example: 0 => array ('Name Of Item to Display', 'www.link-to-item.com', PREFIX_SPACING, SUFFIX_BAR_AND_SPACING),
	* The PREFIX_SPACING and SUFFIX_BAR_AND_SPACING are required for the theme to display the separator items for the menu items
	*/
	$_staffLinkContainer = array (

		1 => array (
				0 => array ('Home', '/Base/Home/Index'),
				1 => array ('My Preferences', '/Base/Preferences/ViewPreferences'),
				2 => array ('Notifications', '/Base/Notification/Manage', 'staff_canviewnotifications'),
				3 => array ('Comments', '/Base/Comment/Manage', 'staff_canviewcomments'),
				),

		2 => array (
				0 => array ('Manage Tickets', '/Tickets/Manage/Index', 'staff_tcanviewtickets'),
				1 => array ('Search', ':UIDropDown(\'ticketsearchmenu\', event, \'linkmenu2_1\', \'linksdiv\'); LinkTicketSearchForms();'),
				2 => array ('New Ticket', ':UICreateWindow(\'/Tickets/Ticket/NewTicket/\', \'newticket\', \'New Ticket\', \'Loading..\', 500, 350, true);', 'staff_tcaninsertticket'),
				3 => array ('Macros', '/Tickets/MacroCategory/Manage', 'staff_tcanviewmacro'),
				4 => array ('Views', '/Tickets/View/Manage', 'staff_tcanview_views'),
				5 => array ('Filters', ':UIDropDown(\'ticketfiltermenu\', event, \'linkmenu2_5\', \'linksdiv\');'),
				),

		3 => array (
				0 => array ('Chat History', '/LiveChat/ChatHistory/Manage', 'staff_lscanviewchat'),
				1 => array ('Messages/Surveys', '/LiveChat/Message/Manage', 'staff_lscanviewmessages'),
				2 => array ('Call Logs', '/LiveChat/Call/Manage', 'staff_lscanviewcalls'),
				3 => array ('Canned Responses', '/LiveChat/CannedCategory/Manage', 'admin_lscanviewcanned'),
				4 => array ('Search', ':UIDropDown(\'chatsearchmenu\', event, \'linkmenu3_4\', \'linksdiv\'); LinkChatSearchForms();'),
				),

		4 => array (
				0 => array ('View Knowledgebase', '/Knowledgebase/ViewKnowledgebase/Index'),
				1 => array ('Manage Knowledgebase', '/Knowledgebase/Article/Manage'),
				2 => array ('Categories', '/Knowledgebase/Category/Manage'),
				3 => array ('New Article', '/Knowledgebase/Article/Insert'),
				),

		5 => array (
				0 => array ('View Downloads', '/Downloads/Downloads/Manage'),
				1 => array ('Manage Downloads', '/Downloads/Downloads/Manage'),
				2 => array ('Categories', '/Downloads/Category/Insert'),
				3 => array ('New File', '/Downloads/File/Insert'),
				),

		6 => array (
				0 => array ('View Troubleshooter', '/Troubleshooter/Category/ViewAll'),
				1 => array ('Manage Troubleshooter', '/Troubleshooter/Step/Manage'),
				2 => array ('Categories', '/Troubleshooter/Category/Manage'),
				3 => array ('New Step', ':UICreateWindow(\'/Troubleshooter/Step/InsertDialog/\', \'newstep\', \'Insert Step\', \'Loading..\', 400, 200, true);'),
				),

		7 => array (
				0 => array ('View News', '/News/NewsItem/ViewAll', 'staff_nwcanviewitems'),
				1 => array ('Manage News', '/News/NewsItem/Manage', 'staff_nwcanmanageitems'),
				2 => array ('Categories', '/News/Category/Manage', 'staff_nwcanviewcategories'),
				3 => array ('Subscribers', '/News/Subscriber/Manage', 'staff_nwcanviewsubscribers'),
				4 => array ('Insert News', ':UICreateWindow(\'/News/NewsItem/InsertDialog/\', \'newnews\', \'Insert News\', \'Loading..\', 600, 420, true);'),
				),

		8 => array (
				0 => array ('Manage Users', '/Base/User/Manage', 'staff_canviewusers'),
				1 => array ('Manage Organizations', '/Base/UserOrganization/Manage', 'staff_canviewuserorganizations'),
				2 => array ('Search', ':UIDropDown(\'usersearchmenu\', event, \'linkmenu8_2\', \'linksdiv\'); LinkUserSearchForms();'),
				3 => array ('Insert User', '/Base/User/Insert', 'staff_caninsertuser'),
				4 => array ('Insert Organization', '/Base/UserOrganization/Insert', 'staff_caninsertuserorganization'),
				),

		9 => array (
				0 => array ('Manage Reports', '/Reports/Report/Manage'),
				1 => array ('Categories', '/Reports/Category/Manage'),
				2 => array ('New Report', ':UICreateWindow(\'/Reports/Report/InsertDialog/\', \'newreport\', \'New Report\', \'Loading..\', 400, 280, true);'),
				),
	);

	$_staffLinkContainer[2][1][15] = true;
	$_staffLinkContainer[2][5][15] = true;
	$_staffLinkContainer[8][2][15] = true;
	$_staffLinkContainer[3][4][15] = true;

	SWIFT::Set('stafflinks', $_staffLinkContainer);
}


?>