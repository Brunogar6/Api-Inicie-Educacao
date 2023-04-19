## Installing and Initializing

- git clone https://github.com/Brunogar6/LaravelApi-InicieEducacao.git

- cd LaravelApi-InicieEducacao/

- docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs

- cp .env.example .env

- Insert your token in GO_REST_TOKEN on .env

- sail up -d

## Usage

- Create a User: Post localhost/users

- List Users: Get localhost/users

- Show a User: Get localhost/users/{id}

- Create a Post: Post localhost/posts

- Create a Comment: Post localhost/comment

- Delete a Comment: Delete localhost/commment/{id} 


