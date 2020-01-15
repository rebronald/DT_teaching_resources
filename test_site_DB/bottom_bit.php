<div class="box side">
            
    <h3>Search | <a class="side" href="show_all.php">Show All</a></h3>
            
    <i>Type part of the title / author name and then search</i>   
    
    <hr />
    
    <!-- Start of Title Search -->
    
    <form method="post" action="title_search.php" enctype="multipart/form-data" >
        
        <input class="search" type="text" name="title" size="40" value="" required placeholder="Title..." />
        
        <input class="submit" type="submit" name="find_title"
               value="&#xf002;" />
        
    </form>
    
    <!-- End of Title Search -->
    
    
        
    <!-- Start of author Search -->
    
    <form method="post" action="author_search.php" enctype="multipart/form-data" >
        
        <input class="search" type="text" name="author" size="40" value="" required placeholder="Author..." />
        
        <input class="submit" type="submit" name="find_author"
               value="&#xf002;" />
        
    </form>
    
    <!-- End of author Search -->
    
    <hr />
    
    <i>Use the dropdown menus to search by genre or rating</i>
    <hr />
    
    
        
<!-- Start of genre Search -->
    
    <form method="post" action="genre_search.php" enctype="multipart/form-data" >
        
        <select name="genre" required>
            <option value="" disabled selected>Genre...</option>
            <?php 
            // retrieve unique values in genre column...
            $genre_sql="SELECT DISTINCT `Genre` FROM `book_reviews` ORDER BY Genre ASC ";
            $genre_query=mysqli_query($dbconnect, $genre_sql);
            $genre_rs=mysqli_fetch_assoc($genre_query);
           
            do {
                
                ?>
            
            <option value="<?php echo $genre_rs['Genre']; ?>"><?php echo $genre_rs['Genre']; ?></option>
            
            <?php
                
            } // end of genre option retrieval

            while($genre_rs=mysqli_fetch_assoc($genre_query));
            
            ?>
            
        </select>
        
        <input class="submit" type="submit" name="find_genre"
           value="&#xf002;" />
        
    </form>
    
    <!-- End of genre Search -->
    

    
<!-- Start of ratings form -->

<form method="post" action="rating_search.php" enctype="multipart/form-data">
    
    <b>Rating...</b><br />
    
    
    <select class="half_width" name="amount">
        <option value="exactly">Exactly...</option>
        <option value="more" selected>At least...</option>
        <option value="less">At most...</option>
    </select>
    
    <select class="half_width" name="stars">
        <option value=1>&#9733;</option>
        <option value=2>&#9733;&#9733;</option>
        <option value=3 selected>&#9733;&#9733;&#9733;</option>
        <option value=4>&#9733;&#9733;&#9733;&#9733;</option>
        <option value=5>&#9733;&#9733;&#9733;&#9733;&#9733;</option>
        
    </select>
      <input type="submit" class="submit" name="find_rating" value="&#xf002;" />
    
</form>

<!-- end of ratings form -->
            
</div>  <!-- / side bar -->

<div class="box footer">
    CC GTT 20XX
</div>    <!-- / footer -->

</div>  <!-- / wrapper  -->
    
</body>        
