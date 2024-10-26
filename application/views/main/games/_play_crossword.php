<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/elogo.png">
    <title>Crossword Puzzle</title>
    <style>
        body{
            background: rgb(97,149,181);
            background: linear-gradient(0deg, rgba(97,149,181,1) 0%, rgba(108,141,205,1) 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 120vh;
            margin: -20;
        }
        .container{
            display: flex;
        }
        table{
            border:2px solid black
        }

        th{
	        width:50px;
	        height:50px;
	        background: rgba(255, 0, 0, 0.37);
	        border:1px solid rgb(229, 250, 234);
	        position: relative;
            cursor: grab;
        }

        .b{
	        background: #3D52A0;
            cursor: not-allowed;
        }

        .w{
	        background: white;
        }
        .w:hover{
            background: rgba(248, 136, 136, 0.37);
        }
        th span{
	        font-size: 10px;
	        position: absolute;
	        top: 2px;
	        left: 2px;
        }
        th b{
	        font-size: 40px;
	        color: green;
        }

        button{
            width: 200px;
            height: 60px;
            margin: 15px;
            background: orange;
            cursor: pointer;
            transition: 1s;
        }
        button:hover{
            background: green;
            color: white;
        }
        section{
            display: flex;
        }
        .across{
            width: 25%;
            background-color: #7091e6;
            padding: 10px;
            box-sizing: border-box;
        }
        .down{
            width: 25%;
            background-color: #8697c4;
            padding: 10px;
            box-sizing: border-box;
        }
        li{
            list-style: none;
            font-family: sans-serif;
            font-weight: 700;
            margin-left: -30px;
            font-size: 12px;
            margin-top: 10px;
            margin-bottom: 5px;
            background: #ede8f5;
        }
        h2{
            font-family: sans-serif;
            border-bottom: 5px double black;
            padding-left: 15px;
        }
    </style>
</head>
<body>
    <section>
        <table id="table" cellspacing="0"></table>
        <div class="across">
            <h2>ACROSS</h2>
            <ul>
                <li>1. High-level programming language known for its simplicity and readability.
                <li>3. Widely used scripting language for web development.</li>
                <li>5. Object-oriented programming language, an extension of C.</li>
                <li>7. Markup language used for creating web pages.</li>
                <li>9. Dynamic, object-oriented language designed for simplicity and productivity.</li>
                <li>11. Apple's programming language for iOS, macOS, watchOS, and tvOS development.</li>
                <li>13. Language used for managing and querying databases.</li>
                <li>15. Low-level programming language using mnemonic codes for machine instructions.</li>
                <li>17. Style sheet language used for styling web pages.</li>
                <li>19. Server-side scripting language for web development.</li>
                <li>21. High-level, object-oriented programming language known for platform independence.</li>
            </ul>
        </div>
        <div class="down">
            <h2>DOWN</h2>
            <ul>
                <li>2. Base-2 number system used by computers, consisting of only 0s and 1s.</li>
                <li>4. Core component of an operating system, responsible for managing system resources.</li>
                <li>6. Step-by-step procedure for solving a problem or accomplishing a task.</li>
                <li>8. Program that translates source code into machine code.</li>
                <li>10. Intermediate representation of source code, executed by virtual machines like the JVM.</li>
                <li>12. Set of rules that define the combinations of symbols that are considered to be correctly structured.</li>
                <li>14. Process of finding and fixing errors or bugs in a computer program.</li>
                <li>16. Named storage location in memory used to hold data that can be modified during program execution.</li>
                <li>18. Collection of precompiled routines or functions that can be used by computer programs.</li>
            </ul>
        </div>
    </section>
    

    <button onclick="key_check()">CHECK</button>
    <button onclick="color_clear()">WRONG CLEAR</button>
</body>

<script>
    //w - white
    //b - black
    var values=["bwbbbbbwbwbbbbb","wwwwwwbwbwbbbbb","bwbbbbbwbwbbbbb","bwbbbbbwbwwwwbb","bwbbbbbwbwbwbbb","bwbbwwwwbwbwbbb","bbbbwbbwbwbwbbb","bbbbwbbwbbbwbbb","wbbbwbwwwwwwbbb","wbbbwbbbbbbbwww","wbwwwbbbbwbbwbb","wbbbwbwwwwwwwwb","wbwbwbwbbwbbwbb","wwwwwbbbbwbbwbb","wbwbbbbbbwbbwbb","wbwbwwwbbwbbwbb","wbwbbbbbbbbbwbb","bbwbbbwwwwbbwbb","bbwbbbbbbbbbwbb","bbwbbbbbbbbbbbb","bwwwwwwwwwwbbbb"];
    var ans_key=["-S-----B-L-----","PYTHON-Y-I----","-N-----T-B-----","-T-----E-RUBY--","-A-----C-A-I---","-X--C++O-R-N---","----O--D-Y-A---","----M--E---R---","D---P-SWIFTY---","E---I-------PHP","B-SQL----K--A--","U---E-ASSEMBLY-","G-V-R-L--R--G--","GJAVA----N--O--","I-R------E--R--","N-I-CSS--L--I--","G-A---------T--","--B---HTML--H--","--L---------M--","--E------------","-JAVASCRIPT----"];
    var total__rows=values.length;
    var total__cols=values[0].length;
    var spans_value={"0,1":"12","0,7":"10","0,9":"18","1,0":"1","3,9":"9","3,11":"2","5,4":"5/8","8,0":"14","8,6":"11","9,12":"19","10,2":"13","10,9":"4","10,12":"6","11,6":"15","12,2":"16","13,1":"21","15,4":"17","17,6":"7","20,1":"3"};

    var current=null;
    function createFrameBoxes(){
	    var boxes="";
	    for (let i = 0; i < values.length; i++) {
	        boxes+="<tr>";
	        for (let j = 0; j < values[i].length; j++) {
            var s=spans_value[i+","+j]??"";
            boxes += '<th onclick="myclick(this)" row="' + i + '" col="' + j + '" class="' + values[i][j] + '"><span>' + (spans_value[i + ',' + j] || '') + '</span><b></b></th>';
	        }
	        boxes+="</tr>";
	    }
	    document.getElementById("table").innerHTML=boxes;
    }

    createFrameBoxes(); 

    function myclick(box){
        if (box.classList.contains("w")){

            var row=box.getAttribute("row");
            var col=box.getAttribute("col");
            if(current!=null){
                current.style.background="transparent";
            }

            current=box;
            current.style.background="orange"
        }
    }

    document.body.onkeyup=function(event){
        if(current!=null){

            //console.log(event);

            if (event.keyCode>=37 && event.keyCode<=40){
                nextmover(event.keyCode);
            }

            if (event.keyCode >= 65 && event.keyCode <= 90) {
                current.querySelector("b").innerHTML = event.key.toUpperCase();
            }

            if(event.keyCode==8||event.keyCode==46){
                current.querySelector("b").innerHTML="";
            }

        }
    }

    function nextmover(code){
            var row=parseInt(current.getAttribute("row"));
            var col=parseInt(current.getAttribute("col"));

            switch (code){
                case 37: //left
                    col = col == 0 ? total__cols-1 : col - 1;
                    break;
                case 38: //top
                    row = row == 0 ? total__rows-1 : row - 1;
                    break;
                case 39: //right
                    col = col == total__cols-1 ? 0 : col + 1;
                    break;
                case 40: //bottom
                    row = row == total__rows-1 ? 0 : row + 1;
                    break;

                default:
                    break;
            }
            if(current.classList.contains("w")){
                current.style.background="transparent";
            }

            current=document.querySelectorAll("tr")[row].querySelectorAll("th")[col];

            if(current.classList.contains("b")){// if black tten move again
                nextmover(code);
            }
            else{
                current.style.background="orange";
            }
    }

    var red=[];
    var green=[];

    function key_check(){

    red.splice(0); //clear red
    green.splice(0); //clear green

    //only white
    var whites=document.querySelectorAll(".w");
    //console.log(whites);
   
    whites.forEach(element => {

        var text=element.querySelector("b").innerHTML;
        if(text.length>0){
            var row=element.getAttribute("row");
            var col=element.getAttribute("col");
            console.log(row, col, text, ans_key[row][col]);
            if(text==ans_key[row][col]){
                element.style.background="greenyellow";
                green.push(element);
            }
            else{
                element.style.background="red";
                red.push(element);
            }
        }
        
    });

    
    if(green.length==whites.length){
        console.log("You Did IT");
    }
}

    function color_clear() {
        red.forEach(element => {
            element.style.background="transparent";
            element.querySelector("b").innerHTML="";
        });

        green.forEach(element => {
            element.style.background="transparent";
        })

        console.log("WRONG", red);
        console.log("CORRECT",green);
        
    }
    

</script>
</html>