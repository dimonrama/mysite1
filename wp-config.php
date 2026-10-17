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
define( 'DB_NAME', 'petro' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'Admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         '$yjVj<L@duE!I./m#}ibWzQ<`uct`^|0G/+gQF2h.T_*:GE{p-7e.v&b|!4(70W<' );
define( 'SECURE_AUTH_KEY',  'v5X}yY!cz<JI:`&Du.(9*-?FmYzr[}aKh=+ON?= IMiZ|*{S5w-Gwi53R3D*ejYq' );
define( 'LOGGED_IN_KEY',    'qk<0pEvY9p;1U1$a]KA@n_)r 2R-psA=TYD|Y9j{}k21|u)q3C8R%y7&i=%Y<|V`' );
define( 'NONCE_KEY',        'E|i>$`6dU2^(/L06^;E DTd3?^SnN,3b%P1/R6CE8Noqdyr`By|d2||@f:dfwbxN' );
define( 'AUTH_SALT',        '[0:6}Zx:,tF-u&Z(t%c`>@N^$0uK<tu4GE S.)W66D}ea^u;bsrx6!=c3pbvbA:A' );
define( 'SECURE_AUTH_SALT', '[{:%9yy{zVpg}D*:]|e6C.G0jFQMsg8_@pDC#*U&r($e?YtT;u;Y6O1xG>b6Oo&l' );
define( 'LOGGED_IN_SALT',   'hoz6-C#.Qi*PfOd*PI^;[^p.-V!zN_X1)C-XcMJYm2*A)rLC{RsaY56nu?lLV0,$' );
define( 'NONCE_SALT',       'gsCHrp4`(HrYOx@uXYdBseB*:sKGs6v9EqqF1-xYrG6:?vR:y*c51R>{p+t;&LOb' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
