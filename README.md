Buzzer
======

Web based Buzzer System for Quiz contests.

This buzzer was created as a contribution to Open Source for college quiz ACM TechIQ 1.0.

Press *ENTER* or *SPACEBAR* to press buzzer if you want to use instead of left mouse click.

* index.php - Main page for selecting respective Teams(Team Side).
* result.php - Displays results of the team which first pressed buzzer(Admin Side, or separate).
* refresh.php - When no team name has pressed buzzer and no team name is displayed. It continuously checks for buzzer press(Admin Side, maybe or separate).
* team-A.html - Buzzer button and score display for each Team A. (Each team has their own page respectively, 5 in our case; Team Side).
* team-first.php - Buzzer press PHP handler
* rank.txt - Stores index of team which pressed the buzzer.
* PHP - Contains backend PHP and MySQL connection files.
	  - Use tech_sql.sql for setting up initial database structure.
* CSS - Contains CSS styling file.
* JSLib - Contains jQuery library file.
* Resources - Contains images and audio files used

##Instructions

For our use, the Buzzer was set up using WAMP server setup.

You can use your own method or try the method which was used at our setup.

1. Start WAMP local server(Copy entire folder into www folder in WAMP installation directory).

2. Put it online(Allow access to other client machine in WAMP).

3. Create a database named as *ACM_database*.

4. Import the file *tech_sql.sql* to create required tables to store data about teams.

3. Hence on hosting machine all pages(say results.php) open with address:
> http://localhost/Buzzer/results.php

4. Now, setup a wireless connection with other client machines(using AdHoc or WiFi Hotspot). So, on those machines the pages open up with address:
> http://<static_ip_address_of_host>/Buzzer/team-A.html

5. You can feed the scores of all teams in the page *techiq.php*. The results get reflected on the Buzzer HTML pages of respective teams. Scores get added up to previous score on each feed entry.

**NOTE**: Do not refresh this page as it will re-enter the last feed entry. To prevent this, you can enter a dummy query of 0 score after each entry of score.











