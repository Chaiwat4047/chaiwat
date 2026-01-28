<!doctype html>
<html lang="th">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ใบสมัครงาน - Minimalist Teal (ไชยวัฒน์)</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

<style>
    /* สไตล์หลัก: ใช้สี Cyan/Teal เป็นสีเน้น */
    body {
        background-color: #e8f8f8; /* พื้นหลังสีอ่อนอมฟ้า/เขียว */
    }
    .card-minimalist {
        background-color: #ffffff;
        border: none;
        border-radius: 12px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1);
    }
    .header-teal {
        background-color: #00bcd4; /* Cyan/Teal */
        color: white;
        border-radius: 12px 12px 0 0;
        padding: 20px;
    }
    .form-label-teal {
        color: #00897b!important; /* Teal เข้ม */
        font-weight: 600;
        margin-bottom: 5px;
    }
    /* สไตล์ตัวแบ่งส่วน (Segment Divider) */
    .section-divider {
        margin: 30px 0;
        border-top: 3px solid #b2ebf2; /* เส้นสีฟ้าอ่อน */
    }
</style>

</head>

<body>
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-9">
            
            <div class="card card-minimalist">
                <div class="header-teal">
                    <h1 class="h4 mb-0"><i class="bi bi-person-workspace me-2"></i> 66010914047 ไชยวัฒน์ เหล่าหลำ เจย์</h1>
                    <p class="mb-0 fs-6">กรอกข้อมูลให้ครบถ้วนเพื่อยื่นใบสมัคร</p>
                </div>
                <div class="card-body p-4 p-md-5">
                    
                    <form method="post" action="" class="needs-validation" novalidate>
                        
                        <h5 class="text-secondary mb-3"><i class="bi bi-dot"></i> ตำแหน่งและวัตถุประสงค์</h5>
                        <div class="mb-4">
                            <label for="position" class="form-label form-label-teal">ตำแหน่งงานที่ต้องการสมัคร <span class="text-danger">*</span></label>
                            <select class="form-select form-control" id="position" name="position" required>
                                <option value="" disabled selected>-- เลือกตำแหน่งที่สนใจ --</option>
                                <option value="โปรแกรมเมอร์">Programmer (โปรแกรมเมอร์)</option>
                                <option value="บัญชี">Accountant (บัญชี)</option>
                                <option value="ผู้จัดการสาขา">Branch Manager (ผู้จัดการสาขา)</option>
                                <option value="อื่นๆ">อื่นๆ</option>
                            </select>
                            <div class="invalid-feedback">กรุณาเลือกตำแหน่งที่ต้องการสมัคร</div>
                        </div>

                        <div class="section-divider"></div>

                        <h5 class="text-secondary mb-3"><i class="bi bi-dot"></i> ข้อมูลส่วนบุคคล</h5>
                        
                        <div class="row g-3">
                            <div class="col-md-3">
                                <label for="title" class="form-label form-label-teal">คำนำหน้า <span class="text-danger">*</span></label>
                                <select class="form-select" id="title" name="title" required>
                                    <option value="นาย" selected>นาย</option>
                                    <option value="นาง">นาง</option>
                                    <option value="นางสาว">นางสาว</option>
                                </select>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="fullname" class="form-label form-label-teal">ชื่อ-สกุล <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="fullname" name="fullname" autofocus required value="ไชยวัฒน์ เหล่าหลำ" placeholder="ระบุชื่อ-สกุล">
                                <div class="invalid-feedback">กรุณากรอกชื่อ-สกุล</div>
                            </div>
                            
                            <div class="col-md-3">
                                <label for="birthday" class="form-label form-label-teal">วันเดือนปีเกิด <span class="text-danger">*</span></label>
                                <input type="date" class="form-control" id="birthday" name="birthday" required>
                                <div class="invalid-feedback">กรุณาเลือกวันเดือนปีเกิด</div>
                            </div>

                            <div class="col-12 mt-4">
                                <label for="education" class="form-label form-label-teal">ระดับการศึกษาสูงสุด <span class="text-danger">*</span></label>
                                <select class="form-select" id="education" name="education" required>
                                    <option value="" disabled selected>-- เลือกระดับการศึกษาสูงสุด --</option>
                                    <option value="มัธยม">มัธยมศึกษาตอนปลาย/ปวช.</option>
                                    <option value="ปวส./อนุปริญญา">ปวส./อนุปริญญา</option>
                                    <option value="ปริญญาตรี">ปริญญาตรี</option>
                                    <option value="ปริญญาโท">ปริญญาโท</option>
                                    <option value="ปริญญาเอก">ปริญญาเอก</option>
                                </select>
                                <div class="invalid-feedback">กรุณาเลือกระดับการศึกษา</div>
                            </div>
                        </div>

                        <div class="section-divider"></div>

                        <h5 class="text-secondary mb-3"><i class="bi bi-dot"></i> ทักษะและประวัติการทำงาน</h5>

                        <div class="mb-4">
                            <label for="skill" class="form-label form-label-teal">ความสามารถพิเศษ / ทักษะเฉพาะทาง</label>
                            <textarea class="form-control" id="skill" name="skill" rows="3" placeholder="เช่น ภาษาอังกฤษคล่องแคล่ว, เขียน Python ได้, ใช้โปรแกรมบัญชีสำเร็จรูปได้"></textarea>
                        </div>

                        <div class="mb-5">
                            <label for="experience" class="form-label form-label-teal">ประสบการณ์ทำงานโดยย่อ</label>
                            <textarea class="form-control" id="experience" name="experience" rows="4" placeholder="ระบุชื่อบริษัท, ตำแหน่ง, และระยะเวลาที่ทำงาน"></textarea>
                            <div class="form-text text-muted">หากไม่มีประสบการณ์ ให้ระบุ "ไม่มี"</div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                            <button type="submit" name="Submit" class="btn btn-info text-white btn-lg px-5">
                                <i class="bi bi-check2-circle me-2"></i> ยื่นใบสมัคร (Submit)
                            </button>
                            <button type="reset" class="btn btn-outline-secondary">
                                ล้างข้อมูล
                            </button>
                        </div>
                    </form>

                </div>
            </div>
            
            <hr class="my-5">
            <div class="card p-3 bg-light">
                <h5 class="text-dark mb-3"><i class="bi bi-clipboard-data-fill me-2"></i> DATA PREVIEW</h5>
                
                <?php
                    // ************** โค้ด PHP แสดงผลข้อมูล **************
                    
                    // ตรวจสอบว่ามีการส่งข้อมูลฟอร์มด้วยปุ่ม 'Submit' หรือไม่
                    if (isset($_POST['Submit'])) {
                        // 1. รับค่าจาก $_POST ทั้งหมด
                        $position = $_POST['position'];
                        $title = $_POST['title'];
                        $fullname = $_POST['fullname'];
                        $birthday = $_POST['birthday'];
                        $education = $_POST['education'];
                        $skill = $_POST['skill'];
                        $experience = $_POST['experience'];
                        
                        // 2. แสดงผลลัพธ์
                        echo "<p class='text-success fw-bold'>✅ ข้อมูลถูกบันทึกเรียบร้อยแล้ว!</p>";
                        echo "<ul class='list-group list-group-flush'>";
                        
                        // แสดงข้อมูลแต่ละรายการ
                        echo "<li class='list-group-item'><strong>1. ตำแหน่งที่สมัคร:</strong> <span class='text-info'>{$position}</span></li>";
                        echo "<li class='list-group-item'><strong>2. ชื่อ-สกุล:</strong> {$title} {$fullname}</li>";
                        echo "<li class='list-group-item'><strong>3. วันเดือนปีเกิด:</strong> {$birthday}</li>";
                        echo "<li class='list-group-item'><strong>4. ระดับการศึกษา:</strong> {$education}</li>";
                        
                        // ความสามารถพิเศษ (ใช้ <pre> เพื่อรักษารูปแบบการขึ้นบรรทัดใหม่)
                        echo "<li class='list-group-item'><strong>5. ความสามารถพิเศษ:</strong><br><pre class='bg-light p-2 border rounded'>{$skill}</pre></li>";
                        
                        // ประสบการณ์ทำงาน (ใช้ <pre> เพื่อรักษารูปแบบการขึ้นบรรทัดใหม่)
                        echo "<li class='list-group-item'><strong>6. ประสบการณ์ทำงาน:</strong><br><pre class='bg-light p-2 border rounded'>{$experience}</pre></li>";
                        
                        echo "</ul>";

                    } else {
                        // แสดงข้อความเมื่อยังไม่มีการส่งข้อมูล
                        echo "<p class='text-muted'>// กรุณากรอกข้อมูลและกดปุ่ม **ยื่นใบสมัคร** เพื่อดูตัวอย่างข้อมูลที่ส่ง.</p>";
                    }
                ?>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    // Script สำหรับ Bootstrap Validation
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