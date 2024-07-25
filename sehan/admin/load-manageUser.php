<?php

function loadUsers()
{
    include '../database/config.php';

    //    <div id="addData1" style="position:relative">
    //     <img src="..\assect\managerPhoto\KalumGunawardana.webp" alt="" style="border-radius: 50%; width:50px; height: 50px; border: 2px solid black; margin-right: 10px;">
    //      Mr.Sehan DEvinda(Manager in website crativity)<br>
    //     sehandevinda1@gmail.com
    //   <div style="position: absolute; margin-left: 480px; display: flex;">
    //    <button style="  width:60px; border: none; cursor: pointer; background-color: transparent; font-size: 15px; color: rgb(65, 157, 119);">Show</button>
    //   <button style="  border: none; background: transparent;cursor: pointer;"><img src="..\assect\bin-icon.png" alt="bin" style="width: 25px; height: 25px;"></button>
    //   </div>
    //  </div> 

    $sql = "SELECT WMID,name,email,access_level FROM webmaster";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $WMID = $row["WMID"];
            echo "<div id=\"addData1\" style=\"position:relative\">";
            echo "<img src=\"..\assect\managerPhoto\KalumGunawardana.webp\" alt=\"\" style=\"border-radius: 50%; width:50px; height: 50px; border: 2px solid black; margin-right: 10px;\">";
            echo $row["name"] . "(" . $row["access_level"] . ")<br>" . $row["email"];
            echo "<div style=\"position: absolute; margin-left: 480px; display: flex;\">";
            echo "<button onclick=\"showDetails($WMID)\"style=\"  width:60px; border: none; cursor: pointer; background-color: transparent; font-size: 15px; color: rgb(65, 157, 119);\">Show</button>";
            echo "<button onclick=\"deleteUser($WMID)\" style=\" border: none; background: transparent;cursor: pointer;\"><img src=\"..\assect\bin-icon.png\" alt=\"bin\" style=\"width: 25px; height: 25px;\"></button>";
            echo "</div></div>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}

function loadUserRequests()
{
    include '../database/config.php';

    // <div id="addData2" style="position:relative">
    //      <img src="..\assect\managerPhoto\KalumGunawardana.webp" alt="" style="border-radius: 50%; width:50px; height: 50px; border: 2px solid black; margin-right: 10px;">
    //  Ms. Sonia Elika<br>
    //    Forget Password
    //   <div style="position: absolute; margin-left: 450px; display: flex;">
    //    <button style="  width:60px; border: none; cursor: pointer; background-color: transparent; font-size: 15px; color: blue">Details</button>
    //    <button style="  width:60px; border: none; cursor: pointer; background-color: transparent; font-size: 15px; color:red;">Reject</button>
    //   </div>
    //  </div>

    // $sql1 = "SELECT(SELECT name FROM member WHERE MID = r.MID)as name, Rtype FROM request r WHERE status=0";
    $sql1 = "SELECT  m.name, m.email, r.Rtype FROM member m, request r WHERE m.MID = r.MID AND status=0";
    $result = $conn->query($sql1);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div id=\"addData2\" style=\"position:relative\">";
            echo "<img src=\"..\assect\managerPhoto\KalumGunawardana.webp\" alt=\"\" style=\"border-radius: 50%; width:50px; height: 50px; border: 2px solid black; margin-right: 10px;\">";
            echo $row["name"] . " (" . $row["email"] . ")" . "<br>" . $row["Rtype"];
            echo "<div style=\"position: absolute; margin-left: 450px; display: flex;\">";
            echo "<button style=\"width:60px; border: none; cursor: pointer; background-color: transparent; font-size: 15px; color: blue\">Details</button>";
            echo "<button style=\"width:60px; border: none; cursor: pointer; background-color: transparent; font-size: 15px; color:red;\">Reject</button>";
            echo "</div></div>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
}

include '..\database\config.php';

?>