var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length){
		myIndex = 1
	}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 5000); // Change image every 5 seconds
}

function getCalendar(){


            var html ="";

            var currentFullDate = new Date();
            var currentMonth = currentFullDate.getMonth();
            var currentDate = currentFullDate.getDate();
            var currentYear = currentFullDate.getFullYear();
            var nextMonth = currentMonth+1;
            var monthBefore = currentMonth - 1;

            var daysInFeb ="";
            if (currentMonth == 1){
                if ( (currentYear % 100 != 0) && (currentYear % 4 == 0) || (currentYear % 400 == 0)){
                    daysInFeb  = 29;
                }
                else{
                    daysInFeb  = 28;
                }
            }

            var monthByNames = ["January","February","March","April","May","June","July","August","September","October","November", "December"];
            var datesByNames = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday", "Saturday"];
            var lastDateOfMonth = ["31", ""+daysInFeb+"","31","30","31","30","31","31","30","31","30","31"]

            var commingDate = new Date(nextMonth +' 1 ,'+currentYear);
            var commingDateByName= commingDate.getDay();
            var weekdays = commingDateByName;
            var numberOfDays = lastDateOfMonth[currentMonth];

            while (commingDateByName>0){
                html += "<td class='monthPre'></td>";

                commingDateByName--;
            }
            var count = 1;
            while (count <= numberOfDays){

                if (weekdays > 6){
                    weekdays = 0;
                    html += "</tr><tr>";
                }

                if (count == currentDate){

                    html +="<td class='dayNow'  onMouseOver='this.style.background=\"#A0E8AD\"; this.style.color=\"#FFFFFF\"' "+
                        "onMouseOut='this.style.background=\"#FFFFFF\"; this.style.color=\"#00FF00\"'>"+count+"</td>";
                }else{
                    html +="<td class='monthNow' onMouseOver='this.style.background=\"#A0E8AD\"'"+
                        " onMouseOut='this.style.background=\"#FFFFFF\"'>"+count+"</td>";

                }



                weekdays++;
                count++;
            }



            // building the calendar html body.
            var calendarBody = "<table class='calendar'> <tr class='monthNow'><th colspan='7'>"
                +monthByNames[currentMonth]+" "+ currentYear +"</th></tr>";
            calendarBody +="<tr class='dayNames'>  <td>Sun</td>  <td>Mon</td> <td>Tue</td>"+
                "<td>Wed</td> <td>Thu</td> <td>Fri</td> <td>Sat</td> </tr>";
            calendarBody += "<tr>";
            calendarBody += html;
            calendarBody += "</tr></table>";

            document.getElementById("calendar").innerHTML=calendarBody;

        }