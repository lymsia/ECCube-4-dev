# EC-CUBE4
プラグインを開発する為の環境である。

# Submodule
/app/Plugin/... \
プラグインは別のリポジトリで置いてある。

# 環境
Framework: ECCUBE4 \
DB: MySQL

# Requirement
先に[Docker](https://www.docker.com/)インストールして下さい。 \
ホストのポートご注意 \
```
8080 : アプリ
9080 : phpMyAdmin
13306 : mysql
1080 & 1025 : mailcatcher
```
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