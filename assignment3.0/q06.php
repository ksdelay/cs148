<?php

include "top.php";

// Begin output
print '<article>';
print '<h2>Query 6 SELECT fldCourseName FROM tblCourses WHERE fldCourseName like "%data%" and fldDepartment not like "CS"</h2>';
print '<table>';

 $query = 'SELECT fldCourseName FROM tblCourses WHERE fldCourseName like "%data%" and fldDepartment not like "CS"';
$info = $thisDatabaseReader->select($query, "", 1, 2, 4, 0, false, false);
 //$info2 = $thisDatabaseReader->testQuery($query, "", 1, 2, 4, 0, false, false);
// print $info2;
 $columns =1;
 $highlight = 0;
 print '<p>total records: '. count($info).'</p>';
 
 foreach ($info as $rec) {

       
        print '<tr>';
        for ($i = 0; $i < $columns; $i++) {
            print '<td>' . $rec[$i] . '</td>';
        }
        print '</tr>';
    }

// print $thisDatabaseReader->testQuery($query, "", 0, 0, 0, 0, false, false);
print '</article>';
include "footer.php";
?>