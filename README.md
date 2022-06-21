# nws


The National Weather Service offers hourly weather observations formatted with xml tags to aid in the parsing of the information by automated programs used to populate databases, display information on webpages or other similar applications. 

This code alows you to pull and parse xml from National Weather Service (weather.gov) to display on your website.

This project contains 3 files. The feeds folder is required to house feeds pulled.

pull-weathers.php - this pulls down xml from w1.weather.gov/xml/current_obs for NYC and NJ. Edit as desired but no editing required to demo.

create-weathers.php - this parses the NYC and NJ xml and creates a variable for display. Edit as desired but no editing required to demo.

display-weathers.php - this includes the above two so it displays the updated weather variable whenever used. This could be renamed index or use it in your existing page.

For more information on the source or to find the names of the xmls you want for your project, check out https://w1.weather.gov/xml/current_obs/

