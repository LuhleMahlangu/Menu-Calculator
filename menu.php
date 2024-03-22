<!DOCTYPE html>
<html>
<head>
    <title>Calculator</title>
</head>
<body>
    <div id="page-wrap">
        <h1>Calculator</h1>
        <?php
        $first_num = $_POST['first_num'];
        $second_num = $_POST['sec_num']; // Updated input name
        $operator = $_POST['operator'];
        $result = '';
        if (is_numeric($first_num) && is_numeric($second_num)) {
            switch ($operator) {
                case "Add":
                    $result = $first_num + $second_num;
                    break;
                case "Subtract":
                    $result = $first_num - $second_num;
                    break;
                case "Multiply":
                    $result = $first_num * $second_num;
                    break;
                case "Divide":
                    if ($second_num != 0) {
                        $result = $first_num / $second_num;
                    } else {
                        $result = "Cannot divide by zero";
                    }
                    break;
            }
        }
        ?>
        <form action="menu.php" method="post">
            <table>
            <tr>
                    <td>Your result:</td>
                    <td><input type="text" name="result" value="<?php echo $result; ?>" readonly></td>
                </tr>
                
                <tr>
                    <td>Enter your first num:</td>
                    <td><input type="text" name="first_num" value="<?php echo isset($first_num) ? $first_num : ''; ?>" required></td>
                </tr>
                <tr>
                    <td>Enter your second num:</td>
                    <td><input type="text" name="sec_num" value="<?php echo isset($second_num) ? $second_num : ''; ?>" required></td>
                </tr>
                <tr>
                    <td>Select your choice:</td>
                    <td>
                        <select name="operator" required>
                            <option value="Add" <?php if ($operator == "Add") echo "selected"; ?>>+</option>
                            <option value="Subtract" <?php if ($operator == "Subtract") echo "selected"; ?>>-</option>
                            <option value="Multiply" <?php if ($operator == "Multiply") echo "selected"; ?>>x</option>
                            <option value="Divide" <?php if ($operator == "Divide") echo "selected"; ?>>/</option>
                        </select>
                        <tr>
                    <td></td>
                    <td><input type="submit" value="Show Result"></td>
                </tr>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>

