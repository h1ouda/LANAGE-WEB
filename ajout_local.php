<?php
include('connexionbase.php');
if(isset($_POST['ajouter'])){
	 
    $lieu=$_POST['lieu'];

    
    $pres = $base->prepare("INSERT INTO localisation( lieu) VALUES( '$lieu' )");
            //execution de la requete
            $pres->execute();
            $result=$pres;
            if(!$result){
                echo '<script language="Javascript">
            alert ("localisation non ajouter !" )
                 </script>';}
                 else{
                    echo '<script language="Javascript">
            alert ("localisation ajouté avec succès!" )
                 </script>';
                 }			
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    
    <link rel="stylesheet" href="dist 3.7/css/bootstrap.min.css"  />
    <script src="dist 3.7/js/bootstrap.min.js"></script>
    <script src="dist 3.7/jquery-3.3.1.js"></script>
  
    <style>
    #footer{
	background: #333333;
	color: #ffffff;
	text-align: center;
	padding: 30px;
	margin-top: 100px;

}
    
    </style>



<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body style="background : linear-gradient(45deg, #FC466B, #3F5EFB)">


<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
            
			<a class="navbar-brand"  style="margin-top: -12px;">
               <h4 > Mon espace   <small>  Administrateur</small></h4>
               
            </a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">      
			
                     <ul class="nav navbar-nav navbar-right">
                        <li><a href="deconnexion.php"><span><i class="glyphicon glyphicon-log-out"></i></span> Déconnexion</a></li>
                         
                        </li>
                     </ul>
               </div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
    </nav>  	
   
    
    <div class="container-fluid main-container" style="background : linear-gradient(45deg, #FC466B, #3F5EFB)">
        <div class="col-md-2 sidebar">
                <div class="row">
                        <div class="absolute-wrapper"> </div>
                            <div class="absolute-wrapper"> </div>
                           
                                   	 <a href="gest_local.php"><button type="submit" class="btn btn-primary btn-lg" style="margin-left:10%" name="retour" value="retour">Retour a l'acceuil</button></a>
 
                        
                        </div>  		
                </div>
          <center>
       <div class="col-md-10 content" >
        <div class="panel panel-default" style="background-color: rgba(255, 255, 255, .3); width:40% ; margin-right:8%">
		
                <p style="font-size:20px; font-family:'Gothic A1';"> Ajout d'un responsable</p>
                </div>
                <div class="panel-body" style=" margin-right:8%"  >
                    <div class="row">  
                    <div class="col-md-6 col-md-offset-3">
                            <form class="well form-horizontal" action="" method="post" >
                                
								
								
                                <div class="form-group">
                                    <div class="col-md-12">
                                        <label class=" control-label" for="eail">lieu</label>
                                        <input id="lieu" name="lieu" type="text" placeholder="saisir un lieu" class="form-control" required>  
                                    </div>
                                </div>

                               
                                
                                <div class="form-group">
                                    <div class=" col-md-12">
                                        <input type="submit" value="Ajouter la localisation" id="singlebutton" name="ajouter" class="btn btn-primary btn-lg">
                                    </div>
                                </div>
                        </form> 
                        </div>
                    </div>
                </div>
            </div>
        
            </div>
    
     
       
       <br><br><br><br><br>
       
    </div>
       <footer id="footer" >
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5 text-center text-xs-center text-sm-center text-md-center ">
                    <h5>Université de Rouen Normandie</h5>
                    <h5>Dep-info &copy; 2022</h5>
                </div>
                </div>
            </div>	
        </footer>

  	





</body>
</html>