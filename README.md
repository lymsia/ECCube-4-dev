# EC-CUBE4

# 環境
Framework: ECCUBE4
DB: MySQL

# Requirement
先に[Docker](https://www.docker.com/)インストールして下さい。\
ホストのポートご注意\
8080 : アプリ\
9080 : phpMyAdmin\
13306 : mysql\
1080 & 1025 : mailcatcher\
\
`.env.dev`コピーして、`.env`を作ってください

# 実行コマンド
全てのコンテナを起動する
```
    docker-compose up -d
```

# 初回はインストールスクリプトを実行
```
    docker-compose exec -u www-data ec-cube bin/console eccube:install
```
