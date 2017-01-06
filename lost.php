<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Lost Property</title>

    <!-- Bootstrap Core CSS -->
    <link href="/wp-content/themes/chester/css/bootstrap.min.css" rel="stylesheet">
    <link href="/wp-content/themes/chester/chester.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700" rel="stylesheet">
    <link href="/wp-content/themes/chester/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link rel="apple-touch-icon" href="https://www.chesterlestreetasc.co.uk/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.chesterlestreetasc.co.uk/apple-touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.chesterlestreetasc.co.uk/apple-touch-icon-iphone-retina.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.chesterlestreetasc.co.uk/apple-touch-icon-ipad-retina.png">
    <link rel="mask-icon" href="https://www.chesterlestreetasc.co.uk/wp-content/themes/chester/img/chesterIcon.svg" color="#bd0000">

    <!-- Custom CSS -->
    <style>
    body{padding-top:70px}
    </style>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/services/lostandfound">Lost &amp; Found Property</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="/services/lostandfound/lost.php">Lost Property</a>
                    </li>
                    <li>
                        <a href="/services/lostandfound/found.php">Found Property</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Lost Property</h1>
                <p class="lead">A list of all reported Lost Property</p>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
        <div class="col-xs-12">
        	<hr>
        	<p>
        		<a onCLick="window.location.reload()" class="btn btn-primary"><i class="fa fa-refresh"></i> Refresh</a> 
        		<a href="mailto:lostproperty@chesterlestreetasc.co.uk" class="btn btn-success"><i class="fa fa-envelope"></i> Report Lost Property</a>
        	</p>
    	</div>
        
        <div class="col-xs-12">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <th>Item</th>
                    <th>Brand</th>
                    <th>Description</th>
                    <th>Intitials</th>
                    <th>Belongs To</th>
                </thead>
    
                <script type="text/javascript">
                /*
                    importGSS() is called from the callback at the end of the Google Spreadsheet reference in the second script
                    creates a JSON object that contains all the data from the spreadsheet
                    we loop through json.feed.entry which contains each row of the spreadsheet
                    we split each row into individual cells (known) then parse them into user friendly html
                */
    
                    function importGSS(json) {
                        console.log('finished');
                        console.dir(json);
    
    
                         for (var i = 0; i < json.feed.entry.length; i++) {
                            var entry = json.feed.entry[i];
                            var row = entry.content.$t;
    
                            document.write('<tr>');
    
                            var cells = row.split(",")
    
                            var clothing_item = cells[0].replace(/[a-z]*: /i, '');
                            var brand = cells[1].replace(/[a-z]*: /i, '');
                            //var link = '<a href="' + url + '" target="_blank">' + url + '</a>';
                            var description = cells[2].replace(/[a-z]*: /i, '');
                            var ititials = cells[3].replace(/[a-z]*: /i, '');
                            var belongs_to = cells[4].replace(/[a-z]*: /i, '');
    
    
    
                            var line = '<td>' + clothing_item + '</td>' + '<td>' + brand + '</td>' + '<td>' + description + '</td>' + '<td>' + ititials + '</td>' + '<td>' + belongs_to + '</td>';
                            document.write(line);
                            }
    
                            document.write('</tr>');
    
                        
    
                    }
    
    
    
                </script>
    
                <script src="https://spreadsheets.google.com/feeds/list/1d0zHGryZDrfSgf40uxzFljR5cXWEhWsUPKbP5scOlv4/od6/public/values?alt=json-in-script&callback=importGSS"></script>
    
            </table>
        </div>
        </div>
        </div>

    </div><!-- / Container -->  
   	<div class="cls-global-footer cls-global-footer-inverse cls-global-footer-body" style="margin-top:30px">
       <div class="container">
          
            <div class="row">
            <div class="col-md-12">
            	<address>Burns Green Leisure Centre<br>Chester-le-Street<br>DH3 3QH
                </address>
                <p><i class="fa fa-phone fa-fw" aria-hidden="true"></i>  <a href="tel:03000266444">03000 266 444</a><br>
                <i class="fa fa-envelope fa-fw" aria-hidden="true"></i> <a href="mailto:enquiries@chesterlestreetasc.co.uk" target="new">E-Mail</a></p>
            	<hr>
                <p>&copy; <?php echo date("Y"); ?> Chester-le-Street ASC<br>
                Based on <a href="https://github.com/drprtr/magic-bookmarks" title="Magic Bookmarks">Magic Bookmarks</a> by Graeme Porter on GitHub</p>
            </div>
            </div>
        
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="/wp-content/themes/chester/js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/wp-content/themes/chester/js/bootstrap.min.js"></script>

</body>

</html>
