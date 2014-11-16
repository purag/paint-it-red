<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Paint it Red</title>
  
  <link href="http://fonts.googleapis.com/css?family=Titillium+Web:400,700,900"
        rel="stylesheet">
        
  <script src="//code.jquery.com/jquery-latest.min.js"></script>
  <script src="jquery.fittext.js"></script>
  <script>
    $(function(){
      $("h1").fitText(0.6);
    });
  </script>
  
  <style>
  
    body {
      background: #c40000;
      margin: 0;
      padding: 0;
    }
    
    header {
      height:10%;
    }
    
    h1 {
      width:100%;
      height:100%;
      line-height:100%;
      
      text-align: center;
      margin: 0;
      padding: 0;
      font-family: 'Titillium Web', sans-serif;
      font-weight: 900;
      color: #880000;
      
      background: -webkit-linear-gradient( #880000 0%, rgba(0,0,0,0) 90% );
      -webkit-background-clip: text;
      -webkit-text-fill-color:transparent;
    }
  
  </style>
</head>
<body>
  <main>
    <header>
      <h1>
        PAINT IT RED
      </h1>
    </header>
    
    <article>
      Just some content -- for now!
    </article>
  </main>
</body>