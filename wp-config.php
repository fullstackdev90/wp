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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp_test' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '} u*HO]mXr <]q.CSc*oSC$|BQ*R23Mroz}hN`WoboMzEJKzi%(sHvZ&MB>?#wb7' );
define( 'SECURE_AUTH_KEY',  '/ PI/acSKSZQZeT4#,<7u*<;b4>Q#).yp<?*9JJHlZ>EL=~t0>L.@?3J,/s~-O_m' );
define( 'LOGGED_IN_KEY',    '2w-/)75Dh>3{,Y*<pMz`mSH!D>$+S8+XYtw1+K /n^ZB5KjTdE!k;9=4h5O8G~e.' );
define( 'NONCE_KEY',        'Z#=tuC:[^MbHeuKQdxh?qhBB5)(N{Dk]~-L52]]@DP]%_y|(/&|gjZs^Myj<p-w*' );
define( 'AUTH_SALT',        'a{]%C(`_$P2CTZy2RI$vv,}QYZBmlFQ%BLAGHXg>OL#EiB/ck,hGtWoL,S9/oe !' );
define( 'SECURE_AUTH_SALT', 'w521=mMK2Zrfp V{+1D|ukZb7$R.tb@y=bns?,<>* z.pjGGV%uE;eHgT2j8PqQ!' );
define( 'LOGGED_IN_SALT',   'WNtDo7ADkL3^qfr|;,~B{C+AY$zKUCdjMeS[lLH23`% ?2>!k1}8Jg!>7g&]6R!q' );
define( 'NONCE_SALT',       'ajQE$%WU-<1fKXh5f>mc&fm6T/3.tA+{MAf6Odex}&!*5,DY}q1j%!F_0@fmu<AL' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_test';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
