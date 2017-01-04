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
	'kqlparseerror'                        => 'Ayrıştırma hatası: %s',

	/**
	 * ---------------------------------------------
	 * Table Labels
	 * ---------------------------------------------
	 */
	'departments'                          => 'Bölümler',
	'staff'                                => 'Personel',
	'teams'                                => 'Takımlar',
	'userorganizations'                    => 'Kullanıcı organizasyonları',
	'usergroups'                           => 'Kullanıcı grupları',
	'users'                                => 'Kullanıcılar',
	'useremails'                           => 'Kullanıcı e-postaları',
	'ratings'                              => 'Derecelendirmeler',
	'ratingresults'                        => 'Derecelendirme Sonuçları',
	'taglinks'                             => 'Etiket Bağlantıları',
	'tags'                                 => 'Etiketler',

	/**
	 * ---------------------------------------------
	 * Table Aliases
	 * ---------------------------------------------
	 */
	'staffgroup'                           => 'Personel Grubu',

	/**
	 * ---------------------------------------------
	 * Custom Labels
	 * ---------------------------------------------
	 */
	'custom_tickets'                       => 'Talepler',
	'custom_livechat'                      => 'Canlı Sohbet',
	'custom_public'                        => 'Genel',
	'custom_private'                       => 'Özel',
	'custom_shared'                        => 'Paylaşılan',
	'custom_restricted'                    => 'Kısıtlanmış',
	'custom_guest'                         => 'Konuk',
	'custom_registered'                    => 'Kayıtlı',
	'custom_user'                          => 'Kullanıcı',
	'custom_manager'                       => 'Yönetici',
	'custom_nosalutation'                  => '',
	'custom_mr'                            => 'Bay',
	'custom_ms'                            => 'Bayan',
	'custom_mrs'                           => 'Bayan',
	'custom_dr'                            => 'Dr.',

	/**
	 * ---------------------------------------------
	 * Field Labels
	 * ---------------------------------------------
	 */

	// Departments
	'departments_departmentid'             => 'Bölüm Kimliği',
	'departments_title'                    => 'Bölüm',
	'departments_departmentapp'            => 'App',
	'departments_displayorder'             => 'Görüntüleme Sırası',
	'departments_parentdepartmentid'       => 'Üst Bölüm',
	'departments_departmenttype'           => 'Tür',

	// Staff
	'staff_staffid'                        => 'Personel Kimliği',
	'staff_firstname'                      => 'Ad',
	'staff_lastname'                       => 'Soyad',
	'staff_fullname'                       => 'Tam Adı',
	'staff_username'                       => 'Kullanıcı Adı',
	'staff_designation'                    => 'Designation',
	'staff_email'                          => 'E-posta',
	'staff_lastvisit'                      => 'Son Ziyaret',
	'staff_isenabled'                      => 'Etkin',
	'staff_staffgroup'                     => 'Takım',

	// StaffGroup/Team
	'staffgroup_staffgroupid'              => 'Takım Kimliği',
	'staffgroup_title'                     => 'Takım',
	'staffgroup_isadmin'                   => 'Yönetici',

	// UserOrganizations
	'userorganizations_userorganizationid' => 'Kullanıcı Organizasyon Kimliği',
	'userorganizations_organizationname'   => 'Ad',
	'userorganizations_organizationtype'   => 'Tür',
	'userorganizations_address'            => 'Adres',
	'userorganizations_city'               => 'Şehir',
	'userorganizations_state'              => 'Eyalet',
	'userorganizations_postalcode'         => 'Posta kodu',
	'userorganizations_country'            => 'Ülke',
	'userorganizations_phone'              => 'Telefon',
	'userorganizations_fax'                => 'Faks',
	'userorganizations_website'            => 'Web sitesi',
	'userorganizations_dateline'           => 'Oluşturma Tarihi',
	'userorganizations_lastupdate'         => 'Son Güncelleme',
	'userorganizations_slaplanid'          => 'SLA Planı',
	'userorganizations_slaexpirytimeline'  => 'SLA Son Kullanma',
	'userorganizations_usergroupid'        => 'Kullanıcı Grubu',

	// UserGroups
	'usergroups_usergroupid'               => 'Kullanıcı Grubu Kimliği',
	'usergroups_title'                     => 'Kullanıcı Grubu',
	'usergroups_grouptype'                 => 'Kullanıcı Grubu Türü',

	// Users
	'users_userid'                         => 'Kullanıcı Kimliği',
	'users_usergroupid'                    => 'Kullanıcı Grubu',
	'users_userorganizationid'             => 'Kullanıcı Kuruluşu',
	'users_userrole'                       => 'Rol',
	'users_salutation'                     => 'Selamlama',
	'users_fullname'                       => 'Tam Adı',
	'users_userdesignation'                => 'Görevlendirme',
	'users_phone'                          => 'Telefon',
	'users_dateline'                       => 'Oluşturma Tarihi',
	'users_lastupdate'                     => 'Son Güncelleme',
	'users_lastvisit'                      => 'Son Ziyaret',
	'users_slaplanid'                      => 'SLA Planı',
	'users_slaexpirytimeline'              => 'SLA Son Kullanma',
	'users_userexpirytimeline'             => 'Süre sonu',
	'users_isvalidated'                    => 'Doğrulanır',

	// UserEmails
	'useremails_useremailid'               => 'Kullanıcı E-posta Kimliği',
	'useremails_linktypeid'                => 'Kullanıcı',
	'useremails_email'                     => 'E-posta',

	// Ratings
	'custom_benchtickets'                  => 'Talepler',
	'custom_benchticketposts'              => 'Talep Yazıları',
	'custom_benchchatsurvey'               => 'Sohbet Anketi',
	'custom_benchchathistory'              => 'Sohbet Geçmişi',
	'ratings_ratingid'                     => 'Derecelendirme Kimliği',
	'ratings_ratingtitle'                  => 'Başlık',
	'ratings_ratingtype'                   => 'Tür',
	'ratings_ratingvisibility'             => 'Görünürlük',

	// RatingResults
	'ratingresults_ratingresultid'         => 'Derecelendirme Sonuç Kimliği',
	'ratingresults_dateline'               => 'Derecelendirme Tarihi',
	'ratingresults_ratingresult'           => 'Puan',
	'ratingresults_ratingid'               => 'Derecelendirme',

	// TagLinks
	'taglinks_taglinkid'                   => 'Etiket Bağlantı Kimliği',
	'taglinks_tagid'                       => 'Etiket',

	// Tags
	'tags_tagid'                           => 'Etiket Kimliği',
	'tags_tagname'                         => 'Ad',

);
?>