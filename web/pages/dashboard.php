<?php 
     require ( DATA.'tickets.php');
     require ( DATA.'statuses.php');
     require ( DATA.'assignee.php');
     require ( DATA.'subject.php');
     require ( DATA.'pages.php');
     

     
?>


<!-- Modal -->
 <div class="modal" id="myModal">
            <div class="addticketPanel">
                <div class="addticketHeader">
                    <span class="close">&times;</span>
                    <h2>Add Ticket</h2>
                </div>
                <div class="formPanel">
                    <h5>Please provide information below:</h5>
                                    <form action = "" id="addNewTicketModal">
                                        <label for="subj">Subject:</label><br>
                                        <select id="subj" name="subj">
                                            <option value="Hardware">Hardware</option>
                                            <option value="Networking">Network</option>
                                            <option value="Software">Software</option>
                                            <option value="Other">Others</option>
                                        </select><br><br>
                                        <label for="description">Describe the Problem:</label><br>
                                        <input type="text" id="description" name="description"><br>
                                        <input type="submit" value="Submit" id = "submitBtn">
                                    </form>
                </div>
                
            </div>
            
    </div>

         
            <!--Table List-->
                    <div class="panel">
                        <button class="addTicket" id="ticketbutton" >Add Ticket</button>
                       
                            <div class="filterIcon">
                                <i class="fas fa-sort" id="sortBtn-js"></i>
                                <i class="fas fa-filter"></i>
                                <i class="fas fa-eye-slash"></i>
                            </div>

                            <div class="tablePanel">
                                       
                                                    <table>
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Subject</th>
                                                                <th scope="col">Assignee</th>
                                                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="contents">
                                                            <?php if (empty($tableData)): ?>
                                                                <tr>
                                                                    <td colspan="4">No data inputted</td>
                                                                </tr>
                                                            <?php else: ?>
                                                                <?php foreach ($tableData as $data): ?>
                                                                    <tr>
                                                                        <td><?= $data["Date"] ?></td>
                                                                        <td><?= $subject["Subject"][$data["Subject"]] ?></td>
                                                                        <td><?= $assignee["Assignee"][$data["Assignee"]] ?></td>
                                                                        <td><?= $statuses["Status"][$data["Status"]] ?></td>
                                                                    </tr>
                                                                <?php endforeach ?>
                                                            <?php endif; ?>
                                                        </tbody>
                                                    </table>
                            </div>
</div>
                                    
                                                    <!--End of Table List-->