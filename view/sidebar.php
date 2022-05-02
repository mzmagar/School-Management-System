<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
<?php
include_once('../controller/config.php');

$index=$_SESSION["index_number"];

$sql="SELECT * FROM admin WHERE index_number='$index'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['i_name'];
$image=$row['image_name'];

?>      
      
           <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active treeview">
          <a href="dashboard.php">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
         
        <li>
          <a href="class_room.php">
            <i class="fa fa-list-ul"></i> <span>Classroom</span>
          </a>
        </li>
        <li>
          <a href="grade.php">
            <i class="fa fa-database"></i> <span>Grade</span>
          </a>
        </li>
        <li>
          <a href="subject.php">
            <i class="fa fa-book"></i> <span>Course</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-user" aria-hidden="true"></i>
            <span>Teacher</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="teacher.php"><i class="fa fa-circle-o"></i> Add Teacher</a></li>
            <li><a href="all_teacher.php"><i class="fa fa-circle-o"></i> All Teacher</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-graduation-cap"></i>
            <span>Student</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="student.php"><i class="fa fa-circle-o"></i> Add Student</a></li>
            <li><a href="all_student.php"><i class="fa fa-circle-o"></i> All Student</a></li>
            <li><a href="student_leave.php"><i class="fa fa-circle-o"></i> Leave Student</a></li>
          </ul>
        </li>
        <li>
          <a href="student_payment.php">
            <i class="fa fa-money"></i> <span>Student Payment</span>
          </a>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-calendar-check-o"></i>
            <span>Attendance</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add_attendance.php"><i class="fa fa-circle-o"></i> Add Attendance</a></li>
            <li><a href="student_attendance_history.php"><i class="fa fa-circle-o"></i>Student Attendance History </a></li>
            <li><a href="teacher_attendance_history.php"><i class="fa fa-circle-o"></i> Teacher Attendance History</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-certificate"></i>
            <span>Test</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="exam.php"><i class="fa fa-circle-o"></i>Create Test</a></li>
            <li><a href="exam_timetable.php"><i class="fa fa-circle-o"></i> Test Timetable</a></li>
            <li><a href="student_exam_marks.php"><i class="fa fa-circle-o"></i>Student Test Marks</a></li>
            <li><a href="student_exam_marks_history.php"><i class="fa fa-circle-o"></i>Student Test Marks History</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>