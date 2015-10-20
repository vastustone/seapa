<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
  $("#submit").click(function(){
      if($("#email").val() == ""){
        $("#error").text('メールアドレスが入力されていません。');
        return false;
      }
  });
});
</script>
</head>
<body>
<form action="result" method="post"><input type="hidden" name="mode" value="email_regist"/>
  <table><caption>メールアドレス登録フォーム</caption>
    <tr>
      <td class="item">E-mail:</td>
      <td><input type="text" id="email" name="email" size="40" /><div class="error" id="error"></div></td>
    </tr>
  </table>
  <div><input type="submit" id="submit" name="submit" value=" 送 信 "/></div>
</form>
</body>
</html>
