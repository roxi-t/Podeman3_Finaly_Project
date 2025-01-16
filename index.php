<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>سامانه ثبت‌نام کارگاه</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="Assets/font.css">
</head>

<body>
    <div class="main-container">
        <h1>سامانه ثبت‌نام کارگاه‌های آموزشی</h1>
        <form method="get" action="action.php">
            <label for="workshopName">نام کارگاه:</label>
            <input type="text" id="workshopName" name="workshopName" placeholder="مثال: کارگاه طراحی وب" required>

            <label for="topic">موضوع کارگاه:</label>
            <select id="topic" name="topic" required>
                <option value="">انتخاب کنید</option>
                <option value="برنامه‌نویسی">برنامه‌نویسی</option>
                <option value="گرافیک">گرافیک</option>
                <option value="مدیریت پروژه">مدیریت پروژه</option>
            </select>

            <label for="participantCount">تعداد شرکت‌کنندگان:</label>
            <input type="number" id="participantCount" name="participantCount" min="1" max="20" placeholder="حداکثر 20 نفر" required>

            <button type="submit">ادامه</button>
        </form>
    </div>
</body>

</html>