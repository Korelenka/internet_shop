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
define( 'DB_NAME', 'cd10717_shop' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'cd10717_shop' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '4ByqV1kc' );

/** Имя сервера MySQL */
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
define( 'AUTH_KEY',         'vNeT90:U:tu=Ne~Ts!gLZ$&%01i.i8j{%sI/]9iTnpq]q-#lT:17Q@YNQ-e%@r4/' );
define( 'SECURE_AUTH_KEY',  '8_]hM84&Lp`mFMUUv}`e(en~O*`24Ap,T2^%a:^F1ns2%QKmMkr8KKwOLQdm?d7)' );
define( 'LOGGED_IN_KEY',    'D|Hy4||63h|{!>~m%NfvtWd%-?s]wSvH8?|1^u`hI@t=<Z/2_y_F$p0pQJ]xRE2Q' );
define( 'NONCE_KEY',        'pe/}CAz8A rUDym)N8D/XvX&,eJuA4wH^BQYy9tP-Fw?y<5~qxE-s+75Pbb/KYNV' );
define( 'AUTH_SALT',        ' a!|{-Um[y7M(QGi@5q)Gv+X9V-NeM2*PX#0*0n.9l_|^4;i2_5DwXVFHvHT1/BX' );
define( 'SECURE_AUTH_SALT', 'E]2`SoL$PO7EQYH3NoUxPmV5oxy-V5!<<gqlV_~kF-0E; %Ib{|F7AR&8S<deiv;' );
define( 'LOGGED_IN_SALT',   '<GT#9mRH9jMh=JdY! MVB/WgLgA]Z:/+FBV>>OR(6v9xoQM`|{Ych;ak<)aB6e_L' );
define( 'NONCE_SALT',       'dOJ[>BvXW&pgYV)F@/F}`$8Rvy kgObCR,=@+/d}ByZ0nvz^=qU`ldSPGGqtn]>*' );

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
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
