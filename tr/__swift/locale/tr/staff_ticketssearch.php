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
	'tsticketid' => 'Talep No',
	'desc_tsticketid' => 'Bir talebin sayısal kimliği (bu, yardım masası tarafından dahili olarak kullanılır - yerine <strong>bilet maske kimliği</strong>arıyor olabilirsiniz).',
	'tsticketmaskid' => 'Talep maskesi kimliği',
	'desc_tsticketmaskid' => 'Bu normal, dış talep (ABC-123-4567).',
	'tsfullname' => 'Alıcının adı',
	'desc_tsfullname' => 'Bir talebe dahil olan alıcıların isimlerini ara (talepleri ve bireysel talep cevaplarını arar).',
	'tsemail' => 'Alıcının e-posta adresi',
	'desc_tsemail' => 'Alıcının e-posta adreslerine göre talepler ara.',
	'tslastreplier' => 'Son cevaplayanın adı',
	'desc_tslastreplier' => 'Bir talebe cevap veren son kişinin ismini ara.',
	'tsreplyto' => '..a cevap',
	'desc_tsreplyto' => 'E-posta başlığında belirtildiği gibi cevapla e-postası. Bu yalnızca e-posta ile oluşturulan biletler için geçerlidir.',
	'tssubject' => 'Talep konusu',
	'desc_tssubject' => 'Bir talebin konusunu arar.',
	'tsmessage' => 'Talep içerikleri',
	'desc_tsmessage' => 'Talep cevaplarının içeriklerini arar.',
	'tsmessagelike' => 'Talep cevap içerikleri (SQL LIKE kullanarak)',
	'desc_tsmessagelike' => 'SQL LIKE arama metodu kullanarak mesaj içerikleri arar.',
	'tsuser' => 'Kullanıcı hesap adı veya e-posta adresleri',
	'desc_tsuser' => 'Kullanıcılar tarafından oluşturulmuş talepleri ara (bu kriterle eşleşen ad veya e-posta adresleri ile).',
	'tsuserorganization' => 'Kullanıcı organizasyonu',
	'desc_tsuserorganization' => 'Taleplere katılan kullanıcıların ve alıcıların organizasyon adını ara.',
	'tsipaddress' => 'IP adresi',
	'desc_tsipaddress' =>  'Eğer bir talep cevabı <strong>destek merkezi</strong>tarafından yapılmışa, yardım masası kullanıcı için bir IP adresi kaydeder.',
	'tscharset' => 'Karakter kümesi',
	'desc_tscharset' => 'Belirli bir karakter kümesinin talepleri.',
	'tsphone' => 'Telefon numarası',
	'desc_tsphone' => 'Taleplere katılan kullanıcıların ve alıcıların telefon numarasını ara.',
	'tstimeworked' => 'Çalışılan zaman',
	'desc_tstimeworked' => 'Saniye cinsinden çalışılan zamana göre talepleri ara (talep faturalama ve zaman izleme girişlerinde).',
	'tstimebilled' => 'Faturalanabilen süre',
	'desc_tstimebilled' => 'Saniye cinsinden faturalanabilen zamana göre talepleri ara (talep faturalama ve zaman izleme girişlerinde).',
	'tsdepartment' => 'Bölüm',
	'desc_tsdepartment' => 'Bir bölüme ait talepler.',
	'tsowner' => 'Sahibi',
	'desc_tsowner' => 'Belirli bir personel kullanıcıya atanmış talepler.',
	'tstype' => 'Tür',
	'desc_tstype' => '',
	'tsstatus' => 'Durum',
	'desc_tsstatus' => '',
	'tspriority' => 'Öncelik',
	'desc_tspriority' => '',
	'tsemailqueue' => 'E-posta kuyruğu',
	'desc_tsemailqueue' => 'Belirli bir e-posta kuyruğu üzerinden e-posta tarafından oluşturulmuş veya cevaplanmış talepler.',
	'tsslaplan' => 'SLA planı',
	'desc_tsslaplan' => 'Şu anda belirli bir SLA planına atanmış talepler.',
	'tsflag' => 'Bayrak',
	'desc_tsflag' => '',
	'tstemplategroup' => 'Şablon grubu',
	'desc_tstemplategroup' => 'Belli bir şablon grubuna ait talepler.',
	'tsescalation' => 'Kural tarafından yükseltilmiş',
	'desc_tsescalation' => 'Belirli bir yükseltme kuralı tarafından yükseltilmiş talepleri ara.',
	'tsbayesian' => 'Bayesian kategorisi',
	'desc_tsbayesian' => 'Özel bir Bayesian kategorisi ile eşleşen talepler.',
	'tsusergroup' => 'Kullanıcı grubu',
	'desc_tsusergroup' => 'Belirli bir kullanıcı grubuna ait olan alıcının olduğu talepler için arar.',
	'tscreator' => '... tarafından oluşturulan talep',
	'desc_tscreator' => '',
	'tscreationmode' => 'Oluşturma modu',
	'desc_tscreationmode' => 'Talepleri nasıl oluşturulduğuna göre arama.',
	'tsdue' => 'Cevap termini',
	'desc_tsdue' => 'Bu süre öncesinde veya sonrasında cevap termini olan talepler.',
	'tsduerange' => 'Cevap termini <range>',
	'desc_tsduerange' => 'Bu zaman dilimi içinde cevap termini olan talepler.',
	'tsresolutiondue' => 'Çözümleme termini',
	'desc_tsresolutiondue' =>  'Bu süre öncesinde veya sonrasında çözümlenme termini olan talepler.',
	'tsresolutionduerange' => 'Çözümlenme termini <range>',
	'desc_tsresolutionduerange' => 'Bu zaman dilimi içinde çözümlenme termini olan talepler.',
	'tscreationdate' => 'Oluşturma Tarihi',
	'desc_tscreationdate' => 'Bu süre öncesinde veya sonrasında oluşturulan talepler.',
	'tscreationdaterange' => 'Oluşturma tarihi <range>',
	'desc_tscreationdaterange' => 'Bu zaman dilimi içinde oluşturulan talepler.',
	'tslastactivity' => 'Son Günellenen',
	'desc_tslastactivity' => 'Bu süre öncesinde veya sonrasında güncellenen talepler (örnek, herhangi biri tarafından cevaplanan veya diğer herhangi bir güncel olay).',
	'tslastactivityrange' => 'Son güncellenme <range>',
	'desc_tslastactivityrange' => 'Bu zaman dilimi içinde güncellenmiş talepler (örnek, herhangi biri tarafından cevaplanmış veya diğer herhangi bir güncel olay).',
	'tslaststaffreply' => 'Personelden son cevap',
	'desc_tslaststaffreply' => 'Bu zaman dilimi içinde bir personel kullanıcıdan cevap alan talepler.',
	'tslaststaffreplyrange' => 'Personelden son cevap <range>',
	'desc_tslaststaffreplyrange' => 'Bu zaman dilimi içinde bir personel kullanıcıdan cevap alan talepler.',
	'tslastuserreply' => 'Kullanıcıdan son cevap',
	'desc_tslastuserreply' => 'Bu zamandan önce veya sonra bir personel kullanıcıdan cevap alan talepler.',
	'tslastuserreplyrange' => 'Kullanıcıdan son cevap <range>',
	'desc_tslastuserreplyrange' => 'Bu zaman dilimi içinde bir kullanıcıdan cevap alan talepler.',
	'tsescalateddate' => 'Yükseltme tarihi',
	'desc_tsescalateddate' => 'Bu zamandan önce veya sonra yükseltilmiş (gecikmiş) talepler.',
	'tsescalateddaterange' => 'Yükseltme tarihi <range>',
	'desc_tsescalateddaterange' => 'Bu zaman dilimi içinde yükseltilmiş (gecikmiş) talepler.',
	'tsresolutiondate' => 'Çözümlenme termini',
	'desc_tsresolutiondate' => 'Bu zamandan önce veya sonra sonuçlandırma termini olan talepler.',
	'tsresolutiondaterange' => 'Çözümlenme termini <range>',
	'desc_tsresolutiondaterange' => 'Bu zaman dilimi içinde sonuçlandırma termini olan talepler.',
	'tsreopendate' => 'Yeniden açılma tarihi',
	'desc_tsreopendate' => 'Bu zaman dilimi içinde, ne zaman tekrar açıldığına göre (bir <strong>çözümlendi</strong> \'den bir <strong>açık</strong> duruma değiştirilmiş) talepleri ara.',
	'tsreopendaterange' => 'Tekrar Açılma Tarihi <range>',
	'desc_tsreopendaterange' => 'Bu zaman dilimi içinde, ne zaman tekrar açıldığına göre (bir <strong>çözümlendi</strong> \'den bir <strong>açık</strong> duruma değiştirilmiş) talepleri ara.',
	'tsedited' => 'Düzenlendi',
	'desc_tsedited' => 'Düzenlenmiş talepler.',
	'tseditedby' => 'Tarafından düzenlendi',
	'desc_tseditedby' => 'Belirli personel kullanıcılar tarafından düzenlenmiş talepleri ara.',
	'tsediteddate' => 'Düzenlenme tarihi',
	'desc_tsediteddate' => 'Bu süre öncesinde veya sonrasında düzenlenmiş talepler.',
	'tsediteddaterange' => 'Tarihi düzenle <range>',
	'desc_tsediteddaterange' =>  'Bu zaman dilimi içinde düzenlenmiş talepler.',
	'tstotalreplies' => 'Toplam cevaplar',
	'desc_tstotalreplies' => 'Bu kadar çok cevapları olan talepler.',
	'tshasnotes' => 'Talebin notları var',
	'desc_tshasnotes' => '',
	'tshasattachments' => 'Talebin ekleri var',
	'desc_tshasattachments' => '',
	'tsisemailed' => 'E-posta ile oluşturulan',
	'desc_tsisemailed' => 'E-posta yoluyla oluşturulan talepler.',
	'tshasdraft' => 'Talebin bir taslağı var',
	'desc_tshasdraft' => 'Onlara kaydolan varsayılan cevaba sahip talepler.',
	'tshasfollowup' => 'Bekleyen takipler',
	'desc_tshasfollowup' => 'Talep takibi olan talepler planlandı.',
	'tsislinked' => 'Talep bir diğerine bağlandı',
	'desc_tsislinked' => 'Bir başkasına bağlı talebi ara',
	'tsisfirstcontactresolved' => 'İlk temasta çözüldü',
	'desc_tsisfirstcontactresolved' => 'İlk cevapta çözülen talepleri ara (bir personel kullanıcı tarafından).',
	'tsaverageresponsetime' => 'Ortalama cevap süresi',
	'desc_tsaverageresponsetime' => 'Belirli bir ortalama cevap süresine sahip talepleri ara (kullanıcı ve personel cevapları arasında).',
	'tsescalationlevelcount' => 'Yükseltme sayısı',
	'desc_tsescalationlevelcount' => 'Kaç kez yükseltildiğine göre talepleri ara (gecikmiş olan).',
	'tswasreopened' => 'Talep tekrar açıldı',
	'desc_tswasreopened' => 'Tekrar açılan talepleri ara (bir <strong>çözümlendi</strong>\'den bir <strong>açık</strong> durumuna değişti).',
	'tsisresolved' => 'Talep çözümlendi',
	'desc_tsisresolved' => 'Çözümlenmiş talepleri ara (bir <strong>çözümlenmiş</strong> duruma ayarla).',
	'tsresolutionlevel' => 'Çözümlenmeden önce talep sahiplerinin sayısı',
	'desc_tsresolutionlevel' => 'Çözümlenmeden önce talebin ne kadar sahibi olduğuna göre talepleri ara.',
	'tsticketnotes' => 'Talep not içeriği',
	'desc_tsticketnotes' => 'Talep notlarının içeriklerini ara.',
	'tsgeneraloptions' => 'Genel talep kriterleri',
	'tsdateoptions' => 'Tarih kriteri',
	'tsmiscellaneous' => 'Çeşitli kriter',

	/**
	 * ---------------------------------------------
	 * OTHER LOCALES
	 * ---------------------------------------------
	 */
	'notapplicable' => '-- Uygulanamaz --',
	'lookup' => 'Arama',
);
?>
