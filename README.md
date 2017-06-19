This is just a very minimal Laravel app for trying out broadcasting with Pusher.  It takes a message submitted via artisan command and broadcasts it to a basic view that just prints out messages as they arrive.

## Installation

Clone the repository:

```
git clone git@github.com:petema3/pusher-demo.git
```

Install PHP dependencies:

```
composer install
```

If you intend to make any changes to the Javascript, you will also want to install those dependencies:

```
npm install
```

Once all dependencies are installed, you will need to set up the following configuration options in your `.env`:

```
BROADCAST_DRIVER=pusher

PUSHER_APP_ID=your_app_id
PUSHER_APP_KEY=your_app_key
PUSHER_APP_SECRET=your_app_secret
PUSHER_APP_CLUSTER=your_app_cluster
```

## Broadcasting

To broadcast a message, simply issue the following artisan command:

```
php artisan broadcast:message "I'm a little teapot, short and stout"
```