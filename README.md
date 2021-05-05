# php8-docker
php8とnginxとmysqlのdocker環境です

## version
- PHP8.0
- Nginx1.19
- MySQL8.0

## セットアップ
- 以下コマンド実行
```sh
$ git clone https://github.com/nsym-m/php8-docker.git
$ cd php8-docker
$ docker-compose up -d
```
- `http://localhost:85`にアクセス

## その他
- PHP-fpmとNginxをunixドメインソケットでつないでいる
- MySQLとPHPもunixドメインソケット
- DBのデータをトップレベルVolumesを使うことで少し早くなるようにしている（未検証）
- Composer, Xdebug導入済み(VSCodeでは動作確認済み)
```sh
# 作業開始時
$ docker-compose up -d

# 作業終了時
$ docker-compose down

# 各コンテナに入る時
$ docker-compose exec php bash
$ docker-compose exec web bash
$ docker-compose exec mysql bash
```
