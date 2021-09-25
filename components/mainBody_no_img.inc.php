<?php
    include "db_request.php";
    if(isset($_GET['active']) && !empty($_GET['active'])){
        $active = $_GET['active'];
    } 
?>
<section id='MainBody btParent'>
    <div class="btParent contentBox">
        <div class="btn-group modifyBt" role='group'>
            <button class='btn btn-secondary mr-1' onclick="edit('#content', '#mainContent')">Edit</button>
            
        </div>

        <div id='mainContent'>
            test
        </div>
        <div id='editor' style='display:none;'>
            <textarea id='content'>
            </textarea>
        </div>
        <button id='Save' name='save' class='btn btn-secondary modifyBtS' onclick="save('#content', '#mainContent')">Save</button>
    </div>
   
</section>