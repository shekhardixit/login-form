<html>

<head>
    <title>Registration Form</title>
    <?php include 'css/display_css.php' ?>
    <?php include 'links/links.php' ?>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Display Registration Entries</h1>
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead class="bg-dark text-white">
                                    <tr class="text-center">
                                        <th>id</th>
                                        <th>Name</th>
                                        <th>E-Mail</th>
                                        <th>Date of Birth</th>
                                        <th>Mobile Number</th>
                                        <th>Password</th>
                                        <th>Confirm Password</th>
                                        <th>Delete</th>
                                        <th>Update</th>
                                    </tr>
                                    <?php
                                        include 'conn.php';
                                            $q = " SELECT * FROM `registration`";

                                            $query = mysqli_query($con, $q);
                                            while($res=mysqli_fetch_array($query)){
                                        
                                        ?>
                                </thead>
                                <tbody>
                                    <tr class="text-center">
                                        <td><?php echo $res['id']; ?></td>
                                        <td><?php echo $res['Name']; ?></td>
                                        <td><?php echo $res['Email']; ?></td>
                                        <td><?php echo $res['DOB']; ?></td>
                                        <td><?php echo $res['Mobile']; ?></td>
                                        <td><?php echo $res['Password']; ?></td>
                                        <td><?php echo $res['CPassword']; ?></td>
                                        <td><button class="btn btn-danger"><a href="delete.php?id=<?php echo $res['id']; ?>" class="text-white">Delete</a></button></td>
                                        <td><button class="btn btn-warning"><a href="update.php?id=<?php echo $res['id']; ?>" class="text-white">Update</a></button></td>
                                    </tr>
                                    <?php
                                            }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>