# IT 202 Simple Weather Web Application
This assignment for Spring 2020 IT 202, taught by Professor James McHugh, was to create a weather web application using the free [OpenWeather API](https://openweathermap.org/api), which is needed to run the project. The project also implements the free [Open Notify API](http://open-notify.org/Open-Notify-API/ISS-Location-Now/) to display the times for the next five overhead International Space Station passes. 

A user can input a ZIP code or use the geolocation option to automatically display weather information, with the option of displaying temperatures in Fahrenheit, Celsius, or Kelvin.

## Setup
The only setup required for this web application is to set the OpenWeather API key to an environment variable OPENWEATHER_API_KEY, for example: `OPENWEATHER_API_KEY={api key}`.