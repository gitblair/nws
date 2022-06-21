# nws
Pull and parse xml from National Weather Service (weather.gov) to display on website

There are 3 files. The feeds folder is required to house feeds pulled.

pull-weathers.php - this pulls down xml from w1.weather.gov/xml/current_obs for NYC and NJ. Edit as desired but no editing required to demo.

create-weathers.php - this parses the NYC and NJ xml and creates a variable for display. Edit as desired but no editing required to demo.

display-weathers.php - this includes the above two so it displays the updated weather variable whenever used. This could be renamed index or use it in your existing page.
