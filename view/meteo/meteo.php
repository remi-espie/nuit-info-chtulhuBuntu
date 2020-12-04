<html>

<p id="demo1"></p><img alt="temp" src="../../assets/temperature/medium.png" id='itemp'"/>
<p id="demo2"></p>

<script>

    window.onload = getLocation();
    var y = document.getElementById("demo1");
    var x = document.getElementById("demo2");
    var itemp = document.getElementById('itemp');
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(getMeteo);
        } else {
            x.innerHTML = "La géolocalisation n'est pas disponible sur cet appareil.";
        }
    }

    function getMeteo(position){
        var requestURL = "https://www.prevision-meteo.ch/services/json/lat="+position.coords.latitude+"lng="+position.coords.longitude ;
        var request = new XMLHttpRequest();
        request.open('GET', requestURL);
        request.responseType = 'json';
        request.send();
        request.onload = function (){
            var meteo = request.response;
            x.innerHTML = "Position : latitude= " + position.coords.latitude +"<br/> longitude=  " + position.coords.latitude;
            temp = meteo.current_condition.tmp;
            y.innerHTML = "Température actuelle:" + temp +"°C";
            if(temp>=-273 && temp<20) {
                itemp.src = "../../assets/temperature/cold.png";
            }
            else if(temp>=22 && temp<27){
                itemp.src = "../../assets/temperature/medium.png";
            }
            else if(temp>=27 && temp<200){
                itemp.src = "../../assets/temperature/hot.png";
            }
        }
    }

    function tempLogo(){

    }
</script>

</html>