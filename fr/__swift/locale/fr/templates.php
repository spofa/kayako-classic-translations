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

	'tabsettings' => 'Paramètres',
	'templates' => 'Gabarits',

	// Header Logos (nee Personalize)
	'titlepersonalization' => 'Logos d\'en-tête mis à jour',
	'msgpersonalization' => 'Vos logos d\'en-tête ont été enregistrées. Si l\'un d\'entre eux a été modifié, vous devrez mettre à jour votre page pour voir les changements.',
	'tabpersonalize' => 'Logos de l\'en-tête',
	'generalinformation' => 'Informations générales',
	'companyname' => 'Nom de la société',
	'desc_companyname' => 'Le nom indiqué ici, sera utilisé pour personnaliser  l\'interface de l’assistance client et les emails sortants.',
	'defaultreturnemail' => 'Adresse email de retour par défaut',
	'desc_defaultreturnemail' => 'Cette adresse est utilisée comme la valeur par défaut « De » de courrier sortant. Cette adresse doit correspondre à une file d\'attente active car elle doit pouvoir accepter les réponses des clients.',
	'logoimages' => 'Images de l\'en-tête',
	'supportcenterlogo' => 'Logo d\'en-tête du centre d\'assistance',
	'desc_supportcenterlogo' => 'Ce logo est affiché dans le centre d\'assistance de l\'utilisateur final. Il est recommandé que le logo ait des dimensions maximales de 150px (largeur) par 40px (hauteur)',
	'stafflogo' => 'Logo d\'en-tête du tableau de bord',
	'desc_stafflogo' => 'Ce logo est affiché dans l\'en-tête des tableaux de bord (en haut à gauche). Le logo <em>devra mesurer un maximum de</em> <strong>150px</strong> (largeur) par <strong>24 PX</strong> (hauteur).',
	'personalize' => 'Logos de l\'en-tête',

	// Import and export
	'tabexport' => 'Exporter',
	'export' => 'Exporter',
	'tabimport' => 'Importer',
	'import' => 'Importer',
	'result' => 'Résultat',
	'exporthistory' => 'Exporter aussi l\'historique du gabarit',
	'desc_exporthistory' => 'De même que les versions les plus récentes des gabarits, les versions précédentes seront aussi exportées.',
	'mergeoptions' => 'Options de fusion',
	'addtohistory' => 'Conserver l\'historique de révision de gabarit',
	'desc_addtohistory' => 'Si la fusion de groupe de gabarits remplace certains des gabarits existants, les gabarit remplacés seront conservés dans l\'historique du gabarit.',
	'titleversioncheckfail' => 'Ce groupe de gabarits est obsolète',
	'msgversioncheckfail' => 'Ce groupe de gabarits n\'a pas pu être importé, car il a été générée à l\'aide d\'une version antérieure de Kayako, et manque peut-être de gabarits. Si vous souhaitez substituer le contrôle de version, activez <em>Ignorer la version de groupe de gabarits</em>.',
	'importexport' => 'Importer/Exporter',
	'exporttgroup' => 'Groupe de gabarits à exporter',
	'desc_exporttgroup' => 'Le groupe de gabarits qui doit être exporté comme fichier XML.',
	'exportoptions' => 'Type d\'exportation',
	'desc_exportoptions' => 'Le type de gabarits à exporter.',
	'exportalltemplates' => 'Exporter tous les gabarits',
	'exportmodifications' => 'Exporter uniquement les gabarits modifiés',
	'templatefile' => 'Fichier XML de groupe de gabarits',
	'desc_templatefile' => 'Sélectionnez un fichier XML de groupe de gabarits sur votre ordinateur.',
	'createnewgroup' => '--Créer un nouveau groupe de gabarits--',
	'mergewith' => 'Fusionner des gabarits importés avec',
	'desc_mergewith' => 'Indiquer si vous voulez créer un nouveau groupe de gabarits en utilisant le contenu du fichier, ou fusionner uniquement les gabarits modifiés avec un groupe de gabarits existant.',
	'ignoreversion' => 'Ignorer la version de groupe de gabarits',
	'desc_ignoreversion' => 'Si sélectionnée, la version du fichier d\'importation sera ignorée. Il n\'est pas recommandé d\'activer cette option, car elle peut entraîner des problèmes dans le centre d\'Assistance Client.',
	'titletemplateimportfailed' => 'Il y a eu un problème avec le fichier de groupe de gabarits',
	'msgtemplateimportfailed' => 'Le fichier de groupe de gabarits téléchargé n\'a pas pu être traité. Il peut contenir des données incorrectes.',
	'titletgroupmerge' => 'Le fichier de groupe de gabarits importé a été fusionné avec %s',
	'msgtgroupmerge' => 'Le fichier de groupe de gabarits %s a été importé et fusionné avec le groupe de gabarits %s avec succès.',
	'titletgroupimport' => 'Le groupe de gabarits %s à été importé',
	'msgtgroupimport' => 'Le fichier de groupe de gabarits %s a été importé et le groupe de gabarits %s a été créé avec succès.',

	// Templates
	'changegroup' => 'Passer à un autre groupe de gabarits',
	'restoretemplates' => 'Restaurer les gabarits',
	'desc_restoretemplates' => '',
	'moditgroup' => 'Groupe de gabarits à rechercher',
	'desc_moditgroup' => 'Les templates des statuts sélectionnés après et qui appartiennent à ce groupe de template vont être recherchés.',
	'tabgeneral' => 'Généralités',
	'restoretgroup' => 'Restaurer les gabarits aux versions originales les plus récentes : %s',
	'tabrestore' => 'Restaurer les gabarits',
	'findtemplates' => 'Trouver les gabarits',
	'titlerestoretemplates' => 'Gabarits restaurés (%d)',
	'msgrestoretemplates' => 'Les gabarits suivants ont été restaurés :',
	'tabdiagnostics' => 'Diagnostics',
	'tabsearch' => 'Rechercher les gabarits',
	'titletgrouprestorecat' => 'Catégorie de groupe de gabarits restaurée',
	'msgtgrouprestorecat' => 'Les gabarits de la catégorie %s de %s (%s) ont été restaurés avec succès.',
	'expandcontract' => 'Développer/réduire',
	'tabhistory' => 'Historique',
	'templateversion' => 'Numéro de version de gabarit',
	'saveasnewversion' => 'Enregistrer une nouvelle version du gabarit',
	'titletemplaterestore' => '%s restauré',
	'msgtemplaterestore' => 'Le gabarit %s a été restauré à son état d\'origine.',
	'titletemplateupdate' => '%s mis à jour',
	'msgtemplateupdate' => 'Les modifications ont été enregistrées dans le gabarit %s avec succès.',
	'tabedittemplate' => 'Gabarit : %s (%s)',
	'titlenohistory' => 'Aucun historique de gabarit',
	'msgnohistory' => 'Il n\'y a aucune révision précédente de ce gabarit, il n\'y a donc rien à afficher.',
	'historydescription' => 'Modifications',
	'historyitemlist' => '%s: %s (%s) Remarque : <em>%s</em>',
	'system' => '(Système)',
	'historyitemcurrent' => '%s : <em><strong>en cours</strong></em> (%s)',
	'compare' => 'Comparer',
	'current' => 'En cours',
	'notcurrenttemp' => 'Ancienne version',
	'exportdiff' => 'Exporter le fichier diff',
	'tabcomparison' => 'Comparer les versions',
	'changelognotes' => 'Décrire vos modifications',
	'desc_changelognotes' => 'Si vous modifiez ce gabarit, ajoutez une petite remarque ici, pour pouvoir suivre vos modifications dans l\'onglet <strong>Historique</strong>.',
	'none' => 'Aucun',
	'inserttemplate' => 'Ajouter un gabarit',
	'inserttgroup' => 'Groupes de gabarits',
	'desc_inserttgroup' => 'Veuillez sélectionner le groupe de gabarits pour ce gabarit.',
	'templateeditingguideline' => 'Meilleures pratiques de modification de gabarit',
	'desc_templateeditingguideline' => 'À l\'aide de l\'éditeur de gabarits, vous pouvez personnaliser l\'apparence du centre d\'assistance. Si une future mise à jour de Kayako inclut des modifications du gabarit en question, il vous sera demandé de restaurer le gabarit à la dernière version originale. Ceci annulera les modifications que vous avez apportées  au gabarit et vous devrez les ré-appliquer.<br><br>Pour minimiser les problèmes potentiels, consultez le <a href="http://wiki.kayako.com/display/DOCS/Template+editing+best+practice+guide" target="_blank">Guide des meilleures pratiques de modification de gabarits</a> avant de personnaliser votre centre d\'assistance.',
	'restoreconfirmaskcat' => 'Êtes-vous certain de vouloir restaurer les gabarits de cette catégorie? \nVous ne pourrez pas annuler cette action ; la restauration des gabarits peut entraîner la perte de toutes les modifications de l\'interface d\'utilisateur que vous avez apportées aux gabarits existants !',
	'inserttemplatetgroup' => 'Groupes de gabarits',
	'inserttemplatetcategory' => 'Catégorie de gabarits',
	'inserttemplatename' => 'Nom du gabarit',
	'desc_inserttemplatename' => 'Entrez un nom pour le gabarit en utilisant uniquement des caractères alphanumériques. Par exemple, la <em>textedentête</em> ou <em>bienvenuaucentredassistance</em>.',
	'titleinserttemplatedupe' => 'Nom de gabarit déjà en cours d\'utilisation',
	'msginserttemplatedupe' => 'Ce groupe de gabarit a déjà un gabarit avec ce nom ; Veuillez en choisir un autre.',
	'titleinserttemplatechar' => 'Le nom du gabarit contient des caractères non valides',
	'msginserttemplatechar' => 'Le nom du gabarit peut contenir uniquement des caractères alphanumériques (lettres et chiffres).',
	'titleinserttemplate' => 'Gabarit %s créé',
	'msginserttemplate' => 'Le gabarit %s a été créé dans le groupe de gabarits de %s.',
	'titletemplatedel' => 'Gabarit supprimé',
	'msgtemplatedel' => 'Le gabarit %s a été supprimé.',

	// Template group
	'titleisenabledprob' => 'Impossible de désactiver le groupe de gabarits par défaut',
	'msgisenabledprob' => 'Ce groupe de gabarits est défini comme groupe par défaut pour le helpdesk ; il ne peut pas être désactivé.',
	'useloginshare' => 'Utilisez LoginShare pour authentifier les utilisateurs',
	'desc_useloginshare' => 'Les utilisateurs qui se connectent au helpdesk, alors que ce groupe de gabarit est actif seront authentifiés à l\'aide de l\'API LoginShare.',
	'groupusername' => 'Nom d’utilisateur',
	'desc_groupusername' => 'Entrez un nom d\'utilisateur pour activer la protection par mot de passe pour ce groupe de gabarits.',
	'passwordprotection' => 'Protection du mot de passe',
	'enablepassword' => 'Activer la protection par mot de passe',
	'desc_enablepassword' => 'Il sera demandé aux utilisateurs finaux d\'entrer un nom d\'utilisateur et un mot de passe pour accéder au centre d\'assistance.',
	'password' => 'Mot de passe',
	'desc_password' => 'Entrer un mot de passe pour activer la protection par mot de passe pour ce groupe de gabarits.',
	'passwordconfirm' => 'Retapez le mot de passe',
	'desc_passwordconfirm' => 'Confirmez le mot de passe, pour éviter les fautes de frappe.',
	'tabsettings_tickets' => 'Paramètres : Tickets',
	'tabsettings_livechat' => 'Paramètres : Chat en direct',
	'isenabled' => 'Le groupe de gabarits est activé',
	'desc_isenabled' => 'Si un groupe de gabarits est désactivé, il ne sera pas actif et les utilisateurs finaux ne pourront pas y accéder.',
	'titlepwnomatch' => 'Les mots de passe ne correspondent pas',
	'msgpwnomatch' => 'Les mots de passe saisis ne correspondent pas ; veuillez essayer de nouveau.',
	'titleinvalidgrouptitle' => 'Le nom du groupe de gabarits contient des caractères non valides',
	'msginvalidgrouptitle' => 'Un nom de groupe de gabarits ne peut contenir que des caractères alphanumériques.',
	'titlegrouptitleexists' => 'Nom de groupe de gabarits déjà en cours d\'utilisation',
	'msggrouptitleexists' => 'Un autre groupe de gabarits utilise déjà ce titre. Veuillez en choisir un autre.',
	'winedittemplategroup' => 'Modifier un groupe de gabarits : %s',
	'tabpermissions' => 'Autorisations',
	'titletgroupupdate' => 'Groupe de gabarits %s mis à jour',
	'msgtgroupupdate' => 'Le groupe de gabarits %s a été correctement mis à jour.',
	'titletgroupinsert' => 'Groupe de gabarits %s créé',
	'msgtgroupinsert' => 'Le groupe de gabarits %s a été correctement créé.',
	'titletgroupnodel' => 'Le groupe de gabarits ne peut pas être supprimé',
	'msgtgroupnodel' => 'Ce groupe de gabarit master n\'a pas pu être supprimé :',
	'titletgroupdel' => 'Groupes de gabarits supprimés (%d)',
	'msgtgroupdel' => 'Les groupes de gabarits suivants ont été supprimés :',
	'titletgrouprestore' => 'Groupes de gabarits restaurés (%d)',
	'msgtgrouprestore' => 'Les groupes de gabarits suivants et leurs gabarits ont été restaurés à leur état original :',
	'insertemplategroup' => 'Ajouter un groupe de gabarits',
	'tgrouptitle' => 'Nom de groupe de gabarits',
	'desc_tgrouptitle' => 'Un nom de groupe de gabarits ne peut contenir que des caractères alphanumériques.',
	'gridtitle_companyname' => 'Nom de l\'organisation',
	'companyname' => 'Nom de l\'organisation',
	'desc_companyname' => 'Le nom de l\'organisation spécifiée ici remplace le nom d\'organisation par défaut du helpdesk.',
	'generaloptions' => 'Options Générales',
	'defaultlanguage' => 'Langue par défaut',
	'desc_defaultlanguage' => 'La langue que le helpdesk sélectionnera par défaut pour ce groupe gabarits.',
	'usergroups' => 'Rôles de groupe d\'utilisateurs',
	'guestusergroup' => 'Groupe d\'utilisateurs invités (non connectés)',
	'desc_guestusergroup' => 'Ce groupe d\'utilisateurs détermine les autorisations et les paramètres pour tous ceux qui visitent le centre d\'assistance sans <strong>être connectés</strong>.',
	'regusergroup' => 'Groupe d\'utilisateur enregistrés (connectés)',
	'desc_regusergroup' => 'Ce groupe d\'utilisateurs détermine les autorisations et les paramètres pour tous ceux qui visitent le centre d\'assistance et sont <strong>connectés</strong>.',
	'restrictgroups' => 'Restreindre au groupe d\'utilisateurs enregistrés',
	'desc_restrictgroups' => 'Seuls les utilisateurs appartenant au groupe d\'utilisateurs spécifié ci-dessus seront en mesure d\'ouvrir une session dans le centre d\'assistance sous ce groupe de gabarits.',
	'copyfrom' => 'Copier des gabarits depuis le groupe de gabarits',
	'desc_copyfrom' => 'Les gabarits du groupe de gabarits sélectionné ici seront copiés dans ce nouveau groupe de gabarits.',
	'promptticketpriority' => 'L\'utilisateur peut sélectionner la priorité du ticket',
	'desc_promptticketpriority' => 'Lorsqu\'il créé un ticket , l\'utilisateur peut sélectionner une priorité de ticket. S\'il en\'en sélectionne aucune, la priorité par défaut sera utilisée.',
	'prompttickettype' => 'L\'utilisateur peut sélectionner un type de ticket',
	'desc_prompttickettype' => 'Lors de la création d\'un ticket, un utilisateur peut sélectionner un type de ticket. S\'il n\'en sélectionne aucun, le type par défaut sera utilisé.',
	'tickettype' => 'Type de ticket par défaut',
	'desc_tickettype' => 'Les tickets créés à partir de ce groupe de gabarits utiliseront ce type par défaut.',
	'ticketstatus' => 'État de ticket par défaut',
	'desc_ticketstatus' => 'Cet état sera assigné aux tickets créés depuis ce groupe de gabarits ou ou auxquels il a été répondu depuis ce groupe de gabarits. Si un utilisateur répond à un ticket qui est associé à ce groupe de gabarits, le ticket passera à cet état.',
	'ticketpriority' => 'Priorité par défaut de ticket',
	'desc_ticketpriority' => 'Cette priorité sera assignée par défaut aux tickets créés à partir de ce groupe de gabarits.',
	'ticketdep' => 'Service par défaut',
	'desc_ticketdep' => 'Ce service sera sélectionné par défaut sur la page <em>soumettre le ticket</em> du centre d\'assistance de ce groupe de gabarits.',
	'livechatdep' => 'Service par défaut',
	'desc_livechatdep' => 'Ce service sera sélectionné par défaut sur le formulaire de demande de chat en direct de ce groupe de gabarits.',
	'ticketsdeptitle' => '%s (tickets)',
	'livesupportdeptitle' => '%s (Assistance en direct)',
	'isdefault' => 'Ce groupe de gabarits est le groupe par défaut du helpdesk',
	'desc_isdefault' => 'Le groupe de gabarits par défaut du helpdesk sera toujours utilisé à moins qu\'un autre ne soit spécifié.',
	'loginshare' => 'LoginShare',

	// Manage template groups
	'grouptitle' => 'Titre du groupe',
	'glanguage' => 'Langue',
	'managegroups' => 'Gérer les groupes',
	'templategroups' => 'Groupes de gabarits',
	'desc_templategroups' => '',
	'grouplist' => 'Liste de groupe',
	'restore' => 'Restaurer',
	'export' => 'Exporter le fichier XML',
	'restoreconfirmask' => 'Êtes-vous sûr de que vouloir restaurer les gabarits de ce groupe à leur état d\'origine ? Toutes les modifications apportées aux gabarits seront perdues.',
	'restoreconfirm' => 'Les gabarits du groupe %s ont été restaurés à leur état d\'origine',
	'inserttemplategroup' => 'Ajouter un groupe',
	'edittemplategroup' => 'Modifier le groupe',

	// ======= MANAGE TEMPLATES =======
	'desc_templates' => '',
	'managetemplates' => 'Gérer les gabarits',
	'templatetitle' => 'Gabarits : %s',
	'expand' => 'Développer',
	'notmodified' => 'Original',
	'modified' => 'Modifié',
	'upgrade' => 'Périmée',
	'expandall' => 'Développer tout',
	'jump' => 'Sauter',
	'templategroup' => 'Groupe de gabarits',
	'desc_templategroup' => '',
	'edittemplate' => 'Modifier le gabarit',
	'edittemplatetitle' => 'Gabarit : %s (groupe: %s)',
	'templatedata' => 'Contenu du gabarit',
	'savetemplate' => 'Enregistrer',
	'saveandreload' => 'Enregistrer et recharger',
	'restore' => 'Restaurer',
	'templatestatus' => 'État du gabarit',
	'desc_templatestatus' => '',
	'tstatus' => '<img src="%s" align="absmiddle" border="0" /> %s', // Switch position for RTL language
	'dateadded' => 'Dernière modification',
	'desc_dateadded' => '',
	'contents' => '',
	'desc_contents' => '',


	// Diagnostics
	'diagnostics' => 'Diagnostics',
	'moditgroup' => 'Groupes de gabarits',
	'desc_moditgroup' => 'Les potentielles erreurs dans les templates de ce groupe de template vont être vérifiées.',
	'list' => 'Liste',
	'diagtgroup' => 'Groupes de gabarits',
	'desc_diagtgroup' => '',
	'diagnose' => 'Diagnostiquer',
	'templatename' => 'Nom du gabarit',
	'status' => 'État',
	'compiletime' => 'Temps de compilation',
	'diagnosetemplategroup' => 'Diagnostiquer les gabarits : %s',

	// Search
	'search' => 'Recherche',
	'searchtemplates' => 'Rechercher les gabarits',
	'query' => 'Rechercher',
	'desc_query' => 'Texte à rechercher dans les gabarits.',
	'searchtgroup' => 'Rechercher dans le groupe de gabarits',
	'desc_searchtgroup' => 'Les gabarits de ce groupe de gabarits seront recherchés.',
	'searchtemplategroup' => 'Rechercher les gabarits : %s',

	// Template categories
	'template_general' => 'Généralités',
	'template_chat' => 'Assistance en direct',
	'template_troubleshooter' => 'Dépannage',
	'template_news' => 'Actualités',
	'template_knowledgebase' => 'Base de connaissances',
	'template_tickets' => 'Tickets',
	'template_reports' => 'Rapports',

	// Potentialy unused phrases in templates.php
	'desc_importexport' => '',
	'restoretemplatestatus' => 'Template Status',
	'restoresubmitquestion' => 'Are you sure you wish to restore the selected templates?\nThis action cannot be reversed, you will loose all modifications carried out in the selected templates.',
	'desc_diagnostics' => '',
	'desc_search' => '',
	'tabplugins' => 'Plugins',
	'ls_app' => 'LoginShare Plugin',
	'wineditls' => 'Edit LoginShare Plugin: %s',
	'invalidloginshareplugin' => 'Invalid LoginShare Plugin, Please make sure the LoginShare plugin exists in the database.',
	'lsnotitle' => 'No Settings Available',
	'lsnomsg' => 'There are no settings available for the LoginShare plugin <b>"%s"</b>.',
	'loginsharefile' => 'LoginShare XML File',
	'desc_loginsharefile' => 'Upload the LoginShare XML File',
	'titlenoelevatedls' => 'Unable to Import LoginShare XML',
	'msgnoelevatedls' => 'Kayako is unable to import the LoginShare XML file as it is required that you login with a staff user that has elevated rights. You can add your user to elevated right list in config/config.php file of the package.',
	'titlelsversioncheckfail' => 'Version Check Failed',
	'msglsversioncheckfail' => 'Kayako is unable to import the LoginShare Plugin as the plugin was created for an older version of Kayako',
	'titlelsinvaliduniqueid' => 'Duplicate Unique ID Error',
	'msglsinvaliduniqueid' => 'Kayako is unable to import the LoginShare Plugin due to a conflict in Unique ID. This usually means that the plugin has already been imported into the database.',
	'titlelsinvalidxml' => 'Invalid XML File',
	'msglsinvalidxml' => 'Kayako is unable to import the LoginShare Plugin as the XML file corrupt or contains invalid data.',
	'titlelsimported' => 'Imported LoginShare Plugin',
	'msglsimported' => 'Kayako has successfully imported the %s LoginShare Plugin.',
	'titlelsdeleted' => 'Deleted LoginShare Plugin',
	'msglsdeleted' => 'Successfully deleted the "%s" LoginShare Plugin from the database.',
	'tgroupjump' => 'Template Group: %s',
	'desc_templateversion' => '',
	'desc_changelognotes' => '',
	'desc_inserttgroup' => 'Veuillez sélectionner le groupe de gabarits pour ce gabarit.',
	'titlelsupdate' => 'LoginShare Update',
	'msglsupdate' => 'Successfully updated "%s" LoginShare settings',
	'exporttemplates' => 'Export Templates',
	'exportxml' => 'Export XML',
	'filename' => 'Filename',
	'desc_filename' => 'Specify the Export Filename.',
	'importtemplates' => 'Import Templates',
	'importxml' => 'Import XML',
	'tgroupmergeconfirm' => 'Template Group "%s" merged with import file',
	'versioncheckfailed' => 'Version Check Failed: The uploaded template pack was created using older version of Kayako',
	'tgroupnewimportconfirm' => 'Template Group "%s" imported successfully',
	'templategroupdetails' => 'Template Group Details',
	'passworddontmatch' => 'ERROR: Passwords don\'t match',
	'invalidgrouptitle' => 'ERROR: Only alphanumeric characters can be used in the Template Group Title',
	'grouptitleexists' => 'ERROR: Invalid Group Title. There is another Template Group with the same title; please choose a different title.',
	'desc_loginshare' => 'Specify the LoginShare App to use to authenticate the visitors under this Template Group. Make sure you have updated the settings for this app under Templates &gt; LoginShare.',
	'groupinsertconfirm' => 'Template Group "%s" inserted successfully',
	'groupdelconfirm' => 'Template Group "%s" deleted successfully',
	'invalidgroup' => 'Invalid Template Group',
	'groupupdateconfirm' => 'Template Group "%s" updated successfully',
	'templatecategories' => 'Template Categories',
	'groupjump' => 'Group Jump',
	'legend' => 'Legend: ',
	'invalidtemplate' => 'Invalid Template',
	'generalinfo' => 'General Information',
	'preview' => 'Preview',
	'copyclipboard' => 'Copy to Clipboard',
	'templateupdateconfirm' => 'Template "%s" updated successfully',
	'templaterestoreconfirm' => 'Templates "%s" restored to original contents',
	'templatesrestoreconfirm' => '%s Templates restored to original contents',
	'clipboardconfirm' => 'The Template contents have been copied to your clipboard. You can now paste the contents in your favorite HTML editor.',
	'clipboardconfirmmoz' => 'The text to be copied has been selected. Press Ctrl+C to copy the text to the clipboard.',
	'listmodified' => 'List Modified Templates',
	'listtorestore' => 'List Templates to Restore',
	'diagnosesmarty' => 'Diagnose Smarty Template Engine Errors',
	'modifiedtemplates' => 'Modified Templates (Group: %s)',
	'listtemplates' => 'List of Templates (Group: %s)',
	'diagnoseerrors' => 'Diagnose Errors (Group: %s)',
	'searchqueryd' => 'Search Query: %s',
	'pluginlist' => 'Plugin List',
	'hostname' => 'Hostname',
	'dbname' => 'DB Name',
	'dbuser' => 'DB User',
	'dbpass' => 'DB Password',
	'tableprefix' => 'Tabe Prefix',
	'ldaphostname' => 'Active Directory Host',
	'ldapport' => 'Port (Default: 389)',
	'ldapbasedn' => 'Base DN',
	'ldaprdn' => 'RDN',
	'ldappassword' => 'Password',
	'hsphostserver' => 'Server Hostname',
	'hspport' => 'Server Port',
	'hspurl' => 'XML API URL',
	'hspconnectfail' => 'Could not connect to server. Try again later.',
	'template_parser' => 'Email Parser',
	'loginapi_modernbill' => 'ModernBill',
	'loginapi_ipb' => 'Invision Power Board',
	'loginapi_vb' => 'vBulletin',
	'loginapi_osc' => 'osCommerce',
	'loginapi_iono' => 'IONO License Manager',
	'loginapi_plexum' => 'Plexum',
	'loginapi_awbs' => 'AWBS',
	'loginapi_phpaudit' => 'PHPAudit v2',
	'loginapi_whmautopilot' => 'WHMAP v3',
	'loginapi_activedirectory' => 'Active Directory/LDAP',
	'loginapi_activedirectoryssl' => 'Active Directory/LDAP (SSL)',
	'loginapi_ticketpurchaser' => 'Ticker Purchaser',
	'loginapi_xcart' => 'X-Cart',
	'loginapi_phpbb' => 'PHPBB',
	'loginapi_smf' => 'Simple Machines Forum',
	'loginapi_mybb' => 'MyBB',
	'loginapi_xmb' => 'XMB',
	'loginapi_clientexec' => 'Clientexec',
	'loginapi_joomla' => 'Joomla CMS',
	'loginapi_hsphere' => 'H-Sphere XML-API',
	'loginapi_phpprobid' => 'PHPProBid',
	'loginapi_cubecart' => 'CubeCart',
	'loginapi_modernbillv5' => 'ModernBill v5',
	'loginapi_cscart' => 'CS-Cart',
	'loginapi_fsr' => 'FSRevolution',
	'loginapi_viper' => 'Viper Cart',
	'loginapi_xoops' => 'XOOPS',
	'loginapi_whmcsintegration' => 'WHMCS - Integration Placeholder Only (Not for direct logins)',
);

?>