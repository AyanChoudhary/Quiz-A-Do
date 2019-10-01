# Quiz-A-Do

## How to run

1. `git clone https://github.com/AyanChoudhary/Quiz-A-Do.git`
2. `cd Quiz-A-Do`
3. Change the paths in `configs/mvc.sdslabs.local.conf` pointing to the `public` folder of this project
4. `sudo cp ~/mvc/configs/mvc.sdslabs.local.conf /etc/apache2/sites-available/`
5. Add `mvc.sdslabs.local` entry to your `/etc/hosts`
6. `sudo a2ensite mvc.sdslabs.local.conf`
7. `sudo service apache2 restart`
8. Open [http://mvc.sdslabs.local](http://mvc.sdslabs.local) in your browser
