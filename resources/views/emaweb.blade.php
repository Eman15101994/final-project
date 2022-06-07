@extends("layouts.app")
@section("mycontent")
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="Learning" content="Html For Beginners">
    <link rel="stylesheet" href="Style.css">
    <title>HTML Tutorial</title>
    <style>
      body
{
    margin: 0;
    padding: 0px;
    font-family: Arial, Tahoma;
    background-image:url("image/q.jpg")
    
}
header
{
    overflow: hidden;
    display: inline-block; 


  }
  header a
  {
    float: left;
  color: rgb(10, 4, 4);
  text-align: center;
  padding: 30px 0;
  text-decoration: none;
  font-size:xx-large;
  font-family: 'Lucida Sans';
  font-style: italic; 
  margin-right: 250px;
  }
  header img
  {
    padding-right: 400px;
    padding-left: 20px;
  }


.content
{
    text-align: center;
    padding: 20px 0;
    font-size:large;
    color: #070202;
}
.footer
{
    color: #0f0e0e;
    padding: 10px 0;
    font-size: medium;
    text-align: center;
}

h1,h2,h3,h4,h5,h6
{
    color: #0c0a0a;
    padding-left: 10px;
    font-size: large;
}
p,.p1
{
    color: #0e0808;
    padding-left: 8px;
}
.drop
{
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
  }
  
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  .dropdown-content a:hover {background-color: #f1f1f1}
  
  .dropdown:hover .dropdown-content {
    display: block;
  }
  
  .dropdown:hover .dropbtn {
    background-color: #3e8e41;
  }

mark
{
    background-color: #cfc2c2;
}
      </style>
</head>
<body>
   
         <div class="dropdown">
         <button class="dropbtn">HTML</button> 
         <div class="dropdown-content">
        <a href="type.html">&lt;p&gt;</a>
        <a href="tag_area.html">&lt;area&gt;</a>
        <a href="tag_base.html">&lt;base&gt;</a>
        <a href="tag_wbr.html">&lt;wbr&gt;</a>
        <a href="tag_cite.html">&lt;cite&gt;</a>
        <a href="tag_blockquote.html">&lt;blockquote&gt;</a>
        <a href="tag_summary.html">&lt;summary&gt;</a>
        <a href="tag_figure.html">&lt;figure&gt;</a>
        <a href="tag_address.html">&lt;address&gt;</a>
        <a href="tag_meter.html">&lt;meter&gt;</a>
    </div>
    <button class="drop">CSS</button> 
    <button class="drop">JAVASCRIPT</button> 
    <button class="drop">PHP</button> 
    <button class="drop">SQL</button>
    <button class="drop">PYTHON</button>
    <button class="drop">BOOTSTRAB</button>  
    </div>
     
  
       <p><b>&lt;cite&gt; tag in HTML:</b>

          <li>It is a tag used to identify business titles such as books, movies, photos and designs.</li>
          <li>Only the title of the work is placed inside the &lt;cite&gt;hashtag</li>
       </p> 
            <hr>
            <h1> Example</h1>
            <img src="image/E.png" width="200PX" height="100px">
            <p>This is <cite>EM </cite>School Logo.</p>
            <strong>It is noted that the speech written inside &lt;cite&gt; appears in italics and its properties can be controlled through css</strong>
            <hr>
            <h2><b><em>To find out how to write the code, click here</em> </b></h2>
     <button type="button"><a href="https://www.w3schools.com/tags/tryit.asp?filename=tryhtml5_cite">click her</a></button>

</body>
</html>
@endsection
