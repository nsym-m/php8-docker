# php8-docker
php8とnginxとmysqlのdocker環境です

## version
- PHP8.0
- Nginx1.19
- MySQL8.0

## その他
- PHP-fpmとNginxをunixドメインソケットでつないでいる
- MySQLとPHPもunixドメインソケット
- DBのデータをトップレベルVolumesを使うことで少し早くなるようにしている（未検証）
- Composer, Xdebug導入済み
