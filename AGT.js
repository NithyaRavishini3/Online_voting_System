document.getElementById("myButton1").value="New Button Text";


	function myFunction1() {
	alert("Your vote has saved.");
	
	
	var btn1 = document.getElementById("myButton");

                if (btn1.value == 'VOTE') {
                    btn1.value = 'VOTED';
                    btn1.innerHTML = 'VOTED';
                }
                else {
                    btn1.value = "VOTE";
                    btn1.innerHTML = "VOTED";
			
                }
	}
    function clickCounter() {
        if (typeof(Storage) !== "undefined") {
          if (localStorage.clickcount) {
            localStorage.clickcount = Number(localStorage.clickcount)+1;
          } else {
            localStorage.clickcount = 1;
          }
          document.getElementById("result").innerHTML = "Aidan Bryant has " + localStorage.clickcount + " Vote(s).";
        } else {
          document.getElementById("result").innerHTML = "Seems like something went wrong!...";
        }
      }
	
	function myFunction2() {
	alert("Your vote has saved.");
		
	var btn2 = document.getElementById("myButton1");

                if (btn2.value == "VOTE") {
                    btn2.value = "VOTED";
                    btn2.innerHTML = "VOTED";
                }
                else {
                    btn2.value = "VOTE";
                    btn2.innerHTML = "VOTED";
                }
	}
    function Counter1() {
        if (typeof(Storage) !== "undefined") {
          if (localStorage.clickcount1) {
            localStorage.clickcount1 = Number(localStorage.clickcount1)+1;
          } else {
            localStorage.clickcount1 = 1;
          }
          document.getElementById("result1").innerHTML = "Brooke Simpson has " + localStorage.clickcount1 + " Vote(s).";
        } else {
          document.getElementById("result1").innerHTML = "Seems like something went wrong!...";
        }
      }
	function myFunction3() {
	alert("Your vote has saved.");
	
	var btn3 = document.getElementById("myButton2");

                if (btn3.value == "VOTE") {
                    btn3.value = "VOTED";
                    btn3.innerHTML = "VOTED";
                }
                else {
                    btn3.value = "VOTE";
                    btn3.innerHTML = "VOTED";
                }
	
	}
	function Counter2() {
        if (typeof(Storage) !== "undefined") {
          if (localStorage.clickcount2) {
            localStorage.clickcount2 = Number(localStorage.clickcount2)+1;
          } else {
            localStorage.clickcount2 = 1;
          }
          document.getElementById("result2").innerHTML = "Dustin Tavella has " + localStorage.clickcount2 + " Vote(s).";
        } else {
          document.getElementById("result2").innerHTML = "Seems like something went wrong!...";
        }
      }
	function myFunction4() {
	alert("Your vote has saved.");
	
	var btn4 = document.getElementById("myButton3");

                if (btn4.value == "VOTE"){ 
                    btn4.value = "VOTED";
                    btn4.innerHTML = "VOTED";
                }
                else {
                    btn4.value = "VOTE";
                    btn4.innerHTML = "VOTED";
                }
			
	}
	function Counter3() {
        if (typeof(Storage) !== "undefined") {
          if (localStorage.clickcount3) {
            localStorage.clickcount3 = Number(localStorage.clickcount3)+1;
          } else {
            localStorage.clickcount3 = 1;
          }
          document.getElementById("result3").innerHTML = "Josh Blue has " + localStorage.clickcount3 + " Vote(s).";
        } else {
          document.getElementById("result3").innerHTML = "Seems like something went wrong!...";
        }
      }
	function myFunction5() {
	alert("Your vote has saved.");
	
	var btn5 = document.getElementById("myButton4");

                if (btn5.value == "VOTE") {
                    btn5.value = "VOTED";
                    btn5.innerHTML = "VOTED";
                }
                else {
                    btn5.value = "VOTE";
                    btn5.innerHTML = "VOTED";
                }
	}
    function Counter4() {
        if (typeof(Storage) !== "undefined") {
          if (localStorage.clickcount4) {
            localStorage.clickcount4 = Number(localStorage.clickcount4)+1;
          } else {
            localStorage.clickcount4 = 1;
          }
          document.getElementById("result4").innerHTML = "Lea Kyle has " + localStorage.clickcount4 + " Vote(s).";
        } else {
          document.getElementById("result4").innerHTML = "Seems like something went wrong!...";
        }
      }
      function readValue() {
        var x = localStorage.getItem("clickcount4");
        document.getElementById("demo").innerHTML = x;
      }