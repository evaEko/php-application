<form method="POST" action="?action=step2">
    <table>
        <tr>
            <td>Name</td>
            <td><?php echo $model->getName() ?></td>
        </tr>
        <tr>
            <td>Level</td>
            <td><?php echo $model->getLevel()?></td>
        </tr>
        <tr>
            <td>Days</td>
            <td><?php 
                $courseDays = $model->getTrainingDays();
                foreach ($courseDays as $day) {
                    echo "<input type=\"checkbox\" name=\"days[]\" value=\"$day\"> $day<br />\n";
                }
            ?></td>
        </tr>
    </table>
    <input type="submit" value="Submit" />
</form>



