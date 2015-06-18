<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Jim's Auto Parts</title>
  </head>
<body>
  <h1>this is title</h1>
  <p></p>
  <form action="processorder.php" method="post">
  <table border="0">
    <tr>
      <td bgcolor="#cccccc">Item</td>
      <td bgcolor="#cccccc">Quantity</td>
    </tr>
    <tr>
      <td>Tires</td>
      <td align="center"><input type="text" name="tireqty" size="3"
      maxlength="3" /></td>
    </tr>
    <tr>
      <td>Oil</td>
      <td align="center"><input type="text" name="oilqty" size="3"
      maxlength="3" /></td>
    </tr>
    <tr>
      <td>Spark Plugs</td>
      <td align="center"><input type="text" name="sparkqty" size="3"
      maxlength="3" /></td>
    </tr>
    <tr>
      <td>Shipping Address</td>
      <td align="center"><input type="text" name="shipaddress" size="30"
      maxlength="30" /></td>
    </tr>
    <tr>
      <td>How did you find Bob's?</td>
      <td><select name="find">
      <option value = "a">I'm a regular customer</option>
      <option value = "b">TV Ads</option>
      <option value = "c">Phone directory</option>
      <option value = "d">Friends</option>
      </select>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" value="Submit Order" /></td>
    </tr>

  </table>
  </form>


</body>
</html>
