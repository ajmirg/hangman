$(document).ready(function(){

    var answer = $("#answer").val();
    var num_wrong = 0;
    var myVar = setInterval(myTimer, 1000);
    var myVar2 = setInterval(myTimerSpeak, 5000);
    var level = $("#level").val();
    var timer = 0;
    var synth = window.speechSynthesis;

    function myTimer() {

        timer++;

        $("#time").html(timer);
       
    }

    function myTimerSpeak(){
        var utterThis = new SpeechSynthesisUtterance(timer);
        
        if ( $( "#page" ).length ) {
            if($("#page").val() == "play"){
                synth.speak(utterThis);

            }    

        }
    }



    $(".keypad").click(function(){
        var key = $(this).text();
        $(this).prop('disabled',true);


        if(answer.includes(key)){

            //show letter positions
            show_letters(key);
            $(this).css('background-color','green');

        }else{

            //one more wrong
            num_wrong++;
            //alert(num_wrong);
            one_more_wrong();

            $(this).css('background-color','red');


        }

        
    });

    function show_letters(key){

        var win = 1;

        for(var i=0;i<answer.length;i++){

                var char = answer.substring(i,i+1);
                
                if(char != " "){

                    if(char == key){

                        $("#letter" + i).text(key);

                        $("#letter" + i).css('background-color','lightgreen');
                    }

                }

                if($("#letter" + i).text() == "?"){

                    win = 0;
                }

        }
        if(win == 1){

            $("#result").html("<h1 style='color:green'>WELL DONE!</h1>");

            var utterThis3 = new SpeechSynthesisUtterance('Well done!');
            synth.speak(utterThis3);
    
            //Clear timers
            clearInterval(myVar2);
            clearInterval(myVar);

            //ajax update scoreboard
            $.ajax({
                url: "/update_scoreboard",
                type: 'post',
                data:{time:timer,level:level}, 
                success: function(result){
                    console.log(result);
                },
                error: function (data, textStatus, errorThrown) {
                    console.log(data);
            
                }
            });

            //play again
            $("#play_again").show();
            $(".keypad").prop('disabled',true);

        }

    }
    function one_more_wrong(){

        if(num_wrong == 1){

            $("#gallow1").show();
            $("#gallow2").show();
            $("#gallow3").show();
            $("#rope").show();

        }else if(num_wrong == 2){

            $("#head").show();
            $("#rope_neck").show();


        }else if(num_wrong == 3){

            $("#body").show();
            
        }else if(num_wrong == 4){

            $("#left_arm").show();
            
        }else if(num_wrong == 5){

            $("#right_arm").show();

        }else if(num_wrong == 6){

            $("#left_leg").show();
        
        }else if(num_wrong == 7){

        $("#right_leg").show();
        
        $("#result").html("<h1 style='color:red'>YOU'RE DEAD!</h1>");

        var utterThis2 = new SpeechSynthesisUtterance('you are dead!');
        synth.speak(utterThis2);

        //Clear timers
        clearInterval(myVar2);
        clearInterval(myVar);

        //play again
        $("#play_again").show();

        $(".keypad").prop('disabled',true);


        }else{

        }


    }

  });