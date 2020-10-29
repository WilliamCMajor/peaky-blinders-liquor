<?php
include("includes/header.php");
?>

<?php
   //session_start();
    $title = $_POST['title'];
    $message = $_POST['message'];
    $timedate = date('l, F d, Y @ g:i a');
    

    if(($title !="") && ($message != "")){
        writeToBlog($title, $message, $timedate);
    }
    

    function writeToBlog($thisTitle, $thisMessage, $thisTimedate){
        $handle = fopen("blogfile.txt", "r");
        if($handle){
            while(!feof($handle)){
                $buffer = fgets($handle, 4096);
                //$existingText .= $buffer;
            }// end while
            //echo $existingText;
            fclose($handle);
        }// end if
        
        
        if(isset($_POST['submit'])) {      
            $handle = fopen("blogfile.txt", "w");
            $newStuff = "\n<div class=\"newEntry\">";
            $newStuff .= "\n\t<div class=\"title\">" . $thisTitle . "</div>";
            $newStuff .= "\n\t<div class=\"timedate\">" . $thisTimedate . "</div>";
            $newStuff .= "\n\t<div class=\"message\">" . $thisMessage . "</div>";
            $newStuff .= "\n</div>";
            $allStuff = $newStuff . $buffer;
            fwrite($handle, $allStuff);
            fclose($handle);
        }
    }// end writeToBlog   
?>

    <main>
        <div class="comment-board">
            <h2>Comment Board</h2>
            <?php include("blogfile.txt"); ?>
        </div>
        <form id="comment" method="post" action="">
            <div class="form-container">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title">
                </div>
        
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" name="message" id="" cols="30" rows="10"></textarea>
                </div>

                <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit Info">
            </div>
        </form>
    </main>

<?php include("includes/footer.php"); ?>