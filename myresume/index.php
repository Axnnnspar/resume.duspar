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
                <h1>Andrea Duspar</h1>
                <div class="contact-info">
                    <p>Email: <a href="mailto:dusparandrea9@gmail.com">dusparandrea9@gmail.com</a></p>
                    <p>Phone: +63 (985) 157-0923</p>
                    <p>Facebok: <a href="https://web.facebook.com/andrea.duspar.1" target="_blank">web.facebook.com/andrea.duspar.1</a></p>
                    <p>GitHub: <a href="https://github.com/Axnnnspar" target="_blank">github.com/Axnnnspar</a></p>
                </div>
            </div>
            <!-- Profile Image -->
            <img src= "dpresume.jpg" alt="andrea's profile" >
        </div>

        <!-- Two-column layout -->
        <div class="columns">
            <!-- Left Column -->
            <div class="left-column">
                <!-- Skills -->
                <div class="section">
                    <h2>Skills</h2>
                    <div class="skills-list">
                        <span>JavaScript</span>
                        <span>React</span>
                        <span>Node.js</span>
                        <span>Python</span>
                        <span>SQL</span>
                        <span>Git</span>
                        <span>Agile Methodologies</span>
                        <span>UI/UX Design</span>
                    </div>
                </div>

                <!-- Education -->
                <div class="section">
                    <h2>Education</h2>
                    <p><strong>Bachelor of Science in Information Technology</strong></p>
                    <p>Guimaras State University (2022 - 2026)</p>
                    <p><strong>General Academic Strand</strong></p>
                    <p>Buenavista National High School(2020 - 2022)</p>
                </div>
            </div>

            <!-- Right Column -->
            <div class="right-column">
                <!-- Experience -->
                <div class="section">
                    <h2>Experience</h2>
                    <div class="experience">
                        <h3>Frontend Developer</h3>
                        <p class="duration">Microsoft Corporation, Inc. | 2026 - Present</p>
                        <ul>
                            <li>Developed responsive web applications using React and Node.js.</li>
                            <li>Collaborated with designers to implement UI/UX best practices.</li>
                            <li>Optimized application performance for faster load times.</li>
                        </ul>
                    </div>
                    <div class="experience">
                        <h3>Software Engineer Intern</h3>
                        <p class="duration">Icreatech Company| 2025 - 2026</p>
                        <ul>
                            <li>Assisted in building RESTful APIs using Python and Flask.</li>
                            <li>Participated in code reviews and team meetings.</li>
                            <li>Debugged and fixed issues in existing codebase.</li>
                        </ul>
                    </div>
                </div>

                <!-- Projects -->
                <div class="section">
                    <h2>Projects</h2>
                    <div class="project">
                        <h3>E-commerce Platform</h3>
                        <p>Built a full-stack e-commerce platform with user authentication and payment integration.</p>
                        <p class="technologies">Technologies: React, Node.js, MongoDB, Stripe API</p>
                    </div>
                    <div class="project">
                        <h3>Task Management App</h3>
                        <p>Developed a task management app with real-time collaboration features.</p>
                        <p class="technologies">Technologies: React, Firebase, Material-UI</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>