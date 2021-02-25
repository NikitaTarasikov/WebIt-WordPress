<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/storage/ssd3/857/16158857/public_html/webit/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'id16158857_webit' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'id16158857_webit_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'N^ji7%rO1TX]z&~E' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'NJ}_1<yN~Dc5~k/-8Kp[RC+qKdm3Iu_ NU)#F5UeH4-)inKa|I&z>bOSa!__$/qW' );
define( 'SECURE_AUTH_KEY',  'NBH]Z~y]zYnulE)}KcBy]j99Z+h}XI,(dqSDK4<zLaW.=[SP$6Ab>hj#BWqjjFLx' );
define( 'LOGGED_IN_KEY',    '2k!/{,$X^{tY;{!!4yI^1[zwb&.0?a (S}R7hNM(;Wow1rw=k$TF1CAFT|9=O~h<' );
define( 'NONCE_KEY',        'JNIP#QS0l3n,U~^v68>,)h[w7=B#%0DT1<z:1q6ReaVKH1ZcDoX]nhO;L=N]GTtH' );
define( 'AUTH_SALT',        'M.LX9W-6l]y3X<d[ y@[5PZe0TOu<O?>dqw#7]Th%_.uPkAH<7#s[oI2dc(ZC-VO' );
define( 'SECURE_AUTH_SALT', 'y)f5sd$)ZJ,A1;DzWc9Q&<-VmLD6J<blR9^upkM8)Kr~!~x5RTfepy*XMvF1uRcK' );
define( 'LOGGED_IN_SALT',   'lC.@VM0ma@Q]5X]oL5^dr|jsy? VsB0Vrh>#q r+~=f|*(A&H)j>.cGqymQydc-l' );
define( 'NONCE_SALT',       '^)h2%rX9mnYrm>Uow9i0B3+o(]B@Qgn2{YuGi-jXUU^yW&l 8=VUJeKCwIqc2tes' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
