■要件
https://iphone-mania.jp/news-289821/


■やったこと
WordPressのインストール
MailPoetのインストール
　・MAILPOET NEWSLETTERS (WYSIJA)：https://ja.wordpress.org/plugins/wysija-newsletters/
　・入力フォーム作成
　　・メールアドレス
　　・店コード
　・ショートコードをコピーしておく
固定ページでMailPoetのショートコードを貼り付けて公開
　・公開ページのURLをコピーする
QR Redirectorのインストール
　・QR Redirects から Add QR Redirect で新規作成
　　公開したURLを使用して作成する

■メール配信
店コードをセグメント指定してメール送信する



■備考
・店コードごとに入力フォームと固定ページとQRコードを作成する
　・JavaScriptの実装をすれば上記の手間は不要
　　（QRコード作成時に店コードを変更して、店コードごとに違うQRコードを作成する。
　　　GETパラメータの店コードを、店コード欄に初期設定する。
　　　店コード欄をdisplay:noneするCSSを適用させる。
　　　想定実装時間60分）



■結論
アプリケーション側は余裕。
サーバー構築は分散が必要なので、インフラ費用次第
（max 5000アクセス/分 ぐらい？）


