<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض بيانات جميع اللاعبين</title>
    <style>
        body {
            font-family: sans-serif;
            background-color: #f4f4f4;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 100%;
            max-width: 1200px;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ddd;
        }
        th {
            background-color: #800000;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        img {
            max-width: 50px;
            height: auto;
            border-radius: 50%;
        }
        .back-btn {
            display: block;
            text-align: center;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #800000;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }
        .back-btn:hover {
            background-color: #550000;
        }
        .details-btn {
            background-color: #800000;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            padding: 6px 12px;
            display: inline-block;
            transition: background-color 0.3s ease;
        }
        .details-btn:hover {
            background-color: #550000;
        }
    </style>
</head>
<body>

<?php
    // التحقق من المتغيرات القادمة عبر GET
    $playerName   = isset($_GET["playerName"])   ? htmlspecialchars($_GET["playerName"])   : "";
    $birthDate    = isset($_GET["birthDate"])    ? htmlspecialchars($_GET["birthDate"])    : "";
    $birthPlace   = isset($_GET["birthPlace"])   ? htmlspecialchars($_GET["birthPlace"])   : "";
    $nationality  = isset($_GET["nationality"])  ? htmlspecialchars($_GET["nationality"])   : "";
    $idNumber     = isset($_GET["idNumber"])     ? htmlspecialchars($_GET["idNumber"])      : "";
    $address      = isset($_GET["address"])      ? htmlspecialchars($_GET["address"])       : "";
    $phoneNumber  = isset($_GET["phoneNumber"])  ? htmlspecialchars($_GET["phoneNumber"])   : "";
    $emailAddress = isset($_GET["emailAddress"]) ? htmlspecialchars($_GET["emailAddress"])  : "";
?>

    <h1>بيانات جميع اللاعبين</h1>
    <table>
        <thead>
            <tr>
                <th>الرقم التسلسلي</th>
                <th>اسم اللاعب</th>
                <th>تاريخ الميلاد</th>
                <th>مكان الميلاد</th>
                <th>الجنسية</th>
                <th>رقم البطاقة الشخصية</th>
                <th>العنوان</th>
                <th>رقم الهاتف</th>
                <th>البريد الإلكتروني</th>
                <th>صورة اللاعب</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- يمكنك تغيير الرقم كما تشاء، أو إذا لديك حلقة تكرار بإمكانك استخدام متغير للرقم التسلسلي -->
                <td>1</td>
                <td><?php echo $playerName; ?></td>
                <td><?php echo $birthDate; ?></td>
                <td><?php echo $birthPlace; ?></td>
                <td><?php echo $nationality; ?></td>
                <td><?php echo $idNumber; ?></td>
                <td><?php echo $address; ?></td>
                <td><?php echo $phoneNumber; ?></td>
                <td><?php echo $emailAddress; ?></td>
                <td><img src="https://via.placeholder.com/50" alt="صورة اللاعب"></td>
                <!-- في حال أردت تمرير المعلمات إلى صفحة التفاصيل بديناميكية، غيّر الرابط أدناه -->
                <td>
                    <a href="player-details.php?player=<?php echo $idNumber; ?>" target="_blank" class="details-btn">عرض التفاصيل</a>
                </td>
            </tr>
        </tbody>
    </table>
    <!-- تأكد أيضاً أن صفحة الإدخال تحمل اللاحقة PHP إذا كانت تستخدم PHP -->
    <a href="index.php" class="back-btn">عودة إلى صفحة الإدخال</a>
</body>
</html>
