<?php include '../includes/header.php'; ?>
<?php include '../includes/sidebar.php'; ?>

<main class="main-content">
    <?php include '../includes/navbar.php'; ?>
    
    <div class="page-content">
        <div class="section-header">
            <h2 class="section-title">Add New Student</h2>
            <a href="list.php" class="btn btn-secondary"><i class="fa-solid fa-arrow-left"></i> Back to List</a>
        </div>

        <div class="form-container">
            <form action="#" method="POST">
                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Full Name</label>
                        <input type="text" class="form-control" placeholder="Enter student name" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Enter email" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Password</label>
                        <input type="password" class="form-control" placeholder="Enter temporary password" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder="Confirm password" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label class="form-label">Grade (Optional)</label>
                        <select class="form-control">
                            <option value="">Select Grade</option>
                            <option value="6">Grade 6</option>
                            <option value="7">Grade 7</option>
                            <option value="8">Grade 8</option>
                            <option value="9">Grade 9</option>
                            <option value="10">Grade 10</option>
                            <option value="11">Grade 11</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Batch (Optional)</label>
                        <select class="form-control">
                            <option value="">Select Batch</option>
                            <option value="2026 AL">2026 A/L</option>
                            <option value="2027 AL">2027 A/L</option>
                            <option value="2024 OL">2024 O/L</option>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label class="form-label">Account Status</label>
                    <select class="form-control">
                        <option value="active">Active</option>
                        <option value="pending">Pending</option>
                        <option value="suspended">Suspended</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center; margin-top: 10px;">
                    <i class="fa-solid fa-save"></i> Save Student
                </button>
            </form>
        </div>
    </div>
</main>

<?php include '../includes/footer.php'; ?>
