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

// Initial pass done
// Usage script run

$__LANG = array(
	'manage'                          => 'Administrar',

	'tabgeneral'                      => 'General',
	'tabmassaction'                   => 'Acción masiva',
	'tabreply'                        => 'Responder',
	'tabforward'                      => 'Reenviar',

	/**
	 * ---------------------------------------------
	 * Mass actions
	 * ---------------------------------------------
	 */
	'manochange'                      => '-- Ningún cambio --',
	'maticketstatus'                  => 'Cambiar estado',
	'maticketpriority'                => 'Cambiar prioridad',
	'matickettype'                    => 'Cambiar el tipo de ticket',
	'madepartment'                    => 'Mover al departamento',
	'maowner'                         => 'Asignar',
	'maticketlink'                    => 'Vincular',
	'maaddtags'                       => 'Agregar etiquetas',
	'maremovetags'                    => 'Eliminar etiquetas',
	'maticketflag'                    => 'Marcar',
	'manoflag'                        => '-- Sin marcar --',
	'mabayescategory'                 => 'Entrenar bayesiano',
	'sactivestaff'                    => '-- Personal activo --',
	'tnavnextticket'                  => 'Siguiente ticket &raquo;',
	'tnavprevticket'                  => '&laquo; Ticket anterior',
	'tagaddtorecp'                    => 'Añadir a destinatarios',
	'massreply'                       => 'Respuesta masiva',

	/**
	 * ---------------------------------------------
	 * Trash view
	 * ---------------------------------------------
	 */
	'emptytrash'                      => 'Vaciar papelera',
	'emptytrashconfirm'               => 'Los tickets en la papelera se eliminarán de forma permanente. ¿Desea continuar?',
	'putback'                         => 'Devolver',

	/**
	 * ---------------------------------------------
	 * Viewing a Ticket
	 * ---------------------------------------------
	 */
	'mergeoptions'                    => 'Fusionar ticket',
	'mergeparentticket'               => 'ID del ticket al que fusionar',
	'desc_mergeparentticket'          => 'El ID del ticket al que fusionar.',
	'titleeditmergefailed'            => 'No se pudieron fusionar los tickets',
	'msgeditmergefailed'              => 'No se pudieron fusionar los tickets al no encontrar el ID del ticket especificado. Por favor, compruebe el ID del ticket e inténtelo de nuevo.',
	'titleeditmergesuccess'           => 'Tickets fusionados',
	'msgeditmergesuccess'             => 'Los tickets han sido fusionados correctamente.',
	'tabcalls'                        => 'Llamadas',
	'dispatchasuser'                  => 'Responder como usuario',
	'viewticket'                      => 'Ver ticket',
	'viewticketext'                   => '[Nº%s]: %s',
	'proptitledepartment'             => 'DEPARTAMENTO',
	'proptitleowner'                  => 'PROPIETARIO',
	'proptitlestatus'                 => 'ESTADO',
	'proptitlepriority'               => 'PRIORIDAD',
	'proptitletype'                   => 'TIPO',
	'tinforesolutiondue'              => 'Resolución vencida: ',
	'tinfosla'                        => 'Plan de SLA: ',
	'tinfoticketid'                   => 'ID: ',
	'tinfodue'                        => 'Respuesta vencida: ',
	'tinfocreated'                    => 'Creado: ',
	'tinfoupdated'                    => 'Actualizado: ',
	'ticketlinkinfo'                  => 'Departamento: %s, Estado: %s',
	'ticketunlink'                    => '- desvincular',
	'tppostedon'                      => 'Publicado el: %s',
	'tppostedonsurvey'                => 'Comentario a encuesta publicado el: %s',
	'tpemail'                         => 'Correo electrónico: %s',
	'tpipaddress'                     => 'Dirección IP: %s',
	'participantbox'                  => 'Participantes',
	'badgethirdparty'                 => 'Terceros',
	'badgeuser'                       => 'Usuario',
	'badgestaff'                      => 'Personal',
	'badgecc'                         => 'Destinatario',
	'badgebcc'                        => 'CCO',
	'wineditticketpost'               => 'Editar entrada de ticket',
	'editpost'                        => 'Editar entrada',
	'lastedited'                      => 'Última edición por: %s El: %s',
	'dialogduetimeline'               => 'Respuesta vencida',
	'dialogresolutionduetimeline'     => 'Resolución vencida',
	'stopwatching'                    => 'Dejar de seguir',
	'surrender'                       => 'Abandonar',
	'print'                           => 'Imprimir',
	'take'                            => 'Tomar',
	'tabauditlog'                     => 'Registros de auditoría',
	'aldescription'                   => 'Descripción',
	'alentrytype'                     => 'Tipo de entrada',
	'alstaff'                         => ' (Personal)',
	'aluser'                          => ' (Usuario)',
	'alsystem'                        => ' (Sistema)',
	'alparser'                        => ' (Analizador)',
	'editnote'                        => 'Editar nota',
	'notetitle'                       => '%s de %s',
	'noteeditedtitle'                 => ' <em>(Editado por %s el %s)</em>',
	'ticketnotedelconfirm'            => '¿Está seguro de que desea eliminar esta nota de ticket?',
	'tabaddnote'                      => 'Añadir nota',
	'tabeditnote'                     => 'Editar nota',
	'addnotes'                        => 'Notas',
	'notetype'                        => 'Tipo de notas',
	'addnote'                         => 'Añadir nota',
	'notes_ticket'                    => 'Ticket',
	'notes_user'                      => 'Usuario',
	'notes_userorganization'          => 'Organización de usuarios',
	'tabrelease'                      => 'Publicar',
	'tabedit'                         => 'Editar',
	'tabhistory'                      => 'Historial',
	'tabchats'                        => 'Chats',
	'notesvisibleall'                 => '-- Todos --',
	'notevisibleto'                   => 'Visibilidad',
	'desc_notevisibleto'              => 'Restringir la visibilidad de esta nota.',
	'edit_subject'                    => 'Asunto del ticket',
	'edit_fullname'                   => 'Nombre del creador',
	'edit_email'                      => 'Dirección de correo electrónico del creador',
	'edit_overridesla'                => 'Anular SLA',
	'desc_edit_overridesla'           => 'Especificar un plan de SLA que adjuntar a este ticket, anulando cualquier plan de SLA  automáticamente asignado.',
	'editslausedef'                   => '-- Usar SLA predeterminado --',
	'edittproperties'                 => 'Propiedades de ticket',
	'edittrecipients'                 => 'Destinatarios del ticket',
	'editrecipientsdesc'              => 'Additional recipients can be included in a ticket. Recipients will receive email copies of ticket replies made by staff, but will not have access to view the ticket online.<br /><br />The option to add ticket recipients is available when CCing, BCCing, or forwarding a ticket. There are three types of recipients:<br /><br /><strong>Third party:</strong> Copied (CCd) in on all ticket replies made by staff. They are also able to reply to these by email, and these replies will be added to the ticket.<br /><br /><strong>CC:</strong> Copied (CCd) in on all ticket replies made by staff.  Can contribute to a ticket via email only.<br /><br /><strong>BCC:</strong> Blind copied (BCCd) in on all ticket replies made by staff. Can contribute to a ticket via email only.',
	'editthirdparty'                  => 'Destinatarios terceros',
	'editcc'                          => 'Destinatarios CC',
	'editbcc'                         => 'Destinatarios CCO',
	'history_ticketid'                => 'ID del ticket',
	'history_subject'                 => 'Asunto',
	'history_date'                    => 'Fecha',
	'history_department'              => 'Departamento',
	'history_type'                    => 'Tipo',
	'history_status'                  => 'Estado',
	'history_priority'                => 'Prioridad',
	'workflowbox'                     => 'Flujo de trabajo',
	'informationbox'                  => 'Información',
	'tinfobticketid'                  => 'ID DEL TICKET',
	'tinfobuser'                      => 'USUARIO',
	'tinfobuserorganization'          => 'ORGANIZACIÓN',
	'tinfobusergroup'                 => 'GRUPO',
	'dispatchfrom'                    => 'De',
	'dispatchto'                      => 'Para',
	'dispatchcc'                      => 'CC',
	'dispatchbcc'                     => 'CCO',
	'dispatchcontents'                => 'Contenido de la respuesta',
	'dispatchaddmacro'                => 'Macro',
	'dispatchaddkb'                   => 'Base de conocimientos',
	'dispatchsendmail'                => 'Enviar correo',
	'dispatchprivate'                 => 'Respuesta privada',
	'dispatchwatch'                   => 'Seguir ticket',
	'dispatchaddfile'                 => 'Agregar otro archivo',
	'dispatchsend'                    => 'Enviar',
	'dispatchattachfile'              => 'Adjuntar',
	'dispatchsaveasdraft'             => 'Guardar como borrador',
	'dispatchto'                      => 'Para',
	'dispatchsubject'                 => 'Asunto',
	'dispatchsend'                    => 'Enviar',
	'dispatchsendar'                  => 'Enviar respuestas automática',
	'dispatchuser'                    => 'Usuario',
	'dispatchnewuser'                 => 'Crear nueva cuenta de usuario',
	'dispatchisphone'                 => 'Ticket telefónico',
	'winuserquickinsert'              => 'Crear nueva cuenta de usuario',
	'dispatch'                        => 'Asignar',
	'tabdispatch'                     => 'Asignar',
	'dispatchticket'                  => 'Asignar ticket',
	'assign'                          => 'Asignar',
	'newticket'                       => 'Ticket nuevo',
	'newticket_department'            => 'Crear ticket en departamento',
	'desc_newticket_department'       => '',
	'nt_sendmail'                     => 'Enviar un correo electrónico',
	'nt_asuser'                       => 'Como usuario',
	'newticket_type'                  => 'Crear tipo de ticket',
	'desc_newticket_type'             => '<strong>Enviar correo electrónico</strong> Se creará un ticket del cual será su autor - como si enviara un correo a alguien.<br /><strong>Como usuario</strong> Crear ticket de parte de un usuario, bajo el nombre de éste. Útil para el registro de llamadas telefónicas.',
	'nt_next'                         => 'Siguiente',
	'dispatchcreate'                  => 'Crear',
	'tabnewticket2'                   => 'Nuevo ticket: %s',
	'tpemailto'                       => 'Correo electrónico para: %s',
	'tpemailforwardedto'              => 'Reenviado a: %s',
	'tlockinfo'                       => '%s también está visualizando el ticket (última actualización: %s)',
	'tpostlockinfo'                   => '%s actualmente está respondiendo a este ticket (última actualización: %s)',
	'tabfollowup'                     => 'Seguimiento',
	'notes'                           => 'Notas',

	'tabbilling'                      => 'Facturación',
	'billworker'                      => 'Trabajador',
	'billdate'                        => 'Fecha de facturación',
	'billworkdate'                    => 'Fecha de trabajo',
	'billtimespent'                   => 'Tiempo usado (hh: mm)',
	'billworked'                      => 'Tiempo trabajado:',
	'billtotalworked'                 => 'Tiempo total trabajado:',
	'billbillable'                    => 'Tiempo facturable:',
	'billtotalbillable'               => 'Tiempo facturable total:',
	'editbilling'                     => 'Edit Billing',
	'tabeditbilling'                  => 'Editar facturación',
	'billingtitle'                    => 'Entrada de facturación para: %s el %s',
	'billingtitlework'                => ' (trabajó en: %s)',
	'billingeditedtitle'              => ' <em>(Editado por %s el %s)</em>',
	'billingeditedtitle2'             => ' <em>(Editado el %s)</em>',
	'editbilling'                     => 'Edit Billing Record',
	'ticketbillingdelconfirm'         => '¿Está seguro de que desea eliminar este registro de facturación?',
	'titleinvalidbilldate'            => 'Se ha detectado un problema con el valor de tiempo',
	'msginvalidbilldate'              => 'Por favor, proporcione valores válidos (horas: minutos) para el tiempo trabajado y el tiempo facturable.',

	'fugeneral'                       => 'General',
	'fuaddnote'                       => 'Añadir nota',
	'fupostreply'                     => 'Publicar respuesta',
	'fuforward'                       => 'Reenviar',

	'followupmins'                    => 'En minutos...',
	'followuphours'                   => 'En horas...',
	'followupdays'                    => 'En días...',
	'followupweeks'                   => 'En semanas...',
	'followupmonths'                  => 'En meses...',
	'followupcustom'                  => 'Personalizado',
	'followup'                        => 'Seguimiento',
	'followup_willrunattime'          => 'Se ejecutará un seguimiento de %s creado por %s (%s)',
	'followup_willchangeownerto'      => 'Asignará el ticket a %s',
	'followup_willchangedepartmentto' => 'Se moverá el ticket a %s',
	'followup_willchangestatusto'     => 'Cambiará el estado a %s',
	'followup_willchangepriorityto'   => 'Cambiará la prioridad a %s',
	'followup_willchangetypeto'       => 'Cambiará el tipo de ticket a %s',
	'followup_willaddstaffnotes'      => 'Añadirá una nota de ticket',
	'followup_willaddusernotes'       => 'Añadirá una nota de usuario',
	'followup_willaddareply'          => 'Agregará una respuesta predefinida a este ticket',
	'followup_willforwardto'          => 'Reenviará este ticket a %s',
	'followup_removeowner'            => 'Eliminará al propietario de este ticket',

	'flag'                            => 'Marcar',
	'tescalationhistory'              => 'Ver historial de escalación (%d)',
	'tepdate'                         => 'Fecha de escalación: ',
	'tepslaplan'                      => 'Plan de SLA: ',
	'tepescalationrule'               => 'Regla de escalación ejecutada: ',
	'ntchatid'                        => 'ID del chat: ',
	'ntchatuserfullname'              => 'Usuario: ',
	'ntchatuseremail'                 => 'Correo electrónico: ',
	'ntchatstafffullname'             => 'Personal: ',
	'ntchatdepartment'                => 'Departamento: ',
	'titleticketdeleted'              => 'No se pudo cargar el ticket',
	'msgticketdeleted'                => 'Este ticket ha sido eliminado y no se puede cargar.',

	/**
	 * ---------------------------------------------
	 * MACRO
	 * ---------------------------------------------
	 */
	'macro'                           => 'Macro',
	'macros'                          => 'Macros',
	'insertmacro'                     => 'Insertar macro',
	'editmacro'                       => 'Editar macro',
	'tabcategories'                   => 'Categorías',
	'tabmacros'                       => 'Macros',
	'macrotitle'                      => 'Título de macro',
	'insertcategory'                  => 'Insertar categoría',
	'parentcategoryitem'              => '- Categoría principal -',
	'macrocategorytitle'              => 'Nombre de categoría',
	'desc_macrocategorytitle'         => 'Por ejemplo, <em>Respuestas de facturación</em> o <em>Triaje de soporte</em>.',
	'parentcategory'                  => 'Categoría principal',
	'desc_parentcategory'             => 'La categoría en la que colocar esta categoría.',
	'categorytype'                    => 'Disponibilidad',
	'desc_categorytype'               => '<strong>Pública</strong> Las categorías de macro están disponibles para todo el personal (si no se especifica un equipo abajo).<br /><strong>Privada</strong> Las categorías de macro están disponibles solo para usted (el creador). ¿Por qué no compartir lo bueno?',
	'titlemacrocategoryinsert'        => 'Categoría de macros (%s) creada',
	'msgmacrocategoryinsert'          => 'La categoría de macros (%s) se ha creado correctamente.',
	'titlemacrocategoryupdate'        => 'Categoría de macros (%s) actualizada',
	'msgmacrocategoryupdate'          => 'La categoría de macros (%s) se ha actualizado correctamente.',
	'titleinvalidparentcat'           => 'Problema con la categoría principal',
	'msginvalidparentcat'             => 'La categoría principal especificada no parece ser válida. Por favor, revise el árbol de la categoría de macros y asegúrese de que la categoría principal es principal y no subordinada.',
	'titledelmacrocat'                => 'Categorías de macros eliminadas (%d)',
	'msgdelmacrocat'                  => 'Se eliminaron las siguientes categorías de macros:',
	'filterreplies'                   => 'Filtrar respuestas',
	'rootcategory'                    => 'Categoría raíz',
	'macroreplytitle'                 => 'Título de macro',
	'desc_macroreplytitle'            => 'For example, <em>First contact message</em> or <em>Escalate ticket to Level 2</em>.',
	'parentcategoryreply'             => 'Categoría',
	'desc_parentcategoryreply'        => 'La categoría en la que crear esta macro.',
	'reststaffgroupall'               => '-- Todos los equipos del personal --',
	'restrictstaffgroup'              => 'Restringir a equipo deterinado',
	'desc_restrictstaffgroup'         => 'Poner esta categoría a disposición el equipo aquí especificado (la disponibilidad de la categoría debe ser <em>pública</em> arriba).',
	'macroreplycontents'              => 'Contenido de la respuesta',
	'tabproperties'                   => 'Propiedades',
	'ticketfields'                    => 'Propiedades de ticket',
	'macrodepartment'                 => 'Determinar departamento',
	'desc_macrodepartment'            => '',
	'macroticketstatus'               => 'Fijar estado del ticket',
	'desc_macroticketstatus'          => '',
	'macrotickettype'                 => 'Fijar tipo de ticket',
	'desc_macrotickettype'            => '',
	'macroticketpriority'             => 'Fijar prioridad del ticket',
	'desc_macroticketpriority'        => '',
	'desc_macroaddtags'               => '',
	'macroaddtags'                    => 'Añadir etiquetas a ticket',
	'macroownerstaff'                 => 'Fijar propietario del ticket',
	'desc_macroownerstaff'            => '',
	'insertmacro'                     => 'Insertar macro',
	'editmacro'                       => 'Editar macro',
	'titlemacroreplyinsert'           => 'Nueva macro (%s) creada',
	'msgmacroreplyinsert'             => 'Se ha creado una nueva macro de ticket (%s) correctamente.',
	'titlemacroreplyupdate'           => 'Macro (%s) actualizada',
	'msgmacroreplyupdate'             => 'Se ha actualizado una nueva macro de ticket (%s) correctamente.',
	'titledelmacroreply'              => 'Macros eliminadas (%d)',
	'msgdelmacroreply'                => 'Se eliminaron las siguientes macros:',
	'quickinsert'                     => 'Inserción rápida',
	'qimacro'                         => 'Macro',
	'qiknowledgebase'                 => 'Base de conocimientos',
	'replytotalhits'                  => 'Resultados',
	'replylastused'                   => 'Utilizado por última vez',


	/**
	 * ---------------------------------------------
	 * SEARCH
	 * ---------------------------------------------
	 */
	'search'                          => 'Búsqueda',
	'tabsearch'                       => 'Búsqueda avanzada',
	'matchtype'                       => 'Tipo de coincidencia de criterios',
	'desc_matchtype'                  => 'Cómo la búsqueda trata los siguientes criterios.',
	'smatchall'                       => 'Coincidir con todos los criterios (AND)',
	'smatchany'                       => 'Coincidir con cualquier criterio (OR)',
	'insertcriteria'                  => 'Introducir criterios',

	/**
	 * ---------------------------------------------
	 * NEW TICKET
	 * ---------------------------------------------
	 */
	'tabrecurrence'                   => 'Repetición',
	'recurrence_none'                 => 'No repetir',
	'recurrence_daily'                => 'Cada día',
	'recurrence_weekly'               => 'Cada semana',
	'recurrence_monthly'              => 'Mensual',
	'recurrence_yearly'               => 'Anual',
	'rec_every'                       => 'Cada',
	'rec_days'                        => 'días',
	'rec_everyweekday'                => 'Cada día de la semana',
	'rec_weeks'                       => 'semanas en',
	'rec_monday'                      => 'Lunes',
	'rec_tuesday'                     => 'Martes',
	'rec_wednesday'                   => 'Miércoles',
	'rec_thursday'                    => 'Jueves',
	'rec_friday'                      => 'Viernes',
	'rec_saturday'                    => 'Sábado',
	'rec_sunday'                      => 'Domingo',
	'rec_day'                         => 'Día',
	'rec_ofevery'                     => 'de todos los',
	'rec_months'                      => 'meses',
	'rec_the'                         => 'El',
	'rec_first'                       => 'Primero',
	'rec_second'                      => 'Segundo',
	'rec_third'                       => 'Tercero',
	'rec_fourth'                      => 'Cuarto',
	'rec_fifth'                       => 'Quinto',
	'rec_of'                          => 'de',
	'recurnotactivated'               => 'Este ticket no se repite.',
	'recurrencerange'                 => 'Repetir hasta',
	'recur_starts'                    => 'Comienzar repetición',
	'recur_ends'                      => 'Finalizar repetición',
	'rec_noeenddate'                  => 'Sin fecha de finalización - mantener repetición',
	'rec_endafter'                    => 'Finalizar después de:',
	'rec_endby'                       => 'Terminar en la fecha:',
	'rec_occurrences'                 => 'sucesos',
	'pause'                           => 'Pausar',
	'resume'                          => 'Reanudar',
	'stop'                            => 'Detener',

	// Potentialy unused phrases in staff_ticketsmanage.php
	'proptitleticketid'               => 'ID DEL TICKET',
	'wineditdue'                      => 'Editar fecha de venciminto y de vencimiento de resolución',
	'aldate'                          => 'Fecha',
	'altimeline'                      => 'Cronología',
	'tabuser'                         => 'Usuario',
	'desc_newticketdepartment'        => 'Seleccione el departamento en el que desea crear su ticket.',
	'tabnewticket'                    => 'Ticket nuevo',
	'currentfollowups'                => 'Seguimientos actuales para este ticket:',
	'tabreplies'                      => 'Respuestas',
	'replytitle'                      => 'Título de la respuesta',
	'insertreply'                     => 'Introducir respuesta',
	'wininsertmacrocat'               => 'Insertar categoría de macros',
);

?>
