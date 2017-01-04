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
	'mpsettings' => 'Ayarlar',
	'desc_mpsettings' => '',
	'tabsettings' => 'Ayarlar',
	'mailparser' => 'E-posta Ayrıştırıcı',
	


	'titleinsertban' => 'E-posta adresi yasaklandı',
	'msginsertban' => 'E-posta adresi %s yasaklandı ve e-posta ayrıştırıcı artık bu adresten e-posta işleme almayacak.',
	'titleupdateban' => 'E-posta adresi yasağı güncellendi',
	'msgupdateban' => '%s için e-posta adresi yasağı başarıyla güncellendi.',
	'wineditban' => 'Ayrıştırıcı Yasağı Düzenle',
	'titledelbans' => 'E-posta adresi yasakları kaldırdı (%d)',
	'msgdelbans' => 'Aşağıdaki e-posta adresi yasakları silindi:',

	// Email Bans
	'emailbans' => 'E-posta yasakları',
	'emailbanlist' => 'E-posta Yasak Listesi',
	'bannedemail' => 'E-posta adresi',
	'bannedby' => 'Tarafından yasaklandı',
	'insertban' => 'Yasak ekle',
	'insertnewban' => 'Yeni Yasak Ekle',
	'desc_bannedemail' => 'Yasaklamak için e-posta adresini girin. Bu adresten gelen herhangi bir e-posta mesajı yardım masası tarafından yok sayılacaktır. Tüm alanı adı yasağı için <em>@thedomainname.com</em> girin.',
	'parserbaninsertconfirm' => 'E-posta yasağı "%s" başarıyla eklendi',
	'parserbansdelconfirm' => 'E-posta yasak(lar)ı başarıyla silindi',
	'invalidemailban' => 'Geçersiz e-posta adresi yasak kimliği belirtildi',
	'editban' => 'Yasak Düzenle',
	'bandelconfirmmsg' => 'Bu e-posta yasağı girişini silmek istediğinizden emin misiniz?  Bu eylem geri alınamaz!',
	'parserbanupdconfirm' => '%s güncelleme için e-posta adresi yasağı',
	'desc_mailbans' => 'Son kullanıcıların kendi adresleri için bir e-posta yasağı ekleyerek talep girmelerini önleyebilirsiniz. Kayako her ne zaman bir e-posta iletisi alırsa, yazarın adresini yasak listesinde kontrol eder ve eğer adres yasaklıysa bildirim olmaksızın ileti yok sayılır.',

	// Catch-All Rules
	'insertcatchallrule' => 'Tümünü Yakalama Kuralı Ekle',
	'titlenqcatchall' => 'Tüm kuralları oluşturmadan önce e-posta kuyrukları yapılandırın',
	'msgnqcatchall' => 'Catch-all rules determine what happens to email coming into the helpdesk. Without any email queues configured, email cannot come into the helpdesk.',
	'wineditcatchall' => 'Edit Catch-all Rule',
	'titledelcatchall' => 'Catch-all rules deleted (%d)',
	'msgdelcatchall' => 'The following catch-all rules were deleted:<br>',
	'titleupdatecatchall' => 'Catch-all rule updated',
	'msgupdatecatchall' => 'The catch-all rule (%s) was updated successfully.',
	'titleinsertcatchall' => 'Catch-all rule created',
	'msginsertcatchall' => 'The catch-all rule (%s) was created successfully.',
	'catchallrules' => 'Catch-all Rules',
	'desc_catchallrules' => 'Catch-all rules use regular expressions to match the addresses of incoming email messages.  The messages can then be routed to whichever email queue you wish. For more information on regular expressions, see <a href="http://www.php.net/preg_match" target="_blank" id="red">preg_match()</a>.',
	'insertrule' => 'Kural Ekle',
	'insertnewrule' => 'Yeni Kural Ekle',
	'editrule' => 'Kural Düzenle',
	'rregexp' => 'Örüntü Eşleştir',
	'desc_rregexp' => 'Enter a regular expression to match against the sender\'s email address. If it matches, this catch-all rule will trigger. For example:<br /><br /><strong>/^(.*)(\\@yourdomain\\.com)$/i</strong> Matches any email address that has a domain of yourdomain.com (*@yourdomain.com)<br /><strong>/^(support\\@)(.*)$/i</strong> Matches support@*',
	'sortorder' => 'Yürütme sırası',
	'desc_sortorder' => 'Catch-all rules will be executed according to their execution order number, smallest to largest (1 will execute before 5).',
	'emailqueue' => 'Route to email queue',
	'desc_emailqueue' => 'Incoming email that is caught by this catch-all rule will be routed to this email queue.',
	'ruletitle' => 'Kural adı',
	'desc_ruletitle' => 'Örneğin, <em>Mail domaini yakalamak için @acme.com</em>.',
	'noemailqueueadd' => '-- Yapılandırılmış e-posta kuyrukları yok --',
	'editcatchallrule' => 'Edit Catch-All Rule',
	'emailqueue' => 'Hedef e-posta kuyruğu',
	
	// Potentialy unused phrases in mailparser_misc.php
	'invalidemailaddress' => 'Invalid email address specified',

	'errnoqueue' => 'ERROR: You do not have any email queues in the database. You need to have at least one email queue to utilize catch-all rules.',
	'catchruleinsertconfirm' => 'Catch-all rule "%s" inserted successfully',
	'catchruleupdconfirm' => 'Catch-all rule "%s" updated successfully',
	'catchallruledelconfirm' => 'Catch-all rule(s) deleted successfully',
	'invalidcatchalrule' => 'Invalid catch all rule specified',
	'cruledelconfirmmsg' => 'Are you sure you wish to delete this catch-all rule?  This action is irreversible!',
);
?>