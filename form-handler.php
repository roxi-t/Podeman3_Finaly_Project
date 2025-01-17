<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ورود اطلاعات شرکت‌کنندگان</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-container">
        <h1>اطلاعات شرکت‌کنندگان</h1>
        <?php
        if (
            isset($_GET['workshopName']) && !empty($_GET['workshopName']) &&
            isset($_GET['topic']) && !empty($_GET['topic']) &&
            isset($_GET['educationLevel']) && !empty($_GET['educationLevel']) &&
            isset($_GET['participantName']) && isset($_GET['participantEmail'])
        ) {
            // در صورت وجود داده‌های ارسال‌شده از صفحه ویرایش
            $workshopName = htmlspecialchars($_GET['workshopName']);
            $topic = htmlspecialchars($_GET['topic']);
            $educationLevel = htmlspecialchars($_GET['educationLevel']);
            $participantNames = $_GET['participantName'];
            $participantEmails = $_GET['participantEmail'];
        ?>
            <form method="get" action="final-report.php">
                <table>
                    <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام شرکت‌کننده</th>
                            <th>ایمیل</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($participantNames as $index => $name): ?>
                            <tr>
                                <td><?= $index + 1; ?></td>
                                <td><input type="text" name="participantName[]" value="<?= htmlspecialchars($name); ?>" required></td>
                                <td><input type="email" name="participantEmail[]" value="<?= htmlspecialchars($participantEmails[$index]); ?>" required></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <input type="hidden" name="workshopName" value="<?= $workshopName; ?>">
                <input type="hidden" name="topic" value="<?= $topic; ?>">
                <input type="hidden" name="educationLevel" value="<?= $educationLevel; ?>">
                <div class="buttons">
                    <button type="button" onclick="location.href='index.php'">بازگشت</button>
                    <button type="submit">ثبت اطلاعات</button>
                </div>
            </form>
        <?php
        } else if (
            isset($_GET['workshopName']) && !empty($_GET['workshopName']) &&
            isset($_GET['topic']) && !empty($_GET['topic']) &&
            isset($_GET['educationLevel']) && !empty($_GET['educationLevel']) &&
            isset($_GET['participantCount']) && !empty($_GET['participantCount'])
        ) {
            // حالت عادی (بدون داده‌های ویرایش)
            $participantCount = (int) $_GET['participantCount'];
        ?>
            <form method="get" action="final-report.php">
                <table>
                    <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>نام شرکت‌کننده</th>
                            <th>ایمیل</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 1; $i <= $participantCount; $i++): ?>
                            <tr>
                                <td><?= $i; ?></td>
                                <td><input type="text" name="participantName[]" required></td>
                                <td><input type="email" name="participantEmail[]" required></td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
                <input type="hidden" name="workshopName" value="<?= htmlspecialchars($_GET['workshopName']); ?>">
                <input type="hidden" name="topic" value="<?= htmlspecialchars($_GET['topic']); ?>">
                <input type="hidden" name="educationLevel" value="<?= htmlspecialchars($_GET['educationLevel']); ?>">
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