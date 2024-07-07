<?php
namespace App\Models;
class GiaSu extends BaseModel{
    protected $user = "users";
    protected $teacher = "teachers";
    protected $course = "courses";
    protected $parent = "parents";
    protected $course_teacher = "course_teacher";
    protected $teacher_term = "teacher_terms";
    protected $hand_teacher = "hand_teacher";

    public function addUser($id, $name, $email, $password, $role) {
        $sql = "INSERT INTO `$this->user` (id, name, email, password, role) VALUES (?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        $this->execute([$id, $name, $email, $password, $role]);

        $user_id = $this->pdo->lastInsertId();
        return $user_id;
    }
    
    public function addTeacher($id, $user_id) {
        $sql = "INSERT INTO `$this->teacher` (id, user_id) VALUES (?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $user_id]);
    }
    public function getUserByEmailAndPassword($email, $password) {
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $this->setQuery($sql);
        return $this->loadRow([$email, $password]);
        
    }
    public function getTeacherById($id) {
        $sql = "SELECT * FROM `$this->teacher` WHERE user_id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
        
    }
    public function getTeacherProfilePicture($id) {
        $sql = "SELECT profile_picture FROM `$this->teacher` WHERE user_id = ?";
        $this->setQuery($sql);
        $result = $this->loadRow([$id]);
        return $result ? $result->profile_picture : "";
    }
    
    public function getTeacherGraduationImage($id) {
        $sql = "SELECT img_graduation FROM `$this->teacher` WHERE user_id = ?";
        $this->setQuery($sql);
        $result = $this->loadRow([$id]);
        return $result ? $result->img_graduation : ""; 
    }
    
    public function updateProfile($user_id, $profile_picture, $sex, $phone, $school, $year_of_birth, $major, $verify_education, $img_graduation) {

        $old_profile_picture = $this->getTeacherProfilePicture($user_id);
        $old_img_graduation = $this->getTeacherGraduationImage($user_id);
    
        if (!empty($profile_picture) && empty($img_graduation)) {
            if ($verify_education === "Xác minh khi nhận lớp tại trung tâm") {
                $sql = "UPDATE `$this->teacher` SET profile_picture = ?, sex = ?, phone_number = ?, school = ?, year_of_birth = ?, major = ?, verify_education = ? WHERE user_id = ?";
                $this->setQuery($sql);
                return $this->execute([$profile_picture, $sex, $phone, $school, $year_of_birth, $major, $verify_education, $user_id]);
            } else {
                $sql = "UPDATE `$this->teacher` SET profile_picture = ?, sex = ?, phone_number = ?, school = ?, year_of_birth = ?, major = ?, verify_education = ?, img_graduation = ? WHERE user_id = ?";
                $this->setQuery($sql);
                return $this->execute([$profile_picture, $sex, $phone, $school, $year_of_birth, $major, $verify_education, $img_graduation, $user_id]);
            }
        } else if (!empty($profile_picture) && !empty($img_graduation)) {
            $sql = "UPDATE `$this->teacher` SET profile_picture = ?, sex = ?, phone_number = ?, school = ?, year_of_birth = ?, major = ?, verify_education = ?, img_graduation = ? WHERE user_id = ?";
            $this->setQuery($sql);
            return $this->execute([$profile_picture, $sex, $phone, $school, $year_of_birth, $major, $verify_education, $img_graduation, $user_id]);
        } else if (empty($profile_picture) && !empty($img_graduation)) {
            $sql = "UPDATE `$this->teacher` SET profile_picture = ?, sex = ?, phone_number = ?, school = ?, year_of_birth = ?, major = ?, verify_education = ?, img_graduation = ? WHERE user_id = ?";
            $this->setQuery($sql);
            return $this->execute([$old_profile_picture, $sex, $phone, $school, $year_of_birth, $major, $verify_education, $img_graduation, $user_id]);
        } else {
            $sql = "UPDATE `$this->teacher` SET profile_picture = ?, sex = ?, phone_number = ?, school = ?, year_of_birth = ?, major = ?, verify_education = ?, img_graduation = ? WHERE user_id = ?";
            $this->setQuery($sql);
            return $this->execute([$old_profile_picture, $sex, $phone, $school, $year_of_birth, $major, $verify_education, $old_img_graduation, $user_id]);
        }
    }

    public function getListCourses() {
        $sql = "select * from $this->course";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function chiTietCourses($id) {
        $sql = "select * from $this->course  WHERE `id` = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    public function chiTietCoursesTheoCode($course_code) {
        $sql = "select * from $this->course  WHERE `code` = ?";
        $this->setQuery($sql);
        return $this->loadRow([$course_code]);
    }
    
    
    public function addNoteNhanLop($id, $course_id, $teacher_id, $course_code, $status_ct) {
        $sql = "INSERT INTO `$this->course_teacher` (id, course_id, teacher_id, course_code, status_ct) VALUES (?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $course_id, $teacher_id, $course_code, $status_ct]);
    }
    
    public function getCourseCode($id) {
        $sql = "SELECT code FROM `$this->course` WHERE id = ?";
        $this->setQuery($sql);
        $result = $this->loadRow([$id]);
        return $result ? $result->code : "";
    }
    public function getOneCourse($id) {
        $sql = "SELECT * FROM `$this->course` WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }
    
    
    public function getNoteNhanLop($id) {
        $sql = "SELECT * FROM `$this->course_teacher` ct
                JOIN `$this->course` c ON ct.course_id = c.id
                WHERE ct.teacher_id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows([$id]);
        
    }

  

    public function addParents($id, $name, $sex_parents, $phone, $address, $take_note) {
        $sql = "INSERT INTO `$this->parent` (id, name, sex_parents, phone, address, take_note) VALUES (?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $name, $sex_parents, $phone, $address, $take_note]);
    }

    public function getParents() {
        $sql = "SELECT * FROM `$this->parent`";
        $this->setQuery($sql);
        return $this->loadAllRows([]);
        
    }
    public function getOneParents($id) {
        $sql = "SELECT * FROM `$this->parent` WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
        
    }

    

    public function getTeachers() {
        $sql = "SELECT teachers.*, users.name, users.email FROM teachers JOIN users ON teachers.user_id = users.id;";
        $this->setQuery($sql);
        return $this->loadAllRows([]);
        
    }

    public function listNoteNhanLop() {
        $sql = "SELECT course_teacher.*, users.name AS teacher_name FROM course_teacher JOIN teachers ON course_teacher.teacher_id = teachers.id JOIN users ON teachers.user_id = users.id";
        $this->setQuery($sql);
        return $this->loadAllRows([]);
        
    }
    public function getCourses() {
        $sql = "SELECT * FROM `$this->course`";
        $this->setQuery($sql);
        return $this->loadAllRows([]);
        
    }

    public function addCourse($id, $code, $subject, $class, $address, $district, $sex_student, $des_student, $add_information, $fee, $sessions_week, $time_learn, $status, $request, $parents_id) {
        $sql = "INSERT INTO `$this->course` (id, code, subject, class, address, district, sex_student, des_student, add_information, fee, sessions_week, time_learn, status, request, parents_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        return $this->execute([$id, $code, $subject, $class, $address, $district, $sex_student, $des_student, $add_information, $fee, $sessions_week, $time_learn, $status, $request, $parents_id]);
    }
    
    public function getTeachers_Note($course_id) {
        $sql = "SELECT 
                    teachers.*, 
                    users.name, 
                    users.email, 
                    course_teacher.course_id, 
                    course_teacher.course_code, 
                    course_teacher.status_ct 
                FROM 
                    teachers 
                JOIN 
                    users ON teachers.user_id = users.id 
                JOIN 
                    course_teacher ON teachers.id = course_teacher.teacher_id 
                WHERE 
                    course_teacher.course_id = ?";
        $this->setQuery($sql);
        return $this->loadAllRows([$course_id]);
    }

    public function updateCourse($id,$code, $subject, $class, $address, $district, $sex_student, $des_student, $add_information, $fee, $sessions_week, $time_learn, $status, $request, $teacher_id, $parents_id){
        $sql = "UPDATE `$this->course` SET `code` = ? , `subject` = ? , `class` = ? , `address` = ? , `district` = ? , `sex_student` = ? , `des_student`  = ? , `add_information` = ? , `fee` = ? , `sessions_week` = ? , `time_learn` = ? , `status` = ? , `request` = ? , `teacher_id` = ?, `parents_id` = ?   WHERE `id` = ?";
        $param = [$code, $subject, $class, $address, $district, $sex_student, $des_student, $add_information, $fee, $sessions_week, $time_learn, $status, $request, $teacher_id, $parents_id, $id];
        $this->setQuery($sql);
        return $this->execute($param);
    }
    public function updateNoteNhanLop($course_id, $teacher_id, $status_ct) {
        $sql = "UPDATE `$this->course_teacher` SET `status_ct` = ? WHERE `course_id` = ? and `teacher_id` = ?" ;
        $this->setQuery($sql);
        return $this->execute([$status_ct, $course_id, $teacher_id]);
        
    }
    
    public function addTeacherTerm($teacher_id, $term_id) {
        $sql = "INSERT INTO `$this->teacher_term` (teacher_id, term_id) VALUES (?, ?)" ;
        $this->setQuery($sql);
        return $this->execute([$teacher_id, $term_id]);
        
    }

    public function getTeacherTerm($teacher_id) {
        $sql = "SELECT * FROM `$this->teacher_term` WHERE `teacher_id` = ?" ;
        $this->setQuery($sql);
        return $this->loadAllRows([$teacher_id]);
        
    }

    public function addHandleTeacher($teacher_id, $handle_id) {
        $sql = "INSERT INTO `$this->hand_teacher` (teacher_id, handle_id) VALUES (?, ?)" ;
        $this->setQuery($sql);
        return $this->execute([$teacher_id, $handle_id]);
        
    }
    public function getHandleTeacher($teacher_id) {
        $sql = "SELECT * FROM `$this->hand_teacher` WHERE `teacher_id` = ?" ;
        $this->setQuery($sql);
        return $this->loadAllRows([$teacher_id]);
        
    }
    

   

}
?>