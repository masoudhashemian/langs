<?php

// Language definitions used in admin-options.php
$lang_admin_options = array(

'Bad HTTP Referer message'			=>	'Bad HTTP_REFERER. If you have moved these forums from one location to another or switched domains, you need to update the Base URL manually in the database (look for o_base_url in the config table) and then clear the cache by deleting all .php files in the /cache directory.',
'Must enter title message'			=>	'Buraya panel başlığı giriniz.',
'Invalid e-mail message'			=>	'Girdiğiniz admin e-mail adresi geçerli değildir.',
'Invalid webmaster e-mail message'	=>	'Girdiğiniz webmaster e-mail adresi geçerli değildir.',
'SMTP passwords did not match'		=>	'You need to enter the SMTP password twice exactly the same to change it.',
'Enter announcement here'			=>	'Buraya anonslarınızı giriniz.',
'Enter rules here'					=>	'Buraya kurallarınızı giriniz.',
'Default maintenance message'		=>	'Forumlar onarimdan dolayı geçiçi olarak kullanım dışıdır. Birkaç dakika içinde tekrar deneyiniz.',
'Timeout error message'				=>	'"Timeout online" değeri "Timeout visit" değerinden daha küçük olmak zorundadır.',
'Options updated redirect'			=>	'Ayarlar Güncenlendi. Yönlendiriliyorsunuz …',
'Options head'						=>	'Ayarlar',

// Essentials section
'Essentials subhead'				=>	'Zorunlu Alanlar',
'Board title label'					=>	'Panel Başlığı',
'Board title help'					=>	'Pano başlığıdır (hersayfanın en üst bölümünde gösterilir) Bu alan  <strong>HTML</strong> içeremeyebilir .',
'Board desc label'					=>	'Pano Açıklaması',
'Board desc help'					=>	'Bu Panonun kısa şekilde açıklanmasıdır(her sayfanın üst tarafında gösterilir). HTML içeremeyebilir.',
'Base URL label'					=>	'Temel URL',
'Base URL help'						=>	'Slash (/) koymaksızın panelin tam URL\'dir. (Ör: http://www.mydomain.com/forums). Bu <strong>alan</strong> bütün administarator ve moderator özelliklerinin çalışması için doğru olmalıdır. Eğer "Bad referer" hatası alıyorsanız, muhtemelen yanlıştır.',
'Timezone label'					=>	'Varsayılan Zaman Dilimi',
'Timezone help'						=>	'Panele üye olan kullanıcıların varsayılan zaman dilimidir.',
'DST label'							=>	'DST Ayarları',
'DST help'							=>	'Daylight (Gün ışığı) ayarlarının kullanılması .',
'Language label'					=>	'Varsayılan Dil',
'Language help'						=>	'Profilinde herhangi dil güncelleme değişikliği yapmayan kullanıcıların varsayılan dil ayarıdır. Eğer bir dil paketi silerseniz bunu güncellemek zorundasınız.',
'Default style label'				=>	'Varsayılan Tema',
'Default style help'				=>	'Profilinde herhangi bir tema değişikliği yapmayan kullanıcıların varsayılan tema ayarıdır.',

// Essentials section timezone options
'UTC-12:00'							=>	'(UTC-12:00) International Date Line West',
'UTC-11:00'							=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'							=>	'(UTC-10:00) Hawaii-Aleutian, Cook Island',
'UTC-09:30'							=>	'(UTC-09:30) Marquesas Islands',
'UTC-09:00'							=>	'(UTC-09:00) Alaska, Gambier Island',
'UTC-08:30'							=>	'(UTC-08:30) Pitcairn Islands',
'UTC-08:00'							=>	'(UTC-08:00) Pacific',
'UTC-07:00'							=>	'(UTC-07:00) Mountain',
'UTC-06:00'							=>	'(UTC-06:00) Central',
'UTC-05:00'							=>	'(UTC-05:00) Eastern',
'UTC-04:00'							=>	'(UTC-04:00) Atlantic',
'UTC-03:30'							=>	'(UTC-03:30) Newfoundland',
'UTC-03:00'							=>	'(UTC-03:00) Amazon, Central Greenland',
'UTC-02:00'							=>	'(UTC-02:00) Mid-Atlantic',
'UTC-01:00'							=>	'(UTC-01:00) Azores, Cape Verde, Eastern Greenland',
'UTC'								=>	'(UTC) Western European, Greenwich',
'UTC+01:00'							=>	'(UTC+01:00) Central European, West African',
'UTC+02:00'							=>	'(UTC+02:00) Eastern European, Central African',
'UTC+03:00'							=>	'(UTC+03:00) Eastern African',
'UTC+03:30'							=>	'(UTC+03:30) Iran',
'UTC+04:00'							=>	'(UTC+04:00) Moscow, Gulf, Samara',
'UTC+04:30'							=>	'(UTC+04:30) Afghanistan',
'UTC+05:00'							=>	'(UTC+05:00) Pakistan',
'UTC+05:30'							=>	'(UTC+05:30) India, Sri Lanka',
'UTC+05:45'							=>	'(UTC+05:45) Nepal',
'UTC+06:00'							=>	'(UTC+06:00) Bangladesh, Bhutan, Yekaterinburg',
'UTC+06:30'							=>	'(UTC+06:30) Cocos Islands, Myanmar',
'UTC+07:00'							=>	'(UTC+07:00) Indochina, Novosibirsk',
'UTC+08:00'							=>	'(UTC+08:00) Greater China, Australian Western, Krasnoyarsk',
'UTC+08:45'							=>	'(UTC+08:45) Southeastern Western Australia',
'UTC+09:00'							=>	'(UTC+09:00) Japan, Korea, Chita, Irkutsk',
'UTC+09:30'							=>	'(UTC+09:30) Australian Central',
'UTC+10:00'							=>	'(UTC+10:00) Australian Eastern',
'UTC+10:30'							=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'							=>	'(UTC+11:00) Solomon Island, Vladivostok',
'UTC+11:30'							=>	'(UTC+11:30) Norfolk Island',
'UTC+12:00'							=>	'(UTC+12:00) New Zealand, Fiji, Magadan',
'UTC+12:45'							=>	'(UTC+12:45) Chatham Islands',
'UTC+13:00'							=>	'(UTC+13:00) Tonga, Phoenix Islands, Kamchatka',
'UTC+14:00'							=>	'(UTC+14:00) Line Islands',

// Timeout Section
'Timeouts subhead'					=>	'Zaman ve Zamanaşımları',
'Time format label'					=>	'Zaman Biçimi',
'PHP manual'						=>	'PHP manual',
'Time format help'					=>	'[Geçerli Biçim: %s]. Biçim ayarları için %s bknz. .',
'Date format label'					=>	'Tarih Biçimi',
'Date format help'					=>	'[Geçerli Biçim: %s].Biçim ayarları için %s bknz.',
'Visit timeout label'				=>	'Ziyaret Zamanaşımı',
'Visit timeout help'				=>	'En son ziyaretinden girilen değer kadar saniye uzakda olan kullanıcının zamanaşımına uğramasıdır. (Yeni mesajların görüntülenmesini etkiler).',
'Online timeout label'				=>	'Çevrimiçi Zamanaşımı',
'Online timeout help'				=>	'Girilen değer kadar saniye uzakta olan kullanıcı çevrimiçi listesinden silinir.',
'Redirect time label'				=>	'Yönlendir zamanı',
'Redirect time help'				=>	'Girilen değer kadar saniye sonra yönlendirme yapılır. Eğer 0 değer atanırsa herhangi bir yönlendirme sayfası gösterilmeyecekdir. (tavsiye edilmez).',

// Display Section
'Display subhead'					=>	'Görüntü',
'Version number label'				=>	'Versiyon Numarası',
'Version number help'				=>	'FluxBB versiyonunu alt tarafta göster.',
'Info in posts label'				=>	'Gönderi\'de Kullanıcı Bilgisi',
'Info in posts help'				=>	'Gönderi içinde gönderi yapan kullanıcıların kullanıcı bilgilerinin gösterilmesini sağlar. Yaşadığı Şehri, kayıt olma tarihi Gönderi sayısı ve e-mail,URL gibi bilgileri içerir. (email and URL).',
'Post count label'					=>	'Kullanıcı Gönderi Sayısı',
'Post count help'					=>	'Kullanıcının gönderi sayısını gösterir. (Kullanıcı listesinde,profilde ve gönderi içinde işlenir.).',
'Smilies label'						=>	'Gönderi ifadeleri',
'Smilies help'						=>	'İfadeleri gönderi içinde küçük ikonlara dönüştür.',
'Smilies sigs label'				=>	'İmza ifadeleri',
'Smilies sigs help'					=>	'İfadeleri imza içinde küçük grafik ikonlara dönüştür.',
'Clickable links label'				=>	'Tıklanabilen Linkler',
'Clickable links help'				=>	'Aktif hale getirildiği zaman, FluxBB herhangi bir URL tespit ettiği zaman bunu tıklanabilir hale getirir.',
'Topic review label'				=>	'Mesaj Sayısı Gösterimi',
'Topic review help'					=>	'Bir konu içinde yanıtlama yaparken girilen değer kadar mesaj gösterilir. Deaktif etmek için 0 yapınız.',
'Topics per page label'				=>	'Sayfa Başına Konu',
'Topics per page help'				=>	'Sayfa başına gösterilecek konu sayısını gösterir. Kullanıcılar bu ayarı kendi ayarlarından kişiselleştirebilir.',
'Posts per page label'				=>	'Konu Mesaj Sayısı',
'Posts per page help'				=>	'Konu içinde gösterilecek maksimum mesaj sayısıdır. Kullanıcılar bu ayarı kendi ayarlarından kişiselleştirebilir.',
'Indent label'						=>	'Indent size',
'Indent help'						=>	'If set to 8, a regular tab will be used when displaying text within the [code][/code] tag. Otherwise this many spaces will be used to indent the text.',
'Quote depth label'					=>	'Maximum [quote] depth',
'Quote depth help'					=>	'The maximum times a [quote] tag can go inside other [quote] tags, any tags deeper than this will be discarded.',

// Features section
'Features subhead'					=>	'Özellikler',
'Quick post label'					=>	'Hızlı Yanıt',
'Quick post help'					=>	'Eğer aktif ise, FluxBB sayfanın yukarısına hızlı yanıt verebileceğiniz bir buton koyar. Bu şekilde kullanıcılar direkt olarak cevap verebilirler.',
'Users online label'				=>	'Çevrimiçi Kullanıcılar',
'Users online help'					=>	'Ana sayfada misafirlerin ve kayıtlı kullanıcıların çevrimiçi hareketlerini gösterir.',
'Censor words label'				=>	'Sansür Kelimeler',
'Censor words help'					=>	'Aktif hale getirerek sansürleme özelliğini kullanabilirsiniz. Daha fazla bilgi için %s tıklayınız.',
'Signatures label'					=>	'İmzalar',
'Signatures help'					=>	'Kullanıcıların imza kullanma yetkisine izin ver.',
'User has posted label'				=>	'User has posted earlier',
'User has posted help'				=>	'This feature displays a dot in front of topics in viewforum.php in case the currently logged in user has posted in that topic earlier. Disable if you are experiencing high server load.',
'Topic views label'					=>	'Başlık Görüntüleme',
'Topic views help'					=>	'Bir başlığın kaç kez görüntülendiğini gösterir. Çok fazla server içi yükleme bulunuyorsa deaktif ediniz.',
'Quick jump label'					=>	'Hızlı Geçiş',
'Quick jump help'					=>	'Forumlar arası hızlı geçiş sağlar.',
'GZip label'						=>	'GZip output',
'GZip help'							=>	'If enabled, FluxBB will gzip the output sent to browsers. This will reduce bandwidth usage, but use a little more CPU. This feature requires that PHP is configured with zlib (--with-zlib). Note: If you already have one of the Apache modules mod_gzip or mod_deflate set up to compress PHP scripts, you should disable this feature.',
'Search all label'					=>	'Bütüm Forumlarda Ara',
'Search all help'					=>	'Deaktif seçildiği zaman arama sadece bir forum içinde gerçekleştirilicekdir.Server içinde çok fazla yükleme varsa deaktif ediniz.',
'Menu items label'					=>	'İlave menü öğeleri',
'Menu items help'					=>	'Yukaridaki metin kutusuna bir HTML link\'i girerek , sayfanın yukarısındaki navigasyon menüsüne istediğiniz miktarda öğe ekleyebilirsiniz. Yeni link ekleme biçim:  X = &lt;a href="URL"&gt;LINK&lt;/a&gt; olmalıdır. X yazan yere link\'in hangi konumda olmasını istiyorsanız o değeri girin (Ör: Başlangıçta olması için 0 "Kullanıcı Listesi" den sonra olması için 2). Girişleri satır sonu ile birbirinden ayırınız.',

// Feeds section
'Feed subhead'						=>	'Beslemeler(caches)',
'Default feed label'				=>	'Varsayılan besleme biçimi',
'Default feed help'					=>	'Görüntülemek istediğiniz beslemeler şeklini seçiniz. Not: Hicbirini seçmek hiçbir beslemenin görüntülenmeyeceği anlamına gelir.',
'None'								=>	'Hiçbiri',
'RSS'								=>	'RSS',
'Atom'								=>	'Atom',
'Feed TTL label'					=>	'Beslemeleri saklama süresi',
'Feed TTL help'						=>	'Beslemelerin kullanımını azaltmak için belirtilen süre kadar saklanabilir.',
'No cache'							=>	'Biriktirme',
'Minutes'							=>	'%d dakika',

// Reports section
'Reports subhead'					=>	'Raporlar',
'Reporting method label'			=>	'Raporlama metodu',
'Internal'							=>	'Kurum İçi',
'By e-mail'							=>	'E-mail',
'Both'								=>	'Hepsi',
'Reporting method help'				=>	'Başlık ve Gönderi rapolarına işlenecek raporlama şeklini seçiniz. Bu seçeneklerden Kurum içi yada E-mail seçenekleri ile beraber mail listesinde (Aşağı bknz.) her ikisinide yazabilirsiniz.',
'Mailing list label'				=>	'Mail Listesi',
'Mailing list help'					=>	'Birbirinden ayırmak için virgül kullanarak bir sonraki adresi giriniz.',

// Avatars section
'Avatars subhead'					=>	'Avatarlar',
'Use avatars label'					=>	'Avatar kullan',
'Use avatars help'					=>	'Aktif ise,Kullanıcılar kendi başlıkları altında görüntülenecek avatarı yükleyebileceklerdir.',
'Upload directory label'			=>	'Yükleme Dizini',
'Upload directory help'				=>	'Avatar yükleme dizini (FluxBB root dizinine bağlıdır). PHP bu dizine yazma yetkilerine sahip olmak zorundadır.',
'Max width label'					=>	'Maksimum Genişlik',
'Max width help'					=>	'Pixel\'de maksimum görüntü genişliğini ayarlar. (60 tavsiye edilir).',
'Max height label'					=>	'Maksimum Yükseklik',
'Max height help'					=>	'Pixel\'de maksimum görüntü denişliğini ayarlar. (60 tavsiye edilir).',
'Max size label'					=>	'Maksimum Boyut',
'Max size help'						=>	'Byte olarak maksimum görüntü boyutunu ayarlar. (10240 tavsiye edilir).',

// E-mail section
'E-mail subhead'					=>	'E-mail',
'Admin e-mail label'				=>	'Admin e-mail',
'Admin e-mail help'					=>	'Yönetici e-mail Panosu.',
'Webmaster e-mail label'			=>	'Webmaster e-mail',
'Webmaster e-mail help'				=>	'Bu adres board tarafından alınan bütün maillerin gönderileceği maildir.',
'Forum subscriptions label'			=>	'Forum Aboneliği',
'Forum subscriptions help'			=>	'Kullanıcıların foruma abone olmasına izin ver. (Herhangi bir kullanıcı başlık açtığında e-mail bildirilir).',
'Topic subscriptions label'			=>	'Başlık Aboneliği',
'Topic subscriptions help'			=>	'Başlıklara abone olma seçeneğini aktif eder. (Herhangi bir kullanıcı yanıt verdiğinde e-mail ile bildirilir).',
'SMTP address label'				=>	'SMTP sunucu adresi',
'SMTP address help'					=>	'Harici SMTP sunucu adresi bu e-mail ile gönderilicekdir. Eğer SMTP sunucu varsayılan port 25 ile çalışmıyorsa , özel bir port belirtebilirsiniz. (Ör: mail.myhost.com:3580). Yerel mail programını kullanmak için boş bırakınız.',
'SMTP username label'				=>	'SMTP Kullanıcı adı',
'SMTP username help'				=>	'SMTP sunucusu için kullanıcı adı giriniz. Sadece SMTP sunucusundan istek geldiği zaman bir kullanıcı adı giriniz. (Birçok sunucu istek doğrulama yapmaz).',
'SMTP password label'				=>	'SMTP şifre',
'SMTP change password help'			=>	'Depolanan geçerli şifreyi silmek veya değiştirmek istediğiniz zaman işaretleyiniz.',
'SMTP password help'				=>	'SMTP sunucusu için şifre giriniz. Sadece SMTP sunucusundan istek geldiği zaman bir şifre giriniz. (Birçok sunucu istek doğrulama yapmıyor). Lütfen onaylamak için şifrenizi 2 kere giriniz.',
'SMTP SSL label'					=>	'SSL kullanarak SMTP şifrele',
'SMTP SSL help'						=>	'SSL kullanrak SMTP sunucusuna bağlanmayı şifreler.Sadece SMTP sunucusu istek gönderirse ve PHP versiyonu SSL\yi destekliyorsa kullanılabilir.',

// Registration Section
'Registration subhead'				=>	'Kayıt Olma',
'Allow new label'					=>	'Yeni kayıt olma işlemine izin ver',
'Allow new help'					=>	'Bu board\'un yeni kayıt olma işlemlerini kabul edip etmediği kontrol et. Sadece özel durumlarda deaktif hale getiriniz.',
'Verify label'						=>	'Kayıt Olma İşlemleri Onayı',
'Verify help'						=>	'Aktif hale geldiği zaman,kullanıcıya üye oldugunda rastgele bir şifre maili gönderilir. Bu şifre ile giriş yapabilir ve daha sonra profil kısmından şifreyi değiştirebilirler. Bu özellik aynı zamanda üye oldukları e-mail adresini değiştirdiklerinde onay e-mail i almalarınıda sağlar. Bu üye olma işlemini kötüye kullanmayı engellemek ve bütün kullanıcıların geçerli bir e-mail adresi kullandıklarından emin olmak için en etkili yoldur.',
'Report new label'					=>	'Yeni Kayıt İşlemlerini Raporla',
'Report new help'					=>	'Eğer aktif ise, Yeni bir kullanıcı kayıt işlemi gerçekleştirdiğinde ,FluxBB kullanıcıları mail listesinde bildiricekdir.(Yukarı bknz.) .',
'Use rules label'					=>	'Kullanıcı Forum Kuralları',
'Use rules help'					=>	'Eğer aktif ise, Kullanıcı kullanım kosulları okuyup kabul etmek zorundadır (Metni aşağıya giriniz). Kurallar sayfanın üst tarafındaki navigasyon sekmesinde bir link aracılığı ile mevcut halde bulunucakdır.',
'Rules label'						=>	'Kurallarınızı buraya giriniz',
'Rules help'						=>	'Buraya herhangi bir kural yada üye olan kişinin görüntülemesi ve kabul etmesi gereken diğer bilgileri giriniz. Eğer yukarıda kurallar aktif ise buraya kuralları yazmak zorundasın, aksi  halde tekrar deaktif hale geçecekdir. Bu metin düzenli gönderi kapsamaz ve bundan dolayı HTML içerebilir.',
'E-mail default label'				=>	'Varsayılan e-mail ayarları',
'E-mail default help'				=>	'Yeni kullanıcı kayıtı için varsayılan kullanıcı gizlilik ayarlarını seçiniz.',
'Display e-mail label'				=>	'E-mail adresi bilgilerini başka kullanıcılara göster.',
'Hide allow form label'				=>	'E-mail adres bilgilerini sakla fakat .',
'Hide both label'					=>	'E-mail adres bilgilerini sakla ve disallow form email.',

// Announcement Section
'Announcement subhead'				=>	'Duyurular',
'Display announcement label'		=>	'Duyuruları Görüntüle',
'Display announcement help'			=>	'Panoda aşağıya girilen metnin görüntülenmesini etkinleştirir.',
'Announcement message label'		=>	'Duyuru Mesajı',
'Announcement message help'			=>	'Bu metin düzenli gönderi kapsamaz ve bundan dolayı HTML içerebilir.',

// Maintenance Section
'Maintenance subhead'				=>	'Onarımlar',
'Maintenance mode label'			=>	'Onarım modu',
'Maintenance mode help'				=>	'Aktif hale geldiği zaman, Pano sadece yöneticiler tarafından kullanılabilir. Eğer pano bakım için parçalara ayrılması gerekiyorsa kullanılmalıdır. <strong>UYARI! Onarım modunda kesinlikle çıkış yapmayınız.</strong> Aksi takdirde tekrar giriş yapamayabilirsiniz.',
'Maintenance message label'			=>	'Bakım Mesajı',
'Maintenance message help'			=>	'Pano Onarım modundayken bu mesaj kullanıcılara gösterilicekdir . eğer boş bırakırsanız, varsayılan mesaj kullanılıcakdır. Bu metin düzenli gönderi kapsamaz ve bundan dolayı HTML içerebilir.',

);
