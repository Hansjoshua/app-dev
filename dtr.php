<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DTR Records - Before Mobile Optimization</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f5f5f5;
            min-height: 100vh;
            color: #333;
        }

        /* Basic Header */
        .header-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background: #fff;
            border-bottom: 1px solid #ddd;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .header-icons {
            display: flex;
            gap: 15px;
        }

        .icon {
            width: 30px;
            height: 30px;
            background: #eee;
            border-radius: 3px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        /* Basic Container */
        .main-container {
            padding: 30px;
        }

        /* Basic Tabs */
        .tabs-container {
            margin-bottom: 30px;
        }

        .tabs {
            display: flex;
            background: #fff;
            border: 1px solid #ddd;
        }

        .tab {
            padding: 15px 25px;
            cursor: pointer;
            border-right: 1px solid #ddd;
            background: #f9f9f9;
        }

        .tab:last-child {
            border-right: none;
        }

        .tab.active {
            background: #007cba;
            color: white;
        }

        /* Basic Table Container */
        .table-container {
            background: white;
            padding: 20px;
            border: 1px solid #ddd;
        }

        .table-title {
            margin-bottom: 20px;
            font-size: 18px;
            font-weight: bold;
        }

        /* Records Table */
        .records-table {
            width: 100%;
            border-collapse: collapse;
            min-width: 800px; /* Fixed width causing horizontal scroll on mobile */
        }

        .records-table th,
        .records-table td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .records-table th {
            background: #f1f1f1;
            font-weight: bold;
        }

        .records-table tr:hover {
            background: #f9f9f9;
        }

        .status {
            padding: 4px 8px;
            border-radius: 3px;
            font-size: 12px;
            font-weight: bold;
        }

        .status.present {
            background: #d4edda;
            color: #155724;
        }

        .status.absent {
            background: #f8d7da;
            color: #721c24;
        }

        .status.late {
            background: #fff3cd;
            color: #856404;
        }

        /* Poor mobile styles - will be improved */
        @media (max-width: 700px) {
            .main-container {
                padding: 15px;
            }
            
            .table-container {
                overflow-x: auto; /* Creates horizontal scroll */
            }
        }
    </style>
</head>
<body>
    <!-- Basic Header -->
    <div class="header-row">
        <div class="logo">DTR System</div>
        <div class="header-icons">
            <div class="icon">🔔</div>
            <div class="icon">👤</div>
        </div>
    </div>

    <!-- Main Container -->
    <div class="main-container">
        <!-- Basic Tabs -->
        <div class="tabs-container">
            <div class="tabs">
                <div class="tab active">Daily Records</div>
                <div class="tab">Weekly Report</div>
                <div class="tab">Monthly Summary</div>
                <div class="tab">Settings</div>
            </div>
        </div>

        <!-- Table Container -->
        <div class="table-container">
            <div class="table-title">Daily Time Records</div>
            
            <!-- Records Table -->
            <table class="records-table">
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Employee Name</th>
                        <th>Time In</th>
                        <th>Time Out</th>
                        <th>Hours Worked</th>
                        <th>Status</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>EMP001</td>
                        <td>John Smith</td>
                        <td>08:00 AM</td>
                        <td>05:00 PM</td>
                        <td>8.0</td>
                        <td><span class="status present">Present</span></td>
                        <td>2024-01-15</td>
                        <td><button>Edit</button></td>
                    </tr>
                    <tr>
                        <td>EMP002</td>
                        <td>Jane Doe</td>
                        <td>08:15 AM</td>
                        <td>05:00 PM</td>
                        <td>7.75</td>
                        <td><span class="status late">Late</span></td>
                        <td>2024-01-15</td>
                        <td><button>Edit</button></td>
                    </tr>
                    <tr>
                        <td>EMP003</td>
                        <td>Mike Johnson</td>
                        <td>-</td>
                        <td>-</td>
                        <td>0</td>
                        <td><span class="status absent">Absent</span></td>
                        <td>2024-01-15</td>
                        <td><button>Edit</button></td>
                    </tr>
                    <tr>
                        <td>EMP004</td>
                        <td>Sarah Wilson</td>
                        <td>07:45 AM</td>
                        <td>04:45 PM</td>
                        <td>8.0</td>
                        <td><span class="status present">Present</span></td>
                        <td>2024-01-15</td>
                        <td><button>Edit</button></td>
                    </tr>
                    <tr>
                        <td>EMP005</td>
                        <td>David Brown</td>
                        <td>08:30 AM</td>
                        <td>05:30 PM</td>
                        <td>8.0</td>
                        <td><span class="status late">Late</span></td>
                        <td>2024-01-15</td>
                        <td><button>Edit</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        // Basic tab functionality
        document.querySelectorAll('.tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });
    </script>
</body>
</html>