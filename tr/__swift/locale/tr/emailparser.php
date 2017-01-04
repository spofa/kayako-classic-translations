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
	'insertbreakline' => 'Breakline ekle',
	'editbreakline' => 'Breakline düzenle',
	'emailqueues' => 'E-posta Kuyruğu',
	'winviewparserlog' => 'Ayrıştırıcı Günlüğü Görüntüle',
	'close' => 'Kapat',
	'titleparserlogdel' => 'E-posta ayrıştırıcı günlük girişleri silindi (%d)',
	'msgparserlogdel' => 'Bir sonraki e-posta ayrıştırıcı kayıt girişleri silindi:',

	'breaklines' => 'Breaklines',
	'desc_breaklines' => '',
	'sortorder' => 'Yürütme sırası',
	'desc_sortorder' => 'Breaklines are executed according to their execution order number, smallest to largest.',
	'wineditbreakline' => 'Edit Breakline',
	'breaklinetitle' => 'Breakline text to truncate at',
	'desc_breaklinetitle' => 'All incoming email will be truncated from this breakline onwards, to keep things tidy.',
	'isregexp' => 'Örüntü eşleştirme',
	'desc_isregexp' => 'If enabled, you can specify a regular expression pattern in place of the breakline text above for more flexible breakline matching.',
	'titleinsertbreakline' => 'Breakline created',
	'msginsertbreakline' => 'The new breakline was created successfully.',
	'titleupdatebreakline' => 'Breakline updated',
	'msgupdatebreakline' => 'The breakline was updated successfully.',
	'titledelbreakline' => 'Breaklines deleted (%d)',
	'msgdelbreakline' => 'The following breaklines were deleted:',
	'invalidbreakline' => 'A problem was encountered (invalid breakline - make sure the breakline exists in the database)',

	'tabsettings' => 'Ayarlar',
	'forcequeue' => 'Alıcı adreslerini yok say ve kuyruğa zorla',
	'desc_forcequeue' => 'Etkinse, <strong>Kime:</strong> bu kuyruktan getirilen e-postalardaki adres yardım masasındaki başka bir kuyrukla eşleşse bile, bu kuyruktan getirilen tüm e-postalar bu kuyruğun dolaşma seçeneklerini izleyecektir.<br/><br/>örnek, eğer kuyruk adresiniz <em>support@acme.com</em> ve <em>sales@acme.com</em> \'a gönderilen bir e-posta bu kuyruk içindeyse (belki bir e-posta rumuz olarak), eğer bu ayarlama etkinse bu e-posta <em>support@acme.com</em> \'a gönderilmiş gibi getirilir. <br/><br/>Eğer bu ayarlama etkin değilse ve  <em>sales@acme.com</em> için bir e-posta kuyruğu yoksa, e-posta reddedilecektir. Eğer bu ayarlama etkin değilse ve  <em>sales@acme.com</em> için bir e-posta kuyruğu varsa, e-posta bu e-posta kuyruğuna alınacaktır.',
	'leavecopyonserver' => 'Getirilme sonrasında sunucuya e-posta bırak',
	'desc_leavecopyonserver' => 'Bu seçenek yalnızca IMAP posta kutuları için geçerlidir. Etkin olduğunda, yardım masası sunucudaki yardım masasına getirilen e-postanın bir kopyasını bırakacaktır.',
	'nonssl' => 'SSL değil',
	'tls' => 'TLS',
	'ssl' => 'SSL',
	'sslv2' => 'SSL v2',
	'sslv3' => 'SSL v3',
	'usequeuesmtp' => 'E-posta göndermek için aynı posta sunucusunu kullanın',
	'desc_usequeuesmtp' => 'Bir SMTP sunucusu olarak yukarıda belirtilen posta sunucusunu kullanmak için, e-posta almanın yanında göndermek için, bu ayarlamayı etkinleştirin (bu e-posta kuyruğu ile ilişkilendirilmiş talepler için talep bildirimleri gibi).',
	'smtptype' => 'SMTP bağlantı türü',
	'desc_smtptype' => 'SMTP sunucunuzun bağlantı türünü seçin. Eğer bilmiyorsanız, ağ yöneticiniz seçecektir.',
	'next' => 'Sonraki',
	'back' => 'Geri',
	'wineditemailqueue' => 'E-posta Kuyruğunu Düzenle',
	'tabticketsettings' => 'Talep seçenekleri',
	'tabpop3imap' => 'POP3/IMAP',
	'queueisenabled' => 'E-posta kuyruğu etkin',
	'desc_queueisenabled' => 'E-posta kuyruğu devre dışıysa, yardım masasına artık e-posta getirmez. Bu bir \'boru\' e-posta kuyruğu türü ise, e-posta sessizce reddedilecektir.',
	'titlequeueinsert' => 'E-post kuyruğu oluşturuldu',
	'msgqueueinsert' => 'E-posta kuyruğu %s başarıyla oluşturuldu.',
	'titlequeueupdate' =>'E-posta kuyruğu güncellendi',
	'msgqueueupdate' => 'E-posta kuyruğu %s başarıyla güncellendi.',
	'titledelqueues' => 'E-posta kuyrukları silindi (%d)',
	'msgdelqueues' => 'Aşağıdaki e-posta kurukları silindi:',
	'titlestaffemail' => 'E-posta adresi zaten kullanımda',
	'msgstaffemail' => 'E-posta adresi bir personel kullanıcı %s tarafından kullanılmaktadır ve aynı zamanda bir e-posta sıra adresi olarak kullanılamaz (e-posta döngülerine neden olabilir, çünkü yardım masası e-posta alırken personel kullanıcınız aynı e-posta adresinden geleni cevaplıyor olabilir).',
	'verifyconnection' => 'Bağlantıyı doğrula',
	'vcvariablesanity' => 'E-posta kuyruğu posta sunucusu bilgilerini denetleme',
	'vcimapnotcompiled' => 'Your web server\'s PHP installation does not include IMAP support. *nix users should recompile their PHP with the \'--with-imap\' flag; Windows users can simply uncomment the extension=\'php_imap.dll\' line in their php.ini file',
	'vcimapcompiled' => 'Web sunucunuzda IMAP desteği algılandı',
	'vcattemptconnection' => 'Posta sunucusu için bağlanmaya çalışılıyor',
	'vcconnectionsuccess' => 'Woohoo, bağlantı başarılı',
	'vctotalmessages' => 'Posta kutusundaki toplam ileti: %d',
	'vcconnectionfailed' => 'Oh dear, the mailbox could not be reached:<BR />%s',
	'erremailqueuesame' => 'Kaynak e-posta adresi yardım masasındaki e-posta kuyruğu adresi ile aynı olduğundan e-posta reddedildi',

	'errloopcontrol' => 'Bu e-posta reddedildi çünkü döngü denetimi yürürlükte.',
	'errtoobig' => 'The message exceeded the maximum message size of %s (the message was %s)',

	'mailparser' => 'E-posta ayrıştırıcı',
	'desc_mailparser' => '',
	'queuelist' => 'E-posta Kuyruk Llistesi',

	'insertemailqueue' => 'E-posta Kuyruk Ekle',
	'insertqueue' => 'Kuyruk Ekle',
	'queuenextstep' => 'Sonraki &raquo;',
	'emailgeneralfields' => 'E-posta Kuyruk Ayarları',
	'emailimapfields' => 'Posta Sunucusu Ayarları (yalnızca POP3/IMAP posta kutuları için)',
	'emailaddress' => 'E-posta kuyruk adresi',
	'desc_emailaddress' => 'E-posta kuyruğu bu adrese gönderilen e-postayı ele alacaktır, örnek, <em>sales@acme.com</em>.',
	'emailtype' => 'Kuyruk türü',
	'desc_emailtype' => '',
	'emailfetchtype' => 'Posta kutusu türü',
	'desc_emailfetchtype' => 'Bu e-posta kuyruğunun bağlanacağı ve e-posta indireceği posta kutusu türü.',
	'fetchpipe' => 'Boru',
	'fetchpop3' => 'POP3',
	'fetchpop3ssl' => 'POP3 SSL',
	'fetchimap' => 'IMAP',
	'fetchimapssl' => 'IMAP SSL',
	'emailhost' => 'Posta sunucusu ana bilgisayar adı',
	'desc_emailhost' => 'Posta sunucusu ana bilgisayar adı bir IP adresi veya alan adı olabilir. Örnek, <em>imap.gmail.com</em>.',
	'emailport' => 'Kapı numarası',
	'desc_emailport' => 'Posta sunucuları genellikle halihazırda burada belirtilen standart bir bağlantı kullanır. Doğrulamak için ağ yöneticinize başvurun.',
	'emailusername' => 'Kullanıcı Adı',
	'desc_emailusername' => 'Bu e-posta kuyruğunun bu posta sunucusuna bağlanmak için kullanacağı kullanıcı adı.',
	'emailpassword' => 'Şifre',
	'desc_emailpassword' => 'Yukarıdaki kullanıcı adı ile gitmek için parola.',

	'queueoverrides' => 'Kuyruk Geçersiz (isteğe bağlı)',
	'queuefromname' => 'Addan',
	'desc_queuefromname' => 'Bu kuyruk ile ilişkilendirilmiş tüm giden e-postalar bu kimden adını kullanacaklardır, örnek: <em>Acme Inc Sales</em>.',
	'queuefromemail' => '"Kimden" e-posta adresi',
	'desc_queuefromemail' => 'Bu kuyruk ile ilişkilendirilmiş tüm giden e-postalar bu kimden e-posta adresini kullanacaklardır.',

	'queuesettings' => 'Kuyruk ayarları',
	'templategroup' => 'Kuyruk şablon grubu',
	'desc_templategroup' => 'Bu kuyrukla ilişkilendirilmiş e-posta için hangi şablon grubunun kullanılması gerektiğini seçin.',
	'queuesignature' => 'Kuyruk imzası (isteğe bağlı)',
	'desc_queuesignature' => 'Ayarlanmışsa, bu kuyrukla ilişkilendirilmiş tüm giden e-posta bu imza ile gönderilecektir.',
	'registrationrequired' => 'Kayıt gerekli',
	'desc_registrationrequired' => 'Yalnızca var olan bir kullanıcı hesabı ile kayıtlı kullanıcılardan gelen e-posta, bu e-posta kuyruğu tarafından kabul edilecektir.',
	'issueautoresponder' => 'Yeni talep otomatikcevaplayıcı gönder',
	'desc_issueautoresponder' => 'Etkinse, yardım masası, yardım masasına e-postanın alındığını onaylayan otomatik bir cevaplayıcı gönderecektir.',
	'replyautoresponder' => 'Cevap otomatik cevaplayıcı gönder',
	'desc_replyautoresponder' => 'Etkinse, yardım masası, e-posta ile yeni bir cevabın alındığının onaylayan bir otomatik cevaplayıcı gönderecektir.',

	'ticketfields' => 'Talep Özellikleri',
	'queuedepartment' => 'Bölüm',
	'desc_queuedepartment' => 'Bu kuyruğa gönderilenlerden oluşturulan yeni talepler bu bölümde oluşturulacaktır.',
	'queuetickettype' => 'Talep türü',
	'desc_queuetickettype' => 'Bu talep türü, bu kuyruğa gönderilen e-postadan oluşturulan yeni talepler için kullanılacaktır.',
	'queueticketstatus' => 'Durum',
	'desc_queueticketstatus' => 'Bu kuyruğa gönderilen e-postadan oluşturulan yeni talepler bu duruma ayarlanacaktır.',
	'queuepriority' => 'Öncelik',
	'desc_queuepriority' => 'Bu kuyruğa gönderilen e-postadan oluşturulan yeni talepler bu önceliğe ayarlanacaktır. Bu e-posta önceliği ile ilişkili değildir.',
	'editemailqueue' => 'E-posta Kuyruğunu Düzenle',
	'emailqueues' => 'E-posta Kuyruğu',


	'queueprefix' => 'Kuyruk e-posta konu ön eki (isteğe bağlı)',
	'desc_queueprefix' => 'Bu kuyrukla ilişkilendirilmiş tüm giden e-posta bu değer ile ön ek alacaktır. Örnek, eğer ön ek<em>DESTEK</em> ise e-posta konusu <em>[DESTEK #ABC-12345]: E-posta konu</em> olarak görünecektir.',
	'titleinvalidqueueprefix' => 'Konu ön eki ile ilgili bir sorun var',
	'msginvalidqueueprefix' => 'Konu ön eklerinde yalnızca harf ve rakamlar kullanılabilir. Lütfen tekrar deneyin.',

	'titleenablequeues' => 'E-posta kuyrukları etkinleştirildi (%d)',
	'msgenablequeues' => 'Aşağıdaki e-posta kuyrukları etkinleştirildi:',
	'titledisablequeues' => 'E-posta kuyrukları devre dışı (%d)',
	'msgdisablequeues' => 'Aşağıdaki e-posta kuyrukları devre dışı bırakıldı:',

	// View Parser Log
	'viewparserlog' => 'Ayrıştırıcı Günlüğü Görüntüle',
	'generalinformation' => 'Genel Bilgi',
	'mimedata' => 'MIME verisi',
	'ppticketid' => 'Talep No: ',
	'ppticketmaskid' => 'Talep maskesi numarası: ',
	'ppdate' => 'Tarih: ',
	'pptimeline' => 'Zaman çizelgesi: ',
	'ppemailqueue' => 'E-posta kuyruğu: ',
	'ppstatus' => 'İşlem durumu: ',
	'ppsubject' => 'Konu: ',
	'ppfromemail' => '"Kimden" e-posta adresi: ',
	'pptoemail' => 'Hedef e-posta adresi: ',
	'ppsize' => 'Boyut: ',
	'pptimetaken' => 'Ayrıştırmak için geçen süre: ',
	'ppdesc' => 'Açıklama: ',
	'ppresult' => 'Sonuç',
	'pparserlogid' => 'E-posta ayrıştırıcı kayıt ID: ',
	'parserlog' => 'E-posta Ayrıştırıcı Kaydı',
	'emailsubject' => 'E-Posta Konusu',
	'emailsubjectresult' => 'E-posta konu ve sonuç',
	'emailsubresultformat' => '%s<br /><strong>Sonuç:</strong> %s',
	'emailparsetime' => 'Zaman ayrıştır',
	'emailto' => '"Kime:" E-posta',
	'nosubject' => '(Konu yok)',

	// Parser Errors
	'errnoqueues' => 'Yardım masasının e-posta alıcıları için e-posta kuyrukları yoktur',
	'errfloodprotection' => 'Helpdesk flood protection triggered',
	'scccreatedticket' => 'Talep oluştur #%s',
	'scccreatedreply' => 'Cevap oluştur #%s talebe #%s',
	'sctcreatedreply' => 'Üçüncü kişi tarafından cevap oluşturuldu  #%s talebe #%s',
	'scccreatedstaffreply' => 'Oluşturulan personel cevabı #%s talebe #%s',
	'errusernotreg' => 'Gönderici %s kayıtlı bir kullanıcı değil. Bu e-posta kuyruğu kayıtlı olmayan kullanıcıların e-postasını işleme koyamaz.',
	'erremailbanned' => 'Gönderen e-posta adresi yasaklı',
	'actionrepprefix' => 'Cevap: ',
	'errdisableduser' => 'Ignoring email as user is disabled',

	// Misc
	'reprocessemail' => 'Yeniden İşleme Alınmış E-posta',

	// Loop Cutter
	'pr_mangelooprules' => 'Döngü Engelleyici Kuralları',
	'pr_manageloopblockages' => 'Döngü Blokajları',
	'pr_loopblockages' => 'Döngü Blokajları',
	'pr_insert_new_loopcutter_rule_title' => 'Döngü Engelleyici Kuralı Ekle',
	'pr_edit_new_loopcutter_rule_title' => 'Döngü Engelleyici Kuralı Düzenle',
	'pr_threshhold_grid_timeframe_title' => 'Zaman dilimi',
	'pr_threshhold_grid_maxhits_title' => 'Max hits',
	'pr_threshhold_grid_restoreafter_title' => 'Sonra engeli kaldır',
	'pr_threshhold_grid_address_title' => 'E-posta adresi',
	'pr_newloopcontrolwatchlength_title' => 'Zaman dilimi',
	'pr_newloopcontrolwatchlength_desc' => 'Bir e-postanın alınmasıyla takip eden, olası döngüler için döngü engelleyicinin izlediği zamanın penceresi,.',
	'pr_newloopcontrolmaxcontacts_title' => 'Zaman dilimi içinde maksimum e-postalar',
	'pr_newloopcontrolmaxcontacts_desc' => 'Bu e-postaların sayısı döngü engelini tetikler ve sonraki e-postalar için daha fazla otomatik cevaplayıcı gönderilmez.',
	'pr_newloopcontrolrestoreafter_title' => 'Remove loop blockage after',
	'pr_newloopcontrolrestoreafter_desc' => 'The amount of time in seconds after which a loop blockage will be unblocked.',
	'wineditloopcutterrule' => 'Döngü Engelleyici Kuralı Düzenle',
	'pr_threshhold_grid_title' => 'Kural adı',
	'thresholdruletitle' => 'Kural adı',
	'desc_thresholdruletitle' => 'Döngü engelleyici kuralı için bir başlık.',
	'titledelloopblock' => 'Döngü tıkanıklıkları (%s) silindi',
	'msgdelloopblock' => 'Aşağıdaki döngü tıkanıklıkları silindi:',
	'titledellooprule' => 'Döngü tıkayıcı kurallar (%d) silindi',
	'msgdellooprule' => 'Aşağıdaki kurallar silindi:',
	'titleinsertlooprule' => 'Döngü engelleyici kural oluşturdu',
	'msginsertlooprule' => 'Yeni bir döngü engelleyici kural başarıyla oluşturuldu:',
	'titleupdatelooprule' => 'Döngü tıkayıcı kuralı güncellendi',
	'msgupdatelooprule' => 'Döngü engelleyici kural başarıyla güncelleştirildi:',
	'titlelooprulemasterdel' => 'Döngü tıkayıcı kurallar silinemedi',
	'msglooprulemasterdel' => 'Aşağıdaki ana döngü tıkayıcı kurallar silinemedi:',

	// Potentialy unused phrases in emailparser.php
	'titlefailedtocreatequeue' => 'Failed to create queue',
	'msgfailedtocreatequeue' => 'Unable to create a queue. Please check your database configuration and connectivity settings.',
	'queue_id_label' => 'ID',
	'managemailqueue' => 'Manage Email Queues',
	'invalidqueueaddress' => 'You must enter a valid email address for the queue.',
	'fetchpop3tls' => 'POP3 TLS',
	'fetchimaptls' => 'IMAP TLS',
	'errorlockfilefound' => '[ERROR]: Lock file found! (./files/parser.lockfile). A lock file has been found preventing further execution. If it is from a stale instance of cron then please delete the file in order to continue. To remove the file manually <a href="%s">click here</a>',
	'lockfileexpired' => '[WARNING]: Expired lock file (./files/parser.lockfile) from previous instance of cron found; automatically deleting...',
	'autorespondernotsent' => ' (Autoresponder not sent due to settings in effect)',
	'queuedetails' => 'Queue Details',
	'failedtocreatequeue' => 'ERROR: Failed to create email queue',
	'redirect_queueinsert' => 'Email queue inserted successfully.',
	'queueinsertconfirm' => 'Email queue "%s" inserted successfully',
	'depdeleteconfirm' => 'Email queue "%s" deleted successfully',
	'invalidemailqueue' => 'Invalid email queue specified',
	'queueupdconfirm' => 'Email queue "%s" updated successfully',
	'invalidparserlog' => 'Invalid parser log entry. Make sure that the parser log entry exists in the database and has not been deleted.',
	'desc_parserlog' => 'The mail parser logs all incoming email under the log with useful information to help debug any problems. To disable the logging of email or change other settings, navigate to <i>Settings > Mail Parser</i>.',
	'invalidqueueprefix' => 'Invalid queue prefix; only alphanumeric characters (e.g. A-Z, 0-9) and spaces are allowed.',
	'parserlogentry' => 'Parser Log #%s',
	'parserlogs' => 'Email Parser Logs',
	'emailstatus' => 'Status',
	'emailfrom' => '"From:" Email',
	'emaildescription' => 'Description',
	'emailticketid' => 'Ticket/Bug ID',
	'emailticketmaskid' => 'Ticket Mask ID',
	'emailcontents' => 'Email Contents',
	'breaklinelist' => 'Breakline List',
	'breakline' => 'Breakline',
	'desc_breakline' => 'Enter the contents of the breakline you wish to insert.<BR /><BR />Note: To use regular expressions, prepend your breakline with "regex:"<BR />Example: <i>"regex:@[-=]{4,}[^-=]+[-=]{4,}@"</i>',
	'breaklinedelconfirm' => 'Breakline deleted successfully',
	'breaklineinsertconfirm' => 'Breakline inserted successfully',
	'errnorecipients' => 'No recipients found',
	'errnofromemail' => 'No from email specified',
	'clearedduelimit' => '-- MIME data cleared due to the size limit under Settings > Parser --',
	'pr_loopcutter_prevents_autoresponder_desc' => ' (Autoresponder not sent due to loop control)',
	'pr_loopcontrolrules' => 'Loop Control Rules',
	'pr_new_loop_control_header_text' => 'New Loop Control',
	'pr_new_loop_control_rule_added_desc' => 'New loop control rule added.',
	'pr_desc_loopblockages_filler' => 'Below is a list of active loop blockages. The addresses listed here triggered one or more loop control rules (<i>Mail Parser >> Manage Loop Rules</i>).  Depending on the active settings (<i>Settings >> Mail Parser >> Loop Control Settings</i>), incoming email from these addresses may be completely ignored by Kayako and an autoresponder message may not be sent.  These settings will be in effect for each blockage until it expires.',
	'pr_desc_looprules_filler' => 'Below is a list of loop control rules.  These rules prevent autoresponder loops or other email flood situations and all incoming email messages are subjected to them.  If a rule is triggered, the settings (<i>Settings >> Mail Parser >> Loop Control Settings</i>) are applied.  This allows Kayako to completely ignore the message and/or not reply with an autoresponder message.  Blockages created by these rules are automatically removed after the specified timeframe.',
	'pr_loop_rule_deleted' => 'Rule deleted.',
	'pr_loop_block_deleted' => 'Blockage deleted.',
	'invalidlooprule' => 'Invalid Loop Cutter Rule. Please make sure the record exists in the database.',
	'notapplicable' => '-- NA --',

);
?>