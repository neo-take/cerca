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
 * @link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'cerca');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'cerca_admin');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'm0058089');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' h<(qO*x)MV()_i^GCP1]C@gf`)%)H!o%|_cPE8BS6}~rxs1 cZ|}4NW/Mn)jI/u');
define('SECURE_AUTH_KEY',  'F?aCo`}(Boo0;kkOxjFLD+n<WWL{_m5bz;q-*j%iN%fxv|S |;r#f{E6obllKE{X');
define('LOGGED_IN_KEY',    'Vu&f]V>~7R?RDu~G2r0&Z)*8CLFSn_O-A|c8>zr,Jd^1(`lfu}2%IK0}yyG)5we2');
define('NONCE_KEY',        'KTVcGC6o)>wLw(5^#O&kMN$}X09SqNU>Wd8OsW(]m{]?l!<J.p8@FkpqQ*>.v Nu');
define('AUTH_SALT',        'mXyT9@:R5qdM?Q$6IL$C3AJJ%q>|{p@1}pQm*&eo!=ygZiLVXke6XJ__-jsO4l[x');
define('SECURE_AUTH_SALT', ' U+D<0VNwVo:B=>im[Y?5IMJ.nb.t`yCV?:$wmYCMwU]e$2xt>uIw!6@S^k,pBDX');
define('LOGGED_IN_SALT',   'c,+t8PpENl#d}=jKa-~qaM6 P:oc?B?(BcTVq($nE ]674k=GAO>NY`j6tV6.ho$');
define('NONCE_SALT',       'v%dJ8c:[,bp5dBlOi`~%x8rT~ETCNRBV&OXw/1 S]A&H[>!5bghQhN [U!-+C<G2');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
