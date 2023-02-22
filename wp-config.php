<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', "artmaximum" );

/** Имя пользователя базы данных */
define( 'DB_USER', "root" );

/** Пароль к базе данных */
define( 'DB_PASSWORD', "root" );

/** Имя сервера базы данных */
define( 'DB_HOST', "localhost" );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ']5&daAJba|gXT@?Zu@0>O9Cvr>d2a.-D-oExz_CfDM~v3!nTh%n~Ov~)g-5,yXN9' );
define( 'SECURE_AUTH_KEY',  'O|tvs5l4Y=2LLL9Q!F2%^kM 9wp-2~;A$8I{8z*9f3K/|-;m9u?jg^6cd$j:oY^5' );
define( 'LOGGED_IN_KEY',    'Rkq y)>>_4blu5212wqg sRwvzh0uQQlVN=MDJ O$7cHQa.aY+E!j$nfh%W `d/}' );
define( 'NONCE_KEY',        '5 Ix*>G,b/0Fwyq|B;+OcQU*DnkwO|ggZlHxNAmr2QhBW&Y25=Wr,v74&>+LENZ;' );
define( 'AUTH_SALT',        '[MIA&B]@([U3E7Bk`XU;mPx1n7,Jaj;uH=j~hl]yc6b@<-17zpNkIu}q[Kh$Jsst' );
define( 'SECURE_AUTH_SALT', 'fO.~5wUD9v7T(^V5~SQgA@?pX?y0P3(q.[i&HU./US$<uv2tbO]uRq;zQ5u8+`t4' );
define( 'LOGGED_IN_SALT',   '1X(zJ:fUan=KKi020w88.(iD5rJ%>n/BTQx>|~s4aW]s~yvDP3R P!p>rBA;3_-,' );
define( 'NONCE_SALT',       'bhR)XvAeA,S3F6?vPzF~TsUlG^y9,-$ou 9$FxZ5C`[}5sAx[N#6-p8aZJr Daoj' );

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

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
define( 'WP_SITEURL', 'http://localhost:8888/worldofyarn.ru/' );
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
