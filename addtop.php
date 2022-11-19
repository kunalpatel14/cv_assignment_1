<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add Record to Top</h2>
    <form class="post-form" action="savedatatop.php" method="post">
        <div class="form-group">
            <label>First Name</label>
            <input type="text" name="fname" />
        </div>
        <div class="form-group">
            <label>Last Name</label>
            <input type="text" name="lname" />
        </div>
        <div class="form-group">
            <label>City</label>
            <input type="text" name="ci" />
        </div>
        <div class="form-group">
            <label>Country</label>
            <input type="text" name="co" />
        </div>


        <input class="submit" type="submit" value="Add"  />
    </form>
</div>
</div>
</body>
</html>
