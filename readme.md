## Setup Project
follow these steps:

- Download and Install [virtual](https://www.virtualbox.org/wiki/Downloads) box in your computer
- Create a project directory and open that via terminal 
- Clone and install Homestead by executing the following commands
- <small><i>git clone https://github.com/laravel/homestead.git ~/Homestead
- git checkout v7.18.0
- bash init.sh </i></small>
- Open Homestead.yaml and configure the project paths according to your current project paths.
- After setting up the project paths, save and exit the file.
- Create another direcoty inside the current directory and rename it according to your project name
- clone this repository inside that created directory
- Once allthe above steps complete, run <small><i>vagrant up</i></small> command.

- Then run <small><i>composer install</i></small> and <small><i>npm install</i></small> to install all the dependencies
- Run <small><i>php artisan migrate</i></small> to migrate the database
- Compile js and css and visit your ip(Homestead.yaml) to view the project
