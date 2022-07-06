<?php
//github ThanhOP-Creator
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM `thongtinsp` WHERE CONCAT (`MaSP`, `TenSP`, `GiaSP`, `ThongtinSP`, `NgayXuat`) LIKE '%".$valueToSearch."%'";
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
        <title>MODULE SEARCH WITH PHP AND MYSQL BY THANHOP</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="timkiem.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
            <tr>
                <th>MasP</th>
                <th>TenSP</th>
                <th>GiaSP</th>
                <th>ThongtinSP</th>
                <th>NgayXuat</th>
            </tr>


                <?php while($row = mysqli_fetch_array($search_result)):?>
            <tr>
                <td><?php echo $row['MaSP']; ?></td>
                <td><?php echo $row['TenSP']; ?></td>
                <td><?php echo $row['GiaSP']; ?></td>
                <td><?php echo $row['ThongtinSP']; ?></td>
                <td><?php echo $row['NgayXuat']; ?></td>
            </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>