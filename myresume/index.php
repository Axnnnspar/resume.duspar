<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Andrea Duspar - Resume</title>
    <style>
        /* General Styles */
      

        .resume-container {
            max-width: 800px;
            margin: 20px auto;
            background: #fffbff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2, h3 {
            color: #2c3e50;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 10px;
        }

        h2 {
            font-size: 1.8em;
            margin-bottom: 10px;
            border-bottom: 2px solid #2c3e50;
            padding-bottom: 5px;
            margin-left: 10px;

        }

        h3 {
            font-size: 1.4em;
            margin-bottom: 5px;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Header Section */
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            border: 3px solid #2c3e50;
            object-fit: cover;
            margin-right: 50px;
        }

        /* Contact Info */
        .contact-info {
            margin-bottom: 20px;
        }

        .contact-info p {
            margin: 5px 0;
            font-size: 1.1em;
        }

        /* Two-column layout */
        .columns {
            display: flex;
            gap: 20px;
        }

        .left-column {
            flex: 1;
        }

        .right-column {
            flex: 2;
        }

        /* Sections */
        .section {
            margin-bottom: 30px !important;
        }

        .section ul {
            list-style-type: disc;
            margin-left: 15px !important;
            margin-right: 10px;
        }

        .section ul li {
            margin-bottom: 10px !important;
            margin-right: 50px;

        }

        /* Skills */
        .skills-list {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .skills-list span {
            background-color: #3498db;
            color: #fff;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 0.9em;
        }

        /* Experience and Projects */
        .experience, .project {
            margin-bottom: 20px;
            margin-left: 15px;
        }

        .experience h3, .project h3 {
            margin-bottom: 5px;
            margin-left: 15px;
        }

        .experience p, .project p {
            margin: 5px 0;
            margin-left: 15px;
        }

        .experience .duration, .project .technologies {
            font-style: italic;
            color: #7f8c8d;
        }
    </style>
</head>
<body>

    <div class="resume-container">
        <!-- Header -->
        <div class="header">
            <div>
<?php
    $name = "Andrea Duspar";
    $email = "dusparandrea9@gmail.com";
    $phone = "+63 (985) 157-0923";
    $facebook = "https://web.facebook.com/andrea.duspar.1";
    $github = "https://github.com/Axnnnspar";
    $profileImage = "dpresume.jpg";
    
    $skills = ["JavaScript", "React", "Node.js", "Python", "SQL", "Git", "Agile Methodologies", "UI/UX Design"];
    
    $education = [
        ["degree" => "Bachelor of Science in Information Technology", "school" => "Guimaras State University", "year" => "2022 - 2026"],
        ["degree" => "General Academic Strand", "school" => "Buenavista National High School", "year" => "2020 - 2022"]
    ];
    
    $experience = [
        [
            "position" => "Frontend Developer",
            "company" => "Microsoft Corporation, Inc.",
            "year" => "2026 - Present",
            "tasks" => [
                "Developed responsive web applications using React and Node.js.",
                "Collaborated with designers to implement UI/UX best practices.",
                "Optimized application performance for faster load times."
            ]
        ],
        [
            "position" => "Software Engineer Intern",
            "company" => "Icreatech Company",
            "year" => "2025 - 2026",
            "tasks" => [
                "Assisted in building RESTful APIs using Python and Flask.",
                "Participated in code reviews and team meetings.",
                "Debugged and fixed issues in existing codebase."
            ]
        ]
    ];
    
    $projects = [
        [
            "name" => "E-commerce Platform",
            "description" => "Built a full-stack e-commerce platform with user authentication and payment integration.",
            "technologies" => "React, Node.js, MongoDB, Stripe API"
        ],
        [
            "name" => "Task Management App",
            "description" => "Developed a task management app with real-time collaboration features.",
            "technologies" => "React, Firebase, Material-UI"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">s
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> - Resume</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="resume-container">
        <div class="header">
            <div>
                <h1><?php echo $name; ?></h1>
                <div class="contact-info">
                    <p>Email: <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
                    <p>Phone: <?php echo $phone; ?></p>
                    <p>Facebook: <a href="<?php echo $facebook; ?>" target="_blank">Facebook Profile</a></p>
                    <p>GitHub: <a href="<?php echo $github; ?>" target="_blank">GitHub Profile</a></p>
                </div>
            </div>
            <img src="<?php echo $profileImage; ?>" alt="Profile Picture">
        </div>

        <div class="columns">
            <div class="left-column">
                <div class="section">
                    <h2>Skills</h2>
                    <div class="skills-list">
                        <?php foreach ($skills as $skill) { echo "<span>$skill</span>"; } ?>
                    </div>
                </div>
                
                <div class="section">
                    <h2>Education</h2>
                    <?php foreach ($education as $edu) { ?>
                        <p><strong><?php echo $edu["degree"]; ?></strong></p>
                        <p><?php echo $edu["school"] . " (" . $edu["year"] . ")"; ?></p>
                    <?php } ?>
                </div>
            </div>
            
            <div class="right-column">
                <div class="section">
                    <h2>Experience</h2>
                    <?php foreach ($experience as $exp) { ?>
                        <div class="experience">
                            <h3><?php echo $exp["position"]; ?></h3>
                            <p class="duration"><?php echo $exp["company"] . " | " . $exp["year"]; ?></p>
                            <ul>
                                <?php foreach ($exp["tasks"] as $task) { echo "<li>$task</li>"; } ?>
                            </ul>
                        </div>
                    <?php } ?>
                </div>

                <div class="section">
                    <h2>Projects</h2>
                    <?php foreach ($projects as $project) { ?>
                        <div class="project">
                            <h3><?php echo $project["name"]; ?></h3>
                            <p><?php echo $project["description"]; ?></p>
                            <p class="technologies">Technologies: <?php echo $project["technologies"]; ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

</body>
</html>
