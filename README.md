# もぎたて

## 環境構築

Dockerビルド 
 1. git@github.com:yuji0730/confirmation-test-mogitate.git
 2. docker-compose up -d—build
 
laravel環境構築 
1. docker-compose exec php bash  
2. composer install 
3. .env.exampleファイルから.envを作成し、環境変数を変更 
4. php artisan key:generate
5. php artisan migrate 
6. php artisan db:seed


## 使用技術
* PHP 8.3.0
* Laravel 11.44.0
* MySQL 8.0.26

## ER図
![Image](https://github.com/user-attachments/assets/70b0a8e3-5ddc-4b93-9b66-3c047063a384)
 
## URL 
* 開発環境:http://localhost/ 
* phpMyAdmin:http://localhost:8080/

