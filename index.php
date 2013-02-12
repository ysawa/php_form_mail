<?php require_once './default.php'; ?>
<?php $subtitle = ""; ?>
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
      <p>お問い合わせ内容を記入してください。</p>
      <form action="./confirm.php" method="post">
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
        <input name='name' placeholder='名前' type='text' />
        </td>
        </tr>
        <tr>
        <th>
        メールアドレス
        </th>
        <td>
        <input name='email' placeholder='メールアドレス' type='text' />
        </td>
        </tr>
        <tr>
        <th>
        お問い合わせ内容
        </th>
        <td>
        <textarea name='content' placeholder='お問い合わせ内容' rows='10'></textarea>
        </td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
        <td class='actions' colspan='2'>
        <input type='submit' value='確認画面に進む' />
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
