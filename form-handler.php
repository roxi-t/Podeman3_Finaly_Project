<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود اطلاعات شرکت‌کنندگان</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Assets/font.css">
</head>

<body>
    <div class="main-container">
        <h1>اطلاعات شرکت‌کنندگان</h1>
        <?php
        if (
            isset($_GET['workshopName']) && !empty($_GET['workshopName']) &&
            isset($_GET['topic']) && !empty($_GET['topic']) &&
            isset($_GET['participantCount']) && !empty($_GET['participantCount'])
        ) {

            $participantCount = (int) $_GET['participantCount'];
        ?>
            <form method="get" action="result.php">
                <table>
                    <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام شرکت‌کننده</th>
                            <th>ایمیل</th>
                            <th>پایه تحصیلی</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= $participantCount; $i++): ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><input type="text" name="participantName[]" required></td>
                                <td><input type="email" name="participantEmail[]" required></td>
                                <td>
                                    <select name="educationLevel[]" required>
                                        <option value="">انتخاب کنید</option>
                                        <option value="دهم">دهم</option>
                                        <option value="یازدهم">یازدهم</option>
                                        <option value="دوازدهم">دوازدهم</option>
                                        <option value="فارغ‌التحصیل">فارغ‌التحصیل</option>
                                    </select>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
                <input type="hidden" name="workshopName" value="<?= htmlspecialchars($_GET['workshopName']); ?>">
                <input type="hidden" name="topic" value="<?= htmlspecialchars($_GET['topic']); ?>">
                <div class="buttons">
                    <button type="button" onclick="location.href='index.php'">بازگشت</button>
                    <button type="submit">ثبت اطلاعات</button>
                </div>
            </form>
        <?php
        } else {
            echo "<p>اطلاعات وارد شده ناقص است.</p>";
        }
        ?>
    </div>
</body>

</html>