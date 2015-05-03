<div class="span10" class="container-fluid">
토픽메인
<?php
$conn = mysqli_connect('localhost','root','tjdghk2q');
mysqli_select_db($conn,"opentutorials");
$result = mysqli_query($conn,'SELECT * FROM taxlaw');

 ?>

<table border=2px;>

  <thead>
    <tr>
      <th>닉네임</th>
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
      <th>CH11</th>
      <th>CH12</th>
      <th>CH13</th>
      <th>CH14</th>
      <th>CH15</th>
      <th>CH16</th>
      <th>CH17</th>
      <th>CH18</th>
      <th>CH19</th>
      <th>CH20</th>
      <th>CH21</th>
      <th>CH22</th>
      <th>CH23</th>
      <th>CH24</th>
    </tr>
  </thead>
  <tbody>
      <?foreach($result as $listitem):?>
    <tr>
      <td><?=$listitem['nickname']?></td>

      <td>
          <div class="btn-group" role="group">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

              <?=$listitem['ch1']?>
              <span class="caret"></span>
            </button>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">+</a></li>
                <li><a href="#">-</a></li>

            </ul>
          </div>
      </td>

      <td>
          <div class="btn-group" role="group">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <?=$listitem['ch2']?>
            <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu">
              <li><a href="#">+</a></li>
              <li><a href="#">-</a></li>

          </ul>
        </div>
      </td>

      <td>
        <div class="btn-group" role="group">
          <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

            <?=$listitem['ch3']?>
        <span class="caret"></span>
        </button>
        <ul class="dropdown-menu" role="menu">
          <li><a href="#">+</a></li>
          <li><a href="#">-</a></li>
        </ul>
      </div>
    </td>
    <td>
      <div class="btn-group" role="group">
        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

          <?=$listitem['ch4']?>
      <span class="caret"></span>
      </button>
      <ul class="dropdown-menu" role="menu">
        <li><a href="#">+</a></li>
        <li><a href="#">-</a></li>
      </ul>
    </div>
  </td>
  <td>
    <div class="btn-group" role="group">
      <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

        <?=$listitem['ch5']?>
    <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu">
      <li><a href="#">+</a></li>
      <li><a href="#">-</a></li>
    </ul>
  </div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch6']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch7']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch8']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch9']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch10']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch11']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch12']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch13']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch14']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch15']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch16']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch17']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch18']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch19']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch20']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch21']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch22']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch23']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>
<td>
  <div class="btn-group" role="group">
    <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="false">

      <?=$listitem['ch24']?>
  <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a href="#">+</a></li>
    <li><a href="#">-</a></li>
  </ul>
</div>
</td>

    </tr>
      <?endforeach;?>
  </tbody>
</table>



</div>
