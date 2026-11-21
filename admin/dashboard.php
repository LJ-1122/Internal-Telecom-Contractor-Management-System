<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TickLink | Admin Dashboard</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Admin CSS -->
    <link rel="stylesheet" href="../css/admin.css">
</head>

<body>

    <!-- Top Header -->
    <header class="main-header">

        <div class="header-left">

            <img src="../assets/ticklink_logo.png"
                 alt="TickLink Logo"
                 class="header-logo">

            <div class="company-name">
                <h4>TICKLINK LLC</h4>
                <span>Fiber Optic Solutions</span>
            </div>

            <button class="menu-toggle" type="button">
                ☰
            </button>

        </div>

        <div class="header-right">

            <span class="notification-icon">♧</span>

            <div class="user-profile">
                <div class="profile-circle">A</div>
                <span>Admin</span>
                
            </div>

        </div>

    </header>


    <div class="admin-layout">

        <!-- Sidebar -->
        <aside class="sidebar">

            <div class="sidebar-user">
                <span class="user-icon">♟</span>
                <span>Admin</span>
            </div>

            <nav class="sidebar-menu">

                <a href="dashboard.php" class="menu-link active">
                    <span>▦</span>
                    Dashboard
                </a>

                <a href="manage_jobs.php" class="menu-link">
                    <span>▤</span>
                    Manage Jobs
                </a>

                <a href="add_job.php" class="menu-link">
                    <span>＋</span>
                    Add New Job
                </a>

                <a href="manage_users.php" class="menu-link">
                    <span>♙</span>
                    Manage Users
                </a>

                <a href="manage_clients.php" class="menu-link">
                    <span>▣</span>
                    Manage Clients
                </a>

                <a href="reports.php" class="menu-link">
                    <span>▥</span>
                    Reports
                </a>

            </nav>

            <div class="sidebar-bottom">
                <a href="../login.php" class="menu-link">
                    <span>↪</span>
                    Log Out
                </a>
            </div>

        </aside>


        <!-- Main Content -->
        <main class="main-content">

            <section class="dashboard-content">

                <div class="page-heading">
                    <h2>Dashboard</h2>
                    <p>Monitor and manage all installation jobs.</p>
                </div>


                <!-- Statistics -->
                <div class="stats-grid">

                    <div class="stat-card">
                        <div class="stat-icon total-icon">▤</div>
                        <p>Total Jobs</p>
                        <h3>--</h3>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon pending-icon">◷</div>
                        <p>Pending Jobs</p>
                        <h3>--</h3>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon approved-icon">✓</div>
                        <p>Approved Jobs</p>
                        <h3>--</h3>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon rejected-icon">✕</div>
                        <p>Rejected Jobs</p>
                        <h3>--</h3>
                    </div>

                </div>


                <!-- Recent Jobs -->
                <div class="recent-jobs">

                    <div class="section-header">

                        <div>
                            <h4>Recent Jobs</h4>
                            <p>Latest installation work orders</p>
                        </div>

                        <a href="manage_jobs.php" class="view-all">
                            View All
                        </a>

                    </div>


                    <div class="table-responsive">

                        <table class="table align-middle">

                            <thead>
                                <tr>
                                    <th>Job Number</th>
                                    <th>Client</th>
                                    <th>Customer</th>
                                    <th>Job Type</th>
                                    <th>Technician</th>
                                    <th>Status</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td colspan="6" class="text-center empty-message">
                                        No jobs available yet.
                                    </td>
                                </tr>
                            </tbody>

                        </table>

                    </div>

                </div>

            </section>

        </main>

    </div>

</body>
</html>