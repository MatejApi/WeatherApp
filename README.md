# WeatherApp

### About WeatherApp
On my weather app you write in the city you wants to se current temperature for, and you can also choose between three temperature measure units.
App get temperature from https://openweathermap.org site with a API.

### Prerequisite
- XAMPP
- Composer

### Setup
- install XAMPP
- start Apache and mySQL services in XAMPP
- in instaled XAMPP folder find htdocs and in there create new WeatherApp folder
- copy all files from github and put them in new WeatherApp folder
- in terminal go into WeatherApp folder
- download composer with: curl -s http://getcomposer.org/installer | php
- clone data with: git clone https://github.com/databox/databox-php.git
- navigate into cloned file: cd databox-php
- install dependencies: php composer.phar install
- then go into default internet browser and access app with http://localhost/weatherapp/

### Output
In output you will see your chosen city that you write in and current temperature for that city. And that data will be send into databox.

#### Databox profile
matej.apidata@gmail.com