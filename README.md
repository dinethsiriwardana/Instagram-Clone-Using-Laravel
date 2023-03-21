laravel new Instagram-Clone-Using-Larave
php artisan
php artisan serve 
php artisan make:auth
    if any error   Command "make:auth" is not defined.  
        composer require laravel/ui  
        php artisan ui vue --auth
        php artisan migrate
npm install
npm run dev eery time change to UI (like Fonts you need to re run )

vim database/database.sqlite

php artisan migrate

php artisan make:controller ProfilesControllers

$profile = new \App\Models\Profile();
= App\Models\Profile {#3642}

> $profile->title = 'Cool  Title';
= "Cool  Title"

> $profile->description = 'Description';
= "Description"

> $profile->url = 'dineth.me';
= "dineth.me"

> $profile->user_id = 1;
= 1

> $profile->save();
= true