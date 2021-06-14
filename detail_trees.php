<!DOCTYPE html>

<html>
<head>

<meta charset="utf8">
</head>
<style>
    #link{text-align:center;}
    </style>
<link href="css/detail_trees.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="detail.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
       <!-- <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"> -->
       <script>
	
    const showResult=(value)=>{
   // document.getElementById("keyup").innerHTML = value;
                if (value.length==0) {
                  document.getElementById("show").innerHTML="";
                  document.getElementById("show").style.border="0px";
                  
                  return;
                }
                document.getElementById("show").style.color="white";
                let xmlhttp;
                
                if(window.XMLHttpRequest){
                    xmlhttp = new XMLHttpRequest();
                }
                else{
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                
                xmlhttp.onreadystatechange=()=>{
                    if(xmlhttp.readyState==4 && xmlhttp.status==200){
                       document.getElementById("show").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", `show.php?id=`+value ,true);
                xmlhttp.send();
  }

  function signup(){
    var key= document.getElementById("search").value;
    var ok=true;
    if (key ==""  ){
        alert("Vui lòng điền từ khóa !");
    ok=false;
	    }else if(key == null){
            alert("Vui lòng điền từ khóa !");
             ok=false; 
                           }
	return ok;
}	

</script>
<!-- QUANG CAO -->
<link href="css/ads.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="js/BannerFloat.js"></script>

<!-- -->
<style>
.dropbtn {
  background-color: 		#87cefa;
  color: white;
  padding: 14px;
  font-size: 17px;
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
  background-color: 	#b0c4de;
  min-width: max-content ;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  /* padding: 12px 16px; */
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: rgb(29, 155, 128)}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: rgb(29, 155, 128);

}
</style>
<body>
<div id="wrapper">
        <div id="header"></div>
        <div id="menu">
            <div class="topnav">
            <a class="active" href="index.php">Trang chủ</a>
            <ul id = "drnav">
            <!-- DropList of Species -->
            <div class="dropdown">
            <button class="dropbtn">Loại cây</button>
            <div class="dropdown-content">
                <?php
                    include "connect.php";
                    $key = 'Species';
                    echo "<form action= method=GET>";
                   foreach($sql = $con->query("SELECT DISTINCT * FROM $key") as $value){
                    echo "<a href =treesOfButton.php?id=".$value['Code']."&key=$key>".$value['Species']."</a>";
                   }
                   echo "</form>";
                ?>
              </div>
            </div>
            
            <!-- DropList of Species -->
            <!-- DropList of Landtype -->
            <div class="dropdown">
            <button class="dropbtn">Đất Trồng</button>
            <div class="dropdown-content">

                    <?php
                        include "connect.php";
                        $key = 'Landtype';
                        echo "<form action= method=GET>";
                    foreach($sql = $con->query("SELECT DISTINCT * FROM $key") as $value){
                        
                        echo "<a href =treesOfButton.php?id=".$value['Code']."&key=$key>".$value['Landtype']."</a>";
                        
                    }
                    echo "</form>";
                    ?>
            </div>
            </div>
            <!-- DropList of Landtype -->
            <!-- DropList of Area -->
            <div class="dropdown">
            <button class="dropbtn">Khu vực</button>
            <div class="dropdown-content">
                    <?php
                        include "connect.php";
                        $key = 'Area';
                        echo "<form action= method=GET>";
                    foreach($sql = $con->query("SELECT DISTINCT * FROM $key") as $value){
                        echo "<a href =treesOfButton.php?id=".$value['Code']."&key=$key>".$value['Area']."</a>";
                    }
                    echo "</form>";
                    ?>
            </div>
            </div> 
            <!-- DropList of Area -->
            <!-- DropList of Light -->
            <div class="dropdown">
            <button class="dropbtn">Độ sáng</button>
            <div class="dropdown-content">

                    <?php
                        include "connect.php";
                        $key = 'Light';
                        echo "<form action= method=GET>";
                    foreach($sql = $con->query("SELECT DISTINCT * FROM $key") as $value){
                        
                        echo "<a href =treesOfButton.php?id=".$value['Code']."&key=$key>".$value['Light']."</a>";
                        
                    }
                    echo "</form>";
                    ?>
            </div>
            </div>
            <!-- DropList of Light --> 
            <!-- DropList of Humidity -->
            <div class="dropdown">
            <button class="dropbtn">Độ ẩm</button>
            <div class="dropdown-content">

                    <?php
                        include "connect.php";
                        $key = 'Humidity';
                        echo "<form action= method=GET>";
                    foreach($sql = $con->query("SELECT DISTINCT * FROM $key") as $value){
                        
                        echo "<a href =treesOfButton.php?id=".$value['Code']."&key=$key>".$value['Humidity']."</a>";
                        
                    }
                    echo "</form>";
                    ?>
            </div>
            </div>
            <!-- DropList of Humidity -->
            <!-- DropList of Benefit -->
            <div class="dropdown">
            <button class="dropbtn">Công dụng</button>
            <div class="dropdown-content">

                    <?php
                        include "connect.php";
                        $key = 'Benefit';
                        echo "<form action= method=GET>";
                    foreach($sql = $con->query("SELECT DISTINCT * FROM $key") as $value){
                        
                        echo "<a href =treesOfButton.php?id=".$value['Code']."&key=$key>".$value['Benefit']."</a>";
                        
                    }
                    echo "</form>";
                    ?>
            </div>
            </div>
            <!-- DropList of Benefit -->
            <!-- DropList of Climate -->
            <div class="dropdown">
            <button class="dropbtn">Khí hậu</button>
            <div class="dropdown-content">

                    <?php
                        include "connect.php";
                        $key = 'Climate';
                        echo "<form action= method=GET>";
                    foreach($sql = $con->query("SELECT DISTINCT * FROM $key") as $value){
                        
                        echo "<a href =treesOfButton.php?id=".$value['Code']."&key=$key>".$value['Climate']."</a>";
                        
                    }
                    echo "</form>";
                    ?>
            </div>
            </div>
            <!-- DropList of Climate -->
            <!-- DropList of Growthtime -->
            <div class="dropdown">
            <button class="dropbtn">Thời gian sinh trưởng</button>
            <div class="dropdown-content">

                    <?php
                        include "connect.php";
                        $key = 'Growthtime';
                        echo "<form action= method=GET>";
                    foreach($sql = $con->query("SELECT DISTINCT * FROM $key") as $value){
                        
                        echo "<a href =treesOfButton.php?id=".$value['Code']."&key=$key>".$value['Growthtime']."</a>";
                        
                    }
                    echo "</form>";
                    ?>
            </div>
            </div>
            <!-- DropList of Growthtime --> 
            </ul>

            
            
            
                <div class="search-container">
                <form action="search_page.php" method ="GET" onsubmit="return signup()">
                    <input type="text" placeholder="Tìm kiếm.." id="search" name="search" onkeyup="showResult(this.value)">
                    <button type="submit"><i class="fa fa-search"></i></i></button>
                     
                     </form>
                     <div id="show" onclick="showss(this.value)"></div> 
                </div>
            </div>

    </div>
    </br>
    </br>
      <!-- QUANG CAO -->
<div class="adfloat" id="divBannerFloatLeft">
 <p><a href="http://hocwebgiare.com/" target="_blank"><img src="http://hocwebgiare.com/images/left_banner.png" alt=""></a>
 </p>
</div>
<div class="adfloat" id="divBannerFloatRight">
 <p><a href="http://hocwebgiare.com/" target="_blank"><img src="http://hocwebgiare.com/images/right_banner.jpg" alt=""></a>
 </p>
</div>
<!-- -->
<div id="hienthi-caytrong">
<?php 
$Code=$_GET['id'];
//  echo $Code;
include "connect.php";

$data = $con->query("SELECT * FROM db_trees WHERE Code='$Code'");
$data = $data->fetch_assoc();
	echo '<center>'.'<table frame="border" border=4 >'.'</center>';
    $data = $con->query("SELECT * FROM db_trees WHERE Code='$Code'");
    $data = $data->fetch_assoc();
 echo "<form action= method=GET>";
	echo '<table frame="border" border=4  >';

	echo "<tr id='h1'> <td><h1>".$data['TreeName']."</h1></td></tr>";
    echo "<tr id='tr'>
       <td> <h2>Đặc điểm</h2></td>
        </tr>";
    echo "<tr id='tr'>
        <td id='td'>".$data['Characteristics']."</td>
        </tr>";
    echo "<tr id='tr'>
        <td id='td'><center><img src='".$data['Avatar']."'></center></td>
        </tr>";	
    echo "<tr id='tr'>
        <td> <h2>Cách chăm sóc</h2></td>
         </tr>";   
    echo "<tr id='tr'>
        <td id='td'>".$data['HowToCare']."</td>
        </tr>";	
    echo "<tr id='tr'>
        <td> <h2>Tổng kết</h2></td>
         </tr>";
    echo "<tr id='tr'>
        <td id='td'>".$data['Describe']."</td>
        </tr>";
          
    
    
	echo "</table>";
    echo "</form>";

    $luot=$data['NumberAccess'];
    $luot=$luot+1;
    $sql = $con->query("UPDATE db_trees SET NumberAccess='$luot' WHERE Code ='$Code'");
$con->close();

?>
<div id="footer">
    </div>
</div>
<!--Chat bot -->
<script>!(function () {
  let e = document.createElement("script"),
    t = document.head || document.getElementsByTagName("head")[0];
  (e.src =
    "./js/index.js"),
    (e.async = !0),
    (e.onload = () => {
      window.WebChat.default(
        {
          customData: { language: "en" },
          socketUrl: "http://localhost:5005",
        },
        null
      );
    }),
    t.insertBefore(e, t.firstChild);
})();
</script>
<!--         -->
</body>
</html>