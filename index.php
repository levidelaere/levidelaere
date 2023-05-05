<?php
include 'header.php';
?>


<div class="containeroverdezewebsite">

    <h1 class="titeloverdezewebsite">Over deze website</h1>  
    <br>  
    <br>
    <p id="overflowtext">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, unde provident eaque, hic expedita nesciunt fugiat sapiente omnis quam vitae optio cumque perferendis facere, similique cupiditate exercitationem a natus consequuntur?
    <br> 
    <br>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempora eum placeat molestias quam earum alias natus odio vero labore itaque.</p>
    <br>
   
<p class="hidden uitbreidinhoud">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti rerum ducimus, quis repudiandae eveniet cupiditate laborum consectetur. Soluta, adipisci inventore.<br><br></p>


<span class="borderbottom uitbreidknop link">Lees meer</span>
<i class="pijl"></i>

<br>
<br>
<br>

<script src="uitbreidingsknop 4.js"></script>
<!-- <button class="uitbreidknop">test</button>
<p class="hidden uitbreidinhoud">bliblablioe</p> -->

</div>

<h1>Maatschappelijk</h1>

<br>


<div class="flexmaatschappelijk">
 
    <div class="containermaatschappelijkonderdeel">
            <img class="imagecenter" src="afbeeldingen/hersenen2.png" alt="hersenen">
            <h2 class="titelshomepage"> <span class="borderbottom4px"> <a href="database.php">Ideeën database</a></span></h2>
            <br>
            <p>Een verzameling van formuleringen van ideeën over cultuur, psychologie, economie, politiek,...
            </p>
    </div>

    
    <div class="containermaatschappelijkonderdeel">
        <img src="afbeeldingen/hersenen2.png" alt="" class="imagecenter">
        <h2 class="titelshomepage"> <span class="borderbottom4px"><a href="technologie.php">Technologie handleidingen</a></span></h2>
        <br>
        <h3 class="tekstmaatschappelijk">
        iEen verzameling van educatief materiaal rond technologieën die zelfvoorzienendheid vergroten?
        </h3>
        
    <!-- <ul class="lijst">
<li>Betaalbaarheid, doeltreffendheid, gunstige beschikbaarheid van de benodigde materialen, eenvoud van de productie, invloed op gezondheid, comfort</li>
<li>Open source teksten en ontwerpen</li>
<li>Evidence-based educatie methoden</li>
<li>Evaluatiefiches van mogelijke technologieën per toepassing om te helpen in het keuzeproces?</li>
    </ul>    -->
    
    </div>



    <div class="containermaatschappelijkonderdeel">
            <img class="imagecenter" src="afbeeldingen/tent.gif" alt="hersenen">
            <br>
            <h2 class="titelshomepage"> <span class="borderbottom4px"> <a href="database.php">Tent</a></span></h2>
            <br>
            <p>blablabla</p>
    </div>
    
<div class="containermaatschappelijkonderdeel">
    <img class="imagecenter" src="afbeeldingen/zwabat.gif" alt="hersenen">
    <h2 class="titelshomepage"> <span class="borderbottom4px"> <a href="database.php">Zwaartekracht batterij</a></span></h2>
    <br>
    <p>blablabla</p>
</div>
    

</div>

<style>

    .containeroverdezewebsite {
        width: 100%;
        max-width: 650px;
        align-items: center;
        margin: 20px auto;
            }
    
    
    .titeloverdezewebsite {
    
    text-align: left;
    font-size: 38px;
    
    }
    
    .titelshomepage {
    
    text-align: center;
    }
    
      
    
    .ondertitelshomepage {
    
    font-size: 32px;
    font-weight: bold;
    color: #EE9D45;
    margin: 0px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    
    
    }
    
    
    .flexmaatschappelijk {
    
        display: flex;
        flex-direction: row;
        width: 91%;
        max-width: 1600px;
        margin: 0px auto;
   
        gap: 70px;

        justify-content: space-around;
        align-content: center;
        align-items: start;
        flex-wrap: wrap;
        border-style: dashed;
    
    }
    
    .containermaatschappelijkonderdeel {
    
    display: inline-block;
    max-width: 650px;
    min-width: 400px;
    
    border-style: dashed;
    
    }


    .tekstmaatschappelijk {
            
            font-size: 22px;
        
        }

    
    ul.lijst {
    margin-left: 20px;
    font-size: 18px;
        color: #EE9D45;
    
    }
    
    ul.lijst li:before {
    
        content: '\2012';
        position: absolute;
        margin-left: -20px;
        font-size: 18px;
        color: #EE9D45;
    }
    
    

    .pijl {
    height: 12px;
    width: 12px;
    border:       solid currentColor;
    border-width: 0 4px 4px 0;
    border-color: #EE9D45;
    display:      inline-block;

    transform:rotate(45deg);
    margin: 0px 0 0px 0;

    position: relative;
    z-index: 1;
    top: -3px;
    left: 16px;
    padding: 0px;

  }
        
.uitbreidknop {

font-size: 24px;
font-weight: 100;
color: #EE9D45;
margin: 0px;

}

</style>


</body>
</html>



