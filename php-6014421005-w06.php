<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>php-6014421005-w06</title>
</head>
<body>
    <h1>ระบบเสนอหัวข้อโครงงาน</h1>
    <form action="project_data.php" method="get">
        <fieldset id="select">
            <legend>ส่วนที่1 ข้อมูลผู้จัดทำโครงงาน</legend>
            <lebel for="sid">รหัสนักศึกษา</lebel><input type="text" name="sid">
            <lebel for="fname">ชื่อ</lebel><input type="text" name="fname">
            <lebel for="lname">นามสกุล</lebel><input type="text" name="lname">
            <lebel for="program">สาขาวิชา</lebel>            
            <select name="program">
                <option value="1">วิทยาการคอมพิวเตอร์</option>
                <option value="2">เทคโนโลยีสารสนเทศ</option>
                <option value="3">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
                <option value="4">ภูมิสารสนเทศ</option>
                <option value="5">คอมพิวเตอร์ศึกษา</option>
            </select>
            <lebel for="faculty">คณะ</lebel> 
            <select name="faculty">
                    <option value="1">วิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</option>
                    <option value="2">ครุศาสตร์</option>               
            </select>  
            <lebel for="std_year">ชั้นปี</lebel>
            <input type="radio" name="std_year" value="1"><label>ปี1 </lebel>
            <input type="radio" name="std_year" value="2"><label>ปี2 </lebel>
            <input type="radio" name="std_year" value="3"><label>ปี3 </lebel>
            <input type="radio" name="std_year" value="4"><label>ปี4 </lebel>                
        </fieldset> 
        <fieldset id="select">
                <legend>ส่วนที่2 ข้อมูลโครงงาน</legend>
                <lebel for="prj_name_th">ชื่อโครงงาน(ภาษาไทย)</lebel><input type="textarea" name="prj_name_th"><br>
                <lebel for="prj_name_en">ชื่อโครงงาน(ภาษาอังกฤษ)</lebel><input type="textarea" name="prj_name_en"><br>
                <lebel for="prj_type">ประเภทโครงงาน</lebel>
                <select name="prj_type">
                    <option value="1">เกม</option>
                    <option value="2">โปรแกรมเดสก์ทอป</option>
                    <option value="3">โปรแกรมมือถือ</option>                       
                </select>
                <lebel>เครื่องมือที่ใช้ในการพัฒนา</lebel>
                <input type="checkbox" name="prj_tool[]" value="html"><label>HTML</lebel>
                <input type="checkbox" name="prj_tool[]" value="CSS"><label>CSS</lebel>
                <input type="checkbox" name="prj_tool[]" value="JavaScriptL"><label>JavaScriptL</lebel>
                <input type="checkbox" name="prj_tool[]" value="Bootstrap"><label>Bootstrap</lebel>
                <input type="checkbox" name="prj_tool[]" value="Material Design"><label>Material Design</lebel>
                <input type="checkbox" name="prj_tool[]" value="Angular"><label>Angular</lebel>
                <input type="checkbox" name="prj_tool[]" value="React"><label>React</lebel>
                <input type="checkbox" name="prj_tool[]" value="label"><label>PHP</lebel>
                <input type="checkbox" name="prj_tool[]" value="MySQL"><label>MySQL</lebel>
                <input type="checkbox" name="prj_tool[]" value="CharJS"><label>CharJS</lebel><br>
                <lebel>อาจารย์ที่ปรึกษา</lebel>
                <select name="prj_advisor">
                    <option value="1">ผศ.บุญเรือน พฤกษ์ศศิศร</option>
                    <option value="2">ผศ.ทิพย์วรรณ ฟูเฟื่อง</option>
                </select>
        </fieldset>  
        <input type="submit" value="Go...">

</body>
</html>