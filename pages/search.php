<?php include ("header.php")?>


<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <form action="action.php" method="POST">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" name="search"/>
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-success" name="search_btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="card-header">All User Info</div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Address</th>
                            </tr>

                            </thead>
                            <tbody>
                            <?php
                            if(count($students)<1){
                                echo "<tr><td>No Result Found</td></tr>";
                            }else{
                            foreach ($students as $student) {?>
                            <tr>
                                <td><?php echo $student['name'];?></td>
                                <td><?php echo $student['mobile'];?></td>
                                <td><?php echo $student['email'];?></td>
                                <td><?php echo $student['address'];?></td>
                            </tr>
                            <?php } }?>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>















<?php include ("footer.php")?>