install:
	composer install --no-progress
	cp .env.example .env
	php artisan sail:install
	./vendor/bin/sail up -d
	./vendor/bin/sail artisan key:generate
	./vendor/bin/sail artisan migrate
	./vendor/bin/sail npm install
	./vendor/bin/sail down

start:
	./vendor/bin/sail up -d
	./vendor/bin/sail npm run dev

stop:
	./vendor/bin/sail down
