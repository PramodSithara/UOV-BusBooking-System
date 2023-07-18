<!DOCTYPE HTML>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">

<title>Bus</title>
<link rel="stylesheet" href="../css/box.css">
</head>
<body>
    <div class="main">
        <form id="vev" action="../php/vehical.php" method="post">
            <div class="box">
                <div class="box-img">
                 <img src="../img/bus.jpg" alt="bus">
                </div>

                <div class="form-container">

                            <div class="box2">
                                <select name="bus" required>
                                <option value="bus">L-A-L Bus</option>
                                </select>
                            </div>

                            <table class="modern-table">
                            <tr>
                              <td>
                                <div class="input-box">
                                  <span id="purpose">Select Go /</span></td>
                                  <td><select name="purpose" required>
                                    <option value="" disabled selected>Purpose</option>
                                    <option value="to-campus">Arrive Campus</option>
                                    <option value="from-campus">Go Back to Home</option>
                                    <option value="both">Both</option>
                                  </select></td>
                                </div>
                              </td>
                              <tr>
                              <td>
                                <div class="input-box">
                                  <span id="pick">Town</span></td>
                                  <td><select name="place" required>
                                    <option value="" disabled selected>Select Town</option>
                                    <option value="vavuniya">Vavuniya Town</option>
                                    <option value="vairavapuliyankulam">Vairavapuliyankulam</option>
                                    <option value="pattanichchippuliyankulam">Pattanichchippuliyankulam</option>
                                    <option value="kurumandaku">Kurumandaku</option>
                                    <option value="nelukulam">Nelukulam</option>
                                    <option value="katpakapuram">Katpakapuram</option>
                                    <option value="salambaikulam">Salambaikulam</option>
                                    <option value="purwasamkulam">Purwasamkulam</option>
                                  </select>
                                </div>
                              </td>
                            </tr>
                            <tr>
                              <td> <div class="input-box">
                                  <span id="pick">Pick-Up Date</span></td>
                                  <td><input type="date" placeholder="yyyy-mm-dd" name="pick_date" id="pdate" required>
                                </div></td>
                              </tr>
                              <tr>
                              <td>
                                <div class="input-box">
                                  <span id="pick">Time</span></td>
                                  <td><input type="time" name="time" id="pdate" required></td>
                                </div>
                            </tr>
                           </table>

                </div>
                <input type="submit" value="Rent Now" name="submit" id="co">
            </div>
        </form>
          
    </div>
    <p>
</p>

</body>
</html>