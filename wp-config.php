*************************************************
*************************************************

Incluir ANTES de esta línea (la última)

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

**************************************************
**************************************************


/* Configuraciones WP recomendadas. */

define( 'AUTOMATIC_UPDATER_DISABLED', true );
define( 'WP_AUTO_UPDATE_CORE', false );
define( 'WP_POST_REVISIONS', 5);

/* AVADA - configuración recomendada */

define( 'WP_MEMORY_LIMIT', '256M' );
define( 'WP_MAX_MEMORY_LIMIT', '256M' );
