<form method="POST" action="?action=step1">
    <table>
        <tr>
            <td>Name</td>
            <td><input type="text" name="username" value="<?php echo $model->getName() ?>"></td>
        </tr>
        <tr>
            <td>Level</td>
            <td>
                <input type="radio" name="level" value="<?php echo Level::BEGINNER ?>" <?php echo $model->isLevelSelected("beginner") ? "checked" : "" ?>> Beginner <br />
                <input type="radio" name="level" value="<?php echo Level::INTERMEDIATE ?>" <?php echo $model->isLevelSelected("intermediate") ? "checked" : "" ?>> Intermediate <br />
                <input type="radio" name="level" value="<?php echo Level::PROFESSIONAL ?>" <?php echo $model->isLevelSelected("professional") ? "checked" : "" ?>> Professional<br />
            </td>
        </tr>
    </table>
    <input type="submit" value="Submit" />
</form>



