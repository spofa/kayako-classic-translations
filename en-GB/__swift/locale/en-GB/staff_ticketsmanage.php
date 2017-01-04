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
	'manage'                          => 'Manage',

	'tabgeneral'                      => 'General',
	'tabmassaction'                   => 'Mass Action',
	'tabreply'                        => 'Reply',
	'tabforward'                      => 'Forward',

	/**
	 * ---------------------------------------------
	 * Mass actions
	 * ---------------------------------------------
	 */
	'manochange'                      => '-- No Change --',
	'maticketstatus'                  => 'Change status',
	'maticketpriority'                => 'Change priority',
	'matickettype'                    => 'Change ticket type',
	'madepartment'                    => 'Move to department',
	'maowner'                         => 'Assign',
	'maticketlink'                    => 'Link',
	'maaddtags'                       => 'Add tags',
	'maremovetags'                    => 'Remove tags',
	'maticketflag'                    => 'Flag',
	'manoflag'                        => '-- No Flag --',
	'mabayescategory'                 => 'Train Bayesian',
	'sactivestaff'                    => '-- Active Staff --',
	'tnavnextticket'                  => 'Next Ticket &raquo;',
	'tnavprevticket'                  => '&laquo; Previous Ticket',
	'tagaddtorecp'                    => 'Add to recipients',
	'massreply'                       => 'Mass Reply',

	/**
	 * ---------------------------------------------
	 * Trash view
	 * ---------------------------------------------
	 */
	'emptytrash'                      => 'Empty Trash',
	'emptytrashconfirm'               => 'The tickets in trash will be permanently deleted. Do you wish to continue?',
	'putback'                         => 'Put Back',

	/**
	 * ---------------------------------------------
	 * Viewing a Ticket
	 * ---------------------------------------------
	 */
	'mergeoptions'                    => 'Merge Ticket',
	'mergeparentticket'               => 'Ticket ID to merge into',
	'desc_mergeparentticket'          => 'The ID of the ticket to merge into.',
	'titleeditmergefailed'            => 'Couldn\'t merge tickets',
	'msgeditmergefailed'              => 'The ticket could not be merged as the ticket ID specified could not be found. Please check the ticket ID and try again.',
	'titleeditmergesuccess'           => 'Tickets merged',
	'msgeditmergesuccess'             => 'The tickets have been merged successfully.',
	'tabcalls'                        => 'Calls',
	'dispatchasuser'                  => 'Reply as user',
	'viewticket'                      => 'View Ticket',
	'viewticketext'                   => '[#%s]: %s',
	'proptitledepartment'             => 'DEPARTMENT',
	'proptitleowner'                  => 'OWNER',
	'proptitlestatus'                 => 'STATUS',
	'proptitlepriority'               => 'PRIORITY',
	'proptitletype'                   => 'TYPE',
	'tinforesolutiondue'              => 'Resolution due: ',
	'tinfosla'                        => 'SLA plan: ',
	'tinfoticketid'                   => 'ID: ',
	'tinfodue'                        => 'Reply due: ',
	'tinfocreated'                    => 'Created: ',
	'tinfoupdated'                    => 'Updated: ',
	'ticketlinkinfo'                  => 'Department: %s, Status: %s',
	'ticketunlink'                    => '- unlink',
	'tppostedon'                      => 'Posted on: %s',
	'tppostedonsurvey'                => 'Survey comment posted on: %s',
	'tpemail'                         => 'Email: %s',
	'tpipaddress'                     => 'IP address: %s',
	'participantbox'                  => 'Participants',
	'badgethirdparty'                 => 'Third Party',
	'badgeuser'                       => 'USER',
	'badgestaff'                      => 'Staff',
	'badgecc'                         => 'Recipient',
	'badgebcc'                        => 'BCC',
	'wineditticketpost'               => 'Edit Ticket Post',
	'editpost'                        => 'Edit Post',
	'lastedited'                      => 'Last edited by: %s On: %s',
	'dialogduetimeline'               => 'Reply Due',
	'dialogresolutionduetimeline'     => 'Resolution Due',
	'stopwatching'                    => 'Stop Watching',
	'surrender'                       => 'Surrender',
	'print'                           => 'Print',
	'take'                            => 'Take',
	'tabauditlog'                     => 'Audit Log',
	'aldescription'                   => 'Description',
	'alentrytype'                     => 'Entry Type',
	'alstaff'                         => ' (Staff)',
	'aluser'                          => ' (User)',
	'alsystem'                        => ' (System)',
	'alparser'                        => ' (Parser)',
	'editnote'                        => 'Edit Note',
	'notetitle'                       => '%s on %s',
	'noteeditedtitle'                 => ' <em>(Edited by %s on %s)</em>',
	'ticketnotedelconfirm'            => 'Are you sure you wish to delete this ticket note?',
	'tabaddnote'                      => 'Add Note',
	'tabeditnote'                     => 'Edit Note',
	'addnotes'                        => 'Notes',
	'notetype'                        => 'Note type',
	'addnote'                         => 'Add Note',
	'notes_ticket'                    => 'Ticket',
	'notes_user'                      => 'USER',
	'notes_userorganization'          => 'User Organization',
	'tabrelease'                      => 'Release',
	'tabedit'                         => 'Edit',
	'tabhistory'                      => 'History',
	'tabchats'                        => 'Chats',
	'notesvisibleall'                 => '-- Everyone --',
	'notevisibleto'                   => 'Visibility',
	'desc_notevisibleto'              => 'Restrict the visibility of this note.',
	'edit_subject'                    => 'Ticket subject',
	'edit_fullname'                   => 'Creator\'s name',
	'edit_email'                      => 'Creator\'s email address',
	'edit_overridesla'                => 'Override SLA',
	'desc_edit_overridesla'           => 'Specify an SLA plan to attach to this ticket, overriding any automatically assigned SLA plans.',
	'editslausedef'                   => '-- Use Default SLA --',
	'edittproperties'                 => 'Ticket Properties',
	'edittrecipients'                 => 'Ticket Recipients',
	'editrecipientsdesc'              => 'Additional recipients can be included in a ticket. Recipients will receive email copies of ticket replies made by staff, but will not have access to view the ticket online.<br /><br />The option to add ticket recipients is available when CCing, BCCing, or forwarding a ticket. There are three types of recipients:<br /><br /><strong>Third party:</strong> Copied (CCd) in on all ticket replies made by staff. They are also able to reply to these by email, and these replies will be added to the ticket.<br /><br /><strong>CC:</strong> Copied (CCd) in on all ticket replies made by staff.  Can contribute to a ticket via email only.<br /><br /><strong>BCC:</strong> Blind copied (BCCd) in on all ticket replies made by staff. Can contribute to a ticket via email only.',
	'editthirdparty'                  => 'Third party recipients',
	'editcc'                          => 'CC recipients',
	'editbcc'                         => 'BCC recipients',
	'history_ticketid'                => 'Ticket ID',
	'history_subject'                 => 'Subject',
	'history_date'                    => 'Date',
	'history_department'              => 'Department',
	'history_type'                    => 'Type',
	'history_status'                  => 'Status',
	'history_priority'                => 'Priority',
	'workflowbox'                     => 'Workflow',
	'informationbox'                  => 'Information',
	'tinfobticketid'                  => 'TICKET ID',
	'tinfobuser'                      => 'USER',
	'tinfobuserorganization'          => 'ORGANIZATION',
	'tinfobusergroup'                 => 'GROUP',
	'dispatchfrom'                    => 'From',
	'dispatchto'                      => 'To',
	'dispatchcc'                      => 'CC',
	'dispatchbcc'                     => 'BCC',
	'dispatchcontents'                => 'Reply Contents',
	'dispatchaddmacro'                => 'Macro',
	'dispatchaddkb'                   => 'Knowledgebase',
	'dispatchsendmail'                => 'Send email',
	'dispatchprivate'                 => 'Private reply',
	'dispatchwatch'                   => 'Watch ticket',
	'dispatchaddfile'                 => 'Add Another File',
	'dispatchsend'                    => 'Send',
	'dispatchattachfile'              => 'Attach',
	'dispatchsaveasdraft'             => 'Save as Draft',
	'dispatchto'                      => 'To',
	'dispatchsubject'                 => 'Subject',
	'dispatchsend'                    => 'Send',
	'dispatchsendar'                  => 'Send autoresponder',
	'dispatchuser'                    => 'USER',
	'dispatchnewuser'                 => 'Create a new user account',
	'dispatchisphone'                 => 'Phone ticket',
	'winuserquickinsert'              => 'Create New User Account',
	'dispatch'                        => 'Assign',
	'tabdispatch'                     => 'Assign',
	'dispatchticket'                  => 'Assign Ticket',
	'assign'                          => 'Assign',
	'newticket'                       => 'New Ticket',
	'newticket_department'            => 'Create ticket in department',
	'desc_newticket_department'       => '',
	'nt_sendmail'                     => 'Send an email',
	'nt_asuser'                       => 'As a user',
	'newticket_type'                  => 'Create ticket type',
	'desc_newticket_type'             => '<strong>Send an email</strong> A ticket will be created and you will be the author - like sending an email to someone.<br /><strong>As a user</strong> Create a ticket on a user\'s behalf, under their own name. Useful for logging phone calls.',
	'nt_next'                         => 'Next',
	'dispatchcreate'                  => 'Create',
	'tabnewticket2'                   => 'New Ticket: %s',
	'tpemailto'                       => 'Email to: %s',
	'tpemailforwardedto'              => 'Forwarded to: %s',
	'tlockinfo'                       => '%s is also viewing the ticket (last update: %s)',
	'tpostlockinfo'                   => '%s is currently replying to this ticket (last update: %s)',
	'tabfollowup'                     => 'Follow-up',
	'notes'                           => 'Notes',

	'tabbilling'                      => 'Billing',
	'billworker'                      => 'Worker',
	'billdate'                        => 'Billing date',
	'billworkdate'                    => 'Work date',
	'billtimespent'                   => 'Time spent (hh:mm)',
	'billworked'                      => 'Time worked:',
	'billtotalworked'                 => 'Total time worked:',
	'billbillable'                    => 'Billable time:',
	'billtotalbillable'               => 'Total billable time:',
	'editbilling'                     => 'Edit Billing',
	'tabeditbilling'                  => 'Edit Billing',
	'billingtitle'                    => 'Billing entry for: %s on %s',
	'billingtitlework'                => ' (worked on: %s)',
	'billingeditedtitle'              => ' <em>(Edited by %s on %s)</em>',
	'billingeditedtitle2'             => ' <em>(Edited on %s)</em>',
	'editbilling'                     => 'Edit Billing Record',
	'ticketbillingdelconfirm'         => 'Are you sure you wish to delete this billing record?',
	'titleinvalidbilldate'            => 'There is a problem with the time spent vale',
	'msginvalidbilldate'              => 'Please provide valid values (hours:minutes) for time worked and billable time.',

	'fugeneral'                       => 'General',
	'fuaddnote'                       => 'Add Note',
	'fupostreply'                     => 'Post Reply',
	'fuforward'                       => 'Forward',

	'followupmins'                    => 'In minutes...',
	'followuphours'                   => 'In hours...',
	'followupdays'                    => 'In days...',
	'followupweeks'                   => 'In weeks...',
	'followupmonths'                  => 'In months...',
	'followupcustom'                  => 'Custom',
	'followup'                        => 'Follow-up',
	'followup_willrunattime'          => 'Will run a follow-up at %s created by %s (%s)',
	'followup_willchangeownerto'      => 'Will assign the ticket to %s',
	'followup_willchangedepartmentto' => 'Will move the ticket to %s',
	'followup_willchangestatusto'     => 'Will change the status to %s',
	'followup_willchangepriorityto'   => 'Will change the priority to %s',
	'followup_willchangetypeto'       => 'Will change the ticket type to %s',
	'followup_willaddstaffnotes'      => 'Will add a ticket note',
	'followup_willaddusernotes'       => 'Will add a user note',
	'followup_willaddareply'          => 'Will add a pre-written reply to this ticket',
	'followup_willforwardto'          => 'Will forward this ticket to %s',
	'followup_removeowner'            => 'Will clear this ticket\'s owner',

	'flag'                            => 'Flag',
	'tescalationhistory'              => 'View escalation history (%d)',
	'tepdate'                         => 'Escalation date: ',
	'tepslaplan'                      => 'SLA plan: ',
	'tepescalationrule'               => 'Escalation rule executed: ',
	'ntchatid'                        => 'Chat ID: ',
	'ntchatuserfullname'              => 'User: ',
	'ntchatuseremail'                 => 'Email: ',
	'ntchatstafffullname'             => 'Staff: ',
	'ntchatdepartment'                => 'Department: ',
	'titleticketdeleted'              => 'Ticket couldn\'t be loaded',
	'msgticketdeleted'                => 'This ticket has been deleted and could not be loaded.',

	/**
	 * ---------------------------------------------
	 * MACRO
	 * ---------------------------------------------
	 */
	'macro'                           => 'Macro',
	'macros'                          => 'Macros',
	'insertmacro'                     => 'Insert Macro',
	'editmacro'                       => 'Edit Macro',
	'tabcategories'                   => 'Categories',
	'tabmacros'                       => 'Macros',
	'macrotitle'                      => 'Macro title',
	'insertcategory'                  => 'Insert Category',
	'parentcategoryitem'              => '- Parent Category -',
	'macrocategorytitle'              => 'Category name',
	'desc_macrocategorytitle'         => 'For example, <em>Billing responses</em> or <em>Support triage</em>.',
	'parentcategory'                  => 'Parent category',
	'desc_parentcategory'             => 'The category to place this category within.',
	'categorytype'                    => 'Availability',
	'desc_categorytype'               => '<strong>Public</strong> Macro categories are available to all staff (unless specific teams are selected below).<br /><strong>Private</strong> Macro categories are available only to you (the creator). Why not share the wealth?',
	'titlemacrocategoryinsert'        => 'Macro category (%s) created',
	'msgmacrocategoryinsert'          => 'The macro category (%s) was created successfully.',
	'titlemacrocategoryupdate'        => 'Macro category (%s) updated',
	'msgmacrocategoryupdate'          => 'The macro category (%s) was updated successfully.',
	'titleinvalidparentcat'           => 'Problem with the parent category',
	'msginvalidparentcat'             => 'The parent category specified does not seem to be valid. Please review the macro category tree to double check that the parent category is an actual parent, and not a child.',
	'titledelmacrocat'                => 'Macro categories deleted (%d)',
	'msgdelmacrocat'                  => 'The following macro categories were deleted:',
	'filterreplies'                   => 'Filter Replies',
	'rootcategory'                    => 'Root category',
	'macroreplytitle'                 => 'Macro title',
	'desc_macroreplytitle'            => 'For example, <em>First contact message</em> or <em>Escalate ticket to Level 2</em>.',
	'parentcategoryreply'             => 'Category',
	'desc_parentcategoryreply'        => 'The category to create this macro in.',
	'reststaffgroupall'               => '-- All Staff Teams --',
	'restrictstaffgroup'              => 'Restrict to specific team',
	'desc_restrictstaffgroup'         => 'Make this category available to the team specified here (category availability must be <em>public</em>, above).',
	'macroreplycontents'              => 'Reply Contents',
	'tabproperties'                   => 'Properties',
	'ticketfields'                    => 'Ticket Properties',
	'macrodepartment'                 => 'Set department',
	'desc_macrodepartment'            => '',
	'macroticketstatus'               => 'Set ticket status',
	'desc_macroticketstatus'          => '',
	'macrotickettype'                 => 'Set ticket type',
	'desc_macrotickettype'            => '',
	'macroticketpriority'             => 'Set ticket priority',
	'desc_macroticketpriority'        => '',
	'desc_macroaddtags'               => '',
	'macroaddtags'                    => 'Add tags to the ticket',
	'macroownerstaff'                 => 'Set ticket owner',
	'desc_macroownerstaff'            => '',
	'insertmacro'                     => 'Insert Macro',
	'editmacro'                       => 'Edit Macro',
	'titlemacroreplyinsert'           => 'New macro (%s) created',
	'msgmacroreplyinsert'             => 'A new ticket macro (%s) has been created successfully.',
	'titlemacroreplyupdate'           => 'Macro (%s) updated',
	'msgmacroreplyupdate'             => 'A new ticket macro (%s) has been updated successfully.',
	'titledelmacroreply'              => 'Macros deleted (%d)',
	'msgdelmacroreply'                => 'The following macros were deleted:',
	'quickinsert'                     => 'Quick Insert',
	'qimacro'                         => 'Macro',
	'qiknowledgebase'                 => 'Knowledgebase',
	'replytotalhits'                  => 'Hits',
	'replylastused'                   => 'Last used',


	/**
	 * ---------------------------------------------
	 * SEARCH
	 * ---------------------------------------------
	 */
	'search'                          => 'Search',
	'tabsearch'                       => 'Advanced Search',
	'matchtype'                       => 'Criteria matching type',
	'desc_matchtype'                  => 'How search will handle the criteria below.',
	'smatchall'                       => 'Match all criteria (AND)',
	'smatchany'                       => 'Match any of the criteria (OR)',
	'insertcriteria'                  => 'Insert Criteria',

	/**
	 * ---------------------------------------------
	 * NEW TICKET
	 * ---------------------------------------------
	 */
	'tabrecurrence'                   => 'Recurrence',
	'recurrence_none'                 => 'Do not recur',
	'recurrence_daily'                => 'Daily',
	'recurrence_weekly'               => 'Weekly',
	'recurrence_monthly'              => 'Monthly',
	'recurrence_yearly'               => 'Yearly',
	'rec_every'                       => 'Every',
	'rec_days'                        => 'days',
	'rec_everyweekday'                => 'Every weekday',
	'rec_weeks'                       => 'weeks on',
	'rec_monday'                      => 'Monday',
	'rec_tuesday'                     => 'Tuesday',
	'rec_wednesday'                   => 'Wednesday',
	'rec_thursday'                    => 'Thursday',
	'rec_friday'                      => 'Friday',
	'rec_saturday'                    => 'Saturday',
	'rec_sunday'                      => 'Sunday',
	'rec_day'                         => 'Day',
	'rec_ofevery'                     => 'of every',
	'rec_months'                      => 'months',
	'rec_the'                         => 'The',
	'rec_first'                       => 'First',
	'rec_second'                      => 'Second',
	'rec_third'                       => 'Third',
	'rec_fourth'                      => 'Fourth',
	'rec_fifth'                       => 'Fifth',
	'rec_of'                          => 'of',
	'recurnotactivated'               => 'This ticket will not recur.',
	'recurrencerange'                 => 'Recur Until',
	'recur_starts'                    => 'Recurrence starts',
	'recur_ends'                      => 'Recurrence ends',
	'rec_noeenddate'                  => 'No end date - keep recurring',
	'rec_endafter'                    => 'End after:',
	'rec_endby'                       => 'End by date:',
	'rec_occurrences'                 => 'occurrences',
	'pause'                           => 'Pause',
	'resume'                          => 'Resume',
	'stop'                            => 'Stop',

	// Potentialy unused phrases in staff_ticketsmanage.php
	'proptitleticketid'               => 'TICKET ID',
	'wineditdue'                      => 'Edit Due & Resolution Due Timeline',
	'aldate'                          => 'Date',
	'altimeline'                      => 'Timeline',
	'tabuser'                         => 'USER',
	'desc_newticketdepartment'        => 'Select the department under which you wish to create your ticket.',
	'tabnewticket'                    => 'New Ticket',
	'currentfollowups'                => 'Current follow-ups for this ticket:',
	'tabreplies'                      => 'Replies',
	'replytitle'                      => 'Reply Title',
	'insertreply'                     => 'Insert Reply',
	'wininsertmacrocat'               => 'Insert Macro Category',
);

?>
