<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>گزارش نهایی ثبت‌نام</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Assets/font.css">
</head>

<body>
    <div class="main-container">
        <h1>گزارش نهایی ثبت‌نام</h1>
        <?php
        if (!empty($_GET['participantName']) && !empty($_GET['participantEmail']) && !empty($_GET['educationLevel'])) {
            $workshopName = htmlspecialchars($_GET['workshopName']);
            $topic = htmlspecialchars($_GET['topic']);
            $participantNames = $_GET['participantName'];
            $participantEmails = $_GET['participantEmail'];
            $educationLevels = $_GET['educationLevel'];
        ?>
            <p><strong>نام کارگاه:</strong> <?= $workshopName; ?></p>
            <p><strong>موضوع کارگاه:</strong> <?= $topic; ?></p>
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
                    <?php foreach ($participantNames as $index => $name): ?>
                        <tr>
                            <td><?= $index + 1; ?></td>
                            <td><?= htmlspecialchars($name); ?></td>
                            <td><?= htmlspecialchars($participantEmails[$index]); ?></td>
                            <td><?= htmlspecialchars($educationLevels[$index]); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="buttons">
                <button onclick="location.href='index.php'">ثبت‌نام جدید</button>
            </div>
        <?php
        } else {
            echo "<p>اطلاعات کافی برای نمایش گزارش وجود ندارد.</p>";
        }
        ?>
    </div>
</body>

</html>