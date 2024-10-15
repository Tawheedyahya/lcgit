<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js" defer></script>
</head>
<body>
<form action="formecho.php" method="POST">
    <!--NAME-->
    <p><label for="name">name</label><input type="text" name="name" id="name"></p>
    <!--DOB-->
    <p><label for="dob">DOB</label>
        <!--DAY-->
    <select name="day" id="day">
        <option value="">day</option>
        <?php
        for($i=1;$i<=30;$i++){
            if($i<10){
                echo "<option>"."0".$i."</option>";
            }
            else{
            echo "<option>".$i."</option>";}
        }
        ?>
        <!--MONTH-->
    </select><select name="month" id="month">month
        <option value="">month</option>
        <?php
        for($i=1;$i<=12;$i++){
            if($i<10){
                echo "<option>"."0".$i."</option>";
            }
            else{
            echo "<option>".$i."</option>";}
        }
        ?>
        <!--YEAR-->
    </select><select name="year" id="year">year
            <option value="">year</option>
            <?php
            $date= date("Y");
            for($i=$date;$i>=$date-50;$i--){
                echo "<option>".$i."</option>";
            }
            ?>
    </select></p>
    
    <!--GENDER-->
    <p><label for="gender">gender</label><input type="radio" name="gender" id="gender" value="male" checked>male <input type="radio" name="gender" id="gender" value="female">female <input type="radio" name="gender" id="" value="check" checked>must check</p>

    <!--MAIL-->
    <p><label for="email">email</label><input type="email" name="email" id="email"></p>
    <!--LANGUAGE-->
    <p><label for="lang">language known</label><input type="checkbox" name="lang[]" id="lang" value="html">html <input type="checkbox" name="lang[]" id="lang" value="css">css</p>
    <!--HOBBIES use multiple option-->
    <p><label for="hobbies">hobbies</label><select name="hobbies[]" id="hobbies" multiple>
        <option value="">select</option>
        <option value="cricket">cricket</option>
        <option value="kabbadi">kabbadi</option>
    </select></p>
    <!--DEPARTMENT-->
    <p><label for="dept">department</label><select name="dept" id="dept">
        <option value="">select</option>
        <option value="cs">cs</option>
        <option value="IT">IT</option>
        <option value="maths">maths</option>
    </select></p>
    <!--SELF_INTRODUCTION-->
    <p><label for="self_intro">self_intro</label>
    <textarea name="self_intro" id="self_intro"></textarea></p>
    <!--BUTTON-->
    <p><button type="submit">submit</button></p>
</form>
<!--
<script>
    const month =document.getElementById("month");
    const mon=["january","feb","mar","apr","may","june","july","aug","sep","oct","nov","dec"]
    for(let i =0;i<=mon.length;i++){
        month.options.add(new Option(mon[i],mon[i])); 
    }
    const day = document.getElementById("day");
    for(let i=1;i<=31;i++){
        day.options.add(new Option(i,i))
    }
    const year = document.getElementById("year");
    const getyear=new Date().getFullYear();
    for(let i=getyear;i>=getyear-50;i--){
        year.options.add(new Option(i,i))
    }
</script>
-->
</body>
</html>