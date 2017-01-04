<?php
/**
 * ###############################################
 *
 * SWIFT Framework
 * _______________________________________________
 *
 * @author         Varun Shoor
 *
 * @package        SWIFT
 * @copyright      Copyright (c) 2001-2012, Kayako
 * @license        http://www.kayako.com/license
 * @link           http://www.kayako.com
 *
 * ###############################################
 */

$__LANG = array(
	// Staff/Live support
	'mod_livesupport'                    => 'Soporte en vivo',
	'ls_entab'                           => 'Acceder al área de soporte en vivo del panel de control del personal',
	'livechathistory'                    => 'Registro del chat',
	'livechatnotes'                      => 'Notas del chat',
	'livechatmessages'                   => 'Mensaje (<em>deje un mensaje</em>) y encuestas',
	'livechatcalls'                      => 'Llamadas',
	'livechatcanned'                     => 'Respuestas estándar',
	'ls_canobserve'                      => 'Observar chat (escritorio kayako)',
	'winapplrbans'                       => 'Bloqueo de visitantes (escritorio kayako)',

	// Admin/Live support
	'lrskills'                           => 'Habilidades',
	'lrrules'                            => 'Reglas de visitantes',
	'lrgroups'                           => 'Grupos de visitantes',
	'lrbans'                             => 'Bloqueos de visitantes',
	'lrmessagerouting'                   => 'Enrutamiento de soport en vivo <em>deje un mensaje</em>
',
	'admin_lrcanviewonlinestaff'         => 'Ver al personal online',
	'admin_lrcandisconnectstaff'         => 'Desconectar al personal',

	// Staff/Reports
	'rp_entab'                           => 'Acceder al área de informes del panel de control del personal',
	'reportcategories'                   => 'Categorías de informes',
	'reports'                            => 'Informes',
	'reportschedules'                    => 'Informes programados',
	'staff_rrestrict'                    => 'Sólo puede ejecutar informes sobre contenido al que el personal tengas acceso (a través de los permisos de departamento)',

	// Staff/News
	'mod_news'                           => 'Noticias',
	'nw_entab'                           => 'Acceder al área de noticias del panel de control del personal',
	'staff_newssubscribers'              => 'Suscriptores de noticias',
	'staff_newscategories'               => 'Categorías de noticias',
	'staff_newscanpublicinsert'          => 'Publicar artículos de noticias públicos',
	'staff_newsitems'                    => 'Artículos de noticias',

	// Admin/Email parser
	'mod_parser'                         => 'Analizador de correos electrónicos',
	'parserqueues'                       => 'Cola de correo electrónico',
	'parserlogs'                         => 'Registro del analizador de correos electrónicos',
	'parserrules'                        => 'Reglas de correo electrónico',
	'parserbreaklines'                   => 'Reglas de quiebe de línea en correos',
	'parserbans'                         => 'Bloqueo de correo electrónico',
	'parsercatchall'                     => 'Reglas catch-all',
	'parserblockages'                    => 'Bloqueos de bucles de correo electrónico',
	'parserlooprule'                     => 'Reglas de bloqueo de bucles de correo electrónico',

	// Staff/Knowledgebase
	'mod_knowledgebase'                  => 'Base de conocimientos',
	'kb_entab'                           => 'Acceder a la zona de la base de conocimientos del panel de control del personal',
	'staff_kbcategories'                 => 'Categorías de la base de conocimientos',
	'staff_kbarticles'                   => 'Artículos de la base de conocimientos',
	'staff_kbcaninsertpublishedarticles' => 'Publicar artículos de base de conocimientos',

	// Staff/Tickets
	't_entab'                            => 'Acceder al área de tickets del panel de control del personal',
	'texport'                            => 'Exportar tickets (PDF/XML)',
	'tforward'                           => 'Reenviar tickets',
	'staff_tcansearch'                   => 'Buscar tickets',
	'staff_ticketmacros'                 => 'Macros de tickets',
	'staff_ticketfilters'                => 'Filtros de tickets',
	'staff_ticketviews'                  => 'Vista de tickets',
	'staff_tickets'                      => 'Tickets',
	'staff_ticketposts'                  => 'Entradas de tickets',
	'staff_tcanmarkasspam'               => 'Marcar tickets como spam',
	'staff_tcantrashticket'              => 'Enviar ticket a la papelera',
	'staff_ticketbilling'                => 'Seguimiento del tiempo y facturación',
	'staff_tcanforward'                  => 'Reenviar tickets',
	'staff_tcanreply'                    => 'Responder a tickets',
	'staff_tcanfollowup'                 => 'Planificar seguimiento de tickets',
	'staff_tcanrelease'                  => 'Aprobar tickets',
	'staff_ticketfollowup'               => 'Seguimientos de tickets',
	'staff_tcanviewauditlog'             => 'Ver registro de auditoría del ticket',
	'staff_ticketnotes'                  => 'Notas de tickets',
	'staff_tcanworkflow'                 => 'Ver y actualizar flujos de trabajo',
	'staff_tcansaveasdraft'              => 'Guardar borrador de respuesta a tickets',
	'staff_recurrence'                   => 'Repetición',
	'staff_tcanchangeunassigneddepartment' => 'Can change Ticket department to unassigned departments',
	'staff_tcanviewunassign'			 => 'Can view unassigned tickets',
	'staff_tcanviewall'     			 => 'Can view all tickets',

	// Admin/Core
	'corestaff'                          => 'Usuarios del personal',
	'coreteams'                          => 'Equipos de personal',
	'coredepartments'                    => 'Departamentos',
	'coretemplategroups'                 => 'Grupo de plantillas',
	'coretemplates'                      => 'Plantillas',
	'coreusergroups'                     => 'Grupos de usuarios',
	'corecustomfieldgroups'              => 'Grupos de campos personalizados',
	'corecustomfields'                   => 'Campos personalizados',
	'corewidgets'                        => 'Centro de soporte de widgets',
	'corelanguages'                      => 'Idiomas',
	'corelanguagephrases'                => 'Expresiones lingüísticas',
	'admin_canmanagetaggenerator'        => 'Utilizar el generador de etiquetas del soporte en vivo',
	'admin_canmanagerestapi'             => 'Administrar configuración de la REST API',
	'admin_canviewloginlog'              => 'Ver el registro de inicios de sesión',
	'admin_canviewactivitylog'           => 'Ver el registro de la actividad del personal',
	'admin_canviewerrorlog'              => 'Ver el registro de errores del soporte técnico',
	'admin_canviewdatabase'              => 'Ver detalles de la base de datos',
	'admin_canrundiagnostics'            => 'Ejecutar diagnóstico del soporte técnico',
	'admin_canupdatesettings'            => 'Administrar configuración del soporte técnico (ajustes del sistema)',
	'admin_canrebuildgeoip'              => 'Administrar base de datos GeoIP',
	'admin_canimportphrases'             => 'Importar paquetes de idiomas',
	'admin_canexportphrases'             => 'Exportar paquetes de idiomas',
	'admin_canrestorephrases'            => 'Restaurar expresiones lingüísticas',
	'admin_canrunlanguagediagnostics'    => 'Ejecutar diagnóstico del idioma',
	'coreratings'                        => 'Calificaciones',
	'corescheduledtasks'                 => 'Programadar tareas',
	'admin_tcanrunmoveattachments'       => 'Migrar archivos adjuntos',
	'admin_tcanpurgeattachments'         => 'Purgar archivos adjuntos del soporte técnico',
	'admin_canrunimport'                 => 'Ejecutar herramientas de importación',
	'admin_tmpcanpersonalize'            => 'Acceder a <em>Plantillas&rarr; Logotipos del encabezado</em>',
	'admin_canmanageapps'                => 'Administrar aplicaciones del soporte técnico',

	// Admin/Tickets
	'mod_tickets'                        => 'Tickets',
	'ticketworkflows'                    => 'Flujos de trabajo',
	'ticketstatuses'                     => 'Estados del ticket',
	'ticketpriorities'                   => 'Prioridades de tickets',
	'ticketfiletypes'                    => 'Tipos de archivos permitidos',
	'tickettypes'                        => 'Tipos de tickets',
	'ticketlinks'                        => 'Enlaces de tickets (relaciones)',
	'ticketbayes'                        => 'Categorías bayesianas',
	'ticketslaplans'                     => 'Planes de SLA',
	'ticketautocloserules'               => 'Reglas de cierre automático de tickets',
	'ticketslaschedules'                 => 'Horarios de horas de trabajo SLA',
	'ticketslaholidays'                  => 'Festivos de SLA',
	'ticketescalations'                  => 'Reglas de escalación de tickets',
	'admin_tcanrunbayesdiagnostics'      => 'Ejecutar diagnóstico del bayesiano',
	'admin_tcanimpexslaholidays'         => 'Importar y exportar paquete de vacaciones SLA',
	'admin_tmpcanrestoretemplates'       => 'Restaurar plantillas a estado original',
	'admin_tmpcanrundiagnostics'         => 'Ejecutar diagnósticos de plantillas',
	'admin_tmpcanrunimportexport'        => 'Importar y exportar de grupos de plantillas',
	'admin_tmpcansearchtemplates'        => 'Buscar plantillas',
	'admin_tcanrunmaintenance'           => 'Realizar tareas de mantenimiento de tickets (reconstruir índicies de búsqueda)',

	// Staff/Troubleshooter
	'mod_troubleshooter'                 => 'Solucionador de problemas',
	'tr_entab'                           => 'Acceder al áre del solucionador de problemas del panel de control del personal',
	'staff_trcaninsertpublishedsteps'    => 'Publicar pasos del solucionador de problemas',
	'staff_troubleshootersteps'          => 'Pasos del solucionador de problemas',
	'staff_troubleshootercategories'     => 'Categorías del solucionador de problemas',

	// Staff/Base
	'cu_entab'                           => 'Acceder al áre de usuarios en el panel de control del personal',
	'staff_profile'                      => 'Actualizar el perfil del personal',
	'staff_changepassword'               => 'Cambiar contraseña',
	'staff_loginasuser'                  => 'Puede iniciar sesión como usuario final',
	'staff_users'                        => 'Usuarios',
	'staff_usersorganizations'           => 'Organizaciones de usuarios',
	'staff_ratings'                      => 'Calificaciones',
	'staff_tags'                         => 'Etiquetas',
	'staff_notifications'                => 'Reglas de notificación',
	'staff_comments'                     => 'Comentarios',
	'staff_usernotes'                    => 'Notas de usuario',

	// Department-specific (individual user) permissions
	'd_t_canreply'                       => 'Responder a tickets',
	'd_t_canforward'                     => 'Reenviar tickets',
	'd_t_canfollowup'                    => 'Planificar seguimiento de tickets',
	'd_t_canbilling'                     => 'Notas del registro de tiempo y facturación',

	// Potentialy unused phrases in admin_staffpermissions.php
	'coreloginshare'                     => 'Staff LoginShare',
	'coretemplateloginshare'             => 'User LoginShare',
	'admin_canviewdepartments'           => 'Can View Departments',
	'admin_lrcandeletevisitorgroup'      => 'Can Delete Visitor Group(s)',
	'admin_lrcaninsertvisitorgroup'      => 'Can Insert Visitor Group',
	'admin_lrcanupdatevisitorgroup'      => 'Can Update Visitor Group',
	'admin_lrcanviewvisitorgroups'       => 'Can View Visitor Group(s)',
	'admin_caninsertstaff'               => 'Can Insert Staff Users',
	'admin_caneditstaff'                 => 'Can Update Staff Users',
	'admin_candeletestaff'               => 'Can Delete Staff Users',
	'admin_caninsertteams'               => 'Can Insert Teams',
	'admin_caneditteams'                 => 'Can Update Teams',
	'admin_candeleteteams'               => 'Can Delete Teams',
	'admin_caninsertdepartment'          => 'Can Insert Department',
	'admin_caneditdepartment'            => 'Can Edit Department',
	'admin_candeletedepartment'          => 'Can Delete Departments',
	'admin_caninsertcfgroup'             => 'Can Insert Custom Field Group',
	'admin_canupdatecfgroup'             => 'Can Update Custom Field Group',
	'admin_candeletecfgroup'             => 'Can Delete Custom Field Group',
	'admin_caninsertcustomfield'         => 'Can Insert Custom Field',
	'admin_canupdatecustomfield'         => 'Can Update Custom Field',
	'admin_candeletecustomfield'         => 'Can Delete Custom Field',
	'admin_canviewlanguages'             => 'Can View Languages',
	'admin_caninsertlanguage'            => 'Can Insert Language',
	'admin_canupdatelanguage'            => 'Can Update Language',
	'admin_candeletelanguage'            => 'Can Delete Language(s)',
	'admin_canrestorelanguage'           => 'Can Restore Language',
	'admin_canviewphrases'               => 'Can View Phrases',
	'admin_caninsertphrase'              => 'Can Insert Phrase',
	'admin_canupdatephrase'              => 'Can Update Phrase',
	'admin_candeletephrase'              => 'Can Delete Phrase(s)',
	'admin_lrcanupdaterouting'           => 'Can Update Message Routing Rules',
	'admin_lrcanviewrouting'             => 'Can View Message Routing Rules',
	'admin_lrcanviewbans'                => 'Can View IP Bans',
	'admin_lrcaninsertban'               => 'Can Insert IP Ban',
	'admin_lrcanupdateban'               => 'Can Update IP Ban',
	'admin_lrcandeleteban'               => 'Can Delete IP Ban(s)',
	'admin_lrcanviewrules'               => 'Can View Visitor Rules',
	'admin_lrcaninsertrule'              => 'Can Insert Visitor Rule',
	'admin_lrcanupdaterule'              => 'Can Update Visitor Rule',
	'admin_lrcandeleterule'              => 'Can Delete Visitor Rule(s)',
	'admin_lrcanviewskills'              => 'Can View Skills',
	'admin_lrcaninsertskill'             => 'Can Insert Skill',
	'admin_lrcanupdateskill'             => 'Can Update Skill',
	'admin_lrcandeleteskill'             => 'Can Delete Skill(s)',
	'admin_mpcaninsertqueue'             => 'Can Insert Email Queue',
	'admin_mpcanupdatequeue'             => 'Can Update Email Queue',
	'admin_mpcandeletequeue'             => 'Can Delete Email Queue(s)',
	'admin_mpcanviewqueues'              => 'Can View Email Queue(s)',
	'admin_mpcanviewparserlogs'          => 'Can View Parser Log(s)',
	'admin_mpcandeleteparserlogs'        => 'Can Delete Parser Log(s)',
	'admin_mpcaninsertrule'              => 'Can Insert Rule',
	'admin_mpcanupdaterule'              => 'Can Update Rule',
	'admin_mpcandeleterule'              => 'Can Delete Rule(s)',
	'admin_mpcanviewrules'               => 'Can View Rule(s)',
	'admin_mpcaninsertbreakline'         => 'Can Insert Breakline',
	'admin_mpcanupdatebreakline'         => 'Can Update Breakline',
	'admin_mpcandeletebreaklines'        => 'Can Delete Breakline(s)',
	'admin_mpcanviewbreaklines'          => 'Can View Breakline(s)',
	'admin_mpcaninsertban'               => 'Can Insert Email Ban',
	'admin_mpcanupdateban'               => 'Can Update Email Ban',
	'admin_mpcandeletebans'              => 'Can Delete Email Ban(s)',
	'admin_mpcanviewbans'                => 'Can View Email Ban(s)',
	'admin_mpcaninsertcatchall'          => 'Can Insert Catch-All Rule',
	'admin_mpcanupdatecatchall'          => 'Can Update Catch-All Rule',
	'admin_candeletecatchall'            => 'Can Delete Catch-All Rule(s)',
	'admin_canviewcatchall'              => 'Can View Catch-All Rule(s)',
	'admin_iscanviewstatus'              => 'Can View Status',
	'admin_iscaninsertstatus'            => 'Can Insert Status',
	'admin_iscanupdatestatus'            => 'Can Update Status',
	'admin_iscandeletestatus'            => 'Can Delete Status',
	'admin_iscanviewpriorities'          => 'Can View Priorities',
	'admin_iscaninsertpriority'          => 'Can Insert Priority',
	'admin_iscanupdatepriority'          => 'Can Update Priority',
	'admin_iscandeletepriorities'        => 'Can Delete Priorities',
	'admin_iscanviewresolutions'         => 'Can View Resolutions',
	'admin_iscaninsertresolution'        => 'Can Insert Resolution',
	'admin_iscanupdateresolution'        => 'Can Update Resolution',
	'admin_iscandeleteresolutions'       => 'Can Delete Resolution(s)',
	'admin_iscanviewlinks'               => 'Can View Links',
	'admin_iscaninsertlink'              => 'Can Insert Link',
	'admin_iscanupdatelink'              => 'Can Update Link',
	'admin_iscandeletelinks'             => 'Can Delete Link(s)',
	'admin_iscanviewtypes'               => 'Can View Types',
	'admin_iscaninsertype'               => 'Can Insert Type',
	'admin_iscanupdatetype'              => 'Can Update Type',
	'admin_iscandeletetypes'             => 'Can Delete Type(s)',
	'mod_issues'                         => 'Issues',
	'admin_tcanviewbayescategories'      => 'Can View Bayesian Categories',
	'admin_tcandeletebayescategories'    => 'Can Delete Bayesian Categories',
	'admin_tcaninsertbayescategory'      => 'Can Insert Bayesian Category',
	'admin_tcanupdatebayescategory'      => 'Can Update Bayesian Category',
	'admin_tcanviewslaplans'             => 'Can View SLA Plans',
	'admin_tcaninsertslaplan'            => 'Can Insert SLA Plan',
	'admin_tcanupdateslaplan'            => 'Can Update SLA Plan',
	'admin_tcandeleteslaplans'           => 'Can Delete SLA Plan(s)',
	'admin_tcanviewslaschedules'         => 'Can View SLA Schedules',
	'admin_tcaninsertslaschedules'       => 'Can Insert SLA Schedule',
	'admin_tcanupdateslaschedules'       => 'Can Update SLA Schedule',
	'admin_tcandeleteslaschedules'       => 'Can Delete SLA Schedule(s)',
	'admin_tcanviewslaholidays'          => 'Can View SLA Holidays',
	'admin_tcaninsertslaholidays'        => 'Can Insert SLA Holiday',
	'admin_tcanupdateslaholidays'        => 'Can Update SLA Holiday',
	'admin_tcandeleteslaholidays'        => 'Can Delete SLA Holiday(s)',
	'admin_tcanviewescalations'          => 'Can View Escalation Rules',
	'admin_tcaninsertescalations'        => 'Can Insert Escalation Rule',
	'admin_tcanupdateescalations'        => 'Can Update Escalation Rule',
	'admin_tcandeleteescalations'        => 'Can Delete Escalation Rule(s)',
	'admin_canviewcfgroups'              => 'Can View Custom Field Groups',
	'admin_canviewcfields'               => 'Can View Custom Fields',
	'admin_tmpcanviewgroups'             => 'Can View Template Groups',
	'admin_tmpcaninsertgroup'            => 'Can Insert Template Group',
	'admin_tmpcanupdategroup'            => 'Can Update Template Group',
	'admin_tmpcandeletegroup'            => 'Can Delete Template Group(s)',
	'admin_tmpcanviewtemplates'          => 'Can View Templates',
	'admin_tmpcaninserttemplate'         => 'Can Insert Template',
	'admin_tmpcanupdatetemplate'         => 'Can Update Template',
	'admin_tmpcanimportloginshare'       => 'Can Import LoginShare Plugin',
	'admin_tmpcanupdateloginshare'       => 'Can Update LoginShare Settings',
	'admin_tmpcanviewloginshare'         => 'Can View LoginShare Plugins',
	'admin_tmpcandeleteloginshare'       => 'Can Delete LoginShare Plugin(s)',
	'admin_tcanviewworkflows'            => 'Can View Workflows',
	'admin_tcaninsertworkflow'           => 'Can Insert Workflow',
	'admin_tcanupdateworkflow'           => 'Can Update Workflow',
	'admin_tcandeleteworkflows'          => 'Can Delete Workflow(s)',
	'admin_tcanviewstatus'               => 'Can View Status',
	'admin_tcaninsertstatus'             => 'Can Insert Status',
	'admin_tcanupdatestatus'             => 'Can Update Status',
	'admin_tcandeletestatus'             => 'Can Delete Status',
	'admin_tcanviewpriorities'           => 'Can View Priorities',
	'admin_tcaninsertpriority'           => 'Can Insert Priority',
	'admin_tcanupdatepriority'           => 'Can Update Priority',
	'admin_tcandeletepriority'           => 'Can Delete Priority',
	'admin_tcanviewfiletypes'            => 'Can View File Types',
	'admin_tcaninsertfiletype'           => 'Can Insert File Type',
	'admin_tcanupdatefiletype'           => 'Can Update File Type',
	'admin_tcandeletefiletypes'          => 'Can Delete File Type',
	'admin_tcanviewlinks'                => 'Can View Links',
	'admin_tcaninsertlink'               => 'Can Insert Link',
	'admin_tcanupdatelink'               => 'Can Update Link',
	'admin_tcandeletelinks'              => 'Can Delete Links',
	'admin_mpcanviewloopblockages'       => 'Can View Loop Blockages',
	'admin_mpcandeleteloopblockages'     => 'Can Delete Loop Blockages',
	'admin_mpcanviewlooprules'           => 'Can View Loop Rules',
	'admin_mpcaninsertlooprule'          => 'Can Insert Loop Rule',
	'admin_mpcanupdatelooprule'          => 'Can Update Loop Rule',
	'admin_mpcandeletelooprule'          => 'Can Delete Loop Rule',
	'd_ls_canhistory'                    => 'Can View Chat History Transcripts',
	'd_ls_canchat'                       => 'Can Accept/Reject Chats',
	'tsmanagecategories'                 => 'Can Manage Categories',
	'tsmanagesteps'                      => 'Can Manage Steps',
	'tsinsertcategory'                   => 'Can Insert Category',
	'tseditcategory'                     => 'Can Edit Category',
	'tsdeletecategory'                   => 'Can Delete Category',
	'tsaddstep'                          => 'Can Add New Troubleshooter Step',
	'tseditstep'                         => 'Can Edit Existing Step',
	'tsdeletestep'                       => 'Can Delete Troubleshooter Step',
	'tsexport'                           => 'Can Export Troubleshooter Data',
	'tsimport'                           => 'Can Import Troubleshooter Data',
	'tmanage'                            => 'Can Manage Tickets',
	'tdeleteview'                        => 'Can Delete Ticket Views',
	'teditview'                          => 'Can Edit Ticket Views',
	'tnewticket'                         => 'Can Create New Ticket',
	'tdeleteticket'                      => 'Can Delete Ticket',
	'tdeletepost'                        => 'Can Delete Ticket Post',
	'teditpost'                          => 'Can Edit Ticket Post',
	'tcrearule'                          => 'Can Create Public Alert Rules',
	'tbilling'                           => 'Can Add Billing Entries',
	'tdelrecipients'                     => 'Can Delete Ticket Recipients',
	'tmerge'                             => 'Can Merge Ticket',
	'tdelarule'                          => 'Can Delete Public Alert Rules',
	'tupdarule'                          => 'Can Edit Public Alert Rules',
	'tdellabel'                          => 'Can Delete Ticket Label',
	'tcanviewall'                        => 'Can View All Tickets <i>(Unassigned, Assigned to Self and Assigned to Others)</i>',
	'tbanticket'                         => 'Can Ban Users',
	'tbandelete'                         => 'Can Ban Users and Delete Tickets',
	'mod_core'                           => 'SWIFT General',
);

?>