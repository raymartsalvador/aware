<form action="" method="GET">
    <label for="year">Year:</label>
    <select name="year" id="year">
        <?php
                        $currentYear = date('Y');
                        for ($i = $currentYear + 2; $i >= 2010; $i--) {
                            $selected = ($i == $year) ? 'selected' : '';

                            if ($i == $currentYear) {
                                echo "<option value='$i' $selected selected>$i</option>";
                            } else {
                                echo "<option value='$i' $selected>$i</option>";
                            }
                        }
                        ?>
    </select>

    <label for="month">Month:</label>
    <select name="month" id="month">
        <?php
                        $months = [
                            1 => 'January',
                            2 => 'February',
                            3 => 'March',
                            4 => 'April',
                            5 => 'May',
                            6 => 'June',
                            7 => 'July',
                            8 => 'August',
                            9 => 'September',
                            10 => 'October',
                            11 => 'November',
                            12 => 'December'
                        ];
                        foreach ($months as $key => $value) {
                            $selected = ($key == $month) ? 'selected' : '';
                            if ($key == date('n')) {
                                echo "<option value='$key' $selected selected>$value</option>";
                            } else {
                                echo "<option value='$key' $selected>$value</option>";
                            }
                        }
                        ?>
    </select>

    <button type="submit">Filter</button>
</form>