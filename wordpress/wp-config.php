<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'test' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KX<!VQ>E;)@]w[#V@=VmswH C69@04!C]PPdB6Q;SVMY+Xdqps|,n/Fty[F@{C(M' );
define( 'SECURE_AUTH_KEY',  '!95{D(8MKexT1#YmITX%pGeud|&+K4Z|[eSml##GmKW/S7JTcS/T3Z(.3,J6?-5y' );
define( 'LOGGED_IN_KEY',    '!6;FZW}!lgAhS+rTI;<?gxljTGm U];l*)A4I({$;]:8/|[&znE##KX-_WnUjY;g' );
define( 'NONCE_KEY',        'X3_syGRAG@El8 !8@O$p7-s0a>%Nf<AjsJU.c6<`%%=|aI=Tx&Z{j/9KTXDD)Z0A' );
define( 'AUTH_SALT',        '4QH@oFXm^RVRdy;`[*ni<g|,DIdc;-C3+Qom_#-z1a5PT;zssXq}@G0B9L}QQX i' );
define( 'SECURE_AUTH_SALT', 'Y#uNwCie$>QF/Ab.;-Rj4>4evQ-rvR:};z|KEq8;t]Wq_t@mnRCC@bvPVJmnSvPt' );
define( 'LOGGED_IN_SALT',   '/[O1H<fv.T/kl(/+YuLU]#n@]lW6YUO&Topa4>0Em@0OW<<U6cAS`DwVYeKJ2!(q' );
define( 'NONCE_SALT',       'zi9Vx>_QmP@~/:-P9gDY>291Y*$QM$b;ZPK@8Djtdw}H=&NRa#+0}U*CO=2`3?th' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
