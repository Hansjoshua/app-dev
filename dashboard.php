<?php
// Dashboard with good mobile responsive design
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Mobile Friendly</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header h1 {
            font-size: 2rem;
            margin-bottom: 5px;
        }

        .header p {
            opacity: 0.9;
        }

        /* Mobile-optimized tab system */
        .tabs-container {
            background: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }

        .tabs {
            display: flex;
            background: #f8f9fa;
            border-bottom: 1px solid #dee2e6;
        }

        .tab {
            flex: 1;
            padding: 15px 10px;
            text-align: center;
            cursor: pointer;
            border: none;
            background: none;
            font-size: 14px;
            font-weight: 500;
            color: #6c757d;
            transition: all 0.3s ease;
            position: relative;
        }

        .tab.active {
            color: #007bff;
            background: white;
        }

        .tab.active::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 3px;
            background: #007bff;
        }

        .tab:hover {
            background: #e9ecef;
            color: #495057;
        }

        .tab-content {
            padding: 25px;
            display: none;
            min-height: 300px;
        }

        .tab-content.active {
            display: block;
        }

        /* Mobile-responsive table */
        .table-container {
            overflow-x: auto;
            background: white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 600px;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #dee2e6;
        }

        th {
            background: #f8f9fa;
            font-weight: 600;
            color: #495057;
        }

        tr:hover {
            background: #f8f9fa;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .card h3 {
            color: #333;
            margin-bottom: 15px;
            font-size: 1.25rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }

        .stat-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .stat-number {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
            margin-bottom: 5px;
        }

        .stat-label {
            color: #6c757d;
            font-size: 0.9rem;
        }

        /* Mobile-first responsive design */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }

            .header {
                padding: 15px;
                text-align: center;
            }

            .header h1 {
                font-size: 1.5rem;
            }

            .tabs {
                flex-direction: column;
            }

            .tab {
                padding: 12px 15px;
                border-bottom: 1px solid #dee2e6;
                text-align: left;
            }

            .tab.active::after {
                height: 3px;
                left: 0;
                width: 4px;
                height: 100%;
                bottom: auto;
                top: 0;
            }

            .tab-content {
                padding: 20px 15px;
            }

            .stats-grid {
                grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
                gap: 15px;
            }

            .stat-card {
                padding: 15px;
            }

            .stat-number {
                font-size: 1.5rem;
            }

            /* Mobile table optimization */
            .table-container {
                border-radius: 8px;
                margin: 0 -15px;
            }

            table {
                min-width: auto;
            }

            th, td {
                padding: 8px 6px;
                font-size: 0.9rem;
            }

            /* Stack table cells on very small screens */
            @media (max-width: 480px) {
                table, thead, tbody, th, td, tr {
                    display: block;
                }

                thead tr {
                    position: absolute;
                    top: -9999px;
                    left: -9999px;
                }

                tr {
                    border: 1px solid #ccc;
                    margin-bottom: 10px;
                    padding: 10px;
                    border-radius: 8px;
                    background: white;
                }

                td {
                    border: none;
                    position: relative;
                    padding-left: 50%;
                    padding-top: 10px;
                    padding-bottom: 10px;
                }

                td:before {
                    content: attr(data-label) ": ";
                    position: absolute;
                    left: 6px;
                    width: 45%;
                    padding-right: 10px;
                    white-space: nowrap;
                    font-weight: bold;
                    color: #333;
                }
            }
        }

        @media (max-width: 480px) {
            .container {
                padding: 5px;
            }

            .header {
                padding: 10px;
                margin-bottom: 15px;
            }

            .card {
                padding: 15px;
                margin-bottom: 15px;
            }

            .tabs-container {
                margin-bottom: 15px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Dashboard</h1>
            <p>Welcome to your mobile-friendly dashboard</p>
        </div>

        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">1,234</div>
                <div class="stat-label">Total Users</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">5,678</div>
                <div class="stat-label">Total Orders</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">$12,345</div>
                <div class="stat-label">Revenue</div>
            </div>
        </div>

        <div class="tabs-container">
            <div class="tabs">
                <button class="tab active" onclick="openTab(event, 'overview')">Overview</button>
                <button class="tab" onclick="openTab(event, 'reports')">Reports</button>
                <button class="tab" onclick="openTab(event, 'users')">Users</button>
                <button class="tab" onclick="openTab(event, 'settings')">Settings</button>
            </div>

            <div id="overview" class="tab-content active">
                <h3>Overview</h3>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td data-label="ID">001</td>
                                <td data-label="Name">John Smith</td>
                                <td data-label="Status">Active</td>
                                <td data-label="Date">2024-01-15</td>
                                <td data-label="Amount">$125.00</td>
                            </tr>
                            <tr>
                                <td data-label="ID">002</td>
                                <td data-label="Name">Jane Doe</td>
                                <td data-label="Status">Pending</td>
                                <td data-label="Date">2024-01-14</td>
                                <td data-label="Amount">$250.00</td>
                            </tr>
                            <tr>
                                <td data-label="ID">003</td>
                                <td data-label="Name">Mike Johnson</td>
                                <td data-label="Status">Completed</td>
                                <td data-label="Date">2024-01-13</td>
                                <td data-label="Amount">$75.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="reports" class="tab-content">
                <h3>Reports</h3>
                <div class="card">
                    <p>Monthly reports and analytics will be displayed here. The mobile layout ensures optimal viewing across all devices.</p>
                </div>
            </div>

            <div id="users" class="tab-content">
                <h3>User Management</h3>
                <div class="card">
                    <p>User management interface with mobile-friendly controls and responsive design.</p>
                </div>
            </div>

            <div id="settings" class="tab-content">
                <h3>Settings</h3>
                <div class="card">
                    <p>Application settings and configuration options optimized for mobile interaction.</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function openTab(evt, tabName) {
            var i, tabcontent, tabs;
            
            // Hide all tab content
            tabcontent = document.getElementsByClassName("tab-content");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].classList.remove("active");
            }
            
            // Remove active class from all tabs
            tabs = document.getElementsByClassName("tab");
            for (i = 0; i < tabs.length; i++) {
                tabs[i].classList.remove("active");
            }
            
            // Show selected tab content and mark tab as active
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }
    </script>
</body>
</html>