

/* 
get the hour
check if hour is 12 or below
    if it is then add 'am' to time
check if hour is 13 or above
    if it is then check for hour on pmHours, convert it to 12hr then add 'pm' to time
*/

setInterval(timechanger, 500);
                    function timechanger()
                    {
                        let dt = new Date();
                        if (dt.getHours() < 12)
                            {
                            document.getElementById("time").innerHTML = `${dt.getHours()}:${(("0"+dt.getMinutes()).slice(-2))}:${(("0"+dt.getSeconds()).slice(-2))} am`
                            }
                        else if (dt.getHours() >=12 && dt.getHours() != 24)
                            {
                            let currentHour = dt.getHours()
                            console.log(currentHour)
                            var pmHours = {"12": 12, "13": 1, "14": 2, "15": 3,"16": 4,"17": 5,"18": 6,"19": 7,"20": 8,"21": 9,"22": 10,"23": 11,"24": 00} 
                            document.getElementById("time").innerHTML = `${pmHours[currentHour]}:${(("0"+dt.getMinutes()).slice(-2))}:${(("0"+dt.getSeconds()).slice(-2))} pm`
                            }
                        else if (dt.getHours() == 24){
                            document.getElementById("time").innerHTML = `00:${(("0"+dt.getMinutes()).slice(-2))}:${(("0"+dt.getSeconds()).slice(-2))} am`
                            
                        }
                    }
// checks date and adds it to text
                    setInterval(datechanger, 500);

                    function datechanger(){
                        let dt = new Date();
                        document.getElementById("date").innerHTML = `${(("0"+dt.getDate()).slice(-2))}/${(("0"+(dt.getMonth()+1)).slice(-2))}/${(dt.getFullYear())}`}
//

/*
put images in array
every x seconds select image from array
increment number 
when number = array length-1
reset number to 0
*/

var imageSrc = ["qrcode1.png","qrcode2.png","qrcode3.png","qrcode4.png","qrcode5.png"]
setInterval(qrChanger, 2000)
var i = 0
function qrChanger(){
    if (i < 4) {
        document.getElementById("qrcode").src = imageSrc[i]
        i+=1
    } else {
        document.getElementById("qrcode").src = imageSrc[4]
        i = 0
    }
}
