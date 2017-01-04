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
	'autoclose' => 'Otomatik kapat',
	'manage' => 'Yönet',
	'targetstatus' => 'Durumu değiştirmek için',
	'tabgeneral' => 'Genel',

	'insertrule' => 'Kural Ekle',
	'editrule' => 'Kuralı Düzenle',

	'ruletitle' => 'Kural adı',
	'desc_ruletitle' => 'Bu otomatik kapat kuralı için bir başlık girin.',
	'targetticketstatus' => 'Durumu değiştir',
	'desc_targetticketstatus' => '(Aşağıya bakın) etkin olmama süresi dolduğunda, bu kuralla eşleşen ticketların durumu bu olarak ayarlanacaktır (çözüldü durumunda olmalıdır).',
	'inactivitythreshold' => 'Hareketsizlik eşik',
	'desc_inactivitythreshold' => 'Güncelleştirme bu çağrı için bir saat içinde yapılırsa, Çağrı etkin değil olarak kabul edililir. Bir çağrı otomatik olarak kapatılması yolunda ilk adım bu.',
	'closurethreshold' => 'Kapatma eşiği',
	'desc_closurethreshold' => 'Eğer bir ticket pasif olarak işaretlenmiş ve bu sayıda saat içerisinde hala bir güncelleme yapılmamış ise, ticket otomatik olarak yukarıda belirtilen durum olarak ayarlanacaktır.',
	'isenabled' => 'Kural etkinleştirildi',
	'desc_isenabled' => 'Bu kural aktif ya da değil şeklinde değiştir.',
	'sortorder' => 'Yürütme sırası',
	'desc_sortorder' => 'Birden fazla otomatik kapat kuralı oluşturmak mümkün. Yürütme sırası hangi kuralların önce yürütüleceğini belirler, en küçükten en büyüğe.',
	'sendpendingnotification' => 'Send inactivity notification email',
	'desc_sendpendingnotification' => 'Yardım masası kullanıcıyı ticket pasif şeklinde işaretlendi diye uyarabilir ve eğer cevap alınmaz ise, kapatılır.',
	'sendfinalnotification' => 'Son ticket kapatıldı uyarı e-postası gönder',
	'desc_sendfinalnotification' => 'Yardım masası ayrıca kullanıcıyı ticket kapatıldı diye uyarabilir.',
	'suppresssurveyemail' => 'Müşteri anket e-postasını önle',
	'desc_suppresssurveyemail' => 'Ticket statüsü yukarıda belirlenen olarak ayarlandığında müşteriye memnuniyet anket davetinin gönderilmesini etkinleştirdiyseniz, yardım masasının otomatik olarak kapanan ticketlar için anket daveti yollamasını engellemek isteyebilirsiniz.',

	'insertcriteria' => 'Kriter Girin',


	'titleautocloseruledel' => 'Otomatik kapat kuralları silindi',
	'msgautocloseruledel' => 'Aşağıdaki otomatik kapat kuralları silindi:',
	'titleautocloseruleenable' => 'Otomatik kapat kuralları etkinleştirildi',
	'msgautocloseruleenable' => 'Aşağıdaki otomatik kapat kuralları etkinleştirildi:',
	'titleautocloseruledisable' => 'Otomatik kapat kuralları devre dışı bırakıldı',
	'msgautocloseruledisable' => 'Aşağıdaki otomatik kapat kuralları devre dışı bırakıldı:',
	'titleautocloseruleinsert' => 'Otomatik kapat kuralı oluşturuldu',
	'msgautocloseruleinsert' => 'Otomatik kapat kural başarıyla oluşturuldu.',
	'titleautocloseruleupdate' => 'Otomatik kapat kuralı güncellendi',
	'msgautocloseruleupdate' => 'Otomatik kapat kuralı başarıyla güncellendi.',

	'titlenocriteriaadded' => 'Kriter belirtilmedi',
	'msgnocriteriaadded' => 'Otomatik kapat kuralı oluşturmak için en az bir kriter belirtmeniz gerekir (aksi halde, yardım masası hangi ticketları otomatik kapatacağını bilemez).',

	/**
	 * ---------------------------------------------
	 * Rule Criterias
	 * ---------------------------------------------
	 */
	'notapplicable' => 'Uygulanamaz',
	'articketstatusid' => 'Durum',
	'desc_articketstatusid' => '',
	'arpriorityid' => 'Öncelik',
	'desc_arpriorityid' => '',
	'ardepartmentid' => 'Departman',
	'desc_ardepartmentid' => '',
	'arownerstaffid' => 'Sahibi',
	'desc_arownerstaffid' => '',
	'aremailqueueid' => 'E-posta sırası',
	'arusergroupid' => 'Kullanıcı grubu',
	'desc_arusergroupid' => '',
	'desc_aremailqueueid' => '',
	'arflagtype' => 'Bayrak',
	'desc_arflagtype' => '',
	'arbayescategoryid' => 'Bayesian Kategori',
	'desc_arbayescategoryid' => 'Özel bir Bayesian kategorisi ile eşleşen ticketlar.',
	'arcreator' => 'Oluşturan',
	'desc_arcreator' => '',
	'creatorstaff' => 'Personel',
	'creatorclient' => 'Kullanıcı',
	'arunassigned' => 'Atanmamış',
	'artemplategroupid' => 'Şablon grubu',
	'desc_artemplategroupid' => '',
	'artickettypeid' => 'Tür',
	'desc_rtickettypeid' => '',
);