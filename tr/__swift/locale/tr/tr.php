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
	'yes'                          => 'Evet',
	'no'                           => 'Hayır',
	'menusupportcenter'            => 'Destek Merkezi',
	'menustaffcp'                  => 'Personel CP',
	'menuadmincp'                  => 'İdare CP',
	'app_notreg'                   => '%s uygulaması kayıtlı değil',
	'event_notreg'                 => '%s olayı kayıtlı değil',
	'unable_to_execute'            => '%s yürütülemiyor',
	'action_notreg'                => '%s eylem kayıtlı değil',
	'username'                     => 'Kullanıcı Adı',
	'password'                     => 'Şifre',
	'rememberme'                   => 'Beni Hatırla',
	'defaulttitle'                 => '%s - Kayako tarafından desteklenmektedir',
	'login'                        => 'Oturum Aç',
	'global'                       => 'Küresel',
	'first'                        => 'İlk',
	'last'                         => 'Son',
	'pagination'                   => 'Sayfa %s\'nin %s\'i',
	'submit'                       => 'Gönder',
	'reset'                        => 'Sıfırla',
	'poweredby'                    => 'Kayako tarafından desteklenen Yardım Masası Yazılımı',
	'copyright'                    => 'Copyright &copy; 2001-%s Kayako',
	'notifycsrfhash'               => 'Kayako bu isteği doğrulamada bir sorunla karşılaştı',
	'titlecsrfhash'                => 'Kayako bu isteği doğrulamada bir sorunla karşılaştı',
	'msgcsrfhash'                  => 'Kayako, siteler arası istek sahteciliklerine karşı korumak için istekleri doğrular ve bu isteği doğrulayamamaktadır. Lütfen tekrar deneyin.',
	'invaliduser'                  => 'Kullanıcı adı veya şifre hatalı',
	'invaliduseripres'             => 'Yetkisiz IP adresi (girişim: %d\'de %d)',
	'invaliduserdisabled'          => 'Bu hesap devre dışı (girişim: %d\'de %d)',
	'invalid_sessionid'            => 'Oturumunuzun süresi dolmuştur, lütfen oturum açın',
	'staff_not_admin'              => 'Kullanıcı yönetici ayrıcalıklarına sahip değildir',
	'sort_desc'                    => 'Azalan Sıralama',
	'sort_asc'                     => 'Artan Sıralama',
	'options'                      => 'Seçenekler',
	'delete'                       => 'Sil',
	'settings'                     => 'Ayarlar',
	'search'                       => 'Arama',
	'searchbutton'                 => 'Arama',
	'actionconfirm'                => 'Devam etmek istediğinize emin misiniz?',
	'loggedout'                    => 'Başarıyla oturum kapandı',
	'view'                         => 'Göster',
	'dashboard'                    => 'Ana Sayfa',
	'help'                         => 'Yardım',
	'size'                         => 'Boyut',
	'home'                         => 'Ana Sayfa',
	'logout'                       => 'Oturumu Kapat',
	'staffcp'                      => 'Personel CP',
	'admincp'                      => 'İdare CP',
	'winapp'                       => 'Kayako Desktop',
	'staffapi'                     => 'Staff API',
	'bytes'                        => 'Bayt',
	'kb'                           => 'Kilobayt',
	'mb'                           => 'Megabayt',
	'gb'                           => 'Gigabayt',
	'noitemstodisplay'             => 'Görüntülenecek öğe yok',
	'manage'                       => 'Yönet',
	'title'                        => 'Başlık',
	'disable'                      => 'Devre Dışı Bırak',
	'enable'                       => 'Etkinleştir',
	'edit'                         => 'Düzenle',
	'back'                         => 'Geri',
	'forward'                      => 'İleri',
	'insert'                       => 'Ekle',
	'edit'                         => 'Düzenle',
	'update'                       => 'Güncelle',
	'public'                       => 'Genel',
	'private'                      => 'Özel',
	'requiredfieldempty'           => 'Gerekli alanlardan biri boş',
	'clifatalerror'                => 'ÖLÜMCÜL HATA',
	'clienterchoice'               => 'Lütfen seçiminizi girin: ',
	'clinotvalidchoice'            => '"%s" geçerli bir seçim değildir; lütfen tekrar deneyin.: ',
	'description'                  => 'Açıklama',
	'success'                      => 'Başarılı',
	'failure'                      => 'Hata',
	'status'                       => 'Durum',
	'date'                         => 'Tarih',
	'seconds'                      => 'Saniye',
	'order'                        => 'Sıra',
	'email'                        => 'E-posta',
	'subject'                      => 'Konu',
	'contents'                     => 'İçerikler',
	'sunday'                       => 'Pazar',
	'monday'                       => 'Pazartesi',
	'tuesday'                      => 'Salı',
	'wednesday'                    => 'Çarşamba',
	'thursday'                     => 'Perşembe',
	'friday'                       => 'Cuma',
	'saturday'                     => 'Cumartesi',
	'am'                           => 'AM',
	'pm'                           => 'PM',
	'pfieldreveal'                 => '[Göster]',
	'pfieldhide'                   => '[Gizle]',
	'loadingwindow'                => 'Yükleniyor...',
	'customfields'                 => 'Özel Alanlar',
	'nopermission'                 => 'Ne yazık ki, bu isteği gerçekleştirmek için izniniz yok.',
	'nopermissiontext'             => 'Ne yazık ki, bu isteği gerçekleştirmek için izniniz yok.',
	'generationdate'               => 'Oluşturulan XML: %s',
	'approve'                      => 'Onayla',
	'paginall'                     => 'Tüm',
	'fullname'                     => 'Tam Adı',
	'onlineusers'                  => 'Çevrim İçi Personel',
	'vardate1'                     => '%dd %dh %dm',
	'vardate2'                     => '%dh %dm %ds',
	'vardate3'                     => '%dm %ds',
	'vardate4'                     => '%ds',
	'reports'                      => 'Raporlar',
	'demomode'                     => 'Eylem demo modunda uygulanamıyor',
	'unmodifiedreport'			 => 'Running the report unmodified as user does not have permission to modify report.',
	'titledemomode'                => 'Devam edilemiyor',
	'msgdemomode'                  => 'Eylem demo modunda uygulanamıyor',
	'filter'                       => 'Filtre',
	'editor'                       => 'Editör',
	'images'                       => 'Görüntüler',
	'tabedit'                      => 'Düzenle',
	'notifyfieldempty'             => 'İstenen alanlardan biri boş',
	'titlefieldempty'              => 'Eksik alanlar',
	'msgfieldempty'                => 'İstenen alanlardan biri boş veya geçersiz veri içermektedir, lütfen girişinizi denetleyin.',
	'save'                         => 'Kaydet',
	'viewall'                      => 'Tümünü Görüntüle',
	'cancel'                       => 'İptal',
	'save'                         => 'Kaydet',
	'tabgeneral'                   => 'Genel',
	'language'                     => 'Dil',
	'loginshare'                   => 'LoginShare',
	'licenselimit_unabletocreate'  => 'Yeni bir personel kullanıcı oluşturulamıyor çünkü lisans limitine ulaşmış bulunmaktasınız',
	'help'                         => 'Yardım',
	'name'                         => 'Ad',
	'value'                        => 'Değer',
	'engagevisitor'                => 'Engage Visitor',
	'inlinechat'                   => 'Satır içi sohbet',
	'url'                          => 'URL',
	'hexcode'                      => 'Hex Code',
	'vactionvariables'             => 'Eylem: Değişkenler',
	'vactionvexp'                  => 'Eylem: Ziyaretçi Deneyimi',
	'vactionsalerts'               => 'Eylem: Personel Bildirimleri',
	'vactionsetdepartment'         => 'Eylem: Bölüm Kur',
	'vactionsetskill'              => 'Eylem: Beceri Kur',
	'vactionsetgroup'              => 'Eylem: Ziyaretçi Grubu Kur',
	'vactionsetcolor'              => 'Eylem: Renk Kur',
	'vactionbanvisitor'            => 'Eylem: Yasak ziyaretçi',
	'customengagevisitor'          => 'Custom Engage Visitor',
	'managerules'                  => 'Kuralları Yönet',
	'open'                         => 'Açık',
	'close'                        => 'Kapalı',
	'titleupdatedswiftsettings'    => '%s ayarlar güncelleştirildi',
	'msgupdatedswiftsettings'      => '%s ayarlar başarıyla güncelleştirildi.',
	'geoipprocessrunning'          => 'GeoIP veritabanı oluşturma işlemi zaten sürüyor',
	'continueprocessquestion'      => 'Bir görev hala yürütülüyor. Bu sayfayı terk ederseniz, iptal edilecek. Devam etmek istiyor musunuz?',
	'titleupdsettings'             => '%s ayarlar güncelleştirildi',
	'type'                         => 'Tür',
	'banip'                        => 'IP (255.255.255.255)',
	'banclassc'                    => 'Sınıf C (255.255.255.*)',
	'banclassb'                    => 'Sınıf B (255.255. *. *)',
	'banclassa'                    => 'Sınıf A (255.*. *. *)',
	'if'                           => 'Eğer',
	'loginlogerror'                => 'Oturum açma %d dakikadır kilitlendi (girişim: %d\'de %d)',
	'loginlogwarning'              => 'Geçersiz kullanıcı adı veya şifre (girişim: %d\'de %d)',
	'na'                           => 'Müsait Değil',
	'redirectloading'              => 'Yükleniyor...',
	'noinfoinview'                 => 'Burada görüntüleyecek bir şey yok',
	'nochange'                     => '--Değişiklik Yok--',
	'activestaff'                  => '-- Aktif Personel --',
	'notificationuser'             => 'Kullanıcı',
	'notificationuserorganization' => 'Kullanıcı Organizasyonu',
	'notificationstaff'            => 'Personel (Sahibi)',
	'notificationteam'             => 'Personel Ekibi',
	'notificationdepartment'       => 'Bölüm',
	'notificationsubject'          => 'Konu: ',
	'lastupdate'                   => 'Son Güncelleme',
	'interface_admin'              => 'İdare CP',
	'interface_staff'              => 'Personel CP',
	'interface_intranet'           => 'İntranet',
	'interface_api'                => 'API',
	'interface_winapp'             => 'Kayako Masaüstü/Personel API',
	'interface_syncworks'          => 'SyncWorks',
	'interface_instaalert'         => 'InstaAlert',
	'interface_pda'                => 'PDA',
	'interface_rss'                => 'RSS',
	'error_database'               => 'Veritabanı',
	'error_php'                    => 'PHP',
	'error_exception'              => 'İstisna',
	'error_mail'                   => 'E-posta',
	'error_general'                => 'Genel',
	'error_loginshare'             => 'LoginShare',
	'loading'                      => 'Yükleniyor...',
	'pwtooshort'                   => 'Çok kısa',
	'pwveryweak'                   => 'Çok zayıf',
	'pwweak'                       => 'Zayıf',
	'pwmedium'                     => 'Orta',
	'pwstrong'                     => 'Güçlü',
	'pwverystrong'                 => 'Çok güçlü',
	'pwunsafeword'                 => 'Olası güvenli olmayan şifre',
	'staffpasswordpolicy'          => '<strong>Şifre gereksinimleri:</strong> Minimum uzunluk: %d karakter, Minimum rakam: %d, Minimum semboller: %d, Minimum büyük harfler: %d',
	'userpasswordpolicy'           => '<strong>Password requirements:</strong> Minimum length: %d characters, Minimum digits: %d, Minimum symbols: %d, Minimum uppercase letters: %d',
	'titlepwpolicy'                => 'Şifre gereksinimleri karşılamıyor',
	'passwordexpired'              => 'Şifre süresi doldu',
	'newpassword'                  => 'Yeni Şifre',
	'passwordagain'                => 'Şifre (tekrar)',
	'passworddontmatch'            => 'Şifreler uyuşmamaktadır',
	'defaulttimezone'              => '-- Varsayılan Saat Dilimi --',
	'tagcloud'                     => 'Etiket Bulutu',
	'searchmodeactive'             => 'Sonuçlar filtrelendi - sıfırlamak için tıklayın',
	'notifysearchfailed'           => '"0" Sonuç bulundu',
	'titlesearchfailed'            => '"0" Sonuç bulundu',
	'msgsearchfailed'              => 'Kayako belirtilen kriterlerle eşleşen herhangi bir kayıt bulamadı.',
	'quickfilter'                  => 'Hızlı Filtre',
	'fuenterurl'                   => 'URL girin:',
	'fuorupload'                   => 'veya Yükle:',
	'errorsmtpconnect'             => 'SMTP sunucusuna bağlanılamıyor',
	'starttypingtags'              => 'Etiketleri eklemek için yazmaya başlayın...',
	'titleinvalidfileext'          => 'Desteklenmeyen resim türü',
	'msginvalidfileext'            => 'Desteklenen resim dosya türleri: gif, jpeg, jpg, png.',
	'notset'                       => '--Ayarlanmamış --',
	'ratings'                      => 'Derecelendirmeler',
	'system'                       => 'Sistem',
	'schatid'                      => 'Sohbet ID',
	'supportcenterfield'           => 'Destek Merkezi:',
	'smessagesurvey'               => 'Mesajlar/Anketler',
	'nosubject'                    => '(konu yok)',
	'nolocale'                     => '(yerel değil)',

	// Easy Dates
	'edoneyear'                    => 'bir yıl',
	'edxyear'                      => '%d yıl',
	'edonemonth'                   => 'bir ay',
	'edxmonth'                     => '%d ay',
	'edoneday'                     => 'bir gün',
	'edxday'                       => '%d gün',
	'edonehour'                    => 'bir saat',
	'edxhour'                      => '%d saat',
	'edoneminute'                  => 'Bir dakika',
	'edxminute'                    => '%d dakika',
	'edjustnow'                    => 'Şimdi',
	'edxseconds'                   => '%d saniye',
	'ago'                          => 'önce',

	// Operators
	'opcontains'                   => 'İçerir',
	'opnotcontains'                => 'İçermez',
	'opequal'                      => 'Eşittir',
	'opnotequal'                   => 'Eşit değildir',
	'opgreater'                    => 'Daha Büyük',
	'opless'                       => 'Daha Az',
	'opregexp'                     => 'Normal İfade',
	'opchanged'                    => 'Değişti',
	'opnotchanged'                 => 'Değişmedi',
	'opchangedfrom'                => '...den değiştirildi',
	'opchangedto'                  => '...a değiştirildi',
	'opnotchangedfrom'             => '...den değiştirilmedi',
	'opnotchangedto'               => '...a değiştirilmedi',
	'matchand'                     => 'VE',
	'matchor'                      => 'YA DA',
	'strue'                        => 'Doğru',
	'sfalse'                       => 'Yanlış',
	'notifynoperm'                 => 'Ne yazık ki, bu isteği gerçekleştirmek için izniniz yok.',
	'titlenoperm'                  => 'Yetersiz izinler',
	'msgnoperm'                    => 'Ne yazık ki, bu isteği gerçekleştirmek için izniniz yok.',
	'cyesterday'                   => 'Dün',
	'ctoday'                       => 'Bugün',
	'ccurrentwtd'                  => 'Geçerli güncel hafta',
	'ccurrentmtd'                  => 'Geçerli güncel ay',
	'ccurrentytd'                  => 'Geçerli güncel ay',
	'cl7days'                      => 'Son 7 gün',
	'cl30days'                     => 'Son 30 gün',
	'cl90days'                     => 'Son 90 gün',
	'cl180days'                    => 'Son 180 gün',
	'cl365days'                    => 'Son 365 gün',
	'ctomorrow'                    => 'Yarın',
	'cnextwfd'                     => 'Tarihten itibaren geçerli hafta',
	'cnextmfd'                     => 'Tarihten itibaren geçerli ay',
	'cnextyfd'                     => 'Tarihten itibaren geçerli yıl',
	'cn7days'                      => 'Sonraki 7 gün',
	'cn30days'                     => 'Önümüzdeki 30 gün',
	'cn90days'                     => 'Sonraki 90 gün',
	'cn180days'                    => 'Sonraki 180 gün',
	'cn365days'                    => 'Sonraki 365 gün',
	'new'                          => 'Yeni',
	'phoneext'                     => 'Telefon: %s',
	'snewtickets'                  => 'Yeni bilet',
	'sadvancedsearch'              => 'Gelişmiş Arama',
	'squicksearch'                 => 'Hızlı Arama:',
	'sticketidlookup'              => 'Talep ID arama:',
	'screatorreplier'              => 'Oluşturan/Cevaplayan:',
	'smanage'                      => 'Yönet',
	'clear'                        => 'Temizle',
	'never'                        => 'Hiçbir zaman',
	'seuser'                       => 'Kullanıcılar',
	'seuserorg'                    => 'Kullanıcı Organizasyonları',
	'manage'                       => 'Yönet',
	'import'                       => 'İçe Aktar',
	'export'                       => 'Dışa Aktar',
	'comments'                     => 'Youmlar',
	'commentdata'                  => 'Youmlar:',
	'postnewcomment'               => 'Yeni bir yorum yaz',
	'replytocomment'               => 'Yoruma cevap',
	'buttonsubmit'                 => 'Gönder',
	'reply'                        => 'Cevapla',

	// Flags
	'purpleflag'                   => 'Mor Bayrak',
	'redflag'                      => 'Kırmızı Bayrak',
	'orangeflag'                   => 'Turuncu Bayrak',
	'yellowflag'                   => 'Sarı Bayrak',
	'blueflag'                     => 'Mavi Bayrak',
	'greenflag'                    => 'Yeşil Bayrak',

	// ======= CALENDAR LOCALE =======
	'calendar'                     => 'Takvim',
	'cal_january'                  => 'Ocak',
	'cal_february'                 => 'Şubat',
	'cal_march'                    => 'Mart',
	'cal_april'                    => 'Nisan',
	'cal_may'                      => 'Mayıs',
	'cal_june'                     => 'Haziran',
	'cal_july'                     => 'Temmuz',
	'cal_august'                   => 'Ağustos',
	'cal_september'                => 'Eylül',
	'cal_october'                  => 'Ekim',
	'cal_november'                 => 'Kasım',
	'cal_december'                 => 'Aralık',

	/**
	 * ###############################################
	 * APP LIST
	 * ###############################################
	 */
	'app_base'                     => 'Temel',
	'app_tickets'                  => 'Talepler',
	'app_knowledgebase'            => 'Bilgi Bankası',
	'app_parser'                   => 'E-posta ayrıştırıcı',
	'app_livechat'                 => 'Canlı Destek',
	'app_troubleshooter'           => 'Sorun Giderici',
	'app_news'                     => 'Haberler',
	'app_core'                     => 'Çekirdek',
	'app_backend'                  => 'Arka uç',
	'app_reports'                  => 'Raporlar',

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