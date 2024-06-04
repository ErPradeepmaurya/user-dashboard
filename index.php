<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <div class="sidebar">
                    <h1>Dashboard</h1>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active text-light" href="index.php">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">User</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="#">setting</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-9">
                <div class="top-header">
                    <h2 class="text-center">Welcome to your Dashboard</h2>
                </div>
                <div class="dashboard-content mt-5" id="dashboard-content">
                    <button class="btn btn-primary mt-4" onclick="toggleContainers()">Show / Hide</button>
                    <div class="row mt-5">
                        <div class="col-sm-5 card bg-danger mt-3" id="container1">
                            <p id="content1">Lorem ipsum dolor sit amet consectetur.</p>
                            <i class="fas fa-edit edit-icon" onclick="editContent('content8')"></i>
                        </div>
                        <div class="col-sm-5 card bg-success mt-3" id="container2">
                            <p id="content2">Lorem ipsum dolor sit amet consectetur.</p>
                            <i class="fas fa-edit edit-icon" onclick="editContent('content8')"></i>
                        </div>
                        <div class="col-sm-5 card bg-primary mt-3" id="container3">
                            <p id="content3">Lorem ipsum dolor sit amet consectetur.</p>
                            <i class="fas fa-edit edit-icon" onclick="editContent('content8')"></i>
                        </div>
                        <div class="col-sm-5 card bg-warning mt-3" id="container4">
                            <p id="content4">Lorem ipsum dolor sit amet consectetur.</p>
                            <i class="fas fa-edit edit-icon" onclick="editContent('content8')"></i>
                        </div>
                        <div class="col-sm-5 card bg-danger mt-3" id="container5">
                            <p id="content5">Lorem ipsum dolor sit amet consectetur.</p>
                            <i class="fas fa-edit edit-icon" onclick="editContent('content8')"></i>
                        </div>
                        <div class="col-sm-5 card bg-success mt-3" id="container6">
                            <p id="content6">Lorem ipsum dolor sit amet consectetur.</p>
                            <i class="fas fa-edit edit-icon" onclick="editContent('content8')"></i>
                        </div>
                        <div class="col-sm-5 card bg-primary mt-3" id="container7">
                            <p id="content7">Lorem ipsum dolor sit amet consectetur.</p>
                            <i class="fas fa-edit edit-icon" onclick="editContent('content8')"></i>
                        </div>
                        <div class="col-sm-5 card bg-warning mt-3" id="container8">
                            <p id="content8">Lorem ipsum dolor sit amet consectetur.</p>
                            <i class="fas fa-edit edit-icon" onclick="editContent('content8')"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $(function() {
            $(".card").draggable({
                cursor: "move"
            });
        });


        function toggleContainers() {
            var containers = document.querySelectorAll('.card');
            containers.forEach(function(container) {
                container.style.display = (container.style.display === 'none' || container.style.display === '') ? 'block' : 'none';
            });
        }

        function updateContent(containerId, newText) {
            var container = document.getElementById(containerId);
            if (container) {
                var paragraph = container.querySelector('p');
                if (paragraph) {
                    paragraph.textContent = newText;
                } else {
                    console.error('Paragraph not found in container:', containerId);
                }
            } else {
                console.error('Container not found:', containerId);
            }
        }

        function editContent(contentId) {
            var paragraph = document.getElementById(contentId);
            if (paragraph) {
                var newText = prompt("Enter new text:");
                if (newText !== null) { // Check if user canceled prompt
                    paragraph.textContent = newText;
                }
            } else {
                console.error('Paragraph not found:', contentId);
            }
        }
    </script>
</body>

</html>