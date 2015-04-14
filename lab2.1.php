<?php
/**
* Created by PhpStorm.
* User: olegilnytskyi
* Date: 4/11/15
* Time: 12:54 PM
*/


$_GET; // global array with get parameters
//var_dump($_GET);
//var_dump($_POST);

//$test = isset($_GET['param1']);
//var_dump($test);

if (isset($_GET['param1'])) {
  $param1 = $_GET['param1'];
} else {
  $param1 = '';
}
if (isset($_GET['param2'])) {
  $param2 = $_GET['param2'];
} else {
  $param2 = '';
}                // Перевірка чи існує param1 і param2

$selectedPlus     = '';
$selectedMinus    = '';
$selectedMultiple = '';
$selectedDivide   = '';      // Оголошення змінних, ореперацій
if (isset($_GET['operation'])) {    // якщо операція існує виконати наступні дії
//    if ($_GET['operation'] === '+') {
//    if ($_GET['operation'] === '+') {
//        $sum = $param1 + $param2;
//        $selectedPlus = 'selected="selected"';
//    } elseif ($_GET['operation'] === '-') {
//        $sum = $param1 - $param2;
//        $selectedMinus = 'selected="selected"';
//    } elseif ($_GET['operation'] === '*') {
//        $sum = $param1 * $param2;
//        $selectedMultiple = 'selected="selected"';
//    } elseif ($_GET['operation'] === '/') {
//        $sum = $param1 / $param2;
//        $selectedDivide = 'selected="selected"';
//    }

  switch($_GET['operation']) {     // Якщо значення змінної відповідає значенню одного з блоків case, перемикаються і виконуються операції
      case '+':
          $sum = $param1 + $param2;
          $selectedPlus = 'selected="selected"';
          break;

      case '-':
          $sum = $param1 - $param2;
          $selectedMinus = 'selected="selected"';
          break;

      case '*':
          $sum = $param1 * $param2;
          $selectedMultiple = 'selected="selected"';
          break;

      case '/':
          $sum = $param1 / $param2;
          $selectedDivide = 'selected="selected"';
          break;

      default:
          break;
  }
} else {
  $sum = '';
}

//var_dump($sum);   //виведення інформації про змінну в браузері

?>

<html>
<head>
  <meta charset="UTF-8">
</head>
<body>
  <form action="test.php" method="get">   <!--метод GET виконує передачуц даних в стрічку URL//-->
      <input type="text" name="param1" value="<?php echo $param1 ?>"> <!--поле для вводу значення param1-->
      <select name="operation"> //вибір операції
          <option <?php echo $selectedPlus ?> value="+">+</option>
          <option <?php echo $selectedMinus ?> value="-">-</option>
          <option <?php echo $selectedMultiple ?> value="*">*</option>
          <option <?php echo $selectedDivide ?> value="/">/</option>
      </select>
      <input type="text" name="param2" value="<?php echo $param2 ?>"> <!--поле для вводу значення param2-->
      =
      <?php echo $sum ?> <!--виведення змінної sum-->
      <br><br>
      <button type="submit" name="submit" value="submit">Calculate</button>  <!--кнопка калькуляції введених значень-->
  </form>
</body>
</html>

