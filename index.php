<!DOCTYPE html>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=Odibee+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tomorrow&display=swap" rel="stylesheet">
        <meta charset="utf-8">
        <title>monteloft</title>
       <style>
           body{
    background:#84142d;
    
}       
h1{
    text-align: center;
    background: #010059;
    color:#f1f1b0;
    padding:10px;
    font-style: italic;
    font-size:45px;
    padding:10px;
}
h1:hover{
    color:green;
}
#parrafo1{
color:#f8b400;
padding:10px;
text-align: center;
}
#parrafo2{
color:#ffffff;
padding:10px;
text-align: center;
}
#parrafo3{
    text-align:center;
    color:#f1d4d4;
}
#noticia1{
    background:#400082;
    
}
#noticia2{
    background:#fa163f;
}
#noticia3{
    background:#090088;
}
.pdn-todos{
    color:#fff;
    font-family: 'Odibee Sans',  ;
    padding:10px;
    margin-left:25px;
    border: 2px dashed #ffa41b;
}
.parrafos{
    font-size: larger;
    font-family: 'Tomorrow',  ;
}

       </style>
    </head>
    <body>
  <section id="noticia1">   
<h1><center><img class="logo"  src="img/abcd.png" alt="logo" > </center> </h1>
<p><?php echo $_POST["usuarios"]; ?></p>
<h2 id="pdn1" class="pdn-todos">tenemos un logo</h2>
<p id="parrafo1" class="parrafos">ponemos un logo en la imagen </p><!--parrafo de noticias 1-->
    <h5 id="fdn1" class="fdn-todos">fecha de noticia:25/2/2020</h5><!-- fecha de noticias --></section>
    <section id="noticia2">
<h2 id="pdn2" class="pdn-todos">le ponemos nombre a la pagina</h2>
<p id="parrafo2" class="parrafos">le ponemos el nombre oficial a la pagina</p>
        <!--parrafo 2-->
<h5 id="fdn2" class="fdn-todos">fecha de noticia:15/2/2020</h5><!--fecha de noticias 2-->
 </section>
 <section id="noticia3">
    <h2 id="pdn3" class="pdn-todos">rediseñamos la pagina </h2>
    <p id="parrafo3" class="parrafos">ahora la pagina se adapta a los telefonos moviles.</p>
            <!--parrafo 3-->
    <h5 id="fdn3" class="fdn-todos">fecha de noticia:23/2/2020</h5><!--fecha de noticias 3-->
     </section>
    </body>
</html> 