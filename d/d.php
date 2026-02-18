<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>66010914047 ไชยวัฒน์ เหล่าหลำ (เจย์)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    /* ปรับแต่งเพิ่มเติมสำหรับ div แสดงสีที่ชอบ */
    .color-display {
        width: 100%;
        height: 30px; /* กำหนดความสูงให้เห็นชัดเจนขึ้น */
        border: 1px solid #ccc;
        margin-top: 5px;
    }
</style>

</head>

<body>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-md-10">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h1 class="h3 mb-0">แบบฟอร์มลงทะเบียนด้วยChaygpt ไชยวัฒน์ เหล่าหลำ 66010914047</h1>
                </div>
                <div class="card-body">
                    
                    <form method="post" action="" class="needs-validation" novalidate>
                        
                        <div class="mb-3">
                            <label for="fullname" class="form-label">ชื่อ-สกุล <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="fullname" name="fullname" autofocus required>
                            <div class="invalid-feedback">
                                กรุณากรอกชื่อ-สกุล
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label">เบอร์โทร <span class="text-danger">*</span></label>
                            <input type="tel" class="form-control" id="phone" name="phone" required pattern="[0-9]{10}">
                            <div class="invalid-feedback">
                                กรุณากรอกเบอร์โทร 10 หลัก (ตัวเลขเท่านั้น)
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label for="height" class="form-label">ส่วนสูง (ซม.) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" id="height" name="height" min="100" max="200" required>
                            <div class="form-text">ต้องอยู่ระหว่าง 100 ถึง 200 ซม.</div>
                            <div class="invalid-feedback">
                                กรุณากรอกส่วนสูงที่ถูกต้อง
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">ที่อยู่ <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="address" name="address" rows="4" required></textarea>
                            <div class="invalid-feedback">
                                กรุณากรอกที่อยู่
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="birthday" class="form-label">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                            <input type="date" class="form-control" id="birthday" name="birthday" required>
                            <div class="invalid-feedback">
                                กรุณาเลือกวันเดือนปีเกิด
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="color" class="form-label">สีที่ชอบ</label>
                            <input type="color" class="form-control form-control-color" id="color" name="color" value="#007bff">
                        </div>

                        <div class="mb-3">
                            <label for="major" class="form-label">สาขาวิชา</label>
                            <select class="form-select" id="major" name="major">
                                <option value="การบัญชี">การบัญชี</option>
                                <option value="การตลาด">การตลาด</option>
                                <option value="การจัดการ">การจัดการ</option>
                                <option value="คอมพิวเตอร์ธุรกิจ">คอมพิวเตอร์ธุรกิจ</option>
                            </select>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3">
                            <button type="submit" name="Submit" class="btn btn-success me-md-2">
                                <i class="bi bi-person-plus-fill"></i> สมัครสมาชิก
                            </button>
                            <button type="reset" class="btn btn-warning text-white me-md-2">
                                <i class="bi bi-arrow-clockwise"></i> ยกเลิก
                            </button>
                            <button type="button" class="btn btn-info text-white me-md-2" onClick="window.location='https://www.msu.ac.th/';">
                                <i class="bi bi-box-arrow-in-right"></i> Go to MSU
                            </button>
                            <button type="button" class="btn btn-secondary me-md-2" onDblClick="alert('จ๊ะเอ๋');">
                                <i class="bi bi-chat-dots-fill"></i> Hello (ดับเบิ้ลคลิก)
                            </button>
                            <button type="button" class="btn btn-dark" onClick="window.print();">
                                <i class="bi bi-printer-fill"></i> พิมพ์
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            
            <hr class="my-5">
            <div class="card shadow">
                <div class="card-header bg-secondary text-white">
                    <h2 class="h4 mb-0">✅ ข้อมูลที่ได้รับจากฟอร์ม</h2>
                </div>
                <div class="card-body">
                <?php
                    if (isset($_POST['Submit'])) {
                        $fullname = $_POST['fullname'] ;
                        $phone = $_POST['phone'] ;
                        $height = $_POST['height'] ;
                        $address = $_POST['address'] ;
                        $birthday = $_POST['birthday'] ;
                        $color = $_POST['color'] ;
                        $major = $_POST['major'] ;
                        
                        // แสดงผลลัพธ์
                        echo "<p><strong>ชื่อ-สกุล:</strong> {$fullname}</p>";
                        echo "<p><strong>เบอร์โทร:</strong> {$phone}</p>";
                        echo "<p><strong>ส่วนสูง:</strong> {$height} ซม.</p>";
                        echo "<p><strong>ที่อยู่:</strong> {$address}</p>";
                        echo "<p><strong>วันเดือนปีเกิด:</strong> {$birthday}</p>";
                        echo '<p><strong>สีที่ชอบ:</strong> '.$color.'</p>';
                        // ใช้ CSS Class ที่กำหนดไว้
                        echo "<div class='color-display' style='background-color:{$color}'></div>";
                        echo "<p class='mt-2'><strong>สาขาวิชา:</strong> {$major}</p>";
                    } else {
                        echo "<p>กรุณากรอกข้อมูลและกดปุ่ม **สมัครสมาชิก** เพื่อแสดงผลลัพธ์</p>";
                    }
                ?>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script>
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