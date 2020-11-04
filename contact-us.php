<?php include("includes/header.php"); ?>

    <main>
        <div>
            <h2>Recent Updates</h2>
            <p>Follow us on twitter <a href="https://twitter.com/LiquorPeaky">(click here)</a>         Nov.3 2020</p>
            <p>Email us at <a href="peakybliquor@gmail.com">peakybliquor@gmail.com</a></p>
        </div>
        <hr>

        <div class="comment-board">
            <h2>Comments Board</h2>
            <p>Please leave any comments or feedback</p>
            <hr>
            <?php //include("blogfile.txt"); ?>
        </div>
        <form id="comment" method="post" action="#">
            <div class="form-container">
                <div class="form-group">
                    <label for="title">Title</label>
                    <input class="form-control" type="text" name="title" id="title">
                    
                </div>
        
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea class="form-control" id="message" name="message" cols="30" rows="10"></textarea>
                
                </div>

                <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit Info">
            </div>
        </form>
    </main>

<?php include("includes/footer.php"); ?>