<?php
// Sanitize inputs to prevent XSS or other vulnerabilities
$name = htmlspecialchars($_POST['name'], ENT_QUOTES, 'UTF-8');
$mother_name = htmlspecialchars($_POST['mother_name'], ENT_QUOTES, 'UTF-8');
$division = htmlspecialchars($_POST['division'], ENT_QUOTES, 'UTF-8');
$seat_no = htmlspecialchars($_POST['seat_no'], ENT_QUOTES, 'UTF-8');
$center_no = htmlspecialchars($_POST['center_no'], ENT_QUOTES, 'UTF-8');
$school_no = htmlspecialchars($_POST['school_no'], ENT_QUOTES, 'UTF-8');
$cert_no = htmlspecialchars($_POST['cert_no'], ENT_QUOTES, 'UTF-8');
$examination = htmlspecialchars($_POST['examination'], ENT_QUOTES, 'UTF-8');
$MARATHI = htmlspecialchars($_POST['MARATHI'], ENT_QUOTES, 'UTF-8');
$HINDI = htmlspecialchars($_POST['HINDI'], ENT_QUOTES, 'UTF-8');
$ENGLISH = htmlspecialchars($_POST['ENGLISH'], ENT_QUOTES, 'UTF-8');
$MATHEMATICS = htmlspecialchars($_POST['MATHEMATICS'], ENT_QUOTES, 'UTF-8');
$SCIENCE_TECHNOLOGY = htmlspecialchars($_POST['SCIENCE_TECHNOLOGY'], ENT_QUOTES, 'UTF-8');
$SOCIAL_SCIENCES = htmlspecialchars($_POST['SOCIAL_SCIENCES'], ENT_QUOTES, 'UTF-8');
$total_marks = htmlspecialchars($_POST['total_marks'], ENT_QUOTES, 'UTF-8');
$obtained_marks = htmlspecialchars($_POST['obtained_marks'], ENT_QUOTES, 'UTF-8');
$percentage = htmlspecialchars($_POST['Percentage'], ENT_QUOTES, 'UTF-8');
$grade = htmlspecialchars($_POST['grade'], ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
body {
    font-family: 'Arial', sans-serif;
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.container {
    max-width: 900px;
    margin: 20px auto;
    background: white;
    border: 2px solid black;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
}

.text-center h2 {
    font-size: 2.2rem;
    font-weight: bold;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #333;
    margin-bottom: 5px;
}

.text-center h4 {
    font-size: 1.5rem;
    font-weight: normal;
    color: #555;
    margin-top: 0;
}

.border {
    border: 1px solid #ddd;
    border-radius: 8px;
    padding: 20px;
    background: #fafafa;
}

.border h5 {
    font-size: 1rem;
    font-weight: 500;
    margin-bottom: 10px;
    color: #333;
}

.border h5 span {
    font-weight: bold;
    color: #000;
}


.row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
}

.row h5 {
    flex: 1 1 50%;
    margin: 0 10px;
}

.btn {
    font-size: 1rem;
    padding: 10px 20px;
    border-radius: 8px;
    font-weight: bold;
}

@media print {
    body {
        -webkit-print-color-adjust: exact;
        margin: 0;
        padding: 0;
    }

    .btn {
        display: none;
    }

    .container {
        box-shadow: none;
        border: none;
    }

    .text-center h2, .text-center h4 {
        color: black !important;
    }

    .border {
        background: white;
        border: none;
    }
}

    </style>
<body>
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h2>𝔐𝔞𝔥𝔞𝔯𝔞𝔰𝔥𝔱𝔯𝔞 𝔖𝔱𝔞𝔱𝔢 𝔅𝔬𝔞𝔯𝔡</h2>
            <h4>Secondary and Higher Secondary Education, Pune</h4>
        </div>
        <div class="border p-5">
            <h5>Student Name: <?= $name ?></h5>
            <h5>Mother's Name: <?= $mother_name ?></h5>
            <h5>Division: <?= $division ?></h5>
            <h5>Seat No.: <?= $seat_no ?></h5>
            <h5>Center No.: <?= $center_no ?></h5>
            <h5>School No.: <?= $school_no ?></h5>
            <h5>Certificate No.: <?= $cert_no ?></h5>
            <h5>Examination Month & Year: <?= $examination ?></h5>
        </div>

        <table class="table table-bordered mt-4">
            <thead class="bg-secondary text-white">
                <tr>
                    <th>Subject</th>
                    <th>Max Marks</th>
                    <th>Marks Obtained</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Marathi</td><td>100</td><td><?= $MARATHI ?></td></tr>
                <tr><td>Hindi</td><td>100</td><td><?= $HINDI ?></td></tr>
                <tr><td>English</td><td>100</td><td><?= $ENGLISH ?></td></tr>
                <tr><td>Mathematics</td><td>100</td><td><?= $MATHEMATICS ?></td></tr>
                <tr><td>Science & Technology</td><td>100</td><td><?= $SCIENCE_TECHNOLOGY ?></td></tr>
                <tr><td>Social Sciences</td><td>100</td><td><?= $SOCIAL_SCIENCES ?></td></tr>
            </tbody>
        </table>

        <div class="row mt-4">
            <div class="col-md-6">
                <h5>Total Marks: <?= $total_marks ?></h5>
            </div>
            <div class="col-md-6">
                <h5>Marks Obtained: <?= $obtained_marks ?></h5>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-md-6">
                <h5>Percentage: <?= $percentage ?>%</h5>
            </div>
            <div class="col-md-6">
                <h5>Grade: <?= $grade ?></h5>
            </div>
        </div>
        <div class="text-center my-4">
                <button type="button" onclick="window.print()" class="btn btn-primary w-50">Print Marksheet</button>
            </div>
    </div>
</body>
</html>
