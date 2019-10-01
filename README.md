How to run :-

git clone https://github.com/AyanChoudhary/Quiz-A-Do.git<br>
cd Quiz-A-Do<br>
Change the paths in mvc.sdslabs.local.conf pointing to the public folder of this project<br>
sudo cp ~/mvc/configs/mvc.sdslabs.local.conf /etc/apache2/sites-available/.<br>
Add mvc.sdslabs.local entry to your /etc/hosts<br>
sudo a2ensite mvc.sdslabs.local.conf<br>
sudo service apache2 restart<br>
Open http://mvc.sdslabs.local in your browser<br>
