## Installation

* clone the repo and `cd` into it
* `composer install`
* Rename or copy `.env.example` file to `.env`
* `php artisan key:generate`
* generate the symbolic link `php artisan storage:link`

### Database

* Set your database credentials in your `.env` file
* migrate and seed the normal way with `php artisan migrate --seed`

### Mail

You need to configure your **Mail** credentials in your '.env' file, in order to enable the registration process and checkouts. if you are using the gmail service
make sure the [less secure app access](https://myaccount.google.com/lesssecureapps) is turned on.

* Set your mail credentials in your `.env` file
* make sure your machine has turned off outbound mail scanning(if you're using antivirus or some kind of firewall)

Launch the app
```bash
 php artisan serve
 ```

## Screenshots

### home page :point_down:
<kbd>![home page](https://github.com/toqaayman/E-commerce-Website-laravel/blob/main/public/screens/%2Cmnm.png)</kbd>
### Cart :point_down:
<kbd>![cart](https://github.com/toqaayman/E-commerce-Website-laravel/blob/main/public/screens/lkl.png)</kbd>
### user chechout :point_down:
<kbd>![user profile](https://github.com/toqaayman/E-commerce-Website-laravel/blob/main/public/screens/jjol.png)</kbd>
### admin dashboard :point_down:
<kbd>![admin dashboard](https://github.com/toqaayman/E-commerce-Website-laravel/blob/main/public/screens/kk.png)</kbd>

### responsive :tired_face:

<kbd><img src="https://github.com/toqaayman/E-commerce-Website-laravel/blob/main/public/screens/lk.png" alt="drawing" height="350"/></kbd>&nbsp;&nbsp;&nbsp;<kbd><img src="https://github.com/toqaayman/E-commerce-Website-laravel/blob/main/public/screens/lm.png" alt="drawing" height="350"/></kbd>&nbsp;&nbsp;&nbsp;<kbd><img src="https://github.com/toqaayman/E-commerce-Website-laravel/blob/main/public/screens/lmkk.png" alt="drawing" height="350"/></kbd></kbd>

