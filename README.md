# 商品管理アプリケーション

## 環境構築

1.docker-compose up -d --build
2.composer create-project "laravel/laravel=8.\*" . --prefer-dist
3..env.example ファイルから.env を作成し、環境変数を変更
4.php artisan migrate
5.php artisan db:seed

## 使用技術

- PHP 8.4.4
- Laravel 8.83.8
- MySQL 8.0.26

## ER 図

~/coachtech/laravel/ec-test/er.png

## URL

- 開発環境： http://localhost/
