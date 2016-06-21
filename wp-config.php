<?php
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'intranet');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'root');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', 'dbROCKperu??');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ND{-!ER28n~+fj>XFJ2M/X)[Vb;[:V&80+9H<<eIwC^FH:%f>VPS[+x|2.U-/5Sb');
define('SECURE_AUTH_KEY',  '+-||[!:|]>E;P<R&X-jSwFz0_F+Rsu<pW!HS3C!}<-,.I>-zyyE?IDv*zu/?F(1(');
define('LOGGED_IN_KEY',    '}$Us<ad4X_1%cmRX4cF/@|14S/o3@]%6BS>-~A-Rz2{+Qw#;8m=DLJ5>q2||grU$');
define('NONCE_KEY',        'Ehq)[|tW_cgF:F5mSAF@UR}2=H2xt:!k5pUKt.i#CG,#:mcUz?iRDE!bq2(-a!E>');
define('AUTH_SALT',        'BXce|52vcw~,ACl`>$#_*m|XU5k@D^e|9n9uW4Mo*%*R+oCaI^rftZocHyXv<5Gr');
define('SECURE_AUTH_SALT', '-1ywL4Dmm5g$.:SpQ<c=fg@=hujCvXM)`,Vf+w->8?ZS1$0+H-?aICqlF}+j3GDG');
define('LOGGED_IN_SALT',   '4qS@C`0tg>KUdn~5Ma>j/7HCFdvYvE@>u,.7:o]0gx|#N!L;vuGKwm,[BDZ|Exwc');
define('NONCE_SALT',       'MUNm?Lf#vt):,OWXPhN@bw}Tpk#SN|xQ,zvX]l.9~^n:NG7$8cmH+{X}@U+]|Ssq');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');


