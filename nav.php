<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <a class="navbar-brand" href="class.php">Class Management</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav ml-auto list-element">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle element-student" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Student
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="Addstudent.php">Add Student</a>
        <a class="dropdown-item" href="view.php">View Student</a>
        <a class="dropdown-item" href="sorting_trial.php">Sorted list</a>
      </div>
    </li>

    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        Teacher
      </a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="Addteacher.php">Add Teacher</a>
        <a class="dropdown-item" href="view_teacher.php">View Teacher</a>
        <a class="dropdown-item" href="allocation.php">Allocate</a>
        <a class="dropdown-item" href="filtertt.php">View allocation</a>
        <a class="dropdown-item" href="subject.php">Subjects</a>
      </div>
    </li>
  </ul>
  </div>
</nav>