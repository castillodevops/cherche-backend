# cherchemamaison 
#Config ZiZACO in laravel
Go to the file (vendor-> zizaco-> entrust-> src-> commands-> MigrationCommand.php and change the "fire" method to "handle" and after the command "php artisan entrust: migration" will be generated Migration and just run the "php artisan migrate" command that the tables will be generated in your database."