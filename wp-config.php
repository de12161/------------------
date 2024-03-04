<?php
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
define( 'DB_NAME', '328-22_98830' );

/** Имя пользователя базы данных */
define( 'DB_USER', '328-22_98830' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '1d5757962d9b3442c45c' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ',DLXG7*b*y^F#9YG}48$mM/mOnL#F+l[{_h%c@ME-es!3lzAfDOgYQ=AvFV]DZ@K' );
define( 'SECURE_AUTH_KEY',  '?H.$`GGS-&&9Uds;=>_Ct[)wH:$||YD6sD^QqgCJO*Dtq0!iJl*Y>wy0-RBkkQca' );
define( 'LOGGED_IN_KEY',    '3Ua~jt,<8;In32LxK=.c}KiI_5P2GxrowZatX[!iT4X=g&O)M$gR3p66o}FrJbvU' );
define( 'NONCE_KEY',        'A$J<>O]DXILoLLu.C:?FdvP|]XC8T%.*o0=)h?m q{P|6Y7O]DjPEyZuO..^4eT~' );
define( 'AUTH_SALT',        '>{H8G,Tz1EL.K26R9zXqt;f@O+Boim!w(WZUQnr>m#]Yg)u8}vC-fW7S2lfX?)J~' );
define( 'SECURE_AUTH_SALT', 'ed7jl?#w)#^Bn&d<zE4xkD4yl|d`Ve]fCz$7mU*HY]TD^1T`onYI<F]66hzIW5jl' );
define( 'LOGGED_IN_SALT',   'E$sGg9RjK_G2m_EmT3y>5Lu x>_mbM:jc5yM)DDl+d1V7s3b|aH#_!64AP3>dw<f' );
define( 'NONCE_SALT',       'gBtzN@+bhV5EU{W|*`~{u*Z?$tj:IcfHA3fw@&1[-){If&kj/ef6,)C,RpZ)l^Bd' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'DJEe8_';


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
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';