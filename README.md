# EC-CUBE4
プラグインを開発する為の環境である。

# Plugin開発について 
/app/Plugin/... \
プラグインは別のリポジトリで置いてある。

# 環境
Framework: ECCUBE4 \
DB: MySQL

# Requirement
先に[Docker](https://www.docker.com/)インストールして下さい。 \
以下のホストのポートを空けてください。
```
8080 : EC-Cube
9080 : phpMyAdmin
13306 : mysql
1080 & 1025 : mailcatcher
```

# 実行コマンド
Rootプロジェクトフォルダに移動してから、 \
Environmentの定義ファイルを準備して下さい。`.env.dev`コピーして、`.env`を作成して下さい。 \
その後`docker-compose up -d`で全てのコンテナを起動出来ます。 \
停止する時に`docker-compose down`を実行して下さい。 \
[Docke-composeコマンドリスト](https://docs.docker.com/compose/reference/)

# インストールスクリプトを実行「初回だけ」
データベースの初期値と必要なライブラリをインストールする
```
    docker-compose exec -u www-data ec-cube bin/console eccube:install
    docker-compose exec -u www-data ec-cube composer install
```

# テストについて
ローカルでテストを起動する為、以下のコマンドを使って下さい。
```
    docker-compose exec ec-cube bash                   # コンテナに入る
    php vendor/bin/parallel-lint ./app/Plugin/CMBlog/  # PHPコードチェック
    vendor/bin/phpunit ./app/Plugin/CMBlog/            # ユニットテストを実行する
    vendor/bin/phpcs ./app/Plugin/CMBlog/              # PHPコードチェック
```

# ノート
`/usr/bin/env: 'php\r': No such file or directory` \
というエラーが発生したら、以下のコマンドで解決出来る
```
    docker-compose exec ec-cube bash
    cd bin
    tr -d '\015' <console >console.new
    mv console console.old
    mv console.new console
```