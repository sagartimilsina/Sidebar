<style>
    .sublist {
        list-style: none;
        padding-left: 20px;
        display: none;
    }

    .sublist-item {
        margin-bottom: 5px;
        margin-left: 45px;
    }

    .arrow-icon {
        font-size: 20px;
        margin-left: auto;
        transition: transform 0.3s ease;
    }

    .sidebar-content {
        position: relative;
        height: 100%;
        width: 100%;
        overflow-y: scroll;
    }

    .sidebar-content::-webkit-scrollbar {
        display: none;
    }
</style>

<nav>
    <div class="navbar">
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">SMS </span>
        </div>
        <div class="dropdown">
            <a href="#">  <img src="https://linguistics.hku.hk/wp/wp-content/uploads/2018/02/profile_image_200x200.jpg" alt="profile_image" class="profile_image" width="50" height="50">
            <div class="dropdown-content">
                <a href="../teacher/logout.php" class="nav-link">
                    <i class="bx bx-log-out icon"></i>
                    <span class="link">Logout</span>
                </a>

            </div>
        </div>
    </div>
    <div class="sidebar">
        <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">SMS</span>
        </div>

        <div class="sidebar-content">
            <ul class="lists">
                <li class="list">
                    <a href="#" class="nav-link">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="link ">Dashboard</span>
                    </a>
                </li>
                <li class="list">
                    <a href="main_student.php" class="nav-link">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="link">Manage Student</span>
                    </a>   
                </li>
                <li class="list">
                    <a href="main_attendance.php" class="nav-link" >
                        <i class="bx bx-home-alt icon"></i>
                        <span class="link">Manage Attendances</span>
                    </a>
                </li>
        </div>
    </div>
</nav>
<script>
    function toggleSublist(event) {
        event.preventDefault();
        const sublist = event.currentTarget.parentNode.querySelector('.sublist');
        sublist.style.display = sublist.style.display === 'none' ? 'block' : 'none';

        const arrowIcon = event.currentTarget.querySelector('.arrow-icon');
        arrowIcon.style.transform = sublist.style.display === 'none' ? 'rotate(0deg)' : 'rotate(-180deg)';
    }
</script>