 <!DOCTYPE html>
 <html lang="nl">
 
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Levi De Laere</title>
     <link rel="icon" type="image/x-icon" href="afbeeldingen/uil.png">
     <link rel="stylesheet" href="stylesheet.css">


<div class="containernavigatie">

<span>
   <a href="index.php"> <h1 class="lettertypenavigatie">Home</h1></a>
</span>

<ul>
    <li class="ouderlijst">
        <h1 class="lettertypenavigatie">Maatschappelijk</h1>
        <i class="arrowdown"></i>
        <ul>
            <li>
                <a href="database.php"><h2 class="lettertypenavigatie2">Ideeën databank</h2></a>
            </li>
            <li>
                 <a href="technologie.php"><h2 class="lettertypenavigatie2">Technologie handleidingen</h2></a>
            </li>
            <li>
                <h2 class="lettertypenavigatie2">qsdfsd</h2>
            </li>
        </ul>
        <!-- <p>▼</p> -->
    </li>
</ul>

<!-- <span>
    <h1 class="lettertypenavigatie">Kunsdt</h1>
    <i class="arrowdown"></i>
</span> -->

<!-- <p class="pijl">▼</p>-->


</li>

<span>
   <a href="over.php"><h1 class="lettertypenavigatie">Over</h1></a>
</span>

</div>



<head>
 <style>

 p {
    margin: 0px;
    padding: 0px;
 }

span {
    margin: 0px;
    padding: 0px;
}

.pijl {

font-size: 20px;
color: #e7a664;
position: relative;
top: 3px;
z-index: -1;
margin: 0 52% 0 48%;
}
    
.containernavigatie {

display: flex;
flex-direction: row;
justify-content: space-between;
flex-wrap: wrap;
gap: 10px;
max-width: 515px;
width: 100%;
height: auto;
margin: 60px auto;
} 

.lettertypenavigatie {
background-color: #f1aa5d;
font-size: 28px;
font-weight: 100;
color: #c2813c;
/* border-color: #EE9D45; */
padding: 10px;
margin: 0px;
/* border-style: solid; */

}

.lettertypenavigatie:hover {
background-color: #925e26;
padding: 10px;
font-size: 28px;
font-weight: 100;
color: #e9953b;
/* border-color: #EE9D45;
border-style: solid; */
margin: 0px;

}

.lettertypenavigatie2 {
background-color: #f7b97b;
font-size: 22px;
font-weight: 100;
color: #e08a2e;
padding: 10px;
margin: 0px;
min-width: 150px;

border-bottom-style: solid;
border-right: solid;
border-left: solid;
border-color: #f3a553;
border-width: 2px;

}

.lettertypenavigatie2:hover {
background-color: #925e26;
padding: 10px;
font-size: 22px;
font-weight: 100;
color: #e9953b;
min-width: 150px;
border-right: solid;
border-left: solid;
border-bottom-style: solid;
border-width: 2px;

}



.containernavigatie ul li ul {

display: none;
position: absolute;


}

.containernavigatie ul li:hover ul {

display: block;
position: absolute;
top: 52px;
z-index: 2;


}


.arrowdown {
    height: 8px;
    width: 8px;
    border:       solid currentColor;
    border-width: 0 .3em .3em 0;
    border-color: #f1aa5d;
    display:      inline-block;
    padding:      .20em;
    transform:rotate(45deg);
    margin: 0 54% 0 46%;
    position: relative;
    top: 2px;
    left: 0px;
  }
  
  .arrowup {
    border:       solid currentColor;
    border-width: 0 .8em .8em 0;
    border-color: #f7b26d;
    display:      inline-block;
    padding:      .20em;
    transform: rotate(-135deg);
    margin: 0 50% 0 50%;
    
  }
      

.ouderlijst {

    position: relative;

}

</style>
</head>
