<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'website');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'ws_admin');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', 'ersz775ml');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DhN%$fammRH1b&B0(qTE53tp].>}0ec:<W-+x?$m7oYx.^iR<TxcfD]6fPy8to}d');
define('SECURE_AUTH_KEY',  'jrtNv.NsXB.woQ&ZFoN$RWo5!1)sq==xRNUFC^[/UY$QPC[3hiDbX ,_hY:Zl>b$');
define('LOGGED_IN_KEY',    '{jJSA<^&kG]+xT^x !1wnM.%[t-EFXR}i-[;[!$Z^GY78DO[F .7Xnt<*TS,)LuS');
define('NONCE_KEY',        '<DA *ghVj<a]}F**=d0`=;kP|!Gu-7++;Qa=xVRNZ{m}fhq*a(AV&IM8PTb8s!GZ');
define('AUTH_SALT',        '%ZWkAX1I0-l#7:]C)`@EBX|v 74/V_zb#w#HI?=m+10adz[,rl@nZ[.~4lC~b_`P');
define('SECURE_AUTH_SALT', 'Ch[x&.nhg7oKzjJAro9gUxJ:{(~az0+L2j]!((_}yj~!%IYy|1-`12nwk;pp4`Eh');
define('LOGGED_IN_SALT',   '{ gQgi5rS{b]6,;rNxsd !Z/@|K74SI|t3_xo.2r@Lv#$p$781/n*K~6pN+bYngQ');
define('NONCE_SALT',       'k4>FMufSF8[xrY_CEF[bb&{>c{,Tf!;w7!KoiLR$S?@Lf42}8Z$<?HS[SN{;=_e!');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'ws_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */

/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
