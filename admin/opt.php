<!-- View Business Owner -->
                <table class="table table-responsive-md">
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Firstname</th>
                      <th scope="col">Lastname</th>
                      <th scope="col">Email</th>
                      <th scope="col">Mobile</th>
                      <th scope="col">Country</th>
                      <th scope="col">City</th>
                      <th scope="col">Area</th>
                      <th scope="col">Edit</th>
                      <th scope="col">Delete</th>
                      <th scope="col">Verify</th>
                      <th scope="col">Online</th>

                    </tr>
                  </thead>
                  <tbody>
                <?php
                $sql = mysqli_query($conn,"select * from customer");
                while($row = mysqli_fetch_array($sql)){
                ?>  
                
                    <tr>
                      <td><?php echo $row['id']; ?></td>
                      <td><?php echo $row['firstname']; ?></td>
                      <td><?php echo $row['lastname']; ?></td>
                      <td><?php echo $row['email']; ?></td>
                      <td><?php echo $row['mobile']; ?></td>
                      <td><?php echo $row['country']; ?></td>
                      <td><?php echo $row['city']; ?></td>
                      <td><?php echo $row['area']; ?></td>
                      <td><?php if($row['verify'] == '1'){
                        echo 'Activated';
                      }
                      else{
                        echo 'Dactivated';
                      } ?></td>
                      <td><?php if($row['active'] == '1'){
                        echo 'online';
                      }
                      else{
                        echo 'offline';
                      } ?></td>
                      <td><a href="edit.php?id=<?php echo $row['id']; ?>&type=<?php echo 'user'; ?>" class="btn btn-primary" style='color:white;'>Edit</a></td>
                      <td><a href="delete.php?id=<?php echo $row['id']; ?>&type=<?php echo 'user'; ?>" class="btn btn-danger" style='color:white;'>Delete</a></td>

                    </tr>
                  
                <?php } ?>
                </tbody>
                </table>              