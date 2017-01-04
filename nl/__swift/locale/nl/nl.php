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
	'html_encoding'                => '8bit',
	'text_encoding'                => '8bit',
	'html_charset'                 => 'UTF-8',
	'text_charset'                 => 'UTF-8',
	'base_charset'                 => '',
	'yes'                          => 'Ja',
	'no'                           => 'Nee',
	'menusupportcenter'            => 'Support Center',
	'menustaffcp'                  => 'Medewerker scherm',
	'menuadmincp'                  => 'Beheer scherm',
	'app_notreg'                   => 'De app %s is niet geregistreerd',
	'event_notreg'                 => 'De gebeurtenis %s is niet geregistreerd',
	'unable_to_execute'            => 'Kan %s niet uitvoeren',
	'action_notreg'                => 'De actie %s is niet geregistreerd',
	'username'                     => 'Gebruikersnaam',
	'password'                     => 'Wachtwoord',
	'rememberme'                   => 'Onthouden',
	'defaulttitle'                 => '%s - Ontwikkeld door Kayako',
	'login'                        => 'Aanmelden',
	'global'                       => 'Algemeen',
	'first'                        => 'Eerste',
	'last'                         => 'Laatste',
	'pagination'                   => 'Pagina %s van %s',
	'submit'                       => 'Verzenden',
	'reset'                        => 'Herstellen',
	'poweredby'                    => 'Helpdesk software ontwikkeld door Kayako',
	'copyright'                    => 'Copyright &copy; 2001-%s Kayako',
	'notifycsrfhash'               => 'Kayako kon dit verzoek niet valideren',
	'titlecsrfhash'                => 'Kayako kon dit verzoek niet valideren',
	'msgcsrfhash'                  => 'Kayako valideert verzoeken ter bescherming tegen vervalsingen van cross-site verzoeken en kon dit verzoek niet valideren. Probeer het nogmaals.',
	'invaliduser'                  => 'Gebruikersnaam of wachtwoord is onjuist',
	'invaliduseripres'             => 'Niet-toegestaan IP-adres (poging: %d van %d)',
	'invaliduserdisabled'          => 'Dit account is uitgeschakeld (poging: %d van %d)',
	'invalid_sessionid'            => 'Je versie is verlopen, meld je opnieuw aan',
	'staff_not_admin'              => 'Gebruiker heeft geen beheerrechten',
	'sort_desc'                    => 'Aflopend sorteren',
	'sort_asc'                     => 'Oplopend sorteren',
	'options'                      => 'Opties',
	'delete'                       => 'Verwijderen',
	'settings'                     => 'Instellingen',
	'search'                       => 'Zoeken',
	'searchbutton'                 => 'Zoeken',
	'actionconfirm'                => 'Weet je zeker dat je wilt doorgaan?',
	'loggedout'                    => 'Succesvol afgemeld',
	'view'                         => 'Weergeven',
	'dashboard'                    => 'Start',
	'help'                         => 'Help',
	'size'                         => 'Grootte',
	'home'                         => 'Start',
	'logout'                       => 'Afmelden',
	'staffcp'                      => 'Medewerker scherm',
	'admincp'                      => 'Beheer scherm',
	'winapp'                       => 'Kayako Desktop',
	'staffapi'                     => 'Staff API',
	'bytes'                        => 'Bytes',
	'kb'                           => 'KB',
	'mb'                           => 'MB',
	'gb'                           => 'GB',
	'noitemstodisplay'             => 'Geen items om weer te geven',
	'manage'                       => 'Beheren',
	'title'                        => 'Titel',
	'disable'                      => 'Uitschakelen',
	'enable'                       => 'Inschakelen',
	'edit'                         => 'Bewerken',
	'back'                         => 'Terug',
	'forward'                      => 'Volgende',
	'insert'                       => 'Toevoegen',
	'edit'                         => 'Bewerken',
	'update'                       => 'Bijwerken',
	'public'                       => 'Openbaar',
	'private'                      => 'Privé',
	'requiredfieldempty'           => 'Een van de verplichte velden is leeg',
	'clifatalerror'                => 'FATALE FOUT',
	'clienterchoice'               => 'Voer je keuze in: ',
	'clinotvalidchoice'            => '"%s" is geen geldige keuze; probeer het nogmaals.: ',
	'description'                  => 'Omschrijving',
	'success'                      => 'Succes',
	'failure'                      => 'Mislukt',
	'status'                       => 'Status',
	'date'                         => 'Datum',
	'seconds'                      => 'Seconden',
	'order'                        => 'Volgorde',
	'email'                        => 'Email',
	'subject'                      => 'Onderwerp',
	'contents'                     => 'Inhoud',
	'sunday'                       => 'Zondag',
	'monday'                       => 'Maandag',
	'tuesday'                      => 'Dinsdag',
	'wednesday'                    => 'Woensdag',
	'thursday'                     => 'Donderdag',
	'friday'                       => 'Vrijdag',
	'saturday'                     => 'Zaterdag',
	'am'                           => 'AM',
	'pm'                           => 'PM',
	'pfieldreveal'                 => '[Weergeven]',
	'pfieldhide'                   => '[Verbergen]',
	'loadingwindow'                => 'Laden...',
	'customfields'                 => 'Aangepaste velden',
	'nopermission'                 => 'Helaas heb je niet de rechten voor het uitvoeren van dit verzoek.',
	'nopermissiontext'             => 'Helaas heb je geen toestemming voor het uitvoeren van dit verzoek.',
	'generationdate'               => 'XML gegenereerd: %s',
	'approve'                      => 'Goedkeuren',
	'paginall'                     => 'Alles',
	'fullname'                     => 'Volledige naam',
	'onlineusers'                  => 'Online medewerker(s)',
	'vardate1'                     => '%dd %du %dm',
	'vardate2'                     => '%du %dm %ds',
	'vardate3'                     => '%dm %ds',
	'vardate4'                     => '%ds',
	'reports'                      => 'Rapporten',
	'demomode'                     => 'Deze actie kan niet worden uitgevoerd in demomodus',
	'unmodifiedreport'			 => 'Running the report unmodified as user does not have permission to modify report.',
	'titledemomode'                => 'Kan niet doorgaan',
	'msgdemomode'                  => 'Deze actie kan niet worden uitgevoerd in demomodus',
	'filter'                       => 'Filter',
	'editor'                       => 'Editor',
	'images'                       => 'Afbeeldingen',
	'tabedit'                      => 'Bewerken',
	'notifyfieldempty'             => 'Een van de verplichte velden is leeg',
	'titlefieldempty'              => 'Ontbrekende velden',
	'msgfieldempty'                => 'Een van de verplichte velden is leeg of bevat ongeldige gegevens; controleer je invoer.',
	'save'                         => 'Opslaan',
	'viewall'                      => 'Alles weergeven',
	'cancel'                       => 'Annuleren',
	'save'                         => 'Opslaan',
	'tabgeneral'                   => 'Algemeen',
	'language'                     => 'Taal',
	'loginshare'                   => 'LoginShare',
	'licenselimit_unabletocreate'  => 'Er kon geen nieuwe medewerker worden gemaakt, omdat de licentielimiet is bereikt',
	'help'                         => 'Help',
	'name'                         => 'Naam',
	'value'                        => 'Waarde',
	'engagevisitor'                => 'Bezoeker contacteren',
	'inlinechat'                   => 'Inline chat',
	'url'                          => 'URL',
	'hexcode'                      => 'Hexcode',
	'vactionvariables'             => 'Actie: Variabelen',
	'vactionvexp'                  => 'Actie: Bezoekerservaring',
	'vactionsalerts'               => 'Actie: Medewerkermeldingen',
	'vactionsetdepartment'         => 'Actie: Afdeling instellen',
	'vactionsetskill'              => 'Actie: Vaardigheid instellen',
	'vactionsetgroup'              => 'Actie: Bezoekersgroep instellen',
	'vactionsetcolor'              => 'Actie: Kleur instellen',
	'vactionbanvisitor'            => 'Actie: Bezoeker blokkeren',
	'customengagevisitor'          => 'Bezoeker aangepast contacteren',
	'managerules'                  => 'Regels beheren',
	'open'                         => 'Openen',
	'close'                        => 'Sluiten',
	'titleupdatedswiftsettings'    => 'Instellingen voor %s bijgewerkt',
	'msgupdatedswiftsettings'      => 'De instellingen voor %s zijn succesvol bijgewerkt.',
	'geoipprocessrunning'          => 'Opbouwen van GeoIP-database wordt reeds uitgevoerd',
	'continueprocessquestion'      => 'Er wordt nog een taak uitgevoerd. Als je deze pagina verlaat, wordt deze gestopt. Wil je doorgaan?',
	'titleupdsettings'             => 'Instellingen voor %s bijgewerkt',
	'type'                         => 'Type',
	'banip'                        => 'IP (255.255.255.255)',
	'banclassc'                    => 'Klasse C (255.255.255.*)',
	'banclassb'                    => 'Klasse B (255.255.*.*)',
	'banclassa'                    => 'Klasse A (255.*.*.*)',
	'if'                           => 'Als',
	'loginlogerror'                => 'Aanmelding geblokkeerd voor %d minuten (poging: %d van %d)',
	'loginlogwarning'              => 'Gebruikersnaam of wachtwoord ongeldig (poging: %d of %d)',
	'na'                           => '- NVT -',
	'redirectloading'              => 'Laden...',
	'noinfoinview'                 => 'Er is niets om weer te geven',
	'nochange'                     => '-- Geen wijziging --',
	'activestaff'                  => '-- Actieve medewerker --',
	'notificationuser'             => 'Gebruiker',
	'notificationuserorganization' => 'Gebruikersorganisatie',
	'notificationstaff'            => 'Medewerker (Eigenaar)',
	'notificationteam'             => 'Medewerkerteam',
	'notificationdepartment'       => 'Afdeling',
	'notificationsubject'          => 'Onderwerp: ',
	'lastupdate'                   => 'Laatste update',
	'interface_admin'              => 'Beheer scherm',
	'interface_staff'              => 'Medewerkers scherm',
	'interface_intranet'           => 'Intranet',
	'interface_api'                => 'API',
	'interface_winapp'             => 'Kayako Desktop/Medewerker-API',
	'interface_syncworks'          => 'SyncWorks',
	'interface_instaalert'         => 'InstaAlert',
	'interface_pda'                => 'PDA',
	'interface_rss'                => 'RSS',
	'error_database'               => 'Database',
	'error_php'                    => 'PHP',
	'error_exception'              => 'Uitzondering',
	'error_mail'                   => 'E-mail',
	'error_general'                => 'Algemeen',
	'error_loginshare'             => 'LoginShare',
	'loading'                      => 'Laden...',
	'pwtooshort'                   => 'Te kort',
	'pwveryweak'                   => 'Zeer zwak',
	'pwweak'                       => 'Zwak',
	'pwmedium'                     => 'Gemiddeld',
	'pwstrong'                     => 'Sterk',
	'pwverystrong'                 => 'Zeer sterk',
	'pwunsafeword'                 => 'Mogelijk onveilig wachtwoord',
	'staffpasswordpolicy'          => '<strong>Wachtwoordeisen:</strong> Minimale lengte: %d tekens, minimaal aantal cijfers: %d, minimaal aantal leestekens: %d, Minimaal aantal hoofdletters: %d',
	'userpasswordpolicy'           => '<strong>Password requirements:</strong> Minimum length: %d characters, Minimum digits: %d, Minimum symbols: %d, Minimum uppercase letters: %d',
	'titlepwpolicy'                => 'Wachtwoord voldoet niet aan de eisen',
	'passwordexpired'              => 'Wachtwoord is verlopen',
	'newpassword'                  => 'Nieuw wachtwoord',
	'passwordagain'                => 'Wachtwoord (herhalen)',
	'passworddontmatch'            => 'Wachtwoorden komen niet overeen',
	'defaulttimezone'              => '-- Standaard tijdzone --',
	'tagcloud'                     => 'Tagwolk',
	'searchmodeactive'             => 'Resultaten zijn gefilterd - klik om te herstellen',
	'notifysearchfailed'           => '"0" resultaten gevonden',
	'titlesearchfailed'            => '"0" resultaten gevonden',
	'msgsearchfailed'              => 'Kayako kon geen vermeldingen vinden die overeenkomen met de opgegeven criteria.',
	'quickfilter'                  => 'Snelfilter',
	'fuenterurl'                   => 'URL invoeren:',
	'fuorupload'                   => 'of uploaden:',
	'errorsmtpconnect'             => 'Kon geen verbinding maken met de SMTP-server',
	'starttypingtags'              => 'Begin met typen om tags in te voegen...',
	'titleinvalidfileext'          => 'Niet-ondersteund afbeeldingstype',
	'msginvalidfileext'            => 'Ondersteunde afbeeldingstypen zijn: gif, jpeg, jpg, png.',
	'notset'                       => '-- Niet ingesteld --',
	'ratings'                      => 'Beoordelingen',
	'system'                       => 'Systeem',
	'schatid'                      => 'Chat-ID',
	'supportcenterfield'           => 'Support Center:',
	'smessagesurvey'               => 'Berichten/onderzoeken',
	'nosubject'                    => '(geen onderwerp)',
	'nolocale'                     => '(geen locatie)',

	// Easy Dates
	'edoneyear'                    => 'één jaar',
	'edxyear'                      => '%d jaar',
	'edonemonth'                   => 'één maand',
	'edxmonth'                     => '%d maanden',
	'edoneday'                     => 'één dag',
	'edxday'                       => '%d dagen',
	'edonehour'                    => 'één uur',
	'edxhour'                      => '%d uren',
	'edoneminute'                  => 'één minuut',
	'edxminute'                    => '%d minuten',
	'edjustnow'                    => 'zojuist',
	'edxseconds'                   => '%d seconden',
	'ago'                          => 'geleden',

	// Operators
	'opcontains'                   => 'Bevat',
	'opnotcontains'                => 'Bevat geen',
	'opequal'                      => 'Gelijk aan',
	'opnotequal'                   => 'Niet gelijk aan',
	'opgreater'                    => 'Groter dan',
	'opless'                       => 'Kleiner dan',
	'opregexp'                     => 'Reguliere expressie',
	'opchanged'                    => 'Gewijzigd',
	'opnotchanged'                 => 'Niet gewijzigd',
	'opchangedfrom'                => 'Gewijzigd van',
	'opchangedto'                  => 'Gewijzigd naar',
	'opnotchangedfrom'             => 'Niet gewijzigd van',
	'opnotchangedto'               => 'Niet gewijzigd naar',
	'matchand'                     => 'EN',
	'matchor'                      => 'OF',
	'strue'                        => 'Waar',
	'sfalse'                       => 'Niet waar',
	'notifynoperm'                 => 'Helaas heb je niet de rechten voor het uitvoeren van dit verzoek.',
	'titlenoperm'                  => 'Onvoldoende rechten',
	'msgnoperm'                    => 'Helaas heb je niet de rechten voor het uitvoeren van dit verzoek.',
	'cyesterday'                   => 'Gisteren',
	'ctoday'                       => 'Vandaag',
	'ccurrentwtd'                  => 'Deze week tot vandaag',
	'ccurrentmtd'                  => 'Deze maand tot vandaag',
	'ccurrentytd'                  => 'Dit jaar tot vandaag',
	'cl7days'                      => 'Laatste 7 dagen',
	'cl30days'                     => 'Laatste 30 dagen',
	'cl90days'                     => 'Laatste 90 dagen',
	'cl180days'                    => 'Laatste 180 dagen',
	'cl365days'                    => 'Laatste 365 dagen',
	'ctomorrow'                    => 'Morgen',
	'cnextwfd'                     => 'Deze week vanaf vandaag',
	'cnextmfd'                     => 'Deze maand vanaf vandaag',
	'cnextyfd'                     => 'Dit jaar vanaf vandaag',
	'cn7days'                      => 'Komende 7 dagen',
	'cn30days'                     => 'Komende 30 dagen',
	'cn90days'                     => 'Komende 90 dagen',
	'cn180days'                    => 'Komende 180 dagen',
	'cn365days'                    => 'Komende 365 dagen',
	'new'                          => 'Nieuw',
	'phoneext'                     => 'Telefoon: %s',
	'snewtickets'                  => 'Nieuwe tickets',
	'sadvancedsearch'              => 'Geavanceerd zoeken',
	'squicksearch'                 => 'Snel zoeken:',
	'sticketidlookup'              => 'Ticket-ID zoeken:',
	'screatorreplier'              => 'Auteur/antwoorder:',
	'smanage'                      => 'Beheren',
	'clear'                        => 'Wissen',
	'never'                        => 'Nooit',
	'seuser'                       => 'Gebruikers',
	'seuserorg'                    => 'Gebruikersorganisaties',
	'manage'                       => 'Beheren',
	'import'                       => 'Importeren',
	'export'                       => 'Exporteren',
	'comments'                     => 'Reacties',
	'commentdata'                  => 'Reacties:',
	'postnewcomment'               => 'Nieuwe reactie plaatsen',
	'replytocomment'               => 'Reageren op reactie',
	'buttonsubmit'                 => 'Verzenden',
	'reply'                        => 'Antwoorden',

	// Flags
	'purpleflag'                   => 'Paarse vlag',
	'redflag'                      => 'Rode vlag',
	'orangeflag'                   => 'Oranje vlag',
	'yellowflag'                   => 'Gele vlag',
	'blueflag'                     => 'Blauwe vlag',
	'greenflag'                    => 'Groene vlag',

	// ======= CALENDAR LOCALE =======
	'calendar'                     => 'Kalender',
	'cal_january'                  => 'Januari',
	'cal_february'                 => 'Februari',
	'cal_march'                    => 'Maart',
	'cal_april'                    => 'April',
	'cal_may'                      => 'Mei',
	'cal_june'                     => 'Juni',
	'cal_july'                     => 'Juli',
	'cal_august'                   => 'Augustus',
	'cal_september'                => 'September',
	'cal_october'                  => 'Oktober',
	'cal_november'                 => 'November',
	'cal_december'                 => 'December',

	/**
	 * ###############################################
	 * APP LIST
	 * ###############################################
	 */
	'app_base'                     => 'Basis',
	'app_tickets'                  => 'Tickets',
	'app_knowledgebase'            => 'Kennisbank',
	'app_parser'                   => 'Emailparser',
	'app_livechat'                 => 'Live Support',
	'app_troubleshooter'           => 'Probleemoplosser',
	'app_news'                     => 'Nieuws',
	'app_core'                     => 'Core',
	'app_backend'                  => 'Backend',
	'app_reports'                  => 'Rapporten',

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