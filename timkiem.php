<?php
//github ThanhOP-Creator
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM `thongtinsp` WHERE CONCAT (`MaSP`, `TenSP`, `GiaSP`, `ThongtinSP`, `NgayXuat`,`AnhSP`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM `thongtinsp`";
    $search_result = filterTable($query);
}


function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "sanpham");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        
         <meta charset="UTF-8">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        
        <title>MODULE SEARCH WITH PHP AND MYSQL BY THANHOP</title>
    </head>
    <body>
    <div class="container">
   <div class="row">
   <div class="col-md-10 col-md-offset-1" style="margin-top: 5%;">
   <div class="row">
                
        <form action="timkiem.php" method="post">
        <div class="col-md-6">
            <input type="text" name="valueToSearch" placeholder="Value To Search" class='form-control'><br><br>
        </div>

         <div class="col-md-6 text-left">
             <button class="btn" name="search">Search</button>
        </div>
            
            <!-- <input type="submit" name="search" value="Filter"><br><br> -->
            
            <table class="table table-bordered" >
            <tr >
                <th>Mã Sản Phẩm</th>
                <th>Tên Sản Phẩm</th>
                <th>Giá Sản Phẩm</th>
                <th>Mô tả sản phẩm</th>
                <th>Ngày Xuất</th>
                <th>Ảnh SP</th>
                
            </tr>


                <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td><?php echo $row['MaSP']; ?></td>
                <td><?php echo $row['TenSP']; ?></td>
                <td><?php echo $row['GiaSP']; ?></td>
                <td><?php echo $row['ThongtinSP']; ?></td>
                <td><?php echo $row['NgayXuat']; ?></td>
                <td> <img style="width: 200px" src="images/<?php echo $row['AnhSP'] ?>" ></td>
            </tr>
                <?php endwhile;?>
            </table>
        </form>

   </div>
   </div>
   </div>
    </body>
</html>