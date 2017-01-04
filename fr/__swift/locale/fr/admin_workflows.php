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
	// ======= BEGIN v4 LOCALES =======
	'tickets' => 'Tickets',
	'insertworkflow' => 'Ajouter le flux de travail',
	'desc_insertworkflow' => '',
	'tabgeneral' => 'Généralités',
	'tabactions' => 'Actions',
	'workflowtitle' => 'Étiquette de règle de flux de travail',
	'desc_workflowtitle' => 'Une étiquette de règle de flux de travail s\'affiche (le cas échéant) dans le tableau de bord du personnel. Pour exécuter le flux de travail, il suffit de cliquer sur l\'étiquette.',
	'isenabled' => 'Le flux de travail est activé',
	'desc_isenabled' => 'Si une règle de flux de travail est désactivée, le flux de travail ne s\'affichera jamais.',
	'insertcriteria' => 'Ajouter un critère',
	'sortorder' => 'Ordre d\'affichage',
	'desc_sortorder' => 'Les règles de flux de travail sont affichées selon leur ordre d\'affichage, de la première à la dernière.',
	'editworkflow' => 'Modifier le flux de travail',
	'manageworkflows' => 'Flux de travail',
	'creationdate' => 'Date de création',
	'titleworkflowdel' => 'Règles de workflow supprimés (%d)',
	'msgworkflowdel' => 'Les règles de flux de travail suivantes ont été supprimées :',
	'tabnotifications' => 'Notifications',
	'insertnotification' => 'Ajouter une notification',

	'tabpermissions' => 'Autorisations du personnel',
	'staffvisibilitycustom' => 'Restreindre le flux de travail à des équipes spécifiques du personnel',
	'desc_staffvisibilitycustom' =>  'Si activée, cette règle de flux de travail s\'affiche uniquement pour les équipes ci-dessous (en supposant que les autres critères soient respectés).',
	'staffgroups' => 'Équipes d\'opérateurs',

	// Actions
	'nochange' => '--Aucun changement--',
	'actionstaff' => 'Affecter un ticket',
	'desc_actionstaff' => 'Le ticket sera assigné à cet utilisateur du personnel.',
	'actionpriority' => 'Modifier la priorité du ticket',
	'desc_actionpriority' => 'Cette nouvelle priorité sera attribuée au ticket.',
	'actionticketstatus' => 'Modifier l\'état du ticket',
	'desc_actionticketstatus' => 'Ce nouvel état sera attribué au ticket.',
	'actiondepartment' => 'Déplacer le ticket vers le service',
	'desc_actiondepartment' => 'Le ticket sera déplacé vers ce service.',
	'actionslaplan' => 'Modifier le plan de SLA du ticket',
	'desc_actionslaplan' => 'Ce plan de SLA sera assigné au ticket.',
	'actionflagtype' => 'Signaler le ticket',
	'desc_actionflagtype' => 'Le ticket sera signalé avec cette couleur.',
	'noplanavailable' => '-- Non disponible --',
	'actionnotes' => 'Ajouter une remarque au ticket',
	'desc_actionnotes' => 'Une remarque sera ajoutée au ticket.',
	'titlenoaction' => 'Aucune action spécifiée',
	'msgnoaction' => 'Au moins une action doit être spécifiée pour une règle de flux de travail.',
	'actionaddtags' => 'Ajouter des balises au ticket',
	'desc_actionaddtags' => 'Ces balises seront ajoutées au ticket.',
	'actionremovetags' => 'Supprimer les balises du ticket',
	'desc_actionremovetags' => 'Si ces balises sont associées au ticket, elles seront supprimées.',
	'actiontickettype' => 'Modifier le type de ticket',
	'desc_actiontickettype' => 'Le type du ticket changera à celui spécifié ici.',
	'actiontrainbayesian' => 'Entraîner le filtre bayésien',
	'desc_actiontrainbayesian' => 'Assigner une catégorie bayésienne à ce ticket (ce qui permet aussi d\'entraîner le filtre bayésien pour qu\'il puisse réaliser une classification automatique à l\'avenir).',
	'actiontrash' => 'Déplacer vers la corbeille',
	'desc_actiontrash' => 'Déplacer le ticket vers la corbeille.',

	'titleinsertworkflow' => 'Règle de flux de travail (%s) créée',
	'msginsertworkflow' => 'La règle de flux de travail (%s) a été créée avec succès.',
	'titleupdateworkflow' => 'Règle de flux de travail (%s) mise à jour',
	'msgupdateworkflow' => 'La règle de flux de travail (%s) a été mise à jour avec succès.',
	'titleworkflowenable' => 'Règles de flux de travail de ticket activées (%d)',
	'msgworkflowenable' => 'Les règles de flux de travail suivantes ont été activées :',
	'titleworkflowdisable' => 'Règles de flux de travail de ticket désactivées (%d)',
	'msgworkflowdisable' => 'Les règles de flux de travail suivantes ont été désactivées :',

	// ?
	'wfaticketstatus' => 'Modifier l\'état du ticket',
	'wfatickettype' => 'Modifier le type de ticket',
	'wfaaddtags' => 'Ajouter des balises',
	'wfaremovetags' => 'Supprimer des balises',
	'wfadepartment' => 'Déplacer le ticket vers le service',
	'wfaflag' => 'Signaler le ticket',
	'wfaddnotes' => 'Ajouter des notes',
	'wfapriority' => 'Modifier la priorité du ticket',
	'wfastaff' => 'Modifier le titulaire du ticket',
	'wfaslaplan' => 'Modifier le plan de SLA',
	'wfabayesian' => 'Affecter une catégorie bayésienne',
	'wfatrash' => 'Déplacer vers la corbeille',

	// Criteria
	'wftickettype' => 'Type de ticket',
	'desc_wftickettype' => '',
	'wfbayesian' => 'Catégorie Bayesienne',
	'desc_wfbayesian' => 'Les tickets qui ont correspondent à une catégorie bayesienne spécifique.',
	'wfsubject' => 'Objet du ticket',
	'desc_wfsubject' => 'Recherche l\'objet d\'un ticket.',
	'notapplicable' => '-- Non disponible --',
	'wfticketstatus' => 'État du ticket',
	'desc_wfticketstatus' => '',
	'wfticketpriority' => 'Priorité du ticket',
	'desc_wfticketpriority' => '',
	'wfusergroup' => 'Groupe d\'utilisateurs',
	'desc_wfusergroup' => '',
	'wfdepartment' => 'Service de ticket',
	'desc_wfdepartment' => 'Tickets qui appartiennent à un service.',
	'wfowner' => 'Titulaire du ticket',
	'desc_wfowner' => 'Tickets attribués à un utilisateur du personnel spécifique.',
	'wfunassigned' => '-- Non assigné --',
	'wfactivestaff' => '-- Personnel actif --',
	'wfemailqueue' => 'Queue d\'email',
	'desc_wfemailqueue' => 'Les tickets qui ont été créés ou ou auxquels il a été répondu par email via une file d\'attente d\'email spécifique.',
	'wfflagtype' => 'Indicateur de ticket',
	'desc_wfflagtype' => '',
	'wfcreator' => 'Ticket créé par',
	'desc_wfcreator' => '',
	'creatorstaff' => 'Personnel',
	'creatorclient' => 'Client',
	'wffullname' => 'Nom du destinataire',
	'desc_wffullname' => 'Rechercher les noms des destinataires qui participent à un ticket.',
	'wfemail' => 'Adresse email du destinataire',
	'desc_wfemail' => 'Rechercher les tickets par adresses email du destinataire.',
	'wflastreplier' => 'Prénom du dernier auteur d\'une réponse',
	'desc_wflastreplier' => 'Rechercher les tickets par nom du dernier auteur d\'une réponse.',
	'wfcharset' => 'Jeu de caractères',
	'desc_wfcharset' => 'Tickets associés à un jeu de caractères spécifiques.',
	'wfslaplan' => 'Plan de SLA',
	'desc_wfslaplan' => 'Les tickets qui sont actuellement assignés à un plan particulier de SLA.',
	'wfdate' => 'Date de création du ticket',
	'desc_wfdate' => 'Tickets ayant été créés avant ou après cette date.',
	'wfdaterange' => 'Date de création du ticket <range>',
	'desc_wfdaterange' => 'Tickets qui ont été créés dans ce laps de temps.',
	'wflastactivity' => 'Ticket mis à jour pour la dernière fois',
	'desc_wflastactivity' => 'Les tickets qui ont été mis à jour (c\'est-à-dire auxquels une réponse à été fournie, ou qui ont étés mis à jour pour un autre événement) avant ou après cette date.',
	'wflastactivityrange' => 'Ticket mis à jour pour la dernière fois <range>',
	'desc_wflastactivityrange' => 'Les tickets qui ont été mis à jour (c\'est-à-dire auxquels une réponse à été fournie, ou qui ont étés mis à jour pour un autre événement) dans ce laps de temps.',
	'wflaststaffreply' => 'Dernière réponse du personnel',
	'desc_wflaststaffreply' => 'Les tickets qui reçu une réponse d\'un utilisateur du personnel avant ou après cette date.',
	'wflaststaffreplyrange' => 'Dernière réponse du personnel <range>',
	'desc_wflaststaffreplyrange' => 'Tickets qui ont reçu une réponse d\'un utilisateur du personnel dans ce laps de temps.',
	'wflastuserreply' => 'Dernière réponse de l\'utilisateur',
	'desc_wflastuserreply' =>  'Les tickets qui reçu une réponse d\'un utilisateur avant ou après cette date.',
	'wflastuserreplyrange' => 'Dernière réponse de l\'utilisateur <range>',
	'desc_wflastuserreplyrange' => 'Tickets qui ont reçu une réponse d\'un utilisateur dans ce laps de temps.',
	'wfdue' => 'Date limite de réponse',
	'desc_wfdue' => 'Tickets qui disposent d\'une date limite de réponse avant ou après cette date.',
	'wfduerange' => 'Date limite de réponse <range>',
	'desc_wfduerange' => 'Tickets qui disposent d\'une date limite de réponse dans ce laps de temps.',
	'wfisoverdue' => 'En retard : Réponse en retard',
	'desc_wfisoverdue' => 'Les tickets qui sont en retard (parce qu\'ils n\'ont pas reçu de réponse avant la date limite de réponse).',
	'wfresolutiondue' => 'Date limite de résolution',
	'desc_wfresolutiondue' => 'Tickets dont la date limite de résolution tombe avant ou après cette date.',
	'wfresolutionduerange' => 'Date limite de résolution <range>',
	'desc_wfresolutionduerange' =>  'Tickets dont la date limite de résolution tombe dans ce laps de temps.',
	'wfisresolutionoverdue' => 'En retard : résolution en retard',
	'desc_wfisresolutionoverdue' => 'Tickets en retard (parce qu\'ils n\'ont pas été réglés avant la date limite de résolution).',
	'wftemplategroup' => 'Groupe de gabarits',
	'desc_wftemplategroup' => 'Tickets qui appartiennent à un groupe de gabarits particuliers.',
	'wftimeworked' => 'Temps travaillé (minutes)',
	'desc_wftimeworked' => 'Tickets qui correspondent à la valeur <strong>temps de travail</strong> (dans le cadre des informations de facturation des tickets et de suivi du temps).',
	'wftotalreplies' => 'Total de réponses',
	'desc_wftotalreplies' => 'Billets qui ont ce nombre de réponses.',
	'wfpendingfollowups' => 'En attente de suivi',
	'desc_wfpendingfollowups' => 'Tickets qui ont des activités de suivi planifiées.',
	'wfipaddress' => 'Adresse IP',
	'desc_wfipaddress' => 'Si une réponse à un ticket a été faite depuis <strong>entrer assistance</strong>, il est possible que le service d\'assistance ait enregistré l\'adresse IP de l\'utilisateur.',
	'wfisemailed' => 'Créé par email',
	'desc_wfisemailed' => 'Tickets qui ont été créés par email.',
	'wfisedited' => 'A été modifié',
	'desc_wfisedited' => 'Tickets qui ont été modifiés.',
	'wfhasnotes' => 'Contient des remarques',
	'desc_wfhasnotes' => 'Tickets contenant des remarques de ticket.',
	'wfhasattachments' => 'Contient des pièces jointes',
	'desc_wfhasattachments' => 'Tickets contenant des pièces jointes.',
	'wfisescalated' => 'A été escaladé',
	'desc_wfisescalated' => 'Tickets ayant étés escaladés par au moins une règle d\'escalade.',
	'wfhasdraft' => 'A un projet',
	'desc_wfhasdraft' => 'Tickets ayant un projet de réponse enregistré.',
	'wfhasbilling' => 'A des entrées de facturation et de suivi du temps',
	'desc_wfhasbilling' => 'Tickets ayant des entrées de facturation et de suivi du temps.',
	'wfisphonecall' => 'Est un ticket téléphonique',
	'desc_wfisphonecall' => 'Les tickets qui ont été marqués comme tickets du type <em>appel téléphonique</em>.',

	// Potentialy unused phrases in admin_workflows.php
	'triggerevent' => 'Trigger Event',
	'desc_triggerevent' => 'Select the event that triggers this Workflow rule',
	'smatchtype' => 'Match Type',
	'matchtype' => 'Criteria Options',
	'desc_matchtype' => 'Select the grouping method for the criteria fields.',
	'smatchall' => 'Match All (AND)',
	'smatchany' => 'Match Any (OR)',
	'desc_editworkflow' => '',
	'invalidworkflowrule' => 'Invalid Workflow Rule. Please make sure the record exists in the database.',
	'desc_manageworkflows' => '',
	'desc_tickettype' => '',
	'desc_trainbayesian' => '',
	'tecron' => 'Scheduled Task (Recurring automatic execution)',
	'desc_tecron' => 'This event is triggered whenever a scheduled task is executed. Usually every 3-5 minutes depending upon pseudo/manual cron execution.',
	'teticketcreation' => 'Ticket Creation',
	'desc_teticketcreation' => 'This event is triggered whenever a new ticket is created',
	'teslaplan' => 'SLA Plan Change',
	'desc_teslaplan' => 'This event is triggered whenever a SLA Plan is changed for a ticket',
	'teflag' => 'Flag Change',
	'desc_teflag' => 'This event is triggered on change of the flag type on a ticket',
	'temarkdue' => 'Ticket Marked Due',
	'desc_temarkdue' => 'This event is triggered whenever a ticket is marked as due',
	'teaddrecipients' => 'Recipients Addition',
	'desc_teaddrecipients' => 'This event is triggered whener a recipient is added for a ticket',
	'teupdateproperties' => 'Update Properties',
	'desc_teupdateproperties' => 'This event is triggered on update of ticket properties',
	'testaffreply' => 'Staff Reply',
	'desc_testaffreply' => 'This event is triggered whenever a staff replies to a ticket',
	'teuserreply' => 'User Reply',
	'desc_teuserreply' => 'This event is triggered whenever a user replies to a ticket',
	'teticketnote' => 'Ticket Note',
	'desc_teticketnote' => 'This event is triggered whenever a note is added to a ticket',
	'techangepriority' => 'Priority Change',
	'desc_techangepriority' => 'This event is triggered whenever a priority is changed for a ticket',
	'techangestatus' => 'Status Change',
	'desc_techangestatus' => 'This event is triggered whenever a status is changed for a ticket',
	'teassignticket' => 'Assign Ticket',
	'desc_teassignticket' => 'This event is triggered whenever a ticket is assigned to a staff',
	'temoveticket' => 'Move Ticket',
	'desc_temoveticket' => 'This event is triggered whenever a ticket is moved to a new department',
	'teforwardticket' => 'Ticket Forward',
	'desc_teforwardticket' => 'This event is triggered whenever a ticket is forwarded to a third party',
	'tesavedraft' => 'Save as Draft',
	'desc_tesavedraft' => 'This event is triggered whenever a ticket is saved as draft',
	'teescalateticket' => 'Ticket Escalated',
	'desc_teescalateticket' => 'This event is triggered whenever a ticket is escalated',
	'tetimeworked' => 'Time Worked',
	'desc_timeworked' => 'This event is triggered whenever a time worked entry is added for a ticket',
	'teticketpost' => 'Ticket Post Updated',
	'desc_teticketpost' => 'This event is triggered whenever a ticket post is updated by a staff',
	'teaddlabel' => 'Label',
	'desc_teaddlabel' => 'This event is triggered whenever a label is added for a ticket',
	'wfislabeled' => 'Is Labeled',
	'desc_wfislabeled' => '',
);
?>