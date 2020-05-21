<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'cobid19' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8mb4' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ':Rr8qDhS)Uh^~gF~RfN76,XLebS};>ZUqw!U!(OX<x7h0zK#OH,&:%cgj!d>fz,@' );
define( 'SECURE_AUTH_KEY',  '1jTc`sV3]3KvaGVV)&$i0mc4[_Ydv&KYzZ7KW@`eKM9D$h~g/68H?Q6Fyvo9_vne' );
define( 'LOGGED_IN_KEY',    '6MUI{%emIz]?vzuC470c$ml-U[Lj)7[Fo[sHS/wLCY9LsX]+ca)Xe621MSJEO,l*' );
define( 'NONCE_KEY',        'tN34P=!L(R yy:I2D%$we&gVtW,FgPzf*2[W)M{d8%QO*t<3L6g.o<2`ys_|^,t<' );
define( 'AUTH_SALT',        'DN(Wbsp]:pwx(J%hgR4mCUE|sM$[6~SQxg]n`p5<!|OWCmjq=4tiOUHX8}2^9YM9' );
define( 'SECURE_AUTH_SALT', 'NSfI~8aL]HN,NS-`A-}yg_mI5f{MK_89ERG0_N>s~]}`I/tY:jj[cM1NS+?p^E79' );
define( 'LOGGED_IN_SALT',   'GP[*5lyLe[8P0c6v;{(e7Q-D`#/7rY9EgtjW#}81Zw>W+rPRtPob!jn{WSUK6j<n' );
define( 'NONCE_SALT',       'z_oS(!cJx1A,`_ HL$~kEN~9T%3$regn.6,oKQ/#eyP?cwqLKI>i.9ley:;-XT(r' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'cobid19_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
