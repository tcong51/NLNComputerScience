<!DOCTYPE html>
<html>
<head>
<meta charset="utf8">
</head>
<title>TRA CỨU THÔNG TIN CÂY TRỒNG</title>
<style>
    #link{text-align:center;}
    </style>
<!-- <link href="css/ds_trees.css" rel="stylesheet" type="text/css" /> -->
<link rel="stylesheet" href="homepage.css">
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
/* min-width : tùy thuộc vào bao nhiêu loại cây, chưa fix hoàn chỉnh. */
  min-width: 462px ;
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
    <div id="ten-content">
        <h2><center>DANH SÁCH CÂY <?php
            include "connect.php"; 
            $id =$_GET['id'];
            $key = $_GET['key'];
            $arrayNameTrees = array('area', 'benefit', 'climate', 'humidity', 'growthtime', 'species', 'landtype', 'light');
            $arrayReturnName = array('Khu vực', 'Công dụng', 'Khí hậu', 'Độ ẩm', 'Thời gian sinh trưởng', 'Loại cây', 'Độ sáng');
            $len = count($arrayNameTrees);
            
            for ($i = 0; $i < $len; $i++){
              if($key == $arrayNameTrees[$i])
                echo mb_strtoupper($arrayReturnName[$i], 'UTF-8');
                echo "\n";
              
            }
						
						
						$sql = $con->query("SELECT DISTINCT * FROM $key WHERE Code='$id'");
						$sql = $sql->fetch_assoc();
						$str = mb_strtoupper($sql[$key],'UTF-8');
						echo $str;
						$con->close();?></center></h2>
    </div>
    <div id="content">
    <?php
    
    $id =$_GET['id'];
    $key = $_GET['key'];    
    include "connect.php";  

    echo "<table >" ;

    foreach ($sql = $con->query("SELECT DISTINCT * FROM db_trees WHERE $key='$id' ") as $value){
        echo "<tr id='tr'>
        
        <td id='link' ><img src='".$value['Avatar']."'></td>
        <td style='width:700px'><h3>".$value['TreeName']."</h3></br> ".$value['Characteristics']."...<a href =detail_trees.php?id=".$value['Code']."> [Xem chi tiết]</a></td>
        </tr>";
        echo '</br>';
        }
      echo "</table>";
    
      
    $con->close();
    ?>
</div>
<div id="footer">
    </div>
</body>
</html>