# Event Ticketing with Laravel: Laravel 5.4 based system for event organizers to manage and sell tickets.

This project is a modified version of the LaraEventTickets created by David Lun.

Instead of Stripe integration used in the later, Paypal was used for payments.

## Clickable live-demo

- __Email__: admin@admin.com
- __Pass__: password


## How to use

- Clone the repository with __git clone__
- Copy __.env.example__ file to __.env__ and edit database credentials there
- Run __composer install__
- Run __php artisan key:generate__
- Run __php artisan migrate --seed__ (it has some seeded data for your testing)
- That's it: launch the main URL. You can also login at __/login__ with default credentials __admin@admin.com__ - __password__

## License

Basically, feel free to use and re-use any way you want.


