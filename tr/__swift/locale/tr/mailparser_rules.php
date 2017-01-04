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
	'isenabled' => 'E-posta ayrıştırıcı kurali etkinleştirildi',
	'desc_isenabled' => 'E-posta kuralları devre dışı bırakılırsa göz ardı edilecektir.',
	'insertcriteria' => 'Kriter Girin',
	'tabactions' => 'Eylemler',
	'titlenoaction' => 'Belirtilen eylem yok',
	'msgnoaction' => 'E-posta kuralının yerine getireceği en az bir eylemin belirtilmesi gerekmektedir (eğer eşleşiyorsa).',
	'if' => 'Eğer',
	'titleinsertrule' => 'E-posta kuralı (%s) oluşturuldu',
	'msginsertrule' => 'E-posta kuralı (%s) başarıyla oluşturuldu.',
	'titleupdaterule' => 'E-posta kuralı (%s) güncellendi',
	'msgupdaterule' => 'Başarıyla güncellenen e-posta ayrıştırıcı kuralı "%s".',
	'titledelprules' => 'E-posta kuralı (%s) başarıyla güncellendi.',
	'msgdelprules' => 'Aşağıdaki e-posta kuralları silindi:',
	'titleenableprules' => 'Etkin e-posta kuralları (%d)',
	'msgenableprules' => 'Aşağıdaki e-posta kuralları etkinleştirildi:',
	'titledisableprules' => 'E-posta kuralları (%d) devre dışı',
	'msgdisableprules' => 'Aşağıdaki e-posta kuralları devre dışı bırakıldı:',
	// ======= END v4 LOCALES =======

	'mailparser' => 'E-posta Ayrıştırıcı',

	'desc_parserrules' => '',

	// Operators
	'opcontains' => 'İçerir',
	'opnotcontains' => 'İçermez',
	'opequal' => 'Eşit',
	'opnotequal' => 'Eşit değil',
	'opgreater' => 'Daha büyük',
	'opless' => 'Daha Az',
	'opregexp' => 'Normal ifade',
	'strue' => 'Doğru',
	'sfalse' => 'Yanlış',

	// Criteria
	'psendername' => 'Gönderenin adı',
	'desc_psendername' => 'Gönderenin adı e-posta mesajının "Kimden:" başlığından ayrıştırılır.',

	'psenderemail' => 'Gönderen e-posta adresi',
	'desc_psenderemail' => 'Gönderenin e-posta adresi, e-posta mesajının "Kimden:" başlığından ayrıştırılır. Örnek: <em>Kimden: <span class="tabletitle">Gönderen Adı</span><senderemail@domain.com></em>',

	'pdestinationname' => 'Hedef (alıcı) adı',
	'desc_pdestinationname' => 'Hedef adı e-postanın "Kime:" başlığından ayrıştırılır. Hedef adı genellikle talebe cevap veren personel kullanıcı adıdır (aksi yapılandırılmadıkça).',

	'pdestinationemail' => 'Hedef (alıcı) e-posta adresi',
	'desc_pdestinationemail' => 'Hedef e-posta adresi, e-posta mesajının "Kime:" başlığından ayrıştırılır. Bu, genellikle cevap gönderilen e-posta kuyruğuna ait olan adrestir.',

	'preplytoname' => 'Cevap adı',
	'desc_preplytoname' => 'Cevapla adı "e-posta mesajının ...\'cevapla" başlığından ayrıştırılır.',

	'preplytoemail' => 'Cevap e-posta adresi',
	'desc_preplytoemail' => 'Cevapla e-posta adresi, e-posta mesajının "Cevapla" başlığından ayrıştırılır.',

	'psubject' => 'Konu',
	'desc_psubject' => 'E-posta konusu eşleşiyor.',

	'precipients' => 'Alıcılar',
	'desc_precipients' => 'E-posta alıcıları eşleşir. E-posta mesajının "Kime" ve "CC" başlıklarının dahil olduğu gelen bir e-postanın gönderildiği birden çok alıcı olabilir.',

	'pbody' => 'Mesaj Metni',
	'desc_pbody' => 'Matches the remaining contents of the email body after HTML (unless configured otherwise) and breaklines have been stripped out.',

	'pbodysize' => 'Gövde boyutu',
	'desc_pbodysize' => 'E-postanın bayt cinsinden toplam boyut içeriği.',

	'ptextbody' => 'Düz metin gövdesi',
	'desc_ptextbody' => 'Bir e-postanın iki içerik türü olabilir; <em>düz metin</em>, <em>HTML</em> veya <em>her ikisi</em>. Bu kural yalnızca gövdenin <em>düz metin</em> sürümünü arar. Not edin ki,  tüm e-postalar <em>her ikisi</em> formatında gönderilmez.',

	'phtmlbody' => 'HTML gövde',
	'desc_phtmlbody' => 'Bir e-postanın iki içerik türü olabilir; <em>düz metin</em>, <em>HTML</em> veya <em>her ikisi</em>. Bu kural yalnızca gövdenin <em>HTML</em> sürümünü arar. Not edin ki,  tüm e-postalar <em>her ikisi</em> formatında gönderilmez.',

	'ptextbodysize' => 'Metin gövde boyutu',
	'desc_ptextbodysize' => 'Bir e-postanın iki içerik türü olabilir; <em>düz metin</em>, <em>HTML</em> veya <em>her ikisi</em>. Bu kural e-postanın bayt cinsinden <em>düz metin</em> gövde içeriği toplam boyutu ile eşleşir.',

	'phtmlbodysize' => 'HTML gövde boyutu',
	'desc_phtmlbodysize' => 'Bir e-postanın iki içerik türü olabilir; <em>düz metin</em>, <em>HTML</em> veya <em>her ikisi</em>. Bu kural e-postanın bayt cinsinden <em>HTML</em> gövde içeriği toplam boyutu ile eşleşir.',

	'pattachmentname' => 'Ek adları',
	'desc_pattachmentname' => 'Yardım masasına kabul edilmiş (yönetici kontrol panelinde açıklandığı gibi) eklerin ek adlarını eşleştirir.',

	'pattachmentsize' => 'Ek boyutu',
	'desc_pattachmentsize' => 'Yardım masasına kabul edilmiş olan eklerin ek boyutlarını eşleştirir (yönetici kontrol panelinde açıklandığı gibi).',

	'ptotalattachmentsize' => 'Toplam ek boyutu',
	'desc_ptotalattachmentsize' => 'Yardım masasında kabul edilmiş olan (bayt cinsinden) eklerin <em>toplam boyut</em> \'unu eşleştirir (yönetici kontrol panelinde açıklandığı gibi).',

	'pisreply' => 'bir kullanıcı cevabı',
	'desc_pisreply' => 'Eğer gelen e-posta bir son kullanıcı tarafından var olan bir e-postaya cevap ise, bu kural eşleşecektir.',

	'pisthirdparty' => 'Üçüncü taraf alıcı cevabı',
	'desc_pisthirdparty' => 'Eğer gelen e-posta üçüncü taraf alıcı olarak bir talebe eklenmiş bir adres tarafından var olan bir talebe cevap ise, bu kural eşleşecektir.',

	'pfloodprotection' => 'Tetiklenen taşkın koruma',
	'desc_pfloodprotection' => 'Eğer yardım masasının taşkın koruması tetiklenmişse bu kural eşleşecektir.',

	'pisstaffreply' => 'bir personel cevabı',
	'desc_pisstaffreply' => 'Eğer gelen e-posta bir personel kullanıcının e-posta adresi tarafından var olan bir talebe cevap ise, bu kural eşleşecektir.',

	'pticketstatus' => 'Talep durumu (ayrıştırma sonrası)',
	'desc_pticketstatus' => 'Eğer gelen e-posta var olan bir talebe cevap ise, talep durumu bu kural tarafından eşleştirilecektir.',

	'pticketemailqueue' => 'E-posta kuyruğu',
	'desc_pticketemailqueue' => 'Eğer gelen e-posta belirli bir kuyruktan alınmışsa, bu kural eşleşecektir.',

	'ptickettype' => 'Talep türü (ayrıştırma sonrası)',
	'desc_ptickettype' => 'Eğer gelen e-posta var olan bir talebe cevap ise, talep durumu bu kural tarafından eşleştirilecektir.',

	'pticketpriority' => 'Talep önceliği (ayrıştırma sonrası)',
	'desc_pticketpriority' => 'Eğer gelen e-posta var olan bir talebe cevap ise, talep önceliği bu kural tarafından eşleştirilecektir.',

	'pticketusergroup' => 'Talep kullanıcı grubu (ayrıştırma sonrası)',
	'desc_pticketusergroup' => 'Eğer gelen e-posta var olan bir talebe cevap ise, talebin kullanıcı grubu bu kural tarafından eşleştirilecektir.',

	'pticketdepartment' => 'Talep bölümü (ayrıştırma sonrası)',
	'desc_pticketdepartment' => 'Eğer gelen e-posta var olan bir talebe cevap ise, talebin bölümü bu kural tarafından eşleştirilecektir.',

	'pticketowner' => 'Talep sahibi (ayrıştırma sonrası)',
	'desc_pticketowner' => 'Eğer gelen e-posta var olan bir talebe cevap ise, talebin sahibi bu kural tarafından eşleştirilecektir.',
	'prunassigned' => '-- Atanmamış --',

	'pticketflagtype' => 'Talep bayrağı (ayrıştırma sonrası)',
	'desc_pticketflagtype' => 'Eğer gelen e-posta var olan bir talebe cevap ise, talebin bayrağı bu kural tarafından eşleştirilecektir.',

	'pbayescategory' => 'Bayesian Kategorisi',
	'desc_pbayescategory' => 'The helpdesk runs all incoming email through the Bayesian filter, and assigns the ticket a Bayesian category with the highest score. You can use this to filter spam email or train the system to automatically route tickets based on its contents, using custom Bayesian categories.',

	// Insert Rule
	'insertrule' => 'Kural Ekle',
	'iruletype' => 'E-posta kural türü: ',
	'ipreparse' => 'E-posta işlenmeden önce (ön ayrıştırma)',
	'ipostparse' => 'E-posta işlendikten sonra (sonraki ayrıştırma)',

	'paignore' => 'E-posta yoksay',
	'desc_paignore' => 'E-posta yardım masası tarafından yok sayılır ve bir talepte veya bir cevapta işleme alınmayacaktır.',
	'panoautoresp' => 'Otomatik cevaplayıcı göndermeyin',
	'desc_panoautoresp' => 'Yeni bir e-postanın alındığını doğrulayan (yeni bir talep veya cevap olarak) bir otomatik cevaplayıcı gönderilmeyecektir.',
	'panoalerts' => 'Bildirim kuralları işleme alma',
	'desc_panoalerts' => 'Etkin ise yardım masası bildirim kuralları işleme alınmayacaktır.',
	'pnochange' => '--Değişiklik Yok--',
	'pcstaff' => 'Talebi ata',
	'desc_pcstaff' => 'Talep (yeni bir tane veya var olan birine bir cevap olarak) bu personel kullanıcıya atanacaktır.',
	'pcstatus' => 'Talep durumunu değiştir',
	'desc_pcstatus' => 'Talep bu duruma değiştirilecek.',
	'pcpriority' => 'Talep önceliğini değiştir',
	'desc_pcpriority' => 'Talep bu önceliğe değiştirilecek.',
	'pcdepartment' => 'Talebi bölüme taşı',
	'desc_pcdepartment' => 'Talep bu bölüme taşınacaktır.',
	'pcslaplan' => 'Talep SLA planını değiştir',
	'desc_pcslaplan' => 'Talep bu SLA planına atanacaktır.',
	'pcmovetotrash' => 'Çöp kutusuna taşı',
	'desc_pcmovetotrash' => 'Talep çöp kutusuna taşınacaktır',
	'pcflag' => 'Talebi bayrakla',
	'desc_pcflag' => 'Talep bu renge bayraklanacaktır.',
	'paddnotes' => 'Talebe not ekle',
	'desc_paddnotes' => 'Talebe bir not eklenecektir.',
	'pcforward' => 'E-posta ilet',
	'desc_pcforward' => 'E-posta şu adrese iletilecektir.',
	'preply' => 'E-postaya cevap',
	'desc_preply' => 'E-posta otomatik olarak bu mesajla cevaplanacaktır.',
	'panoticket' => 'Talep cevabı olarak işlem yapma',
	'desc_panoticket' => 'Eğer gelen e-posta var olan bir talebe cevap ise, e-posta var olan talebe eklenmeyecektir ve yeni talep oluşturulacaktır.',
	'pctickettype' => 'Talep türünü değiştir',
	'desc_pctickettype' => 'Talep türü burada belirtilen birine değiştirilecektir.',
	'pcaddtags' => 'Talebe etiketler ekle',
	'desc_pcaddtags' => 'Bu etiketler talebe eklenecektir.',
	'pcremovetags' => 'Talepten etiketleri kaldır',
	'desc_pcremovetags' => 'Eğer talep bu etiketlerden herhangi birine sahipse, bunlar kaldırılacaktır.',
	'pcprivate' => 'Talep cevabını özel yap',
	'desc_pcprivate' => 'Bu talep cevabı özel olarak işaretlenecektir ve sadece diğer personel kullanıcılarına (bu, sadece personelden gelen cevaplara uygulanır) görünür olacaktır.',

	// Edit Rules
	'editrule' => 'Kuralı Düzenle',
	'ptitle' => 'E-posta kural başlığı',
	'desc_ptitle' => 'Örnek, <em>PayPal makbuzlar</em>.',
	'pstop' => 'Diğer kuralların işlenmesini durdur',
	'desc_pstop' => 'Eğer bu kural ilk eşleşirse bundan sonra diğer e-posta kuralları işlemez.',

	// Manage Rules
	'managerules' => 'Kurallar',
	'ruletitle' => 'Kural başlığı',
	'sortorder' => 'Yürütme sırası',
	'desc_sortorder' => 'Aynı e-posta adresi için birden çok e-posta kuralının eşleşebilmesi mümkündür. Yardım masası, en küçükten en büyüğe,  yürütme sıra numarasına göre kuralları işleme alacaktır.',
	'ruletype' => 'Kural türü',
	'creationdate' => 'Oluşturuldu',
	
	// Potentialy unused phrases in mailparser_rules.php
	'smatchtype' => 'Match Type',
	'matchtype' => 'Criteria Options',
	'desc_matchtype' => 'Select the grouping method for the criteria fields.',
	'smatchall' => 'Match <b>All</b> Criteria (AND)',
	'smatchany' => 'Match <b>Any</b> Criteria (OR)',
	'criteria' => 'Criteria',
	'newcriteria' => 'New Criteria',
	'ruleinsertconfirm' => 'Parser rule "%s" inserted successfully',
	'ruleupdateconfirm' => 'Parser rule "%s" updated successfully',
	'invalidrule' => 'ERROR: Invalid email parser rule',
	'ruledelconfirm' => 'Parser rule deleted successfully',
	'rulelist' => 'Rule List',
	'notapplicable' => '-- NA --',

);
?>