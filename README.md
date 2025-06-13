## Make コマンド

※ make コマンドをインストールしていない場合は以下のどちらかで対応する

- make コマンドをインストールする

  インストール方法については OS によって異なりますので
  調べてみてください

- /Makefile の該当コマンドを参照して実行する

  ```
  例：build:
      docker compose build
  ```

## Setup

ルートディレクトリで以下を実行

```
① make env
② /.envと/src/.envに環境変数をセット
③ make build-up
④ make setup
npmコマンドが使える場合は以下を実行する
⑥ npm install
```
`localhost/admin/login`でアクセスし、以下のログイン情報でトップにリダイレクトされるか確認する
```
id: info@y-com.info
pass: password
```

## Cursor

`/.cursor/rules/dev.mdc`

cursor ルールの

> 毎回以下を参照してください。
>
> @Laravel12
>
> @Next.js15.2

これは Laravel12 のドキュメント Next15.2 のドキュメントをセットする。

## Github Actions

- 使用する場合は`/github`を`/.github`に変更してください
- script などは適宜調整してください

## vendor node_modules

※
`next/node_modules`はコンテナと共有していませんので

パッケージを更新した時などにローカル側でも以下を実行します。

```
cd next && npm install
```

同じく laravel コンテナも vendor を共有していないので、

必要に応じてコマンドを実行してください。

```
 make vendor-to-host
 または
 docker compose cp laravel:/var/www/html/vendor vendor-volume

 make vendor-to-container
 または
 docker compose cp ./vendor laravel:/var/www/html/vendor

 make node_m-to-host
 または
 docker compose cp next:/app/node_modules ./next/

 make node_m-to-container
 または
 docker compose cp ./next/node_modules next:/app/
```
