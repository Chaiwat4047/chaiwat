<!doctype html>
<html lang="th" data-bs-theme="dark">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>66010914047 ไชยวัฒน์ เหล่าหลำ (เจย์) - Dark Mode</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    /* ปรับแต่งเพื่อให้สีที่ชอบดูโดดเด่นใน Dark Mode */
    .color-display {
        width: 100%;
        height: 35px;
        border: 2px solid #3c3c3c; /* ขอบสีเข้ม */
        border-radius: 4px;
        transition: all 0.3s;
    }
    /* ให้ Card ดูมืดและคมชัด */
    .card-dark-style {
        background-color: #1a1a1a; /* สีพื้นหลัง Card ที่เข้มขึ้นอีก */
        border: 1px solid #333;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
    }
    /* หัวข้อเน้นสีฟ้าอ่อน/ไซอัน */
    .card-header-cool {
        background-color: #0088aa!important; 
        border-bottom: 3px solid #00c4ff;
    }
</style>

</head>

<body>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            
            <div class="card card-dark-style">
                <div class="card-header card-header-cool text-white">
                    <h1 class="h3 mb-0"><i class="bi bi-person-badge-fill me-2"></i>แบบฟอร์มลงทะเบียนด้วยGemini 	ไชยวัฒน์ เหล่าหลำ 66010914047</h1>
                </div>
                <div class="card-body">
                    
                    <form method="post" action="" class="needs-validation" novalidate>
                        
                        <div class="mb-3">
                            <label for="fullname" class="form-label text-info">FULL NAME <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="fullname" name="fullname" autofocus required placeholder="Enter your full name">
                            <div class="invalid-feedback">กรุณากรอกชื่อ-สกุล</div>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label text-info">PHONE NUMBER <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]{10}" placeholder="10 digits number">
                            <div class="invalid-feedback">กรุณากรอกเบอร์โทร 10 หลัก (ตัวเลขเท่านั้น)</div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="height" class="form-label text-info">HEIGHT (cm) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="height" name="height" min="100" max="200" required placeholder="100 - 200">
                            <div class="invalid-feedback">กรุณากรอกส่วนสูงที่ถูกต้อง (100-200 ซม.)</div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label text-info">ADDRESS <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="address" name="address" rows="3" required placeholder="Current mailing address"></textarea>
                            <div class="invalid-feedback">กรุณากรอกที่อยู่</div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="birthday" class="form-label text-info">DATE OF BIRTH <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="birthday" name="birthday" required>
                                <div class="invalid-feedback">กรุณาเลือกวันเดือนปีเกิด</div>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="color" class="form-label text-info">FAVORITE COLOR</label>
                                <input type="color" class="form-control form-control-color" id="color" name="color" value="#00aaff" title="Choose your color">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="major" class="form-label text-info">MAJOR / FIELD OF STUDY</label>
                            <select class="form-select" id="major" name="major">
                                <option value="การบัญชี">ACCOUNTING (การบัญชี)</option>
                                <option value="การตลาด">MARKETING (การตลาด)</option>
                                <option value="การจัดการ">MANAGEMENT (การจัดการ)</option>
                                <option value="คอมพิวเตอร์ธุรกิจ" selected>BUSINESS COMPUTER (คอมพิวเตอร์ธุรกิจ)</option>
                            </select>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3 border-top border-secondary">
                            
                            <button type="submit" name="Submit" class="btn btn-outline-success btn-lg me-md-2">
                                <i class="bi bi-box-arrow-in-right"></i> SUBMIT REGISTRATION
                            </button>
                            
                            <button type="reset" class="btn btn-outline-warning me-md-2">
                                <i class="bi bi-arrow-counterclockwise"></i> RESET
                            </button>
                            
                            <button type="button" class="btn btn-outline-primary me-md-2" onClick="window.location='https://www.msu.ac.th/';">
                                <i class="bi bi-link-45deg"></i> GO MSU
                            </button>

                            <button type="button" class="btn btn-outline-secondary me-md-2" onDblClick="alert('จ๊ะเอ๋, Access Granted!');">
                                <i class="bi bi-terminal"></i> HELLO (DblClick)
                            </button>
                            
                            <button type="button" class="btn btn-outline-light" onClick="window.print();">
                                <i class="bi bi-printer"></i> PRINT
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            
            <hr class="my-5 border-secondary">
            <div class="card card-dark-style">
                <div class="card-header bg-dark text-info">
                    <h2 class="h4 mb-0"><i class="bi bi-hdd-fill me-2"></i> DATA TRANSMITTED: OUTPUT</h2>
                </div>
                <div class="card-body">
                <?php
                    // เพิ่มโค้ด Error Reporting ไว้ด้านบนสุด หากมีปัญหาโค้ดไม่ทำงาน
                    // error_reporting(E_ALL);
                    // ini_set('display_errors', 1);

                    if (isset($_POST['Submit'])) {
                        $fullname = $_POST['fullname'] ;
                        $phone = $_POST['phone'] ;
                        $height = $_POST['height'] ;
                        $address = $_POST['address'] ;
                        $birthday = $_POST['birthday'] ;
                        $color = $_POST['color'] ;
                        $major = $_POST['major'] ;
                        
                        // แสดงผลลัพธ์
                        echo "<p class='text-light'><strong>NAME:</strong> {$fullname}</p>";
                        echo "<p class='text-light'><strong>PHONE:</strong> {$phone}</p>";
                        echo "<p class='text-light'><strong>HEIGHT:</strong> {$height} cm</p>";
                        echo "<p class='text-light'><strong>ADDRESS:</strong> {$address}</p>";
                        echo "<p class='text-light'><strong>DOB:</strong> {$birthday}</p>";
                        echo '<p class="text-light"><strong>COLOR CODE:</strong> '.$color.'</p>';
                        // ใช้ CSS Class ที่กำหนดไว้
                        echo "<div class='color-display' style='background-color:{$color}'></div>";
                        echo "<p class='mt-3 text-light'><strong>MAJOR:</strong> {$major}</p>";
                    } else {
                        echo "<p class='text-secondary'>// Awaiting data submission. Please complete the form above.</p>";
                    }
                ?>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    // Bootstrap Validation Script
    (function () {
      'use strict'
      var forms = document.querySelectorAll('.needs-validation')
      Array.prototype.slice.call(forms)
        .forEach(function (form) {
          form.addEventListener('submit', function (event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
    })()
</script>

</body>
</html>