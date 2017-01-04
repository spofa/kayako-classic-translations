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
	'duetimecleared' => '-TEMİZLENDİ-',

	// Activity Log
	'log_newreply' => 'Cevaplanan Talepler: #%s',
	'log_forward' => 'Yönlendirilen Talep: #%s: %s',
	'log_newticket' => 'Oluşturulan Talep: #% s: %s',

	// Audit Log
	'al_newticket' => '%s (%s) tarafından oluşturulan yeni Talep: Konu: %s', // DONE
	'al_newticket_queue' => '%s (%s) tarafından oluşturulan yeni Talep: Konu: %s, e-posta sırası: %s', // DONE
	'al_newreply' => '%s (%s) tarafından oluşturulan yeni yanıt', // DONE
	'al_watch' => '#%s Talep izleme %s tarafından aktif edilmiştir', // DONE
	'al_owner' => 'Talep sahibi değişti: %s: %s', // DONE
	'al_priority' => 'Talep önceliği değişti: %s: %s', // DONE
	'al_rating' => 'Rating %d added by: %s',
	'al_status' => 'Bilet durumu değiştirildi: %s: %s', // DONE
	'al_statusautoclose' => 'Talep durumu otomatik kapatma tarafından değiştirildi: %s: %s', // DONE
	'al_type' => 'Talep türü değiştirildi: %s: %s', // DONE
	'al_department' => 'Talep departmanı değiştirildi: %s: %s', // DONE
	'al_due' => 'Kapanma süresini ayarla: %s', // DONE
	'al_resolutiondue' => 'Çözüm süresini ayarla: %s', // DONE
	'al_sla' => 'SLA planını ayarla: %s', // DONE
	'al_slaclear' => 'Tanımlı SLA planını silindi', // DONE
	'al_flag' => 'İşaretli Talepler: %s', // DONE
	'al_flagclear' => 'İşaretli talep silindi', // DONE
	'al_duestaffoverdue' => 'Talep gecikmiş olarak işaretlendi', // DONE
	'al_duestaffclear' => 'Talep kapanma süresi temizlendi', // DONE
	'al_resduestaffclear' => 'Talep çözüm süresi temizlendi', // DONE
	'al_ban' => 'Talep oluşturan yasaklandı: Talep ID: #%s, e-posta adresi: %s', // DONE
	'al_merge' => 'Talep Birleştirildi: Talep numarası: #%s, konu: %s, adı: %s, e-posta adress: %s', // DONE
	'al_untrashticket' => 'Çöp kutusundan geri alınan talep: Talep ID: #%s, konu: %s, ad: %s, e-posta adresi: %s', // DONE
	'al_deleteticket' => 'Silinmiş talep: talep numarası: #%s, konu: %s, ad: %s, e-posta adresi: %s', // DONE
	'al_trashticket' => 'Talep çöpe taşınmış: talep numarası: #%s, konu: %s, adı: %s, e-posta adresi: %s', // DONE
	'al_updateticketpost' => 'Talep gönderisi güncellendi: oluşturan: %s (%s)', // DONE
	'al_deleteticketpost' => 'Talep gönderisi silindi: oluşturan: %s (%s)', // DONE
	'al_ticketnote' => 'Talebe talep notu eklendi', // DONE
	'al_usernote' => 'Talebe kullanıcı notu eklendi', // DONE
	'al_deletenote' => 'Talep notu silindi', // DONE
	'al_updatenote' => 'Talep notu güncellendi', // DONE
	'al_delbilling' => 'Talep faturalandırma girişi silindi', // DONE
	'al_ticketbilling' => 'Talep faturalandırma girişi talebe eklendi', // DONE
	'al_updticketbilling' => 'Güncellenmiş talep faturalandırma girişi', // DONE
	'al_delfollowup' => 'Silinmiş bilet takibi', // DONE
	'al_createfollowup' => 'Oluşturulan bilet takibi', // DONE
	'al_updateproperties' => 'Güncellenmiş talep özellikleri: konu: %s > %s, ad: %s > %s, e-posta adresi: %s > %s',

	'al_newforward' => '%s (%s) tarafından oluşturulan yeni ilet mesaj',
	'al_escalated' => '%s kuralı altında yükseltilmiş talep',
	'al_print' => 'Talep %s tarafından yazdırıldı',
	'al_cleardraft' => 'Talep taslağı %s tarafından temizlendi',
	'al_savedraft' => 'Talep taslağı %s tarafından kaydedildi',
	'al_forward' => 'Talep %s tarafından %s\'e yönlendirildi',
	'al_recipientdel' => 'Talep alıcısı: %s, %s tarafından silindi',
	'al_timetrackdel' => 'Zaman izleme girişi #%s %s tarafından silindi',
	'al_timetrack' => '%s tarafından %s için eklenen zaman izleme girişi (çalışılan zaman: %s faturalanabilen zaman: %s)',
	'al_prule' => '%s e-posta kuralı altında işlem gördü',
	'al_statusac' => 'Talep durumu %s  otomatik kapatma tarafından %s olarak değiştirildi.',
	'al_xmlexport' => '%s tarafından XML olarak talep dışa aktarıldı',
	'al_pdfexport' => '%s tarafından PDF olarak dışa aktarılan talepler',
);
?>