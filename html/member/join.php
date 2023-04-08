<?php include "/var/www/html/header.php";?>

<div class="article_div">

  <div class="join_container">

    <div class="join_title">
      <h>join</h>
    </div>

    <form method="POST" action="/member/join_pro.php">

      <fieldset class="join_field">
        <legend>personal information</legend>

        <label class="join_label">ID</label>
        <input class="join_input" name="i_id" type="text">
        <div class="clear"></div>

        <label class="join_label">PASSWORD</label>
        <input class="join_input" name="i_pass" type="password">
        <div class="clear"></div>

        <label class="join_label">CHECK PASSWORD</label>
        <input class="join_input" name="i_pass" type="password">
        <div class="clear"></div>

        <label class="join_label">NAME</label>
        <input class="join_input" name="i_name" type="text">
        <div class="clear"></div>

        <label class="join_label">NICKNAME</label>
        <input class="join_input" name="i_nick" type="text">
        <div class="clear"></div>

        <label class="join_label">PHONE</label>
        <input class="join_input" name="i_phone" type="tel">
        <div class="clear"></div>

        <label class="join_label">E-MAIL</label>
        <input class="join_input" name="i_mail" type="email">
        <div class="clear"></div>
      </fieldset>

      <input class="join_button1" type="submit" value="register">
      <input class="join_button2" type="button" value="cancle"
      onClick="javascript: location.href='/index.php';">

    </form>

  </div>

</div>

<?php include "/var/www/html/footer.php";?>
