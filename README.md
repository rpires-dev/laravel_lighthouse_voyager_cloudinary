<p align="center">
<a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300"></a>
<a href="https://lighthouse-php.com/" target="_blank"><img src="https://lighthouse-php.com/logo.svg" width="100"></a>
<a href="https://voyager.devdojo.com/" target="_blank"><img src="https://voyager.devdojo.com/assets/images/logo_light.png" width="300"></a>
<a href="https://cloudinary.com/" target="_blank"><img src="https://cloudinary-res.cloudinary.com/image/upload/dpr_2.0,c_scale,f_auto,q_auto,w_156/cloudinary_logo_for_white_bg.svg" width="300"></a>
    <a href="https://graphql.org/" target="_blank"><img src="https://graphql.org/img/logo.svg" width="50"></a>
</p>

## Laravel 8, Lighthouse, Voyager, Cloudinary API

I created this project for those people who want to quickly develop their apps without spending too much time going through installation pains.
We all know that we can do way better things w/ our precious time.
<br /><br />
I decided to include  <a href="https://cloudinary.com/">Cloudinary</a> for those people who are going to deploy on services, such as  <a href="https://www.heroku.com/">Heroku</a> or other related platforms. Why? because Heroku doesn’t support very well storage implementation :(
<br /><br /> 

https://github.com/cloudinary-labs/cloudinary-laravel

## Cloudinary setup
<p>Head on to https://cloudinary.com/ to create your account. <br>Before you ask it's completely free to register  😉</p> <br> For more info follow this links: <br>
👉 https://cloudinary.com/blog/laravel_file_upload_to_a_local_server_or_to_the_cloud <br>
👉 https://github.com/cloudinary-labs/cloudinary-laravel 

### Before you start
Be sure of having some sort of database running.

### On your .env 
``` 
...
DB_DATABASE=yourdatabase
DB_USERNAME=yourusername
DB_PASSWORD=yourpassword
...
CLOUDINARY_URL= // You will find your url on your Cloudinary admin dashboard
``` 

### On your project run
```
1. cp .env.example .env
2. composer install
2. php artisan key:generate  
3. php artisan migrate
```

### Voyager admin

Create an admin user by:
```
php artisan voyager:admin your@email.com --create
```
Seed dummy data:<br>
⚠️ Before doing this head on to https://dummyapi.io/account to get your api key, and paste it in your .env variable by:
```
DUMMY_API_KEY='your_dummy_api_key'
```
then: 
```
php artisan voyager:install --with-dummy
```
(this will seed posts and categories as well as other users, via the dummy api check the seeder files for more info)
<br>

Now visit your admin dashboard at wwww.yourlocalhost/admin


### Test your Graphql

wwww.yourlocalhost/graphql-playground

### Disclaimers ⚠️
The cloudinary system is only set to work with the voyager's admin interfaces, namely with the posts or/and users interfaces:

on   🗂 /your_project/app/Http/Controllers/Voyager/Controller.php
```
 $uploadedFileUrl = Cloudinary::upload( //etc...
```
and there is where you enter and collaborate 😃
<br> <br>
There you have it folks your own laravel api with GraphQl, Voyager and Cloudinary. I hope it didn’t toke you guys too long to have it running, cause if did i totally ruined the objective if this endeavour, let me know ;)   

### ⚽️ Enjoy!
 
