<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TickLink | Manage Jobs</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Admin CSS -->
    <link rel="stylesheet" href="../css/admin.css">

    <style>
        .jobs-content {
            padding: 30px;
        }

        .jobs-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
        }

        .jobs-heading h2 {
            color: #263b53;
            font-size: 25px;
            font-weight: bold;
        }

        .jobs-heading p {
            color: #8995a2;
            font-size: 13px;
            margin-top: 6px;
        }

        .add-job-btn {
            background: #168bd2;
            color: white;
            text-decoration: none;
            padding: 11px 18px;
            border-radius: 7px;
            font-size: 13px;
            font-weight: bold;
        }

        .add-job-btn:hover {
            background: #126fa9;
            color: white;
        }

        .filter-card,
        .jobs-table-card {
            background: white;
            padding: 22px;
            border-radius: 10px;
            border: 1px solid #edf0f3;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            margin-bottom: 22px;
        }

        .filter-card h5 {
            color: #263b53;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        .filter-label {
            color: #53616c;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .filter-card .form-control,
        .filter-card .form-select {
            font-size: 13px;
            height: 42px;
            border-color: #dce2e8;
        }

        .filter-btn {
            background: #173b78;
            color: white;
            border: none;
            border-radius: 7px;
            padding: 10px 20px;
            font-size: 13px;
        }

        .reset-btn {
            background: #edf1f5;
            color: #53616c;
            border: none;
            border-radius: 7px;
            padding: 10px 20px;
            font-size: 13px;
        }

        .table-title {
            color: #263b53;
            font-size: 17px;
            font-weight: bold;
            margin-bottom: 18px;
        }

        .jobs-table-card .table thead th {
            white-space: nowrap;
        }

        .status-badge {
            padding: 6px 11px;
            border-radius: 20px;
            font-size: 11px;
            font-weight: bold;
            display: inline-block;
        }

        .pending-status {
            background: #fff3dc;
            color: #b47a14;
        }

        .approved-status {
            background: #e2f5eb;
            color: #258452;
        }

        .rejected-status {
            background: #fde9e9;
            color: #c13e3e;
        }

        .empty-jobs {
            text-align: center;
            padding: 40px !important;
            color: #8995a2 !important;
        }

        @media (max-width: 768px) {
            .jobs-content {
                padding: 18px;
            }

            .jobs-heading {
                align-items: flex-start;
                gap: 15px;
                flex-direction: column;
            }
        }
    </style>
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

                <a href="dashboard.php" class="menu-link">
                    <span>▦</span>
                    Dashboard
                </a>

                <a href="manage_jobs.php" class="menu-link active">
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

            <section class="jobs-content">

                <!-- Page Heading -->
                <div class="jobs-heading">

                    <div>
                        <h2>Manage Jobs</h2>
                        <p>View and manage all installation jobs across clients.</p>
                    </div>

                    <a href="add_job.php" class="add-job-btn">
                        + Add New Job
                    </a>

                </div>


                <!-- Search and Filters -->
                <div class="filter-card">

                    <h5>Search & Filters</h5>

                    <form action="manage_jobs.php" method="GET">

                        <div class="row g-3">

                            <div class="col-lg-4 col-md-6">
                                <label class="filter-label">
                                    Search Job Number or Address
                                </label>

                                <input type="text"
                                       name="search"
                                       class="form-control"
                                       placeholder="Enter job number or address">
                            </div>

                            <div class="col-lg-2 col-md-6">
                                <label class="filter-label">Client</label>

                                <select name="client" class="form-select">
                                    <option value="">All Clients</option>
                                    <option>Utilities-MN</option>
                                    <option>Intrepid-MN</option>
                                    <option>Metronet-MN</option>
                                </select>
                            </div>

                            <div class="col-lg-2 col-md-6">
                                <label class="filter-label">Status</label>

                                <select name="status" class="form-select">
                                    <option value="">All Statuses</option>
                                    <option>Pending</option>
                                    <option>Approved</option>
                                    <option>Rejected</option>
                                </select>
                            </div>

                            <div class="col-lg-2 col-md-6">
                                <label class="filter-label">Job Type</label>

                                <select name="job_type" class="form-select">
                                    <option value="">All Types</option>
                                    <option>Drop Bury</option>
                                    <option>Install</option>
                                    <option>Trouble Call</option>
                                </select>
                            </div>

                            <div class="col-lg-2 col-md-6">
                                <label class="filter-label">Technician</label>

                                <select name="technician" class="form-select">
                                    <option value="">All Technicians</option>
                                </select>
                            </div>

                        </div>

                        <div class="d-flex gap-2 mt-3">

                            <button type="submit" class="filter-btn">
                                Search
                            </button>

                            <a href="manage_jobs.php" class="reset-btn text-decoration-none">
                                Reset
                            </a>

                        </div>

                    </form>

                </div>


                <!-- Jobs Table -->
                <div class="jobs-table-card">

                    <h5 class="table-title">All Jobs</h5>

                    <div class="table-responsive">

                        <table class="table align-middle">

                            <thead>
                                <tr>
                                    <th>Job Number</th>
                                    <th>Client</th>
                                    <th>Customer Name</th>
                                    <th>Address</th>
                                    <th>Job Type</th>
                                    <th>Technician</th>
                                    <th>Execution Date</th>
                                    <th>Status</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td colspan="10" class="empty-jobs">
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