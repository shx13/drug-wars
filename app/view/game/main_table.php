<div id="gameBox">

<h1>DRUG WARS</h1>

<h6 class="date">DATE <?php echo date('m/d/Y', Session::get('game_date')); ?></h6>
<h6 class="hold">HOLD <?php echo Session::get('hold'); ?></h6>
<table class="top">
  <tr>
    <td class="stash">STASH</td>
    <td class="loc"><?php echo Session::get('user_location'); ?></td>
    <td class="trench">TRENCH COAT</td>
  </tr>
</table>
<table class="bottom">
  <tr>
    <td>
      <ul>
        <li>COCAINE &nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('stash_cocaine'); ?></li>
        <li>HEROIN  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('stash_heroin'); ?></li>
        <li>ACID    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('stash_acid'); ?></li>
        <li>WEED    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('stash_weed'); ?></li>
        <li>SPEED   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('stash_speed'); ?></li>
        <li>LUDES   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('stash_ludes'); ?></li>
        <br>
        <li>BANK    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('bank'); ?></li>
        <li>DEBT    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('debt'); ?></li>
      </ul>
    </td>
    <td>
      <ul>
        <li>COCAINE &nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('coat_cocaine'); ?></li>
        <li>HEROIN  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('coat_heroin'); ?></li>
        <li>ACID    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('coat_acid'); ?></li>
        <li>WEED    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('coat_weed'); ?></li>
        <li>SPEED   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('coat_speed'); ?></li>
        <li>LUDES   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('coat_ludes'); ?></li>
        <br>
        <li>GUNS    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo Session::get('guns'); ?></li>
        <li>CASH    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <span id="js_coat_cash"><?php echo Session::get('cash'); ?></span></li>
      </ul>
    </td>
  </tr>
</table>

</div>