
<?php

include('data.php');

$students = $datas['students'];
$coachs = $datas['coachs'];
$nbStudents = count($students);
$nbCoachs = count($coachs);
$displayStudentsFor = '';
$displayCoachsFor = '';


for($i = 0; $i < $nbStudents ; $i++){

  $displayStudentsFor .= '<tr>
                        <td>'.$students[$i]['firstname'].'</td>
                        <td>'.$students[$i]['lastname'].'</td>
                        <td>'.implode(' ', $students[$i]['address']).'</td>
                      </tr>';

}
for($i = 0; $i < $nbCoachs ; $i++){
  $birth = $coachs[$i]['birthdate'];
  $coachsBirth = $birth->format('d M Y');

  $displayCoachsFor .= '<tr>
                        <td>'.$coachs[$i]['firstname'].'</td>
                        <td>'.$coachs[$i]['lastname'].'</td>
                        <td>'.implode(' ', $coachs[$i]['skills']).'</td>
                        <td>'.$coachsBirth.'</td>
                      </tr>';

}

$i = 0;
$j = 0;
$displayStudentsWhile = '';
$displayCoachsWhile = '';

while($i < $nbStudents) {

  $displayStudentsWhile .= '<tr>
                        <td>'.$students[$i]['firstname'].'</td>
                        <td>'.$students[$i]['lastname'].'</td>
                        <td>'.implode(' ', $students[$i]['address']).'</td>
                      </tr>';

  $i++;

}
while($j < $nbCoachs) {
  $birth = $coachs[$j]['birthdate'];
  $coachsBirth = $birth->format('d M Y');
  $displayCoachsWhile .= '<tr>
                        <td>'.$coachs[$j]['firstname'].'</td>
                        <td>'.$coachs[$j]['lastname'].'</td>
                        <td>'.implode(' ', $coachs[$j]['skills']).'</td>
                        <td>'.$coachsBirth.'</td>
                      </tr>';
  $j++;
}


$displayStudentsForeach = '';
$displayCoachsForeach= '';

foreach($students as $student) {

  $displayStudentsForeach .= '<tr>';

  foreach($student as $key => $value) {

    // address is array use if $key == 'address' ..
    if($key !== 'address'){
      $displayStudentsForeach .='<td>'.$value.'</td>';
    }else{
      $displayStudentsForeach .= '<td>'.implode(' ', $value).'</td>';

    }

  }


$displayCoachsForeach .= '</tr>';
}
foreach($coachs as $coach) {

  $displayCoachsForeach .= '<tr>';

  foreach($coach as $key => $value) {

    if($key == 'birthdate'){
      $value = $value -> format('d M Y');
      $displayCoachsForeach .=  '<td>'.$value.'</td>';
    } else {
      if($key == 'skills'){
        $displayCoachsForeach .= '<td>'.implode(' ', $value).'</td>';
      }else {
        $displayCoachsForeach .='<td>'.$value.'</td>';
      }
    }


  }


$displayCoachsForeach.= '</tr>';
}
?>
<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1>PHP Loops</h1>
    <hr>
    <h2>For</h2>
    <h3>Students</h3>

<div id="tableCenter">
    <table class="table">
      <thead>
        <tr>
          <th>Lastname</th>
          <th>Firstname</th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>
        <?php echo $displayStudentsFor; ?>
      </tbody>
    </table>
</div>

<div id="tableCenter">
    <h3>Coachs</h3>
  </div>

  <div id="tableCenter">
    <table class="table">
      <thead>
        <tr>
          <th>Lastname</th>
          <th>Firstname</th>
          <th>Skills</th>
          <th>Birthdate</th>
        </tr>
      </thead>
      <tbody>
        <?php echo $displayCoachsFor; ?>
      </tbody>
    </table>
  </div>

  <hr class="espaceHr">
   <h2>While</h2>
   <h3>Students</h3>

   <div id="tableCenter">
    <table class="table">
      <thead>
        <tr>
          <th>Lastname</th>
          <th>Firstname</th>
          <th>Address</th>
        </tr>
      </thead>
      <tbody>
        <?php echo $displayStudentsWhile; ?>
      </tbody>
    </table>
  </div>

<div id="tableCenter">
    <h3>Coachs</h3>
  </div>

  <div id="tableCenter">
    <table class="table">
      <thead>
        <tr>
          <th>Lastname</th>
          <th>Firstname</th>
          <th>Skills</th>
          <th>Birthdate</th>
        </tr>
      </thead>
      <tbody>
        <?php echo $displayCoachsWhile; ?>
      </tbody>
    </table>
  </div>

    <hr class="espaceHr">
      <h2>For each</h2>
      <h3>Students</h3>

      <div id="tableCenter">
       <table class="table">
         <thead>
           <tr>
             <th>Lastname</th>
             <th>Firstname</th>
             <th>Address</th>
           </tr>
         </thead>
         <tbody>
           <?php echo $displayStudentsForeach; ?>
         </tbody>
    </table>
  </div>

<div id="tableCenter">
    <h3>Coachs</h3>
  </div>

  <div id="tableCenter">
    <table class="table">
      <thead>
        <tr>
          <th>Lastname</th>
          <th>Firstname</th>
          <th>Skills</th>
          <th>Birthdate</th>
        </tr>
      </thead>
      <tbody>
        <?php echo $displayCoachsForeach; ?>
      </tbody>
 </table>
</div>

  </body>
</html>
