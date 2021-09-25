
<section id='MainBody btParent'>
    <div class="btParent contentBox">
        <div class="btn-group modifyBt" role='group'>
            <button class='btn btn-secondary mr-1' onclick="edit('content', 'mainContent')">Edit</button>
            
        </div>

        <div id='mainContent' class='p-5'>
        </div>
        <div id='editor' style='display:none;'>
            <form id='postForm' method='post'>
                <textarea id='content' name='content'>
                </textarea>
            </form>
        </div>
        <button id='Save' name='save' class='btn btn-secondary modifyBtS' onclick="save('content', 'mainContent')">Save</button>
    </div>

</section>