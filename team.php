<?php require('components/head.inc.php'); ?>
<?php include('components/navbar.inc.php'); ?>

<!-- Team PI-->

<div class='headerbg text-center'> 
    <h1>Team</h1>
</div>
<section id='PI'>
    <div class='text-center btParent' >
        <h1>Principal Investigator</h1>  
        <div class="btn-group modifyBt" role='group'>
            <button type='button' class='btn btn-secondary mr-1' onclick="edit('PI_edit', 'PI_INFO')">Edit</button>
            <button type='button' class='btn btn-secondary' onclick="save('PI_edit', 'PI_INFO')">Save</button>
        </div>   
    </div>
    <div class="d-flex flex-row offset-xl-4 mb-2 ">
        <img src="images/faculty/Prof_zsz.jpg" alt="prof.zsz" width='auto' height='250'>
        <div id='PI_INFO' class='col-xl-6 '>
            <h5>Prof. Zhenshen Zhang</h5>
            <div >
            Dr. Zheshen Zhang is an Assistant Professor in the Department of Materials Science and Engineering and the James C. Wyant College of Optical Sciences at the University of Arizona. Dr. Zhang received the PhD degree from the Georgia Institute of Technology. Prior to joining UA in Fall 2017, Dr. Zhang was a Postdoctoral Associate and then a Research Scientist at MIT. Dr. Zhang's research encompasses a broad swath of the experimental and theoretical aspects of quantum networks, quantum communications, quantum sensing, and quantum computing. Dr. Zhang is an Editorial Board Member of Communications Physics.
            </div>
        </div>
        <div style='display:none;'>
            <textarea id="PI_edit" ></textarea>
        </div>
    </div>
<hr>
</section>

<section id='PHD'>
    <div  class='text-center btParent'>
        <h2>Postdoctoral Researchers</h2>
        <button type='button' class='btn btn-secondary modifyBt' onclick="save('PR1')">Add</button>
    </div>
    <div class='row'>
        <div class='col-xl-4 text-center btParent'>
            
            <div id='PHD1'>
                <img src='images/faculty/_blank.jpg' alt='Dr. Shuhong Hao' width='125' height='175'>
                <h5>Dr. Shuhong Hao</h5>
                <p>
                    Postdoctoral Associate<br>
                    Department of Materials Science and Engineering
                </p>
            </div>
            <div class="btn-group-vertical modifyBtS" role='group'>
                <button type='button' class='btn btn-secondary mr-1' onclick="edit('PHD1_edit','PHD1')">Edit</button>
                <button type='button' class='btn btn-secondary' onclick="save('PHD1_edit','PHD1')">Save</button>
            </div>
            <div style='display:none;'>
                <textarea id="PHD1_edit" ></textarea>
            </div>
        </div>
        <div class='col-xl-4 text-center'>
            
            <div>
                <img src='images/faculty/shuai-liu.png' alt='Dr. Shuhong Hao' width='125' height='175'>
                <h5>Dr. Shuai Liu</h5>
                <p>
                    Postdoctoral Associate<br>
                    Department of Materials Science and Engineering
                </p>
            </div>
        </div>
        <div class='col-xl-4 text-center'>
            
            <div>
                <img src='images/faculty/_blank.jpg' alt='Dr. Shuhong Hao' width='125' height='175'>
                <h5>Dr. Yongzhou Xue</h5>
                <p>
                    Postdoctoral Associate<br>
                    Department of Materials Science and Engineering
               </p>
           </div>
        </div>
    </div>
    <hr>
</section>

<section id='GS'>
    <div  class='text-center btParent'>
        <h2>Graduate Students</h2>
        <button type='button' class='btn btn-secondary modifyBt' onclick="save('#PR1')">Add</button>
    </div>
    <hr>
</section>

<section id='UR'>
    <div  class='text-center btParent'>
        <h2>Undergraduate Researchers</h2>
        <button type='button' class='btn btn-secondary modifyBt' onclick="save('#PR1')">Add</button>
    </div>
    <hr>
</section>

<section id='PA'>
    <div  class='text-center btParent'>
        <h2>Postdoc Alumni</h2>
        <button type='button' class='btn btn-secondary modifyBt' onclick="save('#PR1')">Add</button>
    </div>
    <hr>
</section>

<section id='UA'>
    <div  class='text-center btParent'>
        <h2>Undergraduate Alumni</h2>
        <button type='button' class='btn btn-secondary modifyBt' onclick="save('#PR1')">Add</button>
    <div>
    <hr>
</section>
<?php require('components/footer.inc.php'); ?>