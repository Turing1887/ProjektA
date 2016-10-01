<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Kingsburg</title>

        <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
        <link rel="icon" href="../favicon.ico" type="image/x-icon">
        <meta name="theme-color" content="#ffffff">
    </head>
    <body>
        <?php include("../Gruppen_de/ingame_menu.php"); ?>
        <hr>

		  <section>
            <table border="1">
            <tr>
                <td id="phase1">
                    Phase 1
                </td>
                <td id="phase2">
                    Phase 2
                </td>
                <td id="phase3">
                    Phase 3
                </td>
                <td id="phase4">
                    Phase 4
                </td>
                <td id="phase5">
                    Phase 5
                </td>
                <td id="phase6">
                    Phase 6
                </td>
                <td id="phase7">
                    Phase 7
                </td>
                <td id="phase8">
                    Phase 8
                </td>
            </tr>
            </table>
        </section>
		    <hr>

        <section>
            <table border="1">
            <tr>
                <td>
                Username1
                </td>
            </tr>
            <tr>
                <td>
                0
                </td>
            </tr>
            </table>

            <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
              <input type="submit" name="dice" id="dice1" value="Dice"><br>
            </form>
            <section id="number-box">
              <?php if(isset($_POST['dice'])){ roll_the_dice(); }?>
            </section>

            <table border="1">
            <tr>
                <td>
                Username2
                </td>
            </tr>
            <tr>
                <td>
                0
                </td>
            </tr>
            </table>
            <button id="dice2">Dice 2</button>
            </section>
            <hr>

            <section>
            <h4>"username" Inventory</h4>
            <table style="width:30%;" border="1">
                <tr>
                    <td>
                    Gold
                    </td>
                     <td>
                    Wood
                    </td>
                     <td>
                    Stone
                    </td>
                     <td>
                    Military
                    </td>
                </tr>
                <tr>
                    <td>
                     0
                    </td>
                     <td>
                     0
                    </td>
                     <td>
                     0
                    </td>
                     <td>
                     0
                    </td>
                </tr>
             </table><br>
          
            </section>
            <hr>

            <section>
            <h1>The King's Advisors</h1>
             <table style="width:25%"  border="1">
                  <tr>
                    <td>
                       18
                    </td>
                      <td>
                        17
                     </td>
                      <td>
                       16
                    </td>
                  </tr>
                  <tr>
                      <td>
                        15
                      </td>
                      <td>
                        14
                      </td>
                      <td>
                        13
                      </td>
                  </tr>
                  <tr>
                      <td>
                        12
                      </td>
                      <td>
                        11
                      </td>
                      <td>
                        10
                      </td>
                  </tr>
                  <tr>
                      <td>
                        9
                      </td>
                      <td>
                        8
                      </td>
                      <td>
                        7
                      </td>
                  </tr>
                  <tr>
                      <td>
                        6
                      </td>
                      <td>
                        5
                      </td>
                      <td>
                        4
                      </td>
                  </tr>
                 <tr>
                     <td>
                        3
                      </td>
                      <td>
                        2
                      </td>
                      <td>
                        1
                      </td>
                 </tr>
            </table> <br>
            </section>
			<hr>



		<section>
		<h1>Building List</h1>
		<table border="1" style="width:30%">
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
			<tr>
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
			</tr>
		</table>
		</section>
    <hr>

    <section>
      <h1>Kampf</h1>

      <button>Start</button>

    </section>
    <hr>

    <section>
        <h1>Chat</h1>
        <textarea style="resize:none;" id="chat-window" readonly><?php foreach($_SESSION['messages'] as $message) echo $message . PHP_EOL; ?></textarea>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <input type="text" name="msg-window" placeholder="Type a message">
            <input type="submit" name="msg-send" value="Send">
        </form>
    </section>
    <hr>
    <?php include("../Gruppen_de/footer.php"); ?>

    </body>
</html>
