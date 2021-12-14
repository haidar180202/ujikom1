
<div class="card-body">
                  
 
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                    <tr>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Email</th>
                      <th>Jurusan</th>
                      <th>status</th>
                     
                      
                      
                    </tr> 
                    </thead>
                    <tbody>
                    <?php
                      $select1="SELECT * FROM pendaftaran  WHERE akses ='mahasiswa' AND status='ditolak'";
                      $msuk=mysqli_query($koneksi,$select1);
                          
                      
                    
                    ?>
                    
  
                    <?php
                      foreach($msuk as $masuk){
                    ?>
  
                              <tr>
                                      <td><?= $masuk['nama']?></td>
                                      <td><?= $masuk['jenis_kelamin']?></td>
                                      <td><?= $masuk['email']?></td>
                                      <td><?= $masuk['jurusan']?></td>
                                      <td><?= $masuk['status']?></td>
                                      
                                      
                                        
                              </tr>
                              <?php } ?>           
                    </tbody>
                    <tfoot>
                   
                    </tfoot>
                  </table>
                  
                </div>