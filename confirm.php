<?php require_once './default.php'; ?>
<?php $subtitle = '確認画面'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang='ja'>
  <head>
  <?php include 'head.php'; ?>
  </head>
  <body>
    <header id='global_head'>
      <?php include 'header.php'; ?>
    </header>
    <section id='global_body'>
      <form action="./finish.php" method="post">
        <p>内容を確認して送信してください。</p>
        <table class='fields'>
        <thead>
        <tr>
        <th></th>
        <th>
        内容
        </th>
        </tr>
        </thead>
        <tbody>
        <tr>
        <th>
        名前
        </th>
        <td>
          <?php echo $_POST['name']; ?>
          <input name='name' placeholder='名前' type='hidden' value="<?php echo htmlspecialchars($_POST['name']); ?>" />
        </td>
        </tr>

        <tr>
        <th>
        メールアドレス
        </th>
        <td>
          <?php echo $_POST['email']; ?>
          <input name='email' placeholder='名前' type='hidden' value="<?php echo htmlspecialchars($_POST['email']); ?>" />
        </td>
        </tr>
        <tr>
        <th>
        お問い合わせ内容
        </th>
        <td>
          <?php echo nl2br($_POST['content']); ?>
          <input name='content' placeholder='名前' type='hidden' value="<?php echo htmlspecialchars($_POST['content']); ?>" />
        </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
        <td class='actions' colspan='2'>
        <input type='submit' />
        </td>
        </tr>
        </tfoot>
        </table>
      </form>
    </section>
    <footer id='global_foot'>
      <?php include 'footer.php'; ?>
    </footer>
  </body>
</html>
