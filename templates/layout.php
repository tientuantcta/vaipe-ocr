<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
   

    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Thêm các tệp CSS khác nếu cần -->
</head>
<body>

    <!-- Header -->
    <?php include 'includes/header.php'; ?>
    <div class="wrapeer">
<!-- Content -->
<div class="container ">
        <?php include $content; ?>
    </div>
    <div>
        <img src="asset/images/pattern.png" alt="">
    </div>
    </div>
    

    <!-- Footer -->
    <?php include 'includes/footer.php'; ?>

    <!-- Thêm các tệp JavaScript nếu cần -->
    <script src="assets/js/script.js"></script>
    <!-- Bootstrap JS và Popper.js (nếu bạn cần sử dụng các tính năng như dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/tesseract.js@v2.0.0-alpha.13/dist/tesseract.min.js"></script>

</body>
</html>
