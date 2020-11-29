
<!Doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title> Paveduc</title>
		<link rel="stylesheet" href="{{ asset('acceuil/style1.css') }}" />
		<!-- <link href="http://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet"> -->
		<link rel="stylesheet" href="{{ asset('acceuil/css/bootstrap.min.css') }}" />
	</head>
	
	<body id="blueColor">

    <!--Paveduc4 content jumbotron	-->

    <div class="overlay"> </div>

    <div class="site-wrapper-inner" >

            <div class="cover-container">
				<div id="contenu" class="jumbotron jumbotron-fluid center-text" style="background:#e8e8e8";>
					<div class="row d-flex">
						
							
                            
						@yield('contenu')	

							
                        
                    </div>
                </div>
            </div>
		
	</div>

			

