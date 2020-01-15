<?php include "head_nav.php" ; 


// if find button pushed...
if(isset($_POST['find_author']))
    
{
    
// Retrieves author and sanitises it.
$author=test_input(mysqli_real_escape_string($dbconnect,$_POST['author']));

    
$findall_sql="SELECT * FROM `book_reviews` WHERE `Author` LIKE '%$author%' ORDER BY `Author` ASC ";
$findall_query=mysqli_query($dbconnect, $findall_sql);
$findall_rs=mysqli_fetch_assoc($findall_query);
$count=mysqli_num_rows($findall_query);


?>

<div class="box main">
            
    <h2>Author Search</h2>
    
    <?php
    
    // check if there are any results
    
    if ($count<1)
        
    {
        
    ?>
    
    <div class="error">
        Sorry!  There are no results that match your search.  Please use the search box in the sidebar to try again.    
    </div>
    
    <?php
        
    } // end count 'if'
    
    // if there are not results, output an error
    else {
        
        do {
            
        ?>
    
        <div class="results">
        
        <p>Title: <span class="sub_heading"><?php echo $findall_rs['Title']; ?></span></p>
        
        <p>Author: <span class="sub_heading"><?php echo $findall_rs['Author']; ?></span></p>
        
        <p>Genre: <span class="sub_heading"><?php echo $findall_rs['Genre']; ?></span></p>
        
        
        <p>Rating: <span class="sub_heading">
            
            <?php 
            for ($x=0; $x < $findall_rs['Rating']; $x++)
                
            {
                echo "&#9733;";
            }
            
            ?>
            
        </span></p>
        
        <p><span class="sub_heading">Review / Response</span></p>
        
        <p>
            <?php echo $findall_rs['Review']; ?>
            
        </p>
    
        
    </div> <!-- / end results div -->
    
    <br />
        
    <?php
            
        } //  end of 'do' 
        
        while($findall_rs=mysqli_fetch_assoc($findall_query));
        
    }  // end else
    
    // if there are results, display them
    
    } // end 'isset'
    
    ?>
    

            
</div>    <!-- / main -->
        
<?php include "bottom_bit.php" ; ?>