<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TickLink | Add New Job</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <!-- Admin CSS -->
    <link rel="stylesheet" href="../css/admin.css">

    <style>
        .add-job-content {
            padding: 30px;
        }

        .page-heading {
            margin-bottom: 25px;
        }

        .page-heading h2 {
            color: #263b53;
            font-size: 25px;
            font-weight: bold;
        }

        .page-heading p {
            color: #8995a2;
            font-size: 13px;
            margin-top: 6px;
        }

        .form-card {
            background: white;
            padding: 25px;
            border-radius: 10px;
            border: 1px solid #edf0f3;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            margin-bottom: 22px;
        }

        .form-section-title {
            color: #263b53;
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 20px;
            padding-bottom: 12px;
            border-bottom: 1px solid #edf0f3;
        }

        .form-label {
            color: #53616c;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 7px;
        }

        .form-control,
        .form-select {
            font-size: 13px;
            min-height: 42px;
            border-color: #dce2e8;
        }

        textarea.form-control {
            min-height: 100px;
        }

        .save-btn {
            background: #173b78;
            color: white;
            border: none;
            border-radius: 7px;
            padding: 11px 25px;
            font-size: 13px;
        }

        .save-btn:hover {
            background: #126fa9;
            color: white;
        }

        .cancel-btn {
            background: #edf1f5;
            color: #53616c;
            border: none;
            border-radius: 7px;
            padding: 11px 25px;
            font-size: 13px;
            text-decoration: none;
        }

        .cancel-btn:hover {
            background: #dce2e8;
            color: #263b53;
        }

        .help-text {
            color: #8995a2;
            font-size: 11px;
            margin-top: 6px;
        }

        @media (max-width: 768px) {
            .add-job-content {
                padding: 18px;
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

                <a href="manage_jobs.php" class="menu-link">
                    <span>▤</span>
                    Manage Jobs
                </a>

                <a href="add_job.php" class="menu-link active">
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

            <section class="add-job-content">

                <!-- Page Heading -->
                <div class="page-heading">
                    <h2>Add New Job</h2>
                    <p>Create a new internet installation job.</p>
                </div>


                <form action="#" method="POST" enctype="multipart/form-data">

                    <!-- Customer Information -->
                    <div class="form-card">

                        <h5 class="form-section-title">
                            Customer Information
                        </h5>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Job Number</label>
                                <input type="text"
                                       name="job_number"
                                       class="form-control"
                                       placeholder="Enter job number"
                                       required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Customer Name</label>
                                <input type="text"
                                       name="customer_name"
                                       class="form-control"
                                       placeholder="Enter customer name"
                                       required>
                            </div>

                            <div class="col-12">
                                <label class="form-label">Address</label>
                                <input type="text"
                                       name="site_address"
                                       class="form-control"
                                       placeholder="Enter installation address"
                                       required>
                            </div>

                        </div>

                    </div>


                    <!-- Job Details -->
                    <div class="form-card">

                        <h5 class="form-section-title">
                            Job Details
                        </h5>

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Client</label>

                                <select name="client_id" class="form-select" required>
                                    <option value="">Select Client</option>
                                    <option value="1">Utilities-MN</option>
                                    <option value="2">Intrepid-MN</option>
                                    <option value="3">Metronet-MN</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Job Type</label>

                                <select name="job_type_id" class="form-select" required>
                                    <option value="">Select Job Type</option>
                                    <option>Drop Bury</option>
                                    <option>Install</option>
                                    <option>Trouble Call</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Work Code</label>

                                <select class="form-select" disabled>
                                    <option>To be confirmed</option>
                                </select>

                                <div class="help-text">
                                    Work codes will be added after confirmation.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Assigned Technician</label>

                                <select name="assigned_technician_id"
                                        class="form-select">
                                    <option value="">Select Technician</option>
                                </select>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Job Price (USD)</label>

                                <input type="number"
                                       name="job_price"
                                       class="form-control"
                                       placeholder="Enter job price"
                                       min="0"
                                       step="0.01"
                                       required>
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Execution Date</label>

                                <input type="date"
                                       name="execution_date"
                                       class="form-control">
                            </div>

                            <div class="col-12">
                                <label class="form-label">Notes</label>

                                <textarea name="notes"
                                          class="form-control"
                                          placeholder="Enter additional notes"></textarea>
                            </div>

                        </div>

                    </div>


                    <!-- Job Images -->
                    <div class="form-card">

                        <h5 class="form-section-title">
                            Job Images
                        </h5>

                        <div>
                            <label class="form-label">Upload Images</label>

                            <input type="file"
                                   name="job_images[]"
                                   class="form-control"
                                   accept="image/*"
                                   multiple>

                            <div class="help-text">
                                You can upload multiple images.
                            </div>
                        </div>

                    </div>


                    <!-- Buttons -->
                    <div class="d-flex justify-content-end gap-2 mb-4">

                        <a href="manage_jobs.php" class="cancel-btn">
                            Cancel
                        </a>

                        <button type="submit" class="save-btn">
                            Save Job
                        </button>

                    </div>

                </form>

            </section>

        </main>

    </div>

</body>
</html>