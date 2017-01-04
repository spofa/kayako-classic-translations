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
	/*
	 * ###############################################
	 * BEGIN V4 LOCALES
	 * ###############################################
	 */
	'tf_staff.staffid' => 'Staff ID',
	'tf_staff.fullname' => 'Staff Full Name',
	'tf_staff.designation' => 'Staff Title/Position',
	'tf_staff.staffgroupid' => 'Staff Team ID',
	'tf_staff.email' => 'Staff Email',
	'tf_staff.lastactivity' => 'Staff Last Activity',
	'tf_staff.isenabled' => 'Staff Is Enabled',
	'tf_staff.passwordupdatetimeline' => 'Staff Password Update Time',
	'tf_staff.timezonephp' => 'Staff Time Zone',
	'tf_staffgroup.staffgroupid' => 'Staff Team ID',
	'tf_staffgroup.title' => 'Staff Team Title',
	'tf_staffgroup.isadmin' => 'Staff Team Is Admin',
	'tf_departments.slascheduleid' => 'Department SLA Schedule ID',
	'tf_departments.departmenttype' => 'Department Type',
	'tf_departments.parentdepartmentid' => 'Department Parent ID',
	'tf_departments.departmentapp' => 'Department App',

	'tf_departments.title' => 'Department Title',
	'tf_users.userid' => 'User ID',
	'tf_users.usergroupid' => 'User Group ID',
	'tf_users.userorganizationid' => 'User Organization ID',
	'tf_users.userrole' => 'User Role',
	'tf_users.userdesignation' => 'User Designation',
	'tf_users.fullname' => 'User Full Name',
	'tf_users.isenabled' => 'User Is Enabled',
	'tf_users.languageid' => 'User Language ID',
	'tf_users.useremailcount' => 'User Email Count',
	'tf_users.slaplanid' => 'User SLA Plan ID',
	'tf_users.isvalidated' => 'User Is Validated',
	'tf_userorganizations.userorganizationid' => 'Organization ID',
	'tf_userorganizations.organizationname' => 'Organization Name',
	'tf_userorganizations.address' => 'Organization Address',
	'tf_userorganizations.state' => 'Organization State',
	'tf_userorganizations.postalcode' => 'Organization Postal Code',
	'tf_userorganizations.country' => 'Organization Country',
	'tf_userorganizations.phone' => 'Organization Phone',
	'tf_userorganizations.fax' => 'Organization Fax',
	'tf_userorganizations.website' => 'Organization Website',
	'tf_userorganizations.organizationtype' => 'Organization Type',
	'tf_userorganizations.languageid' => 'Organization Language ID',
	'tf_userorganizations.slaplanid' => 'Organization SLA Plan ID',
	'tf_userorganizations.usergroupid' => 'Organization User Group ID',
	'tf_usergroups.usergroupid' => 'User Group ID',
	'tf_usergroups.title' => 'User Group Title',
	'tf_usergroups.ismaster' => 'User Group Is Master',
	'tf_useremails.email' => 'User Email',
	'tf_tickets.ticketid' => 'Ticket ID',
	'tf_tickets.ticketmaskid' => 'Ticket Mask ID',
	'tf_tickets.ownerstaffid' => 'Ticket Owner Staff ID',
	'tf_tickets.ticketstatusid' => 'Ticket Status ID',
	'tf_tickets.priorityid' => 'Ticket Priority ID',
	'tf_tickets.emailqueueid' => 'Ticket Email Queue ID',
	'tf_tickets.fullname' => 'Ticket Creator Full Name',
	'tf_tickets.email' => 'Ticket Creator Email',
	'tf_tickets.lastreplier' => 'Ticket Last Replier',
	'tf_tickets.replyto' => 'Ticket Reply To',
	'tf_tickets.subject' => 'Ticket Subject',
	'tf_tickets.dateline' => 'Ticket Time Stamp',
	'tf_tickets.lastactivity' => 'Ticket Last Activity',
	'tf_tickets.laststaffreplytime' => 'Ticket Last Staff Reply Time',
	'tf_tickets.lastuserreplytime' => 'Ticket Last User Reply Time',
	'tf_tickets.slaplanid' => 'Ticket SLA Plan ID',
	'tf_tickets.ticketslaplanid' => 'Ticket SLA Plan ID',
	'tf_tickets.duetime' => 'Ticket Due Time',
	'tf_tickets.totalreplies' => 'Ticket Total Replies',
	'tf_tickets.ipaddress' => 'Ticket IP Address',
	'tf_tickets.timeworked' => 'Ticket Time Worked',
	'tf_tickets.escalationruleid' => 'Ticket Escalation Rule ID',
	'tf_tickets.autoclosetimeline' => 'Ticket Auto Close Time',
	'tf_tickets.escalatedtime' => 'Ticket Escalated Time',
	'tf_tickets.followupcount' => 'Ticket Follow Up Count',
	'tf_tickets.isfirstcontactresolved' => 'Ticket Is First Contact Resolved',
	'tf_tickets.averageresponsetime' => 'Ticket Average Response Time',
	'tf_tickets.escalationlevelcount' => 'Ticket Escalation Level Count',
	'tf_tickets.resolutiondateline' => 'Ticket Resolution Time',
	'tf_tickets.wasreopened' => 'Ticket Was Reopened',
	'tf_tickets.reopendateline' => 'Ticket Reopened Time',
	'tf_tickets.resolutionseconds' => 'Ticket Resolution Seconds',
	'tf_tickets.resolutionduedateline' => 'Ticket Resoultion Due Time',
	'tf_tickets.isresolved' => 'Ticket Is Resolved',
	'tf_tickets.resolutionlevel' => 'Ticket Resolution Level',
	'tf_tickets.departmentid' => 'Ticket Department ID',
	'tf_tickets.userid' => 'Ticket User ID',
	'tf_ticketstatus.ticketstatusid' => 'Ticket Status ID',
	'tf_ticketstatus.title' => 'Ticket Status Title',
	'tf_ticketstatus.markasresolved' => 'Ticket Status Resolved',
	'tf_ticketstatus.departmentid' => 'Ticket Status Department ID',
	'tf_ticketstatus.type' => 'Ticket Status Type',
	'tf_ticketpriorities.priorityid' => 'Priority ID',
	'tf_ticketpriorities.title' => 'Priority Title',
	'tf_chathits.chathitid' => 'Chat Hit ID',
	'tf_chathits.staffid' => 'Chat Hit Staff ID',
	'tf_chathits.fullname' => 'Chat Hit Full Name',
	'tf_chathits.email' => 'Chat Hit Email',
	'tf_chathits.isaccepted' => 'Chat Hit Is Accepted',
	'tf_chathits.dateline' => 'Chat Hit Time',
	'tf_chatskills.chatskillid' => 'Chat Skill ID',
	'tf_chatskills.title' => 'Chat Skill Title',
	'tf_chatskilllinks.chatskilllinkid' => 'Chat Skill Link ID',
	'tf_chatskilllinks.chatskillid' => 'Chat Skill Link Skill ID',
	'tf_chatskilllinks.staffid' => 'Chat Skill Link Staff ID',
	'tf_slaplans.isenabled' => 'SLA Plan is Enabled',
	'tf_slaplans.overduehrs' => 'SLA Plan Overdue Hours',
	'tf_slaplans.resolutionhours' => 'SLA Plan Resolution Hours',
	'tf_slaplans.resolutionduehrs' => 'SLA Plan Resolution Due Hours',
	'tf_slaplans.title' => 'SLA Plan Title',
	'tf_ratingresults.ratingresult' => 'Rating',
	'tf_ratingresults.staffid' => 'Rating Result Staff ID',
	'tf_ticketposts.ticketpostid' => 'Ticket Post ID',
	'tf_tickettimetracks.creatorstaffname' => 'Creator Staff Name',
	'tf_tickettimetracks.timespent' => 'Time Spent',
	'tf_tickettimetracks.timebillable' => 'Time Billable',
	'tf_tickettimetracks.workerstaffname' => 'Worker Staff Name',
	'tf_tickettimetracks.dateline' => 'Billing Entry Date',

	'tab_staff' => 'Staff',
	'tab_staffgroup' => 'Staff Team',
	'tab_departments' => 'Departments',
	'tab_users' => 'Users',
	'tab_userorganizations' => 'User Organizations',
	'tab_usergroups' => 'User Groups',
	'tab_tickets' => 'Tickets',
	'tab_ticketstatus' => 'Ticket Status',
	'tab_ticketpriorities' => 'Ticket Priorities',
	'tab_chathits' => 'Chat Hits',
	'tab_chatskills' => 'Chat Skills',
	'tab_chatskilllinks' => 'Chat Skill Links',
	'tab_ticketposts' => 'Messages du ticket',
	'tab_slaplans' => 'Plans SLA',
	'tab_useremails' => 'Emails de l\'utilisateur',
	'tab_tickettimetracks' => 'Facturation',
);
?>