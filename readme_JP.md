Setup & Configure

- Start your virtual machine:
    - cd homestead
    - vagrant up

- Login to virtual machine:    
    - vagrant ssh
    - cd code/bookmark

- Copy the environment config example file:    
    - cp .env.example .env

- Install composer dependencies:    
    - composer install
    
- Generate Laravel app key:    
    - php artisan key:generate
    - http://bookmark.local/



# SASS WATCHING
## public css Ordner Terminal: 
sass --watch scss/imports.scss:css/style.css

