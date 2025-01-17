<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گزارش نهایی ثبت‌نام</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main-container">
        <h1>گزارش نهایی ثبت‌نام</h1>
        <?php
        if (!empty($_GET['participantName']) && !empty($_GET['participantEmail'])) {
            $workshopName = htmlspecialchars($_GET['workshopName']);
            $topic = htmlspecialchars($_GET['topic']);
            $educationLevel = htmlspecialchars($_GET['educationLevel']);
            $participantNames = $_GET['participantName'];
            $participantEmails = $_GET['participantEmail'];
        ?>
            <p><strong>نام کارگاه:</strong> <?= $workshopName; ?></p>
            <p><strong>موضوع کارگاه:</strong> <?= $topic; ?></p>
            <p><strong>پایه تحصیلی:</strong> <?= $educationLevel; ?></p>
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
                            <td><?= htmlspecialchars($name); ?></td>
                            <td><?= htmlspecialchars($participantEmails[$index]); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="buttons">
                <!-- دکمه ثبت‌نام جدید -->
                <button onclick="location.href='index.php'">ثبت‌نام جدید</button>
                <!-- دکمه ویرایش اطلاعات -->
                <form method="get" action="form-handler.php" style="display: inline;">
                    <input type="hidden" name="workshopName" value="<?= $workshopName; ?>">
                    <input type="hidden" name="topic" value="<?= $topic; ?>">
                    <input type="hidden" name="educationLevel" value="<?= $educationLevel; ?>">
                    <?php foreach ($participantNames as $index => $name): ?>
                        <input type="hidden" name="participantName[]" value="<?= htmlspecialchars($name); ?>">
                        <input type="hidden" name="participantEmail[]" value="<?= htmlspecialchars($participantEmails[$index]); ?>">
                    <?php endforeach; ?>
                    <button type="submit">ویرایش اطلاعات</button>
                </form>
            </div>
        <?php
        } else {
            echo "<p>اطلاعات کافی برای نمایش گزارش وجود ندارد.</p>";
        }
        ?>
    </div>
</body>

</html>