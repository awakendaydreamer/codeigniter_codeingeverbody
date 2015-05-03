<div class="span10">
토픽메인
<?php
$conn = mysqli_connect('localhost','root','tjdghk2q');
mysqli_select_db($conn,"opentutorials");
$result = mysqli_query($conn,'SELECT * FROM economy');


 ?>
<table border=1px;>


  <thead>
    <tr>
      <th>번호</th>
      <th>ch1</th>
      <th>ch2</th>
      <th>ch3</th>
      <th>CH4</th>
      <th>CH5</th>
      <th>ch6</th>
      <th>ch7</th>
      <th>ch8</th>
      <th>CH9</th>
      <th>CH10</th>
    </tr>
  </thead>
  <tbody>
      <?foreach($result as $listitem):?>
      <tr>

        <td><?=$listitem['nickname']?></td>
        <td>
          <div class="btn-group" role="group">
            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
              <?=$listitem['ch1']?>
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">+</a></li>
                <li><a href="#">-</a></li>

            </ul>
          </div>
      </td>
        <td><?=$listitem['ch2']?></td>
        <td><?=$listitem['ch3']?></td>
        <td><?=$listitem['ch4']?></td>
        <td><?=$listitem['ch5']?></td>
        <td><?=$listitem['ch6']?></td>
        <td><?=$listitem['ch7']?></td>
        <td><?=$listitem['ch8']?></td>
        <td><?=$listitem['ch9']?></td>
        <td><?=$listitem['ch10']?></td>

    </tr>
      <?endforeach;?>
  </tbody>
</table>



</div>
