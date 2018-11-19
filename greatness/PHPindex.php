<html>
<head>
<title>PHP programs.com</title>
    </head>
    <body>
     <?php
        //integers
        $int_var1=40;
        $int_var2=25;
        $sum=int_var1 + int_var2;
        print "sum <br>";
        
        //doubles
        $x=20.5;
        $y=4.5;
        $z=$x + $y;
        print "$x + $y=$sum";
        
        //boolean
        $y=4;
        if(y>3)
            print("i think i have lost my mind<br>");
        else
            print("i know why i said so<br>");
        
        //string
        $variable=name;
        $output="my $variable is Billy Obuya Odongo";
        print($output"<br>");
        
        //constant
        define("MIN SIZE",50);
        echo MIN SIZE;
        //can also be same as echo constant("MIN SIZE");
        
        //if statement
        $d=date("D");
        if(d == "Saturday")
            echo"Have a Blessed Sabbath";
        else
            echo"Have a Nice Day";
        
        //else if statement
        $d=date("D");
        if(d == "Saturday")
            echo("Have a Blessed Sabbath");
        elseif(d == "Sunday")
            echo("Have a nice Sunday");
        else
            echo("have a nice day for sure");
        
        //switch case
        $d=date("D");
        switch($d){
            case "mon":
                echo"today is monday";
                break;
                
         
            case "tue":
                echo"today is tuesday";
                break;
                 
                  
            case "wed":
                echo"today is wednesday";
                break;
                          
                         
            case "thur":
                echo"today is thursday";
                break;
        
                               default:
                                   echo"wonder which day is this?";
                           }
        
        //for loop statement
        $i=0;
        $y=0;
        for($i=0; i<5; i++){
           $1+=10;
            $y+=10;
        }
        echo("at the end of the loop i=$i and y=$y");
            
        }
        
        //while loop
        $a=0;
        $sum=50;
        while(a<10;){
            a++;
            sum--;
        }
        echo("the loop stoped at a=$a and sum=$sum");
        
        //do while
        $a=0;
        $sum=0;
        do{
            a++;
        }while($a<10);
        echo("the loop stoped at a=$a");
        
        //foreach statement
        $array=array(1,2,3,4,5,6,7,8,9);
        foreach($array as $value){
            echo"value is $value";
        }
        
        //break statement
        $y=0;
        while(y<5){
            y++;
            if(y == 3)break;
        }
        echo"the loop stopped at y=$y";
        
        //continue statement
       $array=array(1,2,3,4,5,6);
        foreach($array as $value){
            if(y == 3)continue;
            echo"value is $value";
        }
        
        //numeric arrays
        //first example/method
        $array=array(1,2,3,4,5,6,);
        foreach($value as $array){
            echo"value is $value";
        }
        //second method
        $number[0]="one";
        $number[1]="two";
        $number[2]="three";
        $number[3]="four";
        $number[4]="five";
        foreach($number as $value){
            echo"value is $value";
        }
        
       //associative array
        //first method
        $salaries=array("Billy" =>2000, "Obuya"=>2500, "Odongo"=>3500);
        echo"salary of Billy is" .$salaries'Billy'. "<br>";
        echo"salary of Obuya is" .$salaries'Obuya'."<br>";
        echo"salary of Odongo is" .$salaries'Odongo'."<br>";
        //second method
        $salaries['Billy']="low";
        $salaries['Obuya']="medium";
        $salaries['Odongo']="high";
        echo"salary of Billy is" .$salaries'Billy'. "<br>";
        echo"salary of Obuya is" .$salaries'Obuya'."<br>";
        echo"salary of Odongo is" .$salaries'Odongo'."<br>";
        
       //multidimensional arrays
        $marks= array(
        "Biilly"=>array(
        "physics"=>65,
            "maths"=84,
            "chemistry"=>68
        ),
        "Obuya"=>array(
        "physics"=>67,
            "maths"=>86,
            "chemistry"=>64
        ),
            "Odongo"=>array(
            "physics"=>82,
                "maths"=>88,
                "chemistry"=>64
            )
        );
        echo"marks for Billy in Physics is :";
        echo $marks['Billy']['physics']."<br/>";
        echo"marks for Obuya in maths is :";
        echo $marks['Billy']['maths']."<br/>";
        echo"marks for Odongo in chemistry is :";
        echo $marks['Billy']['chemistry']."<br/>";
        echo"marks for Billy in maths is :";
        echo $marks['Billy']['maths']."<br/>";
        
        //strings
        $y=name;
        $z=my $y is Billy Obuya Odongo;
        print($z);
        
        //string concatenation
        $string1="hello viewer";
        $string2="12345678";
        echo $string1 . "" . string2;
        
        //strlen() function
        echo strlen("Hello Viwer");
        
        //strpos(fuction)
        echo strpos("hello viewer","viewer");
        
        
        
        
        
        
        
        
        
        
    ?>    
    </body>
</html>