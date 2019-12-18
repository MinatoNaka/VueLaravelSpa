https://qiita.com/minato-naka/items/2d2def4d66ec88dc3ca2  
Qiitaに本アプリの構築チュートリアルがあります。  

# 環境
PHP、Composer、NPMが利用可能な環境で  
下記のビルド作業を行います。  

# ビルド
・本位リポジトリをcloneする  
`git clone https://github.com/MinatoNaka/VueLaravelSpa.git`

・PHP側パッケージインストール  
`composer install`

・.env修正  
利用するDBに合わせて.envのDB情報を修正  

・DB、テストデータ生成  
`php artisan migrate --seed`

・フロントエンドパッケージインストール  
`npm install`

・フロントエンドビルド  
`npm run dev`
