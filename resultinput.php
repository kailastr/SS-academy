<?php 
$title = "Result Upload";
require_once('admin-header.php'); 
?>

<h1 style="color:#E49653;text-align:center;">Upload Results</h1>
<button type="submit">Submit form</button>
    <table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Course Name</th>
                <th>Age</th>
                <th>Position</th>
                <th>Office</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td><input type="text" id="row-1-age" name="row-1-age" value="61"></td>
                <td><input type="text" id="row-1-position" name="row-1-position" value="System Architect"></td>
                <td><select size="1" id="row-1-office" name="row-1-office">
                    <option value="Edinburgh" selected="selected">
                        Edinburgh
                    </option>
                    <option value="London">
                        London
                    </option>
                    <option value="New York">
                        New York
                    </option>
                    <option value="San Francisco">
                        San Francisco
                    </option>
                    <option value="Tokyo">
                        Tokyo
                    </option>
                </select></td>
            </tr>
</tbody>
        <tfoot>
            <tr>
                <th>Course Name</th>
                <th>Age</th>
                <th>Position</th>
                <th>Office</th>
            </tr>
        </tfoot>
    </table>

    <?php require_once('admin-footer.php'); ?>