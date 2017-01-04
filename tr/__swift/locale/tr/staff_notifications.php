<?php
/**
 * ###############################################
 *
 * SWIFT Framework
 * _______________________________________________
 *
 * @author         Varun Shoor
 *
 * @package        SWIFT
 * @copyright      Copyright (c) 2001-2012, Kayako
 * @license        http://www.kayako.com/license
 * @link           http://www.kayako.com
 *
 * ###############################################
 */

$__LANG = array(
	'notifications'                  => 'Bildirimler',
	'manage'                         => 'Yönet',
	'ruletitle'                      => 'Kural başlığı',
	'desc_ruletitle'                 => 'Bildirim kuralı için bir başlık girin.',
	'isenabled'                      => 'Bildirim kuralı etkin',
	'desc_isenabled'                 => 'Toggle whether this rule is enabled or disabled.',
	'ruletype'                       => 'Tür',
	'desc_ruletype'                  => 'Bildirim kuralı aşağıdaki öğelerden biri ile ilişkili olabilir.',
	'next'                           => 'Sonraki',
	'creator'                        => 'Oluşturan',
	'wininsertnotification'          => 'Bildirim ekle',

	'unassigned'                     => '--Atanmamış --',

	'tabgeneral'                     => 'Genel',
	'tabactions'                     => 'İşlemler',
	'insertcriteria'                 => 'Kriter Girin',

	'na_email'                       => 'E-posta',
	'na_sms'                         => 'SMS',
	'na_pool'                        => 'Masaüstü uygulaması',
	'na_staff'                       => 'Kendi personel kullanıcı hesabı',
	'na_staffgroup'                  => 'Takım',
	'na_department'                  => 'Bölüm',
	'na_user'                        => 'Kullanıcı',
	'nactionemaildispatch'           => 'Bilet sahibine e-posta gönder...',
	'desc_nactionemaildispatch'      => '',
	'nadispatchemail'                => 'Diğer e-posta adreslerine e-posta gönder',
	'desc_nadispatchemail'           => '',
	'nadispatchemailstaff'           => 'Diğer personele e-posta gönder',
	'desc_nadispatchemailstaff'      => '',
	'nactionpooldispatch'            => 'Aktif talep sahibine bildiri gönder...',
	'desc_nactionpooldispatch'       => '',
	'nactionpoolcustomdispatch'      => 'Personel',
	'desc_nactionpoolcustomdispatch' => '',
	'notificationruledesc'           => 'Bir bildirim kural türü seçin.',
	'titlenocriteria'                => 'Kriter belirtilmedi',
	'msgnocriteria'                  => 'En az bir kriter bir bildirim kuralı oluşturmak için gereklidir.',
	'titlenotificationinsert'        => 'Bildirim kuralı (%s) oluşturuldu',
	'msgnotificationinsert'          => 'Bildirim kuralı (%s) başarıyla oluşturuldu.',
	'titlenotificationupdate'        => 'Güncellenen bildirim kuralı (%s)',
	'msgnotificationupdate'          => 'Bildirim kuralı (%s) başarıyla güncellendi.',
	'tabnotifyapp'                   => 'Notify App',
	'tabemail'                       => 'E-posta',
	'titleenablenotification'        => 'Etkinleştirilen bildirim kuralları (%d)',
	'msgenablenotification'          => 'Aşağıdaki bildirim kuralları etkinleştirildi:<br />%s',
	'titledisablenotification'       => 'Bildirim kuralları (%d) devre dışı bırakıldı',
	'msgdisablenotification'         => 'Aşağıdaki bildirim kuralları devre dışı bırakıldı:<br />%s',

	'emailprefix'                    => 'E-posta konu öneki',
	'desc_emailprefix'               => 'Bu bildirim kural tarafından gönderilen e-postaları kolayca tanımlamak için bir e-posta konu öneki belirtin.',

	/**
	 * ---------------------------------------------
	 * RULE TYPES
	 * ---------------------------------------------
	 */
	'nrule_chat'                     => 'Sohbet',
	'nrule_message'                  => 'Çevrimdışı ileti',
	'nrule_survey'                   => 'Sohbet Anketi',
	'nrule_ticket'                   => 'Talep',
	'nrule_user'                     => 'Kullanıcı',

	/**
	 * ---------------------------------------------
	 * RULE CRITERIA: TICKETS
	 * ---------------------------------------------
	 */

	'ntickettype'                    => 'Talep türü',
	'desc_ntickettype'               => '',
	'nbayesian'                      => 'Bayesian Kategori',
	'desc_nbayesian'                 => 'Talepler özel bir Bayesian kategorisine eşleştirildi.',
	'notapplicable'                  => '-- Kullanılamaz --',
	'nticketstatus'                  => 'Talep durumu',
	'desc_nticketstatus'             => '',
	'nticketpriority'                => 'Talep önceliği',
	'desc_nticketpriority'           => '',
	'nusergroup'                     => 'Kullanıcı grubu',
	'desc_nusergroup'                => 'Belirli bir kullanıcı grubuna ait olan alıcının olduğu talepler için arama.',
	'ndepartment'                    => 'Talep bölümü',
	'desc_ndepartment'               => 'Bir departmana ait talepler.',
	'nowner'                         => 'Talep sahibi',
	'desc_nowner'                    => 'Belirli bir personel kullanıcıya atanmış talepler.',
	'nunassigned'                    => '-- Atanmamış --',
	'nactivestaff'                   => '-- Aktif Personel --',
	'nemailqueue'                    => 'E-posta kuyruğu',
	'desc_nemailqueue'               => 'Belirli bir e-posta sırası üzerinden e-posta tarafından oluşturulmuş veya cevaplanmış talepler.',
	'nflagtype'                      => 'Talep bayrağı',
	'desc_nflagtype'                 => '',
	'ncreator'                       => '... tarafından oluşturulan talep',
	'desc_ncreator'                  => '',
	'creatorstaff'                   => 'Personel',
	'creatorclient'                  => 'Kullanıcı',
	'nslaplan'                       => 'SLA planı',
	'desc_nslaplan'                  => 'Şu anda belirli bir SLA planına atanmış talepler.',
	'ndaterange'                     => 'Talep oluşturma tarihi <range>',
	'desc_ndaterange'                => 'Bu zaman dilimi içinde oluşturulan talepler.',
	'nlastactivityrange'             => 'Son güncellenen talep <range>',
	'desc_nlastactivityrange'        => 'Bu zaman dilimi içinde güncellenmiş talepler (örnek, herhangi biri tarafından cevaplanmış veya diğer herhangi bir güncel olay).',
	'nlaststaffreplyrange'           => 'Personelden son cevap <range>',
	'desc_nlaststaffreplyrange'      => 'Bu zaman dilimi içinde personel kullanıcıdan cevap alan talepler.',
	'nlastuserreplyrange'            => 'Kullanıcıdan son cevap <range>',
	'desc_nlastuserreplyrange'       => 'Bu zaman dilimi içinde kullanıcıdan cevap alan talepler.',
	'nduerange'                      => 'Cevap termini <range>',
	'desc_nduerange'                 => 'Bu zaman dilimi içinde bir cevap termini olan talepler.',
	'nisoverdue'                     => 'Gecikmiş: Cevap gecikmiş',
	'desc_nisoverdue'                => 'Gecikmiş talepler (çünkü cevap termininden önce cevaplanmamış).',
	'nresolutionduerange'            => 'Çözümlenme termini <range>',
	'desc_nresolutionduerange'       => 'Bu zaman dilimi içinde bir çözüm termini olan talepler.',
	'nisresolutionoverdue'           => 'Gecikmiş: Çözümlenme süresi geçmiş',
	'desc_nisresolutionoverdue'      => 'Gecikmiş talepler (çünkü sonuçlandırma termininden önce çözülmemiş).',
	'ntemplategroup'                 => 'Şablon grubu',
	'desc_ntemplategroup'            => 'Belli bir şablon grubuna ait talepler.',
	'ntimeworked'                    => 'Çalışılan zaman (dakika cinsinden)',
	'desc_ntimeworked'               => 'Bu <strong>çalışılan zaman</strong> değeriyle eşleşen talepler (talep faturalama parçası ve zaman takip girişleri olarak).',
	'ntotalreplies'                  => 'Toplam cevap',
	'desc_ntotalreplies'             => 'Bu kadar çok cevapları olan talepler.',
	'npendingfollowups'              => 'Bekleyen takipler',
	'desc_npendingfollowups'         => 'Planlı talep takibi olan talepler.',
	'nipaddress'                     => 'IP Adresi',
	'desc_nipaddress'                => 'Eğer bir talep cevabı <strong>destek merkezi</strong>tarafından yapılıyorsa, yardım masası kullanıcı için bir IP adresi kaydeder.',
	'nisemailed'                     => 'E-posta ile oluşturulan',
	'desc_nisemailed'                => 'E-posta yoluyla oluşturulan talepler.',
	'nisedited'                      => 'Düzenlendi',
	'desc_nisedited'                 => 'Düzenlenmiş talepler.',
	'nhasnotes'                      => 'Notlar var',
	'desc_nhasnotes'                 => 'Talep notları olan talepler.',
	'nhasattachments'                => 'Ekleri var',
	'desc_nhasattachments'           => 'Dosya ekleri olan talepler.',
	'nisescalated'                   => 'Yükseltilmiş',
	'desc_nisescalated'              => 'En az bir yükseltme kuralı tarafından yükseltilmiş talepler.',
	'nhasdraft'                      => 'Bir taslak var',
	'desc_nhasdraft'                 => 'Onlara kaydolan varsayılan cevaba sahip talepler.',
	'nhasbilling'                    => 'Faturalama ve zaman izleme girişleri var',
	'desc_nhasbilling'               => 'Faturalama ve zaman izleme girişleri olan talepler.',
	'nisphonecall'                   => 'Bir telefon talebi',
	'desc_nisphonecall'              => 'Bir <em>telefon çağrısı</em> türü talebi olarak işaretlenmiş talepler.',
	'nislabeled'                     => 'Etiketlendi',
	'desc_nislabeled'                => 'Etiketlenen talepler.',

	'nticketevent'                   => 'Etkinlik',
	'desc_nticketevent'              => '',
	'tevent_newticket'               => 'Yeni talep oluşturuldu.',
	'tevent_newticketnotes'          => 'Yeni talep notu eklendi.',
	'tevent_newclientreply'          => 'Son kullanıcıdan yeni cevap',
	'tevent_newclientsurvey'         => 'Yeni anket gönderme',
	'tevent_newstaffreply'           => 'Personelden yeni yanıt',
	'tevent_ticketassigned'          => 'Atanan talep',
	'tevent_newuser'                 => 'Yeni kullanıcı kaydı',

	'nuserevent'                     => 'Etkinlik',
	'desc_nuserevent'                => 'Bu kural bu olayı tetikleyecektir.',
);
?>