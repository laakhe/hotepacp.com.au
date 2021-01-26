import axios from 'axios'



import jquery from 'jquery';

jquery(document).ready(function(){
    
    jquery.ajax({
        'type': "GET",
        'url': "http://api.openweathermap.org/data/2.5/weather?q=Lumbini&appid=20d2dc69ee61a80b606f3544f0ee2762",
        'success': function(data){
            // kelvin = data.main.feels_like
            // celsius = kelvin - 273.15 
            // weather = data.weather[0].description
            // console.log(kelvin)
            jquery('.temp-degree').text(Math.round(data.main.feels_like - 273.15));
            jquery('.weather').text(data.weather[0].description);
            console.log(Math.round(data.main.feels_like - 273.15))
        },
    });

    // function getWeatherData() {
    //     return axios.get('http://api.openweathermap.org/data/2.5/weather?q=sydney&appid=20d2dc69ee61a80b606f3544f0ee2762');
    // }


    // Promise.all([getWeatherData()])
    // .then(function (results) {
    //     console.log(results[0].data.main.feels_like);
    //     kelvin = results[0].data.main.feels_like
    //     // celsius = kelvin - 273.15 
    //     // weather = results[0].data.weather[0].description
    //     // console.log(kelvin)
    //     // jquery('.temp-degree').text(celsius);
    //     // jquery('.weather').text(celsius);
    
    // });

    // function getTemperature()
    // {
    //     axios.get('http://api.openweathermap.org/data/2.5/weather?q=sydney&appid=20d2dc69ee61a80b606f3544f0ee2762')
    //     .then(response => {
    //         this.response = response.data;
    //         return this.response
    //     })
    //     .catch(function (error) {
    //         // handle error
    //         console.log(error);
    //     })
    //     .then(function () {
    //         // always executed
    //     });
    // }

    // getTemperature().then(data => {
    //     console.log(data);
    // });
    
    

    // kelvin = response.data.main.feels_like
    //     console.log(response.data.main.feels_like)
    // //     celsius = kelvin - 273.15 
    // //     weather = cription
    // //    jquery('.temp-response.data.weather[0].desdegree').text(celsius);
    // //    jquery('.weather').text(celsius);
    //    console.log(kelvin)
}); 