<section class="body-section">


    <form action="process.php" method="POST">

        <table>
            <p class="req">* Required</p>
            <tr class="">
                <td>
                    <p>Name</p>
                </td>
                <td><input type="text" name="name"> <span class="req1"> * <?php echo $errName ?> </span> </td>
            </tr>
            <tr class="">
                <td>
                    <p>Age</p>
                </td>
                <td><input type="text" name="age"> <span class="req1"> * <?php echo $errAge ?> </span> </td>
            </tr>
            <tr class="">
                <td>
                    <p>E-mail</p>
                </td>
                <td><input type="text" name="email"> <span class="req1">* <?php echo $errEmail ?></span></td>
            </tr>
            <tr class="">
                <td>
                    <p>Gender</p>
                </td>
                <td>
                    <input type="radio" name="gender" value="male"> <label for="male">Male</label>
                    <input type="radio" name="gender" value="female"> <label for="male">Female</label>
                    <span class="req1"> *<?php echo $errGender ?></span>
                </td>
            </tr>
            <tr class="">
                <td>
                    <p>Comment</p>
                </td>
                <td><textarea name="comment" id="" cols="20" rows="5"></textarea></td>
            </tr>
            <tr class="">
                <td>
                    <p>Option</p>
                </td>
                <td>
                    <select size="3" name="book[]" id="" multiple>
                        <option value="">Web Server</option>
                        <option value="">Web Host</option>
                        <option value="">Web Doc</option>
                        <option value="">Web Design</option>
                        <option value="">Web Developer</option>
                    </select>
                </td>
            </tr>
            <tr class="">
                <td></td>
                <td><input type="submit" name="submit" value="submit"></td>
            </tr>
        </table>
    </form>

</section>