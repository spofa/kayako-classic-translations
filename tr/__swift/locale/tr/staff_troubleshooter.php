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

$__LANG = array(
	'troubleshooter' => 'Sorun giderici',
	'categories' => 'Kategoriler',
	'titletrcatmismatch' => 'adında zaten bir kategori var',
	'msgtrcatmismatch' => 'Bir sorun giderici kategori adı %s zaten var. Lütfen başka birini seçin.',
	'wininsertcategory' => 'Kategori Ekle',
	'wineditcategory' => 'Kategori Düzenle: %s',
	'insertcategory' => 'Kategori Ekle',
	'editcategory' => 'Kategori Düzenle',

	'titletrcategoryinsert' => 'Sorun giderici kategori (%s) oluşturuldu',
	'msgtrcategoryinsert' => 'Sorun giderici kategori (%s) başarıyla oluşturuldu.',
	'titletrcategoryupdate' => 'Güncellenen sorun giderici kategori (%s)',
	'msgtrcategoryupdate' => 'Sorun giderici kategori (%s) başarıyla güncellendi.',
	
	'trcategory' => 'Kategori Adı',
	'desc_trcategory' => 'Örnek, <em>Aygıtım açılmayacak</em>.',
	'next' => 'Sonraki',

	'tabgeneral' => 'Genel',
	'taboptions' => 'Seçenekler',
	'categorytype' => 'Görünürlük',
	'desc_categorytype' => '<strong>Küresel</strong> Personel ve son kullanıcılar dahil herkes için kullanılabilir.<br /><strong>Genel</strong> Sadece destek merkezindeki son kullanıcılar için kullanılabilir.<br /><strong>Özel</strong> Sadece personel kontrol panelindeki personeliniz için kullanılabilir.',
	'displayorder' => 'Görüntüleme sırası',
	'desc_displayorder' => 'Sorun giderici kategoriler, en küçükten en büyüğe, görüntüleme sıra numarasına göre görüntülenir.',
	'tabpermissionsuser' => 'İzinler: Kullanıcılar',
	'tabpermissionsstaff' => 'İzinler: Personel',
	'uservisibilitycustom' => 'Belirli kullanıcı grupları için kısıtla',
	'desc_uservisibilitycustom' => 'Etkinse, yalnızca aşağıdaki kullanıcı grupları bu kategoriyi görecektir.',
	'staffvisibilitycustom' => 'Belli personel takımlarına sınırla',
	'desc_staffvisibilitycustom' => 'Etkinse, yalnızca aşağıdaki takımlar bu kategoriyi görecektir.',
	'usergroups' => 'Kullanıcı Grupları',
	'staffteams' => 'Personel Takımları',
	
	'tablist' => 'Liste',
	'tabtree' => 'Ağaç',
	'steptitle' => 'Adım başlığı',
	'categorytitle' => 'Kategori',
	'author' => 'Yazar',
	'stepstatus' => 'Durum',

	/**
	 * ---------------------------------------------
	 * INSERT TROUBLESHOOTER
	 * ---------------------------------------------
	 */
	'titletrstepinsert' => 'Sorun giderici adımı (%s) oluşturuldu',
	'msgtrstepinsert' => 'Sorun giderici adımı (%s) başarıyla oluşturuldu.',
	'titletrstepupdate' => 'Güncellenen sorun giderici adımı (%s)',
	'msgtrstepupdate' => 'Sorun giderici adımı (%s) başarıyla güncellendi.',
	'insertstep' => 'Adım Ekle',
	'recursionsuffix' => ' (Olası Özyineleme)',
	'parentcategoryitem' => '- Kategori Kök -',
	'desc_parentsteps' => '',
	'tabgeneral' => 'Genel',
	'tabattachments' => 'Ekler',
	'taboptions' => 'Seçenekler',
	'publish' => 'Yayınla',
	'published' => 'Yayınlanan',
	'draft' => 'Taslak',
	'infobauthor' => 'YAZAR',
	'infobcreationdate' => 'TARİHİNDE OLUŞTURULMUŞTUR',
	'infobeditedby' => 'TARAFINDAN DÜZENLENDİ',
	'infobeditedon' => 'TARİHİNDE DÜZENLENDİ',
	'ftarticletype' => 'Tür',
	'ftcategories' => 'Kategoriler',
	'ftdate' => 'Tarih',
	'informationbox' => 'Bilgi',
	'quickfilter' => 'Hızlı Filtre',
	'markasdraft' => 'Taslak olarak işaretle',
	'saveasdraft' => 'Taslak olarak kaydet',
	'addfile' => 'Dosya Ekle',
	'steptitle' => 'Adım başlığı',
	'desc_steptitle' => '',
	'parentsteps' => 'Üst adımlar',
	'desc_parentsteps' => '',
	'generalsettings' => 'Genel Ayarlar',
	'allowcomments' => 'Yorumlara izin ver',
	'desc_allowcommentsstep' => 'Yorumlara bu adımda izin verilsin ya da verilmesin.',
	'noticketrediractive' => '-- Hiç Bölüm Seçilmedi --',
	'ticketredirectionsettings' => 'Talep Yönlendirme Ayarları',
	'redirecttickets' => 'Bu adımda talebe yönlendir',
	'desc_redirecttickets' => 'Bu adıma ulaştıklarında bir talep oluşturmak için kullanıcıları davet etmek için ayar etkinleştir (örnek, bir satır sonu).',
	'redirectdepartment' => 'Talep bölümü',
	'desc_redirectdepartment' => 'Eğer hiç departman seçilmemişse, kullanıcıya kendininkini seçmesi istenecektir.',
	'ticketsubject' => 'Talep konusu',
	'desc_ticketsubject' => 'Eğer hiç talep konusu belirtilmemişse, kullanıcıdan kendininkini girmesi istenecektir.',
	'tickettype' => 'Talep türü',
	'desc_tickettype' => 'Specify a ticket type for the ticket a user who reaches this step will be invited to create.',
	'ticketpriority' => 'Talep önceliği',
	'desc_ticketpriority' => 'Eğer hiç öncelik belirtilmişse, kullanıcı kendi talep önceliğini (varsa) seçebilecektir.',
	'nochange' => '-- Değişiklik Yok --',
	
	/**
	 * ---------------------------------------------
	 * VIEW ALL
	 * ---------------------------------------------
	 */
	'tabviewall' => 'Sorun giderici',
	'troubleshooterdesc' => 'Sorun giderici sihirbazlar ortak sorunları tanılamak ve genel sorunları gidermek için bir dizi adımla size rehberlik eder. Sorun giderici bir kategori seçerek başlayın.',
	'trattachments' => 'Ekler',
	'trnextsteps' => 'Sonraki Adımlar',
	'trnext' => 'Sonraki &raquo;',
	'trback' => '&laquo; Geri',
	'steps' => 'Adımlar',
	'trcategoryviews' => ' (%d Görüntüler)',
	
	// Potentialy unused phrases in staff_troubleshooter.php
	'desc_categorytitle' => 'Enter the category title',

);
?>